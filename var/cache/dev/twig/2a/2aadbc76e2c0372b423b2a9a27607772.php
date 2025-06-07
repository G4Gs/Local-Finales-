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

/* base.html.twig */
class __TwigTemplate_21d2b47f1bec405fd2b29e4011d05257 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Instituto Local</title>
\t\t";
        // line 6
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 14
        yield "\t</head>
\t<body
\t\tid=\"page-top\">
\t\t<!-- Page Wrapper -->
\t\t<div
\t\t\tid=\"wrapper\">

\t\t\t<!-- Sidebar -->
\t\t\t<ul
\t\t\t\tclass=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\" >

\t\t\t\t<!-- Sidebar - Brand -->
\t\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
\t\t\t\t\t<div class=\"sidebar-brand-icon rotate-n-15\">
<img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ISFT-12.jpg"), "html", null, true);
        yield "\" alt=\"Logo\" width=\"60\" class=\"logo-circular\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar-brand-text mx-3\">Instituto Local
\t\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider my-0\">

\t\t\t
\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\tMenu
\t\t\t\t</div>


\t\t\t\t";
        // line 49
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 50
            yield "\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 53
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspreinscriptos");
            yield "\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Preinscriptos</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 59
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistasestudiante");
            yield "\" >
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Estudiantes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionCursos(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Comisiones, Cursos y Cursadas</span>
\t\t\t\t\t</a>
\t\t\t\t</li>\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistasmesas");
            yield "\" >
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Finales</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 78
        yield "
\t\t\t\t
\t\t\t\t";
        // line 80
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DOCENTE"))) {
            // line 81
            yield "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionDocentes(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Docentes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionPersonas(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Recursos Humanos</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"clearSessionLink\" href=\"#\" onclick=\"clearSessionTecnicaturas(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Tecnicaturas y Asignaturas</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 100
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Usuarios</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 106
        yield "
\t\t
\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t";
        // line 109
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 110
            yield "\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Carreras</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de carreras</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 119
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carreras_index");
            yield "\">Estudiante Por Carrera</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 120
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tecnicatura_index");
            yield "\">Tecnicatura</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 121
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignatura_index");
            yield "\">Asignatura</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 122
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comision_index");
            yield "\">Comisiones</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 123
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correlativa_index");
            yield "\">Correlativas</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 124
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cursada_index");
            yield "\">Cursadas</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 125
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_curso_index");
            yield "\">Curso</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 126
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_alumno_index");
            yield "\">Examen Alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 127
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_index");
            yield "\">Examen Final</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 128
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habilitante_index");
            yield "\">Habilitante</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 129
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_index");
            yield "\">Inscripción a Final</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 130
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_alumno_new");
            yield "\">Ingreso de Examen Alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 131
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota_index");
            yield "\">Nota Anual de Alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 132
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cursada_docente_index");
            yield "\">Cursadas Por Docentes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 133
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revista_index");
            yield "\">Revista</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 134
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_titulo_index");
            yield "\">Título</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 140
        yield "\t\t\t\t
                <!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t ";
        // line 142
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 143
            yield "\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTree\" aria-expanded=\"true\" aria-controls=\"collapseTree\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Personas</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTree\" class=\"collapse\" aria-labelledby=\"headingTree\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de Personas</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 151
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alumno_index");
            yield "\">Estudiantes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 152
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_docente_index");
            yield "\">Docentes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 153
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_index");
            yield "\">Personas</a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t </li>
\t\t\t\t";
        }
        // line 159
        yield "

\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t";
        // line 162
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 163
            yield "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Configuración</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos Institucionales</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 171
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instituto_index");
            yield "\">Instituto</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 172
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_telefono_index");
            yield "\">Teléfono</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 173
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localidad_index");
            yield "\">Localidad</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 174
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
            yield "\">Región</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 175
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_provincia_index");
            yield "\">Provincia</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 176
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pais_index");
            yield "\">Nacionalidad</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 177
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_turno_index");
            yield "\">Turnos</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 178
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modalidad_index");
            yield "\">Modalidad</a>\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 184
        yield "
\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider d-none d-md-block\">

\t\t\t\t<!-- Sidebar Toggler (Sidebar) -->
\t\t\t\t<div class=\"text-center d-none d-md-inline\">
\t\t\t\t\t<button class=\"button\" id=\"sidebarToggle\"></button>
 \t</div>


\t\t\t</ul>
\t\t\t<!-- End of Sidebar -->

