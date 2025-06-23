<?php

namespace App\Form;

use App\Entity\ExamenFinal;
use App\Entity\Docente;
<<<<<<< HEAD
use App\Entity\Asignatura;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
=======
use App\Entity\Tecnicatura;
use App\Entity\Asignatura;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8
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
<<<<<<< HEAD
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
=======
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
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8
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