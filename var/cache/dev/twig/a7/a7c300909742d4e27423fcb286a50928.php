<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* vistascursada/index.html.twig */
class __TwigTemplate_868c16261318ad7bd786971df4824cbd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistascursada/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistascursada/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vistascursada/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello VistascursadaController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    ";
        // line 11
        yield "<script>
       

        function filterCursadas(comisionId) {
            let searchEstudiante = document.getElementById(\"searchAsignatura_\" + comisionId).value.toLowerCase();
            let table = document.getElementById(\"tablaCursada_\" + comisionId); // Obtener la tabla de cursadas específica
            let rows = table.getElementsByTagName(\"tr\");

            for (let i = 2; i < rows.length; i++) { // Comienza en 2 para omitir los encabezados
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let estudiante = cells[1].textContent.toLowerCase(); // Cambiado a la columna de estudiante

                    if (estudiante.includes(searchEstudiante)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }


        document.addEventListener('DOMContentLoaded', function() {
            // Evaluar si `comId` está definido y no es nulo
            ";
        // line 36
        if ((array_key_exists("comId", $context) &&  !(null === (isset($context["comId"]) || array_key_exists("comId", $context) ? $context["comId"] : (function () { throw new RuntimeError('Variable "comId" does not exist.', 36, $this->source); })())))) {
            // line 37
            yield "                // Llamar a showCursada con los IDs de cursada y tecnicatura
                showCursada(";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("comId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["comId"]) || array_key_exists("comId", $context) ? $context["comId"] : (function () { throw new RuntimeError('Variable "comId" does not exist.', 38, $this->source); })()), "null")) : ("null")), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("tecId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tecId"]) || array_key_exists("tecId", $context) ? $context["tecId"] : (function () { throw new RuntimeError('Variable "tecId" does not exist.', 38, $this->source); })()), "null")) : ("null")), "html", null, true);
            yield ");
            ";
        } elseif ((        // line 39
array_key_exists("tecId", $context) &&  !(null === (isset($context["tecId"]) || array_key_exists("tecId", $context) ? $context["tecId"] : (function () { throw new RuntimeError('Variable "tecId" does not exist.', 39, $this->source); })())))) {
            // line 40
            yield "                // Llamar a showComision con el ID de tecnicatura
                showComision(";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("tecId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tecId"]) || array_key_exists("tecId", $context) ? $context["tecId"] : (function () { throw new RuntimeError('Variable "tecId" does not exist.', 41, $this->source); })()), "null")) : ("null")), "html", null, true);
            yield ");
            ";
        } else {
            // line 43
            yield "            ";
        }
        // line 44
        yield "
            ";
        // line 45
        if ((array_key_exists("cursoId", $context) &&  !(null === (isset($context["cursoId"]) || array_key_exists("cursoId", $context) ? $context["cursoId"] : (function () { throw new RuntimeError('Variable "cursoId" does not exist.', 45, $this->source); })())))) {
            yield "    //Revisar el id que se pasa en showCurso, tal vez hacer una funcion especifica para mostrar tabla curso
                // Llamar a showCurso
                showCurso(";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cursoId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cursoId"]) || array_key_exists("cursoId", $context) ? $context["cursoId"] : (function () { throw new RuntimeError('Variable "cursoId" does not exist.', 47, $this->source); })()), "null")) : ("null")), "html", null, true);
            yield " );
            ";
        }
        // line 49
        yield "        });


      function showTecnicaturas() {
    // Ocultar todas las tablas de Comision
    let tablesComision = document.querySelectorAll('.tabla_comision');
    tablesComision.forEach(table => table.style.display = 'none');

    // Ocultar todas las tablas de cursada
    let cursadaTables = document.querySelectorAll('.tabla_cursada');
    cursadaTables.forEach(table => table.style.display = 'none');

    // Ocultar todas las tablas de cursos
    let cursoTables = document.querySelectorAll('.tabla_curso_cursada');
    cursoTables.forEach(table => table.style.display = 'none');

    // Mostrar tabla de tecnicaturas
    let tablaTecnicaturas = document.getElementById('tablaTecnicaturas');
    if (tablaTecnicaturas) {
        tablaTecnicaturas.style.display = '';
    }

    // Mostrar filtro tecnicaturas (por ej. campo de búsqueda)
    let search = document.getElementById('searchs');
    if (search) {
        search.style.display = '';
    }
}

function hideTecnicaturas() {
    // Ocultar tabla de tecnicaturas
    let tablaTecnicaturas = document.getElementById('tablaTecnicaturas');
    if (tablaTecnicaturas) {
        tablaTecnicaturas.style.display = 'none';
    }

    // Opcional: ocultar filtro tecnicaturas
    let search = document.getElementById('searchs');
    if (search) {
        search.style.display = 'none';
    }
}





// CON ESTE SCRIPT MOSTRAS LAS COMISIONES DE LA TECNICATURA (2DA TABLA)

        function showComision(tecnicaturaId) {
           
            // Ocultar todas las tablas de Comision
            let tables = document.querySelectorAll('.tabla_home');
            tables.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursadaTables = document.querySelectorAll('.tabla_cursada');
            cursadaTables.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursoTables = document.querySelectorAll('.tabla_curso_cursada');
            cursoTables.forEach(table => table.style.display = 'none');

            // Mostrar la tabla de Comision correspondiente
            let ComisionTable = document.getElementById(`tablaComision_\${tecnicaturaId}`);
            if (ComisionTable) {
                ComisionTable.style.display = '';
            }

            // Ocultar filtro tecnicaturas
            let search = document.getElementById(`searchs`);
            if (search) {
                search.style.display = 'none';
            }
           

        }

        function hideComision(tecnicaturaId) {
            // Ocultar la tabla de Comision correspondiente
            let ComisionTable = document.getElementById(`tablaComision_\${tecnicaturaId}`);
            if (ComisionTable) {
                ComisionTable.style.display = 'none';
            }

            // Mostrar filtro tecnicaturas
            let search = document.getElementById(`searchs`);
            if (search) {
                search.style.display = '';
            }

            // Mostrar la tabla de tecnicaturas principal
            let tablaTecnicaturas = document.getElementById('tablaTecnicaturas');
            if (tablaTecnicaturas) {
                tablaTecnicaturas.style.display = '';
            }

          
        }

// CON ESTE SCRIPT MOSTRAS LAS CURSADAS,CURSO CUPOF, HORARIO, DOCENTE, ETC (3RA TABLA)

        function showCursada(comisionId, tecnicaturaId) {
            
            // oculta tabla tecnicaturas
            let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision');
            tablesToHide.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursadaTables = document.querySelectorAll('.tabla_cursada');
            cursadaTables.forEach(table => table.style.display = 'none');

            // oculta curso
            let cursoTables = document.querySelectorAll('.tabla_curso_cursada');
            cursoTables.forEach(table => table.style.display = 'none');

            // muestra tabla comision
            let cursadaTable = document.getElementById(`tablaCursada_\${comisionId}`);
            if (cursadaTable) {
                cursadaTable.style.display = '';
            }

            // ocultar search
            let search = document.getElementById('searchs');
            if (search) {
                search.style.display = 'none';
            }

           

        }

        function hideCursada(comisionId, tecnicaturaId) {
            // oculta tabla cursada
            let cursadaTable = document.getElementById(`tablaCursada_\${comisionId}`);
            if (cursadaTable) {
                cursadaTable.style.display = 'none';
            }

            // muestra la tabla comision
            let comisionTable = document.getElementById(`tablaComision_\${tecnicaturaId}`);
            if (comisionTable) {
                comisionTable.style.display = '';
            }

           
            
        }

      
// CON ESTE SCRIPT MOSTRAS LA TABLA DE LA CURSADA (4TA TABLA)
       
 function showCursoCursada(comisionId, tecnicaturaId, asignaturaId, cursoId) {
    
    
            // oculta tablas no relevantes
            let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision, .tabla_cursada, .tabla_curso');
            tablesToHide.forEach(table => table.style.display = 'none');

            // oculta cursos
            let cursadaTables = document.querySelectorAll('.tabla_curso');
            cursadaTables.forEach(table => table.style.display = 'none');

            // muestra tabla cursada específica
            let cursadaTable = document.getElementById(`tablaCursoCursada_\${comisionId}_\${asignaturaId}_\${cursoId}`);
            if (cursadaTable) {
                cursadaTable.style.display = '';
            }

            // ocultar search
            let search = document.getElementById('searchs');
            if (search) {
                search.style.display = 'none';
            }
          
        }

 function hideCursoCursada(comisionId, tecnicaturaId, asignaturaId, cursoId) {
            // oculta tabla cursada específica
            let cursadaTable = document.getElementById(`tablaCursoCursada_\${comisionId}_\${asignaturaId}_\${cursoId}`);
            if (cursadaTable) {
                cursadaTable.style.display = 'none';
            }

            // muestra la tabla curso específica
            let cursoTable = document.getElementById(`tablaCurso_\${comisionId}_\${asignaturaId}`);
            if (cursoTable) {
                cursoTable.style.display = '';
            }

        
        }

       

        
// OCULTAR TODAS LAS TABLAS
        

        function hideAllTables() {
            // Ocultar todas las tablas de Comisiones, Cursadas y Tecnicaturas
            let tables = document.querySelectorAll('.tabla_home, .tabla_comision, .tabla_cursada, .tabla_curso');
            tables.forEach(table => table.style.display = 'none');

            // Mostrar la tabla de tecnicaturas principal
            let tablaTecnicaturas = document.getElementById('tablaTecnicaturas');
            if (tablaTecnicaturas) {
                tablaTecnicaturas.style.display = '';
            }

            // Mostrar filtro de tecnicaturas
            let search = document.getElementById(`searchs`);
            if (search) {
                search.style.display = '';
            }

            // Ocultar el botón de regresar
            let backButton = document.getElementById(`backButton`);
            if (backButton) {
                backButton.style.display = 'none';
            }
        }

      

    </script>
   


    ";
        // line 279
        yield "    <script>
        function openModal1(tecnicaturaId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_comision", ["tecnicatura_id" => "__tecnicaturaId__"]);
        yield "\"
                .replace('__tecnicaturaId__', tecnicaturaId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';


                    // Asignar valores y manipular campos
                    const anioInput = document.getElementById('comision_anio');
                    const comisionInput = document.getElementById('comision_comision');
                    const turnoInput = document.getElementById('comision_turno');
                    const tecnicaturaInput = document.getElementById('comision_tecnicatura');

                    // Ocultar label de tecnicatura
                    const labelTecnicatura = document.querySelector('label[for=\"comision_tecnicatura\"]');
                    if (labelTecnicatura) {
                        labelTecnicatura.style.display = 'none';
                    }

                    if (tecnicaturaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        tecnicaturaInput.value = tecnicaturaId;
                        tecnicaturaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        tecnicaturaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal1() {
            document.getElementById('Modal1').style.display = 'none';
            document.getElementById('modalBody-1').innerHTML = '';
        }
    </script>

    ";
        // line 320
        yield "    <script>
        function openModal11(comisionId, tecnicaturaId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_comision", ["comision_id" => "__comisionId__", "tecnicatura_id" => "__tecnicaturaId__"]), "html", null, true);
        yield "\"
                .replace('__comisionId__', comisionId)
                .replace('__tecnicaturaId__', tecnicaturaId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-11').innerHTML = html;
                    document.getElementById('Modal11').style.display = 'block';
                    // Asignar valores y manipular campos
                    const anioInput = document.getElementById('comision_anio');
                    const comisionInput = document.getElementById('comision_comision');
                    const turnoInput = document.getElementById('comision_turno');
                    const tecnicaturaInput = document.getElementById('comision_tecnicatura');

                    // Ocultar label de tecnicatura
                    const labelTecnicatura = document.querySelector('label[for=\"comision_tecnicatura\"]');
                    if (labelTecnicatura) {
                        labelTecnicatura.style.display = 'none';
                    }

                    if (tecnicaturaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        tecnicaturaInput.value = tecnicaturaId;
                        tecnicaturaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        tecnicaturaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    } 
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal11() {
            document.getElementById('Modal11').style.display = 'none';
            document.getElementById('modalBody-11').innerHTML = '';
        }
    </script>

     ";
        // line 359
        yield "<script>
function openModalHorario(cursoId) {
   const url = \"";
        // line 361
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistascursada_horario_new", ["curso_id" => "CURSO_ID"]);
        yield "\".replace('CURSO_ID', cursoId);


    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al cargar el formulario: ' + response.statusText);
            }
            return response.text();
        })
        .then(html => {
            document.getElementById('modalBodyHorario').innerHTML = html;
            document.getElementById('ModalHorario').style.display = 'block';

            const cursoInput = document.getElementById('horario_curso');
            if (cursoInput) {
                cursoInput.value = cursoId;
                cursoInput.style.display = 'none';
                const label = document.querySelector('label[for=\"horario_curso\"]');
                if (label) label.style.display = 'none';
            }

            const form = document.getElementById('form-horario');
            if (form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    const formData = new FormData(form);
                    fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (response.ok) {
                            closeModalHorario();
                            location.reload();
                        } else {
                            return response.text().then(html => {
                                document.getElementById('modalBodyHorario').innerHTML = html;
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error al guardar el horario:', error);
                        alert('Hubo un error al guardar el horario.');
                    });
                });
            }
        })
        .catch(error => {
            console.error('Error al cargar el formulario de horario:', error);
            alert('No se pudo cargar el formulario de horario. Intenta nuevamente.');
        });
}

function closeModalHorario() {
    document.getElementById('ModalHorario').style.display = 'none';
    document.getElementById('modalBodyHorario').innerHTML = '';
}
</script>

";
        // line 422
        yield "    <script>
function openModalEditHorario(horarioId) {
    const url = \"";
        // line 424
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistascursada_horario_edit", ["horario_id" => "HORARIO_ID"]);
        yield "\".replace('HORARIO_ID', horarioId);

    fetch(url)
    .then(response => {
        if (!response.ok) throw new Error('Error al cargar formulario');
        return response.text();
    })
    .then(html => {
        document.getElementById('modalBodyEditHorario').innerHTML = html;
        document.getElementById('ModalEditHorario').style.display = 'block';

        // Ocultar el campo curso si existe
        const cursoInput = document.getElementById('horario_curso');
        if (cursoInput) {
            cursoInput.style.display = 'none';
            const labelCurso = document.querySelector('label[for=\"horario_curso\"]');
            if(labelCurso) labelCurso.style.display = 'none';
        }

        // Agregar manejador al submit
        const form = document.querySelector('#modalBodyEditHorario form');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(form);
                fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (response.status === 204) {
                        closeModalEditHorario();
                        location.reload();
                    } else {
                        return response.text().then(html => {
                            document.getElementById('modalBodyEditHorario').innerHTML = html;
                        });
                    }
                })
                .catch(err => {
                    alert('Error al guardar horario');
                    console.error(err);
                });
            });
        }
    })
    .catch(error => {
        alert('No se pudo cargar el formulario de edición.');
        console.error(error);
    });
}

