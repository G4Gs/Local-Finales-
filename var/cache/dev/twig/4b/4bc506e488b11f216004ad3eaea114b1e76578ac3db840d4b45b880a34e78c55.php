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

/* vistasmesas/index.html.twig */
class __TwigTemplate_380dab3fecb676ded31f9e3b97a07fd72ff411f5c43f0fd7017bc6b3b7819a98 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasmesas/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasmesas/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vistasmesas/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

        yield "<h1 style=\"text-align: center;\">Mesas de Finales</h1>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Mostrar/ocultar tablas
        function showTable(tableId) {
            const tables = document.querySelectorAll('.tabla_home');
            tables.forEach(table => {
                table.style.display = (table.id === tableId) ? '' : 'none';
            });
            document.getElementById('backButtonInscriptos').style.display = 'none';
            document.getElementById('backButtonMesas').style.display = 'none';
            document.getElementById('backButtonNotas').style.display = 'none';

            if (tableId === 'tablaInscriptos') {
                document.getElementById('backButtonInscriptos').style.display = '';
            } else if (tableId === 'tablaMesas') {
                document.getElementById('backButtonMesas').style.display = '';
            } else if (tableId === 'tablaNotasFinales') {
                document.getElementById('backButtonNotas').style.display = '';
            }
        }

        // Modal para crear inscripto
        function openInscripcionFinalModal() {
            fetch(\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_new");
        yield "\", {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('inscripcionFinalBody').innerHTML = html;
                document.getElementById('inscripcionFinalModal').style.display = 'block';
                handleInscripcionFinalFormSubmit();
            });
        }
        function closeInscripcionFinalModal() {
            document.getElementById('inscripcionFinalModal').style.display = 'none';
            document.getElementById('inscripcionFinalBody').innerHTML = '';
        }
        function handleInscripcionFinalFormSubmit() {
            const modalBody = document.getElementById('inscripcionFinalBody');
            const form = modalBody.querySelector('form');
            if (!form) return;
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(form);
                fetch(form.action, {
                    method: form.method,
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(response => response.text())
                .then(html => {
                    if (html.includes('<form')) {
                        modalBody.innerHTML = html;
                        handleInscripcionFinalFormSubmit();
                    } else {
                        window.location.reload();
                    }
                });
            }, { once: true });
        }

        // Modal para editar inscripto
        function openEditInscripcionFinalModal(id) {
            fetch(\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscripcion_final_edit", ["id" => "__id__"]);
        yield "\".replace('__id__', id), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('editInscripcionFinalBody').innerHTML = html;
                document.getElementById('editInscripcionFinalModal').style.display = 'block';
                handleSuperEditarFormSubmit('editInscripcionFinalModal', 'editInscripcionFinalBody');
            });
        }
        function closeEditInscripcionFinalModal() {
            document.getElementById('editInscripcionFinalModal').style.display = 'none';
            document.getElementById('editInscripcionFinalBody').innerHTML = '';
        }

        // Modal para editar examen final
        function openEditExamenFinalModal(id) {
            fetch(\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_edit", ["id" => "__id__"]);
        yield "\".replace('__id__', id), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('editExamenFinalBody').innerHTML = html;
                document.getElementById('editExamenFinalModal').style.display = 'block';
                handleSuperEditarFormSubmit('editExamenFinalModal', 'editExamenFinalBody');
            });
        }
        function closeEditExamenFinalModal() {
            document.getElementById('editExamenFinalModal').style.display = 'none';
            document.getElementById('editExamenFinalBody').innerHTML = '';
        }

        // Modal para editar nota
        function openEditExamenAlumnoModal(id) {
            fetch(\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_alumno_edit", ["id" => "__id__"]);
        yield "\".replace('__id__', id), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('editExamenAlumnoBody').innerHTML = html;
                document.getElementById('editExamenAlumnoModal').style.display = 'block';
                handleSuperEditarFormSubmit('editExamenAlumnoModal', 'editExamenAlumnoBody');
            });
        }
        function closeEditExamenAlumnoModal() {
            document.getElementById('editExamenAlumnoModal').style.display = 'none';
            document.getElementById('editExamenAlumnoBody').innerHTML = '';
        }

        // Reutilizable para todos los formularios de edición
        function handleSuperEditarFormSubmit(modalId, bodyId) {
            const modalBody = document.getElementById(bodyId);
            const form = modalBody.querySelector('form');
            if (!form) return;
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(form);
                fetch(form.action, {
                    method: form.method,
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(response => {
                    if (response.headers.get('content-type').includes('application/json')) {
                        return response.json();
                    }
                    return response.text();
                })
                .then(data => {
                    if (typeof data === 'object' && data.success) {
                        window.location.reload();
                    } else if (typeof data === 'string' && data.includes('<form')) {
                        modalBody.innerHTML = data;
                        handleSuperEditarFormSubmit(modalId, bodyId);
                    } else {
                        alert('Ocurrió un error al guardar.');
                    }
                })
                .catch(error => {
                    alert('Ocurrió un error al guardar.');
                    console.error(error);
                });
            }, { once: true });
        }
    </script>
    <script>
