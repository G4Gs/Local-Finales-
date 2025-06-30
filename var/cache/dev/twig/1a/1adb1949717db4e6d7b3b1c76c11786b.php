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
        yield "    <h1>Listado de Exámenes Finales</h1>
    <table class=\"tabla_home table\" id=\"copied-table\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"2\">
                    Buscar por: Fecha y Hora
                    <input type=\"text\" id=\"searchFechaHora\" onkeyup=\"filterTable()\" placeholder=\"Buscar Fecha y Hora...\">
                </th>
                <th colspan=\"3\">
                    Buscar por: Curso
                    <input type=\"text\" id=\"searchCurso\" onkeyup=\"filterTable()\" placeholder=\"Buscar Curso...\">
                </th>
                    <th colspan=\"3\">
                    Buscar por: Comision
                    <input type=\"text\" id=\"searchComision\" onkeyup=\"filterTable()\" placeholder=\"Buscar Comision...\">
                </th>
                <th colspan=\"3\">
                    Buscar por: Presidente
                    <input type=\"text\" id=\"searchPresidente\" onkeyup=\"filterTable()\" placeholder=\"Buscar Presidente...\">
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Fecha y Hora</th>
                <th>Modalidad Mesa</th>
                <th>Curso</th>
                <th>Tecnicatura</th>
                <th>Asignatura</th>
                <th>Comisión</th>
                <th>Presidente</th>
                <th>Vocal 1</th>
                <th>Vocal 2</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 43
            yield "            <tr>
                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                <td>";
            // line 45
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 45), "Y-m-d H:i"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 46
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "modalidadMesa", [], "any", false, false, false, 46)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "modalidadMesa", [], "any", false, false, false, 46), "html", null, true)) : ("No asignada"));
            yield "</td>
                <td>
                    ";
            // line 48
            if (CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 48)) {
                // line 49
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 49), "html", null, true);
                yield "
                    ";
            } else {
                // line 51
                yield "                        Sin curso
                    ";
            }
            // line 53
            yield "                </td>
                <td>
                    ";
            // line 55
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 55) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 55), "asignatura", [], "any", false, false, false, 55)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 55), "asignatura", [], "any", false, false, false, 55), "tecnicatura", [], "any", false, false, false, 55))) {
                // line 56
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 56), "asignatura", [], "any", false, false, false, 56), "tecnicatura", [], "any", false, false, false, 56), "html", null, true);
                yield "
                    ";
            } else {
                // line 58
                yield "                        Sin tecnicatura
                    ";
            }
            // line 60
            yield "                </td>
                <td>
                    ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 62) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 62), "asignatura", [], "any", false, false, false, 62))) {
                // line 63
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 63), "asignatura", [], "any", false, false, false, 63), "nombre", [], "any", false, false, false, 63), "html", null, true);
                yield "
                    ";
            } else {
                // line 65
                yield "                        Sin asignatura
                    ";
            }
            // line 67
            yield "                </td>
                <td>
                    ";
            // line 69
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 69) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 69), "comision", [], "any", false, false, false, 69))) {
                // line 70
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 70), "comision", [], "any", false, false, false, 70), "html", null, true);
                yield "
                    ";
            } else {
                // line 72
                yield "                        Sin comisión
                    ";
            }
            // line 74
            yield "                </td>
                <td>";
            // line 75
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 75)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 75), "persona", [], "any", false, false, false, 75), "html", null, true)) : ("Sin vocal 1"));
            yield "</td>
                <td>";
            // line 76
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 76)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 76), "persona", [], "any", false, false, false, 76), "html", null, true)) : ("Sin vocal 2"));
            yield "</td>
                <td>";
            // line 77
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 77)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 77), "persona", [], "any", false, false, false, 77), "html", null, true)) : ("Sin presidente"));
            yield "</td>
                <td>
                    <a href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\">Ver</a>
                    <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 87
        if (!$context['_iterated']) {
            // line 84
            yield "            <tr>
                <td colspan=\"11\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_new");
        yield "\">Crear Nuevo Examen Final</a>

    <script>
    // Filtro de tabla por Fecha y Hora, Curso, Comisión y Presidente
    function filterTable() {
        var table = document.getElementById(\"copied-table\");
        var trs = table.getElementsByTagName(\"tbody\")[0].getElementsByTagName(\"tr\");
        var searchFechaHora = document.getElementById(\"searchFechaHora\").value.toLowerCase();
        var searchCurso = document.getElementById(\"searchCurso\").value.toLowerCase();
        var searchComision = document.getElementById(\"searchComision\").value.toLowerCase();
        var searchPresidente = document.getElementById(\"searchPresidente\").value.toLowerCase();

        for (var i = 0; i < trs.length; i++) {
            var tds = trs[i].getElementsByTagName(\"td\");
            if (tds.length < 11) continue;

            var fechaHora = tds[1].textContent.toLowerCase();
            var curso = tds[3].textContent.toLowerCase();
            var comision = tds[6].textContent.toLowerCase();
            var presidente = tds[7].textContent.toLowerCase();

            var show = true;
            if (searchFechaHora && fechaHora.indexOf(searchFechaHora) === -1) show = false;
            if (searchCurso && curso.indexOf(searchCurso) === -1) show = false;
            if (searchComision && comision.indexOf(searchComision) === -1) show = false;
            if (searchPresidente && presidente.indexOf(searchPresidente) === -1) show = false;

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
        return array (  263 => 91,  258 => 88,  249 => 84,  247 => 87,  239 => 80,  235 => 79,  230 => 77,  226 => 76,  222 => 75,  219 => 74,  215 => 72,  209 => 70,  207 => 69,  203 => 67,  199 => 65,  193 => 63,  191 => 62,  187 => 60,  183 => 58,  177 => 56,  175 => 55,  171 => 53,  167 => 51,  161 => 49,  159 => 48,  154 => 46,  150 => 45,  146 => 44,  143 => 43,  138 => 42,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ExamenFinal index{% endblock %}

{% block body %}
    <h1>Listado de Exámenes Finales</h1>
    <table class=\"tabla_home table\" id=\"copied-table\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"2\">
                    Buscar por: Fecha y Hora
                    <input type=\"text\" id=\"searchFechaHora\" onkeyup=\"filterTable()\" placeholder=\"Buscar Fecha y Hora...\">
                </th>
                <th colspan=\"3\">
                    Buscar por: Curso
                    <input type=\"text\" id=\"searchCurso\" onkeyup=\"filterTable()\" placeholder=\"Buscar Curso...\">
                </th>
                    <th colspan=\"3\">
                    Buscar por: Comision
                    <input type=\"text\" id=\"searchComision\" onkeyup=\"filterTable()\" placeholder=\"Buscar Comision...\">
                </th>
                <th colspan=\"3\">
                    Buscar por: Presidente
                    <input type=\"text\" id=\"searchPresidente\" onkeyup=\"filterTable()\" placeholder=\"Buscar Presidente...\">
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Fecha y Hora</th>
                <th>Modalidad Mesa</th>
                <th>Curso</th>
                <th>Tecnicatura</th>
                <th>Asignatura</th>
                <th>Comisión</th>
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
                        {{ examen_final.curso }}
                    {% else %}
                        Sin curso
                    {% endif %}
                </td>
                <td>
                    {% if examen_final.curso and examen_final.curso.asignatura and examen_final.curso.asignatura.tecnicatura %}
                        {{ examen_final.curso.asignatura.tecnicatura }}
                    {% else %}
                        Sin tecnicatura
                    {% endif %}
                </td>
                <td>
                    {% if examen_final.curso and examen_final.curso.asignatura %}
                        {{ examen_final.curso.asignatura.nombre }}
                    {% else %}
                        Sin asignatura
                    {% endif %}
                </td>
                <td>
                    {% if examen_final.curso and examen_final.curso.comision %}
                        {{ examen_final.curso.comision }}
                    {% else %}
                        Sin comisión
                    {% endif %}
                </td>
                <td>{{ examen_final.vocal1 ? examen_final.vocal1.persona : 'Sin vocal 1' }}</td>
                <td>{{ examen_final.vocal2 ? examen_final.vocal2.persona : 'Sin vocal 2' }}</td>
                <td>{{ examen_final.presidente ? examen_final.presidente.persona : 'Sin presidente' }}</td>
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
    // Filtro de tabla por Fecha y Hora, Curso, Comisión y Presidente
    function filterTable() {
        var table = document.getElementById(\"copied-table\");
        var trs = table.getElementsByTagName(\"tbody\")[0].getElementsByTagName(\"tr\");
        var searchFechaHora = document.getElementById(\"searchFechaHora\").value.toLowerCase();
        var searchCurso = document.getElementById(\"searchCurso\").value.toLowerCase();
        var searchComision = document.getElementById(\"searchComision\").value.toLowerCase();
        var searchPresidente = document.getElementById(\"searchPresidente\").value.toLowerCase();

        for (var i = 0; i < trs.length; i++) {
            var tds = trs[i].getElementsByTagName(\"td\");
            if (tds.length < 11) continue;

            var fechaHora = tds[1].textContent.toLowerCase();
            var curso = tds[3].textContent.toLowerCase();
            var comision = tds[6].textContent.toLowerCase();
            var presidente = tds[7].textContent.toLowerCase();

            var show = true;
            if (searchFechaHora && fechaHora.indexOf(searchFechaHora) === -1) show = false;
            if (searchCurso && curso.indexOf(searchCurso) === -1) show = false;
            if (searchComision && comision.indexOf(searchComision) === -1) show = false;
            if (searchPresidente && presidente.indexOf(searchPresidente) === -1) show = false;

            trs[i].style.display = show ? \"\" : \"none\";
        }
    }
    </script>
{% endblock %}
", "examen_final/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\examen_final\\index.html.twig");
    }
}
