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

/* vistasestudiante/modal_cursos_disponibles.html.twig */
class __TwigTemplate_9bb154663c3a9a138a37c5a55cdf415b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasestudiante/modal_cursos_disponibles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasestudiante/modal_cursos_disponibles.html.twig"));

        // line 1
        yield "<table class=\"tabla_home\" border=\"1\">
    <thead>
        <tr>
            <th>Asignatura</th>
            <th>Año</th>
            <th>Ciclo</th>
            <th>Comisión</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 13
            yield "            <tr>
                <td>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 14), "nombre", [], "any", false, false, false, 14), "html", null, true);
            yield "</td>
                <td>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 15), "anio", [], "any", false, false, false, 15), "html", null, true);
            yield "</td>
                <td>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 16), "ciclolectivo", [], "any", false, false, false, 16), "html", null, true);
            yield "</td>
                <td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
                <td>     
                    ";
            // line 20
            yield "                    <button class:\"button\" onclick=\"inscribirCurso('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 20), "tecnicatura", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 20), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "')\" class=\"btn-primary\">Inscribirse</button>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 27
        if (!$context['_iterated']) {
            // line 24
            yield "            <tr>
                <td colspan=\"5\">No hay cursos disponibles</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['curso'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "    </tbody>
</table>


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
        return "vistasestudiante/modal_cursos_disponibles.html.twig";
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
        return array (  112 => 28,  103 => 24,  101 => 27,  86 => 20,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  66 => 13,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"tabla_home\" border=\"1\">
    <thead>
        <tr>
            <th>Asignatura</th>
            <th>Año</th>
            <th>Ciclo</th>
            <th>Comisión</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        {% for curso in cursos %}
            <tr>
                <td>{{ curso.asignatura.nombre }}</td>
                <td>{{ curso.asignatura.anio }}</td>
                <td>{{ curso.comision.ciclolectivo }}</td>
                <td>{{ curso.comision }}</td>
                <td>     
                    {#crear cursada para el alumno del curso seleccionado#}
                    <button class:\"button\" onclick=\"inscribirCurso('{{ curso.comision.tecnicatura.id }}', '{{ curso.comision.id }}', '{{ curso.id }}', '{{ id }}')\" class=\"btn-primary\">Inscribirse</button>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">No hay cursos disponibles</td>
            </tr>
        {% endfor %}
    </tbody>
</table>


", "vistasestudiante/modal_cursos_disponibles.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistasestudiante\\modal_cursos_disponibles.html.twig");
    }
}