\t\t\t<!-- Content Wrapper -->
\t\t\t<div
\t\t\t\tid=\"content-wrapper\" class=\"d-flex flex-column\">

\t\t\t\t<!-- Main Content -->
\t\t\t\t<div
\t\t\t\t\tid=\"content\">

\t\t\t\t\t<!-- Topbar -->
\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

\t\t\t\t\t\t<!-- Sidebar Toggle (Topbar) -->
\t\t\t\t\t\t<button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t  <div class=\"super\" style=\"position: absolute; left: 25%; top: 44%; transform: translateY(-50%); display: flex; align-items: center;\">
\t\t\t\t     \t<img class=\"super\" src=";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.jpeg"), "html", null, true);
        yield " alt=\"...\"style=\"width: 65px; height: auto;\" >
\t\t\t\t</div>
               



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
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistascursada");
        yield "?cicloLectivo=\${cicloLectivo}`;
        } else {
            alert('Por favor, ingresa un ciclo lectivo válido de 4 dígitos.');
        }
    }
});
</script>


\t\t\t\t\t\t<!-- Topbar Navbar -->
\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\" id=\"topbarToggle\">

\t\t\t\t\t\t\t<!-- Nav Item - Search Dropdown (Visible Only XS) -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow d-sm-none\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
\t\t\t\t\t\t\t\t\t<form class=\"form-inline mr-auto w-100 navbar-search\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t\t";
        // line 312
        yield "
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">
        ";
        // line 315
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 315, $this->source); })()), "user", [], "any", false, false, false, 315) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 315, $this->source); })()), "user", [], "any", false, false, false, 315), "persona", [], "any", false, false, false, 315))) {
            // line 316
            yield "            ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DOCENTE")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ESTUDIANTE"))) {
                // line 317
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 317, $this->source); })()), "user", [], "any", false, false, false, 317), "persona", [], "any", false, false, false, 317), "nombre", [], "any", false, false, false, 317), "html", null, true);
                yield "
            ";
            } else {
                // line 319
                yield "                Invitado
            ";
            }
            // line 321
            yield "        ";
        } else {
            // line 322
            yield "            Invitado
        ";
        }
        // line 324
        yield "    </span>
    <img class=\"img-profile rounded-circle\" src=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_profile.svg"), "html", null, true);
        yield "\">
</a>


\t\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tConfiguracion
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tActivity Log
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\" style=\"display: flex; justify-content: center !important; align-items: center;\"></div>
                                        <p style=\"display: flex !important ; justify-content: center !important; align-items: center !important;\">
\t\t\t\t\t\t\t\t\t    <a class=\"buttonn\" styles=\"margin: 0 auto !important; text-align: center !important; display: block;\" href=\"";
        // line 345
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Salir</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End of Topbar -->\t\t\t\t
\t\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t\t<div class=\"container_X\"> ";
        // line 355
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 356
        yield "\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t
\t\t\t\t\t<!-- End of Content Wrapper -->
\t\t\t</div>\t
\t\t\t\t<!-- End of Page Wrapper -->
\t\t\t\t<!-- Scroll to Top Button-->
\t\t\t\t<a class=\"scroll-to-top rounded\" href=\"#page-top\">
\t\t\t\t\t<i class=\"fas fa-angle-up\"></i>
\t\t\t\t</a>


\t\t\t\t";
        // line 370
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 455
        yield "\t\t\t</body>
\t\t</body>
\t</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t\t\t<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/oter.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/container.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">
\t\t\t
\t\t\t\t
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 355
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

        yield "   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 370
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

        // line 371
        yield "\t\t\t\t\t<script>
\t\t\t\t\t\tfunction clearSessionTecnicaturas() {  //Al abrir la vista personalizada de TECNICATURAS limpia la sesiones anteriores. 
\t\t\t\t\t\t\t// URL a la que redirigir
\t\t\t\t\t\t\tvar url = '";
        // line 374
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistas");
        yield "';
\t\t\t\t\t\t\t// Redirigir dos veces
\t\t\t\t\t\t\twindow.location.href = url;
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\twindow.location.href = url;
\t\t\t\t\t\t\t}, 200);
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction clearSessionCursos() {  
\t\t\t\t\t\t\tvar url1 = '";
        // line 383
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistascursada");
        yield "';
\t\t\t\t\t\t\t// Redirigir dos veces
\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\t}, 200);
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction clearSessionPersonas() {  
\t\t\t\t\t\t\tvar url1 = '";
        // line 392
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspersona");
        yield "';
\t\t\t\t\t\t\t// Redirigir dos veces
\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\t}, 200);
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction clearSessionDocentes() {  
\t\t\t\t\t\t\tvar url1 = '";
        // line 401
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistasdocente");
        yield "';
\t\t\t\t\t\t\t// Redirigir dos veces
\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\t}, 200);
\t\t\t\t\t\t}




