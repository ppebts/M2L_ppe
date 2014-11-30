<?php

namespace PPE\M2LBundle\Controller;
use PPE\M2LBundle\Entity\actualite;
use PPE\M2LBundle\Entity\information;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;

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

public function informationAction()
    {
    	$doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:information");
        $infoList = $repo->findAll();
        return $this->render('PPEM2LBundle:Default:information.html.twig', array("infoList"=>$infoList));
    }

public function annonceAction()
    {
        return $this->render('PPEM2LBundle:Default:annonce.html.twig', array());
    }

public function formationAction()
    {
        return $this->render('PPEM2LBundle:Default:formation.html.twig', array());
    }

public function ligueAction()
    {
        return $this->render('PPEM2LBundle:Default:ligue.html.twig', array());
    }    
public function contactAction()
    {
        return $this->render('PPEM2LBundle:Default:contact.html.twig', array());
    }  
}
