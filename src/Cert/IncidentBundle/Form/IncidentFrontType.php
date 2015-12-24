<?php

namespace Cert\IncidentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IncidentFrontType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', 'choice', array(
                'choices' => array(
                    'code malveillant'=>'code malveillant', 'Securite information'=>'Securite information',
                    'contenu abusif'=>'contenu abusif', 'Intrusion'=>'Intrusion',
                    'Intrusion'=>'Intrusion', 'disponibilite'=>'disponibilite','Fraude'=>'Fraude'),
                    'multiple' =>false,
            ))
            ->add('description', 'textarea')
            ->add('categorie', 'choice', array(
                'choices' => array(
                    'Spam'=>'Spam', 'virus'=>'virus','harcellement'=>'harcellement',
                    'virus'=>'virus', 'ver'=>'ver', 'logiciels espions'=>'logiciels espion',
                    'balayage'=>'balayage', 'ingenierie sociale'=>'ingenierie sociale', 'reniflement'=>'reniflement',
                    'exploitation des failles inconnues'=>'exploitation des failles inconnues',
                    'Login Attempts'=>'Login Attemps', 'New Attack Signaure' =>'New Attack Signaure',
                    'DoS'=>'DoS', 'DDoS'=>'DDoS', 'Sabotage'=>'Sabotage', 'Droit dauteur'=>'Droit dauteur',
                     'Mascarade'=>'Macarade', 'Acces non autorisee de linformation'=>'Acces non autorisee de linformation'),
                    'multiple' =>false,
            ))
            ->add('visiteur', new VisiteurType()) // creation de l'association entre incident et visiteur 
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
        return 'cert_incidentbundle_incident_front';
    }
}