\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t\t\t\t\tconst navLinks = document.querySelectorAll('.nav-link[data-toggle=\"collapse\"]');
\t\t\t\t\t\t\tnavLinks.forEach(function(navLink) {
\t\t\t\t\t\t\t\tnavLink.addEventListener('click', function(event) {
\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\tconst targetId = navLink.getAttribute('data-target');
\t\t\t\t\t\t\t\t\tconst targetCollapse = document.querySelector(targetId);
\t\t\t\t\t\t\t\t\tif (targetCollapse) {
\t\t\t\t\t\t\t\t\t\ttargetCollapse.classList.toggle('show');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tconst sidebarToggleTop = document.getElementById('sidebarToggleTop');
\t\t\t\t\t\t\tconst contentWrapper = document.getElementById('content-wrapper');
\t\t\t\t\t\t\tconst sidebar = document.getElementById('accordionSidebar');
\t\t\t\t\t\t\tsidebarToggleTop.addEventListener('click', function(event) {
\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\tsidebar.classList.toggle('toggled');
\t\t\t\t\t\t\t\tcontentWrapper.classList.toggle('toggled');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tconst sidebarToggle = document.getElementById('sidebarToggle');
\t\t\t\t\t\t\tsidebarToggle.addEventListener('click', function(event) {
\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\tsidebar.classList.toggle('toggled');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});

\t\t\t\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t\t\t\t\tconst sidebarToggleTop = document.getElementById('sidebarToggleTop');
\t\t\t\t\t\t\tconst userDropdown = document.getElementById('userDropdown');
\t\t\t\t\t\t\tuserDropdown.addEventListener('click', function(event) {
\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\tconst dropdownMenu = this.nextElementSibling;
\t\t\t\t\t\t\t\tdropdownMenu.classList.toggle('show');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});

\t\t\t\t\t</script>
\t\t\t\t
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  704 => 401,  692 => 392,  680 => 383,  668 => 374,  663 => 371,  650 => 370,  627 => 355,  612 => 10,  608 => 9,  604 => 8,  599 => 7,  586 => 6,  572 => 455,  570 => 370,  554 => 356,  552 => 355,  539 => 345,  516 => 325,  513 => 324,  509 => 322,  506 => 321,  502 => 319,  496 => 317,  493 => 316,  491 => 315,  486 => 312,  445 => 270,  387 => 215,  354 => 184,  345 => 178,  341 => 177,  337 => 176,  333 => 175,  329 => 174,  325 => 173,  321 => 172,  317 => 171,  307 => 163,  305 => 162,  300 => 159,  291 => 153,  287 => 152,  283 => 151,  273 => 143,  271 => 142,  267 => 140,  258 => 134,  254 => 133,  250 => 132,  246 => 131,  242 => 130,  238 => 129,  234 => 128,  230 => 127,  226 => 126,  222 => 125,  218 => 124,  214 => 123,  210 => 122,  206 => 121,  202 => 120,  198 => 119,  187 => 110,  185 => 109,  180 => 106,  171 => 100,  150 => 81,  148 => 80,  144 => 78,  135 => 72,  119 => 59,  110 => 53,  105 => 50,  103 => 49,  79 => 28,  74 => 26,  60 => 14,  58 => 6,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Instituto Local</title>
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/all.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/oter.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/container.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/styles.css')}}\">
\t\t\t
\t\t\t\t
\t\t{% endblock %}
\t</head>
\t<body
\t\tid=\"page-top\">
\t\t<!-- Page Wrapper -->
\t\t<div
\t\t\tid=\"wrapper\">

\t\t\t<!-- Sidebar -->
\t\t\t<ul
\t\t\t\tclass=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\" >

\t\t\t\t<!-- Sidebar - Brand -->
\t\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{ path('app_home')}}\">
\t\t\t\t\t<div class=\"sidebar-brand-icon rotate-n-15\">
<img src=\"{{ asset('img/ISFT-12.jpg') }}\" alt=\"Logo\" width=\"60\" class=\"logo-circular\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar-brand-text mx-3\">Instituto Local
\t\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider my-0\">

\t\t\t
\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\tMenu
\t\t\t\t</div>


\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_ADMIN') %}
\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_vistaspreinscriptos')}}\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Preinscriptos</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_vistasestudiante')}}\" >
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Estudiantes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionCursos(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Comisiones, Cursos y Cursadas</span>
\t\t\t\t\t</a>
\t\t\t\t</li>\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_vistasmesas')}}\" >
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Finales</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t
\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_DOCENTE') %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionDocentes(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Docentes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionPersonas(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Recursos Humanos</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" id=\"clearSessionLink\" href=\"#\" onclick=\"clearSessionTecnicaturas(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Tecnicaturas y Asignaturas</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_user_index')}}\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Usuarios</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t
\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN')  %}
\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Carreras</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de carreras</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_carreras_index')}}\">Estudiante Por Carrera</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_tecnicatura_index')}}\">Tecnicatura</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_asignatura_index')}}\">Asignatura</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_comision_index')}}\">Comisiones</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_correlativa_index')}}\">Correlativas</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_cursada_index')}}\">Cursadas</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_curso_index')}}\">Curso</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_examen_alumno_index')}}\">Examen Alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_examen_final_index')}}\">Examen Final</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_habilitante_index')}}\">Habilitante</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_inscripcion_final_index')}}\">Inscripción a Final</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_examen_alumno_new')}}\">Ingreso de Examen Alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_nota_index')}}\">Nota Anual de Alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_cursada_docente_index')}}\">Cursadas Por Docentes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_revista_index')}}\">Revista</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_titulo_index')}}\">Título</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t
                <!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t {% if is_granted ('ROLE_SUPER_ADMIN')  %}
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTree\" aria-expanded=\"true\" aria-controls=\"collapseTree\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Personas</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTree\" class=\"collapse\" aria-labelledby=\"headingTree\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de Personas</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_alumno_index')}}\">Estudiantes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_docente_index')}}\">Docentes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_persona_index')}}\">Personas</a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t </li>
\t\t\t\t{% endif %}


