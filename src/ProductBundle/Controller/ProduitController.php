<?php

namespace ProductBundle\Controller;

use BddBundle\BddBundle;
use ClubBundle\Entity\formation;
use BddBundle\Entity\Categorie;
use BddBundle\Entity\OffrePromotion;
use BddBundle\Entity\Produit;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Produit controller.
 *
 */
class ProduitController extends Controller
{
    /**
     * Lists all produit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $produits = $em->getRepository('BddBundle:Produit')->findAll();

        return $this->render('@Product/produit/index.html.twig', array(
            'produits' => $produits,
        ));
    }


    /**
     * Creates a new produit entity.
     *
     */
    public function newAction(Request $request)
    {
        $produit = new Produit();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm('ProductBundle\Form\ProduitType', $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $produit->uploadProfilePicture();

            $em->persist($produit);
            $em->flush();

            return $this->redirectToRoute('produit_index', array('id' => $produit->getId()));

        }

        return $this->render('@Product/produit/new.html.twig', array(
            'produit' => $produit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a produit entity.
     *
     */
    public function showAction(Produit $produit)
    {


        return $this->render('@Product/produit/show.html.twig', array(
            'produit' => $produit,

        ));
    }

    /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function editAction(Request $request, Produit $produit)
    {

        $editForm = $this->createForm('ProductBundle\Form\ProduitType', $produit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('produit_edit', array('id' => $produit->getId()));
        }

        return $this->render('@Product/produit/edit.html.twig', array(
            'produit' => $produit,
            'edit_form' => $editForm->createView(),

        ));
    }

    /**
     * Deletes a produit entity.
     *
     */

    /**
     * Creates a form to delete a produit entity.
     *
     * @param Produit $produit The produit entity
     *
     * @return \Symfony\Component\Form\FormInterface
     */
  //  private function createDeleteForm(Produit $produit)
    //{
      //  return $this->createFormBuilder()
        //    ->setAction($this->generateUrl('produit_delete', array('id' => $produit->getId())))
          //  ->setMethod('DELETE')
            //->getForm();
    //}

    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('BddBundle:Produit')->findAll();
        return $this->render('@Product/Default/affiche.html.twig', array(
            'produits' => $produits
        ));
    }



    public function detailAction(Produit $produit)
    {
        return $this->render('@Product/Default/detail.html.twig', array(
            'produit' => $produit

        ));
    }

    public function rechercheAction(Request $request)
    {

        $em = $this->container->get('doctrine')->getEntityManager();

        $produits = $em->getRepository('BddBundle:Produit')->findAll();

        if ($request->getMethod("POST")) {

            $motcle = $request->get('input_recherche');
            $query = $em->createQuery(
                "SELECT p FROM BddBundle:Produit p Join BddBundle:Categorie c WITH p.categorie=c AND c.nomCat LIKE '" . $motcle . "%'"
            );
            $produits = $query->getResult();

            return $this->render('@Product/produit/index.html.twig',
                array(
                    'produits' => $produits
                ));
        }

        return $this->render('@Product/produit/index.html.twig',
            array(
                'produits' => $produits
            ));


    }
    public function rechercherAction(Request $request)
    {

        $em = $this->container->get('doctrine')->getEntityManager();

        $produits = $em->getRepository('BddBundle:Produit')->findAll();


        if (!$request->isXmlHttpRequest()) {

             // POST ?
            if ($request->getMethod() == "POST") {

                $produits = $this->getProdByCat($em, $request);


            }

            return $this->render('@Product/Default/affiche.html.twig',
                array(
                    'produits' => $produits
                ));
        } else {
            $produits = $this->getProdByCat($em, $request);
            if (sizeof($produits)) {
                $normalizer = new ObjectNormalizer();
                $normalizer->setCircularReferenceLimit(1);


                $normalizer->setCircularReferenceHandler(function ($object) {
                    if ($object instanceof  OffrePromotion)
                        return $object->getId();
                    if ($object instanceof  Categorie)
                    return $object->getId();

                });

                $serializer = new Serializer(array(new DateTimeNormalizer(), $normalizer));
                $data = $serializer->normalize($produits, null,  ['attributes' =>
                    ["id", "nomProd", "prixProd", "prodDescription", "quantite", "image", "prixOffre", "categorie", "idoffre"]]);
                return new JsonResponse($data);
        } else {
                return new JsonResponse(0);
            }


        }

    }

    private function getProdByCat(EntityManager $em, Request $request) {
        $produit = null;
        $motcle = $request->get('testrech');
        $query = $em->createQuery(
            "SELECT p FROM BddBundle:Produit p Join BddBundle:Categorie c WITH p.categorie=c AND c.nomCat LIKE '" . $motcle . "%'"
        );
        $produits = $query->getResult();
        return $produits;
    }


public function deleteProdAction(Produit $produit){
        $produit=$this->getDoctrine()->getRepository(Produit::class)->find($produit);
        $em=$this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute("produit_index");
}

}
