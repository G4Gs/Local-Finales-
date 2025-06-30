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
                <select id=\"searchCondicion\" onchange=\"filterTable()\">
                    <option value=\"\"></option>
                    <option value=\"regular\">Regular</option>
                    <option value=\"libre\">Libre</option>
                    <option value=\"condicional\">Condicional</option>
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
            <td>
                ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "tipo", [], "any", false, false, false, 47) == 0)) {
                // line 48
                yield "                    Regular
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 49
$context["inscripcion_final"], "tipo", [], "any", false, false, false, 49) == 1)) {
                // line 50
                yield "                    Libre
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 51
$context["inscripcion_final"], "tipo", [], "any", false, false, false, 51) == 2)) {
                // line 52
                yield "                    Condicional
                ";
            } else {
                // line 54
                yield "                    N/A
                ";
            }
            // line 56
            yield "            </td>
            <td>Sin alumno</td>
            <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinalNombre", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
            <td>
                <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\">Mostrar</a>
                <a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\">Editar</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 68
        if (!$context['_iterated']) {
            // line 65
            yield "        <tr>
            <td colspan=\"6\">No se encontraron registros</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "    </tbody>
</table>

<a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_new");
        yield "\" class=\"btn btn-primary\">Crear Nueva Inscripción a Final</a>
<script>
function filterTable() {
    var table = document.getElementById(\"copied-table\");
    var trs = table.getElementsByTagName(\"tbody\")[0].getElementsByTagName(\"tr\");
    var searchFecha = document.getElementById(\"searchFecha\").value.toLowerCase();
    var searchCondicion = document.getElementById(\"searchCondicion\").value.toLowerCase();
    var searchAlumno = document.getElementById(\"searchAlumno\").value.toLowerCase();
    var searchExamenFinal = document.getElementById(\"searchExamenFinal\").value.toLowerCase();

    for (var i = 0; i < trs.length; i++) {
        var tds = trs[i].getElementsByTagName(\"td\");
        if (tds.length < 6) continue;
        var fecha = tds[1].textContent.toLowerCase();
        var condicion = tds[2].textContent.toLowerCase();
        var alumno = tds[3].textContent.toLowerCase();
        var examenFinal = tds[4].textContent.toLowerCase();

        var show = true;
        if (searchFecha && fecha.indexOf(searchFecha) === -1) show = false;
        if (searchCondicion && condicion.indexOf(searchCondicion) === -1) show = false;
        if (searchAlumno && alumno.indexOf(searchAlumno) === -1) show = false;
        if (searchExamenFinal && examenFinal.indexOf(searchExamenFinal) === -1) show = false;

        trs[i].style.display = show ? \"\" : \"none\";
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
        return array (  212 => 72,  207 => 69,  198 => 65,  196 => 68,  188 => 61,  184 => 60,  179 => 58,  175 => 56,  171 => 54,  167 => 52,  165 => 51,  162 => 50,  160 => 49,  157 => 48,  155 => 47,  150 => 45,  146 => 44,  143 => 43,  138 => 42,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <select id=\"searchCondicion\" onchange=\"filterTable()\">
                    <option value=\"\"></option>
                    <option value=\"regular\">Regular</option>
                    <option value=\"libre\">Libre</option>
                    <option value=\"condicional\">Condicional</option>
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
            <td>
                {% if inscripcion_final.tipo == 0 %}
                    Regular
                {% elseif inscripcion_final.tipo == 1 %}
                    Libre
                {% elseif inscripcion_final.tipo == 2 %}
                    Condicional
                {% else %}
                    N/A
                {% endif %}
            </td>
            <td>Sin alumno</td>
            <td>{{ inscripcion_final.examenFinalNombre }}</td>
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
<script>
function filterTable() {
    var table = document.getElementById(\"copied-table\");
    var trs = table.getElementsByTagName(\"tbody\")[0].getElementsByTagName(\"tr\");
    var searchFecha = document.getElementById(\"searchFecha\").value.toLowerCase();
    var searchCondicion = document.getElementById(\"searchCondicion\").value.toLowerCase();
    var searchAlumno = document.getElementById(\"searchAlumno\").value.toLowerCase();
    var searchExamenFinal = document.getElementById(\"searchExamenFinal\").value.toLowerCase();

    for (var i = 0; i < trs.length; i++) {
        var tds = trs[i].getElementsByTagName(\"td\");
        if (tds.length < 6) continue;
        var fecha = tds[1].textContent.toLowerCase();
        var condicion = tds[2].textContent.toLowerCase();
        var alumno = tds[3].textContent.toLowerCase();
        var examenFinal = tds[4].textContent.toLowerCase();

        var show = true;
        if (searchFecha && fecha.indexOf(searchFecha) === -1) show = false;
        if (searchCondicion && condicion.indexOf(searchCondicion) === -1) show = false;
        if (searchAlumno && alumno.indexOf(searchAlumno) === -1) show = false;
        if (searchExamenFinal && examenFinal.indexOf(searchExamenFinal) === -1) show = false;

        trs[i].style.display = show ? \"\" : \"none\";
    }
}
</script>
{% endblock %}
", "inscripcion_final/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\inscripcion_final\\index.html.twig");
    }
}
