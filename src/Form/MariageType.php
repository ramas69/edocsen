<?php

namespace App\Form;

use App\Entity\Mariage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MariageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('nom')
            ->add('prenom')
            ->add('nomClient')
            ->add('Civilite', ChoiceType::class, [
                'choices'  => [
                    'Monsieur' => 'monsieur',
                    'Madame' => 'madame',
                    ]
                ])
            ->add('demandeur')
            ->add('villeMariage')
            ->add('region')
            ->add('commune')
            ->add('numeroRegisre')
            ->add('paysNaissance')
            ->add('documentJoint', FileType::class)
            ->add('nombre')
            ->add('adresse')
            ->add('codePostal')
            ->add('ville')
            ->add('pays')
            ->add('telephone')
            ->add('dateMariage')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mariage::class,
        ]);
    }
}
