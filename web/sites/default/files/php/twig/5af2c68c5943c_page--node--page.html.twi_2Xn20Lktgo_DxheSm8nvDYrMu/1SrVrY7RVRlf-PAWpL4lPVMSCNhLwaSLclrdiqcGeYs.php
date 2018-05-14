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
        $tags = array("include" => 3, "if" => 8);
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
        echo "<div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_class"] ?? null), "html", null, true));
        echo "\">
<!-- Header Begins -->
";
        // line 3
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-3.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--page.html.twig", 3)->display($context);
        // line 4
        echo "<!-- Header Ends -->

<div role=\"main\" class=\"main\"> 
  <div class=\"container\">
    ";
        // line 8
        if ($this->getAttribute(($context["page"] ?? null), "slider", array())) {
            // line 9
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
            echo "
";
        }
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "slider_bottom", array())) {
            // line 12
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider_bottom", array()), "html", null, true));
            echo "
";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 16
            echo "    <section class=\"col-sm-12 main_content\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo " </section>
    ";
        }
        // line 18
        echo "\t\t
    ";
        // line 19
        if ($this->getAttribute(($context["page"] ?? null), "top_section", array())) {
            // line 20
            echo "    <section class=\"col-sm-12 top-section\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_section", array()), "html", null, true));
            echo " </section>
    ";
        }
        // line 22
        echo "\t\t
\t\t";
        // line 23
        if (($this->getAttribute(($context["page"] ?? null), "two_third_content_left", array()) || $this->getAttribute(($context["page"] ?? null), "one_third_content_right", array()))) {
            // line 24
            echo "    <section class=\"col-sm-12 two_third_one_third\">
    ";
            // line 25
            if ($this->getAttribute(($context["page"] ?? null), "two_third_content_left", array())) {
                // line 26
                echo "    <div class=\"col-sm-7\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "two_third_content_left", array()), "html", null, true));
                echo " </div><!-- Left Content -->
    ";
            }
            // line 28
            echo "    ";
            if ($this->getAttribute(($context["page"] ?? null), "one_third_content_right", array())) {
                // line 29
                echo "    <div class=\"col-sm-5\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "one_third_content_right", array()), "html", null, true));
                echo " </div><!-- Right Content -->
    ";
            }
            // line 31
            echo "    </section>
    ";
        }
        // line 33
        echo "\t\t
\t\t";
        // line 34
        if (($this->getAttribute(($context["page"] ?? null), "one_third_content_left", array()) || $this->getAttribute(($context["page"] ?? null), "two_third_content_right", array()))) {
            // line 35
            echo "    <section class=\"col-sm-12 one_third_two_third\">
    ";
            // line 36
            if ($this->getAttribute(($context["page"] ?? null), "one_third_content_left", array())) {
                // line 37
                echo "    <div class=\"col-sm-5\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "one_third_content_left", array()), "html", null, true));
                echo " </div><!-- Right Content -->
    ";
            }
            // line 39
            echo "    ";
            if ($this->getAttribute(($context["page"] ?? null), "two_third_content_right", array())) {
                // line 40
                echo "    <div class=\"col-sm-7\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "two_third_content_right", array()), "html", null, true));
                echo " </div><!-- Left Content -->
    ";
            }
            // line 42
            echo "    </section>
    ";
        }
        // line 43
        echo "\t\t
\t\t
\t\t
    ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "middle_section", array())) {
            // line 47
            echo "    <section class=\"col-sm-12 middle_section\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "middle_section", array()), "html", null, true));
            echo " </section>
    ";
        }
        // line 49
        echo "    
\t\t";
        // line 50
        if (($this->getAttribute(($context["page"] ?? null), "left_content", array()) || $this->getAttribute(($context["page"] ?? null), "right_content", array()))) {
            // line 51
            echo "    <section class=\"col-sm-12 left_right_content\">
    ";
            // line 52
            if ($this->getAttribute(($context["page"] ?? null), "left_content", array())) {
                // line 53
                echo "    <div class=\"col-sm-6\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_content", array()), "html", null, true));
                echo " </div><!-- Left Content -->
    ";
            }
            // line 55
            echo "
    ";
            // line 56
            if ($this->getAttribute(($context["page"] ?? null), "right_content", array())) {
                // line 57
                echo "    <div class=\"col-sm-6\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_content", array()), "html", null, true));
                echo " </div><!-- Right Content -->
    ";
            }
            // line 59
            echo "    
    </section>
    ";
        }
        // line 62
        echo "\t\t
    ";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
            // line 64
            echo "    <section class=\"col-sm-12 section\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
            echo " </section>
    ";
        }
        // line 66
        echo "    
  </div>
</div>


<!-- Footer -->
";
        // line 72
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-7.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--page.html.twig", 72)->display($context);
        // line 73
        echo "<!-- Footer -->
</div>";
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
        return array (  219 => 73,  217 => 72,  209 => 66,  203 => 64,  201 => 63,  198 => 62,  193 => 59,  187 => 57,  185 => 56,  182 => 55,  176 => 53,  174 => 52,  171 => 51,  169 => 50,  166 => 49,  160 => 47,  158 => 46,  153 => 43,  149 => 42,  143 => 40,  140 => 39,  134 => 37,  132 => 36,  129 => 35,  127 => 34,  124 => 33,  120 => 31,  114 => 29,  111 => 28,  105 => 26,  103 => 25,  100 => 24,  98 => 23,  95 => 22,  89 => 20,  87 => 19,  84 => 18,  78 => 16,  76 => 15,  73 => 14,  67 => 12,  65 => 11,  59 => 9,  57 => 8,  51 => 4,  49 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{{ page_class }}\">
<!-- Header Begins -->
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
<!-- Footer -->
</div>", "themes/custom/agenchy/templates/system/page/page--node--page.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\page\\page--node--page.html.twig");
    }
}
