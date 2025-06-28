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

/* vistaspersona/create_persona_form.html.twig */
class __TwigTemplate_df9102fe09dad57353fe8ff4b9053f94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistaspersona/create_persona_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistaspersona/create_persona_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form-crea-persona", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_persona")]]);
        yield "
    ";
        // line 2
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "nombre", [], "any", false, false, false, 2), 'row', ["label" => "Nombre"]);
        yield " 
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "apellido", [], "any", false, false, false, 3), 'row', ["label" => "Apellido"]);
        yield " 
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "fecha_nacimiento", [], "any", false, false, false, 4), 'row', ["label" => "Fecha de Nacimiento"]);
        yield " 
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "dni_pasaporte", [], "any", false, false, false, 5), 'row', ["label" => "DNI o Pasaporte"]);
        yield " 
    ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "genero", [], "any", false, false, false, 6), 'row', ["label" => "Género"]);
        yield "
  <div class=\"form-group\">
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "home-label"], "label" => "E-Mail"]);
        yield "
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "home-input"]]);
        yield "
        ";
        // line 10
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "errors", [], "any", false, false, false, 10)) > 0)) {
            // line 11
            yield "            <div class=\"form-error-message\">
                ";
            // line 12
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'errors');
            yield "
            </div>
        ";
        }
        // line 15
        yield "    </div>
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "telefono", [], "any", false, false, false, 16), 'row', ["label" => "Teléfono"]);
        yield " 
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "partido", [], "any", false, false, false, 17), 'row', ["label" => "Partido"]);
        yield " 
    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "calle", [], "any", false, false, false, 18), 'row', ["label" => "Calle"]);
        yield " 
    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "numero", [], "any", false, false, false, 19), 'row', ["label" => "Número"]);
        yield " 
    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "piso", [], "any", false, false, false, 20), 'row', ["label" => "Piso"]);
        yield " 
    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "departamento", [], "any", false, false, false, 21), 'row', ["label" => "Departamento"]);
        yield " 
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "pasillo", [], "any", false, false, false, 22), 'row', ["label" => "Pasillo"]);
        yield " 
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "pais", [], "any", false, false, false, 23), 'row', ["label" => "Nacionalidad"]);
        yield " 
    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "localidad", [], "any", false, false, false, 24), 'row', ["label" => "Localidad"]);
        yield " 
    <button type=\"submit\">Guardar</button>
";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
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
        return "vistaspersona/create_persona_form.html.twig";
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
        return array (  132 => 26,  127 => 24,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  92 => 15,  86 => 12,  83 => 11,  81 => 10,  77 => 9,  73 => 8,  68 => 6,  64 => 5,  60 => 4,  56 => 3,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'id': 'form-crea-persona', 'action': path('crear_persona' )}}) }}
    {{ form_row(form.nombre, {'label': 'Nombre'}) }} 
    {{ form_row(form.apellido, {'label': 'Apellido'}) }} 
    {{ form_row(form.fecha_nacimiento, {'label': 'Fecha de Nacimiento'}) }} 
    {{ form_row(form.dni_pasaporte, {'label': 'DNI o Pasaporte'}) }} 
    {{ form_row(form.genero, {'label': 'Género'}) }}
  <div class=\"form-group\">
        {{ form_label(form.email, 'E-Mail', {'label_attr': {'class': 'home-label'}}) }}
        {{ form_widget(form.email, {'attr': {'class': 'home-input'}}) }}
        {% if form.email.vars.errors|length > 0 %}
            <div class=\"form-error-message\">
                {{ form_errors(form.email) }}
            </div>
        {% endif %}
    </div>
    {{ form_row(form.telefono, {'label': 'Teléfono'}) }} 
    {{ form_row(form.partido, {'label': 'Partido'}) }} 
    {{ form_row(form.calle, {'label': 'Calle'}) }} 
    {{ form_row(form.numero, {'label': 'Número'}) }} 
    {{ form_row(form.piso, {'label': 'Piso'}) }} 
    {{ form_row(form.departamento, {'label': 'Departamento'}) }} 
    {{ form_row(form.pasillo, {'label': 'Pasillo'}) }} 
    {{ form_row(form.pais, {'label': 'Nacionalidad'}) }} 
    {{ form_row(form.localidad, {'label': 'Localidad'}) }} 
    <button type=\"submit\">Guardar</button>
{{ form_end(form) }}

", "vistaspersona/create_persona_form.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistaspersona\\create_persona_form.html.twig");
    }
}
