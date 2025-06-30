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
class __TwigTemplate_4d752e4f2deaa6c6f57c9d9934231a82 extends Template
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

        $this->parent = $this->loadTemplate("base.html.twig", "inscripcion_final/index.html.twig", 1);
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

        yield "Inscripciones a Exámenes Finales";
        
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
        yield "<h1>Listado de Inscripciones a Finales</h1>
<table class=\"tabla_home table\" id=\"copied-table\" border=\"1\">
    <thead>
        <tr>
            <th colspan=\"2\">
                Buscar por: Fecha
                <input type=\"text\" id=\"searchFecha\" onkeyup=\"filterTable()\" placeholder=\"Buscar Fecha...\">
            </th>
            <th colspan=\"2\">
                Buscar por: Condición
                <select id=\"searchCondición\" onchange=\"filterTable()\">
                    <option value=\"\"></option>
                    <option value=\"0\">Regular</option>
                    <option value=\"1\">Libre</option>
                    <option value=\"2\">Condicional</option>
                </select>
            </th>
            <th>
                Buscar por: Alumno
                <input type=\"text\" id=\"searchAlumno\" onkeyup=\"filterTable()\" placeholder=\"Buscar Alumno...\">
            </th>
            <th>
                Buscar por: Examen Final
                <input type=\"text\" id=\"searchExamenFinal\" onkeyup=\"filterTable()\" placeholder=\"Buscar Examen Final...\">
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Condición</th>
            <th>Alumno</th>
            <th>Examen Final</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscripcion_finals"]) || array_key_exists("inscripcion_finals", $context) ? $context["inscripcion_finals"] : (function () { throw new RuntimeError('Variable "inscripcion_finals" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion_final"]) {
            // line 43
            yield "        <tr>
            <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
            <td>";
            // line 45
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "condicion", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
            <td>";
            // line 47
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumnoId", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumnoId", [], "any", false, false, false, 47), "persona", [], "any", false, false, false, 47), "html", null, true)) : ("Sin alumno"));
            yield "</td>
            <td>";
            // line 48
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 48), "html", null, true)) : (""));
            yield "</td>
            <td>
                <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\">Mostrar</a>
                <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\">Editar</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 58
        if (!$context['_iterated']) {
            // line 55
            yield "        <tr>
            <td colspan=\"6\">No se encontraron registros</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "    </tbody>
</table>

<a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_new");
        yield "\" class=\"btn btn-primary\">Crear Nueva Inscripción a Final</a>
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
        return array (  195 => 62,  190 => 59,  181 => 55,  179 => 58,  171 => 51,  167 => 50,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  143 => 43,  138 => 42,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscripciones a Exámenes Finales{% endblock %}

{% block body %}
<h1>Listado de Inscripciones a Finales</h1>
<table class=\"tabla_home table\" id=\"copied-table\" border=\"1\">
    <thead>
        <tr>
            <th colspan=\"2\">
                Buscar por: Fecha
                <input type=\"text\" id=\"searchFecha\" onkeyup=\"filterTable()\" placeholder=\"Buscar Fecha...\">
            </th>
            <th colspan=\"2\">
                Buscar por: Condición
                <select id=\"searchCondición\" onchange=\"filterTable()\">
                    <option value=\"\"></option>
                    <option value=\"0\">Regular</option>
                    <option value=\"1\">Libre</option>
                    <option value=\"2\">Condicional</option>
                </select>
            </th>
            <th>
                Buscar por: Alumno
                <input type=\"text\" id=\"searchAlumno\" onkeyup=\"filterTable()\" placeholder=\"Buscar Alumno...\">
            </th>
            <th>
                Buscar por: Examen Final
                <input type=\"text\" id=\"searchExamenFinal\" onkeyup=\"filterTable()\" placeholder=\"Buscar Examen Final...\">
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Condición</th>
            <th>Alumno</th>
            <th>Examen Final</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    {% for inscripcion_final in inscripcion_finals %}
        <tr>
            <td>{{ inscripcion_final.id }}</td>
            <td>{{ inscripcion_final.fecha ? inscripcion_final.fecha|date('Y-m-d') : '' }}</td>
            <td>{{ inscripcion_final.condicion }}</td>
            <td>{{ inscripcion_final.alumnoId ? inscripcion_final.alumnoId.persona : 'Sin alumno' }}</td>
            <td>{{ inscripcion_final.examenFinal ? inscripcion_final.examenFinal : '' }}</td>
            <td>
                <a href=\"{{ path('app_inscripcion_final_show', {'id': inscripcion_final.id}) }}\">Mostrar</a>
                <a href=\"{{ path('app_inscripcion_final_edit', {'id': inscripcion_final.id}) }}\">Editar</a>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"6\">No se encontraron registros</td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<a href=\"{{ path('app_inscripcion_final_new') }}\" class=\"btn btn-primary\">Crear Nueva Inscripción a Final</a>
{% endblock %}
", "inscripcion_final/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\inscripcion_final\\index.html.twig");
    }
}