function closeModalEditHorario() {
    document.getElementById('ModalEditHorario').style.display = 'none';
    document.getElementById('modalBodyEditHorario').innerHTML = '';
}
</script>





    ";
        // line 490
        yield "    <script>
        function openModal4(cursoId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 493
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_cursada_docente", ["curso_id" => "__cursoId__"]);
        yield "\"
                .replace('__cursoId__', cursoId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-4').innerHTML = html;
                    document.getElementById('Modal4').style.display = 'block';
                    // Asignar valores y manipular campos
                    const tomaInput = document.getElementById('cursada_docente_toma');
                    const ceseInput = document.getElementById('cursada_docente_cese');
                    const docenteInput = document.getElementById('cursada_docente_docente');
                    const revistaInput = document.getElementById('cursada_docente_revista');
                    const licenciaInput = document.getElementById('cursada_docente_licencia');
                    const cursoInput = document.getElementById('cursada_docente_curso');

                    // Ocultar label de tecnicatura
                    const labelCurso = document.querySelector('label[for=\"cursada_docente_curso\"]');
                    if (labelCurso) {
                        labelCurso.style.display = 'none';
                    }

                    if (cursoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        cursoInput.value = cursoId;
                        cursoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        cursoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de cursada docente:', error));
        }
        function closeModal4() {
            document.getElementById('Modal4').style.display = 'none';
            document.getElementById('modalBody-4').innerHTML = '';
        }
    </script>

    ";
        // line 531
        yield "    <script>
        function openModal41(cursoId, cursadaDocenteId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_cursada_docente", ["curso_id" => "__cursoId__", "cursada_docente_id" => "__cursadaDocenteId__"]), "html", null, true);
        yield "\"
                .replace('__cursoId__', cursoId)
                .replace('__cursadaDocenteId__', cursadaDocenteId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-41').innerHTML = html;
                    document.getElementById('Modal41').style.display = 'block';


                    // Asignar valores y manipular campos
                    const tomaInput = document.getElementById('cursada_docente_toma');
                    const ceseInput = document.getElementById('cursada_docente_cese');
                    const docenteInput = document.getElementById('cursada_docente_docente');
                    const revistaInput = document.getElementById('cursada_docente_revista');
                    const licenciaInput = document.getElementById('cursada_docente_licencia');
                    const cursoInput = document.getElementById('cursada_docente_curso');

                    // Ocultar label de tecnicatura
                    const labelDocente = document.querySelector('label[for=\"cursada_docente_docente\"]');
                    if (labelDocente) {
                        labelDocente.style.display = 'none';
                    }

                    if (docenteInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        docenteInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        docenteInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }

                    // Ocultar label de tecnicatura
                    const labelCurso = document.querySelector('label[for=\"cursada_docente_curso\"]');
                    if (labelCurso) {
                        labelCurso.style.display = 'none';
                    }

                    if (cursoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        cursoInput.value = cursoId;
                        cursoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        cursoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de cursada docente:', error));
        }
        function closeModal41() {
            document.getElementById('Modal41').style.display = 'none';
            document.getElementById('modalBody-41').innerHTML = '';
        }
    </script>

    ";
        // line 586
        yield "    <script>
        function openModal3(tecnicaturaId, comisionId, asignaturaId) {
            // Verificar si los IDs están correctos
            if (!tecnicaturaId || !comisionId) {
                console.error(\"IDs inválidos. Tecnicatura ID o Comisión ID está faltando.\");
                return;
            }
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_curso", ["tecnicatura_id" => "__tecnicaturaId__", "comision_id" => "__comisionId__"]), "html", null, true);
        yield "\"
                .replace('__tecnicaturaId__', encodeURIComponent(tecnicaturaId))
                .replace('__comisionId__', encodeURIComponent(comisionId));
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-3').innerHTML = html;
                    document.getElementById('Modal3').style.display = 'block';


                    // Asignar valores y manipular campos
                    const cicloInput = document.getElementById('curso_ciclo_lectivo');
                    const horarioInput = document.getElementById('curso_horario');
                    const asignaturaInput = document.getElementById('curso_asignatura');
                    const comisionInput = document.getElementById('curso_comision');


                    
                    // Ocultar label de tecnicatura
                    const labelAsignatura = document.querySelector('label[for=\"curso_asignatura\"]');
                    if (labelAsignatura) {
                        labelAsignatura.style.display = 'none';
                    }

                    if (asignaturaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        asignaturaInput.value = asignaturaId;
                        asignaturaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        asignaturaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }

                    // Ocultar label de nota se generan las notas vacias
                    const labelComision = document.querySelector('label[for=\"curso_comision\"]');
                    if (labelComision) {
                        labelComision.style.display = 'none';
                    }

                    if (comisionInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        comisionInput.value = comisionId;
                        comisionInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        comisionInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }                  
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal3() {
            document.getElementById('Modal3').style.display = 'none';
            document.getElementById('modalBody-31').innerHTML = '';
        }
    </script>

    ";
        // line 646
        yield "    <script>
        function openModal31(cursoId, asignaturaId, comisionId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 649
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_curso", ["curso_id" => "__cursoId__"]);
        yield "\"
                .replace('__cursoId__', cursoId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-31').innerHTML = html;
                    document.getElementById('Modal31').style.display = 'block';

                    // Asignar valores y manipular campos
                    const cicloInput = document.getElementById('curso_ciclo_lectivo');
                    const horarioInput = document.getElementById('curso_horario');
                    const asignaturaInput = document.getElementById('curso_asignatura');
                    const comisionInput = document.getElementById('curso_comision');                 
                    // Ocultar label de tecnicatura
                    const labelAsignatura = document.querySelector('label[for=\"curso_asignatura\"]');
                    if (labelAsignatura) {
                        labelAsignatura.style.display = 'none';
                    }

                    if (asignaturaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        asignaturaInput.value = asignaturaId;
                        asignaturaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        asignaturaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }

                    // Ocultar label de nota se generan las notas vacias
                    const labelComision = document.querySelector('label[for=\"curso_comision\"]');
                    if (labelComision) {
                        labelComision.style.display = 'none';
                    }

                    if (comisionInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        comisionInput.value = comisionId;
                        comisionInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        comisionInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal31() {
            document.getElementById('Modal31').style.display = 'none';
            document.getElementById('modalBody-31').innerHTML = '';
        }
    </script>

        ";
        // line 696
        yield "    <script>
        function openModal21(cursadaId, cursoId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_cursada", ["cursada_id" => "__cursadaId__", "curso_id" => "__cursoId__"]), "html", null, true);
        yield "\"
                .replace('__cursadaId__', cursadaId)
                .replace('__cursoId__', cursoId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-21').innerHTML = html;
                    document.getElementById('Modal21').style.display = 'block';
                    // Asignar valores y manipular campos
                    const condicionInput = document.getElementById('cursada_condicion');                   
                    const alumnoInput = document.getElementById('cursada_alumno');
                    const modalidadInput = document.getElementById('cursada_modalidad');
                    const cursoInput = document.getElementById('cursada_curso');                  
                    const NOTAInput = document.getElementById('cursada_nota_id');          
                    // Ocultar label de alumno
                    const labelAlumno = document.querySelector('label[for=\"cursada_alumno\"]');
                    if (labelAlumno) {
                        labelAlumno.style.display = 'none';
                    }
                    if (alumnoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        
                        alumnoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        alumnoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    // Ocultar label de tecnicatura
                    const labelCurso = document.querySelector('label[for=\"cursada_curso\"]');
                    if (labelCurso) {
                        labelCurso.style.display = 'none';
                    }
                    if (cursoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input                       
                        cursoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        cursoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    // Ocultar label de nota se generan las notas vacias
                    const labelNOTA = document.querySelector('label[for=\"cursada_nota_id\"]');
                    if (labelNOTA) {
                        labelNOTA.style.display = 'none';
                    }
                    if (NOTAInput) {  //aqui evaluo la nota id de la posicion donde estoy y guardo en el input no lo necesita al crear cursada(nota empty) 
                        /*notaInput.value = '';  nada, ya que quiero guardar nota sin calificaciones se edita y agregan notas mas adelante*/
                        NOTAInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        NOTAInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal21() {
            document.getElementById('Modal21').style.display = 'none';
            document.getElementById('modalBody-21').innerHTML = '';
        }
    </script> 

  ";
        // line 753
        yield "<script>
function openModal2(tecnicaturaId, comisionId, cursoId, asignaturaNombre, comisionNombre, cupof) {
    if (!cursoId) {
        console.error(\"ID de curso faltante.\");
        return;
    }

    // Generar título al estilo del __toString() de Curso
    const titulo = `\${asignaturaNombre} - \${comisionNombre} [CUPOF: \${cupof}]`;
    const tituloElemento = document.getElementById('modalTitleCurso');
    if (tituloElemento) {
        tituloElemento.textContent = `Añadir estudiante a \${titulo}`;
    }

    // Generar la URL pasando solo el cursoId
    const url = \"";
        // line 768
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_cursada_directo", ["curso_id" => "__cursoId__"]);
        yield "\"
        .replace('__cursoId__', encodeURIComponent(cursoId));

    // Realizar la solicitud fetch
    fetch(url)
        .then(response => response.text())
        .then(html => {
            document.getElementById('modalBody-2').innerHTML = html;
            document.getElementById('Modal2').style.display = 'block';

            \$('#cursada_alumno').select2({
    placeholder: 'Seleccionar alumno',
    allowClear: true,
    width: '60%',
    minimumResultsForSearch: 5, // oculta buscador si hay pocos elementos
    dropdownCssClass: 'select2-minimal-dropdown',
    containerCssClass: 'select2-minimal'
});


            // Asignar valores y manipular campos
            const condicionInput = document.getElementById('cursada_condicion');                   
            const alumnoInput = document.getElementById('cursada_alumno');
            const modalidadInput = document.getElementById('cursada_modalidad');
            const cursoInput = document.getElementById('cursada_curso');                  
            const notaInput = document.getElementById('cursada_nota_id');

            // Ocultar label de curso
            const labelCurso = document.querySelector('label[for=\"cursada_curso\"]');
            if (labelCurso) {
                labelCurso.style.display = 'none';
            }

            if (cursoInput) {
                cursoInput.value = cursoId;
                cursoInput.setAttribute('readonly', true);
                cursoInput.style.display = 'none';
            }

            // Ocultar label de nota
            const labelNota = document.querySelector('label[for=\"cursada_nota_id\"]');
            if (labelNota) {
                labelNota.style.display = 'none';
            }

            if (notaInput) {
                notaInput.setAttribute('readonly', true);
                notaInput.style.display = 'none';
            }
        })  
        .catch(error => console.error('Error al cargar el formulario de edición:', error));
}

function closeModal2() {
    document.getElementById('Modal2').style.display = 'none';
    document.getElementById('modalBody-2').innerHTML = '';
}
</script>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>


    



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 837
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 838
        yield "

    ";
        // line 840
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 840, $this->source); })()), "session", [], "any", false, false, false, 840), "flashbag", [], "any", false, false, false, 840), "all", [], "method", false, false, false, 840));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 841
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 842
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                ";
                // line 843
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 846
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 847
        yield "
    <!-- Campo de búsqueda de ciclo lectivo -->
<form class=\"form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
    <div class=\"input-group\">
        <input id=\"ciclo-lectivo-input\" type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Ciclo Lectivo - Cohorte...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" value=\"\" maxlength=\"4\">
        <div class=\"input-group-append\">
            <button class=\"btn btn-primary\" type=\"button\" onclick=\"filtrarPorCicloLectivo()\">
                <i class=\"fas fa-search fa-sm\"></i>
            </button>
        </div>
    </div>
</form>


<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    console.log(\"DOM completamente cargado y parseado\");
    
    // Obtener el año actual
    const currentYear = new Date().getFullYear();
    console.log(\"Año actual:\", currentYear);

    // Establecer el valor del campo de ciclo lectivo con el año actual por defecto
    const inputCiclo = document.getElementById('ciclo-lectivo-input');
    console.log(\"Campo input encontrado:\", inputCiclo);

    if (inputCiclo) {
        inputCiclo.value = currentYear;
        console.log(\"Valor asignado al input:\", inputCiclo.value);

        // Solo permitir ingresar números y limitar a 4 dígitos
        inputCiclo.addEventListener('input', function() {
            // Eliminar cualquier carácter que no sea un número
            this.value = this.value.replace(/\\D/g, '');
            // Limitar la longitud a 4 caracteres
            if (this.value.length > 4) {
                this.value = this.value.slice(0, 4);
            }
            console.log(\"Valor actual del input:\", this.value);
        });
    } else {
        console.error(\"No se encontró el campo input ciclo lectivo.\");
    }

    // Función para filtrar por ciclo lectivo y redirigir
    window.filtrarPorCicloLectivo = function() {
        const cicloLectivo = inputCiclo.value;
        // Validar que el ciclo lectivo tenga 4 dígitos
        if (cicloLectivo.length === 4) {
            // Redirigir a la misma página con el ciclo lectivo como parámetro en la URL
            window.location.href = `";
        // line 897
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistascursada");
        yield "?cicloLectivo=\${cicloLectivo}`;
        } else {
            alert('Por favor, ingresa un ciclo lectivo válido de 4 dígitos.');
        }
    }
});

</script>


<script>
    
function toggleDropdownDocente(cursoId) {
  const dropdown = document.getElementById('dropdown-docentes-' + cursoId);
  if (!dropdown) return;

  // Cerrar otros dropdowns docentes
  document.querySelectorAll('.dropdown-docentes.show').forEach(menu => {
    if (menu !== dropdown) {
      menu.classList.remove('show');
      menu.style.display = 'none';
    }
  });
  // Cerrar dropdowns horarios para que no estén abiertos juntos
  document.querySelectorAll('.dropdown-horarios.show').forEach(menu => {
    menu.classList.remove('show');
    menu.style.display = 'none';
  });

  // Alternar el dropdown clickeado
  if (dropdown.classList.contains('show')) {
    dropdown.classList.remove('show');
    dropdown.style.display = 'none';
  } else {
    dropdown.classList.add('show');
    dropdown.style.display = 'block';
  }
}

function toggleDropdownHorario(cursoId) {
  const dropdown = document.getElementById('dropdown-horarios-' + cursoId);
  if (!dropdown) return;

  // Cerrar otros dropdowns horarios
  document.querySelectorAll('.dropdown-horarios.show').forEach(menu => {
    if (menu !== dropdown) {
      menu.classList.remove('show');
      menu.style.display = 'none';
    }
  });
  // Cerrar dropdowns docentes para que no estén abiertos juntos
  document.querySelectorAll('.dropdown-docentes.show').forEach(menu => {
    menu.classList.remove('show');
    menu.style.display = 'none';
  });

  // Alternar el dropdown clickeado
  if (dropdown.classList.contains('show')) {
    dropdown.classList.remove('show');
    dropdown.style.display = 'none';
  } else {
    dropdown.classList.add('show');
    dropdown.style.display = 'block';
  }
}

// Cerrar dropdowns si clic afuera
document.addEventListener('click', function(event) {
  if (!event.target.closest('.editar-container')) {
    document.querySelectorAll('.dropdown-horarios.show, .dropdown-docentes.show').forEach(menu => {
      menu.classList.remove('show');
      menu.style.display = 'none';
    });
  }
});


</script>


<script>
    
//FILTRO DE TECNICATURAS
function filterTableTecnicatura() {
    let searchNombre = document.getElementById(\"searchNombre\").value.toLowerCase();
    let searchReso = document.getElementById(\"searchResolucion\").value.toLowerCase();
    let table = document.getElementById(\"tablaTecnicaturas\");
    let rows = table.getElementsByTagName(\"tr\");

    for (let i = 1; i < rows.length; i++) {
        let cells = rows[i].getElementsByTagName(\"td\");

        if (cells.length < 2) continue; // Salta filas mal formadas

        let nombre = cells[0].textContent.toLowerCase();
        let resolucion = cells[1].textContent.toLowerCase();

        if (nombre.includes(searchNombre) && resolucion.includes(searchReso)) {
            rows[i].style.display = \"\";
        } else {
            rows[i].style.display = \"none\";
        }
    }
}
</script>






    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Comisiones, Cursadas y Curso del Cohorte ";
        // line 1009
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cicloLectivo"]) || array_key_exists("cicloLectivo", $context) ? $context["cicloLectivo"] : (function () { throw new RuntimeError('Variable "cicloLectivo" does not exist.', 1009, $this->source); })()), "html", null, true);
        yield "</h1>

        <div id=\"searchs\" class=\"search-container\">
            <label for=\"searchNombre\">Buscar por Nombre:</label>
            <input type=\"text\" id=\"searchNombre\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por nombre...\">
            <label for=\"searchResolucion\">Buscar por Resolucion:</label>
            <input type=\"text\" id=\"searchResolucion\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por resolucion...\">
        </div>

<!-- TABLA DE TECNICATURAS PARA ACCEDER A COMISIONES -->

        <table class=\"tabla_home\" id=\"tablaTecnicaturas\" border=\"1\">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Número de Resolución</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 1029
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tecnicaturas"]) || array_key_exists("tecnicaturas", $context) ? $context["tecnicaturas"] : (function () { throw new RuntimeError('Variable "tecnicaturas" does not exist.', 1029, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tecnicatura"]) {
            // line 1030
            yield "                    <tr>
                        <td>";
            // line 1031
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "nombre", [], "any", false, false, false, 1031), "html", null, true);
            yield "</td>
                        <td>";
            // line 1032
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "numeroResolucion", [], "any", false, false, false, 1032), "html", null, true);
            yield "</td>
                        <td>
                            <button onclick=\"showComision(";
            // line 1034
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 1034), "html", null, true);
            yield ")\" class=\"btn-primary\">Ir</button>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 1041
        if (!$context['_iterated']) {
            // line 1038
            yield "                    <tr>
                        <td colspan=\"3\">No se encontraron registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tecnicatura'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1042
        yield "            </tbody>
        </table>

<!-- FIN DE LA TABLA DE TECNICATURAS-->

<!-- TABLA DE COMISIONES -->

        ";
        // line 1049
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tecnicaturas"]) || array_key_exists("tecnicaturas", $context) ? $context["tecnicaturas"] : (function () { throw new RuntimeError('Variable "tecnicaturas" does not exist.', 1049, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tecnicatura"]) {
            // line 1050
            yield "            <table id=\"tablaComision_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 1050), "html", null, true);
            yield "\" class=\"tabla_comision\" style=\"display: none;\" border=\"1\">
    <thead>
        <tr>
                <th colspan=\"6\" style=\"text-align: center;\">
                    <button type=\"button\" onclick=\"showTecnicaturas()\" class=\"btn btn-secondary\">
                        Volver a Tecnicaturas
                    </button>
                </th>
            </tr>
        <tr>
            <th colspan=\"6\">";
            // line 1060
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "nombre", [], "any", false, false, false, 1060), "html", null, true);
            yield " - Comisiones ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cicloLectivo"]) || array_key_exists("cicloLectivo", $context) ? $context["cicloLectivo"] : (function () { throw new RuntimeError('Variable "cicloLectivo" does not exist.', 1060, $this->source); })()), "html", null, true);
            yield "</th>
        </tr>
        <tr>
            <th>Año</th>
            <th>Comisión</th>
            <th>Estado</th>
            <th>Turno</th>
            <th colspan=\"2\">
                <button onclick=\"openModal1('";
            // line 1068
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 1068), "html", null, true);
            yield "')\" class=\"btn-primary\">Crear Comisión</button>
            </th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 1074
            yield "        ";
            $context["comisionesFiltradas"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "comision", [], "any", false, false, false, 1074), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 1074, $this->source); })()), "cicloLectivo", [], "any", false, false, false, 1074) == (isset($context["cicloLectivo"]) || array_key_exists("cicloLectivo", $context) ? $context["cicloLectivo"] : (function () { throw new RuntimeError('Variable "cicloLectivo" does not exist.', 1074, $this->source); })())); });
            // line 1075
            yield "        ";
            $context["comisionesOrdenadas"] = Twig\Extension\CoreExtension::sort($this->env, (isset($context["comisionesFiltradas"]) || array_key_exists("comisionesFiltradas", $context) ? $context["comisionesFiltradas"] : (function () { throw new RuntimeError('Variable "comisionesFiltradas" does not exist.', 1075, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 1075, $this->source); })()), "anio", [], "any", false, false, false, 1075) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 1075, $this->source); })()), "anio", [], "any", false, false, false, 1075)); });
            // line 1076
            yield "
        ";
            // line 1077
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["comisionesOrdenadas"]) || array_key_exists("comisionesOrdenadas", $context) ? $context["comisionesOrdenadas"] : (function () { throw new RuntimeError('Variable "comisionesOrdenadas" does not exist.', 1077, $this->source); })()))) {
                // line 1078
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comisionesOrdenadas"]) || array_key_exists("comisionesOrdenadas", $context) ? $context["comisionesOrdenadas"] : (function () { throw new RuntimeError('Variable "comisionesOrdenadas" does not exist.', 1078, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
                    // line 1079
                    yield "                <tr>
                    <td>";
                    // line 1080
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "anio", [], "any", false, false, false, 1080), "html", null, true);
                    yield "</td>
                    <td>";
                    // line 1081
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "comision", [], "any", false, false, false, 1081), "html", null, true);
                    yield "</td>
                    <td>";
                    // line 1082
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "estado", [], "any", false, false, false, 1082)) ? ("Activo") : ("Inactivo"));
                    yield "</td>
                    <td>";
                    // line 1083
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "turno", [], "any", false, false, false, 1083), "html", null, true);
                    yield "</td>
                    <td>
                        <button onclick=\"showCursada(";
                    // line 1085
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1085), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 1085), "html", null, true);
                    yield ")\" class=\"btn-primary\">Ir a Cursos</button>
                    </td>
                    <td>
                        <button onclick=\"openModal11(";
                    // line 1088
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1088), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 1088), "html", null, true);
                    yield ")\">Editar</button>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comision'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1092
                yield "        ";
            } else {
                // line 1093
                yield "            <tr>
                <td colspan=\"6\" style=\"text-align: center;\">No hay comisiones registradas para el ciclo ";
                // line 1094
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cicloLectivo"]) || array_key_exists("cicloLectivo", $context) ? $context["cicloLectivo"] : (function () { throw new RuntimeError('Variable "cicloLectivo" does not exist.', 1094, $this->source); })()), "html", null, true);
                yield "</td>
            </tr>
            <tr>
                <td colspan=\"6\" style=\"text-align: center;\">
                    <button onclick=\"openModal1('";
                // line 1098
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 1098), "html", null, true);
                yield "')\" class=\"btn-primary\">Crear Comisión</button>
                </td>
            </tr>
        ";
            }
            // line 1102
            yield "    </tbody>
