<?php

namespace PPE\M2LBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use PPE\M2LBundle\Entity\Contact;
//use PPE\M2LBundle\Form\Type\ContactType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{

public function contactAction(Request $request)
{
    $defaultData = array('message' => '');
    $form = $this->createFormBuilder($defaultData)
        ->add('name', 'text')
        ->add('email', 'email')
        ->add('message', 'textarea')
        ->add('envoyer', 'submit', array('attr' => array('class' => 'ppe_submit')))
        ->getForm();

    $form->handleRequest($request);

    if ($form->isValid()) {
        // Les données sont un tableau avec les clés "name", "email", et "message"
        $data = $form->getData();
        
        //mettre php envoie email

        // To
        $to = 'joffrey.dota@gmail.com';
         
        // Subject
        $subject = 'M2L.com - Mail Contact';
         
        // Headers
        $headers = 'Mime-Version: 1.0'."\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
        $headers .= "\r\n";
         
        // Message
        $msg = '<strong>Developpez.com</strong> - Message du mail ...';
         
        // Function mail()
        mail($to, $subject, $msg, $headers);

            }

            // ... affiche le formulaire


        return $this->render('PPEM2LBundle:Contact:contact.html.twig', array("form"=>$form->createView(),
            ));
    }
}