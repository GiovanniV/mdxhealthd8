<?php

/* themes/custom/agenchy/templates/page--node--home-page.html.twig */
class __TwigTemplate_1bf6d1a7fa246770ff937cddabfe29be508468287bf267f902cc896262d8711b extends Twig_Template
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
        $tags = array("if" => 2, "include" => 3, "set" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include', 'set'),
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
        echo "<!-- Theme Panel Switcher -->
";
        // line 2
        if ((($context["disable_switch"] ?? null) == "on")) {
            // line 3
            echo "    ";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/switcher-style.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 3)->display($context);
        }
        // line 4
        echo "<!-- End Theme Panel Switcher -->
";
        // line 5
        $context["header_style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_header_style", array()), 0, array()), "value", array());
        // line 6
        if ((($context["header_style"] ?? null) == "")) {
            // line 7
            echo "  ";
            $context["header_style"] = "style1";
        }
        // line 9
        $context["page_header"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_page_header", array()), 0, array()), "value", array());
        // line 10
        if ((($context["page_header"] ?? null) == "")) {
            // line 11
            echo "  ";
            $context["page_header"] = "none";
        }
        // line 13
        echo "<!-- Header Begins -->
";
        // line 14
        if ((($context["header_style"] ?? null) == "style2")) {
            // line 15
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-2.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 15)->display($context);
        } elseif ((        // line 16
($context["header_style"] ?? null) == "style3")) {
            // line 17
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-3.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 17)->display($context);
        } elseif ((        // line 18
($context["header_style"] ?? null) == "style4")) {
            // line 19
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-4.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 19)->display($context);
        } elseif ((        // line 20
($context["header_style"] ?? null) == "style5")) {
            // line 21
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-5.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 21)->display($context);
        } elseif ((        // line 22
($context["header_style"] ?? null) == "style7")) {
            // line 23
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-7.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 23)->display($context);
        } elseif ((        // line 24
($context["header_style"] ?? null) == "style8")) {
            // line 25
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-8.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 25)->display($context);
        } elseif ((        // line 26
($context["header_style"] ?? null) == "style9")) {
            // line 27
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-9.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 27)->display($context);
        } elseif ((        // line 28
($context["header_style"] ?? null) == "style10")) {
            // line 29
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-10.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 29)->display($context);
        } elseif ((        // line 30
($context["header_style"] ?? null) == "style1")) {
            // line 31
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-1.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 31)->display($context);
        }
        // line 33
        echo "<!-- Header Ends -->

<!-- Page Header -->
";
        // line 36
        if ((($context["page_header"] ?? null) == "default")) {
            // line 37
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-1.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 37)->display($context);
        } elseif ((        // line 38
($context["page_header"] ?? null) == "dark")) {
            // line 39
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-2.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 39)->display($context);
        } elseif ((        // line 40
($context["page_header"] ?? null) == "small")) {
            // line 41
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-3.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 41)->display($context);
        } elseif ((        // line 42
($context["page_header"] ?? null) == "center")) {
            // line 43
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-4.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 43)->display($context);
        } elseif ((        // line 44
($context["page_header"] ?? null) == "button")) {
            // line 45
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-5.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 45)->display($context);
        } elseif ((        // line 46
($context["page_header"] ?? null) == "contact")) {
            // line 47
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-6.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 47)->display($context);
        } elseif ((        // line 48
($context["page_header"] ?? null) == "video")) {
            // line 49
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-7.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 49)->display($context);
        } elseif ((        // line 50
($context["page_header"] ?? null) == "image")) {
            // line 51
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-8.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 51)->display($context);
        } elseif ((        // line 52
($context["page_header"] ?? null) == "color")) {
            // line 53
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-9.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 53)->display($context);
        } else {
        }
        // line 56
        echo "<!-- Page Header -->
";
        // line 57
        if ($this->getAttribute(($context["page"] ?? null), "slider", array())) {
            // line 58
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
            echo "
";
        }
        // line 60
        echo "<!-- Model Window -->
";
        // line 61
        if ($this->getAttribute(($context["page"] ?? null), "model_window", array())) {
            // line 62
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "model_window", array()), "html", null, true));
            echo "
";
        }
        // line 64
        echo "<!-- Model Window -->\t\t
";
        // line 65
        if ((($context["header_style"] ?? null) == "style6")) {
            // line 66
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-6.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 66)->display($context);
            echo "\t
";
        }
        // line 68
        echo "