</table>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tecnicatura'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1105
        yield "   


<!-- FIN TABALA COMISIONES -->

<!-- DENTRO DE UNA COMISION DE LA TECNICATURA MUESTRA:
 TABLA DE CURSOS, CON SUS ASIGNATURAS, SUS CUPOF Y SUS HORARIOS. CURSADAxDOCENTE SE MUESTRA AQUI
 -->

 


        ";
        // line 1117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comisiones"]) || array_key_exists("comisiones", $context) ? $context["comisiones"] : (function () { throw new RuntimeError('Variable "comisiones" does not exist.', 1117, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            yield "    
            <table id=\"tablaCursada_";
            // line 1118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1118), "html", null, true);
            yield "\" class=\"tabla_cursada\" style=\"display: none;\" border=\"1\">
                <thead>
                        <tr>
                <th colspan=\"7\" style=\"text-align: center;\">
                    <button type=\"button\" 
                            onclick=\"showComision(";
            // line 1123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "tecnicatura", [], "any", false, false, false, 1123), "id", [], "any", false, false, false, 1123), "html", null, true);
            yield ")\" 
                            class=\"btn btn-secondary\">
                        Volver a Comisiones
                    </button>
                </th>
            </tr>
                    <tr>
                        <th colspan=\"3\">";
            // line 1130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "tecnicatura", [], "any", false, false, false, 1130), "html", null, true);
            yield " -Cursos-</th>
                        <th colspan=\"1\"> Año: ";
            // line 1131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "anio", [], "any", false, false, false, 1131), "html", null, true);
            yield " Comisión: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "comision", [], "any", false, false, false, 1131), "html", null, true);
            yield "</th>
                    </tr>
                    <tr>
                        <th colspan=\"1\">Asignatura</th>
                         <th colspan=\"1\">Horario</th>
                         <th colspan=\"1\">Docente</th>
                        <th colspan=\"2\">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 1141
            $context["asignaturas_encontradas"] = false;
            // line 1142
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "tecnicatura", [], "any", false, false, false, 1142), "asignatura", [], "any", false, false, false, 1142));
            foreach ($context['_seq'] as $context["_key"] => $context["asignatura"]) {
                // line 1143
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "anio", [], "any", false, false, false, 1143) == CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "anio", [], "any", false, false, false, 1143))) {
                    // line 1144
                    yield "                            ";
                    $context["asignaturas_encontradas"] = true;
                    // line 1145
                    yield "                            <tr>
                                <td colspan=\"1\">";
                    // line 1146
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "nombre", [], "any", false, false, false, 1146), "html", null, true);
                    yield "</td>   
                               <td colspan=\"1\">&nbsp;</td>
                               <td colspan=\"1\">&nbsp;</td>

                                <td colspan=\"2\">
                                    <button onclick=\"openModal3('";
                    // line 1151
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "tecnicatura", [], "any", false, false, false, 1151), "id", [], "any", false, false, false, 1151), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1151), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "id", [], "any", false, false, false, 1151), "html", null, true);
                    yield "')\" class=\"btn-primary\">Agregar Curso</button>
                                </td>
                                <!--<td>
                                    <button onclick=\"showCurso('";
                    // line 1154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1154), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "tecnicatura", [], "any", false, false, false, 1154), "id", [], "any", false, false, false, 1154), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "id", [], "any", false, false, false, 1154), "html", null, true);
                    yield "')\" class=\"btn-primary\">Ver Cursos</button>
                                </td>
                                -->                     
                            </tr>
                            
                          ";
                    // line 1159
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 1159, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
                        // line 1160
                        yield "                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1160), "id", [], "any", false, false, false, 1160) == CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "id", [], "any", false, false, false, 1160)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1160), "id", [], "any", false, false, false, 1160) == CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1160)))) {
                            // line 1161
                            yield "                                    <tr>
                                        <td><strong>Cupof:</strong> ";
                            // line 1162
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cupof", [], "any", false, false, false, 1162), "html", null, true);
                            yield "<br></td>

                                        ";
                            // line 1165
                            yield "                                        <td colspan=\"1\">
                                            ";
                            // line 1166
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "horarios", [], "any", false, false, false, 1166)) > 0)) {
                                // line 1167
                                yield "                                                <p><strong>Horarios asignados:</strong></p>
                                                <ul>
                                                    ";
                                // line 1169
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "horarios", [], "any", false, false, false, 1169));
                                foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                                    // line 1170
                                    yield "                                                        <li>";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "dia", [], "any", false, false, false, 1170), "html", null, true);
                                    yield ": ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "horarioInicio", [], "any", false, false, false, 1170), "html", null, true);
                                    yield " - ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "horarioFin", [], "any", false, false, false, 1170), "html", null, true);
                                    yield " (";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "cantModulos", [], "any", false, false, false, 1170), "html", null, true);
                                    yield " módulo/s)</li>
                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['horario'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1172
                                yield "                                                </ul>
                                            ";
                            } else {
                                // line 1174
                                yield "                                                <span>Sin horario asignado</span>
                                            ";
                            }
                            // line 1176
                            yield "                                        </td>

                                        ";
                            // line 1179
                            yield "                                        <td colspan=\"1\">
                                            ";
                            // line 1180
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadaDocentes", [], "any", false, false, false, 1180)) > 0)) {
                                // line 1181
                                yield "                                                <p><strong>Docente/s asignado/s:</strong></p>
                                                <ul>
                                                    ";
                                // line 1183
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadaDocentes", [], "any", false, false, false, 1183));
                                foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                                    // line 1184
                                    yield "                                                        <li>
                                                            ";
                                    // line 1185
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "docente", [], "any", false, false, false, 1185), "persona", [], "any", false, false, false, 1185), "apellido", [], "any", false, false, false, 1185), "html", null, true);
                                    yield ", ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "docente", [], "any", false, false, false, 1185), "persona", [], "any", false, false, false, 1185), "nombre", [], "any", false, false, false, 1185), "html", null, true);
                                    yield "
                                                            (Desde: ";
                                    // line 1186
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "toma", [], "any", false, false, false, 1186), "d/m/Y"), "html", null, true);
                                    yield ")
                                                            ";
                                    // line 1187
                                    if (CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "cese", [], "any", false, false, false, 1187)) {
                                        yield " hasta ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "cese", [], "any", false, false, false, 1187), "d/m/Y"), "html", null, true);
                                    }
                                    // line 1188
                                    yield "                                                            ";
                                    if (CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "licencia", [], "any", false, false, false, 1188)) {
                                        // line 1189
                                        yield "                                                                <span class=\"text-danger\">(En licencia)</span>
                                                            ";
                                    } else {
                                        // line 1191
                                        yield "                                                                <span class=\"text-success\">(Activo)</span>
                                                            ";
                                    }
                                    // line 1193
                                    yield "                                                        </li>
                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1195
                                yield "                                                </ul>
                                            ";
                            } else {
                                // line 1197
                                yield "                                                <span>Sin docente asignado</span>
                                            ";
                            }
                            // line 1199
                            yield "                                        </td>

                                        ";
                            // line 1202
                            yield "                                        <td colspan=\"2\">
                                            <div style=\"display: flex; flex-direction: column; gap: 6px;\">
                                                <button onclick=\"showCursoCursada(";
                            // line 1204
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1204), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "tecnicatura", [], "any", false, false, false, 1204), "id", [], "any", false, false, false, 1204), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "id", [], "any", false, false, false, 1204), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1204), "html", null, true);
                            yield ")\" class=\"btn-primary\">Ver Curso</button>

                                                <button onclick=\"openModal31(";
                            // line 1206
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1206), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1206), "id", [], "any", false, false, false, 1206), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1206), "id", [], "any", false, false, false, 1206), "html", null, true);
                            yield ")\" class=\"btn-secondary\">
                                                    ";
                            // line 1207
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cupof", [], "any", false, false, false, 1207)) {
                                // line 1208
                                yield "                                                        Editar Cupof
                                                    ";
                            } else {
                                // line 1210
                                yield "                                                        Editar
                                                    ";
                            }
                            // line 1212
                            yield "                                                </button>

                                                <button onclick=\"openModal4(";
                            // line 1214
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1214), "html", null, true);
                            yield ")\" class=\"btn-primary\">Agregar Docente</button>
                                               <!--";
                            // line 1215
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadaDocentes", [], "any", false, false, false, 1215));
                            $context['_iterated'] = false;
                            foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                                // line 1216
                                yield "    <button onclick=\"openModal41(";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1216), "html", null, true);
                                yield ", ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "id", [], "any", false, false, false, 1216), "html", null, true);
                                yield ")\" class=\"btn-secondary\">
        Editar Docente: ";
                                // line 1217
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "docente", [], "any", false, false, false, 1217), "persona", [], "any", false, false, false, 1217), "apellido", [], "any", false, false, false, 1217), "html", null, true);
                                yield ", ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "docente", [], "any", false, false, false, 1217), "persona", [], "any", false, false, false, 1217), "nombre", [], "any", false, false, false, 1217), "html", null, true);
                                yield "
    </button>
