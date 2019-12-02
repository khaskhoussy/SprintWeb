<?php

namespace PackFrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PackFrontBundle:Default:index.html.twig');
    }
}
