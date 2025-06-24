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

        yield "Mesas de Finales";
        
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
        document.addEventListener('DOMContentLoaded', function() {
            showTable('tablaPrincipal');
        });

        function showTable(tableId) {
           const tables = document.querySelectorAll('.tabla_home');
           tables.forEach(table => {
             if (table.id === tableId) {
                 table.style.display = '';
             } else {
                 table.style.display = 'none';
               }
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
    </script>

    <script>
        function openModal(action) {
            let url = '';
            if (action === 'mesa') {
                url = \"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nueva_mesa");
        yield "\";
            } else if (action === 'notaFinal') {
                url = \"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nueva_notaFinal");
        yield "\";
            }
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalMesa').innerHTML = html;
                    document.getElementById('MesaModal').style.display = 'block';
                })
                .catch(err => console.error('Error al cargar modal:', err));
        }

        function closeMesaModal() {
            document.getElementById('MesaModal').style.display = 'none';
            document.getElementById('modalMesa').innerHTML = '';
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 60
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

        // line 61
        yield "    <div id=\"body-vistas\">
        <h1 class=\"datos-filtered\">Mesas de Finales</h1>

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
                        <button class=\"buttonn\" onclick=\"showTable('tablaInscriptos')\">Ver</button>
                     </div>
                  </td>
                  <td>
                     <div>
                        <button class=\"buttonn\" onclick=\"showTable('tablaMesas')\">Ver</button>
                        <button onclick=\"openModal('mesa')\" class=\"button\">Establecer fecha</button>
                     </div>
                  </td>
                  <td>
                     <div>
                       <button class=\"buttonn\" onclick=\"showTable('tablaNotasFinales')\">Ver</button>
                       <button onclick=\"openModal('notaFinal')\" class=\"buttonn\">Cargar Nota</button>
                    </div>
                  </td>
             </tr>
         </tbody>
     </table>

        ";
        // line 96
        yield "        <table id=\"tablaInscriptos\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"5\">Inscriptos</th>
                </tr>
                <tr>
                    <th colspan=\"5\">
                        <input type=\"text\" id=\"searchFecha\" onkeyup=\"filterFecha()\" placeholder=\"Buscar Fecha...\">
                        <input type=\"text\" id=\"searchEstudiante\" onkeyup=\"filterEstudiante()\" placeholder=\"Buscar Estudiante...\">
                        <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTecnicatura()\" placeholder=\"Buscar Tecnicatura...\">
                        <input type=\"text\" id=\"searchAsignatura\" onkeyup=\"filterAsignatura()\" placeholder=\"Buscar Asignatura...\">
                    </th>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <th>hora</th>
                    <th>Estudiante</th>
                    <th>Tecnicatura</th>
                    <th>Asignatura</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscripcion_finals"]) || array_key_exists("inscripcion_finals", $context) ? $context["inscripcion_finals"] : (function () { throw new RuntimeError('Variable "inscripcion_finals" does not exist.', 118, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion_final"]) {
            // line 119
            yield "                    <tr>
                        <td>";
            // line 120
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 120), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 121
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 121) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 121), "hora", [], "any", false, false, false, 121))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 121), "hora", [], "any", false, false, false, 121), "H:i"), "html", null, true)) : (""));
            yield "</td>
                        <td>
                            ";
            // line 123
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 123)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 123), "persona", [], "any", false, false, false, 123), "nombre", [], "any", false, false, false, 123) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 123), "persona", [], "any", false, false, false, 123), "apellido", [], "any", false, false, false, 123)), "html", null, true)) : ("N/A"));
            yield "
                        </td>
                        <td>
                            ";
            // line 126
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 126) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 126), "tecnicatura", [], "any", false, false, false, 126))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 126), "tecnicatura", [], "any", false, false, false, 126), "nombre", [], "any", false, false, false, 126), "html", null, true)) : ("N/A"));
            yield "
                        </td>
                        <td>
                            ";
            // line 129
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 129)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 129), "nombre", [], "any", false, false, false, 129), "html", null, true)) : ("N/A"));
            yield "
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 136
        if (!$context['_iterated']) {
            // line 133
            yield "                    <tr>
                        <td colspan=\"5\">No se encontraron registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "            </tbody>
        </table>
        <div style=\"text-align: center; margin-top: 1em;\">
            <button id=\"backButtonInscriptos\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
        </div>

        ";
        // line 144
        yield "        <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"8\">Fechas de Finales</th>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Presidente</th>
                    <th>Vocal 1</th>
                    <th>Vocal 2</th>
                    <th>Estado de Mesa</th>
                    <th>Tecnicatura</th>
                    <th>Asignatura</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 161, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 162
            yield "                    <tr>
                        <td>";
            // line 163
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 163)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 163), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 164
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 164)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 164), "H:i"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 165
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 165)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 165), "persona", [], "any", false, false, false, 165), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 166
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 166)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 166), "persona", [], "any", false, false, false, 166), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 167
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 167)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 167), "persona", [], "any", false, false, false, 167), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "estadoMesa", [], "any", false, false, false, 168), "html", null, true);
            yield "</td>
                        <td>";
            // line 169
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 169)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 169), "nombre", [], "any", false, false, false, 169), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 170
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 170)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 170), "nombre", [], "any", false, false, false, 170), "html", null, true)) : (""));
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 176
        if (!$context['_iterated']) {
            // line 173
            yield "                    <tr>
                        <td colspan=\"8\">No se encontraron mesas de examen final</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "            </tbody>
        </table>
        <div style=\"text-align: center; margin-top: 1em;\">
            <button id=\"backButtonMesas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
        </div>

        ";
        // line 184
        yield "        <table id=\"tablaNotasFinales\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"6\">Notas de los Finales</th>
                </tr>
                <tr>
                    <th>Estudiante</th>
                    <th>Nota</th>
                    <th>Tomo</th>
                    <th>Folio</th>
                    <th>Tecnicatura</th>
                    <th>Asignatura</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_alumnos"]) || array_key_exists("examen_alumnos", $context) ? $context["examen_alumnos"] : (function () { throw new RuntimeError('Variable "examen_alumnos" does not exist.', 199, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_alumno"]) {
            // line 200
            yield "                    <tr>
                        <td>
                            ";
            // line 202
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 202) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 202), "persona", [], "any", false, false, false, 202))) {
                // line 203
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 203), "persona", [], "any", false, false, false, 203), "nombre", [], "any", false, false, false, 203), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 203), "persona", [], "any", false, false, false, 203), "apellido", [], "any", false, false, false, 203), "html", null, true);
                yield "
                            ";
            } else {
                // line 205
                yield "                                N/A
                            ";
            }
            // line 207
            yield "                        </td>
                        <td>";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "nota", [], "any", false, false, false, 208), "html", null, true);
            yield "</td>
                        <td>";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "tomo", [], "any", false, false, false, 209), "html", null, true);
            yield "</td>
                        <td>";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "folio", [], "any", false, false, false, 210), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 212
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 212) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 212), "tecnicatura", [], "any", false, false, false, 212))) {
                // line 213
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 213), "tecnicatura", [], "any", false, false, false, 213), "nombre", [], "any", false, false, false, 213), "html", null, true);
                yield "
                            ";
            } else {
                // line 215
                yield "                                N/A
                            ";
            }
            // line 217
            yield "                        </td>
                        <td>
                            ";
            // line 219
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 219) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 219), "asignatura", [], "any", false, false, false, 219))) {
                // line 220
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 220), "asignatura", [], "any", false, false, false, 220), "nombre", [], "any", false, false, false, 220), "html", null, true);
                yield "
                            ";
            } else {
                // line 222
                yield "                                N/A
                            ";
            }
            // line 224
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 228
        if (!$context['_iterated']) {
            // line 227
            yield "                    <tr><td colspan=\"6\">No se encontraron registros</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_alumno'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        yield "            </tbody>
        </table>
        <div style=\"text-align: center; margin-top: 1em;\">
            <button id=\"backButtonNotas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
        </div>
    </div>

    <!-- Modal -->
    <div id=\"MesaModal\" class=\"modal\" style=\"display:none;\">
        <div class=\"modal-content\">
            <span class=\"close\" onclick=\"closeMesaModal()\">&times;</span>
            <div id=\"modalMesa\" class=\"submodal\"></div>
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
        return array (  481 => 229,  474 => 227,  472 => 228,  466 => 224,  462 => 222,  456 => 220,  454 => 219,  450 => 217,  446 => 215,  440 => 213,  438 => 212,  433 => 210,  429 => 209,  425 => 208,  422 => 207,  418 => 205,  410 => 203,  408 => 202,  404 => 200,  399 => 199,  382 => 184,  374 => 177,  365 => 173,  363 => 176,  356 => 170,  352 => 169,  348 => 168,  344 => 167,  340 => 166,  336 => 165,  332 => 164,  328 => 163,  325 => 162,  320 => 161,  301 => 144,  293 => 137,  284 => 133,  282 => 136,  274 => 129,  268 => 126,  262 => 123,  257 => 121,  253 => 120,  250 => 119,  245 => 118,  221 => 96,  185 => 61,  172 => 60,  144 => 42,  139 => 40,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mesas de Finales{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showTable('tablaPrincipal');
        });

        function showTable(tableId) {
           const tables = document.querySelectorAll('.tabla_home');
           tables.forEach(table => {
             if (table.id === tableId) {
                 table.style.display = '';
             } else {
                 table.style.display = 'none';
               }
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
    </script>

    <script>
        function openModal(action) {
            let url = '';
            if (action === 'mesa') {
                url = \"{{ path('nueva_mesa') }}\";
            } else if (action === 'notaFinal') {
                url = \"{{ path('nueva_notaFinal') }}\";
            }
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalMesa').innerHTML = html;
                    document.getElementById('MesaModal').style.display = 'block';
                })
                .catch(err => console.error('Error al cargar modal:', err));
        }

        function closeMesaModal() {
            document.getElementById('MesaModal').style.display = 'none';
            document.getElementById('modalMesa').innerHTML = '';
        }
    </script>
{% endblock %}

{% block body %}
    <div id=\"body-vistas\">
        <h1 class=\"datos-filtered\">Mesas de Finales</h1>

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
                        <button class=\"buttonn\" onclick=\"showTable('tablaInscriptos')\">Ver</button>
                     </div>
                  </td>
                  <td>
                     <div>
                        <button class=\"buttonn\" onclick=\"showTable('tablaMesas')\">Ver</button>
                        <button onclick=\"openModal('mesa')\" class=\"button\">Establecer fecha</button>
                     </div>
                  </td>
                  <td>
                     <div>
                       <button class=\"buttonn\" onclick=\"showTable('tablaNotasFinales')\">Ver</button>
                       <button onclick=\"openModal('notaFinal')\" class=\"buttonn\">Cargar Nota</button>
                    </div>
                  </td>
             </tr>
         </tbody>
     </table>

        {# Tabla Inscriptos #}
        <table id=\"tablaInscriptos\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"5\">Inscriptos</th>
                </tr>
                <tr>
                    <th colspan=\"5\">
                        <input type=\"text\" id=\"searchFecha\" onkeyup=\"filterFecha()\" placeholder=\"Buscar Fecha...\">
                        <input type=\"text\" id=\"searchEstudiante\" onkeyup=\"filterEstudiante()\" placeholder=\"Buscar Estudiante...\">
                        <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTecnicatura()\" placeholder=\"Buscar Tecnicatura...\">
                        <input type=\"text\" id=\"searchAsignatura\" onkeyup=\"filterAsignatura()\" placeholder=\"Buscar Asignatura...\">
                    </th>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <th>hora</th>
                    <th>Estudiante</th>
                    <th>Tecnicatura</th>
                    <th>Asignatura</th>
                </tr>
            </thead>
            <tbody>
                {% for inscripcion_final in inscripcion_finals %}
                    <tr>
                        <td>{{ inscripcion_final.fecha ? inscripcion_final.fecha|date('Y-m-d') : '' }}</td>
                        <td>{{ inscripcion_final.examenFinal and inscripcion_final.examenFinal.hora ? inscripcion_final.examenFinal.hora|date('H:i') : '' }}</td>
                        <td>
                            {{ inscripcion_final.alumno ? inscripcion_final.alumno.persona.nombre ~ ' ' ~ inscripcion_final.alumno.persona.apellido : 'N/A' }}
                        </td>
                        <td>
                            {{ inscripcion_final.asignatura and inscripcion_final.asignatura.tecnicatura ? inscripcion_final.asignatura.tecnicatura.nombre : 'N/A' }}
                        </td>
                        <td>
                            {{ inscripcion_final.asignatura ? inscripcion_final.asignatura.nombre : 'N/A' }}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">No se encontraron registros</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
        <div style=\"text-align: center; margin-top: 1em;\">
            <button id=\"backButtonInscriptos\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
        </div>

        {# Tabla Mesas (ExamenFinal) #}
        <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"8\">Fechas de Finales</th>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Presidente</th>
                    <th>Vocal 1</th>
                    <th>Vocal 2</th>
                    <th>Estado de Mesa</th>
                    <th>Tecnicatura</th>
                    <th>Asignatura</th>
                </tr>
            </thead>
            <tbody>
                {% for examen_final in examen_finals %}
                    <tr>
                        <td>{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d') : '' }}</td>
                        <td>{{ examen_final.hora ? examen_final.hora|date('H:i') : '' }}</td>
                        <td>{{ examen_final.presidente ? examen_final.presidente.persona : '' }}</td>
                        <td>{{ examen_final.vocal1 ? examen_final.vocal1.persona : '' }}</td>
                        <td>{{ examen_final.vocal2 ? examen_final.vocal2.persona : '' }}</td>
                        <td>{{ examen_final.estadoMesa }}</td>
                        <td>{{ examen_final.tecnicatura ? examen_final.tecnicatura.nombre : '' }}</td>
                        <td>{{ examen_final.asignatura ? examen_final.asignatura.nombre : '' }}</td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\">No se encontraron mesas de examen final</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
        <div style=\"text-align: center; margin-top: 1em;\">
            <button id=\"backButtonMesas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
        </div>

        {# Tabla Notas Finales #}
        <table id=\"tablaNotasFinales\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"6\">Notas de los Finales</th>
                </tr>
                <tr>
                    <th>Estudiante</th>
                    <th>Nota</th>
                    <th>Tomo</th>
                    <th>Folio</th>
                    <th>Tecnicatura</th>
                    <th>Asignatura</th>
                </tr>
            </thead>
            <tbody>
                {% for examen_alumno in examen_alumnos %}
                    <tr>
                        <td>
                            {% if examen_alumno.alumno and examen_alumno.alumno.persona %}
                                {{ examen_alumno.alumno.persona.nombre }} {{ examen_alumno.alumno.persona.apellido }}
                            {% else %}
                                N/A
                            {% endif %}
                        </td>
                        <td>{{ examen_alumno.nota }}</td>
                        <td>{{ examen_alumno.tomo }}</td>
                        <td>{{ examen_alumno.folio }}</td>
                        <td>
                            {% if examen_alumno.examenFinal and examen_alumno.examenFinal.tecnicatura %}
                                {{ examen_alumno.examenFinal.tecnicatura.nombre }}
                            {% else %}
                                N/A
                            {% endif %}
                        </td>
                        <td>
                            {% if examen_alumno.examenFinal and examen_alumno.examenFinal.asignatura %}
                                {{ examen_alumno.examenFinal.asignatura.nombre }}
                            {% else %}
                                N/A
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr><td colspan=\"6\">No se encontraron registros</td></tr>
                {% endfor %}
            </tbody>
        </table>
        <div style=\"text-align: center; margin-top: 1em;\">
            <button id=\"backButtonNotas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
        </div>
    </div>

    <!-- Modal -->
    <div id=\"MesaModal\" class=\"modal\" style=\"display:none;\">
        <div class=\"modal-content\">
            <span class=\"close\" onclick=\"closeMesaModal()\">&times;</span>
            <div id=\"modalMesa\" class=\"submodal\"></div>
        </div>
    </div>
{% endblock %}", "vistasmesas/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistasmesas\\index.html.twig");
    }
}
