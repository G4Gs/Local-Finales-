<?php
// src/Form/DataTransformer/TimeStringToDateTimeTransformer.php
namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class TimeStringToDateTimeTransformer implements DataTransformerInterface
{
    // Convierte string => DateTime
    public function transform($value): ?\DateTimeInterface
    {
        if (!$value) {
            return null;
        }

        $time = \DateTime::createFromFormat('H:i', $value);

        if (!$time) {
            throw new TransformationFailedException("Formato de hora inválido: $value");
        }

        return $time;
    }

    // Convierte DateTime => string
    public function reverseTransform($value): ?string
    {
        if (!$value) {
            return null;
        }

        if (!$value instanceof \DateTimeInterface) {
            throw new TransformationFailedException('Se esperaba una instancia de DateTime.');
        }

        return $value->format('H:i');
    }
}
