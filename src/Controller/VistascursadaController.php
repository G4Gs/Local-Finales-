<?php

namespace App\Controller;

use App\Entity\Nota;
use App\Form\NotaType;
use App\Repository\NotaRepository;
use App\Entity\Asignatura;
use App\Form\AsignaturaType;
use App\Repository\AsignaturaRepository;
use App\Entity\Tecnicatura;
use App\Form\TecnicaturaType;
use App\Repository\TecnicaturaRepository;
use App\Entity\Comision;
use App\Form\ComisionType;
use App\Repository\ComisionRepository;
use App\Entity\Cursada;
use App\Form\CursadaType;
use App\Repository\CursadaRepository;
use App\Entity\Curso;
use App\Form\CursoType;
use App\Entity\Horario;
use App\Form\HorarioType;
use App\Repository\HorarioRepository;
use App\Repository\CursoRepository;
use App\Entity\CursadaDocente;
use App\Form\CursadaDocenteType;
use App\Repository\CursadaDocenteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Doctrine\ORM\EntityManagerInterface;

class VistascursadaController extends AbstractController
{
    #[Route('/vistascursada', name: 'app_vistascursada')]
    public function index(
        CursadaDocenteRepository $cursadaDocenteRepository, 
        CursoRepository $cursoRepository, 
        CursadaRepository $cursadaRepository, 
        ComisionRepository $comisionRepository, 
        TecnicaturaRepository $tecnicaturaRepository, 
        AsignaturaRepository $asignaturaRepository, 
        Request $request
    ): Response {
        // Recuperar `tecId`, `comId`, `cursoId` de la sesión
        $session = $request->getSession();
        $tecId = $session->get('tecId', null);
        $comId = $session->get('comId', null);
        $cursoId = $session->get('cursoId', null);
    

        // Obtener el ciclo lectivo de la solicitud o usar el año actual
        $cicloLectivo = $request->query->get('cicloLectivo', date('Y'));


        // Filtrar los cursos por ciclo lectivo si se proporciona
        if ($cicloLectivo) {
            // Filtrar los cursos en base al ciclo lectivo
             $cursos = $cursoRepository->findByCicloLectivo($cicloLectivo);
        } else {
            // Si no se proporciona el ciclo lectivo, obtener todos los cursos
            $cursos = $cursoRepository->findAll();
        }
    
        // Limpiar variables de sesión
        if ($tecId !== null) {
            $session->remove('tecId');
        }
    
        if ($comId !== null) {
            $session->remove('comId');
        }
    
        if ($cursoId !== null) {
            $session->remove('cursoId');
        }
    
        // Renderizar la vista con los resultados filtrados
        return $this->render('vistascursada/index.html.twig', [
            'tecnicaturas' => $tecnicaturaRepository->findAll(),
            'asignaturas' => $asignaturaRepository->findAll(),
            'comisiones' => $comisionRepository->findAll(),
            'cursadas' => $cursadaRepository->findAll(),
            'cursos' => $cursos, // Cursos filtrados
            'cursada_docentes' => $cursadaDocenteRepository->findAll(),
            'tecId' => $tecId,
            'comId' => $comId,
            'cursoId' => $cursoId,
            'cicloLectivo' => $cicloLectivo,
        ]);
    }

    /*
    #[Route('/vistascursada', name: 'app_vistascursada')]
    public function index(CursadaDocenteRepository $cursadaDocenteRepository, CursoRepository $cursoRepository, CursadaRepository $cursadaRepository, ComisionRepository $comisionRepository, TecnicaturaRepository $tecnicaturaRepository, AsignaturaRepository $asignaturaRepository, Request $request): Response
    {
        // Recuperar `tecId` de la sesión esto para cuando estoy cargando asignaturas y que no se pierda tecId
        $session = $request->getSession();
        $tecId = $session->get('tecId', null);
        $comId = $session->get('comId', null);
        $cursoId = $session->get('cursoId', null);

        if ($tecId === null) {
            $tecId = null; 
        } else {
            $session->remove('tecId');
        }

        if ($comId === null) {
            $comId = null; 
        } else {
            $session->remove('comId');
        }

        if ($cursoId === null) {
            $cursod = null; 
        } else {
            $session->remove('cursoId');
        }
    
        return $this->render('vistascursada/index.html.twig', [
            'tecnicaturas' => $tecnicaturaRepository->findAll(),
            'asignaturas' => $asignaturaRepository->findAll(),
            'comisiones' => $comisionRepository->findAll(),
            'cursadas' => $cursadaRepository->findAll(),
            'cursos' => $cursoRepository->findAll(),
            'cursada_docentes' => $cursadaDocenteRepository->findAll(),
            'tecId' => $tecId,
            'comId' => $comId,
            'cursoId' => $cursoId,
        ]);
    }*/

