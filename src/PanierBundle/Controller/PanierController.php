<?php


namespace PanierBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierController extends Controller
{
    public function indexAction(SessionInterface $session)
    {
        $em = $this->getDoctrine()->getManager();

        if(!$session->has('panier')) $session->set('panier',new \ArrayObject());
        $panier = $session->get('panier');

        return $this->render('@Panier/index.html.twig', array(
            'panier' => $panier->getArrayCopy()
        ));
    }
}