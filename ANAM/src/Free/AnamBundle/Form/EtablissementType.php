<?php

namespace Free\AnamBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EtablissementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeEtablissement')
            ->add('nom')
            ->add('codeEtablissementPere')
            ->add('secteur')
            ->add('nAffiation')
            ->add('adresse')
            ->add('codePostale')
            ->add('ville')
            ->add('tel')
            ->add('fax')
            ->add('mail')
            
            ->add('envoyer','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Free\AnamBundle\Entity\Etablissement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'free_anambundle_etablissement';
    }
}
