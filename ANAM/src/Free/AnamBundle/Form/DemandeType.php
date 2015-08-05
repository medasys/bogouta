<?php

namespace Free\AnamBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DemandeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nDemande')
            ->add('niveau')
            ->add('dateInscription')
            ->add('anneeUniversitaire')
            ->add('dateValidation')
            ->add('envoyeCnops')
            ->add('envoyeAnam')
            ->add('reponseAnam')
            ->add('motifRejet')
            ->add('assure')
            ->add('regime')
            ->add('etudiant', new EtudiantType())
            ->add('etablissement')
            ->add('faculte')
            ->add('filiere')
            ->add('cnops')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Free\AnamBundle\Entity\Demande'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'free_anambundle_demande';
    }
}
