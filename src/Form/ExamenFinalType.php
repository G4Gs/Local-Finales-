<?php

namespace App\Form;

use App\Entity\ExamenFinal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityRepository;

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
                'choice_label' => 'persona',
                'required' => true,
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
                'required' => true,
                'placeholder' => 'Seleccione un curso',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->join('c.asignatura', 'a')
                        ->join('a.tecnicatura', 't')
                        ->orderBy('t.nombre', 'ASC')
                        ->addOrderBy('a.nombre', 'ASC')
                        ->addOrderBy('c.comision', 'ASC');
                },
                'choice_label' => function ($curso) {
                    return (string) $curso;
                },
            ])
            ->add('modalidadMesa', TextType::class, [
                'required' => true,
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
