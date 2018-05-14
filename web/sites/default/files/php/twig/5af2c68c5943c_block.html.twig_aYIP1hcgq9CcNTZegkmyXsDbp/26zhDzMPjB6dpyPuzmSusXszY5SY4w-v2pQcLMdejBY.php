<?php

/* themes/custom/agenchy/templates/system/block/block.html.twig */
class __TwigTemplate_f4ce2d6a81405f4623344b1908ac3ffce1b3ab791a968b5fc9023fe7500bde82 extends Twig_Template
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
        $tags = array("if" => 1, "set" => 91);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
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
        if ((($context["region"] ?? null) == "search")) {
            // line 2
            echo "\t<div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
\t  ";
            // line 3
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 4
            if (($context["content"] ?? null)) {
                // line 5
                echo "\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 7
            echo "\t</div>
";
        } elseif ((        // line 8
($context["region"] ?? null) == "breadcrumb")) {
            // line 9
            echo "        <ol";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "breadcrumb"), "method"), "html", null, true));
            echo ">
        ";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
       
        ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
        ";
            // line 13
            if (($context["content"] ?? null)) {
                // line 14
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
        ";
            }
            // line 16
            echo "    </ol>
";
        } elseif ((((((((((((((((((        // line 17
($context["region"] ?? null) == "footer_1_column_2") || (($context["region"] ?? null) == "footer_1_column_3")) || (($context["region"] ?? null) == "footer_1_column_4")) || (($context["region"] ?? null) == "footer_6_column_1")) || (($context["region"] ?? null) == "footer_6_column_2")) || (($context["region"] ?? null) == "footer_6_column_3")) || (($context["region"] ?? null) == "footer_6_column_4")) || (($context["region"] ?? null) == "footer_8_column_1")) || (($context["region"] ?? null) == "footer_8_column_2")) || (($context["region"] ?? null) == "footer_8_column_3")) || (($context["region"] ?? null) == "footer_8_column_4")) || (($context["region"] ?? null) == "footer_3_column_1")) || (($context["region"] ?? null) == "footer_5_column_1")) || (($context["region"] ?? null) == "footer_3_column_2")) || (($context["region"] ?? null) == "footer_5_column_2")) || (($context["region"] ?? null) == "footer_3_column_3")) || (($context["region"] ?? null) == "footer_5_column_3"))) {
            // line 18
            echo "\t\t<div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "widget"), "method"), "html", null, true));
            echo ">
\t \t\t";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
\t \t\t ";
            // line 20
            if (($context["label"] ?? null)) {
                // line 21
                echo "            <h5 class=\"widget-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "<span></span></h5>
            ";
            }
            // line 23
            echo "\t\t    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t\t    ";
            // line 24
            if (($context["content"] ?? null)) {
                // line 25
                echo "\t\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t\t    ";
            }
            // line 27
            echo "\t\t</div>
";
        } elseif (((        // line 28
($context["region"] ?? null) == "footer_2_column_1") || (($context["region"] ?? null) == "footer_7_column_1"))) {
            // line 29
            echo "\t\t<div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "widget"), "method"), "html", null, true));
            echo ">
\t \t\t";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
\t \t\t ";
            // line 31
            if (($context["label"] ?? null)) {
                // line 32
                echo "            <h5 class=\"widget-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "</h5>
            ";
            }
            // line 34
            echo "\t\t    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t\t    ";
            // line 35
            if (($context["content"] ?? null)) {
                // line 36
                echo "\t\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t\t    ";
            }
            // line 38
            echo "\t\t</div>
";
        } elseif (((        // line 39
($context["region"] ?? null) == "footer_2_column_2") || (($context["region"] ?? null) == "footer_7_column_2"))) {
            // line 40
            echo "\t\t<div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "widget"), "method"), "html", null, true));
            echo ">
\t \t\t";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
\t \t\t ";
            // line 42
            if (($context["label"] ?? null)) {
                // line 43
                echo "            <h5>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "<span></span></h5>
            ";
            }
            // line 45
            echo "\t\t    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t\t    ";
            // line 46
            if (($context["content"] ?? null)) {
                // line 47
                echo "\t\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t\t    ";
            }
            // line 49
            echo "\t\t</div>
";
        } elseif (((((        // line 50
($context["region"] ?? null) == "footer_4_column_1") || (($context["region"] ?? null) == "footer_4_column_2")) || (($context["region"] ?? null) == "footer_4_column_3")) || (($context["region"] ?? null) == "footer_4_column_4"))) {
            // line 51
            echo "\t<div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
 \t\t";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 53
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 54
            if (($context["content"] ?? null)) {
                // line 55
                echo "\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 57
            echo "\t</div>
";
        } elseif ((        // line 58
($context["region"] ?? null) == "header_social_bar")) {
            // line 59
            echo "\t<ul ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "agenchy-header-social"), "method"), "html", null, true));
            echo ">
\t    ";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 61
            if (($context["content"] ?? null)) {
                // line 62
                echo "\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 64
            echo "\t</ul>
";
        } elseif ((((((        // line 65
($context["region"] ?? null) == "footer_top_logo") || (($context["region"] ?? null) == "footer_bottom_logo")) || (($context["region"] ?? null) == "footer_top_left_content")) || (($context["region"] ?? null) == "footer_1_column_1")) || (($context["region"] ?? null) == "header_top_2"))) {
            // line 66
            echo "\t<div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
\t    ";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 68
            if (($context["content"] ?? null)) {
                // line 69
                echo "\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 71
            echo "\t</div>
";
        } elseif (((        // line 72
($context["region"] ?? null) == "header_top_1") || (($context["region"] ?? null) == "header_middle"))) {
            // line 73
            echo "\t<ul ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
\t    ";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 75
            if (($context["content"] ?? null)) {
                // line 76
                echo "\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 78
            echo "\t</ul>
";
        } elseif (((        // line 79
($context["region"] ?? null) == "sidebar_first") || (($context["region"] ?? null) == "sidebar_second"))) {
            // line 80
            echo "\t<div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "widget"), "method"), "html", null, true));
            echo ">
\t\t";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
 \t\t";
            // line 82
            if (($context["label"] ?? null)) {
                // line 83
                echo "        \t<h5 class=\"widget-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "<span></span></h5>
        ";
            }
            // line 85
            echo "\t    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 86
            if (($context["content"] ?? null)) {
                // line 87
                echo "\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 89
            echo "\t</div>
";
        } elseif ((        // line 90
($context["region"] ?? null) == "slider")) {
            // line 91
            echo "  ";
            $context["classes"] = array(0 => "rev_slider_wrapper", 1 => "agenchy-slider");
            // line 92
            echo "  <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    ";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
    ";
            // line 94
            if (($context["content"] ?? null)) {
                // line 95
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
    ";
            }
            // line 97
            echo "  </div>
";
        } elseif ((((((((        // line 98
($context["region"] ?? null) == "blog_sidebar") || (($context["region"] ?? null) == "case_sidebar")) || (($context["region"] ?? null) == "services_sidebar")) || (($context["region"] ?? null) == "gallery_sidebar")) || (($context["region"] ?? null) == "shop_sidebar")) || (($context["region"] ?? null) == "team_sidebar")) || (($context["region"] ?? null) == "about_sidebar"))) {
            // line 99
            echo "\t<div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "widget"), "method"), "html", null, true));
            echo ">
\t\t";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
 \t\t";
            // line 101
            if (($context["label"] ?? null)) {
                // line 102
                echo "        \t<h5 class=\"widget-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "<span></span></h5>
        ";
            }
            // line 104
            echo "\t    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 105
            if (($context["content"] ?? null)) {
                // line 106
                echo "\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 108
            echo "\t</div><!-- Widget -->
";
        } elseif ((        // line 109
($context["region"] ?? null) == "team_bottom_content")) {
            // line 110
            echo "\t<div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
\t    ";
            // line 111
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 112
            if (($context["content"] ?? null)) {
                // line 113
                echo "\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 115
            echo "\t</div>
";
        } elseif ((        // line 116
($context["region"] ?? null) == "switcher")) {
            // line 117
            echo "\t<div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
\t    ";
            // line 118
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 119
            if (($context["content"] ?? null)) {
                // line 120
                echo "\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 122
            echo "\t</div>
";
        } elseif ((((        // line 123
($context["region"] ?? null) == "from_contact") || (($context["region"] ?? null) == "left_form_contact")) || (($context["region"] ?? null) == "right_form_contact"))) {
            // line 124
            echo "\t<div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
\t    ";
            // line 125
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 126
            if (($context["content"] ?? null)) {
                // line 127
                echo "\t      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 129
            echo "\t</div>
";
        } else {
            // line 131
            echo "  <section ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
\t\t\t";
            // line 132
            if (($context["label"] ?? null)) {
                // line 133
                echo "\t\t\t<!-- Title -->
\t<div class=\"title-container sm text-left\">
\t\t<div class=\"title-wrap\">
\t\t\t<h3 class=\"title\">";
                // line 136
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "</h3>
\t\t\t<span class=\"separator line-separator\"></span>
\t\t\t\t\t</div>
\t</div><!-- Title -->
\t\t\t";
            }
            // line 141
            echo "
\t";
            // line 142
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
    ";
            // line 143
            if (($context["content"] ?? null)) {
                // line 144
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
    ";
            }
            // line 146
            echo "  </section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/system/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 146,  480 => 144,  478 => 143,  474 => 142,  471 => 141,  463 => 136,  458 => 133,  456 => 132,  451 => 131,  447 => 129,  441 => 127,  439 => 126,  435 => 125,  430 => 124,  428 => 123,  425 => 122,  419 => 120,  417 => 119,  413 => 118,  408 => 117,  406 => 116,  403 => 115,  397 => 113,  395 => 112,  391 => 111,  386 => 110,  384 => 109,  381 => 108,  375 => 106,  373 => 105,  368 => 104,  362 => 102,  360 => 101,  356 => 100,  351 => 99,  349 => 98,  346 => 97,  340 => 95,  338 => 94,  334 => 93,  329 => 92,  326 => 91,  324 => 90,  321 => 89,  315 => 87,  313 => 86,  308 => 85,  302 => 83,  300 => 82,  296 => 81,  291 => 80,  289 => 79,  286 => 78,  280 => 76,  278 => 75,  274 => 74,  269 => 73,  267 => 72,  264 => 71,  258 => 69,  256 => 68,  252 => 67,  247 => 66,  245 => 65,  242 => 64,  236 => 62,  234 => 61,  230 => 60,  225 => 59,  223 => 58,  220 => 57,  214 => 55,  212 => 54,  208 => 53,  204 => 52,  199 => 51,  197 => 50,  194 => 49,  188 => 47,  186 => 46,  181 => 45,  175 => 43,  173 => 42,  169 => 41,  164 => 40,  162 => 39,  159 => 38,  153 => 36,  151 => 35,  146 => 34,  140 => 32,  138 => 31,  134 => 30,  129 => 29,  127 => 28,  124 => 27,  118 => 25,  116 => 24,  111 => 23,  105 => 21,  103 => 20,  99 => 19,  94 => 18,  92 => 17,  89 => 16,  83 => 14,  81 => 13,  77 => 12,  72 => 10,  67 => 9,  65 => 8,  62 => 7,  56 => 5,  54 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if region == 'search' %}
\t<div {{ attributes }}>
\t  {{ title_suffix }}
\t    {% if content %}
\t      {{ content }}
\t    {% endif %}
\t</div>
{% elseif region == 'breadcrumb' %}
        <ol{{ attributes.addClass('breadcrumb') }}>
        {{ title_prefix }}
       
        {{ title_suffix }}
        {% if content %}
            {{ content }}
        {% endif %}
    </ol>
{% elseif region == 'footer_1_column_2' or region == 'footer_1_column_3' or region == 'footer_1_column_4' or region == 'footer_6_column_1' or region == 'footer_6_column_2' or region == 'footer_6_column_3' or region == 'footer_6_column_4' or region == 'footer_8_column_1' or region == 'footer_8_column_2' or region == 'footer_8_column_3' or region == 'footer_8_column_4' or region == 'footer_3_column_1' or region == 'footer_5_column_1' or region == 'footer_3_column_2' or region == 'footer_5_column_2' or region == 'footer_3_column_3' or region == 'footer_5_column_3' %}
\t\t<div {{ attributes.addClass('widget') }}>
\t \t\t{{ title_prefix }}
\t \t\t {% if label %}
            <h5 class=\"widget-title\">{{ label }}<span></span></h5>
            {% endif %}
\t\t    {{ title_suffix }}
\t\t    {% if content %}
\t\t      {{ content }}
\t\t    {% endif %}
\t\t</div>
{% elseif region == 'footer_2_column_1' or region == 'footer_7_column_1' %}
\t\t<div {{ attributes.addClass('widget') }}>
\t \t\t{{ title_prefix }}
\t \t\t {% if label %}
            <h5 class=\"widget-title\">{{ label }}</h5>
            {% endif %}
\t\t    {{ title_suffix }}
\t\t    {% if content %}
\t\t      {{ content }}
\t\t    {% endif %}
\t\t</div>
{% elseif region == 'footer_2_column_2' or region == 'footer_7_column_2' %}
\t\t<div {{ attributes.addClass('widget') }}>
\t \t\t{{ title_prefix }}
\t \t\t {% if label %}
            <h5>{{ label }}<span></span></h5>
            {% endif %}
\t\t    {{ title_suffix }}
\t\t    {% if content %}
\t\t      {{ content }}
\t\t    {% endif %}
\t\t</div>
{% elseif region == 'footer_4_column_1' or region == 'footer_4_column_2' or region == 'footer_4_column_3' or region == 'footer_4_column_4' %}
\t<div {{ attributes }}>
 \t\t{{ title_prefix }}
\t    {{ title_suffix }}
\t    {% if content %}
\t      {{ content }}
\t    {% endif %}
\t</div>
{% elseif region == 'header_social_bar' %}
\t<ul {{ attributes.addClass('agenchy-header-social') }}>
\t    {{ title_suffix }}
\t    {% if content %}
\t      {{ content }}
\t    {% endif %}
\t</ul>
{% elseif region == 'footer_top_logo' or region == 'footer_bottom_logo' or region == 'footer_top_left_content' or region == 'footer_1_column_1' or region == 'header_top_2'%}
\t<div {{ attributes }}>
\t    {{ title_suffix }}
\t    {% if content %}
\t      {{ content }}
\t    {% endif %}
\t</div>
{% elseif region == 'header_top_1' or region == 'header_middle'%}
\t<ul {{ attributes }}>
\t    {{ title_suffix }}
\t    {% if content %}
\t      {{ content }}
\t    {% endif %}
\t</ul>
{% elseif region == 'sidebar_first' or region == 'sidebar_second' %}
\t<div {{ attributes.addClass('widget') }}>
\t\t{{ title_prefix }}
 \t\t{% if label %}
        \t<h5 class=\"widget-title\">{{ label }}<span></span></h5>
        {% endif %}
\t    {{ title_suffix }}
\t    {% if content %}
\t      {{ content }}
\t    {% endif %}
\t</div>
{% elseif region == 'slider' %}
  {% set classes = ['rev_slider_wrapper', 'agenchy-slider'] %}
  <div {{ attributes.addClass(classes) }}>
    {{ title_suffix }}
    {% if content %}
      {{ content }}
    {% endif %}
  </div>
{% elseif region == 'blog_sidebar' or region == 'case_sidebar' or region == 'services_sidebar' or region == 'gallery_sidebar' or region == 'shop_sidebar' or region == 'team_sidebar' or region == 'about_sidebar' %}
\t<div {{ attributes.addClass('widget') }}>
\t\t{{ title_prefix }}
 \t\t{% if label %}
        \t<h5 class=\"widget-title\">{{ label }}<span></span></h5>
        {% endif %}
\t    {{ title_suffix }}
\t    {% if content %}
\t      {{ content }}
\t    {% endif %}
\t</div><!-- Widget -->
{% elseif region == 'team_bottom_content'%}
\t<div {{ attributes }}>
\t    {{ title_suffix }}
\t    {% if content %}
\t      {{ content }}
\t    {% endif %}
\t</div>
{% elseif region == 'switcher'%}
\t<div {{ attributes }}>
\t    {{ title_suffix }}
\t    {% if content %}
\t      {{ content }}
\t    {% endif %}
\t</div>
{% elseif region == 'from_contact' or region == 'left_form_contact' or region == 'right_form_contact'%}
\t<div {{ attributes }}>
\t    {{ title_suffix }}
\t    {% if content %}
\t      {{ content }}
\t    {% endif %}
\t</div>
{% else %}
  <section {{ attributes }}>
\t\t\t{% if label %}
\t\t\t<!-- Title -->
\t<div class=\"title-container sm text-left\">
\t\t<div class=\"title-wrap\">
\t\t\t<h3 class=\"title\">{{ label }}</h3>
\t\t\t<span class=\"separator line-separator\"></span>
\t\t\t\t\t</div>
\t</div><!-- Title -->
\t\t\t{% endif %}

\t{{ title_suffix }}
    {% if content %}
      {{ content }}
    {% endif %}
  </section>
{% endif %}", "themes/custom/agenchy/templates/system/block/block.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\block\\block.html.twig");
    }
}
