<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/alumno' => [[['_route' => 'app_alumno_index', '_controller' => 'App\\Controller\\AlumnoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/alumno/new' => [[['_route' => 'app_alumno_new', '_controller' => 'App\\Controller\\AlumnoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/asignatura' => [[['_route' => 'app_asignatura_index', '_controller' => 'App\\Controller\\AsignaturaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/asignatura/new' => [[['_route' => 'app_asignatura_new', '_controller' => 'App\\Controller\\AsignaturaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/asistencia' => [[['_route' => 'app_asistencia_index', '_controller' => 'App\\Controller\\AsistenciaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/asistencia/new' => [[['_route' => 'app_asistencia_new', '_controller' => 'App\\Controller\\AsistenciaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendario/clase' => [[['_route' => 'app_calendario_clase_index', '_controller' => 'App\\Controller\\CalendarioClaseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendario/clase/new' => [[['_route' => 'app_calendario_clase_new', '_controller' => 'App\\Controller\\CalendarioClaseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/carreras' => [[['_route' => 'app_carreras_index', '_controller' => 'App\\Controller\\CarrerasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/carreras/new' => [[['_route' => 'app_carreras_new', '_controller' => 'App\\Controller\\CarrerasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comision' => [[['_route' => 'app_comision_index', '_controller' => 'App\\Controller\\ComisionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comision/new' => [[['_route' => 'app_comision_new', '_controller' => 'App\\Controller\\ComisionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/correlativa' => [[['_route' => 'app_correlativa_index', '_controller' => 'App\\Controller\\CorrelativaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/correlativa/new' => [[['_route' => 'app_correlativa_new', '_controller' => 'App\\Controller\\CorrelativaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cursada' => [[['_route' => 'app_cursada_index', '_controller' => 'App\\Controller\\CursadaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cursada/new' => [[['_route' => 'app_cursada_new', '_controller' => 'App\\Controller\\CursadaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cursadadocente' => [[['_route' => 'app_cursada_docente_index', '_controller' => 'App\\Controller\\CursadaDocenteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cursadadocente/new' => [[['_route' => 'app_cursada_docente_new', '_controller' => 'App\\Controller\\CursadaDocenteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/curso' => [[['_route' => 'app_curso_index', '_controller' => 'App\\Controller\\CursoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/curso/new' => [[['_route' => 'app_curso_new', '_controller' => 'App\\Controller\\CursoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/docente' => [[['_route' => 'app_docente_index', '_controller' => 'App\\Controller\\DocenteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/docente/new' => [[['_route' => 'app_docente_new', '_controller' => 'App\\Controller\\DocenteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/examen/alumno' => [[['_route' => 'app_examen_alumno_index', '_controller' => 'App\\Controller\\ExamenAlumnoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/examen/alumno/new' => [[['_route' => 'app_examen_alumno_new', '_controller' => 'App\\Controller\\ExamenAlumnoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/examen/final' => [[['_route' => 'app_examen_final_index', '_controller' => 'App\\Controller\\ExamenFinalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/examen/final/new' => [[['_route' => 'app_examen_final_new', '_controller' => 'App\\Controller\\ExamenFinalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/habilitante' => [[['_route' => 'app_habilitante_index', '_controller' => 'App\\Controller\\HabilitanteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/habilitante/new' => [[['_route' => 'app_habilitante_new', '_controller' => 'App\\Controller\\HabilitanteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inscripcion/final' => [[['_route' => 'app_inscripcion_final_index', '_controller' => 'App\\Controller\\InscripcionFinalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/inscripcion/final/new' => [[['_route' => 'app_inscripcion_final_new', '_controller' => 'App\\Controller\\InscripcionFinalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/instituto' => [[['_route' => 'app_instituto_index', '_controller' => 'App\\Controller\\InstitutoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/instituto/new' => [[['_route' => 'app_instituto_new', '_controller' => 'App\\Controller\\InstitutoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/localidad' => [[['_route' => 'app_localidad_index', '_controller' => 'App\\Controller\\LocalidadController::index'], null, ['GET' => 0], null, true, false, null]],
        '/localidad/new' => [[['_route' => 'app_localidad_new', '_controller' => 'App\\Controller\\LocalidadController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/modalidad' => [[['_route' => 'app_modalidad_index', '_controller' => 'App\\Controller\\ModalidadController::index'], null, ['GET' => 0], null, true, false, null]],
        '/modalidad/new' => [[['_route' => 'app_modalidad_new', '_controller' => 'App\\Controller\\ModalidadController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nota' => [[['_route' => 'app_nota_index', '_controller' => 'App\\Controller\\NotaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/nota/new' => [[['_route' => 'app_nota_new', '_controller' => 'App\\Controller\\NotaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pais' => [[['_route' => 'app_pais_index', '_controller' => 'App\\Controller\\PaisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pais/new' => [[['_route' => 'app_pais_new', '_controller' => 'App\\Controller\\PaisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/persona' => [[['_route' => 'app_persona_index', '_controller' => 'App\\Controller\\PersonaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/persona/new' => [[['_route' => 'app_persona_new', '_controller' => 'App\\Controller\\PersonaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/provincia' => [[['_route' => 'app_provincia_index', '_controller' => 'App\\Controller\\ProvinciaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/provincia/new' => [[['_route' => 'app_provincia_new', '_controller' => 'App\\Controller\\ProvinciaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/region' => [[['_route' => 'app_region_index', '_controller' => 'App\\Controller\\RegionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/region/new' => [[['_route' => 'app_region_new', '_controller' => 'App\\Controller\\RegionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/revista' => [[['_route' => 'app_revista_index', '_controller' => 'App\\Controller\\RevistaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/revista/new' => [[['_route' => 'app_revista_new', '_controller' => 'App\\Controller\\RevistaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rol' => [[['_route' => 'app_rol_index', '_controller' => 'App\\Controller\\RolController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rol/new' => [[['_route' => 'app_rol_new', '_controller' => 'App\\Controller\\RolController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tecnicatura' => [[['_route' => 'app_tecnicatura_index', '_controller' => 'App\\Controller\\TecnicaturaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tecnicatura/new' => [[['_route' => 'app_tecnicatura_new', '_controller' => 'App\\Controller\\TecnicaturaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/telefono' => [[['_route' => 'app_telefono_index', '_controller' => 'App\\Controller\\TelefonoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/telefono/new' => [[['_route' => 'app_telefono_new', '_controller' => 'App\\Controller\\TelefonoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/titulo' => [[['_route' => 'app_titulo_index', '_controller' => 'App\\Controller\\TituloController::index'], null, ['GET' => 0], null, true, false, null]],
        '/titulo/new' => [[['_route' => 'app_titulo_new', '_controller' => 'App\\Controller\\TituloController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/turno' => [[['_route' => 'app_turno_index', '_controller' => 'App\\Controller\\TurnoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/turno/new' => [[['_route' => 'app_turno_new', '_controller' => 'App\\Controller\\TurnoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vistas' => [[['_route' => 'app_vistas', '_controller' => 'App\\Controller\\VistasController::index'], null, null, null, false, false, null]],
        '/nuevatecnicatura' => [[['_route' => 'crear_tecnicatura', '_controller' => 'App\\Controller\\VistasController::create2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/upload-pdf' => [[['_route' => 'upload_pdf', '_controller' => 'App\\Controller\\VistasController::uploadPdf'], null, ['POST' => 0], null, false, false, null]],
        '/asignatura-pdf' => [[['_route' => 'asignatura_pdf', '_controller' => 'App\\Controller\\VistasController::asignaturasPdf'], null, ['POST' => 0], null, false, false, null]],
        '/api/pdf-list' => [[['_route' => 'pdf_list', '_controller' => 'App\\Controller\\VistasController::list'], null, null, null, false, false, null]],
        '/vistascursada' => [[['_route' => 'app_vistascursada', '_controller' => 'App\\Controller\\VistascursadaController::index'], null, null, null, false, false, null]],
        '/vistasdocente' => [[['_route' => 'app_vistasdocente', '_controller' => 'App\\Controller\\VistasdocenteController::index'], null, null, null, false, false, null]],
        '/nuevalista' => [[['_route' => 'app_nuevalista', '_controller' => 'App\\Controller\\VistasdocenteController::listaNueva'], null, null, null, false, false, null]],
        '/guardar-asistencia' => [[['_route' => 'guardar_asistencia', '_controller' => 'App\\Controller\\VistasdocenteController::guardarAsistencia'], null, ['POST' => 0], null, false, false, null]],
        '/newcalendario' => [[['_route' => 'newcalendario', '_controller' => 'App\\Controller\\VistasdocenteController::new'], null, ['POST' => 0], null, false, false, null]],
        '/vistasestudiante' => [[['_route' => 'app_vistasestudiante', '_controller' => 'App\\Controller\\VistasestudianteController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'nuevo_final', '_controller' => 'App\\Controller\\VistasestudianteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vistasmesas' => [[['_route' => 'app_vistasmesas', '_controller' => 'App\\Controller\\VistasmesasController::index'], null, null, null, false, false, null]],
        '/nuevamesa' => [[['_route' => 'nueva_mesa', '_controller' => 'App\\Controller\\VistasmesasController::nuevaMesaFinal'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nuevaNotaFinal' => [[['_route' => 'nueva_notaFinal', '_controller' => 'App\\Controller\\VistasmesasController::nuevanotaFinal'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vistaspersona' => [[['_route' => 'app_vistaspersona', '_controller' => 'App\\Controller\\VistaspersonaController::index'], null, null, null, false, false, null]],
        '/nuevapersona' => [[['_route' => 'crear_persona', '_controller' => 'App\\Controller\\VistaspersonaController::nuevapersona'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nuevodocente' => [[['_route' => 'crear_docente', '_controller' => 'App\\Controller\\VistaspersonaController::nuevodocente'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nuevoalumno' => [[['_route' => 'crear_alumno', '_controller' => 'App\\Controller\\VistaspersonaController::nuevoalumno'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nuevacarreras' => [[['_route' => 'crear_carreras', '_controller' => 'App\\Controller\\VistaspersonaController::nuevacarreras'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vistaspreinscriptos' => [[['_route' => 'app_vistaspreinscriptos', '_controller' => 'App\\Controller\\VistaspreinscriptosController::index'], null, null, null, false, false, null]],
        '/vistaspreinscriptos/clear_files' => [[['_route' => 'app_vistaspreinscriptos_clear_files', '_controller' => 'App\\Controller\\VistaspreinscriptosController::clearCsvFiles'], null, ['POST' => 0], null, false, false, null]],
        '/vistaspreinscriptos/generate_filtered' => [[['_route' => 'app_vistaspreinscriptos_generate_filtered', '_controller' => 'App\\Controller\\VistaspreinscriptosController::generateFilteredCsv'], null, ['POST' => 0], null, false, false, null]],
        '/vistaspreinscriptos/copy_and_modify' => [[['_route' => 'app_vistaspreinscriptos_copy_and_modify', '_controller' => 'App\\Controller\\VistaspreinscriptosController::copyAndModifyCsv'], null, ['POST' => 0], null, false, false, null]],
        '/vistaspreinscriptos/read_copied' => [[['_route' => 'app_vistaspreinscriptos_read_copied', '_controller' => 'App\\Controller\\VistaspreinscriptosController::readCopiedCsv'], null, ['POST' => 0], null, false, false, null]],
        '/vistaspreinscriptos/generate' => [[['_route' => 'app_vistaspreinscriptos_generate', '_controller' => 'App\\Controller\\VistaspreinscriptosController::generateCsvFiles'], null, null, null, false, false, null]],
        '/vistaspreinscriptos/list' => [[['_route' => 'app_vistaspreinscriptos_list', '_controller' => 'App\\Controller\\VistaspreinscriptosController::listFiles'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|lumno/([^/]++)(?'
                        .'|(*:29)'
                        .'|/edit(*:41)'
                        .'|(*:48)'
                    .')'
                    .'|si(?'
                        .'|gnatura/([^/]++)(?'
                            .'|(*:80)'
                            .'|/edit(*:92)'
                            .'|(*:99)'
                        .')'
                        .'|stencia/([^/]++)(?'
                            .'|(*:126)'
                            .'|/edit(*:139)'
                            .'|(*:147)'
                        .')'
                    .')'
                    .'|ddcorrelativa/([^/]++)/otro/([^/]++)(*:193)'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|lendario/clase/([^/]++)(?'
                            .'|(*:237)'
                            .'|/edit(*:250)'
                            .'|(*:258)'
                        .')'
                        .'|rreras/([^/]++)(?'
                            .'|(*:285)'
                            .'|/edit(*:298)'
                            .'|(*:306)'
                        .')'
                    .')'
                    .'|o(?'
                        .'|mision(?'
                            .'|/([^/]++)(?'
                                .'|(*:341)'
                                .'|/edit(*:354)'
                                .'|(*:362)'
                            .')'
                            .'|es(?:/([^/]++))?(*:387)'
                        .')'
                        .'|rrelativa/([^/]++)(?'
                            .'|(*:417)'
                            .'|/edit(*:430)'
                            .'|(*:438)'
                        .')'
                    .')'
                    .'|urs(?'
                        .'|ada(?'
                            .'|/([^/]++)(?'
                                .'|(*:472)'
                                .'|/edit(*:485)'
                                .'|(*:493)'
                            .')'
                            .'|docente/([^/]++)(?'
                                .'|(*:521)'
                                .'|/edit(*:534)'
                                .'|(*:542)'
                            .')'
                            .'|s/([^/]++)/comision(?:/([^/]++))?(*:584)'
                        .')'
                        .'|o(?'
                            .'|/([^/]++)(?'
                                .'|(*:609)'
                                .'|/(?'
                                    .'|edit(*:625)'
                                    .'|comision(?:/([^/]++))?(*:655)'
                                .')'
                                .'|(*:664)'
                            .')'
                            .'|docente(?:/([^/]++))?(*:694)'
                        .')'
                    .')'
                    .'|rearasistencia/([^/]++)(*:727)'
                .')'
                .'|/docente/([^/]++)(?'
                    .'|(*:756)'
                    .'|/edit(*:769)'
                    .'|(*:777)'
                .')'
                .'|/e(?'
                    .'|xamen/(?'
                        .'|alumno/([^/]++)(?'
                            .'|(*:818)'
                            .'|/edit(*:831)'
                            .'|(*:839)'
                        .')'
                        .'|final/([^/]++)(?'
                            .'|(*:865)'
                            .'|/edit(*:878)'
                            .'|(*:886)'
                        .')'
                    .')'
                    .'|ditar(?'
                        .'|c(?'
                            .'|urs(?'
                                .'|ada(?'
                                    .'|docente/([^/]++)/([^/]++)(*:945)'
                                    .'|/([^/]++)/curso(?:([^/]++))?(*:981)'
                                .')'
                                .'|o/([^/]++)(*:1000)'
                            .')'
                            .'|omision/([^/]++)/([^/]++)(*:1035)'
                        .')'
                        .'|nota/([^/]++)/cursodesesion/([^/]++)(*:1081)'
                    .')'
                .')'
                .'|/habilitante/([^/]++)(?'
                    .'|(*:1116)'
                    .'|/edit(*:1130)'
                    .'|(*:1139)'
                .')'
                .'|/ins(?'
                    .'|cripcion/final/([^/]++)(?'
                        .'|(*:1182)'
                        .'|/edit(*:1196)'
                        .'|(*:1205)'
                    .')'
                    .'|tituto/([^/]++)(?'
                        .'|(*:1233)'
                        .'|/edit(*:1247)'
                        .'|(*:1256)'
                    .')'
                .')'
                .'|/localidad/([^/]++)(?'
                    .'|(*:1289)'
                    .'|/edit(*:1303)'
                    .'|(*:1312)'
                .')'
                .'|/modalidad/([^/]++)(?'
                    .'|(*:1344)'
                    .'|/edit(*:1358)'
                    .'|(*:1367)'
                .')'
                .'|/nota/([^/]++)(?'
                    .'|(*:1394)'
                    .'|/edit(*:1408)'
                    .'|(*:1417)'
                .')'
                .'|/p(?'
                    .'|ais/([^/]++)(?'
                        .'|(*:1447)'
                        .'|/edit(*:1461)'
                        .'|(*:1470)'
                    .')'
                    .'|ersona/([^/]++)(?'
                        .'|(*:1498)'
                        .'|/edit(*:1512)'
                        .'|(*:1521)'
                    .')'
                    .'|rovincia/([^/]++)(?'
                        .'|(*:1551)'
                        .'|/edit(*:1565)'
                        .'|(*:1574)'
                    .')'
                .')'
                .'|/r(?'
                    .'|e(?'
                        .'|gion/([^/]++)(?'
                            .'|(*:1610)'
                            .'|/edit(*:1624)'
                            .'|(*:1633)'
                        .')'
                        .'|vista/([^/]++)(?'
                            .'|(*:1660)'
                            .'|/edit(*:1674)'
                            .'|(*:1683)'
                        .')'
                    .')'
                    .'|ol/([^/]++)(?'
                        .'|(*:1708)'
                        .'|/edit(*:1722)'
                        .'|(*:1731)'
                    .')'
                .')'
                .'|/t(?'
                    .'|e(?'
                        .'|cnicat(?'
                            .'|ura/([^/]++)(?'
                                .'|(*:1775)'
                                .'|/edit(*:1789)'
                                .'|(*:1798)'
                            .')'
                            .'|(?:/([^/]++))?(*:1822)'
                        .')'
                        .'|lefono/([^/]++)(?'
                            .'|(*:1850)'
                            .'|/edit(*:1864)'
                            .'|(*:1873)'
                        .')'
                    .')'
                    .'|itulo/([^/]++)(?'
                        .'|(*:1901)'
                        .'|/edit(*:1915)'
                        .'|(*:1924)'
                    .')'
                    .'|urno/([^/]++)(?'
                        .'|(*:1950)'
                        .'|/edit(*:1964)'
                        .'|(*:1973)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:2001)'
                    .'|/edit(*:2015)'
                    .'|(*:2024)'
                .')'
                .'|/vi(?'
                    .'|stas/([^/]++)/tecnicatura(?:/([^/]++))?(*:2079)'
                    .'|ewcorrelativas/([^/]++)(*:2111)'
                .')'
                .'|/([^/]++)/edit/curso/([^/]++)(*:2150)'
                .'|/pasarlista/([^/]++)(*:2179)'
                .'|/a(?'
                    .'|ctualizar(?'
                        .'|\\-lista\\-alumnos/([^/]++)(*:2230)'
                        .'|alumnos/([^/]++)(*:2255)'
                    .')'
                    .'|pi/(?'
                        .'|calendario\\-(?'
                            .'|clase\\-del\\-dia/([^/]++)(*:2310)'
                            .'|fechas/([^/]++)(*:2334)'
                        .')'
                        .'|asistencias\\-por\\-fecha/([^/]++)(*:2376)'
                    .')'
                .')'
                .'|/e(?'
                    .'|stadisticas/([^/]++)(*:2412)'
                    .'|ditar(?'
                        .'|alumno/([^/]++)(*:2444)'
                        .'|docente/([^/]++)(*:2469)'
                        .'|persona/([^/]++)(*:2494)'
                        .'|carreras/([^/]++)(*:2520)'
                    .')'
                    .'|xiste(?'
                        .'|Persona/([^/]++)(*:2554)'
                        .'|Alumno/([^/]++)(*:2578)'
                        .'|Carrera/([^/]++)(*:2603)'
                    .')'
                .')'
                .'|/lista/([^/]++)(*:2629)'
                .'|/miscursos/([^/]++)/([^/]++)(*:2666)'
                .'|/MiCursada/([^/]++)/MiComision(?:/([^/]++))?(*:2719)'
                .'|/c(?'
                    .'|lave/([^/]++)/edit(*:2751)'
                    .'|ursadaasignatura/([^/]++)/resolucion/([^/]++)/N2/([^/]++)/id/([^/]++)/anio/([^/]++)(*:2843)'
                .')'
                .'|/v(?'
                    .'|erificarcomision/resolucion/([^/]++)/N2/([^/]++)/anio/([^/]++)(*:2920)'
                    .'|istaspreinscriptos/(?'
                        .'|edit(?'
                            .'|/([^/]++)(*:2967)'
                            .'|2/([^/]++)(*:2986)'
                            .'|3/([^/]++)(*:3005)'
                            .'|4/([^/]++)(*:3024)'
                            .'|5/([^/]++)(*:3043)'
                        .')'
                        .'|download/([^/]++)(*:3070)'
                    .')'
                .')'
                .'|/nuev(?'
                    .'|a(?'
                        .'|personaPre/([^/]++)/id/([^/]++)(*:3124)'
                        .'|/carreras/([^/]++)/dni/([^/]++)(*:3164)'
                    .')'
                    .'|oalumnoPre/([^/]++)/id/([^/]++)(*:3205)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:3246)'
                    .'|wdt/([^/]++)(*:3267)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:3314)'
                            .'|router(*:3329)'
                            .'|exception(?'
                                .'|(*:3350)'
                                .'|\\.css(*:3364)'
                            .')'
                        .')'
                        .'|(*:3375)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_alumno_show', '_controller' => 'App\\Controller\\AlumnoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        41 => [[['_route' => 'app_alumno_edit', '_controller' => 'App\\Controller\\AlumnoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        48 => [[['_route' => 'app_alumno_delete', '_controller' => 'App\\Controller\\AlumnoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        80 => [[['_route' => 'app_asignatura_show', '_controller' => 'App\\Controller\\AsignaturaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        92 => [[['_route' => 'app_asignatura_edit', '_controller' => 'App\\Controller\\AsignaturaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        99 => [[['_route' => 'app_asignatura_delete', '_controller' => 'App\\Controller\\AsignaturaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        126 => [[['_route' => 'app_asistencia_show', '_controller' => 'App\\Controller\\AsistenciaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        139 => [[['_route' => 'app_asistencia_edit', '_controller' => 'App\\Controller\\AsistenciaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        147 => [[['_route' => 'app_asistencia_delete', '_controller' => 'App\\Controller\\AsistenciaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        193 => [[['_route' => 'add_correlativa', '_controller' => 'App\\Controller\\VistasController::addCorrelativa'], ['asignatura_id', 'tecnicatura_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        237 => [[['_route' => 'app_calendario_clase_show', '_controller' => 'App\\Controller\\CalendarioClaseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'app_calendario_clase_edit', '_controller' => 'App\\Controller\\CalendarioClaseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'app_calendario_clase_delete', '_controller' => 'App\\Controller\\CalendarioClaseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        285 => [[['_route' => 'app_carreras_show', '_controller' => 'App\\Controller\\CarrerasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        298 => [[['_route' => 'app_carreras_edit', '_controller' => 'App\\Controller\\CarrerasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        306 => [[['_route' => 'app_carreras_delete', '_controller' => 'App\\Controller\\CarrerasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        341 => [[['_route' => 'app_comision_show', '_controller' => 'App\\Controller\\ComisionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'app_comision_edit', '_controller' => 'App\\Controller\\ComisionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        362 => [[['_route' => 'app_comision_delete', '_controller' => 'App\\Controller\\ComisionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        387 => [[['_route' => 'crear_comision', 'tecnicatura_id' => null, '_controller' => 'App\\Controller\\VistascursadaController::createComision'], ['tecnicatura_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        417 => [[['_route' => 'app_correlativa_show', '_controller' => 'App\\Controller\\CorrelativaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        430 => [[['_route' => 'app_correlativa_edit', '_controller' => 'App\\Controller\\CorrelativaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        438 => [[['_route' => 'app_correlativa_delete', '_controller' => 'App\\Controller\\CorrelativaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        472 => [[['_route' => 'app_cursada_show', '_controller' => 'App\\Controller\\CursadaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        485 => [[['_route' => 'app_cursada_edit', '_controller' => 'App\\Controller\\CursadaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        493 => [[['_route' => 'app_cursada_delete', '_controller' => 'App\\Controller\\CursadaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        521 => [[['_route' => 'app_cursada_docente_show', '_controller' => 'App\\Controller\\CursadaDocenteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        534 => [[['_route' => 'app_cursada_docente_edit', '_controller' => 'App\\Controller\\CursadaDocenteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        542 => [[['_route' => 'app_cursada_docente_delete', '_controller' => 'App\\Controller\\CursadaDocenteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        584 => [[['_route' => 'crear_cursada', 'tecnicatura_id' => null, 'comision_id' => null, '_controller' => 'App\\Controller\\VistascursadaController::createCursada'], ['tecnicatura_id', 'comision_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        609 => [[['_route' => 'app_curso_show', '_controller' => 'App\\Controller\\CursoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        625 => [[['_route' => 'app_curso_edit', '_controller' => 'App\\Controller\\CursoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        655 => [[['_route' => 'crear_curso', 'tecnicatura_id' => null, 'comision_id' => null, '_controller' => 'App\\Controller\\VistascursadaController::createCurso'], ['tecnicatura_id', 'comision_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        664 => [[['_route' => 'app_curso_delete', '_controller' => 'App\\Controller\\CursoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        694 => [[['_route' => 'crear_cursada_docente', 'curso_id' => null, '_controller' => 'App\\Controller\\VistascursadaController::createCursadaDocente'], ['curso_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        727 => [[['_route' => 'nuevas_asistencias', '_controller' => 'App\\Controller\\VistasdocenteController::nuevaAsistencia'], ['curso_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        756 => [[['_route' => 'app_docente_show', '_controller' => 'App\\Controller\\DocenteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        769 => [[['_route' => 'app_docente_edit', '_controller' => 'App\\Controller\\DocenteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        777 => [[['_route' => 'app_docente_delete', '_controller' => 'App\\Controller\\DocenteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        818 => [[['_route' => 'app_examen_alumno_show', '_controller' => 'App\\Controller\\ExamenAlumnoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        831 => [[['_route' => 'app_examen_alumno_edit', '_controller' => 'App\\Controller\\ExamenAlumnoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        839 => [[['_route' => 'app_examen_alumno_delete', '_controller' => 'App\\Controller\\ExamenAlumnoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        865 => [[['_route' => 'app_examen_final_show', '_controller' => 'App\\Controller\\ExamenFinalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        878 => [[['_route' => 'app_examen_final_edit', '_controller' => 'App\\Controller\\ExamenFinalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        886 => [[['_route' => 'app_examen_final_delete', '_controller' => 'App\\Controller\\ExamenFinalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        945 => [[['_route' => 'editar_cursada_docente', '_controller' => 'App\\Controller\\VistascursadaController::editarCursadaDocente'], ['curso_id', 'cursada_docente_id'], null, null, false, true, null]],
        981 => [[['_route' => 'editar_cursada', 'curso_id' => null, '_controller' => 'App\\Controller\\VistascursadaController::editarCursada'], ['cursada_id', 'curso_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1000 => [[['_route' => 'editar_curso', '_controller' => 'App\\Controller\\VistascursadaController::editarCurso'], ['curso_id'], ['GET' => 0, 'POST' => 1], null, true, true, null]],
        1035 => [[['_route' => 'editar_comision', '_controller' => 'App\\Controller\\VistascursadaController::editarComision'], ['comision_id', 'tecnicatura_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1081 => [[['_route' => 'editar_nota', '_controller' => 'App\\Controller\\VistasdocenteController::edit'], ['id', 'curso_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1116 => [[['_route' => 'app_habilitante_show', '_controller' => 'App\\Controller\\HabilitanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1130 => [[['_route' => 'app_habilitante_edit', '_controller' => 'App\\Controller\\HabilitanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1139 => [[['_route' => 'app_habilitante_delete', '_controller' => 'App\\Controller\\HabilitanteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1182 => [[['_route' => 'app_inscripcion_final_show', '_controller' => 'App\\Controller\\InscripcionFinalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1196 => [[['_route' => 'app_inscripcion_final_edit', '_controller' => 'App\\Controller\\InscripcionFinalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1205 => [[['_route' => 'app_inscripcion_final_delete', '_controller' => 'App\\Controller\\InscripcionFinalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1233 => [[['_route' => 'app_instituto_show', '_controller' => 'App\\Controller\\InstitutoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1247 => [[['_route' => 'app_instituto_edit', '_controller' => 'App\\Controller\\InstitutoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1256 => [[['_route' => 'app_instituto_delete', '_controller' => 'App\\Controller\\InstitutoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1289 => [[['_route' => 'app_localidad_show', '_controller' => 'App\\Controller\\LocalidadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1303 => [[['_route' => 'app_localidad_edit', '_controller' => 'App\\Controller\\LocalidadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1312 => [[['_route' => 'app_localidad_delete', '_controller' => 'App\\Controller\\LocalidadController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1344 => [[['_route' => 'app_modalidad_show', '_controller' => 'App\\Controller\\ModalidadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1358 => [[['_route' => 'app_modalidad_edit', '_controller' => 'App\\Controller\\ModalidadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1367 => [[['_route' => 'app_modalidad_delete', '_controller' => 'App\\Controller\\ModalidadController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1394 => [[['_route' => 'app_nota_show', '_controller' => 'App\\Controller\\NotaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1408 => [[['_route' => 'app_nota_edit', '_controller' => 'App\\Controller\\NotaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1417 => [[['_route' => 'app_nota_delete', '_controller' => 'App\\Controller\\NotaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1447 => [[['_route' => 'app_pais_show', '_controller' => 'App\\Controller\\PaisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1461 => [[['_route' => 'app_pais_edit', '_controller' => 'App\\Controller\\PaisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1470 => [[['_route' => 'app_pais_delete', '_controller' => 'App\\Controller\\PaisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1498 => [[['_route' => 'app_persona_show', '_controller' => 'App\\Controller\\PersonaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1512 => [[['_route' => 'app_persona_edit', '_controller' => 'App\\Controller\\PersonaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1521 => [[['_route' => 'app_persona_delete', '_controller' => 'App\\Controller\\PersonaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1551 => [[['_route' => 'app_provincia_show', '_controller' => 'App\\Controller\\ProvinciaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1565 => [[['_route' => 'app_provincia_edit', '_controller' => 'App\\Controller\\ProvinciaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1574 => [[['_route' => 'app_provincia_delete', '_controller' => 'App\\Controller\\ProvinciaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1610 => [[['_route' => 'app_region_show', '_controller' => 'App\\Controller\\RegionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1624 => [[['_route' => 'app_region_edit', '_controller' => 'App\\Controller\\RegionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1633 => [[['_route' => 'app_region_delete', '_controller' => 'App\\Controller\\RegionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1660 => [[['_route' => 'app_revista_show', '_controller' => 'App\\Controller\\RevistaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1674 => [[['_route' => 'app_revista_edit', '_controller' => 'App\\Controller\\RevistaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1683 => [[['_route' => 'app_revista_delete', '_controller' => 'App\\Controller\\RevistaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1708 => [[['_route' => 'app_rol_show', '_controller' => 'App\\Controller\\RolController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1722 => [[['_route' => 'app_rol_edit', '_controller' => 'App\\Controller\\RolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1731 => [[['_route' => 'app_rol_delete', '_controller' => 'App\\Controller\\RolController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1775 => [[['_route' => 'app_tecnicatura_show', '_controller' => 'App\\Controller\\TecnicaturaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1789 => [[['_route' => 'app_tecnicatura_edit', '_controller' => 'App\\Controller\\TecnicaturaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1798 => [[['_route' => 'app_tecnicatura_delete', '_controller' => 'App\\Controller\\TecnicaturaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1822 => [[['_route' => 'crear_asignatura', 'tecnicatura_id' => null, '_controller' => 'App\\Controller\\VistasController::create'], ['tecnicatura_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1850 => [[['_route' => 'app_telefono_show', '_controller' => 'App\\Controller\\TelefonoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1864 => [[['_route' => 'app_telefono_edit', '_controller' => 'App\\Controller\\TelefonoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1873 => [[['_route' => 'app_telefono_delete', '_controller' => 'App\\Controller\\TelefonoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1901 => [[['_route' => 'app_titulo_show', '_controller' => 'App\\Controller\\TituloController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1915 => [[['_route' => 'app_titulo_edit', '_controller' => 'App\\Controller\\TituloController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1924 => [[['_route' => 'app_titulo_delete', '_controller' => 'App\\Controller\\TituloController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1950 => [[['_route' => 'app_turno_show', '_controller' => 'App\\Controller\\TurnoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1964 => [[['_route' => 'app_turno_edit', '_controller' => 'App\\Controller\\TurnoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1973 => [[['_route' => 'app_turno_delete', '_controller' => 'App\\Controller\\TurnoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2001 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2015 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2024 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2079 => [[['_route' => 'editar_asignatura', 'tecnicatura_id' => null, '_controller' => 'App\\Controller\\VistasController::edit'], ['id', 'tecnicatura_id'], null, null, false, true, null]],
        2111 => [[['_route' => 'view_correlativas', '_controller' => 'App\\Controller\\VistasController::viewCorrelativas'], ['asignatura_id'], ['GET' => 0], null, false, true, null]],
        2150 => [[['_route' => 'editar_asistencias', '_controller' => 'App\\Controller\\VistasdocenteController::editarAsistencia'], ['id', 'curso_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2179 => [[['_route' => 'app_pasarlista', '_controller' => 'App\\Controller\\VistasdocenteController::pasarlista'], ['curso_id'], null, null, false, true, null]],
        2230 => [[['_route' => 'actualizar_lista_alumnos', '_controller' => 'App\\Controller\\VistasdocenteController::actualizarListaAlumnos'], ['curso_id'], ['GET' => 0], null, false, true, null]],
        2255 => [[['_route' => 'actualizaralumnos', '_controller' => 'App\\Controller\\VistasdocenteController::actualizarAlumnos'], ['curso_id'], ['GET' => 0], null, false, true, null]],
        2310 => [[['_route' => 'api_calendario_clase_del_dia', '_controller' => 'App\\Controller\\VistasdocenteController::getCalendarioClaseDelDia'], ['cursoId'], ['GET' => 0], null, false, true, null]],
        2334 => [[['_route' => 'api_calendario_fechas', '_controller' => 'App\\Controller\\VistasdocenteController::getFechasCalendario'], ['cursoId'], ['GET' => 0], null, false, true, null]],
        2376 => [[['_route' => 'asistencias_por_fecha', '_controller' => 'App\\Controller\\VistasdocenteController::asistenciasPorFecha'], ['cursoId'], ['GET' => 0], null, false, true, null]],
        2412 => [[['_route' => 'estadisticas', '_controller' => 'App\\Controller\\VistasdocenteController::actualizarestadisticas'], ['curso_id'], ['GET' => 0], null, false, true, null]],
        2444 => [[['_route' => 'editar_alumno', '_controller' => 'App\\Controller\\VistaspersonaController::editarAlumno'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2469 => [[['_route' => 'editar_docente', '_controller' => 'App\\Controller\\VistaspersonaController::editarDocente'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2494 => [[['_route' => 'editar_persona', '_controller' => 'App\\Controller\\VistaspersonaController::editarPersona'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2520 => [[['_route' => 'editar_carreras', '_controller' => 'App\\Controller\\VistaspersonaController::editarCarreras'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2554 => [[['_route' => 'persona_siguiente', '_controller' => 'App\\Controller\\VistaspreinscriptosController::siguientePersonaPer'], ['dni'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2578 => [[['_route' => 'alumno_siguiente', '_controller' => 'App\\Controller\\VistaspreinscriptosController::siguienteAlumno'], ['dni'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2603 => [[['_route' => 'carrera_siguiente', '_controller' => 'App\\Controller\\VistaspreinscriptosController::siguienteCarrera'], ['dni'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2629 => [[['_route' => 'app_lista', '_controller' => 'App\\Controller\\VistasdocenteController::listaAsistencia'], ['curso_id'], null, null, false, true, null]],
        2666 => [[['_route' => 'cursos_disponibles', '_controller' => 'App\\Controller\\VistasestudianteController::cursosDisponiblesAction'], ['Id', 'tecnicaturaId'], null, null, false, true, null]],
        2719 => [[['_route' => 'crear_MiCursada', 'tecnicatura_id' => null, 'comision_id' => null, '_controller' => 'App\\Controller\\VistasestudianteController::createCursada'], ['tecnicatura_id', 'comision_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2751 => [[['_route' => 'editar_usuario', '_controller' => 'App\\Controller\\VistasestudianteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2843 => [[['_route' => 'crear_asignaturasDe1', '_controller' => 'App\\Controller\\VistaspreinscriptosController::CrearCursadasDeAsignaturas'], ['dni', 'resolucion', 'N2', 'id', 'anio'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2920 => [[['_route' => 'verificar_comision', '_controller' => 'App\\Controller\\VistaspreinscriptosController::verificarComision'], ['resolucion', 'N2', 'anio'], ['GET' => 0], null, false, true, null]],
        2967 => [[['_route' => 'app_vistaspreinscriptos_edit', '_controller' => 'App\\Controller\\VistaspreinscriptosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2986 => [[['_route' => 'app_vistaspreinscriptos_edit2', '_controller' => 'App\\Controller\\VistaspreinscriptosController::edit2'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3005 => [[['_route' => 'app_vistaspreinscriptos_edit3', '_controller' => 'App\\Controller\\VistaspreinscriptosController::edit3'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3024 => [[['_route' => 'app_vistaspreinscriptos_edit4', '_controller' => 'App\\Controller\\VistaspreinscriptosController::edit4'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3043 => [[['_route' => 'app_vistaspreinscriptos_edit5', '_controller' => 'App\\Controller\\VistaspreinscriptosController::edit5'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3070 => [[['_route' => 'app_vistaspreinscriptos_download', '_controller' => 'App\\Controller\\VistaspreinscriptosController::download'], ['filename'], null, null, false, true, null]],
        3124 => [[['_route' => 'crear_persona_pre', '_controller' => 'App\\Controller\\VistaspreinscriptosController::nuevapersonaPre'], ['dni', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3164 => [[['_route' => 'crear_carrera_Pre', '_controller' => 'App\\Controller\\VistaspreinscriptosController::nuevacarreraPreinscripcion'], ['id', 'dni'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3205 => [[['_route' => 'crear_alumno_pre', '_controller' => 'App\\Controller\\VistaspreinscriptosController::nuevoalumnoPre'], ['dni', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3246 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        3267 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        3314 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        3329 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        3350 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        3364 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        3375 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
