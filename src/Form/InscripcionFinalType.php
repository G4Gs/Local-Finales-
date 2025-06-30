<?php

namespace App\Form;

use App\Entity\InscripcionFinal;
use App\Entity\Alumno;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscripcionFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Fecha de inscripción',
                'data' => new \DateTime('today'),
            ])
            ->add('tipo', ChoiceType::class, [
                'choices' => [
                    'Regular' => 0,
                    'Libre' => 1,
                    'Condicional' => 2,
                ],
                'label' => 'Condición',
                'placeholder' => 'Seleccionar condición',
            ])
            ->add('alumno', EntityType::class, [
                'class' => Alumno::class,
                'choice_label' => 'nombreCompleto',  // Asegurate que exista getNombreCompleto() en Alumno
                'label' => 'Alumno',
                'placeholder' => 'Seleccionar alumno',
            ])
            ->add('examenFinalNombre', null, [
                'label' => 'Nombre del Examen Final',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => InscripcionFinal::class,
        ]);
    }
}
