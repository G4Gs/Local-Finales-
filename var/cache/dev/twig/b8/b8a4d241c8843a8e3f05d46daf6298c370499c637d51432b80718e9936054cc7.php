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

/* vistasdocente/index.html.twig */
class __TwigTemplate_b575faa0596fe1876680f9631373a524fe0194881cf1927e8d3e2ac998972e0f extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasdocente/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistasdocente/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vistasdocente/index.html.twig", 1);
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

        yield "DOCENTES";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/PasarListas.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estadistica_asistencia.css"), "html", null, true);
        yield "\">
\t\t\t\t
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    ";
        // line 15
        yield "
        
    <!-- SheetJS (para Excel) -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js\"></script>
    
    <!-- jsPDF (para PDF) -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>
        <!-- html2canvas (para jsPDF) -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js\"></script>
    ";
        // line 25
        yield "        <script>
           

    function obtenerFechaActual() {
        const hoy = new Date();
        const dia = String(hoy.getDate()).padStart(2, '0');
        const mes = String(hoy.getMonth() + 1).padStart(2, '0');
        const anio = String(hoy.getFullYear()).slice(-2); // Obtener solo los últimos dos dígitos del año
        return `\${dia}-\${mes}-\${anio}`;
     }

    // Función para descargar como Excel
    function DescargarExcel() {
        // Obtener el contenido HTML de la tabla
        const tablaHTML = document.querySelector(\"#EstadisticasModal\");
    
        // Eliminar la fecha de la tabla antes de exportarla
        const fechaElement = document.querySelector('.Fechadehoy');
        const fechaOriginal = fechaElement.textContent;
        fechaElement.textContent = ''; 
    
        // Convertir la tabla HTML a un libro de Excel
        const wb = XLSX.utils.table_to_book(tablaHTML);
    
        fechaElement.textContent = fechaOriginal;
        const fechaActual = obtenerFechaActual();
        XLSX.writeFile(wb, `estadisticas_curso_\${fechaActual}.xlsx`);
    }
    
    
    // Función para descargar como PDF
    function DescargarPdf() {
        // Crear un nuevo documento PDF con jsPDF en orientación horizontal (landscape)
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF('landscape', 'mm', 'a4'); // A4 horizontal
        
        // Obtener la fecha actual
        const fechaActual = obtenerFechaActual();
        
        
        const tabla = document.querySelector(\"#EstadisticasModal\");
        
  
        const margenIzquierdo = 10;
        const margenSuperior = 10;
        
       
        html2canvas(tabla, {
            scale: 1.2, 
        }).then((canvas) => {
            const imgData = canvas.toDataURL(\"image/png\");
         
            const imgWidth = doc.internal.pageSize.width - margenIzquierdo * 2;
            const imgHeight = (canvas.height * imgWidth) / canvas.width;
        
            doc.addImage(imgData, \"PNG\", margenIzquierdo, margenSuperior, imgWidth, imgHeight);
        
            // Guardar el archivo PDF
            doc.save(`estadisticas_curso_\${fechaActual}.pdf`);
        });
    }
    
    
    



    let VistaAsistenciaActiva = false; // Variable para controlar que no se pueda pasar lista sin abrir el modal
    
    function ActivarEstadoAsistencia() {
        VistaAsistenciaActiva = true; 
        console.log(\"VistaAsistenciaActiva:\", VistaAsistenciaActiva); 
    }
    function DesactivarEstadoAsistencia() {
        VistaAsistenciaActiva = false; 
        console.log(\"VistaAsistenciaActiva:\", VistaAsistenciaActiva); 
    }

function showListaNueva(cursoId) {
    selectedCursoId = cursoId;
console.log(\"Curso seleccionado:\", selectedCursoId);

// Actualizar el link con el cursoId correcto
    const linkLista = document.getElementById('linkListaPorDia');
    if (linkLista) {
linkLista.href = `lista/\${cursoId}`;


    }

    const listaProfesores = document.getElementById('tablaTecnicaturas');
    if (listaProfesores) listaProfesores.style.display = 'none';

    // Pedir datos actualizados al backend
fetch(`actualizar-lista-alumnos/\${cursoId}`)


        .then(response => {
            if (!response.ok) throw new Error('Error al obtener datos actualizados');
            return response.json();
        })
        .then(data => {
            // Actualizar encabezados
            const curso = cursosData[cursoId];
            document.querySelector('.curso-info h2 span').textContent = curso.asignatura || '';
            document.querySelector('.curso-info h3 span:nth-child(1)').textContent = curso.anio || '';
            document.querySelector('.curso-info h3 span:nth-child(2)').textContent = curso.comision || '';

            const tbody = document.querySelector('.curso-tabla tbody');
            tbody.innerHTML = '';

            let presentes = 0;

            data.data.forEach(cursada => {
                const row = document.createElement('tr');
                row.classList.add('fila-alumno');

                row.innerHTML = `
                    <td class=\"alumno-nombre\">\${cursada.nombre}</td>
                    <td class=\"alumno-apellido\">\${cursada.apellido}</td>
                    <td class=\"alumno-dni\">\${cursada.dni}</td>
                    <td class=\"alumno-asistencia\">
                        <span class=\"estado-asistencia \${cursada.asistencia ? cursada.asistencia.toLowerCase() : 'no-marcado'}\">
                            \${cursada.asistencia || 'No marcado'}
                        </span>
                    </td>
                    <td class=\"alumno-observacion\">\${cursada.observacion || ''}</td>
                    <td class=\"alumnoeditar\">
                        <button onclick=\"ActivarEstadoEditar();editarAsistencia(\${cursoId}, \${cursada.id})\">Editar</button>
                    </td>
                `;

                tbody.appendChild(row);

                if (cursada.asistencia && cursada.asistencia.toLowerCase() === 'presente') presentes++;
            });

            const totalPresentes = document.querySelector('.total-presentes');
            if (totalPresentes) totalPresentes.textContent = `Alumnos presentes: \${presentes}`;

            document.getElementById('ListaNueva').style.display = 'block';
        })
        .catch(error => {
            console.error('Error al cargar la lista de alumnos:', error);
        });
}


        let modalAbierto = false;

          
    let ModalidadOpen = false; // Variable para controlar si se creo la modalidad
    
        function abrirPasarAsistenciaModal() {
            if (modalAbierto) {
                console.log('El modal ya está abierto.');
                return; // Evita abrir el modal si ya está abierto
            }else{
                if(!ModalidadOpen){
                    alert('Por favor, crear la modalidad antes de pasar asistencia.');
                    return; // Evita abrir el modal si no se ha creado la modalidad
                }else{
                    // Reiniciar el índice del array
            indiceActual = 0;
        
            // Mostrar overlay y modal
            document.getElementById('spa-overlay').style.display = 'block';
            document.getElementById('PasarAsistenciaModal').style.display = 'block';
        
            // Cargar el primer alumno
            mostrarAlumno(indiceActual);
        
            // Cambiar el estado del modal a abierto
            modalAbierto = true;
                }
            }
        
            
        }
        
    

    function editarAsistencia(cursoId, cursadaId) {
        if (!ModalidadOpen) {
            alert('Por favor, crear la modalidad antes de editar la asistencia.');
            return; // Evita abrir el modal si no se ha creado la modalidad
        } else {
            // Buscar el índice de la cursada correspondiente al cursadaId
            const cursadas = cursosData[cursoId].cursadas;
            const cursadaIndex = cursadas.findIndex(c => c.id === cursadaId);

            if (cursadaIndex === -1) {
                console.error(\"No se encontró la cursada con ID:\", cursadaId);
                return;
            }

            // Actualiza el índice actual al del alumno que se está editando
            indiceActual = cursadaIndex;

            const cursada = cursadas[cursadaIndex];
            const alumno = cursada.alumno;
            const ultimaAsistencia = cursada.asistencias.length > 0
                ? cursada.asistencias[cursada.asistencias.length - 1]
                : null;

            const alumnoNombreElemento = document.querySelector('.AlumnoNombre');
            const alumnoDniElemento = document.querySelector('.AlumnoDni');
            const spanEstado = document.querySelector('.estado-text');
            const observacionInput = document.getElementById('observacion-input');

            if (alumnoNombreElemento && alumnoDniElemento) {
                alumnoNombreElemento.textContent = `\${alumno.nombre} \${alumno.apellido}`;
                alumnoDniElemento.textContent = `DNI: \${alumno.dni}`;
            }

            if (ultimaAsistencia) {
                spanEstado.textContent = ultimaAsistencia.asistencia;
                spanEstado.className = 'estado-text estado-' + ultimaAsistencia.asistencia.toLowerCase().replace(' ', '');
                observacionInput.value = ultimaAsistencia.observacion || '';
            } else {
                spanEstado.textContent = 'No marcado';
                spanEstado.className = 'estado-text estado-neutral';
                observacionInput.value = '';
            }

            document.getElementById('spa-overlay').style.display = 'block';
            document.getElementById('PasarAsistenciaModal').style.display = 'block';
            modalAbierto = true;
        }
    }
    
                


    function showCursoCursada(cursoId) {
        // oculta tablas no relevantes
        let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision, .tabla_cursada, .tabla_curso');
        tablesToHide.forEach(table => table.style.display = 'none');

        // oculta cursos
        let cursadaTables = document.querySelectorAll('.tabla_curso');
        cursadaTables.forEach(table => table.style.display = 'none');

        // muestra tabla cursada específica
        let cursadaTable = document.getElementById(`tablaCursoCursada_\${cursoId}`);
        if (cursadaTable) {
            cursadaTable.style.display = '';
        }

        // ocultar search
        let search = document.getElementById('searchs');
        if (search) {
            search.style.display = 'none';
        }

        // muestra el botón de regresar, la función hide... recibe id de comision, tecnicatura y asignatura para poder regresar al punto anterior
        let backButton = document.getElementById('backButton');
        if (backButton) {
            backButton.style.display = '';
            backButton.onclick = function() {
                hideCursoCursada(cursoId);
            };
        }
    }
    function hideCursoCursada(cursoId) {
        // oculta tabla cursada específica
        let cursadaTable = document.getElementById(`tablaCursoCursada_\${cursoId}`);
        if (cursadaTable) {
            cursadaTable.style.display = 'none';
        }

        // muestra la tabla curso específica
        let cursoTable = document.getElementById(`tablaTecnicaturas`);
        if (cursoTable) {
            cursoTable.style.display = '';
        }

        // oculta el botón regresar-volver
        let backButton = document.getElementById('backButton');
        if (backButton) {
            backButton.style.display = 'none';
        }
    }
        // Función para cerrar el modal
    function cerrarPasarAsistenciaModal() {
        if (!modalAbierto) {
            console.log('El modal ya está cerrado.');
            return; // Evita intentar cerrar el modal si ya está cerrado
        }
    
        // Ocultar overlay y modal
        document.getElementById('spa-overlay').style.display = 'none';
        document.getElementById('PasarAsistenciaModal').style.display = 'none';
    
        // Restablecer los valores del modal
        const alumnoNombreElemento = document.querySelector('.AlumnoNombre');
        const alumnoDniElemento = document.querySelector('.AlumnoDni');
        const spanEstado = document.querySelector('.estado-text');
        const observacionInput = document.getElementById('observacion-input');
    
        if (alumnoNombreElemento) alumnoNombreElemento.textContent = 'Nombre Apellido';
        if (alumnoDniElemento) alumnoDniElemento.textContent = 'DNI: 12345678';
        if (spanEstado) {
            spanEstado.textContent = 'No marcado';
            spanEstado.className = 'estado-text estado-neutral';
        }
        if (observacionInput) observacionInput.value = '';
    
        // Cambiar el estado del modal a cerrado
        modalAbierto = false;
        DesactivarEstadoAsistencia();
        DesactivarEstadoEditar();
    }
    document.getElementById('spa-overlay').addEventListener('click', cerrarPasarAsistenciaModal);
    
    // Evento para cerrar el modal cuando se presiona Escape
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modalAbierto) {
            cerrarPasarAsistenciaModal();  
        }
    });
        
        
        
        
        
  
 // Función para actualizar el estado de asistencia
    const cursosData = {
        ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 354, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 355
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 355), "html", null, true);
            yield ": {
                id: ";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 356), "html", null, true);
            yield ",
                asignatura: \"";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 357), "nombre", [], "any", false, false, false, 357), "js"), "html", null, true);
            yield "\",
                anio: \"";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 358), "anio", [], "any", false, false, false, 358), "js"), "html", null, true);
            yield "\",
                comision: \"";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 359), "comision", [], "any", false, false, false, 359), "js"), "html", null, true);
            yield "\",
                tecnicatura: \"";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 360), "tecnicatura", [], "any", false, false, false, 360), "nombre", [], "any", false, false, false, 360), "js"), "html", null, true);
            yield "\",
                cursadas: [
                    ";
            // line 362
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadas", [], "any", false, false, false, 362));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                // line 363
                yield "                        {
                            id: ";
                // line 364
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "id", [], "any", false, false, false, 364), "html", null, true);
                yield ",
                            alumno: {
                                id: ";
                // line 366
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "alumno", [], "any", false, false, false, 366), "id", [], "any", false, false, false, 366), "html", null, true);
                yield ",
                                nombre: \"";
                // line 367
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "alumno", [], "any", false, false, false, 367), "nombre", [], "any", false, false, false, 367), "js"), "html", null, true);
                yield "\",
                                apellido: \"";
                // line 368
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "alumno", [], "any", false, false, false, 368), "apellido", [], "any", false, false, false, 368), "js"), "html", null, true);
                yield "\",
                                dni: \"";
                // line 369
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "alumno", [], "any", false, false, false, 369), "dniPasaporte", [], "any", false, false, false, 369), "js"), "html", null, true);
                yield "\"
                            },
                            asistencias: [
                                ";
                // line 372
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getAsistencias", [], "any", false, false, false, 372));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["asistencia"]) {
                    // line 373
                    yield "                                    {
                                        id: ";
                    // line 374
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asistencia"], "id", [], "any", false, false, false, 374), "html", null, true);
                    yield ",
                                        <!-- Cambiamos el date, revisar .. !!! -->
                                        fecha: \"";
                    // line 376
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["asistencia"], "CalendarioClase", [], "any", false, false, false, 376), "fecha", [], "any", false, false, false, 376), "Y-m-d"), "html", null, true);
                    yield "\",  <!-- Ajuste en el formato de la fecha -->
                                        asistencia: \"";
                    // line 377
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asistencia"], "asistencia", [], "any", false, false, false, 377), "js"), "html", null, true);
                    yield "\",
                                        observacion: \"";
                    // line 378
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["asistencia"], "observacion", [], "any", false, false, false, 378), "js"), "html", null, true);
                    yield "\"
                                    }";
                    // line 379
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 379)) {
                        yield ",";
                    }
                    // line 380
                    yield "                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['asistencia'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 381
                yield "                            ]
                        }";
                // line 382
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 382)) {
                    yield ",";
                }
                // line 383
                yield "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 384
            yield "                ]
            }";
            // line 385
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 385)) {
                yield ",";
            }
            // line 386
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        yield "    };
        
        

    //Script para representar la fecha actual en el html , class .fecha-actual
    document.addEventListener('DOMContentLoaded', () => {
        const fechaSpan = document.querySelector('.fecha-actual');
        if (fechaSpan) {
            const hoy = new Date();
            const dia = String(hoy.getDate()).padStart(2, '0');
            const mes = String(hoy.getMonth() + 1).padStart(2, '0');
            const anio = hoy.getFullYear();
            fechaSpan.textContent = `Fecha: \${dia}/\${mes}/\${anio}`;
        }
    });
    document.addEventListener('DOMContentLoaded', () => {
        // Botón \"Presente\"
        document.getElementById('presente').addEventListener('click', () => {
            actualizarEstado('Presente', true); // Marca como \"Presente\" y guarda
            setTimeout(avanzarSiEsPosible, 1000); // Avanza al siguiente alumno después de 1 segundo
    });
        
    // Botón \"Ausente\"
    document.getElementById('ausente').addEventListener('click', () => {
        actualizarEstado('Ausente', true); // Marca como \"Ausente\" y guarda
        setTimeout(avanzarSiEsPosible, 1000); // Avanza al siguiente alumno después de 1 segundo
    });
        
    // Botón \"Media falta\"
    document.getElementById('mediafalta').addEventListener('click', () => {
        actualizarEstado('Media falta', true); // Marca como \"Media falta\" y guarda
        setTimeout(avanzarSiEsPosible, 1000); // Avanza al siguiente alumno después de 1 segundo
    });

    // Botón \"Justificada\"
    document.getElementById('justificada').addEventListener('click', () => {
        actualizarEstado('Justificada', false); // Marca como \"Justificada\" pero no guarda automáticamente
        document.getElementById('observacion').style.visibility = 'visible';
        document.getElementById('enviar').style.visibility = 'visible';
    });
     });
        
  
        

        
    function hideAsistencia(cursoId) {
        // oculta tabla cursada específica
        let cursadaTable = document.getElementById(`tablaAsistencia_\${cursoId}`);
        if (cursadaTable) {
            cursadaTable.style.display = 'none';
        }

        // muestra la tabla curso específica
        let cursoTable = document.getElementById(`tablaTecnicaturas`);
        if (cursoTable) {
            cursoTable.style.display = '';
        }

        // oculta el botón regresar-volver
        let backButton = document.getElementById('backButton');
        if (backButton) {
            backButton.style.display = 'none';
        }
    }

    let indiceActual = 0;  
    let ActivarEditar = false; 

    // Esta función muestra los datos del alumno en el panel
        let selectedCursoId = 1;  


    function ActivarEstadoEditar(){
        ActivarEditar = true;  
        console.log(\"ActivarEditar:\", ActivarEditar);  
    }
    function DesactivarEstadoEditar(){
        ActivarEditar = false;  
        console.log(\"ActivarEditar:\", ActivarEditar); 
    }
    // Función para mostrar el alumno
    function mostrarAlumno(index) {
        console.log(\"Llamando a mostrarAlumno con índice:\", index);
    
        if (index < 0 || index >= cursosData[selectedCursoId].cursadas.length) {
            console.error(\"Índice fuera de rango:\", index);
            return;
        }
    
        const alumno = cursosData[selectedCursoId].cursadas[index].alumno;
        const asistencias = cursosData[selectedCursoId].cursadas[index].asistencias;
    
        console.log(\"Mostrando alumno:\", alumno);
        console.log(\"Asistencias del alumno:\", asistencias);
    
        const alumnoNombreElemento = document.querySelector('.AlumnoNombre');
        const alumnoDniElemento = document.querySelector('.AlumnoDni');
        const spanEstado = document.querySelector('.estado-text');
        const observacionInput = document.getElementById('observacion-input');
    
        if (alumnoNombreElemento && alumnoDniElemento) {
            alumnoNombreElemento.textContent = `\${alumno.nombre} \${alumno.apellido}`;
            alumnoDniElemento.textContent = `DNI: \${alumno.dni}`;
        } else {
            console.error(\"No se pudieron encontrar los elementos para actualizar.\");
        }
    
        // Recupera la última asistencia del alumno
        const ultimaAsistencia = asistencias.length > 0 ? asistencias[asistencias.length - 1] : null;
    
        if (ultimaAsistencia) {
            spanEstado.textContent = ultimaAsistencia.asistencia;
            spanEstado.className = 'estado-text estado-' + ultimaAsistencia.asistencia.toLowerCase().replace(' ', '');
            observacionInput.value = ultimaAsistencia.observacion || '';
        } else {
            // Si no hay asistencias, restablece los valores por defecto
            spanEstado.textContent = 'No marcado';
            spanEstado.className = 'estado-text estado-neutral';
            observacionInput.value = '';
        }
    
        // Siempre oculta el campo de observaciones y el botón \"Guardar\"
        document.getElementById('observacion').style.visibility = 'hidden';
        document.getElementById('enviar').style.visibility = 'hidden';
    }

    // Función para avanzar al siguiente alumno
    function avanzarSiEsPosible() {
        if (!comprobarEdicion()) {
            cerrarPasarAsistenciaModal();
            return; 
        }
        
        if (indiceActual < cursosData[selectedCursoId].cursadas.length - 1) {
            // Avanza al siguiente alumno
            indiceActual++;
            mostrarAlumno(indiceActual);
        } else {
            // Si es el último alumno, cierra el modal después de 1 segundo
            setTimeout(() => {
                cerrarPasarAsistenciaModal();
            }, 1000);
        }
    }

    function retrocederAlumno() {
        if (!comprobarEdicion()) {
            cerrarPasarAsistenciaModal();
            return;
        }

        if (indiceActual > 0) {
            indiceActual--;
            mostrarAlumno(indiceActual);
        }
    }
    

    // Cargar el primer alumno al iniciar
    document.addEventListener('DOMContentLoaded', () => {
        mostrarAlumno(indiceActual);
    });

    // Asignar el evento al botón \"siguiente\"
    document.getElementById('siguiente').addEventListener('click', avanzarSiEsPosible);
    document.getElementById('anterior').addEventListener('click', retrocederAlumno);


    document.addEventListener('DOMContentLoaded', () => {
        mostrarAlumno(indiceActual);  // Cargar el primer alumno
    });
        
        
    function hideListaNueva(cursoId) {
        // Oculta ListaNueva
        let lista = document.getElementById('ListaNueva');
        if (lista) {
            lista.style.display = 'none';
        }
    
        
        let tablaPrincipal = document.getElementById('tablaTecnicaturas');
        if (tablaPrincipal) {
            tablaPrincipal.style.display = '';
        }
    
        // Ocultar el botón volver
        let backButton = document.getElementById('backButton');
        if (backButton) {
            backButton.style.display = 'none';
        }
    }
        

    function llenarTablaPorcentaje(cursoId) {
        const curso = cursosData[cursoId];


        if (!curso) {
            console.error('Curso no encontrado');
            return;
        }

        const tbody = document.querySelector('#EstadisticasModal tbody');
        tbody.innerHTML = ''; // Limpia la tabla

        const nombreCurso = curso.asignatura || 'Nombre no disponible';  
        const tecnicatura = curso.tecnicatura || '---';  
        const anio = curso.anio || '---';  
        const comision = curso.comision || '---'; 

        // Asignar datos al encabezado
        document.querySelector('.nombre-tecnicatura').textContent = tecnicatura;
        document.querySelector('.anio-comision').textContent = `Año: \${anio}° Comisión: \${comision}`;
        document.querySelector('.nombre-asignatura').textContent = nombreCurso;

        // Obtener la fecha actual
        const hoy = new Date();
        const dia = String(hoy.getDate()).padStart(2, '0');
        const mes = String(hoy.getMonth() + 1).padStart(2, '0');
        const anioFecha = hoy.getFullYear();
        const fechaActual = `Fecha: \${dia}/\${mes}/\${anioFecha}`;
        document.querySelector('.Fechadehoy').textContent = fechaActual;

        // 🔄 Pedir datos actualizados al backend
fetch(`estadisticas/\${cursoId}`)


            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la respuesta del servidor');
                }
                return response.json();
            })
            .then(data => {
                if (!data || data.length === 0) return;

                // Ya no sobrescribimos los valores de encabezado aquí

                data.forEach(cursada => {
                    const fila = document.createElement('tr');
                    fila.innerHTML = `
                        <td>\${cursada.nombre}</td>
                        <td>\${cursada.apellido}</td>
                        <td>\${cursada.dni}</td>
                        <td>\${cursada.estadisticas.presentes}</td>
                        <td>\${cursada.estadisticas.ausentes}</td>
                        <td>\${cursada.estadisticas.media_faltas}</td>
                        <td>\${cursada.estadisticas.justificadas}</td>
                        <td>\${cursada.estadisticas.total}</td>
                        <td>\${cursada.estadisticas.porcentaje_presente}%</td>
                        <td>\${cursada.estadisticas.porcentaje_ausente}%</td>
                        <td>\${cursada.estadisticas.porcentaje_justificada}%</td>
                    `;
                    tbody.appendChild(fila);
                });
            })
            .catch(error => {
                console.error('Error al cargar estadísticas:', error);
            });
    }






    function abrirPorcentaje() {
        const modal = document.getElementById('modalporcentaje');
        const lista = document.getElementById('ListaNueva');

        if (modal) modal.style.display = 'block';
        if (lista) lista.style.display = 'none';

        if (selectedCursoId !== undefined) {
            llenarTablaPorcentaje(selectedCursoId);
        }
    }


    function cerrarPorcentaje() {
        const modal = document.getElementById('modalporcentaje');
        const lista = document.getElementById('ListaNueva');

        if (modal) modal.style.display = 'none';
        if (lista) lista.style.display = 'block';
    }

    
    </script>

    ";
        // line 680
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Evaluar si `comId` está definido y no es nulo
            ";
        // line 683
        if ((array_key_exists("cursoId", $context) &&  !(null === (isset($context["cursoId"]) || array_key_exists("cursoId", $context) ? $context["cursoId"] : (function () { throw new RuntimeError('Variable "cursoId" does not exist.', 683, $this->source); })())))) {
            // line 684
            yield "                // Llamar a showCursada con los IDs de cursada y tecnicatura
                showCursoCursada(";
            // line 685
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cursoId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cursoId"]) || array_key_exists("cursoId", $context) ? $context["cursoId"] : (function () { throw new RuntimeError('Variable "cursoId" does not exist.', 685, $this->source); })()), "null")) : ("null")), "html", null, true);
            yield ");
            ";
        } else {
            // line 687
            yield "            ";
        }
        // line 688
        yield "
            ";
        // line 689
        if ((array_key_exists("cursoId2", $context) &&  !(null === (isset($context["cursoId2"]) || array_key_exists("cursoId2", $context) ? $context["cursoId2"] : (function () { throw new RuntimeError('Variable "cursoId2" does not exist.', 689, $this->source); })())))) {
            // line 690
            yield "                // Llamar a showCursada con los IDs de cursada y tecnicatura
                showAsistencia(";
            // line 691
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("cursoId2", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cursoId2"]) || array_key_exists("cursoId2", $context) ? $context["cursoId2"] : (function () { throw new RuntimeError('Variable "cursoId2" does not exist.', 691, $this->source); })()), "null")) : ("null")), "html", null, true);
            yield ");
            ";
        } else {
            // line 693
            yield "            ";
        }
        // line 694
        yield "        });
    </script>

    ";
        // line 698
        yield "    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            var userEmail = \"";
        // line 700
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 700, $this->source); })()), "user", [], "any", false, false, false, 700), "email", [], "any", false, false, false, 700), "html", null, true);
        yield "\";  // aqui obtenemos el correo del usuario logueado
            var userDni = userEmail.split('@')[0];  // Extraer el DNI antes del '@'
            
            // Llamar a la función de filtrado
            if (userEmail !== 'admin@admin.i12') {
                filterTableByDni(userDni);
            }
        });

        function filterTableByDni(dni) {
            // Obtener todas las filas de la tabla
            var rows = document.querySelectorAll(\"#tablaTecnicaturas tbody tr\");
            
            // Recorrer cada fila y mostrar/ocultar según el DNI
            rows.forEach(function(row) {
                var docenteData = row.querySelector('td:first-child').innerText;  // Obtener el texto del primer <td> (Docente)
                if (docenteData.includes(dni)) {
                    row.style.display = '';  // Mostrar la fila
                } else {
                    row.style.display = 'none';  // Ocultar la fila
                }
            });
        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 728
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

        // line 729
        yield "    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Central Docente/s</h1>
        <table class=\"tabla_home\" id=\"tablaTecnicaturas\" border=\"1\">
            <thead>
                <tr>
                    <th>Docente</th>
                    <th>Asignatura</th>
                    <th>Comision</th>
                    <th>Tecnicatura</th>
                    <th>Asistencias</th>
                    <th>Notas</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 743
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursada_docentes"]) || array_key_exists("cursada_docentes", $context) ? $context["cursada_docentes"] : (function () { throw new RuntimeError('Variable "cursada_docentes" does not exist.', 743, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cursada_docente"]) {
            // line 744
            yield "                <tr>
                    <td>";
            // line 745
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cursada_docente"], "html", null, true);
            yield "</td>
                    <td>";
            // line 746
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada_docente"], "curso", [], "any", false, false, false, 746), "asignatura", [], "any", false, false, false, 746), "nombre", [], "any", false, false, false, 746), "html", null, true);
            yield "</td>
                    <td>";
            // line 747
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada_docente"], "curso", [], "any", false, false, false, 747), "comision", [], "any", false, false, false, 747), "html", null, true);
            yield "</td>
                    <td>";
            // line 748
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada_docente"], "curso", [], "any", false, false, false, 748), "comision", [], "any", false, false, false, 748), "tecnicatura", [], "any", false, false, false, 748), "html", null, true);
            yield "</td>
                    <td>
                        <button onclick=\"showListaNueva(";
            // line 750
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada_docente"], "curso", [], "any", false, false, false, 750), "id", [], "any", false, false, false, 750), "html", null, true);
            yield ")\" class=\"btn-primary\">Asistencia</button>
                      
                        
                    </td>
                    <td>
                        <button onclick=\"showCursoCursada(";
            // line 755
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada_docente"], "curso", [], "any", false, false, false, 755), "id", [], "any", false, false, false, 755), "html", null, true);
            yield ")\" class=\"btn-primary\">Notas</button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 762
        if (!$context['_iterated']) {
            // line 759
            yield "                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cursada_docente'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 763
        yield "            </tbody>
        </table>



        ";
        // line 768
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new RuntimeError('Variable "cursos" does not exist.', 768, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 769
            yield "            <table id=\"tablaCursoCursada_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 769), "html", null, true);
            yield "\" class=\"tabla_curso_cursada\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"4\">";
            // line 772
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 772), "tecnicatura", [], "any", false, false, false, 772), "html", null, true);
            yield " -Cursadas de Curso-</th>
                        <th colspan=\"3\"> Año: ";
            // line 773
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 773), "anio", [], "any", false, false, false, 773), "html", null, true);
            yield " Comision: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 773), "comision", [], "any", false, false, false, 773), "html", null, true);
            yield "</th>
                    </tr>
                    <tr>
                        <th>Asignatura :</th>
                        <th colspan=\"6\"> ";
            // line 777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "asignatura", [], "any", false, false, false, 777), "nombre", [], "any", false, false, false, 777), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 777), "ciclolectivo", [], "any", false, false, false, 777), "html", null, true);
            yield "</th>
                    </tr>
                    <tr>    
                        <th>Curso</th>
                        <th>Cursada</th>
                        <th>N1</th>
                        <th>R1</th>
                        <th>N2</th>
                        <th>R2</th>
                        <th>Condicion</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 790
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "cursadas", [], "any", false, false, false, 790));
            foreach ($context['_seq'] as $context["_key"] => $context["cursada"]) {
                // line 791
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "curso", [], "any", false, false, false, 791), "comision", [], "any", false, false, false, 791), "ciclolectivo", [], "any", false, false, false, 791) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 791), "ciclolectivo", [], "any", false, false, false, 791))) {
                    // line 792
                    yield "                            <tr>
                                <td>";
                    // line 793
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "comision", [], "any", false, false, false, 793), "ciclolectivo", [], "any", false, false, false, 793), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 794
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "alumno", [], "any", false, false, false, 794), "html", null, true);
                    yield "</td>
                                <td>
                                    ";
                    // line 796
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 796), "parcial", [], "any", false, false, false, 796), "html", null, true);
                    yield "
                                    <button 
                                        onclick=\"openModal1(";
                    // line 798
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 798), "id", [], "any", false, false, false, 798), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 798), "html", null, true);
                    yield ", 'parcial')\" 
                                        ";
                    // line 799
                    if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 799), "parcial", [], "any", false, false, false, 799))) {
                        yield "style=\"display: none;\"";
                    }
                    // line 800
                    yield "                                    >
                                        Editar
                                    </button>
                                </td>
                                <td>
                                    ";
                    // line 805
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 805), "recuperatorio1", [], "any", false, false, false, 805), "html", null, true);
                    yield "
                                    <button 
                                        onclick=\"openModal1(";
                    // line 807
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 807), "id", [], "any", false, false, false, 807), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 807), "html", null, true);
                    yield ", 'recuperatorio1')\" 
                                        ";
                    // line 808
                    if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 808), "recuperatorio1", [], "any", false, false, false, 808))) {
                        yield "style=\"display: none;\"";
                    }
                    // line 809
                    yield "                                    >
                                        Editar
                                    </button>
                                </td>
                                <td>
                                    ";
                    // line 814
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 814), "parcial2", [], "any", false, false, false, 814), "html", null, true);
                    yield "
                                    <button 
                                        onclick=\"openModal1(";
                    // line 816
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 816), "id", [], "any", false, false, false, 816), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 816), "html", null, true);
                    yield ", 'parcial2')\" 
                                        ";
                    // line 817
                    if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 817), "parcial2", [], "any", false, false, false, 817))) {
                        yield "style=\"display: none;\"";
                    }
                    // line 818
                    yield "                                    >
                                        Editar
                                    </button>
                                </td>
                                <td>
                                    ";
                    // line 823
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 823), "recuperatorio2", [], "any", false, false, false, 823), "html", null, true);
                    yield "
                                    <button 
                                        onclick=\"openModal1(";
                    // line 825
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 825), "id", [], "any", false, false, false, 825), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 825), "html", null, true);
                    yield ", 'recuperatorio2')\" 
                                        ";
                    // line 826
                    if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "getNotaId", [], "method", false, false, false, 826), "recuperatorio2", [], "any", false, false, false, 826))) {
                        yield "style=\"display: none;\"";
                    }
                    // line 827
                    yield "                                    >
                                        Editar
                                    </button>
                                </td>
                                <td>";
                    // line 831
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cursada"], "condicion", [], "any", false, false, false, 831), "html", null, true);
                    yield "</td>
                            </tr>
                        ";
                }
                // line 834
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cursada'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 835
            yield "                </tbody>
            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['curso'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 838
        yield "


    <script>
       
        
        document.addEventListener('DOMContentLoaded', function() {
            // Generar la fecha actual
            const today = new Date();
            const day = String(today.getDate()).padStart(2, '0');
            const month = String(today.getMonth() + 1).padStart(2, '0');
            const year = today.getFullYear();
            const formattedToday = `\${day}-\${month}-\${year}`; // Esta es la fecha formateada
        
            // Comparar la fecha y actualizar la tabla
            const fechaActual = formattedToday;  // Usa formattedToday aquí
        
            document.querySelectorAll('tbody').forEach(tbody => {
                tbody.querySelectorAll('tr').forEach(row => {
                    const fechaAsistencia = row.querySelector('.fecha-asistencia');
                    
                    if (fechaAsistencia) {
                        const asistenciaFecha = fechaAsistencia.textContent.trim();
                        
                        // Verificar si las fechas coinciden
                        if (asistenciaFecha !== fechaActual) {
                            row.style.display = 'none'; // Oculta las filas que no coinciden con la fecha actual
                        } else {
                            row.style.display = ''; // Muestra las filas que coinciden con la fecha actual
                        }
                    }
                });
            });
        });

    </script>
    <!-- CAMPO DE LA NUEVA LISTA //////////////////////////////////// -->
    
    <div class=\"curso-container\" id=\"ListaNueva\"style=\"display: none;\">



    <!-- HTML DE MODALIDAD -->
    <!-- Botón que muestra/oculta el bloque -->
        <div class=\"alumnoeditar\" style=\"text-align: center; margin-bottom: 10px;\">
            <button id=\"toggleModalidadBtn\">Mostrar modalidad</button>
        </div>
    <!-- Div modalidad oculto por defecto -->
    <div class=\"ModalidadAsistencia\" id=\"modalidadPanel\">
        <div class=\"titulo-modalidad\">Modalidad de la clase:</div>
        <div class=\"contenedor-radios\">
            <label class=\"radio-opcion\">
                <input type=\"radio\" name=\"modalidad\" value=\"presencial\" checked>
                Presencial
            </label>
            <label class=\"radio-opcion\">
                <input type=\"radio\" name=\"modalidad\" value=\"remoto\">
                Remoto
            </label>
        </div>
        <div class=\"campo-observaciones\">
            <input type=\"text\" placeholder=\"Observaciones...\" id=\"observacion-Modalidad\" class=\"observacion-inputModalidad\" />
        </div>
        <div class=\"alumnoeditar\">
            <button id=\"guardarModalidadBtn\">Guardar</button>
        </div>
    </div>
        <!-- Título del curso -->
        <!-- <h1 class=\"curso-titulo\">Nombre del Curso</h1> -->
    <div class=\"curso-info\">

        <h2 class=\"curso-subtitulo\">Asignatura: <span>Asignatura Nombre</span></h2>
        <h3 class=\"curso-subtitulo\">Año: <span>--</span> | Comisión: <span>--</span></h3>
        <div class=\"contenedor-fecha\">
                 <span class=\"fecha-actual\">Fecha: 12/05/2025</span>
            </div>
    </div>

        <!-- Contenedor de botón y fecha alineados -->
        <div class=\"fecha-actual-wrapper\">
            <button class=\"btn-pasar-lista\" onclick=\"abrirPorcentaje()\">
                Ver asistencias
            </button>

            <button class=\"btn-pasar-lista\" onclick=\"abrirPasarAsistenciaModal(); ActivarEstadoAsistencia();\">
                📋 Pasar Lista
            </button>
        </div>

        <!-- Buscar -->
        <div class=\"buscador-alumno\">
            <label for=\"dni-buscar\">Buscar alumno:</label>
            <div class=\"input-group\">
                <input type=\"text\" id=\"nombre-buscar\" class=\"form-control\" placeholder=\"Por Nombre...\" aria-label=\"Buscar por Nombre\">
                <input type=\"text\" id=\"apellido-buscar\" class=\"form-control\" placeholder=\"Por Apellido...\" aria-label=\"Buscar por Apellido\">
                <input type=\"text\" id=\"dni-buscar\" class=\"form-control\" placeholder=\"Por DNI...\" aria-label=\"Buscar por DNI\">
            </div>
        </div>

        <!-- Tabla de alumnos -->
        <div class=\"tabla-alumnos-wrapper\">
            <table class=\"curso-tabla\">
                <thead>
                    <tr>
                        <th class=\"col-nombre\">Nombre</th>
                        <th class=\"col-apellido\">Apellido</th>
                        <th class=\"col-dni\">DNI</th>
                        <th class=\"col-asistencia\">Asistencia</th>
                        <th class=\"col-observaciones\">Observaciones</th>
                        <th class=\"col-editar\">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=\"fila-alumno\">
                        <td class=\"alumno-nombre\">Juan</td>
                        <td class=\"alumno-apellido\">Pérez</td>
                        <td class=\"alumno-dni\">12345678</td>
                        <td class=\"alumno-asistencia\">
                            <span class=\"estado-asistencia presente\"></span>
                        </td>
                    </tr>
                    <tr class=\"fila-alumno\">
                        <td class=\"alumno-nombre\"></td>
                        <td class=\"alumno-apellido\"></td>
                        <td class=\"alumno-dni\"></td>
                        <td class=\"alumno-asistencia\">
                            <span class=\"estado-asistencia ausente\"></span>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"6\" class=\"total-presentes\">
                            Alumnos presentes: 1
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

          <button class=\"btn-pasar-lista\" onclick=\"hideListaNueva()\">
        Volver
    </button>
    </div>
  

    <!-- CAMPO DE LA NUEVA LISTA //////////////////////////////////// -->

        <!-- TABLA DE PORCENTAJE /////// -->
        <div id=\"modalporcentaje\" style=\"display: none;\" >
            <table id=\"EstadisticasModal\" class=\"tablillacursada\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"6\" class=\"nombre-tecnicatura\">Tecnicatura en Informática - Cursadas de Curso -</th>
                        <th colspan=\"2\" class=\"anio-comision\">Año: 2° Comision: A</th>
                        <th colspan=\"2\" class=\"Fechadehoy\"></th>
                    </tr>
                    <tr>
                        <th colspan=\"2\" class=\"asignatura\">
                            Asignatura:
                            <p id=\"fechatablilla\" style=\"margin: 0;\">Abril 2025</p>
                        </th>
                        <th colspan=\"6\" class=\"nombre-asignatura\">Programación II - Ciclo Lectivo 2025</th>
                        <th colspan=\"6\" class=\"titulo-porcentaje\">Porcentaje de asistencia</th>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dni</th>
                        <th>Presente</th>
                        <th>Ausente</th>
                        <th>Media falta</th>
                        <th>Justificada</th>
                        <th>Total Asistencias</th>
                        <th>Presente</th>
                        <th>Ausente</th>
                        <th>justificada</th>
                    </tr>
                </thead>
                <tbody>
               
                </tbody>
            </table>
            
                    <!-- Contenedor principal -->
            <div class=\"contenedor-acciones\">

                <!-- Botón a la izquierda -->
                <div class=\"accion-izquierda\">
                    <button class=\"botondeporcentaje\" onclick=\"cerrarPorcentaje()\">
                        Regresar a la lista
                    </button>
<a id=\"linkListaPorDia\" href=\"#\" class=\"botondeporcentaje\">Lista por día</a>



                </div>

                <!-- Caja centrada para descargar planilla -->
                <div class=\"accion-centro\">
                    <div class=\"descarga-planilla\">
                        <h3>Descargar planilla como:</h3>
                        <div class=\"botones-descarga\">
                            <button class=\"boton-excel\" onclick=\"DescargarExcel()\">Excel</button>
                            <button class=\"boton-pdf\" onclick=\"DescargarPdf()\">PDF</button>
                        </div>
                    </div>
                </div>

            </div>



            
                
        </div>
        <!-- TABLA DE PORCENTAJE /////// -->




        ";
        // line 1060
        yield "        <script>
            function openModal3(cursoId, cursadaId, asistenciaId) {
                // Generar la URL con los IDs correctos
                const url = \"";
        // line 1063
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_asistencias", ["id" => "__id__", "curso_id" => "__cursoId__"]), "html", null, true);
        yield "\"
                    .replace('__id__', asistenciaId)
                    .replace('__cursoId__', cursoId);
                // Realizar la solicitud fetch
                fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalBody-1').innerHTML = html;
                        document.getElementById('Modal1').style.display = 'block';
                            //asistencia_asistencia    asistencia_fecha       asistencia_observacion     asistencia_cursada

                        // Configurar la fecha actual en los campos de mes, día y año
                        const today = new Date();
                        const dayInput = document.querySelector('#asistencia_fecha_day');
                        const monthInput = document.querySelector('#asistencia_fecha_month');
                        const yearInput = document.querySelector('#asistencia_fecha_year');

                        if (dayInput) {
                            dayInput.value = today.getDate();
                        }
                        if (monthInput) {
                            monthInput.value = today.getMonth() + 1;
                        }
                        if (yearInput) {
                            yearInput.value = today.getFullYear();
                        }


                        const cursadaInput = document.getElementById('asistencia_cursada');
                        const labelCursada = document.querySelector('label[for=\"asistencia_cursada\"]');
                        if (labelCursada) {

                            //labelCursada.style.display = 'none';
                        }
                        if (cursadaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                            cursadaInput.value = cursadaId;
                            cursadaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                            cursadaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                        }
                
                    })  
                    .catch(error => console.error('Error al cargar el formulario de edición:', error));
            }

        </script>



        ";
        // line 1112
        yield "

        <script>
            function openModal1(notaId, cursoId, campo) {
                // Generar la URL con los IDs correctos
                const url = \"";
        // line 1117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_nota", ["id" => "__id__", "curso_id" => "__cursoId__"]), "html", null, true);
        yield "\"
                    .replace('__id__', notaId)
                    .replace('__cursoId__', cursoId);
                // Realizar la solicitud fetch
                fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalBody-1').innerHTML = html;
                        document.getElementById('Modal1').style.display = 'block';
                        
                        // Ocultar campos según el parámetro 'campo'
                        const campos = ['parcial', 'recuperatorio1', 'parcial2', 'recuperatorio2'];
                        campos.forEach(c => {
                            const label = document.querySelector(`label[for=\"nota_\${c}\"]`);
                            const input = document.getElementById(`nota_\${c}`);
                            if (c !== campo) {
                                if (label) label.style.display = 'none';
                                if (input) input.style.display = 'none';
                            }
                        });
                    })  
                    .catch(error => console.error('Error al cargar el formulario de edición:', error));
            }

            function closeModal1() {
                document.getElementById('Modal1').style.display = 'none';
                document.getElementById('modalBody-1').innerHTML = ''; // Restablecer el contenido del modal
            }

           let asistenciasMarcadas = {};

           document.addEventListener('keydown', function (event) {
            // Solo continua si alguna de las dos variables está activada
            if (!VistaAsistenciaActiva && !ActivarEditar) return;
        
            switch (event.key) {
                case 'ArrowLeft': // Flecha izquierda para retroceder al alumno anterior
                    document.getElementById('anterior').click();
                    break;
        
                case 'ArrowRight': // Flecha derecha para avanzar al siguiente alumno
                    avanzarSiEsPosible();
                    break;
        
                case 'F1': // F1 para marcar como \"Presente\"
                    event.preventDefault();
                    if (VistaAsistenciaActiva || ActivarEditar) { 
                        actualizarEstado('Presente', true); 
                        setTimeout(() => {
                            if (!ActivarEditar) {  
                                avanzarSiEsPosible();  
                            } else {
                                ActivarEditar = false;  
                                cerrarPasarAsistenciaModal(); 
                                console.log('ActivarEditar:', ActivarEditar); 
                            }
                        }, 1000);
                    }
                    break;
        
                case 'F2': // F2 para marcar como \"Ausente\"
                    event.preventDefault();
                    if (VistaAsistenciaActiva || ActivarEditar) {  
                        actualizarEstado('Ausente', true);  
                        setTimeout(() => {
                            if (!ActivarEditar) {  
                                avanzarSiEsPosible();  // Avanza al siguiente alumno
                            } else {
                                ActivarEditar = false;  // Cambia ActivarEditar a false
                                cerrarPasarAsistenciaModal();  
                            }
                        }, 1000);
                    }
                    break;
        
                case 'F3': // F3 para marcar como \"Media falta\"
                    event.preventDefault();
                    if (VistaAsistenciaActiva || ActivarEditar) {  // Verifica si alguna está activa
                        actualizarEstado('Media falta', true);  // Actualiza el estado a 'Media falta' y guarda
                        setTimeout(() => {
                            if (!ActivarEditar) {  // Verifica si ActivarEditar es false
                                avanzarSiEsPosible();  // Avanza al siguiente alumno
                            } else {
                                ActivarEditar = false;  // Cambia ActivarEditar a false
                                cerrarPasarAsistenciaModal();  // Cierra el modal
                            }
                        }, 1000);
                    }
                    break;
        
                case 'F4': // F4 para marcar como \"Justificada\"
                    event.preventDefault();
                    if (VistaAsistenciaActiva || ActivarEditar) {  // Verifica si alguna está activa
                        actualizarEstado('Justificada', false); // No guarda automáticamente
                        document.getElementById('observacion').style.visibility = 'visible';
                        document.getElementById('enviar').style.visibility = 'visible';
                    }
                    break;
            }
        });
        


    // Función para actualizar el estado del alumno
    function actualizarEstado(estado, guardar = true) {
        const spanEstado = document.querySelector('.estado-text');
        spanEstado.textContent = estado;
        spanEstado.className = 'estado-text estado-' + estado.toLowerCase().replace(' ', '');

        const alumnoId = cursosData[selectedCursoId].cursadas[indiceActual].alumno.id;
        let observacion = document.getElementById('observacion-input').value || '';

        if (estado === 'Justificada') {
            document.getElementById('observacion').style.visibility = 'visible';
            document.getElementById('enviar').style.visibility = 'visible';
        } else {
            document.getElementById('observacion').style.visibility = 'hidden';
            document.getElementById('enviar').style.visibility = 'hidden';
            observacion = '';
        }

        // Guarda el estado y la observación en asistenciasMarcadas
        asistenciasMarcadas[alumnoId] = {
            cursada_id: cursosData[selectedCursoId].cursadas[indiceActual].id,
            fecha: new Date().toISOString().split('T')[0], // Fecha actual en formato yyyy-mm-dd
            estado: estado,
            observacion: observacion
        };

        if (guardar) {
            guardarAsistencias();
            const confirmacion = document.getElementById('confirmacion');
            confirmacion.style.visibility = 'visible';
            confirmacion.textContent = '✅ Datos guardados correctamente';
            setTimeout(() => {
                confirmacion.style.visibility = 'hidden';
            }, 2000);
        }

        // Actualiza el contador de alumnos presentes
        actualizarContadorPresentes();
    }

    // Función para guardar las asistencias marcadas
    function obtenerFechaLocal() {
    const hoy = new Date();
    const yyyy = hoy.getFullYear();
    const mm = String(hoy.getMonth() + 1).padStart(2, '0');
    const dd = String(hoy.getDate()).padStart(2, '0');
    return `\${yyyy}-\${mm}-\${dd}`;
}

