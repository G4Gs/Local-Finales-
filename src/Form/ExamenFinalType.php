<?php

namespace App\Form;

use App\Entity\ExamenFinal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Docente;
use App\Entity\Asignatura;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ExamenFinalType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $builder
        ->add('fecha')
        ->add('presidente_id', EntityType::class, [
            'class' => Docente::class,
            'choice_label' => 'persona',
            'label' => 'Presidente',
        ])
        ->add('Vocal1_id', EntityType::class, [
            'class' => Docente::class,
            'choice_label' => 'persona',
            'label' => 'Vocal 1',
            'required' => false,
        ])
        ->add('Vocal2_id', EntityType::class, [
            'class' => Docente::class,
            'choice_label' => 'persona',
            'label' => 'Vocal 2',
            'required' => false,
        ])
        ->add('asignatura_id', EntityType::class, [
            'class' => Asignatura::class,
            'choice_label' => 'nombre',
            'label' => 'Asignatura',
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