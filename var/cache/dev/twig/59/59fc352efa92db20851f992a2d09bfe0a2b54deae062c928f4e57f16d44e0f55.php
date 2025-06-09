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

/* base2.html.twig */
class __TwigTemplate_95b8c58b1975dc7d5810732b05ab75f6a89bd226608c3763fa91499f9d7240b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Instituto Local</title>
\t\t";
        // line 6
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 13
        yield "\t</head>
\t<body
\t\tid=\"page-top\">
\t\t<!-- Page Wrapper -->
\t\t<div
\t\t\tid=\"wrapper\">

\t\t\t<!-- Sidebar  -->
\t\t\t<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\"
    \t\t\tid=\"accordionSidebar\"
    \t\t\tstyle=\"overflow-y: auto; max-height: 100vh;\">


\t\t\t\t<!-- class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\"> -->

\t\t\t\t<!-- Sidebar - Brand -->
\t\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
    <div class=\"sidebar-brand-icon\">
 
<img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ISFT-12.jpg"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 40px; height: 40px; border-radius: 50% !important; object-fit: cover;\">

    </div>
    <div class=\"sidebar-brand-text mx-3\">Instituto Local</div>
 
       <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ISFT-12.jpg"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"width: 40px; height: 40px;\">

    </div>
    <div class=\"sidebar-brand-text mx-3\">Instituto uyugiytLocal</div>
 
</a>


\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider my-0\">
\t\t       <!-- 
\t\t\t\t</li>
\t\t\t\t<!-- Divider -->
\t\t\t\t<!-- Heading -->
\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\tMenu
\t\t\t\t</div>


\t\t\t\t";
        // line 57
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 58
            yield "\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t<li class=\"nav-item\">

\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Usuarios</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 68
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspreinscriptos");
            yield "\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\"n>Preinscriptos</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">

\t\t\t\t\t<a class=\"nav-link\" id=\"clearSessionLink\" href=\"#\" onclick=\"clearSessionTecnicaturas(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Tecnicaturas y Asignaturas</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionCursos(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Comisiones, Cursos y Cursadas</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistasmesas");
            yield "\" >
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Finales</span>


\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionPersonas(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Recursos Humanos</span>

\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 103
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Usuarios</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t";
        }
        // line 110
        yield "
\t\t\t\t";
        // line 111
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ESTUDIANTE"))) {
            yield "\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 113
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistasestudiante");
            yield "\" >
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Estudiantes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 119
        yield "
\t\t\t\t";
        // line 120
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DOCENTE"))) {
            // line 121
            yield "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionDocentes(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\"> Docentes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 128
        yield "\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t";
        // line 129
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 130
            yield "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTree\" aria-expanded=\"true\" aria-controls=\"collapseTree\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Personas</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTree\" class=\"collapse\" aria-labelledby=\"headingTree\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de Estudiantes</h6>
              <a class=\"collapse-item\" href=\"";
            // line 138
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alumno_index");
            yield "\">Estudiantes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 139
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_docente_index");
            yield "\">Docentes</a>
              <a class=\"collapse-item\" href=\"";
            // line 140
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_index");
            yield "\">Personas</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 147
        yield "


\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t";
        // line 151
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 152
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
            // line 161
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carreras_index");
            yield "\">EstudianteXcarreras</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 162
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tecnicatura_index");
            yield "\">Tecnicatura</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 163
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignatura_index");
            yield "\">Asignatura</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 164
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comision_index");
            yield "\">Comisiones</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 165
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correlativa_index");
            yield "\">Correlativas</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 166
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cursada_index");
            yield "\">Cursadas</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 167
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_curso_index");
            yield "\">Curso</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 168
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cursada_docente_index");
            yield "\">Cursadas Docentes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 169
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_alumno_index");
            yield "\">Examen alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 170
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_index");
            yield "\">Examen Final</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 171
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habilitante_index");
            yield "\">Habilitante</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 172
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_index");
            yield "\">Inscripcion Final</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 173
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_alumno_new");
            yield "\">Examen alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 174
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota_index");
            yield "\">Nota</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 175
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revista_index");
            yield "\">Revista</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 176
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_titulo_index");
            yield "\">Titulo</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 182
        yield "\t\t\t\t
