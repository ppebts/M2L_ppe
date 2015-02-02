<?php

namespace PPE\M2LBundle\Controller;
use PPE\M2LBundle\Entity\Actualite;
use PPE\M2LBundle\Entity\Information;
use PPE\M2LBundle\Entity\Utilisateur;
use PPE\M2LBundle\Entity\SosPartenaire;
use PPE\M2LBundle\Entity\Sport;
use PPE\M2LBundle\Entity\TypeUtilisateur;
use PPE\M2LBundle\Entity\Formation;
use PPE\M2LBundle\Entity\Ligue;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Actualite");
        $actualiteList = $repo->findAll();
        return $this->render('PPEM2LBundle:Default:index.html.twig', array("actualiteList"=>$actualiteList));
    }

public function informationAction()
    {
    	$doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Information");
        $infoList = $repo->findAll();
        return $this->render('PPEM2LBundle:Default:information.html.twig', array("infoList"=>$infoList));
    }

public function formationAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Formation");
        $formationList = $repo->findAll();
        return $this->render('PPEM2LBundle:Default:formation.html.twig', array("formationList"=>$formationList));
    }

public function ligueAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Ligue");
        $ligueList = $repo->findAll();
        return $this->render('PPEM2LBundle:Default:ligue.html.twig', array("ligueList"=>$ligueList));
    }

public function contactAction()
    {
        return $this->render('PPEM2LBundle:Default:contact.html.twig', array());
    } 
/* public function connexionAction()
    {
        return $this->render('PPEM2LBundle:Default:connexion.html.twig', array());
    }  
public function inscriptionAction()
    {
        return $this->render('PPEM2LBundle:Default:inscription.html.twig', array());
    }  */
public function accountAction()
    {
        return $this->render('PPEM2LBundle:Default:account.html.twig', array());
    }  
public function reservationsAction()
    {
        return $this->render('PPEM2LBundle:Reservations:reservation.html.php', array());
    }  
}
