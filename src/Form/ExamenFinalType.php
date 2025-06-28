<?php

namespace App\Form;

use App\Entity\ExamenFinal;
use App\Entity\Tecnicatura;
use App\Entity\Asignatura;
use App\Entity\Comision;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExamenFinalType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha')
             ->add('hora', TimeType::class, [
                  'widget' => 'single_text',
                  'required' => false,
                  'label' => 'Hora',
            ])
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
            'tecnicaturas' => [],
            'asignaturas' => [],
            'comisiones' => [],
        ]);
    }
}