\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t";
        // line 184
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 185
            yield "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTree\" aria-expanded=\"true\" aria-controls=\"collapseTree\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Personas</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTree\" class=\"collapse\" aria-labelledby=\"headingTree\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de Estudiantes</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 193
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alumno_index");
            yield "\">Estudiantes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 194
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_docente_index");
            yield "\">Docentes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 195
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_index");
            yield "\">Personas</a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 201
        yield "\t\t\t
\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t";
        // line 203
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 204
            yield "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Configuración</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos institucionles</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 212
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instituto_index");
            yield "\">Instituto</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 213
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_telefono_index");
            yield "\">Telefono</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 214
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localidad_index");
            yield "\">Localidad</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 215
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
            yield "\">Region</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 216
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_provincia_index");
            yield "\">Provincia</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 217
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pais_index");
            yield "\">Pais</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 218
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_turno_index");
            yield "\">Turnos</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 219
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modalidad_index");
            yield "\">Modalidad</a>\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 224
        yield "
\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider d-none d-md-block\">

\t\t\t\t<!-- Sidebar Toggler (Sidebar) -->
\t\t\t\t<div class=\"text-center d-none d-md-inline\">
\t\t\t\t\t<button class=\"button\" id=\"sidebarToggle\"></button>

\t\t\t\t</div>

\t\t\t\t<!-- Sidebar Message -->
\t\t\t\t<div class=\"sidebar-card d-none d-lg-flex\">
\t\t\t\t\t<img class=\"sidebar-card-illustration mb-2\" src=";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.jpeg"), "html", null, true);
        yield " alt=\"...\">
\t\t\t\t\t<p class=\"text-center mb-2\">
\t\t\t\t\t\t<strong>Bienvenidos</strong>
\t\t\t\t\t\tal proyecto del i12!</p>
\t\t\t\t\t
\t\t\t\t</div>

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
        // line 302
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
        // line 344
        yield "
\t\t\t\t\t\t\t\t";
        // line 346
        yield "\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">
\t\t\t\t\t\t\t\t\t\t";
        // line 348
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 349
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 349, $this->source); })()), "user", [], "any", false, false, false, 349), "nombre", [], "any", false, false, false, 349), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 351
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 351, $this->source); })()), "user", [], "any", false, false, false, 351), "nombre", [], "any", false, false, false, 351), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DOCENTE")) {
            // line 353
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 353, $this->source); })()), "user", [], "any", false, false, false, 353), "nombre", [], "any", false, false, false, 353), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ALUMNO")) {
            // line 355
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 355, $this->source); })()), "user", [], "any", false, false, false, 355), "nombre", [], "any", false, false, false, 355), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 357
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 357, $this->source); })()), "user", [], "any", false, false, false, 357), "nombre", [], "any", false, false, false, 357), "html", null, true);
            yield " 
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 359
        yield "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src=\"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_profile.svg"), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
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
\t\t\t\t\t\t\t<div class=\"dropdown-divider\" style=\"display: flex; justify-content: center !important; align-items: center;\"></div>
 
\t\t\t\t\t\t\t\t\t<a class=\"buttonn\" styles=\"margin: 0 auto !important; text-align: center !important; display: block;\" href=\"";
        // line 379
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Salir</a>
 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End of Topbar -->\t\t\t\t
\t\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t\t<div class=\"container_X\"> ";
        // line 389
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 390
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
        // line 404
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 489
        yield "\t\t\t</body>
\t\t</body>
\t</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "\t\t\t<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all.css"), "html", null, true);
        yield "\">
\t\t\t";
        // line 9
        yield "\t\t\t<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/oter.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/container.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 389
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

        yield "   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 404
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

        // line 405
        yield "\t\t\t\t\t<script>
