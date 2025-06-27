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
            ->add('hora')
            ->add('estadoMesa')
            ->add('presidente')
            ->add('vocal1')
            ->add('vocal2')
            ->add('tecnicatura', EntityType::class, [
                'class' => Tecnicatura::class,
                'choices' => $options['tecnicaturas'],
                'placeholder' => 'Seleccione una tecnicatura',
                'required' => true,
            ])
            ->add('asignatura', EntityType::class, [
                'class' => Asignatura::class,
                'choices' => $options['asignaturas'],
                'placeholder' => 'Seleccione una asignatura',
                'required' => true,
            ])
            ->add('comision', EntityType::class, [
                'class' => Comision::class,
                'choices' => $options['comisiones'],
                'placeholder' => 'Seleccione una comisión',
                'required' => true,
            ]);
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