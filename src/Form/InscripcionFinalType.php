<?php

namespace App\Form;

use App\Entity\InscripcionFinal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Alumno;
use App\Entity\ExamenFinal;

class InscripcionFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha', DateType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime('today'),
            ])
            ->add('condicion', TextType::class, [
                'required' => false,
                'attr' => ['maxlength' => 20],
            ])
            ->add('alumno_id', EntityType::class, [
                'class' => Alumno::class,
                'choice_label' => 'persona', // o algún campo representativo como nombre completo
                'placeholder' => 'Seleccione un alumno',
            ])
           ->add('examen_final', EntityType::class, [
    'class' => ExamenFinal::class,
    'placeholder' => 'Seleccione un examen final',
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
