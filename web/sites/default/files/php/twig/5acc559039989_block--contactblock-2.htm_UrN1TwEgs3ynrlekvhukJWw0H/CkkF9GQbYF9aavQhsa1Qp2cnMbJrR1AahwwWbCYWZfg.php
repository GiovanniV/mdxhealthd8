<?php

/* themes/custom/agenchy/templates/system/block/block--contactblock-2.html.twig */
class __TwigTemplate_3a0e50347a4646ec8a60633a2889200a2965de4460b3459ccdb609fd27946c39 extends Twig_Template
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
        $tags = array("if" => 3);
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  <div class=\"col-sm-12\">
    ";
        // line 3
        if (($context["label"] ?? null)) {
            // line 4
            echo "    <!-- Title -->
    <div class=\"title-container sm text-left\">
      <div class=\"title-wrap\">
        <h3 class=\"title\">";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h3>
        <span class=\"separator line-separator\"></span>
      </div>
    </div><!-- Title -->
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
    ";
        // line 14
        if (($context["content"] ?? null)) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 17
        echo "  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/system/block/block--contactblock-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  73 => 15,  71 => 14,  67 => 13,  64 => 12,  56 => 7,  51 => 4,  49 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section {{ attributes }}>
  <div class=\"col-sm-12\">
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
  </div>
</section>", "themes/custom/agenchy/templates/system/block/block--contactblock-2.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\block\\block--contactblock-2.html.twig");
    }
}
