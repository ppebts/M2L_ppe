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
use PPE\M2LBundle\Entity\Image;
use PPE\UserBundle\Entity\User;
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
        return $this->render('PPEM2LBundle:Default:index.html.twig', array("actualiteList"=>$actualiteList, ));
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
        $img = $em->getRepository("PPEM2LBundle:Image")->findAll();
        $date = new \Datetime();
        return $this->render('PPEM2LBundle:Default:formation.html.twig', array("formationList"=>$formationList, "image"=>$img, 'date'=>$date));
    }

public function inscriptionFormationAction($id)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $userId = $user->getId();

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEUserBundle:User");
        $user = $repo->find($userId);



        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Formation");
        $formation = $repo->find($id);

        $nbOld = $formation->getNbinscrits();
        $nb = $nbOld + 1;
        $formation->setNbinscrits($nb);
        $formation->addUtilisateur($user);

        $em->persist($formation);
        $em->flush();

        return $this->redirect($this->generateUrl('ppe_m2l_formations', array()));
    }

public function desinscriptionFormationAction($id)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $userId = $user->getId();

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEUserBundle:User");
        $user = $repo->find($userId);

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Formation");
        $formation = $repo->find($id);

        $nbOld = $formation->getNbinscrits();
        $nb = $nbOld - 1;
        $formation->setNbinscrits($nb);
        $formation->removeUtilisateur($user);

        $em->persist($formation);
        $em->flush();

        return $this->redirect($this->generateUrl('ppe_m2l_formations', array()));
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
}
