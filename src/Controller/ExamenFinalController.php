<?php

namespace App\Controller;

use App\Entity\ExamenFinal;
use App\Form\ExamenFinalType;
use App\Repository\ExamenFinalRepository;
use App\Repository\ExamenAlumnoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\InscripcionFinalRepository;
//obliga a que no envie a la pagina de error de synfony
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

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

        $examen_finals = $examenFinalRepository->findByFilters($curso, $presidente);
        $examen_alumnos = $examenAlumnoRepository->findAll();
        $inscripcion_finals = $inscripcionFinalRepository->findAll();

        return $this->render('examen_final/index.html.twig', [
            'examen_finals' => $examen_finals,
            'examen_alumnos' => $examen_alumnos,
            'inscripcion_finals' => $inscripcion_finals,
        ]);
    }
  #[Route('/new', name: 'app_examen_final_new', methods: ['GET', 'POST'])]
 public function new(Request $request, ExamenFinalRepository $examenFinalRepository): Response
 {
    $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

    $examenFinal = new ExamenFinal();
    $form = $this->createForm(ExamenFinalType::class, $examenFinal);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
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
    public function edit(Request $request, ExamenFinal $examenFinal, ExamenFinalRepository $examenFinalRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

        $form = $this->createForm(ExamenFinalType::class, $examenFinal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
}