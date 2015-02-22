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

        $time = array(
            "08:00" => "08:00",
            "09:00" => "09:00",
            "10:00" => "10:00",
            "11:00" => "11:00",
            "12:00" => "12:00",
            "13:00" => "13:00",
            "14:00" => "14:00",
            "15:00" => "15:00",
            "16:00" => "16:00",
            "17:00" => "17:00",
            "18:00" => "18:00",
            "19:00" => "19:00",
            "20:00" => "20:00",
            "21:00" => "21:00"
            );

        $builder
            ->add('nom', 'text')
            ->add('description', 'textarea')
            ->add('duree', 'choice', array(
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
            ->add('time', 'choice', array(
                                        'choices' => $time,
                                        'multiple' => false,
                                        'label' => 'Horaire',
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
            ->add('image', new ImageType())
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