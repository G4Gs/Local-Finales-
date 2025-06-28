<?php

namespace App\Controller;

use App\Entity\ExamenFinal;
use App\Form\ExamenFinalType;
use App\Repository\ExamenFinalRepository;
use App\Repository\ExamenAlumnoRepository;
use App\Repository\InscripcionFinalRepository;
use App\Repository\CursoRepository;
use App\Repository\ComisionRepository;
use App\Repository\TecnicaturaRepository;
use App\Repository\AsignaturaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/examen/final')]
class ExamenFinalController extends AbstractController
{
    #[Route('/', name: 'app_examen_final_index', methods: ['GET'])]
    public function index(
        Request $request,
        ExamenFinalRepository $examenFinalRepository,
        ExamenAlumnoRepository $examenAlumnoRepository,
        InscripcionFinalRepository $inscripcionFinalRepository
    ): Response {
        $curso = $request->query->get('curso');
        $presidente = $request->query->get('presidente');

        $examen_finals = $examenFinalRepository->findByFilters($presidente, $curso);
        $examen_alumnos = $examenAlumnoRepository->findAll();
        $inscripcion_finals = $inscripcionFinalRepository->findAll();

        return $this->render('examen_final/index.html.twig', [
            'examen_finals' => $examen_finals,
            'examen_alumnos' => $examen_alumnos,
            'inscripcion_finals' => $inscripcion_finals,
            'curso' => $curso,
        ]);
    }

    #[Route('/new', name: 'app_examen_final_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        ExamenFinalRepository $examenFinalRepository,
        CursoRepository $cursoRepository,
        ComisionRepository $comisionRepository,
        TecnicaturaRepository $tecnicaturaRepository
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

        $examenFinal = new ExamenFinal();

        // Filtrar cursos por ciclo lectivo actual (ajusta el filtro si lo necesitas)
        $cicloLectivoActual = date('Y');
        $cursos = $cursoRepository->createQueryBuilder('c')
            ->join('c.comision', 'com')
            ->where('com.ciclo_lectivo = :ciclo')
            ->setParameter('ciclo', $cicloLectivoActual)
            ->getQuery()
            ->getResult();

        $tecnicaturas = $tecnicaturaRepository->findAll();
        $asignaturas = []; // o filtradas si editas
        $comisiones = [];  // o filtradas si editas

