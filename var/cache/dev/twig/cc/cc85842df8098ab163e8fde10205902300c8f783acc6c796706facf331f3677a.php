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

/* vistaspreinscriptos/index.html.twig */
class __TwigTemplate_48d621e991ee67574c9149733045559e067eababc9d550b47cde2c5399f2b933 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistaspreinscriptos/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistaspreinscriptos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vistaspreinscriptos/index.html.twig", 1);
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

        yield "Pre Inscriptos";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    

    <h1 class=\"datos-filtered\" id=\"titulo-pre\">Pre Inscriptos</h1>
    <h1 class=\"datos-filtered\">Estudiantes: </h1>


    ";
        // line 12
        if ((array_key_exists("copied_data", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["copied_data"]) || array_key_exists("copied_data", $context) ? $context["copied_data"] : (function () { throw new RuntimeError('Variable "copied_data" does not exist.', 12, $this->source); })())))) {
            // line 13
            yield "        <div id=\"body-vistas2\" style=\"display: block;\">
            <h1 id=\"copied-arch\">Datos de región importados</h1>
            <table class=\"tabla_home\" id=\"copied-table\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"3\">
                            Buscar por : DNI/Pasaporte
                            <input type=\"text\" id=\"searchDNI\" onkeyup=\"filterTable()\" placeholder=\"Buscar DNI...\">
                        </th>
                        <th colspan=\"3\">
                            Buscar por : Tecnicatura
                            <input type=\"text\" id=\"searchTec\" onkeyup=\"filterTable()\" placeholder=\"Buscar Tecnicatura...\">
                        </th>
                        <th colspan=\"2\">
                            Buscar por: Listo
                            <select id=\"searchListo\" onchange=\"filterTable()\">
                                <option value=\"\">Todos</option>
                                <option value=\"0\">Por defecto</option>
                                <option value=\"1\">Inscripción de persona</option>
                                <option value=\"2\">Formulario de estudiante</option>
                                <option value=\"3\">Formulario de carrera</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Dni_Pasaporte</th>
                        <th>Apellido <button class:\"button\" onclick=\"sortTable()\">🔽</button></th>
                        <th>Nombre</th>
                        <th>Tecnicatura</th>
                        <th>Turno</th>
                        <th>Instituto</th>
                        <th>Listo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["copied_data"]) || array_key_exists("copied_data", $context) ? $context["copied_data"] : (function () { throw new RuntimeError('Variable "copied_data" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 50
                yield "                        <tr ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "new_field", [], "any", false, false, false, 50) == 0)) {
                    yield " style=\"background-color: #FFFFFF;\" ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "new_field", [], "any", false, false, false, 50) == "1")) {
                    yield " style=\"background-color: #FFC0C0;\" ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "new_field", [], "any", false, false, false, 50) == "2")) {
                    yield " style=\"background-color: #FFFFC2;\" ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "new_field", [], "any", false, false, false, 50) == "3")) {
                    yield " style=\"background-color: #D4E7D4;\" ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "new_field", [], "any", false, false, false, 50) == "4")) {
                    yield " style=\"background-color: #8FBC8F;\" ";
                }
                yield ">
                            <td>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>
                            <td>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "persona_apellido", [], "any", false, false, false, 52), "html", null, true);
                yield "</td>
                            <td>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "persona_nombre", [], "any", false, false, false, 53), "html", null, true);
                yield "</td>
                            <td>";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tecnicatura_nombre", [], "any", false, false, false, 54), "html", null, true);
                yield "</td>
                            <td>";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "turno_descripcion", [], "any", false, false, false, 55), "html", null, true);
                yield "</td>
                            <td>";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "instituto_numero", [], "any", false, false, false, 56), "html", null, true);
                yield "</td>
                            <td>
                                ";
                // line 58
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "new_field", [], "any", false, false, false, 58) == "0")) {
                    // line 59
                    yield "                                    0
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 60
$context["row"], "new_field", [], "any", false, false, false, 60) == "1")) {
                    // line 61
                    yield "                                    1
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 62
$context["row"], "new_field", [], "any", false, false, false, 62) == "2")) {
                    // line 63
                    yield "                                    2
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 64
$context["row"], "new_field", [], "any", false, false, false, 64) == "3")) {
                    // line 65
                    yield "                                    3
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 66
$context["row"], "new_field", [], "any", false, false, false, 66) == "4")) {
                    // line 67
                    yield "                                    4    
                                ";
                }
                // line 69
                yield "                            </td>
                            <td>
                                <button class=\"button\" id=\"editarcsv_";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 71), "html", null, true);
                yield "\" onclick=\"window.location.href='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspreinscriptos_edit2", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                yield "'\"   style=\"display: none;\">1</button>
                                <button class=\"button\" id=\"editarcsv2_";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 72), "html", null, true);
                yield "\" onclick=\"window.location.href='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspreinscriptos_edit3", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                yield "'\"   style=\"display: none;\">2</button>
                                <button class=\"button\"  id=\"editarcsv3_";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 73), "html", null, true);
                yield "\" onclick=\"window.location.href='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspreinscriptos_edit4", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                yield "'\"   style=\"display: none;\">3</button>
                                <button class=\"button\" id=\"editarcsv4_";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 74), "html", null, true);
                yield "\" onclick=\"window.location.href='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspreinscriptos_edit5", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                yield "'\"   style=\"display: none;\">4</button>
                                <button class=\"buttonn\" onclick=\"window.location.href='";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspreinscriptos_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                yield "'\">
    Editar/Inscribir
