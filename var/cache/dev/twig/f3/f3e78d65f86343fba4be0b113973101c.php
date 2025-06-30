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

/* vistaspreinscriptos/edit.html.twig */
class __TwigTemplate_f9a9491ef07bbc68395a230780e7fa90 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistaspreinscriptos/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vistaspreinscriptos/edit.html.twig"));

        // line 1
        yield "<button type=\"button\" class=\"button\"
    onclick=\"openModalPersona(
        '";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 3, $this->source); })()), "persona_nombre", [], "any", false, false, false, 3), "html", null, true);
        yield "', 
        '";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 4, $this->source); })()), "persona_apellido", [], "any", false, false, false, 4), "html", null, true);
        yield "', 
        '";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 5, $this->source); })()), "fecha_nacimiento", [], "any", false, false, false, 5), "html", null, true);
        yield "', 
        '";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 6, $this->source); })()), "dni_pasaporte", [], "any", false, false, false, 6), "html", null, true);
        yield "', 
        '";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), "genero", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 7, $this->source); })()), "genero", [], "any", false, false, false, 7), "")) : ("")), "html", null, true);
        yield "', 
        '";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), "email", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), "")) : ("")), "html", null, true);
        yield "', 
        '";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), "telefono", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 9, $this->source); })()), "telefono", [], "any", false, false, false, 9), "")) : ("")), "html", null, true);
        yield "', 
        '";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), "partido", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 10, $this->source); })()), "partido", [], "any", false, false, false, 10), "")) : ("")), "html", null, true);
        yield "', 
        '";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), "calle", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 11, $this->source); })()), "calle", [], "any", false, false, false, 11), "")) : ("")), "html", null, true);
        yield "', 
        '";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), "numero", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 12, $this->source); })()), "numero", [], "any", false, false, false, 12), "")) : ("")), "html", null, true);
        yield "', 
        '";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), "piso", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 13, $this->source); })()), "piso", [], "any", false, false, false, 13), "")) : ("")), "html", null, true);
        yield "', 
        '";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), "departamento", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 14, $this->source); })()), "departamento", [], "any", false, false, false, 14), "")) : ("")), "html", null, true);
        yield "', 
        '";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), "pasillo", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 15, $this->source); })()), "pasillo", [], "any", false, false, false, 15), "")) : ("")), "html", null, true);
        yield "', 
        '";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), "pais_descripcion", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 16, $this->source); })()), "pais_descripcion", [], "any", false, false, false, 16), "")) : ("")), "html", null, true);
        yield "', 
        '";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), "localidad_nombre", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 17, $this->source); })()), "localidad_nombre", [], "any", false, false, false, 17), "")) : ("")), "html", null, true);
        yield "',  
        '";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "'
    )\">
    Inscribir
