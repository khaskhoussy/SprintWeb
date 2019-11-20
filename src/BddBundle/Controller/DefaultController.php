<?php

namespace BddBundle\Controller;

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
        }

        return $this->render('BddBundle:Default:index.html.twig');
    }

    public function adminAction()
    {
        return $this->render('BddBundle:Default:index1.html.twig');
    }

    public function expertAction()
    {
        return $this->render('BddBundle:Default:index2.html.twig');
    }
}
