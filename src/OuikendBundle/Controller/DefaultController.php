<?php

namespace OuikendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OuikendBundle:Default:index.html.twig');
    }
}