";
                                $context['_iterated'] = true;
                            }
                            // line 1221
                            if (!$context['_iterated']) {
                                // line 1220
                                yield "    <span>Sin docente para editar</span>
";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent'], $context['_iterated']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1221
                            yield " --> 

                                           ";
                            // line 1224
                            yield "                                           
                                           <div class=\"editar-container\" style=\"position: relative; display: block; width: 100%;\">

                                                <button onclick=\"toggleDropdownDocente(";
                            // line 1227
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1227), "html", null, true);
                            yield ")\" class=\"btn-secondary\">
                                                    Editar docente
                                                </button>

                                                <div id=\"dropdown-docentes-";
                            // line 1231
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1231), "html", null, true);
                            yield "\" class=\"dropdown-docentes\" style=\"display: none;\">
                                                    ";
                            // line 1232
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadaDocentes", [], "any", false, false, false, 1232));
                            $context['_iterated'] = false;
                            foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                                // line 1233
                                yield "                                                    <button class=\"dropdown-item\" onclick=\"openModal41(";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1233), "html", null, true);
                                yield ", ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "id", [], "any", false, false, false, 1233), "html", null, true);
                                yield ")\">
                                                        ";
                                // line 1234
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "docente", [], "any", false, false, false, 1234), "persona", [], "any", false, false, false, 1234), "apellido", [], "any", false, false, false, 1234), "html", null, true);
                                yield ", ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "docente", [], "any", false, false, false, 1234), "persona", [], "any", false, false, false, 1234), "nombre", [], "any", false, false, false, 1234), "html", null, true);
                                yield "
                                                    </button>
                                                    ";
                                $context['_iterated'] = true;
                            }
                            // line 1238
                            if (!$context['_iterated']) {
                                // line 1237
                                yield "                                                    <div class=\"dropdown-item disabled\">No hay docentes para editar</div>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent'], $context['_iterated']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1239
                            yield "                                                </div>
                                            </div>



                                                <button onclick=\"openModalHorario(";
                            // line 1244
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1244), "html", null, true);
                            yield ")\" class=\"btn-primary\">Agregar Horario</button>

                                           ";
                            // line 1247
                            yield "                                        
                                           <div class=\"editar-container\" style=\"position: relative; display: block; width: 100%;\">

                                            <button onclick=\"toggleDropdownHorario(";
                            // line 1250
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1250), "html", null, true);
                            yield ")\" class=\"btn-secondary\">
                                                Editar horario
                                            </button>

                                            <div id=\"dropdown-horarios-";
                            // line 1254
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1254), "html", null, true);
                            yield "\" class=\"dropdown-horarios\" style=\"display: none;\">
                                                ";
                            // line 1255
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "horarios", [], "any", false, false, false, 1255));
                            $context['_iterated'] = false;
                            foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                                // line 1256
                                yield "                                                <button class=\"dropdown-item\" onclick=\"openModalEditHorario(";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "id", [], "any", false, false, false, 1256), "html", null, true);
                                yield ")\">
                                                    ";
                                // line 1257
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "dia", [], "any", false, false, false, 1257), "html", null, true);
                                yield " - ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "horarioInicio", [], "any", false, false, false, 1257), "H:i"), "html", null, true);
                                yield " a ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "horarioFin", [], "any", false, false, false, 1257), "H:i"), "html", null, true);
                                yield "
                                                </button>
                                                ";
                                $context['_iterated'] = true;
                            }
                            // line 1261
                            if (!$context['_iterated']) {
                                // line 1260
                                yield "                                                <div class=\"dropdown-item disabled\">No hay horarios para editar</div>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['horario'], $context['_parent'], $context['_iterated']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1262
                            yield "                                            </div>
                                            </div>



                                            </div>
                                        </td>
                                    </tr>
                                ";
                        }
                        // line 1271
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['curso'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1272
                    yield "


       
                           
                        ";
                }
                // line 1278
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['asignatura'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1279
            yield "                    ";
            if ( !(isset($context["asignaturas_encontradas"]) || array_key_exists("asignaturas_encontradas", $context) ? $context["asignaturas_encontradas"] : (function () { throw new RuntimeError('Variable "asignaturas_encontradas" does not exist.', 1279, $this->source); })())) {
                // line 1280
                yield "                        <tr>
                            <td>No se encontraron registros</td>
                        </tr>
                    ";
            }
            // line 1284
            yield "                   
                    ";
            // line 1286
            yield "                     <!--<button id=\"backButton\" class:\"button\" onclick=\"showTable('tablaTecnicaturas')\" style=\"display: none;\">Regresar</button>
         --> 
                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comision'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1291
        yield "
<!-- FIN DE TABLA CURSADA-->

<!-- TABLA QUE MUESTRA LOS ALUMNOS QUE HAY EN LA CURSADA (CUPOF) SUS NOTAS Y TODO -->


";
        // line 1297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 1297, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 1298
            yield "    <table id=\"tablaCursoCursada_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1298), "id", [], "any", false, false, false, 1298), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1298), "id", [], "any", false, false, false, 1298), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1298), "html", null, true);
            yield "\" class=\"tabla_curso_cursada\" style=\"display: none;\" border=\"1\">
        <thead>
            ";
            // line 1301
            yield "            <tr>
                <th colspan=\"7\" style=\"text-align: center;\">
                    <button type=\"button\" 
                            onclick=\"showCursada(";
            // line 1304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1304), "id", [], "any", false, false, false, 1304), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1304), "tecnicatura", [], "any", false, false, false, 1304), "id", [], "any", false, false, false, 1304), "html", null, true);
            yield ")\" 
                            class=\"btn btn-secondary\">
                        Volver a Cursadas
                    </button>
                </th>
            </tr>

            ";
            // line 1312
            yield "            <tr>
                <th colspan=\"3\">";
            // line 1313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1313), "tecnicatura", [], "any", false, false, false, 1313), "html", null, true);
            yield "</th>
                <th colspan=\"4\">Comisión: ";
            // line 1314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1314), "comision", [], "any", false, false, false, 1314), "html", null, true);
            yield " - Año: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1314), "anio", [], "any", false, false, false, 1314), "html", null, true);
            yield "</th>
            </tr>

            ";
            // line 1318
            yield "            <tr>
                <th colspan=\"3\">Asignatura: ";
            // line 1319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1319), "nombre", [], "any", false, false, false, 1319), "html", null, true);
            yield "</th>
                <th>Cupof: ";
            // line 1320
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cupof", [], "any", true, true, false, 1320) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cupof", [], "any", false, false, false, 1320)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cupof", [], "any", false, false, false, 1320), "html", null, true)) : ("No definido"));
            yield "</th>
                <th colspan=\"3\">
                    Docente activo:
                    ";
            // line 1323
            $context["docenteActivo"] = null;
            // line 1324
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadaDocentes", [], "any", false, false, false, 1324));
            foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                // line 1325
                yield "                        ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "licencia", [], "any", false, false, false, 1325)) {
                    // line 1326
                    yield "                            ";
                    $context["docenteActivo"] = $context["cursada"];
                    // line 1327
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "docente", [], "any", false, false, false, 1327), "persona", [], "any", false, false, false, 1327), "apellido", [], "any", false, false, false, 1327), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "docente", [], "any", false, false, false, 1327), "persona", [], "any", false, false, false, 1327), "nombre", [], "any", false, false, false, 1327), "html", null, true);
                    yield " (Desde: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "toma", [], "any", false, false, false, 1327), "d/m/Y"), "html", null, true);
                    yield ")
                        ";
                }
                // line 1329
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1330
            yield "                    ";
            if ( !(isset($context["docenteActivo"]) || array_key_exists("docenteActivo", $context) ? $context["docenteActivo"] : (function () { throw new RuntimeError('Variable "docenteActivo" does not exist.', 1330, $this->source); })())) {
                // line 1331
                yield "                        <span class=\"text-danger\">Sin docente activo</span>
                    ";
            }
            // line 1333
            yield "                </th>
            </tr>

            ";
            // line 1337
            yield "            <tr>    
                <th>Alumno</th>
                <th>Primer Parcial</th>
                <th>Primer Recuperatorio</th>
                <th>Segundo Parcial</th>
                <th>Segundo Recuperatorio</th>
                <th>Condición</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 1349
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadas", [], "any", false, false, false, 1349));
            foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                // line 1350
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "curso", [], "any", false, false, false, 1350), "comision", [], "any", false, false, false, 1350), "cicloLectivo", [], "any", false, false, false, 1350) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1350), "cicloLectivo", [], "any", false, false, false, 1350))) {
                    // line 1351
                    yield "                    <tr>
                        <td>";
                    // line 1352
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "alumno", [], "any", false, false, false, 1352), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 1353
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 1353), "parcial", [], "any", false, false, false, 1353), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 1354
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 1354), "recuperatorio1", [], "any", false, false, false, 1354), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 1355
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 1355), "parcial2", [], "any", false, false, false, 1355), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 1356
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 1356), "recuperatorio2", [], "any", false, false, false, 1356), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 1357
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "condicion", [], "any", false, false, false, 1357), "html", null, true);
                    yield "</td>
                        <td>
                            <button onclick=\"openModal21(";
                    // line 1359
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "id", [], "any", false, false, false, 1359), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1359), "html", null, true);
                    yield ")\">Editar</button>
                        </td>
                    </tr>
                     
                ";
                }
                // line 1364
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1365
            yield "            <tr>
        <td colspan=\"7\" style=\"text-align: center;\">
           <button type=\"button\"
        onclick=\"openModal2(
            ";
            // line 1369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1369), "tecnicatura", [], "any", false, false, false, 1369), "id", [], "any", false, false, false, 1369), "html", null, true);
            yield ",
            ";
            // line 1370
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1370), "id", [], "any", false, false, false, 1370), "html", null, true);
            yield ",
            ";
            // line 1371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1371), "html", null, true);
            yield ",
            '";
            // line 1372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1372), "nombre", [], "any", false, false, false, 1372), "js"), "html", null, true);
            yield "',
            '";
            // line 1373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1373), "comision", [], "any", false, false, false, 1373), "js"), "html", null, true);
            yield "',
            '";
            // line 1374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "CUPOF", [], "any", false, false, false, 1374), "js"), "html", null, true);
            yield "'
        )\"
        class=\"btn btn-secondary\">
    Agregar cursada
