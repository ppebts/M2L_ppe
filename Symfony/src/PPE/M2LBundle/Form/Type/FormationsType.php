<?php

namespace PPE\M2LBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use PPE\M2LBundle\Form\Type\ImageType;

class FormationsType extends AbstractType
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
            ->add('duree', 'choice', array(
    'choices'   => array(
        1   => '1 heure',
        2 => '2 heures',
        3   => '3 heures',
        4 => '4 heures'
    )))
            ->add('date', 'date',array(
                                                'widget' => 'single_text',
                                                'format' => 'yyyy-MM-dd',
                                                'input' => 'datetime',
                                                'attr' => array('class' => 'date')                                            
                                                ))
            ->add('time', 'time', array(
                                                'widget' => 'choice',
                                                'input' => 'datetime',
                                                'label' => 'Horaire',
                                                'minutes' => range(0, 45, 15),
                                                'hours' => range(9, 20),
                                                'attr' => array('class' => 'heure')
                                    ))
            ->add('lieu', 'choice', array(
                'choices'   => array(
                    'A1'   => 'A1',
                    'B2'   => 'B2',
                    'B3'   => 'B3',
                    'B4'   => 'B4',
                    'B5'   => 'B5',
                ),
                'required'  => false,
                'multiple' => false))
            ->add('image', new ImageType(), array('required'=> false))
            ->add('nbparticipants', 'text')
            ->add('publier', 'submit', array('attr' => array('class' => 'submit_back')))
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