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
class __TwigTemplate_546ca48f847713d304d98c869fb9b486 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasmesas/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasmesas/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vistasmesas/index.html.twig", 1);
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

        yield "<h1 style=\"text-align: center;\">Mesas de Finales</h1>";
        
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 239
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

        // line 240
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
        // line 255
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 256
            yield "                            <button onclick=\"openInscripcionFinalModal()\">Crear Inscripto</button>
                        ";
        }
        // line 258
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
        // line 277
        yield "    <table id=\"tablaInscriptos\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"7\">Inscriptos</th>
            </tr>
             <tr>
              <th colspan=\"7\">
             <form method=\"get\" action=\"\">
               <input type=\"text\" name=\"inscripto_nombre\" placeholder=\"Buscar estudiante\" value=\"";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 285, $this->source); })()), "request", [], "any", false, false, false, 285), "get", ["inscripto_nombre"], "method", false, false, false, 285), "html", null, true);
        yield "\">
               <input type=\"text\" name=\"inscripto_tecnicatura\" placeholder=\"Buscar tecnicatura\" value=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 286, $this->source); })()), "request", [], "any", false, false, false, 286), "get", ["inscripto_tecnicatura"], "method", false, false, false, 286), "html", null, true);
        yield "\">
               <input type=\"text\" name=\"inscripto_asignatura\" placeholder=\"Buscar asignatura\" value=\"";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 287, $this->source); })()), "request", [], "any", false, false, false, 287), "get", ["inscripto_asignatura"], "method", false, false, false, 287), "html", null, true);
        yield "\">
               <button type=\"submit\">Buscar</button>
             </form>
            </th>
           </tr>
            <tr>
                <th>Fecha</th>
                <th>Estudiante</th>
                <th>Tecnicatura</th>
                <th>Asignatura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscripcion_finals"]) || array_key_exists("inscripcion_finals", $context) ? $context["inscripcion_finals"] : (function () { throw new RuntimeError('Variable "inscripcion_finals" does not exist.', 301, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion_final"]) {
            // line 302
            yield "                <tr>
                    <td>";
            // line 303
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 303)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 303), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                    <td>
                 ";
            // line 305
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumnoId", [], "any", false, false, false, 305)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumnoId", [], "any", false, false, false, 305), "persona", [], "any", false, false, false, 305), "nombre", [], "any", false, false, false, 305) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumnoId", [], "any", false, false, false, 305), "persona", [], "any", false, false, false, 305), "apellido", [], "any", false, false, false, 305)), "html", null, true)) : ("N/A"));
            yield "
                 </td>
                    <td>
                     ";
            // line 308
            yield (((((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 308) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 308), "curso", [], "any", false, false, false, 308)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 308), "curso", [], "any", false, false, false, 308), "comision", [], "any", false, false, false, 308)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 308), "curso", [], "any", false, false, false, 308), "comision", [], "any", false, false, false, 308), "tecnicatura", [], "any", false, false, false, 308))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 309
$context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 309), "curso", [], "any", false, false, false, 309), "comision", [], "any", false, false, false, 309), "tecnicatura", [], "any", false, false, false, 309), "nombre", [], "any", false, false, false, 309), "html", null, true)) : ("N/A"));
            yield "
                   </td>
                   <td>
                      ";
            // line 312
            yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 312) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 312), "curso", [], "any", false, false, false, 312)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 312), "curso", [], "any", false, false, false, 312), "asignatura", [], "any", false, false, false, 312))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 313