// Ruta para obtener calendario del día, esperando un parámetro cursoId que se concatena en JS
    const rutaBaseCalendarioClaseDelDia = \"";
        // line 1270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_calendario_clase_del_dia", ["cursoId" => 0]), 0,  -1), "html", null, true);
        yield "\"; 
    // Explicación: path('api_calendario_clase_del_dia', {'cursoId': 0}) da '/api/calendario-clase-del-dia/0'
    // con slice(0, -1) quitamos el último caracter '0', quedando '/api/calendario-clase-del-dia/'

    // Ruta para actualizar lista alumnos (similar al anterior)
    const rutaBaseActualizarListaAlumnos = \"";
        // line 1275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualizar_lista_alumnos", ["curso_id" => 0]), 0,  -1), "html", null, true);
        yield "\";

    // Ruta completa para guardar asistencia (no necesita concatenar)
    const rutaGuardarAsistencia = \"";
        // line 1278
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guardar_asistencia");
        yield "\";

function guardarAsistencias() {
    const urlCalendario = rutaBaseCalendarioClaseDelDia + selectedCursoId;
    const urlGuardar = rutaGuardarAsistencia;

    fetch(urlCalendario)
        .then(response => {
            if (!response.ok) throw new Error('No se encontró CalendarioClase para este curso hoy');
            return response.json();
        })
        .then(data => {
            const calendarioClaseId = data.id;

            const datosAEnviar = Object.values(asistenciasMarcadas).map(asistencia => ({
                cursada_id: asistencia.cursada_id,
                calendarioClase_id: calendarioClaseId,
                estado: asistencia.estado,
                observacion: asistencia.observacion || null
            }));

            return fetch(urlGuardar, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(datosAEnviar),
            });
        })
        .then(response => {
            if (!response.ok) return response.text().then(text => { throw new Error(text); });
            console.log('✅ Asistencias guardadas correctamente');

            return fetch(rutaBaseActualizarListaAlumnos + selectedCursoId);
        })
        .then(response => {
            if (!response.ok) throw new Error('Error al obtener los datos actualizados');
            return response.json();
        })
        .then(data => {
            console.log(\"📅 Fecha del backend:\", data.fecha_backend);

            cursosData[selectedCursoId].cursadas = data.data.map(cursada => ({
                id: cursada.id,
                alumno: {
                    id: cursada.id,
                    nombre: cursada.nombre,
                    apellido: cursada.apellido,
                    dni: cursada.dni,
                },
                asistencias: [{
                    asistencia: cursada.asistencia,
                    observacion: cursada.observacion,
                }],
            }));

            const tbody = document.querySelector('.curso-tabla tbody');
            tbody.innerHTML = '';

            data.data.forEach(alumno => {
                const row = document.createElement('tr');
                row.classList.add('fila-alumno');
                row.innerHTML = `
                    <td class=\"alumno-nombre\">\${alumno.nombre}</td>
                    <td class=\"alumno-apellido\">\${alumno.apellido}</td>
                    <td class=\"alumno-dni\">\${alumno.dni}</td>
                    <td class=\"alumno-asistencia\">
                        <span class=\"estado-asistencia \${alumno.asistencia?.toLowerCase() || ''}\">
                            \${alumno.asistencia || ''}
                        </span>
                    </td>
                    <td class=\"alumno-observacion\">\${alumno.observacion || ''}</td>
                    <td class=\"alumnoeditar\">
                        <button onclick=\"ActivarEstadoEditar();editarAsistencia(\${selectedCursoId}, \${alumno.id})\">Editar</button>
                    </td>
                `;
                tbody.appendChild(row);
            });

            actualizarContadorPresentes();
        })
        .catch(error => console.error(\"❌ Error en el flujo de guardar asistencias:\", error));
}





    function actualizarContadorPresentes() {
        const filas = document.querySelectorAll('.curso-tabla tbody .fila-alumno');
        let presentes = 0;

        filas.forEach(fila => {
            const estadoElemento = fila.querySelector('.estado-asistencia');
            if (estadoElemento) {
                const estado = estadoElemento.textContent.trim().toLowerCase();
                if (estado === 'presente') {
                    presentes++;
                }
            }
        });

        const totalPresentes = document.querySelector('.total-presentes');
        if (totalPresentes) {
            totalPresentes.textContent = `Alumnos presentes: \${presentes} + \${mediaFaltas}`;
        }
    }
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('enviar').addEventListener('click', () => {
            actualizarEstado('Justificada', true); // Actualiza el estado a \"Justificada\" y guarda
            setTimeout(() => {
                if (!ActivarEditar) {  // Verifica si ActivarEditar es false
                    avanzarSiEsPosible();  // Avanza al siguiente alumno
                } else {
                    cerrarPasarAsistenciaModal();  // Cierra el modal
                    ActivarEditar = false;  // Cambia ActivarEditar a false
                    console.log('ActivarEditar desactivado:', ActivarEditar);  // Verifica el valor de ActivarEditar
                }
            }, 1000);
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const fechaActualElemento = document.getElementById('fecha-actual');
        if (fechaActualElemento) {
            const hoy = new Date();
            const dia = String(hoy.getDate()).padStart(2, '0');
            const mes = String(hoy.getMonth() + 1).padStart(2, '0');
            const anio = hoy.getFullYear();
            fechaActualElemento.textContent = `Fecha: \${dia}/\${mes}/\${anio}`;
        }
    });



    document.addEventListener('DOMContentLoaded', () => {
        // Selecciona los campos de búsqueda
        const dniBuscar = document.getElementById('dni-buscar');
        const nombreBuscar = document.getElementById('nombre-buscar');
        const apellidoBuscar = document.getElementById('apellido-buscar');

        // Agrega eventos de entrada (input) a cada campo
        dniBuscar.addEventListener('input', filtrarAlumnos);
        nombreBuscar.addEventListener('input', filtrarAlumnos);
        apellidoBuscar.addEventListener('input', filtrarAlumnos);

        function filtrarAlumnos() {
            // Obtén los valores de los campos de búsqueda
            const dniValor = dniBuscar.value.toLowerCase();
            const nombreValor = nombreBuscar.value.toLowerCase();
            const apellidoValor = apellidoBuscar.value.toLowerCase();

            // Selecciona todas las filas de la tabla de alumnos
            const filas = document.querySelectorAll('.curso-tabla tbody .fila-alumno');

            // Itera sobre cada fila y verifica si coincide con los criterios de búsqueda
            filas.forEach(fila => {
                const dni = fila.querySelector('.alumno-dni').textContent.toLowerCase();
                const nombre = fila.querySelector('.alumno-nombre').textContent.toLowerCase();
                const apellido = fila.querySelector('.alumno-apellido').textContent.toLowerCase();

                // Verifica si la fila coincide con los valores de búsqueda
                if (
                    (dni.includes(dniValor) || dniValor === '') &&
                    (nombre.includes(nombreValor) || nombreValor === '') &&
                    (apellido.includes(apellidoValor) || apellidoValor === '')
                ) {
                    fila.style.display = ''; // Muestra la fila si coincide
                } else {
                    fila.style.display = 'none'; // Oculta la fila si no coincide
                }
            });
        }
    });

    function comprobarEdicion() {
        if (ActivarEditar) {
            return false;  // Impide que el cambio de estado ocurra
        }
        return true;  // Permite el cambio de estado
    }
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('toggleModalidadBtn');
    const panel = document.getElementById('modalidadPanel');
    const guardarBtn = document.getElementById('guardarModalidadBtn');

    const selectedCursoId = window.selectedCursoId || 1;

    function actualizarTextoBoton() {
        const seleccionado = document.querySelector('input[name=\"modalidad\"]:checked');
        const modalidad = seleccionado ? seleccionado.value : 'Ninguna';
        btn.textContent = `Modalidad: \${modalidad.charAt(0).toUpperCase() + modalidad.slice(1)}`;
        console.log(`Modalidad seleccionada: \${modalidad}`);
    }

    function obtenerFechaActualFormatoISO() {
        const hoy = new Date();
        const anio = hoy.getFullYear();
        const mes = String(hoy.getMonth() + 1).padStart(2, '0');
        const dia = String(hoy.getDate()).padStart(2, '0');
        return `\${anio}-\${mes}-\${dia}`;
    }

    if (btn && panel) {
        btn.addEventListener('click', () => {
            panel.classList.toggle('abierto');
            if (panel.classList.contains('abierto')) {
                btn.textContent = 'Ocultar modalidad';
            } else {
                actualizarTextoBoton();
            }
        });
    }

    if (guardarBtn && panel && btn) {
        guardarBtn.addEventListener('click', () => {
            const seleccionado = document.querySelector('input[name=\"modalidad\"]:checked');
            const modalidad = seleccionado ? seleccionado.value : null;
            const observacion = document.getElementById('observacion-Modalidad').value.trim();
            const fecha = obtenerFechaActualFormatoISO();

            if (!modalidad) {
                alert('Por favor selecciona una modalidad');
                return;
            }

            // Acá podrías imprimir los datos en consola o usarlos para algo local
            console.log('Modalidad:', modalidad);
            console.log('Observación:', observacion);
            console.log('Fecha:', fecha);
            console.log('Curso ID:', selectedCursoId);

            // Cierra el panel y actualiza el botón
            panel.classList.remove('abierto');
            actualizarTextoBoton();
        });
    }
});



