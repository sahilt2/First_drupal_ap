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

/* @webprofiler/Icon/012--http.svg */
class __TwigTemplate_50712dcfe92bd513df9e6cf5e5145680 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Icon/012--http.svg"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 24 24\" style=\"enable-background:new 0 0 24 24;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#AAAAAA;}
</style>
<path class=\"st0\" d=\"M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10S17.5,2,12,2z M16.8,18.8c-0.1-0.4-0.2-0.9-0.3-1.3
\tc0.7-0.7,0.7-1.8-0.1-2.4c0.5-1.9,0.5-4,0-6.1c0.2-0.1,0.3-0.2,0.4-0.4c1.2,0.3,2.4,0.9,3.4,1.6c0.1,0.6,0.2,1.1,0.2,1.7
\tC20.3,14.8,18.9,17.3,16.8,18.8z M3.7,12c0-0.7,0.1-1.4,0.3-2.1c0.6,0,1.2,0,1.8,0l0,0.2c-0.8,0.6-1.5,1.4-2.1,2.2
\tC3.7,12.4,3.7,12,3.7,12z M6.3,11c0.7,0.5,1.7,0.4,2.2-0.4c2.4,0.9,4.4,2.6,5.8,4.7c-0.6,0.6-0.6,1.7,0,2.2c-0.6,1-1.3,2-2.1,2.8
\tc-4.1,0.1-7.4-2.7-8.3-6.4C4.5,12.8,5.4,11.8,6.3,11z M8.7,9.4c1.7-0.8,3.5-1.2,5.3-1.1c0.3,0.5,0.8,0.9,1.4,1h0
\tc0.5,1.8,0.5,3.7,0,5.6l-0.2,0c-1.4-2.4-3.7-4.3-6.5-5.3C8.8,9.6,8.7,9.4,8.7,9.4z M13.8,20.1c0.6-0.7,1.1-1.4,1.5-2.2l0.2,0
\tc0.1,0.5,0.3,0.9,0.3,1.4C15.2,19.7,14.5,20,13.8,20.1z M19.7,8.8C18.9,8.3,18,8,17,7.7c-0.1-0.8-0.9-1.5-1.8-1.5
\tc-0.5-0.8-1-1.6-1.7-2.4C16.4,4.4,18.6,6.3,19.7,8.8z M14.3,6.6c-0.2,0.2-0.4,0.4-0.4,0.7c-2,0-4,0.4-5.7,1.3C7.5,8,6.4,8.2,6,9
\tC5.3,8.9,4.8,8.9,4.3,8.9C5.5,5.8,8.5,3.7,12,3.7h0C12.9,4.5,13.7,5.5,14.3,6.6z\"/>
</svg>
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Icon/012--http.svg";
    }

    public function getDebugInfo()
    {
        return array (  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Icon/012--http.svg", "/app/web/modules/contrib/webprofiler/templates/Icon/012--http.svg");
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
