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

/* @WebProfiler/Icon/twig.svg */
<<<<<<<< HEAD:var/cache/dev/twig/94/9459c2907c40502f7582c7a57322ccab.php
class __TwigTemplate_a2321f70a57e82df2b549781a5f796c4 extends Template
========
class __TwigTemplate_f0aa99847f0f776fd0d7bcef0b533e52 extends Template
>>>>>>>> 9ff131dc3f1d539d565d1ea1bbe799cf5823e506:var/cache/dev/twig/10/107620907d64c701da2c183404fd61ff.php
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/twig.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/twig.svg"));

        // line 1
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M8.932 22.492c.016-6.448-.971-11.295-5.995-11.619 4.69-.352 7.113 2.633 9.298 6.907C12.205 6.354 9.882 1.553 4.8 1.297c7.433.07 10.028 5.9 11.508 14.293 1.171-2.282 3.56-5.553 5.347-1.361-1.594-2.04-3.607-1.617-3.978 8.262H8.933z\"/></svg>
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
        return "@WebProfiler/Icon/twig.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M8.932 22.492c.016-6.448-.971-11.295-5.995-11.619 4.69-.352 7.113 2.633 9.298 6.907C12.205 6.354 9.882 1.553 4.8 1.297c7.433.07 10.028 5.9 11.508 14.293 1.171-2.282 3.56-5.553 5.347-1.361-1.594-2.04-3.607-1.617-3.978 8.262H8.933z\"/></svg>
<<<<<<<< HEAD:var/cache/dev/twig/94/9459c2907c40502f7582c7a57322ccab.php
", "@WebProfiler/Icon/twig.svg", "C:\\xampp\\htdocs\\Local-Finales-\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Icon\\twig.svg");
========
<<<<<<< HEAD:var/cache/dev/twig/10/107620907d64c701da2c183404fd61ff.php
", "@WebProfiler/Icon/twig.svg", "C:\\xampp\\htdocs\\Local-Finales-\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Icon\\twig.svg");
=======
", "@WebProfiler/Icon/twig.svg", "C:\\xampp\\htdocs\\local\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Icon\\twig.svg");
>>>>>>> 15004e1e441728d7bfb90a33f34e34e28484990f:var/cache/dev/twig/ee/ee724fef9748704782185b3aee2581933e6c9fcab265f1fa6d59a5c31cfb7961.php
>>>>>>>> 9ff131dc3f1d539d565d1ea1bbe799cf5823e506:var/cache/dev/twig/10/107620907d64c701da2c183404fd61ff.php
    }
}