        $form = $this->createForm(ExamenFinalType::class, $examenFinal, [
            'tecnicaturas' => $tecnicaturas,
            'asignaturas' => [], // <-- vacío al inicio
            'comisiones' => [],
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si el campo asignatura viene por POST pero no está en los choices originales:
            $asignaturaId = $request->request->get('examen_final')['asignatura'] ?? null;
            if ($asignaturaId) {
                $asignatura = $asignaturaRepository->find($asignaturaId);
                $examenFinal->setAsignatura($asignatura);
            }
            // Lo mismo para comisión si es necesario

            $examenFinalRepository->save($examenFinal, true);

            if ($request->isXmlHttpRequest()) {
                return new Response('', 200);
            }
            return $this->redirectToRoute('app_examen_final_index', [], Response::HTTP_SEE_OTHER);
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('examen_final/_form.html.twig', [
                'form' => $form->createView(),
                'button_label' => 'Guardar',
                'examen_final' => $examenFinal,
            ]);
        }

        return $this->render('examen_final/new.html.twig', [
            'form' => $form->createView(),
            'examen_final' => $examenFinal,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_examen_final_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        ExamenFinal $examenFinal,
        ExamenFinalRepository $examenFinalRepository,
        CursoRepository $cursoRepository,
        ComisionRepository $comisionRepository,
        TecnicaturaRepository $tecnicaturaRepository
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

        // Filtrar cursos por ciclo lectivo actual (ajusta el filtro si lo necesitas)
        $cicloLectivoActual = date('Y');
        $cursos = $cursoRepository->createQueryBuilder('c')
            ->join('c.comision', 'com')
            ->where('com.ciclo_lectivo = :ciclo')
            ->setParameter('ciclo', $cicloLectivoActual)
            ->getQuery()
            ->getResult();

        $tecnicaturas = $tecnicaturaRepository->findAll();
        $asignaturas = []; // o filtradas si editas
        $comisiones = [];  // o filtradas si editas

        $form = $this->createForm(ExamenFinalType::class, $examenFinal, [
            'tecnicaturas' => $tecnicaturas,
            'asignaturas' => [], // <-- vacío al inicio
            'comisiones' => [],
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si el campo asignatura viene por POST pero no está en los choices originales:
            $asignaturaId = $request->request->get('examen_final')['asignatura'] ?? null;
            if ($asignaturaId) {
                $asignatura = $asignaturaRepository->find($asignaturaId);
                $examenFinal->setAsignatura($asignatura);
            }
            // Lo mismo para comisión si es necesario

            try {
                $examenFinalRepository->save($examenFinal, true);
                return $this->json(['success' => true]);
            } catch (UniqueConstraintViolationException $e) {
                return $this->json(['success' => false, 'error' => 'Error inesperado al guardar el examen final.']);
            }
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('vistasmesas/Super_Editar.html.twig', [
                'form_examen_final' => $form->createView(),
                'examen_final' => $examenFinal,
            ]);
        }

        return $this->render('vistasmesas/Super_Editar.html.twig', [
            'form_examen_final' => $form->createView(),
            'examen_final' => $examenFinal,
        ]);
    }

    #[Route('/{id}', name: 'app_examen_final_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        ExamenFinal $examenFinal,
        ExamenFinalRepository $examenFinalRepository,
        ExamenAlumnoRepository $examenAlumnoRepository
    ): Response {
        if (!$this->isCsrfTokenValid('delete' . $examenFinal->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF inválido.');
            return $this->redirectToRoute('app_examen_final_edit', ['id' => $examenFinal->getId()]);
        }

        $alumnosAsociados = $examenAlumnoRepository->findBy(['examenFinal_id' => $examenFinal]);

        if (count($alumnosAsociados) > 0) {
            $this->addFlash('error', 'No se puede eliminar el examen final porque tiene alumnos asociados.');
            return $this->redirectToRoute('app_examen_final_edit', ['id' => $examenFinal->getId()]);
        }

        try {
            $examenFinalRepository->remove($examenFinal, true);
            $this->addFlash('success', 'Examen final eliminado correctamente.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Error al eliminar: ' . $e->getMessage());
            return $this->redirectToRoute('app_examen_final_edit', ['id' => $examenFinal->getId()]);
        }

        return $this->redirectToRoute('app_examen_final_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/asignaturas/by-tecnicatura/{id}', name: 'asignaturas_by_tecnicatura', methods: ['GET'])]
    public function asignaturasByTecnicatura(AsignaturaRepository $asignaturaRepository, $id): JsonResponse
    {
        $asignaturas = $asignaturaRepository->findBy(['tecnicatura' => $id]);
        $data = [];
        foreach ($asignaturas as $asignatura) {
            $data[] = [
                'id' => $asignatura->getId(),
                'nombre' => $asignatura->getNombre(),
            ];
        }
        return new JsonResponse($data);
    }

    #[Route('/comisiones/by-asignatura/{id}', name: 'comisiones_by_asignatura', methods: ['GET'])]
    public function comisionesByAsignatura(ComisionRepository $comisionRepository, $id): JsonResponse
    {
        $comisiones = $comisionRepository->createQueryBuilder('c')
            ->where('c.asignatura = :asignatura')
            ->setParameter('asignatura', $id)
            ->getQuery()
            ->getResult();

        $data = [];
        foreach ($comisiones as $comision) {
            $data[] = [
                'id' => $comision->getId(),
                'nombre' => $comision->getNombre(),
            ];
        }
        return new JsonResponse($data);
    }

    #[Route('/examen/final/form-update', name: 'app_examen_final_form_update', methods: ['POST'])]
    public function updateForm(
        Request $request,
        ComisionRepository $comisionRepository
    ): Response {
        $data = $request->request->all();

        $comisiones = [];
        if (!empty($data['curso'])) {
            $comisiones = $comisionRepository->findBy(['curso' => $data['curso']]);
        }

        $examenFinal = new ExamenFinal();
        $form = $this->createForm(ExamenFinalType::class, $examenFinal, [
            'comisiones' => $comisiones,
        ]);

        $form->submit($data, false);

        return $this->render('examen_final/_form.html.twig', [
            'form' => $form->createView(),
            'examen_final' => $examenFinal,
            'button_label' => 'Guardar',
        ]);
    }
}