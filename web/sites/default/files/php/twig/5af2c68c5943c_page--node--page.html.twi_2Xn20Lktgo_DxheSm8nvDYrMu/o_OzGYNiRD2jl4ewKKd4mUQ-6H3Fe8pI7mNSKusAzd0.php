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
        $tags = array("include" => 2, "if" => 7);
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

<div role=\"main\" class=\"main\"> 
  <div class=\"container\">
    ";
        // line 7
        if ($this->getAttribute(($context["page"] ?? null), "slider", array())) {
            // line 8
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
            echo "
";
        }
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "slider_bottom", array())) {
            // line 11
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider_bottom", array()), "html", null, true));
            echo "
";
        }
        // line 13
        echo "
    ";
        // line 14
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 15
            echo "    <section class=\"col-sm-12 main_content\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo " </section>
    ";
        }
        // line 17
        echo "\t\t
    ";
        // line 18
        if ($this->getAttribute(($context["page"] ?? null), "top_section", array())) {
            // line 19
            echo "    <section class=\"col-sm-12 top-section\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_section", array()), "html", null, true));
            echo " </section>
    ";
        }
        // line 21
        echo "\t\t
\t\t";
        // line 22
        if (($this->getAttribute(($context["page"] ?? null), "two_third_content_left", array()) || $this->getAttribute(($context["page"] ?? null), "one_third_content_right", array()))) {
            // line 23
            echo "    <section class=\"col-sm-12 two_third_one_third\">
    ";
            // line 24
            if ($this->getAttribute(($context["page"] ?? null), "two_third_content_left", array())) {
                // line 25
                echo "    <div class=\"col-sm-7\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "two_third_content_left", array()), "html", null, true));
                echo " </div><!-- Left Content -->
    ";
            }
            // line 27
            echo "    ";
            if ($this->getAttribute(($context["page"] ?? null), "one_third_content_right", array())) {
                // line 28
                echo "    <div class=\"col-sm-5\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "one_third_content_right", array()), "html", null, true));
                echo " </div><!-- Right Content -->
    ";
            }
            // line 30
            echo "    </section>
    ";
        }
        // line 32
        echo "\t\t
\t\t";
        // line 33
        if (($this->getAttribute(($context["page"] ?? null), "one_third_content_left", array()) || $this->getAttribute(($context["page"] ?? null), "two_third_content_right", array()))) {
            // line 34
            echo "    <section class=\"col-sm-12 one_third_two_third\">
    ";
            // line 35
            if ($this->getAttribute(($context["page"] ?? null), "one_third_content_left", array())) {
                // line 36
                echo "    <div class=\"col-sm-5\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "one_third_content_left", array()), "html", null, true));
                echo " </div><!-- Right Content -->
    ";
            }
            // line 38
            echo "    ";
            if ($this->getAttribute(($context["page"] ?? null), "two_third_content_right", array())) {
                // line 39
                echo "    <div class=\"col-sm-7\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "two_third_content_right", array()), "html", null, true));
                echo " </div><!-- Left Content -->
    ";
            }
            // line 41
            echo "    </section>
    ";
        }
        // line 42
        echo "\t\t
\t\t
\t\t
    ";
        // line 45
        if ($this->getAttribute(($context["page"] ?? null), "middle_section", array())) {
            // line 46
            echo "    <section class=\"col-sm-12 middle_section\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "middle_section", array()), "html", null, true));
            echo " </section>
    ";
        }
        // line 48
        echo "    
\t\t";
        // line 49
        if (($this->getAttribute(($context["page"] ?? null), "left_content", array()) || $this->getAttribute(($context["page"] ?? null), "right_content", array()))) {
            // line 50
            echo "    <section class=\"col-sm-12 left_right_content\">
    ";
            // line 51
            if ($this->getAttribute(($context["page"] ?? null), "left_content", array())) {
                // line 52
                echo "    <div class=\"col-sm-6\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_content", array()), "html", null, true));
                echo " </div><!-- Left Content -->
    ";
            }
            // line 54
            echo "
    ";
            // line 55
            if ($this->getAttribute(($context["page"] ?? null), "right_content", array())) {
                // line 56
                echo "    <div class=\"col-sm-6\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_content", array()), "html", null, true));
                echo " </div><!-- Right Content -->
    ";
            }
            // line 58
            echo "    
    </section>
    ";
        }
        // line 61
        echo "\t\t
    ";
        // line 62
        if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
            // line 63
            echo "    <section class=\"col-sm-12 section\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
            echo " </section>
    ";
        }
        // line 65
        echo "    
  </div>
