<?php

namespace GesteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GesteBundle:Default:index.html.twig');
    }
}
