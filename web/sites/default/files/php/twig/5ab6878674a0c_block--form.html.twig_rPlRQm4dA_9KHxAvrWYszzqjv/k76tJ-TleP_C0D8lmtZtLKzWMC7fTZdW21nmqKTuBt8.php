<?php

/* themes/custom/agenchy/templates/block--form.html.twig */
class __TwigTemplate_d8318e39ea853c6081fdd7a18438c981df091c3d169ca91ef65d7dc53a96ac91 extends Twig_Template
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
        echo "<!-- Section -->
<section";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
\t<div class=\"container agenchy-form-get-quote\">
\t\t<div class=\"row\">
\t\t\t<!-- Column -->
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<!-- Title -->
\t\t\t\t<div class=\"title-container sm text-left\">
\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t";
        // line 10
        if (($context["label"] ?? null)) {
            // line 11
            echo "\t\t\t\t\t\t<h3 class=\"title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h3>
\t\t\t\t\t\t<span class=\"separator line-separator\"></span>
\t\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t\t</div>
\t\t\t\t</div><!-- Title -->
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
\t\t\t    ";
        // line 17
        if (($context["content"] ?? null)) {
            // line 18
            echo "\t\t\t      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
\t\t\t    ";
        }
        // line 20
        echo "\t\t\t</div><!-- Column -->
\t\t</div><!-- Row -->
\t</div><!-- Container -->
</section><!-- Section -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/block--form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  76 => 18,  74 => 17,  70 => 16,  66 => 14,  59 => 11,  57 => 10,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Section -->
<section{{ attributes }}>
\t<div class=\"container agenchy-form-get-quote\">
\t\t<div class=\"row\">
\t\t\t<!-- Column -->
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<!-- Title -->
\t\t\t\t<div class=\"title-container sm text-left\">
\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t{% if label %}
\t\t\t\t\t\t<h3 class=\"title\">{{ label }}</h3>
\t\t\t\t\t\t<span class=\"separator line-separator\"></span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div><!-- Title -->
\t\t\t\t{{ title_suffix }}
\t\t\t    {% if content %}
\t\t\t      {{ content }}
\t\t\t    {% endif %}
\t\t\t</div><!-- Column -->
\t\t</div><!-- Row -->
\t</div><!-- Container -->
</section><!-- Section -->", "themes/custom/agenchy/templates/block--form.html.twig", "C:\\xamppnew\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\block--form.html.twig");
    }
}
