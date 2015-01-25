<?php

namespace PPE\M2LBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PPE\M2LBundle\Entity\Annonce;
use PPE\UserBundle\Entity\User;
use PPE\M2LBundle\Form\Type\AnnonceType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;

class AnnonceController extends Controller
{

public function afficherAction(Request $request)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Annonce");
        $annonceList = $repo->findAll();

        $annonce = new Annonce();
        
        $form = $this->get('form.factory')->create(new AnnonceType(),$annonce);

        $form->handleRequest($request);
        if ( $form->isValid()){
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $em->persist($annonce);
            $em->flush();
            return $this->redirect($this->generateUrl('ppe_m2l_annonces', array('id'=> $annonce->getId())));
          }
        

            // À ce stade :
            // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
            // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('PPEM2LBundle:Annonce:annonce.html.twig', array("form"=> $form->createView(), "annonceList"=>$annonceList));
    }
}