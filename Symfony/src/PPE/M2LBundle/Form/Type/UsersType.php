<?php

namespace PPE\M2LBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', 'choice', array('choices'=> array('h'=>'homme','f'=>'femme')))
            ->add('lastname', 'text')
            ->add('firstname', 'text')
            ->add('username', 'text')
            ->add('born_date', 'date',array(
                                                'widget' => 'single_text',
                                                'format' => 'yyyy-MM-dd',
                                                'input' => 'datetime',
                                                'attr' => array('class' => 'date')                                            
                                                ))
            ->add('roles', 'collection', array('type'=> 'choice', 'options' => array('label'=> false,'choices'=>array(
                                                               'ROLE_USER' => 'user',
                                                               'ROLE_LIGUE' => 'ligue',
                                                                'ROLE_ADMIN' => 'admin'
                                                                ))))
            ->add('phone_number', 'text')
            ->add('lastname', 'text')
            ->add('publier', 'submit', array('attr' => array('class' => 'submit_back' )))            
            ->getForm();
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PPE\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ppe_m2l_back_list_utilisateurs';
    }
}