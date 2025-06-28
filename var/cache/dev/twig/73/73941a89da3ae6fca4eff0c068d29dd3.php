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

/* vistas/view_correlativas.html.twig */
class __TwigTemplate_02cc6b2a0444293b40ecb0e407f8e4fe extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistas/view_correlativas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistas/view_correlativas.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<h3>Materias Correlativas de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignatura"]) || array_key_exists("asignatura", $context) ? $context["asignatura"] : (function () { throw new RuntimeError('Variable "asignatura" does not exist.', 2, $this->source); })()), "nombre", [], "any", false, false, false, 2), "html", null, true);
        yield "</h3>

<table class=\"tabla_home\" id=\"tablaTecnicaturas\" border=\"1\">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Motivo</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        if ((array_key_exists("correlativas", $context) &&  !(null === (isset($context["correlativas"]) || array_key_exists("correlativas", $context) ? $context["correlativas"] : (function () { throw new RuntimeError('Variable "correlativas" does not exist.', 12, $this->source); })())))) {
            // line 13
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["correlativas"]) || array_key_exists("correlativas", $context) ? $context["correlativas"] : (function () { throw new RuntimeError('Variable "correlativas" does not exist.', 13, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["corre"]) {
                // line 14
                yield "                <tr>
                    <td>";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["corre"], "correlativa", [], "any", false, false, false, 15), "nombre", [], "any", false, false, false, 15), "html", null, true);
                yield "</td>
                    <td>";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["corre"], "motivo", [], "any", false, false, false, 16), "html", null, true);
                yield "</td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            // line 18
            if (!$context['_iterated']) {
                // line 19
                yield "                <tr>
                    <td colspan=\"5\">No se encontraron registros</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['corre'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "        ";
        }
        // line 24
        yield "    </tbody>
</table>
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
        return "vistas/view_correlativas.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  122 => 24,  119 => 23,  110 => 19,  108 => 18,  101 => 16,  97 => 15,  94 => 14,  88 => 13,  86 => 12,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<h3>Materias Correlativas de {{ asignatura.nombre }}</h3>

<table class=\"tabla_home\" id=\"tablaTecnicaturas\" border=\"1\">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Motivo</th>
        </tr>
    </thead>
    <tbody>
        {% if correlativas is defined and correlativas is not null %}
            {% for corre in correlativas %}
                <tr>
                    <td>{{ corre.correlativa.nombre }}</td>
                    <td>{{ corre.motivo }}</td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">No se encontraron registros</td>
                </tr>
            {% endfor %}
        {% endif %}
    </tbody>
</table>
{% endblock %}
", "vistas/view_correlativas.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistas\\view_correlativas.html.twig");
    }
}