\t\t\t\t\t\tfunction clearSessionTecnicaturas() {  //Al abrir la vista personalizada de TECNICATURAS limpia la sesiones anteriores. 
\t\t\t\t\t\t\t// URL a la que redirigir
\t\t\t\t\t\t\tvar url = '";
        // line 408
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
        // line 417
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
        // line 426
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
        // line 435
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base2.html.twig";
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
        return array (  771 => 435,  759 => 426,  747 => 417,  735 => 408,  730 => 405,  717 => 404,  694 => 389,  681 => 11,  677 => 10,  672 => 9,  667 => 7,  654 => 6,  641 => 489,  639 => 404,  623 => 390,  621 => 389,  608 => 379,  586 => 360,  583 => 359,  577 => 357,  571 => 355,  565 => 353,  559 => 351,  553 => 349,  551 => 348,  547 => 346,  544 => 344,  503 => 302,  435 => 237,  420 => 224,  412 => 219,  408 => 218,  404 => 217,  400 => 216,  396 => 215,  392 => 214,  388 => 213,  384 => 212,  374 => 204,  372 => 203,  368 => 201,  359 => 195,  355 => 194,  351 => 193,  341 => 185,  339 => 184,  335 => 182,  326 => 176,  322 => 175,  318 => 174,  314 => 173,  310 => 172,  306 => 171,  302 => 170,  298 => 169,  294 => 168,  290 => 167,  286 => 166,  282 => 165,  278 => 164,  274 => 163,  270 => 162,  266 => 161,  255 => 152,  253 => 151,  247 => 147,  237 => 140,  233 => 139,  229 => 138,  219 => 130,  217 => 129,  214 => 128,  205 => 121,  203 => 120,  200 => 119,  191 => 113,  186 => 111,  183 => 110,  173 => 103,  155 => 88,  132 => 68,  122 => 61,  117 => 58,  115 => 57,  92 => 37,  84 => 32,  78 => 29,  60 => 13,  58 => 6,  51 => 1,);
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
\t\t\t{#<link rel=\"stylesheet\" href=\"{{asset('css/sb-admin-2.min.css')}}\">#}
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/oter.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/container.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/styles.css')}}\">
\t\t{% endblock %}
\t</head>
\t<body
\t\tid=\"page-top\">
\t\t<!-- Page Wrapper -->
\t\t<div
\t\t\tid=\"wrapper\">

\t\t\t<!-- Sidebar  -->
\t\t\t<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\"
    \t\t\tid=\"accordionSidebar\"
    \t\t\tstyle=\"overflow-y: auto; max-height: 100vh;\">


\t\t\t\t<!-- class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\"> -->

\t\t\t\t<!-- Sidebar - Brand -->
\t\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{ path('app_home')}}\">
    <div class=\"sidebar-brand-icon\">
 
<img src=\"{{ asset('img/ISFT-12.jpg') }}\" alt=\"Logo\" style=\"width: 40px; height: 40px; border-radius: 50% !important; object-fit: cover;\">

    </div>
    <div class=\"sidebar-brand-text mx-3\">Instituto Local</div>
 
       <img src=\"{{ asset('img/ISFT-12.jpg') }}\" alt=\"Logo\" style=\"width: 40px; height: 40px;\">

    </div>
    <div class=\"sidebar-brand-text mx-3\">Instituto uyugiytLocal</div>
 
</a>


\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider my-0\">
\t\t       <!-- 
\t\t\t\t</li>
\t\t\t\t<!-- Divider -->
\t\t\t\t<!-- Heading -->
\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\tMenu
\t\t\t\t</div>


\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_ADMIN') %}
\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t<li class=\"nav-item\">

\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_user_index')}}\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Usuarios</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_vistaspreinscriptos')}}\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\"n>Preinscriptos</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">

\t\t\t\t\t<a class=\"nav-link\" id=\"clearSessionLink\" href=\"#\" onclick=\"clearSessionTecnicaturas(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Tecnicaturas y Asignaturas</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionCursos(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Comisiones, Cursos y Cursadas</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_vistasmesas')}}\" >
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Finales</span>


