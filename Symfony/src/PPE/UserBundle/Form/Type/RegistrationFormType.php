<?php

namespace PPE\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->add('last_name');
        $builder->add('first_name');
        $builder->add('born_date');
        $builder->add('phone_number');
        $builder->add('gender', 'choice', array(
            'choices'   => array('m' => 'Masculin', 'f' => 'Féminin'),
            'required'  => false,
            'expanded'  => true,
            'multiple'  => false,
            'empty_value'  => false,
        ));
        $builder->add('email');
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