<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email')
        		->add('message', 'textarea')
        		->add('submit', 'submit');
    }

    public function getName()
    {
        return 'contact';
    }
}