function openModal(action) {
    let url = '';
    if (action === 'mesa') {
        url = \"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nueva_mesa");
        yield "\";
    } else if (action === 'notaFinal') {
        url = \"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nueva_notaFinal");
        yield "\";
    }
    fetch(url, {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(response => response.text())
    .then(html => {
        if (action === 'mesa') {
            document.getElementById('modalMesa').innerHTML = html;
            document.getElementById('MesaModal').style.display = 'block';
            handleMesaFormSubmit();
        } else if (action === 'notaFinal') {
            document.getElementById('modalNotaFinal').innerHTML = html;
            document.getElementById('NotaFinalModal').style.display = 'block';
            handleNotaFinalFormSubmit();
        }
    });
}

function closeMesaModal() {
    document.getElementById('MesaModal').style.display = 'none';
    document.getElementById('modalMesa').innerHTML = '';
}
function closeNotaFinalModal() {
    document.getElementById('NotaFinalModal').style.display = 'none';
    document.getElementById('modalNotaFinal').innerHTML = '';
}

function handleMesaFormSubmit() {
    const modalBody = document.getElementById('modalMesa');
    const form = modalBody.querySelector('form');
    if (!form) return;
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(form);
        fetch(form.action, {
            method: form.method,
            body: formData,
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.text())
        .then(html => {
            if (html.includes('<form')) {
                modalBody.innerHTML = html;
                handleMesaFormSubmit();
            } else {
                window.location.reload();
            }
        });
    }, { once: true });
}

