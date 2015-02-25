<?php

namespace PPE\M2LBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use PPE\M2LBundle\Form\Type\ImageType;


class AnnonceType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
          $builder
            ->add('titre', 'text')
            ->add('description', 'textarea')
            ->add('image', new ImageType())
            ->add('prix', 'text')
            ->add('publier', 'submit', array('attr' => array('class' => 'annonce_submit')))
            ->getForm();
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PPE\M2LBundle\Entity\Annonce'
        ));
    }

    /** 
     * @return string
     */
    public function getName()
    {
        return 'ppe_m2l_annonces';
    }
}