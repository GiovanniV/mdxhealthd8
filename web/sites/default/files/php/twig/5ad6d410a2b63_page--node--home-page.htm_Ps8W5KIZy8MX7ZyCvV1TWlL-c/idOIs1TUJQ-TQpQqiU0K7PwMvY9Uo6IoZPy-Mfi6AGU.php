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
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-3.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 14)->display($context);
        // line 15
        echo "<!-- Header Ends -->

<!-- Page Header -->
";
        // line 18
        if ((($context["page_header"] ?? null) == "default")) {
            // line 19
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-1.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 19)->display($context);
        } elseif ((        // line 20
($context["page_header"] ?? null) == "dark")) {
            // line 21
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-2.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 21)->display($context);
        } elseif ((        // line 22
($context["page_header"] ?? null) == "small")) {
            // line 23
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-3.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 23)->display($context);
        } elseif ((        // line 24
($context["page_header"] ?? null) == "center")) {
            // line 25
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-4.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 25)->display($context);
        } elseif ((        // line 26
($context["page_header"] ?? null) == "button")) {
            // line 27
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-5.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 27)->display($context);
        } elseif ((        // line 28
($context["page_header"] ?? null) == "contact")) {
            // line 29
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-6.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 29)->display($context);
        } elseif ((        // line 30
($context["page_header"] ?? null) == "video")) {
            // line 31
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-7.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 31)->display($context);
        } elseif ((        // line 32
($context["page_header"] ?? null) == "image")) {
            // line 33
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-8.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 33)->display($context);
        } elseif ((        // line 34
($context["page_header"] ?? null) == "color")) {
            // line 35
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-9.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 35)->display($context);
        } else {
        }
        // line 38
        echo "<!-- Page Header -->
";
        // line 39
        if ($this->getAttribute(($context["page"] ?? null), "slider", array())) {
            // line 40
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
            echo "
";
        }
        // line 42
        echo "<!-- Model Window -->
";
        // line 43
        if ($this->getAttribute(($context["page"] ?? null), "model_window", array())) {
            // line 44
            echo "\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "model_window", array()), "html", null, true));
            echo "
";
        }
        // line 46
        echo "<!-- Model Window -->\t\t
";
        // line 47
        if ((($context["header_style"] ?? null) == "style6")) {
            // line 48
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-6.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 48)->display($context);
            echo "\t
";
        }
        // line 50
        echo "
<div role=\"main\" class=\"main\"> 
    <div class=\"container\">\t
\t\t\t<section class=\"col-sm-12\">
\t\t\t\t";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
\t\t\t</section>
      <section class=\"col-sm-12\">
        ";
        // line 57
        if ($this->getAttribute(($context["page"] ?? null), "one_third_content_left", array())) {
            // line 58
            echo "        <div class=\"col-sm-5\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "one_third_content_left", array()), "html", null, true));
            echo " </div><!-- Left Content -->
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if ($this->getAttribute(($context["page"] ?? null), "two_third_content_right", array())) {
            // line 62
            echo "        <div class=\"col-sm-7\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "two_third_content_right", array()), "html", null, true));
            echo " </div><!-- Right Content -->
        ";
        }
        // line 64
        echo "      </section>
      <section class=\"col-sm-12\">

      ";
        // line 67
        if ($this->getAttribute(($context["page"] ?? null), "left_content", array())) {
            // line 68
            echo "      <div class=\"col-sm-6\">
      ";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "left_content", array()), "html", null, true));
            echo "
      </div><!-- Left Content -->
      ";
        }
        // line 72
        echo "
      ";
        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "right_content", array())) {
            // line 74
            echo "      <div class=\"col-sm-6\">
      ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "right_content", array()), "html", null, true));
            echo "
      </div><!-- Right Content -->
      ";
        }
        // line 78
        echo "
      </section>
\t";
        // line 80
        if ($this->getAttribute(($context["page"] ?? null), "section", array())) {
            // line 81
            echo "\t\t<section class=\"col-sm-12\">
\t\t";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "section", array()), "html", null, true));
            echo "
\t\t</section>
\t";
        }
        // line 85
        echo "
    </div>
</div>

<div role=\"main\" class=\"main\">
\t
</div><!-- Page Main -->

<!-- Footer -->
";
        // line 94
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-7.html.twig"), "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", 94)->display($context);
        // line 95
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
        return array (  250 => 95,  248 => 94,  237 => 85,  231 => 82,  228 => 81,  226 => 80,  222 => 78,  216 => 75,  213 => 74,  211 => 73,  208 => 72,  202 => 69,  199 => 68,  197 => 67,  192 => 64,  186 => 62,  184 => 61,  181 => 60,  175 => 58,  173 => 57,  167 => 54,  161 => 50,  155 => 48,  153 => 47,  150 => 46,  144 => 44,  142 => 43,  139 => 42,  133 => 40,  131 => 39,  128 => 38,  123 => 35,  121 => 34,  118 => 33,  116 => 32,  113 => 31,  111 => 30,  108 => 29,  106 => 28,  103 => 27,  101 => 26,  98 => 25,  96 => 24,  93 => 23,  91 => 22,  88 => 21,  86 => 20,  83 => 19,  81 => 18,  76 => 15,  74 => 14,  71 => 13,  67 => 11,  65 => 10,  63 => 9,  59 => 7,  57 => 6,  55 => 5,  52 => 4,  48 => 3,  46 => 2,  43 => 1,);
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
    <div class=\"container\">\t
\t\t\t<section class=\"col-sm-12\">
\t\t\t\t{{ page.content }}
\t\t\t</section>
      <section class=\"col-sm-12\">
        {% if page.one_third_content_left %}
        <div class=\"col-sm-5\"> {{ page.one_third_content_left }} </div><!-- Left Content -->
        {% endif %}

        {% if page.two_third_content_right %}
        <div class=\"col-sm-7\"> {{ page.two_third_content_right }} </div><!-- Right Content -->
        {% endif %}
      </section>
      <section class=\"col-sm-12\">

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
\t{% if page.section %}
\t\t<section class=\"col-sm-12\">
\t\t{{ page.section }}
\t\t</section>
\t{% endif %}

    </div>
</div>

<div role=\"main\" class=\"main\">
\t
</div><!-- Page Main -->

<!-- Footer -->
{% include theme_path ~ \"/templates/footer/footer-7.html.twig\" %}
<!-- Footer -->", "themes/custom/agenchy/templates/system/page/page--node--home-page.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\page\\page--node--home-page.html.twig");
    }
}
