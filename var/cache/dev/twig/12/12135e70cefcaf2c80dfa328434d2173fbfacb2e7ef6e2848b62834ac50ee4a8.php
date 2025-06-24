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
class __TwigTemplate_085758ccbbf1fc177fc5f9348528f61dfb09859f0bc1f1ad279f63a3f6d963a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_final/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_final/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "examen_final/index.html.twig", 1);
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

        yield "Mesas de Finales";
        
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

    // line 60
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

        // line 61
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
                    <th>Hora</th>
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
                        <td>
                            ";
            // line 123
            yield "                            ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 123) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 123), "hora", [], "any", false, false, false, 123))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "examenFinal", [], "any", false, false, false, 123), "hora", [], "any", false, false, false, 123), "H:i"), "html", null, true)) : (""));
            yield "
                        </td>
                        <td>
                            ";
            // line 126
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 126) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 126), "persona", [], "any", false, false, false, 126))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 126), "persona", [], "any", false, false, false, 126), "nombre", [], "any", false, false, false, 126) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "alumno", [], "any", false, false, false, 126), "persona", [], "any", false, false, false, 126), "apellido", [], "any", false, false, false, 126)), "html", null, true)) : ("N/A"));
            yield "
                        </td>
                        <td>
                            ";
            // line 129
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 129) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 129), "tecnicatura", [], "any", false, false, false, 129))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 129), "tecnicatura", [], "any", false, false, false, 129), "nombre", [], "any", false, false, false, 129), "html", null, true)) : ("N/A"));
            yield "
                        </td>
                        <td>
                            ";
            // line 132
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 132)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "asignatura", [], "any", false, false, false, 132), "nombre", [], "any", false, false, false, 132), "html", null, true)) : ("N/A"));
            yield "
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 139
        if (!$context['_iterated']) {
            // line 136
            yield "                    <tr>
                        <td colspan=\"5\">No se encontraron registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "            </tbody>
        </table> 
        <div style=\"text-align: center; margin-top: 1em;\">
         <button id=\"backButtonInscriptos\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
       </div>      

       ";
        // line 147
        yield "       <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
          <thead>
             <tr>
                 <th colspan=\"7\" style=\"text-align: center; font-size: 1.2em; font-weight: bold;\">
                     Mesas de Finales
                 </th>
             </tr>
              <tr>
                 <th>Asignatura</th>
                 <th>Fecha</th>
                 <th>Hora</th>
                 <th>Presidente</th>
                 <th>Primer Vocal</th>
                 <th>Segundo Vocal</th>
                 <th>Tecnicatura</th>
             </tr>
         </thead>
         <tbody>
             ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 165, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 166
            yield "                 <tr>
                     <td>";
            // line 167
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 167)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 167), "nombre", [], "any", false, false, false, 167), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 168
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 168)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 168), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 169
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 169)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 169), "H:i"), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 170
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 170) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 170), "persona", [], "any", false, false, false, 170))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 170), "persona", [], "any", false, false, false, 170), "nombre", [], "any", false, false, false, 170) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 170), "persona", [], "any", false, false, false, 170), "apellido", [], "any", false, false, false, 170)), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 171
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 171) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 171), "persona", [], "any", false, false, false, 171))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 171), "persona", [], "any", false, false, false, 171), "nombre", [], "any", false, false, false, 171) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 171), "persona", [], "any", false, false, false, 171), "apellido", [], "any", false, false, false, 171)), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 172
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 172) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 172), "persona", [], "any", false, false, false, 172))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 172), "persona", [], "any", false, false, false, 172), "nombre", [], "any", false, false, false, 172) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 172), "persona", [], "any", false, false, false, 172), "apellido", [], "any", false, false, false, 172)), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 173
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 173)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 173), "nombre", [], "any", false, false, false, 173), "html", null, true)) : (""));
            yield "</td>
                 </tr>
             ";
            $context['_iterated'] = true;
        }
        // line 179
        if (!$context['_iterated']) {
            // line 176
            yield "                 <tr>
                     <td colspan=\"7\">No se encontraron registros</td>
                  </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "         </tbody>
     </table>
     <div style=\"text-align: center; margin-top: 1em;\">
         <button id=\"backButtonMesas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
     </div>

        ";
        // line 187
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
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_alumnos"]) || array_key_exists("examen_alumnos", $context) ? $context["examen_alumnos"] : (function () { throw new RuntimeError('Variable "examen_alumnos" does not exist.', 202, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_alumno"]) {
            // line 203
            yield "                    <tr>
                        <td>
                            ";
            // line 205
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno_id", [], "any", false, false, false, 205) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno_id", [], "any", false, false, false, 205), "persona", [], "any", false, false, false, 205))) {
                // line 206
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno_id", [], "any", false, false, false, 206), "persona", [], "any", false, false, false, 206), "nombre", [], "any", false, false, false, 206), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "alumno_id", [], "any", false, false, false, 206), "persona", [], "any", false, false, false, 206), "apellido", [], "any", false, false, false, 206), "html", null, true);
                yield "
                            ";
            } else {
                // line 208
                yield "                                N/A
                            ";
            }
            // line 210
            yield "                        </td>
                        <td>";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "nota", [], "any", false, false, false, 211), "html", null, true);
            yield "</td>
                        <td>";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "tomo", [], "any", false, false, false, 212), "html", null, true);
            yield "</td>
                        <td>";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "folio", [], "any", false, false, false, 213), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 215
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 215) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 215), "tecnicatura", [], "any", false, false, false, 215))) {
                // line 216
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 216), "tecnicatura", [], "any", false, false, false, 216), "nombre", [], "any", false, false, false, 216), "html", null, true);
                yield "
                            ";
            } else {
                // line 218
                yield "                                N/A
                            ";
            }
            // line 220
            yield "                        </td>
                        <td>
                            ";
            // line 222
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 222) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 222), "asignatura", [], "any", false, false, false, 222))) {
                // line 223
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "examenFinal_id", [], "any", false, false, false, 223), "asignatura", [], "any", false, false, false, 223), "nombre", [], "any", false, false, false, 223), "html", null, true);
                yield "
                            ";
            } else {
                // line 225
                yield "                                N/A
                            ";
            }
            // line 227
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 231
        if (!$context['_iterated']) {
            // line 230
            yield "                    <tr><td colspan=\"6\">No se encontraron registros</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_alumno'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  481 => 232,  474 => 230,  472 => 231,  466 => 227,  462 => 225,  456 => 223,  454 => 222,  450 => 220,  446 => 218,  440 => 216,  438 => 215,  433 => 213,  429 => 212,  425 => 211,  422 => 210,  418 => 208,  410 => 206,  408 => 205,  404 => 203,  399 => 202,  382 => 187,  374 => 180,  365 => 176,  363 => 179,  356 => 173,  352 => 172,  348 => 171,  344 => 170,  340 => 169,  336 => 168,  332 => 167,  329 => 166,  324 => 165,  304 => 147,  296 => 140,  287 => 136,  285 => 139,  277 => 132,  271 => 129,  265 => 126,  258 => 123,  253 => 120,  250 => 119,  245 => 118,  221 => 96,  185 => 61,  172 => 60,  144 => 42,  139 => 40,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                        <td>
                            {# Si tienes relación con examen_final y hora #}
                            {{ inscripcion_final.examenFinal and inscripcion_final.examenFinal.hora ? inscripcion_final.examenFinal.hora|date('H:i') : '' }}
                        </td>
                        <td>
                            {{ inscripcion_final.alumno and inscripcion_final.alumno.persona ? inscripcion_final.alumno.persona.nombre ~ ' ' ~ inscripcion_final.alumno.persona.apellido : 'N/A' }}
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

       {# Mesas Vistas #}
       <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
          <thead>
             <tr>
                 <th colspan=\"7\" style=\"text-align: center; font-size: 1.2em; font-weight: bold;\">
                     Mesas de Finales
                 </th>
             </tr>
              <tr>
                 <th>Asignatura</th>
                 <th>Fecha</th>
                 <th>Hora</th>
                 <th>Presidente</th>
                 <th>Primer Vocal</th>
                 <th>Segundo Vocal</th>
                 <th>Tecnicatura</th>
             </tr>
         </thead>
         <tbody>
             {% for examen_final in examen_finals %}
                 <tr>
                     <td>{{ examen_final.asignatura ? examen_final.asignatura.nombre : '' }}</td>
                     <td>{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d') : '' }}</td>
                     <td>{{ examen_final.hora ? examen_final.hora|date('H:i') : '' }}</td>
                     <td>{{ examen_final.presidente and examen_final.presidente.persona ? examen_final.presidente.persona.nombre ~ ' ' ~ examen_final.presidente.persona.apellido : '' }}</td>
                     <td>{{ examen_final.vocal1 and examen_final.vocal1.persona ? examen_final.vocal1.persona.nombre ~ ' ' ~ examen_final.vocal1.persona.apellido : '' }}</td>
                     <td>{{ examen_final.vocal2 and examen_final.vocal2.persona ? examen_final.vocal2.persona.nombre ~ ' ' ~ examen_final.vocal2.persona.apellido : '' }}</td>
                     <td>{{ examen_final.tecnicatura ? examen_final.tecnicatura.nombre : '' }}</td>
                 </tr>
             {% else %}
                 <tr>
                     <td colspan=\"7\">No se encontraron registros</td>
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
                            {% if examen_alumno.alumno_id and examen_alumno.alumno_id.persona %}
                                {{ examen_alumno.alumno_id.persona.nombre }} {{ examen_alumno.alumno_id.persona.apellido }}
                            {% else %}
                                N/A
                            {% endif %}
                        </td>
                        <td>{{ examen_alumno.nota }}</td>
                        <td>{{ examen_alumno.tomo }}</td>
                        <td>{{ examen_alumno.folio }}</td>
                        <td>
                            {% if examen_alumno.examenFinal_id and examen_alumno.examenFinal_id.tecnicatura %}
                                {{ examen_alumno.examenFinal_id.tecnicatura.nombre }}
                            {% else %}
                                N/A
                            {% endif %}
                        </td>
                        <td>
                            {% if examen_alumno.examenFinal_id and examen_alumno.examenFinal_id.asignatura %}
                                {{ examen_alumno.examenFinal_id.asignatura.nombre }}
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
{% endblock %}", "examen_final/index.html.twig", "C:\\xampp\\htdocs\\local\\templates\\examen_final\\index.html.twig");
    }
}
