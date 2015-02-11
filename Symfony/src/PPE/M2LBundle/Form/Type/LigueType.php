<?php

namespace PPE\M2LBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LigueType extends AbstractType
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
            ->add('image', 'text')
            ->add('sportLigue', 'entity', array(
                                                'class' => 'PPEM2LBundle:Sport',
                                                'property' => 'nom',
                                                 ))
            ->add('userLigue', 'entity', array(
                                                'class' => 'PPEUserBundle:User',
                                                'property' => 'username',
                                                 'query_builder' => function(EntityRepository $er) {
                                                    return $er->createQueryBuilder('u')
                                                        ->where('u.role = "ROLE_USER" ')
                                                        ->where('u.roles LIKE :roles')
                                                        ->setParameter('roles', '%ROLE_LIGUE%')
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
            'data_class' => 'PPE\M2LBundle\Entity\Ligue'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ppe_m2l_back_liste_ligues';
    }
}