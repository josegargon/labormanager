<?php

namespace labormanager\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontendBundle:Commons:home.html.twig');
    }
}
