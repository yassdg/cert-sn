<?php

namespace Cert\IncidentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VulnerabiliteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text')
            ->add('description','textarea')
            ->add('impact','textarea')
            ->add('solution','textarea')
            ->add('reference','textarea')
            ->add('source','textarea')
            ->add('datepub')
            ->add('dateModification')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cert\IncidentBundle\Entity\Vulnerabilite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cert_incidentbundle_vulnerabilite';
    }
}
