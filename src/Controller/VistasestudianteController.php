<?php

namespace App\Controller;

use App\Entity\InscripcionFinal;
use App\Form\InscripcionFinalType;
use App\Repository\InscripcionFinalRepository;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Entity\Nota;
use App\Form\NotaType;
use App\Repository\NotaRepository;
use App\Entity\Cursada;
use App\Form\CursadaType;
use App\Repository\CursadaRepository;
use App\Entity\Alumno;
use App\Form\AlumnoType;
use App\Repository\AlumnoRepository;
use App\Entity\Tecnicatura;
use App\Form\TecnicaturaType;
use App\Repository\TecnicaturaRepository;
use App\Repository\CarrerasRepository;
use App\Entity\Curso;
use App\Form\CursoType;
use App\Repository\CursoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\ORM\EntityManagerInterface;


class VistasestudianteController extends AbstractController
{
  #[Route('/vistasestudiante', name: 'app_vistasestudiante')]
public function index(
    CursoRepository $cursoRepository,
    CarrerasRepository $carrerasRepository,
    AlumnoRepository $alumnoRepository,
    CursadaRepository $cursadaRepository,
    Request $request
): Response {
    $session = $request->getSession();
    $session->remove('tecId');
    $session->remove('comId');

    /** @var User|null $user */
    $user = $this->getUser();

    $alumno = null;
    $alumnoId = null;
    $tecnicaturaId = null;
    $estudianteNombre = null;
    $carreraNombre = null;
    $cursadas = [];
    $carreras = [];

    if ($user) {
        $persona = $user->getPersona();
        if ($persona) {
            $estudianteNombre = $persona->getNombre() . ' ' . $persona->getApellido();
        }

        if ($this->isGranted('ROLE_SUPER_ADMIN') || $this->isGranted('ROLE_ADMIN')) {
            // Admins ven todos los registros de carreras sin filtro
            $carreras = $carrerasRepository->findAll();
        } elseif ($this->isGranted('ROLE_ESTUDIANTE')) {
            // Estudiantes ven sólo sus propias carreras
            if ($persona) {
                $alumno = $alumnoRepository->findOneBy(['persona' => $persona]);
                if ($alumno) {
                    $alumnoId = $alumno->getId();
                    $cursadas = $cursadaRepository->findBy(['alumno' => $alumno]);

                    if ($tecnicatura = $alumno->getTecnicaturaActiva()) {
                        $tecnicaturaId = $tecnicatura->getId();
                        $carreraNombre = $tecnicatura->getNombre();
                    }

                    $carreras = $carrerasRepository->findBy(['estudiante_id' => $alumno]);
                }
            }
        }
    }

    return $this->render('vistasestudiante/index.html.twig', [
        'carreras' => $carreras,
        'cursos' => $cursoRepository->findAll(),
        'alumnoId' => $alumnoId,
        'tecnicaturaId' => $tecnicaturaId,
        'estudianteNombre' => $estudianteNombre,
        'carreraNombre' => $carreraNombre,
        'alumno' => $alumno,
        'cursadas' => $cursadas,
    ]);
}

    #[Route('/miscursos/{Id}/{tecnicaturaId}', name: 'cursos_disponibles')]
    public function cursosDisponiblesAction(Request $request, $Id, $tecnicaturaId)
    {
        // Obtener el ID desde los atributos de la solicitud
        $id = $request->attributes->get('Id', null);
        $tecnicaturaId = $request->attributes->get('tecnicaturaId', null);
        
        // Buscar el alumno usando el ID proporcionado
        $alumno = $this->getDoctrine()->getRepository(Alumno::class)->find($id);
        
        if (!$alumno) {
            throw $this->createNotFoundException('Alumno no encontrado');
        }
        
        // Buscar la tecnicatura usando el ID proporcionado
        $tecnicatura = $this->getDoctrine()->getRepository(Tecnicatura::class)->find($tecnicaturaId);

        if (!$tecnicatura) {
            throw $this->createNotFoundException('Tecnicatura no encontrada');
        }

        // Buscar los cursos que pertenecen a la tecnicatura del alumno
        $cursos = $this->getDoctrine()->getRepository(Curso::class)->createQueryBuilder('c')
            ->innerJoin('c.comision', 'comision')
            ->innerJoin('comision.tecnicatura', 'tecnicatura')
            ->where('tecnicatura.id = :tecnicaturaId')
            ->setParameter('tecnicaturaId', $tecnicaturaId)
            ->getQuery()
            ->getResult();
        
        return $this->render('/vistasestudiante/modal_cursos_disponibles.html.twig', [
            'cursos' => $cursos,
            'id' => $id, 
            'alumno' => $alumno, // Pasar el objeto Alumno a la vista si es necesario
        ]);
    }


    #[Route('/MiCursada/{tecnicatura_id?}/MiComision/{comision_id?}', name: 'crear_MiCursada', methods: ['GET', 'POST'])]
    public function createCursada(Request $request, CursadaRepository $cursadaRepository): Response
    {
        $tecnicatura_id = $request->attributes->get('tecnicatura_id', null);
        $comision_id = $request->attributes->get('comision_id', null);

        $session = $request->getSession();
        if ($tecnicatura_id !== null) {
            $session->set('tecId', $tecnicatura_id);
        }
        if ($comision_id !== null) {
            $session->set('comId', $comision_id);
        }

        $tecId = $session->get('tecId', null);
        $comId = $session->get('comId', null);

        $cursada = new Cursada();
        $form = $this->createForm(CursadaType::class, $cursada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Crear una nueva instancia de Nota
            $nota = new Nota();
            // Asignar valores iniciales a la Nota si es necesario
            $nota->setParcial(''); 
            $nota->setRecuperatorio1('');
            $nota->setParcial2('');
            $nota->setRecuperatorio2('');

            // Asignar la nota creada a la cursada
            $cursada->setNotaId($nota);

            // Guardar la cursada (y la nota asociada debido a la relación en cascada)
            $cursadaRepository->save($cursada, true);

            return $this->redirectToRoute('app_vistasestudiante');
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('vistasestudiante/create_form_cursada.html.twig', [
                'cursada' => $cursada,
                'form' => $form->createView(),
                'tecId' => $tecId,
                'comId' => $comId,
            ]);
        }

        return $this->renderForm('vistasestudiante/create_form_cursada.html.twig', [
            'cursada' => $cursada,
            'form' => $form,
            'tecId' => $tecId,
            'comId' => $comId,
        ]);
    }

    #[Route('/clave/{id}/edit', name: 'editar_usuario', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id, UserRepository $userRepository, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = $userRepository->find($id);
    
        if (!$user) {
            throw $this->createNotFoundException('No user found for id '.$id);
        }
    
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $entityManager->flush();
            return $this->redirectToRoute('app_vistasestudiante', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('vistasestudiante/editar_usuario.html.twig', [
            'user' => $user,
            'form' => $form,
            'id' => $id,
        ]);
    } 


    #[Route('/new', name: 'nuevo_final', methods: ['GET', 'POST'])]
    public function new(Request $request, InscripcionFinalRepository $inscripcionFinalRepository): Response
    {
        $inscripcionFinal = new InscripcionFinal();
        $form = $this->createForm(InscripcionFinalType::class, $inscripcionFinal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $inscripcionFinalRepository->save($inscripcionFinal, true);

            return $this->redirectToRoute('app_vistasestudiante', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('vistasestudiante/create_form_final.html.twig', [
            'inscripcion_final' => $inscripcionFinal,
            'form' => $form,
        ]);
    }




} 
