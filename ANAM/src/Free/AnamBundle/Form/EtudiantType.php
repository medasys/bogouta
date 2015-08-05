<?php

namespace Free\AnamBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EtudiantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marocain')
            ->add('cin')
            ->add('carteSejeour')
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance')
            ->add('sexe')
            ->add('situationFamiliale')
            ->add('pays')
            ->add('cne')
            ->add('baccalaureat')
            ->add('anneeBac')
            ->add('couvertureMedicale')
            ->add('regime')
            ->add('adresse1')
            ->add('adresse2')
            ->add('gsm')
            ->add('codePostal')
            ->add('banque')
            ->add('compteBancaire')
            ->add('villeEtudiant')
            ->add('email')
            ->add('nomPere')
            ->add('prenomPere')
            ->add('cinPere')
            ->add('dateNaissancePere')
            ->add('dateDecesPere')
            ->add('nomMere')
            ->add('prenomMere')
            ->add('cinMere')
            ->add('naissanceMere')
            ->add('dateDecesMere')
            ->add('cinConjoint')
            ->add('dateMariage')
            ->add('dateDivorce')
            ->add('dateDeces')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Free\AnamBundle\Entity\Etudiant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'free_anambundle_etudiant';
    }
}