</button>











        ";
        // line 33
        if ( !(null === (isset($context["dni"]) || array_key_exists("dni", $context) ? $context["dni"] : (function () { throw new RuntimeError('Variable "dni" does not exist.', 33, $this->source); })()))) {
            // line 34
            yield "            <p>DNI encontrado: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dni"]) || array_key_exists("dni", $context) ? $context["dni"] : (function () { throw new RuntimeError('Variable "dni" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "</p>
        ";
        } else {
            // line 36
            yield "            <p>No se encuentra DNI.</p>
        ";
        }
        // line 38
        yield "




        ";
        // line 44
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["success"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            yield "        <div id=\"successModal\" class=\"modal\" style=\"display: block;\">
            <div class=\"modal-content\">
                <span class=\"close\">&times;</span>
                <p>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</p>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dni"]) || array_key_exists("dni", $context) ? $context["dni"] : (function () { throw new RuntimeError('Variable "dni" does not exist.', 79, $this->source); })()), "html", null, true);
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
        // line 149
        yield "                </div>
            </div>
        </div>    
    </div>


    ";
        // line 156
        yield "    <div id=\"Modal5\" class=\"modal\" style=\"display: none;\">
        <div class=\"modal-content\">
            <div id=\"modal-Asignaturas\">
                <p class=\"modalDePre\">4 Creando Cursadas de 1*</p>
                <div class=\"modal-content2\">
                    <label for=\"inputAnio\">Elige el año de inscripción:</label>
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
        // line 208
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
        // line 232
        yield (isset($context["personas"]) || array_key_exists("personas", $context) ? $context["personas"] : (function () { throw new RuntimeError('Variable "personas" does not exist.', 232, $this->source); })());
        yield "; // personas ahora es un array de DNIs
  
        const alumnos2 = ";
        // line 234
        yield (isset($context["alumnos"]) || array_key_exists("alumnos", $context) ? $context["alumnos"] : (function () { throw new RuntimeError('Variable "alumnos" does not exist.', 234, $this->source); })());
        yield "; 
    

        const carreras2 = ";
        // line 237
        yield (isset($context["carreras"]) || array_key_exists("carreras", $context) ? $context["carreras"] : (function () { throw new RuntimeError('Variable "carreras" does not exist.', 237, $this->source); })());
        yield "; 
   
        document.addEventListener(\"DOMContentLoaded\", function() {
            const inputTecnicatura = document.getElementById(\"tecnicatura_resolucion\");

            inputTecnicatura.addEventListener(\"input\", function() {
                validarTecnica();
            });

            function validarTecnica() {
                const tecnicaturaIngresada = inputTecnicatura.value.trim();
                
                console.log(\"Resolución ingresada:\", tecnicaturaIngresada);
                console.log(\"Resoluciones disponibles:\", carreras2);

                // Verifica si existe una tecnicatura con esa resolución en carreras2
                const existe = carreras2.some(carrera => carrera.tecnicatura === tecnicaturaIngresada);

                if (existe) {
                    inputTecnicatura.style.border = \"\";
                    console.log(\"match!\");
                } else {
                    console.log(\"error, not found\");
                    inputTecnicatura.style.border = \"2px solid red\";
                }
            }


            function verificarComisionAntesDeContinuar() {
                let resolucionCompleta = document.getElementById(\"tecnicatura_resolucion\").value.trim(); // Obtener el valor del input como string
                // Dividir la resolución en la parte antes del \"/\" y la parte después
                const [resolucionParte1, N2] = resolucionCompleta.split('/');
                // Obtener el año actual
                const anioActual = new Date().getFullYear();
                // Construir la URL reemplazando los valores en la ruta de Symfony
                const url = \"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verificar_comision", ["resolucion" => "__resolucion__", "N2" => "__N2__", "anio" => "__anio__"]), "html", null, true);
        yield "\"
                    .replace('__resolucion__', resolucionParte1)
                    .replace('__N2__', N2)
                    .replace('__anio__', anioActual);

                // Hacer la solicitud AJAX
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            alert(data.error); // Mostrar mensaje si no hay comisiones
                        } else {
                            alert(data.success); // Mostrar éxito si hay comisiones
                        }
                    })
                    .catch(error => console.error('Error en la verificación:', error));
            }


            // Validación inicial al cargar la página
            validarTecnica();

            verificarComisionAntesDeContinuar();
        });







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
        // line 323
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("persona_siguiente", ["dni" => "__dni__"]);
        yield "\"
                    .replace('__dni__', dniStr);

                redirectButton.onclick = function() {
                    window.location.href = url;
                };

                return;
            }

            console.log(\"el nombre es: \",apellido);

            const dniStr = String(dni); 
            const url = \"";
        // line 336
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
                    //Cuidado que aqui se hace referencia al formulario del modal y puede interferir con los campos del form edit del archivo
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
              


                    if (nombreInput) {  
                        nombreInput.value = nombre;
                        nombreInput.style.display = 'none';
                    }  
                    const labelnombre = document.querySelector('label[for=\"persona_nombre\"]');
                    if (labelnombre) {
                        labelnombre.textContent = `Nombre: \${nombre}`;
                    }


                    if (apellidoInput) {  
                        apellidoInput.value = apellido;
                        apellidoInput.style.display = 'none';
                    } 
                    const labelapellido = document.querySelector('label[for=\"persona_apellido\"]');
                    if (labelapellido) {
                        labelapellido.textContent = `Apellido: \${apellido}`;
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
        // line 845
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
        // line 859
        if (array_key_exists("success_message", $context)) {
            // line 860
            yield "                openModal2('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["success_message"]) || array_key_exists("success_message", $context) ? $context["success_message"] : (function () { throw new RuntimeError('Variable "success_message" does not exist.', 860, $this->source); })()), "js"), "html", null, true);
            yield "', 'success');
            ";
        }
        // line 862
        yield "            ";
        if (array_key_exists("error_message", $context)) {
            // line 863
            yield "                openModal2('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_message"]) || array_key_exists("error_message", $context) ? $context["error_message"] : (function () { throw new RuntimeError('Variable "error_message" does not exist.', 863, $this->source); })()), "js"), "html", null, true);
            yield "', 'error');
            ";
        }
        // line 865
        yield "        });

        /*
        // Ejecutar la redirección dos veces con un breve retraso cuando una session no logra limpiarse correctamente, dejar esta seccion comentada -solo para test-
        document.addEventListener('DOMContentLoaded', function () {
            function redirectTo(route) {
                window.location.href = route;
            }

            function handleRedirect() {
                const redirectUrl = '";
        // line 875
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "vistaspreinscriptos/edit.html.twig";
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
        return array (  1034 => 875,  1022 => 865,  1016 => 863,  1013 => 862,  1007 => 860,  1005 => 859,  988 => 845,  476 => 336,  460 => 323,  406 => 272,  368 => 237,  362 => 234,  357 => 232,  331 => 208,  278 => 156,  270 => 149,  198 => 79,  169 => 52,  159 => 48,  154 => 45,  149 => 44,  142 => 38,  138 => 36,  132 => 34,  130 => 33,  112 => 18,  108 => 17,  104 => 16,  100 => 15,  96 => 14,  92 => 13,  88 => 12,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<button type=\"button\" class=\"button\"
    onclick=\"openModalPersona(
        '{{ record.persona_nombre }}', 
        '{{ record.persona_apellido }}', 
        '{{ record.fecha_nacimiento }}', 
        '{{ record.dni_pasaporte }}', 
        '{{ record.genero|default('') }}', 
        '{{ record.email|default('') }}', 
        '{{ record.telefono|default('') }}', 
        '{{ record.partido|default('') }}', 
        '{{ record.calle|default('') }}', 
        '{{ record.numero|default('') }}', 
        '{{ record.piso|default('') }}', 
        '{{ record.departamento|default('') }}', 
        '{{ record.pasillo|default('') }}', 
        '{{ record.pais_descripcion|default('') }}', 
        '{{ record.localidad_nombre|default('') }}',  
        '{{ record.id }}'
    )\">
    Inscribir
</button>











        {% if dni is not null %}
            <p>DNI encontrado: {{ dni }}</p>
        {% else %}
            <p>No se encuentra DNI.</p>
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
                    <label for=\"inputAnio\">Elige el año de inscripción:</label>
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
  
        const alumnos2 = {{ alumnos|raw }}; 
    

        const carreras2 = {{carreras|raw }}; 
   
        document.addEventListener(\"DOMContentLoaded\", function() {
            const inputTecnicatura = document.getElementById(\"tecnicatura_resolucion\");

            inputTecnicatura.addEventListener(\"input\", function() {
                validarTecnica();
            });

            function validarTecnica() {
                const tecnicaturaIngresada = inputTecnicatura.value.trim();
                
                console.log(\"Resolución ingresada:\", tecnicaturaIngresada);
                console.log(\"Resoluciones disponibles:\", carreras2);

                // Verifica si existe una tecnicatura con esa resolución en carreras2
                const existe = carreras2.some(carrera => carrera.tecnicatura === tecnicaturaIngresada);

                if (existe) {
                    inputTecnicatura.style.border = \"\";
                    console.log(\"match!\");
                } else {
                    console.log(\"error, not found\");
                    inputTecnicatura.style.border = \"2px solid red\";
                }
            }


            function verificarComisionAntesDeContinuar() {
                let resolucionCompleta = document.getElementById(\"tecnicatura_resolucion\").value.trim(); // Obtener el valor del input como string
                // Dividir la resolución en la parte antes del \"/\" y la parte después
                const [resolucionParte1, N2] = resolucionCompleta.split('/');
                // Obtener el año actual
                const anioActual = new Date().getFullYear();
                // Construir la URL reemplazando los valores en la ruta de Symfony
                const url = \"{{ path('verificar_comision', { 'resolucion': '__resolucion__', 'N2': '__N2__', 'anio': '__anio__' }) }}\"
                    .replace('__resolucion__', resolucionParte1)
                    .replace('__N2__', N2)
                    .replace('__anio__', anioActual);

                // Hacer la solicitud AJAX
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            alert(data.error); // Mostrar mensaje si no hay comisiones
                        } else {
                            alert(data.success); // Mostrar éxito si hay comisiones
                        }
                    })
                    .catch(error => console.error('Error en la verificación:', error));
            }


            // Validación inicial al cargar la página
            validarTecnica();

            verificarComisionAntesDeContinuar();
        });







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

            console.log(\"el nombre es: \",apellido);

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
                    //Cuidado que aqui se hace referencia al formulario del modal y puede interferir con los campos del form edit del archivo
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
              


                    if (nombreInput) {  
                        nombreInput.value = nombre;
                        nombreInput.style.display = 'none';
                    }  
                    const labelnombre = document.querySelector('label[for=\"persona_nombre\"]');
                    if (labelnombre) {
                        labelnombre.textContent = `Nombre: \${nombre}`;
                    }


                    if (apellidoInput) {  
                        apellidoInput.value = apellido;
                        apellidoInput.style.display = 'none';
                    } 
                    const labelapellido = document.querySelector('label[for=\"persona_apellido\"]');
                    if (labelapellido) {
                        labelapellido.textContent = `Apellido: \${apellido}`;
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

", "vistaspreinscriptos/edit.html.twig", "C:\\xampp\\htdocs\\Local-Finales-\\templates\\vistaspreinscriptos\\edit.html.twig");
    }
}
