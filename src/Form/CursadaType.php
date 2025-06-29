<?php

namespace App\Form;

use App\Entity\Alumno;
use App\Entity\Cursada;
use App\Entity\Modalidad;
use App\Entity\Curso;
use App\Entity\Carreras;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CursadaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $tecnicatura = $options['tecnicatura'] ?? null;
        $curso = $options['curso'] ?? null;

        $builder
            ->add('condicion', ChoiceType::class, [
                'choices' => [
                    'Regular' => 'regular',
                    'Libre' => 'libre',
                    'Oyente' => 'oyente',
                ],
                'label' => 'Condición',
            ])
            ->add('alumno', EntityType::class, [
                'class' => Alumno::class,
                'choice_label' => function ($alumno) {
                    return $alumno->getApellido() . ', ' . $alumno->getNombre();
                },
                'placeholder' => 'Seleccionar alumno',
                'query_builder' => function (EntityRepository $er) use ($tecnicatura) {
                    if (!$tecnicatura) {
                        // Si no hay tecnicatura, no mostrar alumnos
                        return $er->createQueryBuilder('a')->where('1=0');
                    }
                    return $er->createQueryBuilder('a')
                       ->innerJoin(Carreras::class, 'c', 'WITH', 'c.estudiante_id = a AND c.tecnicatura_id = :tec')

                        ->setParameter('tec', $tecnicatura);
                },
                'label' => 'Alumno',
            ])
            ->add('modalidad', EntityType::class, [
                'class' => Modalidad::class,
                'placeholder' => 'Seleccione una modalidad',
                'label' => 'Modalidad',
            ])
            ->add('nota_id') // si lo usás así
            ->add('curso', EntityType::class, [
                'class' => Curso::class,
                'choice_label' => 'id',
                'data' => $curso,
                'mapped' => true,
                'label' => false,
                'attr' => ['style' => 'display:none;'], // oculto para que no se edite
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cursada::class,
            'tecnicatura' => null,
            'curso' => null,
        ]);
    }
}
