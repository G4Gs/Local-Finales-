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

/* vistas/create3_form.html.twig */
class __TwigTemplate_908c91a553623e34cbacd123f62368e2 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistas/create3_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistas/create3_form.html.twig"));

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["id" => "form-crea-correlativa", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_correlativa", ["asignatura_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignatura"]) || array_key_exists("asignatura", $context) ? $context["asignatura"] : (function () { throw new RuntimeError('Variable "asignatura" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "tecnicatura_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tecnicatura"]) || array_key_exists("tecnicatura", $context) ? $context["tecnicatura"] : (function () { throw new RuntimeError('Variable "tecnicatura" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)])]]);
        yield "
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "asignatura", [], "any", false, false, false, 3), 'row', ["label" => "Asignatura"]);
        yield "
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "correlativa", [], "any", false, false, false, 4), 'row', ["label" => "Correlativas"]);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "motivo", [], "any", false, false, false, 5), 'row', ["label" => "Motivo"]);
        yield "
    <button type=\"submit\"class=\"button\">Guardar</button>
";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vistas/create3_form.html.twig";
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
        return array (  65 => 7,  60 => 5,  56 => 4,  52 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# create3_form.html.twig #}
{{ form_start(form, {'attr': {'id': 'form-crea-correlativa', 'action': path('add_correlativa', {'asignatura_id': asignatura.id, 'tecnicatura_id': tecnicatura.id})}}) }}
    {{ form_row(form.asignatura, {'label': 'Asignatura'}) }}
    {{ form_row(form.correlativa, {'label': 'Correlativas'}) }}
    {{ form_row(form.motivo, {'label': 'Motivo'}) }}
    <button type=\"submit\"class=\"button\">Guardar</button>
{{ form_end(form) }}", "vistas/create3_form.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistas\\create3_form.html.twig");
    }
}
