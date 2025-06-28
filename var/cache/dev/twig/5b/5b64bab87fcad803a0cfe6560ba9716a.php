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

/* vistascursada/edit_cursadadocente.html.twig */
class __TwigTemplate_5139cebb251a8bc670bebc2779fa3705 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistascursada/edit_cursadadocente.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistascursada/edit_cursadadocente.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form-edit-cursada-docente", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_cursada_docente", ["curso_id" => (isset($context["cursoId"]) || array_key_exists("cursoId", $context) ? $context["cursoId"] : (function () { throw new RuntimeError('Variable "cursoId" does not exist.', 1, $this->source); })()), "cursada_docente_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["cursadaDocente"]) || array_key_exists("cursadaDocente", $context) ? $context["cursadaDocente"] : (function () { throw new RuntimeError('Variable "cursadaDocente" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)])]]);
        yield "

";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "toma", [], "any", false, false, false, 3), 'row', ["label" => "Fecha de Toma"]);
        yield "
";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "cese", [], "any", false, false, false, 4), 'row', ["label" => "Fecha de Cese"]);
        yield "
";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "docente", [], "any", false, false, false, 5), 'row', ["label" => "Docente"]);
        yield "
";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "revista", [], "any", false, false, false, 6), 'row', ["label" => "Situación de Revista"]);
        yield "
";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "licencia", [], "any", false, false, false, 7), 'row', ["label" => "Licencia"]);
        yield "
";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "curso", [], "any", false, false, false, 8), 'row', ["label" => "Curso"]);
        yield " 


<button type=\"submit\" id=\"guarda-modal-edit\"class=\"button\">Guardar</button>

";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
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
        return "vistascursada/edit_cursadadocente.html.twig";
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
        return array (  81 => 13,  73 => 8,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  53 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'id': 'form-edit-cursada-docente', 'action': path('editar_cursada_docente', {'curso_id': cursoId, 'cursada_docente_id': cursadaDocente.id})}}) }}

{{ form_row(form.toma, {'label': 'Fecha de Toma'}) }}
{{ form_row(form.cese, {'label': 'Fecha de Cese'}) }}
{{ form_row(form.docente, {'label': 'Docente'}) }}
{{ form_row(form.revista, {'label': 'Situación de Revista'}) }}
{{ form_row(form.licencia, {'label': 'Licencia'}) }}
{{ form_row(form.curso, {'label': 'Curso'}) }} 


<button type=\"submit\" id=\"guarda-modal-edit\"class=\"button\">Guardar</button>

{{ form_end(form) }}
", "vistascursada/edit_cursadadocente.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistascursada\\edit_cursadadocente.html.twig");
    }
}
