<?php

namespace App\Form;

use App\Entity\Deces;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DecesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateDeces')
            ->add('lieuDeces')
            ->add('sexe')
            ->add('nomPere')
            ->add('nomMere')
            ->add('prenomPere')
            ->add('prenomMere')
            ->add('numeroRegistre')
            ->add('region')
            ->add('departement')
            ->add('commune')
            ->add('paysNaissance')
            ->add('Civilite', ChoiceType::class, [
                'choices'  => [
                    'Monsieur' => 'monsieur',
                    'Madame' => 'madame',
                    ]
                ])
            ->add('documentJoint', FileType::class)
            ->add('nombre')
            ->add('demandeur')
            ->add('nomClient')
            ->add('prenomClient')
            ->add('adresse')
            ->add('codePostal')
            ->add('Ville')
            ->add('pays')
            ->add('telephone')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Deces::class,
        ]);
    }
}
