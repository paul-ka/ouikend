<?php

namespace OuikendBundle\Controller;

use OuikendBundle\Entity\Trips;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('OuikendBundle:Default:index.html.twig');
    }

   
}