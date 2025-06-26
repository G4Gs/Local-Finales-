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

/* vistasmesas/Super_Editar.html.twig */
class __TwigTemplate_9eb6171741b97799af3485aad1d00dea750432d3b13618447de69444b2572d3e extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasmesas/Super_Editar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasmesas/Super_Editar.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "<h1 style=\"text-align: center;\">Edición de Datos</h1>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div style=\"max-width: 600px; margin: 0 auto;\">
        ";
        // line 5
        if (array_key_exists("form_inscripcion", $context)) {
            // line 6
            yield "            <h2 style=\"text-align: center;\">Editar Inscripción a Final</h2>
            ";
            // line 7
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_inscripcion"]) || array_key_exists("form_inscripcion", $context) ? $context["form_inscripcion"] : (function () { throw new RuntimeError('Variable "form_inscripcion" does not exist.', 7, $this->source); })()), 'form_start');
            yield "
                ";
            // line 8
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_inscripcion"]) || array_key_exists("form_inscripcion", $context) ? $context["form_inscripcion"] : (function () { throw new RuntimeError('Variable "form_inscripcion" does not exist.', 8, $this->source); })()), 'widget');
            yield "
                <div style=\"text-align: center;\">
                    <button class=\"btn btn-primary\">Guardar cambios</button>
                </div>
            ";
            // line 12
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_inscripcion"]) || array_key_exists("form_inscripcion", $context) ? $context["form_inscripcion"] : (function () { throw new RuntimeError('Variable "form_inscripcion" does not exist.', 12, $this->source); })()), 'form_end');
            yield "
        ";
        }
        // line 14
        yield "
       ";
        // line 15
        if (array_key_exists("form_examen_final", $context)) {
            // line 16
            yield "         <h2 style=\"text-align: center;\">Editar Fecha de Final</h2>
         ";
            // line 17
            yield Twig\Extension\CoreExtension::include($this->env, $context, "examen_final/_form.html.twig", ["form" => (isset($context["form_examen_final"]) || array_key_exists("form_examen_final", $context) ? $context["form_examen_final"] : (function () { throw new RuntimeError('Variable "form_examen_final" does not exist.', 17, $this->source); })()), "examen_final" => (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 17, $this->source); })()), "button_label" => "Guardar"]);
            yield "
       
        ";
        }
        // line 20
        yield "
        ";
        // line 21
        if (array_key_exists("form_nota", $context)) {
            // line 22
            yield "            <h2 style=\"text-align: center;\">Editar Nota de Final</h2>
            ";
            // line 23
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_nota"]) || array_key_exists("form_nota", $context) ? $context["form_nota"] : (function () { throw new RuntimeError('Variable "form_nota" does not exist.', 23, $this->source); })()), 'form_start');
            yield "
                ";
            // line 24
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_nota"]) || array_key_exists("form_nota", $context) ? $context["form_nota"] : (function () { throw new RuntimeError('Variable "form_nota" does not exist.', 24, $this->source); })()), 'widget');
            yield "
                <div style=\"text-align: center;\">
                    <button class=\"btn btn-primary\">Guardar cambios</button>
                </div>
            ";
            // line 28
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_nota"]) || array_key_exists("form_nota", $context) ? $context["form_nota"] : (function () { throw new RuntimeError('Variable "form_nota" does not exist.', 28, $this->source); })()), 'form_end');
            yield "
        ";
        }
        // line 30
        yield "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vistasmesas/Super_Editar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  164 => 30,  159 => 28,  152 => 24,  148 => 23,  145 => 22,  143 => 21,  140 => 20,  134 => 17,  131 => 16,  129 => 15,  126 => 14,  121 => 12,  114 => 8,  110 => 7,  107 => 6,  105 => 5,  102 => 4,  89 => 3,  66 => 1,  55 => 3,  52 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block title %}<h1 style=\"text-align: center;\">Edición de Datos</h1>{% endblock %}

{% block body %}
    <div style=\"max-width: 600px; margin: 0 auto;\">
        {% if form_inscripcion is defined %}
            <h2 style=\"text-align: center;\">Editar Inscripción a Final</h2>
            {{ form_start(form_inscripcion) }}
                {{ form_widget(form_inscripcion) }}
                <div style=\"text-align: center;\">
                    <button class=\"btn btn-primary\">Guardar cambios</button>
                </div>
            {{ form_end(form_inscripcion) }}
        {% endif %}

       {% if form_examen_final is defined %}
         <h2 style=\"text-align: center;\">Editar Fecha de Final</h2>
         {{ include('examen_final/_form.html.twig', { form: form_examen_final, examen_final: examen_final, button_label: 'Guardar' }) }}
       
        {% endif %}

        {% if form_nota is defined %}
            <h2 style=\"text-align: center;\">Editar Nota de Final</h2>
            {{ form_start(form_nota) }}
                {{ form_widget(form_nota) }}
                <div style=\"text-align: center;\">
                    <button class=\"btn btn-primary\">Guardar cambios</button>
                </div>
            {{ form_end(form_nota) }}
        {% endif %}
    </div>
{% endblock %}", "vistasmesas/Super_Editar.html.twig", "C:\\xampp\\htdocs\\local\\templates\\vistasmesas\\Super_Editar.html.twig");
    }
}
