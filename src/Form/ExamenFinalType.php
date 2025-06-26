<?php

namespace App\Form;

use App\Entity\ExamenFinal;
use App\Entity\Curso;
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
            ->add('curso', EntityType::class, [
                'class' => Curso::class,
                'choices' => $options['cursos'],
                'choice_label' => function ($curso) {
                    return $curso->getAsignatura()->getNombre() . ' - ' .
                           $curso->getComision()->getCicloLectivo() . ' - ' .
                           $curso->getComision()->getComision() . ' - ' .
                           $curso->getComision()->getTecnicatura()->getNombre();
                },
                'placeholder' => 'Seleccione un curso',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ExamenFinal::class,
            'cursos' => [],
            'tecnicaturas' => [],
            'comisiones' => [],
        ]);
    }
}