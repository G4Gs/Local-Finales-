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
class __TwigTemplate_c7c0ba3a7abaa0df20c9a84e8eba6fd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasestudiante/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasestudiante/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vistasestudiante/index.html.twig", 1);
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

        yield "Estudiante";
        
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
           document.getElementById(\"searchs\").style.display = \"none\";

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
             // Extraer todos los ciclos de las filas visibles
    const filas = document.querySelectorAll(`#\${tableId} tbody tr[data-carrera-id=\"\${carreraId}\"]`);
    const ciclos = new Set();

    filas.forEach(fila => {
        const ciclo = fila.children[2]?.textContent?.trim(); // Columna 3: ciclo lectivo
        if (ciclo) {
            ciclos.add(ciclo);
        }
    });

    // Mostrar botones únicos por ciclo
    const contenedor = document.getElementById(\"botonesCiclos\");
    contenedor.innerHTML = \"\"; // Limpiar botones previos

    ciclos.forEach(ciclo => {
        const btn = document.createElement(\"button\");
        btn.textContent = `Ciclo Lectivo: \${ciclo}`;
        btn.onclick = () => filtrarPorCiclo(carreraId, ciclo);
        contenedor.appendChild(btn);
    });

    // Mostrar todas las filas al principio
    filas.forEach(f => f.style.display = \"\");
        }

    </script>


    ";
        // line 302
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 337
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

        // line 338
        yield "<script>
    function filtrarPorCiclo(carreraId, cicloSeleccionado) {
    const filas = document.querySelectorAll(`#tablaCarreraEnCurso tbody tr[data-carrera-id=\"\${carreraId}\"]`);
    filas.forEach(fila => {
        const ciclo = fila.children[2]?.textContent?.trim(); // columna ciclo lectivo
        fila.style.display = (ciclo === cicloSeleccionado) ? \"\" : \"none\";
    });
}

</script>
<script>
    function filterTablaCarrera() {
    let inputNombre = document.getElementById(\"searchNombre\").value.toLowerCase();
    let inputDni = document.getElementById(\"searchDni\").value.toLowerCase();
    let inputTecni = document.getElementById(\"searchTecnicatura\").value.toLowerCase();
    let estadoFiltro = document.getElementById(\"searchEstado\").value.toLowerCase();

    let tabla = document.getElementById(\"tablacarrera\");
    let filas = tabla.getElementsByTagName(\"tr\");

    for (let i = 1; i < filas.length; i++) {
        let celdas = filas[i].getElementsByTagName(\"td\");
        if (celdas.length > 1) {
            let textoEstudiante = celdas[0].textContent.toLowerCase(); // incluye nombre y DNI
            let textoCarrera = celdas[1].textContent.toLowerCase(); // incluye nombre carrera y estado

            let coincideNombre = inputNombre === \"\" || textoEstudiante.includes(inputNombre);
            let coincideDni = inputDni === \"\" || textoEstudiante.includes(inputDni);
            let coincideTecni = inputTecni === \"\" || textoCarrera.includes(inputTecni);
            let coincideEstado = estadoFiltro === \"\" || textoCarrera.includes(estadoFiltro);

            if (coincideNombre && coincideDni && coincideTecni && coincideEstado) {
                filas[i].style.display = \"\";
            } else {
                filas[i].style.display = \"none\";
            }
        }
    }
}

</script>
    <div id=\"body-vistas\">
        <h1>Menú de Gestión del Estudiante</h1>

        <div id=\"searchs\" class=\"search-container\" style=\"margin-bottom: 20px; display: flex; gap: 10px; flex-wrap: wrap; align-items: center;\">
    <input type=\"text\" id=\"searchNombre\" onkeyup=\"filterTablaCarrera()\" placeholder=\"Nombre o Apellido...\" style=\"padding: 5px; font-size: 14px; width: 180px;\">
    
    <input type=\"text\" id=\"searchDni\" onkeyup=\"filterTablaCarrera()\" placeholder=\"DNI...\" style=\"padding: 5px; font-size: 14px; width: 120px;\">
    
    <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTablaCarrera()\" placeholder=\"Tecnicatura...\" style=\"padding: 5px; font-size: 14px; width: 200px;\">
    
    <select id=\"searchEstado\" onchange=\"filterTablaCarrera()\" style=\"padding: 5px; font-size: 14px;\">
        <option value=\"\">Todos</option>
        <option value=\"Cursando\">Cursando</option>
        <option value=\"Terminado\">Terminado</option>
    </select>
</div>

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
        // line 405
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carreras"]) || array_key_exists("carreras", $context) ? $context["carreras"] : (function () { throw new RuntimeError('Variable "carreras" does not exist.', 405, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 406
            yield "                <tr>
                    <td>";
            // line 407
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 407), "html", null, true);
            yield "</td>
                   <td>
                    ";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "tecnicaturaId", [], "any", false, false, false, 409), "nombre", [], "any", false, false, false, 409), "html", null, true);
            yield " -
                    ";
            // line 410
            if (CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "estado", [], "any", false, false, false, 410)) {
                // line 411
                yield "                        <span style=\"color: green;\">Terminado (";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "fin", [], "any", false, false, false, 411)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "fin", [], "any", false, false, false, 411), "d/m/Y"), "html", null, true)) : ("Sin fecha"));
                yield ")</span>
                    ";
            } else {
                // line 413
                yield "                        <span style=\"color: black;\">
                            Cursando
                            ";
                // line 415
                if (CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "inicio", [], "any", false, false, false, 415)) {
                    // line 416
                    yield "                                (desde ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "inicio", [], "any", false, false, false, 416), "Y"), "html", null, true);
                    yield ")
                            ";
                }
                // line 418
                yield "                        </span>
                    ";
            }
            // line 420
            yield "                </td>
                    <td>
                        <button class:\"button\" onclick=\"showTable('tablaCarreraEnCurso', '";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "id", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "id", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "gettecnicaturaId", [], "method", false, false, false, 422), "id", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "gettecnicaturaId", [], "method", false, false, false, 422), "nombre", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "nombre", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "apellido", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "fechaNacimiento", [], "any", false, false, false, 422), "Y-m-d"), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "dniPasaporte", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "genero", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "email", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "telefono", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "partido", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "calle", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "numero", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "piso", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "departamento", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "pasillo", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "pais", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "persona", [], "any", false, false, false, 422), "localidad", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "tituloSec", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "escuelaSec", [], "any", false, false, false, 422), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 422), "anioEgreso", [], "any", false, false, false, 422), "html", null, true);
            yield "')\">Situación académica</button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 429
        if (!$context['_iterated']) {
            // line 426
            yield "                <tr>
                    <td colspan=\"3\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['carrera'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        yield "            </tbody>
        </table>

        <table id=\"tablaCarreraEnCurso\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"14\">
                <button id=\"backButton\" onclick=\"showTable('tablacarrera')\">Volver</button>
                <button onclick=\"openModal1()\">Mis Datos</button> 
                <button id=\"botonImprimir\" onclick=\"imprimirTable('tablaCarreraEnCurso')\">Imprimir certificado</button>  
                <button id=\"cursadaMia\" onclick=\"openCursosModal()\">Inscripción a Cursada</button>                  
                <button id=\"finalMio\" onclick=\"openModal('final')\">Inscripción a Final</button>                       
                <button id=\"claveMia\" onclick=\"openModal('clave')\">Cambiar Clave</button> 

       
                     </th>
                </tr>
                <tr>
                    <th colspan=\"14\">
                         <!-- Botones de ciclo lectivo -->
                    <div id=\"botonesCiclos\" style=\"margin-top: 15px; display: flex; gap: 10px; flex-wrap: wrap;\"></div>

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
        // line 471
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["carreras"]) || array_key_exists("carreras", $context) ? $context["carreras"] : (function () { throw new RuntimeError('Variable "carreras" does not exist.', 471, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carrera"]) {
            // line 472
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 472, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
                // line 473
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadas", [], "any", false, false, false, 473));
                foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                    // line 474
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "alumno", [], "any", false, false, false, 474), "id", [], "any", false, false, false, 474) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "getestudianteId", [], "method", false, false, false, 474), "id", [], "any", false, false, false, 474))) {
                        yield "  
                        ";
                        // line 475
                        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "curso", [], "any", false, false, false, 475), "comision", [], "any", false, false, false, 475), "tecnicatura", [], "any", false, false, false, 475), "id", [], "any", false, false, false, 475) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "gettecnicaturaId", [], "method", false, false, false, 475), "id", [], "any", false, false, false, 475))) {
                            // line 476
                            yield "                            <tr data-carrera-id=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["carrera"], "id", [], "any", false, false, false, 476), "html", null, true);
                            yield "\">
                                <td>";
                            // line 477
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 477), "nombre", [], "any", false, false, false, 477), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 478
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 478), "anio", [], "any", false, false, false, 478), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 479
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 479), "ciclolectivo", [], "any", false, false, false, 479), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 480
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 480), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 481
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 481), "parcial", [], "any", false, false, false, 481), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 482
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 482), "recuperatorio1", [], "any", false, false, false, 482), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 483
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 483), "parcial2", [], "any", false, false, false, 483), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 484
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 484), "recuperatorio2", [], "any", false, false, false, 484), "html", null, true);
                            yield "</td>
                                <td>";
                            // line 485
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "condicion", [], "any", false, false, false, 485), "html", null, true);
                            yield "</td>
                                <td> 
                                    ";
                            // line 488
                            yield "                                    <a href=\"javascript:void(0)\" onclick=\"openModal('view', ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "curso", [], "any", false, false, false, 488), "asignatura", [], "any", false, false, false, 488), "id", [], "any", false, false, false, 488), "html", null, true);
                            yield ", ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "curso", [], "any", false, false, false, 488), "comision", [], "any", false, false, false, 488), "tecnicatura", [], "any", false, false, false, 488), "id", [], "any", false, false, false, 488), "html", null, true);
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
                            // line 506
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 506), "tecnicatura", [], "any", false, false, false, 506), "id", [], "any", false, false, false, 506), "html", null, true);
                            yield "', '";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 506), "id", [], "any", false, false, false, 506), "html", null, true);
                            yield "', '";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 506), "html", null, true);
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
                        // line 519
                        yield "        
                        ";
                    }
                    // line 521
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 522
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['curso'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 523
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['carrera'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 524
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
        // line 612
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
        // line 640
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
        // line 654
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
        // line 692
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 692, $this->source); })()), "user", [], "any", false, false, false, 692), "id", [], "any", false, false, false, 692), "html", null, true);
        yield "';
                    console.log(userId);
                    url = \"";
        // line 694
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  1000 => 694,  995 => 692,  954 => 654,  937 => 640,  906 => 612,  816 => 524,  810 => 523,  804 => 522,  798 => 521,  794 => 519,  773 => 506,  749 => 488,  744 => 485,  740 => 484,  736 => 483,  732 => 482,  728 => 481,  724 => 480,  720 => 479,  716 => 478,  712 => 477,  707 => 476,  705 => 475,  700 => 474,  695 => 473,  690 => 472,  686 => 471,  643 => 430,  634 => 426,  632 => 429,  580 => 422,  576 => 420,  572 => 418,  566 => 416,  564 => 415,  560 => 413,  554 => 411,  552 => 410,  548 => 409,  543 => 407,  540 => 406,  535 => 405,  466 => 338,  453 => 337,  409 => 302,  302 => 196,  237 => 133,  209 => 108,  203 => 104,  106 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
           document.getElementById(\"searchs\").style.display = \"none\";

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
             // Extraer todos los ciclos de las filas visibles
    const filas = document.querySelectorAll(`#\${tableId} tbody tr[data-carrera-id=\"\${carreraId}\"]`);
    const ciclos = new Set();

    filas.forEach(fila => {
        const ciclo = fila.children[2]?.textContent?.trim(); // Columna 3: ciclo lectivo
        if (ciclo) {
            ciclos.add(ciclo);
        }
    });

    // Mostrar botones únicos por ciclo
    const contenedor = document.getElementById(\"botonesCiclos\");
    contenedor.innerHTML = \"\"; // Limpiar botones previos

    ciclos.forEach(ciclo => {
        const btn = document.createElement(\"button\");
        btn.textContent = `Ciclo Lectivo: \${ciclo}`;
        btn.onclick = () => filtrarPorCiclo(carreraId, ciclo);
        contenedor.appendChild(btn);
    });

    // Mostrar todas las filas al principio
    filas.forEach(f => f.style.display = \"\");
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

    
{% endblock %}

{% block body %}
<script>
    function filtrarPorCiclo(carreraId, cicloSeleccionado) {
    const filas = document.querySelectorAll(`#tablaCarreraEnCurso tbody tr[data-carrera-id=\"\${carreraId}\"]`);
    filas.forEach(fila => {
        const ciclo = fila.children[2]?.textContent?.trim(); // columna ciclo lectivo
        fila.style.display = (ciclo === cicloSeleccionado) ? \"\" : \"none\";
    });
}

</script>
<script>
    function filterTablaCarrera() {
    let inputNombre = document.getElementById(\"searchNombre\").value.toLowerCase();
    let inputDni = document.getElementById(\"searchDni\").value.toLowerCase();
    let inputTecni = document.getElementById(\"searchTecnicatura\").value.toLowerCase();
    let estadoFiltro = document.getElementById(\"searchEstado\").value.toLowerCase();

    let tabla = document.getElementById(\"tablacarrera\");
    let filas = tabla.getElementsByTagName(\"tr\");

    for (let i = 1; i < filas.length; i++) {
        let celdas = filas[i].getElementsByTagName(\"td\");
        if (celdas.length > 1) {
            let textoEstudiante = celdas[0].textContent.toLowerCase(); // incluye nombre y DNI
            let textoCarrera = celdas[1].textContent.toLowerCase(); // incluye nombre carrera y estado

            let coincideNombre = inputNombre === \"\" || textoEstudiante.includes(inputNombre);
            let coincideDni = inputDni === \"\" || textoEstudiante.includes(inputDni);
            let coincideTecni = inputTecni === \"\" || textoCarrera.includes(inputTecni);
            let coincideEstado = estadoFiltro === \"\" || textoCarrera.includes(estadoFiltro);

            if (coincideNombre && coincideDni && coincideTecni && coincideEstado) {
                filas[i].style.display = \"\";
            } else {
                filas[i].style.display = \"none\";
            }
        }
    }
}

</script>
    <div id=\"body-vistas\">
        <h1>Menú de Gestión del Estudiante</h1>

        <div id=\"searchs\" class=\"search-container\" style=\"margin-bottom: 20px; display: flex; gap: 10px; flex-wrap: wrap; align-items: center;\">
    <input type=\"text\" id=\"searchNombre\" onkeyup=\"filterTablaCarrera()\" placeholder=\"Nombre o Apellido...\" style=\"padding: 5px; font-size: 14px; width: 180px;\">
    
    <input type=\"text\" id=\"searchDni\" onkeyup=\"filterTablaCarrera()\" placeholder=\"DNI...\" style=\"padding: 5px; font-size: 14px; width: 120px;\">
    
    <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTablaCarrera()\" placeholder=\"Tecnicatura...\" style=\"padding: 5px; font-size: 14px; width: 200px;\">
    
    <select id=\"searchEstado\" onchange=\"filterTablaCarrera()\" style=\"padding: 5px; font-size: 14px;\">
        <option value=\"\">Todos</option>
        <option value=\"Cursando\">Cursando</option>
        <option value=\"Terminado\">Terminado</option>
    </select>
</div>

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
                   <td>
                    {{ carrera.tecnicaturaId.nombre }} -
                    {% if carrera.estado %}
                        <span style=\"color: green;\">Terminado ({{ carrera.fin ? carrera.fin|date('d/m/Y') : 'Sin fecha' }})</span>
                    {% else %}
                        <span style=\"color: black;\">
                            Cursando
                            {% if carrera.inicio %}
                                (desde {{ carrera.inicio|date('Y') }})
                            {% endif %}
                        </span>
                    {% endif %}
                </td>
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
                    <th colspan=\"14\">
                <button id=\"backButton\" onclick=\"showTable('tablacarrera')\">Volver</button>
                <button onclick=\"openModal1()\">Mis Datos</button> 
                <button id=\"botonImprimir\" onclick=\"imprimirTable('tablaCarreraEnCurso')\">Imprimir certificado</button>  
                <button id=\"cursadaMia\" onclick=\"openCursosModal()\">Inscripción a Cursada</button>                  
                <button id=\"finalMio\" onclick=\"openModal('final')\">Inscripción a Final</button>                       
                <button id=\"claveMia\" onclick=\"openModal('clave')\">Cambiar Clave</button> 

       
                     </th>
                </tr>
                <tr>
                    <th colspan=\"14\">
                         <!-- Botones de ciclo lectivo -->
                    <div id=\"botonesCiclos\" style=\"margin-top: 15px; display: flex; gap: 10px; flex-wrap: wrap;\"></div>

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

", "vistasestudiante/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistasestudiante\\index.html.twig");
    }
}
