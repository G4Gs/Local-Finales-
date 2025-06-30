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

/* examen_final/index.html.twig */
class __TwigTemplate_aef49e4075bc6aefa4b0e5b4dcc050e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_final/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_final/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "examen_final/index.html.twig", 1);
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

        yield "ExamenFinal index";
        
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
        yield "    <h1 class=\"datos-filtered\">Listado de Exámenes Finales</h1>
    <table class=\"tabla_home table\" id=\"copied-table\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"3\">
                    Buscar por: Fecha y Hora
                    <input type=\"text\" id=\"searchFechaHora\" onkeyup=\"filterTable()\" placeholder=\"Buscar Fecha y Hora...\">
                </th>
                <th colspan=\"1\">
                    Buscar por: Curso
                    <input type=\"text\" id=\"searchCurso\" onkeyup=\"filterTable()\" placeholder=\"Buscar Curso...\">
                </th>
                <th colspan=\"4\">
                    Buscar por: Presidente
                    <input type=\"text\" id=\"searchPresidente\" onkeyup=\"filterTable()\" placeholder=\"Buscar Presidente...\">
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Fecha y Hora</th>
                <th>Modalidad Mesa</th>
                <th>Curso</th>
                <th>Presidente</th>
                <th>Vocal 1</th>
                <th>Vocal 2</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 36
            yield "            <tr>
                <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                <td>";
            // line 38
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 38)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 38), "Y-m-d H:i"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 39
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "modalidadMesa", [], "any", false, false, false, 39)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "modalidadMesa", [], "any", false, false, false, 39), "html", null, true)) : ("No asignada"));
            yield "</td>
                <td>
                    ";
            // line 41
            if (CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 41)) {
                // line 42
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 42), "asignatura", [], "any", false, false, false, 42), "tecnicatura", [], "any", false, false, false, 42), "html", null, true);
                yield "
                        ";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 43), "html", null, true);
                yield "
                    ";
            } else {
                // line 45
                yield "                        Sin curso
                    ";
            }
            // line 47
            yield "                </td>
                <td>";
            // line 48
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 48), "persona", [], "any", false, false, false, 48), "html", null, true)) : ("Sin presidente"));
            yield "</td>
                <td>";
            // line 49
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 49), "persona", [], "any", false, false, false, 49), "html", null, true)) : ("Sin vocal 1"));
            yield "</td>
                <td>";
            // line 50
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 50), "persona", [], "any", false, false, false, 50), "html", null, true)) : ("Sin vocal 2"));
            yield "</td>
                
                <td>
                    <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\">Ver</a>
                    <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 61
        if (!$context['_iterated']) {
            // line 58
            yield "            <tr>
                <td colspan=\"11\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_new");
        yield "\">Crear Nuevo Examen Final</a>

<script>
function filterTable() {
    var table = document.getElementById(\"copied-table\");
    var trs = table.getElementsByTagName(\"tbody\")[0].getElementsByTagName(\"tr\");
    var searchFechaHora = document.getElementById(\"searchFechaHora\").value.toLowerCase();
    var searchCurso = document.getElementById(\"searchCurso\").value.toLowerCase();
    var searchPresidente = document.getElementById(\"searchPresidente\").value.toLowerCase();

    for (var i = 0; i < trs.length; i++) {
        var tds = trs[i].getElementsByTagName(\"td\");
        if (tds.length < 8) continue;

        var fechaHora = tds[1].textContent.toLowerCase();
        var curso = tds[3].textContent.toLowerCase();
        var presidente = tds[4].textContent.toLowerCase();

        var show = true;
        if (searchFechaHora && !fechaHora.includes(searchFechaHora)) show = false;
        if (searchCurso && !curso.includes(searchCurso)) show = false;
        if (searchPresidente && !presidente.includes(searchPresidente)) show = false;

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
        return "examen_final/index.html.twig";
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
        return array (  213 => 65,  208 => 62,  199 => 58,  197 => 61,  189 => 54,  185 => 53,  179 => 50,  175 => 49,  171 => 48,  168 => 47,  164 => 45,  159 => 43,  154 => 42,  152 => 41,  147 => 39,  143 => 38,  139 => 37,  136 => 36,  131 => 35,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ExamenFinal index{% endblock %}

{% block body %}
    <h1 class=\"datos-filtered\">Listado de Exámenes Finales</h1>
    <table class=\"tabla_home table\" id=\"copied-table\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"3\">
                    Buscar por: Fecha y Hora
                    <input type=\"text\" id=\"searchFechaHora\" onkeyup=\"filterTable()\" placeholder=\"Buscar Fecha y Hora...\">
                </th>
                <th colspan=\"1\">
                    Buscar por: Curso
                    <input type=\"text\" id=\"searchCurso\" onkeyup=\"filterTable()\" placeholder=\"Buscar Curso...\">
                </th>
                <th colspan=\"4\">
                    Buscar por: Presidente
                    <input type=\"text\" id=\"searchPresidente\" onkeyup=\"filterTable()\" placeholder=\"Buscar Presidente...\">
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Fecha y Hora</th>
                <th>Modalidad Mesa</th>
                <th>Curso</th>
                <th>Presidente</th>
                <th>Vocal 1</th>
                <th>Vocal 2</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for examen_final in examen_finals %}
            <tr>
                <td>{{ examen_final.id }}</td>
                <td>{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d H:i') : '' }}</td>
                <td>{{ examen_final.modalidadMesa ?: 'No asignada' }}</td>
                <td>
                    {% if examen_final.curso %}
                        {{ examen_final.curso.asignatura.tecnicatura }}
                        {{ examen_final.curso }}
                    {% else %}
                        Sin curso
                    {% endif %}
                </td>
                <td>{{ examen_final.presidente ? examen_final.presidente.persona : 'Sin presidente' }}</td>
                <td>{{ examen_final.vocal1 ? examen_final.vocal1.persona : 'Sin vocal 1' }}</td>
                <td>{{ examen_final.vocal2 ? examen_final.vocal2.persona : 'Sin vocal 2' }}</td>
                
                <td>
                    <a href=\"{{ path('app_examen_final_show', {'id': examen_final.id}) }}\">Ver</a>
                    <a href=\"{{ path('app_examen_final_edit', {'id': examen_final.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"11\">No se encontraron registros</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_examen_final_new') }}\">Crear Nuevo Examen Final</a>

<script>
function filterTable() {
    var table = document.getElementById(\"copied-table\");
    var trs = table.getElementsByTagName(\"tbody\")[0].getElementsByTagName(\"tr\");
    var searchFechaHora = document.getElementById(\"searchFechaHora\").value.toLowerCase();
    var searchCurso = document.getElementById(\"searchCurso\").value.toLowerCase();
    var searchPresidente = document.getElementById(\"searchPresidente\").value.toLowerCase();

    for (var i = 0; i < trs.length; i++) {
        var tds = trs[i].getElementsByTagName(\"td\");
        if (tds.length < 8) continue;

        var fechaHora = tds[1].textContent.toLowerCase();
        var curso = tds[3].textContent.toLowerCase();
        var presidente = tds[4].textContent.toLowerCase();

        var show = true;
        if (searchFechaHora && !fechaHora.includes(searchFechaHora)) show = false;
        if (searchCurso && !curso.includes(searchCurso)) show = false;
        if (searchPresidente && !presidente.includes(searchPresidente)) show = false;

        trs[i].style.display = show ? \"\" : \"none\";
    }
}
</script>

{% endblock %}", "examen_final/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\examen_final\\index.html.twig");
    }
}
