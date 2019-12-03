<?php

namespace ProductBundle\Controller;

use BddBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $u = $this->container->get('security.token_storage')->getToken()->getUser();
        switch ($u->getRoles()[0]){
            case "ROLE_ADMIN":return $this->redirect('back/admin');break;
            case "ROLE_EXPERT":return $this->redirect('back/expert');break;
            case "ROLE_JARDINIER":return $this->redirect('back/jardinier');break;
        }

        return $this->render('BddBundle:Default:index.html.twig');
    }

    public function adminAction()
    {
        return $this->render('BddBundle:Default:admininterface.html.twig');
    }

    public function expertAction()
    {
        return $this->render('@Bdd/Default/expertinterface.html.twig');
    }
    public function jardinierAction()
    {
        return $this->render('BddBundle:Default:jardnierinterface.html.twig');
    }
}
