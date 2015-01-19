<?php

namespace PPE\M2LBundle\Controller;
use PPE\M2LBundle\Entity\Information;
use PPE\M2LBundle\Form\Type\InformationType;
use PPE\M2LBundle\Form\Type\InformationsType;
use PPE\M2LBundle\Entity\Annonce;
use PPE\M2LBundle\Form\Type\AnnonceType;
use PPE\M2LBundle\Form\Type\AnnoncesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{


public function getinformationsAction()
     {
        /* Récupère toutes les informations */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Information");
        $infoList = $repo->findAll();


         return $this->render('PPEM2LBundle:Information:listeinfo.html.twig', array("infoList"=>$infoList));
     }
public function addinformationAction(Request $request)
    {
        $information = new Information();
        
        $form = $this->get('form.factory')->create(new InformationType(),$information);
        $form->handleRequest($request);
        if ( $form->isValid()){
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $em->persist($information);
            $em->flush();
        }
        return $this->render('PPEM2LBundle:Information:information.html.twig', array("form"=>$form->createView(),));
    }

public function editinformationAction($id,Request $request)
     {
        /* Récupère l'information */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Information");
        $information = $repo->find($id);

        /* $information renseigné donc formulaire renseigné */

        $form = $this->get('form.factory')->create(new InformationsType(),$information);
        $form->handleRequest($request);  

        /* Vérification du formulaire */

        if ( $form->isValid()){
                $doctrine = $this->getDoctrine();
                $em = $doctrine->getManager();
                $em->persist($information);
                $em->flush();
                return $this->redirect($this->generateUrl('ppe_m2l_back_info', array('id'=> $information->getId())));

        }        
         return $this->render('PPEM2LBundle:Information:editinfo.html.twig', array('form'=>$form->createView()));
     
    }
public function getannoncesAction()
     {
        /* Récupère toutes les annonces */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Annonce");
        $annonceList = $repo->findAll();


         return $this->render('PPEM2LBundle:Annonce:listeannonce.html.twig', array("annonceList"=>$annonceList));
     }

public function addannonceAction(Request $request)
    {
        $annonce = new Annonce();
        
        $form = $this->get('form.factory')->create(new AnnonceType(),$annonce);
        $form->handleRequest($request);
        if ( $form->isValid()){
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $em->persist($annonce);
            $em->flush();
        }
        return $this->render('PPEM2LBundle:Annonce:addannonce.html.twig', array("form"=>$form->createView(),));
    }

public function editannonceAction($id,Request $request)
     {
        /* Récupère l'annonce */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Annonce");
        $annonce = $repo->find($id);

        /* $annonce renseigné donc formulaire renseigné */

        $form = $this->get('form.factory')->create(new AnnoncesType(),$annonce);
        $form->handleRequest($request);  

        /* Vérification du formulaire */

        if ( $form->isValid()){
                $doctrine = $this->getDoctrine();
                $em = $doctrine->getManager();
                $em->persist($annonce);
                $em->flush();
                return $this->redirect($this->generateUrl('ppe_m2l_back_annonce', array('id'=> $annonce->getId())));

        }        
         return $this->render('PPEM2LBundle:Annonce:editannonce.html.twig', array('form'=>$form->createView()));
     
    }

}