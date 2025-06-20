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

        yield "Examen Final index";
        
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
        yield "    <div id=\"body-vistas2\" style=\"display: block;\">
    <h1 class=\"datos-filtered\" id=\"titulo-pre\">Listado de Exámenes Finales</h1>

    <table class=\"tabla_home\" id=\"copied-table\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"3\">
                Buscar por : Tecnicatura
                <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTable()\" placeholder=\"Buscar Tecnicatura...\">
                </th>
                <th colspan=\"3\">
                Buscar por : Asignatura
                <input type=\"text\" id=\"searchAsignatura\" onkeyup=\"filterTable()\" placeholder=\"Buscar Asignatura...\">
                </th>
                <th colspan=\"4\">
                Buscar por : Presidente de Mesa
                <input type=\"text\" id=\"searchPresidente\" onkeyup=\"filterTable()\" placeholder=\"Buscar Presidente de Mesa...\">
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Tecnicatura</th>
                <th>Asignatura</th>
                <th>Fecha</th>
                <th>Horario</th>
                <th>Presidente de Mesa</th>
                <th>Vocal 1</th>
                <th>Vocal 2</th>
                <th>Condición</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 40
            yield "            <tr>
                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                <td>";
            // line 42
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicaturaId", [], "any", false, false, false, 42)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicaturaId", [], "any", false, false, false, 42), "nombre", [], "any", false, false, false, 42), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 43
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignaturaId", [], "any", false, false, false, 43)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignaturaId", [], "any", false, false, false, 43), "nombre", [], "any", false, false, false, 43), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 44
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 45
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "horario", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "horario", [], "any", false, false, false, 45), "H:i"), "html", null, true)) : (""));
            yield "</td>                
                <td>
                    ";
            // line 47
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidenteId", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidenteId", [], "any", false, false, false, 47), "persona", [], "any", false, false, false, 47), "html", null, true)) : (""));
            yield "
                </td>
                <td>
                    ";
            // line 50
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1Id", [], "any", false, false, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1Id", [], "any", false, false, false, 50), "persona", [], "any", false, false, false, 50), "html", null, true)) : (""));
            yield "<br>
                    ";
            // line 51
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2Id", [], "any", false, false, false, 51)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2Id", [], "any", false, false, false, 51), "persona", [], "any", false, false, false, 51), "html", null, true)) : (""));
            yield "
                </td>
                <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "condicion", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"buttonn\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 62
        if (!$context['_iterated']) {
            // line 59
            yield "            <tr>
                <td colspan=\"10\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "        </tbody>
    </table>
    </div> 
    <div style=\"text-align: center;\">
      <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_new");
        yield "\" class=\"buttonn\">Crear Nuevo Examen Final</a>
   </div>  
 <script>
function filterTable() {
    const inputTec = document.getElementById(\"searchTecnicatura\").value.toUpperCase();
    const inputAsig = document.getElementById(\"searchAsignatura\").value.toUpperCase();
    const inputPres = document.getElementById(\"searchPresidente\").value.toUpperCase();
    const table = document.getElementById(\"copied-table\");
    const tr = table.getElementsByTagName(\"tr\");

    for (let i = 2; i < tr.length; i++) { // dos filas encabezado antes de datos
        const tdTec = tr[i].getElementsByTagName(\"td\")[1];
        const tdAsig = tr[i].getElementsByTagName(\"td\")[2];
        const tdPres = tr[i].getElementsByTagName(\"td\")[5];

        if (tdTec && tdAsig && tdPres) {
            const tecText = tdTec.textContent || tdTec.innerText;
            const asigText = tdAsig.textContent || tdAsig.innerText;
            const presText = tdPres.textContent || tdPres.innerText;

            if (
                tecText.toUpperCase().includes(inputTec) &&
                asigText.toUpperCase().includes(inputAsig) &&
                presText.toUpperCase().includes(inputPres)
            ) {
                tr[i].style.display = \"\";
            } else {
                tr[i].style.display = \"none\";
            }
        }
    }
}

function clearFilters() {
    document.getElementById(\"searchTecnicatura\").value = \"\";
    document.getElementById(\"searchAsignatura\").value = \"\";
    document.getElementById(\"searchPresidente\").value = \"\";
    filterTable();
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
        return array (  209 => 67,  203 => 63,  194 => 59,  192 => 62,  184 => 55,  179 => 53,  174 => 51,  170 => 50,  164 => 47,  159 => 45,  155 => 44,  151 => 43,  147 => 42,  143 => 41,  140 => 40,  135 => 39,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Examen Final index{% endblock %}

{% block body %}
    <div id=\"body-vistas2\" style=\"display: block;\">
    <h1 class=\"datos-filtered\" id=\"titulo-pre\">Listado de Exámenes Finales</h1>

    <table class=\"tabla_home\" id=\"copied-table\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"3\">
                Buscar por : Tecnicatura
                <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTable()\" placeholder=\"Buscar Tecnicatura...\">
                </th>
                <th colspan=\"3\">
                Buscar por : Asignatura
                <input type=\"text\" id=\"searchAsignatura\" onkeyup=\"filterTable()\" placeholder=\"Buscar Asignatura...\">
                </th>
                <th colspan=\"4\">
                Buscar por : Presidente de Mesa
                <input type=\"text\" id=\"searchPresidente\" onkeyup=\"filterTable()\" placeholder=\"Buscar Presidente de Mesa...\">
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Tecnicatura</th>
                <th>Asignatura</th>
                <th>Fecha</th>
                <th>Horario</th>
                <th>Presidente de Mesa</th>
                <th>Vocal 1</th>
                <th>Vocal 2</th>
                <th>Condición</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for examen_final in examen_finals %}
            <tr>
                <td>{{ examen_final.id }}</td>
                <td>{{ examen_final.tecnicaturaId ? examen_final.tecnicaturaId.nombre : '' }}</td>
                <td>{{ examen_final.asignaturaId ? examen_final.asignaturaId.nombre : '' }}</td>
                <td>{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d') : '' }}</td>
                <td>{{ examen_final.horario ? examen_final.horario|date('H:i') : '' }}</td>                
                <td>
                    {{ examen_final.presidenteId ? examen_final.presidenteId.persona : '' }}
                </td>
                <td>
                    {{ examen_final.vocal1Id ? examen_final.vocal1Id.persona : '' }}<br>
                    {{ examen_final.vocal2Id ? examen_final.vocal2Id.persona : '' }}
                </td>
                <td>{{ examen_final.condicion }}</td>
                <td>
                    <a href=\"{{ path('app_examen_final_edit', {'id': examen_final.id}) }}\" class=\"buttonn\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">No se encontraron registros</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div> 
    <div style=\"text-align: center;\">
      <a href=\"{{ path('app_examen_final_new') }}\" class=\"buttonn\">Crear Nuevo Examen Final</a>
   </div>  
 <script>
function filterTable() {
    const inputTec = document.getElementById(\"searchTecnicatura\").value.toUpperCase();
    const inputAsig = document.getElementById(\"searchAsignatura\").value.toUpperCase();
    const inputPres = document.getElementById(\"searchPresidente\").value.toUpperCase();
    const table = document.getElementById(\"copied-table\");
    const tr = table.getElementsByTagName(\"tr\");

    for (let i = 2; i < tr.length; i++) { // dos filas encabezado antes de datos
        const tdTec = tr[i].getElementsByTagName(\"td\")[1];
        const tdAsig = tr[i].getElementsByTagName(\"td\")[2];
        const tdPres = tr[i].getElementsByTagName(\"td\")[5];

        if (tdTec && tdAsig && tdPres) {
            const tecText = tdTec.textContent || tdTec.innerText;
            const asigText = tdAsig.textContent || tdAsig.innerText;
            const presText = tdPres.textContent || tdPres.innerText;

            if (
                tecText.toUpperCase().includes(inputTec) &&
                asigText.toUpperCase().includes(inputAsig) &&
                presText.toUpperCase().includes(inputPres)
            ) {
                tr[i].style.display = \"\";
            } else {
                tr[i].style.display = \"none\";
            }
        }
    }
}

function clearFilters() {
    document.getElementById(\"searchTecnicatura\").value = \"\";
    document.getElementById(\"searchAsignatura\").value = \"\";
    document.getElementById(\"searchPresidente\").value = \"\";
    filterTable();
}
</script>
  
{% endblock %}  ", "examen_final/index.html.twig", "C:\\xampp\\htdocs\\local\\Local-Finales-\\templates\\examen_final\\index.html.twig");
    }
}
