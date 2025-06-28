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
class __TwigTemplate_2223bde763baf6856d6edcfa818ba091 extends Template
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

        $this->parent = $this->load("base.html.twig", 1);
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
        function filterTableTecnicatura() {
            let searchNombre = document.getElementById(\"searchNombre\").value.toLowerCase();
            let searchReso = document.getElementById(\"searchResolucion\").value.toLowerCase();
            let table = document.getElementById(\"tablaTecnicaturas\"); // Obtener la tabla de tecnicaturas
            let rows = table.getElementsByTagName(\"tr\");       
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                let nombre = cells[0].textContent.toLowerCase();
                let resolucion = cells[3].textContent.toLowerCase();
                if (nombre.includes(searchNombre) && resolucion.includes(searchReso)) {
                    rows[i].style.display = \"\"; 
                } else {
                    rows[i].style.display = \"none\"; 
                }
            }
        }

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
        // line 51
        if ((array_key_exists("comId", $context) &&  !(null === (isset($context["comId"]) || array_key_exists("comId", $context) ? $context["comId"] : (function () { throw new RuntimeError('Variable "comId" does not exist.', 51, $this->source); })())))) {
            // line 52
            yield "                // Llamar a showCursada con los IDs de cursada y tecnicatura
                showCursada(";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("comId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["comId"]) || array_key_exists("comId", $context) ? $context["comId"] : (function () { throw new RuntimeError('Variable "comId" does not exist.', 53, $this->source); })()), "null")) : ("null")), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("tecId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tecId"]) || array_key_exists("tecId", $context) ? $context["tecId"] : (function () { throw new RuntimeError('Variable "tecId" does not exist.', 53, $this->source); })()), "null")) : ("null")), "html", null, true);
            yield ");
            ";
        } elseif ((        // line 54
array_key_exists("tecId", $context) &&  !(null === (isset($context["tecId"]) || array_key_exists("tecId", $context) ? $context["tecId"] : (function () { throw new RuntimeError('Variable "tecId" does not exist.', 54, $this->source); })())))) {
            // line 55
            yield "                // Llamar a showComision con el ID de tecnicatura
                showComision(";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("tecId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tecId"]) || array_key_exists("tecId", $context) ? $context["tecId"] : (function () { throw new RuntimeError('Variable "tecId" does not exist.', 56, $this->source); })()), "null")) : ("null")), "html", null, true);
            yield ");
            ";
        } else {
            // line 58
            yield "            ";
        }
        // line 59
        yield "
            ";
        // line 60
        if ((array_key_exists("cursoId", $context) &&  !(null === (isset($context["cursoId"]) || array_key_exists("cursoId", $context) ? $context["cursoId"] : (function () { throw new RuntimeError('Variable "cursoId" does not exist.', 60, $this->source); })())))) {
            yield "    //Revisar el id que se pasa en showCurso, tal vez hacer una funcion especifica para mostrar tabla curso
                // Llamar a showCurso
                showCurso(";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cursoId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cursoId"]) || array_key_exists("cursoId", $context) ? $context["cursoId"] : (function () { throw new RuntimeError('Variable "cursoId" does not exist.', 62, $this->source); })()), "null")) : ("null")), "html", null, true);
            yield " );
            ";
        }
        // line 64
        yield "        });

        function showComision(tecnicaturaId) {
            // Ocultar todas las tablas de Comision
            let tables = document.querySelectorAll('.tabla_home');
            tables.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursadaTables = document.querySelectorAll('.tabla_cursada');
            cursadaTables.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursoTables = document.querySelectorAll('.tabla_curso');
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

        function showCursada(comisionId, tecnicaturaId) {
            // oculta tabla tecnicaturas
            let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision');
            tablesToHide.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursadaTables = document.querySelectorAll('.tabla_cursada');
            cursadaTables.forEach(table => table.style.display = 'none');

            // oculta curso
            let cursoTables = document.querySelectorAll('.tabla_curso');
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

            // muestra el boton de regresar, la funcion hide... recive id de comision y tecnicatura para poder regresar al punto anterior
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = '';
                backButton.onclick = function() {
                    hideCursada(comisionId, tecnicaturaId);
                };
            }
        }

        function showCurso(comisionId, tecnicaturaId, asignaturaId) {
            // Oculta todas las tablas de tecnicaturas, comisiones y cursadas
            let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision, .tabla_cursada');
            tablesToHide.forEach(table => table.style.display = 'none');

            
            // oculta cursadas
            let cursadaTables = document.querySelectorAll('.tabla_cursada');
            cursadaTables.forEach(table => table.style.display = 'none');

            // Muestra la tabla de cursos específica para la comisión y asignatura seleccionadas
            let cursoTable = document.getElementById(`tablaCurso_\${comisionId}_\${asignaturaId}`);
            if (cursoTable) {
                cursoTable.style.display = '';
            }

            // Oculta el buscador
            let search = document.getElementById('searchs');
            if (search) {
                search.style.display = 'none';
            }

            // Muestra el botón de regresar
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = '';
                backButton.onclick = function() {
                    hideCurso(comisionId, tecnicaturaId, asignaturaId);
                };
            }
        }

        function showCursoCursada2(comisionId, tecnicaturaId) {
            // oculta tabla tecnicaturas
            let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision, .tabla_cursada, .tabla_curso');
            tablesToHide.forEach(table => table.style.display = 'none');

            // oculta curso
            let cursadaTables = document.querySelectorAll('.tabla_curso');
            cursadaTables.forEach(table => table.style.display = 'none');

            // muestra tabla comision
            let cursadaTable = document.getElementById(`tablaCursoCursada_\${comisionId}`);
            if (cursadaTable) {
                cursadaTable.style.display = '';
            }

            // ocultar search
            let search = document.getElementById('searchs');
            if (search) {
                search.style.display = 'none';
            }

            // muestra el boton de regresar, la funcion hide... recive id de comision y tecnicatura para poder regresar al punto anterior
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = '';
                backButton.onclick = function() {
                    hideCursoCursada(comisionId, tecnicaturaId);
                };
            }
        }

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

            // muestra el botón de regresar, la función hide... recibe id de comision, tecnicatura y asignatura para poder regresar al punto anterior
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = '';
                backButton.onclick = function() {
                    hideCursoCursada(comisionId, tecnicaturaId, asignaturaId, cursoId);
                };
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

            // oculta el botón regresar-volver
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = 'none';
            }
        }


        // JavaScript to toggle visibility of the tables
        function showCursadaDocente(cursoId) {
            // Hide all tables first
            document.querySelectorAll('.tabla_curso, .tabla_cursada_docente').forEach(table => {
                table.style.display = 'none';
            });


            // Show the associated docente table
            document.getElementById(`tablaCursadaDocente_\${cursoId}`).style.display = 'table';
        }



        function hideCurso(comisionId, tecnicaturaId, asignaturaId) {
            // Oculta la tabla de curso específica
            let cursoTable = document.getElementById(`tablaCurso_\${comisionId}_\${asignaturaId}`);
            if (cursoTable) {
                cursoTable.style.display = 'none';
            }

            document.querySelectorAll('.tabla_curso, .tabla_cursada_docente').forEach(table => {
                table.style.display = 'none';
            });

            // Muestra la tabla de cursada (comisión) correspondiente
            let comisionTable = document.getElementById(`tablaCursada_\${comisionId}`);
            if (comisionTable) {
                comisionTable.style.display = '';
            }

            // Oculta el botón de regresar
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = 'none';
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

            // oculta el boton regresar-volver
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = 'none';
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

            // Ocultar el botón de regresar
            let backButton = document.getElementById(`backButton`);
            if (backButton) {
                backButton.style.display = 'none';
            }
        }

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
        // line 355
        yield "    <script>
        function openModal1(tecnicaturaId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 358
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
        // line 396
        yield "    <script>
        function openModal11(comisionId, tecnicaturaId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 399
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
        // line 435
        yield "<script>
function openModalHorario(cursoId) {
    // Construye la URL dinámicamente pasando el cursoId
    const url = \"";
        // line 438
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_horario_new", ["curso_id" => "CURSO_ID"]);
        yield "\".replace('CURSO_ID', cursoId);

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al cargar el formulario: ' + response.statusText);
            }
            return response.text();
        })
        .then(html => {
            // Inserta el contenido del formulario dentro del modal
            document.getElementById('modalBodyHorario').innerHTML = html;
            // Muestra el modal
            document.getElementById('ModalHorario').style.display = 'block';

            // Opcional: oculta campo y label 'curso' si existen en el formulario
            const labelCurso = document.querySelector('label[for=\"horario_curso\"]');
            if (labelCurso) labelCurso.style.display = 'none';

            const cursoInput = document.getElementById('horario_curso');
            if (cursoInput) {
                cursoInput.value = cursoId;
                cursoInput.style.display = 'none';
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
        // line 481
        yield "    <script>
        function openModal4(cursoId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 484
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
        // line 522
        yield "    <script>
        function openModal41(cursoId, cursadaDocenteId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 525
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
        // line 577
        yield "    <script>
        function openModal3(tecnicaturaId, comisionId, asignaturaId) {
            // Verificar si los IDs están correctos
            if (!tecnicaturaId || !comisionId) {
                console.error(\"IDs inválidos. Tecnicatura ID o Comisión ID está faltando.\");
                return;
            }
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 585
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
        // line 637
        yield "    <script>
        function openModal31(cursoId, asignaturaId, comisionId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 640
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
        // line 687
        yield "    <script>
        function openModal21(cursadaId, cursoId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 690
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
        // line 744
        yield "    <script>
        function openModal2(tecnicaturaId, comisionId, cursoId) {
            // Verificar si los IDs están correctos
            if (!tecnicaturaId || !comisionId) {
                console.error(\"IDs inválidos. Tecnicatura ID o Comisión ID está faltando.\");
                return;
            }
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 752
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_cursada", ["tecnicatura_id" => "__tecnicaturaId__", "comision_id" => "__comisionId__"]), "html", null, true);
        yield "\"
                .replace('__tecnicaturaId__', encodeURIComponent(tecnicaturaId))
                .replace('__comisionId__', encodeURIComponent(comisionId));
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-2').innerHTML = html;
                    document.getElementById('Modal2').style.display = 'block';


                    // Asignar valores y manipular campos

                    const condicionInput = document.getElementById('cursada_condicion');                   
                    const alumnoInput = document.getElementById('cursada_alumno');
                    const modalidadInput = document.getElementById('cursada_modalidad');
                    const cursoInput = document.getElementById('cursada_curso');                  
                    const notaInput = document.getElementById('cursada_nota_id');

                    
                    // Ocultar label de tecnicatura
                    const labelCurso = document.querySelector('label[for=\"cursada_curso\"]');
                    if (labelCurso) {
                        labelCurso.style.display = 'none';
                    }

                    if (cursoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        cursoInput.value = cursoId;
                        cursoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        cursoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }

                    // Ocultar label de nota se generan las notas vacias
                    const labelNota = document.querySelector('label[for=\"cursada_nota_id\"]');
                    if (labelNota) {
                        labelNota.style.display = 'none';
                    }

                    if (notaInput) {  //aqui evaluo la nota id de la posicion donde estoy y guardo en el input no lo necesita al crear cursada(nota empty) 
                        /*notaInput.value = '';  nada, ya que quiero guardar nota sin calificaciones se edita y agregan notas mas adelante*/
                        notaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        notaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal2() {
            document.getElementById('Modal2').style.display = 'none';
            document.getElementById('modalBody-2').innerHTML = '';
        }
        function filterAsignaturas(anio, tecnicaturaId) {
            let dropdown = document.getElementById(\"cursada_asignatura\");
            let options = dropdown.getElementsByTagName(\"option\");

            for (let i = 0; i < options.length; i++) {
                let optionText = options[i].textContent;

                // Extraer el año y el tecnicaturaId del texto de la opción
                let match = optionText.match(/\\((\\d+)\\)\\s+(\\d+)\$/);

                if (match) {
                    let optionAnio = match[1]; // Año dentro del paréntesis
                    let optionTecId = match[2]; // tecnicaturaId después del paréntesis

                    if (optionAnio === anio.toString() && optionTecId === tecnicaturaId.toString()) {
                        options[i].style.display = \"\";  // Mostrar la opción si coincide
                    } else {
                        options[i].style.display = \"none\";  // Ocultar la opción si no coincide
                    }

                    // Ocultar visualmente la parte del texto que está entre paréntesis
                    let visibleText = optionText.split('(')[0];
                    options[i].textContent = visibleText.trim();
                } else {
                    options[i].style.display = \"none\";  // Ocultar la opción si no hay coincidencia
                }
            }
        }

        function filterEstudiante() {
            let searchNombre = document.getElementById(\"searchEstudiante\").value.toLowerCase();
            let dropdown = document.getElementById(\"cursada_alumno\"); 
            let options = dropdown.getElementsByTagName(\"option\");
            
            for (let i = 0; i < options.length; i++) {
                let optionText = options[i].textContent.toLowerCase();
                if (optionText.includes(searchNombre)) {
                    options[i].style.display = \"\"; 
                } else {
                    options[i].style.display = \"none\"; 
                }
            }
        }
    </script>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 853
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

        // line 854
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 854, $this->source); })()), "session", [], "any", false, false, false, 854), "flashbag", [], "any", false, false, false, 854), "all", [], "method", false, false, false, 854));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 855
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 856
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                ";
                // line 857
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 860
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 861
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
        // line 911
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistascursada");
        yield "?cicloLectivo=\${cicloLectivo}`;
        } else {
            alert('Por favor, ingresa un ciclo lectivo válido de 4 dígitos.');
        }
    }
});
</script>

    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Comisiones, Cursadas y Curso del Cohorte ";
        // line 920
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cicloLectivo"]) || array_key_exists("cicloLectivo", $context) ? $context["cicloLectivo"] : (function () { throw new RuntimeError('Variable "cicloLectivo" does not exist.', 920, $this->source); })()), "html", null, true);
        yield "</h1>

        <div id=\"searchs\" class=\"search-container\">
            <label for=\"searchNombre\">Buscar por Nombre:</label>
            <input type=\"text\" id=\"searchNombre\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por nombre...\">
            <label for=\"searchResolucion\">Buscar por Resolucion:</label>
            <input type=\"text\" id=\"searchResolucion\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por resolucion...\">
        </div>

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
        // line 938
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tecnicaturas"]) || array_key_exists("tecnicaturas", $context) ? $context["tecnicaturas"] : (function () { throw new RuntimeError('Variable "tecnicaturas" does not exist.', 938, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tecnicatura"]) {
            // line 939
            yield "                    <tr>
                        <td>";
            // line 940
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "nombre", [], "any", false, false, false, 940), "html", null, true);
            yield "</td>
                        <td>";
            // line 941
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "numeroResolucion", [], "any", false, false, false, 941), "html", null, true);
            yield "</td>
                        <td>
                            <button onclick=\"showComision(";
            // line 943
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 943), "html", null, true);
            yield ")\" class=\"btn-primary\">Ir</button>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 946
        if (!$context['_iterated']) {
            // line 947
            yield "                    <tr>
                        <td colspan=\"3\">No se encontraron registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tecnicatura'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 951
        yield "            </tbody>
        </table>

        ";
        // line 954
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tecnicaturas"]) || array_key_exists("tecnicaturas", $context) ? $context["tecnicaturas"] : (function () { throw new RuntimeError('Variable "tecnicaturas" does not exist.', 954, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tecnicatura"]) {
            // line 955
            yield "            <table id=\"tablaComision_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 955), "html", null, true);
            yield "\" class=\"tabla_comision\" style=\"display: none;\" border=\"1\">
    <thead>
        <tr>
            <th colspan=\"6\">";
            // line 958
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "nombre", [], "any", false, false, false, 958), "html", null, true);
            yield " - Comisiones ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cicloLectivo"]) || array_key_exists("cicloLectivo", $context) ? $context["cicloLectivo"] : (function () { throw new RuntimeError('Variable "cicloLectivo" does not exist.', 958, $this->source); })()), "html", null, true);
            yield "</th>
        </tr>
        <tr>
            <th>Año</th>
            <th>Comisión</th>
            <th>Estado</th>
            <th>Turno</th>
            <th colspan=\"2\">
                <button onclick=\"openModal1('";
            // line 966
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 966), "html", null, true);
            yield "')\" class=\"btn-primary\">Crear Comisión</button>
            </th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 972
            yield "        ";
            $context["comisionesFiltradas"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "comision", [], "any", false, false, false, 972), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 972, $this->source); })()), "cicloLectivo", [], "any", false, false, false, 972) == (isset($context["cicloLectivo"]) || array_key_exists("cicloLectivo", $context) ? $context["cicloLectivo"] : (function () { throw new RuntimeError('Variable "cicloLectivo" does not exist.', 972, $this->source); })())); });
            // line 973
            yield "        ";
            $context["comisionesOrdenadas"] = Twig\Extension\CoreExtension::sort($this->env, (isset($context["comisionesFiltradas"]) || array_key_exists("comisionesFiltradas", $context) ? $context["comisionesFiltradas"] : (function () { throw new RuntimeError('Variable "comisionesFiltradas" does not exist.', 973, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 973, $this->source); })()), "anio", [], "any", false, false, false, 973) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 973, $this->source); })()), "anio", [], "any", false, false, false, 973)); });
            // line 974
            yield "
        ";
            // line 975
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["comisionesOrdenadas"]) || array_key_exists("comisionesOrdenadas", $context) ? $context["comisionesOrdenadas"] : (function () { throw new RuntimeError('Variable "comisionesOrdenadas" does not exist.', 975, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 976
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comisionesOrdenadas"]) || array_key_exists("comisionesOrdenadas", $context) ? $context["comisionesOrdenadas"] : (function () { throw new RuntimeError('Variable "comisionesOrdenadas" does not exist.', 976, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
                    // line 977
                    yield "                <tr>
                    <td>";
                    // line 978
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "anio", [], "any", false, false, false, 978), "html", null, true);
                    yield "</td>
                    <td>";
                    // line 979
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "comision", [], "any", false, false, false, 979), "html", null, true);
                    yield "</td>
                    <td>";
                    // line 980
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "estado", [], "any", false, false, false, 980)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Activo") : ("Inactivo"));
                    yield "</td>
                    <td>";
                    // line 981
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "turno", [], "any", false, false, false, 981), "html", null, true);
                    yield "</td>
                    <td>
                        <button onclick=\"showCursada(";
                    // line 983
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 983), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 983), "html", null, true);
                    yield ")\" class=\"btn-primary\">Ir a Cursos</button>
                    </td>
                    <td>
                        <button onclick=\"openModal11(";
                    // line 986
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 986), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 986), "html", null, true);
                    yield ")\">Editar</button>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comision'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 990
                yield "        ";
            } else {
                // line 991
                yield "            <tr>
                <td colspan=\"6\" style=\"text-align: center;\">No hay comisiones registradas para el ciclo ";
                // line 992
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cicloLectivo"]) || array_key_exists("cicloLectivo", $context) ? $context["cicloLectivo"] : (function () { throw new RuntimeError('Variable "cicloLectivo" does not exist.', 992, $this->source); })()), "html", null, true);
                yield "</td>
            </tr>
            <tr>
                <td colspan=\"6\" style=\"text-align: center;\">
                    <button onclick=\"openModal1('";
                // line 996
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 996), "html", null, true);
                yield "')\" class=\"btn-primary\">Crear Comisión</button>
                </td>
            </tr>
        ";
            }
            // line 1000
            yield "    </tbody>
