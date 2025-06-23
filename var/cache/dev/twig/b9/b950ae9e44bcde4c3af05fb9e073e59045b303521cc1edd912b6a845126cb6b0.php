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

/* vistas/index.html.twig */
class __TwigTemplate_3fecea783e25f259c080486af4994867ce5b52e1baa22fe1c370619bcb34ce86 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistas/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistas/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vistas/index.html.twig", 1);
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

        yield "Vistas!";
        
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
        function filterTableTecnicatura() {
            let searchNombre = document.getElementById(\"searchNombre\").value.toLowerCase();
            let searchReso = document.getElementById(\"searchResolucion\").value.toLowerCase();
            let table = document.getElementById(\"tablaTecnicaturas\"); // Obtener la tabla de tecnicaturas
            let rows = table.getElementsByTagName(\"tr\");       
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                let nombre = cells[0].textContent.toLowerCase();
                let resolucion = cells[3].textContent.toLowerCase();
                if (nombre.includes(searchNombre) && resolucion.includes(searchReso)) {
                    rows[i].style.display = \"\"; 
                } else {
                    rows[i].style.display = \"none\"; 
                }
            }
        }

        function showAsignaturas(tecnicaturaId) {
            // Ocultar todas las tablas de asignaturas
    let tables = document.querySelectorAll('.tabla_home');
    tables.forEach(table => table.style.display = 'none');

    // Mostrar la tabla de asignaturas correspondiente
    let asignaturasTable = document.getElementById(`tablaAsignaturas_\${tecnicaturaId}`);
    if (asignaturasTable) {
        asignaturasTable.style.display = '';
    }

    // Ocultar filtro tecnicaturas
    let search = document.getElementById(`searchs`);
    if (search) {
        search.style.display = 'none';
    }

    // Mostrar botón de regresar
    let backButton = document.createElement('button');
    backButton.textContent = 'Regresar';
    backButton.id = 'dynamicBackButton'; // Le ponemos ID para identificarlo
    backButton.style = \"background-color:rgb(61, 85, 235); color: white; padding: 12px 24px; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; margin: 20px auto; display: block;\";
    backButton.onclick = function() {
        hideAsignaturas(tecnicaturaId);
    };

    // Agregar el botón solo si no existe
    if (!document.getElementById('dynamicBackButton')) {
        document.getElementById('body-vistas').appendChild(backButton);
    }
}

        document.addEventListener('DOMContentLoaded', function() {
            // Twig evalúa si tecId está definido y no es nulo
            ";
        // line 60
        if ((array_key_exists("tecId", $context) &&  !(null === (isset($context["tecId"]) || array_key_exists("tecId", $context) ? $context["tecId"] : (function () { throw new RuntimeError('Variable "tecId" does not exist.', 60, $this->source); })())))) {
            // line 61
            yield "                console.log('El ID de tecnicatura es: ', ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tecId"]) || array_key_exists("tecId", $context) ? $context["tecId"] : (function () { throw new RuntimeError('Variable "tecId" does not exist.', 61, $this->source); })()), "html", null, true);
            yield ");
                showAsignaturas(";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tecId"]) || array_key_exists("tecId", $context) ? $context["tecId"] : (function () { throw new RuntimeError('Variable "tecId" does not exist.', 62, $this->source); })()), "html", null, true);
            yield ");
            ";
        } else {
            // line 64
            yield "                console.log('El ID de tecnicatura no está definido o es nulo.');
            ";
        }
        // line 66
        yield "        });

        function hideAsignaturas(tecnicaturaId) {
          // Ocultar la tabla de asignaturas
    let asignaturasTable = document.getElementById(`tablaAsignaturas_\${tecnicaturaId}`);
    if (asignaturasTable) {
        asignaturasTable.style.display = 'none';
    }

    // Mostrar la tabla principal de tecnicaturas
    let tablaTecnicaturas = document.getElementById('tablaTecnicaturas');
    if (tablaTecnicaturas) {
        tablaTecnicaturas.style.display = '';
    }

    // Mostrar el filtro de búsqueda
    let search = document.getElementById('searchs');
    if (search) {
        search.style.display = '';
    }

    // Eliminar el botón de volver
    let backButton = document.getElementById('dynamicBackButton');
    if (backButton) {
        backButton.remove(); // ⚡ Acá se elimina correctamente
    }
}
    </script>

    ";
        // line 96
        yield "    <script>
        function openEditModal(asignaturaId, tecnicaturaId, anios) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_asignatura", ["id" => "__asignaturaId__", "tecnicatura_id" => "__tecnicaturaId__"]), "html", null, true);
        yield "\"
                .replace('__asignaturaId__', asignaturaId)
                .replace('__tecnicaturaId__', tecnicaturaId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalContent').innerHTML = html;
                    document.getElementById('editModal').style.display = 'block';
                    hideFields('modalContent', tecnicaturaId, anios);
                })
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        // Función para cerrar el modal
        function closeEditModal() {
            document.getElementById('editModal').style.display = 'none';
            document.getElementById('modalContent').innerHTML = '';
        }

        function openCreateModal(tecnicaturaId, anio) {
            // Generar la URL con los IDs correctos
            const url = \"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_asignatura", ["tecnicatura_id" => "__tecnicaturaId__"]);
        yield "\"
                .replace('__tecnicaturaId__', tecnicaturaId);

            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody').innerHTML = html;
                    document.getElementById('asignaturaModal').style.display = 'block';

                    hideFields('modalBody', tecnicaturaId, anio);
                })
                .catch(error => console.error('Error al cargar el formulario de creación:', error));
        }

        function hideFields(containerId, tecnicaturaId, anio) {
            const container = document.getElementById(containerId);
            // Ocultar labels
            const labelTecnicatura = container.querySelector('label[for=\"asignatura_tecnicatura\"]');
            if (labelTecnicatura) {
                labelTecnicatura.style.display = 'none';
            }

            const labelAnio = container.querySelector('label[for=\"asignatura_anio\"]');
            if (labelAnio) {
                labelAnio.style.display = 'none';
            }

            const labelProgram = container.querySelector('label[for=\"asignatura_programa\"]');
            if (labelProgram) {
                labelProgram.style.display = 'none';
            }

            // Ocultar y asignar valores a los inputs
            const tecnicaturaInput = container.querySelector('#asignatura_tecnicatura');
            if (tecnicaturaInput) {
                tecnicaturaInput.value = tecnicaturaId;
                tecnicaturaInput.setAttribute('readonly', true);
                tecnicaturaInput.style.display = 'none';
            }

            const programInput = container.querySelector('#asignatura_programa');
            if (programInput) {
                programInput.value = tecnicaturaId;
                programInput.setAttribute('readonly', true);
                programInput.style.display = 'none';
            }

            const anioInput = container.querySelector('#asignatura_anio');
            if (anioInput) {
                anioInput.value = anio;
                anioInput.setAttribute('readonly', true);
                anioInput.style.display = 'none';
            }
        }


        function closeModalAsignatura() {
            document.getElementById('asignaturaModal').style.display = 'none';
             document.getElementById('modalBody').innerHTML = '';
        }

        //crear tecnicatura nueva
        function openCreateModalTec() {
            fetch(\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_tecnicatura");
        yield "\")
            .then(response => response.text())
                .then(html => {
                    // Mostrar el contenido en el modal
                    document.getElementById('tecnicaturaBody').innerHTML = html;
                    document.getElementById('tecnicaturaModal').style.display = 'block';
                })
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        function closeModalTecnicatura() {
            document.getElementById('tecnicaturaModal').style.display = 'none';
             document.getElementById('tecnicaturaBody').innerHTML = '';
        }
    </script>

    
    ";
        // line 203
        yield "    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Realiza una solicitud para obtener la lista de PDFs
            fetch(\"";
        // line 206
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf_list");
        yield "\")
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error en la respuesta del servidor');
                    }
                    return response.json();
                })
                .then(data => {
                    // Inicializar arrays vacíos para almacenar los PDFs
                    let tecnicaturasPdfs = [];
                    let asignaturasPdfs = [];

                    // Construir tecnicaturasPdfs
                    if (Array.isArray(data.tecnicaturas)) {
                        data.tecnicaturas.forEach(item => {
                            if (typeof item === 'string') {
                                tecnicaturasPdfs.push(item.split('/').pop());
                            } else if (typeof item === 'object' && Object.values(item).length > 0) {
                                Object.values(item).forEach(pdf => {
                                    tecnicaturasPdfs.push(pdf.split('/').pop());
                                });
                            }
                        });
                    } else if (typeof data.tecnicaturas === 'string') {
                        tecnicaturasPdfs.push(data.tecnicaturas.split('/').pop());
                    } else if (typeof data.tecnicaturas === 'object' && Object.values(data.tecnicaturas).length > 0) {
                        Object.values(data.tecnicaturas).forEach(pdf => {
                            tecnicaturasPdfs.push(pdf.split('/').pop());
                        });
                    }

                    // Construir asignaturasPdfs
                    if (Array.isArray(data.asignaturas)) {
                        data.asignaturas.forEach(item => {
                            if (typeof item === 'string') {
                                asignaturasPdfs.push(item.split('/').pop());
                            } else if (typeof item === 'object' && Object.values(item).length > 0) {
                                Object.values(item).forEach(pdf => {
                                    asignaturasPdfs.push(pdf.split('/').pop());
                                });
                            }
                        });
                    } else if (typeof data.asignaturas === 'string') {
                        asignaturasPdfs.push(data.asignaturas.split('/').pop());
                    } else if (typeof data.asignaturas === 'object' && Object.values(data.asignaturas).length > 0) {
                        Object.values(data.asignaturas).forEach(pdf => {
                            asignaturasPdfs.push(pdf.split('/').pop());
                        });
                    }

                    // Log para verificar el contenido de las listas de PDFs (opcional)
                    console.log('PDFs de Tecnicauras:', tecnicaturasPdfs);
                    console.log('PDFs de Asignaturas:', asignaturasPdfs);

                    // Selecciona todos los enlaces con la clase 'pdf-link'
                    const pdfLinks = document.querySelectorAll('.pdf-link');

                    pdfLinks.forEach(function(link) {
                        const pdfPath = link.getAttribute('data-pdf-path');
                        let pdfExists = false;

                        // Verifica si el archivo existe en alguna de las listas de PDFs
                        if (pdfPath.includes('tecnicaturas')) {
                            pdfExists = tecnicaturasPdfs.includes(pdfPath.split('/').pop());
                        } else if (pdfPath.includes('asignaturas')) {
                            pdfExists = asignaturasPdfs.includes(pdfPath.split('/').pop());
                        }

                        if (!pdfExists) {
                            // Si el archivo no existe, oculta el enlace y muestra el mensaje alternativo
                            link.style.display = 'none';
                            link.nextElementSibling.style.display = 'inline'; // Muestra \"No hay PDF\"
                        } else {
                            // Si el archivo existe, habilita el botón \"Abrir PDF\"
                            link.querySelector('button').disabled = false;
                        }
                    });
                })
                .catch(error => {
                    // Maneja cualquier error en la solicitud
                    console.error('Error al obtener la lista de PDFs:', error);

                    // Oculta todos los enlaces de PDFs y muestra el mensaje alternativo en caso de error
                    const pdfLinks = document.querySelectorAll('.pdf-link');
                    pdfLinks.forEach(function(link) {
                        link.style.display = 'none';
                        link.nextElementSibling.style.display = 'inline'; // Muestra \"No hay PDF\"
                    });
                });
        });
    </script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 302
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

        // line 303
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "session", [], "any", false, false, false, 303), "flashbag", [], "any", false, false, false, 303), "all", [], "method", false, false, false, 303));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 304
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 305
                yield "            ";
                // line 308
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        yield "
    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Tecnicaturas y Asignaturas</h1>

        <div id=\"searchs\" class=\"search-container\">
            <label for=\"searchNombre\">Buscar por Nombre:</label>
            <input type=\"text\" id=\"searchNombre\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por nombre...\">
            <label for=\"searchResolucion\">Buscar por Resolución:</label>
            <input type=\"text\" id=\"searchResolucion\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por resolucion...\">
            <button onclick=\"openCreateModalTec()\" class=\"button\">Crear Tecnicatura</button>
        </div>

        <table class=\"tabla_home\" id=\"tablaTecnicaturas\" border=\"1\">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Duración</th>
                    <th>Cantidad de Asignaturas</th>
                    <th>Número de Resolución</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tecnicaturas"]) || array_key_exists("tecnicaturas", $context) ? $context["tecnicaturas"] : (function () { throw new RuntimeError('Variable "tecnicaturas" does not exist.', 333, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tecnicatura"]) {
            // line 334
            yield "                    <tr>
                        <td>";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "nombre", [], "any", false, false, false, 335), "html", null, true);
            yield "</td>
                        <td>";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "duracion", [], "any", false, false, false, 336), "html", null, true);
            yield "</td>
                        <td>";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "cantidadAsignaturas", [], "any", false, false, false, 337), "html", null, true);
            yield "</td>
                        <td>";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "numeroResolucion", [], "any", false, false, false, 338), "html", null, true);
            yield "</td>
                        <td>
                            <button onclick=\"showAsignaturas(";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 340), "html", null, true);
            yield ")\" class=\"button\">Ir</button>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 347
        if (!$context['_iterated']) {
            // line 344
            yield "                    <tr>
                        <td colspan=\"5\">No se encontraron registros</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tecnicatura'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        yield "            </tbody>
        </table>

        ";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tecnicaturas"]) || array_key_exists("tecnicaturas", $context) ? $context["tecnicaturas"] : (function () { throw new RuntimeError('Variable "tecnicaturas" does not exist.', 351, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tecnicatura"]) {
            // line 352
            yield "            <table id=\"tablaAsignaturas_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 352), "html", null, true);
            yield "\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th>";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tecnicatura"], "html", null, true);
            yield " </th>
                        <th>
                            <!-- Botón para guardar resolución -->
                            <button id=\"guardar-resolucion-";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 358), "html", null, true);
            yield "\" class=\"btn-primary\" onclick=\"document.getElementById('upload-file-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 358), "html", null, true);
            yield "').click();\">
                                Guardar Resolución
                            </button> 
                            <!-- Formulario oculto -->
                            <form id=\"upload-form-";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 362), "html", null, true);
            yield "\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload_pdf");
            yield "\" method=\"post\" enctype=\"multipart/form-data\" style=\"display:none;\">
                                <input type=\"hidden\" name=\"tecnicatura_id\" value=\"";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 363), "html", null, true);
            yield "\">
                                <input type=\"file\" id=\"upload-file-";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 364), "html", null, true);
            yield "\" name=\"pdf_file\" accept=\"application/pdf\" onchange=\"document.getElementById('upload-form-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 364), "html", null, true);
            yield "').submit();\">
                            </form>
                        </th>
                        <th>
                            <a href=\"";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("archivos/tecnicaturas/" . CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 368)) . ".pdf")), "html", null, true);
            yield "\" target=\"_blank\" class=\"pdf-link\" data-pdf-path=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("archivos/tecnicaturas/" . CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 368)) . ".pdf")), "html", null, true);
            yield "\">
                                <button type=\"button\" class=\"button\">Abrir PDF</button>
                            </a>
                            <span class=\"pdf-not-found\" style=\"display: none;\">No hay PDF</span>
                        </th>
                    </tr>
                    <tr>                  
                        <th>Primer Año</th>
                        <th>Segundo Año</th>
                        <th>Tercer Año</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 381
            $context["asignaturas_anio1"] = [];
            // line 382
            yield "                    ";
            $context["asignaturas_anio2"] = [];
            // line 383
            yield "                    ";
            $context["asignaturas_anio3"] = [];
            // line 384
            yield "
                    ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["asignaturas"]) || array_key_exists("asignaturas", $context) ? $context["asignaturas"] : (function () { throw new RuntimeError('Variable "asignaturas" does not exist.', 385, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["asignatura"]) {
                // line 386
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "tecnicatura", [], "any", false, false, false, 386), "id", [], "any", false, false, false, 386) == CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 386))) {
                    // line 387
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "anio", [], "any", false, false, false, 387) == 1)) {
                        // line 388
                        yield "                                ";
                        $context["asignaturas_anio1"] = Twig\Extension\CoreExtension::merge((isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 388, $this->source); })()), [$context["asignatura"]]);
                        // line 389
                        yield "                            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "anio", [], "any", false, false, false, 389) == 2)) {
                        // line 390
                        yield "                                ";
                        $context["asignaturas_anio2"] = Twig\Extension\CoreExtension::merge((isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 390, $this->source); })()), [$context["asignatura"]]);
                        // line 391
                        yield "                            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "anio", [], "any", false, false, false, 391) == 3)) {
                        // line 392
                        yield "                                ";
                        $context["asignaturas_anio3"] = Twig\Extension\CoreExtension::merge((isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 392, $this->source); })()), [$context["asignatura"]]);
                        // line 393
                        yield "                            ";
                    }
                    // line 394
                    yield "                        ";
                }
                // line 395
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['asignatura'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 396
            yield "

                    ";
            // line 398
            $context["max_filas_anio1"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 398, $this->source); })())) + 1);
            // line 399
            yield "                    ";
            $context["max_filas_anio2"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 399, $this->source); })())) + 1);
            // line 400
            yield "                    ";
            $context["max_filas_anio3"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 400, $this->source); })())) + 1);
            // line 401
            yield "
                    ";
            // line 403
            yield "                    ";
            $context["max_rows"] = (isset($context["max_filas_anio1"]) || array_key_exists("max_filas_anio1", $context) ? $context["max_filas_anio1"] : (function () { throw new RuntimeError('Variable "max_filas_anio1" does not exist.', 403, $this->source); })());
            // line 404
            yield "                    ";
            if (((isset($context["max_filas_anio2"]) || array_key_exists("max_filas_anio2", $context) ? $context["max_filas_anio2"] : (function () { throw new RuntimeError('Variable "max_filas_anio2" does not exist.', 404, $this->source); })()) > (isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 404, $this->source); })()))) {
                // line 405
                yield "                        ";
                $context["max_rows"] = (isset($context["max_filas_anio2"]) || array_key_exists("max_filas_anio2", $context) ? $context["max_filas_anio2"] : (function () { throw new RuntimeError('Variable "max_filas_anio2" does not exist.', 405, $this->source); })());
                // line 406
                yield "                    ";
            }
            // line 407
            yield "                    ";
            if (((isset($context["max_filas_anio3"]) || array_key_exists("max_filas_anio3", $context) ? $context["max_filas_anio3"] : (function () { throw new RuntimeError('Variable "max_filas_anio3" does not exist.', 407, $this->source); })()) > (isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 407, $this->source); })()))) {
                // line 408
                yield "                        ";
                $context["max_rows"] = (isset($context["max_filas_anio3"]) || array_key_exists("max_filas_anio3", $context) ? $context["max_filas_anio3"] : (function () { throw new RuntimeError('Variable "max_filas_anio3" does not exist.', 408, $this->source); })());
                // line 409
                yield "                    ";
            }
            // line 410
            yield "

                   ";
            // line 413
            yield "
                    ";
            // line 414
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, ((isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 414, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 415
                yield "                        <tr>
                            <td>
                                ";
                // line 417
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["asignaturas_anio1"] ?? null), $context["i"], [], "array", false, true, false, 417), "nombre", [], "any", true, true, false, 417) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 417, $this->source); })()), $context["i"], [], "array", false, false, false, 417), "nombre", [], "any", false, false, false, 417)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 417, $this->source); })()), $context["i"], [], "array", false, false, false, 417), "nombre", [], "any", false, false, false, 417), "html", null, true)) : (""));
                yield "<br>
                                ";
                // line 418
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["asignaturas_anio1"] ?? null), $context["i"], [], "array", true, true, false, 418)) {
                    // line 419
                    yield "                                    <a href=\"javascript:void(0)\" onclick=\"openEditModal(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 419, $this->source); })()), $context["i"], [], "array", false, false, false, 419), "id", [], "any", false, false, false, 419), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 419), "html", null, true);
                    yield ", 1)\">
                                        <button type=\"button\" class=\"btn-primary\">Editar</button>
                                    </a>
                                    <button id=\"guardar-asignatura-";
                    // line 422
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 422, $this->source); })()), $context["i"], [], "array", false, false, false, 422), "id", [], "any", false, false, false, 422), "html", null, true);
                    yield "\" class=\"btn-primary\" onclick=\"document.getElementById('upload-file-asignatura-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 422, $this->source); })()), $context["i"], [], "array", false, false, false, 422), "id", [], "any", false, false, false, 422), "html", null, true);
                    yield "').click();\">
                                        Guardar PDF
                                    </button>
                                    <!-- Formulario oculto para subir PDF de la asignatura -->
                                    <form id=\"upload-form-asignatura-";
                    // line 426
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 426, $this->source); })()), $context["i"], [], "array", false, false, false, 426), "id", [], "any", false, false, false, 426), "html", null, true);
                    yield "\" action=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignatura_pdf");
                    yield "\" method=\"post\" enctype=\"multipart/form-data\" style=\"display:none;\">
                                        <input type=\"hidden\" name=\"asignatura_id\" value=\"";
                    // line 427
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 427, $this->source); })()), $context["i"], [], "array", false, false, false, 427), "id", [], "any", false, false, false, 427), "html", null, true);
                    yield "\">
                                        <input type=\"hidden\" name=\"tecnicatura_id\" value=\"";
                    // line 428
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 428, $this->source); })()), $context["i"], [], "array", false, false, false, 428), "tecnicatura", [], "any", false, false, false, 428), "id", [], "any", false, false, false, 428), "html", null, true);
                    yield "\"> <!-- Agregar el id de la tecnicatura -->
                                        <input type=\"file\" id=\"upload-file-asignatura-";
                    // line 429
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 429, $this->source); })()), $context["i"], [], "array", false, false, false, 429), "id", [], "any", false, false, false, 429), "html", null, true);
                    yield "\" name=\"pdf_file\" accept=\"application/pdf\" onchange=\"document.getElementById('upload-form-asignatura-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 429, $this->source); })()), $context["i"], [], "array", false, false, false, 429), "id", [], "any", false, false, false, 429), "html", null, true);
                    yield "').submit();\">
                                    </form>    
                                    <!-- Botón para ver PDF de la asignatura -->
                                    <a href=\"";
                    // line 432
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("archivos/asignaturas/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 432, $this->source); })()), $context["i"], [], "array", false, false, false, 432), "id", [], "any", false, false, false, 432)) . ".pdf")), "html", null, true);
                    yield "\" target=\"_blank\" class=\"pdf-link\" data-pdf-path=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("archivos/asignaturas/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio1"]) || array_key_exists("asignaturas_anio1", $context) ? $context["asignaturas_anio1"] : (function () { throw new RuntimeError('Variable "asignaturas_anio1" does not exist.', 432, $this->source); })()), $context["i"], [], "array", false, false, false, 432), "id", [], "any", false, false, false, 432)) . ".pdf")), "html", null, true);
                    yield "\">
                                        <button type=\"button\" class=\"btn btn-primary\">Abrir PDF</button>
                                    </a>
                                    <span class=\"pdf-not-found\" style=\"display: none;\">No hay PDF</span>
                                ";
                } else {
                    // line 437
                    yield "                                    <button onclick=\"openCreateModal(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 437), "html", null, true);
                    yield ", 1)\" class=\"btn-primary\">Crear</button>
                                ";
                }
                // line 439
                yield "


                            </td>
                            <td>
                                ";
                // line 444
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["asignaturas_anio2"] ?? null), $context["i"], [], "array", false, true, false, 444), "nombre", [], "any", true, true, false, 444) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 444, $this->source); })()), $context["i"], [], "array", false, false, false, 444), "nombre", [], "any", false, false, false, 444)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 444, $this->source); })()), $context["i"], [], "array", false, false, false, 444), "nombre", [], "any", false, false, false, 444), "html", null, true)) : (""));
                yield "<br>
                                ";
                // line 445
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["asignaturas_anio2"] ?? null), $context["i"], [], "array", true, true, false, 445)) {
                    // line 446
                    yield "                                    <a href=\"javascript:void(0)\" onclick=\"openEditModal(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 446, $this->source); })()), $context["i"], [], "array", false, false, false, 446), "id", [], "any", false, false, false, 446), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 446), "html", null, true);
                    yield ", 2)\">
                                        <button type=\"button\" class=\"btn-primary\">Editar</button>
                                    </a>
                                    <button id=\"guardar-asignatura-";
                    // line 449
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 449, $this->source); })()), $context["i"], [], "array", false, false, false, 449), "id", [], "any", false, false, false, 449), "html", null, true);
                    yield "\" class=\"button\" onclick=\"document.getElementById('upload-file-asignatura-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 449, $this->source); })()), $context["i"], [], "array", false, false, false, 449), "id", [], "any", false, false, false, 449), "html", null, true);
                    yield "').click();\">
                                        Guardar PDF
                                    </button>
                                    <!-- Formulario oculto para subir PDF de la asignatura -->
                                    <form id=\"upload-form-asignatura-";
                    // line 453
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 453, $this->source); })()), $context["i"], [], "array", false, false, false, 453), "id", [], "any", false, false, false, 453), "html", null, true);
                    yield "\" action=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignatura_pdf");
                    yield "\" method=\"post\" enctype=\"multipart/form-data\" style=\"display:none;\">
                                        <input type=\"hidden\" name=\"asignatura_id\" value=\"";
                    // line 454
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 454, $this->source); })()), $context["i"], [], "array", false, false, false, 454), "id", [], "any", false, false, false, 454), "html", null, true);
                    yield "\">
                                        <input type=\"hidden\" name=\"tecnicatura_id\" value=\"";
                    // line 455
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 455, $this->source); })()), $context["i"], [], "array", false, false, false, 455), "tecnicatura", [], "any", false, false, false, 455), "id", [], "any", false, false, false, 455), "html", null, true);
                    yield "\"> <!-- Agregar el id de la tecnicatura -->
                                        <input type=\"file\" id=\"upload-file-asignatura-";
                    // line 456
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 456, $this->source); })()), $context["i"], [], "array", false, false, false, 456), "id", [], "any", false, false, false, 456), "html", null, true);
                    yield "\" name=\"pdf_file\" accept=\"application/pdf\" onchange=\"document.getElementById('upload-form-asignatura-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 456, $this->source); })()), $context["i"], [], "array", false, false, false, 456), "id", [], "any", false, false, false, 456), "html", null, true);
                    yield "').submit();\">
                                    </form>  
                                    <!-- Botón para ver PDF de la asignatura -->
                                    <a href=\"";
                    // line 459
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("archivos/asignaturas/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 459, $this->source); })()), $context["i"], [], "array", false, false, false, 459), "id", [], "any", false, false, false, 459)) . ".pdf")), "html", null, true);
                    yield "\" target=\"_blank\" class=\"pdf-link\" data-pdf-path=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("archivos/asignaturas/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 459, $this->source); })()), $context["i"], [], "array", false, false, false, 459), "id", [], "any", false, false, false, 459)) . ".pdf")), "html", null, true);
                    yield "\">
                                        <button type=\"button\" class=\"button\">Abrir PDF</button>
                                    </a>
                                    <span class=\"pdf-not-found\" style=\"display: none;\">No hay PDF</span>

                                    <a href=\"javascript:void(0)\" onclick=\"openModal('add', ";
                    // line 464
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 464, $this->source); })()), $context["i"], [], "array", false, false, false, 464), "id", [], "any", false, false, false, 464), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 464), "html", null, true);
                    yield ")\">
                                        <button type=\"button\" class=\"button\">Agregar correlativa</button>
                                    </a>

                                    <a href=\"javascript:void(0)\" onclick=\"openModal('view', ";
                    // line 468
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio2"]) || array_key_exists("asignaturas_anio2", $context) ? $context["asignaturas_anio2"] : (function () { throw new RuntimeError('Variable "asignaturas_anio2" does not exist.', 468, $this->source); })()), $context["i"], [], "array", false, false, false, 468), "id", [], "any", false, false, false, 468), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 468), "html", null, true);
                    yield ")\">
                                        <button type=\"button\" class=\"button\">Ver correlativas</button>
                                    </a>



                                ";
                } else {
                    // line 475
                    yield "                                    <button onclick=\"openCreateModal(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 475), "html", null, true);
                    yield ", 2)\" class=\"button\">Crear</button>
                                ";
                }
                // line 477
                yield "


                            </td>
                            <td>
                                ";
                // line 482
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["asignaturas_anio3"] ?? null), $context["i"], [], "array", false, true, false, 482), "nombre", [], "any", true, true, false, 482) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 482, $this->source); })()), $context["i"], [], "array", false, false, false, 482), "nombre", [], "any", false, false, false, 482)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 482, $this->source); })()), $context["i"], [], "array", false, false, false, 482), "nombre", [], "any", false, false, false, 482), "html", null, true)) : (""));
                yield "<br>
                                ";
                // line 483
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["asignaturas_anio3"] ?? null), $context["i"], [], "array", true, true, false, 483)) {
                    // line 484
                    yield "                                    <a href=\"javascript:void(0)\" onclick=\"openEditModal(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 484, $this->source); })()), $context["i"], [], "array", false, false, false, 484), "id", [], "any", false, false, false, 484), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 484), "html", null, true);
                    yield ", 3)\">
                                        <button type=\"button\" class=\"btn-primary\">Editar</button>
                                    </a>
                                    <button id=\"guardar-asignatura-";
                    // line 487
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 487, $this->source); })()), $context["i"], [], "array", false, false, false, 487), "id", [], "any", false, false, false, 487), "html", null, true);
                    yield "\" class=\"btn-primary\" onclick=\"document.getElementById('upload-file-asignatura-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 487, $this->source); })()), $context["i"], [], "array", false, false, false, 487), "id", [], "any", false, false, false, 487), "html", null, true);
                    yield "').click();\">
                                        Guardar PDF
                                    </button>
                                    <!-- Formulario oculto para subir PDF de la asignatura -->
                                    <form id=\"upload-form-asignatura-";
                    // line 491
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 491, $this->source); })()), $context["i"], [], "array", false, false, false, 491), "id", [], "any", false, false, false, 491), "html", null, true);
                    yield "\" action=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("asignatura_pdf");
                    yield "\" method=\"post\" enctype=\"multipart/form-data\" style=\"display:none;\">
                                        <input type=\"hidden\" name=\"asignatura_id\" value=\"";
                    // line 492
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 492, $this->source); })()), $context["i"], [], "array", false, false, false, 492), "id", [], "any", false, false, false, 492), "html", null, true);
                    yield "\">
                                        <input type=\"hidden\" name=\"tecnicatura_id\" value=\"";
                    // line 493
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 493, $this->source); })()), $context["i"], [], "array", false, false, false, 493), "tecnicatura", [], "any", false, false, false, 493), "id", [], "any", false, false, false, 493), "html", null, true);
                    yield "\"> <!-- Agregar el id de la tecnicatura -->
                                        <input type=\"file\" id=\"upload-file-asignatura-";
                    // line 494
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 494, $this->source); })()), $context["i"], [], "array", false, false, false, 494), "id", [], "any", false, false, false, 494), "html", null, true);
                    yield "\" name=\"pdf_file\" accept=\"application/pdf\" onchange=\"document.getElementById('upload-form-asignatura-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 494, $this->source); })()), $context["i"], [], "array", false, false, false, 494), "id", [], "any", false, false, false, 494), "html", null, true);
                    yield "').submit();\">
                                    </form>              
                                    <!-- Botón para ver PDF de la asignatura -->
                                    <a href=\"";
                    // line 497
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("archivos/asignaturas/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 497, $this->source); })()), $context["i"], [], "array", false, false, false, 497), "id", [], "any", false, false, false, 497)) . ".pdf")), "html", null, true);
                    yield "\" target=\"_blank\" class=\"pdf-link\" data-pdf-path=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("archivos/asignaturas/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 497, $this->source); })()), $context["i"], [], "array", false, false, false, 497), "id", [], "any", false, false, false, 497)) . ".pdf")), "html", null, true);
                    yield "\">
                                        <button type=\"button\" class=\"btn btn-primary\">Abrir PDF</button>
                                    </a>
                                    <span class=\"pdf-not-found\" style=\"display: none;\">No hay PDF</span>


                                    <a href=\"javascript:void(0)\" onclick=\"openModal('add', ";
                    // line 503
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 503, $this->source); })()), $context["i"], [], "array", false, false, false, 503), "id", [], "any", false, false, false, 503), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 503), "html", null, true);
                    yield ")\">
                                        <button type=\"button\" class=\"btn-primary\">Agregar correlativa</button>
                                    </a>

                                    <a href=\"javascript:void(0)\" onclick=\"openModal('view', ";
                    // line 507
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["asignaturas_anio3"]) || array_key_exists("asignaturas_anio3", $context) ? $context["asignaturas_anio3"] : (function () { throw new RuntimeError('Variable "asignaturas_anio3" does not exist.', 507, $this->source); })()), $context["i"], [], "array", false, false, false, 507), "id", [], "any", false, false, false, 507), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 507), "html", null, true);
                    yield ")\">
                                        <button type=\"button\" class=\"btn-primary\">Ver correlativas</button>
                                    </a>


                                ";
                } else {
                    // line 513
                    yield "                                    <button onclick=\"openCreateModal(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 513), "html", null, true);
                    yield ", 3)\" class=\"btn-primary\">Crear</button>
                                ";
                }
                // line 515
                yield "
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 519
            yield "                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tecnicatura'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
        yield "
        <script>
        
            function openModal(action, asignaturaId, tecnicaturaId) {
                let url = '';
                if (action === 'add') {
                    url = \"";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_correlativa", ["asignatura_id" => "__asignaturaId__", "tecnicatura_id" => "__tecnicaturaId__"]), "html", null, true);
        yield "\"
                        .replace('__asignaturaId__', asignaturaId)
                        .replace('__tecnicaturaId__', tecnicaturaId);
                                        fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalCorre').innerHTML = html;
                        document.getElementById('correlativaModal').style.display = 'block';

                            const correInput = document.getElementById('correlativa_asignatura');

                            // Ocultar label de tecnicatura
                            const labelCorre = document.querySelector('label[for=\"correlativa_asignatura\"]');
                            if (labelCorre) {
                                labelCorre.style.display = 'none';
                            }

                            if (correInput) { 
                                correInput.value = asignaturaId;
                                correInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                                correInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                            }


                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));

                } else if (action === 'view') {
                    url = \"";
        // line 556
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_correlativas", ["asignatura_id" => "__asignaturaId__"]);
        yield "\"
                        .replace('__asignaturaId__', asignaturaId);
                    fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalCorre').innerHTML = html;
                        document.getElementById('correlativaModal').style.display = 'block';
                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));    
                }
                
            }

            function closeCorrelativaModal() {
                document.getElementById('correlativaModal').style.display = 'none';
                document.getElementById('modalCorre').innerHTML = '';
            }
       </div>
    
        </script>

        <!-- Modal Correlativa -->
        <div id=\"correlativaModal\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeCorrelativaModal()\">&times;</span>
                <div id=\"modalCorre\" class=\"submodal\"></div>
            </div>
        </div>





        <!-- Modal para editar asignatura -->
        <div id=\"editModal\" class=\"modal\" style=\"display:none\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeEditModal()\">&times;</span>
                <div id=\"modalContent\" class=\"submodal\"></div>
            </div>
        </div>

        <!-- Modal HTML para Crear Asignatura -->
        <div id=\"asignaturaModal\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeModalAsignatura()\">&times;</span>
                <div id=\"modalBody\" class=\"submodal\"></div>
            </div>
        </div>

        <!-- Modal HTML para Crear tecnicatura -->
        <div id=\"tecnicaturaModal\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeModalTecnicatura()\">&times;</span>
                <div id=\"tecnicaturaBody\" class=\"submodal\"></div>
            </div>
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
        return "vistas/index.html.twig";
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
        return array (  1006 => 556,  975 => 528,  967 => 522,  959 => 519,  950 => 515,  944 => 513,  933 => 507,  924 => 503,  913 => 497,  905 => 494,  901 => 493,  897 => 492,  891 => 491,  882 => 487,  873 => 484,  871 => 483,  867 => 482,  860 => 477,  854 => 475,  842 => 468,  833 => 464,  823 => 459,  815 => 456,  811 => 455,  807 => 454,  801 => 453,  792 => 449,  783 => 446,  781 => 445,  777 => 444,  770 => 439,  764 => 437,  754 => 432,  746 => 429,  742 => 428,  738 => 427,  732 => 426,  723 => 422,  714 => 419,  712 => 418,  708 => 417,  704 => 415,  700 => 414,  697 => 413,  693 => 410,  690 => 409,  687 => 408,  684 => 407,  681 => 406,  678 => 405,  675 => 404,  672 => 403,  669 => 401,  666 => 400,  663 => 399,  661 => 398,  657 => 396,  651 => 395,  648 => 394,  645 => 393,  642 => 392,  639 => 391,  636 => 390,  633 => 389,  630 => 388,  627 => 387,  624 => 386,  620 => 385,  617 => 384,  614 => 383,  611 => 382,  609 => 381,  591 => 368,  582 => 364,  578 => 363,  572 => 362,  563 => 358,  557 => 355,  550 => 352,  546 => 351,  541 => 348,  532 => 344,  530 => 347,  522 => 340,  517 => 338,  513 => 337,  509 => 336,  505 => 335,  502 => 334,  497 => 333,  472 => 310,  466 => 309,  460 => 308,  458 => 305,  453 => 304,  448 => 303,  435 => 302,  329 => 206,  324 => 203,  304 => 185,  237 => 121,  212 => 99,  207 => 96,  176 => 66,  172 => 64,  167 => 62,  162 => 61,  160 => 60,  106 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vistas!{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# Script de filtros y muestra de tecnicatura seleccionada #}
    <script>
        function filterTableTecnicatura() {
            let searchNombre = document.getElementById(\"searchNombre\").value.toLowerCase();
            let searchReso = document.getElementById(\"searchResolucion\").value.toLowerCase();
            let table = document.getElementById(\"tablaTecnicaturas\"); // Obtener la tabla de tecnicaturas
            let rows = table.getElementsByTagName(\"tr\");       
            for (let i = 1; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName(\"td\");
                let nombre = cells[0].textContent.toLowerCase();
                let resolucion = cells[3].textContent.toLowerCase();
                if (nombre.includes(searchNombre) && resolucion.includes(searchReso)) {
                    rows[i].style.display = \"\"; 
                } else {
                    rows[i].style.display = \"none\"; 
                }
            }
        }

        function showAsignaturas(tecnicaturaId) {
            // Ocultar todas las tablas de asignaturas
    let tables = document.querySelectorAll('.tabla_home');
    tables.forEach(table => table.style.display = 'none');

    // Mostrar la tabla de asignaturas correspondiente
    let asignaturasTable = document.getElementById(`tablaAsignaturas_\${tecnicaturaId}`);
    if (asignaturasTable) {
        asignaturasTable.style.display = '';
    }

    // Ocultar filtro tecnicaturas
    let search = document.getElementById(`searchs`);
    if (search) {
        search.style.display = 'none';
    }

    // Mostrar botón de regresar
    let backButton = document.createElement('button');
    backButton.textContent = 'Regresar';
    backButton.id = 'dynamicBackButton'; // Le ponemos ID para identificarlo
    backButton.style = \"background-color:rgb(61, 85, 235); color: white; padding: 12px 24px; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; margin: 20px auto; display: block;\";
    backButton.onclick = function() {
        hideAsignaturas(tecnicaturaId);
    };

    // Agregar el botón solo si no existe
    if (!document.getElementById('dynamicBackButton')) {
        document.getElementById('body-vistas').appendChild(backButton);
    }
}

        document.addEventListener('DOMContentLoaded', function() {
            // Twig evalúa si tecId está definido y no es nulo
            {% if tecId is defined and tecId is not null %}
                console.log('El ID de tecnicatura es: ', {{ tecId }});
                showAsignaturas({{ tecId }});
            {% else %}
                console.log('El ID de tecnicatura no está definido o es nulo.');
            {% endif %}
        });

        function hideAsignaturas(tecnicaturaId) {
          // Ocultar la tabla de asignaturas
    let asignaturasTable = document.getElementById(`tablaAsignaturas_\${tecnicaturaId}`);
    if (asignaturasTable) {
        asignaturasTable.style.display = 'none';
    }

    // Mostrar la tabla principal de tecnicaturas
    let tablaTecnicaturas = document.getElementById('tablaTecnicaturas');
    if (tablaTecnicaturas) {
        tablaTecnicaturas.style.display = '';
    }

    // Mostrar el filtro de búsqueda
    let search = document.getElementById('searchs');
    if (search) {
        search.style.display = '';
    }

    // Eliminar el botón de volver
    let backButton = document.getElementById('dynamicBackButton');
    if (backButton) {
        backButton.remove(); // ⚡ Acá se elimina correctamente
    }
}
    </script>

    {#Seccion de modales edit create  #}
    <script>
        function openEditModal(asignaturaId, tecnicaturaId, anios) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('editar_asignatura', { 'id': '__asignaturaId__', 'tecnicatura_id': '__tecnicaturaId__' }) }}\"
                .replace('__asignaturaId__', asignaturaId)
                .replace('__tecnicaturaId__', tecnicaturaId);
            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalContent').innerHTML = html;
                    document.getElementById('editModal').style.display = 'block';
                    hideFields('modalContent', tecnicaturaId, anios);
                })
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        // Función para cerrar el modal
        function closeEditModal() {
            document.getElementById('editModal').style.display = 'none';
            document.getElementById('modalContent').innerHTML = '';
        }

        function openCreateModal(tecnicaturaId, anio) {
            // Generar la URL con los IDs correctos
            const url = \"{{ path('crear_asignatura', { 'tecnicatura_id': '__tecnicaturaId__' }) }}\"
                .replace('__tecnicaturaId__', tecnicaturaId);

            // Realizar la solicitud fetch
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('modalBody').innerHTML = html;
                    document.getElementById('asignaturaModal').style.display = 'block';

                    hideFields('modalBody', tecnicaturaId, anio);
                })
                .catch(error => console.error('Error al cargar el formulario de creación:', error));
        }

        function hideFields(containerId, tecnicaturaId, anio) {
            const container = document.getElementById(containerId);
            // Ocultar labels
            const labelTecnicatura = container.querySelector('label[for=\"asignatura_tecnicatura\"]');
            if (labelTecnicatura) {
                labelTecnicatura.style.display = 'none';
            }

            const labelAnio = container.querySelector('label[for=\"asignatura_anio\"]');
            if (labelAnio) {
                labelAnio.style.display = 'none';
            }

            const labelProgram = container.querySelector('label[for=\"asignatura_programa\"]');
            if (labelProgram) {
                labelProgram.style.display = 'none';
            }

            // Ocultar y asignar valores a los inputs
            const tecnicaturaInput = container.querySelector('#asignatura_tecnicatura');
            if (tecnicaturaInput) {
                tecnicaturaInput.value = tecnicaturaId;
                tecnicaturaInput.setAttribute('readonly', true);
                tecnicaturaInput.style.display = 'none';
            }

            const programInput = container.querySelector('#asignatura_programa');
            if (programInput) {
                programInput.value = tecnicaturaId;
                programInput.setAttribute('readonly', true);
                programInput.style.display = 'none';
            }

            const anioInput = container.querySelector('#asignatura_anio');
            if (anioInput) {
                anioInput.value = anio;
                anioInput.setAttribute('readonly', true);
                anioInput.style.display = 'none';
            }
        }


        function closeModalAsignatura() {
            document.getElementById('asignaturaModal').style.display = 'none';
             document.getElementById('modalBody').innerHTML = '';
        }

        //crear tecnicatura nueva
        function openCreateModalTec() {
            fetch(\"{{ path('crear_tecnicatura')}}\")
            .then(response => response.text())
                .then(html => {
                    // Mostrar el contenido en el modal
                    document.getElementById('tecnicaturaBody').innerHTML = html;
                    document.getElementById('tecnicaturaModal').style.display = 'block';
                })
                .catch(error => console.error('Error al cargar el formulario de edición:', error));
        }

        function closeModalTecnicatura() {
            document.getElementById('tecnicaturaModal').style.display = 'none';
             document.getElementById('tecnicaturaBody').innerHTML = '';
        }
    </script>

    
    {# Seccion de ocultar los botones cuando no hay pdf y mostrar un label -no hay pdf- #}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Realiza una solicitud para obtener la lista de PDFs
            fetch(\"{{ path('pdf_list')}}\")
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error en la respuesta del servidor');
                    }
                    return response.json();
                })
                .then(data => {
                    // Inicializar arrays vacíos para almacenar los PDFs
                    let tecnicaturasPdfs = [];
                    let asignaturasPdfs = [];

                    // Construir tecnicaturasPdfs
                    if (Array.isArray(data.tecnicaturas)) {
                        data.tecnicaturas.forEach(item => {
                            if (typeof item === 'string') {
                                tecnicaturasPdfs.push(item.split('/').pop());
                            } else if (typeof item === 'object' && Object.values(item).length > 0) {
                                Object.values(item).forEach(pdf => {
                                    tecnicaturasPdfs.push(pdf.split('/').pop());
                                });
                            }
                        });
                    } else if (typeof data.tecnicaturas === 'string') {
                        tecnicaturasPdfs.push(data.tecnicaturas.split('/').pop());
                    } else if (typeof data.tecnicaturas === 'object' && Object.values(data.tecnicaturas).length > 0) {
                        Object.values(data.tecnicaturas).forEach(pdf => {
                            tecnicaturasPdfs.push(pdf.split('/').pop());
                        });
                    }

                    // Construir asignaturasPdfs
                    if (Array.isArray(data.asignaturas)) {
                        data.asignaturas.forEach(item => {
                            if (typeof item === 'string') {
                                asignaturasPdfs.push(item.split('/').pop());
                            } else if (typeof item === 'object' && Object.values(item).length > 0) {
                                Object.values(item).forEach(pdf => {
                                    asignaturasPdfs.push(pdf.split('/').pop());
                                });
                            }
                        });
                    } else if (typeof data.asignaturas === 'string') {
                        asignaturasPdfs.push(data.asignaturas.split('/').pop());
                    } else if (typeof data.asignaturas === 'object' && Object.values(data.asignaturas).length > 0) {
                        Object.values(data.asignaturas).forEach(pdf => {
                            asignaturasPdfs.push(pdf.split('/').pop());
                        });
                    }

                    // Log para verificar el contenido de las listas de PDFs (opcional)
                    console.log('PDFs de Tecnicauras:', tecnicaturasPdfs);
                    console.log('PDFs de Asignaturas:', asignaturasPdfs);

                    // Selecciona todos los enlaces con la clase 'pdf-link'
                    const pdfLinks = document.querySelectorAll('.pdf-link');

                    pdfLinks.forEach(function(link) {
                        const pdfPath = link.getAttribute('data-pdf-path');
                        let pdfExists = false;

                        // Verifica si el archivo existe en alguna de las listas de PDFs
                        if (pdfPath.includes('tecnicaturas')) {
                            pdfExists = tecnicaturasPdfs.includes(pdfPath.split('/').pop());
                        } else if (pdfPath.includes('asignaturas')) {
                            pdfExists = asignaturasPdfs.includes(pdfPath.split('/').pop());
                        }

                        if (!pdfExists) {
                            // Si el archivo no existe, oculta el enlace y muestra el mensaje alternativo
                            link.style.display = 'none';
                            link.nextElementSibling.style.display = 'inline'; // Muestra \"No hay PDF\"
                        } else {
                            // Si el archivo existe, habilita el botón \"Abrir PDF\"
                            link.querySelector('button').disabled = false;
                        }
                    });
                })
                .catch(error => {
                    // Maneja cualquier error en la solicitud
                    console.error('Error al obtener la lista de PDFs:', error);

                    // Oculta todos los enlaces de PDFs y muestra el mensaje alternativo en caso de error
                    const pdfLinks = document.querySelectorAll('.pdf-link');
                    pdfLinks.forEach(function(link) {
                        link.style.display = 'none';
                        link.nextElementSibling.style.display = 'inline'; // Muestra \"No hay PDF\"
                    });
                });
        });
    </script>



