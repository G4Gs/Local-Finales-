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
            yield (((((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 305) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 305), "curso", [], "any", false, false, false, 305)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 305), "curso", [], "any", false, false, false, 305), "comision", [], "any", false, false, false, 305)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 305), "curso", [], "any", false, false, false, 305), "comision", [], "any", false, false, false, 305), "tecnicatura", [], "any", false, false, false, 305))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 306
$context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 306), "curso", [], "any", false, false, false, 306), "comision", [], "any", false, false, false, 306), "tecnicatura", [], "any", false, false, false, 306), "nombre", [], "any", false, false, false, 306), "html", null, true)) : ("N/A"));
            yield "
                   </td>
                   <td>
                      ";
            // line 309
            yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 309) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 309), "curso", [], "any", false, false, false, 309)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 309), "curso", [], "any", false, false, false, 309), "asignatura", [], "any", false, false, false, 309))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 310
$context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 310), "curso", [], "any", false, false, false, 310), "asignatura", [], "any", false, false, false, 310), "nombre", [], "any", false, false, false, 310), "html", null, true)) : ("N/A"));
            yield "
                 </td>
                 <td>
                 ";
            // line 313
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumnoId", [], "any", false, false, false, 313)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumnoId", [], "any", false, false, false, 313), "persona", [], "any", false, false, false, 313), "nombre", [], "any", false, false, false, 313) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumnoId", [], "any", false, false, false, 313), "persona", [], "any", false, false, false, 313), "apellido", [], "any", false, false, false, 313)), "html", null, true)) : ("N/A"));
            yield "
                 </td>
                    <td>
                        ";
            // line 316
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 317
                yield "                            <button onclick=\"openEditInscripcionFinalModal(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "id", [], "any", false, false, false, 317), "html", null, true);
                yield ")\">Editar</button>
                        ";
            }
            // line 319
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 325
        if (!$context['_iterated']) {
            // line 322
            yield "                <tr>
                    <td colspan=\"6\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        yield "        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 1em;\">
        <button id=\"backButtonInscriptos\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
    </div>

    ";
        // line 333
        yield "    <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
        <thead>
            <tr>
                <th colspan=\"8\">Fechas de Finales</th>
            </tr>
              <tr>
              <th colspan=\"\">
               <form method=\"get\" action=\"\">
                 <input type=\"text\" name=\"mesa_asignatura\" placeholder=\"Buscar asignatura\" value=\"";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 341, $this->source); })()), "request", [], "any", false, false, false, 341), "get", ["mesa_asignatura"], "method", false, false, false, 341), "html", null, true);
        yield "\">
                 <input type=\"text\" name=\"mesa_tecnicatura\" placeholder=\"Buscar tecnicatura\" value=\"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 342, $this->source); })()), "request", [], "any", false, false, false, 342), "get", ["mesa_tecnicatura"], "method", false, false, false, 342), "html", null, true);
        yield "\">
                 <input type=\"date\" name=\"mesa_fecha\" value=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "request", [], "any", false, false, false, 343), "get", ["mesa_fecha"], "method", false, false, false, 343), "html", null, true);
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
        // line 359
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 359, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 360
            yield "                <tr> 
                    <td>";
            // line 361
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 361)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 361), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                    <td>
                    ";
            // line 363
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 363) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 363), "asignatura", [], "any", false, false, false, 363))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 364
$context["examen_final"], "curso", [], "any", false, false, false, 364), "asignatura", [], "any", false, false, false, 364), "nombre", [], "any", false, false, false, 364), "html", null, true)) : ("N/A"));
            yield "
                    </td>
                    <td>
                     ";
            // line 367
            yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 367) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 367), "comision", [], "any", false, false, false, 367)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "curso", [], "any", false, false, false, 367), "comision", [], "any", false, false, false, 367), "tecnicatura", [], "any", false, false, false, 367))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 368
