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
use App\Repository\ExamenAlumnoRepository;
//obliga a que no envie a la pagina de error de synfony
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

#[Route('/examen/final')]
class ExamenFinalController extends AbstractController
{
    #[Route('/', name: 'app_examen_final_index', methods: ['GET'])]
    public function index(Request $request, ExamenFinalRepository $examenFinalRepository): Response
    {
        $tecnicatura = $request->query->get('tecnicatura');
        $asignatura = $request->query->get('asignatura');
        $presidente = $request->query->get('presidente');

        $examen_finals = $examenFinalRepository->findByFilters($tecnicatura, $asignatura, $presidente);

        return $this->render('examen_final/index.html.twig', [
            'examen_finals' => $examen_finals,
        ]);
    }

    #[Route('/new', name: 'app_examen_final_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ExamenFinalRepository $examenFinalRepository): Response
    {
        $examenFinal = new ExamenFinal();
        $form = $this->createForm(ExamenFinalType::class, $examenFinal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $examenFinalRepository->save($examenFinal, true);
                return $this->redirectToRoute('app_examen_final_index');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Error inesperado al guardar el examen final.');
                return $this->redirectToRoute('app_examen_final_index');
            }
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('examen_final/_form.html.twig', [
                'form' => $form->createView(),
                'button_label' => 'Guardar',
                'examen_final' => $examenFinal,
            ]);
        }

        return $this->renderForm('examen_final/new.html.twig', [
            'examen_final' => $examenFinal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_examen_final_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ExamenFinal $examenFinal, ExamenFinalRepository $examenFinalRepository): Response
    {
        $form = $this->createForm(ExamenFinalType::class, $examenFinal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $examenFinalRepository->save($examenFinal, true);
                return $this->redirectToRoute('app_examen_final_index');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Error inesperado al guardar el examen final.');
                return $this->redirectToRoute('app_examen_final_index');
            }
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('examen_final/_form.html.twig', [
                'form' => $form->createView(),
                'button_label' => 'Actualizar',
                'examen_final' => $examenFinal,
            ]);
        }

        return $this->renderForm('examen_final/edit.html.twig', [
            'examen_final' => $examenFinal,
            'form' => $form,
        ]);
}



  #[Route('/{id}', name: 'app_examen_final_delete', methods: ['POST'])]
 public function delete(Request $request, ExamenFinal $examenFinal, ExamenFinalRepository $examenFinalRepository, ExamenAlumnoRepository $examenAlumnoRepository): Response
 {
    if (!$this->isCsrfTokenValid('delete' . $examenFinal->getId(), $request->request->get('_token'))) {
        $this->addFlash('error', 'Token CSRF inválido.');
        return $this->redirectToRoute('app_examen_final_edit', ['id' => $examenFinal->getId()]);
    }

    // Usa el nombre correcto de la propiedad de la relación
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