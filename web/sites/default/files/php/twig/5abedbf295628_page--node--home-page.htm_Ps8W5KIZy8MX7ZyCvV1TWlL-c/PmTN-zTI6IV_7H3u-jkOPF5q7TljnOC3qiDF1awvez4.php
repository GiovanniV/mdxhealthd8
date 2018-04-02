<?php

/* themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig */
class __TwigTemplate_290f58ad172e08788a91f3a596476a98ca21eb030cad2aa87e970697a8d00b38 extends Twig_Template
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
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/switcher-style.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 3)->display($context);
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
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-2.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 15)->display($context);
        } elseif ((        // line 16
($context["header_style"] ?? null) == "style3")) {
            // line 17
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-3.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 17)->display($context);
        } elseif ((        // line 18
($context["header_style"] ?? null) == "style4")) {
            // line 19
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-4.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 19)->display($context);
        } elseif ((        // line 20
($context["header_style"] ?? null) == "style5")) {
            // line 21
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-5.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 21)->display($context);
        } elseif ((        // line 22
($context["header_style"] ?? null) == "style7")) {
            // line 23
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-7.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 23)->display($context);
        } elseif ((        // line 24
($context["header_style"] ?? null) == "style8")) {
            // line 25
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-8.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 25)->display($context);
        } elseif ((        // line 26
($context["header_style"] ?? null) == "style9")) {
            // line 27
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-9.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 27)->display($context);
        } elseif ((        // line 28
($context["header_style"] ?? null) == "style10")) {
            // line 29
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-10.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 29)->display($context);
        } elseif ((        // line 30
($context["header_style"] ?? null) == "style1")) {
            // line 31
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-1.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 31)->display($context);
        }
        // line 33
        echo "<!-- Header Ends -->

<!-- Page Header -->
";
        // line 36
        if ((($context["page_header"] ?? null) == "default")) {
            // line 37
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-1.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 37)->display($context);
        } elseif ((        // line 38
($context["page_header"] ?? null) == "dark")) {
            // line 39
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-2.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 39)->display($context);
        } elseif ((        // line 40
($context["page_header"] ?? null) == "small")) {
            // line 41
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-3.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 41)->display($context);
        } elseif ((        // line 42
($context["page_header"] ?? null) == "center")) {
            // line 43
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-4.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 43)->display($context);
        } elseif ((        // line 44
($context["page_header"] ?? null) == "button")) {
            // line 45
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-5.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 45)->display($context);
        } elseif ((        // line 46
($context["page_header"] ?? null) == "contact")) {
            // line 47
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-6.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 47)->display($context);
        } elseif ((        // line 48
($context["page_header"] ?? null) == "video")) {
            // line 49
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-7.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 49)->display($context);
        } elseif ((        // line 50
($context["page_header"] ?? null) == "image")) {
            // line 51
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-8.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 51)->display($context);
        } elseif ((        // line 52
($context["page_header"] ?? null) == "color")) {
            // line 53
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-9.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 53)->display($context);
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
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-6.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 66)->display($context);
            echo "\t
";
        }
        // line 68
        echo "
<div role=\"main\" class=\"main\"> 
    <div class=\"container\">
      <section class=\"col-sm-12\">
        ";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "one_third_content", array())) {
            // line 73
            echo "        <div class=\"col-sm-5\">
        ";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "one_third_content", array()), "html", null, true));
            echo "
        </div><!-- Left Content -->
        ";
        }
        // line 77
        echo "
        ";
        // line 78
        if ($this->getAttribute(($context["page"] ?? null), "two_third_content", array())) {
            // line 79
            echo "        <div class=\"col-sm-7\">
        ";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "two_third_content", array()), "html", null, true));
            echo "
        </div><!-- Right Content -->
        ";
        }
        // line 83
        echo "      </section>
\t  <section class=\"col-sm-12\">

        ";
        // line 86
        if ($this->getAttribute(($context["page"] ?? null), "left_content", array())) {
            // line 87
            echo "        <div class=\"col-sm-6\">
        ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_content", array()), "html", null, true));
            echo "
        </div><!-- Left Content -->
        ";
        }
        // line 91
        echo "
        ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "right_content", array())) {
            // line 93
            echo "        <div class=\"col-sm-6\">
        ";
            // line 94
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_content", array()), "html", null, true));
            echo "
        </div><!-- Right Content -->
        ";
        }
        // line 97
        echo "      
      </section>
