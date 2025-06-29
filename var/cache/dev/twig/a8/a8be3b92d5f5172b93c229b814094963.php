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

/* inscripcion_final/index.html.twig */
class __TwigTemplate_1f8e11d7960d6d6cf1244638fd6294d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscripcion_final/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscripcion_final/index.html.twig"));

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

        yield "InscripcionFinal index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <h1>Listado de Inscripciones a Finales</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th colspan=\"2\">
                    Buscar por :Examen Final
                    <input type=\"text\" id=\"searchFinal\" onkeyup=\"filterTable()\" placeholder=\"Buscar Examen Final...\">
                </th>
                <th colspan=\"2\">
                    Buscar por : Alumnos Asignados
                    <input type=\"text\" id=\"searchAlumnos\" onkeyup=\"filterTable()\" placeholder=\"Buscar Alumnos Asignados...\">
                </th>
                <th colspan=\"1\">
                    Buscar por : Estado de Mesa
                    <input type=\"text\" id=\"searchEstado\" onkeyup=\"filterTable()\" placeholder=\"Buscar Estado de Mesa...\">
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Fecha Inscripción</th>
                <th>Examen Final</th>
                <th>Alumnos Asignados</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscripcion_finals"]) || array_key_exists("inscripcion_finals", $context) ? $context["inscripcion_finals"] : (function () { throw new RuntimeError('Variable "inscripcion_finals" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion_final"]) {
            // line 34
            yield "            <tr>
                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                <td>";
            // line 36
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>    
                    ";
            // line 38
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 38), "fecha", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true)) : (""));
            yield "
                    ";
            // line 39
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "hora", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 39), "hora", [], "any", false, false, false, 39), "H:i"), "html", null, true)) : (""));
            yield "
                    ";
            // line 40
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "presidente", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 40), "presidente", [], "any", false, false, false, 40), "persona", [], "any", false, false, false, 40), "html", null, true)) : (""));
            yield "
                    ";
            // line 41
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "vocal1", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 41), "vocal1", [], "any", false, false, false, 41), "persona", [], "any", false, false, false, 41), "html", null, true)) : (""));
            yield "
                    ";
            // line 42
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "vocal2", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 42), "vocal2", [], "any", false, false, false, 42), "persona", [], "any", false, false, false, 42), "html", null, true)) : (""));
            yield "
                    ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "estadoMesa", [], "any", false, false, false, 43), "html", null, true);
            yield "
                    ";
            // line 44
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "curso", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 44), "curso", [], "any", false, false, false, 44), "asignatura", [], "any", false, false, false, 44), "nombre", [], "any", false, false, false, 44) . " - ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 44), "curso", [], "any", false, false, false, 44), "comision", [], "any", false, false, false, 44), "ciclolectivo", [], "any", false, false, false, 44)), "html", null, true)) : (""));
            yield "
                </td>
                <td></td>
                <td>
                    <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\">Mostrar</a>
                    <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 52
        if (!$context['_iterated']) {
            // line 53
            yield "            <tr>
                <td colspan=\"5\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_new");
        yield "\">Crear Nueva Inscripción a Final</a>
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
        return "inscripcion_final/index.html.twig";
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
        return array (  205 => 60,  200 => 57,  191 => 53,  189 => 52,  181 => 49,  177 => 48,  170 => 44,  166 => 43,  162 => 42,  158 => 41,  154 => 40,  150 => 39,  146 => 38,  141 => 36,  137 => 35,  134 => 34,  129 => 33,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}InscripcionFinal index{% endblock %}

{% block body %}
    <h1>Listado de Inscripciones a Finales</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th colspan=\"2\">
                    Buscar por :Examen Final
                    <input type=\"text\" id=\"searchFinal\" onkeyup=\"filterTable()\" placeholder=\"Buscar Examen Final...\">
                </th>
                <th colspan=\"2\">
                    Buscar por : Alumnos Asignados
                    <input type=\"text\" id=\"searchAlumnos\" onkeyup=\"filterTable()\" placeholder=\"Buscar Alumnos Asignados...\">
                </th>
                <th colspan=\"1\">
                    Buscar por : Estado de Mesa
                    <input type=\"text\" id=\"searchEstado\" onkeyup=\"filterTable()\" placeholder=\"Buscar Estado de Mesa...\">
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Fecha Inscripción</th>
                <th>Examen Final</th>
                <th>Alumnos Asignados</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for inscripcion_final in inscripcion_finals %}
            <tr>
                <td>{{ inscripcion_final.id }}</td>
                <td>{{ inscripcion_final.fecha ? inscripcion_final.fecha|date('Y-m-d') : '' }}</td>
                <td>    
                    {{ inscripcion_final.fecha ? inscripcion_final.examenFinal.fecha|date('Y-m-d') : '' }}
                    {{ inscripcion_final.hora ? inscripcion_final.examenFinal.hora|date('H:i') : '' }}
                    {{ inscripcion_final.presidente ? inscripcion_final.examenFinal.presidente.persona : '' }}
                    {{ inscripcion_final.vocal1 ? inscripcion_final.examenFinal.vocal1.persona : '' }}
                    {{ inscripcion_final.vocal2 ? inscripcion_final.examenFinal.vocal2.persona : '' }}
                    {{ inscripcion_final.estadoMesa }}
                    {{ inscripcion_final.curso ? inscripcion_final.examenFinal.curso.asignatura.nombre ~ ' - ' ~ inscripcion_final.examenFinal.curso.comision.ciclolectivo : '' }}
                </td>
                <td></td>
                <td>
                    <a href=\"{{ path('app_inscripcion_final_show', {'id': inscripcion_final.id}) }}\">Mostrar</a>
                    <a href=\"{{ path('app_inscripcion_final_edit', {'id': inscripcion_final.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">No se encontraron registros</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_inscripcion_final_new') }}\">Crear Nueva Inscripción a Final</a>
{% endblock %}
", "inscripcion_final/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\inscripcion_final\\index.html.twig");
    }
}
