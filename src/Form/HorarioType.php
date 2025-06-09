<?php

namespace App\Form;

use App\Entity\Horario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HorarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $dias = [
            'Lunes' => 'Lunes',
            'Martes' => 'Martes',
            'Miércoles' => 'Miércoles',
            'Jueves' => 'Jueves',
            'Viernes' => 'Viernes',
            'Sábado' => 'Sábado',
            'Domingo' => 'Domingo',
        ];

        $horas = [];
        for ($h = 0; $h <= 23; $h++) {
            $horaStr = str_pad($h, 2, '0', STR_PAD_LEFT);
            $horas[$horaStr . ':00'] = $horaStr . ':00';
        }

        $builder
            ->add('dia', ChoiceType::class, [
                'choices' => $dias,
                'label' => 'Día',
                'placeholder' => 'Seleccione un día',
            ])
            ->add('horarioInicio', ChoiceType::class, [
                'choices' => $horas,
                'label' => 'Hora de inicio',
                'placeholder' => 'Seleccione la hora',
            ])
            ->add('horarioFin', ChoiceType::class, [
                'choices' => $horas,
                'label' => 'Hora de fin',
                'placeholder' => 'Seleccione la hora',
            ])
            ->add('cantModulos', TextType::class, [
                'label' => 'Cantidad de módulos'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Horario::class,
        ]);
    }
}
