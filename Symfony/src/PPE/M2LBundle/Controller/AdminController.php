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

use PPE\M2LBundle\Entity\Sport;

use PPE\M2LBundle\Entity\Image;

use PPE\M2LBundle\Entity\Ligue;
use PPE\M2LBundle\Form\Type\LigueType;
use PPE\M2LBundle\Form\Type\LiguesType;

use PPE\M2LBundle\Entity\Actualite;
use PPE\M2LBundle\Form\Type\ActualiteType;
use PPE\M2LBundle\Form\Type\ActualitesType;

use PPE\UserBundle\Entity\User;
use PPE\M2LBundle\Form\Type\UsersType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;



class AdminController extends Controller
{
                                                    /* Actualités */
    public function getactualitesAction(Request $request)
     {
        /* Récupère toutes les actualités */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Actualite");
        $actualiteList = $repo->findAll();

        $actualite = new Actualite();
        
        $form = $this->get('form.factory')->create(new ActualiteType(),$actualite);
        $form->handleRequest($request);
        if ( $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $image = $actualite->getImage();

            $uploaded_image = $image->getFilename();

            $name = $uploaded_image->getClientOriginalName();
            $path = $image->getUploadRootDir();
            $uploaded_image->move($image->getUploadRootDir(), $name);

            $image->setPath($path);

            $image->setFilename($name); 

            $em->persist($actualite);

            $em->flush();
        return $this->redirect($this->generateUrl('ppe_m2l_back_actualite'));
        }
         return $this->render('PPEM2LBundle:Actualite:listeactualite.html.twig', array("actualiteList"=>$actualiteList, "formAddactu" => $form->createView(),));

     }

    public function editactualiteAction($id,Request $request)
     {
        /* Récupère l'actualite */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Actualite");
        $actualite = $repo->find($id);
        $image = $actualite->getImage();
        /* $information renseigné donc formulaire renseigné */

        $form = $this->get('form.factory')->create(new ActualiteType(),$actualite);
        $form->handleRequest($request);  

        /* Vérification du formulaire */

        if ( $form->isValid()){
                $doctrine = $this->getDoctrine();
                $em = $doctrine->getManager();
    
                $uploaded_image = $image->getFilename();

                $name = $uploaded_image->getClientOriginalName();
                $path = $image->getUploadRootDir();
                $uploaded_image->move($image->getUploadRootDir(), $name);

                $image->setPath($path);
                $image->setFilename($name);

                $em->persist($actualite);
                $em->flush();
                return $this->redirect($this->generateUrl('ppe_m2l_back_actualite', array('id'=> $actualite->getId())));

        }        
         return $this->render('PPEM2LBundle:Actualite:editactualite.html.twig', array('form'=>$form->createView(), 'image'=>$image));
     
    }
            public function deleteactualiteAction($id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Actualite");
        $actualite = $repo->find($id);

        $em->remove($actualite);
        $em->flush();

        return $this->redirect($this->generateUrl('ppe_m2l_back_actualite', array()));
    }



