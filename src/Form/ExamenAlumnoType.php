<?php

namespace App\Form;

use App\Entity\ExamenAlumno;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Alumno;
use App\Entity\ExamenFinal;

class ExamenAlumnoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nota', NumberType::class, [
                'scale' => 1,
                'html5' => true,
                'attr' => [
                    'step' => '0.1',
                    'min' => 1,
                    'max' => 10,
                ],
            ])
            ->add('tomo')
            ->add('folio')
            ->add('alumno', EntityType::class, [
                'class' => Alumno::class,
                'choice_label' => function($alumno) {
                    return $alumno->getId() . ' - ' . $alumno->getPersona();
                },
                'label' => 'Alumno',
            ])
            ->add('examenFinal', EntityType::class, [
                'class' => ExamenFinal::class,
                'choice_label' => function($examenFinal) {
                    return $examenFinal->getId() . ' - ' . ($examenFinal->getFecha() ? $examenFinal->getFecha()->format('Y-m-d') : '');
                },
                'label' => 'Examen Final',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ExamenAlumno::class,
        ]);
    }
}