\t<section class=\"col-sm-12\">
\t";
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_full_bar", array()), "html", null, true));
        echo "
\t";
        // line 101
        if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
            // line 102
            echo "\t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
            echo "
\t";
        }
        // line 104
        echo "
  
\t";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
</section>
    </div>
</div>

<div role=\"main\" class=\"main\">
\t
</div><!-- Page Main -->

<!-- Footer -->
";
        // line 116
        $context["footer_style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_footer_style", array()), 0, array()), "value", array());
        // line 117
        if ((($context["footer_style"] ?? null) == "")) {
            // line 118
            echo "  ";
            $context["footer_style"] = "default";
        }
        // line 120
        if ((($context["footer_style"] ?? null) == "style2")) {
            // line 121
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-2.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 121)->display($context);
        } elseif ((        // line 122
($context["footer_style"] ?? null) == "style3")) {
            // line 123
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-3.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 123)->display($context);
        } elseif ((        // line 124
($context["footer_style"] ?? null) == "style4")) {
            // line 125
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-4.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 125)->display($context);
        } elseif ((        // line 126
($context["footer_style"] ?? null) == "style5")) {
            // line 127
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-5.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 127)->display($context);
        } elseif ((        // line 128
($context["footer_style"] ?? null) == "style6")) {
            // line 129
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-6.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 129)->display($context);
        } elseif ((        // line 130
($context["footer_style"] ?? null) == "style7")) {
            // line 131
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-7.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 131)->display($context);
        } elseif ((        // line 132
($context["footer_style"] ?? null) == "style8")) {
            // line 133
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-8.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 133)->display($context);
        } else {
            // line 135
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-1.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 135)->display($context);
        }
        // line 137
        echo "<!-- Footer -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 137,  344 => 135,  340 => 133,  338 => 132,  335 => 131,  333 => 130,  330 => 129,  328 => 128,  325 => 127,  323 => 126,  320 => 125,  318 => 124,  315 => 123,  313 => 122,  310 => 121,  308 => 120,  304 => 118,  302 => 117,  300 => 116,  287 => 106,  283 => 104,  277 => 102,  275 => 101,  271 => 100,  266 => 97,  260 => 94,  257 => 93,  255 => 92,  252 => 91,  246 => 88,  243 => 87,  241 => 86,  236 => 83,  230 => 80,  227 => 79,  225 => 78,  222 => 77,  216 => 74,  213 => 73,  211 => 72,  205 => 68,  199 => 66,  197 => 65,  194 => 64,  188 => 62,  186 => 61,  183 => 60,  177 => 58,  175 => 57,  172 => 56,  167 => 53,  165 => 52,  162 => 51,  160 => 50,  157 => 49,  155 => 48,  152 => 47,  150 => 46,  147 => 45,  145 => 44,  142 => 43,  140 => 42,  137 => 41,  135 => 40,  132 => 39,  130 => 38,  127 => 37,  125 => 36,  120 => 33,  116 => 31,  114 => 30,  111 => 29,  109 => 28,  106 => 27,  104 => 26,  101 => 25,  99 => 24,  96 => 23,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  84 => 18,  81 => 17,  79 => 16,  76 => 15,  74 => 14,  71 => 13,  67 => 11,  65 => 10,  63 => 9,  59 => 7,  57 => 6,  55 => 5,  52 => 4,  48 => 3,  46 => 2,  43 => 1,);
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
      <section class=\"col-sm-12\">
        {% if page.one_third_content %}
        <div class=\"col-sm-5\">
        {{ page.one_third_content }}
        </div><!-- Left Content -->
        {% endif %}

        {% if page.two_third_content %}
        <div class=\"col-sm-7\">
        {{ page.two_third_content }}
        </div><!-- Right Content -->
        {% endif %}
      </section>
\t  <section class=\"col-sm-12\">

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
\t<section class=\"col-sm-12\">
\t{{ page.content_full_bar }}
\t{% if page.section %}
\t\t{{ page.section }}
\t{% endif %}

  
\t{{ page.content }}
</section>
    </div>
</div>

<div role=\"main\" class=\"main\">
\t
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
<!-- Footer -->", "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", "C:\\xamppnew\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\page\\page--node--home-page.html.twig");
    }
}