                                                    /* Fin Actualités */
                                                    /* Informations */
    public function getinformationsAction(Request $request)
     {
        /* Récupère toutes les informations */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Information");
        $infoList = $repo->findAll();


        $information = new Information();
        
        $form = $this->get('form.factory')->create(new InformationType(),$information);
        $form->handleRequest($request);
        if ( $form->isValid()){
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $em->persist($information);
            $em->flush();

        return $this->redirect($this->generateUrl('ppe_m2l_back_information'));

        }

         return $this->render('PPEM2LBundle:Information:listeinfo.html.twig', array("infoList"=>$infoList, "formAddinfo" => $form->createView(),));
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
                return $this->redirect($this->generateUrl('ppe_m2l_back_information'));

        }        
         return $this->render('PPEM2LBundle:Information:editinfo.html.twig', array('form'=>$form->createView()));
     
    }
        public function deleteinformationAction($id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Information");
        $information = $repo->find($id);

        $em->remove($information);
        $em->flush();

        return $this->redirect($this->generateUrl('ppe_m2l_back_information', array()));
    }
                                                /* Fin Infomations */
                                                /* Annonces */

    public function getannoncesAction(Request $request)
     {
        /* Récupère toutes les annonces */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Annonce");
        $annonceList = $repo->findAll();

        $annonce = new Annonce();
        
        $form = $this->get('form.factory')->create(new AnnoncesType(),$annonce);
        $form->handleRequest($request);

        if ( $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $image = $annonce->getImage();

            $uploaded_image = $image->getFilename();

            $name = $uploaded_image->getClientOriginalName();
            $path = $image->getUploadRootDir();
            $uploaded_image->move($image->getUploadRootDir(), $name);

            $image->setPath($path);

            $image->setFilename($name); 

            $em->persist($annonce);

            $em->flush();
            
            return $this->redirect($this->generateUrl('ppe_m2l_back_annonce'));    
        }


         return $this->render('PPEM2LBundle:Annonce:listeannonce.html.twig', array("annonceList"=>$annonceList, "formAjout" => $form->createView(),));
                                        
     }

    public function editannonceAction($id,Request $request)
     {
        /* Récupère l'annonce */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Annonce");
        $annonce = $repo->find($id);
        $image = $annonce->getImage();

        /* $annonce renseigné donc formulaire renseigné */

        $form = $this->get('form.factory')->create(new AnnoncesType(),$annonce);
        $form->handleRequest($request);  

        /* Vérification du formulaire */

        if ( $form->isValid()){
                $doctrine = $this->getDoctrine();
                $em = $doctrine->getManager();

                $uploaded_image = $image->getFilename();

                $name = $uploaded_image->getClientOriginalName();
                $path = $image->getUploadRootDir();
                $uploaded_image->move($image->getUploadRootDir(), $name);

                $image->setPath($path);
                $image->setFilename($name);

                $em->persist($annonce);
                $em->flush();
                return $this->redirect($this->generateUrl('ppe_m2l_back_annonce', array('id'=> $annonce->getId())));

        }        
         return $this->render('PPEM2LBundle:Annonce:editannonce.html.twig', array('form'=>$form->createView(), 'image'=>$image));
     
    } 
        public function deleteannonceAction($id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Annonce");
        $annonce = $repo->find($id);

        $em->remove($annonce);
        $em->flush();

        return $this->redirect($this->generateUrl('ppe_m2l_back_annonce', array()));
    }
                                                /* Fin Annonces */
                                                /* Formations */

    public function getformationsAction(Request $request)
     {
        /* Récupère toutes les formations */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Formation");
        $formationList = $repo->findAll();

        $formation = new Formation();
        
        $form = $this->get('form.factory')->create(new FormationsType(),$formation);
        $form->handleRequest($request);
        if ( $form->isValid()){
            $doctrine = $this->getDoctrine();
            $em = $doctrine->getManager();
            $em->persist($formation);
            $em->flush();
        return $this->redirect($this->generateUrl('ppe_m2l_back_formation')); 
        }

         return $this->render('PPEM2LBundle:Formation:listeformation.html.twig', array("formationList"=>$formationList, "formAddformation" => $form->createView(),));
     }


    public function addformationAction(Request $request)
    {
        $formation = new Formation();
        
        $form = $this->get('form.factory')->create(new FormationsType(),$formation);
        $form->handleRequest($request);

        if ( $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $image = $formation->getImage();

            $uploaded_image = $image->getFilename();

            $name = $uploaded_image->getClientOriginalName();
            $path = $image->getUploadRootDir();
            $uploaded_image->move($image->getUploadRootDir(), $name);

            $image->setPath($path);

            $image->setFilename($name);

            // $date = new \DateTime();
            // $image->setPath($date->format('d/m/Y'));
 

            $em->persist($formation);

            $em->flush();
            return $this->redirect($this->generateUrl('ppe_m2l_back_formation'));    
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
            $image = $formation->getImage();      
            $imageOld = $image;
            $form = $this->get('form.factory')->create(new FormationsType(),$formation);

            $form->handleRequest($request);  

            if ( $form->isValid()){

                $em = $this->getDoctrine()->getManager();

                    if ($image->getFilename() !== null) {
                        $uploaded_image = $image->getFilename();
                        $name = $uploaded_image->getClientOriginalName();
                        $path = $image->getUploadRootDir();
                        $uploaded_image->move($image->getUploadRootDir(), $name);
                        $image->setPath($path);
                        $image->setFilename($name);
                        $image = $image;
                    }

            $formation->setImage($imageOld);
            $em->persist($formation);
            $em->flush();

            return $this->redirect($this->generateUrl('ppe_m2l_back_formation'));

        }        
         return $this->render('PPEM2LBundle:Formation:editformation.html.twig', array('form'=>$form->createView(), 'image'=> $image));
     
    } 
        public function deleteformationAction($id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Formation");
        $formation = $repo->find($id);

        $em->remove($formation);
        $em->flush();

        return $this->redirect($this->generateUrl('ppe_m2l_back_formation', array()));
    }
                                                /* Fin Formations */
                                                /* Ligues */

    public function getliguesAction(Request $request)
     {
        /* Récupère toutes les ligues */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Ligue");
        $ligueList = $repo->findAll();


        $ligue = new Ligue();

        $form = $this->get('form.factory')->create(new LigueType(),$ligue);
        $form->handleRequest($request);

        if ( $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $image = $ligue->getImage();

            $uploaded_image = $image->getFilename();

            $name = $uploaded_image->getClientOriginalName();
            $path = $image->getUploadRootDir();
            $uploaded_image->move($image->getUploadRootDir(), $name);

            $image->setPath($path);

            $image->setFilename($name); 

            $em->persist($ligue);

            $em->flush();
            return $this->redirect($this->generateUrl('ppe_m2l_back_list_ligues'));
        }
         return $this->render('PPEM2LBundle:Ligue:listeligue.html.twig', array("ligueList"=>$ligueList, "formAdd" => $form->createView(),));
     }

    public function editligueAction($id,Request $request)
     {
        /* Récupère la ligue */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Ligue");
        $ligue = $repo->find($id);
        $image = $ligue->getImage();
        /* $ligue renseigné donc formulaire renseigné */

        $form = $this->get('form.factory')->create(new LiguesType(),$ligue);
        $form->handleRequest($request);  

        /* Vérification du formulaire */

        if ( $form->isValid()){
                $doctrine = $this->getDoctrine();
                $em = $doctrine->getManager();
                $uploaded_image = $image->getFilename();

                $name = $uploaded_image->getClientOriginalName();
                $path = $image->getUploadRootDir();
                $uploaded_image->move($image->getUploadRootDir(), $name);

                $image->setPath($path);
                $image->setFilename($name);
                
                $em->persist($ligue);
                $em->flush();
                return $this->redirect($this->generateUrl('ppe_m2l_back_list_ligues', array('id'=> $ligue->getId())));
        }        
         return $this->render('PPEM2LBundle:Ligue:editligue.html.twig', array('form'=>$form->createView(), 'image'=> $image));
     
    }

    public function adminPanelAction()
    {
         return $this->render('PPEM2LBundle:Auth:adminPanel.html.twig', array());

    }

    public function deleteligueAction($id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Ligue");
        $ligue = $repo->find($id);

        $em->remove($ligue);
        $em->flush();

        return $this->redirect($this->generateUrl('ppe_m2l_back_list_ligues', array()));
    }

    public function maLigueAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEM2LBundle:Ligue");

        $user = $this->container->get('security.context')->getToken()->getUser();
        $id = $user->getId();

        $query = $repo->createQueryBuilder('l')
            ->where('l.userLigue = '.$id.' ');
        
        $res = $query->getQuery()->getResult(); 

        return $this->render('PPEM2LBundle:Ligue:maligue.html.twig', array('ligue' => $res));
    }

    public function editMaLigueAction($id,Request $request )
    {
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
                return $this->redirect($this->generateUrl('ppe_m2l_ligue_maligue', array('id'=> $ligue->getId())));
        }        
         return $this->render('PPEM2LBundle:Ligue:editmaligue.html.twig', array('form'=>$form->createView()));
     
    }
                                               /* Fin ligues */  
                                               /* Utilisateurs */

    public function getutilisateursAction()
     {
        /* Récupère tous les utilisateurs */

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEUserBundle:User");
        $utilisateursList = $repo->findAll();


         return $this->render('PPEM2LBundle:Users:listeutilisateurs.html.twig', array("utilisateursList"=>$utilisateursList));
     }

    public function edituserAction($id,Request $request )
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEUserBundle:User");
        $user = $repo->find($id);

        /* $user renseigné donc formulaire renseigné */

        $form = $this->get('form.factory')->create(new UsersType(),$user);
        $form->handleRequest($request);  

        /* Vérification du formulaire */

        if ( $form->isValid()){
                $doctrine = $this->getDoctrine();
                $em = $doctrine->getManager();
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl('ppe_m2l_back_list_utilisateurs', array('id'=> $user->getId())));
        }        
         return $this->render('PPEM2LBundle:Users:edituser.html.twig', array('form'=>$form->createView()));
     
    }
    public function deleteuserAction($id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repo = $em->getRepository("PPEUserBundle:User");
        $user = $repo->find($id);

        $em->remove($user);
        $em->flush();

        return $this->redirect($this->generateUrl('ppe_m2l_back_list_utilisateurs', array()));
    }


                                               /* Fin Utilisateurs */
}