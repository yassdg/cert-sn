<?php

namespace Cert\IncidentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
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
            ->add('source',null, array(
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
            ->add('dateAnnonce')
            ->add('fichier')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cert\IncidentBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cert_incidentbundle_annonce';
    }
}