\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN')  %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Configuración</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos Institucionales</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_instituto_index')}}\">Instituto</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_telefono_index')}}\">Teléfono</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_localidad_index') }}\">Localidad</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_region_index')}}\">Región</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_provincia_index') }}\">Provincia</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_pais_index')}}\">Nacionalidad</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_turno_index') }}\">Turnos</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_modalidad_index') }}\">Modalidad</a>\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider d-none d-md-block\">

\t\t\t\t<!-- Sidebar Toggler (Sidebar) -->
\t\t\t\t<div class=\"text-center d-none d-md-inline\">
\t\t\t\t\t<button class=\"button\" id=\"sidebarToggle\"></button>
 \t</div>


\t\t\t</ul>
\t\t\t<!-- End of Sidebar -->

\t\t\t<!-- Content Wrapper -->
\t\t\t<div
\t\t\t\tid=\"content-wrapper\" class=\"d-flex flex-column\">

\t\t\t\t<!-- Main Content -->
\t\t\t\t<div
\t\t\t\t\tid=\"content\">

\t\t\t\t\t<!-- Topbar -->
\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

\t\t\t\t\t\t<!-- Sidebar Toggle (Topbar) -->
\t\t\t\t\t\t<button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t  <div class=\"super\" style=\"position: absolute; left: 25%; top: 44%; transform: translateY(-50%); display: flex; align-items: center;\">
\t\t\t\t     \t<img class=\"super\" src={{asset('img/logo.jpeg')}} alt=\"...\"style=\"width: 65px; height: auto;\" >
\t\t\t\t</div>
               



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


\t\t\t\t\t\t<!-- Topbar Navbar -->
\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\" id=\"topbarToggle\">