{% endblock %}

{% block body %}
    {% for label, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            {#<div class=\"alert alert-{{ label }}\">
                {{ message }}
            </div>#}
        {% endfor %}
    {% endfor %}

    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Tecnicaturas y Asignaturas</h1>

        <div id=\"searchs\" class=\"search-container\">
            <label for=\"searchNombre\">Buscar por Nombre:</label>
            <input type=\"text\" id=\"searchNombre\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por nombre...\">
            <label for=\"searchResolucion\">Buscar por Resolución:</label>
            <input type=\"text\" id=\"searchResolucion\" onkeyup=\"filterTableTecnicatura()\" placeholder=\"Buscar por resolucion...\">
            <button onclick=\"openCreateModalTec()\" class=\"button\">Crear Tecnicatura</button>
        </div>

        <table class=\"tabla_home\" id=\"tablaTecnicaturas\" border=\"1\">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Duración</th>
                    <th>Cantidad de Asignaturas</th>
                    <th>Número de Resolución</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {% for tecnicatura in tecnicaturas %}
                    <tr>
                        <td>{{ tecnicatura.nombre }}</td>
                        <td>{{ tecnicatura.duracion }}</td>
                        <td>{{ tecnicatura.cantidadAsignaturas }}</td>
                        <td>{{ tecnicatura.numeroResolucion }}</td>
                        <td>
                            <button onclick=\"showAsignaturas({{ tecnicatura.id }})\" class=\"button\">Ir</button>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">No se encontraron registros</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        {% for tecnicatura in tecnicaturas %}
            <table id=\"tablaAsignaturas_{{ tecnicatura.id }}\" class=\"tabla_home\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th>{{tecnicatura}} </th>
                        <th>
                            <!-- Botón para guardar resolución -->
                            <button id=\"guardar-resolucion-{{ tecnicatura.id }}\" class=\"btn-primary\" onclick=\"document.getElementById('upload-file-{{ tecnicatura.id }}').click();\">
                                Guardar Resolución
                            </button> 
                            <!-- Formulario oculto -->
                            <form id=\"upload-form-{{ tecnicatura.id }}\" action=\"{{ path('upload_pdf') }}\" method=\"post\" enctype=\"multipart/form-data\" style=\"display:none;\">
                                <input type=\"hidden\" name=\"tecnicatura_id\" value=\"{{ tecnicatura.id }}\">
                                <input type=\"file\" id=\"upload-file-{{ tecnicatura.id }}\" name=\"pdf_file\" accept=\"application/pdf\" onchange=\"document.getElementById('upload-form-{{ tecnicatura.id }}').submit();\">
                            </form>
                        </th>
                        <th>
                            <a href=\"{{ asset('archivos/tecnicaturas/' ~ tecnicatura.id ~ '.pdf') }}\" target=\"_blank\" class=\"pdf-link\" data-pdf-path=\"{{ asset('archivos/tecnicaturas/' ~ tecnicatura.id ~ '.pdf') }}\">
                                <button type=\"button\" class=\"button\">Abrir PDF</button>
                            </a>
                            <span class=\"pdf-not-found\" style=\"display: none;\">No hay PDF</span>
                        </th>
                    </tr>
                    <tr>                  
                        <th>Primer Año</th>
                        <th>Segundo Año</th>
                        <th>Tercer Año</th>
                    </tr>
                </thead>
                <tbody>
                    {% set asignaturas_anio1 = [] %}
                    {% set asignaturas_anio2 = [] %}
                    {% set asignaturas_anio3 = [] %}

                    {% for asignatura in asignaturas %}
                        {% if asignatura.tecnicatura.id == tecnicatura.id %}
                            {% if asignatura.anio == 1 %}
                                {% set asignaturas_anio1 = asignaturas_anio1|merge([asignatura]) %}
                            {% elseif asignatura.anio == 2 %}
                                {% set asignaturas_anio2 = asignaturas_anio2|merge([asignatura]) %}
                            {% elseif asignatura.anio == 3 %}
                                {% set asignaturas_anio3 = asignaturas_anio3|merge([asignatura]) %}
                            {% endif %}
                        {% endif %}
                    {% endfor %}


                    {% set max_filas_anio1 = asignaturas_anio1|length + 1 %}
                    {% set max_filas_anio2 = asignaturas_anio2|length + 1 %}
                    {% set max_filas_anio3 = asignaturas_anio3|length + 1 %}

                    {# Calcular el máximo manualmente #}
                    {% set max_rows = max_filas_anio1 %}
                    {% if max_filas_anio2 > max_rows %}
                        {% set max_rows = max_filas_anio2 %}
                    {% endif %}
                    {% if max_filas_anio3 > max_rows %}
                        {% set max_rows = max_filas_anio3 %}
                    {% endif %}


                   {# {% set max_rows = 12 %} {# Definir el número máximo de filas por columna #}

                    {% for i in range(0, max_rows -1) %}
                        <tr>
                            <td>
                                {{ asignaturas_anio1[i].nombre ?? '' }}<br>
                                {% if asignaturas_anio1[i] is defined %}
                                    <a href=\"javascript:void(0)\" onclick=\"openEditModal({{ asignaturas_anio1[i].id }}, {{ tecnicatura.id }}, 1)\">
                                        <button type=\"button\" class=\"btn-primary\">Editar</button>
                                    </a>
                                    <button id=\"guardar-asignatura-{{ asignaturas_anio1[i].id }}\" class=\"btn-primary\" onclick=\"document.getElementById('upload-file-asignatura-{{ asignaturas_anio1[i].id }}').click();\">
                                        Guardar PDF
                                    </button>
                                    <!-- Formulario oculto para subir PDF de la asignatura -->
                                    <form id=\"upload-form-asignatura-{{ asignaturas_anio1[i].id }}\" action=\"{{ path('asignatura_pdf') }}\" method=\"post\" enctype=\"multipart/form-data\" style=\"display:none;\">
                                        <input type=\"hidden\" name=\"asignatura_id\" value=\"{{ asignaturas_anio1[i].id }}\">
                                        <input type=\"hidden\" name=\"tecnicatura_id\" value=\"{{ asignaturas_anio1[i].tecnicatura.id }}\"> <!-- Agregar el id de la tecnicatura -->
                                        <input type=\"file\" id=\"upload-file-asignatura-{{ asignaturas_anio1[i].id }}\" name=\"pdf_file\" accept=\"application/pdf\" onchange=\"document.getElementById('upload-form-asignatura-{{ asignaturas_anio1[i].id }}').submit();\">
                                    </form>    
                                    <!-- Botón para ver PDF de la asignatura -->
                                    <a href=\"{{ asset('archivos/asignaturas/' ~ asignaturas_anio1[i].id ~ '.pdf') }}\" target=\"_blank\" class=\"pdf-link\" data-pdf-path=\"{{ asset('archivos/asignaturas/' ~ asignaturas_anio1[i].id ~ '.pdf') }}\">
                                        <button type=\"button\" class=\"btn btn-primary\">Abrir PDF</button>
                                    </a>
                                    <span class=\"pdf-not-found\" style=\"display: none;\">No hay PDF</span>
                                {% else %}
                                    <button onclick=\"openCreateModal({{ tecnicatura.id }}, 1)\" class=\"btn-primary\">Crear</button>
                                {% endif %}



                            </td>
                            <td>
                                {{ asignaturas_anio2[i].nombre ?? '' }}<br>
                                {% if asignaturas_anio2[i] is defined %}
                                    <a href=\"javascript:void(0)\" onclick=\"openEditModal({{ asignaturas_anio2[i].id }}, {{ tecnicatura.id }}, 2)\">
                                        <button type=\"button\" class=\"btn-primary\">Editar</button>
                                    </a>
                                    <button id=\"guardar-asignatura-{{ asignaturas_anio2[i].id }}\" class=\"button\" onclick=\"document.getElementById('upload-file-asignatura-{{ asignaturas_anio2[i].id }}').click();\">
                                        Guardar PDF
                                    </button>
                                    <!-- Formulario oculto para subir PDF de la asignatura -->
                                    <form id=\"upload-form-asignatura-{{ asignaturas_anio2[i].id }}\" action=\"{{ path('asignatura_pdf') }}\" method=\"post\" enctype=\"multipart/form-data\" style=\"display:none;\">
                                        <input type=\"hidden\" name=\"asignatura_id\" value=\"{{ asignaturas_anio2[i].id }}\">
                                        <input type=\"hidden\" name=\"tecnicatura_id\" value=\"{{ asignaturas_anio2[i].tecnicatura.id }}\"> <!-- Agregar el id de la tecnicatura -->
                                        <input type=\"file\" id=\"upload-file-asignatura-{{ asignaturas_anio2[i].id }}\" name=\"pdf_file\" accept=\"application/pdf\" onchange=\"document.getElementById('upload-form-asignatura-{{ asignaturas_anio2[i].id }}').submit();\">
                                    </form>  
                                    <!-- Botón para ver PDF de la asignatura -->
                                    <a href=\"{{ asset('archivos/asignaturas/' ~ asignaturas_anio2[i].id ~ '.pdf') }}\" target=\"_blank\" class=\"pdf-link\" data-pdf-path=\"{{ asset('archivos/asignaturas/' ~ asignaturas_anio2[i].id ~ '.pdf') }}\">
                                        <button type=\"button\" class=\"button\">Abrir PDF</button>
                                    </a>
                                    <span class=\"pdf-not-found\" style=\"display: none;\">No hay PDF</span>

                                    <a href=\"javascript:void(0)\" onclick=\"openModal('add', {{ asignaturas_anio2[i].id }}, {{ tecnicatura.id }})\">
                                        <button type=\"button\" class=\"button\">Agregar correlativa</button>
                                    </a>

                                    <a href=\"javascript:void(0)\" onclick=\"openModal('view', {{ asignaturas_anio2[i].id }}, {{ tecnicatura.id }})\">
                                        <button type=\"button\" class=\"button\">Ver correlativas</button>
                                    </a>



                                {% else %}
                                    <button onclick=\"openCreateModal({{ tecnicatura.id }}, 2)\" class=\"button\">Crear</button>
                                {% endif %}



                            </td>
                            <td>
                                {{ asignaturas_anio3[i].nombre ?? '' }}<br>
                                {% if asignaturas_anio3[i] is defined %}
                                    <a href=\"javascript:void(0)\" onclick=\"openEditModal({{ asignaturas_anio3[i].id }}, {{ tecnicatura.id }}, 3)\">
                                        <button type=\"button\" class=\"btn-primary\">Editar</button>
                                    </a>
                                    <button id=\"guardar-asignatura-{{ asignaturas_anio3[i].id }}\" class=\"btn-primary\" onclick=\"document.getElementById('upload-file-asignatura-{{ asignaturas_anio3[i].id }}').click();\">
                                        Guardar PDF
                                    </button>
                                    <!-- Formulario oculto para subir PDF de la asignatura -->
                                    <form id=\"upload-form-asignatura-{{ asignaturas_anio3[i].id }}\" action=\"{{ path('asignatura_pdf') }}\" method=\"post\" enctype=\"multipart/form-data\" style=\"display:none;\">
                                        <input type=\"hidden\" name=\"asignatura_id\" value=\"{{ asignaturas_anio3[i].id }}\">
                                        <input type=\"hidden\" name=\"tecnicatura_id\" value=\"{{ asignaturas_anio3[i].tecnicatura.id }}\"> <!-- Agregar el id de la tecnicatura -->
                                        <input type=\"file\" id=\"upload-file-asignatura-{{ asignaturas_anio3[i].id }}\" name=\"pdf_file\" accept=\"application/pdf\" onchange=\"document.getElementById('upload-form-asignatura-{{ asignaturas_anio3[i].id }}').submit();\">
                                    </form>              
                                    <!-- Botón para ver PDF de la asignatura -->
                                    <a href=\"{{ asset('archivos/asignaturas/' ~ asignaturas_anio3[i].id ~ '.pdf') }}\" target=\"_blank\" class=\"pdf-link\" data-pdf-path=\"{{ asset('archivos/asignaturas/' ~ asignaturas_anio3[i].id ~ '.pdf') }}\">
                                        <button type=\"button\" class=\"btn btn-primary\">Abrir PDF</button>
                                    </a>
                                    <span class=\"pdf-not-found\" style=\"display: none;\">No hay PDF</span>


                                    <a href=\"javascript:void(0)\" onclick=\"openModal('add', {{ asignaturas_anio3[i].id }}, {{ tecnicatura.id }})\">
                                        <button type=\"button\" class=\"btn-primary\">Agregar correlativa</button>
                                    </a>

                                    <a href=\"javascript:void(0)\" onclick=\"openModal('view', {{ asignaturas_anio3[i].id }}, {{ tecnicatura.id }})\">
                                        <button type=\"button\" class=\"btn-primary\">Ver correlativas</button>
                                    </a>


                                {% else %}
                                    <button onclick=\"openCreateModal({{ tecnicatura.id }}, 3)\" class=\"btn-primary\">Crear</button>
                                {% endif %}

                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endfor %}

        <script>
        
            function openModal(action, asignaturaId, tecnicaturaId) {
                let url = '';
                if (action === 'add') {
                    url = \"{{ path('add_correlativa', { 'asignatura_id': '__asignaturaId__', 'tecnicatura_id': '__tecnicaturaId__' }) }}\"
                        .replace('__asignaturaId__', asignaturaId)
                        .replace('__tecnicaturaId__', tecnicaturaId);
                                        fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalCorre').innerHTML = html;
                        document.getElementById('correlativaModal').style.display = 'block';

                            const correInput = document.getElementById('correlativa_asignatura');

                            // Ocultar label de tecnicatura
                            const labelCorre = document.querySelector('label[for=\"correlativa_asignatura\"]');
                            if (labelCorre) {
                                labelCorre.style.display = 'none';
                            }

                            if (correInput) { 
                                correInput.value = asignaturaId;
                                correInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                                correInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                            }


                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));

                } else if (action === 'view') {
                    url = \"{{ path('view_correlativas', { 'asignatura_id': '__asignaturaId__' }) }}\"
                        .replace('__asignaturaId__', asignaturaId);
                    fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalCorre').innerHTML = html;
                        document.getElementById('correlativaModal').style.display = 'block';
                    })
                    .catch(error => console.error('Error al cargar el contenido del modal:', error));    
                }
                
            }

            function closeCorrelativaModal() {
                document.getElementById('correlativaModal').style.display = 'none';
                document.getElementById('modalCorre').innerHTML = '';
            }
       </div>
    
        </script>

        <!-- Modal Correlativa -->
        <div id=\"correlativaModal\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeCorrelativaModal()\">&times;</span>
                <div id=\"modalCorre\" class=\"submodal\"></div>
            </div>
        </div>





        <!-- Modal para editar asignatura -->
        <div id=\"editModal\" class=\"modal\" style=\"display:none\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeEditModal()\">&times;</span>
                <div id=\"modalContent\" class=\"submodal\"></div>
            </div>
        </div>

        <!-- Modal HTML para Crear Asignatura -->
        <div id=\"asignaturaModal\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeModalAsignatura()\">&times;</span>
                <div id=\"modalBody\" class=\"submodal\"></div>
            </div>
        </div>

        <!-- Modal HTML para Crear tecnicatura -->
        <div id=\"tecnicaturaModal\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <span class=\"close\" onclick=\"closeModalTecnicatura()\">&times;</span>
                <div id=\"tecnicaturaBody\" class=\"submodal\"></div>
            </div>
        </div>

 

       

    </div>



{% endblock %}

 
 
 
", "vistas/index.html.twig", "C:\\xampp\\htdocs\\local\\templates\\vistas\\index.html.twig");
    }
}
