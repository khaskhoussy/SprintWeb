<?php


namespace PanierBundle\Controller;


use BddBundle\Entity\Commande;
use BddBundle\Entity\LigneCommande;
use BddBundle\Entity\LigneService;
use BddBundle\Entity\PackDecoration;
use BddBundle\Entity\Produit;
use BddBundle\Entity\User;
use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierController extends Controller
{
    public function indexAction(SessionInterface $session)
    {
        $em = $this->getDoctrine()->getManager();

        if(!$session->has('ligneServices')) $session->set('ligneServices',new \ArrayObject());
        if(!$session->has('ligneCommandes')) $session->set('ligneCommandes',new \ArrayObject());
        if(!$session->has('packs')) $session->set('packs',new \ArrayObject());

        $ligneServices = $session->get('ligneServices');
        foreach ($ligneServices as $ligneService) {
            $user = $em->getRepository(User::class)->find($ligneService->getIduser()->getId());
            $ligneService->setIduser($user);
        }
        $ligneCommandes = $session->get('ligneCommandes');
        $packs = $session->get('packs');

        return $this->render('@Panier/index.html.twig', array(
            'ligneServices' => $ligneServices,
            'ligneCommandes' => $ligneCommandes,
            'packs' => $packs->getArrayCopy()
        ));
    }

    public function viderPanierAction(Request $request,SessionInterface $session) {
        if($request->isMethod('POST') && $request->request->has('vider')) {
            $session->set('ligneServices',new \ArrayObject());
            $session->set('ligneCommandes',new \ArrayObject());
            $session->set('packs',new \ArrayObject());
        }
        return $this->redirectToRoute('panier_homepage');
    }

    public function validerPanierAction(Request $request,SessionInterface $session) {
        if($request->isMethod('POST') && $request->request->has('valider')) {
            $em = $this->getDoctrine()->getManager();
            $ligneServices = $session->get('ligneServices');
            $ligneCommandes = $session->get('ligneCommandes');
            $packs = $session->get('packs');

            foreach ($ligneCommandes as $ligneCommande) {
                $produit = $em->getRepository(Produit::class)->find($ligneCommande->getIdproduit()->getId());
                if($ligneCommande->getQte() > $produit->getQuantite()) return new Response("erreur");
            }
            foreach ($packs as $objetPack) {
                $pack = $em->getRepository(PackDecoration::class)->find($objetPack->pack->getId());
                foreach ($pack->getLignePacks() as $lignePack) {
                    $produit = $em->getRepository(Produit::class)->find($lignePack->getIdproduit()->getId());
                    if($lignePack->getQuantitePack() * $objetPack->qte > $produit->getQuantite()) return new Response("erreur");
                }
            }

            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $commande = new Commande();
            $commande->setIduser($user);
            $date = new \DateTime();
            $commande->setDateValidation($date->format('Y:m:s H:i'));
            $em->persist($commande);
            $totale = 0.0 ;
            foreach ($ligneCommandes as $ligneCommande) {
                $produit = $em->getRepository(Produit::class)->find($ligneCommande->getIdproduit()->getId());
                $ligneCommande->setIdcommande($commande);
                $ligneCommande->setIdproduit($produit);
                if($produit->getIdoffre() == null) $totale+= $produit->getPrixProd() * $ligneCommande->getQte();
                else $totale+= $produit->getPrixOffre() * $ligneCommande->getQte();

                $em->persist($ligneCommande);
            }

            foreach ($packs as $objetPack) {
                $pack = $em->getRepository(PackDecoration::class)->find($objetPack->pack->getId());
                foreach ($pack->getLignePacks() as $lignePack) {
                    $produit = $em->getRepository(Produit::class)->find($lignePack->getIdproduit()->getId());
                    $ligneCommande = new LigneCommande();
                    $ligneCommande->setIdproduit($produit);
                    $ligneCommande->setIdcommande($commande);
                    $ligneCommande->setQte($lignePack->getQuantitePack() * $objetPack->qte);
                    $totale+= $produit->getPrixProd() * $ligneCommande->getQte() * $objetPack->qte;
                    $em->persist($ligneCommande);
                }
            }

            foreach ($ligneServices as $ligneService) {
                $user = $em->getRepository(User::class)->find($ligneService->getIduser()->getId());
                $ligneService->setIduser($user);
                $ligneService->setIdcommande($commande);
                $totale+= $ligneService->getPrix() ;
                $em->persist($ligneService);
            }
            $commande->setPrixTotal($totale);
            $em->flush();
            $session->set('ligneServices',new \ArrayObject());
            $session->set('ligneCommandes',new \ArrayObject());
            $session->set('packs',new \ArrayObject());
        }
        return $this->redirectToRoute('panier_homepage');
    }

    public function ajouterPanierProduitAction(Request $request,SessionInterface $session) {
        if($request->isMethod('POST') && $request->request->has('addproduit')) {
            $em = $this->getDoctrine()->getManager();
            $produit = $em->getRepository(Produit::class)->find($request->request->get('idproduit'));
            $qte = $request->request->get('qte') ;
            $ligneCommande = new LigneCommande();
            $ligneCommande->setIdproduit($produit);
            $ligneCommande->setQte($qte);
            if(!$session->has('ligneCommandes')) $session->set('ligneCommandes',new \ArrayObject());
            $ligneCommandes = $session->get('ligneCommandes');
            $ligneCommandes->append($ligneCommande);
        }
        return $this->redirectToRoute('affiche');
    }

    public function ajouterPanierPackAction(Request $request,SessionInterface $session) {
        if($request->isMethod('POST') && $request->request->has('addpack')) {
            $em = $this->getDoctrine()->getManager();
            $pack = $em->getRepository(PackDecoration::class)->find($request->request->get('idpack'));
            $qte = $request->request->get('qte') ;
            $objetPack = new stdClass();
            $objetPack->qte = $qte ;
            $objetPack->pack = $pack;
            if(!$session->has('packs')) $session->set('packs',new \ArrayObject());
            $packs = $session->get('packs');
            $packs->append($objetPack);
        }
        return $this->redirectToRoute('_index');
    }
}