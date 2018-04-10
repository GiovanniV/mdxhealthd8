<?php

/* themes/custom/agenchy/templates/block--contactblock-2.html.twig */
class __TwigTemplate_853f34af5142933766e937df0ffda84086d348f82df28797501612b417160cf9 extends Twig_Template
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
        $tags = array("if" => 2);
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
        echo "<section ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "m-20"), "method"), "html", null, true));
        echo ">
  ";
        // line 2
        if (($context["label"] ?? null)) {
            // line 3
            echo "  <!-- Title -->
  <div class=\"title-container sm text-left\">
    <div class=\"title-wrap\">
      <h3 class=\"title\">";
            // line 6
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h3>
      <span class=\"separator line-separator\"></span>
    </div>
  </div><!-- Title -->
  ";
        }
        // line 11
        echo "
  ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 13
        if (($context["content"] ?? null)) {
            // line 14
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 16
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/block--contactblock-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  72 => 14,  70 => 13,  66 => 12,  63 => 11,  55 => 6,  50 => 3,  48 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section {{ attributes.addClass('m-20') }}>
  {% if label %}
  <!-- Title -->
  <div class=\"title-container sm text-left\">
    <div class=\"title-wrap\">
      <h3 class=\"title\">{{ label }}</h3>
      <span class=\"separator line-separator\"></span>
    </div>
  </div><!-- Title -->
  {% endif %}

  {{ title_suffix }}
  {% if content %}
  {{ content }}
  {% endif %}
</section>", "themes/custom/agenchy/templates/block--contactblock-2.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\block--contactblock-2.html.twig");
    }
}