    #[Route('/cursodocente/{curso_id?}', name: 'crear_cursada_docente', methods: ['GET', 'POST'])]
    public function createCursadaDocente(Request $request, CursadaDocenteRepository $cursadaDocenteRepository): Response
    {
        $curso_id = $request->attributes->get('curso_id', null);
    
        // Almacenar `cursoId` en la sesión
        $session = $request->getSession();
        if ($curso_id !== null) {
            $session->set('cursoId', $curso_id);
        }

        $cursoId = $session->get('cursoId', null); 

        $cursadaDocente = new CursadaDocente();
        $form = $this->createForm(CursadaDocenteType::class, $cursadaDocente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cursadaDocenteRepository->save($cursadaDocente, true);

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'success' => true,
                    'message' => 'Comision actualizada correctamente.',
                ]);
            }
            // Redirigir a la vista `index` con todos los datos
            return $this->redirectToRoute('app_vistascursada');
        }
        if ($request->isXmlHttpRequest()) {
            return $this->render('vistascursada/create_form_cursadadocente.html.twig', [
                'cursada_docente' => $cursadaDocente,
                'form' => $form->createView(),
                'cursoId' => $cursoId,
            ]);
        }
    
        return $this->renderForm('vistascursada/create_form_cursadadocente.html.twig', [
            'cursada_docente' => $cursadaDocente,
            'form' => $form,
            'cursoId' => $cursoId,
        ]);

       
    }
    
    
    #[Route('/editarcursadadocente/{curso_id}/{cursada_docente_id}', name: 'editar_cursada_docente')]
    public function editarCursadaDocente(Request $request, CursadaDocenteRepository $cursadaDocenteRepository, int $curso_id, int $cursada_docente_id): Response
    {
        // Obtener el objeto CursadaDocente
        $cursadaDocente = $cursadaDocenteRepository->find($cursada_docente_id);
        if (!$cursadaDocente) {
            throw $this->createNotFoundException('CursadaDocente no encontrado');
        }
    
        $form = $this->createForm(CursadaDocenteType::class, $cursadaDocente);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $cursadaDocenteRepository->save($cursadaDocente, true);
    
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'success' => true,
                    'message' => 'Cursada Docente actualizada correctamente.',
                ]);
            }
    
            // Redirigir a la vista `index` con todos los datos
            return $this->redirectToRoute('app_vistascursada');
        }
    
        if ($request->isXmlHttpRequest()) {
            return $this->render('vistascursada/edit_cursadadocente.html.twig', [
                'cursadaDocente' => $cursadaDocente,
                'form' => $form->createView(),
                'cursoId' => $curso_id,
            ]);
        }
    
        return $this->renderForm('vistascursada/edit_cursadadocente.html.twig', [
            'cursadaDocente' => $cursadaDocente,
            'form' => $form,
            'cursoId' => $curso_id,
        ]);
    }

    //crear comision
    #[Route('/comisiones/{tecnicatura_id?}', name: 'crear_comision', methods: ['GET', 'POST'])]
    public function createComision(Request $request, ComisionRepository $comisionRepository): Response
    {
        $tecnicatura_id = $request->attributes->get('tecnicatura_id', null);   
        // Almacenar `tecId` en la sesión
        $session = $request->getSession();
        if ($tecnicatura_id !== null) {
            $session->set('tecId', $tecnicatura_id);
        }
        $tecId = $session->get('tecId', null);    
        $comision = new Comision();
        $form = $this->createForm(ComisionType::class, $comision);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $comisionRepository->save($comision, true);   
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'success' => true,
                    'message' => 'Comision actualizada correctamente.',
                ]);
            }
            // Redirigir a la vista `index` con todos los datos
            return $this->redirectToRoute('app_vistascursada');
        }
        if ($request->isXmlHttpRequest()) {
            return $this->render('vistascursada/create_form.html.twig', [
                'comision' => $comision,
                'form' => $form->createView(),
                'tecId' => $tecId,
            ]);
        }
    
        return $this->renderForm('vistascursada/create_form.html.twig', [
            'comision' => $comision,
            'form' => $form,
            'tecId' => $tecId,
        ]);
    }

    #[Route('/editarcomision/{comision_id}/{tecnicatura_id}', name: 'editar_comision', methods: ['GET', 'POST'])]
    public function editarComision(Request $request, ComisionRepository $comisionRepository, $comision_id, $tecnicatura_id): Response
    {
        $tecnicatura_id = $request->attributes->get('tecnicatura_id', null);   
        // Almacenar `tecId` en la sesión
        $session = $request->getSession();
        if ($tecnicatura_id !== null) {
            $session->set('tecId', $tecnicatura_id);
        }
        $tecId = $session->get('tecId', null); 
        
         // Buscar la entidad Comision por su ID
        $comision = $comisionRepository->find($comision_id);

        $form = $this->createForm(ComisionType::class, $comision);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comisionRepository->save($comision, true);

            return $this->redirectToRoute('app_vistascursada');
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('vistascursada/edit_form_comision.html.twig', [
                'comision' => $comision,
                'form' => $form->createView(),
                'tecId' => $tec_id,
            ]);
        }

        return $this->renderForm('vistascursada/edit_form_comision.html.twig', [
            'comision' => $comision,
            'form' => $form,
            'tecId' => $tecId,
        ]);
    }


   #[Route('/cursadas/curso/{curso_id}', name: 'crear_cursada_directo', methods: ['GET', 'POST'])]
