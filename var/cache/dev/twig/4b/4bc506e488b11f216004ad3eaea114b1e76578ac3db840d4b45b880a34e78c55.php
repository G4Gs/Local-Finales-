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
    ";
        // line 8
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Evaluar si `comId` está definido y no es nulo
            ";
        // line 11
        if ((array_key_exists("alumnoId", $context) &&  !(null === (isset($context["alumnoId"]) || array_key_exists("alumnoId", $context) ? $context["alumnoId"] : (function () { throw new RuntimeError('Variable "alumnoId" does not exist.', 11, $this->source); })())))) {
            // line 12
            yield "                // Llamar a showCursada con los IDs de cursada y tecnicatura
                showTable('tablaalumno');
            ";
        } else {
            // line 15
            yield "            ";
        }
        // line 16
        yield "
            ";
        // line 17
        if ((array_key_exists("docenteId", $context) &&  !(null === (isset($context["docenteId"]) || array_key_exists("docenteId", $context) ? $context["docenteId"] : (function () { throw new RuntimeError('Variable "docenteId" does not exist.', 17, $this->source); })())))) {
            // line 18
            yield "                showTable('tablaDocentes');
            ";
        } else {
            // line 20
            yield "            ";
        }
        // line 21
        yield "
            ";
        // line 22
        if ((array_key_exists("carrerasId", $context) &&  !(null === (isset($context["carrerasId"]) || array_key_exists("carrerasId", $context) ? $context["carrerasId"] : (function () { throw new RuntimeError('Variable "carrerasId" does not exist.', 22, $this->source); })())))) {
            // line 23
            yield "                showTable('tablacarrera');
            ";
        } else {
            // line 25
            yield "            ";
        }
        // line 26
        yield "        });

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


    ";
        // line 52
        yield "    
    <script>
        function filterFecha() {
            let searchFecha = document.getElementById(\"searchFecha\").value.toLowerCase();
            let table = document.getElementById(\"tablaInscriptos\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let fecha = cells[0].textContent.toLowerCase();
                    if (fecha.includes(searchFecha)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
        function filterEstudiante() {
            let searchEstudiante = document.getElementById(\"searchEstudiante\").value.toLowerCase();
            let table = document.getElementById(\"tablaInscriptos\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let estudiante = cells[1].textContent.toLowerCase();
                    if (estudiante.includes(searchEstudiante)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
        function filterTecnicatura() {
            let searchTecnicatura = document.getElementById(\"searchTecnicatura\").value.toLowerCase();
            let table = document.getElementById(\"tablaInscriptos\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let tecnicatura = cells[2].textContent.toLowerCase();
                    if (tecnicatura.includes(searchTecnicatura)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }

        function filterAsignatura() {
            let searchAsignatura = document.getElementById(\"searchAsignatura\").value.toLowerCase();
            let table = document.getElementById(\"tablaInscriptos\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let asignatura = cells[2].textContent.toLowerCase();
                    if (asignatura.includes(searchAsignatura)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
    </script> 

    <script>
        function openModal(action, asignaturaId = null, tecnicaturaId = null) {
            let url = '';
            //!!!!!!!!!Crear modal mesa de final
            if (action === 'mesa') {
                url = \"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nueva_mesa");
        yield "\"
                    ;
                fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalMesa').innerHTML = html;
                    document.getElementById('MesaModal').style.display = 'block';
                })
                .catch(error => console.error('Error al cargar el contenido del modal:', error));    
            }     

            //!!!!!!Crear modtal nota final
            if (action === 'notaFinal') {
                url = \"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nueva_notaFinal");
        yield "\"
                    ;
                fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalMesa').innerHTML = html;
                    document.getElementById('MesaModal').style.display = 'block';
                })
                .catch(error => console.error('Error al cargar el contenido del modal:', error));    
            }     
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

    // line 162
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

        // line 163
        yield "
    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Mesas de Finales</h1>
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
                        <button class:\"button\" onclick=\"showTable('tablaInscriptos')\">Ver</button>
                    </td>
                    <td>
                        <button class:\"button\" onclick=\"showTable('tablaMesas')\">Ver</button>
                        <button onclick=\"openModal('mesa')\"class:\"button\">Establecer fecha</button>
                    </td>
                    <td>
                        <buttonclass:\"button\" onclick=\"showTable('tablaNotasFinales')\">Ver</button>
                        <button onclick=\"openModal('notaFinal')\" class:\"button\">Cargar Nota</button>
                    </td>


                </tr>

            </tbody>
        </table>


        ";
        // line 196
        yield "        <table id=\"tablaInscriptos\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
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
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscripcion_finals"]) || array_key_exists("inscripcion_finals", $context) ? $context["inscripcion_finals"] : (function () { throw new RuntimeError('Variable "inscripcion_finals" does not exist.', 218, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion_final"]) {
            // line 219
            yield "                    <tr>
                        <td>";
            // line 220
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 220)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 220), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 221
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 221, $this->source); })()), "hora", [], "any", false, false, false, 221)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 221, $this->source); })()), "hora", [], "any", false, false, false, 221), "H:i"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAlumnoId", [], "method", false, false, false, 222), "html", null, true);
            yield "</td>
                        <td>";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAsignaturaId", [], "method", false, false, false, 223), "tecnicatura", [], "any", false, false, false, 223), "html", null, true);
            yield "</td>
                        <td>";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAsignaturaId", [], "method", false, false, false, 224), "html", null, true);
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 230
        if (!$context['_iterated']) {
            // line 227
            yield "                    <tr>
                        <td colspan=\"3\">No se encontraron registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        yield ">
            </tbody>
        </table> 
        <div style=\"text-align: center; margin-top: 1em;\">
         <button id=\"backButtonInscriptos\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
       </div>      

       ";
        // line 238
        yield "       <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
          <thead>
             <tr>
                 <th colspan=\"7\">Mesas de Finales</th>
             </tr>
              <tr>
                 <th>Asignatura</th>
                 <th>Fecha</th>
                 <th>hora</th>
                 <th>Presidente</th>
                 <th>Primer Vocal</th>
                 <th>Segundo Vocal</th>
                 <th>Tecnicatura</th>
             </tr>
         </thead>
         <tbody>
             ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 254, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 255
            yield "                 <tr>
                     <td>";
            // line 256
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 256)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 256), "nombre", [], "any", false, false, false, 256), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 257
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 257)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 257), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 258
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 258)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 258), "H:i"), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 259
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 259)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 259), "persona", [], "any", false, false, false, 259), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 260
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 260)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 260), "persona", [], "any", false, false, false, 260), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 261
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 261)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 261), "persona", [], "any", false, false, false, 261), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 262
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 262)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 262), "nombre", [], "any", false, false, false, 262), "html", null, true)) : (""));
            yield "</td>
                 </tr>
             ";
            $context['_iterated'] = true;
        }
        // line 268
        if (!$context['_iterated']) {
            // line 265
            yield "                 <tr>
                     <td colspan=\"6\">No se encontraron registros</td>
                  </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        yield "         </tbody>
     </table>
     <div style=\"text-align: center; margin-top: 1em;\">
         <button id=\"backButtonMesas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
     </div>


        ";
        // line 277
        yield "        <table id=\"tablaNotasFinales\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"6\">Nota de los Finales</th>
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
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_alumnos"]) || array_key_exists("examen_alumnos", $context) ? $context["examen_alumnos"] : (function () { throw new RuntimeError('Variable "examen_alumnos" does not exist.', 292, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_alumno"]) {
            // line 293
            yield "                <tr>
                    <td>";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "getAlumnoId", [], "any", false, false, false, 294), "html", null, true);
            yield "</td>
                    <td>";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "nota", [], "any", false, false, false, 295), "html", null, true);
            yield "</td>
                    <td>";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "tomo", [], "any", false, false, false, 296), "html", null, true);
            yield "</td>
                    <td>";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "folio", [], "any", false, false, false, 297), "html", null, true);
            yield "</td>
                    <td>";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "getExamenFinalId", [], "method", false, false, false, 298), "getAsignaturaId", [], "method", false, false, false, 298), "tecnicatura", [], "any", false, false, false, 298), "html", null, true);
            yield "</td>
                    <td>";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "getExamenFinalId", [], "method", false, false, false, 299), "getAsignaturaId", [], "method", false, false, false, 299), "html", null, true);
            yield "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 305
        if (!$context['_iterated']) {
            // line 302
            yield "                <tr>
                    <td colspan=\"5\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_alumno'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        yield "            </tbody>
        </table>
        </table>
        <div style=\"text-align: center; margin-top: 1em;\">
           <button id=\"backButtonNotas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
       </div>
 </div>    

    <!-- Modal  Mesas Final -->
    <div id=\"MesaModal\" class=\"modal\" style=\"display: none;\">
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
        return array (  560 => 306,  551 => 302,  549 => 305,  542 => 299,  538 => 298,  534 => 297,  530 => 296,  526 => 295,  522 => 294,  519 => 293,  514 => 292,  497 => 277,  488 => 269,  479 => 265,  477 => 268,  470 => 262,  466 => 261,  462 => 260,  458 => 259,  454 => 258,  450 => 257,  446 => 256,  443 => 255,  438 => 254,  420 => 238,  411 => 230,  402 => 227,  400 => 230,  393 => 224,  389 => 223,  385 => 222,  381 => 221,  377 => 220,  374 => 219,  369 => 218,  345 => 196,  311 => 163,  298 => 162,  265 => 139,  249 => 126,  173 => 52,  145 => 26,  142 => 25,  138 => 23,  136 => 22,  133 => 21,  130 => 20,  126 => 18,  124 => 17,  121 => 16,  118 => 15,  113 => 12,  111 => 11,  106 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mesas de Finales!{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# showtable para mostrar tablas #}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Evaluar si `comId` está definido y no es nulo
            {% if alumnoId is defined and alumnoId is not null %}
                // Llamar a showCursada con los IDs de cursada y tecnicatura
                showTable('tablaalumno');
            {% else %}
            {% endif %}

            {% if docenteId is defined and docenteId is not null %}
                showTable('tablaDocentes');
            {% else %}
            {% endif %}

            {% if carrerasId is defined and carrerasId is not null %}
                showTable('tablacarrera');
            {% else %}
            {% endif %}
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


    {#Busquedas en la tabla Inscriptos#}    
    <script>
        function filterFecha() {
            let searchFecha = document.getElementById(\"searchFecha\").value.toLowerCase();
            let table = document.getElementById(\"tablaInscriptos\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let fecha = cells[0].textContent.toLowerCase();
                    if (fecha.includes(searchFecha)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
        function filterEstudiante() {
            let searchEstudiante = document.getElementById(\"searchEstudiante\").value.toLowerCase();
            let table = document.getElementById(\"tablaInscriptos\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let estudiante = cells[1].textContent.toLowerCase();
                    if (estudiante.includes(searchEstudiante)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
        function filterTecnicatura() {
            let searchTecnicatura = document.getElementById(\"searchTecnicatura\").value.toLowerCase();
            let table = document.getElementById(\"tablaInscriptos\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let tecnicatura = cells[2].textContent.toLowerCase();
                    if (tecnicatura.includes(searchTecnicatura)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }

        function filterAsignatura() {
            let searchAsignatura = document.getElementById(\"searchAsignatura\").value.toLowerCase();
            let table = document.getElementById(\"tablaInscriptos\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let asignatura = cells[2].textContent.toLowerCase();
                    if (asignatura.includes(searchAsignatura)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }
    </script> 

    <script>
        function openModal(action, asignaturaId = null, tecnicaturaId = null) {
            let url = '';
            //!!!!!!!!!Crear modal mesa de final
            if (action === 'mesa') {
                url = \"{{ path('nueva_mesa', ) }}\"
                    ;
                fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalMesa').innerHTML = html;
                    document.getElementById('MesaModal').style.display = 'block';
                })
                .catch(error => console.error('Error al cargar el contenido del modal:', error));    
            }     

            //!!!!!!Crear modtal nota final
            if (action === 'notaFinal') {
                url = \"{{ path('nueva_notaFinal', ) }}\"
                    ;
                fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalMesa').innerHTML = html;
                    document.getElementById('MesaModal').style.display = 'block';
                })
                .catch(error => console.error('Error al cargar el contenido del modal:', error));    
            }     
        }

        function closeMesaModal() {
            document.getElementById('MesaModal').style.display = 'none';
            document.getElementById('modalMesa').innerHTML = '';
        }


    </script>


{% endblock %}

{% block body %}

    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Mesas de Finales</h1>
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
                        <button class:\"button\" onclick=\"showTable('tablaInscriptos')\">Ver</button>
                    </td>
                    <td>
                        <button class:\"button\" onclick=\"showTable('tablaMesas')\">Ver</button>
                        <button onclick=\"openModal('mesa')\"class:\"button\">Establecer fecha</button>
                    </td>
                    <td>
                        <buttonclass:\"button\" onclick=\"showTable('tablaNotasFinales')\">Ver</button>
                        <button onclick=\"openModal('notaFinal')\" class:\"button\">Cargar Nota</button>
                    </td>


                </tr>

            </tbody>
        </table>


        {# Inscriptos Vistas #}
        <table id=\"tablaInscriptos\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
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
                        <td colspan=\"3\">No se encontraron registros</td>
                    </tr>
                {% endfor %}>
            </tbody>
        </table> 
        <div style=\"text-align: center; margin-top: 1em;\">
         <button id=\"backButtonInscriptos\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
       </div>      

       {# Mesas Vistas #}
       <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
          <thead>
             <tr>
                 <th colspan=\"7\">Mesas de Finales</th>
             </tr>
              <tr>
                 <th>Asignatura</th>
                 <th>Fecha</th>
                 <th>hora</th>
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
                     <td>{{ examen_final.presidente ? examen_final.presidente.persona : '' }}</td>
                     <td>{{ examen_final.vocal1 ? examen_final.vocal1.persona : '' }}</td>
                     <td>{{ examen_final.vocal2 ? examen_final.vocal2.persona : '' }}</td>
                     <td>{{ examen_final.tecnicatura ? examen_final.tecnicatura.nombre : '' }}</td>
                 </tr>
             {% else %}
                 <tr>
                     <td colspan=\"6\">No se encontraron registros</td>
                  </tr>
             {% endfor %}
         </tbody>
     </table>
     <div style=\"text-align: center; margin-top: 1em;\">
         <button id=\"backButtonMesas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
     </div>


        {# Notas Finales Vistas #}
        <table id=\"tablaNotasFinales\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"6\">Nota de los Finales</th>
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
                    <td>{{ examen_alumno.getAlumnoId }}</td>
                    <td>{{ examen_alumno.nota }}</td>
                    <td>{{ examen_alumno.tomo }}</td>
                    <td>{{ examen_alumno.folio }}</td>
                    <td>{{ examen_alumno.getExamenFinalId().getAsignaturaId().tecnicatura }}</td>
                    <td>{{ examen_alumno.getExamenFinalId().getAsignaturaId() }}</td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">No se encontraron registros</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        </table>
        <div style=\"text-align: center; margin-top: 1em;\">
           <button id=\"backButtonNotas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
       </div>
 </div>    

    <!-- Modal  Mesas Final -->
    <div id=\"MesaModal\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <span class=\"close\" onclick=\"closeMesaModal()\">&times;</span>
            <div id=\"modalMesa\" class=\"submodal\"></div>
        </div>
    </div>






{% endblock %}
", "vistasmesas/index.html.twig", "C:\\xampp\\htdocs\\local\\templates\\vistasmesas\\index.html.twig");
    }
}
