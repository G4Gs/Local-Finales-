<?php

namespace App\Form;

use App\Entity\ExamenFinal;
use App\Entity\Docente;
use App\Entity\Curso;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExamenFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Fecha del Examen',
            ])
            ->add('hora', TimeType::class, [
                'widget' => 'single_text',
                'required' => false,
                'label' => 'Hora del Examen',
            ])
            ->add('presidente', EntityType::class, [
                'class' => Docente::class,
                'choice_label' => 'persona',
                'label' => 'Presidente de Mesa',
                'placeholder' => 'Selecciona un docente',
            ])
            ->add('vocal1', EntityType::class, [
                'class' => Docente::class,
                'choice_label' => 'persona',
                'label' => 'Vocal 1',
                'required' => false,
                'placeholder' => 'Opcional',
            ])
            ->add('vocal2', EntityType::class, [
                'class' => Docente::class,
                'choice_label' => 'persona',
                'label' => 'Vocal 2',
                'required' => false,
                'placeholder' => 'Opcional',
            ])
            ->add('estadoMesa', ChoiceType::class, [
                'choices' => [
                    'Libre' => 'Libre',
                    'Regular' => 'Regular',
                ],
                'label' => 'Estado de la Mesa',
                'placeholder' => 'Selecciona un estado',
            ])
           ->add('curso', EntityType::class, [
                'class' => Curso::class,
                'choice_label' => function($curso) {
                   return $curso->getId() . ' - ' . $curso->getAsignatura()->getNombre() . ' (' . $curso->getComision()->getCiclolectivo() . ')';
               },
               'label' => 'Curso',
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
