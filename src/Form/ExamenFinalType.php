<?php

namespace App\Form;

use App\Entity\ExamenFinal;
use App\Entity\Docente;
use App\Entity\Asignatura;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExamenFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha', DateType::class, [
                'widget' => 'single_text', // para usar input tipo date HTML5
                'label' => 'Fecha del Examen',
            ])
            ->add('presidenteId', EntityType::class, [
                'class' => Docente::class,
                'choice_label' => 'persona', // nombre para mostrar en el select
                'label' => 'Presidente de Mesa',
                'placeholder' => 'Seleccione un docente',
                'required' => true,
            ])
            ->add('vocal1Id', EntityType::class, [
                'class' => Docente::class,
                'choice_label' => 'persona',
                'label' => 'Vocal 1',
                'placeholder' => 'Seleccione un docente',
                'required' => false,
            ])
            ->add('vocal2Id', EntityType::class, [
                'class' => Docente::class,
                'choice_label' => 'persona',
                'label' => 'Vocal 2',
                'placeholder' => 'Seleccione un docente',
                'required' => false,
            ])
            ->add('asignaturaId', EntityType::class, [
                'class' => Asignatura::class,
                'choice_label' => 'nombre',
                'label' => 'Asignatura',
                'placeholder' => 'Seleccione una asignatura',
                'required' => false,
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
