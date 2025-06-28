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

/* vistaspersona/index.html.twig */
class __TwigTemplate_9dd784fface4d309c9d47dbbcd3450ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistaspersona/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistaspersona/index.html.twig"));

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

        yield "Carga de Recursos Humanos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    ";
        // line 10
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Evaluar si `comId` está definido y no es nulo
            ";
        // line 13
        if ((array_key_exists("alumnoId", $context) &&  !(null === (isset($context["alumnoId"]) || array_key_exists("alumnoId", $context) ? $context["alumnoId"] : (function () { throw new RuntimeError('Variable "alumnoId" does not exist.', 13, $this->source); })())))) {
            // line 14
            yield "                // Llamar a showCursada con los IDs de cursada y tecnicatura
                showTable('tablaalumno');
            ";
        } else {
            // line 17
            yield "            ";
        }
        // line 18
        yield "
            ";
        // line 19
        if ((array_key_exists("docenteId", $context) &&  !(null === (isset($context["docenteId"]) || array_key_exists("docenteId", $context) ? $context["docenteId"] : (function () { throw new RuntimeError('Variable "docenteId" does not exist.', 19, $this->source); })())))) {
            // line 20
            yield "                showTable('tablaDocentes');
            ";
        } else {
            // line 22
            yield "            ";
        }
        // line 23
        yield "
            ";
        // line 24
        if ((array_key_exists("carrerasId", $context) &&  !(null === (isset($context["carrerasId"]) || array_key_exists("carrerasId", $context) ? $context["carrerasId"] : (function () { throw new RuntimeError('Variable "carrerasId" does not exist.', 24, $this->source); })())))) {
            // line 25
            yield "                showTable('tablacarrera');
            ";
        } else {
            // line 27
            yield "            ";
        }
        // line 28
        yield "        });


        function showTable(tableId) {
            const tables = document.querySelectorAll('.tabla_home');
            tables.forEach(table => {
                if (table.id === tableId) {
                    table.style.display = '';
                } else {
                    table.style.display = 'none';
                }
            });
            
            const backButton = document.getElementById('backButton');
            if (tableId === 'tablaTecnicaturas') {
                backButton.style.display = 'none';
            } else {
                backButton.style.display = '';
            }
        }

        function openModal1() {
            const url = \"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_persona");
        yield "\";
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }


        function openModal2() {
            const url = \"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_docente");
        yield "\";
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-3').innerHTML = html;
                    document.getElementById('Modal3').style.display = 'block';

                    
                    const personaInput = document.getElementById('docente_persona');
                    
                    if (personaInput) {
                        // Crear una nueva opción en blanco
                        const blankOption = document.createElement('option');
                        blankOption.value = '';
                        blankOption.text = '';

                        // Insertar la opción en blanco al inicio del select
                        personaInput.insertBefore(blankOption, personaInput.firstChild);
                        // Seleccionar la opción en blanco por defecto
                        personaInput.value = '';
                    }
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }


        function openModal3() {
            const url = \"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_alumno");
        yield "\";
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-2').innerHTML = html;
                    document.getElementById('Modal2').style.display = 'block';

                    const personaInput = document.getElementById('alumno_persona');
                    
                    if (personaInput) {
                        // Crear una nueva opción en blanco
                        const blankOption = document.createElement('option');
                        blankOption.value = '';
                        blankOption.text = '';

                        // Insertar la opción en blanco al inicio del select
                        personaInput.insertBefore(blankOption, personaInput.firstChild);
                        // Seleccionar la opción en blanco por defecto
                        personaInput.value = '';
                    }
                })
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

       ";
        // line 118
        yield " 
       function openModal8() {
            const url = \"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_carreras");
        yield "\";
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-4').innerHTML = html;
                    document.getElementById('Modal4').style.display = 'block';
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        function closeModal1() { 
            document.getElementById('Modal1').style.display = 'none';
            document.getElementById('modalBody-1').innerHTML = '';
        }
        function closeModal2() { 
            document.getElementById('Modal2').style.display = 'none';
            document.getElementById('modalBody-2').innerHTML = '';
        }
        function closeModal3() { 
            document.getElementById('Modal3').style.display = 'none';
            document.getElementById('modalBody-3').innerHTML = '';
        }
        function closeModal4() { 
            document.getElementById('Modal4').style.display = 'none';
            document.getElementById('modalBody-4').innerHTML = '';
        }

        
        function openModal4(AluId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_alumno", ["id" => "__id__"]);
        yield "\"
                .replace('__id__', AluId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';

                    const alumnoInput = document.getElementById('alumno_persona');                 
                    // Ocultar label de persona
                    const labelalumno = document.querySelector('label[for=\"alumno_persona\"]');
                    if (labelalumno) {
                        labelalumno.style.display = 'none';
                    }
                    if (alumnoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input                       
                        alumnoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        alumnoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }


                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        function openModal5(DocId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_docente", ["id" => "__id__"]);
        yield "\"
                .replace('__id__', DocId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';

                    const docenteInput = document.getElementById('docente_persona');                 
                    // Ocultar label de persona
                    const labelpersona = document.querySelector('label[for=\"docente_persona\"]');
                    if (labelpersona) {
                        labelpersona.style.display = 'none';
                    }
                    if (docenteInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input                       
                        docenteInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        docenteInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        
        function openModal6(PerId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 205
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_persona", ["id" => "__id__"]);
        yield "\"
                .replace('__id__', PerId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';


                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }


        function openModal7(CarrId) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_carreras", ["id" => "__id__"]);
        yield "\"
                .replace('__id__', CarrId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';

                    const estudianteInput = document.getElementById('carreras_estudiante_id');                 
                    const labelestudiante = document.querySelector('label[for=\"carreras_estudiante_id\"]');
                    if (labelestudiante) {
                        labelestudiante.style.display = 'none';
                    }
                    if (estudianteInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input                       
                        estudianteInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        estudianteInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }

                    const tecnicaturaInput = document.getElementById('carreras_tecnicatura_id');                 
                    const labeltecnicatura = document.querySelector('label[for=\"carreras_tecnicatura_id\"]');
                    if (labeltecnicatura) {
                        labeltecnicatura.style.display = 'none';
                    }
                    if (tecnicaturaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input                       
                        tecnicaturaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        tecnicaturaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }


                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }


    </script>

    ";
        // line 259
        yield "    
    <script>
        function filterNombre() {
            let searchNombre = document.getElementById(\"searchNombre\").value.toLowerCase();
            let table = document.getElementById(\"tablapersonas\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let nombre = cells[0].textContent.toLowerCase();
                    if (nombre.includes(searchNombre)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
        function filterApellido() {
            let searchApellido = document.getElementById(\"searchApellido\").value.toLowerCase();
            let table = document.getElementById(\"tablapersonas\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let apellido = cells[1].textContent.toLowerCase();
                    if (apellido.includes(searchApellido)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
        function filterDNI() {
            let searchDNI = document.getElementById(\"searchDNI\").value.toLowerCase();
            let table = document.getElementById(\"tablapersonas\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let dniPasaporte = cells[2].textContent.toLowerCase();
                    if (dniPasaporte.includes(searchDNI)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
    </script> 
    
    ";
        // line 311
        yield "    
    <script>
        function filterDocenteaqui() {
            let searchDocente = document.getElementById(\"searchDocente\").value.toLowerCase();
            let table = document.getElementById(\"tablaDocentes\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 2; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let docente = cells[0].textContent.toLowerCase();
                    if (docente.includes(searchDocente)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }

    </script>    

    ";
        // line 332
        yield "    
    <script>
        function filterAlumnoaqui() {
            let searchAlumno = document.getElementById(\"searchAlumno\").value.toLowerCase();
            let table = document.getElementById(\"tablaalumno\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 2; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let alumno = cells[0].textContent.toLowerCase();
                    if (alumno.includes(searchAlumno)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }

    </script>   

    ";
        // line 353
        yield "    
    <script>
        function filterAlumno2aqui() {
            let searchAlumno = document.getElementById(\"searchAlumno2\").value.toLowerCase();
            let table = document.getElementById(\"tablacarrera\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 2; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let alumno = cells[0].textContent.toLowerCase();
                    if (alumno.includes(searchAlumno)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>  

    ";
        // line 374
        yield "    <script>
            function filterEstudiante() {
                let searchNombre = document.getElementById(\"searchEstudiante\").value.toLowerCase();
                let dropdown = document.getElementById(\"alumno_persona\"); 
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

            function filterDocente() {
                let searchNombre = document.getElementById(\"searchDocente\").value.toLowerCase();
                let dropdown = document.getElementById(\"docente_persona\"); 
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

            function filterCestudiantes() {
                let searchNombre = document.getElementById(\"searchCarrerasEstudiantes\").value.toLowerCase();
                let dropdown = document.getElementById(\"carreras_estudiante_id\"); 
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

            function filterCtecnicaturas() {
                let searchNombre = document.getElementById(\"searchCarrerasTecnicaturas\").value.toLowerCase();
                let dropdown = document.getElementById(\"carreras_tecnicatura_id\"); 
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

    // line 438
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

        // line 439
        yield "
    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Recursos Humanos</h1>
        <table class=\"tabla_home\" id=\"tablaTecnicaturas\" border=\"1\">
            <thead>
                <tr>
                    <th>Personas</th>
                    <th>Docentes</th>
                    <th>Estudiantes</th>
                    <th>CarreraXEstudiante</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <button class:\"button\" onclick=\"showTable('tablapersonas')\">Ver</button>
                        <button onclick=\"openModal1()\" class:\"button\">Crear</button>
                    </td>
                    <td>
                        <button class:\"button\" onclick=\"showTable('tablaDocentes')\">Ver</button>
                        <button onclick=\"openModal2()\" class=\"btn-primary\">Crear</button>
                    </td>
                    <td>
                        <buttonclass:\"button\" onclick=\"showTable('tablaalumno')\">Ver</buttonclass:>
                        <button onclick=\"openModal3()\"class:\"button\">Crear</button>
                    </td>
                    <td>
                        <button class:\"button\" onclick=\"showTable('tablacarrera')\">Ver</button>
                        <button onclick=\"openModal8()\" class:\"button\">Crear</button>
                    </td>

                </tr>

            </tbody>
        </table>

        ";
        // line 476
        yield "        <button id=\"backButton\" class:\"button\" onclick=\"showTable('tablaTecnicaturas')\" style=\"display: none;\">Regresar</button>


        ";
        // line 480
        yield "        <table id=\"tablapersonas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"4\">
                        <input type=\"text\" id=\"searchNombre\" onkeyup=\"filterNombre()\" placeholder=\"Buscar por Nombre\">
                        <input type=\"text\" id=\"searchApellido\" onkeyup=\"filterApellido()\" placeholder=\"Buscar por Apellido\">
                        <input type=\"text\" id=\"searchDNI\" onkeyup=\"filterDNI()\" placeholder=\"Buscar por DNI\">
                    </th>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dni/Pasaporte</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 497
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personas"]) || array_key_exists("personas", $context) ? $context["personas"] : (function () { throw new RuntimeError('Variable "personas" does not exist.', 497, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 498
            yield "                <tr>
                    <td>";
            // line 499
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "nombre", [], "any", false, false, false, 499), "html", null, true);
            yield "</td>
                    <td>";
            // line 500
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "apellido", [], "any", false, false, false, 500), "html", null, true);
            yield "</td>
                    <td>";
            // line 501
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "dniPasaporte", [], "any", false, false, false, 501), "html", null, true);
            yield "</td>
                    <td>
                        <button class:\"button\" onclick=\"openModal6(";
            // line 503
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "id", [], "any", false, false, false, 503), "html", null, true);
            yield ")\" >Editar</button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 506
        if (!$context['_iterated']) {
            // line 507
            yield "                <tr>
                    <td colspan=\"15\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['persona'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 511
        yield "            </tbody>
        </table>       

        ";
        // line 515
        yield "        <table id=\"tablaDocentes\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"3\">
                        Buscar Docente por Nombre, Apellido o DNI
                        <input type=\"text\" id=\"searchDocente\" onkeyup=\"filterDocenteaqui()\" placeholder=\"Buscar Docente...\">
                    </th>
                </tr>
                <tr>
                    <th>Docente</th>
                    <th>Foja</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 530
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["docentes"]) || array_key_exists("docentes", $context) ? $context["docentes"] : (function () { throw new RuntimeError('Variable "docentes" does not exist.', 530, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["docente"]) {
            // line 531
            yield "                <tr>
                    <td>";
            // line 532
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["docente"], "html", null, true);
            yield "</td>
                    <td>";
            // line 533
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "foja", [], "any", false, false, false, 533), "html", null, true);
            yield "</td>
                    <td>
                        <button class:\"button\" onclick=\"openModal5(";
            // line 535
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "id", [], "any", false, false, false, 535), "html", null, true);
            yield ")\" >Editar</button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 538
        if (!$context['_iterated']) {
            // line 539
            yield "                <tr>
                    <td colspan=\"3\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['docente'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 543
        yield "            </tbody>
        </table>


        ";
        // line 548
        yield "        <table id=\"tablaalumno\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"5\">
                        Buscar Estudiante por Nombre, Apellido o DNI
                        <input type=\"text\" id=\"searchAlumno\" onkeyup=\"filterAlumnoaqui()\" placeholder=\"Buscar Estudiante...\">
                    </th>
                </tr>
                <tr>
                    <th>Estudiante</th>
                    <th>Título Secundaria</th>
                    <th>Escuela Secundaria</th>
                    <th>Año de Egreso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 565
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alumnos"]) || array_key_exists("alumnos", $context) ? $context["alumnos"] : (function () { throw new RuntimeError('Variable "alumnos" does not exist.', 565, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 566
            yield "                <tr>
                    <td>";
            // line 567
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["alumno"], "html", null, true);
            yield "</td>
                    <td>";
            // line 568
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "tituloSec", [], "any", false, false, false, 568), "html", null, true);
            yield "</td>
                    <td>";
            // line 569
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "escuelaSec", [], "any", false, false, false, 569), "html", null, true);
            yield "</td>
                    <td>";
            // line 570
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "anioEgreso", [], "any", false, false, false, 570), "html", null, true);
            yield "</td>
                    <td>
                        <button class:\"button\" onclick=\"openModal4(";
            // line 572
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "id", [], "any", false, false, false, 572), "html", null, true);
            yield ")\" >Editar</button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 575
        if (!$context['_iterated']) {
            // line 576
            yield "                <tr>
                    <td colspan=\"5\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['alumno'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        yield "            </tbody>
        </table>

        ";
        // line 584
        yield "        <table id=\"tablacarrera\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"6\">
                        Buscar Estudiante por Nombre, Apellido o DNI
                        <input type=\"text\" id=\"searchAlumno2\" onkeyup=\"filterAlumno2aqui()\" placeholder=\"Buscar Estudiante...\">
                    </th>
                </tr>
                <tr>
                    <th>Estudiante</th>
                    <th>Carrera</th>
                    <th>Estado</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 602
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carreras"]) || array_key_exists("carreras", $context) ? $context["carreras"] : (function () { throw new RuntimeError('Variable "carreras" does not exist.', 602, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 603
            yield "                <tr>
                    <td>";
            // line 604
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 604), "html", null, true);
            yield "</td>
                    <td>";
            // line 605
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "gettecnicaturaId", [], "method", false, false, false, 605), "nombre", [], "any", false, false, false, 605), "html", null, true);
            yield "</td>
                    <td>";
            // line 606
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "estado", [], "any", false, false, false, 606)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Yes") : ("No"));
            yield "</td>
                    <td>";
            // line 607
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "inicio", [], "any", false, false, false, 607)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "inicio", [], "any", false, false, false, 607), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 608
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "fin", [], "any", false, false, false, 608)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "fin", [], "any", false, false, false, 608), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>    
                    <td>
                        <button class:\"button\" onclick=\"openModal7(";
            // line 610
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "id", [], "any", false, false, false, 610), "html", null, true);
            yield ")\" >Editar</button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 613
        if (!$context['_iterated']) {
            // line 614
            yield "                <tr>
                    <td colspan=\"5\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['carrera'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 618
        yield "            </tbody>
        </table>



        <!-- Modal1 Crear persona y editar varios!!!-->
        <div id=\"Modal1\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content1\">
                    <span class=\"close\" onclick=\"closeModal1()\">&times;</span>
                    <div id=\"modalBody-1\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>


        
        <!-- Modal2 para crear Estudiantes!!!-->
        <div id=\"Modal2\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div id=\"modal-cursadas\">
                    <div id=\"searchsEs\" class=\"search-container\">
                        <h6><label for=\"searchEstudiante\">Buscar Persona:</label><h\\6>
                        <input type=\"text\" id=\"searchEstudiante\" onkeyup=\"filterEstudiante()\" placeholder=\"Buscar persona...\">
                    </div>
                    <div class=\"modal-content2\">
                        <span class=\"close\" onclick=\"closeModal2()\">&times;</span>
                        <div id=\"modalBody-2\" class=\"submodal\"></div>
                    </div>
                </div>
            </div>    
        </div>

        <!-- Modal3 para crear Docentes!!!-->
        <div id=\"Modal3\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div id=\"modal-cursadas\">
                    <div id=\"searchsEs\" class=\"search-container\">
                        <h6><label for=\"searchDocente\">Buscar Persona:</label><\\h6>
                        <input type=\"text\" id=\"searchDocente\" onkeyup=\"filterDocente()\" placeholder=\"Buscar persona...\">
                    </div>
                    <div class=\"modal-content3\">
                        <span class=\"close\" onclick=\"closeModal3()\">&times;</span>
                        <div id=\"modalBody-3\" class=\"submodal\"></div>
                    </div>
                </div>
            </div>    
        </div>

        <!-- Modal4 para crear Carreras!!!-->
        <div id=\"Modal4\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div id=\"modal-cursadas\">
                    <div id=\"searchsEs\" class=\"search-container\">
                        <h6><label for=\"searchCarrerasEstudiantes\">Buscar Estudiante:</label><\\h6>
                        <h6><input type=\"text\" id=\"searchCarrerasEstudiantes\" onkeyup=\"filterCestudiantes()\" placeholder=\"Buscar estudiante...\"><\\h6>
                        <h6><label for=\"searchCarrerasEstudiantes\">Buscar Tecnicatura:</label><\\h6>
                        <h6><input type=\"text\" id=\"searchCarrerasTecnicaturas\" onkeyup=\"filterCtecnicaturas()\" placeholder=\"Buscar tecnicatura...\"><\\h6>
                    </div>
                    <div class=\"modal-content4\">
                        <span class=\"close\" onclick=\"closeModal4()\">&times;</span>
                        <div id=\"modalBody-4\" class=\"submodal\"></div>
                    </div>
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
        return "vistaspersona/index.html.twig";
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
        return array (  915 => 618,  906 => 614,  904 => 613,  896 => 610,  891 => 608,  887 => 607,  883 => 606,  879 => 605,  875 => 604,  872 => 603,  867 => 602,  847 => 584,  842 => 580,  833 => 576,  831 => 575,  823 => 572,  818 => 570,  814 => 569,  810 => 568,  806 => 567,  803 => 566,  798 => 565,  779 => 548,  773 => 543,  764 => 539,  762 => 538,  754 => 535,  749 => 533,  745 => 532,  742 => 531,  737 => 530,  720 => 515,  715 => 511,  706 => 507,  704 => 506,  696 => 503,  691 => 501,  687 => 500,  683 => 499,  680 => 498,  675 => 497,  656 => 480,  651 => 476,  613 => 439,  600 => 438,  527 => 374,  505 => 353,  482 => 332,  459 => 311,  405 => 259,  365 => 222,  345 => 205,  316 => 179,  286 => 152,  251 => 120,  247 => 118,  219 => 93,  187 => 64,  170 => 50,  146 => 28,  143 => 27,  139 => 25,  137 => 24,  134 => 23,  131 => 22,  127 => 20,  125 => 19,  122 => 18,  119 => 17,  114 => 14,  112 => 13,  107 => 10,  101 => 7,  88 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Carga de Recursos Humanos{% endblock %}


{% block javascripts %}
    {{ parent() }}

    {#sesiones, crear y editar personas/docentes/alumnos#}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Evaluar si `comId` está definido y no es nulo
            {% if alumnoId is defined and alumnoId is not null %}
                // Llamar a showCursada con los IDs de cursada y tecnicatura
                showTable('tablaalumno');
            {% else %}
            {% endif %}

            {% if docenteId is defined and docenteId is not null %}
                showTable('tablaDocentes');
            {% else %}
            {% endif %}

            {% if carrerasId is defined and carrerasId is not null %}
                showTable('tablacarrera');
            {% else %}
            {% endif %}
        });


        function showTable(tableId) {
            const tables = document.querySelectorAll('.tabla_home');
            tables.forEach(table => {
                if (table.id === tableId) {
                    table.style.display = '';
                } else {
                    table.style.display = 'none';
                }
            });
            
            const backButton = document.getElementById('backButton');
            if (tableId === 'tablaTecnicaturas') {
                backButton.style.display = 'none';
            } else {
                backButton.style.display = '';
            }
        }

        function openModal1() {
            const url = \"{{ path('crear_persona') }}\";
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }


        function openModal2() {
            const url = \"{{ path('crear_docente') }}\";
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-3').innerHTML = html;
                    document.getElementById('Modal3').style.display = 'block';

                    
                    const personaInput = document.getElementById('docente_persona');
                    
                    if (personaInput) {
                        // Crear una nueva opción en blanco
                        const blankOption = document.createElement('option');
                        blankOption.value = '';
                        blankOption.text = '';

                        // Insertar la opción en blanco al inicio del select
                        personaInput.insertBefore(blankOption, personaInput.firstChild);
                        // Seleccionar la opción en blanco por defecto
                        personaInput.value = '';
                    }
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }


        function openModal3() {
            const url = \"{{ path('crear_alumno') }}\";
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-2').innerHTML = html;
                    document.getElementById('Modal2').style.display = 'block';

                    const personaInput = document.getElementById('alumno_persona');
                    
                    if (personaInput) {
                        // Crear una nueva opción en blanco
                        const blankOption = document.createElement('option');
                        blankOption.value = '';
                        blankOption.text = '';

                        // Insertar la opción en blanco al inicio del select
                        personaInput.insertBefore(blankOption, personaInput.firstChild);
                        // Seleccionar la opción en blanco por defecto
                        personaInput.value = '';
                    }
                })
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

       {# Modal para crear Carreas Alumnos-x-tecnicatura #} 
       function openModal8() {
            const url = \"{{ path('crear_carreras') }}\";
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-4').innerHTML = html;
                    document.getElementById('Modal4').style.display = 'block';
                    
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        function closeModal1() { 
            document.getElementById('Modal1').style.display = 'none';
            document.getElementById('modalBody-1').innerHTML = '';
        }
        function closeModal2() { 
            document.getElementById('Modal2').style.display = 'none';
            document.getElementById('modalBody-2').innerHTML = '';
        }
        function closeModal3() { 
            document.getElementById('Modal3').style.display = 'none';
            document.getElementById('modalBody-3').innerHTML = '';
        }
        function closeModal4() { 
            document.getElementById('Modal4').style.display = 'none';
            document.getElementById('modalBody-4').innerHTML = '';
        }

        
        function openModal4(AluId) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('editar_alumno', { 'id': '__id__' }) }}\"
                .replace('__id__', AluId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';

                    const alumnoInput = document.getElementById('alumno_persona');                 
                    // Ocultar label de persona
                    const labelalumno = document.querySelector('label[for=\"alumno_persona\"]');
                    if (labelalumno) {
                        labelalumno.style.display = 'none';
                    }
                    if (alumnoInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input                       
                        alumnoInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        alumnoInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }


                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        function openModal5(DocId) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('editar_docente', { 'id': '__id__' }) }}\"
                .replace('__id__', DocId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';

                    const docenteInput = document.getElementById('docente_persona');                 
                    // Ocultar label de persona
                    const labelpersona = document.querySelector('label[for=\"docente_persona\"]');
                    if (labelpersona) {
                        labelpersona.style.display = 'none';
                    }
                    if (docenteInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input                       
                        docenteInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        docenteInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        
        function openModal6(PerId) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('editar_persona', { 'id': '__id__' }) }}\"
                .replace('__id__', PerId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';


                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }


        function openModal7(CarrId) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('editar_carreras', { 'id': '__id__' }) }}\"
                .replace('__id__', CarrId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';

                    const estudianteInput = document.getElementById('carreras_estudiante_id');                 
                    const labelestudiante = document.querySelector('label[for=\"carreras_estudiante_id\"]');
                    if (labelestudiante) {
                        labelestudiante.style.display = 'none';
                    }
                    if (estudianteInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input                       
                        estudianteInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        estudianteInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }

                    const tecnicaturaInput = document.getElementById('carreras_tecnicatura_id');                 
                    const labeltecnicatura = document.querySelector('label[for=\"carreras_tecnicatura_id\"]');
                    if (labeltecnicatura) {
                        labeltecnicatura.style.display = 'none';
                    }
                    if (tecnicaturaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input                       
                        tecnicaturaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                        tecnicaturaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                    }


                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }


    </script>

    {#Busquedas en la tabla personas#}    
    <script>
        function filterNombre() {
            let searchNombre = document.getElementById(\"searchNombre\").value.toLowerCase();
            let table = document.getElementById(\"tablapersonas\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let nombre = cells[0].textContent.toLowerCase();
                    if (nombre.includes(searchNombre)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
        function filterApellido() {
            let searchApellido = document.getElementById(\"searchApellido\").value.toLowerCase();
            let table = document.getElementById(\"tablapersonas\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let apellido = cells[1].textContent.toLowerCase();
                    if (apellido.includes(searchApellido)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
        function filterDNI() {
            let searchDNI = document.getElementById(\"searchDNI\").value.toLowerCase();
            let table = document.getElementById(\"tablapersonas\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let dniPasaporte = cells[2].textContent.toLowerCase();
                    if (dniPasaporte.includes(searchDNI)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
    </script> 
    
    {#Busquedas en la tabla Docentes#}    
    <script>
        function filterDocenteaqui() {
            let searchDocente = document.getElementById(\"searchDocente\").value.toLowerCase();
            let table = document.getElementById(\"tablaDocentes\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 2; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let docente = cells[0].textContent.toLowerCase();
                    if (docente.includes(searchDocente)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }

    </script>    

    {#Busquedas en la tabla Alumnos#}    
    <script>
        function filterAlumnoaqui() {
            let searchAlumno = document.getElementById(\"searchAlumno\").value.toLowerCase();
            let table = document.getElementById(\"tablaalumno\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 2; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let alumno = cells[0].textContent.toLowerCase();
                    if (alumno.includes(searchAlumno)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }

    </script>   

    {#Busquedas en la tabla Carrera/s#}    
    <script>
        function filterAlumno2aqui() {
            let searchAlumno = document.getElementById(\"searchAlumno2\").value.toLowerCase();
            let table = document.getElementById(\"tablacarrera\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 2; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let alumno = cells[0].textContent.toLowerCase();
                    if (alumno.includes(searchAlumno)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>  

    {#Filtros modales Estudiante y Docente#}
    <script>
            function filterEstudiante() {
                let searchNombre = document.getElementById(\"searchEstudiante\").value.toLowerCase();
                let dropdown = document.getElementById(\"alumno_persona\"); 
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

            function filterDocente() {
                let searchNombre = document.getElementById(\"searchDocente\").value.toLowerCase();
                let dropdown = document.getElementById(\"docente_persona\"); 
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

            function filterCestudiantes() {
                let searchNombre = document.getElementById(\"searchCarrerasEstudiantes\").value.toLowerCase();
                let dropdown = document.getElementById(\"carreras_estudiante_id\"); 
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

            function filterCtecnicaturas() {
                let searchNombre = document.getElementById(\"searchCarrerasTecnicaturas\").value.toLowerCase();
                let dropdown = document.getElementById(\"carreras_tecnicatura_id\"); 
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

    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Recursos Humanos</h1>
        <table class=\"tabla_home\" id=\"tablaTecnicaturas\" border=\"1\">
            <thead>
                <tr>
                    <th>Personas</th>
                    <th>Docentes</th>
                    <th>Estudiantes</th>
                    <th>CarreraXEstudiante</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <button class:\"button\" onclick=\"showTable('tablapersonas')\">Ver</button>
                        <button onclick=\"openModal1()\" class:\"button\">Crear</button>
                    </td>
                    <td>
                        <button class:\"button\" onclick=\"showTable('tablaDocentes')\">Ver</button>
                        <button onclick=\"openModal2()\" class=\"btn-primary\">Crear</button>
                    </td>
                    <td>
                        <buttonclass:\"button\" onclick=\"showTable('tablaalumno')\">Ver</buttonclass:>
                        <button onclick=\"openModal3()\"class:\"button\">Crear</button>
                    </td>
                    <td>
                        <button class:\"button\" onclick=\"showTable('tablacarrera')\">Ver</button>
                        <button onclick=\"openModal8()\" class:\"button\">Crear</button>
                    </td>

                </tr>

            </tbody>
        </table>

        {# Botón de regreso #}
        <button id=\"backButton\" class:\"button\" onclick=\"showTable('tablaTecnicaturas')\" style=\"display: none;\">Regresar</button>


        {# Personas Vistas #}
        <table id=\"tablapersonas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"4\">
                        <input type=\"text\" id=\"searchNombre\" onkeyup=\"filterNombre()\" placeholder=\"Buscar por Nombre\">
                        <input type=\"text\" id=\"searchApellido\" onkeyup=\"filterApellido()\" placeholder=\"Buscar por Apellido\">
                        <input type=\"text\" id=\"searchDNI\" onkeyup=\"filterDNI()\" placeholder=\"Buscar por DNI\">
                    </th>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dni/Pasaporte</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {% for persona in personas %}
                <tr>
                    <td>{{ persona.nombre }}</td>
                    <td>{{ persona.apellido }}</td>
                    <td>{{ persona.dniPasaporte }}</td>
                    <td>
                        <button class:\"button\" onclick=\"openModal6({{ persona.id }})\" >Editar</button>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"15\">No se encontraron registros</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>       

        {# Docentes Vistas #}
        <table id=\"tablaDocentes\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"3\">
                        Buscar Docente por Nombre, Apellido o DNI
                        <input type=\"text\" id=\"searchDocente\" onkeyup=\"filterDocenteaqui()\" placeholder=\"Buscar Docente...\">
                    </th>
                </tr>
                <tr>
                    <th>Docente</th>
                    <th>Foja</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {% for docente in docentes %}
                <tr>
                    <td>{{ docente }}</td>
                    <td>{{ docente.foja}}</td>
                    <td>
                        <button class:\"button\" onclick=\"openModal5({{ docente.id }})\" >Editar</button>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">No se encontraron registros</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>


        {# Estudiantes Vistas #}
        <table id=\"tablaalumno\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"5\">
                        Buscar Estudiante por Nombre, Apellido o DNI
                        <input type=\"text\" id=\"searchAlumno\" onkeyup=\"filterAlumnoaqui()\" placeholder=\"Buscar Estudiante...\">
                    </th>
                </tr>
                <tr>
                    <th>Estudiante</th>
                    <th>Título Secundaria</th>
                    <th>Escuela Secundaria</th>
                    <th>Año de Egreso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {% for alumno in alumnos %}
                <tr>
                    <td>{{ alumno }}</td>
                    <td>{{ alumno.tituloSec }}</td>
                    <td>{{ alumno.escuelaSec }}</td>
                    <td>{{ alumno.anioEgreso }}</td>
                    <td>
                        <button class:\"button\" onclick=\"openModal4({{ alumno.id }})\" >Editar</button>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">No se encontraron registros</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        {# Carrera/s Vistas #}
        <table id=\"tablacarrera\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"6\">
                        Buscar Estudiante por Nombre, Apellido o DNI
                        <input type=\"text\" id=\"searchAlumno2\" onkeyup=\"filterAlumno2aqui()\" placeholder=\"Buscar Estudiante...\">
                    </th>
                </tr>
                <tr>
                    <th>Estudiante</th>
                    <th>Carrera</th>
                    <th>Estado</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {% for carrera in carreras %}
                <tr>
                    <td>{{ carrera.getestudianteId() }}</td>
                    <td>{{ carrera.gettecnicaturaId().nombre }}</td>
                    <td>{{ carrera.estado ? 'Yes' : 'No' }}</td>
                    <td>{{ carrera.inicio ? carrera.inicio|date('Y-m-d') : '' }}</td>
                    <td>{{ carrera.fin ? carrera.fin|date('Y-m-d') : '' }}</td>    
                    <td>
                        <button class:\"button\" onclick=\"openModal7({{ carrera.id }})\" >Editar</button>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">No se encontraron registros</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>



        <!-- Modal1 Crear persona y editar varios!!!-->
        <div id=\"Modal1\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content1\">
                    <span class=\"close\" onclick=\"closeModal1()\">&times;</span>
                    <div id=\"modalBody-1\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>


        
        <!-- Modal2 para crear Estudiantes!!!-->
        <div id=\"Modal2\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div id=\"modal-cursadas\">
                    <div id=\"searchsEs\" class=\"search-container\">
                        <h6><label for=\"searchEstudiante\">Buscar Persona:</label><h\\6>
                        <input type=\"text\" id=\"searchEstudiante\" onkeyup=\"filterEstudiante()\" placeholder=\"Buscar persona...\">
                    </div>
                    <div class=\"modal-content2\">
                        <span class=\"close\" onclick=\"closeModal2()\">&times;</span>
                        <div id=\"modalBody-2\" class=\"submodal\"></div>
                    </div>
                </div>
            </div>    
        </div>

        <!-- Modal3 para crear Docentes!!!-->
        <div id=\"Modal3\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div id=\"modal-cursadas\">
                    <div id=\"searchsEs\" class=\"search-container\">
                        <h6><label for=\"searchDocente\">Buscar Persona:</label><\\h6>
                        <input type=\"text\" id=\"searchDocente\" onkeyup=\"filterDocente()\" placeholder=\"Buscar persona...\">
                    </div>
                    <div class=\"modal-content3\">
                        <span class=\"close\" onclick=\"closeModal3()\">&times;</span>
                        <div id=\"modalBody-3\" class=\"submodal\"></div>
                    </div>
                </div>
            </div>    
        </div>

        <!-- Modal4 para crear Carreras!!!-->
        <div id=\"Modal4\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div id=\"modal-cursadas\">
                    <div id=\"searchsEs\" class=\"search-container\">
                        <h6><label for=\"searchCarrerasEstudiantes\">Buscar Estudiante:</label><\\h6>
                        <h6><input type=\"text\" id=\"searchCarrerasEstudiantes\" onkeyup=\"filterCestudiantes()\" placeholder=\"Buscar estudiante...\"><\\h6>
                        <h6><label for=\"searchCarrerasEstudiantes\">Buscar Tecnicatura:</label><\\h6>
                        <h6><input type=\"text\" id=\"searchCarrerasTecnicaturas\" onkeyup=\"filterCtecnicaturas()\" placeholder=\"Buscar tecnicatura...\"><\\h6>
                    </div>
                    <div class=\"modal-content4\">
                        <span class=\"close\" onclick=\"closeModal4()\">&times;</span>
                        <div id=\"modalBody-4\" class=\"submodal\"></div>
                    </div>
                </div>
            </div>    
        </div>

        <button id=\"backButton\" style=\"display: none;\" class=\"btn-primary\">Regresar</button>
    </div>
{% endblock %}
", "vistaspersona/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistaspersona\\index.html.twig");
    }
}
