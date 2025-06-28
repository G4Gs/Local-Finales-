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

/* vistasdocente/lista.html.twig */
class __TwigTemplate_eeb316a574eb3e784084dc81651ee5a2 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasdocente/lista.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasdocente/lista.html.twig"));

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

        yield "Lista de Asistencia";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/VerAsistencias.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "<h1>Lista de Asistencia</h1>

<table id=\"EstadisticasModal\" class=\"tablillacursada\" border=\"1\">

<div class=\"cuadro-referencias-horizontal\">
    <strong>Referencias:</strong>
    <span><strong>P</strong>: Presente</span> |
    <span><strong>A</strong>: Ausente</span> |
    <span><strong>T</strong>: Media falta</span> |
    <span><strong>J</strong>: Justificada</span> |
    <span><strong>N</strong>: No marcado</span>
</div>

    <thead>
        <tr>
            <th colspan=\"7\" class=\"nombre-tecnicatura\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["curso"]) || array_key_exists("curso", $context) ? $context["curso"] : (function () { throw new RuntimeError('Variable "curso" does not exist.', 26, $this->source); })()), "asignatura", [], "any", false, false, false, 26), "tecnicatura", [], "any", false, false, false, 26), "nombre", [], "any", false, false, false, 26), "html", null, true);
        yield "</th>
        </tr>
        <tr>
            <th colspan=\"2\" class=\"Docente\">
                Docente:
                <p style=\"margin: 0;\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["curso"]) || array_key_exists("curso", $context) ? $context["curso"] : (function () { throw new RuntimeError('Variable "curso" does not exist.', 31, $this->source); })()), "getNombresDocentes", [], "method", false, false, false, 31), "html", null, true);
        yield "</p>
            </th>
            <th colspan=\"5\" class=\"nombre-asignatura\">
                Asignatura:
                <p> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["curso"]) || array_key_exists("curso", $context) ? $context["curso"] : (function () { throw new RuntimeError('Variable "curso" does not exist.', 35, $this->source); })()), "asignatura", [], "any", false, false, false, 35), "nombre", [], "any", false, false, false, 35), "html", null, true);
        yield " - Comisión ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["curso"]) || array_key_exists("curso", $context) ? $context["curso"] : (function () { throw new RuntimeError('Variable "curso" does not exist.', 35, $this->source); })()), "comision", [], "any", false, false, false, 35), "comision", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
            </th>
        </tr>
        <tr id=\"fechas-header\">
            <th>Apellido</th>
            <th>Nombre</th>
            <!-- Encabezados dinámicos de fechas -->
        </tr>
    </thead>
    <tbody>
        <!-- Filas de alumnos cargadas dinámicamente -->
    </tbody>
</table>

<button id=\"verListaButton\" class=\"btn-primary\">Volver</button>

";
        // line 52
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRECEPTOR")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 53
            yield "    <button id=\"guardarCambiosButton\" class=\"btn-success\">Guardar Cambios</button>
";
        }
        // line 55
        yield "
