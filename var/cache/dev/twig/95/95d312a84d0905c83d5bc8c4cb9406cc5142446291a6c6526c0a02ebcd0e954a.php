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

/* vistasestudiante/index.html.twig */
class __TwigTemplate_6c595202259c9449abc1781489a48ead96ec4ad082ce7c39fc61301a5c2f780c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasestudiante/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasestudiante/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vistasestudiante/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Estudiante";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 8
        yield "    <script>
        function imprimirTable(tableId) {
            var table = document.getElementById(tableId);
            if (!table) {
                console.error('No se encontró la tabla con el ID:', tableId);
                return;
            }

            // Clona la tabla para evitar modificar la original
            var tableClone = table.cloneNode(true);

            // Elimina la primera fila de la tabla clonada
            var firstRow = tableClone.querySelector('thead tr');
            if (firstRow) {
                firstRow.remove();
            }

            var ventanaImpresion = window.open('', '_blank');

            var estilo = `
                <style>
                    body { font-family: Arial, sans-serif; font-size: 12px; }
                    .tabla_home, .tabla_comision, .tabla_cursada, .tabla_curso, .tabla_curso_cursada, .tabla_cursada_docente {
                        width: 100%;
                        border-collapse: collapse;
                        margin: 0 auto;
                        background-color: #fff;
                    }
                    
                    .tabla_home th, .tabla_home td, .tabla_comision th, .tabla_comision td, .tabla_cursada th, .tabla_cursada td, .tabla_curso th, .tabla_curso td, .tabla_curso_cursada th, .tabla_curso_cursada td, .tabla_cursada_docente th, .tabla_cursada_docente td {
                        color: black;
                        padding: 8px;
                        text-align: left;
                        border: 1px solid black; /* Ensure border lines are visible in print */
                    }
                    
                    .tabla_home th, .tabla_comision th, .tabla_cursada th, .tabla_curso th, .tabla_curso_cursada th, .tabla_cursada_docente th {
                        background-color: #fff; /* Remove background color for print */
                        color: black; /* Ensure header text is visible */
                        font-weight: bold;
                        text-align: center;
                    }
                    
                    .tabla_home tr:nth-child(even), .tabla_comision tr:nth-child(even), .tabla_cursada tr:nth-child(even), .tabla_curso tr:nth-child(even), .tabla_curso_cursada tr:nth-child(even), .tabla_cursada_docente tr:nth-child(even) {
                        background-color: #fff; /* Remove background color for print */
                    }
                    
                    .tabla_home tr:hover, .tabla_comision tr:hover, .tabla_cursada tr:hover, .tabla_curso tr:hover, .tabla_curso_cursada tr:hover, .tabla_cursada_docente tr:hover {
                        background-color: #fff; /* Remove hover effect for print */
                    }
                    
                    .tabla_home td a, .tabla_comision td a, .tabla_cursada td a, .tabla_curso td a, .tabla_curso_cursada td a, .tabla_cursada_docente td a {
                        color: black; /* Ensure link text is visible in print */
                        text-decoration: none;
                    }
                    
                    h1 { text-align: center; }
                    .align-right { text-align: right; }
                    .align-left { text-align: left; }
                    .detalle-container { display: flex; justify-content: space-between; }
                    .total-container { display: flex; justify-content: space-between; }
                    .total-label { font-weight: bold; font-size: 14px; }
                    .total-value { font-weight: bold; font-size: 14px; }
                    
                </style>
            `;

            var html = `
                <html>
                    <head>
                        <title>Certificado de Inscripción</title>
                        \${estilo}
                    </head>
                    <body>
                        <h1><strong>Estudiante:</strong> \${alumno.persona.apellido} \${alumno.persona.nombre} DNI:\${alumno.persona.dniPasaporte}</h1>
                        <h1><strong>TECNICATURA SUPERIOR EN </strong> \${carreraNombre}</h1>
                        <h1>Situacion académica al día \${new Date().toLocaleString()}</h1>
                        
                        \${tableClone.outerHTML}
                        <p>La presente certificación deberá contar con sello y firma de las autoridades de la institución para tener validez.</p>
                    </body>
                </html>
            `;

            ventanaImpresion.document.open();
            ventanaImpresion.document.write(html);
            ventanaImpresion.document.close();

            ventanaImpresion.onload = function () {
                ventanaImpresion.print();
                ventanaImpresion.close();
            };
        }
    </script>

    ";
        // line 104
        yield "    <script>
        function openCursosModal() {


            const url = \"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cursos_disponibles", ["Id" => "__id__", "tecnicaturaId" => "__tecnicaturaId__"]), "html", null, true);
        yield "\"
                        .replace('__id__', alumnoId)
                        .replace('__tecnicaturaId__', tecnicaturaId);
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBodyCursos').innerHTML = html;
                    document.getElementById('ModalCursos').style.display = 'block';
                })
                .catch(error => console.error('Error al cargar los cursos disponibles:', error));
        }

        function closeCursosModal() {
            document.getElementById('ModalCursos').style.display = 'none';
            document.getElementById('modalBodyCursos').innerHTML = '';
        }


        function inscribirCurso(tecnicaturaId, comisionId, cursoId, alId) {
            // Verificar si los IDs están correctos
            if (!tecnicaturaId || !comisionId) {
                console.error(\"IDs inválidos. Tecnicatura ID o Comisión ID está faltando.\");
                return;
            }
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_MiCursada", ["tecnicatura_id" => "__tecnicaturaId__", "comision_id" => "__comisionId__"]), "html", null, true);
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


                    const labelAlu = document.querySelector('label[for=\"cursada_alumno\"]');
                    if (labelAlu) {
                        labelAlu.style.display = 'none';
                    }

                    if (alumnoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        alumnoInput.value = alId;
                        alumnoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        alumnoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }    
                    
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
    </script>

    ";
        // line 196
        yield "    <script>
        function showTable(tableId, carreraId = null, AluId = null, TecoId = null, EstNom = null, CarrNom = null, nombre = null, apellido = null, fechaNacimiento = null, dniPasaporte = null, genero = null, email = null, telefono = null, partido = null, calle = null, numero = null, piso = null, departamento = null, pasillo = null, pais = null, localidad = null, tituloSec = null, escuelaSec = null, anioEgreso = null) {
            const tables = document.querySelectorAll('.tabla_home');
            document.getElementById(tableId).style.display = 'table';
            if (AluId !== null) {
                alumnoId = AluId;
                console.log(alumnoId);
            }
            if (TecoId !== null) {
                tecnicaturaId = TecoId;
                console.log(tecnicaturaId);
            }
            if (EstNom !== null) {
                estudianteNombre = EstNom;
                console.log(estudianteNombre);
            }
            if (CarrNom !== null) {
                carreraNombre = CarrNom;
                console.log(carreraNombre);
            }

            // Reconstruir el objeto alumno
            if (nombre !== null && apellido !== null) {
                alumno = {
                    persona: {
                        nombre: nombre,
                        apellido: apellido,
                        fechaNacimiento: fechaNacimiento,
                        dniPasaporte: dniPasaporte,
                        genero: genero,
                        email: email,
                        telefono: telefono,
                        partido: partido,
                        calle: calle,
                        numero: numero,
                        piso: piso,
                        departamento: departamento,
                        pasillo: pasillo,
                        pais: pais,
                        localidad: localidad
                    },
                    tituloSec: tituloSec,
                    escuelaSec: escuelaSec,
                    anioEgreso: anioEgreso
                };
                console.log(alumno.persona);
            }

            tables.forEach(table => {
                if (table.id === tableId) {
                    table.style.display = '';

                    if (carreraId && tableId === 'tablaCarreraEnCurso') {
                        const rows = table.querySelectorAll('tbody tr');
                        rows.forEach(row => {
                            if (row.dataset.carreraId === carreraId) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        });
                    }

                } else {
                    table.style.display = 'none';
                }
            });

            const backButton = document.getElementById('backButton');
            if (tableId === 'tablacarrera') {
                backButton.style.display = 'none';
            } else {
                backButton.style.display = '';
            }
        }

    </script>


    ";
        // line 276
        yield "    <script>
        function openModal1() {
            document.getElementById('Modal1').style.display = 'block';

            if (alumno) {
                document.querySelector('.modal-contento .miinfo2.nombre').textContent = alumno.persona.nombre;
                document.querySelector('.modal-contento .miinfo2.apellido').textContent = alumno.persona.apellido;
                document.querySelector('.modal-contento .miinfo2.fechaNacimiento').textContent = alumno.persona.fechaNacimiento;
                document.querySelector('.modal-contento .miinfo2.dniPasaporte').textContent = alumno.persona.dniPasaporte;
                document.querySelector('.modal-contento .miinfo2.genero').textContent = alumno.persona.genero;
                document.querySelector('.modal-contento .miinfo2.email').textContent = alumno.persona.email;
                document.querySelector('.modal-contento .miinfo2.telefono').textContent = alumno.persona.telefono;
                document.querySelector('.modal-contento .miinfo2.partido').textContent = alumno.persona.partido;
                document.querySelector('.modal-contento .miinfo2.calle').textContent = alumno.persona.calle;
                document.querySelector('.modal-contento .miinfo2.numero').textContent = alumno.persona.numero;
                document.querySelector('.modal-contento .miinfo2.piso').textContent = alumno.persona.piso;
                document.querySelector('.modal-contento .miinfo2.departamento').textContent = alumno.persona.departamento;
                document.querySelector('.modal-contento .miinfo2.pasillo').textContent = alumno.persona.pasillo;
                document.querySelector('.modal-contento .miinfo2.pais').textContent = alumno.persona.pais;
                document.querySelector('.modal-contento .miinfo2.localidad').textContent = alumno.persona.localidad;
                document.querySelector('.modal-contento .miinfo2.tituloSec').textContent = alumno.tituloSec;
                document.querySelector('.modal-contento .miinfo2.escuelaSec').textContent = alumno.escuelaSec;
                document.querySelector('.modal-contento .miinfo2.anioEgreso').textContent = alumno.anioEgreso;
            }
        }

        function closeModal1() {
            document.getElementById('Modal1').style.display = 'none';
            document.getElementById('modalBody-1').innerHTML = '';
        }
    </script>

    ";
        // line 309
        yield "    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            var userEmail = \"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 311, $this->source); })()), "user", [], "any", false, false, false, 311), "email", [], "any", false, false, false, 311), "html", null, true);
        yield "\";  // aqui obtenemos el correo del usuario logueado
            var userDni = userEmail.split('@')[0];  // Extraer el DNI antes del '@'
            
            // Llamar a la función de filtrado
            if (userEmail !== 'admin@admin.i12') {
                filterTableByDni(userDni);
            }
        });

        function filterTableByDni(dni) {
            // Obtener todas las filas de la tabla
            var rows = document.querySelectorAll(\"#tablacarrera tbody tr\");
            
            // Recorrer cada fila y mostrar/ocultar según el DNI
            rows.forEach(function(row) {
                var estudianteData = row.querySelector('td:first-child').innerText;  // Obtener el texto del primer <td> (Estudiante)
                if (estudianteData.includes(dni)) {
                    row.style.display = '';  // Mostrar la fila
                } else {
                    row.style.display = 'none';  // Ocultar la fila
                }
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 337
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 338
        yield "    <div id=\"body-vistas\">
        <h1>Menú de Gestión del Estudiante</h1>
        <table id=\"tablacarrera\" class=\"tabla_home\" style=\"display: ;\" border=\"1\">
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carreras"]) || array_key_exists("carreras", $context) ? $context["carreras"] : (function () { throw new RuntimeError('Variable "carreras" does not exist.', 349, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 350
            yield "                <tr>
                    <td>";
            // line 351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 351), "html", null, true);
            yield "</td>
                    <td>";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "gettecnicaturaId", [], "method", false, false, false, 352), "html", null, true);
            yield "</td>
                    <td>
                        <button class:\"button\" onclick=\"showTable('tablaCarreraEnCurso', '";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "id", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "id", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "gettecnicaturaId", [], "method", false, false, false, 354), "id", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "gettecnicaturaId", [], "method", false, false, false, 354), "nombre", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "nombre", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "apellido", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "fechaNacimiento", [], "any", false, false, false, 354), "Y-m-d"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "dniPasaporte", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "genero", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "email", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "telefono", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "partido", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "calle", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "numero", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "piso", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "departamento", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "pasillo", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "pais", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "persona", [], "any", false, false, false, 354), "localidad", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "tituloSec", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "escuelaSec", [], "any", false, false, false, 354), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 354), "anioEgreso", [], "any", false, false, false, 354), "html", null, true);
            yield "')\">Situación académica</button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 361
        if (!$context['_iterated']) {
            // line 358
            yield "                <tr>
                    <td colspan=\"3\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['carrera'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        yield "            </tbody>
        </table>

        <table id=\"tablaCarreraEnCurso\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"14\" >
                        <button id=\"backButton\" onclick=\"showTable('tablacarrera')\">Volver</button>
                        <button onclick=\"openModal1()\">Mis Datos</button> 
                        <button id=\"botonImprimir\" onclick=\"imprimirTable('tablaCarreraEnCurso')\">Imprimir certificado</button>  
                        <button id=\"cursadaMia\" onclick=\"openCursosModal()\">Inscripción a Cursada</button>                  
                        <button id=\"finalMio\"  onclick=\"openModal('final')\">Inscripción a Final</button>                       
                        <button id=\"claveMia\"  onclick=\"openModal('clave')\">Cambiar Clave</button> 
                    </th>
                </tr>
                <tr>
                    <th>Asignatura</th>
                    <th>Año</th>
                    <th>Ciclo Lectivo</th>
                    <th>Comisión</th>
                    <th>Primer Parcial</th>
                    <th>Primer Recuperatorio</th>
                    <th>Segundo Parcial</th>
                    <th>Segundo Recuperatorio</th>
                    <th>Cursada</th>
                    <th>Equivalencia</th>
                    <th>Nota Final</th>
                    <th>Fecha de Final</th>
                    <th>Tomo</th>
                    <th>Folio</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carreras"]) || array_key_exists("carreras", $context) ? $context["carreras"] : (function () { throw new RuntimeError('Variable "carreras" does not exist.', 395, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 396
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 396, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
                // line 397
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadas", [], "any", false, false, false, 397));
                foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                    // line 398
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "alumno", [], "any", false, false, false, 398), "id", [], "any", false, false, false, 398) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 398), "id", [], "any", false, false, false, 398))) {
                        yield "  
                        ";
                        // line 399
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "curso", [], "any", false, false, false, 399), "comision", [], "any", false, false, false, 399), "tecnicatura", [], "any", false, false, false, 399), "id", [], "any", false, false, false, 399) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "gettecnicaturaId", [], "method", false, false, false, 399), "id", [], "any", false, false, false, 399))) {
                            // line 400
                            yield "                            <tr data-carrera-id=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "id", [], "any", false, false, false, 400), "html", null, true);
                            yield "\">
                                <td>";
                            // line 401
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 401), "nombre", [], "any", false, false, false, 401), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 402
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 402), "anio", [], "any", false, false, false, 402), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 403
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 403), "ciclolectivo", [], "any", false, false, false, 403), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 404
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 404), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 405
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 405), "parcial", [], "any", false, false, false, 405), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 406
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 406), "recuperatorio1", [], "any", false, false, false, 406), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 407
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 407), "parcial2", [], "any", false, false, false, 407), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 408
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 408), "recuperatorio2", [], "any", false, false, false, 408), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 409
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "condicion", [], "any", false, false, false, 409), "html", null, true);
                            yield "</td>
                                <td> 
                                    ";
                            // line 412
                            yield "                                    <a href=\"javascript:void(0)\" onclick=\"openModal('view', ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "curso", [], "any", false, false, false, 412), "asignatura", [], "any", false, false, false, 412), "id", [], "any", false, false, false, 412), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "curso", [], "any", false, false, false, 412), "comision", [], "any", false, false, false, 412), "tecnicatura", [], "any", false, false, false, 412), "id", [], "any", false, false, false, 412), "html", null, true);
                            yield ")\">
                                        <button type=\"button\" class:\"button\">Ver correlativas</button>
                                    </a>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <div id=\"ModalCursos\" class=\"modal\" style=\"display: none;\">
                                <div class=\"modal-content\">
                                    <span class=\"close\" onclick=\"closeCursosModal()\">&times;</span>
                                    <div id=\"modalBodyCursos\" class=\"submodal\"></div>
                                </div>
                            </div>


                            <th colspan=\"1\"><button onclick=\"openModal2('";
                            // line 430
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 430), "tecnicatura", [], "any", false, false, false, 430), "id", [], "any", false, false, false, 430), "html", null, true);
                            yield "', '";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 430), "id", [], "any", false, false, false, 430), "html", null, true);
                            yield "', '";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 430), "html", null, true);
                            yield "')\" class=\"btn-primary\">Agregar Cursada</button></th>
                            <!-- Modal2 para crear cursadas!!!-->
                            <div id=\"Modal2\" class=\"modal\" style=\"display: none;\">
                                <div class=\"modal-content\">
                                    <div id=\"modal-cursadas\">
                                        <div class=\"modal-content2\">
                                            <span class=\"close\" onclick=\"closeModal2()\">&times;</span>
                                            <div id=\"modalBody-2\" class=\"submodal\"></div>
                                        </div>
                                    </div>
                                </div>    
                            </div>

                        ";
                        }
                        // line 443
                        yield "        
                        ";
                    }
                    // line 445
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 446
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['curso'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['carrera'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 448
        yield "            </tbody>
        </table>

        <div id=\"Modal1\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeModal1()\">&times;</span>
                <div class=\"modal-contento\">
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Nombre:</label>
                        <label class=\"miinfo2 nombre\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Apellido:</label>
                        <label class=\"miinfo2 apellido\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Fecha de Nacimiento:</label>
                        <label class=\"miinfo2 fechaNacimiento\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">DNI:</label>
                        <label class=\"miinfo2 dniPasaporte\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Género:</label>
                        <label class=\"miinfo2 genero\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">E-Mail:</label>
                        <label class=\"miinfo2 email\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Teléfono:</label>
                        <label class=\"miinfo2 telefono\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Partido:</label>
                        <label class=\"miinfo2 partido\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Calle:</label>
                        <label class=\"miinfo2 calle\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Número:</label>
                        <label class=\"miinfo2 numero\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Piso:</label>
                        <label class=\"miinfo2 piso\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Departamento:</label>
                        <label class=\"miinfo2 departamento\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Pasillo:</label>
                        <label class=\"miinfo2 pasillo\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Nacionalidad:</label>
                        <label class=\"miinfo2 pais\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Localidad:</label>
                        <label class=\"miinfo2 localidad\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Título Secundaria:</label>
                        <label class=\"miinfo2 tituloSec\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Escuela Secundaria:</label>
                        <label class=\"miinfo2 escuelaSec\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Año de Egreso:</label>
                        <label class=\"miinfo2 anioEgreso\"></label>
                    </div>
                    <div id=\"modalBody-1\" class=\"submodal\"></div>
                </div>
            </div>
        </div>

        <script>
            function openModal(action, asignaturaId = null, tecnicaturaId = null) {
                let url = '';
                if (action === 'add') {
                    url = \"";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_correlativa", ["asignatura_id" => "__asignaturaId__", "tecnicatura_id" => "__tecnicaturaId__"]), "html", null, true);
        yield "\"
                        .replace('__asignaturaId__', asignaturaId)
                        .replace('__tecnicaturaId__', tecnicaturaId);
                                        fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalCorre').innerHTML = html;
                        document.getElementById('correlativaModal').style.display = 'block';

                            const correInput = document.getElementById('correlativa_asignatura');

                            // Ocultar label de tecnicatura
                            const labelCorre = document.querySelector('label[for=\"correlativa_asignatura\"]');
                            if (labelCorre) {
                                labelCorre.style.display = 'none';
                            }

                            if (correInput) { 
                                correInput.value = asignaturaId;
                                correInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                                correInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                            }


                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));

                } else if (action === 'view') {
                    url = \"";
        // line 564
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_correlativas", ["asignatura_id" => "__asignaturaId__"]);
        yield "\"
                        .replace('__asignaturaId__', asignaturaId);
                    fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalCorre').innerHTML = html;
                        document.getElementById('correlativaModal').style.display = 'block';
                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));    
                }


                //!!!!!!!!!Crear modal aparte donde elegir asignatura filtrar y reasignar todo auto aqui! para filtrar y evaluar cual materia puede inscribir
                if (action === 'final') {
                    url = \"";
        // line 578
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevo_final");
        yield "\"
                        ;
                    fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalCorre').innerHTML = html;
                        document.getElementById('correlativaModal').style.display = 'block';
                        //inscripcion_final_fecha     inscripcion_final_alumno_id  inscripcion_final_asignatura_id

                        const fechaInput = document.getElementById('inscripcion_final_fecha');                 
                        const labelfecha = document.querySelector('label[for=\"inscripcion_final_fecha\"]');
                        if (labelfecha) {
                            labelfecha.style.display = 'none';
                        }
                        if (fechaInput) {                         
                            fechaInput.setAttribute('readonly', true); 
                            fechaInput.style.display = 'none'; 
                        }

                        const alumnoInput = document.getElementById('inscripcion_final_alumno_id');                 
                        const labelalumno = document.querySelector('label[for=\"inscripcion_final_alumno_id\"]');
                        if (labelalumno) {
                            labelalumno.style.display = 'none';
                        }
                        if (alumnoInput) {    
                            alumnoInput.value = alumnoId;                  
                            alumnoInput.setAttribute('readonly', true); 
                            alumnoInput.style.display = 'none'; 
                        }


                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));    
                }

                

                if (action === 'clave') {
                    var userId = '";
        // line 616
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 616, $this->source); })()), "user", [], "any", false, false, false, 616), "id", [], "any", false, false, false, 616), "html", null, true);
        yield "';
                    console.log(userId);
                    url = \"";
        // line 618
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_usuario", ["id" => "__id__"]);
        yield "\"
                        .replace('__id__', userId);
                    fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalClave').innerHTML = html;
                        document.getElementById('claveModal').style.display = 'block';

                        //user_email     user_roles       user_password_first (el primer pass)
                        //user_password_second (repetir el pass) user_nombre user_apellido
                        
                        const rolInput = document.getElementById('user_roles');                 
                        const labelrol = document.querySelector('label[for=\"user_roles\"]');
                        if (labelrol) {
                            labelrol.style.display = 'none';
                        }
                        if (rolInput) {                         
                            rolInput.setAttribute('readonly', true); 
                            rolInput.style.display = 'none'; 
                        }
                        const emailInput = document.getElementById('user_email');                 
                        const labelemail = document.querySelector('label[for=\"user_email\"]');
                        if (labelemail) {
                            labelemail.style.display = 'none';
                        }
                        if (emailInput) {                         
                            emailInput.setAttribute('readonly', true); 
                            emailInput.style.display = 'none'; 
                        }

                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));
                }
                
            }

            function closeCorrelativaModal() {
                document.getElementById('correlativaModal').style.display = 'none';
                document.getElementById('modalCorre').innerHTML = '';
            }
            
            function closeClaveModal() {
                document.getElementById('claveModal').style.display = 'none';
                document.getElementById('modalClave').innerHTML = '';
            }


        </script>

        <!-- Modal  Correlativa -->
        <div id=\"correlativaModal\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeCorrelativaModal()\">&times;</span>
                <div id=\"modalCorre\" class=\"submodal\"></div>
            </div>
        </div>

        <!-- Modal Clave -->
        <div id=\"claveModal\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeClaveModal()\">&times;</span>
                <div id=\"modalClave\" class=\"submodal\"></div>
            </div>
        </div>

 

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vistasestudiante/index.html.twig";
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
        return array (  912 => 618,  907 => 616,  866 => 578,  849 => 564,  818 => 536,  728 => 448,  722 => 447,  716 => 446,  710 => 445,  706 => 443,  685 => 430,  661 => 412,  656 => 409,  652 => 408,  648 => 407,  644 => 406,  640 => 405,  636 => 404,  632 => 403,  628 => 402,  624 => 401,  619 => 400,  617 => 399,  612 => 398,  607 => 397,  602 => 396,  598 => 395,  563 => 362,  554 => 358,  552 => 361,  500 => 354,  495 => 352,  491 => 351,  488 => 350,  483 => 349,  470 => 338,  457 => 337,  421 => 311,  417 => 309,  383 => 276,  302 => 196,  237 => 133,  209 => 108,  203 => 104,  106 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Estudiante{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# Script para imprimir el estado academico #}
    <script>
        function imprimirTable(tableId) {
            var table = document.getElementById(tableId);
            if (!table) {
                console.error('No se encontró la tabla con el ID:', tableId);
                return;
            }

            // Clona la tabla para evitar modificar la original
            var tableClone = table.cloneNode(true);

            // Elimina la primera fila de la tabla clonada
            var firstRow = tableClone.querySelector('thead tr');
            if (firstRow) {
                firstRow.remove();
            }

            var ventanaImpresion = window.open('', '_blank');

            var estilo = `
                <style>
                    body { font-family: Arial, sans-serif; font-size: 12px; }
                    .tabla_home, .tabla_comision, .tabla_cursada, .tabla_curso, .tabla_curso_cursada, .tabla_cursada_docente {
                        width: 100%;
                        border-collapse: collapse;
                        margin: 0 auto;
                        background-color: #fff;
                    }
                    
                    .tabla_home th, .tabla_home td, .tabla_comision th, .tabla_comision td, .tabla_cursada th, .tabla_cursada td, .tabla_curso th, .tabla_curso td, .tabla_curso_cursada th, .tabla_curso_cursada td, .tabla_cursada_docente th, .tabla_cursada_docente td {
                        color: black;
                        padding: 8px;
                        text-align: left;
                        border: 1px solid black; /* Ensure border lines are visible in print */
                    }
                    
                    .tabla_home th, .tabla_comision th, .tabla_cursada th, .tabla_curso th, .tabla_curso_cursada th, .tabla_cursada_docente th {
                        background-color: #fff; /* Remove background color for print */
                        color: black; /* Ensure header text is visible */
                        font-weight: bold;
                        text-align: center;
                    }
                    
                    .tabla_home tr:nth-child(even), .tabla_comision tr:nth-child(even), .tabla_cursada tr:nth-child(even), .tabla_curso tr:nth-child(even), .tabla_curso_cursada tr:nth-child(even), .tabla_cursada_docente tr:nth-child(even) {
                        background-color: #fff; /* Remove background color for print */
                    }
                    
                    .tabla_home tr:hover, .tabla_comision tr:hover, .tabla_cursada tr:hover, .tabla_curso tr:hover, .tabla_curso_cursada tr:hover, .tabla_cursada_docente tr:hover {
                        background-color: #fff; /* Remove hover effect for print */
                    }
                    
                    .tabla_home td a, .tabla_comision td a, .tabla_cursada td a, .tabla_curso td a, .tabla_curso_cursada td a, .tabla_cursada_docente td a {
                        color: black; /* Ensure link text is visible in print */
                        text-decoration: none;
                    }
                    
                    h1 { text-align: center; }
                    .align-right { text-align: right; }
                    .align-left { text-align: left; }
                    .detalle-container { display: flex; justify-content: space-between; }
                    .total-container { display: flex; justify-content: space-between; }
                    .total-label { font-weight: bold; font-size: 14px; }
                    .total-value { font-weight: bold; font-size: 14px; }
                    
                </style>
            `;

            var html = `
                <html>
                    <head>
                        <title>Certificado de Inscripción</title>
                        \${estilo}
                    </head>
                    <body>
                        <h1><strong>Estudiante:</strong> \${alumno.persona.apellido} \${alumno.persona.nombre} DNI:\${alumno.persona.dniPasaporte}</h1>
                        <h1><strong>TECNICATURA SUPERIOR EN </strong> \${carreraNombre}</h1>
                        <h1>Situacion académica al día \${new Date().toLocaleString()}</h1>
                        
                        \${tableClone.outerHTML}
                        <p>La presente certificación deberá contar con sello y firma de las autoridades de la institución para tener validez.</p>
                    </body>
                </html>
            `;

            ventanaImpresion.document.open();
            ventanaImpresion.document.write(html);
            ventanaImpresion.document.close();

            ventanaImpresion.onload = function () {
                ventanaImpresion.print();
                ventanaImpresion.close();
            };
        }
    </script>

    {#Script para agregar cursadas#}
    <script>
        function openCursosModal() {


            const url = \"{{ path('cursos_disponibles', { 'Id': '__id__', 'tecnicaturaId': '__tecnicaturaId__' }) }}\"
                        .replace('__id__', alumnoId)
                        .replace('__tecnicaturaId__', tecnicaturaId);
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBodyCursos').innerHTML = html;
                    document.getElementById('ModalCursos').style.display = 'block';
                })
                .catch(error => console.error('Error al cargar los cursos disponibles:', error));
        }

        function closeCursosModal() {
            document.getElementById('ModalCursos').style.display = 'none';
            document.getElementById('modalBodyCursos').innerHTML = '';
        }


        function inscribirCurso(tecnicaturaId, comisionId, cursoId, alId) {
            // Verificar si los IDs están correctos
            if (!tecnicaturaId || !comisionId) {
                console.error(\"IDs inválidos. Tecnicatura ID o Comisión ID está faltando.\");
                return;
            }
            // Generar la URL con los IDs correctos
            const url = \"{{ path('crear_MiCursada', { 'tecnicatura_id': '__tecnicaturaId__', 'comision_id': '__comisionId__' }) }}\"
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


                    const labelAlu = document.querySelector('label[for=\"cursada_alumno\"]');
                    if (labelAlu) {
                        labelAlu.style.display = 'none';
                    }

                    if (alumnoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                        alumnoInput.value = alId;
                        alumnoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        alumnoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }    
                    
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
    </script>

    {#Script para ver las tablas ocultas #}
    <script>
        function showTable(tableId, carreraId = null, AluId = null, TecoId = null, EstNom = null, CarrNom = null, nombre = null, apellido = null, fechaNacimiento = null, dniPasaporte = null, genero = null, email = null, telefono = null, partido = null, calle = null, numero = null, piso = null, departamento = null, pasillo = null, pais = null, localidad = null, tituloSec = null, escuelaSec = null, anioEgreso = null) {
            const tables = document.querySelectorAll('.tabla_home');
            document.getElementById(tableId).style.display = 'table';
            if (AluId !== null) {
                alumnoId = AluId;
                console.log(alumnoId);
            }
            if (TecoId !== null) {
                tecnicaturaId = TecoId;
                console.log(tecnicaturaId);
            }
            if (EstNom !== null) {
                estudianteNombre = EstNom;
                console.log(estudianteNombre);
            }
            if (CarrNom !== null) {
                carreraNombre = CarrNom;
                console.log(carreraNombre);
            }

            // Reconstruir el objeto alumno
            if (nombre !== null && apellido !== null) {
                alumno = {
                    persona: {
                        nombre: nombre,
                        apellido: apellido,
                        fechaNacimiento: fechaNacimiento,
                        dniPasaporte: dniPasaporte,
                        genero: genero,
                        email: email,
                        telefono: telefono,
                        partido: partido,
                        calle: calle,
                        numero: numero,
                        piso: piso,
                        departamento: departamento,
                        pasillo: pasillo,
                        pais: pais,
                        localidad: localidad
                    },
                    tituloSec: tituloSec,
                    escuelaSec: escuelaSec,
                    anioEgreso: anioEgreso
                };
                console.log(alumno.persona);
            }

            tables.forEach(table => {
                if (table.id === tableId) {
                    table.style.display = '';

                    if (carreraId && tableId === 'tablaCarreraEnCurso') {
                        const rows = table.querySelectorAll('tbody tr');
                        rows.forEach(row => {
                            if (row.dataset.carreraId === carreraId) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        });
                    }

                } else {
                    table.style.display = 'none';
                }
            });

            const backButton = document.getElementById('backButton');
            if (tableId === 'tablacarrera') {
                backButton.style.display = 'none';
            } else {
                backButton.style.display = '';
            }
        }

    </script>


    {# Script para abrir modal #}
    <script>
        function openModal1() {
            document.getElementById('Modal1').style.display = 'block';

            if (alumno) {
                document.querySelector('.modal-contento .miinfo2.nombre').textContent = alumno.persona.nombre;
                document.querySelector('.modal-contento .miinfo2.apellido').textContent = alumno.persona.apellido;
                document.querySelector('.modal-contento .miinfo2.fechaNacimiento').textContent = alumno.persona.fechaNacimiento;
                document.querySelector('.modal-contento .miinfo2.dniPasaporte').textContent = alumno.persona.dniPasaporte;
                document.querySelector('.modal-contento .miinfo2.genero').textContent = alumno.persona.genero;
                document.querySelector('.modal-contento .miinfo2.email').textContent = alumno.persona.email;
                document.querySelector('.modal-contento .miinfo2.telefono').textContent = alumno.persona.telefono;
                document.querySelector('.modal-contento .miinfo2.partido').textContent = alumno.persona.partido;
                document.querySelector('.modal-contento .miinfo2.calle').textContent = alumno.persona.calle;
                document.querySelector('.modal-contento .miinfo2.numero').textContent = alumno.persona.numero;
                document.querySelector('.modal-contento .miinfo2.piso').textContent = alumno.persona.piso;
                document.querySelector('.modal-contento .miinfo2.departamento').textContent = alumno.persona.departamento;
                document.querySelector('.modal-contento .miinfo2.pasillo').textContent = alumno.persona.pasillo;
                document.querySelector('.modal-contento .miinfo2.pais').textContent = alumno.persona.pais;
                document.querySelector('.modal-contento .miinfo2.localidad').textContent = alumno.persona.localidad;
                document.querySelector('.modal-contento .miinfo2.tituloSec').textContent = alumno.tituloSec;
                document.querySelector('.modal-contento .miinfo2.escuelaSec').textContent = alumno.escuelaSec;
                document.querySelector('.modal-contento .miinfo2.anioEgreso').textContent = alumno.anioEgreso;
            }
        }

        function closeModal1() {
            document.getElementById('Modal1').style.display = 'none';
            document.getElementById('modalBody-1').innerHTML = '';
        }
    </script>

    {# Filtro necesario para no acceder un estudiante a todas partes, aqui ademas el super-adminitrador puede acceder sin filtro a todos los registros #}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            var userEmail = \"{{ app.user.email }}\";  // aqui obtenemos el correo del usuario logueado
            var userDni = userEmail.split('@')[0];  // Extraer el DNI antes del '@'
            
            // Llamar a la función de filtrado
            if (userEmail !== 'admin@admin.i12') {
                filterTableByDni(userDni);
            }
        });

        function filterTableByDni(dni) {
            // Obtener todas las filas de la tabla
            var rows = document.querySelectorAll(\"#tablacarrera tbody tr\");
            
            // Recorrer cada fila y mostrar/ocultar según el DNI
            rows.forEach(function(row) {
                var estudianteData = row.querySelector('td:first-child').innerText;  // Obtener el texto del primer <td> (Estudiante)
                if (estudianteData.includes(dni)) {
                    row.style.display = '';  // Mostrar la fila
                } else {
                    row.style.display = 'none';  // Ocultar la fila
                }
            });
        }
    </script>
{% endblock %}

{% block body %}
    <div id=\"body-vistas\">
        <h1>Menú de Gestión del Estudiante</h1>
        <table id=\"tablacarrera\" class=\"tabla_home\" style=\"display: ;\" border=\"1\">
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {% for carrera in carreras %}
                <tr>
                    <td>{{ carrera.getestudianteId() }}</td>
                    <td>{{ carrera.gettecnicaturaId() }}</td>
                    <td>
                        <button class:\"button\" onclick=\"showTable('tablaCarreraEnCurso', '{{ carrera.id }}', '{{ carrera.getestudianteId().id }}', '{{ carrera.gettecnicaturaId().id }}', '{{ carrera.getestudianteId().persona }}', '{{ carrera.gettecnicaturaId().nombre }}', '{{ carrera.getestudianteId().persona.nombre }}', '{{ carrera.getestudianteId().persona.apellido }}', '{{ carrera.getestudianteId().persona.fechaNacimiento|date('Y-m-d') }}', '{{ carrera.getestudianteId().persona.dniPasaporte }}', '{{ carrera.getestudianteId().persona.genero }}', '{{ carrera.getestudianteId().persona.email }}', '{{ carrera.getestudianteId().persona.telefono }}', '{{ carrera.getestudianteId().persona.partido }}', '{{ carrera.getestudianteId().persona.calle }}', '{{ carrera.getestudianteId().persona.numero }}', '{{ carrera.getestudianteId().persona.piso }}', '{{ carrera.getestudianteId().persona.departamento }}', '{{ carrera.getestudianteId().persona.pasillo }}', '{{ carrera.getestudianteId().persona.pais }}', '{{ carrera.getestudianteId().persona.localidad }}', '{{ carrera.getestudianteId().tituloSec }}', '{{ carrera.getestudianteId().escuelaSec }}', '{{ carrera.getestudianteId().anioEgreso }}')\">Situación académica</button>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">No se encontraron registros</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <table id=\"tablaCarreraEnCurso\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"14\" >
                        <button id=\"backButton\" onclick=\"showTable('tablacarrera')\">Volver</button>
                        <button onclick=\"openModal1()\">Mis Datos</button> 
                        <button id=\"botonImprimir\" onclick=\"imprimirTable('tablaCarreraEnCurso')\">Imprimir certificado</button>  
                        <button id=\"cursadaMia\" onclick=\"openCursosModal()\">Inscripción a Cursada</button>                  
                        <button id=\"finalMio\"  onclick=\"openModal('final')\">Inscripción a Final</button>                       
                        <button id=\"claveMia\"  onclick=\"openModal('clave')\">Cambiar Clave</button> 
                    </th>
                </tr>
                <tr>
                    <th>Asignatura</th>
                    <th>Año</th>
                    <th>Ciclo Lectivo</th>
                    <th>Comisión</th>
                    <th>Primer Parcial</th>
                    <th>Primer Recuperatorio</th>
                    <th>Segundo Parcial</th>
                    <th>Segundo Recuperatorio</th>
                    <th>Cursada</th>
                    <th>Equivalencia</th>
                    <th>Nota Final</th>
                    <th>Fecha de Final</th>
                    <th>Tomo</th>
                    <th>Folio</th>
                </tr>
            </thead>
            <tbody>
            {% for carrera in carreras %}
                {% for curso in cursos %}
                    {% for cursada in curso.cursadas %}
                        {% if cursada.alumno.id == carrera.getestudianteId().id %}  
                        {% if cursada.curso.comision.tecnicatura.id == carrera.gettecnicaturaId().id %}
                            <tr data-carrera-id=\"{{ carrera.id }}\">
                                <td>{{ curso.asignatura.nombre }}</td>
                                <td>{{ curso.asignatura.anio }}</td>
                                <td>{{ curso.comision.ciclolectivo }}</td>
                                <td>{{ curso.comision }}</td>
                                <td>{{ cursada.getNotaId().parcial }}</td>
                                <td>{{ cursada.getNotaId().recuperatorio1 }}</td>
                                <td>{{ cursada.getNotaId().parcial2 }}</td>
                                <td>{{ cursada.getNotaId().recuperatorio2 }}</td>
                                <td>{{ cursada.condicion }}</td>
                                <td> 
                                    {# ¡Precaucion!, se toma de vistas para ver correctamente correlativas, ya que es responsable de crear tecnicaturas, asignaturas y correlativas de las mismas#}
                                    <a href=\"javascript:void(0)\" onclick=\"openModal('view', {{ cursada.curso.asignatura.id }}, {{ cursada.curso.comision.tecnicatura.id }})\">
                                        <button type=\"button\" class:\"button\">Ver correlativas</button>
                                    </a>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <div id=\"ModalCursos\" class=\"modal\" style=\"display: none;\">
                                <div class=\"modal-content\">
                                    <span class=\"close\" onclick=\"closeCursosModal()\">&times;</span>
                                    <div id=\"modalBodyCursos\" class=\"submodal\"></div>
                                </div>
                            </div>


                            <th colspan=\"1\"><button onclick=\"openModal2('{{ curso.comision.tecnicatura.id }}', '{{ curso.comision.id }}', '{{ curso.id }}')\" class=\"btn-primary\">Agregar Cursada</button></th>
                            <!-- Modal2 para crear cursadas!!!-->
                            <div id=\"Modal2\" class=\"modal\" style=\"display: none;\">
                                <div class=\"modal-content\">
                                    <div id=\"modal-cursadas\">
                                        <div class=\"modal-content2\">
                                            <span class=\"close\" onclick=\"closeModal2()\">&times;</span>
                                            <div id=\"modalBody-2\" class=\"submodal\"></div>
                                        </div>
                                    </div>
                                </div>    
                            </div>

                        {% endif %}        
                        {% endif %}
                    {% endfor %}
                {% endfor %}
            {% endfor %}
            </tbody>
        </table>

        <div id=\"Modal1\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeModal1()\">&times;</span>
                <div class=\"modal-contento\">
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Nombre:</label>
                        <label class=\"miinfo2 nombre\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Apellido:</label>
                        <label class=\"miinfo2 apellido\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Fecha de Nacimiento:</label>
                        <label class=\"miinfo2 fechaNacimiento\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">DNI:</label>
                        <label class=\"miinfo2 dniPasaporte\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Género:</label>
                        <label class=\"miinfo2 genero\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">E-Mail:</label>
                        <label class=\"miinfo2 email\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Teléfono:</label>
                        <label class=\"miinfo2 telefono\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Partido:</label>
                        <label class=\"miinfo2 partido\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Calle:</label>
                        <label class=\"miinfo2 calle\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Número:</label>
                        <label class=\"miinfo2 numero\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Piso:</label>
                        <label class=\"miinfo2 piso\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Departamento:</label>
                        <label class=\"miinfo2 departamento\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Pasillo:</label>
                        <label class=\"miinfo2 pasillo\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Nacionalidad:</label>
                        <label class=\"miinfo2 pais\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Localidad:</label>
                        <label class=\"miinfo2 localidad\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Título Secundaria:</label>
                        <label class=\"miinfo2 tituloSec\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Escuela Secundaria:</label>
                        <label class=\"miinfo2 escuelaSec\"></label>
                    </div>
                    <div class=\"info-pair\">
                        <label class=\"miinfo\">Año de Egreso:</label>
                        <label class=\"miinfo2 anioEgreso\"></label>
                    </div>
                    <div id=\"modalBody-1\" class=\"submodal\"></div>
                </div>
            </div>
        </div>

        <script>
            function openModal(action, asignaturaId = null, tecnicaturaId = null) {
                let url = '';
                if (action === 'add') {
                    url = \"{{ path('add_correlativa', { 'asignatura_id': '__asignaturaId__', 'tecnicatura_id': '__tecnicaturaId__' }) }}\"
                        .replace('__asignaturaId__', asignaturaId)
                        .replace('__tecnicaturaId__', tecnicaturaId);
                                        fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalCorre').innerHTML = html;
                        document.getElementById('correlativaModal').style.display = 'block';

                            const correInput = document.getElementById('correlativa_asignatura');

                            // Ocultar label de tecnicatura
                            const labelCorre = document.querySelector('label[for=\"correlativa_asignatura\"]');
                            if (labelCorre) {
                                labelCorre.style.display = 'none';
                            }

                            if (correInput) { 
                                correInput.value = asignaturaId;
                                correInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                                correInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                            }


                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));

                } else if (action === 'view') {
                    url = \"{{ path('view_correlativas', { 'asignatura_id': '__asignaturaId__' }) }}\"
                        .replace('__asignaturaId__', asignaturaId);
                    fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalCorre').innerHTML = html;
                        document.getElementById('correlativaModal').style.display = 'block';
                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));    
                }


                //!!!!!!!!!Crear modal aparte donde elegir asignatura filtrar y reasignar todo auto aqui! para filtrar y evaluar cual materia puede inscribir
                if (action === 'final') {
                    url = \"{{ path('nuevo_final', ) }}\"
                        ;
                    fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalCorre').innerHTML = html;
                        document.getElementById('correlativaModal').style.display = 'block';
                        //inscripcion_final_fecha     inscripcion_final_alumno_id  inscripcion_final_asignatura_id

                        const fechaInput = document.getElementById('inscripcion_final_fecha');                 
                        const labelfecha = document.querySelector('label[for=\"inscripcion_final_fecha\"]');
                        if (labelfecha) {
                            labelfecha.style.display = 'none';
                        }
                        if (fechaInput) {                         
                            fechaInput.setAttribute('readonly', true); 
                            fechaInput.style.display = 'none'; 
                        }

                        const alumnoInput = document.getElementById('inscripcion_final_alumno_id');                 
                        const labelalumno = document.querySelector('label[for=\"inscripcion_final_alumno_id\"]');
                        if (labelalumno) {
                            labelalumno.style.display = 'none';
                        }
                        if (alumnoInput) {    
                            alumnoInput.value = alumnoId;                  
                            alumnoInput.setAttribute('readonly', true); 
                            alumnoInput.style.display = 'none'; 
                        }


                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));    
                }

                

                if (action === 'clave') {
                    var userId = '{{ app.user.id }}';
                    console.log(userId);
                    url = \"{{ path('editar_usuario', { 'id': '__id__' }) }}\"
                        .replace('__id__', userId);
                    fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalClave').innerHTML = html;
                        document.getElementById('claveModal').style.display = 'block';

                        //user_email     user_roles       user_password_first (el primer pass)
                        //user_password_second (repetir el pass) user_nombre user_apellido
                        
                        const rolInput = document.getElementById('user_roles');                 
                        const labelrol = document.querySelector('label[for=\"user_roles\"]');
                        if (labelrol) {
                            labelrol.style.display = 'none';
                        }
                        if (rolInput) {                         
                            rolInput.setAttribute('readonly', true); 
                            rolInput.style.display = 'none'; 
                        }
                        const emailInput = document.getElementById('user_email');                 
                        const labelemail = document.querySelector('label[for=\"user_email\"]');
                        if (labelemail) {
                            labelemail.style.display = 'none';
                        }
                        if (emailInput) {                         
                            emailInput.setAttribute('readonly', true); 
                            emailInput.style.display = 'none'; 
                        }

                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));
                }
                
            }

            function closeCorrelativaModal() {
                document.getElementById('correlativaModal').style.display = 'none';
                document.getElementById('modalCorre').innerHTML = '';
            }
            
            function closeClaveModal() {
                document.getElementById('claveModal').style.display = 'none';
                document.getElementById('modalClave').innerHTML = '';
            }


        </script>

        <!-- Modal  Correlativa -->
        <div id=\"correlativaModal\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeCorrelativaModal()\">&times;</span>
                <div id=\"modalCorre\" class=\"submodal\"></div>
            </div>
        </div>

        <!-- Modal Clave -->
        <div id=\"claveModal\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeClaveModal()\">&times;</span>
                <div id=\"modalClave\" class=\"submodal\"></div>
            </div>
        </div>

 

    </div>
{% endblock %}

", "vistasestudiante/index.html.twig", "C:\\xampp\\htdocs\\local\\templates\\vistasestudiante\\index.html.twig");
    }
}