function handleNotaFinalFormSubmit() {
    const modalBody = document.getElementById('modalNotaFinal');
    const form = modalBody.querySelector('form');
    if (!form) return;
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(form);
        fetch(form.action, {
            method: form.method,
            body: formData,
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.text())
        .then(html => {
            if (html.includes('<form')) {
                modalBody.innerHTML = html;
                handleNotaFinalFormSubmit();
            } else {
                window.location.reload();
            }
        });
    }, { once: true });
}
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 240
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

        // line 241
        yield "<div id=\"body-vistas\">
    <h1 id=\"vistas\" style=\"text-align: center;\">Mesas de Finales</h1>
    <table class=\"tabla_home\" id=\"tablaPrincipal\" border=\"1\">
        <thead>
            <tr>
                <th>Inscriptos a Finales</th>
                <th>Fechas de Finales</th>
                <th>Notas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div>
                        <button onclick=\"showTable('tablaInscriptos')\">Ver</button>
                        ";
        // line 256
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 257
            yield "                            <button onclick=\"openInscripcionFinalModal()\">Crear Inscripto</button>
                        ";
        }
        // line 259
        yield "                    </div>
                </td>
                <td>
                    <div>
                        <button onclick=\"showTable('tablaMesas')\">Ver</button>
                        <button onclick=\"openModal('mesa')\">Establecer fecha</button>
                    </div>
                </td>
                <td>
                    <div>
                        <button onclick=\"showTable('tablaNotasFinales')\">Ver</button>
                        <button onclick=\"openModal('notaFinal')\">Cargar Nota</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    ";
        // line 278
        yield "    <table id=\"tablaInscriptos\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"6\">Inscriptos</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Estudiante</th>
                <th>Tecnicatura</th>
                <th>Asignatura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscripcion_finals"]) || array_key_exists("inscripcion_finals", $context) ? $context["inscripcion_finals"] : (function () { throw new RuntimeError('Variable "inscripcion_finals" does not exist.', 293, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion_final"]) {
            // line 294
            yield "                <tr>
                    <td>";
            // line 295
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 295)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 295), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 296
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 296) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 296), "hora", [], "any", false, false, false, 296))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 296), "hora", [], "any", false, false, false, 296), "H:i"), "html", null, true)) : (""));
            yield "</td>
                    <td>
                        ";
            // line 298
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno_id", [], "any", false, false, false, 298)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno_id", [], "any", false, false, false, 298), "persona", [], "any", false, false, false, 298), "nombre", [], "any", false, false, false, 298) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno_id", [], "any", false, false, false, 298), "persona", [], "any", false, false, false, 298), "apellido", [], "any", false, false, false, 298)), "html", null, true)) : ("N/A"));
            yield "
                    </td>
                    <td>
                        ";
            // line 301
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura_id", [], "any", false, false, false, 301) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura_id", [], "any", false, false, false, 301), "tecnicatura", [], "any", false, false, false, 301))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura_id", [], "any", false, false, false, 301), "tecnicatura", [], "any", false, false, false, 301), "nombre", [], "any", false, false, false, 301), "html", null, true)) : ("N/A"));
            yield "
                    </td>
                    <td>
                        ";
            // line 304
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura_id", [], "any", false, false, false, 304)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura_id", [], "any", false, false, false, 304), "nombre", [], "any", false, false, false, 304), "html", null, true)) : ("N/A"));
            yield "
                    </td>
                    <td>
                        ";
            // line 307
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 308
                yield "                            <button onclick=\"openEditInscripcionFinalModal(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "id", [], "any", false, false, false, 308), "html", null, true);
                yield ")\">Editar</button>
                        ";
            }
            // line 310
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 316
        if (!$context['_iterated']) {
            // line 313
            yield "                <tr>
                    <td colspan=\"6\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        yield "        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 1em;\">
        <button id=\"backButtonInscriptos\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
    </div>

    ";
        // line 324
        yield "    <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"8\">Fechas de Finales</th>
            </tr>
            <tr>
                <th>Asignatura</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Presidente</th>
                <th>Primer Vocal</th>
                <th>Segundo Vocal</th>
                <th>Tecnicatura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 341, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 342
            yield "                <tr>
                    <td>";
            // line 343
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 343)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 343), "nombre", [], "any", false, false, false, 343), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 344
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 344)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 344), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 345
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 345)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 345), "H:i"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 346
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 346)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 346), "persona", [], "any", false, false, false, 346), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 347
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 347)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 347), "persona", [], "any", false, false, false, 347), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 348
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 348)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 348), "persona", [], "any", false, false, false, 348), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 349
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 349)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 349), "nombre", [], "any", false, false, false, 349), "html", null, true)) : (""));
            yield "</td>
                    <td>
                        ";
            // line 351
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 352
                yield "                            <button onclick=\"openEditExamenFinalModal(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 352), "html", null, true);
                yield ")\">Editar</button>
                        ";
            }
            // line 354
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 360
        if (!$context['_iterated']) {
            // line 357
            yield "                <tr>
                    <td colspan=\"8\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        yield "        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 1em;\">
        <button id=\"backButtonMesas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
    </div>

    ";
        // line 368
        yield "    <table id=\"tablaNotasFinales\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"7\">Notas de los Finales</th>
            </tr>
            <tr>
                <th>Estudiante</th>
                <th>Nota</th>
                <th>Tomo</th>
                <th>Folio</th>
                <th>Tecnicatura</th>
                <th>Asignatura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_alumnos"]) || array_key_exists("examen_alumnos", $context) ? $context["examen_alumnos"] : (function () { throw new RuntimeError('Variable "examen_alumnos" does not exist.', 384, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_alumno"]) {
            // line 385
            yield "                <tr>
                    <td>
                        ";
            // line 387
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno_id", [], "any", false, false, false, 387)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno_id", [], "any", false, false, false, 387), "persona", [], "any", false, false, false, 387), "nombre", [], "any", false, false, false, 387) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno_id", [], "any", false, false, false, 387), "persona", [], "any", false, false, false, 387), "apellido", [], "any", false, false, false, 387)), "html", null, true)) : ("N/A"));
            yield "
                    </td>
                    <td>";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "nota", [], "any", false, false, false, 389), "html", null, true);
            yield "</td>
                    <td>";
            // line 390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "tomo", [], "any", false, false, false, 390), "html", null, true);
            yield "</td>
                    <td>";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "folio", [], "any", false, false, false, 391), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 393
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 393) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 393), "tecnicatura", [], "any", false, false, false, 393))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 393), "tecnicatura", [], "any", false, false, false, 393), "nombre", [], "any", false, false, false, 393), "html", null, true)) : ("N/A"));
            yield "
                    </td>
                    <td>
                        ";
            // line 396
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 396) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 396), "asignatura", [], "any", false, false, false, 396))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 396), "asignatura", [], "any", false, false, false, 396), "nombre", [], "any", false, false, false, 396), "html", null, true)) : ("N/A"));
            yield "
                    </td>
                    <td>
                        ";
            // line 399
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 400
                yield "                            <button onclick=\"openEditExamenAlumnoModal(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "id", [], "any", false, false, false, 400), "html", null, true);
                yield ")\">Editar</button>
                        ";
            }
            // line 402
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 408
        if (!$context['_iterated']) {
            // line 405
            yield "                <tr>
                    <td colspan=\"7\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_alumno'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 409
        yield "        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 1em;\">
        <button id=\"backButtonNotas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
    </div>
</div>

<!-- Modal para crear inscripto -->
<div id=\"inscripcionFinalModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeInscripcionFinalModal()\">&times;</span>
        <div id=\"inscripcionFinalBody\"></div>
    </div>
</div>
<!-- Modal para editar inscripto -->
<div id=\"editInscripcionFinalModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeEditInscripcionFinalModal()\">&times;</span>
        <div id=\"editInscripcionFinalBody\"></div>
    </div>
</div>
<!-- Modal para editar examen final -->
<div id=\"editExamenFinalModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeEditExamenFinalModal()\">&times;</span>
        <div id=\"editExamenFinalBody\"></div>
    </div>
</div>
<!-- Modal para editar nota -->
<div id=\"editExamenAlumnoModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeEditExamenAlumnoModal()\">&times;</span>
        <div id=\"editExamenAlumnoBody\"></div>
    </div>
</div>
<!-- Modal para crear mesa (fecha de final) -->
<div id=\"MesaModal\" class=\"modal\" style=\"display:none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeMesaModal()\">&times;</span>
        <div id=\"modalMesa\" class=\"submodal\"></div>
    </div>
</div>
<!-- Modal para cargar nota final -->
<div id=\"NotaFinalModal\" class=\"modal\" style=\"display:none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeNotaFinalModal()\">&times;</span>
        <div id=\"modalNotaFinal\" class=\"submodal\"></div>
    </div>
</div>
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
        return "vistasmesas/index.html.twig";
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
        return array (  676 => 409,  667 => 405,  665 => 408,  659 => 402,  653 => 400,  651 => 399,  645 => 396,  639 => 393,  634 => 391,  630 => 390,  626 => 389,  621 => 387,  617 => 385,  612 => 384,  594 => 368,  586 => 361,  577 => 357,  575 => 360,  569 => 354,  563 => 352,  561 => 351,  556 => 349,  552 => 348,  548 => 347,  544 => 346,  540 => 345,  536 => 344,  532 => 343,  529 => 342,  524 => 341,  505 => 324,  497 => 317,  488 => 313,  486 => 316,  480 => 310,  474 => 308,  472 => 307,  466 => 304,  460 => 301,  454 => 298,  449 => 296,  445 => 295,  442 => 294,  437 => 293,  420 => 278,  400 => 259,  396 => 257,  394 => 256,  377 => 241,  364 => 240,  274 => 160,  269 => 158,  211 => 103,  191 => 86,  171 => 69,  128 => 29,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}<h1 style=\"text-align: center;\">Mesas de Finales</h1>{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Mostrar/ocultar tablas
        function showTable(tableId) {
            const tables = document.querySelectorAll('.tabla_home');
            tables.forEach(table => {
                table.style.display = (table.id === tableId) ? '' : 'none';
            });
            document.getElementById('backButtonInscriptos').style.display = 'none';
            document.getElementById('backButtonMesas').style.display = 'none';
            document.getElementById('backButtonNotas').style.display = 'none';

            if (tableId === 'tablaInscriptos') {
                document.getElementById('backButtonInscriptos').style.display = '';
            } else if (tableId === 'tablaMesas') {
                document.getElementById('backButtonMesas').style.display = '';
            } else if (tableId === 'tablaNotasFinales') {
                document.getElementById('backButtonNotas').style.display = '';
            }
        }

        // Modal para crear inscripto
        function openInscripcionFinalModal() {
            fetch(\"{{ path('app_inscripcion_final_new') }}\", {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('inscripcionFinalBody').innerHTML = html;
                document.getElementById('inscripcionFinalModal').style.display = 'block';
                handleInscripcionFinalFormSubmit();
            });
        }
        function closeInscripcionFinalModal() {
            document.getElementById('inscripcionFinalModal').style.display = 'none';
            document.getElementById('inscripcionFinalBody').innerHTML = '';
        }
        function handleInscripcionFinalFormSubmit() {
            const modalBody = document.getElementById('inscripcionFinalBody');
            const form = modalBody.querySelector('form');
            if (!form) return;
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(form);
                fetch(form.action, {
                    method: form.method,
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(response => response.text())
                .then(html => {
                    if (html.includes('<form')) {
                        modalBody.innerHTML = html;
                        handleInscripcionFinalFormSubmit();
                    } else {
                        window.location.reload();
                    }
                });
            }, { once: true });
        }

        // Modal para editar inscripto
        function openEditInscripcionFinalModal(id) {
            fetch(\"{{ path('app_inscripcion_final_edit', {'id': '__id__'}) }}\".replace('__id__', id), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('editInscripcionFinalBody').innerHTML = html;
                document.getElementById('editInscripcionFinalModal').style.display = 'block';
                handleSuperEditarFormSubmit('editInscripcionFinalModal', 'editInscripcionFinalBody');
            });
        }
        function closeEditInscripcionFinalModal() {
            document.getElementById('editInscripcionFinalModal').style.display = 'none';
            document.getElementById('editInscripcionFinalBody').innerHTML = '';
        }

        // Modal para editar examen final
        function openEditExamenFinalModal(id) {
            fetch(\"{{ path('app_examen_final_edit', {'id': '__id__'}) }}\".replace('__id__', id), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('editExamenFinalBody').innerHTML = html;
                document.getElementById('editExamenFinalModal').style.display = 'block';
                handleSuperEditarFormSubmit('editExamenFinalModal', 'editExamenFinalBody');
            });
        }
        function closeEditExamenFinalModal() {
            document.getElementById('editExamenFinalModal').style.display = 'none';
            document.getElementById('editExamenFinalBody').innerHTML = '';
        }

        // Modal para editar nota
        function openEditExamenAlumnoModal(id) {
            fetch(\"{{ path('app_examen_alumno_edit', {'id': '__id__'}) }}\".replace('__id__', id), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('editExamenAlumnoBody').innerHTML = html;
                document.getElementById('editExamenAlumnoModal').style.display = 'block';
                handleSuperEditarFormSubmit('editExamenAlumnoModal', 'editExamenAlumnoBody');
            });
        }
        function closeEditExamenAlumnoModal() {
            document.getElementById('editExamenAlumnoModal').style.display = 'none';
            document.getElementById('editExamenAlumnoBody').innerHTML = '';
        }

        // Reutilizable para todos los formularios de edición
        function handleSuperEditarFormSubmit(modalId, bodyId) {
            const modalBody = document.getElementById(bodyId);
            const form = modalBody.querySelector('form');
            if (!form) return;
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(form);
                fetch(form.action, {
                    method: form.method,
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(response => {
                    if (response.headers.get('content-type').includes('application/json')) {
                        return response.json();
                    }
                    return response.text();
                })
                .then(data => {
                    if (typeof data === 'object' && data.success) {
                        window.location.reload();
                    } else if (typeof data === 'string' && data.includes('<form')) {
                        modalBody.innerHTML = data;
                        handleSuperEditarFormSubmit(modalId, bodyId);
                    } else {
                        alert('Ocurrió un error al guardar.');
                    }
                })
                .catch(error => {
                    alert('Ocurrió un error al guardar.');
                    console.error(error);
                });
            }, { once: true });
        }
    </script>
    <script>
