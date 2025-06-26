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
class __TwigTemplate_aef49e4075bc6aefa4b0e5b4dcc050e0 extends Template
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

        $this->parent = $this->loadTemplate("base.html.twig", "examen_final/index.html.twig", 1);
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
        yield "<script>
    function filterTable() {
        const inputCurso = document.getElementById('searchCurso').value.toLowerCase();
        const inputPres = document.getElementById('searchPresidente').value.toLowerCase();

        const table = document.querySelector('.tabla_home tbody');
        const rows = table.getElementsByTagName('tr');

        for (let row of rows) {
            const curso = row.cells[6]?.textContent.toLowerCase() || '';
            const presidente = row.cells[3]?.textContent.toLowerCase() || '';

            const matchCurso = curso.includes(inputCurso);
            const matchPres = presidente.includes(inputPres);

            if (matchCurso && matchPres) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    }

    function handleExamenFinalFormSubmit(modalId, bodyId) {
        const modalBody = document.getElementById(bodyId);
        modalBody.replaceWith(modalBody.cloneNode(true));
        const newModalBody = document.getElementById(bodyId);
        newModalBody.addEventListener('submit', function(e) {
            if (e.target.tagName === 'FORM') {
                if (e.target.classList.contains('form-eliminar-examen')) {
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
                        newModalBody.innerHTML = html;
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
        // line 62
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
        // line 83
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

    // line 105
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

        // line 106
        yield "<h1 style=\"text-align: center;\">Listado de Llamados a Exámenes Finales</h1>

";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "flashes", ["error"], "method", false, false, false, 108));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 109
            yield "    <div class=\"alert alert-danger\">
        ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "flashes", ["success"], "method", false, false, false, 113));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 114
            yield "    <div class=\"alert alert-success\">
        ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "
<table class=\"tabla_home\">
    <thead>
        <tr>
            <th colspan=\"6\">
                Buscar por : Curso
                <input type=\"text\" id=\"searchCurso\" onkeyup=\"filterTable()\" placeholder=\"Buscar Curso...\">
            </th>
            <th colspan=\"4\">
                Buscar por : Presidente de Mesa
                <input type=\"text\" id=\"searchPresidente\" onkeyup=\"filterTable()\" placeholder=\"Buscar Presidente de Mesa...\">
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Presidente</th>
            <th>Vocal 1</th>
            <th>Vocal 2</th>
            <th>Curso</th>
            <th>Estado de Mesa</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 144, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 145
            yield "            <tr>
                <td>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 146), "html", null, true);
            yield "</td>
                <td>";
            // line 147
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 147)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 147), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 148
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 148)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 148), "H:i"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 149
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 149)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 149), "persona", [], "any", false, false, false, 149), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 150
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 150)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 150), "persona", [], "any", false, false, false, 150), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 151
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 151)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 151), "persona", [], "any", false, false, false, 151), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 152
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 152)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 152), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "estadoMesa", [], "any", false, false, false, 153), "html", null, true);
            yield "</td>
                <td>
                    <button type=\"button\" class=\"buttonn\" onclick=\"openEditExamenModal(";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 155), "html", null, true);
            yield ")\">Editar</button>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 162
        if (!$context['_iterated']) {
            // line 159
            yield "            <tr>
                <td colspan=\"9\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "    </tbody>
</table>

<div style=\"text-align: center; margin-top: 20px;\">
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
        return array (  352 => 163,  343 => 159,  341 => 162,  333 => 155,  328 => 153,  324 => 152,  320 => 151,  316 => 150,  312 => 149,  308 => 148,  304 => 147,  300 => 146,  297 => 145,  292 => 144,  264 => 118,  255 => 115,  252 => 114,  248 => 113,  239 => 110,  236 => 109,  232 => 108,  228 => 106,  215 => 105,  183 => 83,  159 => 62,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Examen Final index{% endblock %}

{% block javascripts %}
<script>
    function filterTable() {
        const inputCurso = document.getElementById('searchCurso').value.toLowerCase();
        const inputPres = document.getElementById('searchPresidente').value.toLowerCase();

        const table = document.querySelector('.tabla_home tbody');
        const rows = table.getElementsByTagName('tr');

        for (let row of rows) {
            const curso = row.cells[6]?.textContent.toLowerCase() || '';
            const presidente = row.cells[3]?.textContent.toLowerCase() || '';

            const matchCurso = curso.includes(inputCurso);
            const matchPres = presidente.includes(inputPres);

            if (matchCurso && matchPres) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    }

    function handleExamenFinalFormSubmit(modalId, bodyId) {
        const modalBody = document.getElementById(bodyId);
        modalBody.replaceWith(modalBody.cloneNode(true));
        const newModalBody = document.getElementById(bodyId);
        newModalBody.addEventListener('submit', function(e) {
            if (e.target.tagName === 'FORM') {
                if (e.target.classList.contains('form-eliminar-examen')) {
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
                        newModalBody.innerHTML = html;
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
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ message }}
    </div>
{% endfor %}

<table class=\"tabla_home\">
    <thead>
        <tr>
            <th colspan=\"6\">
                Buscar por : Curso
                <input type=\"text\" id=\"searchCurso\" onkeyup=\"filterTable()\" placeholder=\"Buscar Curso...\">
            </th>
            <th colspan=\"4\">
                Buscar por : Presidente de Mesa
                <input type=\"text\" id=\"searchPresidente\" onkeyup=\"filterTable()\" placeholder=\"Buscar Presidente de Mesa...\">
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Presidente</th>
            <th>Vocal 1</th>
            <th>Vocal 2</th>
            <th>Curso</th>
            <th>Estado de Mesa</th>
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
                <td>{{ examen_final.curso ? examen_final.curso : '' }}</td>
                <td>{{ examen_final.estadoMesa }}</td>
                <td>
                    <button type=\"button\" class=\"buttonn\" onclick=\"openEditExamenModal({{ examen_final.id }})\">Editar</button>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">No se encontraron registros</td>
            </tr>
        {% endfor %}
    </tbody>
</table>

<div style=\"text-align: center; margin-top: 20px;\">
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
{% endblock %}
", "examen_final/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\examen_final\\index.html.twig");
    }
}
