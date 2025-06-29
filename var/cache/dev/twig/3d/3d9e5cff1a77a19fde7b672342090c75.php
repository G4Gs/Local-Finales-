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
class __TwigTemplate_20e5c1dd207c1b420a2ad5dc4c41e0e1 extends Template
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
        // line 16
        yield "\t</head>
\t<body
\t\tid=\"page-top\">
\t\t \t<!--Page Wrapper 
Debug de roles
\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "roles", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 22
            yield "    <p >Rol: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rol"], "html", null, true);
            yield "</p> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rol'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield " -->\t
\t\t
\t\t<div
\t\t\tid=\"wrapper\">

\t\t\t<!-- Sidebar -->
\t\t\t<ul
\t\t\t\tclass=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\" >

\t\t\t\t<!-- Sidebar - Brand -->
\t\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
\t\t\t\t\t<div class=\"sidebar-brand-icon rotate-n-15\">
<img src=\"";
        // line 36
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
        // line 57
        $context["mostrados"] = [];
        // line 58
        yield "
\t\t\t\t\t";
        // line 60
        yield "\t\t\t\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 61
            yield "\t\t\t\t\t\t";
            if (!CoreExtension::inFilter("preinscriptos", (isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 61, $this->source); })()))) {
                // line 62
                yield "\t\t\t\t\t\t\t";
                $context["mostrados"] = Twig\Extension\CoreExtension::merge((isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 62, $this->source); })()), ["preinscriptos"]);
                // line 63
                yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 64
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspreinscriptos");
                yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Preinscriptos</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 70
            yield "\t\t\t\t\t";
        }
        // line 71
        yield "
\t\t\t\t\t";
        // line 73
        yield "\t\t\t\t\t";
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ESTUDIANTE"))) {
            // line 74
            yield "\t\t\t\t\t\t";
            if (!CoreExtension::inFilter("estudiantes", (isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 74, $this->source); })()))) {
                // line 75
                yield "\t\t\t\t\t\t\t";
                $context["mostrados"] = Twig\Extension\CoreExtension::merge((isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 75, $this->source); })()), ["estudiantes"]);
                // line 76
                yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 77
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistasestudiante");
                yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Estudiantes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 83
            yield "\t\t\t\t\t";
        }
        // line 84
        yield "
\t\t\t\t\t";
        // line 86
        yield "\t\t\t\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 87
            yield "\t\t\t\t\t\t";
            if (!CoreExtension::inFilter("cursos", (isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 87, $this->source); })()))) {
                // line 88
                yield "\t\t\t\t\t\t\t";
                $context["mostrados"] = Twig\Extension\CoreExtension::merge((isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 88, $this->source); })()), ["cursos"]);
                // line 89
                yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionCursos(); return false;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Comisiones, Cursos y Cursadas</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 96
            yield "\t\t\t\t\t";
        }
        // line 97
        yield "
\t\t\t\t\t";
        // line 99
        yield "\t\t\t\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 100
            yield "\t\t\t\t\t\t";
            if (!CoreExtension::inFilter("finales", (isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 100, $this->source); })()))) {
                // line 101
                yield "\t\t\t\t\t\t\t";
                $context["mostrados"] = Twig\Extension\CoreExtension::merge((isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 101, $this->source); })()), ["finales"]);
                // line 102
                yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 103
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistasmesas");
                yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Finales</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 109
            yield "\t\t\t\t\t";
        }
        // line 110
        yield "
\t\t\t\t\t";
        // line 112
        yield "\t\t\t\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DOCENTE"))) {
            // line 113
            yield "\t\t\t\t\t\t";
            if (!CoreExtension::inFilter("docentes", (isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 113, $this->source); })()))) {
                // line 114
                yield "\t\t\t\t\t\t\t";
                $context["mostrados"] = Twig\Extension\CoreExtension::merge((isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 114, $this->source); })()), ["docentes"]);
                // line 115
                yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionDocentes(); return false;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Docentes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 122
            yield "\t\t\t\t\t";
        }
        // line 123
        yield "
\t\t\t\t\t";
        // line 125
        yield "\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 126
            yield "\t\t\t\t\t\t";
            if (!CoreExtension::inFilter("rrhh", (isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 126, $this->source); })()))) {
                // line 127
                yield "\t\t\t\t\t\t\t";
                $context["mostrados"] = Twig\Extension\CoreExtension::merge((isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 127, $this->source); })()), ["rrhh"]);
                // line 128
                yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionPersonas(); return false;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Recursos Humanos</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 135
            yield "
\t\t\t\t\t\t";
            // line 136
            if (!CoreExtension::inFilter("tecnicaturas", (isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 136, $this->source); })()))) {
                // line 137
                yield "\t\t\t\t\t\t\t";
                $context["mostrados"] = Twig\Extension\CoreExtension::merge((isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 137, $this->source); })()), ["tecnicaturas"]);
                // line 138
                yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionTecnicaturas(); return false;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Tecnicaturas y Asignaturas</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 145
            yield "
