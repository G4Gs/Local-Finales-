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
        // line 199
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
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscripcion_finals"]) || array_key_exists("inscripcion_finals", $context) ? $context["inscripcion_finals"] : (function () { throw new RuntimeError('Variable "inscripcion_finals" does not exist.', 221, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion_final"]) {
            // line 222
            yield "                    <tr>
                        <td>";
            // line 223
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 223)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 223), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 224
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 224, $this->source); })()), "hora", [], "any", false, false, false, 224)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 224, $this->source); })()), "hora", [], "any", false, false, false, 224), "H:i"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAlumnoId", [], "method", false, false, false, 225), "html", null, true);
            yield "</td>
                        <td>";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAsignaturaId", [], "method", false, false, false, 226), "tecnicatura", [], "any", false, false, false, 226), "html", null, true);
            yield "</td>
                        <td>";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAsignaturaId", [], "method", false, false, false, 227), "html", null, true);
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 233
        if (!$context['_iterated']) {
            // line 230
            yield "                    <tr>
                        <td colspan=\"5\">No se encontraron registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        yield ">
            </tbody>
        </table> 
        <div style=\"text-align: center; margin-top: 1em;\">
         <button id=\"backButtonInscriptos\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
       </div>      

       ";
        // line 241
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
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 257, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 258
            yield "                 <tr>
                     <td>";
            // line 259
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 259)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 259), "nombre", [], "any", false, false, false, 259), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 260
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 260)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 260), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 261
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 261)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "hora", [], "any", false, false, false, 261), "H:i"), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 262
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 262)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 262), "persona", [], "any", false, false, false, 262), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 263
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 263)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 263), "persona", [], "any", false, false, false, 263), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 264
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 264)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 264), "persona", [], "any", false, false, false, 264), "html", null, true)) : (""));
            yield "</td>
                     <td>";
            // line 265
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 265)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 265), "nombre", [], "any", false, false, false, 265), "html", null, true)) : (""));
            yield "</td>
                 </tr>
             ";
            $context['_iterated'] = true;
        }
        // line 271
        if (!$context['_iterated']) {
            // line 268
            yield "                 <tr>
                     <td colspan=\"6\">No se encontraron registros</td>
                  </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        yield "         </tbody>
     </table>
     <div style=\"text-align: center; margin-top: 1em;\">
         <button id=\"backButtonMesas\" class=\"btn btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>
     </div>


        ";
        // line 280
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
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_alumnos"]) || array_key_exists("examen_alumnos", $context) ? $context["examen_alumnos"] : (function () { throw new RuntimeError('Variable "examen_alumnos" does not exist.', 295, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_alumno"]) {
            // line 296
            yield "                <tr>
                    <td>";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "getAlumnoId", [], "any", false, false, false, 297), "html", null, true);
            yield "</td>
                    <td>";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "nota", [], "any", false, false, false, 298), "html", null, true);
            yield "</td>
                    <td>";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "tomo", [], "any", false, false, false, 299), "html", null, true);
            yield "</td>
                    <td>";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "folio", [], "any", false, false, false, 300), "html", null, true);
            yield "</td>
                    <td>";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "getExamenFinalId", [], "method", false, false, false, 301), "getAsignaturaId", [], "method", false, false, false, 301), "tecnicatura", [], "any", false, false, false, 301), "html", null, true);
            yield "</td>
                    <td>";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "getExamenFinalId", [], "method", false, false, false, 302), "getAsignaturaId", [], "method", false, false, false, 302), "html", null, true);
            yield "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 308
        if (!$context['_iterated']) {
            // line 305
            yield "                <tr>
                    <td colspan=\"5\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_alumno'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
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
        return array (  563 => 309,  554 => 305,  552 => 308,  545 => 302,  541 => 301,  537 => 300,  533 => 299,  529 => 298,  525 => 297,  522 => 296,  517 => 295,  500 => 280,  491 => 272,  482 => 268,  480 => 271,  473 => 265,  469 => 264,  465 => 263,  461 => 262,  457 => 261,  453 => 260,  449 => 259,  446 => 258,  441 => 257,  423 => 241,  414 => 233,  405 => 230,  403 => 233,  396 => 227,  392 => 226,  388 => 225,  384 => 224,  380 => 223,  377 => 222,  372 => 221,  348 => 199,  311 => 163,  298 => 162,  265 => 139,  249 => 126,  173 => 52,  145 => 26,  142 => 25,  138 => 23,  136 => 22,  133 => 21,  130 => 20,  126 => 18,  124 => 17,  121 => 16,  118 => 15,  113 => 12,  111 => 11,  106 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                        <td colspan=\"5\">No se encontraron registros</td>
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
