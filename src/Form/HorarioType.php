<?php

namespace App\Form;

use App\Entity\Horario;
use App\Entity\Curso;
use App\Form\DataTransformer\TimeStringToDateTimeTransformer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HorarioType extends AbstractType
{
    private TimeStringToDateTimeTransformer $transformer;

    public function __construct(TimeStringToDateTimeTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dia', ChoiceType::class, [
                'label' => 'Día',
                'choices' => [
                    'Lunes' => 'Lunes',
                    'Martes' => 'Martes',
                    'Miércoles' => 'Miércoles',
                    'Jueves' => 'Jueves',
                    'Viernes' => 'Viernes',
                    'Sábado' => 'Sábado',
                ],
                'placeholder' => 'Seleccionar día',
            ])
            ->add('horarioInicio', TimeType::class, [
                'label' => 'Hora de inicio',
                'widget' => 'single_text',
                'input' => 'datetime',
                'html5' => true,
            ])
            ->add('horarioFin', TimeType::class, [
                'label' => 'Hora de fin',
                'widget' => 'single_text',
                'input' => 'datetime',
                'html5' => true,
            ])
            ->add('cantModulos', null, [
                'label' => 'Cantidad de módulos',
            ])
            ->add('curso', EntityType::class, [
                'class' => Curso::class,
                'choice_label' => fn(Curso $curso) => (string) $curso,
                'placeholder' => 'Seleccionar curso',
                'label' => 'Curso',
            ]);

        // Aplicar el transformer a los campos de tiempo
        $builder->get('horarioInicio')->addModelTransformer($this->transformer);
        $builder->get('horarioFin')->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Horario::class,
        ]);
    }
}
