<?php

namespace App\Form;

use App\Entity\InscripcionFinal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Curso;

class InscripcionFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha', DateType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime('today'),  // Establece la fecha por defecto del sistema
            ])
            ->add('alumno')
            ->add('asignatura')
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
            'data_class' => InscripcionFinal::class,
        ]);
    }
}
