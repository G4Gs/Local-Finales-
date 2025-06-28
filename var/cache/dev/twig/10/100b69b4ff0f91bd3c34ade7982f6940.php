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

/* curso/index.html.twig */
class __TwigTemplate_ff8e3c00c284d6096feca0760419a7d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "curso/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "curso/index.html.twig"));

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

        yield "Curso index";
        
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
        yield "    <h1>Listado de Cursos</h1>
";
        // line 33
        yield "<table class=\"table\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ciclo Lectivo</th>
            <th>Horario</th>
            <th>Asignatura</th>
            <th>Comisión</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 46
            yield "        <tr>
            <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
            <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 48), "ciclolectivo", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
            <td>
              ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "horarios", [], "any", false, false, false, 50));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
                // line 51
                yield "                 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["horario"], "html", null, true);
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ", ";
                }
                // line 52
                yield "              ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 53
                yield "                 Sin horario
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['horario'], $context['_parent'], $context['_iterated'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "            </td>
            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 56), "nombre", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
            <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 57), "comision", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
            <td>
                <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_curso_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\">Mostrar</a>
                <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_curso_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\">Editar</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "        <tr>
            <td colspan=\"7\">No se encontraron registros</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['curso'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "    </tbody>
</table>


    <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_curso_new");
        yield "\">Crear Nuevo Curso</a>
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
        return "curso/index.html.twig";
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
        return array (  219 => 72,  213 => 68,  204 => 64,  202 => 63,  194 => 60,  190 => 59,  185 => 57,  181 => 56,  178 => 55,  171 => 53,  158 => 52,  152 => 51,  134 => 50,  129 => 48,  125 => 47,  122 => 46,  117 => 45,  103 => 33,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Curso index{% endblock %}

{% block body %}
    <h1>Listado de Cursos</h1>
{#
    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Horario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for curso in cursos %}
            <tr>
                <td>{{ curso.id }}</td>
                <td>{{ curso.horario }}</td>
                <td>
                    <a href=\"{{ path('app_curso_show', {'id': curso.id}) }}\">Mostrar</a>
                    <a href=\"{{ path('app_curso_edit', {'id': curso.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">No se encontraron registros</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>#}
<table class=\"table\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ciclo Lectivo</th>
            <th>Horario</th>
            <th>Asignatura</th>
            <th>Comisión</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    {% for curso in cursos %}
        <tr>
            <td>{{ curso.id }}</td>
            <td>{{ curso.comision.ciclolectivo }}</td>
            <td>
              {% for horario in curso.horarios %}
                 {{ horario }}{% if not loop.last %}, {% endif %}
              {% else %}
                 Sin horario
             {% endfor %}
            </td>
            <td>{{ curso.asignatura.nombre }}</td>
            <td>{{ curso.comision.comision }}</td>
            <td>
                <a href=\"{{ path('app_curso_show', {'id': curso.id}) }}\">Mostrar</a>
                <a href=\"{{ path('app_curso_edit', {'id': curso.id}) }}\">Editar</a>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"7\">No se encontraron registros</td>
        </tr>
    {% endfor %}
    </tbody>
</table>


    <a href=\"{{ path('app_curso_new') }}\">Crear Nuevo Curso</a>
{% endblock %}
", "curso/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\curso\\index.html.twig");
    }
}
