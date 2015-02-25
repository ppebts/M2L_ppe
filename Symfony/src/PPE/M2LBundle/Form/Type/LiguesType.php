<?php

namespace PPE\M2LBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LiguesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('description', 'textarea')
            ->add('url', 'text')
            ->add('image', new ImageType(),array('required'=>false))
            ->add('sportLigue', 'entity', array(
                                                'class' => 'PPEM2LBundle:Sport',
                                                'property' => 'nom',
                                                 ))
            ->add('publier', 'submit', array('attr' => array('class' => 'submit_back','required'=>false,)))
            ->getForm();
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PPE\M2LBundle\Entity\Ligue'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ppe_m2l_ligue_maligue';
    }
}