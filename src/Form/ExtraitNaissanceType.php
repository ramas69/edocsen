<?php

namespace App\Form;

use App\Entity\ExtraitNaissance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExtraitNaissanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('DateNaissance')
            ->add('LieuDeNaissance')
            ->add('Sexe')
            ->add('PrenomPere')
            ->add('PrenomMere')
            ->add('NomPere')
            ->add('NomMere')
            ->add('NumeroRegistre')
            ->add('documentJoint')
            ->add('Region')
            ->add('Departement')
            ->add('Commune')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ExtraitNaissance::class,
        ]);
    }
}
