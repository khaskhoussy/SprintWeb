<?php

namespace GesteFrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GesteFrontBundle:Default:index.html.twig');
    }
}
