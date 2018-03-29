<?php

/* themes/custom/agenchy/templates/block--contact-block.html.twig */
class __TwigTemplate_b46eea873dd086a6152f50920d5cfc1f8d31a34f706e501bd959945be62f2178 extends Twig_Template
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
        $tags = array("if" => 7);
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
        echo "<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
\t<div ";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "modal-dialog"), "method"), "html", null, true));
        echo " role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
\t\t \t\t";
        // line 7
        if (($context["label"] ?? null)) {
            // line 8
            echo "\t\t\t\t    <h4 class=\"modal-title\" id=\"myModalLabel\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h4>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t</div><!-- Model Header -->
\t\t\t<!-- Model Body -->
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"contact-model agenchy-block-contact-model\">
\t\t\t\t\t";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
\t\t\t\t    ";
        // line 15
        if (($context["content"] ?? null)) {
            // line 16
            echo "\t\t\t\t        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
\t\t\t\t    ";
        }
        // line 18
        echo "\t\t\t\t</div><!-- Contact Info -->
\t\t\t</div><!-- Model Body -->
\t\t</div><!-- Model Content -->
\t</div><!-- Model Dialog -->
</div><!-- Model Ends -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/block--contact-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  77 => 16,  75 => 15,  71 => 14,  65 => 10,  59 => 8,  57 => 7,  53 => 6,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
\t<div {{ attributes.addClass('modal-dialog') }} role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t{{ title_prefix }}
\t\t \t\t{% if label %}
\t\t\t\t    <h4 class=\"modal-title\" id=\"myModalLabel\">{{ label }}</h4>
\t\t\t\t{% endif %}
\t\t\t</div><!-- Model Header -->
\t\t\t<!-- Model Body -->
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"contact-model agenchy-block-contact-model\">
\t\t\t\t\t{{ title_suffix }}
\t\t\t\t    {% if content %}
\t\t\t\t        {{ content }}
\t\t\t\t    {% endif %}
\t\t\t\t</div><!-- Contact Info -->
\t\t\t</div><!-- Model Body -->
\t\t</div><!-- Model Content -->
\t</div><!-- Model Dialog -->
</div><!-- Model Ends -->", "themes/custom/agenchy/templates/block--contact-block.html.twig", "C:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\block--contact-block.html.twig");
    }
}
