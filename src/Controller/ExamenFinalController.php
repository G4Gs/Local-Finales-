<?php

namespace App\Controller;

use App\Entity\ExamenFinal;
use App\Form\ExamenFinalType;
use App\Repository\ExamenFinalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ExamenAlumnoRepository;
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
public function delete(Request $request, ExamenFinal $examenFinal, ExamenFinalRepository $examenFinalRepository, ExamenAlumnoRepository $examenAlumnoRepository): Response
{
    $id = $examenFinal->getId(); 
    // Obtiene los alumnos asociados al examen final
   $alumnosAsociados = $examenAlumnoRepository->findBy(['examenFinal_id' => $examenFinal]);
  
      if (count($alumnosAsociados) > 0) {
            // Construye un mensaje con los IDs o nombres de los alumnos
            $info = [];
            foreach ($alumnosAsociados as $alumno) {
                $info[] = $alumno->getAlumno()->getNombre();
                $examenAlumnoRepository->remove($alumno, true);
            }
            $this->addFlash('error', 'No puedes eliminar el examen final porque tiene alumnos asociados: ' . implode(', ', $info));
            return $this->redirectToRoute('app_examen_final_edit', ['id' => $id]);
        }

        // Si no hay alumnos asociados, elimina el examen final
        try {
            $examenFinalRepository->remove($examenFinal, true);
        } catch (ForeignKeyConstraintViolationException $e) {
            $this->addFlash('error', 'Error inesperado al eliminar el examen final, Por favor borrelos desde la BD');
            return $this->redirectToRoute('app_examen_final_edit', ['id' => $id]);
        }
        
        $examenFinalRepository->remove($examenFinal, true);

        return $this->redirectToRoute('app_examen_final_index', [], Response::HTTP_SEE_OTHER);
    }

    public function remove(ExamenFinal $entity, bool $flush = false): void{
    $this->_em->remove($entity);
    if ($flush) {
        $this->_em->flush();
    }
}
}