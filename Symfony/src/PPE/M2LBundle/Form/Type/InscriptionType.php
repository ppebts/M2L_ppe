<?php

namespace PPE\M2LBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InscriptionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('civilite', 'choice', array(
                'choices' => array(
                    'm' => 'Masculin',
                    'f' => 'Féminin'),
                'required' => true,
                ))
            ->add('email', 'text')
            ->add('mdp', 'text')
            ->add('telephone','text')
            ->add('date_naissance', 'date')
            ->add('utilisateurType', 'hidden')
            ->add('Enregistrer', 'submit');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PPE\M2LBundle\Entity\Utilisateur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ppe_m2l_inscription';
    }
}