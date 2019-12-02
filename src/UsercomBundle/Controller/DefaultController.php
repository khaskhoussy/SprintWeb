<?php

namespace UsercomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UsercomBundle:Default:index.html.twig');
    }
}
