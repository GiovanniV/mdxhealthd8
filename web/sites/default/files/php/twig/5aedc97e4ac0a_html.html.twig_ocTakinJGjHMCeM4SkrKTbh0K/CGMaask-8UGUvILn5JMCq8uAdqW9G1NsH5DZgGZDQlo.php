<?php

/* themes/custom/agenchy/templates/html.html.twig */
class __TwigTemplate_9d7b24cd72579068ea7f5f7da908ec541a4f6bfd68d701667a7447702c280595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 9);
        $filters = array("raw" => 5, "safe_join" => 6, "t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw', 'safe_join', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<!DOCTYPE html>
<html";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["html_attributes"] ?? null), "addClass", array(0 => ($context["layout_class"] ?? null)), "method"), "html", null, true));
        echo " style=\"background-image: url(";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bg_image"] ?? null), "html", null, true));
        echo ");'\">
\t<head>
\t\t<!-- Basic -->
\t\t<head-placeholder token=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
\t    <title>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
\t    <css-placeholder token=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
\t    <js-placeholder token=\"";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
\t    ";
        // line 9
        if ((($context["general_setting_tracking_code"] ?? null) != "")) {
            // line 10
            echo "\t      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["general_setting_tracking_code"] ?? null))));
            echo "
\t    ";
        }
        // line 12
        echo "\t    ";
        if ((($context["custom_css"] ?? null) != "")) {
            // line 13
            echo "\t      <style type=\"text/css\" media=\"all\">
\t        ";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["custom_css"] ?? null))));
            echo "
\t      </style>
\t    ";
        }
        // line 17
        echo "\t</head>
<body";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
\t<div id=\"agenchy-theme-path\" class=\"hidden\" data-agenchy-theme-path=\"";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["theme_path"] ?? null)), "html", null, true));
        echo "\"></div>
\t<a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
  \t</a>
\t\t<!-- Page Loader -->
\t\t<div id=\"pageloader\">
\t\t\t<div class=\"loader-inner\">
\t\t\t\t<img src=\"";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["theme_path"] ?? null)), "html", null, true));
        echo "/images/default/preloader.gif\" alt=\"Pre Loader\" height=\"100\" width=\"100\">
\t\t\t</div>
\t\t</div><!-- Page Loader -->

\t\t<a href=\"#0\" class=\"cd-top\">Top</a>
\t\t";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
\t\t";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
\t\t";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
\t<js-bottom-placeholder token=\"";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">\t

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  126 => 33,  122 => 32,  118 => 31,  110 => 26,  102 => 21,  97 => 19,  93 => 18,  90 => 17,  84 => 14,  81 => 13,  78 => 12,  72 => 10,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html{{ html_attributes.addClass( layout_class ) }} style=\"background-image: url({{ bg_image }});'\">
\t<head>
\t\t<!-- Basic -->
\t\t<head-placeholder token=\"{{ placeholder_token|raw }}\">
\t    <title>{{ head_title|safe_join(' | ') }}</title>
\t    <css-placeholder token=\"{{ placeholder_token|raw }}\">
\t    <js-placeholder token=\"{{ placeholder_token|raw }}\">
\t    {% if general_setting_tracking_code != '' %}
\t      {{ general_setting_tracking_code|t }}
\t    {% endif %}
\t    {% if custom_css != '' %}
\t      <style type=\"text/css\" media=\"all\">
\t        {{ custom_css|t }}
\t      </style>
\t    {% endif %}
\t</head>
<body{{ attributes }}>
\t<div id=\"agenchy-theme-path\" class=\"hidden\" data-agenchy-theme-path=\"{{ base_path ~ theme_path }}\"></div>
\t<a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
  \t</a>
\t\t<!-- Page Loader -->
\t\t<div id=\"pageloader\">
\t\t\t<div class=\"loader-inner\">
\t\t\t\t<img src=\"{{ base_path~theme_path }}/images/default/preloader.gif\" alt=\"Pre Loader\" height=\"100\" width=\"100\">
\t\t\t</div>
\t\t</div><!-- Page Loader -->

\t\t<a href=\"#0\" class=\"cd-top\">Top</a>
\t\t{{ page_top }}
\t\t{{ page }}
\t\t{{ page_bottom }}
\t<js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">\t

</body>
</html>", "themes/custom/agenchy/templates/html.html.twig", "C:\\xamppnew\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\html.html.twig");
    }
}
