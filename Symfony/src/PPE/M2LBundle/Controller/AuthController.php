<?php

namespace PPE\M2LBundle\Controller;
use PPE\M2LBundle\Entity\Utilisateur;
use PPE\M2LBundle\Entity\TypeUtilisateur;
use PPE\M2LBundle\Form\Type\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;


class AuthController extends Controller
{

public function inscriptionAction(Request $request)
    {
        $utilisateur = new Utilisateur();   
        $form = $this->get('form.factory')->create(new InscriptionType(),$utilisateur);
        $form->handleRequest($request);
        if ( $form->isValid()){
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $em->persist($utilisateur);
            $em->flush();
        }
        return $this->render('PPEM2LBundle:Auth:auth.html.twig', array("form"=>$form->createView(),));
    }
}