public function createCursada(
    Request $request,
    CursoRepository $cursoRepository,
    CursadaRepository $cursadaRepository,
    int $curso_id
): Response {
    $curso = $cursoRepository->find($curso_id);


    if (!$curso) {
        throw $this->createNotFoundException('Curso no encontrado');
    }


    $cursada = new Cursada();
    $cursada->setCurso($curso);


    $form = $this->createForm(CursadaType::class, $cursada, [
        'curso' => $curso,
        'tecnicatura' => $curso->getAsignatura()->getTecnicatura(),
    ]);


    $form->handleRequest($request);


    if ($form->isSubmitted() && $form->isValid()) {
        $nota = new \App\Entity\Nota();
        $nota->setParcial('');
        $nota->setRecuperatorio1('');
        $nota->setParcial2('');
        $nota->setRecuperatorio2('');


        $cursada->setNotaId($nota);


        $cursadaRepository->save($cursada, true);


        return $this->redirectToRoute('app_vistascursada', [], Response::HTTP_SEE_OTHER);
    }


    if ($request->isXmlHttpRequest()) {
        return $this->render('vistascursada/create_form2.html.twig', [
            'form' => $form->createView(),
            'cursada' => $cursada,
            'curso' => $curso,
        ]);
    }


    return $this->renderForm('vistascursada/create_form2.html.twig', [
        'form' => $form,
        'cursada' => $cursada,
        'curso' => $curso,
    ]);
}

    #[Route('/editarcursada/{cursada_id}/curso{curso_id?}', name: 'editar_cursada', methods: ['GET', 'POST'])]
    public function editarCursada(Request $request, CursadaRepository $cursadaRepository, $cursada_id): Response
    {
        $curso_id = $request->attributes->get('curso_id', null);   
        // Almacenar `tecId` en la sesión
        $session = $request->getSession();
        if ($curso_id !== null) {
            $session->set('cursoId', $curso_id);
        }
        $cursoId = $session->get('cursoId', null); 
        
         // Buscar la entidad Comision por su ID
        $cursada = $cursadaRepository->find($cursada_id);

        $form = $this->createForm(CursadaType::class, $cursada);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cursadaRepository->save($cursada, true);

            return $this->redirectToRoute('app_vistascursada');
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('vistascursada/edit_form_cursada.html.twig', [
                'cursada' => $cursada,
                'form' => $form->createView(),
                'cursoId' => $curso_id,
            ]);
        }

        return $this->renderForm('vistascursada/edit_form_cursada.html.twig', [
            'cursada' => $cursada,
            'form' => $form,
            'cursoId' => $cursoId,
        ]);
    }

  #[Route('/curso/{tecnicatura_id?}/comision/{comision_id?}', name: 'crear_curso', methods: ['GET', 'POST'])]
