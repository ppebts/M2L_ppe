<?php

namespace PPE\M2LBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnoncesType extends AbstractType
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
            ->add('image', 'text')
            ->add('prix', 'text')
            ->add('utilisateur', 'entity', array(
                                                'class' => 'PPEUserBundle:User',
                                                'property' => 'id',
                                                 'query_builder' => function(EntityRepository $er) {
                                                    return $er->createQueryBuilder('u')
                                                        ->orderBy('u.first_name', 'ASC');
                                                        },
                                                ))
            ->add('publier', 'submit', array('attr' => array('class' => 'ppe_submit' )))
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
        return 'ppe_m2l_back_annonce';
    }
}