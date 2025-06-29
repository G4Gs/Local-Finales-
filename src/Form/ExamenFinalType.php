<?php

namespace App\Form;

use App\Entity\ExamenFinal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ExamenFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha', DateTimeType::class, [
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('presidente', EntityType::class, [
                'class' => \App\Entity\Docente::class,
                'choice_label' => 'persona', // o el campo que quieras mostrar
            ])
            ->add('Vocal1', EntityType::class, [
                'class' => \App\Entity\Docente::class,
                'choice_label' => 'persona',
                'required' => false,
            ])
            ->add('Vocal2', EntityType::class, [
                'class' => \App\Entity\Docente::class,
                'choice_label' => 'persona',
                'required' => false,
            ])
            ->add('curso', EntityType::class, [
                'class' => \App\Entity\Curso::class,
                'required' => false,
                'placeholder' => 'Seleccione un curso',
            ])
            ->add('modalidadMesa', TextType::class, [
                'required' => false,
                'label' => 'Modalidad Mesa',
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