function openModal(action) {
    let url = '';
    if (action === 'mesa') {
        url = \"{{ path('nueva_mesa') }}\";
    } else if (action === 'notaFinal') {
        url = \"{{ path('nueva_notaFinal') }}\";
    }
    fetch(url, {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(response => response.text())
    .then(html => {
        if (action === 'mesa') {
            document.getElementById('modalMesa').innerHTML = html;
            document.getElementById('MesaModal').style.display = 'block';
            handleMesaFormSubmit();
        } else if (action === 'notaFinal') {
            document.getElementById('modalNotaFinal').innerHTML = html;
            document.getElementById('NotaFinalModal').style.display = 'block';
            handleNotaFinalFormSubmit();
        }
    });
}

function closeMesaModal() {
    document.getElementById('MesaModal').style.display = 'none';
    document.getElementById('modalMesa').innerHTML = '';
}
function closeNotaFinalModal() {
    document.getElementById('NotaFinalModal').style.display = 'none';
    document.getElementById('modalNotaFinal').innerHTML = '';
}

function handleMesaFormSubmit() {
    const modalBody = document.getElementById('modalMesa');
    const form = modalBody.querySelector('form');
    if (!form) return;
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(form);
        fetch(form.action, {
            method: form.method,
            body: formData,
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.text())
        .then(html => {
            if (html.includes('<form')) {
                modalBody.innerHTML = html;
                handleMesaFormSubmit();
            } else {
                window.location.reload();
            }
        });
    }, { once: true });
}

function handleNotaFinalFormSubmit() {
    const modalBody = document.getElementById('modalNotaFinal');
    const form = modalBody.querySelector('form');
    if (!form) return;
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(form);
        fetch(form.action, {
            method: form.method,
            body: formData,
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.text())
        .then(html => {
            if (html.includes('<form')) {
                modalBody.innerHTML = html;
                handleNotaFinalFormSubmit();
            } else {
                window.location.reload();
            }
        });
    }, { once: true });
}
</script>


