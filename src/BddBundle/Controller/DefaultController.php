<?php

namespace BddBundle\Controller;

use BddBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class DefaultController extends Controller
{
    public function indexAction(SessionInterface $session)
    {
        $u = $this->container->get('security.token_storage')->getToken()->getUser();
        if($u === 'anon.') return $this->redirect('login');
        switch ($u->getRoles()[0]){
            case "ROLE_ADMIN":return $this->redirect('back/admin');break;
            case "ROLE_EXPERT":return $this->redirect('back/expert');break;
            case "ROLE_JARDINIER":return $this->redirect('back/jardinier');break;
            case "ROLE_PAYSAGISTE":return $this->redirect(' back/paysagiste');break;
            case "ROLE_CLIENT":return $this->redirect('front/home');break;

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
    public function paysagisteAction()
    {
        return $this->render('BddBundle:Default:paysagisteinterface.html.twig');
    }
    public function clientAction()
    {
        return $this->render('BddBundle:Default:clientinterface.html.twig');
    }

}
