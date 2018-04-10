<?php

/* themes/custom/agenchy/templates/page--node--contact.html.twig */
class __TwigTemplate_033ada759d37d68d4a7b4673c003d81f7172a484d48afff3cf62778742200534 extends Twig_Template
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
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/switcher-style.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 3)->display($context);
        }
        // line 4
        echo "<!-- End Theme Panel Switcher -->
";
        // line 5
        $context["contact_style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_contact_style", array()), 0, array()), "value", array());
        // line 6
        if ((($context["contact_style"] ?? null) == "")) {
            // line 7
            echo "  ";
            $context["contact_style"] = "style1";
        }
        // line 9
        $context["header_style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_header_style", array()), 0, array()), "value", array());
        // line 10
        if ((($context["header_style"] ?? null) == "")) {
            // line 11
            echo "  ";
            $context["header_style"] = "style1";
        }
        // line 13
        $context["page_header"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_page_header", array()), 0, array()), "value", array());
        // line 14
        if ((($context["page_header"] ?? null) == "")) {
            // line 15
            echo "  ";
            $context["page_header"] = "none";
        }
        // line 17
        echo "<!-- Header Begins -->
";
        // line 18
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-3.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 18)->display($context);
        // line 19
        echo "<!-- Header Ends -->

<!-- Page Header -->
";
        // line 22
        if ((($context["page_header"] ?? null) == "default")) {
            // line 23
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-1.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 23)->display($context);
        } elseif ((        // line 24
($context["page_header"] ?? null) == "dark")) {
            // line 25
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-2.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 25)->display($context);
        } elseif ((        // line 26
($context["page_header"] ?? null) == "small")) {
            // line 27
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-3.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 27)->display($context);
        } elseif ((        // line 28
($context["page_header"] ?? null) == "center")) {
            // line 29
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-4.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 29)->display($context);
        } elseif ((        // line 30
($context["page_header"] ?? null) == "button")) {
            // line 31
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-5.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 31)->display($context);
        } elseif ((        // line 32
($context["page_header"] ?? null) == "contact")) {
            // line 33
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-6.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 33)->display($context);
        } elseif ((        // line 34
($context["page_header"] ?? null) == "video")) {
            // line 35
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-7.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 35)->display($context);
        } elseif ((        // line 36
($context["page_header"] ?? null) == "image")) {
            // line 37
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-8.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 37)->display($context);
        } elseif ((        // line 38
($context["page_header"] ?? null) == "color")) {
            // line 39
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-9.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 39)->display($context);
        } else {
        }
        // line 42
        echo "<!-- Page Header -->

<!-- Model Window -->
";
        // line 45
        if ($this->getAttribute(($context["page"] ?? null), "model_window", array())) {
            // line 46
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "model_window", array()), "html", null, true));
            echo "
";
        }
        // line 48
        echo "<!-- Model Window -->\t\t
";
        // line 49
        if ((($context["header_style"] ?? null) == "style6")) {
            // line 50
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-6.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 50)->display($context);
            echo "\t
";
        }
        // line 52
        echo "
";
        // line 53
        if ((($context["contact_style"] ?? null) == "style1")) {
            // line 54
            echo "
\t<!-- Page Main -->
\t<div role=\"main\" class=\"main\">
\t\t<!-- Section -->
\t\t<section class=\"pad-none typo-dark\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 61
            if ($this->getAttribute(($context["page"] ?? null), "left_form_contact", array())) {
                // line 62
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_form_contact", array()), "html", null, true));
                echo "
\t                ";
            }
            // line 64
            echo "\t                <!-- Column -->
\t\t\t\t\t<div class=\"col-md-4 pad-40 col-eq-height bg-lgrey\">
\t\t\t\t\t\t";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_full_bar", array()), "html", null, true));
            echo "
\t\t\t\t\t\t";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t";
            // line 68
            if ($this->getAttribute(($context["page"] ?? null), "from_contact", array())) {
                // line 69
                echo "\t\t\t\t\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "from_contact", array()), "html", null, true));
                echo "
\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t</div><!-- Column -->
\t\t\t\t\t
\t\t\t\t\t";
            // line 73
            if ($this->getAttribute(($context["page"] ?? null), "right_form_contact", array())) {
                // line 74
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_form_contact", array()), "html", null, true));
                echo "
\t                ";
            }
            // line 76
            echo "\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->
\t\t</section><!-- Section -->
\t\t";
            // line 79
            if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
                // line 80
                echo "\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
                echo "
\t\t";
            }
            // line 82
            echo "\t</div><!-- Page Main -->
