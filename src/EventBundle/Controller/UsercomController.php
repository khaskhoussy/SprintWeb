<?php


namespace EventBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsercomController extends Controller
{


    public function listuserAction()
    {
        $em = $this->getDoctrine()->getManager();

        $evenements = $em->getRepository('BddBundle:Evenement')->findAll();

        return $this->render('@Event/evenement/voir.html.twig', array(
            'evenements' => $evenements,
        ));
    }

}