<div role=\"main\" class=\"main\"> 
    <div class=\"container\">
      <section>

        ";
        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "left_content", array())) {
            // line 74
            echo "        <div class=\"col-sm-6\">
        ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_content", array()), "html", null, true));
            echo "
        </div><!-- Left Content -->
        ";
        }
        // line 78
        echo "
        ";
        // line 79
        if ($this->getAttribute(($context["page"] ?? null), "right_content", array())) {
            // line 80
            echo "        <div class=\"col-sm-6\">
        ";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_content", array()), "html", null, true));
            echo "
        </div><!-- Right Content -->
        ";
        }
        // line 84
        echo "      
      </section>
    </div>
</div>

<div role=\"main\" class=\"main\">
\t";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_full_bar", array()), "html", null, true));
        echo "
\t";
        // line 91
        if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
            // line 92
            echo "\t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
            echo "
\t";
        }
        // line 94
        echo "
  
\t";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "

</div><!-- Page Main -->

<!-- Footer -->
";
        // line 101
        $context["footer_style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_footer_style", array()), 0, array()), "value", array());
        // line 102
        if ((($context["footer_style"] ?? null) == "")) {
            // line 103
            echo "  ";
            $context["footer_style"] = "default";
        }
        // line 105
        if ((($context["footer_style"] ?? null) == "style2")) {
            // line 106
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-2.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 106)->display($context);
        } elseif ((        // line 107
($context["footer_style"] ?? null) == "style3")) {
            // line 108
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-3.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 108)->display($context);
        } elseif ((        // line 109
($context["footer_style"] ?? null) == "style4")) {
            // line 110
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-4.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 110)->display($context);
        } elseif ((        // line 111
($context["footer_style"] ?? null) == "style5")) {
            // line 112
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-5.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 112)->display($context);
        } elseif ((        // line 113
($context["footer_style"] ?? null) == "style6")) {
            // line 114
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-6.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 114)->display($context);
        } elseif ((        // line 115
($context["footer_style"] ?? null) == "style7")) {
            // line 116
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-7.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 116)->display($context);
        } elseif ((        // line 117
($context["footer_style"] ?? null) == "style8")) {
            // line 118
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-8.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 118)->display($context);
        } else {
            // line 120
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-1.html.twig"), "themes/custom/agenchy/templates/page--node--home-page.html.twig", 120)->display($context);
        }
        // line 122
        echo "<!-- Footer -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/page--node--home-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 122,  313 => 120,  309 => 118,  307 => 117,  304 => 116,  302 => 115,  299 => 114,  297 => 113,  294 => 112,  292 => 111,  289 => 110,  287 => 109,  284 => 108,  282 => 107,  279 => 106,  277 => 105,  273 => 103,  271 => 102,  269 => 101,  261 => 96,  257 => 94,  251 => 92,  249 => 91,  245 => 90,  237 => 84,  231 => 81,  228 => 80,  226 => 79,  223 => 78,  217 => 75,  214 => 74,  212 => 73,  205 => 68,  199 => 66,  197 => 65,  194 => 64,  188 => 62,  186 => 61,  183 => 60,  177 => 58,  175 => 57,  172 => 56,  167 => 53,  165 => 52,  162 => 51,  160 => 50,  157 => 49,  155 => 48,  152 => 47,  150 => 46,  147 => 45,  145 => 44,  142 => 43,  140 => 42,  137 => 41,  135 => 40,  132 => 39,  130 => 38,  127 => 37,  125 => 36,  120 => 33,  116 => 31,  114 => 30,  111 => 29,  109 => 28,  106 => 27,  104 => 26,  101 => 25,  99 => 24,  96 => 23,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  84 => 18,  81 => 17,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  67 => 11,  65 => 10,  63 => 9,  59 => 7,  57 => 6,  55 => 5,  52 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Theme Panel Switcher -->
{% if disable_switch =='on' %}
    {% include theme_path ~ \"/templates/switcher-style.html.twig\" %}
{% endif %}<!-- End Theme Panel Switcher -->
{% set header_style = node.field_header_style.0.value %}
{% if header_style == '' %}
  {% set header_style = 'style1' %}
{% endif %}
{% set page_header = node.field_page_header.0.value %}
{% if page_header == '' %}
  {% set page_header = 'none' %}
{% endif %}
<!-- Header Begins -->
{% if header_style == 'style2' %}
\t{% include theme_path ~ \"/templates/header/header-2.html.twig\" %}
{% elseif header_style == 'style3' %}
\t{% include theme_path ~ \"/templates/header/header-3.html.twig\" %}
{% elseif header_style == 'style4' %}
\t{% include theme_path ~ \"/templates/header/header-4.html.twig\" %}
{% elseif header_style == 'style5' %}
\t{% include theme_path ~ \"/templates/header/header-5.html.twig\" %}
{% elseif header_style == 'style7' %}
\t{% include theme_path ~ \"/templates/header/header-7.html.twig\" %}
{% elseif header_style == 'style8' %}
\t{% include theme_path ~ \"/templates/header/header-8.html.twig\" %}
{% elseif header_style == 'style9' %}
\t{% include theme_path ~ \"/templates/header/header-9.html.twig\" %}
{% elseif header_style == 'style10' %}
\t{% include theme_path ~ \"/templates/header/header-10.html.twig\" %}
{% elseif header_style == 'style1'%}
\t{% include theme_path ~ \"/templates/header/header-1.html.twig\" %}
{% endif %}
<!-- Header Ends -->

<!-- Page Header -->
{% if page_header == 'default' %}
\t{% include theme_path ~ \"/templates/page header/page-header-1.html.twig\" %}
{% elseif page_header == 'dark' %}
\t{% include theme_path ~ \"/templates/page header/page-header-2.html.twig\" %}
{% elseif page_header == 'small' %}
\t{% include theme_path ~ \"/templates/page header/page-header-3.html.twig\" %}
{% elseif page_header == 'center' %}
\t{% include theme_path ~ \"/templates/page header/page-header-4.html.twig\" %}
{% elseif page_header == 'button' %}
\t{% include theme_path ~ \"/templates/page header/page-header-5.html.twig\" %}
{% elseif page_header == 'contact' %}
\t{% include theme_path ~ \"/templates/page header/page-header-6.html.twig\" %}
{% elseif page_header == 'video' %}
\t{% include theme_path ~ \"/templates/page header/page-header-7.html.twig\" %}
{% elseif page_header == 'image' %}
\t{% include theme_path ~ \"/templates/page header/page-header-8.html.twig\" %}
{% elseif page_header == 'color' %}
\t{% include theme_path ~ \"/templates/page header/page-header-9.html.twig\" %}
{% else %}
{% endif %}
<!-- Page Header -->
{% if page.slider %}
\t{{ page.slider }}
{% endif %}
<!-- Model Window -->
{% if page.model_window %}
\t{{ page.model_window }}
{% endif %}
<!-- Model Window -->\t\t
{% if header_style == 'style6' %}
\t{% include theme_path ~ \"/templates/header/header-6.html.twig\" %}\t
{% endif %}

<div role=\"main\" class=\"main\"> 
    <div class=\"container\">
      <section>

        {% if page.left_content %}
        <div class=\"col-sm-6\">
        {{ page.left_content }}
        </div><!-- Left Content -->
        {% endif %}

        {% if page.right_content %}
        <div class=\"col-sm-6\">
        {{ page.right_content }}
        </div><!-- Right Content -->
        {% endif %}
      
      </section>
    </div>
</div>

<div role=\"main\" class=\"main\">
\t{{ page.content_full_bar }}
\t{% if page.section %}
\t\t{{ page.section }}
\t{% endif %}

  
\t{{ page.content }}

</div><!-- Page Main -->

<!-- Footer -->
{% set footer_style = node.field_footer_style.0.value %}
{% if footer_style == '' %}
  {% set footer_style = 'default' %}
{% endif %}
{% if footer_style == 'style2' %}
\t{% include theme_path ~ \"/templates/footer/footer-2.html.twig\" %}
{% elseif footer_style == 'style3' %}
\t{% include theme_path ~ \"/templates/footer/footer-3.html.twig\" %}
{% elseif footer_style == 'style4' %}
\t{% include theme_path ~ \"/templates/footer/footer-4.html.twig\" %}
{% elseif footer_style == 'style5' %}
\t{% include theme_path ~ \"/templates/footer/footer-5.html.twig\" %}
{% elseif footer_style == 'style6' %}
\t{% include theme_path ~ \"/templates/footer/footer-6.html.twig\" %}
{% elseif footer_style == 'style7' %}
\t{% include theme_path ~ \"/templates/footer/footer-7.html.twig\" %}
{% elseif footer_style == 'style8' %}
\t{% include theme_path ~ \"/templates/footer/footer-8.html.twig\" %}
{% else %}
\t{% include theme_path ~ \"/templates/footer/footer-1.html.twig\" %}
{% endif %}
<!-- Footer -->", "themes/custom/agenchy/templates/page--node--home-page.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\page--node--home-page.html.twig");
    }
}