\t\t\t\t\t\t\t<!-- Nav Item - Search Dropdown (Visible Only XS) -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow d-sm-none\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
\t\t\t\t\t\t\t\t\t<form class=\"form-inline mr-auto w-100 navbar-search\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t\t{#<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user.nombre }}</span>
\t\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src={{asset(\"img/undraw_profile.svg\")}}>
\t\t\t\t\t\t\t\t</a>#}

\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">
        {% if app.user and app.user.persona %}
            {% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_ADMIN') or is_granted('ROLE_DOCENTE') or is_granted('ROLE_ESTUDIANTE') %}
                {{ app.user.persona.nombre }}
            {% else %}
                Invitado
            {% endif %}
        {% else %}
            Invitado
        {% endif %}
    </span>
    <img class=\"img-profile rounded-circle\" src=\"{{ asset('img/undraw_profile.svg') }}\">
</a>


\t\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\" >
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tConfiguracion
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tActivity Log
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\" style=\"display: flex; justify-content: center !important; align-items: center;\"></div>
                                        <p style=\"display: flex !important ; justify-content: center !important; align-items: center !important;\">
\t\t\t\t\t\t\t\t\t    <a class=\"buttonn\" styles=\"margin: 0 auto !important; text-align: center !important; display: block;\" href=\"{{ path('app_logout')}}\">Salir</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End of Topbar -->\t\t\t\t
\t\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t\t<div class=\"container_X\"> {% block body %}   {% endblock %}
\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t
\t\t\t\t\t<!-- End of Content Wrapper -->
\t\t\t</div>\t
\t\t\t\t<!-- End of Page Wrapper -->
\t\t\t\t<!-- Scroll to Top Button-->
\t\t\t\t<a class=\"scroll-to-top rounded\" href=\"#page-top\">
\t\t\t\t\t<i class=\"fas fa-angle-up\"></i>
\t\t\t\t</a>


\t\t\t\t{% block javascripts %}
\t\t\t\t\t<script>
\t\t\t\t\t\tfunction clearSessionTecnicaturas() {  //Al abrir la vista personalizada de TECNICATURAS limpia la sesiones anteriores. 
\t\t\t\t\t\t\t// URL a la que redirigir
\t\t\t\t\t\t\tvar url = '{{ path('app_vistas') }}';
\t\t\t\t\t\t\t// Redirigir dos veces
\t\t\t\t\t\t\twindow.location.href = url;
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\twindow.location.href = url;
\t\t\t\t\t\t\t}, 200);
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction clearSessionCursos() {  
\t\t\t\t\t\t\tvar url1 = '{{ path('app_vistascursada') }}';
\t\t\t\t\t\t\t// Redirigir dos veces
\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\t}, 200);
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction clearSessionPersonas() {  
\t\t\t\t\t\t\tvar url1 = '{{ path('app_vistaspersona') }}';
\t\t\t\t\t\t\t// Redirigir dos veces
\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\t}, 200);
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction clearSessionDocentes() {  
\t\t\t\t\t\t\tvar url1 = '{{ path('app_vistasdocente') }}';
\t\t\t\t\t\t\t// Redirigir dos veces
\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\t}, 200);
\t\t\t\t\t\t}




\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t\t\t\t\tconst navLinks = document.querySelectorAll('.nav-link[data-toggle=\"collapse\"]');
\t\t\t\t\t\t\tnavLinks.forEach(function(navLink) {
\t\t\t\t\t\t\t\tnavLink.addEventListener('click', function(event) {
\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\tconst targetId = navLink.getAttribute('data-target');
\t\t\t\t\t\t\t\t\tconst targetCollapse = document.querySelector(targetId);
\t\t\t\t\t\t\t\t\tif (targetCollapse) {
\t\t\t\t\t\t\t\t\t\ttargetCollapse.classList.toggle('show');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tconst sidebarToggleTop = document.getElementById('sidebarToggleTop');
\t\t\t\t\t\t\tconst contentWrapper = document.getElementById('content-wrapper');
\t\t\t\t\t\t\tconst sidebar = document.getElementById('accordionSidebar');
\t\t\t\t\t\t\tsidebarToggleTop.addEventListener('click', function(event) {
\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\tsidebar.classList.toggle('toggled');
\t\t\t\t\t\t\t\tcontentWrapper.classList.toggle('toggled');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tconst sidebarToggle = document.getElementById('sidebarToggle');
\t\t\t\t\t\t\tsidebarToggle.addEventListener('click', function(event) {
\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\tsidebar.classList.toggle('toggled');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});

\t\t\t\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t\t\t\t\tconst sidebarToggleTop = document.getElementById('sidebarToggleTop');
\t\t\t\t\t\t\tconst userDropdown = document.getElementById('userDropdown');
\t\t\t\t\t\t\tuserDropdown.addEventListener('click', function(event) {
\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\tconst dropdownMenu = this.nextElementSibling;
\t\t\t\t\t\t\t\tdropdownMenu.classList.toggle('show');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});

\t\t\t\t\t</script>
\t\t\t\t
\t\t\t\t{% endblock %}
\t\t\t</body>
\t\t</body>
\t</html>
", "base.html.twig", "C:\\xampp\\htdocs\\local\\templates\\base.html.twig");
    }
}