</table>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tecnicatura'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1003
        yield "   

 

        ";
        // line 1007
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comisiones"]) || array_key_exists("comisiones", $context) ? $context["comisiones"] : (function () { throw new RuntimeError('Variable "comisiones" does not exist.', 1007, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comision"]) {
            yield "    
            <table id=\"tablaCursada_";
            // line 1008
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1008), "html", null, true);
            yield "\" class=\"tabla_cursada\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"2\">";
            // line 1011
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "tecnicatura", [], "any", false, false, false, 1011), "html", null, true);
            yield " -Cursos-</th>
                        <th colspan=\"3\"> Año: ";
            // line 1012
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "anio", [], "any", false, false, false, 1012), "html", null, true);
            yield " Comisión: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "comision", [], "any", false, false, false, 1012), "html", null, true);
            yield "</th>
                    </tr>
                    <tr>
                        <th colspan=\"1\">Asignatura</th>
                         <th colspan=\"1\">Horario</th>
                         <th colspan=\"1\">Docente</th>
                        <th colspan=\"1\">Cursos</th>
                        <th colspan=\"1\">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 1023
            $context["asignaturas_encontradas"] = false;
            // line 1024
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "tecnicatura", [], "any", false, false, false, 1024), "asignatura", [], "any", false, false, false, 1024));
            foreach ($context['_seq'] as $context["_key"] => $context["asignatura"]) {
                // line 1025
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "anio", [], "any", false, false, false, 1025) == CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "anio", [], "any", false, false, false, 1025))) {
                    // line 1026
                    yield "                            ";
                    $context["asignaturas_encontradas"] = true;
                    // line 1027
                    yield "                            <tr>
                                <td colspan=\"1\">";
                    // line 1028
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "nombre", [], "any", false, false, false, 1028), "html", null, true);
                    yield "</td>   
                               <td colspan=\"1\">&nbsp;</td>
                               <td colspan=\"1\">&nbsp;</td>

                                <td>
                                    <button onclick=\"openModal3('";
                    // line 1033
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "tecnicatura", [], "any", false, false, false, 1033), "id", [], "any", false, false, false, 1033), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1033), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "id", [], "any", false, false, false, 1033), "html", null, true);
                    yield "')\" class=\"btn-primary\">Agregar Curso</button>
                                </td>
                                <td>
                                    <button onclick=\"showCurso('";
                    // line 1036
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1036), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "tecnicatura", [], "any", false, false, false, 1036), "id", [], "any", false, false, false, 1036), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "id", [], "any", false, false, false, 1036), "html", null, true);
                    yield "')\" class=\"btn-primary\">Ver Cursos</button>
                                </td>                   
                            </tr>
                            
                          ";
                    // line 1040
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 1040, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
                        // line 1041
                        yield "                                ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1041), "id", [], "any", false, false, false, 1041) == CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "id", [], "any", false, false, false, 1041)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1041), "id", [], "any", false, false, false, 1041) == CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1041)))) {
                            // line 1042
                            yield "                                    <tr>
                                        <td><strong>Cupof:</strong> ";
                            // line 1043
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cupof", [], "any", false, false, false, 1043), "html", null, true);
                            yield "<br></td>

                                        ";
                            // line 1046
                            yield "                                        <td colspan=\"1\">
                                            ";
                            // line 1047
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "horarios", [], "any", false, false, false, 1047)) > 0)) {
                                // line 1048
                                yield "                                                <p><strong>Horarios asignados:</strong></p>
                                                <ul>
                                                    ";
                                // line 1050
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "horarios", [], "any", false, false, false, 1050));
                                foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                                    // line 1051
                                    yield "                                                        <li>";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "dia", [], "any", false, false, false, 1051), "html", null, true);
                                    yield ": ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "horarioInicio", [], "any", false, false, false, 1051), "html", null, true);
                                    yield " - ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "horarioFin", [], "any", false, false, false, 1051), "html", null, true);
                                    yield " (";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["horario"], "cantModulos", [], "any", false, false, false, 1051), "html", null, true);
                                    yield " módulo/s)</li>
                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['horario'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1053
                                yield "                                                </ul>
                                            ";
                            } else {
                                // line 1055
                                yield "                                                <span>Sin horario asignado</span>
                                            ";
                            }
                            // line 1057
                            yield "                                        </td>

                                        ";
                            // line 1060
                            yield "                                        <td colspan=\"1\">
                                            ";
                            // line 1061
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadaDocentes", [], "any", false, false, false, 1061)) > 0)) {
                                // line 1062
                                yield "                                                <p><strong>Docente/s asignado/s:</strong></p>
                                                <ul>
                                                    ";
                                // line 1064
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadaDocentes", [], "any", false, false, false, 1064));
                                foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                                    // line 1065
                                    yield "                                                        <li>
                                                            ";
                                    // line 1066
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "docente", [], "any", false, false, false, 1066), "persona", [], "any", false, false, false, 1066), "apellido", [], "any", false, false, false, 1066), "html", null, true);
                                    yield ", ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "docente", [], "any", false, false, false, 1066), "persona", [], "any", false, false, false, 1066), "nombre", [], "any", false, false, false, 1066), "html", null, true);
                                    yield "
                                                            (Desde: ";
                                    // line 1067
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "toma", [], "any", false, false, false, 1067), "d/m/Y"), "html", null, true);
                                    yield ")
                                                            ";
                                    // line 1068
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "cese", [], "any", false, false, false, 1068)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        yield " hasta ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "cese", [], "any", false, false, false, 1068), "d/m/Y"), "html", null, true);
                                    }
                                    // line 1069
                                    yield "                                                            ";
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "licencia", [], "any", false, false, false, 1069)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 1070
                                        yield "                                                                <span class=\"text-danger\">(En licencia)</span>
                                                            ";
                                    } else {
                                        // line 1072
                                        yield "                                                                <span class=\"text-success\">(Activo)</span>
                                                            ";
                                    }
                                    // line 1074
                                    yield "                                                        </li>
                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 1076
                                yield "                                                </ul>
                                            ";
                            } else {
                                // line 1078
                                yield "                                                <span>Sin docente asignado</span>
                                            ";
                            }
                            // line 1080
                            yield "                                        </td>

                                        ";
                            // line 1083
                            yield "                                        <td colspan=\"2\">
                                            <div style=\"display: flex; flex-direction: column; gap: 6px;\">
                                                <button onclick=\"showCursoCursada(";
                            // line 1085
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "id", [], "any", false, false, false, 1085), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comision"], "tecnicatura", [], "any", false, false, false, 1085), "id", [], "any", false, false, false, 1085), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "id", [], "any", false, false, false, 1085), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1085), "html", null, true);
                            yield ")\" class=\"btn-primary\">Ver Curso</button>

                                                <button onclick=\"openModal31(";
                            // line 1087
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1087), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1087), "id", [], "any", false, false, false, 1087), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1087), "id", [], "any", false, false, false, 1087), "html", null, true);
                            yield ")\" class=\"btn-secondary\">
                                                    ";
                            // line 1088
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cupof", [], "any", false, false, false, 1088)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 1089
                                yield "                                                        Editar Cupof
                                                    ";
                            } else {
                                // line 1091
                                yield "                                                        Editar
                                                    ";
                            }
                            // line 1093
                            yield "                                                </button>

                                                <button onclick=\"openModal4(";
                            // line 1095
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1095), "html", null, true);
                            yield ")\" class=\"btn-primary\">Agregar Docente</button>

                                                ";
                            // line 1097
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadaDocentes", [], "any", false, false, false, 1097));
                            foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                                // line 1098
                                yield "                                                    <button onclick=\"openModal41(";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1098), "html", null, true);
                                yield ", ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "id", [], "any", false, false, false, 1098), "html", null, true);
                                yield ")\" class=\"btn-secondary\">Editar Docente</button>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 1100
                            yield "
                                                <button onclick=\"openModalHorario(";
                            // line 1101
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1101), "html", null, true);
                            yield ")\" class=\"btn-primary\">Agregar Horario</button>

                                                ";
                            // line 1103
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "horarios", [], "any", false, false, false, 1103)) > 0)) {
                                // line 1104
                                yield "                                                    <button onclick=\"openModalHorario(";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1104), "html", null, true);
                                yield ")\" class=\"btn-secondary\">Editar Horario</button>
                                                ";
                            }
                            // line 1106
                            yield "                                            </div>
                                        </td>
                                    </tr>
                                ";
                        }
                        // line 1110
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['curso'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1111
                    yield "


       
                           
                        ";
                }
                // line 1117
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['asignatura'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1118
            yield "                    ";
            if ((($tmp =  !(isset($context["asignaturas_encontradas"]) || array_key_exists("asignaturas_encontradas", $context) ? $context["asignaturas_encontradas"] : (function () { throw new RuntimeError('Variable "asignaturas_encontradas" does not exist.', 1118, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1119
                yield "                        <tr>
                            <td>No se encontraron registros</td>
                        </tr>
                    ";
            }
            // line 1123
            yield "                   
                    ";
            // line 1125
            yield "                      <button id=\"backButton\" class:\"button\" onclick=\"showTable('tablaTecnicaturas')\" style=\"display: none;\">Regresar</button>
        
                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comision'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1130
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 1130, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 1131
            yield "            <table id=\"tablaCurso_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1131), "id", [], "any", false, false, false, 1131), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1131), "id", [], "any", false, false, false, 1131), "html", null, true);
            yield "\" class=\"tabla_curso\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"3\">";
            // line 1134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1134), "tecnicatura", [], "any", false, false, false, 1134), "html", null, true);
            yield " -Cursos para cursadas-</th>
                        <th colspan=\"1\"> Año: ";
            // line 1135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1135), "anio", [], "any", false, false, false, 1135), "html", null, true);
            yield " Comision: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1135), "comision", [], "any", false, false, false, 1135), "html", null, true);
            yield "</th>
                    </tr>
                    <tr>
                        <th colspan=\"1\">Asignatura</th>
                        <th colspan=\"2\">Cursos</th>
                        <th colspan=\"1\">Docentes</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 1144
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 1144, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["curso_interno"]) {
                // line 1145
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "comision", [], "any", false, false, false, 1145), "id", [], "any", false, false, false, 1145) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1145), "id", [], "any", false, false, false, 1145)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "asignatura", [], "any", false, false, false, 1145), "id", [], "any", false, false, false, 1145) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1145), "id", [], "any", false, false, false, 1145)))) {
                    // line 1146
                    yield "                            <tr>
                                <td>";
                    // line 1147
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "asignatura", [], "any", false, false, false, 1147), "nombre", [], "any", false, false, false, 1147), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 1148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "comision", [], "any", false, false, false, 1148), "ciclolectivo", [], "any", false, false, false, 1148), "html", null, true);
                    yield " ---> <button onclick=\"showCursoCursada(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "comision", [], "any", false, false, false, 1148), "id", [], "any", false, false, false, 1148), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "comision", [], "any", false, false, false, 1148), "tecnicatura", [], "any", false, false, false, 1148), "id", [], "any", false, false, false, 1148), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "asignatura", [], "any", false, false, false, 1148), "id", [], "any", false, false, false, 1148), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "id", [], "any", false, false, false, 1148), "html", null, true);
                    yield ")\" class=\"btn-primary\">Ver</button>
                                </td>
                                <td>    
                                    <button onclick=\"openModal31(";
                    // line 1151
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "id", [], "any", false, false, false, 1151), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "asignatura", [], "any", false, false, false, 1151), "id", [], "any", false, false, false, 1151), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "comision", [], "any", false, false, false, 1151), "id", [], "any", false, false, false, 1151), "html", null, true);
                    yield ")\" >Editar</button>
                                </td>
                                <td>
                                    <button onclick=\"openModal4(";
                    // line 1154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "id", [], "any", false, false, false, 1154), "html", null, true);
                    yield ")\" class=\"btn-primary\" >Asignar Docente/s</button>
                                    <button onclick=\"showCursadaDocente(";
                    // line 1155
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso_interno"], "id", [], "any", false, false, false, 1155), "html", null, true);
                    yield ")\" class=\"btn-primary\">Ver Docente/s</button>
                                </td>
                            </tr>
                        ";
                }
                // line 1159
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['curso_interno'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1160
            yield "                </tbody>
            </table>

            ";
            // line 1164
            yield "            <table id=\"tablaCursadaDocente_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1164), "html", null, true);
            yield "\" class=\"tabla_cursada_docente\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"3\">";
            // line 1167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1167), "tecnicatura", [], "any", false, false, false, 1167), "html", null, true);
            yield " -Docentes del Curso-</th>
                        <th colspan=\"1\"> Año: ";
            // line 1168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1168), "anio", [], "any", false, false, false, 1168), "html", null, true);
            yield " Comisión: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1168), "comision", [], "any", false, false, false, 1168), "html", null, true);
            yield "</th>
                    </tr>
                    <tr>
                        <th colspan=\"2\">Docente/s de ";
            // line 1171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1171), "nombre", [], "any", false, false, false, 1171), "html", null, true);
            yield "</th>
                        <th colspan=\"1\">Licencia</th>
                        <th colspan=\"1\">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 1177
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursada_docentes"]) || array_key_exists("cursada_docentes", $context) ? $context["cursada_docentes"] : (function () { throw new RuntimeError('Variable "cursada_docentes" does not exist.', 1177, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cursadaDocente"]) {
                // line 1178
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursadaDocente"], "curso", [], "any", false, false, false, 1178), "id", [], "any", false, false, false, 1178) == CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1178))) {
                    // line 1179
                    yield "                            <tr>
                                <td colspan=\"2\">";
                    // line 1180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursadaDocente"], "docente", [], "any", false, false, false, 1180), "html", null, true);
                    yield "</td>
                                <td colspan=\"1\">";
                    // line 1181
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cursadaDocente"], "licencia", [], "any", false, false, false, 1181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Sí") : ("No"));
                    yield "</td>
                                <td colspan=\"1\">
                                    <button onclick=\"openModal41(";
                    // line 1183
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursadaDocente"], "curso", [], "any", false, false, false, 1183), "id", [], "any", false, false, false, 1183), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursadaDocente"], "id", [], "any", false, false, false, 1183), "html", null, true);
                    yield ")\" >Editar</button>
                                </td>
                            </tr>

                        ";
                }
                // line 1188
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cursadaDocente'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1189
            yield "                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['curso'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1192
        yield "



        ";
        // line 1196
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 1196, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 1197
            yield "            <table id=\"tablaCursoCursada_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1197), "id", [], "any", false, false, false, 1197), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1197), "id", [], "any", false, false, false, 1197), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1197), "html", null, true);
            yield "\" class=\"tabla_curso_cursada\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"2\">";
            // line 1200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1200), "tecnicatura", [], "any", false, false, false, 1200), "html", null, true);
            yield " -Cursadas de Curso-</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th colspan=\"1\"> Año: ";
            // line 1205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1205), "anio", [], "any", false, false, false, 1205), "html", null, true);
            yield " Comisión: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1205), "comision", [], "any", false, false, false, 1205), "html", null, true);
            yield "</th>
                    </tr>
                    <tr>
                        <th>Asignatura :</th>
                        <th> ";
            // line 1209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 1209), "nombre", [], "any", false, false, false, 1209), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1209), "cicloLectivo", [], "any", false, false, false, 1209), "html", null, true);
            yield "</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th colspan=\"1\"><button onclick=\"openModal2('";
            // line 1214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1214), "tecnicatura", [], "any", false, false, false, 1214), "id", [], "any", false, false, false, 1214), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1214), "id", [], "any", false, false, false, 1214), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1214), "html", null, true);
            yield "')\" class=\"btn-primary\">Agregar Cursada</button></th>
                    </tr>
                    <tr>    
                        <th>Ciclo Lectivo</th>
                        <th>Cursada</th>
                        <th>Primer Parcial</th>
                        <th>Primer Recuperatorio</th>
                        <th>Segundo Parcial</th>
                        <th>Segundo Recuperatorio</th>
                        <th>Condición</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 1227
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadas", [], "any", false, false, false, 1227));
            foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                // line 1228
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "curso", [], "any", false, false, false, 1228), "comision", [], "any", false, false, false, 1228), "cicloLectivo", [], "any", false, false, false, 1228) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1228), "cicloLectivo", [], "any", false, false, false, 1228))) {
                    // line 1229
                    yield "                            <tr>
                                <td>";
                    // line 1230
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 1230), "cicloLectivo", [], "any", false, false, false, 1230), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 1231
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "alumno", [], "any", false, false, false, 1231), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 1232
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 1232), "parcial", [], "any", false, false, false, 1232), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 1233
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 1233), "recuperatorio1", [], "any", false, false, false, 1233), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 1234
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 1234), "parcial2", [], "any", false, false, false, 1234), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 1235
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 1235), "recuperatorio2", [], "any", false, false, false, 1235), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 1236
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "condicion", [], "any", false, false, false, 1236), "html", null, true);
                    yield "  
                                <button onclick=\"openModal21(";
                    // line 1237
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "id", [], "any", false, false, false, 1237), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 1237), "html", null, true);
                    yield ")\" >Editar</button>
                                </td>
                            </tr>
                        ";
                }
                // line 1241
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1242
            yield "                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['curso'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1245
        yield "



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
                    <div id=\"searchsEs\" class=\"search-container\">
                        <label for=\"searchEstudiante\">Buscar Estudiante:</label>
                        <input type=\"text\" id=\"searchEstudiante\" onkeyup=\"filterEstudiante()\" placeholder=\"Buscar por estudiante...\">
                    </div>
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


        <button id=\"backButton\" style=\"display: none;\" class=\"btn-primary\">Regresar</button>

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
        return array (  1917 => 1245,  1909 => 1242,  1903 => 1241,  1894 => 1237,  1890 => 1236,  1886 => 1235,  1882 => 1234,  1878 => 1233,  1874 => 1232,  1870 => 1231,  1866 => 1230,  1863 => 1229,  1860 => 1228,  1856 => 1227,  1836 => 1214,  1826 => 1209,  1817 => 1205,  1809 => 1200,  1798 => 1197,  1794 => 1196,  1788 => 1192,  1780 => 1189,  1774 => 1188,  1764 => 1183,  1759 => 1181,  1755 => 1180,  1752 => 1179,  1749 => 1178,  1745 => 1177,  1736 => 1171,  1728 => 1168,  1724 => 1167,  1717 => 1164,  1712 => 1160,  1706 => 1159,  1699 => 1155,  1695 => 1154,  1685 => 1151,  1671 => 1148,  1667 => 1147,  1664 => 1146,  1661 => 1145,  1657 => 1144,  1643 => 1135,  1639 => 1134,  1630 => 1131,  1625 => 1130,  1615 => 1125,  1612 => 1123,  1606 => 1119,  1603 => 1118,  1597 => 1117,  1589 => 1111,  1583 => 1110,  1577 => 1106,  1571 => 1104,  1569 => 1103,  1564 => 1101,  1561 => 1100,  1550 => 1098,  1546 => 1097,  1541 => 1095,  1537 => 1093,  1533 => 1091,  1529 => 1089,  1527 => 1088,  1519 => 1087,  1508 => 1085,  1504 => 1083,  1500 => 1080,  1496 => 1078,  1492 => 1076,  1485 => 1074,  1481 => 1072,  1477 => 1070,  1474 => 1069,  1469 => 1068,  1465 => 1067,  1459 => 1066,  1456 => 1065,  1452 => 1064,  1448 => 1062,  1446 => 1061,  1443 => 1060,  1439 => 1057,  1435 => 1055,  1431 => 1053,  1416 => 1051,  1412 => 1050,  1408 => 1048,  1406 => 1047,  1403 => 1046,  1398 => 1043,  1395 => 1042,  1392 => 1041,  1388 => 1040,  1377 => 1036,  1367 => 1033,  1359 => 1028,  1356 => 1027,  1353 => 1026,  1350 => 1025,  1345 => 1024,  1343 => 1023,  1327 => 1012,  1323 => 1011,  1317 => 1008,  1311 => 1007,  1305 => 1003,  1296 => 1000,  1289 => 996,  1282 => 992,  1279 => 991,  1276 => 990,  1264 => 986,  1256 => 983,  1251 => 981,  1247 => 980,  1243 => 979,  1239 => 978,  1236 => 977,  1231 => 976,  1229 => 975,  1226 => 974,  1223 => 973,  1220 => 972,  1212 => 966,  1199 => 958,  1192 => 955,  1188 => 954,  1183 => 951,  1174 => 947,  1172 => 946,  1164 => 943,  1159 => 941,  1155 => 940,  1152 => 939,  1147 => 938,  1126 => 920,  1114 => 911,  1062 => 861,  1056 => 860,  1047 => 857,  1042 => 856,  1037 => 855,  1032 => 854,  1019 => 853,  909 => 752,  899 => 744,  843 => 690,  838 => 687,  789 => 640,  784 => 637,  730 => 585,  720 => 577,  666 => 525,  661 => 522,  621 => 484,  616 => 481,  571 => 438,  566 => 435,  528 => 399,  523 => 396,  483 => 358,  478 => 355,  186 => 64,  181 => 62,  176 => 60,  173 => 59,  170 => 58,  165 => 56,  162 => 55,  160 => 54,  154 => 53,  151 => 52,  149 => 51,  107 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello VistascursadaController!{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {#Scripts de filtros, vistas de tablas y la session iniciada -vista del usuario-#}

    
    <script>
        function filterTableTecnicatura() {
            let searchNombre = document.getElementById(\"searchNombre\").value.toLowerCase();
            let searchReso = document.getElementById(\"searchResolucion\").value.toLowerCase();
            let table = document.getElementById(\"tablaTecnicaturas\"); // Obtener la tabla de tecnicaturas
            let rows = table.getElementsByTagName(\"tr\");       
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                let nombre = cells[0].textContent.toLowerCase();
                let resolucion = cells[3].textContent.toLowerCase();
                if (nombre.includes(searchNombre) && resolucion.includes(searchReso)) {
                    rows[i].style.display = \"\"; 
                } else {
                    rows[i].style.display = \"none\"; 
                }
            }
        }

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

        function showComision(tecnicaturaId) {
            // Ocultar todas las tablas de Comision
            let tables = document.querySelectorAll('.tabla_home');
            tables.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursadaTables = document.querySelectorAll('.tabla_cursada');
            cursadaTables.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursoTables = document.querySelectorAll('.tabla_curso');
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

        function showCursada(comisionId, tecnicaturaId) {
            // oculta tabla tecnicaturas
            let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision');
            tablesToHide.forEach(table => table.style.display = 'none');

            // oculta cursadas
            let cursadaTables = document.querySelectorAll('.tabla_cursada');
            cursadaTables.forEach(table => table.style.display = 'none');

            // oculta curso
            let cursoTables = document.querySelectorAll('.tabla_curso');
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

            // muestra el boton de regresar, la funcion hide... recive id de comision y tecnicatura para poder regresar al punto anterior
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = '';
                backButton.onclick = function() {
                    hideCursada(comisionId, tecnicaturaId);
                };
            }
        }

        function showCurso(comisionId, tecnicaturaId, asignaturaId) {
            // Oculta todas las tablas de tecnicaturas, comisiones y cursadas
            let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision, .tabla_cursada');
            tablesToHide.forEach(table => table.style.display = 'none');

            
            // oculta cursadas
            let cursadaTables = document.querySelectorAll('.tabla_cursada');
            cursadaTables.forEach(table => table.style.display = 'none');

            // Muestra la tabla de cursos específica para la comisión y asignatura seleccionadas
            let cursoTable = document.getElementById(`tablaCurso_\${comisionId}_\${asignaturaId}`);
            if (cursoTable) {
                cursoTable.style.display = '';
            }

            // Oculta el buscador
            let search = document.getElementById('searchs');
            if (search) {
                search.style.display = 'none';
            }

            // Muestra el botón de regresar
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = '';
                backButton.onclick = function() {
                    hideCurso(comisionId, tecnicaturaId, asignaturaId);
                };
            }
        }

        function showCursoCursada2(comisionId, tecnicaturaId) {
            // oculta tabla tecnicaturas
            let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision, .tabla_cursada, .tabla_curso');
            tablesToHide.forEach(table => table.style.display = 'none');

            // oculta curso
            let cursadaTables = document.querySelectorAll('.tabla_curso');
            cursadaTables.forEach(table => table.style.display = 'none');

            // muestra tabla comision
            let cursadaTable = document.getElementById(`tablaCursoCursada_\${comisionId}`);
            if (cursadaTable) {
                cursadaTable.style.display = '';
            }

            // ocultar search
            let search = document.getElementById('searchs');
            if (search) {
                search.style.display = 'none';
            }

            // muestra el boton de regresar, la funcion hide... recive id de comision y tecnicatura para poder regresar al punto anterior
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = '';
                backButton.onclick = function() {
                    hideCursoCursada(comisionId, tecnicaturaId);
                };
            }
        }

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

            // muestra el botón de regresar, la función hide... recibe id de comision, tecnicatura y asignatura para poder regresar al punto anterior
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = '';
                backButton.onclick = function() {
                    hideCursoCursada(comisionId, tecnicaturaId, asignaturaId, cursoId);
                };
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

            // oculta el botón regresar-volver
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = 'none';
            }
        }


        // JavaScript to toggle visibility of the tables
        function showCursadaDocente(cursoId) {
            // Hide all tables first
            document.querySelectorAll('.tabla_curso, .tabla_cursada_docente').forEach(table => {
                table.style.display = 'none';
            });


            // Show the associated docente table
            document.getElementById(`tablaCursadaDocente_\${cursoId}`).style.display = 'table';
        }



        function hideCurso(comisionId, tecnicaturaId, asignaturaId) {
            // Oculta la tabla de curso específica
            let cursoTable = document.getElementById(`tablaCurso_\${comisionId}_\${asignaturaId}`);
            if (cursoTable) {
                cursoTable.style.display = 'none';
            }

            document.querySelectorAll('.tabla_curso, .tabla_cursada_docente').forEach(table => {
                table.style.display = 'none';
            });

            // Muestra la tabla de cursada (comisión) correspondiente
            let comisionTable = document.getElementById(`tablaCursada_\${comisionId}`);
            if (comisionTable) {
                comisionTable.style.display = '';
            }

            // Oculta el botón de regresar
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = 'none';
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

            // oculta el boton regresar-volver
            let backButton = document.getElementById('backButton');
            if (backButton) {
                backButton.style.display = 'none';
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

            // Ocultar el botón de regresar
            let backButton = document.getElementById(`backButton`);
            if (backButton) {
                backButton.style.display = 'none';
            }
        }

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
    // Construye la URL dinámicamente pasando el cursoId
    const url = \"{{ path('app_horario_new', { 'curso_id': 'CURSO_ID' }) }}\".replace('CURSO_ID', cursoId);

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al cargar el formulario: ' + response.statusText);
            }
            return response.text();
        })
        .then(html => {
            // Inserta el contenido del formulario dentro del modal
            document.getElementById('modalBodyHorario').innerHTML = html;
            // Muestra el modal
            document.getElementById('ModalHorario').style.display = 'block';

            // Opcional: oculta campo y label 'curso' si existen en el formulario
            const labelCurso = document.querySelector('label[for=\"horario_curso\"]');
            if (labelCurso) labelCurso.style.display = 'none';

            const cursoInput = document.getElementById('horario_curso');
            if (cursoInput) {
                cursoInput.value = cursoId;
                cursoInput.style.display = 'none';
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

    {#Script para agregar cursadas#}
    <script>
        function openModal2(tecnicaturaId, comisionId, cursoId) {
            // Verificar si los IDs están correctos
            if (!tecnicaturaId || !comisionId) {
                console.error(\"IDs inválidos. Tecnicatura ID o Comisión ID está faltando.\");
                return;
            }
            // Generar la URL con los IDs correctos
            const url = \"{{ path('crear_cursada', { 'tecnicatura_id': '__tecnicaturaId__', 'comision_id': '__comisionId__' }) }}\"
                .replace('__tecnicaturaId__', encodeURIComponent(tecnicaturaId))
                .replace('__comisionId__', encodeURIComponent(comisionId));
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-2').innerHTML = html;
                    document.getElementById('Modal2').style.display = 'block';


                    // Asignar valores y manipular campos

                    const condicionInput = document.getElementById('cursada_condicion');                   
                    const alumnoInput = document.getElementById('cursada_alumno');
                    const modalidadInput = document.getElementById('cursada_modalidad');
                    const cursoInput = document.getElementById('cursada_curso');                  
                    const notaInput = document.getElementById('cursada_nota_id');

                    
                    // Ocultar label de tecnicatura
                    const labelCurso = document.querySelector('label[for=\"cursada_curso\"]');
                    if (labelCurso) {
                        labelCurso.style.display = 'none';
                    }

                    if (cursoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        cursoInput.value = cursoId;
                        cursoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        cursoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }

                    // Ocultar label de nota se generan las notas vacias
                    const labelNota = document.querySelector('label[for=\"cursada_nota_id\"]');
                    if (labelNota) {
                        labelNota.style.display = 'none';
                    }

                    if (notaInput) {  //aqui evaluo la nota id de la posicion donde estoy y guardo en el input no lo necesita al crear cursada(nota empty) 
                        /*notaInput.value = '';  nada, ya que quiero guardar nota sin calificaciones se edita y agregan notas mas adelante*/
                        notaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        notaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
        function closeModal2() {
            document.getElementById('Modal2').style.display = 'none';
            document.getElementById('modalBody-2').innerHTML = '';
        }
        function filterAsignaturas(anio, tecnicaturaId) {
            let dropdown = document.getElementById(\"cursada_asignatura\");
            let options = dropdown.getElementsByTagName(\"option\");

            for (let i = 0; i < options.length; i++) {
                let optionText = options[i].textContent;

                // Extraer el año y el tecnicaturaId del texto de la opción
                let match = optionText.match(/\\((\\d+)\\)\\s+(\\d+)\$/);

                if (match) {
                    let optionAnio = match[1]; // Año dentro del paréntesis
                    let optionTecId = match[2]; // tecnicaturaId después del paréntesis

                    if (optionAnio === anio.toString() && optionTecId === tecnicaturaId.toString()) {
                        options[i].style.display = \"\";  // Mostrar la opción si coincide
                    } else {
                        options[i].style.display = \"none\";  // Ocultar la opción si no coincide
                    }

                    // Ocultar visualmente la parte del texto que está entre paréntesis
                    let visibleText = optionText.split('(')[0];
                    options[i].textContent = visibleText.trim();
                } else {
                    options[i].style.display = \"none\";  // Ocultar la opción si no hay coincidencia
                }
            }
        }

        function filterEstudiante() {
            let searchNombre = document.getElementById(\"searchEstudiante\").value.toLowerCase();
            let dropdown = document.getElementById(\"cursada_alumno\"); 
            let options = dropdown.getElementsByTagName(\"option\");
            
            for (let i = 0; i < options.length; i++) {
                let optionText = options[i].textContent.toLowerCase();
                if (optionText.includes(searchNombre)) {
                    options[i].style.display = \"\"; 
                } else {
                    options[i].style.display = \"none\"; 
                }
            }
        }
    </script>



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

    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Comisiones, Cursadas y Curso del Cohorte {{ cicloLectivo }}</h1>

        <div id=\"searchs\" class=\"search-container\">
            <label for=\"searchNombre\">Buscar por Nombre:</label>
            <input type=\"text\" id=\"searchNombre\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por nombre...\">
            <label for=\"searchResolucion\">Buscar por Resolucion:</label>
            <input type=\"text\" id=\"searchResolucion\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por resolucion...\">
        </div>

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

        {% for tecnicatura in tecnicaturas %}
            <table id=\"tablaComision_{{ tecnicatura.id }}\" class=\"tabla_comision\" style=\"display: none;\" border=\"1\">
    <thead>
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

 

        {% for comision in comisiones %}    
            <table id=\"tablaCursada_{{ comision.id }}\" class=\"tabla_cursada\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"2\">{{ comision.tecnicatura }} -Cursos-</th>
                        <th colspan=\"3\"> Año: {{ comision.anio }} Comisión: {{ comision.comision }}</th>
                    </tr>
                    <tr>
                        <th colspan=\"1\">Asignatura</th>
                         <th colspan=\"1\">Horario</th>
                         <th colspan=\"1\">Docente</th>
                        <th colspan=\"1\">Cursos</th>
                        <th colspan=\"1\">Acciones</th>
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

                                <td>
                                    <button onclick=\"openModal3('{{ comision.tecnicatura.id }}', '{{ comision.id }}', '{{ asignatura.id }}')\" class=\"btn-primary\">Agregar Curso</button>
                                </td>
                                <td>
                                    <button onclick=\"showCurso('{{ comision.id }}', '{{ comision.tecnicatura.id }}', '{{ asignatura.id }}')\" class=\"btn-primary\">Ver Cursos</button>
                                </td>                   
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

                                                {% for cursada in curso.cursadaDocentes %}
                                                    <button onclick=\"openModal41({{ curso.id }}, {{ cursada.id }})\" class=\"btn-secondary\">Editar Docente</button>
                                                {% endfor %}

                                                <button onclick=\"openModalHorario({{ curso.id }})\" class=\"btn-primary\">Agregar Horario</button>

                                                {% if curso.horarios|length > 0 %}
                                                    <button onclick=\"openModalHorario({{ curso.id }})\" class=\"btn-secondary\">Editar Horario</button>
                                                {% endif %}
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
                      <button id=\"backButton\" class:\"button\" onclick=\"showTable('tablaTecnicaturas')\" style=\"display: none;\">Regresar</button>
        
                </tbody>
            </table>
        {% endfor %}
        {% for curso in cursos %}
            <table id=\"tablaCurso_{{ curso.comision.id }}_{{ curso.asignatura.id }}\" class=\"tabla_curso\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"3\">{{ curso.comision.tecnicatura }} -Cursos para cursadas-</th>
                        <th colspan=\"1\"> Año: {{ curso.comision.anio }} Comision: {{ curso.comision.comision }}</th>
                    </tr>
                    <tr>
                        <th colspan=\"1\">Asignatura</th>
                        <th colspan=\"2\">Cursos</th>
                        <th colspan=\"1\">Docentes</th>
                    </tr>
                </thead>
                <tbody>
                    {% for curso_interno in cursos %}
                        {% if curso_interno.comision.id == curso.comision.id and curso_interno.asignatura.id == curso.asignatura.id %}
                            <tr>
                                <td>{{ curso_interno.asignatura.nombre }}</td>
                                <td>{{ curso_interno.comision.ciclolectivo }} ---> <button onclick=\"showCursoCursada({{ curso_interno.comision.id }}, {{ curso_interno.comision.tecnicatura.id }}, {{ curso_interno.asignatura.id }}, {{ curso_interno.id }})\" class=\"btn-primary\">Ver</button>
                                </td>
                                <td>    
                                    <button onclick=\"openModal31({{ curso_interno.id }}, {{curso_interno.asignatura.id}}, {{curso_interno.comision.id}})\" >Editar</button>
                                </td>
                                <td>
                                    <button onclick=\"openModal4({{ curso_interno.id }})\" class=\"btn-primary\" >Asignar Docente/s</button>
                                    <button onclick=\"showCursadaDocente({{ curso_interno.id }})\" class=\"btn-primary\">Ver Docente/s</button>
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                </tbody>
            </table>

            {# tabla para ver los docentes asignados a un curso# ----> #}
            <table id=\"tablaCursadaDocente_{{ curso.id }}\" class=\"tabla_cursada_docente\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"3\">{{ curso.comision.tecnicatura }} -Docentes del Curso-</th>
                        <th colspan=\"1\"> Año: {{ curso.comision.anio }} Comisión: {{ curso.comision.comision }}</th>
                    </tr>
                    <tr>
                        <th colspan=\"2\">Docente/s de {{ curso.asignatura.nombre }}</th>
                        <th colspan=\"1\">Licencia</th>
                        <th colspan=\"1\">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {% for cursadaDocente in cursada_docentes %}
                        {% if cursadaDocente.curso.id == curso.id %}
                            <tr>
                                <td colspan=\"2\">{{ cursadaDocente.docente }}</td>
                                <td colspan=\"1\">{{ cursadaDocente.licencia ? 'Sí' : 'No' }}</td>
                                <td colspan=\"1\">
                                    <button onclick=\"openModal41({{ cursadaDocente.curso.id }}, {{ cursadaDocente.id }})\" >Editar</button>
                                </td>
                            </tr>

                        {% endif %}
                    {% endfor %}
                </tbody>
            </table>
        {% endfor %}




        {% for curso in cursos %}
            <table id=\"tablaCursoCursada_{{ curso.comision.id }}_{{ curso.asignatura.id }}_{{ curso.id }}\" class=\"tabla_curso_cursada\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"2\">{{ curso.comision.tecnicatura }} -Cursadas de Curso-</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th colspan=\"1\"> Año: {{ curso.comision.anio }} Comisión: {{ curso.comision.comision }}</th>
                    </tr>
                    <tr>
                        <th>Asignatura :</th>
                        <th> {{ curso.asignatura.nombre }} {{ curso.comision.cicloLectivo}}</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th colspan=\"1\"><button onclick=\"openModal2('{{ curso.comision.tecnicatura.id }}', '{{ curso.comision.id }}', '{{ curso.id }}')\" class=\"btn-primary\">Agregar Cursada</button></th>
                    </tr>
                    <tr>    
                        <th>Ciclo Lectivo</th>
                        <th>Cursada</th>
                        <th>Primer Parcial</th>
                        <th>Primer Recuperatorio</th>
                        <th>Segundo Parcial</th>
                        <th>Segundo Recuperatorio</th>
                        <th>Condición</th>
                    </tr>
                </thead>
                <tbody>
                    {% for cursada in curso.cursadas %}
                        {% if cursada.curso.comision.cicloLectivo == curso.comision.cicloLectivo %}
                            <tr>
                                <td>{{ curso.comision.cicloLectivo }}</td>
                                <td>{{ cursada.alumno }}</td>
                                <td>{{ cursada.getNotaId().parcial }}</td>
                                <td>{{ cursada.getNotaId().recuperatorio1 }}</td>
                                <td>{{ cursada.getNotaId().parcial2 }}</td>
                                <td>{{ cursada.getNotaId().recuperatorio2 }}</td>
                                <td>{{ cursada.condicion }}  
                                <button onclick=\"openModal21({{ cursada.id }}, {{curso.id}})\" >Editar</button>
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                </tbody>
            </table>
        {% endfor %}




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
                    <div id=\"searchsEs\" class=\"search-container\">
                        <label for=\"searchEstudiante\">Buscar Estudiante:</label>
                        <input type=\"text\" id=\"searchEstudiante\" onkeyup=\"filterEstudiante()\" placeholder=\"Buscar por estudiante...\">
                    </div>
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


        <button id=\"backButton\" style=\"display: none;\" class=\"btn-primary\">Regresar</button>

    </div>
{% endblock %}", "vistascursada/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistascursada\\index.html.twig");
    }
}
