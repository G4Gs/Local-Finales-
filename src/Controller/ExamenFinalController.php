<?php

namespace App\Controller;

use App\Entity\ExamenFinal;
use App\Form\ExamenFinalType;
use App\Repository\ExamenFinalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//obliga a que no envia a la pagina de error de synfony
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;

#[Route('/examen/final')]
class ExamenFinalController extends AbstractController
{
    #[Route('/', name: 'app_examen_final_index', methods: ['GET'])]
    public function index(ExamenFinalRepository $examenFinalRepository): Response
    {
        return $this->render('examen_final/index.html.twig', [
            'examen_finals' => $examenFinalRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_examen_final_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ExamenFinalRepository $examenFinalRepository): Response
    {
        $examenFinal = new ExamenFinal();
        $form = $this->createForm(ExamenFinalType::class, $examenFinal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $examenFinalRepository->save($examenFinal, true);

            return $this->redirectToRoute('app_examen_final_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('examen_final/new.html.twig', [
            'examen_final' => $examenFinal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_examen_final_show', methods: ['GET'])]
    public function show(ExamenFinal $examenFinal): Response
    {
        return $this->render('examen_final/show.html.twig', [
            'examen_final' => $examenFinal,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_examen_final_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ExamenFinal $examenFinal, ExamenFinalRepository $examenFinalRepository): Response
    {
        $form = $this->createForm(ExamenFinalType::class, $examenFinal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $examenFinalRepository->save($examenFinal, true);

            return $this->redirectToRoute('app_examen_final_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('examen_final/edit.html.twig', [
            'examen_final' => $examenFinal,
            'form' => $form,
        ]);
    }

 #[Route('/{id}', name: 'app_examen_final_delete', methods: ['POST'])]
public function delete(Request $request, ExamenFinal $examenFinal, ExamenFinalRepository $examenFinalRepository): Response
{
    $id = $examenFinal->getId(); // Guarda el ID antes de eliminar

    if ($this->isCsrfTokenValid('delete'.$id, $request->request->get('_token'))) {
        try {
            $examenFinalRepository->remove($examenFinal, true);
        } catch (ForeignKeyConstraintViolationException $e) {
            $this->addFlash('error', 'No puedes eliminar el examen final porque tiene alumnos asociados. Elimina primero los registros de alumnos vinculados a este examen.');
            return $this->redirectToRoute('app_examen_final_edit', ['id' => $id]);
        }
    }

    return $this->redirectToRoute('app_examen_final_index', [], Response::HTTP_SEE_OTHER);
}
}