<?php

namespace Cert\IncidentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IncidentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type',null, array(
                    'attr'=> array(
                        'class'=> 'form-control'
                    )
                )
            )
            ->add('description',null, array(
                    'attr'=> array(
                        'class'=> 'form-control'
                    )
                )
            )
            ->add('categorie',null, array(
                    'attr'=> array(
                        'class'=> 'form-control'
                    )
                )
            )
            ->add('traitee', 'hidden')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cert\IncidentBundle\Entity\Incident'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cert_incidentbundle_incident';
    }
}
