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

        yield "ExamenFinal index";
        
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
        yield "    <h1 style=\"text-align: center;\">Listado de Llamados a Exámenes Finales</h1>

    <table class=\"tabla_home\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Materia</th>
                <th style=\"width: 180px;\">Fecha</th>
                <th>PresidenteDM</th>
                <th>Vocales </th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 21
            yield "            <tr>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignaturaId", [], "any", false, false, false, 23)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignaturaId", [], "any", false, false, false, 23), "nombre", [], "any", false, false, false, 23), "html", null, true)) : (""));
            yield "</td>
                <td style=\"width: 180px;\">";
            // line 24
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 24)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>
                    ";
            // line 26
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidenteId", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidenteId", [], "any", false, false, false, 26), "persona", [], "any", false, false, false, 26), "html", null, true)) : (""));
            yield "
                </td>
                <td>
                    ";
            // line 29
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1Id", [], "any", false, false, false, 29)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1Id", [], "any", false, false, false, 29), "persona", [], "any", false, false, false, 29), "html", null, true)) : (""));
            yield "<br>
                    ";
            // line 30
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2Id", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2Id", [], "any", false, false, false, 30), "persona", [], "any", false, false, false, 30), "html", null, true)) : (""));
            yield "
                </td>
               <td>
                 <button type=\"button\" class=\"buttonn\" onclick=\"openEditExamenModal(";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield ")\">
                      Editar
                 </button>
               </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 42
        if (!$context['_iterated']) {
            // line 39
            yield "            <tr>
                <td colspan=\"6\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "        </tbody>
    </table>
    
   <div style=\"text-align: center;\">
       <button class=\"buttonn\" onclick=\"openNewExamenModal()\">Crear Nuevo Examen Final</button>
  </div>

    
 <!-- Modal para edición -->
   <div id=\"editExamenModal\" class=\"modal\" style=\"display: none;\">
      <div class=\"modal-content\">
         <span class=\"close\" onclick=\"closeEditExamenModal()\">&times;</span>
         <div id=\"editExamenBody\" class=\"submodal\"></div>
     </div>
 </div>

 <!-- Modal para creación -->
   <div id=\"newExamenModal\" class=\"modal\" style=\"display: none;\">
      <div class=\"modal-content\">
         <span class=\"close\" onclick=\"closeNewExamenModal()\">&times;</span>
         <div id=\"newExamenBody\" class=\"submodal\"></div>
     </div>
 </div>

 ";
        // line 67
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 112
        yield "  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 67
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

        // line 68
        yield "     <script>
         function openEditExamenModal(examenId) {
              const url = \"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_edit", ["id" => "__id__"]);
        yield "\".replace('__id__', examenId);
             fetch(url)
              .then(response => response.text())
              .then(html => {
                   document.getElementById('editExamenBody').innerHTML = html;
                   document.getElementById('editExamenModal').style.display = 'block';
                })
              .catch(error => console.error('Error al cargar el formulario de edición:', error));
            }

            function openNewExamenModal() {
                const url = \"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_new");
        yield "\";
                fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('newExamenBody').innerHTML = html;
                        document.getElementById('newExamenModal').style.display = 'block';
                    })
                    .catch(error => console.error('Error al cargar el formulario de creación:', error));
            }

            function closeEditExamenModal() {
              document.getElementById('editExamenModal').style.display = 'none';
             document.getElementById('editExamenBody').innerHTML = '';
            }
       </script>
       ";
        // line 96
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
       <script>
          document.addEventListener('DOMContentLoaded', function() {
              var errorAlert = document.querySelector('.alert-danger');
              if (errorAlert) {
                  var link = document.querySelector(\"link[rel~='icon']\");
                  if (!link) {
                        link = document.createElement('link');
                        link.rel = 'icon';
                        document.head.appendChild(link);
                    }
                  link.href = 'data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle fill=%22red%22 cx=%2250%22 cy=%2250%22 r=%2250%22/></svg>';
                  document.title = '3RR00r' + document.title;
                }
            });
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
        return array (  264 => 96,  246 => 81,  232 => 70,  228 => 68,  215 => 67,  203 => 112,  201 => 67,  175 => 43,  166 => 39,  164 => 42,  154 => 33,  148 => 30,  144 => 29,  138 => 26,  133 => 24,  129 => 23,  125 => 22,  122 => 21,  117 => 20,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ExamenFinal index{% endblock %}

{% block body %}
    <h1 style=\"text-align: center;\">Listado de Llamados a Exámenes Finales</h1>

    <table class=\"tabla_home\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Materia</th>
                <th style=\"width: 180px;\">Fecha</th>
                <th>PresidenteDM</th>
                <th>Vocales </th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for examen_final in examen_finals %}
            <tr>
                <td>{{ examen_final.id }}</td>
                <td>{{ examen_final.asignaturaId ? examen_final.asignaturaId.nombre : '' }}</td>
                <td style=\"width: 180px;\">{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d') : '' }}</td>
                <td>
                    {{ examen_final.presidenteId ? examen_final.presidenteId.persona : '' }}
                </td>
                <td>
                    {{ examen_final.vocal1Id ? examen_final.vocal1Id.persona : '' }}<br>
                    {{ examen_final.vocal2Id ? examen_final.vocal2Id.persona : '' }}
                </td>
               <td>
                 <button type=\"button\" class=\"buttonn\" onclick=\"openEditExamenModal({{ examen_final.id }})\">
                      Editar
                 </button>
               </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">No se encontraron registros</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    
   <div style=\"text-align: center;\">
       <button class=\"buttonn\" onclick=\"openNewExamenModal()\">Crear Nuevo Examen Final</button>
  </div>

    
 <!-- Modal para edición -->
   <div id=\"editExamenModal\" class=\"modal\" style=\"display: none;\">
      <div class=\"modal-content\">
         <span class=\"close\" onclick=\"closeEditExamenModal()\">&times;</span>
         <div id=\"editExamenBody\" class=\"submodal\"></div>
     </div>
 </div>

 <!-- Modal para creación -->
   <div id=\"newExamenModal\" class=\"modal\" style=\"display: none;\">
      <div class=\"modal-content\">
         <span class=\"close\" onclick=\"closeNewExamenModal()\">&times;</span>
         <div id=\"newExamenBody\" class=\"submodal\"></div>
     </div>
 </div>

 {% block javascripts %}
     <script>
         function openEditExamenModal(examenId) {
              const url = \"{{ path('app_examen_final_edit', {'id': '__id__'}) }}\".replace('__id__', examenId);
             fetch(url)
              .then(response => response.text())
              .then(html => {
                   document.getElementById('editExamenBody').innerHTML = html;
                   document.getElementById('editExamenModal').style.display = 'block';
                })
              .catch(error => console.error('Error al cargar el formulario de edición:', error));
            }

            function openNewExamenModal() {
                const url = \"{{ path('app_examen_final_new') }}\";
                fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('newExamenBody').innerHTML = html;
                        document.getElementById('newExamenModal').style.display = 'block';
                    })
                    .catch(error => console.error('Error al cargar el formulario de creación:', error));
            }

            function closeEditExamenModal() {
              document.getElementById('editExamenModal').style.display = 'none';
             document.getElementById('editExamenBody').innerHTML = '';
            }
       </script>
       {{ parent() }}
       <script>
          document.addEventListener('DOMContentLoaded', function() {
              var errorAlert = document.querySelector('.alert-danger');
              if (errorAlert) {
                  var link = document.querySelector(\"link[rel~='icon']\");
                  if (!link) {
                        link = document.createElement('link');
                        link.rel = 'icon';
                        document.head.appendChild(link);
                    }
                  link.href = 'data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle fill=%22red%22 cx=%2250%22 cy=%2250%22 r=%2250%22/></svg>';
                  document.title = '3RR00r' + document.title;
                }
            });
      </script>
  {% endblock %}  
{% endblock %} ", "examen_final/index.html.twig", "C:\\xampp\\htdocs\\local\\templates\\examen_final\\index.html.twig");
    }
}
