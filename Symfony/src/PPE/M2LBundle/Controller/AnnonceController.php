<?php

namespace PPE\M2LBundle\Controller;
use PPE\M2LBundle\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;

class AnnonceController extends Controller
{

public function afficherAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Annonce");
        $annonceList = $repo->findAll();
        return $this->render('PPEM2LBundle:Annonce:annonce.html.twig', array("annonceList"=>$annonceList));

        $annonce = new Annonce;
        $form = $this->createFormBuilder($annonce)
                     ->add('titre',        'text')
                     ->add('description',       'textarea')
                     ->add('image',     'text')
                     ->add('prix',      'integer')
                     ->add('publication', 'submit')
                     ->getForm();

        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {

          $form->bind($request);

          if ($form->isValid()) {
            // On l'enregistre notre objet $annonce dans la base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirect($this->generateUrl('afficher', array('id' => $annonce->getId())));
          }
        }

            // À ce stade :
            // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
            // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
            return $this->render('PPEM2LBundle:Annonce:annonce.html.twig', array("form"=> $form->createView(), "annonceList"=>$annonceList));
    }
}