</button>

                                <button class=\"buttonn\" onclick=\"openModalPersona('";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "persona_nombre", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "persona_apellido", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "fecha_nacimiento", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "genero", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "email", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "telefono", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "partido", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "calle", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "numero", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "piso", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "departamento", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "pasillo", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "pais_descripcion", [], "any", false, false, false, 79), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "localidad_nombre", [], "any", false, false, false, 79), "html", null, true);
                yield "',  '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 79), "html", null, true);
                yield "')\"  >Inscribir</button>
                                <button class=\"button\" id=\"crearAlumno_";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 80), "html", null, true);
                yield "\" onclick=\"openModalAlumno('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 80), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "titulo_sec", [], "any", false, false, false, 80), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "escuela_sec", [], "any", false, false, false, 80), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "anio_egreso", [], "any", false, false, false, 80), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "persona_nombre", [], "any", false, false, false, 80), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "persona_apellido", [], "any", false, false, false, 80), "html", null, true);
                yield "',  '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 80), "html", null, true);
                yield "')\" class=\"btn-primary\" style=\"display: none;\">Crear alumno</button>
                                <button class=\"button\"id=\"crearCarrera_";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 81), "html", null, true);
                yield "\"  onclick=\"openModalInsertarTecnicatura('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 81), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tecnicatura_resolucion", [], "any", false, false, false, 81), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tecnicatura_nombre", [], "any", false, false, false, 81), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "persona_nombre", [], "any", false, false, false, 81), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "persona_apellido", [], "any", false, false, false, 81), "html", null, true);
                yield "',  '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 81), "html", null, true);
                yield "')\" class=\"btn-primary\" style=\"display: none;\">Insertar en Carrera</button>
                                <button class=\"button\"id=\"crearAsignaturas_";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 82), "html", null, true);
                yield "\"  onclick=\"openModalInsertarAsignaturas('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "dni_pasaporte", [], "any", false, false, false, 82), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "tecnicatura_resolucion", [], "any", false, false, false, 82), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 82), "html", null, true);
                yield "')\" class=\"btn-primary\" style=\"display: none;\">Insertar en Asignaturas</button>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "                      <div id=\"contenedor-pre\">
                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 91
            yield "        <p>No hay datos disponibles para mostrar.</p>
    ";
        }
        // line 93
        yield "
    ";
        // line 95
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "flashes", ["success"], "method", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 96
            yield "        <div id=\"successModal\" class=\"modal\" style=\"display: block;\">
            <div class=\"modal-content\">
                <span class=\"close\">&times;</span>
                <p>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('successModal');
            const closeBtn = document.querySelector('.modal .close');

            if (modal) {
                // Cerrar el modal cuando se hace clic en la 'X'
                closeBtn.onclick = function() {
                    modal.style.display = \"none\";
                }

                // Cerrar el modal cuando se hace clic fuera del modal
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = \"none\";
                    }
                }
            }
        });


        //CUANDO SE CARGA EL DOCUMENTO SE EVALUA LA SESION QUE CONTIENE EL DNI A INSCRIBIRSE
        //ESTE ESTA SI PASO YA POR LA PRIMER INSTANCIA ACOMPAÑADO POR UN AUXILIAR PARA MARCAR LA ETAPA DE INSCRIPCION
        document.addEventListener('DOMContentLoaded', function () {
            // Obtener el valor del DNI desde una variable Twig
            const dniConPrefijo = \"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dni"]) || array_key_exists("dni", $context) ? $context["dni"] : (function () { throw new RuntimeError('Variable "dni" does not exist.', 130, $this->source); })()), "html", null, true);
        yield "\";

            // Verificar si el DNI tiene un valor, si existe y si tiene el prefijo '1.', '2.' o '3.'
            if (dniConPrefijo && typeof dniConPrefijo === 'string') {
                // Extraer solo el DNI sin el prefijo
                const dni = dniConPrefijo.substring(2); // Obtiene el DNI sin el prefijo '1.', '2.' o '3.'

                if (dniConPrefijo.startsWith('1.')) {
                    // Buscar el botón \"Crear alumno\" con el id correspondiente
                    const botonCrearAlumno = document.getElementById('crearAlumno_' + dni);
                    if (botonCrearAlumno) {
                        botonCrearAlumno.click();
                    } 
                } else if (dniConPrefijo.startsWith('2.')) {
                    // Buscar el botón \"Insertar en Carrera\" con el id correspondiente
                    const botonCrearCarrera = document.getElementById('crearCarrera_' + dni);                  
                    if (botonCrearCarrera) {
                        botonCrearCarrera.click();
                    } 
                } else if (dniConPrefijo.startsWith('3.')) {
                    // Buscar el botón \"Crear asignaturas\" con el id correspondiente
                    const botonCrearAsignaturas = document.getElementById('crearAsignaturas_' + dni);
                    if (botonCrearAsignaturas) {
                        botonCrearAsignaturas.click();
                    }
                } else {
                    console.log('Prefijo no válido');
                }
            } else {
                console.log('DNI no válido o sin prefijo');
            }
        });

    </script>

    <!-- Modal1 Crear persona y editar varios!!!-->
    <div id=\"Modal1\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\" >
            <p class=\"modalDePre\"> 1 Creando Persona</p>
            <div class=\"modal-content2\" >
                <span class=\"close\" onclick=\"closeModal1()\">&times;</span>
                <div id=\"modalBody-1\" class=\"submodal\"></div>
            </div>
        </div>    
    </div>     


    <!-- Modal2 para crear Estudiantes!!!-->
    <div id=\"Modal2\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\" >
            <p class=\"modalDePre\"> 2 Creando Estudiante</p>
            <div id=\"modal-cursadas\">
                <div class=\"modal-content2\">
                    <span class=\"close\" onclick=\"closeModalEst()\">&times;</span>
                    <div id=\"modalBody-2\" class=\"submodal\"></div>
                </div>
            </div>
        </div>    
    </div>

    
    <!-- Modal4 para crear Carreras!!!-->
    <div id=\"Modal4\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\" >
            <div id=\"modal-cursadas\" >
                <p class=\"modalDePre\"> 3 Creando Carrera al Estudiante</p>
                <div class=\"modal-content2\">
                    <span class=\"close\" onclick=\"closeModal4()\">&times;</span>
                    <div id=\"modalBody-4\" class=\"submodal\"></div>
                    ";
        // line 200
        yield "                </div>
            </div>
        </div>    
    </div>


    ";
        // line 207
        yield "    <div id=\"Modal5\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <div id=\"modal-Asignaturas\">
                <p class=\"modalDePre\">4 Creando Cursadas de 1*</p>
                <div class=\"modal-content2\">
                    <label for=\"inputAnio\" id=\"aniodeInscripcion\">Año de inscripción:</label>
                    <input type=\"number\" id=\"inputAnio\" />
                    <button type=\"button\" onclick=\"continuarInsercion()\">Continuar</button> <!-- Botón para continuar -->
                    <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal5()\">Cerrar</button>
                </div>
                <div id=\"modalBody-5\" class=\"submodal\"></div>
            </div>
        </div>
    </div>





    <!-- Modal para mostrar mensajes SUCCESS -->
    <div id=\"confirmModal2\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-contentX\">
            <div class=\"modal-cursadasX\">
                <div class=\"modal-contentX2\">

            <span class=\"close\" id=\"modalClose2\" onclick=\"closeModal()\">&times;</span>
            <h5 class=\"modal-title\" id=\"modalTitle\"></h5>
            <p id=\"modalMessage\"></p>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"modalClose\" onclick=\"closeModal()\">Cerrar</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal de errores -->
    <div id=\"errorModal\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <p>ERROR NO HAY PERSONA REGISTRADA PARA EL ESTUDIANTE</p>
            <span class=\"close\" onclick=\"closeModalerror()\">&times;</span>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModalerror()\">Cerrar</button>
        </div>
    </div>

    <!-- Modal de errores al crear PERSONA -->
    <div id=\"errorModal2\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <div id=\"errorModalBody\">
                <!-- Aquí se insertará el contenido dinámico -->
            </div>
            <button id=\"redirectButton\">Siguiente</button>
            ";
        // line 259
        yield "        </div>
    </div>

    <!-- Modal de errores al crear ESTUDIANTES-->
    <div id=\"errorModal3\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <p>ERROR YA HAY UN ESTUDIANTE CON EL MISMO DNI EN EL SISTEMA</p>
            <span class=\"close\" onclick=\"closeModalerror3()\">&times;</span>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModalerror3()\">Cerrar</button>
        </div>
    </div>

    <!-- Modal de errores INSERTAR A TECNICATURA -->
    <div id=\"errorModal6\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <p>ERROR NO HAY TENICATURA CON EL MISMO NOMBRE Y/O RESOLUCION</p>
            <span class=\"close\" onclick=\"closeModalerror6()\">&times;</span>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModalerror6()\">Cerrar</button>
        </div>
    </div>



    <script>
        const personas2 = ";
        // line 283
        yield (isset($context["personas"]) || array_key_exists("personas", $context) ? $context["personas"] : (function () { throw new RuntimeError('Variable "personas" does not exist.', 283, $this->source); })());
        yield "; // personas ahora es un array de DNIs
        //console.log(personas2);
        const alumnos2 = ";
        // line 285
        yield (isset($context["alumnos"]) || array_key_exists("alumnos", $context) ? $context["alumnos"] : (function () { throw new RuntimeError('Variable "alumnos" does not exist.', 285, $this->source); })());
        yield "; 
        //console.log(alumnos2);

        const carreras2 = ";
        // line 288
        yield (isset($context["carreras"]) || array_key_exists("carreras", $context) ? $context["carreras"] : (function () { throw new RuntimeError('Variable "carreras" does not exist.', 288, $this->source); })());
        yield "; 
        //console.log(carreras2);

        function openModalInsertarAsignaturas(dni, resolucion, id) {
            const dniStr = String(dni);

            // Divide `resolucion` en dos partes
            const [resolucionParte1, N2] = resolucion.split('/');

            // Calcula el año actual y establece el año siguiente como valor por defecto
            const nextYear = new Date().getFullYear() ;
            const inputAnio = document.getElementById('inputAnio');
            inputAnio.value = nextYear; // Asigna el año por defecto al input

            inputAnio.style.display = \"none\";
            const aniolabel = document.getElementById('aniodeInscripcion');
            aniolabel.textContent += nextYear;


            // Guarda valores necesarios para usarlos después
            document.getElementById('Modal5').dataset.dni = dniStr;
            document.getElementById('Modal5').dataset.resolucionParte1 = resolucionParte1;
            document.getElementById('Modal5').dataset.N2 = N2;
            document.getElementById('Modal5').dataset.id = id;

            // Muestra el modal para que el usuario pueda cambiar el año si lo desea
            document.getElementById('Modal5').style.display = 'block';
        }

        function continuarInsercion() {
            const modal = document.getElementById('Modal5');
            const dni = modal.dataset.dni;
            const resolucionParte1 = modal.dataset.resolucionParte1;
            const N2 = modal.dataset.N2;
            const id = modal.dataset.id;

            // Obtiene el valor del año que el usuario seleccionó
            const anio = document.getElementById('inputAnio').value;



            // Construye la URL usando las partes separadas
            const url = \"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_asignaturasDe1", ["dni" => "__dni__", "resolucion" => "__resolucion__", "N2" => "__N2__", "id" => "__id__", "anio" => "__anio__"]), "html", null, true);
        yield "\"
                .replace('__dni__', dni)
                .replace('__resolucion__', resolucionParte1)
                .replace('__N2__', N2)
                .replace('__id__', id)
                .replace('__anio__', anio);  // Agrega el año a la URL

            // Realiza la solicitud `fetch`
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    // Verifica si la respuesta contiene un error
                    if (data.error) {
                        document.getElementById('modalBody-5').innerHTML = `<p class=\"error\">\${data.error}</p>`;
                    } else {
                        document.getElementById('modalBody-5').innerHTML = data.html;  // Carga el contenido HTML si no hay error
                    }
                })
                .catch(error => console.error('Error', error));
        }

        //CREAR ESTUDIANTE
        function openModalAlumno(dni, titulo, escuela, anioegreso, nombre, apellido, id) {
            if (alumnos2.includes(dni)) {
                // Mostrar el modal de error
                const errorModal = document.getElementById('errorModal2');
                const errorModalBody = document.getElementById('errorModalBody');

                // Actualizar el contenido del modal con los datos de la persona
                errorModalBody.innerHTML = `<p>El estudiante con el DNI <strong>\${dni}</strong> ya existe.</p>`;
                // Mostrar el modal
                errorModal.style.display = 'block';
                // Configurar el botón de redirección
                const redirectButton = document.getElementById('redirectButton');
                const dniStr = String(dni); 
                const url = \"";
        // line 365
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alumno_siguiente", ["dni" => "__dni__"]);
        yield "\"
                    .replace('__dni__', dniStr);

                redirectButton.onclick = function() {
                    window.location.href = url;
                };
                return;
            }
            const dniStr = String(dni); 
            const url = \"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_alumno_pre", ["dni" => "__dni__", "id" => "__id__"]), "html", null, true);
        yield "\"
                .replace('__dni__', dniStr)
                .replace('__id__', id);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-2').innerHTML = html;
                    document.getElementById('Modal2').style.display = 'block';
                    const personaInput = document.getElementById('alumno_persona');

                    const tituloInput = document.getElementById('alumno_titulo_sec');
                    const escuelaInput = document.getElementById('alumno_escuela_sec');
                    const anioInput = document.getElementById('alumno_anio_egreso');


                    const labeltitulo = document.querySelector('label[for=\"alumno_titulo_sec\"]');
                    if (labeltitulo) {
                        labeltitulo.style.display = 'none';
                    }                   
                    if (tituloInput) {  
                        tituloInput.value = titulo;
                        tituloInput.style.display = 'none';
                    }

                    
                    const labelescuela = document.querySelector('label[for=\"alumno_escuela_sec\"]');
                    if (labelescuela) {
                        labelescuela.style.display = 'none';
                    }
                    if (escuelaInput) {  
                        escuelaInput.value = escuela;
                        escuelaInput.style.display = 'none';
                    }

                    
                    const labelanio = document.querySelector('label[for=\"alumno_anio_egreso\"]');
                    if (labelanio) {
                        labelanio.style.display = 'none';
                    }
                    if (anioInput) {  
                        anioInput.value = anioegreso;
                        anioInput.style.display = 'none';
                    }
                    if (personaInput) {
                        // Crear una nueva opción en blanco
                        const blankOption = document.createElement('option');
                        blankOption.value = '';
                        blankOption.text = '';

                        // Insertar la opción en blanco al inicio del select
                        personaInput.insertBefore(blankOption, personaInput.firstChild);
                        // Seleccionar la opción en blanco por defecto
                        personaInput.value = '';

                        // Variable para verificar si se encontró el DNI
                        let dniFound = false;

                        // Iterar sobre las opciones para encontrar la que coincide con el DNI
                        const opcionesPersona = personaInput.options;
                        for (let i = 0; i < opcionesPersona.length; i++) {
                            const option = opcionesPersona[i];
                            if (option.text.includes(dni)) {
                                personaInput.value = option.value; // Selecciona la opción que coincide
                                dniFound = true;
                                break;
                            }
                        }

                        if (!dniFound) {
                            // Si no se encontró el DNI, mostrar el modal de error y cerrar el modal actual
                            document.getElementById('Modal2').style.display = 'none';
                            document.getElementById('errorModal').style.display = 'block';
                        }
                        personaInput.style.display = 'none';
                    }
                    const labelpersona = document.querySelector('label[for=\"alumno_persona\"]');
                    if (labelpersona) {
                        labelpersona.innerHTML = `Apellido: \${apellido}<br>Nombre: \${nombre}<br>DNI: \${dni}`;
                        labelpersona.style.display = 'inline'; // El css en algun momento interfiere, por lo que me aseguro de que aqui se mantenga en formato
                    }
                    // Simula un retraso  para enviar el formulario de crear alumno
                    setTimeout(() => {
                        const form = document.getElementById('form-crea-alumno');
                        if (form) {
                            form.submit();
                        } else {
                            console.error('Formulario de crear persona no encontrado');
                        }
                    }, 10); // Retraso 
                    
                })
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }



        //CREAR PERSONA
        function openModalPersona(nombre, apellido, fecha, dni, genero, email, telefono, partido, calle, numero, piso, depto, pasillo, pais, localidad, id) {
            if (personas2.includes(dni)) {
                // Mostrar el modal de error
                const errorModal = document.getElementById('errorModal2');
                const errorModalBody = document.getElementById('errorModalBody');

                // Actualizar el contenido del modal con los datos de la persona
                errorModalBody.innerHTML = `
                    <p>La persona con el DNI <strong>\${dni}</strong> ya existe.</p>
                    <p><strong>Nombre:</strong> \${nombre}</p>
                    <p><strong>Apellido:</strong> \${apellido}</p>
                `;

                // Mostrar el modal
                errorModal.style.display = 'block';

                // Configurar el botón de redirección
                const redirectButton = document.getElementById('redirectButton');
                const dniStr = String(dni); 
                const url = \"";
        // line 491
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("persona_siguiente", ["dni" => "__dni__"]);
        yield "\"
                    .replace('__dni__', dniStr);

                redirectButton.onclick = function() {
                    window.location.href = url;
                };

                return;
            }



            const dniStr = String(dni); 
            const url = \"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_persona_pre", ["dni" => "__dni__", "id" => "__id__"]), "html", null, true);
        yield "\"
                .replace('__dni__', dniStr)
                .replace('__id__', id);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';

                    const nombreInput = document.getElementById('persona_nombre');
                    const apellidoInput = document.getElementById('persona_apellido');
                    const fechaInput = document.getElementById('persona_fecha_nacimiento');
                    const dniInput = document.getElementById('persona_dni_pasaporte');
                    const generoInput = document.getElementById('persona_genero');
                    const emailInput = document.getElementById('persona_email');
                    const telefonoInput = document.getElementById('persona_telefono');
                    const partidoInput = document.getElementById('persona_partido');
                    const calleInput = document.getElementById('persona_calle');
                    const numeroInput = document.getElementById('persona_numero');
                    const pisoInput = document.getElementById('persona_piso');
                    const departamentoInput = document.getElementById('persona_departamento');
                    const pasilloInput = document.getElementById('persona_pasillo');
                    const paisInput = document.getElementById('persona_pais');
                    const localidadInput = document.getElementById('persona_localidad');
              
                    const labelnombre = document.querySelector('label[for=\"persona_nombre\"]');
                    if (labelnombre) {
                        labelnombre.textContent = `Nombre: \${nombre}`;
                    }
                    if (nombreInput) {  
                        nombreInput.value = nombre;
                        nombreInput.style.display = 'none';
                    }   

                    const labelapellido = document.querySelector('label[for=\"persona_apellido\"]');
                    if (labelapellido) {
                        labelapellido.textContent = `Apellido: \${apellido}`;
                    } 
                    if (apellidoInput) {  
                        apellidoInput.value = apellido;
                        apellidoInput.style.display = 'none';
                    }  
                    const diaInput = document.getElementById('persona_fecha_nacimiento_day');
                    const mesInput = document.getElementById('persona_fecha_nacimiento_month');
                    const anioInput = document.getElementById('persona_fecha_nacimiento_year');
                    if (fecha) {
                        const partesFecha = fecha.split('-');
                        if (partesFecha.length === 3) {
                            const [anio, mes, dia] = partesFecha;

                            if (anioInput) {
                                anioInput.value = anio;
                            }

                            // Forzar la selección correcta del mes
                            if (mesInput) {
                                for (let i = 0; i < mesInput.options.length; i++) {
                                    // Asegurarse de que el valor tenga dos dígitos (agregar un cero a la izquierda si es necesario)
                                    const valorMes = mesInput.options[i].value.padStart(2, '0');
                                    if (valorMes === mes.padStart(2, '0')) {
                                        mesInput.selectedIndex = i;
                                        break;
                                    }
                                }
                            }

                            // Forzar la selección correcta del día
                            if (diaInput) {
                                for (let i = 0; i < diaInput.options.length; i++) {
                                    // Asegurarse de que el valor tenga dos dígitos
                                    const valorDia = diaInput.options[i].value.padStart(2, '0');
                                    if (valorDia === dia.padStart(2, '0')) {
                                        diaInput.selectedIndex = i;
                                        break;
                                    }
                                }
                            }
                        }
                    } 

                    const labelfecha =  document.getElementById('label_fecha_persona_form');
                    if (labelfecha) {
                        labelfecha.style.display = 'none'; // Ocultar el label
                    }
                    if (fechaInput) {  
                        fechaInput.style.display = 'none';
                    }


                    if (dniInput) {  
                        dniInput.value = dni;
                        dniInput.style.display = 'none';
                    }

                    const labeldni = document.querySelector('label[for=\"persona_dni_pasaporte\"]');
                    if (labeldni) {
                        labeldni.textContent = `DNI: \${dni}`;
                    } 

                    if (generoInput) {
                        let generoEncontrado = false;
                        const opcionesGenero = generoInput.options;
                        for (let i = 0; i < opcionesGenero.length; i++) {
                            // Compara el valor de la opción con el valor recibido
                            if (opcionesGenero[i].value.toLowerCase() === genero.toLowerCase().trim()) {
                                generoInput.selectedIndex = i;
                                generoEncontrado = true;
                                break;
                            }
                        }
                        // Si no se encontró el valor deseado, dejar la primera opción por defecto
                        if (!generoEncontrado) {
                            generoInput.selectedIndex = 1; // Selecciona la primera opción
                        }
                        generoInput.style.display = 'none';
                    }
                    const labelgenero = document.querySelector('label[for=\"persona_genero\"]');
                    if (labelgenero) {
                        labelgenero.style.display = 'none';
                    } 



                    if (emailInput) {  
                        emailInput.value = email;
                        emailInput.style.display = 'none';
                    }  
                    const labelemail = document.querySelector('label[for=\"persona_email\"]');
                    if (labelemail) {
                        labelemail.style.display = 'none';
                    } 

                    if (telefonoInput) {  
                        telefonoInput.value = telefono;
                        telefonoInput.style.display = 'none';
                    }  
                    const labeltelefono = document.querySelector('label[for=\"persona_telefono\"]');
                    if (labeltelefono) {
                        labeltelefono.style.display = 'none';
                    } 

                    if (partidoInput) {  
                        partidoInput.value = partido;
                        partidoInput.style.display = 'none';
                    }  
                    const labelpartido = document.querySelector('label[for=\"persona_partido\"]');
                    if (labelpartido) {
                        labelpartido.style.display = 'none';
                    } 

                    if (calleInput) {  
                        calleInput.value = calle;
                        calleInput.style.display = 'none';
                    }
                    const labelcalle = document.querySelector('label[for=\"persona_calle\"]');
                    if (labelcalle) {
                        labelcalle.style.display = 'none';
                    } 

                    if (numeroInput) {  
                        numeroInput.value = numero;
                        numeroInput.style.display = 'none';
                    }
                    const labelnumero = document.querySelector('label[for=\"persona_numero\"]');
                    if (labelnumero) {
                        labelnumero.style.display = 'none';
                    } 

                    if (pisoInput) {  
                        pisoInput.value = piso;
                        pisoInput.style.display = 'none';
                    }
                    const labelpiso = document.querySelector('label[for=\"persona_piso\"]');
                    if (labelpiso) {
                        labelpiso.style.display = 'none';
                    } 

                    if (departamentoInput) {  
                        departamentoInput.value = depto;
                        departamentoInput.style.display = 'none';
                    }
                    const labeldepto = document.querySelector('label[for=\"persona_departamento\"]');
                    if (labeldepto) {
                        labeldepto.style.display = 'none';
                    } 

                    if (pasilloInput) {  
                        pasilloInput.value = pasillo;
                        pasilloInput.style.display = 'none';
                    }
                    const labelpasillo = document.querySelector('label[for=\"persona_pasillo\"]');
                    if (labelpasillo) {
                        labelpasillo.style.display = 'none';
                    } 


                    if (paisInput) {
                        let paisEncontrado = false;
                        const opcionesPais = paisInput.options;
                        for (let i = 0; i < opcionesPais.length; i++) {
                            // Compara el valor de la opción con el valor recibido
                            if (opcionesPais[i].value.toLowerCase() === pais.toLowerCase().trim()) {
                                paisInput.selectedIndex = i;
                                paisEncontrado = true;
                                break;
                            }
                        }
                        // Si no se encontró el valor deseado, dejar la primera opción por defecto
                        if (!paisEncontrado) {
                            paisInput.selectedIndex = 0; // Selecciona la primera opción
                        }
                        paisInput.style.display = 'none';
                    }
                    const labelpais = document.querySelector('label[for=\"persona_pais\"]');
                    if (labelpais) {
                        labelpais.style.display = 'none';
                    } 


                    if (localidadInput) {
                        let localidadEncontrada = false;
                        const opcionesLocalidad = localidadInput.options;
                        for (let i = 0; i < opcionesLocalidad.length; i++) {
                            // Compara el valor de la opción con el valor recibido
                            if (opcionesLocalidad[i].value.toLowerCase() === localidad.toLowerCase().trim()) {
                                localidadInput.selectedIndex = i;
                                localidadEncontrada = true;
                                break;
                            }
                        }
                        // Si no se encontró el valor deseado, dejar la primera opción por defecto
                        if (!localidadEncontrada) {
                            localidadInput.selectedIndex = 0; // Selecciona la primera opción
                        }
                        localidadInput.style.display = 'none';
                    }
                    const labellocalidad = document.querySelector('label[for=\"persona_localidad\"]');
                    if (labellocalidad) {
                        labellocalidad.style.display = 'none';
                    } 


                    // Simula un retraso  para enviar el formulario de crear persona
                    setTimeout(() => {
                        const form = document.getElementById('form-crea-persona');
                        if (form) {
                            form.submit();
                        } else {
                            console.error('Formulario de crear persona no encontrado');
                        }
                    }, 10); // Retraso 
                    
                    const BotonPersona = document.getElementById('siguientepersona');
                    const csvButton = document.getElementById('editarcsv2_'+dni);
                    BotonPersona.addEventListener('click', function() {
                        csvButton.click();
                    });
                    
                    
                })



                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
  


        ";
        // line 773
        yield " 
        function openModalInsertarTecnicatura(dni, tecres, tecnom, nombre, apellido, id) {
            const existeEnCarrera = carreras2.some(item => item.dni === dni && item.tecnicatura === tecres);
            if (existeEnCarrera) {
                // Mostrar el modal de error
                const errorModal = document.getElementById('errorModal2');
                const errorModalBody = document.getElementById('errorModalBody');

                // Actualizar el contenido del modal con los datos del estudiante
                errorModalBody.innerHTML = `<p>El estudiante con el DNI <strong>\${dni}</strong> ya está inscrito en la carrera <strong>\${tecnom} \${tecres}</strong></p>`;
                errorModal.style.display = 'block';

                // Configurar el botón de redirección
                const redirectButton = document.getElementById('redirectButton');
                const dniStr = String(dni); 
                const url = \"";
        // line 788
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("carrera_siguiente", ["dni" => "__dni__"]);
        yield "\".replace('__dni__', dniStr);

                redirectButton.onclick = function() {
                    window.location.href = url;
                };
                return;
            }   
  

            const url = \"";
        // line 797
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_carrera_Pre", ["id" => "__id__", "dni" => "__dni__"]), "html", null, true);
        yield "\"
            .replace('__id__', id)
            .replace('__dni__', dni); 
            // Realizar la solicitud fetch
            //console.log(tecnom);
            //console.log(tecres);
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-4').innerHTML = html;
                    document.getElementById('Modal4').style.display = 'block';

                    const personaInput = document.getElementById('carreras_estudiante_id');
                    const estadoInput = document.getElementById('carreras_estado');
                    const tecInput = document.getElementById('carreras_tecnicatura_id');
                    const fechaInput = document.getElementById('carreras_inicio');
                    const fechaFinInput = document.getElementById('carreras_fin');



                    const labelpersona = document.querySelector('label[for=\"carreras_estudiante_id\"]');
                    if (labelpersona) {
                        labelpersona.innerHTML = `Apellido: \${apellido}<br>Nombre: \${nombre}<br>DNI: \${dni}<br>Carrera: \${tecnom}<br>Num.Resol: \${tecres} `;
                        labelpersona.style.display = 'inline';
                    } 
                    if (personaInput) {
                        // Crear una nueva opción en blanco
                        const blankOption = document.createElement('option');
                        blankOption.value = '';
                        blankOption.text = '';

                        // Insertar la opción en blanco al inicio del select
                        personaInput.insertBefore(blankOption, personaInput.firstChild);
                        // Seleccionar la opción en blanco por defecto
                        personaInput.value = '';

                        // Variable para verificar si se encontró el DNI
                        let dniFound = false;

                        // Iterar sobre las opciones para encontrar la que coincide con el DNI
                        const opcionesPersona = personaInput.options;
                        for (let i = 0; i < opcionesPersona.length; i++) {
                            const option = opcionesPersona[i];
                            if (option.text.includes(dni)) {
                                personaInput.value = option.value; // Selecciona la opción que coincide
                                dniFound = true;
                                break;
                            }
                        }

                        if (!dniFound) {
                            // Si no se encontró el DNI, mostrar el modal de error y cerrar el modal actual
                            document.getElementById('Modal4').style.display = 'none';
                            document.getElementById('modalBody-4').innerHTML = '';
                            document.getElementById('errorModal').style.display = 'block';
                        }
                        personaInput.style.display = 'none';
                    } 

                    const labeltec = document.querySelector('label[for=\"carreras_tecnicatura_id\"]');
                    if (labeltec) {
                        labeltec.style.display = 'none';
                    } 
                    if (tecInput) {
                        // Crear una nueva opción en blanco
                        const blankOption = document.createElement('option');
                        blankOption.value = '';
                        blankOption.text = '';

                        // Insertar la opción en blanco al inicio del select
                        tecInput.insertBefore(blankOption, tecInput.firstChild);
                        // Seleccionar la opción en blanco por defecto
                        tecInput.value = '';

                        // Variable para verificar si se encontró la opción
                        let optionFound = false;

                        // Iterar sobre las opciones para encontrar la que coincide con el nombre y la resolución
                        const opcionesTec = tecInput.options;
                        for (let i = 0; i < opcionesTec.length; i++) {
                            const option = opcionesTec[i];
                            const optionText = option.textContent || option.innerText;

                            /*// Verificar si el texto de la opción contiene tanto el nombre como la resolución
                            if (optionText.includes(tecnom) && optionText.includes(tecres)) {
                                tecInput.value = option.value; // Selecciona la opción que coincide
                                optionFound = true;
                                break;
                            }*/
                            // Verificar si el texto de la opción contiene solo la resolución
                            if (optionText.includes(tecres)) {
                                tecInput.value = option.value; // Selecciona la opción que coincide
                                optionFound = true;
                                break;
                            }

                        }

                        if (!optionFound) {
                            // Si no se encontró la opción, mostrar el modal de error y cerrar el modal actual
                            document.getElementById('Modal4').style.display = 'none';
                            document.getElementById('modalBody-4').innerHTML = '';
                            document.getElementById('errorModal6').style.display = 'block';
                        }
                        tecInput.style.display = 'none';
                    }  

                    const labelestado = document.querySelector('label[for=\"carreras_estado\"]');
                    if (labelestado) {
                        labelestado.style.display = 'none';
                    } 
                    if (estadoInput) {  
                        estadoInput.checked = true; // Marca el checkbox
                        estadoInput.style.display = 'none';
                    }


                    const labelinicio = document.getElementById('label_inicio_pre');
                    if (labelinicio) {
                        labelinicio.style.display = 'none';
                    } 
                    if(fechaInput) {
                        // Obtener la fecha actual
                        const fechaActual = new Date();

                        // Obtener el día, mes y año actuales
                        const dia = fechaActual.getDate();
                        const mes = fechaActual.getMonth() + 1; // getMonth() devuelve el mes en base 0 (enero es 0)
                        const anio = fechaActual.getFullYear();

                        // Obtener los elementos de los campos desplegables
                        const diaInput = document.getElementById('carreras_inicio_day');
                        const mesInput = document.getElementById('carreras_inicio_month');
                        const anioInput = document.getElementById('carreras_inicio_year');

                        // Función para seleccionar un valor en un <select>
                        function seleccionarValor(selectElement, valor) {
                            if (selectElement) {
                                for (let i = 0; i < selectElement.options.length; i++) {
                                    if (selectElement.options[i].value == valor) {
                                        selectElement.selectedIndex = i;
                                        break;
                                    }
                                }
                            }
                        }

                        // Establecer el valor del día
                        seleccionarValor(diaInput, dia);

                        // Establecer el valor del mes (asegurarse de que el mes tenga dos dígitos si es necesario)
                        seleccionarValor(mesInput, mes);

                        // Establecer el valor del año
                        seleccionarValor(anioInput, anio);
                        fechaInput.style.display = 'none';
                    }

                    const labelfin = document.getElementById('label_fin_pre');
                    if (labelfin) {
                        labelfin.style.display = 'none';
                    } 
                    if(fechaFinInput) {
                        fechaFinInput.style.display = 'none';
                    }
                    setTimeout(() => {
                        const form = document.getElementById('form-crea-carreras-preinscriptos');
                        const botontrue = document.getElementById('editarcsv_' + dni);                         
                        if (form) {
                            form.submit();

                            setTimeout(() => {
                                botontrue.click();                             
                            }, 100); // Retraso  

                        } else {
                            console.error('Formulario de crear carrera a estudiante no encontrado');
                        }
                    }, 10); // Retraso
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }


        function closeModal1() { 
            document.getElementById('Modal1').style.display = 'none';
            document.getElementById('modalBody-1').innerHTML = '';
        }


        function closeModalEst() { 
            document.getElementById('Modal2').style.display = 'none';
            document.getElementById('modalBody-2').innerHTML = '';
        }


        function closeModalerror() { 
            document.getElementById('errorModal').style.display = 'none';
        }


        function closeModalerror2() { 
            document.getElementById('errorModal2').style.display = 'none';
        }


        function closeModalerror3() { 
            document.getElementById('errorModal3').style.display = 'none';
        }


        function closeModalerror6() { 
            document.getElementById('errorModal6').style.display = 'none';
        }


        function filterEstudiante() {
            let searchNombre = document.getElementById(\"searchEstudiante\").value.toLowerCase();
            let dropdown = document.getElementById(\"alumno_persona\"); 
            let options = dropdown.getElementsByTagName(\"option\");
                
            for (let i = 0; i < options.length; i++) {
                let optionText = options[i].textContent.toLowerCase();
                if (optionText.includes(searchNombre)) {
                    options[i].style.display = \"\"; 
                } else {
                    options[i].style.display = \"none\"; 
                }
            }
        }



        function focusDNI(dni) { //Para posible implementacion de enfocar un dni luego de una accion, se puede optar por el buscador de la tabla
            // Encuentra todas las filas de la tabla
            const rows = document.querySelectorAll('#copied-table tbody tr');
            
            rows.forEach(row => {
                // Verifica si el DNI de la fila coincide con el DNI proporcionado
                const cellDni = row.children[0].innerText.trim(); // Asumiendo que el DNI está en la primera columna
                if (cellDni === dni) {
                    // Aplica una clase para resaltar la fila
                    row.classList.add('highlight-text');
                    
                    // Desplaza la fila al centro de la vista
                    row.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    // Puedes hacer otras cosas, como mostrar un mensaje o aplicar más estilos si es necesario
                } else {
                    // Opcional: Elimina el resaltado de otras filas
                    row.classList.remove('highlight-text');
                }
            });
        }
    </script>

    <!-- Modal de confirmación  no borrar seccion necesaria para depuracion-->
    <div id=\"confirmModal\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <span class=\"close\" onclick=\"closeModal()\">&times;</span>
            <h5 class=\"modal-title\">Confirmación</h5>
            <p>¿Está seguro? Esto generará un nuevo archivo CSV y borrará los datos anteriores.</p>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal()\">Cancelar</button>
            <button type=\"button\" class=\"btn btn-primary\" id=\"confirmButton\" onclick=\"confirmAction()\">Confirmar</button>
        </div>
    </div> 

    <!-- Modal de confirmación de la copia oculto, no borrar seccion necesaria para depuracion-->
    <div id=\"confirmModal3\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <span class=\"close\" onclick=\"closeModal3()\">&times;</span>
            <h5 class=\"modal-title\">Confirmación</h5>
            <p>¿Está seguro? Esto generará un nuevo archivo CSV y borrará los datos anteriores.</p>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal3()\">Cancelar</button>
            <button type=\"button\" class=\"btn btn-primary\" id=\"confirmButton3\" onclick=\"confirmAction3()\">Confirmar</button>
        </div>

    </div>
      

    
 
       <div id=\"contenedor-pre1\" style=\"display: flex; justify-content: center;  \">
            <form action=\"";
        // line 1080
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspreinscriptos_clear_files");
        yield "\" method=\"post\" onsubmit=\"return confirm('¿Estás seguro de que deseas limpiar los archivos CSV? Esto no se puede deshacer.');\">
            
                <button type=\"submit\" class=\"buttonn\">Limpiar Registros</button>
           
            </form>
        </div>
        

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 1091
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

        // line 1092
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        function filterTable() {
            const searchDNI = document.getElementById('searchDNI').value.toLowerCase();
            const searchTec = document.getElementById('searchTec').value.toLowerCase();
            const searchListo = document.getElementById('searchListo').value.toLowerCase();      
            const table = document.getElementById('copied-table');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) { //Realizo un recorrido completo habilitando todo 
                const cells = rows[i].getElementsByTagName('td');
                const dni = cells[0].innerText.toLowerCase();
                const tecnicatura = cells[3].innerText.toLowerCase();
                const listo = cells[6].innerText.toLowerCase().toString();       
                const matchesDNI = dni.indexOf(searchDNI) > -1;
                const matchesTec = tecnicatura.indexOf(searchTec) > -1;
                const matchesListo = searchListo === '' || listo.indexOf(searchListo) > -1;
                if (matchesDNI && matchesTec && matchesListo) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = '';
                }
            }
            for (let i = 0; i < rows.length; i++) { //Aqui realizo el filtro para mostrar
                const cells = rows[i].getElementsByTagName('td');
                const dni = cells[0].innerText.toLowerCase();
                const tecnicatura = cells[3].innerText.toLowerCase();
                const listo = cells[6].innerText.toLowerCase().toString();           
                const matchesDNI = dni.indexOf(searchDNI) > -1;
                const matchesTec = tecnicatura.indexOf(searchTec) > -1;
                const matchesListo = searchListo === '' || listo.indexOf(searchListo) > -1;
                if (matchesDNI && matchesTec && matchesListo) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }

        function sortTable() {
            const table = document.getElementById('copied-table');
            const tbody = table.getElementsByTagName('tbody')[0];
            const rows = Array.from(tbody.getElementsByTagName('tr'));
            const isAscending = table.getAttribute('data-order') === 'asc';
            
            rows.sort((rowA, rowB) => {
                const nameA = rowA.cells[1].innerText.trim().toLowerCase();
                const nameB = rowB.cells[1].innerText.trim().toLowerCase();
                return isAscending ? nameA.localeCompare(nameB) : nameB.localeCompare(nameA);
            });

            rows.forEach(row => tbody.appendChild(row));
            table.setAttribute('data-order', isAscending ? 'desc' : 'asc');
        }


        //busqueda en la tabla editable modificada copied
        function filterDni() {
            let searchDni = document.getElementById(\"searchDNI\").value.toLowerCase();
            let table = document.getElementById(\"copied-table\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 2; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let dni = cells[0].textContent.toLowerCase();
                    if (dni.includes(searchDni)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }

        //busqueda tecnicatura
        function filterTec() {
            let searchDni = document.getElementById(\"searchTec\").value.toLowerCase();
            let table = document.getElementById(\"copied-table\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 2; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let dni = cells[3].textContent.toLowerCase();
                    if (dni.includes(searchDni)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }


        function openModal() {
            var modal = document.getElementById('confirmModal');
            modal.style.display = 'flex';
        }
        function closeModal() {
            var modal = document.getElementById('confirmModal');
            modal.style.display = 'none';
        }

        function openModal2(message, type) {
            var modal = document.getElementById('confirmModal2');
            var modalTitle = document.getElementById('modalTitle');
            var modalMessage = document.getElementById('modalMessage');

            modalTitle.textContent = type === 'success' ? 'Éxito' : 'Error';
            modalMessage.textContent = message;
            modal.style.display = 'flex';
        }
        function closeModal2() {
            var modal = document.getElementById('confirmModal2');
            modal.style.display = 'none';
        }

        function openModal3() {
            var modal = document.getElementById('confirmModal3');
            modal.style.display = 'flex';
        }
        function closeModal3() {
            var modal = document.getElementById('confirmModal3');
            modal.style.display = 'none';
        }

        function closeModal4() { 
            document.getElementById('Modal4').style.display = 'none';
            document.getElementById('modalBody-4').innerHTML = '';
        }

        function closeModal5() { 
            document.getElementById('Modal5').style.display = 'none';
            document.getElementById('modalBody-5').innerHTML = '';
            window.location.href = '";
        // line 1226
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspreinscriptos");
        yield "';
        }

        function confirmAction() {
            closeModal();
            document.getElementById('generateCsvForm').submit();
        }

        function confirmAction3() {
            document.getElementById('copyCsvForm').submit();
        }

        // Mostrar el modal si hay mensajes
        document.addEventListener('DOMContentLoaded', function () {
            ";
        // line 1240
        if (array_key_exists("success_message", $context)) {
            // line 1241
            yield "                openModal2('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["success_message"]) || array_key_exists("success_message", $context) ? $context["success_message"] : (function () { throw new RuntimeError('Variable "success_message" does not exist.', 1241, $this->source); })()), "js"), "html", null, true);
            yield "', 'success');
            ";
        }
        // line 1243
        yield "            ";
        if (array_key_exists("error_message", $context)) {
            // line 1244
            yield "                openModal2('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_message"]) || array_key_exists("error_message", $context) ? $context["error_message"] : (function () { throw new RuntimeError('Variable "error_message" does not exist.', 1244, $this->source); })()), "js"), "html", null, true);
            yield "', 'error');
            ";
        }
        // line 1246
        yield "        });

        /*
        // Ejecutar la redirección dos veces con un breve retraso cuando una session no logra limpiarse correctamente, dejar esta seccion comentada -solo para test-
        document.addEventListener('DOMContentLoaded', function () {
            function redirectTo(route) {
                window.location.href = route;
            }

            function handleRedirect() {
                const redirectUrl = '";
        // line 1256
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vistaspreinscriptos");
        yield "'; // URL de la ruta a redirigir

                // Redirigir dos veces con un breve retraso
                redirectTo(redirectUrl);

                setTimeout(function () {
                    redirectTo(redirectUrl);
                }, 100); // 100 ms de retraso
            }

            // Asignar la función handleRedirect al botón del modal
            document.getElementById('modalClose2').addEventListener('click', handleRedirect);
            document.getElementById('modalClose').addEventListener('click', handleRedirect);
        });*/
    </script> 
     
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
        return "vistaspreinscriptos/index.html.twig";
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
        return array (  1606 => 1256,  1594 => 1246,  1588 => 1244,  1585 => 1243,  1579 => 1241,  1577 => 1240,  1560 => 1226,  1422 => 1092,  1409 => 1091,  1389 => 1080,  1103 => 797,  1091 => 788,  1074 => 773,  802 => 504,  786 => 491,  666 => 374,  654 => 365,  616 => 330,  571 => 288,  565 => 285,  560 => 283,  534 => 259,  481 => 207,  473 => 200,  401 => 130,  372 => 103,  362 => 99,  357 => 96,  352 => 95,  349 => 93,  345 => 91,  338 => 86,  322 => 82,  306 => 81,  288 => 80,  254 => 79,  247 => 75,  241 => 74,  235 => 73,  229 => 72,  223 => 71,  219 => 69,  215 => 67,  213 => 66,  210 => 65,  208 => 64,  205 => 63,  203 => 62,  200 => 61,  198 => 60,  195 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  168 => 51,  153 => 50,  149 => 49,  111 => 13,  109 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pre Inscriptos{% endblock %}

{% block body %}
    

    <h1 class=\"datos-filtered\" id=\"titulo-pre\">Pre Inscriptos</h1>
    <h1 class=\"datos-filtered\">Estudiantes: </h1>


    {% if copied_data is defined and copied_data is not empty %}
        <div id=\"body-vistas2\" style=\"display: block;\">
            <h1 id=\"copied-arch\">Datos de región importados</h1>
            <table class=\"tabla_home\" id=\"copied-table\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"3\">
                            Buscar por : DNI/Pasaporte
                            <input type=\"text\" id=\"searchDNI\" onkeyup=\"filterTable()\" placeholder=\"Buscar DNI...\">
                        </th>
                        <th colspan=\"3\">
                            Buscar por : Tecnicatura
                            <input type=\"text\" id=\"searchTec\" onkeyup=\"filterTable()\" placeholder=\"Buscar Tecnicatura...\">
                        </th>
                        <th colspan=\"2\">
                            Buscar por: Listo
                            <select id=\"searchListo\" onchange=\"filterTable()\">
                                <option value=\"\">Todos</option>
                                <option value=\"0\">Por defecto</option>
                                <option value=\"1\">Inscripción de persona</option>
                                <option value=\"2\">Formulario de estudiante</option>
                                <option value=\"3\">Formulario de carrera</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Dni_Pasaporte</th>
                        <th>Apellido <button class:\"button\" onclick=\"sortTable()\">🔽</button></th>
                        <th>Nombre</th>
                        <th>Tecnicatura</th>
                        <th>Turno</th>
                        <th>Instituto</th>
                        <th>Listo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {% for row in copied_data %}
                        <tr {% if row.new_field == 0 %} style=\"background-color: #FFFFFF;\" {% elseif row.new_field == '1' %} style=\"background-color: #FFC0C0;\" {% elseif row.new_field == '2' %} style=\"background-color: #FFFFC2;\" {% elseif row.new_field == '3' %} style=\"background-color: #D4E7D4;\" {% elseif row.new_field == '4' %} style=\"background-color: #8FBC8F;\" {% endif %}>
                            <td>{{ row.dni_pasaporte }}</td>
                            <td>{{ row.persona_apellido }}</td>
                            <td>{{ row.persona_nombre }}</td>
                            <td>{{ row.tecnicatura_nombre }}</td>
                            <td>{{ row.turno_descripcion }}</td>
                            <td>{{ row.instituto_numero }}</td>
                            <td>
                                {% if row.new_field == '0' %}
                                    0
                                {% elseif row.new_field == '1' %}
                                    1
                                {% elseif row.new_field == '2' %}
                                    2
                                {% elseif row.new_field == '3' %}
                                    3
                                {% elseif row.new_field == '4' %}
                                    4    
                                {% endif %}
                            </td>
                            <td>
                                <button class=\"button\" id=\"editarcsv_{{ row.dni_pasaporte }}\" onclick=\"window.location.href='{{ path('app_vistaspreinscriptos_edit2', { id: row.id }) }}'\"   style=\"display: none;\">1</button>
                                <button class=\"button\" id=\"editarcsv2_{{ row.dni_pasaporte }}\" onclick=\"window.location.href='{{ path('app_vistaspreinscriptos_edit3', { id: row.id }) }}'\"   style=\"display: none;\">2</button>
                                <button class=\"button\"  id=\"editarcsv3_{{ row.dni_pasaporte }}\" onclick=\"window.location.href='{{ path('app_vistaspreinscriptos_edit4', { id: row.id }) }}'\"   style=\"display: none;\">3</button>
                                <button class=\"button\" id=\"editarcsv4_{{ row.dni_pasaporte }}\" onclick=\"window.location.href='{{ path('app_vistaspreinscriptos_edit5', { id: row.id }) }}'\"   style=\"display: none;\">4</button>
                                <button class=\"buttonn\" onclick=\"window.location.href='{{ path('app_vistaspreinscriptos_edit', { id: row.id }) }}'\">
    Editar/Inscribir
</button>

                                <button class=\"buttonn\" onclick=\"openModalPersona('{{ row.persona_nombre }}', '{{ row.persona_apellido }}', '{{ row.fecha_nacimiento }}', '{{ row.dni_pasaporte }}', '{{ row.genero }}', '{{ row.email }}', '{{ row.telefono }}', '{{ row.partido }}', '{{ row.calle }}', '{{ row.numero }}', '{{ row.piso }}', '{{ row.departamento }}', '{{ row.pasillo }}', '{{ row.pais_descripcion }}', '{{ row.localidad_nombre }}',  '{{ row.id }}')\"  >Inscribir</button>
                                <button class=\"button\" id=\"crearAlumno_{{ row.dni_pasaporte }}\" onclick=\"openModalAlumno('{{ row.dni_pasaporte }}', '{{ row.titulo_sec }}', '{{ row.escuela_sec }}', '{{ row.anio_egreso }}', '{{ row.persona_nombre }}', '{{ row.persona_apellido }}',  '{{ row.id }}')\" class=\"btn-primary\" style=\"display: none;\">Crear alumno</button>
                                <button class=\"button\"id=\"crearCarrera_{{ row.dni_pasaporte }}\"  onclick=\"openModalInsertarTecnicatura('{{ row.dni_pasaporte }}', '{{ row.tecnicatura_resolucion}}', '{{ row.tecnicatura_nombre}}', '{{ row.persona_nombre }}', '{{ row.persona_apellido }}',  '{{ row.id }}')\" class=\"btn-primary\" style=\"display: none;\">Insertar en Carrera</button>
                                <button class=\"button\"id=\"crearAsignaturas_{{ row.dni_pasaporte }}\"  onclick=\"openModalInsertarAsignaturas('{{ row.dni_pasaporte }}', '{{ row.tecnicatura_resolucion}}', '{{ row.id }}')\" class=\"btn-primary\" style=\"display: none;\">Insertar en Asignaturas</button>
                            </td>
                        </tr>
                    {% endfor %}
                      <div id=\"contenedor-pre\">
                </tbody>
            </table>
        </div>
    {% else %}
        <p>No hay datos disponibles para mostrar.</p>
    {% endif %}

    {# Verificar si hay un mensaje de éxito en la sesión #}
    {% for message in app.flashes('success') %}
        <div id=\"successModal\" class=\"modal\" style=\"display: block;\">
            <div class=\"modal-content\">
                <span class=\"close\">&times;</span>
                <p>{{ message }}</p>
            </div>
        </div>
    {% endfor %}

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('successModal');
            const closeBtn = document.querySelector('.modal .close');

            if (modal) {
                // Cerrar el modal cuando se hace clic en la 'X'
                closeBtn.onclick = function() {
                    modal.style.display = \"none\";
                }

                // Cerrar el modal cuando se hace clic fuera del modal
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = \"none\";
                    }
                }
            }
        });


        //CUANDO SE CARGA EL DOCUMENTO SE EVALUA LA SESION QUE CONTIENE EL DNI A INSCRIBIRSE
        //ESTE ESTA SI PASO YA POR LA PRIMER INSTANCIA ACOMPAÑADO POR UN AUXILIAR PARA MARCAR LA ETAPA DE INSCRIPCION
        document.addEventListener('DOMContentLoaded', function () {
            // Obtener el valor del DNI desde una variable Twig
            const dniConPrefijo = \"{{ dni }}\";

            // Verificar si el DNI tiene un valor, si existe y si tiene el prefijo '1.', '2.' o '3.'
            if (dniConPrefijo && typeof dniConPrefijo === 'string') {
                // Extraer solo el DNI sin el prefijo
                const dni = dniConPrefijo.substring(2); // Obtiene el DNI sin el prefijo '1.', '2.' o '3.'

                if (dniConPrefijo.startsWith('1.')) {
                    // Buscar el botón \"Crear alumno\" con el id correspondiente
                    const botonCrearAlumno = document.getElementById('crearAlumno_' + dni);
                    if (botonCrearAlumno) {
                        botonCrearAlumno.click();
                    } 
                } else if (dniConPrefijo.startsWith('2.')) {
                    // Buscar el botón \"Insertar en Carrera\" con el id correspondiente
                    const botonCrearCarrera = document.getElementById('crearCarrera_' + dni);                  
                    if (botonCrearCarrera) {
                        botonCrearCarrera.click();
                    } 
                } else if (dniConPrefijo.startsWith('3.')) {
                    // Buscar el botón \"Crear asignaturas\" con el id correspondiente
                    const botonCrearAsignaturas = document.getElementById('crearAsignaturas_' + dni);
                    if (botonCrearAsignaturas) {
                        botonCrearAsignaturas.click();
                    }
                } else {
                    console.log('Prefijo no válido');
                }
            } else {
                console.log('DNI no válido o sin prefijo');
            }
        });

    </script>

    <!-- Modal1 Crear persona y editar varios!!!-->
    <div id=\"Modal1\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\" >
            <p class=\"modalDePre\"> 1 Creando Persona</p>
            <div class=\"modal-content2\" >
                <span class=\"close\" onclick=\"closeModal1()\">&times;</span>
                <div id=\"modalBody-1\" class=\"submodal\"></div>
            </div>
        </div>    
    </div>     


    <!-- Modal2 para crear Estudiantes!!!-->
    <div id=\"Modal2\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\" >
            <p class=\"modalDePre\"> 2 Creando Estudiante</p>
            <div id=\"modal-cursadas\">
                <div class=\"modal-content2\">
                    <span class=\"close\" onclick=\"closeModalEst()\">&times;</span>
                    <div id=\"modalBody-2\" class=\"submodal\"></div>
                </div>
            </div>
        </div>    
    </div>

    
    <!-- Modal4 para crear Carreras!!!-->
    <div id=\"Modal4\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\" >
            <div id=\"modal-cursadas\" >
                <p class=\"modalDePre\"> 3 Creando Carrera al Estudiante</p>
                <div class=\"modal-content2\">
                    <span class=\"close\" onclick=\"closeModal4()\">&times;</span>
                    <div id=\"modalBody-4\" class=\"submodal\"></div>
                    {#<button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal4()\">Cerrar</button>#}
                </div>
            </div>
        </div>    
    </div>


    {# Modal para crear cursadas por cohorte #}
    <div id=\"Modal5\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <div id=\"modal-Asignaturas\">
                <p class=\"modalDePre\">4 Creando Cursadas de 1*</p>
                <div class=\"modal-content2\">
                    <label for=\"inputAnio\" id=\"aniodeInscripcion\">Año de inscripción:</label>
                    <input type=\"number\" id=\"inputAnio\" />
                    <button type=\"button\" onclick=\"continuarInsercion()\">Continuar</button> <!-- Botón para continuar -->
                    <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal5()\">Cerrar</button>
                </div>
                <div id=\"modalBody-5\" class=\"submodal\"></div>
            </div>
        </div>
    </div>





    <!-- Modal para mostrar mensajes SUCCESS -->
    <div id=\"confirmModal2\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-contentX\">
            <div class=\"modal-cursadasX\">
                <div class=\"modal-contentX2\">

            <span class=\"close\" id=\"modalClose2\" onclick=\"closeModal()\">&times;</span>
            <h5 class=\"modal-title\" id=\"modalTitle\"></h5>
            <p id=\"modalMessage\"></p>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"modalClose\" onclick=\"closeModal()\">Cerrar</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal de errores -->
    <div id=\"errorModal\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <p>ERROR NO HAY PERSONA REGISTRADA PARA EL ESTUDIANTE</p>
            <span class=\"close\" onclick=\"closeModalerror()\">&times;</span>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModalerror()\">Cerrar</button>
        </div>
    </div>

    <!-- Modal de errores al crear PERSONA -->
    <div id=\"errorModal2\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <div id=\"errorModalBody\">
                <!-- Aquí se insertará el contenido dinámico -->
            </div>
            <button id=\"redirectButton\">Siguiente</button>
            {#<button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModalerror2()\">Cerrar</button>#}
        </div>
    </div>

    <!-- Modal de errores al crear ESTUDIANTES-->
    <div id=\"errorModal3\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <p>ERROR YA HAY UN ESTUDIANTE CON EL MISMO DNI EN EL SISTEMA</p>
            <span class=\"close\" onclick=\"closeModalerror3()\">&times;</span>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModalerror3()\">Cerrar</button>
        </div>
    </div>

    <!-- Modal de errores INSERTAR A TECNICATURA -->
    <div id=\"errorModal6\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <p>ERROR NO HAY TENICATURA CON EL MISMO NOMBRE Y/O RESOLUCION</p>
            <span class=\"close\" onclick=\"closeModalerror6()\">&times;</span>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModalerror6()\">Cerrar</button>
        </div>
    </div>



    <script>
        const personas2 = {{ personas|raw }}; // personas ahora es un array de DNIs
        //console.log(personas2);
        const alumnos2 = {{ alumnos|raw }}; 
        //console.log(alumnos2);

        const carreras2 = {{carreras|raw }}; 
        //console.log(carreras2);

        function openModalInsertarAsignaturas(dni, resolucion, id) {
            const dniStr = String(dni);

            // Divide `resolucion` en dos partes
            const [resolucionParte1, N2] = resolucion.split('/');

            // Calcula el año actual y establece el año siguiente como valor por defecto
            const nextYear = new Date().getFullYear() ;
            const inputAnio = document.getElementById('inputAnio');
            inputAnio.value = nextYear; // Asigna el año por defecto al input

            inputAnio.style.display = \"none\";
            const aniolabel = document.getElementById('aniodeInscripcion');
            aniolabel.textContent += nextYear;


            // Guarda valores necesarios para usarlos después
            document.getElementById('Modal5').dataset.dni = dniStr;
            document.getElementById('Modal5').dataset.resolucionParte1 = resolucionParte1;
            document.getElementById('Modal5').dataset.N2 = N2;
            document.getElementById('Modal5').dataset.id = id;

            // Muestra el modal para que el usuario pueda cambiar el año si lo desea
            document.getElementById('Modal5').style.display = 'block';
        }

        function continuarInsercion() {
            const modal = document.getElementById('Modal5');
            const dni = modal.dataset.dni;
            const resolucionParte1 = modal.dataset.resolucionParte1;
            const N2 = modal.dataset.N2;
            const id = modal.dataset.id;

            // Obtiene el valor del año que el usuario seleccionó
            const anio = document.getElementById('inputAnio').value;



            // Construye la URL usando las partes separadas
            const url = \"{{ path('crear_asignaturasDe1', { 'dni': '__dni__', 'resolucion': '__resolucion__', 'N2': '__N2__', 'id': '__id__', 'anio': '__anio__' }) }}\"
                .replace('__dni__', dni)
                .replace('__resolucion__', resolucionParte1)
                .replace('__N2__', N2)
                .replace('__id__', id)
                .replace('__anio__', anio);  // Agrega el año a la URL

            // Realiza la solicitud `fetch`
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    // Verifica si la respuesta contiene un error
                    if (data.error) {
                        document.getElementById('modalBody-5').innerHTML = `<p class=\"error\">\${data.error}</p>`;
                    } else {
                        document.getElementById('modalBody-5').innerHTML = data.html;  // Carga el contenido HTML si no hay error
                    }
                })
                .catch(error => console.error('Error', error));
        }

        //CREAR ESTUDIANTE
        function openModalAlumno(dni, titulo, escuela, anioegreso, nombre, apellido, id) {
            if (alumnos2.includes(dni)) {
                // Mostrar el modal de error
                const errorModal = document.getElementById('errorModal2');
                const errorModalBody = document.getElementById('errorModalBody');

                // Actualizar el contenido del modal con los datos de la persona
                errorModalBody.innerHTML = `<p>El estudiante con el DNI <strong>\${dni}</strong> ya existe.</p>`;
                // Mostrar el modal
                errorModal.style.display = 'block';
                // Configurar el botón de redirección
                const redirectButton = document.getElementById('redirectButton');
                const dniStr = String(dni); 
                const url = \"{{ path('alumno_siguiente', { 'dni': '__dni__' }) }}\"
                    .replace('__dni__', dniStr);

                redirectButton.onclick = function() {
                    window.location.href = url;
                };
                return;
            }
            const dniStr = String(dni); 
            const url = \"{{ path('crear_alumno_pre', { 'dni': '__dni__', 'id': '__id__'  }) }}\"
                .replace('__dni__', dniStr)
                .replace('__id__', id);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-2').innerHTML = html;
                    document.getElementById('Modal2').style.display = 'block';
                    const personaInput = document.getElementById('alumno_persona');

                    const tituloInput = document.getElementById('alumno_titulo_sec');
                    const escuelaInput = document.getElementById('alumno_escuela_sec');
                    const anioInput = document.getElementById('alumno_anio_egreso');


                    const labeltitulo = document.querySelector('label[for=\"alumno_titulo_sec\"]');
                    if (labeltitulo) {
                        labeltitulo.style.display = 'none';
                    }                   
                    if (tituloInput) {  
                        tituloInput.value = titulo;
                        tituloInput.style.display = 'none';
                    }

                    
                    const labelescuela = document.querySelector('label[for=\"alumno_escuela_sec\"]');
                    if (labelescuela) {
                        labelescuela.style.display = 'none';
                    }
                    if (escuelaInput) {  
                        escuelaInput.value = escuela;
                        escuelaInput.style.display = 'none';
                    }

                    
                    const labelanio = document.querySelector('label[for=\"alumno_anio_egreso\"]');
                    if (labelanio) {
                        labelanio.style.display = 'none';
                    }
                    if (anioInput) {  
                        anioInput.value = anioegreso;
                        anioInput.style.display = 'none';
                    }
                    if (personaInput) {
                        // Crear una nueva opción en blanco
                        const blankOption = document.createElement('option');
                        blankOption.value = '';
                        blankOption.text = '';

                        // Insertar la opción en blanco al inicio del select
                        personaInput.insertBefore(blankOption, personaInput.firstChild);
                        // Seleccionar la opción en blanco por defecto
                        personaInput.value = '';

                        // Variable para verificar si se encontró el DNI
                        let dniFound = false;

                        // Iterar sobre las opciones para encontrar la que coincide con el DNI
                        const opcionesPersona = personaInput.options;
                        for (let i = 0; i < opcionesPersona.length; i++) {
                            const option = opcionesPersona[i];
                            if (option.text.includes(dni)) {
                                personaInput.value = option.value; // Selecciona la opción que coincide
                                dniFound = true;
                                break;
                            }
                        }

                        if (!dniFound) {
                            // Si no se encontró el DNI, mostrar el modal de error y cerrar el modal actual
                            document.getElementById('Modal2').style.display = 'none';
                            document.getElementById('errorModal').style.display = 'block';
                        }
                        personaInput.style.display = 'none';
                    }
                    const labelpersona = document.querySelector('label[for=\"alumno_persona\"]');
                    if (labelpersona) {
                        labelpersona.innerHTML = `Apellido: \${apellido}<br>Nombre: \${nombre}<br>DNI: \${dni}`;
                        labelpersona.style.display = 'inline'; // El css en algun momento interfiere, por lo que me aseguro de que aqui se mantenga en formato
                    }
                    // Simula un retraso  para enviar el formulario de crear alumno
                    setTimeout(() => {
                        const form = document.getElementById('form-crea-alumno');
                        if (form) {
                            form.submit();
                        } else {
                            console.error('Formulario de crear persona no encontrado');
                        }
                    }, 10); // Retraso 
                    
                })
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }



        //CREAR PERSONA
        function openModalPersona(nombre, apellido, fecha, dni, genero, email, telefono, partido, calle, numero, piso, depto, pasillo, pais, localidad, id) {
            if (personas2.includes(dni)) {
                // Mostrar el modal de error
                const errorModal = document.getElementById('errorModal2');
                const errorModalBody = document.getElementById('errorModalBody');

                // Actualizar el contenido del modal con los datos de la persona
                errorModalBody.innerHTML = `
                    <p>La persona con el DNI <strong>\${dni}</strong> ya existe.</p>
                    <p><strong>Nombre:</strong> \${nombre}</p>
                    <p><strong>Apellido:</strong> \${apellido}</p>
                `;

                // Mostrar el modal
                errorModal.style.display = 'block';

                // Configurar el botón de redirección
                const redirectButton = document.getElementById('redirectButton');
                const dniStr = String(dni); 
                const url = \"{{ path('persona_siguiente', { 'dni': '__dni__' }) }}\"
                    .replace('__dni__', dniStr);

                redirectButton.onclick = function() {
                    window.location.href = url;
                };

                return;
            }



            const dniStr = String(dni); 
            const url = \"{{ path('crear_persona_pre', { 'dni': '__dni__', 'id': '__id__' }) }}\"
                .replace('__dni__', dniStr)
                .replace('__id__', id);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-1').innerHTML = html;
                    document.getElementById('Modal1').style.display = 'block';

                    const nombreInput = document.getElementById('persona_nombre');
                    const apellidoInput = document.getElementById('persona_apellido');
                    const fechaInput = document.getElementById('persona_fecha_nacimiento');
                    const dniInput = document.getElementById('persona_dni_pasaporte');
                    const generoInput = document.getElementById('persona_genero');
                    const emailInput = document.getElementById('persona_email');
                    const telefonoInput = document.getElementById('persona_telefono');
                    const partidoInput = document.getElementById('persona_partido');
                    const calleInput = document.getElementById('persona_calle');
                    const numeroInput = document.getElementById('persona_numero');
                    const pisoInput = document.getElementById('persona_piso');
                    const departamentoInput = document.getElementById('persona_departamento');
                    const pasilloInput = document.getElementById('persona_pasillo');
                    const paisInput = document.getElementById('persona_pais');
                    const localidadInput = document.getElementById('persona_localidad');
              
                    const labelnombre = document.querySelector('label[for=\"persona_nombre\"]');
                    if (labelnombre) {
                        labelnombre.textContent = `Nombre: \${nombre}`;
                    }
                    if (nombreInput) {  
                        nombreInput.value = nombre;
                        nombreInput.style.display = 'none';
                    }   

                    const labelapellido = document.querySelector('label[for=\"persona_apellido\"]');
                    if (labelapellido) {
                        labelapellido.textContent = `Apellido: \${apellido}`;
                    } 
                    if (apellidoInput) {  
                        apellidoInput.value = apellido;
                        apellidoInput.style.display = 'none';
                    }  
                    const diaInput = document.getElementById('persona_fecha_nacimiento_day');
                    const mesInput = document.getElementById('persona_fecha_nacimiento_month');
                    const anioInput = document.getElementById('persona_fecha_nacimiento_year');
                    if (fecha) {
                        const partesFecha = fecha.split('-');
                        if (partesFecha.length === 3) {
                            const [anio, mes, dia] = partesFecha;

                            if (anioInput) {
                                anioInput.value = anio;
                            }

                            // Forzar la selección correcta del mes
                            if (mesInput) {
                                for (let i = 0; i < mesInput.options.length; i++) {
                                    // Asegurarse de que el valor tenga dos dígitos (agregar un cero a la izquierda si es necesario)
                                    const valorMes = mesInput.options[i].value.padStart(2, '0');
                                    if (valorMes === mes.padStart(2, '0')) {
                                        mesInput.selectedIndex = i;
                                        break;
                                    }
                                }
                            }

                            // Forzar la selección correcta del día
                            if (diaInput) {
                                for (let i = 0; i < diaInput.options.length; i++) {
                                    // Asegurarse de que el valor tenga dos dígitos
                                    const valorDia = diaInput.options[i].value.padStart(2, '0');
                                    if (valorDia === dia.padStart(2, '0')) {
                                        diaInput.selectedIndex = i;
                                        break;
                                    }
                                }
                            }
                        }
                    } 

                    const labelfecha =  document.getElementById('label_fecha_persona_form');
                    if (labelfecha) {
                        labelfecha.style.display = 'none'; // Ocultar el label
                    }
                    if (fechaInput) {  
                        fechaInput.style.display = 'none';
                    }


                    if (dniInput) {  
                        dniInput.value = dni;
                        dniInput.style.display = 'none';
                    }

                    const labeldni = document.querySelector('label[for=\"persona_dni_pasaporte\"]');
                    if (labeldni) {
                        labeldni.textContent = `DNI: \${dni}`;
                    } 

                    if (generoInput) {
                        let generoEncontrado = false;
                        const opcionesGenero = generoInput.options;
                        for (let i = 0; i < opcionesGenero.length; i++) {
                            // Compara el valor de la opción con el valor recibido
                            if (opcionesGenero[i].value.toLowerCase() === genero.toLowerCase().trim()) {
                                generoInput.selectedIndex = i;
                                generoEncontrado = true;
                                break;
                            }
                        }
                        // Si no se encontró el valor deseado, dejar la primera opción por defecto
                        if (!generoEncontrado) {
                            generoInput.selectedIndex = 1; // Selecciona la primera opción
                        }
                        generoInput.style.display = 'none';
                    }
                    const labelgenero = document.querySelector('label[for=\"persona_genero\"]');
                    if (labelgenero) {
                        labelgenero.style.display = 'none';
                    } 



                    if (emailInput) {  
                        emailInput.value = email;
                        emailInput.style.display = 'none';
                    }  
                    const labelemail = document.querySelector('label[for=\"persona_email\"]');
                    if (labelemail) {
                        labelemail.style.display = 'none';
                    } 

                    if (telefonoInput) {  
                        telefonoInput.value = telefono;
                        telefonoInput.style.display = 'none';
                    }  
                    const labeltelefono = document.querySelector('label[for=\"persona_telefono\"]');
                    if (labeltelefono) {
                        labeltelefono.style.display = 'none';
                    } 

                    if (partidoInput) {  
                        partidoInput.value = partido;
                        partidoInput.style.display = 'none';
                    }  
                    const labelpartido = document.querySelector('label[for=\"persona_partido\"]');
                    if (labelpartido) {
                        labelpartido.style.display = 'none';
                    } 

                    if (calleInput) {  
                        calleInput.value = calle;
                        calleInput.style.display = 'none';
                    }
                    const labelcalle = document.querySelector('label[for=\"persona_calle\"]');
                    if (labelcalle) {
                        labelcalle.style.display = 'none';
                    } 

                    if (numeroInput) {  
                        numeroInput.value = numero;
                        numeroInput.style.display = 'none';
                    }
                    const labelnumero = document.querySelector('label[for=\"persona_numero\"]');
                    if (labelnumero) {
                        labelnumero.style.display = 'none';
                    } 

                    if (pisoInput) {  
                        pisoInput.value = piso;
                        pisoInput.style.display = 'none';
                    }
                    const labelpiso = document.querySelector('label[for=\"persona_piso\"]');
                    if (labelpiso) {
                        labelpiso.style.display = 'none';
                    } 

                    if (departamentoInput) {  
                        departamentoInput.value = depto;
                        departamentoInput.style.display = 'none';
                    }
                    const labeldepto = document.querySelector('label[for=\"persona_departamento\"]');
                    if (labeldepto) {
                        labeldepto.style.display = 'none';
                    } 

                    if (pasilloInput) {  
                        pasilloInput.value = pasillo;
                        pasilloInput.style.display = 'none';
                    }
                    const labelpasillo = document.querySelector('label[for=\"persona_pasillo\"]');
                    if (labelpasillo) {
                        labelpasillo.style.display = 'none';
                    } 


                    if (paisInput) {
                        let paisEncontrado = false;
                        const opcionesPais = paisInput.options;
                        for (let i = 0; i < opcionesPais.length; i++) {
                            // Compara el valor de la opción con el valor recibido
                            if (opcionesPais[i].value.toLowerCase() === pais.toLowerCase().trim()) {
                                paisInput.selectedIndex = i;
                                paisEncontrado = true;
                                break;
                            }
                        }
                        // Si no se encontró el valor deseado, dejar la primera opción por defecto
                        if (!paisEncontrado) {
                            paisInput.selectedIndex = 0; // Selecciona la primera opción
                        }
                        paisInput.style.display = 'none';
                    }
                    const labelpais = document.querySelector('label[for=\"persona_pais\"]');
                    if (labelpais) {
                        labelpais.style.display = 'none';
                    } 


                    if (localidadInput) {
                        let localidadEncontrada = false;
                        const opcionesLocalidad = localidadInput.options;
                        for (let i = 0; i < opcionesLocalidad.length; i++) {
                            // Compara el valor de la opción con el valor recibido
                            if (opcionesLocalidad[i].value.toLowerCase() === localidad.toLowerCase().trim()) {
                                localidadInput.selectedIndex = i;
                                localidadEncontrada = true;
                                break;
                            }
                        }
                        // Si no se encontró el valor deseado, dejar la primera opción por defecto
                        if (!localidadEncontrada) {
                            localidadInput.selectedIndex = 0; // Selecciona la primera opción
                        }
                        localidadInput.style.display = 'none';
                    }
                    const labellocalidad = document.querySelector('label[for=\"persona_localidad\"]');
                    if (labellocalidad) {
                        labellocalidad.style.display = 'none';
                    } 


                    // Simula un retraso  para enviar el formulario de crear persona
                    setTimeout(() => {
                        const form = document.getElementById('form-crea-persona');
                        if (form) {
                            form.submit();
                        } else {
                            console.error('Formulario de crear persona no encontrado');
                        }
                    }, 10); // Retraso 
                    
                    const BotonPersona = document.getElementById('siguientepersona');
                    const csvButton = document.getElementById('editarcsv2_'+dni);
                    BotonPersona.addEventListener('click', function() {
                        csvButton.click();
                    });
                    
                    
                })



                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }
  


        {# CREAR ALUMNOS-x-TECNICATURA inserto el alumno a una tecnicatura #} 
        function openModalInsertarTecnicatura(dni, tecres, tecnom, nombre, apellido, id) {
            const existeEnCarrera = carreras2.some(item => item.dni === dni && item.tecnicatura === tecres);
            if (existeEnCarrera) {
                // Mostrar el modal de error
                const errorModal = document.getElementById('errorModal2');
                const errorModalBody = document.getElementById('errorModalBody');

                // Actualizar el contenido del modal con los datos del estudiante
                errorModalBody.innerHTML = `<p>El estudiante con el DNI <strong>\${dni}</strong> ya está inscrito en la carrera <strong>\${tecnom} \${tecres}</strong></p>`;
                errorModal.style.display = 'block';

                // Configurar el botón de redirección
                const redirectButton = document.getElementById('redirectButton');
                const dniStr = String(dni); 
                const url = \"{{ path('carrera_siguiente', { 'dni': '__dni__' }) }}\".replace('__dni__', dniStr);

                redirectButton.onclick = function() {
                    window.location.href = url;
                };
                return;
            }   
  

            const url = \"{{ path('crear_carrera_Pre', { 'id': '__id__' ,  'dni': '__dni__' } )}}\"
            .replace('__id__', id)
            .replace('__dni__', dni); 
            // Realizar la solicitud fetch
            //console.log(tecnom);
            //console.log(tecres);
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody-4').innerHTML = html;
                    document.getElementById('Modal4').style.display = 'block';

                    const personaInput = document.getElementById('carreras_estudiante_id');
                    const estadoInput = document.getElementById('carreras_estado');
                    const tecInput = document.getElementById('carreras_tecnicatura_id');
                    const fechaInput = document.getElementById('carreras_inicio');
                    const fechaFinInput = document.getElementById('carreras_fin');



                    const labelpersona = document.querySelector('label[for=\"carreras_estudiante_id\"]');
                    if (labelpersona) {
                        labelpersona.innerHTML = `Apellido: \${apellido}<br>Nombre: \${nombre}<br>DNI: \${dni}<br>Carrera: \${tecnom}<br>Num.Resol: \${tecres} `;
                        labelpersona.style.display = 'inline';
                    } 
                    if (personaInput) {
                        // Crear una nueva opción en blanco
                        const blankOption = document.createElement('option');
                        blankOption.value = '';
                        blankOption.text = '';

                        // Insertar la opción en blanco al inicio del select
                        personaInput.insertBefore(blankOption, personaInput.firstChild);
                        // Seleccionar la opción en blanco por defecto
                        personaInput.value = '';

                        // Variable para verificar si se encontró el DNI
                        let dniFound = false;

                        // Iterar sobre las opciones para encontrar la que coincide con el DNI
                        const opcionesPersona = personaInput.options;
                        for (let i = 0; i < opcionesPersona.length; i++) {
                            const option = opcionesPersona[i];
                            if (option.text.includes(dni)) {
                                personaInput.value = option.value; // Selecciona la opción que coincide
                                dniFound = true;
                                break;
                            }
                        }

                        if (!dniFound) {
                            // Si no se encontró el DNI, mostrar el modal de error y cerrar el modal actual
                            document.getElementById('Modal4').style.display = 'none';
                            document.getElementById('modalBody-4').innerHTML = '';
                            document.getElementById('errorModal').style.display = 'block';
                        }
                        personaInput.style.display = 'none';
                    } 

                    const labeltec = document.querySelector('label[for=\"carreras_tecnicatura_id\"]');
                    if (labeltec) {
                        labeltec.style.display = 'none';
                    } 
                    if (tecInput) {
                        // Crear una nueva opción en blanco
                        const blankOption = document.createElement('option');
                        blankOption.value = '';
                        blankOption.text = '';

                        // Insertar la opción en blanco al inicio del select
                        tecInput.insertBefore(blankOption, tecInput.firstChild);
                        // Seleccionar la opción en blanco por defecto
                        tecInput.value = '';

                        // Variable para verificar si se encontró la opción
                        let optionFound = false;

                        // Iterar sobre las opciones para encontrar la que coincide con el nombre y la resolución
                        const opcionesTec = tecInput.options;
                        for (let i = 0; i < opcionesTec.length; i++) {
                            const option = opcionesTec[i];
                            const optionText = option.textContent || option.innerText;

                            /*// Verificar si el texto de la opción contiene tanto el nombre como la resolución
                            if (optionText.includes(tecnom) && optionText.includes(tecres)) {
                                tecInput.value = option.value; // Selecciona la opción que coincide
                                optionFound = true;
                                break;
                            }*/
                            // Verificar si el texto de la opción contiene solo la resolución
                            if (optionText.includes(tecres)) {
                                tecInput.value = option.value; // Selecciona la opción que coincide
                                optionFound = true;
                                break;
                            }

                        }

                        if (!optionFound) {
                            // Si no se encontró la opción, mostrar el modal de error y cerrar el modal actual
                            document.getElementById('Modal4').style.display = 'none';
                            document.getElementById('modalBody-4').innerHTML = '';
                            document.getElementById('errorModal6').style.display = 'block';
                        }
                        tecInput.style.display = 'none';
                    }  

                    const labelestado = document.querySelector('label[for=\"carreras_estado\"]');
                    if (labelestado) {
                        labelestado.style.display = 'none';
                    } 
                    if (estadoInput) {  
                        estadoInput.checked = true; // Marca el checkbox
                        estadoInput.style.display = 'none';
                    }


                    const labelinicio = document.getElementById('label_inicio_pre');
                    if (labelinicio) {
                        labelinicio.style.display = 'none';
                    } 
                    if(fechaInput) {
                        // Obtener la fecha actual
                        const fechaActual = new Date();

                        // Obtener el día, mes y año actuales
                        const dia = fechaActual.getDate();
                        const mes = fechaActual.getMonth() + 1; // getMonth() devuelve el mes en base 0 (enero es 0)
                        const anio = fechaActual.getFullYear();

                        // Obtener los elementos de los campos desplegables
                        const diaInput = document.getElementById('carreras_inicio_day');
                        const mesInput = document.getElementById('carreras_inicio_month');
                        const anioInput = document.getElementById('carreras_inicio_year');

                        // Función para seleccionar un valor en un <select>
                        function seleccionarValor(selectElement, valor) {
                            if (selectElement) {
                                for (let i = 0; i < selectElement.options.length; i++) {
                                    if (selectElement.options[i].value == valor) {
                                        selectElement.selectedIndex = i;
                                        break;
                                    }
                                }
                            }
                        }

                        // Establecer el valor del día
                        seleccionarValor(diaInput, dia);

                        // Establecer el valor del mes (asegurarse de que el mes tenga dos dígitos si es necesario)
                        seleccionarValor(mesInput, mes);

                        // Establecer el valor del año
                        seleccionarValor(anioInput, anio);
                        fechaInput.style.display = 'none';
                    }

                    const labelfin = document.getElementById('label_fin_pre');
                    if (labelfin) {
                        labelfin.style.display = 'none';
                    } 
                    if(fechaFinInput) {
                        fechaFinInput.style.display = 'none';
                    }
                    setTimeout(() => {
                        const form = document.getElementById('form-crea-carreras-preinscriptos');
                        const botontrue = document.getElementById('editarcsv_' + dni);                         
                        if (form) {
                            form.submit();

                            setTimeout(() => {
                                botontrue.click();                             
                            }, 100); // Retraso  

                        } else {
                            console.error('Formulario de crear carrera a estudiante no encontrado');
                        }
                    }, 10); // Retraso
                })  
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }


        function closeModal1() { 
            document.getElementById('Modal1').style.display = 'none';
            document.getElementById('modalBody-1').innerHTML = '';
        }


        function closeModalEst() { 
            document.getElementById('Modal2').style.display = 'none';
            document.getElementById('modalBody-2').innerHTML = '';
        }


        function closeModalerror() { 
            document.getElementById('errorModal').style.display = 'none';
        }


        function closeModalerror2() { 
            document.getElementById('errorModal2').style.display = 'none';
        }


        function closeModalerror3() { 
            document.getElementById('errorModal3').style.display = 'none';
        }


        function closeModalerror6() { 
            document.getElementById('errorModal6').style.display = 'none';
        }


        function filterEstudiante() {
            let searchNombre = document.getElementById(\"searchEstudiante\").value.toLowerCase();
            let dropdown = document.getElementById(\"alumno_persona\"); 
            let options = dropdown.getElementsByTagName(\"option\");
                
            for (let i = 0; i < options.length; i++) {
                let optionText = options[i].textContent.toLowerCase();
                if (optionText.includes(searchNombre)) {
                    options[i].style.display = \"\"; 
                } else {
                    options[i].style.display = \"none\"; 
                }
            }
        }



        function focusDNI(dni) { //Para posible implementacion de enfocar un dni luego de una accion, se puede optar por el buscador de la tabla
            // Encuentra todas las filas de la tabla
            const rows = document.querySelectorAll('#copied-table tbody tr');
            
            rows.forEach(row => {
                // Verifica si el DNI de la fila coincide con el DNI proporcionado
                const cellDni = row.children[0].innerText.trim(); // Asumiendo que el DNI está en la primera columna
                if (cellDni === dni) {
                    // Aplica una clase para resaltar la fila
                    row.classList.add('highlight-text');
                    
                    // Desplaza la fila al centro de la vista
                    row.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    // Puedes hacer otras cosas, como mostrar un mensaje o aplicar más estilos si es necesario
                } else {
                    // Opcional: Elimina el resaltado de otras filas
                    row.classList.remove('highlight-text');
                }
            });
        }
    </script>

    <!-- Modal de confirmación  no borrar seccion necesaria para depuracion-->
    <div id=\"confirmModal\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <span class=\"close\" onclick=\"closeModal()\">&times;</span>
            <h5 class=\"modal-title\">Confirmación</h5>
            <p>¿Está seguro? Esto generará un nuevo archivo CSV y borrará los datos anteriores.</p>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal()\">Cancelar</button>
            <button type=\"button\" class=\"btn btn-primary\" id=\"confirmButton\" onclick=\"confirmAction()\">Confirmar</button>
        </div>
    </div> 

    <!-- Modal de confirmación de la copia oculto, no borrar seccion necesaria para depuracion-->
    <div id=\"confirmModal3\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <span class=\"close\" onclick=\"closeModal3()\">&times;</span>
            <h5 class=\"modal-title\">Confirmación</h5>
            <p>¿Está seguro? Esto generará un nuevo archivo CSV y borrará los datos anteriores.</p>
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal3()\">Cancelar</button>
            <button type=\"button\" class=\"btn btn-primary\" id=\"confirmButton3\" onclick=\"confirmAction3()\">Confirmar</button>
        </div>

    </div>
      

    
 
       <div id=\"contenedor-pre1\" style=\"display: flex; justify-content: center;  \">
            <form action=\"{{ path('app_vistaspreinscriptos_clear_files') }}\" method=\"post\" onsubmit=\"return confirm('¿Estás seguro de que deseas limpiar los archivos CSV? Esto no se puede deshacer.');\">
            
                <button type=\"submit\" class=\"buttonn\">Limpiar Registros</button>
           
            </form>
        </div>
        

{% endblock %}


{% block javascripts %}
    {{ parent() }}

    <script>
        function filterTable() {
            const searchDNI = document.getElementById('searchDNI').value.toLowerCase();
            const searchTec = document.getElementById('searchTec').value.toLowerCase();
            const searchListo = document.getElementById('searchListo').value.toLowerCase();      
            const table = document.getElementById('copied-table');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) { //Realizo un recorrido completo habilitando todo 
                const cells = rows[i].getElementsByTagName('td');
                const dni = cells[0].innerText.toLowerCase();
                const tecnicatura = cells[3].innerText.toLowerCase();
                const listo = cells[6].innerText.toLowerCase().toString();       
                const matchesDNI = dni.indexOf(searchDNI) > -1;
                const matchesTec = tecnicatura.indexOf(searchTec) > -1;
                const matchesListo = searchListo === '' || listo.indexOf(searchListo) > -1;
                if (matchesDNI && matchesTec && matchesListo) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = '';
                }
            }
            for (let i = 0; i < rows.length; i++) { //Aqui realizo el filtro para mostrar
                const cells = rows[i].getElementsByTagName('td');
                const dni = cells[0].innerText.toLowerCase();
                const tecnicatura = cells[3].innerText.toLowerCase();
                const listo = cells[6].innerText.toLowerCase().toString();           
                const matchesDNI = dni.indexOf(searchDNI) > -1;
                const matchesTec = tecnicatura.indexOf(searchTec) > -1;
                const matchesListo = searchListo === '' || listo.indexOf(searchListo) > -1;
                if (matchesDNI && matchesTec && matchesListo) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }

        function sortTable() {
            const table = document.getElementById('copied-table');
            const tbody = table.getElementsByTagName('tbody')[0];
            const rows = Array.from(tbody.getElementsByTagName('tr'));
            const isAscending = table.getAttribute('data-order') === 'asc';
            
            rows.sort((rowA, rowB) => {
                const nameA = rowA.cells[1].innerText.trim().toLowerCase();
                const nameB = rowB.cells[1].innerText.trim().toLowerCase();
                return isAscending ? nameA.localeCompare(nameB) : nameB.localeCompare(nameA);
            });

            rows.forEach(row => tbody.appendChild(row));
            table.setAttribute('data-order', isAscending ? 'desc' : 'asc');
        }


        //busqueda en la tabla editable modificada copied
        function filterDni() {
            let searchDni = document.getElementById(\"searchDNI\").value.toLowerCase();
            let table = document.getElementById(\"copied-table\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 2; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let dni = cells[0].textContent.toLowerCase();
                    if (dni.includes(searchDni)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }

        //busqueda tecnicatura
        function filterTec() {
            let searchDni = document.getElementById(\"searchTec\").value.toLowerCase();
            let table = document.getElementById(\"copied-table\");
            let rows = table.getElementsByTagName(\"tr\");
            for (let i = 2; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                if (cells.length > 0) {
                    let dni = cells[3].textContent.toLowerCase();
                    if (dni.includes(searchDni)) {
                        rows[i].style.display = \"\";
                    } else {
                        rows[i].style.display = \"none\";
                    }
                }
            }
        }


        function openModal() {
            var modal = document.getElementById('confirmModal');
            modal.style.display = 'flex';
        }
        function closeModal() {
            var modal = document.getElementById('confirmModal');
            modal.style.display = 'none';
        }

        function openModal2(message, type) {
            var modal = document.getElementById('confirmModal2');
            var modalTitle = document.getElementById('modalTitle');
            var modalMessage = document.getElementById('modalMessage');

            modalTitle.textContent = type === 'success' ? 'Éxito' : 'Error';
            modalMessage.textContent = message;
            modal.style.display = 'flex';
        }
        function closeModal2() {
            var modal = document.getElementById('confirmModal2');
            modal.style.display = 'none';
        }

        function openModal3() {
            var modal = document.getElementById('confirmModal3');
            modal.style.display = 'flex';
        }
        function closeModal3() {
            var modal = document.getElementById('confirmModal3');
            modal.style.display = 'none';
        }

        function closeModal4() { 
            document.getElementById('Modal4').style.display = 'none';
            document.getElementById('modalBody-4').innerHTML = '';
        }

        function closeModal5() { 
            document.getElementById('Modal5').style.display = 'none';
            document.getElementById('modalBody-5').innerHTML = '';
            window.location.href = '{{ path('app_vistaspreinscriptos') }}';
        }

        function confirmAction() {
            closeModal();
            document.getElementById('generateCsvForm').submit();
        }

        function confirmAction3() {
            document.getElementById('copyCsvForm').submit();
        }

        // Mostrar el modal si hay mensajes
        document.addEventListener('DOMContentLoaded', function () {
            {% if success_message is defined %}
                openModal2('{{ success_message|e('js') }}', 'success');
            {% endif %}
            {% if error_message is defined %}
                openModal2('{{ error_message|e('js') }}', 'error');
            {% endif %}
        });

        /*
        // Ejecutar la redirección dos veces con un breve retraso cuando una session no logra limpiarse correctamente, dejar esta seccion comentada -solo para test-
        document.addEventListener('DOMContentLoaded', function () {
            function redirectTo(route) {
                window.location.href = route;
            }

            function handleRedirect() {
                const redirectUrl = '{{ path('app_vistaspreinscriptos') }}'; // URL de la ruta a redirigir

                // Redirigir dos veces con un breve retraso
                redirectTo(redirectUrl);

                setTimeout(function () {
                    redirectTo(redirectUrl);
                }, 100); // 100 ms de retraso
            }

            // Asignar la función handleRedirect al botón del modal
            document.getElementById('modalClose2').addEventListener('click', handleRedirect);
            document.getElementById('modalClose').addEventListener('click', handleRedirect);
        });*/
    </script> 
     
{% endblock %}", "vistaspreinscriptos/index.html.twig", "C:\\xampp\\htdocs\\Local 9-6\\local\\templates\\vistaspreinscriptos\\index.html.twig");
    }
}