public function createCurso(Request $request, CursoRepository $cursoRepository): Response
{
    // Obtener los valores del request
    $tecnicatura_id = $request->attributes->get('tecnicatura_id', null);
    $comision_id = $request->attributes->get('comision_id', null);


    // Verificar si los valores están en la sesión
    $session = $request->getSession();
    error_log('Tecnciatura ID: ' . ($tecnicatura_id !== null ? $tecnicatura_id : 'No definido'));
    error_log('Comision ID: ' . ($comision_id !== null ? $comision_id : 'No definido'));


    if ($tecnicatura_id !== null) {
        $session->set('tecId', $tecnicatura_id);
    }
    if ($comision_id !== null) {
        $session->set('comId', $comision_id);
    }


    $tecId = $session->get('tecId', null);
    $comId = $session->get('comId', null);


    // Log de sesión
    error_log('TEC ID en sesión: ' . ($tecId !== null ? $tecId : 'No definido'));
    error_log('COM ID en sesión: ' . ($comId !== null ? $comId : 'No definido'));


    $curso = new Curso();
    $form = $this->createForm(CursoType::class, $curso);
    $form->handleRequest($request);


    // Verificar si el formulario se envió correctamente
    if ($form->isSubmitted() && $form->isValid()) {
        error_log('Formulario enviado y válido');


        // Guardar el curso
        $cursoRepository->save($curso, true);


        return $this->redirectToRoute('app_vistascursada', [], Response::HTTP_SEE_OTHER);
    }


    // Manejo de AJAX (si aplica)
    if ($request->isXmlHttpRequest()) {
        return $this->render('vistascursada/create_form_curso.html.twig', [
            'curso' => $curso,
            'form' => $form->createView(),
            'tecId' => $tecId,
            'comId' => $comId,
        ]);
    }


    // Retorno de la vista para renderizar el formulario
    return $this->renderForm('vistascursada/create_form_curso.html.twig', [
        'curso' => $curso,
        'form' => $form,
        'tecId' => $tecId,
        'comId' => $comId,
    ]);
}

    

    #[Route('/editarcurso/{curso_id}/', name: 'editar_curso', methods: ['GET', 'POST'])]
    public function editarCurso(Request $request, CursoRepository $cursoRepository, $curso_id): Response
    {
        $curso_id = $request->attributes->get('curso_id', null);   
        // Almacenar `tecId` en la sesión
        $session = $request->getSession();
        if ($curso_id !== null) {
            $session->set('cursoId', $curso_id);
        }
        $cursoId = $session->get('cursoId', null); 
        
         // Buscar la entidad Comision por su ID
        $curso = $cursoRepository->find($curso_id);

        $form = $this->createForm(CursoType::class, $curso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cursoRepository->save($curso, true);

            return $this->redirectToRoute('app_vistascursada');
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('vistascursada/edit_form_curso.html.twig', [
                'curso' => $curso,
                'form' => $form->createView(),
                'cursoId' => $curso_id,
            ]);
        }

        return $this->renderForm('vistascursada/edit_form_curso.html.twig', [
            'curso' => $curso,
            'form' => $form,
            'cursoId' => $cursoId,
        ]);
    }

    #[Route('/cursada/horario/nuevo/{curso_id}', name: 'app_vistascursada_horario_new', methods: ['GET', 'POST'])]
public function newHorarioDesdeCursada(Request $request, EntityManagerInterface $em, int $curso_id): Response
{
    $curso = $em->getRepository(Curso::class)->find($curso_id);
    if (!$curso) {
        throw $this->createNotFoundException('Curso no encontrado');
    }

    $horario = new Horario();
    $horario->setCurso($curso);

    $form = $this->createForm(HorarioType::class, $horario);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($horario);
        $em->flush();

        return new Response('OK');
    }

    return $this->render('horario/_form.html.twig', [
        'form' => $form->createView(),
    ]);
}

 #[Route('/cursada/horario/editar/{horario_id}', name: 'app_vistascursada_horario_edit', methods: ['GET', 'POST'])]
    public function editHorario(Request $request, EntityManagerInterface $em, int $horario_id): Response
    {
        $horario = $em->getRepository(Horario::class)->find($horario_id);

        if (!$horario) {
            throw $this->createNotFoundException('Horario no encontrado');
        }

        $form = $this->createForm(HorarioType::class, $horario);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->flush();

                if ($request->isXmlHttpRequest()) {
                    // 204 No Content: éxito sin cuerpo
                    return new Response('', Response::HTTP_NO_CONTENT);
                }

                return $this->redirectToRoute('app_vistascursada');
            } else {
                if ($request->isXmlHttpRequest()) {
                    return $this->render('vistascursada/edit_form_horario.html.twig', [
                        'form' => $form->createView(),
                        'horario' => $horario,
                    ]);
                }
            }
        }

        return $this->render('vistascursada/edit_form_horario.html.twig', [
            'form' => $form->createView(),
            'horario' => $horario,
        ]);
    }


}
