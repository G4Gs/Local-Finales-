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

/* examen_final/index.html.twig */
class __TwigTemplate_6a81ea848ddc60e245537bed77a2fbae extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_final/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_final/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Examen Final index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        yield "    <script>
        function handleExamenFinalFormSubmit(modalId, bodyId) {
            const modalBody = document.getElementById(bodyId);
            modalBody.addEventListener('submit', function(e) {
                if (e.target.tagName === 'FORM') {
                    if (e.target.querySelector('button[type=\"submit\"].btn-danger')) {
                        e.preventDefault();
                        const form = e.target;
                        const formData = new FormData(form);
                        fetch(form.action, {
                            method: form.method,
                            body: formData,
                        })
                        .then(() => {
                            window.location.reload();
                        })
                        .catch(error => {
                            alert('Ocurrió un error al eliminar el examen final.');
                            console.error(error);
                        });
                        return;
                    }
                    e.preventDefault();
                    const form = e.target;
                    const formData = new FormData(form);
                    fetch(form.action, {
                        method: form.method,
                        body: formData,
                    })
                    .then(response => response.text())
                    .then(html => {
                        if (html.includes('<form')) {
                            modalBody.innerHTML = html;
                        } else {
                            window.location.reload();
                        }
                    })
                    .catch(error => {
                        alert('Ocurrió un error al guardar el examen final.');
                        console.error(error);
                    });
                }
            });
        }

        function openEditExamenModal(examenId) {
            const url = \"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_edit", ["id" => "__id__"]);
        yield "\".replace('__id__', examenId);
            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('editExamenBody').innerHTML = html;
                document.getElementById('editExamenModal').style.display = 'block';
                handleExamenFinalFormSubmit('editExamenModal', 'editExamenBody');
            })
            .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        function closeEditExamenModal() {
            document.getElementById('editExamenModal').style.display = 'none';
            document.getElementById('editExamenBody').innerHTML = '';
        }

        function openNewExamenModal() {
            const url = \"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_new");
        yield "\";
            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('newExamenBody').innerHTML = html;
                document.getElementById('newExamenModal').style.display = 'block';
                handleExamenFinalFormSubmit('newExamenModal', 'newExamenBody');
            })
            .catch(error => console.error('Error al cargar el formulario de creación:', error));
        }

        function closeNewExamenModal() {
            document.getElementById('newExamenModal').style.display = 'none';
            document.getElementById('newExamenBody').innerHTML = '';
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
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

        // line 96
        yield "<h1 style=\"text-align: center;\">Listado de Llamados a Exámenes Finales</h1>

";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", ["error"], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 99
            yield "    <div class=\"alert alert-danger\">
        ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "
<table class=\"tabla_home\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Presidente</th>
            <th>Vocal 1</th>
            <th>Vocal 2</th>
            <th>Estado de Mesa</th>
            <th>Curso</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 119, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 120
            yield "        <tr>
            <td>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 121), "html", null, true);
            yield "</td>
            <td>";
            // line 122
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 122), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 123
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 123), "H:i"), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 124
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 124), "persona", [], "any", false, false, false, 124), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 125
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 125), "persona", [], "any", false, false, false, 125), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 126
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 126), "persona", [], "any", false, false, false, 126), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "estadoMesa", [], "any", false, false, false, 127), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 129
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 129), "asignatura", [], "any", false, false, false, 129), "nombre", [], "any", false, false, false, 129) . " - ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 129), "comision", [], "any", false, false, false, 129), "ciclo_lectivo", [], "any", false, false, false, 129)), "html", null, true)) : (""));
            yield "
            </td>
            <td>
                <button type=\"button\" class=\"buttonn\" onclick=\"openEditExamenModal(";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 132), "html", null, true);
            yield ")\">
                    Editar
                </button>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 137
        if (!$context['_iterated']) {
            // line 138
            yield "        <tr>
            <td colspan=\"9\">No se encontraron registros</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "    </tbody>
</table>

<div style=\"text-align: center;\">
    <button class=\"buttonn\" onclick=\"openNewExamenModal()\">Crear Nuevo Examen Final</button>
</div>

<!-- Modal para editar -->
<div id=\"editExamenModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeEditExamenModal()\">&times;</span>
        <div id=\"editExamenBody\" class=\"submodal\"></div>
    </div>
</div>

<!-- Modal para crear -->
<div id=\"newExamenModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeNewExamenModal()\">&times;</span>
        <div id=\"newExamenBody\" class=\"submodal\"></div>
    </div>
</div>
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
        return "examen_final/index.html.twig";
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
        return array (  320 => 142,  311 => 138,  309 => 137,  299 => 132,  293 => 129,  288 => 127,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  268 => 122,  264 => 121,  261 => 120,  256 => 119,  238 => 103,  229 => 100,  226 => 99,  222 => 98,  218 => 96,  205 => 95,  173 => 73,  149 => 52,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Examen Final index{% endblock %}

{% block javascripts %}
    <script>
        function handleExamenFinalFormSubmit(modalId, bodyId) {
            const modalBody = document.getElementById(bodyId);
            modalBody.addEventListener('submit', function(e) {
                if (e.target.tagName === 'FORM') {
                    if (e.target.querySelector('button[type=\"submit\"].btn-danger')) {
                        e.preventDefault();
                        const form = e.target;
                        const formData = new FormData(form);
                        fetch(form.action, {
                            method: form.method,
                            body: formData,
                        })
                        .then(() => {
                            window.location.reload();
                        })
                        .catch(error => {
                            alert('Ocurrió un error al eliminar el examen final.');
                            console.error(error);
                        });
                        return;
                    }
                    e.preventDefault();
                    const form = e.target;
                    const formData = new FormData(form);
                    fetch(form.action, {
                        method: form.method,
                        body: formData,
                    })
                    .then(response => response.text())
                    .then(html => {
                        if (html.includes('<form')) {
                            modalBody.innerHTML = html;
                        } else {
                            window.location.reload();
                        }
                    })
                    .catch(error => {
                        alert('Ocurrió un error al guardar el examen final.');
                        console.error(error);
                    });
                }
            });
        }

        function openEditExamenModal(examenId) {
            const url = \"{{ path('app_examen_final_edit', {'id': '__id__'}) }}\".replace('__id__', examenId);
            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('editExamenBody').innerHTML = html;
                document.getElementById('editExamenModal').style.display = 'block';
                handleExamenFinalFormSubmit('editExamenModal', 'editExamenBody');
            })
            .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        function closeEditExamenModal() {
            document.getElementById('editExamenModal').style.display = 'none';
            document.getElementById('editExamenBody').innerHTML = '';
        }

        function openNewExamenModal() {
            const url = \"{{ path('app_examen_final_new') }}\";
            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('newExamenBody').innerHTML = html;
                document.getElementById('newExamenModal').style.display = 'block';
                handleExamenFinalFormSubmit('newExamenModal', 'newExamenBody');
            })
            .catch(error => console.error('Error al cargar el formulario de creación:', error));
        }

        function closeNewExamenModal() {
            document.getElementById('newExamenModal').style.display = 'none';
            document.getElementById('newExamenBody').innerHTML = '';
        }
    </script>
{% endblock %}