";
        } elseif ((        // line 83
($context["contact_style"] ?? null) == "style2")) {
            // line 84
            echo "\t<!-- Page Main -->
\t<div role=\"main\" class=\"main\">
\t\t<!-- Section -->
\t\t<section class=\"bg-lgrey\">\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 90
            if ($this->getAttribute(($context["page"] ?? null), "left_form_contact", array())) {
                // line 91
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_form_contact", array()), "html", null, true));
                echo "
\t                ";
            }
            // line 93
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t<div class=\"info-icon bg-dark\">
\t\t\t\t\t\t\t\t<i class=\"uni-fountain-pen\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 99
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_full_bar", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t";
            // line 101
            if ($this->getAttribute(($context["page"] ?? null), "from_contact", array())) {
                // line 102
                echo "\t\t\t\t\t\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "from_contact", array()), "html", null, true));
                echo "
\t\t\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t\t\t</div><!-- Contact Info -->
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->\t
\t\t</section><!-- Section -->

\t\t";
            // line 110
            if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
                // line 111
                echo "\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
                echo "
\t\t";
            }
            // line 113
            echo "\t</div><!-- Page Main -->
";
        } else {
            // line 115
            echo "\t<!-- Page Main -->
\t<div role=\"main\" class=\"main\">
\t\t";
            // line 117
            if ($this->getAttribute(($context["page"] ?? null), "top_section", array())) {
                // line 118
                echo "\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_section", array()), "html", null, true));
                echo "
\t\t";
            }
            // line 120
            echo "\t\t
\t\t<!-- Section -->
\t\t<section class=\"pad-none typo-dark\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- Column -->
\t\t\t\t\t<div class=\"col-sm-7 pad-60 col-eq-height bg-lgrey\">
\t\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t\t<h4 class=\"title\">";
            // line 129
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h4>
\t\t\t\t\t\t\t\t<span class=\"separator line-separator\"></span>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- Name -->
\t\t\t\t\t\t";
            // line 133
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_full_bar", array()), "html", null, true));
            echo "
\t\t\t\t\t\t";
            // line 134
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t";
            // line 135
            if ($this->getAttribute(($context["page"] ?? null), "from_contact", array())) {
                // line 136
                echo "\t\t\t\t\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "from_contact", array()), "html", null, true));
                echo "
\t\t\t\t\t\t";
            }
            // line 138
            echo "\t\t\t\t\t</div><!-- Column -->
\t\t\t\t\t
\t\t\t\t\t";
            // line 140
            if ($this->getAttribute(($context["page"] ?? null), "right_form_contact", array())) {
                // line 141
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_form_contact", array()), "html", null, true));
                echo "
\t                ";
            }
            // line 143
            echo "\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->
\t\t</section><!-- Section -->
\t\t";
            // line 146
            if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
                // line 147
                echo "\t\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
                echo "
\t\t";
            }
            // line 149
            echo "\t</div><!-- Page Main -->
";
        }
        // line 151
        echo "<!-- Footer -->
