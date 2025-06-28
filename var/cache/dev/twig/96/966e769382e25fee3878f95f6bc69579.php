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
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Manejo de envío de formularios en los modales
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

        // Abrir modal de edición
        function openEditExamenModal(examenId) {
            const url = \"";
        // line 55
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

        // Abrir modal de creación
        function openNewExamenModal() {
            const url = \"";
        // line 77
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

        // Recarga el formulario por AJAX cuando cambian los selects dependientes
        function updateExamenFinalForm(modalBodyId, data) {
            fetch('/examen/final/form-update', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams(data)
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById(modalBodyId).innerHTML = html;
            });
        }

        // Evento para selects dependientes (recarga el form por AJAX)
        document.addEventListener('change', function(e) {
            if (['tecnicatura-select', 'asignatura-select'].includes(e.target.id)) {
                const modalBody = e.target.closest('.submodal');
                if (!modalBody) return;
                const tecnicatura = modalBody.querySelector('#tecnicatura-select')?.value || '';
                const asignatura = modalBody.querySelector('#asignatura-select')?.value || '';
                const data = {
                    tecnicatura: tecnicatura,
                    asignatura: asignatura
                };
                updateExamenFinalForm(modalBody.id, data);
            }
        });

        // Asignaturas por Tecnicatura
        document.addEventListener('change', function(e) {
            if (e.target && e.target.id === 'tecnicatura-select') {
                const tecnicaturaId = e.target.value;
                const asignaturaSelect = document.getElementById('asignatura-select');
                const comisionSelect = document.getElementById('comision-select');
                if (!tecnicaturaId) {
                    asignaturaSelect.innerHTML = '<option value=\"\">Seleccione una asignatura</option>';
                    comisionSelect.innerHTML = '<option value=\"\">Seleccione una comisión</option>';
                    return;
                }
                fetch('/asignaturas/by-tecnicatura/' + tecnicaturaId)
                    .then(response => response.json())
                    .then(data => {
                        asignaturaSelect.innerHTML = '<option value=\"\">Seleccione una asignatura</option>';
                        data.forEach(function(asignatura) {
                            asignaturaSelect.innerHTML += `<option value=\"\${asignatura.id}\">\${asignatura.nombre}</option>`;
                        });
                        comisionSelect.innerHTML = '<option value=\"\">Seleccione una comisión</option>';
                    });
            }
        });

        // Comisiones por Asignatura
        document.addEventListener('change', function(e) {
            if (e.target && e.target.id === 'asignatura-select') {
                const asignaturaId = e.target.value;
                const comisionSelect = document.getElementById('comision-select');
                if (!asignaturaId) {
                    comisionSelect.innerHTML = '<option value=\"\">Seleccione una comisión</option>';
                    return;
                }
                fetch('/comisiones/by-asignatura/' + asignaturaId)
                    .then(response => response.json())
                    .then(data => {
                        comisionSelect.innerHTML = '<option value=\"\">Seleccione una comisión</option>';
                        data.forEach(function(comision) {
                            comisionSelect.innerHTML += `<option value=\"\${comision.id}\">\${comision.nombre}</option>`;
                        });
                    });
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 173
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

        // line 174
        yield "<h1 style=\"text-align: center;\">Listado de Llamados a Exámenes Finales</h1>

";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "flashes", ["error"], "method", false, false, false, 176));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 177
            yield "    <div class=\"alert alert-danger\">
        ";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
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
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 197, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 198
            yield "        <tr>
            <td>";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 199), "html", null, true);
            yield "</td>
            <td>";
            // line 200
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 200), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 201
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 201), "H:i"), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 202
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 202), "persona", [], "any", false, false, false, 202), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 203
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 203), "persona", [], "any", false, false, false, 203), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 204
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 204), "persona", [], "any", false, false, false, 204), "html", null, true)) : (""));
            yield "</td>
            <td>";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "estadoMesa", [], "any", false, false, false, 205), "html", null, true);
            yield "</td>
            <td>
                ";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 207), "nombre", [], "any", false, false, false, 207) . " - ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 207), "nombre", [], "any", false, false, false, 207)) . " - ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "comision", [], "any", false, false, false, 207), "comision", [], "any", false, false, false, 207)) . " (") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "comision", [], "any", false, false, false, 207), "cicloLectivo", [], "any", false, false, false, 207)) . ")"), "html", null, true);
            yield "
            </td>
            <td>
                <button type=\"button\" class=\"buttonn\" onclick=\"openEditExamenModal(";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 210), "html", null, true);
            yield ")\">
                    Editar
                </button>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 215
        if (!$context['_iterated']) {
            // line 216
            yield "        <tr>
            <td colspan=\"9\">No se encontraron registros</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
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
        return array (  400 => 220,  391 => 216,  389 => 215,  379 => 210,  373 => 207,  368 => 205,  364 => 204,  360 => 203,  356 => 202,  352 => 201,  348 => 200,  344 => 199,  341 => 198,  336 => 197,  318 => 181,  309 => 178,  306 => 177,  302 => 176,  298 => 174,  285 => 173,  179 => 77,  154 => 55,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Examen Final index{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Manejo de envío de formularios en los modales
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

        // Abrir modal de edición
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

        // Abrir modal de creación
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

        // Recarga el formulario por AJAX cuando cambian los selects dependientes
        function updateExamenFinalForm(modalBodyId, data) {
            fetch('/examen/final/form-update', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams(data)
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById(modalBodyId).innerHTML = html;
            });
        }

        // Evento para selects dependientes (recarga el form por AJAX)
        document.addEventListener('change', function(e) {
            if (['tecnicatura-select', 'asignatura-select'].includes(e.target.id)) {
                const modalBody = e.target.closest('.submodal');
                if (!modalBody) return;
                const tecnicatura = modalBody.querySelector('#tecnicatura-select')?.value || '';
                const asignatura = modalBody.querySelector('#asignatura-select')?.value || '';
                const data = {
                    tecnicatura: tecnicatura,
                    asignatura: asignatura
                };
                updateExamenFinalForm(modalBody.id, data);
            }
        });

        // Asignaturas por Tecnicatura
        document.addEventListener('change', function(e) {
            if (e.target && e.target.id === 'tecnicatura-select') {
                const tecnicaturaId = e.target.value;
                const asignaturaSelect = document.getElementById('asignatura-select');
                const comisionSelect = document.getElementById('comision-select');
                if (!tecnicaturaId) {
                    asignaturaSelect.innerHTML = '<option value=\"\">Seleccione una asignatura</option>';
                    comisionSelect.innerHTML = '<option value=\"\">Seleccione una comisión</option>';
                    return;
                }
                fetch('/asignaturas/by-tecnicatura/' + tecnicaturaId)
                    .then(response => response.json())
                    .then(data => {
                        asignaturaSelect.innerHTML = '<option value=\"\">Seleccione una asignatura</option>';
                        data.forEach(function(asignatura) {
                            asignaturaSelect.innerHTML += `<option value=\"\${asignatura.id}\">\${asignatura.nombre}</option>`;
                        });
                        comisionSelect.innerHTML = '<option value=\"\">Seleccione una comisión</option>';
                    });
            }
        });

        // Comisiones por Asignatura
        document.addEventListener('change', function(e) {
            if (e.target && e.target.id === 'asignatura-select') {
                const asignaturaId = e.target.value;
                const comisionSelect = document.getElementById('comision-select');
                if (!asignaturaId) {
                    comisionSelect.innerHTML = '<option value=\"\">Seleccione una comisión</option>';
                    return;
                }
                fetch('/comisiones/by-asignatura/' + asignaturaId)
                    .then(response => response.json())
                    .then(data => {
                        comisionSelect.innerHTML = '<option value=\"\">Seleccione una comisión</option>';
                        data.forEach(function(comision) {
                            comisionSelect.innerHTML += `<option value=\"\${comision.id}\">\${comision.nombre}</option>`;
                        });
                    });
            }
        });
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
                {{ examen_final.tecnicatura.nombre ~ ' - ' ~ examen_final.asignatura.nombre ~ ' - ' ~ examen_final.comision.comision ~ ' (' ~ examen_final.comision.cicloLectivo ~ ')' }}
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