</div>


<!-- Footer -->
";
        // line 71
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-7.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--page.html.twig", 71)->display($context);
        // line 72
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
        return array (  216 => 72,  214 => 71,  206 => 65,  200 => 63,  198 => 62,  195 => 61,  190 => 58,  184 => 56,  182 => 55,  179 => 54,  173 => 52,  171 => 51,  168 => 50,  166 => 49,  163 => 48,  157 => 46,  155 => 45,  150 => 42,  146 => 41,  140 => 39,  137 => 38,  131 => 36,  129 => 35,  126 => 34,  124 => 33,  121 => 32,  117 => 30,  111 => 28,  108 => 27,  102 => 25,  100 => 24,  97 => 23,  95 => 22,  92 => 21,  86 => 19,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  70 => 13,  64 => 11,  62 => 10,  56 => 8,  54 => 7,  48 => 3,  46 => 2,  43 => 1,);
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

<div role=\"main\" class=\"main\"> 
  <div class=\"container\">
    {% if page.slider %}
\t{{ page.slider }}
{% endif %}
{% if page.slider_bottom %}
\t{{ page.slider_bottom }}
{% endif %}

    {% if page.content %}
    <section class=\"col-sm-12 main_content\"> {{ page.content }} </section>
    {% endif %}
\t\t
    {% if page.top_section %}
    <section class=\"col-sm-12 top-section\"> {{ page.top_section }} </section>
    {% endif %}
\t\t
\t\t{% if page.two_third_content_left or page.one_third_content_right %}
    <section class=\"col-sm-12 two_third_one_third\">
    {% if page.two_third_content_left %}
    <div class=\"col-sm-7\"> {{ page.two_third_content_left }} </div><!-- Left Content -->
    {% endif %}
    {% if page.one_third_content_right %}
    <div class=\"col-sm-5\"> {{ page.one_third_content_right }} </div><!-- Right Content -->
    {% endif %}
    </section>
    {% endif %}
\t\t
\t\t{% if page.one_third_content_left or page.two_third_content_right %}
    <section class=\"col-sm-12 one_third_two_third\">
    {% if page.one_third_content_left %}
    <div class=\"col-sm-5\"> {{ page.one_third_content_left }} </div><!-- Right Content -->
    {% endif %}
    {% if page.two_third_content_right %}
    <div class=\"col-sm-7\"> {{ page.two_third_content_right }} </div><!-- Left Content -->
    {% endif %}
    </section>
    {% endif %}\t\t
\t\t
\t\t
    {% if page.middle_section %}
    <section class=\"col-sm-12 middle_section\"> {{ page.middle_section }} </section>
    {% endif %}
    
\t\t{% if page.left_content or page.right_content %}
    <section class=\"col-sm-12 left_right_content\">
    {% if page.left_content %}
    <div class=\"col-sm-6\"> {{ page.left_content }} </div><!-- Left Content -->
    {% endif %}

    {% if page.right_content %}
    <div class=\"col-sm-6\"> {{ page.right_content }} </div><!-- Right Content -->
    {% endif %}
    
    </section>
    {% endif %}
\t\t
    {% if page.section %}
    <section class=\"col-sm-12 section\"> {{ page.section }} </section>
    {% endif %}
    
  </div>
</div>


<!-- Footer -->
{% include theme_path ~ \"/templates/footer/footer-7.html.twig\" %}
<!-- Footer -->", "themes/custom/agenchy/templates/system/page/page--node--page.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\page\\page--node--page.html.twig");
    }
}