$context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 313), "curso", [], "any", false, false, false, 313), "asignatura", [], "any", false, false, false, 313), "nombre", [], "any", false, false, false, 313), "html", null, true)) : ("N/A"));
            yield "
                 </td>
                 
                    <td>
                        ";
            // line 317
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 318
                yield "                            <button onclick=\"openEditInscripcionFinalModal(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "id", [], "any", false, false, false, 318), "html", null, true);
                yield ")\">Editar</button>
                        ";
            }
            // line 320
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 326
        if (!$context['_iterated']) {
            // line 323
            yield "                <tr>
                    <td colspan=\"6\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        yield "        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 1em;\">
        <button id=\"backButtonInscriptos\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
    </div>

    ";
        // line 334
        yield "    <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"8\">Fechas de Finales</th>
            </tr>
              <tr>
              <th colspan=\"\">
               <form method=\"get\" action=\"\">
                 <input type=\"text\" name=\"mesa_asignatura\" placeholder=\"Buscar asignatura\" value=\"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "request", [], "any", false, false, false, 342), "get", ["mesa_asignatura"], "method", false, false, false, 342), "html", null, true);
        yield "\">
                 <input type=\"text\" name=\"mesa_tecnicatura\" placeholder=\"Buscar tecnicatura\" value=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "request", [], "any", false, false, false, 343), "get", ["mesa_tecnicatura"], "method", false, false, false, 343), "html", null, true);
        yield "\">
                 <input type=\"date\" name=\"mesa_fecha\" value=\"";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 344, $this->source); })()), "request", [], "any", false, false, false, 344), "get", ["mesa_fecha"], "method", false, false, false, 344), "html", null, true);
        yield "\">
                 <button type=\"submit\">Buscar</button>
               </form>
             </th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Asignatura</th>
                <th>Tecnicatura</th>
                <th>Presidente</th>
                <th>Primer Vocal</th>
                <th>Segundo Vocal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 360, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 361
            yield "                <tr> 
                    <td>";
            // line 362
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 362)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 362), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                    <td>
                    ";
            // line 364
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 364) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 364), "asignatura", [], "any", false, false, false, 364))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 365
$context["examen_final"], "curso", [], "any", false, false, false, 365), "asignatura", [], "any", false, false, false, 365), "nombre", [], "any", false, false, false, 365), "html", null, true)) : ("N/A"));
            yield "
                    </td>
                    <td>
                     ";
            // line 368
            yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 368) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 368), "comision", [], "any", false, false, false, 368)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 368), "comision", [], "any", false, false, false, 368), "tecnicatura", [], "any", false, false, false, 368))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 369
$context["examen_final"], "curso", [], "any", false, false, false, 369), "comision", [], "any", false, false, false, 369), "tecnicatura", [], "any", false, false, false, 369), "nombre", [], "any", false, false, false, 369), "html", null, true)) : ("N/A"));
            yield "
                    </td>
                    <td>";
            // line 371
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 371)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 371), "persona", [], "any", false, false, false, 371), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 372
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 372)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 372), "persona", [], "any", false, false, false, 372), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 373
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 373)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 373), "persona", [], "any", false, false, false, 373), "html", null, true)) : (""));
            yield "</td>
                    <td>
                        ";
            // line 375
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 376
                yield "                            <button onclick=\"openEditExamenFinalModal(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 376), "html", null, true);
                yield ")\">Editar</button>
                        ";
            }
            // line 378
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 384
        if (!$context['_iterated']) {
            // line 381
            yield "                <tr>
                    <td colspan=\"8\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 385
        yield "        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 1em;\">
        <button id=\"backButtonMesas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
    </div>

    ";
        // line 392
        yield "   <table id=\"tablaNotasFinales\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
   
    <thead>
        <tr>
            <th colspan=\"7\">Notas de los Finales</th>
        </tr>
        <tr>
          <th colspan=\"7\">
             <form method=\"get\" action=\"\">
              <input type=\"text\" name=\"nota_estudiante\" placeholder=\"Buscar estudiante\" value=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "request", [], "any", false, false, false, 401), "get", ["nota_estudiante"], "method", false, false, false, 401), "html", null, true);
        yield "\">
              <input type=\"text\" name=\"nota_asignatura\" placeholder=\"Buscar asignatura\" value=\"";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 402, $this->source); })()), "request", [], "any", false, false, false, 402), "get", ["nota_asignatura"], "method", false, false, false, 402), "html", null, true);
        yield "\">
              <button type=\"submit\">Buscar</button>
             </form>
          </th>
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
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_alumnos"]) || array_key_exists("examen_alumnos", $context) ? $context["examen_alumnos"] : (function () { throw new RuntimeError('Variable "examen_alumnos" does not exist.', 418, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_alumno"]) {
            // line 419
            yield "            <tr>
                <td>
                    ";
            // line 421
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 421)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 421), "persona", [], "any", false, false, false, 421), "nombre", [], "any", false, false, false, 421) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 421), "persona", [], "any", false, false, false, 421), "apellido", [], "any", false, false, false, 421)), "html", null, true)) : ("N/A"));
            yield "
                </td>
                <td>";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "nota", [], "any", false, false, false, 423), "html", null, true);
            yield "</td>
                <td>";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "tomo", [], "any", false, false, false, 424), "html", null, true);
            yield "</td>
                <td>";
            // line 425
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "folio", [], "any", false, false, false, 425), "html", null, true);
            yield "</td>
                <td>
                 ";
            // line 427
            yield (((((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 427) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 427), "curso", [], "any", false, false, false, 427)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 427), "curso", [], "any", false, false, false, 427), "comision", [], "any", false, false, false, 427)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 427), "curso", [], "any", false, false, false, 427), "comision", [], "any", false, false, false, 427), "tecnicatura", [], "any", false, false, false, 427))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 428
