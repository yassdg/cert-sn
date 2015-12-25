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
            ->add('titre',null, array(
                    'attr'=> array(
                        'class'=> 'form-control'
                    )
                )
            )
            ->add('systemeAffecte',null, array(
                    'attr'=> array(
                        'class'=> 'form-control'
                    )
                )
            )
            ->add('vuDensemble',null, array(
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
            ->add('impact',null, array(
                    'attr'=> array(
                        'class'=> 'form-control'
                    )
                )
            )
            ->add('solution',null, array(
                    'attr'=> array(
                        'class'=> 'form-control'
                    )
                )
            )
            ->add('reference',"textarea", array(
                    'attr'=> array(
                        'class'=> 'form-control'
                    )
                )
            )
            ->add('revisions',"textarea", array(
                    'attr'=> array(
                        'class'=> 'form-control'
                    )
                )
            )
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
