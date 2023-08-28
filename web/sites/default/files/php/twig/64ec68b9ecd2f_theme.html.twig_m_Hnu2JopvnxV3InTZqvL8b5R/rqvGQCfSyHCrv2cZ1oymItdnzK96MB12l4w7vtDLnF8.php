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

/* @webprofiler/Collector/theme.html.twig */
class __TwigTemplate_3ec2d4fb00a7590c6627a735ba040dd8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/theme.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "
  ";
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\webprofiler\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themeNegotiator", [], "any", false, false, true, 4), "class", [], "any", false, false, true, 4), "file", [], "any", false, false, true, 4), 4, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themeNegotiator", [], "any", false, false, true, 4), "class", [], "any", false, false, true, 4), "line", [], "any", false, false, true, 4), 4, $this->source)), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\webprofiler\Twig\Extension\CodeExtension']->abbrClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themeNegotiator", [], "any", false, false, true, 4), "class", [], "any", false, false, true, 4), "class", [], "any", false, false, true, 4), 4, $this->source)));
        echo " :: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themeNegotiator", [], "any", false, false, true, 4), "class", [], "any", false, false, true, 4), "method", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</a>
  ";
        $context["negotiator"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo "  ";
        $context["time"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, true, 6)) ? (twig_sprintf("%0.0f ms", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 6), 6, $this->source))) : ("n/a"));
        // line 7
        echo "
  ";
        // line 8
        ob_start(function () { return ''; });
        // line 9
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Icon/twig.svg"));
        echo "
    <span class=\"sf-toolbar-value\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "activeTheme", [], "any", false, false, true, 10), "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
  ";
        // line 13
        ob_start(function () { return ''; });
        // line 14
        echo "    <div class=\"sf-toolbar-info-piece\">
      <b>";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Name"));
        echo "</b>
      <span>";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "activeTheme", [], "any", false, false, true, 16), "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Engine"));
        echo "</b>
      <span>";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "activeTheme", [], "any", false, false, true, 20), "engine", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Negotiator"));
        echo "</b>
      <span>";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["negotiator"] ?? null), 24, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Render Time"));
        echo "</b>
      <span>";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["time"] ?? null), 28, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Template Calls"));
        echo "</b>
      <span class=\"sf-toolbar-status\">";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Block Calls"));
        echo "</b>
      <span class=\"sf-toolbar-status\">";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "blockcount", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Macro Calls"));
        echo "</b>
      <span class=\"sf-toolbar-status\">";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "macrocount", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Twig filters"));
        echo "</b>
      <span class=\"sf-toolbar-status\">";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "twigfilterscount", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Twig functions"));
        echo "</b>
      <span class=\"sf-toolbar-status\">";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "twigfunctionscount", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "</span>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "
  ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]));
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 55
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 56
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "panel", [], "method", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 56,  206 => 55,  197 => 52,  194 => 51,  188 => 48,  184 => 47,  178 => 44,  174 => 43,  168 => 40,  164 => 39,  158 => 36,  154 => 35,  148 => 32,  144 => 31,  138 => 28,  134 => 27,  128 => 24,  124 => 23,  118 => 20,  114 => 19,  108 => 16,  104 => 15,  101 => 14,  99 => 13,  96 => 12,  91 => 10,  86 => 9,  84 => 8,  81 => 7,  78 => 6,  68 => 4,  66 => 3,  63 => 2,  56 => 1,  49 => 55,  46 => 54,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/theme.html.twig", "/app/web/modules/contrib/webprofiler/templates/Collector/theme.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 3);
        static $filters = array("escape" => 4, "file_link" => 4, "abbr_class" => 4, "format" => 6, "t" => 15);
        static $functions = array("include" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['escape', 'file_link', 'abbr_class', 'format', 't'],
                ['include']
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