$context["examen_alumno"], "examenFinal", [], "any", false, false, false, 428), "curso", [], "any", false, false, false, 428), "comision", [], "any", false, false, false, 428), "tecnicatura", [], "any", false, false, false, 428), "nombre", [], "any", false, false, false, 428), "html", null, true)) : ("N/A"));
            yield "
                </td>
                <td>
                 ";
            // line 431
            yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 431) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 431), "curso", [], "any", false, false, false, 431)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 431), "curso", [], "any", false, false, false, 431), "asignatura", [], "any", false, false, false, 431))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 432
$context["examen_alumno"], "examenFinal", [], "any", false, false, false, 432), "curso", [], "any", false, false, false, 432), "asignatura", [], "any", false, false, false, 432), "nombre", [], "any", false, false, false, 432), "html", null, true)) : ("N/A"));
            yield "
                </td>
                <td>
                    ";
            // line 435
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 436
                yield "                        <button onclick=\"openEditExamenAlumnoModal(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "id", [], "any", false, false, false, 436), "html", null, true);
                yield ")\">Editar</button>
                    ";
            }
            // line 438
            yield "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 444
        if (!$context['_iterated']) {
            // line 441
            yield "            <tr>
                <td colspan=\"7\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_alumno'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 445
        yield "    </tbody>
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  730 => 445,  721 => 441,  719 => 444,  713 => 438,  707 => 436,  705 => 435,  699 => 432,  698 => 431,  692 => 428,  691 => 427,  686 => 425,  682 => 424,  678 => 423,  673 => 421,  669 => 419,  664 => 418,  645 => 402,  641 => 401,  630 => 392,  622 => 385,  613 => 381,  611 => 384,  605 => 378,  599 => 376,  597 => 375,  592 => 373,  588 => 372,  584 => 371,  579 => 369,  578 => 368,  572 => 365,  571 => 364,  566 => 362,  563 => 361,  558 => 360,  539 => 344,  535 => 343,  531 => 342,  521 => 334,  513 => 327,  504 => 323,  502 => 326,  496 => 320,  490 => 318,  488 => 317,  481 => 313,  480 => 312,  474 => 309,  473 => 308,  467 => 305,  462 => 303,  459 => 302,  454 => 301,  437 => 287,  433 => 286,  429 => 285,  419 => 277,  399 => 258,  395 => 256,  393 => 255,  376 => 240,  363 => 239,  274 => 160,  269 => 158,  211 => 103,  191 => 86,  171 => 69,  128 => 29,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                <th colspan=\"7\">Inscriptos</th>
            </tr>
             <tr>
              <th colspan=\"7\">
             <form method=\"get\" action=\"\">
               <input type=\"text\" name=\"inscripto_nombre\" placeholder=\"Buscar estudiante\" value=\"{{ app.request.get('inscripto_nombre') }}\">
               <input type=\"text\" name=\"inscripto_tecnicatura\" placeholder=\"Buscar tecnicatura\" value=\"{{ app.request.get('inscripto_tecnicatura') }}\">
               <input type=\"text\" name=\"inscripto_asignatura\" placeholder=\"Buscar asignatura\" value=\"{{ app.request.get('inscripto_asignatura') }}\">
               <button type=\"submit\">Buscar</button>
             </form>
            </th>
           </tr>
            <tr>
                <th>Fecha</th>
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
                    <td>
                 {{ inscripcion_final.alumnoId ? inscripcion_final.alumnoId.persona.nombre ~ ' ' ~ inscripcion_final.alumnoId.persona.apellido : 'N/A' }}
                 </td>
                    <td>
                     {{ inscripcion_final.examenFinal and inscripcion_final.examenFinal.curso and inscripcion_final.examenFinal.curso.comision and inscripcion_final.examenFinal.curso.comision.tecnicatura
                        ? inscripcion_final.examenFinal.curso.comision.tecnicatura.nombre : 'N/A' }}
                   </td>
                   <td>
                      {{ inscripcion_final.examenFinal and inscripcion_final.examenFinal.curso and inscripcion_final.examenFinal.curso.asignatura
                         ? inscripcion_final.examenFinal.curso.asignatura.nombre : 'N/A' }}
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
              <th colspan=\"\">
               <form method=\"get\" action=\"\">
                 <input type=\"text\" name=\"mesa_asignatura\" placeholder=\"Buscar asignatura\" value=\"{{ app.request.get('mesa_asignatura') }}\">
                 <input type=\"text\" name=\"mesa_tecnicatura\" placeholder=\"Buscar tecnicatura\" value=\"{{ app.request.get('mesa_tecnicatura') }}\">
                 <input type=\"date\" name=\"mesa_fecha\" value=\"{{ app.request.get('mesa_fecha') }}\">
                 <button type=\"submit\">Buscar</button>
               </form>
             </th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Asignatura</th>
                <th>Tecnicatura</th>
                <th>Presidente</th>
                <th>Primer Vocal</th>
                <th>Segundo Vocal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {% for examen_final in examen_finals %}
                <tr> 
                    <td>{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d') : '' }}</td>
                    <td>
                    {{ examen_final.curso and examen_final.curso.asignatura
                    ? examen_final.curso.asignatura.nombre : 'N/A' }}
                    </td>
                    <td>
                     {{ examen_final.curso and examen_final.curso.comision and examen_final.curso.comision.tecnicatura
                      ? examen_final.curso.comision.tecnicatura.nombre : 'N/A' }}
                    </td>
                    <td>{{ examen_final.presidente ? examen_final.presidente.persona : '' }}</td>
                    <td>{{ examen_final.vocal1 ? examen_final.vocal1.persona : '' }}</td>
                    <td>{{ examen_final.vocal2 ? examen_final.vocal2.persona : '' }}</td>
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
          <th colspan=\"7\">
             <form method=\"get\" action=\"\">
              <input type=\"text\" name=\"nota_estudiante\" placeholder=\"Buscar estudiante\" value=\"{{ app.request.get('nota_estudiante') }}\">
              <input type=\"text\" name=\"nota_asignatura\" placeholder=\"Buscar asignatura\" value=\"{{ app.request.get('nota_asignatura') }}\">
              <button type=\"submit\">Buscar</button>
             </form>
          </th>
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
                    {{ examen_alumno.alumno ? examen_alumno.alumno.persona.nombre ~ ' ' ~ examen_alumno.alumno.persona.apellido : 'N/A' }}
                </td>
                <td>{{ examen_alumno.nota }}</td>
                <td>{{ examen_alumno.tomo }}</td>
                <td>{{ examen_alumno.folio }}</td>
                <td>
                 {{ examen_alumno.examenFinal and examen_alumno.examenFinal.curso and examen_alumno.examenFinal.curso.comision and examen_alumno.examenFinal.curso.comision.tecnicatura
                 ? examen_alumno.examenFinal.curso.comision.tecnicatura.nombre : 'N/A' }}
                </td>
                <td>
                 {{ examen_alumno.examenFinal and examen_alumno.examenFinal.curso and examen_alumno.examenFinal.curso.asignatura
                  ? examen_alumno.examenFinal.curso.asignatura.nombre : 'N/A' }}
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
{% endblock %}", "vistasmesas/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistasmesas\\index.html.twig");
    }
}
