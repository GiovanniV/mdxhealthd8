<?php

/* themes/custom/agenchy/templates/system/page/page--node--page.html.twig */
class __TwigTemplate_ba662e0d1dd8a60281940c2622f95105c1855fc69adeda0f861ebd6639852ff2 extends Twig_Template
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
        $tags = array("include" => 2, "if" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
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
        echo "<!-- Header Begins -->
";
        // line 2
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-3.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--page.html.twig", 2)->display($context);
        // line 3
        echo "<!-- Header Ends -->

";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "slider", array())) {
            // line 6
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
            echo "
";
        }
        // line 8
        if ($this->getAttribute(($context["page"] ?? null), "slider_bottom", array())) {
            // line 9
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider_bottom", array()), "html", null, true));
            echo "
";
        }
        // line 11
        echo "<div role=\"main\" class=\"main\"> 
  <div class=\"container\">
    
    ";
        // line 14
        if ($this->getAttribute(($context["page"] ?? null), "top_section", array())) {
            // line 15
            echo "    <section class=\"col-sm-12\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_section", array()), "html", null, true));
            echo " </section>
    ";
        }
        // line 17
        echo "
    <section class=\"col-sm-12\">
    ";
        // line 19
        if ($this->getAttribute(($context["page"] ?? null), "two_third_content_left", array())) {
            // line 20
            echo "    <div class=\"col-sm-7\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "two_third_content_left", array()), "html", null, true));
            echo " </div><!-- Left Content -->
    ";
        }
        // line 22
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "one_third_content_right", array())) {
            // line 23
            echo "    <div class=\"col-sm-5\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "one_third_content_right", array()), "html", null, true));
            echo " </div><!-- Right Content -->
    ";
        }
        // line 25
        echo "    </section>
    
    <section class=\"col-sm-12\">
    ";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "one_third_content_left", array())) {
            // line 29
            echo "    <div class=\"col-sm-5\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "one_third_content_left", array()), "html", null, true));
            echo " </div><!-- Right Content -->
    ";
        }
        // line 31
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "two_third_content_right", array())) {
            // line 32
            echo "    <div class=\"col-sm-7\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "two_third_content_right", array()), "html", null, true));
            echo " </div><!-- Left Content -->
    ";
        }
        // line 34
        echo "    </section>
    
    <section class=\"col-sm-12\">
    ";
        // line 37
        if ($this->getAttribute(($context["page"] ?? null), "left_content", array())) {
            // line 38
            echo "    <div class=\"col-sm-6\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_content", array()), "html", null, true));
            echo " </div><!-- Left Content -->
    ";
        }
        // line 40
        echo "
    ";
        // line 41
        if ($this->getAttribute(($context["page"] ?? null), "right_content", array())) {
            // line 42
            echo "    <div class=\"col-sm-6\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_content", array()), "html", null, true));
            echo " </div><!-- Right Content -->
    ";
        }
        // line 44
        echo "    
    </section>
    
    ";
        // line 47
        if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
            // line 48
            echo "    <section class=\"col-sm-12\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
            echo " </section>
    ";
        }
        // line 50
        echo "    
    ";
        // line 51
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 52
            echo "    <section class=\"col-sm-12\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo " </section>
    ";
        }
        // line 54
        echo "  </div>
</div>


<!-- Footer -->
";
        // line 59
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-7.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--page.html.twig", 59)->display($context);
        // line 60
        echo "<!-- Footer -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/system/page/page--node--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 60,  179 => 59,  172 => 54,  166 => 52,  164 => 51,  161 => 50,  155 => 48,  153 => 47,  148 => 44,  142 => 42,  140 => 41,  137 => 40,  131 => 38,  129 => 37,  124 => 34,  118 => 32,  115 => 31,  109 => 29,  107 => 28,  102 => 25,  96 => 23,  93 => 22,  87 => 20,  85 => 19,  81 => 17,  75 => 15,  73 => 14,  68 => 11,  62 => 9,  60 => 8,  54 => 6,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header Begins -->
{% include theme_path ~ \"/templates/header/header-3.html.twig\" %}
<!-- Header Ends -->

{% if page.slider %}
\t{{ page.slider }}
{% endif %}
{% if page.slider_bottom %}
\t{{ page.slider_bottom }}
{% endif %}
<div role=\"main\" class=\"main\"> 
  <div class=\"container\">
    
    {% if page.top_section %}
    <section class=\"col-sm-12\"> {{ page.top_section }} </section>
    {% endif %}

    <section class=\"col-sm-12\">
    {% if page.two_third_content_left %}
    <div class=\"col-sm-7\"> {{ page.two_third_content_left }} </div><!-- Left Content -->
    {% endif %}
    {% if page.one_third_content_right %}
    <div class=\"col-sm-5\"> {{ page.one_third_content_right }} </div><!-- Right Content -->
    {% endif %}
    </section>
    
    <section class=\"col-sm-12\">
    {% if page.one_third_content_left %}
    <div class=\"col-sm-5\"> {{ page.one_third_content_left }} </div><!-- Right Content -->
    {% endif %}
    {% if page.two_third_content_right %}
    <div class=\"col-sm-7\"> {{ page.two_third_content_right }} </div><!-- Left Content -->
    {% endif %}
    </section>
    
    <section class=\"col-sm-12\">
    {% if page.left_content %}
    <div class=\"col-sm-6\"> {{ page.left_content }} </div><!-- Left Content -->
    {% endif %}

    {% if page.right_content %}
    <div class=\"col-sm-6\"> {{ page.right_content }} </div><!-- Right Content -->
    {% endif %}
    
    </section>
    
    {% if page.section %}
    <section class=\"col-sm-12\"> {{ page.section }} </section>
    {% endif %}
    
    {% if page.content %}
    <section class=\"col-sm-12\"> {{ page.content }} </section>
    {% endif %}
  </div>
</div>


<!-- Footer -->
{% include theme_path ~ \"/templates/footer/footer-7.html.twig\" %}
<!-- Footer -->", "themes/custom/agenchy/templates/system/page/page--node--page.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\page\\page--node--page.html.twig");
    }
}
