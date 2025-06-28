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

/* vistascursada/create_form2.html.twig */
class __TwigTemplate_38394eb6bb5c38e1bb9342d9499f744f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistascursada/create_form2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistascursada/create_form2.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form-crea-cursada"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_cursada", ["tecnicatura_id" =>         // line 3
(isset($context["tecId"]) || array_key_exists("tecId", $context) ? $context["tecId"] : (function () { throw new RuntimeError('Variable "tecId" does not exist.', 3, $this->source); })()), "comision_id" => (isset($context["comId"]) || array_key_exists("comId", $context) ? $context["comId"] : (function () { throw new RuntimeError('Variable "comId" does not exist.', 3, $this->source); })())])]);
        // line 4
        yield "
        ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "condicion", [], "any", false, false, false, 5), 'row', ["label" => "Condición"]);
        yield "
        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "alumno", [], "any", false, false, false, 6), 'row', ["label" => "Alumno"]);
        yield "
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "modalidad", [], "any", false, false, false, 7), 'row', ["label" => "Modalidad"]);
        yield "
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nota_id", [], "any", false, false, false, 8), 'row', ["label" => "Nota"]);
        yield "
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "curso", [], "any", false, false, false, 9), 'row', ["label" => "Curso"]);
        yield " 
    <button type=\"submit\"class=\"button\">Guardar</button>
";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_end');
        yield "


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vistascursada/create_form2.html.twig";
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
        return array (  75 => 11,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  51 => 4,  49 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {
    'attr': {'id': 'form-crea-cursada'},
    'action': path('crear_cursada', { 'tecnicatura_id': tecId, 'comision_id': comId })
}) }}
        {{ form_row(form.condicion, {'label': 'Condición'})  }}
        {{ form_row(form.alumno, {'label': 'Alumno'})  }}
        {{ form_row(form.modalidad, {'label': 'Modalidad'})  }}
        {{ form_row(form.nota_id, {'label': 'Nota'})  }}
        {{ form_row(form.curso, {'label': 'Curso'})  }} 
    <button type=\"submit\"class=\"button\">Guardar</button>
{{ form_end(form) }}


", "vistascursada/create_form2.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistascursada\\create_form2.html.twig");
    }
}
