<?php

namespace PPE\M2LBundle\Controller;
use PPE\M2LBundle\Entity\Information;
use PPE\M2LBundle\Form\Type\InformationType;
use PPE\M2LBundle\Form\Type\InformationsType;
use PPE\M2LBundle\Entity\Annonce;
use PPE\M2LBundle\Form\Type\AnnonceType;
use PPE\M2LBundle\Form\Type\AnnoncesType;
use PPE\M2LBundle\Entity\Formation;
use PPE\M2LBundle\Form\Type\FormationType;
use PPE\M2LBundle\Form\Type\FormationsType;
use PPE\M2LBundle\Entity\Ligue;
use PPE\M2LBundle\Form\Type\LigueType;
use PPE\M2LBundle\Form\Type\LiguesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{
                                                    /* Actualités */
    public function getactualitesAction()
     {
        /* Récupère toutes les actualités */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Actualite");
        $actualiteList = $repo->findAll();


         return $this->render('PPEM2LBundle:Actualite:listeactualite.html.twig', array("actualiteList"=>$actualiteList));
     }                                              

                                                    /* Fin Actualités */
                                                    /* Informations */
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
                                                /* Fin Infomations */
                                                /* Annonces */

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
                return $this->redirect($this->generateUrl('ppe_m2l_back_annonceedit', array('id'=> $annonce->getId())));

        }        
         return $this->render('PPEM2LBundle:Annonce:editannonce.html.twig', array('form'=>$form->createView()));
     
    }
                                                /* Fin Annonces */
                                                /* Formations */

    public function getformationsAction()
     {
        /* Récupère toutes les formations */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Formation");
        $formationList = $repo->findAll();


         return $this->render('PPEM2LBundle:Formation:listeformation.html.twig', array("formationList"=>$formationList));
     }

    public function addformationAction(Request $request)
    {
        $formation = new Formation();
        
        $form = $this->get('form.factory')->create(new FormationType(),$formation);
        $form->handleRequest($request);
        if ( $form->isValid()){
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $em->persist($formation);
            $em->flush();
        }
        return $this->render('PPEM2LBundle:Formation:addformation.html.twig', array("form"=>$form->createView(),));
    }
        public function editformationAction($id,Request $request)
     {
        /* Récupère la formation */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Formation");
        $formation = $repo->find($id);

        /* $formation renseigné donc formulaire renseigné */

        $form = $this->get('form.factory')->create(new FormationsType(),$formation);
        $form->handleRequest($request);  

        /* Vérification du formulaire */

        if ( $form->isValid()){
                $doctrine = $this->getDoctrine();
                $em = $doctrine->getManager();
                $em->persist($formation);
                $em->flush();
                return $this->redirect($this->generateUrl('ppe_m2l_back_formationedit', array('id'=> $formation->getId())));

        }        
         return $this->render('PPEM2LBundle:Formation:editformation.html.twig', array('form'=>$form->createView()));
     
    }    
                                                /* Fin Formations */
                                                /* Ligues */

    public function getliguesAction()
     {
        /* Récupère toutes les ligues */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Ligue");
        $ligueList = $repo->findAll();


         return $this->render('PPEM2LBundle:Ligue:listeligue.html.twig', array("ligueList"=>$ligueList));
     }
    public function addligueAction(Request $request)
    {
        $ligue = new Ligue();
        
        $form = $this->get('form.factory')->create(new LigueType(),$ligue);
        $form->handleRequest($request);
        if ( $form->isValid()){
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $em->persist($ligue);
            $em->flush();
        }
        return $this->render('PPEM2LBundle:Ligue:addligue.html.twig', array("form"=>$form->createView(),));
    }
    public function editligueAction($id,Request $request)
     {
        /* Récupère la lgieu */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Ligue");
        $ligue = $repo->find($id);

        /* $ligue renseigné donc formulaire renseigné */

        $form = $this->get('form.factory')->create(new LiguesType(),$ligue);
        $form->handleRequest($request);  

        /* Vérification du formulaire */

        if ( $form->isValid()){
                $doctrine = $this->getDoctrine();
                $em = $doctrine->getManager();
                $em->persist($ligue);
                $em->flush();
                return $this->redirect($this->generateUrl('ppe_m2l_back_ligueedit', array('id'=> $ligue->getId())));

        }        
         return $this->render('PPEM2LBundle:Ligue:editligue.html.twig', array('form'=>$form->createView()));
     
    }
                                                    /* Fin ligues */  
}