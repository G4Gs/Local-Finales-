<?php

namespace App\Controller;

use App\Entity\Horario;
use App\Form\HorarioType;
use App\Repository\HorarioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/horario')]
class HorarioController extends AbstractController
{
    #[Route('/', name: 'app_horario_index', methods: ['GET'])]
    public function index(HorarioRepository $horarioRepository): Response
    {
        return $this->render('horario/index.html.twig', [
            'horarios' => $horarioRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_horario_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $horario = new Horario();
        $form = $this->createForm(HorarioType::class, $horario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($horario);
            $em->flush();

            $this->addFlash('success', 'Horario creado correctamente.');
            return $this->redirectToRoute('app_horario_index');
        }

        return $this->render('horario/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_horario_show', methods: ['GET'])]
    public function show(Horario $horario): Response
    {
        return $this->render('horario/show.html.twig', [
            'horario' => $horario,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_horario_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Horario $horario, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(HorarioType::class, $horario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $this->addFlash('success', 'Horario actualizado correctamente.');
            return $this->redirectToRoute('app_horario_index');
        }

        return $this->render('horario/edit.html.twig', [
            'form' => $form->createView(),
            'horario' => $horario,
        ]);
    }

    #[Route('/{id}', name: 'app_horario_delete', methods: ['POST'])]
    public function delete(Request $request, Horario $horario, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $horario->getId(), $request->request->get('_token'))) {
            $em->remove($horario);
            $em->flush();

            $this->addFlash('success', 'Horario eliminado correctamente.');
        }

        return $this->redirectToRoute('app_horario_index');
    }

   

}
