<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @webprofiler/Icon/008--config.svg */
class __TwigTemplate_867a3615530d4499908e49c669af5964 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Icon/008--config.svg"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 24 24\" style=\"enable-background:new 0 0 24 24;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#AAAAAA;}
</style>
<path class=\"st0\" d=\"M11,5.2C11,3.5,9.6,2,7.9,2H5.1C3.4,2,2,3.5,2,5.2v13.5c0,1.7,1.4,3.1,3.1,3.1H8c1.7,0,3.1-1.5,3.1-3.2L11,5.2
\tL11,5.2z M5.2,4.1h2.7C8.4,4.1,9,4.9,9,5.5v6H4v-6C4,4.9,4.6,4.1,5.2,4.1z M21.9,5.2c0-1.8-1.4-3.2-3.1-3.2h-2.9c-1.6,0-3,1.5-3,3.2
\tv13.5c0,1.8,1.4,3.2,3.1,3.2h2.9c1.7,0,3.1-1.5,3.1-3.2L21.9,5.2L21.9,5.2z M15.9,4.1h2.8c0.6,0,1.2,0.8,1.2,1.4v2.8h-5V5.5
\tC14.9,4.9,15.4,4.1,15.9,4.1z\"/>
</svg>
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Icon/008--config.svg";
    }

    public function getDebugInfo()
    {
        return array (  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Icon/008--config.svg", "/app/web/modules/contrib/webprofiler/templates/Icon/008--config.svg");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