\t\t\t\t\t\t";
            // line 146
            if (!CoreExtension::inFilter("usuarios", (isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 146, $this->source); })()))) {
                // line 147
                yield "\t\t\t\t\t\t\t";
                $context["mostrados"] = Twig\Extension\CoreExtension::merge((isset($context["mostrados"]) || array_key_exists("mostrados", $context) ? $context["mostrados"] : (function () { throw new RuntimeError('Variable "mostrados" does not exist.', 147, $this->source); })()), ["usuarios"]);
                // line 148
                yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 149
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Usuarios</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 155
            yield "\t\t\t\t\t";
        }
        // line 156
        yield "



\t\t
\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t";
        // line 162
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 163
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
            // line 172
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carreras_index");
            yield "\">Estudiante Por Carrera</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 173
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tecnicatura_index");
            yield "\">Tecnicatura</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 174
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignatura_index");
            yield "\">Asignatura</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 175
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carreras_index");
            yield "\">Carrera</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 176
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comision_index");
            yield "\">Comisiones</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 177
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correlativa_index");
            yield "\">Correlativas</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 178
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cursada_index");
            yield "\">Cursadas</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 179
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_curso_index");
            yield "\">Curso</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 180
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_alumno_index");
            yield "\">Examen Alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 181
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_index");
            yield "\">Examen Final</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 182
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habilitante_index");
            yield "\">Habilitante</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 183
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_index");
            yield "\">Inscripción a Final</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 184
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_alumno_new");
            yield "\">Ingreso de Examen Alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 185
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota_index");
            yield "\">Nota Anual de Alumno</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 186
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cursada_docente_index");
            yield "\">Cursadas Por Docentes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 187
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revista_index");
            yield "\">Revista</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 188
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_titulo_index");
            yield "\">Título</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 189
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_horario_index");
            yield "\">Horarios</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 195
        yield "\t\t\t\t
                <!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t ";
        // line 197
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 198
            yield "\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTree\" aria-expanded=\"true\" aria-controls=\"collapseTree\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Personas</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTree\" class=\"collapse\" aria-labelledby=\"headingTree\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de Personas</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 206
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alumno_index");
            yield "\">Estudiantes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 207
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_docente_index");
            yield "\">Docentes</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 208
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_index");
            yield "\">Personas</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 209
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rol_index");
            yield "\">Rol</a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t </li>
\t\t\t\t";
        }
        // line 215
        yield "

\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t";
        // line 218
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 219
            yield "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span class=\"custin\">Configuración</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos Institucionales</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 227
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instituto_index");
            yield "\">Instituto</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 228
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_telefono_index");
            yield "\">Teléfono</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 229
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localidad_index");
            yield "\">Localidad</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 230
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
            yield "\">Región</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 231
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_provincia_index");
            yield "\">Provincia</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 232
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pais_index");
            yield "\">Nacionalidad</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 233
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_turno_index");
            yield "\">Turnos</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 234
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modalidad_index");
            yield "\">Modalidad</a>\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 240
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
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.jpeg"), "html", null, true);
        yield " alt=\"...\"style=\"width: 65px; height: auto;\" >
\t\t\t\t</div>
               






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
        // line 313
        yield "
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">
        ";
        // line 316
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "user", [], "any", false, false, false, 316) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "user", [], "any", false, false, false, 316), "persona", [], "any", false, false, false, 316)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 317
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 317, $this->source); })()), "user", [], "any", false, false, false, 317), "persona", [], "any", false, false, false, 317), "nombre", [], "any", false, false, false, 317), "html", null, true);
            yield "
        ";
        } else {
            // line 319
            yield "            Invitado
        ";
        }
        // line 321
        yield "    </span>
    <img class=\"img-profile rounded-circle\" src=\"";
        // line 322
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
        // line 343
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
        // line 353
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 354
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
        // line 368
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 461
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
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />

\t\t\t
\t\t\t\t
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 353
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

    // line 368
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

        // line 369
        yield "\t\t\t\t\t<script>