<script>
const cursoId = ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["curso"]) || array_key_exists("curso", $context) ? $context["curso"] : (function () { throw new RuntimeError('Variable "curso" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
        yield ";

// Rutas relativas generadas con Symfony path()
const rutaCalendarioFechas = \"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_calendario_fechas", ["cursoId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["curso"]) || array_key_exists("curso", $context) ? $context["curso"] : (function () { throw new RuntimeError('Variable "curso" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
        yield "\";
const rutaAsistenciasPorFecha = \"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asistencias_por_fecha", ["cursoId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["curso"]) || array_key_exists("curso", $context) ? $context["curso"] : (function () { throw new RuntimeError('Variable "curso" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
        yield "\";
const rutaGuardarAsistencia = \"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guardar_asistencia");
        yield "\";

const puedeEditar = ";
        // line 64
        yield (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRECEPTOR")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN"))) ? ("true") : ("false"));
        yield ";

const theadRow = document.querySelector('#fechas-header');
const tbody = document.querySelector('#EstadisticasModal tbody');

const opciones = ['P', 'A', 'T', 'J', 'N']; // Presente, Ausente, Media falta, Justificada, No marcado

function crearSelect(valorSeleccionado) {
    const select = document.createElement('select');
    opciones.forEach(opcion => {
        const option = document.createElement('option');
        option.value = opcion;
        option.textContent = opcion;
        if (opcion === valorSeleccionado) option.selected = true;
        select.appendChild(option);
    });
    return select;
}

async function cargarDatos() {
    try {
        const resFechas = await fetch(rutaCalendarioFechas);
        const fechas = await resFechas.json();

        // Limpiar columnas de fechas anteriores
        while (theadRow.children.length > 2) {
            theadRow.removeChild(theadRow.lastChild);
        }

        fechas.forEach(fechaObj => {
            const th = document.createElement('th');
            const partes = fechaObj.fecha.split('-');
            const dia = parseInt(partes[2], 10);
            const mes = parseInt(partes[1], 10);
            th.textContent = `\${dia}/\${mes}`;
            th.setAttribute('data-id', fechaObj.id);
            theadRow.appendChild(th);
        });

        const resAlumnos = await fetch(rutaAsistenciasPorFecha);
        const alumnos = await resAlumnos.json();
        tbody.innerHTML = '';

        alumnos.forEach(alumno => {
            const tr = document.createElement('tr');
            tr.setAttribute('data-cursada-id', alumno.id);
            tr.innerHTML = `<td>\${alumno.apellido}</td><td>\${alumno.nombre}</td>`;

            fechas.forEach(fechaObj => {
                const td = document.createElement('td');
                let asistencia = 'N'; // No marcado

                const encontrada = alumno.asistencias.find(a => a.fecha === fechaObj.fecha);
                if (encontrada) {
                    const valor = encontrada.asistencia;
                    asistencia = valor === 'Presente' ? 'P' :
                                 valor === 'Ausente' ? 'A' :
                                 valor === 'Media falta' ? 'T' :
                                 valor === 'Justificada' ? 'J' : 'N';
                }

                td.textContent = asistencia;
                td.style.cursor = puedeEditar ? \"pointer\" : \"default\";

                if(puedeEditar) {
                    td.addEventListener('click', () => {
                        if (td.querySelector('select')) return;

                        const select = crearSelect(asistencia);
                        td.innerHTML = '';
                        td.appendChild(select);
                        select.focus();

                        select.addEventListener('blur', actualizar);
                        select.addEventListener('change', actualizar);

                        function actualizar() {
                            const nuevo = select.value;
                            td.textContent = nuevo;
                            td.classList.remove(\"modificado\");
                            if (nuevo !== asistencia) {
                                td.classList.add(\"modificado\", \"modificado-\" + nuevo.toLowerCase());
                            }
                        }
                    });
                }

                tr.appendChild(td);
            });

            tbody.appendChild(tr);
        });
    } catch (error) {
        console.error('Error cargando datos:', error);
        alert('No se pudo cargar la asistencia.');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    cargarDatos();
    document.getElementById('verListaButton').addEventListener('click', () => {
        window.location.href = \"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistasdocente");
        yield "\";
    });

    if (puedeEditar) {
        document.getElementById('guardarCambiosButton').addEventListener('click', EditarSeleccionados);
    }
});

async function EditarSeleccionados() {
    const datos = [];
    const filas = tbody.querySelectorAll('tr');
    const fechas = Array.from(theadRow.children).slice(2);

    filas.forEach(fila => {
        const cursadaId = fila.getAttribute('data-cursada-id');
        if (!cursadaId) return;

        const celdas = Array.from(fila.children).slice(2);
        celdas.forEach((td, index) => {
            if (td.classList.contains('modificado')) {
                const select = td.querySelector('select');
                const estadoLetra = select ? select.value : td.textContent;

                const estadoCompleto = {
                    'P': 'Presente',
                    'A': 'Ausente',
                    'T': 'Media falta',
                    'J': 'Justificada',
                    'N': 'No marcado'
                }[estadoLetra];

                const calendarioClaseId = fechas[index].getAttribute('data-id');

                datos.push({
                    cursada_id: parseInt(cursadaId),
                    calendarioClase_id: parseInt(calendarioClaseId),
                    estado: estadoCompleto
                });
            }
        });
    });

    if (datos.length === 0) {
        alert(\"No hay cambios para guardar.\");
        return;
    }

    try {
        const response = await fetch(rutaGuardarAsistencia, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(datos)
        });

        const result = await response.json();

        if (response.ok) {
            alert(result.mensaje || 'Cambios guardados exitosamente');
            document.querySelectorAll('.modificado').forEach(td => td.classList.remove('modificado'));
            cargarDatos();
        } else {
            alert(result.error || 'Error al guardar cambios');
        }
    } catch (error) {
        console.error('Error en la solicitud:', error);
        alert('Ocurrió un error al intentar guardar.');
    }
}
</script>

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
        return "vistasdocente/lista.html.twig";
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
        return array (  317 => 165,  213 => 64,  208 => 62,  204 => 61,  200 => 60,  194 => 57,  190 => 55,  186 => 53,  184 => 52,  163 => 35,  156 => 31,  148 => 26,  131 => 11,  118 => 10,  105 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig'%}

{% block title %}Lista de Asistencia{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('css/VerAsistencias.css') }}\">
{% endblock %}

{% block body %}
<h1>Lista de Asistencia</h1>

<table id=\"EstadisticasModal\" class=\"tablillacursada\" border=\"1\">

<div class=\"cuadro-referencias-horizontal\">
    <strong>Referencias:</strong>
    <span><strong>P</strong>: Presente</span> |
    <span><strong>A</strong>: Ausente</span> |
    <span><strong>T</strong>: Media falta</span> |
    <span><strong>J</strong>: Justificada</span> |
    <span><strong>N</strong>: No marcado</span>
</div>

    <thead>
        <tr>
            <th colspan=\"7\" class=\"nombre-tecnicatura\">{{ curso.asignatura.tecnicatura.nombre }}</th>
        </tr>
        <tr>
            <th colspan=\"2\" class=\"Docente\">
                Docente:
                <p style=\"margin: 0;\">{{ curso.getNombresDocentes() }}</p>
            </th>
            <th colspan=\"5\" class=\"nombre-asignatura\">
                Asignatura:
                <p> {{ curso.asignatura.nombre }} - Comisión {{ curso.comision.comision }}</p>
            </th>
        </tr>
        <tr id=\"fechas-header\">
            <th>Apellido</th>
            <th>Nombre</th>
            <!-- Encabezados dinámicos de fechas -->
        </tr>
    </thead>
    <tbody>
        <!-- Filas de alumnos cargadas dinámicamente -->
    </tbody>
</table>

<button id=\"verListaButton\" class=\"btn-primary\">Volver</button>

{# Mostrar botón Guardar solo para admins, preceptores o superadmins #}
{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_PRECEPTOR') or is_granted('ROLE_SUPER_ADMIN') %}
    <button id=\"guardarCambiosButton\" class=\"btn-success\">Guardar Cambios</button>
{% endif %}

<script>
const cursoId = {{ curso.id }};

// Rutas relativas generadas con Symfony path()
const rutaCalendarioFechas = \"{{ path('api_calendario_fechas', {'cursoId': curso.id}) }}\";
const rutaAsistenciasPorFecha = \"{{ path('asistencias_por_fecha', {'cursoId': curso.id}) }}\";
const rutaGuardarAsistencia = \"{{ path('guardar_asistencia') }}\";

const puedeEditar = {{ (is_granted('ROLE_ADMIN') or is_granted('ROLE_PRECEPTOR') or is_granted('ROLE_SUPER_ADMIN')) ? 'true' : 'false' }};

const theadRow = document.querySelector('#fechas-header');
const tbody = document.querySelector('#EstadisticasModal tbody');

const opciones = ['P', 'A', 'T', 'J', 'N']; // Presente, Ausente, Media falta, Justificada, No marcado

function crearSelect(valorSeleccionado) {
    const select = document.createElement('select');
    opciones.forEach(opcion => {
        const option = document.createElement('option');
        option.value = opcion;
        option.textContent = opcion;
        if (opcion === valorSeleccionado) option.selected = true;
        select.appendChild(option);
    });
    return select;
}

async function cargarDatos() {
    try {
        const resFechas = await fetch(rutaCalendarioFechas);
        const fechas = await resFechas.json();

        // Limpiar columnas de fechas anteriores
        while (theadRow.children.length > 2) {
            theadRow.removeChild(theadRow.lastChild);
        }

        fechas.forEach(fechaObj => {
            const th = document.createElement('th');
            const partes = fechaObj.fecha.split('-');
            const dia = parseInt(partes[2], 10);
            const mes = parseInt(partes[1], 10);
            th.textContent = `\${dia}/\${mes}`;
            th.setAttribute('data-id', fechaObj.id);
            theadRow.appendChild(th);
        });

        const resAlumnos = await fetch(rutaAsistenciasPorFecha);
        const alumnos = await resAlumnos.json();
        tbody.innerHTML = '';

        alumnos.forEach(alumno => {
            const tr = document.createElement('tr');
            tr.setAttribute('data-cursada-id', alumno.id);
            tr.innerHTML = `<td>\${alumno.apellido}</td><td>\${alumno.nombre}</td>`;

            fechas.forEach(fechaObj => {
                const td = document.createElement('td');
                let asistencia = 'N'; // No marcado

                const encontrada = alumno.asistencias.find(a => a.fecha === fechaObj.fecha);
                if (encontrada) {
                    const valor = encontrada.asistencia;
                    asistencia = valor === 'Presente' ? 'P' :
                                 valor === 'Ausente' ? 'A' :
                                 valor === 'Media falta' ? 'T' :
                                 valor === 'Justificada' ? 'J' : 'N';
                }

                td.textContent = asistencia;
                td.style.cursor = puedeEditar ? \"pointer\" : \"default\";

                if(puedeEditar) {
                    td.addEventListener('click', () => {
                        if (td.querySelector('select')) return;

                        const select = crearSelect(asistencia);
                        td.innerHTML = '';
                        td.appendChild(select);
                        select.focus();

                        select.addEventListener('blur', actualizar);
                        select.addEventListener('change', actualizar);

                        function actualizar() {
                            const nuevo = select.value;
                            td.textContent = nuevo;
                            td.classList.remove(\"modificado\");
                            if (nuevo !== asistencia) {
                                td.classList.add(\"modificado\", \"modificado-\" + nuevo.toLowerCase());
                            }
                        }
                    });
                }

                tr.appendChild(td);
            });

            tbody.appendChild(tr);
        });
    } catch (error) {
        console.error('Error cargando datos:', error);
        alert('No se pudo cargar la asistencia.');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    cargarDatos();
    document.getElementById('verListaButton').addEventListener('click', () => {
        window.location.href = \"{{ path('app_vistasdocente') }}\";
    });

    if (puedeEditar) {
        document.getElementById('guardarCambiosButton').addEventListener('click', EditarSeleccionados);
    }
});

async function EditarSeleccionados() {
    const datos = [];
    const filas = tbody.querySelectorAll('tr');
    const fechas = Array.from(theadRow.children).slice(2);

    filas.forEach(fila => {
        const cursadaId = fila.getAttribute('data-cursada-id');
        if (!cursadaId) return;

        const celdas = Array.from(fila.children).slice(2);
        celdas.forEach((td, index) => {
            if (td.classList.contains('modificado')) {
                const select = td.querySelector('select');
                const estadoLetra = select ? select.value : td.textContent;

                const estadoCompleto = {
                    'P': 'Presente',
                    'A': 'Ausente',
                    'T': 'Media falta',
                    'J': 'Justificada',
                    'N': 'No marcado'
                }[estadoLetra];

                const calendarioClaseId = fechas[index].getAttribute('data-id');

                datos.push({
                    cursada_id: parseInt(cursadaId),
                    calendarioClase_id: parseInt(calendarioClaseId),
                    estado: estadoCompleto
                });
            }
        });
    });

    if (datos.length === 0) {
        alert(\"No hay cambios para guardar.\");
        return;
    }

    try {
        const response = await fetch(rutaGuardarAsistencia, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(datos)
        });

        const result = await response.json();

        if (response.ok) {
            alert(result.mensaje || 'Cambios guardados exitosamente');
            document.querySelectorAll('.modificado').forEach(td => td.classList.remove('modificado'));
            cargarDatos();
        } else {
            alert(result.error || 'Error al guardar cambios');
        }
    } catch (error) {
        console.error('Error en la solicitud:', error);
        alert('Ocurrió un error al intentar guardar.');
    }
}
</script>

{% endblock %}", "vistasdocente/lista.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistasdocente\\lista.html.twig");
    }
}
