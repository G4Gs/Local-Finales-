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
            
            const backButton = document.getElementById('backButton');
            if (tableId === 'tablaPrincipal') {
                backButton.style.display = 'none';
            } else {
                backButton.style.display = '';
            }
        }
    </script>


    ";
        // line 48
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
        // line 122
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
        // line 135
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

    // line 158
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

        // line 159
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
        // line 191
        yield "        <button id=\"backButton\" class=\"btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>


        ";
        // line 195
        yield "        <table id=\"tablaInscriptos\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"4\">Inscriptos</th>
                </tr>
                <tr>
                    <th colspan=\"4\">
                        <input type=\"text\" id=\"searchFecha\" onkeyup=\"filterFecha()\" placeholder=\"Buscar Fecha...\">
                        <input type=\"text\" id=\"searchEstudiante\" onkeyup=\"filterEstudiante()\" placeholder=\"Buscar Estudiante...\">
                        <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTecnicatura()\" placeholder=\"Buscar Tecnicatura...\">
                        <input type=\"text\" id=\"searchAsignatura\" onkeyup=\"filterAsignatura()\" placeholder=\"Buscar Asignatura...\">
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
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inscripcion_finals"]) || array_key_exists("inscripcion_finals", $context) ? $context["inscripcion_finals"] : (function () { throw new RuntimeError('Variable "inscripcion_finals" does not exist.', 216, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscripcion_final"]) {
            // line 217
            yield "                    <tr>
                        <td>";
            // line 218
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 218)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "fecha", [], "any", false, false, false, 218), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAlumnoId", [], "method", false, false, false, 219), "html", null, true);
            yield "</td>
                        <td>";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAsignaturaId", [], "method", false, false, false, 220), "tecnicatura", [], "any", false, false, false, 220), "html", null, true);
            yield "</td>
                        <td>";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscripcion_final"], "getAsignaturaId", [], "method", false, false, false, 221), "html", null, true);
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 227
        if (!$context['_iterated']) {
            // line 224
            yield "                    <tr>
                        <td colspan=\"3\">No se encontraron registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inscripcion_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        yield ">
            </tbody>
        </table>       

        ";
        // line 232
        yield "        <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
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
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 247, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 248
            yield "                <tr>
                    <td>";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "getAsignaturaId", [], "method", false, false, false, 249), "html", null, true);
            yield "</td>
                    <td>";
            // line 250
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 250)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 250), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "getPresidenteId", [], "method", false, false, false, 251), "html", null, true);
            yield "</td>
                    <td>";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "getVocal1Id", [], "method", false, false, false, 252), "html", null, true);
            yield "</td>
                    <td>";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "getVocal2Id", [], "method", false, false, false, 253), "html", null, true);
            yield "</td>
                    <td>";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "getAsignaturaId", [], "method", false, false, false, 254), "tecnicatura", [], "any", false, false, false, 254), "html", null, true);
            yield "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 260
        if (!$context['_iterated']) {
            // line 257
            yield "                <tr>
                    <td colspan=\"3\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        yield "            </tbody>
        </table>


        ";
        // line 266
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
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_alumnos"]) || array_key_exists("examen_alumnos", $context) ? $context["examen_alumnos"] : (function () { throw new RuntimeError('Variable "examen_alumnos" does not exist.', 281, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_alumno"]) {
            // line 282
            yield "                <tr>
                    <td>";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "getAlumnoId", [], "any", false, false, false, 283), "html", null, true);
            yield "</td>
                    <td>";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "nota", [], "any", false, false, false, 284), "html", null, true);
            yield "</td>
                    <td>";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "tomo", [], "any", false, false, false, 285), "html", null, true);
            yield "</td>
                    <td>";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "folio", [], "any", false, false, false, 286), "html", null, true);
            yield "</td>
                    <td>";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "getExamenFinalId", [], "method", false, false, false, 287), "getAsignaturaId", [], "method", false, false, false, 287), "tecnicatura", [], "any", false, false, false, 287), "html", null, true);
            yield "</td>
                    <td>";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_alumno"], "getExamenFinalId", [], "method", false, false, false, 288), "getAsignaturaId", [], "method", false, false, false, 288), "html", null, true);
            yield "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 294
        if (!$context['_iterated']) {
            // line 291
            yield "                <tr>
                    <td colspan=\"5\">No se encontraron registros</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_alumno'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        yield "            </tbody>
        </table>
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
        return array (  544 => 295,  535 => 291,  533 => 294,  526 => 288,  522 => 287,  518 => 286,  514 => 285,  510 => 284,  506 => 283,  503 => 282,  498 => 281,  481 => 266,  475 => 261,  466 => 257,  464 => 260,  457 => 254,  453 => 253,  449 => 252,  445 => 251,  441 => 250,  437 => 249,  434 => 248,  429 => 247,  412 => 232,  406 => 227,  397 => 224,  395 => 227,  388 => 221,  384 => 220,  380 => 219,  376 => 218,  373 => 217,  368 => 216,  345 => 195,  340 => 191,  307 => 159,  294 => 158,  261 => 135,  245 => 122,  169 => 48,  145 => 26,  142 => 25,  138 => 23,  136 => 22,  133 => 21,  130 => 20,  126 => 18,  124 => 17,  121 => 16,  118 => 15,  113 => 12,  111 => 11,  106 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
            
            const backButton = document.getElementById('backButton');
            if (tableId === 'tablaPrincipal') {
                backButton.style.display = 'none';
            } else {
                backButton.style.display = '';
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

        {# Botón de regreso #}
        <button id=\"backButton\" class=\"btn-primary\" onclick=\"showTable('tablaPrincipal')\" style=\"display: none;\">Regresar</button>


        {# Inscriptos Vistas #}
        <table id=\"tablaInscriptos\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
            <thead>
                <tr>
                    <th colspan=\"4\">Inscriptos</th>
                </tr>
                <tr>
                    <th colspan=\"4\">
                        <input type=\"text\" id=\"searchFecha\" onkeyup=\"filterFecha()\" placeholder=\"Buscar Fecha...\">
                        <input type=\"text\" id=\"searchEstudiante\" onkeyup=\"filterEstudiante()\" placeholder=\"Buscar Estudiante...\">
                        <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTecnicatura()\" placeholder=\"Buscar Tecnicatura...\">
                        <input type=\"text\" id=\"searchAsignatura\" onkeyup=\"filterAsignatura()\" placeholder=\"Buscar Asignatura...\">
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

        {# Mesas Vistas #}
        <table id=\"tablaMesas\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
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
                    <td>{{ examen_final.getAsignaturaId() }}</td>
                    <td>{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d') : '' }}</td>
                    <td>{{ examen_final.getPresidenteId()}}</td>
                    <td>{{ examen_final.getVocal1Id() }}</td>
                    <td>{{ examen_final.getVocal2Id() }}</td>
                    <td>{{ examen_final.getAsignaturaId().tecnicatura }}</td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">No se encontraron registros</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>


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
