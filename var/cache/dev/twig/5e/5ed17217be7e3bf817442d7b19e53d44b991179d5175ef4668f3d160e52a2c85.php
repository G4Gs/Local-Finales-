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

/* vistascursada/create_form_curso.html.twig */
class __TwigTemplate_07be6c1aa28d27867a2057c8b70191a74ed91e1f8041d413c4821677be2aa5aa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistascursada/create_form_curso.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistascursada/create_form_curso.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["id" => "form-crea-curso"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_curso", ["tecnicatura_id" =>         // line 4
(isset($context["tecId"]) || array_key_exists("tecId", $context) ? $context["tecId"] : (function () { throw new RuntimeError('Variable "tecId" does not exist.', 4, $this->source); })()), "comision_id" => (isset($context["comId"]) || array_key_exists("comId", $context) ? $context["comId"] : (function () { throw new RuntimeError('Variable "comId" does not exist.', 4, $this->source); })())])]);
        // line 5
        yield "

        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "CUPOF", [], "any", false, false, false, 7), 'row', ["label" => "CUPOF"]);
        yield "
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "asignatura", [], "any", false, false, false, 8), 'row', ["label" => "Asignatura"]);
        yield "
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "comision", [], "any", false, false, false, 9), 'row', ["label" => "Comisión"]);
        yield "
    <button type=\"submit\"class=\"button\">Guardar</button>
";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_end');
        yield "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vistascursada/create_form_curso.html.twig";
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
        return array (  71 => 11,  66 => 9,  62 => 8,  58 => 7,  54 => 5,  52 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{{ form_start(form, {
    'attr': {'id': 'form-crea-curso'},
    'action': path('crear_curso', { 'tecnicatura_id': tecId, 'comision_id': comId })
}) }}

        {{ form_row(form.CUPOF, {'label': 'CUPOF'})}}
        {{ form_row(form.asignatura, {'label': 'Asignatura'})}}
        {{ form_row(form.comision, {'label': 'Comisión'})}}
    <button type=\"submit\"class=\"button\">Guardar</button>
{{ form_end(form) }}

", "vistascursada/create_form_curso.html.twig", "C:\\xampp\\htdocs\\Local 9-6\\local\\templates\\vistascursada\\create_form_curso.html.twig");
    }
}
