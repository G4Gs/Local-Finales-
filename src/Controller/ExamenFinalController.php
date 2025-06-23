<?php

namespace App\Controller;

use App\Entity\ExamenFinal;
use App\Form\ExamenFinalType;
use App\Repository\ExamenFinalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
=======
use App\Repository\ExamenAlumnoRepository;
//obliga a que no envie a la pagina de error de synfony
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8

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
  public function new(Request $request, ExamenFinalRepository $examenFinalRepository): Response{
    $examenFinal = new ExamenFinal();
    $form = $this->createForm(ExamenFinalType::class, $examenFinal);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        try {
            $examenFinalRepository->save($examenFinal, true);
            return $this->redirectToRoute('app_examen_final_index');
       } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
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
 public function edit(Request $request, ExamenFinal $examenFinal, ExamenFinalRepository $examenFinalRepository): Response{
    $form = $this->createForm(ExamenFinalType::class, $examenFinal);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        try {
            $examenFinalRepository->save($examenFinal, true);
            return $this->redirectToRoute('app_examen_final_index');
        } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
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

<<<<<<< HEAD
    #[Route('/{id}', name: 'app_examen_final_delete', methods: ['POST'])]
    public function delete(Request $request, ExamenFinal $examenFinal, ExamenFinalRepository $examenFinalRepository): Response
    {
        $id = $examenFinal->getId();

        if ($this->isCsrfTokenValid('delete'.$id, $request->request->get('_token'))) {
            try {
                $examenFinalRepository->remove($examenFinal, true);
            } catch (ForeignKeyConstraintViolationException $e) {
                $this->addFlash('error', 'No puedes eliminar el examen final porque tiene alumnos asociados. Elimina primero los registros de alumnos vinculados a este examen.');
                return $this->redirectToRoute('app_examen_final_edit', ['id' => $id]);
            }
        }
=======
>>>>>>> dbb35f2e0ed046077df855ec631d238ddedf5cd8


#[Route('/{id}', name: 'app_examen_final_delete', methods: ['POST'])]
public function delete(Request $request, ExamenFinal $examenFinal, ExamenFinalRepository $examenFinalRepository, ExamenAlumnoRepository $examenAlumnoRepository): Response
{
    $alumnosAsociados = $examenAlumnoRepository->findBy(['examenFinal_id' => $examenFinal]);

    // Si hay alumnos asociados, puedes mostrar un mensaje y evitar el borrado
    if (count($alumnosAsociados) > 0) {
        $this->addFlash('error', 'No se puede eliminar el examen final porque tiene alumnos asociados.');
        return $this->redirectToRoute('app_examen_final_edit', ['id' => $examenFinal->getId()]);
    }

    try {
        $examenFinalRepository->remove($examenFinal, true);
    } catch (ForeignKeyConstraintViolationException $e) {
        if ($examenFinal->getId()) {
            $this->addFlash('error', 'Error inesperado al eliminar el examen final, Por favor borrelos desde la BD');
            return $this->redirectToRoute('app_examen_final_edit', ['id' => $examenFinal->getId()]);
        } else {
            $this->addFlash('error', 'No se encontró el examen final.');
            return $this->redirectToRoute('app_examen_final_index');
        }
    }

    return $this->redirectToRoute('app_examen_final_index', [], Response::HTTP_SEE_OTHER);
}

 }