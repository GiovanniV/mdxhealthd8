<?php

/* themes/custom/agenchy/templates/page header/page-header-9.html.twig */
class __TwigTemplate_01174c447721d5d4309339e7ca8b5e7610e04e02ba380f80bc9819300a2f0135 extends Twig_Template
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
        $tags = array("if" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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
        echo "<!-- Page Header -->
<div class=\"page-header bg-color\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<!-- Page Header Wrapper -->
\t\t\t\t<div class=\"page-header-wrapper\">
\t\t\t\t\t<!-- Title & Sub Title -->
\t\t\t\t\t<h3 class=\"title\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h3>
\t\t\t\t\t";
        // line 10
        if ($this->getAttribute(($context["node"] ?? null), "field_sub_title", array())) {
            // line 11
            echo "\t\t\t\t\t<h6 class=\"sub-title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_sub_title", array()), 0, array()), "value", array()), "html", null, true));
            echo "</h6>
\t\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
\t\t\t\t</div><!-- Page Header Wrapper -->
\t\t\t</div><!-- Coloumn -->
\t\t</div><!-- Row -->
\t</div><!-- Container -->
</div><!-- Page Header -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/page header/page-header-9.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  59 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Page Header -->
<div class=\"page-header bg-color\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<!-- Page Header Wrapper -->
\t\t\t\t<div class=\"page-header-wrapper\">
\t\t\t\t\t<!-- Title & Sub Title -->
\t\t\t\t\t<h3 class=\"title\">{{ title }}</h3>
\t\t\t\t\t{% if node.field_sub_title %}
\t\t\t\t\t<h6 class=\"sub-title\">{{ node.field_sub_title.0.value }}</h6>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{{ page.breadcrumb }}
\t\t\t\t</div><!-- Page Header Wrapper -->
\t\t\t</div><!-- Coloumn -->
\t\t</div><!-- Row -->
\t</div><!-- Container -->
</div><!-- Page Header -->", "themes/custom/agenchy/templates/page header/page-header-9.html.twig", "C:\\xamppnew\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\page header\\page-header-9.html.twig");
    }
}
