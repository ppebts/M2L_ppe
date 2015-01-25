<?php

namespace PPE\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->remove('username');
        // add your custom field
        $builder->add('last_name');
        $builder->add('first_name');
        $builder->add('born_date', 'date',array(
                                                'widget' => 'single_text',
                                                'format' => 'yyyy-MM-dd',
                                                'input' => 'datetime',
                                                'attr' => array('class' => 'date')                                            
                                                ));
        $builder->add('phone_number');
        $builder->add('plainPassword', 'repeated', array(
                                                        'type' => 'password',
                                                        'options' => array('translation_domain' => 'FOSUserBundle'),
                                                        'first_options' => array('label' => 'form.password'),
                                                        'second_options' => array('label' => 'form.password_confirmation'),
                                                        'invalid_message' => 'fos_user.password.mismatch',
                                                        ));
        $builder->add('gender', 'choice', array(
                                                'choices'   => array('m' => 'Mr', 'f' => 'Mme'),
                                                'required'  => false,
                                                'expanded'  => false,
                                                'multiple'  => false,
                                                'empty_value'  => false,
                                                ));    
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'ppe_user_registration';
    }
}