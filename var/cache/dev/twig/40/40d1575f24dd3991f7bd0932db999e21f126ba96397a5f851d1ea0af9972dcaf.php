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
class __TwigTemplate_019c552100ef41c7a07c5ed26b1f29945672b35c783e14541fef2b9491fc8413 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasestudiante/modal_cursos_disponibles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasestudiante/modal_cursos_disponibles.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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


", "vistasestudiante/modal_cursos_disponibles.html.twig", "C:\\xampp\\htdocs\\local\\templates\\vistasestudiante\\modal_cursos_disponibles.html.twig");
    }
}
