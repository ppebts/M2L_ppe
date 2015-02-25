<?php

namespace PPE\M2LBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{

public function contactAction(Request $request)
{

    $user = $this->container->get('security.context')->getToken()->getUser();
    $userMail = $user->getUsername();
    $fname = $user->getFirstName();
    $lname = $user->getLastName();
    $userName = $fname.' '.$lname;

    $defaultData = array('message' => '');
    $form = $this->createFormBuilder($defaultData)
        ->add('name', 'text', array(
                                        'attr' => array(
                                        'value' => $userName,)))
        ->add('email', 'email', array(
                                        'attr' => array(
                                        'value' => $userMail,)))
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
        ->setBody
        (
'<html>' .
' <head></head>' .
' <body>' .
' Bonjour ' .
$data["name"].
','.
'<br /><br />'.
' Suite à votre demande de contact auprès de la maison des ligues de Lorraine qui était la suivante : '. 
'<br /><br />'.
$data["message"].
'<br /><br />'.
'Nous avons bien reçu votre demande et vous répondrons dans les plus brefs délais à l adresse suivante : '.
$data["email"].
'<br /><br />'.
' Cordialement,'. 
'<br />'.
' L équipe M2L'.
' </body>' .
'</html>',
  'text/html'
);
    
    $this->get('mailer')->send($message);

$data = $form->getData();
    $message = \Swift_Message::newInstance()
        ->setSubject($data["sujet"])
        ->setFrom('m2lorraine.ppe@gmail.com')
        ->setTo('m2lorraine.contact@gmail.com')
        ->setBody
        (
'<html>' .
' <head></head>' .
' <body>' .
' L utilisateur ' .
$data["name"].
' a soumis une demande dans le formulaire de contact. Sa demande est la suivante : '. 
'<br /><br />'.
$data["message"].
'<br /><br />'.
'Lui répondre à l adresse mail suivante : '.
$data["email"].

' </body>' .
'</html>',
  'text/html'
);
    
    $this->get('mailer')->send($message);



    return $this->redirect($this->generateUrl('ppe_m2l_contact'));

            }
return $this->render('PPEM2LBundle:Contact:contact.html.twig', array('form'=>$form->createView()));
    }

}
