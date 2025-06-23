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
class __TwigTemplate_aef49e4075bc6aefa4b0e5b4dcc050e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_final/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_final/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "examen_final/index.html.twig", 1);
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

        yield "Examen Final index";
        
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
        yield "  <script>
    function filterTable() {
      const inputTec = document.getElementById('searchTecnicatura').value.toLowerCase();
      const inputAsig = document.getElementById('searchAsignatura').value.toLowerCase();
      const inputPres = document.getElementById('searchPresidente').value.toLowerCase();

      const table = document.querySelector('.tabla_home tbody');
      const rows = table.getElementsByTagName('tr');

      for (let row of rows) {
        const tecnicatura = row.cells[6]?.textContent.toLowerCase() || '';
        const asignatura = row.cells[7]?.textContent.toLowerCase() || '';
        const presidente = row.cells[2]?.textContent.toLowerCase() || '';

        const matchTec = tecnicatura.includes(inputTec);
        const matchAsig = asignatura.includes(inputAsig);
        const matchPres = presidente.includes(inputPres);

        if (matchTec && matchAsig && matchPres) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      }
    }

    function handleExamenFinalFormSubmit(modalId, bodyId) {
      const modalBody = document.getElementById(bodyId);
      modalBody.addEventListener('submit', function(e) {
        if (e.target.tagName === 'FORM') {
          if (e.target.querySelector('button[type=\"submit\"].btn-danger')) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            fetch(form.action, {
              method: form.method,
              body: formData,
            })
            .then(() => {
              window.location.reload();
            })
            .catch(error => {
              alert('Ocurrió un error al eliminar el examen final.');
              console.error(error);
            });
            return;
          }
          e.preventDefault();
          const form = e.target;
          const formData = new FormData(form);
          fetch(form.action, {
            method: form.method,
            body: formData,
          })
          .then(response => response.text())
          .then(html => {
            if (html.includes('<form')) {
              modalBody.innerHTML = html;
            } else {
              window.location.reload();
            }
          })
          .catch(error => {
            alert('Ocurrió un error al guardar el examen final.');
            console.error(error);
          });
        }
      });
    }

    function openEditExamenModal(examenId) {
      const url = \"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_edit", ["id" => "__id__"]);
        yield "\".replace('__id__', examenId);
      fetch(url, {
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(response => response.text())
      .then(html => {
        document.getElementById('editExamenBody').innerHTML = html;
        document.getElementById('editExamenModal').style.display = 'block';
        handleExamenFinalFormSubmit('editExamenModal', 'editExamenBody');
      })
      .catch(error => console.error('Error al cargar el formulario de edición:', error));
    }

    function closeEditExamenModal() {
      document.getElementById('editExamenModal').style.display = 'none';
      document.getElementById('editExamenBody').innerHTML = '';
    }

    function openNewExamenModal() {
      const url = \"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_new");
        yield "\";
      fetch(url, {
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(response => response.text())
      .then(html => {
        document.getElementById('newExamenBody').innerHTML = html;
        document.getElementById('newExamenModal').style.display = 'block';
        handleExamenFinalFormSubmit('newExamenModal', 'newExamenBody');
      })
      .catch(error => console.error('Error al cargar el formulario de creación:', error));
    }

    function closeNewExamenModal() {
      document.getElementById('newExamenModal').style.display = 'none';
      document.getElementById('newExamenBody').innerHTML = '';
    }
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 120
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

        // line 121
        yield "  <h1 class= \"datos-filtered\" style=\"text-align: center;\">Listado de Llamados a Exámenes Finales</h1>

  ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "flashes", ["error"], "method", false, false, false, 123));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 124
            yield "    <div class=\"alert alert-danger\">
      ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "
  <table class=\"tabla_home\">
    <thead>
      <tr>
        <th colspan=\"3\">
          Buscar por : Tecnicatura
          <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTable()\" placeholder=\"Buscar Tecnicatura...\">
        </th>
        <th colspan=\"3\">
          Buscar por : Asignatura
          <input type=\"text\" id=\"searchAsignatura\" onkeyup=\"filterTable()\" placeholder=\"Buscar Asignatura...\">
        </th>
        <th colspan=\"4\">
          Buscar por : Presidente de Mesa
          <input type=\"text\" id=\"searchPresidente\" onkeyup=\"filterTable()\" placeholder=\"Buscar Presidente de Mesa...\">
        </th>
      </tr>
      <tr>
        <th>ID</th>
        <th>Fecha</th>
        <th>Presidente</th>
        <th>Vocal 1</th>
        <th>Vocal 2</th>
        <th>Estado de Mesa</th>
        <th>Tecnicatura</th>
        <th>Asignatura</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["examen_finals"]) || array_key_exists("examen_finals", $context) ? $context["examen_finals"] : (function () { throw new RuntimeError('Variable "examen_finals" does not exist.', 158, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["examen_final"]) {
            // line 159
            yield "        <tr>
          <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 160), "html", null, true);
            yield "</td>
          <td>";
            // line 161
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 161)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "fecha", [], "any", false, false, false, 161), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
          <td>";
            // line 162
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 162)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "presidente", [], "any", false, false, false, 162), "persona", [], "any", false, false, false, 162), "html", null, true)) : (""));
            yield "</td>
          <td>";
            // line 163
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 163)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal1", [], "any", false, false, false, 163), "persona", [], "any", false, false, false, 163), "html", null, true)) : (""));
            yield "</td>
          <td>";
            // line 164
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 164)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "vocal2", [], "any", false, false, false, 164), "persona", [], "any", false, false, false, 164), "html", null, true)) : (""));
            yield "</td>
          <td>";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "estadoMesa", [], "any", false, false, false, 165), "html", null, true);
            yield "</td>
          <td>";
            // line 166
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 166)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "tecnicatura", [], "any", false, false, false, 166), "nombre", [], "any", false, false, false, 166), "html", null, true)) : (""));
            yield "</td>
          <td>";
            // line 167
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 167)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "asignatura", [], "any", false, false, false, 167), "nombre", [], "any", false, false, false, 167), "html", null, true)) : (""));
            yield "</td>
          <td>
            <button type=\"button\" class=\"buttonn\" onclick=\"openEditExamenModal(";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["examen_final"], "id", [], "any", false, false, false, 169), "html", null, true);
            yield ")\">
              Editar
            </button>
          </td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        // line 178
        if (!$context['_iterated']) {
            // line 175
            yield "        <tr>
          <td colspan=\"9\">No se encontraron registros</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['examen_final'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "    </tbody>
  </table>

  <div style=\"text-align: center;\">
    <button class=\"buttonn\" onclick=\"openNewExamenModal()\">Crear Nuevo Examen Final</button>
  </div>

  <!-- Modal para editar -->
  <div id=\"editExamenModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
      <span class=\"close\" onclick=\"closeEditExamenModal()\">&times;</span>
      <div id=\"editExamenBody\" class=\"submodal\"></div>
    </div>
  </div>

  <!-- Modal para crear -->
  <div id=\"newExamenModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
      <span class=\"close\" onclick=\"closeNewExamenModal()\">&times;</span>
      <div id=\"newExamenBody\" class=\"submodal\"></div>
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
        return array (  357 => 179,  348 => 175,  346 => 178,  336 => 169,  331 => 167,  327 => 166,  323 => 165,  319 => 164,  315 => 163,  311 => 162,  307 => 161,  303 => 160,  300 => 159,  295 => 158,  263 => 128,  254 => 125,  251 => 124,  247 => 123,  243 => 121,  230 => 120,  198 => 98,  174 => 77,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Examen Final index{% endblock %}

{% block javascripts %}
  <script>
    function filterTable() {
      const inputTec = document.getElementById('searchTecnicatura').value.toLowerCase();
      const inputAsig = document.getElementById('searchAsignatura').value.toLowerCase();
      const inputPres = document.getElementById('searchPresidente').value.toLowerCase();

      const table = document.querySelector('.tabla_home tbody');
      const rows = table.getElementsByTagName('tr');

      for (let row of rows) {
        const tecnicatura = row.cells[6]?.textContent.toLowerCase() || '';
        const asignatura = row.cells[7]?.textContent.toLowerCase() || '';
        const presidente = row.cells[2]?.textContent.toLowerCase() || '';

        const matchTec = tecnicatura.includes(inputTec);
        const matchAsig = asignatura.includes(inputAsig);
        const matchPres = presidente.includes(inputPres);

        if (matchTec && matchAsig && matchPres) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      }
    }

    function handleExamenFinalFormSubmit(modalId, bodyId) {
      const modalBody = document.getElementById(bodyId);
      modalBody.addEventListener('submit', function(e) {
        if (e.target.tagName === 'FORM') {
          if (e.target.querySelector('button[type=\"submit\"].btn-danger')) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            fetch(form.action, {
              method: form.method,
              body: formData,
            })
            .then(() => {
              window.location.reload();
            })
            .catch(error => {
              alert('Ocurrió un error al eliminar el examen final.');
              console.error(error);
            });
            return;
          }
          e.preventDefault();
          const form = e.target;
          const formData = new FormData(form);
          fetch(form.action, {
            method: form.method,
            body: formData,
          })
          .then(response => response.text())
          .then(html => {
            if (html.includes('<form')) {
              modalBody.innerHTML = html;
            } else {
              window.location.reload();
            }
          })
          .catch(error => {
            alert('Ocurrió un error al guardar el examen final.');
            console.error(error);
          });
        }
      });
    }

    function openEditExamenModal(examenId) {
      const url = \"{{ path('app_examen_final_edit', {'id': '__id__'}) }}\".replace('__id__', examenId);
      fetch(url, {
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(response => response.text())
      .then(html => {
        document.getElementById('editExamenBody').innerHTML = html;
        document.getElementById('editExamenModal').style.display = 'block';
        handleExamenFinalFormSubmit('editExamenModal', 'editExamenBody');
      })
      .catch(error => console.error('Error al cargar el formulario de edición:', error));
    }

    function closeEditExamenModal() {
      document.getElementById('editExamenModal').style.display = 'none';
      document.getElementById('editExamenBody').innerHTML = '';
    }

    function openNewExamenModal() {
      const url = \"{{ path('app_examen_final_new') }}\";
      fetch(url, {
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(response => response.text())
      .then(html => {
        document.getElementById('newExamenBody').innerHTML = html;
        document.getElementById('newExamenModal').style.display = 'block';
        handleExamenFinalFormSubmit('newExamenModal', 'newExamenBody');
      })
      .catch(error => console.error('Error al cargar el formulario de creación:', error));
    }

    function closeNewExamenModal() {
      document.getElementById('newExamenModal').style.display = 'none';
      document.getElementById('newExamenBody').innerHTML = '';
    }
  </script>
{% endblock %}

{% block body %}
  <h1 class= \"datos-filtered\" style=\"text-align: center;\">Listado de Llamados a Exámenes Finales</h1>

  {% for message in app.flashes('error') %}
    <div class=\"alert alert-danger\">
      {{ message }}
    </div>
  {% endfor %}

  <table class=\"tabla_home\">
    <thead>
      <tr>
        <th colspan=\"3\">
          Buscar por : Tecnicatura
          <input type=\"text\" id=\"searchTecnicatura\" onkeyup=\"filterTable()\" placeholder=\"Buscar Tecnicatura...\">
        </th>
        <th colspan=\"3\">
          Buscar por : Asignatura
          <input type=\"text\" id=\"searchAsignatura\" onkeyup=\"filterTable()\" placeholder=\"Buscar Asignatura...\">
        </th>
        <th colspan=\"4\">
          Buscar por : Presidente de Mesa
          <input type=\"text\" id=\"searchPresidente\" onkeyup=\"filterTable()\" placeholder=\"Buscar Presidente de Mesa...\">
        </th>
      </tr>
      <tr>
        <th>ID</th>
        <th>Fecha</th>
        <th>Presidente</th>
        <th>Vocal 1</th>
        <th>Vocal 2</th>
        <th>Estado de Mesa</th>
        <th>Tecnicatura</th>
        <th>Asignatura</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      {% for examen_final in examen_finals %}
        <tr>
          <td>{{ examen_final.id }}</td>
          <td>{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d') : '' }}</td>
          <td>{{ examen_final.presidente ? examen_final.presidente.persona : '' }}</td>
          <td>{{ examen_final.vocal1 ? examen_final.vocal1.persona : '' }}</td>
          <td>{{ examen_final.vocal2 ? examen_final.vocal2.persona : '' }}</td>
          <td>{{ examen_final.estadoMesa }}</td>
          <td>{{ examen_final.tecnicatura ? examen_final.tecnicatura.nombre : '' }}</td>
          <td>{{ examen_final.asignatura ? examen_final.asignatura.nombre : '' }}</td>
          <td>
            <button type=\"button\" class=\"buttonn\" onclick=\"openEditExamenModal({{ examen_final.id }})\">
              Editar
            </button>
          </td>
        </tr>
      {% else %}
        <tr>
          <td colspan=\"9\">No se encontraron registros</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>

  <div style=\"text-align: center;\">
    <button class=\"buttonn\" onclick=\"openNewExamenModal()\">Crear Nuevo Examen Final</button>
  </div>

  <!-- Modal para editar -->
  <div id=\"editExamenModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
      <span class=\"close\" onclick=\"closeEditExamenModal()\">&times;</span>
      <div id=\"editExamenBody\" class=\"submodal\"></div>
    </div>
  </div>

  <!-- Modal para crear -->
  <div id=\"newExamenModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
      <span class=\"close\" onclick=\"closeNewExamenModal()\">&times;</span>
      <div id=\"newExamenBody\" class=\"submodal\"></div>
    </div>
  </div>
{% endblock %}
", "examen_final/index.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\examen_final\\index.html.twig");
    }
}
