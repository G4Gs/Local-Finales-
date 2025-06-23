<?php

namespace App\Form;

use App\Entity\ExamenFinal;
use App\Entity\Docente;
use App\Entity\Tecnicatura;
use App\Entity\Asignatura;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ExamenFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha')
            ->add('presidente', EntityType::class, [
                'class' => Docente::class,
                'choice_label' => 'persona',
                'label' => 'Presidente de Mesa',
            ])
            ->add('vocal1', EntityType::class, [
                'class' => Docente::class,
                'choice_label' => 'persona',
                'label' => 'Vocal 1',
                'required' => false,
            ])
            ->add('vocal2', EntityType::class, [
                'class' => Docente::class,
                'choice_label' => 'persona',
                'label' => 'Vocal 2',
                'required' => false,
            ])
            ->add('estadoMesa', ChoiceType::class, [
                'choices' => [
                    'Libre' => 'Libre',
                    'Regular' => 'Regular',
                ],
                'label' => 'Estado de Mesa',
            ])
            ->add('tecnicatura', EntityType::class, [
                'class' => Tecnicatura::class,
                'choice_label' => 'nombre',
                'label' => 'Tecnicatura',
            ])
            ->add('asignatura', EntityType::class, [
                'class' => Asignatura::class,
                'choice_label' => 'nombre',
                'label' => 'Asignatura',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ExamenFinal::class,
        ]);
    }
}