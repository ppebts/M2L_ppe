<?php

namespace PPE\M2LBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use PPE\M2LBundle\Form\Type\DeskPictureType;

class DeskType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('image')
            ->add('prix');
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'PPE\M2LBundle\Entity\Annonce',
        );
    }

    public function getName()
    {
        return 'Annonce';
    }
}