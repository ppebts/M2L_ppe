<?php

namespace PPE\M2LBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
        ->add('sujet', 'text')
        ->add('envoyer', 'submit', array('attr' => array('class' => 'ppe_submit')))
        ->getForm();

    $form->handleRequest($request);

    if ($form->isValid()) {
        $data = $form->getData();
    $message = \Swift_Message::newInstance()
        ->setSubject($data["sujet"])
        ->setFrom('m2lorraine.ppe@gmail.com')
        ->setTo($data["email"])
        ->setBody($data["message"])
    ;
    $this->get('mailer')->send($message);

            }
return $this->render('PPEM2LBundle:Contact:contact.html.twig', array('form'=>$form->createView()));
    }
}