{% block body %}
<h1 style=\"text-align: center;\">Listado de Llamados a Exámenes Finales</h1>

{% for message in app.flashes('error') %}
    <div class=\"alert alert-danger\">
        {{ message }}
    </div>
{% endfor %}

<table class=\"tabla_home\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Presidente</th>
            <th>Vocal 1</th>
            <th>Vocal 2</th>
            <th>Estado de Mesa</th>
            <th>Curso</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    {% for examen_final in examen_finals %}
        <tr>
            <td>{{ examen_final.id }}</td>
            <td>{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d') : '' }}</td>
            <td>{{ examen_final.hora ? examen_final.hora|date('H:i') : '' }}</td>
            <td>{{ examen_final.presidente ? examen_final.presidente.persona : '' }}</td>
            <td>{{ examen_final.vocal1 ? examen_final.vocal1.persona : '' }}</td>
            <td>{{ examen_final.vocal2 ? examen_final.vocal2.persona : '' }}</td>
            <td>{{ examen_final.estadoMesa }}</td>
            <td>
                {{ examen_final.curso ? examen_final.curso.asignatura.nombre ~ ' - ' ~ examen_final.curso.comision.ciclo_lectivo : '' }}
            </td>
            <td>
                <button type=\"button\" class=\"buttonn\" onclick=\"openEditExamenModal({{ examen_final.id }})\">
                    Editar
                </button>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"9\">No se encontraron registros</td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<div style=\"text-align: center;\">
    <button class=\"buttonn\" onclick=\"openNewExamenModal()\">Crear Nuevo Examen Final</button>
</div>

<!-- Modal para editar -->
<div id=\"editExamenModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeEditExamenModal()\">&times;</span>
        <div id=\"editExamenBody\" class=\"submodal\"></div>
    </div>
</div>

<!-- Modal para crear -->
<div id=\"newExamenModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeNewExamenModal()\">&times;</span>
        <div id=\"newExamenBody\" class=\"submodal\"></div>
    </div>
</div>
{% endblock %}", "examen_final/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\examen_final\\index.html.twig");
    }
}
