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

/* nota/index.html.twig */
class __TwigTemplate_042ea790e7d1e1919a5498815f76bf3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nota/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nota/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nota/index.html.twig", 1);
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

        yield "Nota index";
        
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
        yield "    <h1 class=\"datos-filtered\">Listado de Notas</h1>
    <table class=\"tabla_home table\" id=\"copied-table\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"2\">
                    Buscar por: Primer Parcial
                    <input type=\"text\" id=\"searchPrimerParcial\" onkeyup=\"filterTable()\" placeholder=\"Buscar Primer Parcial...\">
                </th>
                <th colspan=\"1\">
                    Buscar por: Primer Recuperatorio
                    <input type=\"text\" id=\"searchPrimerRecuperatorio\" onkeyup=\"filterTable()\" placeholder=\"Buscar Primer Recuperatorio...\">
                </th>
                <th colspan=\"1\">
                    Buscar por: Segundo Parcial
                    <input type=\"text\" id=\"searchSegundoParcial\" onkeyup=\"filterTable()\" placeholder=\"Buscar Segundo Parcial...\">
                </th>
                <th colspan=\"2\">
                    Buscar por: Segundo Recuperatorio
                    <input type=\"text\" id=\"searchSegundoRecuperatorio\" onkeyup=\"filterTable()\" placeholder=\"Buscar Segundo Recuperatorio...\">
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Primer Parcial</th>
                <th>Primer Recuperatorio</th>
                <th>Segundo Parcial</th>
                <th>Segundo Recuperatorio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notas"]) || array_key_exists("notas", $context) ? $context["notas"] : (function () { throw new RuntimeError('Variable "notas" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notum"]) {
            // line 38
            yield "            <tr>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notum"], "id", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notum"], "parcial", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notum"], "recuperatorio1", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notum"], "parcial2", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notum"], "recuperatorio2", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notum"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\">Mostrar</a>
                    <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notum"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 53
        if (!$context['_iterated']) {
            // line 50
            yield "            <tr>
                <td colspan=\"6\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notum'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nota_new");
        yield "\">Crear Nueva Nota</a>

    <script>
    function filterTable() {
        var table = document.getElementById(\"copied-table\");
        var trs = table.getElementsByTagName(\"tbody\")[0].getElementsByTagName(\"tr\");

        var searchPrimerParcial = document.getElementById(\"searchPrimerParcial\").value.toLowerCase();
        var searchPrimerRecuperatorio = document.getElementById(\"searchPrimerRecuperatorio\").value.toLowerCase();
        var searchSegundoParcial = document.getElementById(\"searchSegundoParcial\").value.toLowerCase();
        var searchSegundoRecuperatorio = document.getElementById(\"searchSegundoRecuperatorio\").value.toLowerCase();

        for (var i = 0; i < trs.length; i++) {
            var tds = trs[i].getElementsByTagName(\"td\");
            if (tds.length < 6) continue;

            var primerParcial = tds[1].textContent.toLowerCase();
            var primerRecuperatorio = tds[2].textContent.toLowerCase();
            var segundoParcial = tds[3].textContent.toLowerCase();
            var segundoRecuperatorio = tds[4].textContent.toLowerCase();

            var show = true;

            if (searchPrimerParcial && primerParcial.indexOf(searchPrimerParcial) === -1) show = false;
            if (searchPrimerRecuperatorio && primerRecuperatorio.indexOf(searchPrimerRecuperatorio) === -1) show = false;
            if (searchSegundoParcial && segundoParcial.indexOf(searchSegundoParcial) === -1) show = false;
            if (searchSegundoRecuperatorio && segundoRecuperatorio.indexOf(searchSegundoRecuperatorio) === -1) show = false;

            trs[i].style.display = show ? \"\" : \"none\";
        }
    }
    </script>
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
        return "nota/index.html.twig";
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
        return array (  190 => 57,  185 => 54,  176 => 50,  174 => 53,  166 => 46,  162 => 45,  157 => 43,  153 => 42,  149 => 41,  145 => 40,  141 => 39,  138 => 38,  133 => 37,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nota index{% endblock %}

{% block body %}
    <h1 class=\"datos-filtered\">Listado de Notas</h1>
    <table class=\"tabla_home table\" id=\"copied-table\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"2\">
                    Buscar por: Primer Parcial
                    <input type=\"text\" id=\"searchPrimerParcial\" onkeyup=\"filterTable()\" placeholder=\"Buscar Primer Parcial...\">
                </th>
                <th colspan=\"1\">
                    Buscar por: Primer Recuperatorio
                    <input type=\"text\" id=\"searchPrimerRecuperatorio\" onkeyup=\"filterTable()\" placeholder=\"Buscar Primer Recuperatorio...\">
                </th>
                <th colspan=\"1\">
                    Buscar por: Segundo Parcial
                    <input type=\"text\" id=\"searchSegundoParcial\" onkeyup=\"filterTable()\" placeholder=\"Buscar Segundo Parcial...\">
                </th>
                <th colspan=\"2\">
                    Buscar por: Segundo Recuperatorio
                    <input type=\"text\" id=\"searchSegundoRecuperatorio\" onkeyup=\"filterTable()\" placeholder=\"Buscar Segundo Recuperatorio...\">
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Primer Parcial</th>
                <th>Primer Recuperatorio</th>
                <th>Segundo Parcial</th>
                <th>Segundo Recuperatorio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for notum in notas %}
            <tr>
                <td>{{ notum.id }}</td>
                <td>{{ notum.parcial }}</td>
                <td>{{ notum.recuperatorio1 }}</td>
                <td>{{ notum.parcial2 }}</td>
                <td>{{ notum.recuperatorio2 }}</td>
                <td>
                    <a href=\"{{ path('app_nota_show', {'id': notum.id}) }}\">Mostrar</a>
                    <a href=\"{{ path('app_nota_edit', {'id': notum.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">No se encontraron registros</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_nota_new') }}\">Crear Nueva Nota</a>

    <script>
    function filterTable() {
        var table = document.getElementById(\"copied-table\");
        var trs = table.getElementsByTagName(\"tbody\")[0].getElementsByTagName(\"tr\");

        var searchPrimerParcial = document.getElementById(\"searchPrimerParcial\").value.toLowerCase();
        var searchPrimerRecuperatorio = document.getElementById(\"searchPrimerRecuperatorio\").value.toLowerCase();
        var searchSegundoParcial = document.getElementById(\"searchSegundoParcial\").value.toLowerCase();
        var searchSegundoRecuperatorio = document.getElementById(\"searchSegundoRecuperatorio\").value.toLowerCase();

        for (var i = 0; i < trs.length; i++) {
            var tds = trs[i].getElementsByTagName(\"td\");
            if (tds.length < 6) continue;

            var primerParcial = tds[1].textContent.toLowerCase();
            var primerRecuperatorio = tds[2].textContent.toLowerCase();
            var segundoParcial = tds[3].textContent.toLowerCase();
            var segundoRecuperatorio = tds[4].textContent.toLowerCase();

            var show = true;

            if (searchPrimerParcial && primerParcial.indexOf(searchPrimerParcial) === -1) show = false;
            if (searchPrimerRecuperatorio && primerRecuperatorio.indexOf(searchPrimerRecuperatorio) === -1) show = false;
            if (searchSegundoParcial && segundoParcial.indexOf(searchSegundoParcial) === -1) show = false;
            if (searchSegundoRecuperatorio && segundoRecuperatorio.indexOf(searchSegundoRecuperatorio) === -1) show = false;

            trs[i].style.display = show ? \"\" : \"none\";
        }
    }
    </script>
{% endblock %}
", "nota/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\nota\\index.html.twig");
    }
}
