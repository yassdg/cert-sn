<?php

namespace Cert\IncidentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use \Cert\UserBundle\Form\UserType;
use \Cert\UserBundle\Form\User;

class AlerteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','textarea')
            ->add('systemeAffecte','textarea')
            ->add('vuDensemble','textarea')
            ->add('description','textarea')
            ->add('impact','textarea')
            ->add('solution','textarea')
            ->add('reference','textarea')
            ->add('revisions','textarea')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cert\IncidentBundle\Entity\Alerte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cert_incidentbundle_alerte';
    }
}