{% endblock %}

{% block body %}
<div id=\"body-vistas\">
    <h1 id=\"vistas\" style=\"text-align: center;\">Mesas de Finales</h1>
    <table class=\"tabla_home\" id=\"tablaPrincipal\" border=\"1\">
        <thead>
            <tr>
                <th>Inscriptos a Finales</th>
                <th>Fechas de Finales</th>
                <th>Notas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div>
                        <button onclick=\"showTable('tablaInscriptos')\">Ver</button>
                        {% if is_granted('ROLE_SUPER_ADMIN') %}
                            <button onclick=\"openInscripcionFinalModal()\">Crear Inscripto</button>
                        {% endif %}
                    </div>
                </td>
                <td>
                    <div>
                        <button onclick=\"showTable('tablaMesas')\">Ver</button>
                        <button onclick=\"openModal('mesa')\">Establecer fecha</button>
                    </div>
                </td>
                <td>
                    <div>
                        <button onclick=\"showTable('tablaNotasFinales')\">Ver</button>
                        <button onclick=\"openModal('notaFinal')\">Cargar Nota</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    {# Tabla Inscriptos #}
    <table id=\"tablaInscriptos\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"6\">Inscriptos</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Estudiante</th>
                <th>Tecnicatura</th>
                <th>Asignatura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {% for inscripcion_final in inscripcion_finals %}
                <tr>
                    <td>{{ inscripcion_final.fecha ? inscripcion_final.fecha|date('Y-m-d') : '' }}</td>
                    <td>{{ inscripcion_final.examenFinal and inscripcion_final.examenFinal.hora ? inscripcion_final.examenFinal.hora|date('H:i') : '' }}</td>
                    <td>
                        {{ inscripcion_final.alumno_id ? inscripcion_final.alumno_id.persona.nombre ~ ' ' ~ inscripcion_final.alumno_id.persona.apellido : 'N/A' }}
                    </td>
                    <td>
                        {{ inscripcion_final.asignatura_id and inscripcion_final.asignatura_id.tecnicatura ? inscripcion_final.asignatura_id.tecnicatura.nombre : 'N/A' }}
                    </td>
                    <td>
                        {{ inscripcion_final.asignatura_id ? inscripcion_final.asignatura_id.nombre : 'N/A' }}
                    </td>
                    <td>
                        {% if is_granted('ROLE_SUPER_ADMIN') %}
                            <button onclick=\"openEditInscripcionFinalModal({{ inscripcion_final.id }})\">Editar</button>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\">No se encontraron registros</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 1em;\">
        <button id=\"backButtonInscriptos\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
    </div>

    {# Tabla Mesas (Fechas de Finales) #}
    <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"8\">Fechas de Finales</th>
            </tr>
            <tr>
                <th>Asignatura</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Presidente</th>
                <th>Primer Vocal</th>
                <th>Segundo Vocal</th>
                <th>Tecnicatura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {% for examen_final in examen_finals %}
                <tr>
                    <td>{{ examen_final.asignatura ? examen_final.asignatura.nombre : '' }}</td>
                    <td>{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d') : '' }}</td>
                    <td>{{ examen_final.hora ? examen_final.hora|date('H:i') : '' }}</td>
                    <td>{{ examen_final.presidente ? examen_final.presidente.persona : '' }}</td>
                    <td>{{ examen_final.vocal1 ? examen_final.vocal1.persona : '' }}</td>
                    <td>{{ examen_final.vocal2 ? examen_final.vocal2.persona : '' }}</td>
                    <td>{{ examen_final.tecnicatura ? examen_final.tecnicatura.nombre : '' }}</td>
                    <td>
                        {% if is_granted('ROLE_SUPER_ADMIN') %}
                            <button onclick=\"openEditExamenFinalModal({{ examen_final.id }})\">Editar</button>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">No se encontraron registros</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 1em;\">
        <button id=\"backButtonMesas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
    </div>

    {# Tabla Notas Finales #}
    <table id=\"tablaNotasFinales\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"7\">Notas de los Finales</th>
            </tr>
            <tr>
                <th>Estudiante</th>
                <th>Nota</th>
                <th>Tomo</th>
                <th>Folio</th>
                <th>Tecnicatura</th>
                <th>Asignatura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {% for examen_alumno in examen_alumnos %}
                <tr>
                    <td>
                        {{ examen_alumno.alumno_id ? examen_alumno.alumno_id.persona.nombre ~ ' ' ~ examen_alumno.alumno_id.persona.apellido : 'N/A' }}
                    </td>
                    <td>{{ examen_alumno.nota }}</td>
                    <td>{{ examen_alumno.tomo }}</td>
                    <td>{{ examen_alumno.folio }}</td>
                    <td>
                        {{ examen_alumno.examenFinal_id and examen_alumno.examenFinal_id.tecnicatura ? examen_alumno.examenFinal_id.tecnicatura.nombre : 'N/A' }}
                    </td>
                    <td>
                        {{ examen_alumno.examenFinal_id and examen_alumno.examenFinal_id.asignatura ? examen_alumno.examenFinal_id.asignatura.nombre : 'N/A' }}
                    </td>
                    <td>
                        {% if is_granted('ROLE_SUPER_ADMIN') %}
                            <button onclick=\"openEditExamenAlumnoModal({{ examen_alumno.id }})\">Editar</button>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\">No se encontraron registros</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 1em;\">
        <button id=\"backButtonNotas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
    </div>
</div>

<!-- Modal para crear inscripto -->
<div id=\"inscripcionFinalModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeInscripcionFinalModal()\">&times;</span>
        <div id=\"inscripcionFinalBody\"></div>
    </div>
</div>
<!-- Modal para editar inscripto -->
<div id=\"editInscripcionFinalModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeEditInscripcionFinalModal()\">&times;</span>
        <div id=\"editInscripcionFinalBody\"></div>
    </div>
</div>
<!-- Modal para editar examen final -->
<div id=\"editExamenFinalModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeEditExamenFinalModal()\">&times;</span>
        <div id=\"editExamenFinalBody\"></div>
    </div>
</div>
<!-- Modal para editar nota -->
<div id=\"editExamenAlumnoModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeEditExamenAlumnoModal()\">&times;</span>
        <div id=\"editExamenAlumnoBody\"></div>
    </div>
</div>
<!-- Modal para crear mesa (fecha de final) -->
<div id=\"MesaModal\" class=\"modal\" style=\"display:none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeMesaModal()\">&times;</span>
        <div id=\"modalMesa\" class=\"submodal\"></div>
    </div>
</div>
<!-- Modal para cargar nota final -->
<div id=\"NotaFinalModal\" class=\"modal\" style=\"display:none;\">
    <div class=\"modal-content\">
        <span class=\"close\" onclick=\"closeNotaFinalModal()\">&times;</span>
        <div id=\"modalNotaFinal\" class=\"submodal\"></div>
    </div>
</div>
{% endblock %}", "vistasmesas/index.html.twig", "C:\\xampp\\htdocs\\local\\templates\\vistasmesas\\index.html.twig");
    }
}