";
        // line 152
        $context["footer_style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_footer_style", array()), 0, array()), "value", array());
        // line 153
        if ((($context["footer_style"] ?? null) == "")) {
            // line 154
            echo "  ";
            $context["footer_style"] = "default";
        }
        // line 156
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-7.html.twig"), "themes/custom/agenchy/templates/page--node--contact.html.twig", 156)->display($context);
        // line 157
        echo "<!-- Footer -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/page--node--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 157,  378 => 156,  374 => 154,  372 => 153,  370 => 152,  367 => 151,  363 => 149,  357 => 147,  355 => 146,  350 => 143,  344 => 141,  342 => 140,  338 => 138,  332 => 136,  330 => 135,  326 => 134,  322 => 133,  315 => 129,  304 => 120,  298 => 118,  296 => 117,  292 => 115,  288 => 113,  282 => 111,  280 => 110,  272 => 104,  266 => 102,  264 => 101,  260 => 100,  256 => 99,  248 => 93,  242 => 91,  240 => 90,  232 => 84,  230 => 83,  227 => 82,  221 => 80,  219 => 79,  214 => 76,  208 => 74,  206 => 73,  202 => 71,  196 => 69,  194 => 68,  190 => 67,  186 => 66,  182 => 64,  176 => 62,  174 => 61,  165 => 54,  163 => 53,  160 => 52,  154 => 50,  152 => 49,  149 => 48,  143 => 46,  141 => 45,  136 => 42,  131 => 39,  129 => 38,  126 => 37,  124 => 36,  121 => 35,  119 => 34,  116 => 33,  114 => 32,  111 => 31,  109 => 30,  106 => 29,  104 => 28,  101 => 27,  99 => 26,  96 => 25,  94 => 24,  91 => 23,  89 => 22,  84 => 19,  82 => 18,  79 => 17,  75 => 15,  73 => 14,  71 => 13,  67 => 11,  65 => 10,  63 => 9,  59 => 7,  57 => 6,  55 => 5,  52 => 4,  48 => 3,  46 => 2,  43 => 1,);
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
{% set contact_style = node.field_contact_style.0.value %}
{% if contact_style == '' %}
  {% set contact_style = 'style1' %}
{% endif %}
{% set header_style = node.field_header_style.0.value %}
{% if header_style == '' %}
  {% set header_style = 'style1' %}
{% endif %}
{% set page_header = node.field_page_header.0.value %}
{% if page_header == '' %}
  {% set page_header = 'none' %}
{% endif %}
<!-- Header Begins -->
{% include theme_path ~ \"/templates/header/header-3.html.twig\" %}
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

<!-- Model Window -->
{% if page.model_window %}
\t{{ page.model_window }}
{% endif %}
<!-- Model Window -->\t\t
{% if header_style == 'style6' %}
\t{% include theme_path ~ \"/templates/header/header-6.html.twig\" %}\t
{% endif %}

{% if contact_style == 'style1' %}

\t<!-- Page Main -->
\t<div role=\"main\" class=\"main\">
\t\t<!-- Section -->
\t\t<section class=\"pad-none typo-dark\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% if page.left_form_contact %}
\t\t\t\t\t\t{{ page.left_form_contact }}
\t                {% endif %}
\t                <!-- Column -->
\t\t\t\t\t<div class=\"col-md-4 pad-40 col-eq-height bg-lgrey\">
\t\t\t\t\t\t{{ page.content_full_bar }}
\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t\t{% if page.from_contact %}
\t\t\t\t\t\t\t{{ page.from_contact }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t\t
\t\t\t\t\t{% if page.right_form_contact %}
\t\t\t\t\t\t{{ page.right_form_contact }}
\t                {% endif %}
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->
\t\t</section><!-- Section -->
\t\t{% if page.section %}
\t\t\t{{ page.section }}
\t\t{% endif %}
\t</div><!-- Page Main -->
{% elseif contact_style == 'style2' %}
\t<!-- Page Main -->
\t<div role=\"main\" class=\"main\">
\t\t<!-- Section -->
\t\t<section class=\"bg-lgrey\">\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% if page.left_form_contact %}
\t\t\t\t\t\t{{ page.left_form_contact }}
\t                {% endif %}
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t<div class=\"info-icon bg-dark\">
\t\t\t\t\t\t\t\t<i class=\"uni-fountain-pen\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ page.content_full_bar }}
\t\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t\t\t{% if page.from_contact %}
\t\t\t\t\t\t\t\t{{ page.from_contact }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div><!-- Contact Info -->
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->\t
\t\t</section><!-- Section -->

\t\t{% if page.section %}
\t\t\t{{ page.section }}
\t\t{% endif %}
\t</div><!-- Page Main -->
{% else %}
\t<!-- Page Main -->
\t<div role=\"main\" class=\"main\">
\t\t{% if page.top_section %}
\t\t\t{{ page.top_section }}
\t\t{% endif %}
\t\t
\t\t<!-- Section -->
\t\t<section class=\"pad-none typo-dark\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- Column -->
\t\t\t\t\t<div class=\"col-sm-7 pad-60 col-eq-height bg-lgrey\">
\t\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t\t<h4 class=\"title\">{{ title }}</h4>
\t\t\t\t\t\t\t\t<span class=\"separator line-separator\"></span>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- Name -->
\t\t\t\t\t\t{{ page.content_full_bar }}
\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t\t{% if page.from_contact %}
\t\t\t\t\t\t\t{{ page.from_contact }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t\t
\t\t\t\t\t{% if page.right_form_contact %}
\t\t\t\t\t\t{{ page.right_form_contact }}
\t                {% endif %}
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->
\t\t</section><!-- Section -->
\t\t{% if page.section %}
\t\t\t{{ page.section }}
\t\t{% endif %}
\t</div><!-- Page Main -->
{% endif %}
<!-- Footer -->
{% set footer_style = node.field_footer_style.0.value %}
{% if footer_style == '' %}
  {% set footer_style = 'default' %}
{% endif %}
{% include theme_path ~ \"/templates/footer/footer-7.html.twig\" %}
<!-- Footer -->", "themes/custom/agenchy/templates/page--node--contact.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\page--node--contact.html.twig");
    }
}
