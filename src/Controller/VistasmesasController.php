<?php
namespace App\Controller;

use App\Repository\InscripcionFinalRepository;
use App\Repository\ExamenAlumnoRepository;
use App\Repository\ExamenFinalRepository;
use App\Entity\ExamenAlumno;
use App\Entity\ExamenFinal;
use App\Form\ExamenAlumnoType;
use App\Form\ExamenFinalType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VistasmesasController extends AbstractController
{
    #[Route('/vistasmesas', name: 'app_vistasmesas')]
    public function index(ExamenFinalRepository $examenFinalRepository, ExamenAlumnoRepository $examenAlumnoRepository, InscripcionFinalRepository $inscripcionFinalRepository): Response
    {
        return $this->render('vistasmesas/index.html.twig', [
            'examen_finals' => $examenFinalRepository->findAll(),
            'examen_alumnos' => $examenAlumnoRepository->findAll(),
            'inscripcion_finals' => $inscripcionFinalRepository->findAll(),
        ]);
    }

    #[Route('/nuevamesa', name: 'nueva_mesa', methods: ['GET', 'POST'])]
    public function nuevaMesaFinal(Request $request, ExamenFinalRepository $examenFinalRepository): Response
    {
        $examenFinal = new ExamenFinal();
        $form = $this->createForm(ExamenFinalType::class, $examenFinal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $examenFinalRepository->save($examenFinal, true);

            return $this->redirectToRoute('app_vistasmesas'); // Redirige a la página de vistas
        }

        return $this->renderForm('vistasmesas/crear_mesa_form.html.twig', [
            'examen_final' => $examenFinal,
            'form' => $form,
        ]);
    }

    #[Route('/nuevaNotaFinal', name: 'nueva_notaFinal', methods: ['GET', 'POST'])]
    public function nuevaNotaFinal(Request $request, ExamenAlumnoRepository $examenAlumnoRepository): Response
    {
        $examenAlumno = new ExamenAlumno();
        $form = $this->createForm(ExamenAlumnoType::class, $examenAlumno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $examenAlumnoRepository->save($examenAlumno, true);

            return $this->redirectToRoute('app_vistasmesas'); // Redirige a la página de vistas
        }

        return $this->renderForm('vistasmesas/nueva_notaFinal_form.html.twig', [
            'examen_alumno' => $examenAlumno,
            'form' => $form,
        ]);
    }
}
