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
                table.style.display = (table.id === tableId) ? '' : 'none';
            });

            const backButton = document.getElementById('backButton');
            backButton.style.display = (tableId === 'tablaPrincipal') ? 'none' : '';
        }
    </script>

    ";
        // line 25
        yield "    <script>
        function filterTable(inputId, columnIndex) {
            let input = document.getElementById(inputId);
            let filter = input.value.toLowerCase();
            let table = document.getElementById(\"tablaInscriptos\");
            let rows = table.getElementsByTagName(\"tr\");

            for (let i = 2; i < rows.length; i++) { // Empieza en 2 para saltar encabezados
                let cell = rows[i].getElementsByTagName(\"td\")[columnIndex];
                if (cell) {
                    let textValue = cell.textContent || cell.innerText;
                    rows[i].style.display = textValue.toLowerCase().includes(filter) ? \"\" : \"none\";
                }
            }
        }
    </script>

    <script>
        function openModal(action) {
            let url = '';
            if (action === 'mesa') {
                url = \"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nueva_mesa");
        yield "\";
            } else if (action === 'notaFinal') {
                url = \"";
        // line 48
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

    // line 67
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

        // line 68
        yield "    <div id=\"body-vistas\">
        <h1>Mesas de Finales</h1>

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
                    <td><button onclick=\"showTable('tablaInscriptos')\">Ver</button></td>
                    <td>
                        <button onclick=\"showTable('tablaMesas')\">Ver</button>
                        <button onclick=\"openModal('mesa')\">Establecer fecha</button>
                    </td>
                    <td>
                        <button onclick=\"showTable('tablaNotasFinales')\">Ver</button>
                        <button onclick=\"openModal('notaFinal')\">Cargar Nota</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <button id=\"backButton\" onclick=\"showTable('tablaPrincipal')\" style=\"display:none;\">Regresar</button>

        ";
        // line 97
        yield "        <table id=\"tablaInscriptos\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"4\">Inscriptos</th>
                </tr>
                <tr>
                    <th colspan=\"4\">
                        <input type=\"text\" id=\"searchFecha\" onkeyup=\"filterTable('searchFecha', 0)\" placeholder=\"Buscar Fecha...\">
                        <input type=\"text\" id=\"searchEstudiante\" onkeyup=\"filterTable('searchEstudiante', 1)\" placeholder=\"Buscar Estudiante...\">
                        <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTable('searchTecnicatura', 2)\" placeholder=\"Buscar Tecnicatura...\">
                        <input type=\"text\" id=\"searchAsignatura\" onkeyup=\"filterTable('searchAsignatura', 3)\" placeholder=\"Buscar Asignatura...\">
                    </th>
                </tr>
                <tr>
                    <th>Fecha</th>
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
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 121)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 121), "persona", [], "any", false, false, false, 121), "nombre", [], "any", false, false, false, 121) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 121), "persona", [], "any", false, false, false, 121), "apellido", [], "any", false, false, false, 121)), "html", null, true)) : ("N/A"));
            yield "</td>
                        <td>";
            // line 122
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 122)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 122), "tecnicatura", [], "any", false, false, false, 122), "html", null, true)) : ("N/A"));
            yield "</td>
                        <td>";
            // line 123
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 123)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 123), "nombre", [], "any", false, false, false, 123), "html", null, true)) : ("N/A"));
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 127
        if (!$context['_iterated']) {
            // line 126
            yield "                    <tr><td colspan=\"4\">No se encontraron registros</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "            </tbody>
        </table>

        ";
        // line 132
        yield "        <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"6\">Mesas de Finales</th>
                </tr>
                <tr>
                    <th>Asignatura</th>
                    <th>Fecha</th>
                    <th>Presidente</th>
                    <th>Primer Vocal</th>
                    <th>Segundo Vocal</th>
                    <th>Tecnicatura</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 147, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 148
            yield "                    <tr>
                        <td>";
            // line 149
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 149)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 149), "nombre", [], "any", false, false, false, 149), "html", null, true)) : ("N/A"));
            yield "</td>
                        <td>";
            // line 150
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 150)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 150), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "</td>
                        <td>
                            ";
            // line 152
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 152) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 152), "persona", [], "any", false, false, false, 152))) {
                // line 153
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 153), "persona", [], "any", false, false, false, 153), "nombre", [], "any", false, false, false, 153), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 153), "persona", [], "any", false, false, false, 153), "apellido", [], "any", false, false, false, 153), "html", null, true);
                yield "
                            ";
            } else {
                // line 155
                yield "                                N/A
                            ";
            }
            // line 157
            yield "                        </td>
                        <td>
                            ";
            // line 159
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 159) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 159), "persona", [], "any", false, false, false, 159))) {
                // line 160
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 160), "persona", [], "any", false, false, false, 160), "nombre", [], "any", false, false, false, 160), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 160), "persona", [], "any", false, false, false, 160), "apellido", [], "any", false, false, false, 160), "html", null, true);
                yield "
                            ";
            } else {
                // line 162
                yield "                                N/A
                            ";
            }
            // line 164
            yield "                        </td>
                        <td>
                            ";
            // line 166
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 166) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 166), "persona", [], "any", false, false, false, 166))) {
                // line 167
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 167), "persona", [], "any", false, false, false, 167), "nombre", [], "any", false, false, false, 167), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 167), "persona", [], "any", false, false, false, 167), "apellido", [], "any", false, false, false, 167), "html", null, true);
                yield "
                            ";
            } else {
                // line 169
                yield "                                N/A
                            ";
            }
            // line 171
            yield "                        </td>
                        <td>";
            // line 172
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 172)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 172), "nombre", [], "any", false, false, false, 172), "html", null, true)) : ("N/A"));
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 176
        if (!$context['_iterated']) {
            // line 175
            yield "                    <tr><td colspan=\"6\">No se encontraron registros</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        yield "            </tbody>
        </table>

        ";
        // line 181
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
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_alumnos"]) || array_key_exists("examen_alumnos", $context) ? $context["examen_alumnos"] : (function () { throw new RuntimeError('Variable "examen_alumnos" does not exist.', 196, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_alumno"]) {
            // line 197
            yield "                    <tr>
                        <td>
                            ";
            // line 199
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 199) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 199), "persona", [], "any", false, false, false, 199))) {
                // line 200
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 200), "persona", [], "any", false, false, false, 200), "nombre", [], "any", false, false, false, 200), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 200), "persona", [], "any", false, false, false, 200), "apellido", [], "any", false, false, false, 200), "html", null, true);
                yield "
                            ";
            } else {
                // line 202
                yield "                                N/A
                            ";
            }
            // line 204
            yield "                        </td>
                        <td>";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "nota", [], "any", false, false, false, 205), "html", null, true);
            yield "</td>
                        <td>";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "tomo", [], "any", false, false, false, 206), "html", null, true);
            yield "</td>
                        <td>";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "folio", [], "any", false, false, false, 207), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 209
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 209) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 209), "tecnicatura", [], "any", false, false, false, 209))) {
                // line 210
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 210), "tecnicatura", [], "any", false, false, false, 210), "nombre", [], "any", false, false, false, 210), "html", null, true);
                yield "
                            ";
            } else {
                // line 212
                yield "                                N/A
                            ";
            }
            // line 214
            yield "                        </td>
                        <td>
                            ";
            // line 216
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 216) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 216), "asignatura", [], "any", false, false, false, 216))) {
                // line 217
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 217), "asignatura", [], "any", false, false, false, 217), "nombre", [], "any", false, false, false, 217), "html", null, true);
                yield "
                            ";
            } else {
                // line 219
                yield "                                N/A
                            ";
            }
            // line 221
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 225
        if (!$context['_iterated']) {
            // line 224
            yield "                    <tr><td colspan=\"6\">No se encontraron registros</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_alumno'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        yield "            </tbody>
        </table>
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
        return array (  494 => 226,  487 => 224,  485 => 225,  479 => 221,  475 => 219,  469 => 217,  467 => 216,  463 => 214,  459 => 212,  453 => 210,  451 => 209,  446 => 207,  442 => 206,  438 => 205,  435 => 204,  431 => 202,  423 => 200,  421 => 199,  417 => 197,  412 => 196,  395 => 181,  390 => 177,  383 => 175,  381 => 176,  374 => 172,  371 => 171,  367 => 169,  359 => 167,  357 => 166,  353 => 164,  349 => 162,  341 => 160,  339 => 159,  335 => 157,  331 => 155,  323 => 153,  321 => 152,  316 => 150,  312 => 149,  309 => 148,  304 => 147,  287 => 132,  282 => 128,  275 => 126,  273 => 127,  266 => 123,  262 => 122,  258 => 121,  254 => 120,  251 => 119,  246 => 118,  223 => 97,  193 => 68,  180 => 67,  151 => 48,  146 => 46,  123 => 25,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                table.style.display = (table.id === tableId) ? '' : 'none';
            });

            const backButton = document.getElementById('backButton');
            backButton.style.display = (tableId === 'tablaPrincipal') ? 'none' : '';
        }
    </script>

    {# Filtros para tabla inscriptos #}
    <script>
        function filterTable(inputId, columnIndex) {
            let input = document.getElementById(inputId);
            let filter = input.value.toLowerCase();
            let table = document.getElementById(\"tablaInscriptos\");
            let rows = table.getElementsByTagName(\"tr\");

            for (let i = 2; i < rows.length; i++) { // Empieza en 2 para saltar encabezados
                let cell = rows[i].getElementsByTagName(\"td\")[columnIndex];
                if (cell) {
                    let textValue = cell.textContent || cell.innerText;
                    rows[i].style.display = textValue.toLowerCase().includes(filter) ? \"\" : \"none\";
                }
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
        <h1>Mesas de Finales</h1>

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
                    <td><button onclick=\"showTable('tablaInscriptos')\">Ver</button></td>
                    <td>
                        <button onclick=\"showTable('tablaMesas')\">Ver</button>
                        <button onclick=\"openModal('mesa')\">Establecer fecha</button>
                    </td>
                    <td>
                        <button onclick=\"showTable('tablaNotasFinales')\">Ver</button>
                        <button onclick=\"openModal('notaFinal')\">Cargar Nota</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <button id=\"backButton\" onclick=\"showTable('tablaPrincipal')\" style=\"display:none;\">Regresar</button>

        {# Tabla Inscriptos #}
        <table id=\"tablaInscriptos\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"4\">Inscriptos</th>
                </tr>
                <tr>
                    <th colspan=\"4\">
                        <input type=\"text\" id=\"searchFecha\" onkeyup=\"filterTable('searchFecha', 0)\" placeholder=\"Buscar Fecha...\">
                        <input type=\"text\" id=\"searchEstudiante\" onkeyup=\"filterTable('searchEstudiante', 1)\" placeholder=\"Buscar Estudiante...\">
                        <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTable('searchTecnicatura', 2)\" placeholder=\"Buscar Tecnicatura...\">
                        <input type=\"text\" id=\"searchAsignatura\" onkeyup=\"filterTable('searchAsignatura', 3)\" placeholder=\"Buscar Asignatura...\">
                    </th>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <th>Estudiante</th>
                    <th>Tecnicatura</th>
                    <th>Asignatura</th>
                </tr>
            </thead>
            <tbody>
                {% for inscripcion_final in inscripcion_finals %}
                    <tr>
                        <td>{{ inscripcion_final.fecha ? inscripcion_final.fecha|date('Y-m-d') : '' }}</td>
                        <td>{{ inscripcion_final.alumno ? inscripcion_final.alumno.persona.nombre ~ ' ' ~ inscripcion_final.alumno.persona.apellido : 'N/A' }}</td>
                        <td>{{ inscripcion_final.asignatura ? inscripcion_final.asignatura.tecnicatura : 'N/A' }}</td>
                        <td>{{ inscripcion_final.asignatura ? inscripcion_final.asignatura.nombre : 'N/A' }}</td>
                    </tr>
                {% else %}
                    <tr><td colspan=\"4\">No se encontraron registros</td></tr>
                {% endfor %}
            </tbody>
        </table>

        {# Tabla Mesas #}
        <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"6\">Mesas de Finales</th>
                </tr>
                <tr>
                    <th>Asignatura</th>
                    <th>Fecha</th>
                    <th>Presidente</th>
                    <th>Primer Vocal</th>
                    <th>Segundo Vocal</th>
                    <th>Tecnicatura</th>
                </tr>
            </thead>
            <tbody>
                {% for examen_final in examen_finals %}
                    <tr>
                        <td>{{ examen_final.asignatura ? examen_final.asignatura.nombre : 'N/A' }}</td>
                        <td>{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d') : 'N/A' }}</td>
                        <td>
                            {% if examen_final.presidente and examen_final.presidente.persona %}
                                {{ examen_final.presidente.persona.nombre }} {{ examen_final.presidente.persona.apellido }}
                            {% else %}
                                N/A
                            {% endif %}
                        </td>
                        <td>
                            {% if examen_final.vocal1 and examen_final.vocal1.persona %}
                                {{ examen_final.vocal1.persona.nombre }} {{ examen_final.vocal1.persona.apellido }}
                            {% else %}
                                N/A
                            {% endif %}
                        </td>
                        <td>
                            {% if examen_final.vocal2 and examen_final.vocal2.persona %}
                                {{ examen_final.vocal2.persona.nombre }} {{ examen_final.vocal2.persona.apellido }}
                            {% else %}
                                N/A
                            {% endif %}
                        </td>
                        <td>{{ examen_final.tecnicatura ? examen_final.tecnicatura.nombre : 'N/A' }}</td>
                    </tr>
                {% else %}
                    <tr><td colspan=\"6\">No se encontraron registros</td></tr>
                {% endfor %}
            </tbody>
        </table>

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
    </div>

    <!-- Modal -->
    <div id=\"MesaModal\" class=\"modal\" style=\"display:none;\">
        <div class=\"modal-content\">
            <span class=\"close\" onclick=\"closeMesaModal()\">&times;</span>
            <div id=\"modalMesa\" class=\"submodal\"></div>
        </div>
    </div>
{% endblock %}
", "vistasmesas/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistasmesas\\index.html.twig");
    }
}