\t\t\t\t\t\tfunction clearSessionTecnicaturas() {  //Al abrir la vista personalizada de TECNICATURAS limpia la sesiones anteriores. 
\t\t\t\t\t\t\t// URL a la que redirigir
\t\t\t\t\t\t\tvar url = '";
        // line 372
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
        // line 381
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
        // line 390
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
        // line 399
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistasdocente");
        yield "';
\t\t\t\t\t\t\t// Redirigir dos veces
\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\twindow.location.href = url1;
\t\t\t\t\t\t\t}, 200);
\t\t\t\t\t\t}
\t\t\t\t\t\tfunction clearSessionEstudiantes() {  
\t\t\t\t\t\t\tvar url1 = '";
        // line 407
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistasestudiante");
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
        return array (  798 => 407,  787 => 399,  775 => 390,  763 => 381,  751 => 372,  746 => 369,  733 => 368,  710 => 353,  693 => 10,  689 => 9,  685 => 8,  680 => 7,  667 => 6,  653 => 461,  651 => 368,  635 => 354,  633 => 353,  620 => 343,  596 => 322,  593 => 321,  589 => 319,  583 => 317,  581 => 316,  576 => 313,  535 => 271,  502 => 240,  493 => 234,  489 => 233,  485 => 232,  481 => 231,  477 => 230,  473 => 229,  469 => 228,  465 => 227,  455 => 219,  453 => 218,  448 => 215,  439 => 209,  435 => 208,  431 => 207,  427 => 206,  417 => 198,  415 => 197,  411 => 195,  402 => 189,  398 => 188,  394 => 187,  390 => 186,  386 => 185,  382 => 184,  378 => 183,  374 => 182,  370 => 181,  366 => 180,  362 => 179,  358 => 178,  354 => 177,  350 => 176,  346 => 175,  342 => 174,  338 => 173,  334 => 172,  323 => 163,  321 => 162,  313 => 156,  310 => 155,  301 => 149,  298 => 148,  295 => 147,  293 => 146,  290 => 145,  281 => 138,  278 => 137,  276 => 136,  273 => 135,  264 => 128,  261 => 127,  258 => 126,  255 => 125,  252 => 123,  249 => 122,  240 => 115,  237 => 114,  234 => 113,  231 => 112,  228 => 110,  225 => 109,  216 => 103,  213 => 102,  210 => 101,  207 => 100,  204 => 99,  201 => 97,  198 => 96,  189 => 89,  186 => 88,  183 => 87,  180 => 86,  177 => 84,  174 => 83,  165 => 77,  162 => 76,  159 => 75,  156 => 74,  153 => 73,  150 => 71,  147 => 70,  138 => 64,  135 => 63,  132 => 62,  129 => 61,  126 => 60,  123 => 58,  121 => 57,  97 => 36,  92 => 34,  80 => 24,  71 => 22,  67 => 21,  60 => 16,  58 => 6,  51 => 1,);
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
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />

\t\t\t
\t\t\t\t
\t\t{% endblock %}
\t</head>
\t<body
\t\tid=\"page-top\">
\t\t \t<!--Page Wrapper 
Debug de roles
\t\t{% for rol in app.user.roles %}
    <p >Rol: {{ rol }}</p> 
{% endfor %}
 -->\t
\t\t
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


\t\t\t\t{% set mostrados = [] %}

\t\t\t\t\t{# PREINSCRIPTOS #}
\t\t\t\t\t{% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t{% if 'preinscriptos' not in mostrados %}
\t\t\t\t\t\t\t{% set mostrados = mostrados|merge(['preinscriptos']) %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_vistaspreinscriptos') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Preinscriptos</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}

\t\t\t\t\t{# ESTUDIANTES #}
\t\t\t\t\t{% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_ADMIN') or is_granted('ROLE_ESTUDIANTE') %}
\t\t\t\t\t\t{% if 'estudiantes' not in mostrados %}
\t\t\t\t\t\t\t{% set mostrados = mostrados|merge(['estudiantes']) %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_vistasestudiante') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Estudiantes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}

\t\t\t\t\t{# CURSOS Y CURSADAS #}
\t\t\t\t\t{% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t{% if 'cursos' not in mostrados %}
\t\t\t\t\t\t\t{% set mostrados = mostrados|merge(['cursos']) %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionCursos(); return false;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Comisiones, Cursos y Cursadas</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}

\t\t\t\t\t{# FINALES #}
\t\t\t\t\t{% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t{% if 'finales' not in mostrados %}
\t\t\t\t\t\t\t{% set mostrados = mostrados|merge(['finales']) %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_vistasmesas') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Finales</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}

\t\t\t\t\t{# DOCENTES #}
\t\t\t\t\t{% if is_granted('ROLE_SUPER_ADMIN') or is_granted('ROLE_DOCENTE') %}
\t\t\t\t\t\t{% if 'docentes' not in mostrados %}
\t\t\t\t\t\t\t{% set mostrados = mostrados|merge(['docentes']) %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionDocentes(); return false;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Docentes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}

\t\t\t\t\t{# RRHH (solo SUPER_ADMIN) #}
\t\t\t\t\t{% if is_granted('ROLE_SUPER_ADMIN') %}
\t\t\t\t\t\t{% if 'rrhh' not in mostrados %}
\t\t\t\t\t\t\t{% set mostrados = mostrados|merge(['rrhh']) %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionPersonas(); return false;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Recursos Humanos</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if 'tecnicaturas' not in mostrados %}
\t\t\t\t\t\t\t{% set mostrados = mostrados|merge(['tecnicaturas']) %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\" onclick=\"clearSessionTecnicaturas(); return false;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Tecnicaturas y Asignaturas</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if 'usuarios' not in mostrados %}
\t\t\t\t\t\t\t{% set mostrados = mostrados|merge(['usuarios']) %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_user_index') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>Usuarios</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}




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
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_carreras_index')}}\">Carrera</a>
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
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_horario_index')}}\">Horarios</a>

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
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_rol_index')}}\">Rol</a>
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
        {% if app.user and app.user.persona and is_granted('ROLE_USER') %}
            {{ app.user.persona.nombre }}
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
\t\t\t\t\t\tfunction clearSessionEstudiantes() {  
\t\t\t\t\t\t\tvar url1 = '{{ path('app_vistasestudiante') }}';
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
", "base.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\base.html.twig");
    }
}