</button>

        </td>
    </tr>
        </tbody>
    </table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['curso'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1385
        yield "}





        <!-- Modal1  para crear comisiones-->
        <div id=\"Modal1\" class=\"modal\" style=\"display: none;\"> 
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeModal1()\">&times;</span>
                <div id=\"modalBody-1\" class=\"submodal\"></div>
            </div>
        </div>

        <!-- Modal11  para editar comisiones-->
        <div id=\"Modal11\" class=\"modal\" style=\"display: none;\"> 
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeModal11()\">&times;</span>
                <div id=\"modalBody-11\" class=\"submodal\"></div>
            </div>
        </div>

        <!-- Modal2 para crear cursadas!!!-->
        <div id=\"Modal2\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <div id=\"modal-cursadas\">

            <!--  TÍTULO del modal (se llena dinámicamente) -->
           <h3 id=\"modalTitleCurso\" style=\"text-align: center; margin-top: 15px;\"></h3>

            <!--  Contenido dinámico + botón cerrar -->
            <div class=\"modal-content2\">
                <span class=\"close\" onclick=\"closeModal2()\">&times;</span>
                <div id=\"modalBody-2\" class=\"submodal\"></div>
            </div>

        </div>
    </div>
</div>

        <!-- Modal21 para editar cursada!!!-->
        <div id=\"Modal21\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content21\">
                    <span class=\"close\" onclick=\"closeModal21()\">&times;</span>
                    <div id=\"modalBody-21\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>

        <!-- Modal3  para crear cursos!!!!-->
        <div id=\"Modal3\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content3\">
                    <span class=\"close\" onclick=\"closeModal3()\">&times;</span>
                    <div id=\"modalBody-3\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>

        <!-- Modal31  para editar cursos!!!!-->
        <div id=\"Modal31\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content31\">
                    <span class=\"close\" onclick=\"closeModal31()\">&times;</span>
                    <div id=\"modalBody-31\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>

        <!-- Modal4  para crear cursada docente!!!!-->
        <div id=\"Modal4\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content4\">
                    <span class=\"close\" onclick=\"closeModal4()\">&times;</span>
                    <div id=\"modalBody-4\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>

        <!-- Modal41  para editar cursada docente!!!!-->
        <div id=\"Modal41\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content41\">
                    <span class=\"close\" onclick=\"closeModal41()\">&times;</span>
                    <div id=\"modalBody-41\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>
                    <!-- ModalHorario para cargar horarios -->
            <div id=\"ModalHorario\" class=\"modal\" style=\"display: none;\">
                <div class=\"modal-content\">
                    <div class=\"modal-content-horario\">
                        <span class=\"close\" onclick=\"closeModalHorario()\">&times;</span>
                        <div id=\"modalBodyHorario\" class=\"submodal\"></div>
                    </div>
                </div>    
            </div>
            <!-- Modal Editar Horario -->
            <div id=\"ModalEditHorario\" class=\"modal\" style=\"display:none;\">
                <div class=\"modal-content\">
                    <span class=\"close\" onclick=\"closeModalEditHorario()\">&times;</span>
                    <div id=\"modalBodyEditHorario\"class=\"submodal\">
                        <!-- Aquí se cargará el formulario AJAX -->
                    </div>
                </div>
            </div>




       

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vistascursada/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  2079 => 1385,  2062 => 1374,  2058 => 1373,  2054 => 1372,  2050 => 1371,  2046 => 1370,  2042 => 1369,  2036 => 1365,  2030 => 1364,  2020 => 1359,  2015 => 1357,  2011 => 1356,  2007 => 1355,  2003 => 1354,  1999 => 1353,  1995 => 1352,  1992 => 1351,  1989 => 1350,  1985 => 1349,  1971 => 1337,  1966 => 1333,  1962 => 1331,  1959 => 1330,  1953 => 1329,  1943 => 1327,  1940 => 1326,  1937 => 1325,  1932 => 1324,  1930 => 1323,  1924 => 1320,  1920 => 1319,  1917 => 1318,  1909 => 1314,  1905 => 1313,  1902 => 1312,  1890 => 1304,  1885 => 1301,  1875 => 1298,  1871 => 1297,  1863 => 1291,  1853 => 1286,  1850 => 1284,  1844 => 1280,  1841 => 1279,  1835 => 1278,  1827 => 1272,  1821 => 1271,  1810 => 1262,  1803 => 1260,  1801 => 1261,  1790 => 1257,  1785 => 1256,  1780 => 1255,  1776 => 1254,  1769 => 1250,  1764 => 1247,  1759 => 1244,  1752 => 1239,  1745 => 1237,  1743 => 1238,  1734 => 1234,  1727 => 1233,  1722 => 1232,  1718 => 1231,  1711 => 1227,  1706 => 1224,  1702 => 1221,  1695 => 1220,  1693 => 1221,  1684 => 1217,  1677 => 1216,  1672 => 1215,  1668 => 1214,  1664 => 1212,  1660 => 1210,  1656 => 1208,  1654 => 1207,  1646 => 1206,  1635 => 1204,  1631 => 1202,  1627 => 1199,  1623 => 1197,  1619 => 1195,  1612 => 1193,  1608 => 1191,  1604 => 1189,  1601 => 1188,  1596 => 1187,  1592 => 1186,  1586 => 1185,  1583 => 1184,  1579 => 1183,  1575 => 1181,  1573 => 1180,  1570 => 1179,  1566 => 1176,  1562 => 1174,  1558 => 1172,  1543 => 1170,  1539 => 1169,  1535 => 1167,  1533 => 1166,  1530 => 1165,  1525 => 1162,  1522 => 1161,  1519 => 1160,  1515 => 1159,  1503 => 1154,  1493 => 1151,  1485 => 1146,  1482 => 1145,  1479 => 1144,  1476 => 1143,  1471 => 1142,  1469 => 1141,  1454 => 1131,  1450 => 1130,  1440 => 1123,  1432 => 1118,  1426 => 1117,  1412 => 1105,  1403 => 1102,  1396 => 1098,  1389 => 1094,  1386 => 1093,  1383 => 1092,  1371 => 1088,  1363 => 1085,  1358 => 1083,  1354 => 1082,  1350 => 1081,  1346 => 1080,  1343 => 1079,  1338 => 1078,  1336 => 1077,  1333 => 1076,  1330 => 1075,  1327 => 1074,  1319 => 1068,  1306 => 1060,  1292 => 1050,  1288 => 1049,  1279 => 1042,  1270 => 1038,  1268 => 1041,  1260 => 1034,  1255 => 1032,  1251 => 1031,  1248 => 1030,  1243 => 1029,  1220 => 1009,  1105 => 897,  1053 => 847,  1047 => 846,  1038 => 843,  1033 => 842,  1028 => 841,  1024 => 840,  1020 => 838,  1007 => 837,  929 => 768,  912 => 753,  856 => 699,  851 => 696,  802 => 649,  797 => 646,  743 => 594,  733 => 586,  679 => 534,  674 => 531,  634 => 493,  629 => 490,  561 => 424,  557 => 422,  494 => 361,  490 => 359,  452 => 323,  447 => 320,  407 => 282,  402 => 279,  171 => 49,  166 => 47,  161 => 45,  158 => 44,  155 => 43,  150 => 41,  147 => 40,  145 => 39,  139 => 38,  136 => 37,  134 => 36,  107 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello VistascursadaController!{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {#Scripts de filtros, vistas de tablas y la session iniciada -vista del usuario-#}

    
    <script>
       

        function filterCursadas(comisionId) {
            let searchEstudiante = document.getElementById(\"searchAsignatura_\" + comisionId).value.toLowerCase();
            let table = document.getElementById(\"tablaCursada_\" + comisionId); // Obtener la tabla de cursadas específica
            let rows = table.getElementsByTagName(\"tr\");

            for (let i = 2; i < rows.length; i++) { // Comienza en 2 para omitir los encabezados
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let estudiante = cells[1].textContent.toLowerCase(); // Cambiado a la columna de estudiante

                    if (estudiante.includes(searchEstudiante)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }


        document.addEventListener('DOMContentLoaded', function() {
            // Evaluar si `comId` está definido y no es nulo
            {% if comId is defined and comId is not null %}
                // Llamar a showCursada con los IDs de cursada y tecnicatura
                showCursada({{ comId|default('null') }}, {{ tecId|default('null') }});
            {% elseif tecId is defined and tecId is not null %}
                // Llamar a showComision con el ID de tecnicatura
                showComision({{ tecId|default('null') }});
            {% else %}
            {% endif %}

            {% if cursoId is defined and cursoId is not null %}    //Revisar el id que se pasa en showCurso, tal vez hacer una funcion especifica para mostrar tabla curso
                // Llamar a showCurso
                showCurso({{ cursoId|default('null') }} );
            {% endif %}
        });


      function showTecnicaturas() {
    // Ocultar todas las tablas de Comision
    let tablesComision = document.querySelectorAll('.tabla_comision');
    tablesComision.forEach(table => table.style.display = 'none');

    // Ocultar todas las tablas de cursada
    let cursadaTables = document.querySelectorAll('.tabla_cursada');
    cursadaTables.forEach(table => table.style.display = 'none');

    // Ocultar todas las tablas de cursos
    let cursoTables = document.querySelectorAll('.tabla_curso_cursada');
    cursoTables.forEach(table => table.style.display = 'none');

    // Mostrar tabla de tecnicaturas
    let tablaTecnicaturas = document.getElementById('tablaTecnicaturas');
    if (tablaTecnicaturas) {
        tablaTecnicaturas.style.display = '';
    }

    // Mostrar filtro tecnicaturas (por ej. campo de búsqueda)
    let search = document.getElementById('searchs');
    if (search) {
        search.style.display = '';
    }
}

function hideTecnicaturas() {
    // Ocultar tabla de tecnicaturas
    let tablaTecnicaturas = document.getElementById('tablaTecnicaturas');
    if (tablaTecnicaturas) {
        tablaTecnicaturas.style.display = 'none';
    }

    // Opcional: ocultar filtro tecnicaturas
    let search = document.getElementById('searchs');
    if (search) {
        search.style.display = 'none';
    }
}





// CON ESTE SCRIPT MOSTRAS LAS COMISIONES DE LA TECNICATURA (2DA TABLA)

        function showComision(tecnicaturaId) {
           
            // Ocultar todas las tablas de Comision
            let tables = document.querySelectorAll('.tabla_home');
            tables.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursadaTables = document.querySelectorAll('.tabla_cursada');
            cursadaTables.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursoTables = document.querySelectorAll('.tabla_curso_cursada');
            cursoTables.forEach(table => table.style.display = 'none');

            // Mostrar la tabla de Comision correspondiente
            let ComisionTable = document.getElementById(`tablaComision_\${tecnicaturaId}`);
            if (ComisionTable) {
                ComisionTable.style.display = '';
            }

            // Ocultar filtro tecnicaturas
            let search = document.getElementById(`searchs`);
            if (search) {
                search.style.display = 'none';
            }
           

        }

        function hideComision(tecnicaturaId) {
            // Ocultar la tabla de Comision correspondiente
            let ComisionTable = document.getElementById(`tablaComision_\${tecnicaturaId}`);
            if (ComisionTable) {
                ComisionTable.style.display = 'none';
            }

            // Mostrar filtro tecnicaturas
            let search = document.getElementById(`searchs`);
            if (search) {
                search.style.display = '';
            }

            // Mostrar la tabla de tecnicaturas principal
            let tablaTecnicaturas = document.getElementById('tablaTecnicaturas');
            if (tablaTecnicaturas) {
                tablaTecnicaturas.style.display = '';
            }

          
        }

// CON ESTE SCRIPT MOSTRAS LAS CURSADAS,CURSO CUPOF, HORARIO, DOCENTE, ETC (3RA TABLA)

        function showCursada(comisionId, tecnicaturaId) {
            
            // oculta tabla tecnicaturas
            let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision');
            tablesToHide.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursadaTables = document.querySelectorAll('.tabla_cursada');
            cursadaTables.forEach(table => table.style.display = 'none');

            // oculta curso
            let cursoTables = document.querySelectorAll('.tabla_curso_cursada');
            cursoTables.forEach(table => table.style.display = 'none');

            // muestra tabla comision
            let cursadaTable = document.getElementById(`tablaCursada_\${comisionId}`);
            if (cursadaTable) {
                cursadaTable.style.display = '';
            }

            // ocultar search
            let search = document.getElementById('searchs');
            if (search) {
                search.style.display = 'none';
            }

           

        }

        function hideCursada(comisionId, tecnicaturaId) {
            // oculta tabla cursada
            let cursadaTable = document.getElementById(`tablaCursada_\${comisionId}`);
            if (cursadaTable) {
                cursadaTable.style.display = 'none';
            }

            // muestra la tabla comision
            let comisionTable = document.getElementById(`tablaComision_\${tecnicaturaId}`);
            if (comisionTable) {
                comisionTable.style.display = '';
            }

           
            
        }

      
// CON ESTE SCRIPT MOSTRAS LA TABLA DE LA CURSADA (4TA TABLA)
       
 function showCursoCursada(comisionId, tecnicaturaId, asignaturaId, cursoId) {
    
    
            // oculta tablas no relevantes
            let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision, .tabla_cursada, .tabla_curso');
            tablesToHide.forEach(table => table.style.display = 'none');

            // oculta cursos
            let cursadaTables = document.querySelectorAll('.tabla_curso');
            cursadaTables.forEach(table => table.style.display = 'none');

            // muestra tabla cursada específica
            let cursadaTable = document.getElementById(`tablaCursoCursada_\${comisionId}_\${asignaturaId}_\${cursoId}`);
            if (cursadaTable) {
                cursadaTable.style.display = '';
            }

            // ocultar search
            let search = document.getElementById('searchs');
            if (search) {
                search.style.display = 'none';
            }
          
        }

 function hideCursoCursada(comisionId, tecnicaturaId, asignaturaId, cursoId) {
            // oculta tabla cursada específica
            let cursadaTable = document.getElementById(`tablaCursoCursada_\${comisionId}_\${asignaturaId}_\${cursoId}`);
            if (cursadaTable) {
                cursadaTable.style.display = 'none';
            }

            // muestra la tabla curso específica
            let cursoTable = document.getElementById(`tablaCurso_\${comisionId}_\${asignaturaId}`);
            if (cursoTable) {
                cursoTable.style.display = '';
            }

        
        }

       

        
// OCULTAR TODAS LAS TABLAS
        

        function hideAllTables() {
            // Ocultar todas las tablas de Comisiones, Cursadas y Tecnicaturas
            let tables = document.querySelectorAll('.tabla_home, .tabla_comision, .tabla_cursada, .tabla_curso');
            tables.forEach(table => table.style.display = 'none');

            // Mostrar la tabla de tecnicaturas principal
            let tablaTecnicaturas = document.getElementById('tablaTecnicaturas');
            if (tablaTecnicaturas) {
                tablaTecnicaturas.style.display = '';
            }

            // Mostrar filtro de tecnicaturas
            let search = document.getElementById(`searchs`);
            if (search) {
                search.style.display = '';
            }

            // Ocultar el botón de regresar
            let backButton = document.getElementById(`backButton`);
            if (backButton) {
                backButton.style.display = 'none';
            }
        }

      

    </script>
   


    {#script para crear comisiones#}
    <script>
        function openModal1(tecnicaturaId) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('crear_comision', { 'tecnicatura_id': '__tecnicaturaId__' }) }}\"
                .replace('__tecnicaturaId__', tecnicaturaId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';


                    // Asignar valores y manipular campos
                    const anioInput = document.getElementById('comision_anio');
                    const comisionInput = document.getElementById('comision_comision');
                    const turnoInput = document.getElementById('comision_turno');
                    const tecnicaturaInput = document.getElementById('comision_tecnicatura');

                    // Ocultar label de tecnicatura
                    const labelTecnicatura = document.querySelector('label[for=\"comision_tecnicatura\"]');
                    if (labelTecnicatura) {
                        labelTecnicatura.style.display = 'none';
                    }

                    if (tecnicaturaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        tecnicaturaInput.value = tecnicaturaId;
                        tecnicaturaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        tecnicaturaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal1() {
            document.getElementById('Modal1').style.display = 'none';
            document.getElementById('modalBody-1').innerHTML = '';
        }
    </script>

    {#script para editar comisiones#}
    <script>
        function openModal11(comisionId, tecnicaturaId) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('editar_comision', { 'comision_id': '__comisionId__', 'tecnicatura_id': '__tecnicaturaId__' }) }}\"
                .replace('__comisionId__', comisionId)
                .replace('__tecnicaturaId__', tecnicaturaId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-11').innerHTML = html;
                    document.getElementById('Modal11').style.display = 'block';
                    // Asignar valores y manipular campos
                    const anioInput = document.getElementById('comision_anio');
                    const comisionInput = document.getElementById('comision_comision');
                    const turnoInput = document.getElementById('comision_turno');
                    const tecnicaturaInput = document.getElementById('comision_tecnicatura');

                    // Ocultar label de tecnicatura
                    const labelTecnicatura = document.querySelector('label[for=\"comision_tecnicatura\"]');
                    if (labelTecnicatura) {
                        labelTecnicatura.style.display = 'none';
                    }

                    if (tecnicaturaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        tecnicaturaInput.value = tecnicaturaId;
                        tecnicaturaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        tecnicaturaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    } 
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal11() {
            document.getElementById('Modal11').style.display = 'none';
            document.getElementById('modalBody-11').innerHTML = '';
        }
    </script>

     {# Script para crear horarios #}
<script>
function openModalHorario(cursoId) {
   const url = \"{{ path('app_vistascursada_horario_new', { 'curso_id': 'CURSO_ID' }) }}\".replace('CURSO_ID', cursoId);


    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al cargar el formulario: ' + response.statusText);
            }
            return response.text();
        })
        .then(html => {
            document.getElementById('modalBodyHorario').innerHTML = html;
            document.getElementById('ModalHorario').style.display = 'block';

            const cursoInput = document.getElementById('horario_curso');
            if (cursoInput) {
                cursoInput.value = cursoId;
                cursoInput.style.display = 'none';
                const label = document.querySelector('label[for=\"horario_curso\"]');
                if (label) label.style.display = 'none';
            }

            const form = document.getElementById('form-horario');
            if (form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    const formData = new FormData(form);
                    fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (response.ok) {
                            closeModalHorario();
                            location.reload();
                        } else {
                            return response.text().then(html => {
                                document.getElementById('modalBodyHorario').innerHTML = html;
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error al guardar el horario:', error);
                        alert('Hubo un error al guardar el horario.');
                    });
                });
            }
        })
        .catch(error => {
            console.error('Error al cargar el formulario de horario:', error);
            alert('No se pudo cargar el formulario de horario. Intenta nuevamente.');
        });
}

function closeModalHorario() {
    document.getElementById('ModalHorario').style.display = 'none';
    document.getElementById('modalBodyHorario').innerHTML = '';
}
</script>

{#Script para editar horarios#}
    <script>
function openModalEditHorario(horarioId) {
    const url = \"{{ path('app_vistascursada_horario_edit', {'horario_id': 'HORARIO_ID'}) }}\".replace('HORARIO_ID', horarioId);

    fetch(url)
    .then(response => {
        if (!response.ok) throw new Error('Error al cargar formulario');
        return response.text();
    })
    .then(html => {
        document.getElementById('modalBodyEditHorario').innerHTML = html;
        document.getElementById('ModalEditHorario').style.display = 'block';

        // Ocultar el campo curso si existe
        const cursoInput = document.getElementById('horario_curso');
        if (cursoInput) {
            cursoInput.style.display = 'none';
            const labelCurso = document.querySelector('label[for=\"horario_curso\"]');
            if(labelCurso) labelCurso.style.display = 'none';
        }

        // Agregar manejador al submit
        const form = document.querySelector('#modalBodyEditHorario form');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(form);
                fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (response.status === 204) {
                        closeModalEditHorario();
                        location.reload();
                    } else {
                        return response.text().then(html => {
                            document.getElementById('modalBodyEditHorario').innerHTML = html;
                        });
                    }
                })
                .catch(err => {
                    alert('Error al guardar horario');
                    console.error(err);
                });
            });
        }
    })
    .catch(error => {
        alert('No se pudo cargar el formulario de edición.');
        console.error(error);
    });
}

function closeModalEditHorario() {
    document.getElementById('ModalEditHorario').style.display = 'none';
    document.getElementById('modalBodyEditHorario').innerHTML = '';
}
</script>





    {#script para crear cursada docente#}
    <script>
        function openModal4(cursoId) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('crear_cursada_docente', { 'curso_id': '__cursoId__' }) }}\"
                .replace('__cursoId__', cursoId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-4').innerHTML = html;
                    document.getElementById('Modal4').style.display = 'block';
                    // Asignar valores y manipular campos
                    const tomaInput = document.getElementById('cursada_docente_toma');
                    const ceseInput = document.getElementById('cursada_docente_cese');
                    const docenteInput = document.getElementById('cursada_docente_docente');
                    const revistaInput = document.getElementById('cursada_docente_revista');
                    const licenciaInput = document.getElementById('cursada_docente_licencia');
                    const cursoInput = document.getElementById('cursada_docente_curso');

                    // Ocultar label de tecnicatura
                    const labelCurso = document.querySelector('label[for=\"cursada_docente_curso\"]');
                    if (labelCurso) {
                        labelCurso.style.display = 'none';
                    }

                    if (cursoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        cursoInput.value = cursoId;
                        cursoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        cursoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de cursada docente:', error));
        }
        function closeModal4() {
            document.getElementById('Modal4').style.display = 'none';
            document.getElementById('modalBody-4').innerHTML = '';
        }
    </script>

    {#script para editar cursada docente#}
    <script>
        function openModal41(cursoId, cursadaDocenteId) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('editar_cursada_docente', { 'curso_id': '__cursoId__', 'cursada_docente_id': '__cursadaDocenteId__' }) }}\"
                .replace('__cursoId__', cursoId)
                .replace('__cursadaDocenteId__', cursadaDocenteId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-41').innerHTML = html;
                    document.getElementById('Modal41').style.display = 'block';


                    // Asignar valores y manipular campos
                    const tomaInput = document.getElementById('cursada_docente_toma');
                    const ceseInput = document.getElementById('cursada_docente_cese');
                    const docenteInput = document.getElementById('cursada_docente_docente');
                    const revistaInput = document.getElementById('cursada_docente_revista');
                    const licenciaInput = document.getElementById('cursada_docente_licencia');
                    const cursoInput = document.getElementById('cursada_docente_curso');

                    // Ocultar label de tecnicatura
                    const labelDocente = document.querySelector('label[for=\"cursada_docente_docente\"]');
                    if (labelDocente) {
                        labelDocente.style.display = 'none';
                    }

                    if (docenteInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        docenteInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        docenteInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }

                    // Ocultar label de tecnicatura
                    const labelCurso = document.querySelector('label[for=\"cursada_docente_curso\"]');
                    if (labelCurso) {
                        labelCurso.style.display = 'none';
                    }

                    if (cursoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        cursoInput.value = cursoId;
                        cursoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        cursoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de cursada docente:', error));
        }
        function closeModal41() {
            document.getElementById('Modal41').style.display = 'none';
            document.getElementById('modalBody-41').innerHTML = '';
        }
    </script>

    {#Script para agregar curso#}
    <script>
        function openModal3(tecnicaturaId, comisionId, asignaturaId) {
            // Verificar si los IDs están correctos
            if (!tecnicaturaId || !comisionId) {
                console.error(\"IDs inválidos. Tecnicatura ID o Comisión ID está faltando.\");
                return;
            }
            // Generar la URL con los IDs correctos
            const url = \"{{ path('crear_curso', { 'tecnicatura_id': '__tecnicaturaId__', 'comision_id': '__comisionId__' }) }}\"
                .replace('__tecnicaturaId__', encodeURIComponent(tecnicaturaId))
                .replace('__comisionId__', encodeURIComponent(comisionId));
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-3').innerHTML = html;
                    document.getElementById('Modal3').style.display = 'block';


                    // Asignar valores y manipular campos
                    const cicloInput = document.getElementById('curso_ciclo_lectivo');
                    const horarioInput = document.getElementById('curso_horario');
                    const asignaturaInput = document.getElementById('curso_asignatura');
                    const comisionInput = document.getElementById('curso_comision');


                    
                    // Ocultar label de tecnicatura
                    const labelAsignatura = document.querySelector('label[for=\"curso_asignatura\"]');
                    if (labelAsignatura) {
                        labelAsignatura.style.display = 'none';
                    }

                    if (asignaturaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        asignaturaInput.value = asignaturaId;
                        asignaturaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        asignaturaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }

                    // Ocultar label de nota se generan las notas vacias
                    const labelComision = document.querySelector('label[for=\"curso_comision\"]');
                    if (labelComision) {
                        labelComision.style.display = 'none';
                    }

                    if (comisionInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        comisionInput.value = comisionId;
                        comisionInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        comisionInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }                  
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal3() {
            document.getElementById('Modal3').style.display = 'none';
            document.getElementById('modalBody-31').innerHTML = '';
        }
    </script>

    {#script para editar curso#}
    <script>
        function openModal31(cursoId, asignaturaId, comisionId) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('editar_curso', { 'curso_id': '__cursoId__'}) }}\"
                .replace('__cursoId__', cursoId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-31').innerHTML = html;
                    document.getElementById('Modal31').style.display = 'block';

                    // Asignar valores y manipular campos
                    const cicloInput = document.getElementById('curso_ciclo_lectivo');
                    const horarioInput = document.getElementById('curso_horario');
                    const asignaturaInput = document.getElementById('curso_asignatura');
                    const comisionInput = document.getElementById('curso_comision');                 
                    // Ocultar label de tecnicatura
                    const labelAsignatura = document.querySelector('label[for=\"curso_asignatura\"]');
                    if (labelAsignatura) {
                        labelAsignatura.style.display = 'none';
                    }

                    if (asignaturaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        asignaturaInput.value = asignaturaId;
                        asignaturaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        asignaturaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }

                    // Ocultar label de nota se generan las notas vacias
                    const labelComision = document.querySelector('label[for=\"curso_comision\"]');
                    if (labelComision) {
                        labelComision.style.display = 'none';
                    }

                    if (comisionInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        comisionInput.value = comisionId;
                        comisionInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        comisionInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal31() {
            document.getElementById('Modal31').style.display = 'none';
            document.getElementById('modalBody-31').innerHTML = '';
        }
    </script>

        {#script para editar cursada#}
    <script>
        function openModal21(cursadaId, cursoId) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('editar_cursada', { 'cursada_id': '__cursadaId__', 'curso_id': '__cursoId__'}) }}\"
                .replace('__cursadaId__', cursadaId)
                .replace('__cursoId__', cursoId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-21').innerHTML = html;
                    document.getElementById('Modal21').style.display = 'block';
                    // Asignar valores y manipular campos
                    const condicionInput = document.getElementById('cursada_condicion');                   
                    const alumnoInput = document.getElementById('cursada_alumno');
                    const modalidadInput = document.getElementById('cursada_modalidad');
                    const cursoInput = document.getElementById('cursada_curso');                  
                    const NOTAInput = document.getElementById('cursada_nota_id');          
                    // Ocultar label de alumno
                    const labelAlumno = document.querySelector('label[for=\"cursada_alumno\"]');
                    if (labelAlumno) {
                        labelAlumno.style.display = 'none';
                    }
                    if (alumnoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        
                        alumnoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        alumnoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    // Ocultar label de tecnicatura
                    const labelCurso = document.querySelector('label[for=\"cursada_curso\"]');
                    if (labelCurso) {
                        labelCurso.style.display = 'none';
                    }
                    if (cursoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input                       
                        cursoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        cursoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    // Ocultar label de nota se generan las notas vacias
                    const labelNOTA = document.querySelector('label[for=\"cursada_nota_id\"]');
                    if (labelNOTA) {
                        labelNOTA.style.display = 'none';
                    }
                    if (NOTAInput) {  //aqui evaluo la nota id de la posicion donde estoy y guardo en el input no lo necesita al crear cursada(nota empty) 
                        /*notaInput.value = '';  nada, ya que quiero guardar nota sin calificaciones se edita y agregan notas mas adelante*/
                        NOTAInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        NOTAInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal21() {
            document.getElementById('Modal21').style.display = 'none';
            document.getElementById('modalBody-21').innerHTML = '';
        }
    </script> 

  {# Script para agregar cursadas #}
<script>
function openModal2(tecnicaturaId, comisionId, cursoId, asignaturaNombre, comisionNombre, cupof) {
    if (!cursoId) {
        console.error(\"ID de curso faltante.\");
        return;
    }

    // Generar título al estilo del __toString() de Curso
    const titulo = `\${asignaturaNombre} - \${comisionNombre} [CUPOF: \${cupof}]`;
    const tituloElemento = document.getElementById('modalTitleCurso');
    if (tituloElemento) {
        tituloElemento.textContent = `Añadir estudiante a \${titulo}`;
    }

    // Generar la URL pasando solo el cursoId
    const url = \"{{ path('crear_cursada_directo', { 'curso_id': '__cursoId__' }) }}\"
        .replace('__cursoId__', encodeURIComponent(cursoId));

    // Realizar la solicitud fetch
    fetch(url)
        .then(response => response.text())
        .then(html => {
            document.getElementById('modalBody-2').innerHTML = html;
            document.getElementById('Modal2').style.display = 'block';

            \$('#cursada_alumno').select2({
    placeholder: 'Seleccionar alumno',
    allowClear: true,
    width: '60%',
    minimumResultsForSearch: 5, // oculta buscador si hay pocos elementos
    dropdownCssClass: 'select2-minimal-dropdown',
    containerCssClass: 'select2-minimal'
});


            // Asignar valores y manipular campos
            const condicionInput = document.getElementById('cursada_condicion');                   
            const alumnoInput = document.getElementById('cursada_alumno');
            const modalidadInput = document.getElementById('cursada_modalidad');
            const cursoInput = document.getElementById('cursada_curso');                  
            const notaInput = document.getElementById('cursada_nota_id');

            // Ocultar label de curso
            const labelCurso = document.querySelector('label[for=\"cursada_curso\"]');
            if (labelCurso) {
                labelCurso.style.display = 'none';
            }

            if (cursoInput) {
                cursoInput.value = cursoId;
                cursoInput.setAttribute('readonly', true);
                cursoInput.style.display = 'none';
            }

            // Ocultar label de nota
            const labelNota = document.querySelector('label[for=\"cursada_nota_id\"]');
            if (labelNota) {
                labelNota.style.display = 'none';
            }

            if (notaInput) {
                notaInput.setAttribute('readonly', true);
                notaInput.style.display = 'none';
            }
        })  
        .catch(error => console.error('Error al cargar el formulario de edición:', error));
}

function closeModal2() {
    document.getElementById('Modal2').style.display = 'none';
    document.getElementById('modalBody-2').innerHTML = '';
}
</script>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>


    



{% endblock %}


{% block body %}


    {% for label, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    <!-- Campo de búsqueda de ciclo lectivo -->
<form class=\"form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
    <div class=\"input-group\">
        <input id=\"ciclo-lectivo-input\" type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Ciclo Lectivo - Cohorte...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" value=\"\" maxlength=\"4\">
        <div class=\"input-group-append\">
            <button class=\"btn btn-primary\" type=\"button\" onclick=\"filtrarPorCicloLectivo()\">
                <i class=\"fas fa-search fa-sm\"></i>
            </button>
        </div>
    </div>
</form>


<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    console.log(\"DOM completamente cargado y parseado\");
    
    // Obtener el año actual
    const currentYear = new Date().getFullYear();
    console.log(\"Año actual:\", currentYear);

    // Establecer el valor del campo de ciclo lectivo con el año actual por defecto
    const inputCiclo = document.getElementById('ciclo-lectivo-input');
    console.log(\"Campo input encontrado:\", inputCiclo);

    if (inputCiclo) {
        inputCiclo.value = currentYear;
        console.log(\"Valor asignado al input:\", inputCiclo.value);

        // Solo permitir ingresar números y limitar a 4 dígitos
        inputCiclo.addEventListener('input', function() {
            // Eliminar cualquier carácter que no sea un número
            this.value = this.value.replace(/\\D/g, '');
            // Limitar la longitud a 4 caracteres
            if (this.value.length > 4) {
                this.value = this.value.slice(0, 4);
            }
            console.log(\"Valor actual del input:\", this.value);
        });
    } else {
        console.error(\"No se encontró el campo input ciclo lectivo.\");
    }

    // Función para filtrar por ciclo lectivo y redirigir
    window.filtrarPorCicloLectivo = function() {
        const cicloLectivo = inputCiclo.value;
        // Validar que el ciclo lectivo tenga 4 dígitos
        if (cicloLectivo.length === 4) {
            // Redirigir a la misma página con el ciclo lectivo como parámetro en la URL
            window.location.href = `{{ path('app_vistascursada') }}?cicloLectivo=\${cicloLectivo}`;
        } else {
            alert('Por favor, ingresa un ciclo lectivo válido de 4 dígitos.');
        }
    }
});

</script>


<script>
    
function toggleDropdownDocente(cursoId) {
  const dropdown = document.getElementById('dropdown-docentes-' + cursoId);
  if (!dropdown) return;

  // Cerrar otros dropdowns docentes
  document.querySelectorAll('.dropdown-docentes.show').forEach(menu => {
    if (menu !== dropdown) {
      menu.classList.remove('show');
      menu.style.display = 'none';
    }
  });
  // Cerrar dropdowns horarios para que no estén abiertos juntos
  document.querySelectorAll('.dropdown-horarios.show').forEach(menu => {
    menu.classList.remove('show');
    menu.style.display = 'none';
  });

  // Alternar el dropdown clickeado
  if (dropdown.classList.contains('show')) {
    dropdown.classList.remove('show');
    dropdown.style.display = 'none';
  } else {
    dropdown.classList.add('show');
    dropdown.style.display = 'block';
  }
}

function toggleDropdownHorario(cursoId) {
  const dropdown = document.getElementById('dropdown-horarios-' + cursoId);
  if (!dropdown) return;

  // Cerrar otros dropdowns horarios
  document.querySelectorAll('.dropdown-horarios.show').forEach(menu => {
    if (menu !== dropdown) {
      menu.classList.remove('show');
      menu.style.display = 'none';
    }
  });
  // Cerrar dropdowns docentes para que no estén abiertos juntos
  document.querySelectorAll('.dropdown-docentes.show').forEach(menu => {
    menu.classList.remove('show');
    menu.style.display = 'none';
  });

  // Alternar el dropdown clickeado
  if (dropdown.classList.contains('show')) {
    dropdown.classList.remove('show');
    dropdown.style.display = 'none';
  } else {
    dropdown.classList.add('show');
    dropdown.style.display = 'block';
  }
}

// Cerrar dropdowns si clic afuera
document.addEventListener('click', function(event) {
  if (!event.target.closest('.editar-container')) {
    document.querySelectorAll('.dropdown-horarios.show, .dropdown-docentes.show').forEach(menu => {
      menu.classList.remove('show');
      menu.style.display = 'none';
    });
  }
});


</script>


<script>
    
//FILTRO DE TECNICATURAS
function filterTableTecnicatura() {
    let searchNombre = document.getElementById(\"searchNombre\").value.toLowerCase();
    let searchReso = document.getElementById(\"searchResolucion\").value.toLowerCase();
    let table = document.getElementById(\"tablaTecnicaturas\");
    let rows = table.getElementsByTagName(\"tr\");

    for (let i = 1; i < rows.length; i++) {
        let cells = rows[i].getElementsByTagName(\"td\");

        if (cells.length < 2) continue; // Salta filas mal formadas

        let nombre = cells[0].textContent.toLowerCase();
        let resolucion = cells[1].textContent.toLowerCase();

        if (nombre.includes(searchNombre) && resolucion.includes(searchReso)) {
            rows[i].style.display = \"\";
        } else {
            rows[i].style.display = \"none\";
        }
    }
}
</script>






    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Comisiones, Cursadas y Curso del Cohorte {{ cicloLectivo }}</h1>

        <div id=\"searchs\" class=\"search-container\">
            <label for=\"searchNombre\">Buscar por Nombre:</label>
            <input type=\"text\" id=\"searchNombre\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por nombre...\">
            <label for=\"searchResolucion\">Buscar por Resolucion:</label>
            <input type=\"text\" id=\"searchResolucion\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por resolucion...\">
        </div>

<!-- TABLA DE TECNICATURAS PARA ACCEDER A COMISIONES -->

        <table class=\"tabla_home\" id=\"tablaTecnicaturas\" border=\"1\">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Número de Resolución</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {% for tecnicatura in tecnicaturas %}
                    <tr>
                        <td>{{ tecnicatura.nombre }}</td>
                        <td>{{ tecnicatura.numeroResolucion }}</td>
                        <td>
                            <button onclick=\"showComision({{ tecnicatura.id }})\" class=\"btn-primary\">Ir</button>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"3\">No se encontraron registros</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

<!-- FIN DE LA TABLA DE TECNICATURAS-->

<!-- TABLA DE COMISIONES -->

        {% for tecnicatura in tecnicaturas %}
            <table id=\"tablaComision_{{ tecnicatura.id }}\" class=\"tabla_comision\" style=\"display: none;\" border=\"1\">
    <thead>
        <tr>
                <th colspan=\"6\" style=\"text-align: center;\">
                    <button type=\"button\" onclick=\"showTecnicaturas()\" class=\"btn btn-secondary\">
                        Volver a Tecnicaturas
                    </button>
                </th>
            </tr>
        <tr>
            <th colspan=\"6\">{{ tecnicatura.nombre }} - Comisiones {{ cicloLectivo }}</th>
        </tr>
        <tr>
            <th>Año</th>
            <th>Comisión</th>
            <th>Estado</th>
            <th>Turno</th>
            <th colspan=\"2\">
                <button onclick=\"openModal1('{{ tecnicatura.id }}')\" class=\"btn-primary\">Crear Comisión</button>
            </th>
        </tr>
    </thead>
    <tbody>
        {# Filtrar comisiones que pertenezcan al cicloLectivo actual #}
        {% set comisionesFiltradas = tecnicatura.comision|filter(c => c.cicloLectivo == cicloLectivo) %}
        {% set comisionesOrdenadas = comisionesFiltradas|sort((a, b) => a.anio <=> b.anio) %}

        {% if comisionesOrdenadas is not empty %}
            {% for comision in comisionesOrdenadas %}
                <tr>
                    <td>{{ comision.anio }}</td>
                    <td>{{ comision.comision }}</td>
                    <td>{{ comision.estado ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ comision.turno }}</td>
                    <td>
                        <button onclick=\"showCursada({{ comision.id }}, {{ tecnicatura.id }})\" class=\"btn-primary\">Ir a Cursos</button>
                    </td>
                    <td>
                        <button onclick=\"openModal11({{ comision.id }}, {{ tecnicatura.id }})\">Editar</button>
                    </td>
                </tr>
            {% endfor %}
        {% else %}
            <tr>
                <td colspan=\"6\" style=\"text-align: center;\">No hay comisiones registradas para el ciclo {{ cicloLectivo }}</td>
            </tr>
            <tr>
                <td colspan=\"6\" style=\"text-align: center;\">
                    <button onclick=\"openModal1('{{ tecnicatura.id }}')\" class=\"btn-primary\">Crear Comisión</button>
                </td>
            </tr>
        {% endif %}
    </tbody>
</table>

        {% endfor %}   


<!-- FIN TABALA COMISIONES -->

<!-- DENTRO DE UNA COMISION DE LA TECNICATURA MUESTRA:
 TABLA DE CURSOS, CON SUS ASIGNATURAS, SUS CUPOF Y SUS HORARIOS. CURSADAxDOCENTE SE MUESTRA AQUI
 -->

 


        {% for comision in comisiones %}    
            <table id=\"tablaCursada_{{ comision.id }}\" class=\"tabla_cursada\" style=\"display: none;\" border=\"1\">
                <thead>
                        <tr>
                <th colspan=\"7\" style=\"text-align: center;\">
                    <button type=\"button\" 
                            onclick=\"showComision({{ comision.tecnicatura.id }})\" 
                            class=\"btn btn-secondary\">
                        Volver a Comisiones
                    </button>
                </th>
            </tr>
                    <tr>
                        <th colspan=\"3\">{{ comision.tecnicatura }} -Cursos-</th>
                        <th colspan=\"1\"> Año: {{ comision.anio }} Comisión: {{ comision.comision }}</th>
                    </tr>
                    <tr>
                        <th colspan=\"1\">Asignatura</th>
                         <th colspan=\"1\">Horario</th>
                         <th colspan=\"1\">Docente</th>
                        <th colspan=\"2\">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {% set asignaturas_encontradas = false %}
                    {% for asignatura in comision.tecnicatura.asignatura %}
                        {% if asignatura.anio == comision.anio %}
                            {% set asignaturas_encontradas = true %}
                            <tr>
                                <td colspan=\"1\">{{ asignatura.nombre }}</td>   
                               <td colspan=\"1\">&nbsp;</td>
                               <td colspan=\"1\">&nbsp;</td>

                                <td colspan=\"2\">
                                    <button onclick=\"openModal3('{{ comision.tecnicatura.id }}', '{{ comision.id }}', '{{ asignatura.id }}')\" class=\"btn-primary\">Agregar Curso</button>
                                </td>
                                <!--<td>
                                    <button onclick=\"showCurso('{{ comision.id }}', '{{ comision.tecnicatura.id }}', '{{ asignatura.id }}')\" class=\"btn-primary\">Ver Cursos</button>
                                </td>
                                -->                     
                            </tr>
                            
                          {% for curso in cursos %}
                                {% if curso.asignatura.id == asignatura.id and curso.comision.id == comision.id %}
                                    <tr>
                                        <td><strong>Cupof:</strong> {{ curso.cupof }}<br></td>

                                        {# Horarios #}
                                        <td colspan=\"1\">
                                            {% if curso.horarios|length > 0 %}
                                                <p><strong>Horarios asignados:</strong></p>
                                                <ul>
                                                    {% for horario in curso.horarios %}
                                                        <li>{{ horario.dia }}: {{ horario.horarioInicio }} - {{ horario.horarioFin }} ({{ horario.cantModulos }} módulo/s)</li>
                                                    {% endfor %}
                                                </ul>
                                            {% else %}
                                                <span>Sin horario asignado</span>
                                            {% endif %}
                                        </td>

                                        {# Docentes #}
                                        <td colspan=\"1\">
                                            {% if curso.cursadaDocentes|length > 0 %}
                                                <p><strong>Docente/s asignado/s:</strong></p>
                                                <ul>
                                                    {% for cursada in curso.cursadaDocentes %}
                                                        <li>
                                                            {{ cursada.docente.persona.apellido }}, {{ cursada.docente.persona.nombre }}
                                                            (Desde: {{ cursada.toma|date('d/m/Y') }})
                                                            {% if cursada.cese %} hasta {{ cursada.cese|date('d/m/Y') }}{% endif %}
                                                            {% if cursada.licencia %}
                                                                <span class=\"text-danger\">(En licencia)</span>
                                                            {% else %}
                                                                <span class=\"text-success\">(Activo)</span>
                                                            {% endif %}
                                                        </li>
                                                    {% endfor %}
                                                </ul>
                                            {% else %}
                                                <span>Sin docente asignado</span>
                                            {% endif %}
                                        </td>

                                        {# Columna de Acciones estilizada #}
                                        <td colspan=\"2\">
                                            <div style=\"display: flex; flex-direction: column; gap: 6px;\">
                                                <button onclick=\"showCursoCursada({{ comision.id }}, {{ comision.tecnicatura.id }}, {{ asignatura.id }}, {{ curso.id }})\" class=\"btn-primary\">Ver Curso</button>

                                                <button onclick=\"openModal31({{ curso.id }}, {{ curso.asignatura.id }}, {{ curso.comision.id }})\" class=\"btn-secondary\">
                                                    {% if curso.cupof %}
                                                        Editar Cupof
                                                    {% else %}
                                                        Editar
                                                    {% endif %}
                                                </button>

                                                <button onclick=\"openModal4({{ curso.id }})\" class=\"btn-primary\">Agregar Docente</button>
                                               <!--{% for cursada in curso.cursadaDocentes %}
    <button onclick=\"openModal41({{ curso.id }}, {{ cursada.id }})\" class=\"btn-secondary\">
        Editar Docente: {{ cursada.docente.persona.apellido }}, {{ cursada.docente.persona.nombre }}
    </button>
{% else %}
    <span>Sin docente para editar</span>
{% endfor %} --> 

                                           {# Contenedor para editar docentes #}
                                           
                                           <div class=\"editar-container\" style=\"position: relative; display: block; width: 100%;\">

                                                <button onclick=\"toggleDropdownDocente({{ curso.id }})\" class=\"btn-secondary\">
                                                    Editar docente
                                                </button>

                                                <div id=\"dropdown-docentes-{{ curso.id }}\" class=\"dropdown-docentes\" style=\"display: none;\">
                                                    {% for cursada in curso.cursadaDocentes %}
                                                    <button class=\"dropdown-item\" onclick=\"openModal41({{ curso.id }}, {{ cursada.id }})\">
                                                        {{ cursada.docente.persona.apellido }}, {{ cursada.docente.persona.nombre }}
                                                    </button>
                                                    {% else %}
                                                    <div class=\"dropdown-item disabled\">No hay docentes para editar</div>
                                                    {% endfor %}
                                                </div>
                                            </div>



                                                <button onclick=\"openModalHorario({{ curso.id }})\" class=\"btn-primary\">Agregar Horario</button>

                                           {# Contenedor para editar horarios #}
                                        
                                           <div class=\"editar-container\" style=\"position: relative; display: block; width: 100%;\">

                                            <button onclick=\"toggleDropdownHorario({{ curso.id }})\" class=\"btn-secondary\">
                                                Editar horario
                                            </button>

                                            <div id=\"dropdown-horarios-{{ curso.id }}\" class=\"dropdown-horarios\" style=\"display: none;\">
                                                {% for horario in curso.horarios %}
                                                <button class=\"dropdown-item\" onclick=\"openModalEditHorario({{ horario.id }})\">
                                                    {{ horario.dia }} - {{ horario.horarioInicio|date('H:i') }} a {{ horario.horarioFin|date('H:i') }}
                                                </button>
                                                {% else %}
                                                <div class=\"dropdown-item disabled\">No hay horarios para editar</div>
                                                {% endfor %}
                                            </div>
                                            </div>



                                            </div>
                                        </td>
                                    </tr>
                                {% endif %}
                            {% endfor %}



       
                           
                        {% endif %}
                    {% endfor %}
                    {% if not asignaturas_encontradas %}
                        <tr>
                            <td>No se encontraron registros</td>
                        </tr>
                    {% endif %}
                   
                    {# Botón de regreso #}
                     <!--<button id=\"backButton\" class:\"button\" onclick=\"showTable('tablaTecnicaturas')\" style=\"display: none;\">Regresar</button>
         --> 
                </tbody>
            </table>
        {% endfor %}

<!-- FIN DE TABLA CURSADA-->

<!-- TABLA QUE MUESTRA LOS ALUMNOS QUE HAY EN LA CURSADA (CUPOF) SUS NOTAS Y TODO -->


{% for curso in cursos %}
    <table id=\"tablaCursoCursada_{{ curso.comision.id }}_{{ curso.asignatura.id }}_{{ curso.id }}\" class=\"tabla_curso_cursada\" style=\"display: none;\" border=\"1\">
        <thead>
            {# Botón para volver a la tabla cursada (3ra) #}
            <tr>
                <th colspan=\"7\" style=\"text-align: center;\">
                    <button type=\"button\" 
                            onclick=\"showCursada({{ curso.comision.id }}, {{ curso.comision.tecnicatura.id }})\" 
                            class=\"btn btn-secondary\">
                        Volver a Cursadas
                    </button>
                </th>
            </tr>

            {# Fila 1: Tecnicatura y Comisión #}
            <tr>
                <th colspan=\"3\">{{ curso.comision.tecnicatura }}</th>
                <th colspan=\"4\">Comisión: {{ curso.comision.comision }} - Año: {{ curso.comision.anio }}</th>
            </tr>

            {# Fila 2: Asignatura, Cupof, Docente activo #}
            <tr>
                <th colspan=\"3\">Asignatura: {{ curso.asignatura.nombre }}</th>
                <th>Cupof: {{ curso.cupof ?? 'No definido' }}</th>
                <th colspan=\"3\">
                    Docente activo:
                    {% set docenteActivo = null %}
                    {% for cursada in curso.cursadaDocentes %}
                        {% if not cursada.licencia %}
                            {% set docenteActivo = cursada %}
                            {{ cursada.docente.persona.apellido }}, {{ cursada.docente.persona.nombre }} (Desde: {{ cursada.toma|date('d/m/Y') }})
                        {% endif %}
                    {% endfor %}
                    {% if not docenteActivo %}
                        <span class=\"text-danger\">Sin docente activo</span>
                    {% endif %}
                </th>
            </tr>

            {# Fila 3: Encabezados de cursada #}
            <tr>    
                <th>Alumno</th>
                <th>Primer Parcial</th>
                <th>Primer Recuperatorio</th>
                <th>Segundo Parcial</th>
                <th>Segundo Recuperatorio</th>
                <th>Condición</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            {% for cursada in curso.cursadas %}
                {% if cursada.curso.comision.cicloLectivo == curso.comision.cicloLectivo %}
                    <tr>
                        <td>{{ cursada.alumno }}</td>
                        <td>{{ cursada.getNotaId().parcial }}</td>
                        <td>{{ cursada.getNotaId().recuperatorio1 }}</td>
                        <td>{{ cursada.getNotaId().parcial2 }}</td>
                        <td>{{ cursada.getNotaId().recuperatorio2 }}</td>
                        <td>{{ cursada.condicion }}</td>
                        <td>
                            <button onclick=\"openModal21({{ cursada.id }}, {{ curso.id }})\">Editar</button>
                        </td>
                    </tr>
                     
                {% endif %}
            {% endfor %}
            <tr>
        <td colspan=\"7\" style=\"text-align: center;\">
           <button type=\"button\"
        onclick=\"openModal2(
            {{ curso.comision.tecnicatura.id }},
            {{ curso.comision.id }},
            {{ curso.id }},
            '{{ curso.asignatura.nombre|e('js') }}',
            '{{ curso.comision.comision|e('js') }}',
            '{{ curso.CUPOF|e('js') }}'
        )\"
        class=\"btn btn-secondary\">
    Agregar cursada
</button>

        </td>
    </tr>
        </tbody>
    </table>
{% endfor %}
}





        <!-- Modal1  para crear comisiones-->
        <div id=\"Modal1\" class=\"modal\" style=\"display: none;\"> 
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeModal1()\">&times;</span>
                <div id=\"modalBody-1\" class=\"submodal\"></div>
            </div>
        </div>

        <!-- Modal11  para editar comisiones-->
        <div id=\"Modal11\" class=\"modal\" style=\"display: none;\"> 
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeModal11()\">&times;</span>
                <div id=\"modalBody-11\" class=\"submodal\"></div>
            </div>
        </div>

        <!-- Modal2 para crear cursadas!!!-->
        <div id=\"Modal2\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <div id=\"modal-cursadas\">

            <!--  TÍTULO del modal (se llena dinámicamente) -->
           <h3 id=\"modalTitleCurso\" style=\"text-align: center; margin-top: 15px;\"></h3>

            <!--  Contenido dinámico + botón cerrar -->
            <div class=\"modal-content2\">
                <span class=\"close\" onclick=\"closeModal2()\">&times;</span>
                <div id=\"modalBody-2\" class=\"submodal\"></div>
            </div>

        </div>
    </div>
</div>

        <!-- Modal21 para editar cursada!!!-->
        <div id=\"Modal21\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content21\">
                    <span class=\"close\" onclick=\"closeModal21()\">&times;</span>
                    <div id=\"modalBody-21\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>

        <!-- Modal3  para crear cursos!!!!-->
        <div id=\"Modal3\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content3\">
                    <span class=\"close\" onclick=\"closeModal3()\">&times;</span>
                    <div id=\"modalBody-3\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>

        <!-- Modal31  para editar cursos!!!!-->
        <div id=\"Modal31\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content31\">
                    <span class=\"close\" onclick=\"closeModal31()\">&times;</span>
                    <div id=\"modalBody-31\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>

        <!-- Modal4  para crear cursada docente!!!!-->
        <div id=\"Modal4\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content4\">
                    <span class=\"close\" onclick=\"closeModal4()\">&times;</span>
                    <div id=\"modalBody-4\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>

        <!-- Modal41  para editar cursada docente!!!!-->
        <div id=\"Modal41\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content41\">
                    <span class=\"close\" onclick=\"closeModal41()\">&times;</span>
                    <div id=\"modalBody-41\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>
                    <!-- ModalHorario para cargar horarios -->
            <div id=\"ModalHorario\" class=\"modal\" style=\"display: none;\">
                <div class=\"modal-content\">
                    <div class=\"modal-content-horario\">
                        <span class=\"close\" onclick=\"closeModalHorario()\">&times;</span>
                        <div id=\"modalBodyHorario\" class=\"submodal\"></div>
                    </div>
                </div>    
            </div>
            <!-- Modal Editar Horario -->
            <div id=\"ModalEditHorario\" class=\"modal\" style=\"display:none;\">
                <div class=\"modal-content\">
                    <span class=\"close\" onclick=\"closeModalEditHorario()\">&times;</span>
                    <div id=\"modalBodyEditHorario\"class=\"submodal\">
                        <!-- Aquí se cargará el formulario AJAX -->
                    </div>
                </div>
            </div>




       

    </div>
{% endblock %}", "vistascursada/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistascursada\\index.html.twig");
    }
}
