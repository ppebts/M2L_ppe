<?php

namespace PPE\M2LBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PPEM2LBundle:Default:index.html.twig', array());
    }
}
