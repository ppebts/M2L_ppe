<?php

namespace PPE\M2LBundle\Controller;
use PPE\M2LBundle\Entity\actualite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:actualite");
        $actualiteList = $repo->findAll();
        return $this->render('PPEM2LBundle:Default:index.html.twig', array("actualiteList"=>$actualiteList));
    }

}
