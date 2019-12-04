<?php


namespace PanierBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
        die(strval($ligneServices->offsetGet(0)->getIduser()->getId()));
        $ligneCommandes = $session->get('ligneCommandes');
        $packs = $session->get('packs');

        return $this->render('@Panier/index.html.twig', array(
            'ligneServices' => $ligneServices,
            'ligneCommandes' => $ligneCommandes,
            'packs' => $packs->getArrayCopy()
        ));
    }
}