function obtenerFechaLocal() {
  const hoy = new Date();
  const yyyy = hoy.getFullYear();
  const mm = String(hoy.getMonth() + 1).padStart(2, '0'); // Mes empieza en 0
  const dd = String(hoy.getDate()).padStart(2, '0');
  return `\${yyyy}-\${mm}-\${dd}`;
}

document.getElementById('guardarModalidadBtn').addEventListener('click', () => {
  // Obtener modalidad seleccionada y convertir a id
  const modalidadTexto = document.querySelector('input[name=\"modalidad\"]:checked').value;
  const modalidadId = modalidadTexto === 'presencial' ? 1 : 2;

  // Obtener observacion (puede ser vacía)
  const observacion = document.getElementById('observacion-Modalidad').value.trim();

  // Variable que ya tenés con el curso seleccionado
  const cursoId = selectedCursoId;

  // Armar el cuerpo para enviar con fecha local
  const data = {
    modalidad: modalidadId,
    curso: cursoId,
    observacion: observacion || null,
    fecha: obtenerFechaLocal() // aquí pasamos la fecha local en formato YYYY-MM-DD
  };

  // Enviar la solicitud POST a Symfony
fetch('newcalendario', {

    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-Requested-With': 'XMLHttpRequest'  // para que Symfony detecte que es AJAX
    },
    body: JSON.stringify(data),
  })
  .then(response => {
    if (!response.ok) throw new Error('Error en la respuesta');
    return response.json();
  })
  .then(json => {
    console.log('Guardado con éxito:', json);
    ModalidadOpen = true;
    // acá podés mostrar un mensaje al usuario, limpiar campos o actualizar UI
  })
  .catch(err => {
    console.error('Error al guardar:', err);
    // mostrar mensaje de error en UI si querés
  });
});
//

        </script>

        <!-- Modal1 para asignar notas a las materias de un docente!!!-->
        <div id=\"Modal1\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content21\">
                    <span class=\"close\" onclick=\"closeModal1()\">&times;</span>
                    <div id=\"modalBody-1\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>

        <!-- Modal2 para asignar Asistencias!!!-->
        <div id=\"Modal2\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content21\">
                    <span class=\"close\" onclick=\"closeModal2()\">&times;</span>
                    <div id=\"modalBody-2\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>
           <div id=\"spa-overlay\"></div>
    <div id=\"spa-content\">
    </div>




        ";
        // line 1599
        yield "        <div id=\"spa-overlay\" style=\"display:none; \"></div>
        
        <div id=\"PasarAsistenciaModal\" class=\"AsistenciaModal1\" style=\"display: none;\">
            <div id=\"alumno-container\">
                <div class=\"alumno-card\">
                    <div class=\"cerrar\" id=\"cerrar\" onclick= \"cerrarPasarAsistenciaModal()\">X</div>
                    <div class=\"fecha-actual\" id=\"fecha-actual\"></div>
                    
                    <h2 class=\"AlumnoNombre\">Nombre Apellido</h2>
                    <p class=\"AlumnoDni\">DNI: 12345678</p>
                    <p id=\"estado\">
                        Estado: <span class=\"estado-text estado-neutral\">No marcado</span>
                    </p>
                    <p id=\"observacion\" style=\"visibility: hidden;\">
                        Observación: <input type=\"text\" id=\"observacion-input\" placeholder=\"Completar...\">
                    </p>
                    <button id=\"enviar\" style=\"visibility: hidden;\" class=\"btn btn-primary mt-2\">Guardar</button>
                    <p id=\"confirmacion\" style=\"visibility: hidden; color: green; margin-top: 10px;\">
                        ✅ Datos guardados correctamente
                    </p>
                </div>
            </div>
        
            <div class=\"botones mt-3\">
                <button id=\"anterior\">⬅️</button>
                <button id=\"presente\">✅ Presente (F1)</button>
                <button id=\"ausente\">❌ Ausente (F2)</button>
                <button id=\"mediafalta\">⏳ Media falta (F3)</button>
                <button id=\"justificada\">📄✅ Justificada (F4)</button>
                <button id=\"siguiente\">➡️</button>
            </div>
        </div>



        <button id=\"backButton\" style=\"display: none;\" class=\"btn-primary\">VOLVER</button>
    
   
    
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
        return "vistasdocente/index.html.twig";
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
        return array (  2077 => 1599,  1754 => 1278,  1748 => 1275,  1740 => 1270,  1584 => 1117,  1577 => 1112,  1526 => 1063,  1521 => 1060,  1298 => 838,  1290 => 835,  1284 => 834,  1278 => 831,  1272 => 827,  1268 => 826,  1262 => 825,  1257 => 823,  1250 => 818,  1246 => 817,  1240 => 816,  1235 => 814,  1228 => 809,  1224 => 808,  1218 => 807,  1213 => 805,  1206 => 800,  1202 => 799,  1196 => 798,  1191 => 796,  1186 => 794,  1182 => 793,  1179 => 792,  1176 => 791,  1172 => 790,  1154 => 777,  1145 => 773,  1141 => 772,  1134 => 769,  1130 => 768,  1123 => 763,  1114 => 759,  1112 => 762,  1104 => 755,  1096 => 750,  1091 => 748,  1087 => 747,  1083 => 746,  1079 => 745,  1076 => 744,  1071 => 743,  1055 => 729,  1042 => 728,  1005 => 700,  1001 => 698,  996 => 694,  993 => 693,  988 => 691,  985 => 690,  983 => 689,  980 => 688,  977 => 687,  972 => 685,  969 => 684,  967 => 683,  962 => 680,  668 => 387,  654 => 386,  650 => 385,  647 => 384,  633 => 383,  629 => 382,  626 => 381,  612 => 380,  608 => 379,  604 => 378,  600 => 377,  596 => 376,  591 => 374,  588 => 373,  571 => 372,  565 => 369,  561 => 368,  557 => 367,  553 => 366,  548 => 364,  545 => 363,  528 => 362,  523 => 360,  519 => 359,  515 => 358,  511 => 357,  507 => 356,  502 => 355,  485 => 354,  154 => 25,  143 => 15,  137 => 12,  124 => 11,  110 => 8,  106 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DOCENTES{% endblock %}

{% block stylesheets %}
{{ parent() }}
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/PasarListas.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/estadistica_asistencia.css') }}\">
\t\t\t\t
\t\t{% endblock %}
{% block javascripts %}
    {{ parent() }}

    {# Script para dirigir a la cursada seleccionada y poder asignar las notas #}

        
    <!-- SheetJS (para Excel) -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js\"></script>
    
    <!-- jsPDF (para PDF) -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>
        <!-- html2canvas (para jsPDF) -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js\"></script>
    {# Script para dirigir a la cursada seleccionada y pasar Asistencia #}
        <script>
           

    function obtenerFechaActual() {
        const hoy = new Date();
        const dia = String(hoy.getDate()).padStart(2, '0');
        const mes = String(hoy.getMonth() + 1).padStart(2, '0');
        const anio = String(hoy.getFullYear()).slice(-2); // Obtener solo los últimos dos dígitos del año
        return `\${dia}-\${mes}-\${anio}`;
     }

    // Función para descargar como Excel
    function DescargarExcel() {
        // Obtener el contenido HTML de la tabla
        const tablaHTML = document.querySelector(\"#EstadisticasModal\");
    
        // Eliminar la fecha de la tabla antes de exportarla
        const fechaElement = document.querySelector('.Fechadehoy');
        const fechaOriginal = fechaElement.textContent;
        fechaElement.textContent = ''; 
    
        // Convertir la tabla HTML a un libro de Excel
        const wb = XLSX.utils.table_to_book(tablaHTML);
    
        fechaElement.textContent = fechaOriginal;
        const fechaActual = obtenerFechaActual();
        XLSX.writeFile(wb, `estadisticas_curso_\${fechaActual}.xlsx`);
    }
    
    
    // Función para descargar como PDF
    function DescargarPdf() {
        // Crear un nuevo documento PDF con jsPDF en orientación horizontal (landscape)
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF('landscape', 'mm', 'a4'); // A4 horizontal
        
        // Obtener la fecha actual
        const fechaActual = obtenerFechaActual();
        
        
        const tabla = document.querySelector(\"#EstadisticasModal\");
        
  
        const margenIzquierdo = 10;
        const margenSuperior = 10;
        
       
        html2canvas(tabla, {
            scale: 1.2, 
        }).then((canvas) => {
            const imgData = canvas.toDataURL(\"image/png\");
         
            const imgWidth = doc.internal.pageSize.width - margenIzquierdo * 2;
            const imgHeight = (canvas.height * imgWidth) / canvas.width;
        
            doc.addImage(imgData, \"PNG\", margenIzquierdo, margenSuperior, imgWidth, imgHeight);
        
            // Guardar el archivo PDF
            doc.save(`estadisticas_curso_\${fechaActual}.pdf`);
        });
    }
    
    
    



    let VistaAsistenciaActiva = false; // Variable para controlar que no se pueda pasar lista sin abrir el modal
    
    function ActivarEstadoAsistencia() {
        VistaAsistenciaActiva = true; 
        console.log(\"VistaAsistenciaActiva:\", VistaAsistenciaActiva); 
    }
    function DesactivarEstadoAsistencia() {
        VistaAsistenciaActiva = false; 
        console.log(\"VistaAsistenciaActiva:\", VistaAsistenciaActiva); 
    }

function showListaNueva(cursoId) {
    selectedCursoId = cursoId;
console.log(\"Curso seleccionado:\", selectedCursoId);

// Actualizar el link con el cursoId correcto
    const linkLista = document.getElementById('linkListaPorDia');
    if (linkLista) {
linkLista.href = `lista/\${cursoId}`;


    }

    const listaProfesores = document.getElementById('tablaTecnicaturas');
    if (listaProfesores) listaProfesores.style.display = 'none';

    // Pedir datos actualizados al backend
fetch(`actualizar-lista-alumnos/\${cursoId}`)


        .then(response => {
            if (!response.ok) throw new Error('Error al obtener datos actualizados');
            return response.json();
        })
        .then(data => {
            // Actualizar encabezados
            const curso = cursosData[cursoId];
            document.querySelector('.curso-info h2 span').textContent = curso.asignatura || '';
            document.querySelector('.curso-info h3 span:nth-child(1)').textContent = curso.anio || '';
            document.querySelector('.curso-info h3 span:nth-child(2)').textContent = curso.comision || '';

            const tbody = document.querySelector('.curso-tabla tbody');
            tbody.innerHTML = '';

            let presentes = 0;

            data.data.forEach(cursada => {
                const row = document.createElement('tr');
                row.classList.add('fila-alumno');

                row.innerHTML = `
                    <td class=\"alumno-nombre\">\${cursada.nombre}</td>
                    <td class=\"alumno-apellido\">\${cursada.apellido}</td>
                    <td class=\"alumno-dni\">\${cursada.dni}</td>
                    <td class=\"alumno-asistencia\">
                        <span class=\"estado-asistencia \${cursada.asistencia ? cursada.asistencia.toLowerCase() : 'no-marcado'}\">
                            \${cursada.asistencia || 'No marcado'}
                        </span>
                    </td>
                    <td class=\"alumno-observacion\">\${cursada.observacion || ''}</td>
                    <td class=\"alumnoeditar\">
                        <button onclick=\"ActivarEstadoEditar();editarAsistencia(\${cursoId}, \${cursada.id})\">Editar</button>
                    </td>
                `;

                tbody.appendChild(row);

                if (cursada.asistencia && cursada.asistencia.toLowerCase() === 'presente') presentes++;
            });

            const totalPresentes = document.querySelector('.total-presentes');
            if (totalPresentes) totalPresentes.textContent = `Alumnos presentes: \${presentes}`;

            document.getElementById('ListaNueva').style.display = 'block';
        })
        .catch(error => {
            console.error('Error al cargar la lista de alumnos:', error);
        });
}


        let modalAbierto = false;

          
    let ModalidadOpen = false; // Variable para controlar si se creo la modalidad
    
        function abrirPasarAsistenciaModal() {
            if (modalAbierto) {
                console.log('El modal ya está abierto.');
                return; // Evita abrir el modal si ya está abierto
            }else{
                if(!ModalidadOpen){
                    alert('Por favor, crear la modalidad antes de pasar asistencia.');
                    return; // Evita abrir el modal si no se ha creado la modalidad
                }else{
                    // Reiniciar el índice del array
            indiceActual = 0;
        
            // Mostrar overlay y modal
            document.getElementById('spa-overlay').style.display = 'block';
            document.getElementById('PasarAsistenciaModal').style.display = 'block';
        
            // Cargar el primer alumno
            mostrarAlumno(indiceActual);
        
            // Cambiar el estado del modal a abierto
            modalAbierto = true;
                }
            }
        
            
        }
        
    

    function editarAsistencia(cursoId, cursadaId) {
        if (!ModalidadOpen) {
            alert('Por favor, crear la modalidad antes de editar la asistencia.');
            return; // Evita abrir el modal si no se ha creado la modalidad
        } else {
            // Buscar el índice de la cursada correspondiente al cursadaId
            const cursadas = cursosData[cursoId].cursadas;
            const cursadaIndex = cursadas.findIndex(c => c.id === cursadaId);

            if (cursadaIndex === -1) {
                console.error(\"No se encontró la cursada con ID:\", cursadaId);
                return;
            }

            // Actualiza el índice actual al del alumno que se está editando
            indiceActual = cursadaIndex;

            const cursada = cursadas[cursadaIndex];
            const alumno = cursada.alumno;
            const ultimaAsistencia = cursada.asistencias.length > 0
                ? cursada.asistencias[cursada.asistencias.length - 1]
                : null;

            const alumnoNombreElemento = document.querySelector('.AlumnoNombre');
            const alumnoDniElemento = document.querySelector('.AlumnoDni');
            const spanEstado = document.querySelector('.estado-text');
            const observacionInput = document.getElementById('observacion-input');

            if (alumnoNombreElemento && alumnoDniElemento) {
                alumnoNombreElemento.textContent = `\${alumno.nombre} \${alumno.apellido}`;
                alumnoDniElemento.textContent = `DNI: \${alumno.dni}`;
            }

            if (ultimaAsistencia) {
                spanEstado.textContent = ultimaAsistencia.asistencia;
                spanEstado.className = 'estado-text estado-' + ultimaAsistencia.asistencia.toLowerCase().replace(' ', '');
                observacionInput.value = ultimaAsistencia.observacion || '';
            } else {
                spanEstado.textContent = 'No marcado';
                spanEstado.className = 'estado-text estado-neutral';
                observacionInput.value = '';
            }

            document.getElementById('spa-overlay').style.display = 'block';
            document.getElementById('PasarAsistenciaModal').style.display = 'block';
            modalAbierto = true;
        }
    }
    
                


    function showCursoCursada(cursoId) {
        // oculta tablas no relevantes
        let tablesToHide = document.querySelectorAll('.tabla_home, .tabla_comision, .tabla_cursada, .tabla_curso');
        tablesToHide.forEach(table => table.style.display = 'none');

        // oculta cursos
        let cursadaTables = document.querySelectorAll('.tabla_curso');
        cursadaTables.forEach(table => table.style.display = 'none');

        // muestra tabla cursada específica
        let cursadaTable = document.getElementById(`tablaCursoCursada_\${cursoId}`);
        if (cursadaTable) {
            cursadaTable.style.display = '';
        }

        // ocultar search
        let search = document.getElementById('searchs');
        if (search) {
            search.style.display = 'none';
        }

        // muestra el botón de regresar, la función hide... recibe id de comision, tecnicatura y asignatura para poder regresar al punto anterior
        let backButton = document.getElementById('backButton');
        if (backButton) {
            backButton.style.display = '';
            backButton.onclick = function() {
                hideCursoCursada(cursoId);
            };
        }
    }
    function hideCursoCursada(cursoId) {
        // oculta tabla cursada específica
        let cursadaTable = document.getElementById(`tablaCursoCursada_\${cursoId}`);
        if (cursadaTable) {
            cursadaTable.style.display = 'none';
        }

        // muestra la tabla curso específica
        let cursoTable = document.getElementById(`tablaTecnicaturas`);
        if (cursoTable) {
            cursoTable.style.display = '';
        }

        // oculta el botón regresar-volver
        let backButton = document.getElementById('backButton');
        if (backButton) {
            backButton.style.display = 'none';
        }
    }
        // Función para cerrar el modal
    function cerrarPasarAsistenciaModal() {
        if (!modalAbierto) {
            console.log('El modal ya está cerrado.');
            return; // Evita intentar cerrar el modal si ya está cerrado
        }
    
        // Ocultar overlay y modal
        document.getElementById('spa-overlay').style.display = 'none';
        document.getElementById('PasarAsistenciaModal').style.display = 'none';
    
        // Restablecer los valores del modal
        const alumnoNombreElemento = document.querySelector('.AlumnoNombre');
        const alumnoDniElemento = document.querySelector('.AlumnoDni');
        const spanEstado = document.querySelector('.estado-text');
        const observacionInput = document.getElementById('observacion-input');
    
        if (alumnoNombreElemento) alumnoNombreElemento.textContent = 'Nombre Apellido';
        if (alumnoDniElemento) alumnoDniElemento.textContent = 'DNI: 12345678';
        if (spanEstado) {
            spanEstado.textContent = 'No marcado';
            spanEstado.className = 'estado-text estado-neutral';
        }
        if (observacionInput) observacionInput.value = '';
    
        // Cambiar el estado del modal a cerrado
        modalAbierto = false;
        DesactivarEstadoAsistencia();
        DesactivarEstadoEditar();
    }
    document.getElementById('spa-overlay').addEventListener('click', cerrarPasarAsistenciaModal);
    
    // Evento para cerrar el modal cuando se presiona Escape
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modalAbierto) {
            cerrarPasarAsistenciaModal();  
        }
    });
        
        
        
        
        
  
 // Función para actualizar el estado de asistencia
    const cursosData = {
        {% for curso in cursos %}
            {{ curso.id }}: {
                id: {{ curso.id }},
                asignatura: \"{{ curso.asignatura.nombre|e('js') }}\",
                anio: \"{{ curso.comision.anio|e('js') }}\",
                comision: \"{{ curso.comision.comision|e('js') }}\",
                tecnicatura: \"{{ curso.comision.tecnicatura.nombre|e('js') }}\",
                cursadas: [
                    {% for cursada in curso.cursadas %}
                        {
                            id: {{ cursada.id }},
                            alumno: {
                                id: {{ cursada.alumno.id }},
                                nombre: \"{{ cursada.alumno.nombre|e('js') }}\",
                                apellido: \"{{ cursada.alumno.apellido|e('js') }}\",
                                dni: \"{{ cursada.alumno.dniPasaporte|e('js') }}\"
                            },
                            asistencias: [
                                {% for asistencia in cursada.getAsistencias %}
                                    {
                                        id: {{ asistencia.id }},
                                        <!-- Cambiamos el date, revisar .. !!! -->
                                        fecha: \"{{ asistencia.CalendarioClase.fecha|date('Y-m-d') }}\",  <!-- Ajuste en el formato de la fecha -->
                                        asistencia: \"{{ asistencia.asistencia|e('js') }}\",
                                        observacion: \"{{ asistencia.observacion|e('js') }}\"
                                    }{% if not loop.last %},{% endif %}
                                {% endfor %}
                            ]
                        }{% if not loop.last %},{% endif %}
                    {% endfor %}
                ]
            }{% if not loop.last %},{% endif %}
        {% endfor %}
    };
        
        

    //Script para representar la fecha actual en el html , class .fecha-actual
    document.addEventListener('DOMContentLoaded', () => {
        const fechaSpan = document.querySelector('.fecha-actual');
        if (fechaSpan) {
            const hoy = new Date();
            const dia = String(hoy.getDate()).padStart(2, '0');
            const mes = String(hoy.getMonth() + 1).padStart(2, '0');
            const anio = hoy.getFullYear();
            fechaSpan.textContent = `Fecha: \${dia}/\${mes}/\${anio}`;
        }
    });
    document.addEventListener('DOMContentLoaded', () => {
        // Botón \"Presente\"
        document.getElementById('presente').addEventListener('click', () => {
            actualizarEstado('Presente', true); // Marca como \"Presente\" y guarda
            setTimeout(avanzarSiEsPosible, 1000); // Avanza al siguiente alumno después de 1 segundo
    });
        
    // Botón \"Ausente\"
    document.getElementById('ausente').addEventListener('click', () => {
        actualizarEstado('Ausente', true); // Marca como \"Ausente\" y guarda
        setTimeout(avanzarSiEsPosible, 1000); // Avanza al siguiente alumno después de 1 segundo
    });
        
    // Botón \"Media falta\"
    document.getElementById('mediafalta').addEventListener('click', () => {
        actualizarEstado('Media falta', true); // Marca como \"Media falta\" y guarda
        setTimeout(avanzarSiEsPosible, 1000); // Avanza al siguiente alumno después de 1 segundo
    });

    // Botón \"Justificada\"
    document.getElementById('justificada').addEventListener('click', () => {
        actualizarEstado('Justificada', false); // Marca como \"Justificada\" pero no guarda automáticamente
        document.getElementById('observacion').style.visibility = 'visible';
        document.getElementById('enviar').style.visibility = 'visible';
    });
     });
        
  
        

        
    function hideAsistencia(cursoId) {
        // oculta tabla cursada específica
        let cursadaTable = document.getElementById(`tablaAsistencia_\${cursoId}`);
        if (cursadaTable) {
            cursadaTable.style.display = 'none';
        }

        // muestra la tabla curso específica
        let cursoTable = document.getElementById(`tablaTecnicaturas`);
        if (cursoTable) {
            cursoTable.style.display = '';
        }

        // oculta el botón regresar-volver
        let backButton = document.getElementById('backButton');
        if (backButton) {
            backButton.style.display = 'none';
        }
    }

    let indiceActual = 0;  
    let ActivarEditar = false; 

    // Esta función muestra los datos del alumno en el panel
        let selectedCursoId = 1;  


    function ActivarEstadoEditar(){
        ActivarEditar = true;  
        console.log(\"ActivarEditar:\", ActivarEditar);  
    }
    function DesactivarEstadoEditar(){
        ActivarEditar = false;  
        console.log(\"ActivarEditar:\", ActivarEditar); 
    }
    // Función para mostrar el alumno
    function mostrarAlumno(index) {
        console.log(\"Llamando a mostrarAlumno con índice:\", index);
    
        if (index < 0 || index >= cursosData[selectedCursoId].cursadas.length) {
            console.error(\"Índice fuera de rango:\", index);
            return;
        }
    
        const alumno = cursosData[selectedCursoId].cursadas[index].alumno;
        const asistencias = cursosData[selectedCursoId].cursadas[index].asistencias;
    
        console.log(\"Mostrando alumno:\", alumno);
        console.log(\"Asistencias del alumno:\", asistencias);
    
        const alumnoNombreElemento = document.querySelector('.AlumnoNombre');
        const alumnoDniElemento = document.querySelector('.AlumnoDni');
        const spanEstado = document.querySelector('.estado-text');
        const observacionInput = document.getElementById('observacion-input');
    
        if (alumnoNombreElemento && alumnoDniElemento) {
            alumnoNombreElemento.textContent = `\${alumno.nombre} \${alumno.apellido}`;
            alumnoDniElemento.textContent = `DNI: \${alumno.dni}`;
        } else {
            console.error(\"No se pudieron encontrar los elementos para actualizar.\");
        }
    
        // Recupera la última asistencia del alumno
        const ultimaAsistencia = asistencias.length > 0 ? asistencias[asistencias.length - 1] : null;
    
        if (ultimaAsistencia) {
            spanEstado.textContent = ultimaAsistencia.asistencia;
            spanEstado.className = 'estado-text estado-' + ultimaAsistencia.asistencia.toLowerCase().replace(' ', '');
            observacionInput.value = ultimaAsistencia.observacion || '';
        } else {
            // Si no hay asistencias, restablece los valores por defecto
            spanEstado.textContent = 'No marcado';
            spanEstado.className = 'estado-text estado-neutral';
            observacionInput.value = '';
        }
    
        // Siempre oculta el campo de observaciones y el botón \"Guardar\"
        document.getElementById('observacion').style.visibility = 'hidden';
        document.getElementById('enviar').style.visibility = 'hidden';
    }

    // Función para avanzar al siguiente alumno
    function avanzarSiEsPosible() {
        if (!comprobarEdicion()) {
            cerrarPasarAsistenciaModal();
            return; 
        }
        
        if (indiceActual < cursosData[selectedCursoId].cursadas.length - 1) {
            // Avanza al siguiente alumno
            indiceActual++;
            mostrarAlumno(indiceActual);
        } else {
            // Si es el último alumno, cierra el modal después de 1 segundo
            setTimeout(() => {
                cerrarPasarAsistenciaModal();
            }, 1000);
        }
    }

    function retrocederAlumno() {
        if (!comprobarEdicion()) {
            cerrarPasarAsistenciaModal();
            return;
        }

        if (indiceActual > 0) {
            indiceActual--;
            mostrarAlumno(indiceActual);
        }
    }
    

    // Cargar el primer alumno al iniciar
    document.addEventListener('DOMContentLoaded', () => {
        mostrarAlumno(indiceActual);
    });

    // Asignar el evento al botón \"siguiente\"
    document.getElementById('siguiente').addEventListener('click', avanzarSiEsPosible);
    document.getElementById('anterior').addEventListener('click', retrocederAlumno);


    document.addEventListener('DOMContentLoaded', () => {
        mostrarAlumno(indiceActual);  // Cargar el primer alumno
    });
        
        
    function hideListaNueva(cursoId) {
        // Oculta ListaNueva
        let lista = document.getElementById('ListaNueva');
        if (lista) {
            lista.style.display = 'none';
        }
    
        
        let tablaPrincipal = document.getElementById('tablaTecnicaturas');
        if (tablaPrincipal) {
            tablaPrincipal.style.display = '';
        }
    
        // Ocultar el botón volver
        let backButton = document.getElementById('backButton');
        if (backButton) {
            backButton.style.display = 'none';
        }
    }
        

    function llenarTablaPorcentaje(cursoId) {
        const curso = cursosData[cursoId];


        if (!curso) {
            console.error('Curso no encontrado');
            return;
        }

        const tbody = document.querySelector('#EstadisticasModal tbody');
        tbody.innerHTML = ''; // Limpia la tabla

        const nombreCurso = curso.asignatura || 'Nombre no disponible';  
        const tecnicatura = curso.tecnicatura || '---';  
        const anio = curso.anio || '---';  
        const comision = curso.comision || '---'; 

        // Asignar datos al encabezado
        document.querySelector('.nombre-tecnicatura').textContent = tecnicatura;
        document.querySelector('.anio-comision').textContent = `Año: \${anio}° Comisión: \${comision}`;
        document.querySelector('.nombre-asignatura').textContent = nombreCurso;

        // Obtener la fecha actual
        const hoy = new Date();
        const dia = String(hoy.getDate()).padStart(2, '0');
        const mes = String(hoy.getMonth() + 1).padStart(2, '0');
        const anioFecha = hoy.getFullYear();
        const fechaActual = `Fecha: \${dia}/\${mes}/\${anioFecha}`;
        document.querySelector('.Fechadehoy').textContent = fechaActual;

        // 🔄 Pedir datos actualizados al backend
fetch(`estadisticas/\${cursoId}`)


            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la respuesta del servidor');
                }
                return response.json();
            })
            .then(data => {
                if (!data || data.length === 0) return;

                // Ya no sobrescribimos los valores de encabezado aquí

                data.forEach(cursada => {
                    const fila = document.createElement('tr');
                    fila.innerHTML = `
                        <td>\${cursada.nombre}</td>
                        <td>\${cursada.apellido}</td>
                        <td>\${cursada.dni}</td>
                        <td>\${cursada.estadisticas.presentes}</td>
                        <td>\${cursada.estadisticas.ausentes}</td>
                        <td>\${cursada.estadisticas.media_faltas}</td>
                        <td>\${cursada.estadisticas.justificadas}</td>
                        <td>\${cursada.estadisticas.total}</td>
                        <td>\${cursada.estadisticas.porcentaje_presente}%</td>
                        <td>\${cursada.estadisticas.porcentaje_ausente}%</td>
                        <td>\${cursada.estadisticas.porcentaje_justificada}%</td>
                    `;
                    tbody.appendChild(fila);
                });
            })
            .catch(error => {
                console.error('Error al cargar estadísticas:', error);
            });
    }






    function abrirPorcentaje() {
        const modal = document.getElementById('modalporcentaje');
        const lista = document.getElementById('ListaNueva');

        if (modal) modal.style.display = 'block';
        if (lista) lista.style.display = 'none';

        if (selectedCursoId !== undefined) {
            llenarTablaPorcentaje(selectedCursoId);
        }
    }


    function cerrarPorcentaje() {
        const modal = document.getElementById('modalporcentaje');
        const lista = document.getElementById('ListaNueva');

        if (modal) modal.style.display = 'none';
        if (lista) lista.style.display = 'block';
    }

    
    </script>

    {# Script para cargar variable si hay sesion iniciada y mantener el punto de pantalla donde se dejo al realizar alguna operacion #}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Evaluar si `comId` está definido y no es nulo
            {% if cursoId is defined and cursoId is not null %}
                // Llamar a showCursada con los IDs de cursada y tecnicatura
                showCursoCursada({{ cursoId|default('null') }});
            {% else %}
            {% endif %}

            {% if cursoId2 is defined and cursoId2 is not null %}
                // Llamar a showCursada con los IDs de cursada y tecnicatura
                showAsistencia({{ cursoId2|default('null') }});
            {% else %}
            {% endif %}
        });
    </script>

    {# Filtro necesario para no acceder un docente a todas los cursos, aqui ademas el super-adminitrador puede acceder sin filtro a todos los registros #}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            var userEmail = \"{{ app.user.email }}\";  // aqui obtenemos el correo del usuario logueado
            var userDni = userEmail.split('@')[0];  // Extraer el DNI antes del '@'
            
            // Llamar a la función de filtrado
            if (userEmail !== 'admin@admin.i12') {
                filterTableByDni(userDni);
            }
        });

        function filterTableByDni(dni) {
            // Obtener todas las filas de la tabla
            var rows = document.querySelectorAll(\"#tablaTecnicaturas tbody tr\");
            
            // Recorrer cada fila y mostrar/ocultar según el DNI
            rows.forEach(function(row) {
                var docenteData = row.querySelector('td:first-child').innerText;  // Obtener el texto del primer <td> (Docente)
                if (docenteData.includes(dni)) {
                    row.style.display = '';  // Mostrar la fila
                } else {
                    row.style.display = 'none';  // Ocultar la fila
                }
            });
        }
    </script>

{% endblock %}


{% block body %}
    <div id=\"body-vistas\">
        <h1 id=\"vistas\">Central Docente/s</h1>
        <table class=\"tabla_home\" id=\"tablaTecnicaturas\" border=\"1\">
            <thead>
                <tr>
                    <th>Docente</th>
                    <th>Asignatura</th>
                    <th>Comision</th>
                    <th>Tecnicatura</th>
                    <th>Asistencias</th>
                    <th>Notas</th>
                </tr>
            </thead>
            <tbody>
            {% for cursada_docente in cursada_docentes %}
                <tr>
                    <td>{{ cursada_docente }}</td>
                    <td>{{ cursada_docente.curso.asignatura.nombre }}</td>
                    <td>{{ cursada_docente.curso.comision }}</td>
                    <td>{{ cursada_docente.curso.comision.tecnicatura }}</td>
                    <td>
                        <button onclick=\"showListaNueva({{ cursada_docente.curso.id }})\" class=\"btn-primary\">Asistencia</button>
                      
                        
                    </td>
                    <td>
                        <button onclick=\"showCursoCursada({{ cursada_docente.curso.id }})\" class=\"btn-primary\">Notas</button>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>



        {% for curso in cursos %}
            <table id=\"tablaCursoCursada_{{ curso.id }}\" class=\"tabla_curso_cursada\" style=\"display: none;\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"4\">{{ curso.comision.tecnicatura }} -Cursadas de Curso-</th>
                        <th colspan=\"3\"> Año: {{ curso.comision.anio }} Comision: {{ curso.comision.comision }}</th>
                    </tr>
                    <tr>
                        <th>Asignatura :</th>
                        <th colspan=\"6\"> {{ curso.asignatura.nombre }} {{ curso.comision.ciclolectivo }}</th>
                    </tr>
                    <tr>    
                        <th>Curso</th>
                        <th>Cursada</th>
                        <th>N1</th>
                        <th>R1</th>
                        <th>N2</th>
                        <th>R2</th>
                        <th>Condicion</th>
                    </tr>
                </thead>
                <tbody>
                    {% for cursada in curso.cursadas %}
                        {% if cursada.curso.comision.ciclolectivo == curso.comision.ciclolectivo %}
                            <tr>
                                <td>{{ curso.comision.ciclolectivo }}</td>
                                <td>{{ cursada.alumno }}</td>
                                <td>
                                    {{ cursada.getNotaId().parcial }}
                                    <button 
                                        onclick=\"openModal1({{ cursada.getNotaId().id }}, {{ curso.id }}, 'parcial')\" 
                                        {% if cursada.getNotaId().parcial is not null %}style=\"display: none;\"{% endif %}
                                    >
                                        Editar
                                    </button>
                                </td>
                                <td>
                                    {{ cursada.getNotaId().recuperatorio1 }}
                                    <button 
                                        onclick=\"openModal1({{ cursada.getNotaId().id }}, {{ curso.id }}, 'recuperatorio1')\" 
                                        {% if cursada.getNotaId().recuperatorio1 is not null %}style=\"display: none;\"{% endif %}
                                    >
                                        Editar
                                    </button>
                                </td>
                                <td>
                                    {{ cursada.getNotaId().parcial2 }}
                                    <button 
                                        onclick=\"openModal1({{ cursada.getNotaId().id }}, {{ curso.id }}, 'parcial2')\" 
                                        {% if cursada.getNotaId().parcial2 is not null %}style=\"display: none;\"{% endif %}
                                    >
                                        Editar
                                    </button>
                                </td>
                                <td>
                                    {{ cursada.getNotaId().recuperatorio2 }}
                                    <button 
                                        onclick=\"openModal1({{ cursada.getNotaId().id }}, {{ curso.id }}, 'recuperatorio2')\" 
                                        {% if cursada.getNotaId().recuperatorio2 is not null %}style=\"display: none;\"{% endif %}
                                    >
                                        Editar
                                    </button>
                                </td>
                                <td>{{ cursada.condicion }}</td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                </tbody>
            </table>
        {% endfor %}



    <script>
       
        
        document.addEventListener('DOMContentLoaded', function() {
            // Generar la fecha actual
            const today = new Date();
            const day = String(today.getDate()).padStart(2, '0');
            const month = String(today.getMonth() + 1).padStart(2, '0');
            const year = today.getFullYear();
            const formattedToday = `\${day}-\${month}-\${year}`; // Esta es la fecha formateada
        
            // Comparar la fecha y actualizar la tabla
            const fechaActual = formattedToday;  // Usa formattedToday aquí
        
            document.querySelectorAll('tbody').forEach(tbody => {
                tbody.querySelectorAll('tr').forEach(row => {
                    const fechaAsistencia = row.querySelector('.fecha-asistencia');
                    
                    if (fechaAsistencia) {
                        const asistenciaFecha = fechaAsistencia.textContent.trim();
                        
                        // Verificar si las fechas coinciden
                        if (asistenciaFecha !== fechaActual) {
                            row.style.display = 'none'; // Oculta las filas que no coinciden con la fecha actual
                        } else {
                            row.style.display = ''; // Muestra las filas que coinciden con la fecha actual
                        }
                    }
                });
            });
        });

    </script>
    <!-- CAMPO DE LA NUEVA LISTA //////////////////////////////////// -->
    
    <div class=\"curso-container\" id=\"ListaNueva\"style=\"display: none;\">



    <!-- HTML DE MODALIDAD -->
    <!-- Botón que muestra/oculta el bloque -->
        <div class=\"alumnoeditar\" style=\"text-align: center; margin-bottom: 10px;\">
            <button id=\"toggleModalidadBtn\">Mostrar modalidad</button>
        </div>
    <!-- Div modalidad oculto por defecto -->
    <div class=\"ModalidadAsistencia\" id=\"modalidadPanel\">
        <div class=\"titulo-modalidad\">Modalidad de la clase:</div>
        <div class=\"contenedor-radios\">
            <label class=\"radio-opcion\">
                <input type=\"radio\" name=\"modalidad\" value=\"presencial\" checked>
                Presencial
            </label>
            <label class=\"radio-opcion\">
                <input type=\"radio\" name=\"modalidad\" value=\"remoto\">
                Remoto
            </label>
        </div>
        <div class=\"campo-observaciones\">
            <input type=\"text\" placeholder=\"Observaciones...\" id=\"observacion-Modalidad\" class=\"observacion-inputModalidad\" />
        </div>
        <div class=\"alumnoeditar\">
            <button id=\"guardarModalidadBtn\">Guardar</button>
        </div>
    </div>
        <!-- Título del curso -->
        <!-- <h1 class=\"curso-titulo\">Nombre del Curso</h1> -->
    <div class=\"curso-info\">

        <h2 class=\"curso-subtitulo\">Asignatura: <span>Asignatura Nombre</span></h2>
        <h3 class=\"curso-subtitulo\">Año: <span>--</span> | Comisión: <span>--</span></h3>
        <div class=\"contenedor-fecha\">
                 <span class=\"fecha-actual\">Fecha: 12/05/2025</span>
            </div>
    </div>

        <!-- Contenedor de botón y fecha alineados -->
        <div class=\"fecha-actual-wrapper\">
            <button class=\"btn-pasar-lista\" onclick=\"abrirPorcentaje()\">
                Ver asistencias
            </button>

            <button class=\"btn-pasar-lista\" onclick=\"abrirPasarAsistenciaModal(); ActivarEstadoAsistencia();\">
                📋 Pasar Lista
            </button>
        </div>

        <!-- Buscar -->
        <div class=\"buscador-alumno\">
            <label for=\"dni-buscar\">Buscar alumno:</label>
            <div class=\"input-group\">
                <input type=\"text\" id=\"nombre-buscar\" class=\"form-control\" placeholder=\"Por Nombre...\" aria-label=\"Buscar por Nombre\">
                <input type=\"text\" id=\"apellido-buscar\" class=\"form-control\" placeholder=\"Por Apellido...\" aria-label=\"Buscar por Apellido\">
                <input type=\"text\" id=\"dni-buscar\" class=\"form-control\" placeholder=\"Por DNI...\" aria-label=\"Buscar por DNI\">
            </div>
        </div>

        <!-- Tabla de alumnos -->
        <div class=\"tabla-alumnos-wrapper\">
            <table class=\"curso-tabla\">
                <thead>
                    <tr>
                        <th class=\"col-nombre\">Nombre</th>
                        <th class=\"col-apellido\">Apellido</th>
                        <th class=\"col-dni\">DNI</th>
                        <th class=\"col-asistencia\">Asistencia</th>
                        <th class=\"col-observaciones\">Observaciones</th>
                        <th class=\"col-editar\">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=\"fila-alumno\">
                        <td class=\"alumno-nombre\">Juan</td>
                        <td class=\"alumno-apellido\">Pérez</td>
                        <td class=\"alumno-dni\">12345678</td>
                        <td class=\"alumno-asistencia\">
                            <span class=\"estado-asistencia presente\"></span>
                        </td>
                    </tr>
                    <tr class=\"fila-alumno\">
                        <td class=\"alumno-nombre\"></td>
                        <td class=\"alumno-apellido\"></td>
                        <td class=\"alumno-dni\"></td>
                        <td class=\"alumno-asistencia\">
                            <span class=\"estado-asistencia ausente\"></span>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"6\" class=\"total-presentes\">
                            Alumnos presentes: 1
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

          <button class=\"btn-pasar-lista\" onclick=\"hideListaNueva()\">
        Volver
    </button>
    </div>
  

    <!-- CAMPO DE LA NUEVA LISTA //////////////////////////////////// -->

        <!-- TABLA DE PORCENTAJE /////// -->
        <div id=\"modalporcentaje\" style=\"display: none;\" >
            <table id=\"EstadisticasModal\" class=\"tablillacursada\" border=\"1\">
                <thead>
                    <tr>
                        <th colspan=\"6\" class=\"nombre-tecnicatura\">Tecnicatura en Informática - Cursadas de Curso -</th>
                        <th colspan=\"2\" class=\"anio-comision\">Año: 2° Comision: A</th>
                        <th colspan=\"2\" class=\"Fechadehoy\"></th>
                    </tr>
                    <tr>
                        <th colspan=\"2\" class=\"asignatura\">
                            Asignatura:
                            <p id=\"fechatablilla\" style=\"margin: 0;\">Abril 2025</p>
                        </th>
                        <th colspan=\"6\" class=\"nombre-asignatura\">Programación II - Ciclo Lectivo 2025</th>
                        <th colspan=\"6\" class=\"titulo-porcentaje\">Porcentaje de asistencia</th>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dni</th>
                        <th>Presente</th>
                        <th>Ausente</th>
                        <th>Media falta</th>
                        <th>Justificada</th>
                        <th>Total Asistencias</th>
                        <th>Presente</th>
                        <th>Ausente</th>
                        <th>justificada</th>
                    </tr>
                </thead>
                <tbody>
               
                </tbody>
            </table>
            
                    <!-- Contenedor principal -->
            <div class=\"contenedor-acciones\">

                <!-- Botón a la izquierda -->
                <div class=\"accion-izquierda\">
                    <button class=\"botondeporcentaje\" onclick=\"cerrarPorcentaje()\">
                        Regresar a la lista
                    </button>
<a id=\"linkListaPorDia\" href=\"#\" class=\"botondeporcentaje\">Lista por día</a>



                </div>

                <!-- Caja centrada para descargar planilla -->
                <div class=\"accion-centro\">
                    <div class=\"descarga-planilla\">
                        <h3>Descargar planilla como:</h3>
                        <div class=\"botones-descarga\">
                            <button class=\"boton-excel\" onclick=\"DescargarExcel()\">Excel</button>
                            <button class=\"boton-pdf\" onclick=\"DescargarPdf()\">PDF</button>
                        </div>
                    </div>
                </div>

            </div>



            
                
        </div>
        <!-- TABLA DE PORCENTAJE /////// -->




        {# script asistencias #}
        <script>
            function openModal3(cursoId, cursadaId, asistenciaId) {
                // Generar la URL con los IDs correctos
                const url = \"{{ path('editar_asistencias', { 'id': '__id__', 'curso_id': '__cursoId__' }) }}\"
                    .replace('__id__', asistenciaId)
                    .replace('__cursoId__', cursoId);
                // Realizar la solicitud fetch
                fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalBody-1').innerHTML = html;
                        document.getElementById('Modal1').style.display = 'block';
                            //asistencia_asistencia    asistencia_fecha       asistencia_observacion     asistencia_cursada

                        // Configurar la fecha actual en los campos de mes, día y año
                        const today = new Date();
                        const dayInput = document.querySelector('#asistencia_fecha_day');
                        const monthInput = document.querySelector('#asistencia_fecha_month');
                        const yearInput = document.querySelector('#asistencia_fecha_year');

                        if (dayInput) {
                            dayInput.value = today.getDate();
                        }
                        if (monthInput) {
                            monthInput.value = today.getMonth() + 1;
                        }
                        if (yearInput) {
                            yearInput.value = today.getFullYear();
                        }


                        const cursadaInput = document.getElementById('asistencia_cursada');
                        const labelCursada = document.querySelector('label[for=\"asistencia_cursada\"]');
                        if (labelCursada) {

                            //labelCursada.style.display = 'none';
                        }
                        if (cursadaInput) {  //aqui evaluo la tec id de la posicion donde estoy y guardo en el input 
                            cursadaInput.value = cursadaId;
                            cursadaInput.setAttribute('readonly', true); // Hacerlo solo lectura -suele no dar resultado al ser opciones desplegadas-
                            cursadaInput.style.display = 'none'; //ocultar el campo evitando que se edite por el usuario
                        }
                
                    })  
                    .catch(error => console.error('Error al cargar el formulario de edición:', error));
            }

        </script>



        {# script asistencias #}


        <script>
            function openModal1(notaId, cursoId, campo) {
                // Generar la URL con los IDs correctos
                const url = \"{{ path('editar_nota', { 'id': '__id__', 'curso_id': '__cursoId__' }) }}\"
                    .replace('__id__', notaId)
                    .replace('__cursoId__', cursoId);
                // Realizar la solicitud fetch
                fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('modalBody-1').innerHTML = html;
                        document.getElementById('Modal1').style.display = 'block';
                        
                        // Ocultar campos según el parámetro 'campo'
                        const campos = ['parcial', 'recuperatorio1', 'parcial2', 'recuperatorio2'];
                        campos.forEach(c => {
                            const label = document.querySelector(`label[for=\"nota_\${c}\"]`);
                            const input = document.getElementById(`nota_\${c}`);
                            if (c !== campo) {
                                if (label) label.style.display = 'none';
                                if (input) input.style.display = 'none';
                            }
                        });
                    })  
                    .catch(error => console.error('Error al cargar el formulario de edición:', error));
            }

            function closeModal1() {
                document.getElementById('Modal1').style.display = 'none';
                document.getElementById('modalBody-1').innerHTML = ''; // Restablecer el contenido del modal
            }

           let asistenciasMarcadas = {};

           document.addEventListener('keydown', function (event) {
            // Solo continua si alguna de las dos variables está activada
            if (!VistaAsistenciaActiva && !ActivarEditar) return;
        
            switch (event.key) {
                case 'ArrowLeft': // Flecha izquierda para retroceder al alumno anterior
                    document.getElementById('anterior').click();
                    break;
        
                case 'ArrowRight': // Flecha derecha para avanzar al siguiente alumno
                    avanzarSiEsPosible();
                    break;
        
                case 'F1': // F1 para marcar como \"Presente\"
                    event.preventDefault();
                    if (VistaAsistenciaActiva || ActivarEditar) { 
                        actualizarEstado('Presente', true); 
                        setTimeout(() => {
                            if (!ActivarEditar) {  
                                avanzarSiEsPosible();  
                            } else {
                                ActivarEditar = false;  
                                cerrarPasarAsistenciaModal(); 
                                console.log('ActivarEditar:', ActivarEditar); 
                            }
                        }, 1000);
                    }
                    break;
        
                case 'F2': // F2 para marcar como \"Ausente\"
                    event.preventDefault();
                    if (VistaAsistenciaActiva || ActivarEditar) {  
                        actualizarEstado('Ausente', true);  
                        setTimeout(() => {
                            if (!ActivarEditar) {  
                                avanzarSiEsPosible();  // Avanza al siguiente alumno
                            } else {
                                ActivarEditar = false;  // Cambia ActivarEditar a false
                                cerrarPasarAsistenciaModal();  
                            }
                        }, 1000);
                    }
                    break;
        
                case 'F3': // F3 para marcar como \"Media falta\"
                    event.preventDefault();
                    if (VistaAsistenciaActiva || ActivarEditar) {  // Verifica si alguna está activa
                        actualizarEstado('Media falta', true);  // Actualiza el estado a 'Media falta' y guarda
                        setTimeout(() => {
                            if (!ActivarEditar) {  // Verifica si ActivarEditar es false
                                avanzarSiEsPosible();  // Avanza al siguiente alumno
                            } else {
                                ActivarEditar = false;  // Cambia ActivarEditar a false
                                cerrarPasarAsistenciaModal();  // Cierra el modal
                            }
                        }, 1000);
                    }
                    break;
        
                case 'F4': // F4 para marcar como \"Justificada\"
                    event.preventDefault();
                    if (VistaAsistenciaActiva || ActivarEditar) {  // Verifica si alguna está activa
                        actualizarEstado('Justificada', false); // No guarda automáticamente
                        document.getElementById('observacion').style.visibility = 'visible';
                        document.getElementById('enviar').style.visibility = 'visible';
                    }
                    break;
            }
        });
        


    // Función para actualizar el estado del alumno
    function actualizarEstado(estado, guardar = true) {
        const spanEstado = document.querySelector('.estado-text');
        spanEstado.textContent = estado;
        spanEstado.className = 'estado-text estado-' + estado.toLowerCase().replace(' ', '');

        const alumnoId = cursosData[selectedCursoId].cursadas[indiceActual].alumno.id;
        let observacion = document.getElementById('observacion-input').value || '';

        if (estado === 'Justificada') {
            document.getElementById('observacion').style.visibility = 'visible';
            document.getElementById('enviar').style.visibility = 'visible';
        } else {
            document.getElementById('observacion').style.visibility = 'hidden';
            document.getElementById('enviar').style.visibility = 'hidden';
            observacion = '';
        }

        // Guarda el estado y la observación en asistenciasMarcadas
        asistenciasMarcadas[alumnoId] = {
            cursada_id: cursosData[selectedCursoId].cursadas[indiceActual].id,
            fecha: new Date().toISOString().split('T')[0], // Fecha actual en formato yyyy-mm-dd
            estado: estado,
            observacion: observacion
        };

        if (guardar) {
            guardarAsistencias();
            const confirmacion = document.getElementById('confirmacion');
            confirmacion.style.visibility = 'visible';
            confirmacion.textContent = '✅ Datos guardados correctamente';
            setTimeout(() => {
                confirmacion.style.visibility = 'hidden';
            }, 2000);
        }

        // Actualiza el contador de alumnos presentes
        actualizarContadorPresentes();
    }

    // Función para guardar las asistencias marcadas
    function obtenerFechaLocal() {
    const hoy = new Date();
    const yyyy = hoy.getFullYear();
    const mm = String(hoy.getMonth() + 1).padStart(2, '0');
    const dd = String(hoy.getDate()).padStart(2, '0');
    return `\${yyyy}-\${mm}-\${dd}`;
}

// Ruta para obtener calendario del día, esperando un parámetro cursoId que se concatena en JS
    const rutaBaseCalendarioClaseDelDia = \"{{ path('api_calendario_clase_del_dia', {'cursoId': 0})|slice(0, -1) }}\"; 
    // Explicación: path('api_calendario_clase_del_dia', {'cursoId': 0}) da '/api/calendario-clase-del-dia/0'
    // con slice(0, -1) quitamos el último caracter '0', quedando '/api/calendario-clase-del-dia/'

    // Ruta para actualizar lista alumnos (similar al anterior)
    const rutaBaseActualizarListaAlumnos = \"{{ path('actualizar_lista_alumnos', {'curso_id': 0})|slice(0, -1) }}\";

    // Ruta completa para guardar asistencia (no necesita concatenar)
    const rutaGuardarAsistencia = \"{{ path('guardar_asistencia') }}\";

function guardarAsistencias() {
    const urlCalendario = rutaBaseCalendarioClaseDelDia + selectedCursoId;
    const urlGuardar = rutaGuardarAsistencia;

    fetch(urlCalendario)
        .then(response => {
            if (!response.ok) throw new Error('No se encontró CalendarioClase para este curso hoy');
            return response.json();
        })
        .then(data => {
            const calendarioClaseId = data.id;

            const datosAEnviar = Object.values(asistenciasMarcadas).map(asistencia => ({
                cursada_id: asistencia.cursada_id,
                calendarioClase_id: calendarioClaseId,
                estado: asistencia.estado,
                observacion: asistencia.observacion || null
            }));

            return fetch(urlGuardar, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(datosAEnviar),
            });
        })
        .then(response => {
            if (!response.ok) return response.text().then(text => { throw new Error(text); });
            console.log('✅ Asistencias guardadas correctamente');

            return fetch(rutaBaseActualizarListaAlumnos + selectedCursoId);
        })
        .then(response => {
            if (!response.ok) throw new Error('Error al obtener los datos actualizados');
            return response.json();
        })
        .then(data => {
            console.log(\"📅 Fecha del backend:\", data.fecha_backend);

            cursosData[selectedCursoId].cursadas = data.data.map(cursada => ({
                id: cursada.id,
                alumno: {
                    id: cursada.id,
                    nombre: cursada.nombre,
                    apellido: cursada.apellido,
                    dni: cursada.dni,
                },
                asistencias: [{
                    asistencia: cursada.asistencia,
                    observacion: cursada.observacion,
                }],
            }));

            const tbody = document.querySelector('.curso-tabla tbody');
            tbody.innerHTML = '';

            data.data.forEach(alumno => {
                const row = document.createElement('tr');
                row.classList.add('fila-alumno');
                row.innerHTML = `
                    <td class=\"alumno-nombre\">\${alumno.nombre}</td>
                    <td class=\"alumno-apellido\">\${alumno.apellido}</td>
                    <td class=\"alumno-dni\">\${alumno.dni}</td>
                    <td class=\"alumno-asistencia\">
                        <span class=\"estado-asistencia \${alumno.asistencia?.toLowerCase() || ''}\">
                            \${alumno.asistencia || ''}
                        </span>
                    </td>
                    <td class=\"alumno-observacion\">\${alumno.observacion || ''}</td>
                    <td class=\"alumnoeditar\">
                        <button onclick=\"ActivarEstadoEditar();editarAsistencia(\${selectedCursoId}, \${alumno.id})\">Editar</button>
                    </td>
                `;
                tbody.appendChild(row);
            });

            actualizarContadorPresentes();
        })
        .catch(error => console.error(\"❌ Error en el flujo de guardar asistencias:\", error));
}





    function actualizarContadorPresentes() {
        const filas = document.querySelectorAll('.curso-tabla tbody .fila-alumno');
        let presentes = 0;

        filas.forEach(fila => {
            const estadoElemento = fila.querySelector('.estado-asistencia');
            if (estadoElemento) {
                const estado = estadoElemento.textContent.trim().toLowerCase();
                if (estado === 'presente') {
                    presentes++;
                }
            }
        });

        const totalPresentes = document.querySelector('.total-presentes');
        if (totalPresentes) {
            totalPresentes.textContent = `Alumnos presentes: \${presentes} + \${mediaFaltas}`;
        }
    }
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('enviar').addEventListener('click', () => {
            actualizarEstado('Justificada', true); // Actualiza el estado a \"Justificada\" y guarda
            setTimeout(() => {
                if (!ActivarEditar) {  // Verifica si ActivarEditar es false
                    avanzarSiEsPosible();  // Avanza al siguiente alumno
                } else {
                    cerrarPasarAsistenciaModal();  // Cierra el modal
                    ActivarEditar = false;  // Cambia ActivarEditar a false
                    console.log('ActivarEditar desactivado:', ActivarEditar);  // Verifica el valor de ActivarEditar
                }
            }, 1000);
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const fechaActualElemento = document.getElementById('fecha-actual');
        if (fechaActualElemento) {
            const hoy = new Date();
            const dia = String(hoy.getDate()).padStart(2, '0');
            const mes = String(hoy.getMonth() + 1).padStart(2, '0');
            const anio = hoy.getFullYear();
            fechaActualElemento.textContent = `Fecha: \${dia}/\${mes}/\${anio}`;
        }
    });



    document.addEventListener('DOMContentLoaded', () => {
        // Selecciona los campos de búsqueda
        const dniBuscar = document.getElementById('dni-buscar');
        const nombreBuscar = document.getElementById('nombre-buscar');
        const apellidoBuscar = document.getElementById('apellido-buscar');

        // Agrega eventos de entrada (input) a cada campo
        dniBuscar.addEventListener('input', filtrarAlumnos);
        nombreBuscar.addEventListener('input', filtrarAlumnos);
        apellidoBuscar.addEventListener('input', filtrarAlumnos);

        function filtrarAlumnos() {
            // Obtén los valores de los campos de búsqueda
            const dniValor = dniBuscar.value.toLowerCase();
            const nombreValor = nombreBuscar.value.toLowerCase();
            const apellidoValor = apellidoBuscar.value.toLowerCase();

            // Selecciona todas las filas de la tabla de alumnos
            const filas = document.querySelectorAll('.curso-tabla tbody .fila-alumno');

            // Itera sobre cada fila y verifica si coincide con los criterios de búsqueda
            filas.forEach(fila => {
                const dni = fila.querySelector('.alumno-dni').textContent.toLowerCase();
                const nombre = fila.querySelector('.alumno-nombre').textContent.toLowerCase();
                const apellido = fila.querySelector('.alumno-apellido').textContent.toLowerCase();

                // Verifica si la fila coincide con los valores de búsqueda
                if (
                    (dni.includes(dniValor) || dniValor === '') &&
                    (nombre.includes(nombreValor) || nombreValor === '') &&
                    (apellido.includes(apellidoValor) || apellidoValor === '')
                ) {
                    fila.style.display = ''; // Muestra la fila si coincide
                } else {
                    fila.style.display = 'none'; // Oculta la fila si no coincide
                }
            });
        }
    });

    function comprobarEdicion() {
        if (ActivarEditar) {
            return false;  // Impide que el cambio de estado ocurra
        }
        return true;  // Permite el cambio de estado
    }
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('toggleModalidadBtn');
    const panel = document.getElementById('modalidadPanel');
    const guardarBtn = document.getElementById('guardarModalidadBtn');

    const selectedCursoId = window.selectedCursoId || 1;

    function actualizarTextoBoton() {
        const seleccionado = document.querySelector('input[name=\"modalidad\"]:checked');
        const modalidad = seleccionado ? seleccionado.value : 'Ninguna';
        btn.textContent = `Modalidad: \${modalidad.charAt(0).toUpperCase() + modalidad.slice(1)}`;
        console.log(`Modalidad seleccionada: \${modalidad}`);
    }

    function obtenerFechaActualFormatoISO() {
        const hoy = new Date();
        const anio = hoy.getFullYear();
        const mes = String(hoy.getMonth() + 1).padStart(2, '0');
        const dia = String(hoy.getDate()).padStart(2, '0');
        return `\${anio}-\${mes}-\${dia}`;
    }

    if (btn && panel) {
        btn.addEventListener('click', () => {
            panel.classList.toggle('abierto');
            if (panel.classList.contains('abierto')) {
                btn.textContent = 'Ocultar modalidad';
            } else {
                actualizarTextoBoton();
            }
        });
    }

    if (guardarBtn && panel && btn) {
        guardarBtn.addEventListener('click', () => {
            const seleccionado = document.querySelector('input[name=\"modalidad\"]:checked');
            const modalidad = seleccionado ? seleccionado.value : null;
            const observacion = document.getElementById('observacion-Modalidad').value.trim();
            const fecha = obtenerFechaActualFormatoISO();

            if (!modalidad) {
                alert('Por favor selecciona una modalidad');
                return;
            }

            // Acá podrías imprimir los datos en consola o usarlos para algo local
            console.log('Modalidad:', modalidad);
            console.log('Observación:', observacion);
            console.log('Fecha:', fecha);
            console.log('Curso ID:', selectedCursoId);

            // Cierra el panel y actualiza el botón
            panel.classList.remove('abierto');
            actualizarTextoBoton();
        });
    }
});



function obtenerFechaLocal() {
  const hoy = new Date();
  const yyyy = hoy.getFullYear();
  const mm = String(hoy.getMonth() + 1).padStart(2, '0'); // Mes empieza en 0
  const dd = String(hoy.getDate()).padStart(2, '0');
  return `\${yyyy}-\${mm}-\${dd}`;
}

document.getElementById('guardarModalidadBtn').addEventListener('click', () => {
  // Obtener modalidad seleccionada y convertir a id
  const modalidadTexto = document.querySelector('input[name=\"modalidad\"]:checked').value;
  const modalidadId = modalidadTexto === 'presencial' ? 1 : 2;

  // Obtener observacion (puede ser vacía)
  const observacion = document.getElementById('observacion-Modalidad').value.trim();

  // Variable que ya tenés con el curso seleccionado
  const cursoId = selectedCursoId;

  // Armar el cuerpo para enviar con fecha local
  const data = {
    modalidad: modalidadId,
    curso: cursoId,
    observacion: observacion || null,
    fecha: obtenerFechaLocal() // aquí pasamos la fecha local en formato YYYY-MM-DD
  };

  // Enviar la solicitud POST a Symfony
fetch('newcalendario', {

    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-Requested-With': 'XMLHttpRequest'  // para que Symfony detecte que es AJAX
    },
    body: JSON.stringify(data),
  })
  .then(response => {
    if (!response.ok) throw new Error('Error en la respuesta');
    return response.json();
  })
  .then(json => {
    console.log('Guardado con éxito:', json);
    ModalidadOpen = true;
    // acá podés mostrar un mensaje al usuario, limpiar campos o actualizar UI
  })
  .catch(err => {
    console.error('Error al guardar:', err);
    // mostrar mensaje de error en UI si querés
  });
});
//

        </script>

        <!-- Modal1 para asignar notas a las materias de un docente!!!-->
        <div id=\"Modal1\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content21\">
                    <span class=\"close\" onclick=\"closeModal1()\">&times;</span>
                    <div id=\"modalBody-1\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>

        <!-- Modal2 para asignar Asistencias!!!-->
        <div id=\"Modal2\" class=\"modal\" style=\"display: none;\">
            <div class=\"modal-content\">
                <div class=\"modal-content21\">
                    <span class=\"close\" onclick=\"closeModal2()\">&times;</span>
                    <div id=\"modalBody-2\" class=\"submodal\"></div>
                </div>
            </div>    
        </div>
           <div id=\"spa-overlay\"></div>
    <div id=\"spa-content\">
    </div>




        {# --- Modal de Pasar Lista, inicialmente oculto --- #}
        <div id=\"spa-overlay\" style=\"display:none; \"></div>
        
        <div id=\"PasarAsistenciaModal\" class=\"AsistenciaModal1\" style=\"display: none;\">
            <div id=\"alumno-container\">
                <div class=\"alumno-card\">
                    <div class=\"cerrar\" id=\"cerrar\" onclick= \"cerrarPasarAsistenciaModal()\">X</div>
                    <div class=\"fecha-actual\" id=\"fecha-actual\"></div>
                    
                    <h2 class=\"AlumnoNombre\">Nombre Apellido</h2>
                    <p class=\"AlumnoDni\">DNI: 12345678</p>
                    <p id=\"estado\">
                        Estado: <span class=\"estado-text estado-neutral\">No marcado</span>
                    </p>
                    <p id=\"observacion\" style=\"visibility: hidden;\">
                        Observación: <input type=\"text\" id=\"observacion-input\" placeholder=\"Completar...\">
                    </p>
                    <button id=\"enviar\" style=\"visibility: hidden;\" class=\"btn btn-primary mt-2\">Guardar</button>
                    <p id=\"confirmacion\" style=\"visibility: hidden; color: green; margin-top: 10px;\">
                        ✅ Datos guardados correctamente
                    </p>
                </div>
            </div>
        
            <div class=\"botones mt-3\">
                <button id=\"anterior\">⬅️</button>
                <button id=\"presente\">✅ Presente (F1)</button>
                <button id=\"ausente\">❌ Ausente (F2)</button>
                <button id=\"mediafalta\">⏳ Media falta (F3)</button>
                <button id=\"justificada\">📄✅ Justificada (F4)</button>
                <button id=\"siguiente\">➡️</button>
            </div>
        </div>



        <button id=\"backButton\" style=\"display: none;\" class=\"btn-primary\">VOLVER</button>
    
   
    
{% endblock %}", "vistasdocente/index.html.twig", "C:\\xampp\\htdocs\\local\\templates\\vistasdocente\\index.html.twig");
    }
}
