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

        yield "Mesas de Finales!";
        
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 61
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

        // line 62
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
                  <td>
                     <div>
                        <button class:\"buttonn\" onclick=\"showTable('tablaInscriptos')\">Ver</button>
                     </div>
                  </td>
                    <td>
                     <div>
                        <button class:\"buttonn\" onclick=\"showTable('tablaMesas')\">Ver</button>
                        <button onclick=\"openModal('mesa')\"class:\"button\">Establecer fecha</button>
                     </div>
                    </td>
                    <td>
                     <div>
                       <button class:\"buttonn\" onclick=\"showTable('tablaNotasFinales')\">Ver</button>
                       <button onclick=\"openModal('notaFinal')\" class:\"buttonn\">Cargar Nota</button>
                    </div>
                  </td>
             </tr>
         </tbody>
     </table>

        ";
        // line 97
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
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscripcion_finals"]) || array_key_exists("inscripcion_finals", $context) ? $context["inscripcion_finals"] : (function () { throw new RuntimeError('Variable "inscripcion_finals" does not exist.', 119, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion_final"]) {
            // line 120
            yield "                    <tr>
                        <td>";
            // line 121
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 121)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 121), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 122
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 122, $this->source); })()), "hora", [], "any", false, false, false, 122)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 122, $this->source); })()), "hora", [], "any", false, false, false, 122), "H:i"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAlumnoId", [], "method", false, false, false, 123), "html", null, true);
            yield "</td>
                        <td>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAsignaturaId", [], "method", false, false, false, 124), "tecnicatura", [], "any", false, false, false, 124), "html", null, true);
            yield "</td>
                        <td>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAsignaturaId", [], "method", false, false, false, 125), "html", null, true);
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 131
        if (!$context['_iterated']) {
            // line 128
            yield "                    <tr>
                        <td colspan=\"5\">No se encontraron registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "            </tbody>
        </table> 
        <div style=\"text-align: center; margin-top: 1em;\">
         <button id=\"backButtonInscriptos\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
       </div>      

       ";
        // line 139
        yield "       <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
          <thead>
             <tr>
               <th colspan=\"5\">Mesas</th>
             </tr>
             <tr>
               <th>Fecha</th>
               <th>Hora</th>
               <th>Estudiante</th>
               <th>Tecnicatura</th>
               <th>Asignatura</th>
             </tr>
         </thead>
         <tbody>
             ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscripcion_finals"]) || array_key_exists("inscripcion_finals", $context) ? $context["inscripcion_finals"] : (function () { throw new RuntimeError('Variable "inscripcion_finals" does not exist.', 153, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion_final"]) {
            // line 154
            yield "                 <tr>
                   <td>";
            // line 155
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 155)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 155), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                     ";
            // line 156
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 156) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 156), "hora", [], "any", false, false, false, 156))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 156), "hora", [], "any", false, false, false, 156), "H:i"), "html", null, true)) : (""));
            yield "
                   </td>
                   <td>
                     ";
            // line 159
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 159)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 159), "persona", [], "any", false, false, false, 159), "nombre", [], "any", false, false, false, 159) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 159), "persona", [], "any", false, false, false, 159), "apellido", [], "any", false, false, false, 159)), "html", null, true)) : ("N/A"));
            yield "
                   </td>
                   <td>
                     ";
            // line 162
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 162) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 162), "tecnicatura", [], "any", false, false, false, 162))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 162), "tecnicatura", [], "any", false, false, false, 162), "nombre", [], "any", false, false, false, 162), "html", null, true)) : ("N/A"));
            yield "
                   </td>
                   <td>
                     ";
            // line 165
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 165)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 165), "nombre", [], "any", false, false, false, 165), "html", null, true)) : ("N/A"));
            yield "
                   </td>
                 </tr>
             ";
            $context['_iterated'] = true;
        }
        // line 172
        if (!$context['_iterated']) {
            // line 169
            yield "                 <tr>
                  <td colspan=\"5\">No se encontraron registros</td>
                 </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "          </tbody>
     </table>
     <div style=\"text-align: center; margin-top: 1em;\">
         <button id=\"backButtonMesas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
     </div>

        ";
        // line 180
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
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_alumnos"]) || array_key_exists("examen_alumnos", $context) ? $context["examen_alumnos"] : (function () { throw new RuntimeError('Variable "examen_alumnos" does not exist.', 195, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_alumno"]) {
            // line 196
            yield "                    <tr>
                        <td>
                            ";
            // line 198
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 198) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 198), "persona", [], "any", false, false, false, 198))) {
                // line 199
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 199), "persona", [], "any", false, false, false, 199), "nombre", [], "any", false, false, false, 199), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno", [], "any", false, false, false, 199), "persona", [], "any", false, false, false, 199), "apellido", [], "any", false, false, false, 199), "html", null, true);
                yield "
                            ";
            } else {
                // line 201
                yield "                                N/A
                            ";
            }
            // line 203
            yield "                        </td>
                        <td>";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "nota", [], "any", false, false, false, 204), "html", null, true);
            yield "</td>
                        <td>";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "tomo", [], "any", false, false, false, 205), "html", null, true);
            yield "</td>
                        <td>";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "folio", [], "any", false, false, false, 206), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 208
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 208) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 208), "tecnicatura", [], "any", false, false, false, 208))) {
                // line 209
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 209), "tecnicatura", [], "any", false, false, false, 209), "nombre", [], "any", false, false, false, 209), "html", null, true);
                yield "
                            ";
            } else {
                // line 211
                yield "                                N/A
                            ";
            }
            // line 213
            yield "                        </td>
                        <td>
                            ";
            // line 215
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 215) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 215), "asignatura", [], "any", false, false, false, 215))) {
                // line 216
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal", [], "any", false, false, false, 216), "asignatura", [], "any", false, false, false, 216), "nombre", [], "any", false, false, false, 216), "html", null, true);
                yield "
                            ";
            } else {
                // line 218
                yield "                                N/A
                            ";
            }
            // line 220
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 224
        if (!$context['_iterated']) {
            // line 223
            yield "                    <tr><td colspan=\"6\">No se encontraron registros</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_alumno'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        yield "            </tbody>
        </table>
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
        return array (  468 => 225,  461 => 223,  459 => 224,  453 => 220,  449 => 218,  443 => 216,  441 => 215,  437 => 213,  433 => 211,  427 => 209,  425 => 208,  420 => 206,  416 => 205,  412 => 204,  409 => 203,  405 => 201,  397 => 199,  395 => 198,  391 => 196,  386 => 195,  369 => 180,  361 => 173,  352 => 169,  350 => 172,  342 => 165,  336 => 162,  330 => 159,  324 => 156,  320 => 155,  317 => 154,  312 => 153,  296 => 139,  288 => 132,  279 => 128,  277 => 131,  270 => 125,  266 => 124,  262 => 123,  258 => 122,  254 => 121,  251 => 120,  246 => 119,  222 => 97,  186 => 62,  173 => 61,  144 => 42,  139 => 40,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mesas de Finales!{% endblock %}

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
                  <td>
                     <div>
                        <button class:\"buttonn\" onclick=\"showTable('tablaInscriptos')\">Ver</button>
                     </div>
                  </td>
                    <td>
                     <div>
                        <button class:\"buttonn\" onclick=\"showTable('tablaMesas')\">Ver</button>
                        <button onclick=\"openModal('mesa')\"class:\"button\">Establecer fecha</button>
                     </div>
                    </td>
                    <td>
                     <div>
                       <button class:\"buttonn\" onclick=\"showTable('tablaNotasFinales')\">Ver</button>
                       <button onclick=\"openModal('notaFinal')\" class:\"buttonn\">Cargar Nota</button>
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
                        <td>{{ examen_final.hora ? examen_final.hora|date('H:i') : '' }}</td>
                        <td>{{ inscripcion_final.getAlumnoId() }}</td>
                        <td>{{ inscripcion_final.getAsignaturaId().tecnicatura }}</td>
                        <td>{{ inscripcion_final.getAsignaturaId() }}</td>
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

       {# Mesas Vistas #}
       <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display:none;\" border=\"1\">
          <thead>
             <tr>
               <th colspan=\"5\">Mesas</th>
             </tr>
             <tr>
               <th>Fecha</th>
               <th>Hora</th>
               <th>Estudiante</th>
               <th>Tecnicatura</th>
               <th>Asignatura</th>
             </tr>
         </thead>
         <tbody>
             {% for inscripcion_final in inscripcion_finals %}
                 <tr>
                   <td>{{ inscripcion_final.fecha ? inscripcion_final.fecha|date('Y-m-d') : '' }}</td>
                     {{ inscripcion_final.examenFinal and inscripcion_final.examenFinal.hora ? inscripcion_final.examenFinal.hora|date('H:i') : '' }}
                   </td>
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
{% endblock %}", "vistasmesas/index.html.twig", "C:\\xampp\\htdocs\\local\\templates\\vistasmesas\\index.html.twig");
    }
}
