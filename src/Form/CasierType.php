<?php

namespace App\Form;

use App\Entity\Casier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CasierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('nomPrenomPere')
            ->add('nomPrenomMere')
            ->add('dateNaissance')
            ->add('lieuNaissance')
            ->add('paysNaissance')
            ->add('domicile')
            ->add('profession')
            ->add('nationalite')
            ->add('Civilite', ChoiceType::class, [
                'choices'  => [
                    'Monsieur' => 'monsieur',
                    'Madame' => 'madame',
                    ]
                ])
            ->add('demandeur')
            ->add('nomClient')
            ->add('prenomClient')
            ->add('adresse')
            ->add('codePostal')
            ->add('ville')
            ->add('pays')
            ->add('telephone')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Casier::class,
        ]);
    }
}
