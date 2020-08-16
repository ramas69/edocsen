<?php

namespace App\Form;

use App\Entity\ExtraitNaissance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;

class ExtraitNaissanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('DateNaissance')
            ->add('LieuDeNaissance')
            ->add('NumeroRegistre')
            ->add('Region')
            ->add('Departement')
            ->add('Commune')
            ->add('paysNaissance', ChoiceType::class, [
                'choices'  => [
                    'Sénégal' => 'senegal',
                    'République du Congo' => 'congo',
                    ]
                ])
            ->add('Sexe',   ChoiceType::class, 
                [
                    'choices' => [
                        'Masculin' => 'Masculin',
                        'Feminin' => 'Feminin',
                    ],
                'expanded' => true
                ])
            ->add('NomPere')
            ->add('PrenomPere')
            ->add('NomMere')
            ->add('PrenomMere')
            ->add('Civilite', ChoiceType::class, [
                'choices'  => [
                    'Monsieur' => 'monsieur',
                    'Madame' => 'madame',
                    ]
                ])
            ->add('Type')
            ->add('documentJoint', FileType::class)
            ->add('Nombre')
            ->add('Demandeur') 
            ->add('NomClient')
            ->add('PrenomClient')
            ->add('Adresse')
            ->add('CodePostal') 
            ->add('Ville')
            ->add('Pays')
            ->add('Telephone')
       
     
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ExtraitNaissance::class,
        ]);
    }
}
