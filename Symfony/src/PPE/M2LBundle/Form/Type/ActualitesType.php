<?php

namespace PPE\M2LBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActualitesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder
            ->add('titre', 'text')
            ->add('contenu', 'textarea')
            ->add('image', 'text')
            ->add('publier', 'submit', array('attr' => array('class' => 'submit_back')))
            ->getForm();
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PPE\M2LBundle\Entity\Actualite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ppe_m2l_back_actualites';
    }
}