$context["examen_final"], "curso", [], "any", false, false, false, 368), "comision", [], "any", false, false, false, 368), "tecnicatura", [], "any", false, false, false, 368), "nombre", [], "any", false, false, false, 368), "html", null, true)) : ("N/A"));
            yield "
                    </td>
                    <td>";
            // line 370
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 370)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 370), "persona", [], "any", false, false, false, 370), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 371
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 371)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 371), "persona", [], "any", false, false, false, 371), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 372
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 372)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 372), "persona", [], "any", false, false, false, 372), "html", null, true)) : (""));
            yield "</td>
                    <td>
                        ";
            // line 374
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 375
                yield "                            <button onclick=\"openEditExamenFinalModal(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 375), "html", null, true);
                yield ")\">Editar</button>
                        ";
            }
            // line 377
            yield "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 383
        if (!$context['_iterated']) {
            // line 380
            yield "                <tr>
                    <td colspan=\"8\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        yield "        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 1em;\">
        <button id=\"backButtonMesas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
    </div>

    ";
        // line 391
        yield "   <table id=\"tablaNotasFinales\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
   
    <thead>
        <tr>
            <th colspan=\"7\">Notas de los Finales</th>
        </tr>
        <tr>
          <th colspan=\"7\">
             <form method=\"get\" action=\"\">
              <input type=\"text\" name=\"nota_estudiante\" placeholder=\"Buscar estudiante\" value=\"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 400, $this->source); })()), "request", [], "any", false, false, false, 400), "get", ["nota_estudiante"], "method", false, false, false, 400), "html", null, true);
        yield "\">
              <input type=\"text\" name=\"nota_asignatura\" placeholder=\"Buscar asignatura\" value=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "request", [], "any", false, false, false, 401), "get", ["nota_asignatura"], "method", false, false, false, 401), "html", null, true);
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
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_alumnos"]) || array_key_exists("examen_alumnos", $context) ? $context["examen_alumnos"] : (function () { throw new RuntimeError('Variable "examen_alumnos" does not exist.', 417, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_alumno"]) {
            // line 418
            yield "            <tr>
                <td>
                    ";
            // line 420
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 420)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 420), "persona", [], "any", false, false, false, 420), "nombre", [], "any", false, false, false, 420) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 420), "persona", [], "any", false, false, false, 420), "apellido", [], "any", false, false, false, 420)), "html", null, true)) : ("N/A"));
            yield "
                </td>
                <td>";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "nota", [], "any", false, false, false, 422), "html", null, true);
            yield "</td>
                <td>";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "tomo", [], "any", false, false, false, 423), "html", null, true);
            yield "</td>
                <td>";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "folio", [], "any", false, false, false, 424), "html", null, true);
            yield "</td>
                <td>
                 ";
            // line 426
            yield (((((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 426) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 426), "curso", [], "any", false, false, false, 426)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 426), "curso", [], "any", false, false, false, 426), "comision", [], "any", false, false, false, 426)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 426), "curso", [], "any", false, false, false, 426), "comision", [], "any", false, false, false, 426), "tecnicatura", [], "any", false, false, false, 426))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 427
$context["examen_alumno"], "examenFinal", [], "any", false, false, false, 427), "curso", [], "any", false, false, false, 427), "comision", [], "any", false, false, false, 427), "tecnicatura", [], "any", false, false, false, 427), "nombre", [], "any", false, false, false, 427), "html", null, true)) : ("N/A"));
            yield "
                </td>
                <td>
                 ";
            // line 430
            yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 430) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 430), "curso", [], "any", false, false, false, 430)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 430), "curso", [], "any", false, false, false, 430), "asignatura", [], "any", false, false, false, 430))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 431
$context["examen_alumno"], "examenFinal", [], "any", false, false, false, 431), "curso", [], "any", false, false, false, 431), "asignatura", [], "any", false, false, false, 431), "nombre", [], "any", false, false, false, 431), "html", null, true)) : ("N/A"));
            yield "
                </td>
                <td>
                    ";
            // line 434
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 435
                yield "                        <button onclick=\"openEditExamenAlumnoModal(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "id", [], "any", false, false, false, 435), "html", null, true);
                yield ")\">Editar</button>
                    ";
            }
            // line 437
            yield "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 443
        if (!$context['_iterated']) {
            // line 440
            yield "            <tr>
                <td colspan=\"7\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_alumno'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 444
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
        return array (  729 => 444,  720 => 440,  718 => 443,  712 => 437,  706 => 435,  704 => 434,  698 => 431,  697 => 430,  691 => 427,  690 => 426,  685 => 424,  681 => 423,  677 => 422,  672 => 420,  668 => 418,  663 => 417,  644 => 401,  640 => 400,  629 => 391,  621 => 384,  612 => 380,  610 => 383,  604 => 377,  598 => 375,  596 => 374,  591 => 372,  587 => 371,  583 => 370,  578 => 368,  577 => 367,  571 => 364,  570 => 363,  565 => 361,  562 => 360,  557 => 359,  538 => 343,  534 => 342,  530 => 341,  520 => 333,  512 => 326,  503 => 322,  501 => 325,  495 => 319,  489 => 317,  487 => 316,  481 => 313,  475 => 310,  474 => 309,  468 => 306,  467 => 305,  462 => 303,  459 => 302,  454 => 301,  437 => 287,  433 => 286,  429 => 285,  419 => 277,  399 => 258,  395 => 256,  393 => 255,  376 => 240,  363 => 239,  274 => 160,  269 => 158,  211 => 103,  191 => 86,  171 => 69,  128 => 29,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                     {{ inscripcion_final.examenFinal and inscripcion_final.examenFinal.curso and inscripcion_final.examenFinal.curso.comision and inscripcion_final.examenFinal.curso.comision.tecnicatura
                        ? inscripcion_final.examenFinal.curso.comision.tecnicatura.nombre : 'N/A' }}
                   </td>
                   <td>
                      {{ inscripcion_final.examenFinal and inscripcion_final.examenFinal.curso and inscripcion_final.examenFinal.curso.asignatura
                         ? inscripcion_final.examenFinal.curso.asignatura.nombre : 'N/A' }}
                 </td>
                 <td>
                 {{ inscripcion_final.alumnoId ? inscripcion_final.alumnoId.persona.nombre ~ ' ' ~ inscripcion_final.alumnoId.persona.apellido : 'N/A' }}
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