\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionPersonas(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Recursos Humanos</span>

\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_user_index')}}\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Usuarios</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t{% endif %}

\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_ADMIN') or is_granted ('ROLE_ESTUDIANTE')%}\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_vistasestudiante')}}\" >
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Estudiantes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_DOCENTE') %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionDocentes(); return false;\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\"> Docentes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN')  %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTree\" aria-expanded=\"true\" aria-controls=\"collapseTree\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Personas</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTree\" class=\"collapse\" aria-labelledby=\"headingTree\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de Estudiantes</h6>
              <a class=\"collapse-item\" href=\"{{ path('app_alumno_index')}}\">Estudiantes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_docente_index')}}\">Docentes</a>
              <a class=\"collapse-item\" href=\"{{ path('app_persona_index')}}\">Personas</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t{% endif %}



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
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_carreras_index')}}\">EstudianteXcarreras</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_tecnicatura_index')}}\">Tecnicatura</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_asignatura_index')}}\">Asignatura</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_comision_index')}}\">Comisiones</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_correlativa_index')}}\">Correlativas</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_cursada_index')}}\">Cursadas</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_curso_index')}}\">Curso</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_cursada_docente_index')}}\">Cursadas Docentes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_examen_alumno_index')}}\">Examen alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_examen_final_index')}}\">Examen Final</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_habilitante_index')}}\">Habilitante</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_inscripcion_final_index')}}\">Inscripcion Final</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_examen_alumno_new')}}\">Examen alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_nota_index')}}\">Nota</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_revista_index')}}\">Revista</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_titulo_index')}}\">Titulo</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN')  %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTree\" aria-expanded=\"true\" aria-controls=\"collapseTree\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Personas</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTree\" class=\"collapse\" aria-labelledby=\"headingTree\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de Estudiantes</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_alumno_index')}}\">Estudiantes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_docente_index')}}\">Docentes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_persona_index')}}\">Personas</a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t
\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN')  %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Configuración</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos institucionles</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_instituto_index')}}\">Instituto</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_telefono_index')}}\">Telefono</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_localidad_index') }}\">Localidad</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_region_index')}}\">Region</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_provincia_index') }}\">Provincia</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_pais_index')}}\">Pais</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_turno_index') }}\">Turnos</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_modalidad_index') }}\">Modalidad</a>\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider d-none d-md-block\">

\t\t\t\t<!-- Sidebar Toggler (Sidebar) -->
\t\t\t\t<div class=\"text-center d-none d-md-inline\">
\t\t\t\t\t<button class=\"button\" id=\"sidebarToggle\"></button>

\t\t\t\t</div>

\t\t\t\t<!-- Sidebar Message -->
\t\t\t\t<div class=\"sidebar-card d-none d-lg-flex\">
\t\t\t\t\t<img class=\"sidebar-card-illustration mb-2\" src={{asset('img/logo.jpeg')}} alt=\"...\">
\t\t\t\t\t<p class=\"text-center mb-2\">
\t\t\t\t\t\t<strong>Bienvenidos</strong>
\t\t\t\t\t\tal proyecto del i12!</p>
\t\t\t\t\t
\t\t\t\t</div>

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

\t\t\t\t\t\t\t\t{# para que no genere error si el usuario es superadmin, admin, docente, alumno #}
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">
\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_SUPER_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.nombre }}
\t\t\t\t\t\t\t\t\t\t{% elseif is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.nombre }}
\t\t\t\t\t\t\t\t\t\t{% elseif is_granted('ROLE_DOCENTE') %}
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.nombre }}
\t\t\t\t\t\t\t\t\t\t{% elseif is_granted('ROLE_ALUMNO') %}
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.nombre }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.nombre }} 
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src=\"{{ asset('img/undraw_profile.svg') }}\">
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
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
\t\t\t\t\t\t\t<div class=\"dropdown-divider\" style=\"display: flex; justify-content: center !important; align-items: center;\"></div>
 
\t\t\t\t\t\t\t\t\t<a class=\"buttonn\" styles=\"margin: 0 auto !important; text-align: center !important; display: block;\" href=\"{{ path('app_logout')}}\">Salir</a>
 
\t\t\t\t\t\t\t\t</div>
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
\t</html>", "base2.html.twig", "C:\\xampp\\htdocs\\Local 9-6\\local\\templates\\base2.html.twig");
    }
}
