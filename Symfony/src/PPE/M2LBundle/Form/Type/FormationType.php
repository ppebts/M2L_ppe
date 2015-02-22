<?php

namespace PPE\M2LBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationType extends AbstractType
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
            ->add('duree', 'choices', array(
    'choices'   => array(
        1   => '1 heure',
        2 => '2 heures',
        3   => '3 heures',
    )))
            ->add('date', 'date',array(
                                                'widget' => 'single_text',
                                                'format' => 'yyyy-MM-dd',
                                                'input' => 'datetime',
                                                'attr' => array('class' => 'date')                                            
                                                ))
            ->add('time', 'time', array(
                                            'input'  => 'datetime',
                                            'widget' => 'choice',
                                        ))
            ->add('lieu', 'text')
            ->add('image', 'text')
            ->add('nbparticipants', 'text')
            ->add('publier', 'submit', array('attr' => array('class' => 'ppe_submit' )))
            ->getForm();
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PPE\M2LBundle\Entity\Formation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ppe_m2l_back_formations';
    }
}