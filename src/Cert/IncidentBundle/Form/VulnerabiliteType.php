<?php

namespace Cert\IncidentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Cert\IncidentBundle\Form\DataTransformer\ArrayToTextTransformer;

class VulnerabiliteType extends AbstractType
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
            ->add('source',null, array(
                    'attr'=> array(
                        'class'=> 'form-control'
                    )
                )
            )
            ->add('datepub')
            ->add('dateModification')
            ->add('fichier')
        ;

        $builder->get('reference')
            ->addModelTransformer(new ArrayToTextTransformer());
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
