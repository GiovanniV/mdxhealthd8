<?php

/* themes/custom/agenchy/templates/views-view.html.twig */
class __TwigTemplate_85a0f63189aaa9d7198a4a438d61f0a551094948c615891ed0d5f47880051f12 extends Twig_Template
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
        $tags = array("if" => 1, "set" => 3, "for" => 191);
        $filters = array("length" => 284);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('length'),
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
        if (((($context["id"] ?? null) == "press_release") && (($context["display_id"] ?? null) == "block"))) {
            // line 2
            echo "\t";
            // line 3
            $context["classes"] = array(0 => ((            // line 4
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
            // line 7
            echo "\t<div class=\"container\">
\t<div class=\"row\">
\t<div";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
\t\t";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
\t\t";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
\t\t";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "

\t\t";
            // line 14
            if (($context["header"] ?? null)) {
                // line 15
                echo "\t\t\t<header>
\t\t\t\t";
                // line 16
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t</header>
\t\t";
            }
            // line 19
            echo "
\t\t";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
\t\t";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "

\t\t";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
\t\t";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            echo "
\t\t";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "

\t\t";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
\t\t";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
            echo "

\t\t";
            // line 30
            if (($context["footer"] ?? null)) {
                // line 31
                echo "\t\t\t<footer>
\t\t\t\t";
                // line 32
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t</footer>
\t\t";
            }
            // line 35
            echo "
\t\t";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
            echo "
\t</div>
\t</div>
\t</div>
";
        } elseif ((        // line 40
($context["id"] ?? null) == "_agenchy_section_content")) {
            // line 41
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_section_content_latest_post")) {
                // line 42
                echo "\t\t\t<ul class=\"thumbnail-widget\">
\t\t\t\t";
                // line 43
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</ul>
\t";
            } elseif ((            // line 45
($context["display_id"] ?? null) == "block_section_content_blog_timeline")) {
                // line 46
                echo "\t\t<div id=\"universh-timeline\" class=\"universh-container\">
\t\t\t";
                // line 47
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Timeline Container -->
\t";
            } elseif ((            // line 49
($context["display_id"] ?? null) == "block_footer_3_colum_3_latest_news")) {
                // line 50
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 51
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Thumbnail Widget -->
\t";
            } elseif ((            // line 53
($context["display_id"] ?? null) == "block_section_content_masonry_2_column")) {
                // line 54
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 60
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"2\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 65
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 70
($context["display_id"] ?? null) == "block_section_content_masonry_3_column")) {
                // line 71
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 77
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"0\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 82
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 87
($context["display_id"] ?? null) == "block_section_content_masonry_4_column")) {
                // line 88
                echo "\t\t<!-- Container -->
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters text-center\">
\t\t\t\t\t\t";
                // line 94
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"4\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 99
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 104
($context["display_id"] ?? null) == "block_section_content_masonry_gutter")) {
                // line 105
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 111
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"20\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 116
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 121
($context["display_id"] ?? null) == "block_section_content_grid_2_column")) {
                // line 122
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 128
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"2\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 133
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 138
($context["display_id"] ?? null) == "block_section_content_grid_3_column")) {
                // line 139
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 145
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"0\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 150
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 155
($context["display_id"] ?? null) == "block_section_content_grid_4_column")) {
                // line 156
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters text-center\">
\t\t\t\t\t\t";
                // line 162
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"4\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 167
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 172
($context["display_id"] ?? null) == "block_section_content_grid_gutter")) {
                // line 173
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 179
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"20\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 184
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 189
($context["display_id"] ?? null) == "block_section_content_team_list")) {
                // line 190
                echo "\t\t";
                $context["temp"] = 1;
                // line 191
                echo "\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 192
                    echo "\t    \t";
                    if (((($context["temp"] ?? null) % 2) == 0)) {
                        // line 193
                        echo "\t\t\t\t<!-- Team List Section -->
\t\t\t\t<div class=\"team-list-section typo-dark agenchy-list-team-item\">
\t\t\t\t\t";
                        // line 195
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t</div><!-- Team List Section --> 
\t\t\t";
                    } else {
                        // line 198
                        echo "\t\t\t\t<!-- Team List Section -->
\t\t\t\t<div class=\"bg-grey team-list-section typo-dark\">
\t\t\t\t\t";
                        // line 200
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t</div><!-- Team List Section -->
\t\t\t";
                    }
                    // line 203
                    echo "
\t\t\t";
                    // line 204
                    $context["temp"] = (($context["temp"] ?? null) + 1);
                    // line 205
                    echo "\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "\t";
            } elseif ((($context["display_id"] ?? null) == "block_section_content_team_v1_2_column")) {
                // line 207
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 214
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 221
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 225
($context["display_id"] ?? null) == "block_section_content_team_v1_3_column")) {
                // line 226
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 233
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 240
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 244
($context["display_id"] ?? null) == "block_section_content_team_v1_4_column")) {
                // line 245
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 252
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container small\">
\t\t\t\t\t";
                // line 259
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 263
($context["display_id"] ?? null) == "block_section_content_team_v1_3_column_style_2")) {
                // line 264
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 271
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 277
                $context["temp"] = 1;
                // line 278
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 279
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 280
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-left\">
\t\t\t\t\t        \t";
                        // line 282
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 284
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 285
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 287
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 288
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 289
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-center\">
\t\t\t\t        \t";
                        // line 290
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 292
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 293
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 295
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 296
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 297
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-right\">
\t\t\t\t        \t";
                        // line 298
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 301
                        $context["temp"] = 1;
                        // line 302
                        echo "\t\t\t\t    ";
                    }
                    // line 303
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 304
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 306
($context["display_id"] ?? null) == "block_section_content_team_v1_3_column_color")) {
                // line 307
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 314
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 320
                $context["temp"] = 1;
                // line 321
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 322
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 323
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-white\">
\t\t\t\t\t        \t";
                        // line 325
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 327
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 328
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 330
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 331
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 332
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-color\">
\t\t\t\t        \t";
                        // line 333
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 335
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 336
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 338
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 339
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 340
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-dark\">
\t\t\t\t        \t";
                        // line 341
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 344
                        $context["temp"] = 1;
                        // line 345
                        echo "\t\t\t\t    ";
                    }
                    // line 346
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 349
($context["display_id"] ?? null) == "block_section_content_team_v2_2_column")) {
                // line 350
                echo "\t\t<div class=\"container border-style\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 356
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 363
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 367
($context["display_id"] ?? null) == "block_section_content_team_v2_3_column")) {
                // line 368
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 375
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 382
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 386
($context["display_id"] ?? null) == "block_section_content_team_v2_4_column")) {
                // line 387
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 394
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container small\">
\t\t\t\t\t";
                // line 401
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 405
($context["display_id"] ?? null) == "block_section_content_team_v2_3_column_style_2")) {
                // line 406
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 413
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 419
                $context["temp"] = 1;
                // line 420
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 421
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 422
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-left\">
\t\t\t\t\t        \t";
                        // line 424
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 426
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 427
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 429
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 430
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 431
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-center\">
\t\t\t\t        \t";
                        // line 432
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 434
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 435
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 437
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 438
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 439
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-right\">
\t\t\t\t        \t";
                        // line 440
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 443
                        $context["temp"] = 1;
                        // line 444
                        echo "\t\t\t\t    ";
                    }
                    // line 445
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 446
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 448
($context["display_id"] ?? null) == "block_section_content_team_v2_3_column_color")) {
                // line 449
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 456
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 462
                $context["temp"] = 1;
                // line 463
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 464
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 465
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-bg-white\">
\t\t\t\t\t        \t";
                        // line 467
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 469
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 470
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 472
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 473
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 474
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 color-border team-v2-3-column-bg-color\">
\t\t\t\t        \t";
                        // line 475
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 477
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 478
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 480
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 481
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 482
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 dark-border team-v2-3-column-bg-dark\">
\t\t\t\t        \t";
                        // line 483
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 486
                        $context["temp"] = 1;
                        // line 487
                        echo "\t\t\t\t    ";
                    }
                    // line 488
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 489
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 491
($context["display_id"] ?? null) == "block_section_content_testimonial_2_column")) {
                // line 492
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 498
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t";
                // line 503
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 506
($context["display_id"] ?? null) == "block_section_content_testimonial_3_column")) {
                // line 507
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 513
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t";
                // line 518
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 521
($context["display_id"] ?? null) == "block_section_content_testimonial_4_column")) {
                // line 522
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row quote-sm\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 528
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t";
                // line 533
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 536
($context["display_id"] ?? null) == "block_section_content_testimonial_color_column")) {
                // line 537
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 543
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 548
                $context["temp"] = 1;
                // line 549
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 550
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 551
                        echo "\t\t\t    \t\t<div class=\"row quote-sm\">
\t\t\t\t\t    \t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t        \t";
                        // line 553
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 555
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 556
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 558
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 559
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 560
                        echo "\t\t\t\t    \t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t        \t";
                        // line 561
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 563
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 564
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 566
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 567
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 568
                        echo "\t\t\t\t    \t<div class=\"col-sm-6 col-md-3 agenchy-color-column-color\">
\t\t\t\t        \t";
                        // line 569
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 571
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 572
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 574
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 575
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 576
                        echo "\t\t\t\t    \t<div class=\"col-sm-6 col-md-3 agenchy-color-column-dark\">
\t\t\t\t        \t";
                        // line 577
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 580
                        $context["temp"] = 1;
                        // line 581
                        echo "\t\t\t\t    ";
                    }
                    // line 582
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 583
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            }
            // line 586
            echo "
";
        } elseif ((        // line 587
($context["id"] ?? null) == "_agenchy_sidebar_widgets")) {
            // line 588
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_on_sidebar_popular_cases")) {
                // line 589
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 590
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Thumbnail Widget -->
\t";
            } elseif ((            // line 592
($context["display_id"] ?? null) == "block_on_sidebar_title_services")) {
                // line 593
                echo "\t\t<ul class=\"go-widget with-bg\">
\t\t\t";
                // line 594
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 596
($context["display_id"] ?? null) == "block_on_sidebar_browse_by_team")) {
                // line 597
                echo "\t\t<ul class=\"thumbnail-widget thumb-circle\">
\t\t\t";
                // line 598
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 600
($context["display_id"] ?? null) == "block_on_sidebar_latest_reviews")) {
                // line 601
                echo "\t\t<div class=\"quote-sm\">
\t\t\t<div class=\"owl-carousel nav-topright nav-dark nav-mini\" 
\t\t\tdata-animatein=\"\" data-animateout=\"\" 
\t\t\tdata-items=\"1\" 
\t\t\tdata-margin=\"\" 
\t\t\tdata-loop=\"true\" 
\t\t\tdata-merge=\"true\" 
\t\t\tdata-nav=\"true\" 
\t\t\tdata-dots=\"false\" 
\t\t\tdata-stagepadding=\"\" 
\t\t\tdata-mobile=\"1\" 
\t\t\tdata-tablet=\"1\" 
\t\t\tdata-desktopsmall=\"1\" 
\t\t\tdata-desktop=\"1\" 
\t\t\tdata-autoplay=\"true\" 
\t\t\tdata-delay=\"3000\" 
\t\t\tdata-navigation=\"true\">
\t\t\t\t";
                // line 618
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- gallery Image carousel -->
\t\t</div>
\t";
            }
        } elseif ((        // line 622
($context["id"] ?? null) == "_agenchy_taxonomy_term")) {
            // line 623
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_on_sidebar_categories")) {
                // line 624
                echo "\t\t<ul class=\"go-widget\">
\t\t\t";
                // line 625
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 627
($context["display_id"] ?? null) == "block_on_sidebar_blog_tag_cloud")) {
                // line 628
                echo "\t\t<ul class=\"tag-widget\">
\t\t\t";
                // line 629
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 631
($context["display_id"] ?? null) == "block_on_sidebar_categories_cases")) {
                // line 632
                echo "\t\t<div class=\"accordion-widget\">
\t\t\t<div class=\"panel-group accordion agenchy-categories-cases\">
\t\t\t\t";
                // line 634
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div>
\t\t</div>
\t";
            } elseif ((            // line 637
($context["display_id"] ?? null) == "block_on_sidebar_cases_tag_cloud")) {
                // line 638
                echo "\t\t<ul class=\"tag-widget\">
\t\t\t";
                // line 639
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 641
($context["display_id"] ?? null) == "block_gallery_categories_tab_1")) {
                // line 642
                echo "\t\t<ul class=\"nav nav-pills\">
\t\t\t";
                // line 643
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 644
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            }
        } elseif ((        // line 647
($context["id"] ?? null) == "_agenchy_section_content_2")) {
            // line 648
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_section_content_consultants")) {
                // line 649
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 650
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 652
($context["display_id"] ?? null) == "block_footer_latest_news")) {
                // line 653
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 654
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Thumbnail Widget -->
\t";
            } elseif ((            // line 656
($context["display_id"] ?? null) == "block_team_bottom_content_reviews")) {
                // line 657
                echo "\t\t<!-- Widget -->
\t\t<div class=\"widget\">
\t\t\t";
                // line 659
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t<div class=\"quote-sm\">
\t\t\t\t<div class=\"owl-carousel nav-topright nav-dark nav-mini\" 
\t\t\t\tdata-animatein=\"\" data-animateout=\"\" 
\t\t\t\tdata-items=\"1\" 
\t\t\t\tdata-margin=\"\" 
\t\t\t\tdata-loop=\"true\" 
\t\t\t\tdata-merge=\"true\" 
\t\t\t\tdata-nav=\"true\" 
\t\t\t\tdata-dots=\"false\" 
\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\tdata-mobile=\"1\" 
\t\t\t\tdata-tablet=\"1\" 
\t\t\t\tdata-desktopsmall=\"1\" 
\t\t\t\tdata-desktop=\"1\" 
\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\tdata-delay=\"3000\" 
\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t";
                // line 677
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- gallery Image carousel -->
\t\t\t</div><!-- Quote Small -->
\t\t</div><!-- Widget -->
\t";
            } elseif ((            // line 681
($context["display_id"] ?? null) == "block_section_content_reviews")) {
                // line 682
                echo "\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t<div class=\"owl-carousel dots-square\" data-animatein=\"zoomIn\" data-animateout=\"slideOutDown\" data-items=\"1\" data-margin=\"30\" data-loop=\"true\" data-merge=\"true\" data-nav=\"false\" data-dots=\"false\" data-stagepadding=\"\" data-mobile=\"1\" data-tablet=\"1\" data-desktopsmall=\"1\"  data-desktop=\"2\" data-autoplay=\"true\" data-delay=\"3000\" data-navigation=\"true\">\t
\t\t\t";
                // line 684
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- gallery Image carousel -->
\t";
            } elseif ((            // line 686
($context["display_id"] ?? null) == "block_section_content_achievements")) {
                // line 687
                echo "\t\t<div class=\"row\">
\t\t\t";
                // line 688
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Content row -->
\t";
            } elseif ((            // line 690
($context["display_id"] ?? null) == "block_section_content_our_approach")) {
                // line 691
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 697
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div><!-- Title -->
\t\t\t</div><!-- Row -->
\t\t\t";
                // line 702
                $context["temp"] = 1;
                // line 703
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 704
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 705
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 706
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 707
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 708
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 710
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 711
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 712
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 713
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 714
                            echo "\t\t        \t</div>
\t\t        \t";
                        }
                        // line 716
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 717
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 718
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t";
                        // line 720
                        $context["temp"] = 1;
                        // line 721
                        echo "\t\t\t    ";
                    }
                    // line 722
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 723
                echo "\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 724
($context["display_id"] ?? null) == "block_section_content_reviews_grid")) {
                // line 725
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
                // line 727
                $context["temp"] = 1;
                // line 728
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 729
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 730
                        echo "\t\t\t\t    \t<div class=\"col-sm-4\">
\t\t\t\t        \t";
                        // line 731
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t";
                        // line 732
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 733
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 735
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 736
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 737
                        echo "\t\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t    \t";
                        // line 738
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 739
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 741
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 742
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 743
                        echo "\t\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 745
                        $context["temp"] = 1;
                        // line 746
                        echo "\t\t\t\t    ";
                    }
                    // line 747
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 748
                echo "\t\t\t</div>
\t\t</div>
\t";
            } elseif ((            // line 750
($context["display_id"] ?? null) == "block_section_content_company_logo")) {
                // line 751
                echo "\t\t<!-- Section -->
\t\t<div class=\"typo-dark\">
\t\t\t<!-- Container -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<!-- Details Listing Wrap -->
\t\t\t\t\t\t<ul class=\"listing-wrap\">
\t\t\t\t\t\t\t";
                // line 759
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</ul><!-- Details Listing Wrap -->
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->
\t\t</div><!-- Team List Section -->
\t";
            } elseif ((            // line 765
($context["display_id"] ?? null) == "block_section_content_our_clients")) {
                // line 766
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container title-sm text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 772
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div>
\t\t\t";
                // line 777
                $context["temp"] = 1;
                // line 778
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 779
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 780
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 781
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 782
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 783
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 785
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 786
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 787
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 788
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 789
                            echo "\t\t        \t</div>
\t\t        \t";
                        }
                        // line 791
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 792
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 793
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 794
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 795
                            echo "\t\t        \t</div>
\t\t        \t";
                        }
                        // line 797
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 798
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 799
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t";
                        // line 801
                        $context["temp"] = 1;
                        // line 802
                        echo "\t\t\t    ";
                    }
                    // line 803
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 804
                echo "\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 805
($context["display_id"] ?? null) == "block_section_content_what_we_do_services")) {
                // line 806
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 814
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t\t<!-- Column -->
\t\t\t\t";
                // line 819
                if (($context["footer"] ?? null)) {
                    // line 820
                    echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<p class=\"text-right text-left-767 margin-bottom-767-30\">";
                    // line 821
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                    echo "</p>
\t\t\t\t</div><!-- Column -->
\t\t\t\t";
                }
                // line 824
                echo "\t\t\t</div><!-- row -->
\t\t\t
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column Begins -->
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"owl-carousel dots-push\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"false\" 
\t\t\t\t\t\tdata-dots=\"true\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-margin=\"30\"
\t\t\t\t\t\tdata-mobile=\"1\" 
\t\t\t\t\t\tdata-tablet=\"2\" 
\t\t\t\t\t\tdata-desktopsmall=\"2\"  
\t\t\t\t\t\tdata-desktop=\"3\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 848
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 853
($context["display_id"] ?? null) == "block_section_content_clients_image")) {
                // line 854
                echo "\t\t<!-- Clients -->
\t\t<div class=\"row margin-top-60\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"pad-30 bg-white shadow\">
\t\t\t\t\t<div class=\"owl-carousel imgs-center\" 
\t\t\t\t\t\tdata-animatein=\"zoomIn\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"false\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-margin=\"\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-mobile=\"2\" 
\t\t\t\t\t\tdata-tablet=\"3\" 
\t\t\t\t\t\tdata-desktopsmall=\"4\"  
\t\t\t\t\t\tdata-desktop=\"5\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t";
                // line 875
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Boxed Block -->\t
\t\t\t</div><!-- Column -->
\t\t</div><!-- Row -->
\t";
            } elseif ((            // line 880
($context["display_id"] ?? null) == "block_section_content_what_our_clients_say")) {
                // line 881
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 888
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t\t<!-- Column Begins -->
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"owl-carousel nav-topright\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"true\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-margin=\"30\"
\t\t\t\t\t\tdata-mobile=\"1\" 
\t\t\t\t\t\tdata-tablet=\"1\" 
\t\t\t\t\t\tdata-desktopsmall=\"1\"  
\t\t\t\t\t\tdata-desktop=\"3\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t";
                // line 911
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t\t";
                // line 915
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 917
($context["display_id"] ?? null) == "block_section_content_clients_image_dark")) {
                // line 918
                echo "\t\t<!-- Clients -->
\t\t<div class=\"row margin-top-60\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"pad-30 bg-dark shadow\">
\t\t\t\t\t<div class=\"owl-carousel imgs-center\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"false\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-margin=\"\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-mobile=\"2\" 
\t\t\t\t\t\tdata-tablet=\"3\" 
\t\t\t\t\t\tdata-desktopsmall=\"4\"  
\t\t\t\t\t\tdata-desktop=\"5\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t";
                // line 939
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Boxed Block -->\t
\t\t\t</div><!-- Column -->
\t\t</div><!-- Row -->
\t";
            } elseif ((            // line 944
($context["display_id"] ?? null) == "block_section_content_news_updates")) {
                // line 945
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container sm text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 953
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->

\t\t<!-- Container -->
\t\t<div class=\"container\">\t
\t\t\t<div class=\"row\">
\t\t\t\t";
                // line 963
                $context["temp"] = 1;
                // line 964
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 965
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 966
                        echo "\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t    \t\t<ul class=\"row\">
\t\t\t\t\t        \t";
                        // line 968
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t\t        \t";
                        // line 969
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 970
                            echo "\t\t\t\t        \t</ul>\t
\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 973
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 974
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 975
                        echo "\t\t\t\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t\t\t    \t";
                        // line 976
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 977
                            echo "\t\t\t\t\t    \t</ul>
\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 980
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 981
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 982
                        echo "\t\t\t\t    \t\t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t    \t\t</ul>
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 985
                        $context["temp"] = 1;
                        // line 986
                        echo "\t\t\t\t    ";
                    }
                    // line 987
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 988
                echo "\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 990
($context["display_id"] ?? null) == "block_section_content_what_our_clients_say_dark")) {
                // line 991
                echo "\t\t<div class=\"container parent-has-overlay\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 998
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t\t<!-- Column Begins -->
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"owl-carousel nav-topright\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"false\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-margin=\"30\"
\t\t\t\t\t\tdata-mobile=\"1\" 
\t\t\t\t\t\tdata-tablet=\"1\" 
\t\t\t\t\t\tdata-desktopsmall=\"1\"  
\t\t\t\t\t\tdata-desktop=\"3\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1022
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t\t";
                // line 1026
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1028
($context["display_id"] ?? null) == "block_section_content_what_we_do_services_style_2")) {
                // line 1029
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t";
                // line 1036
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t\t";
                // line 1038
                if (($context["footer"] ?? null)) {
                    // line 1039
                    echo "\t\t\t\t\t<p>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                    echo "</p>
\t\t\t\t\t";
                }
                // line 1041
                echo "\t\t\t\t</div><!-- Column -->
\t\t\t\t";
                // line 1042
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1045
($context["display_id"] ?? null) == "block_section_content_what_our_clients_say_default")) {
                // line 1046
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 1053
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t\t<!-- Column Begins -->
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"owl-carousel nav-topright\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"true\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-margin=\"30\"
\t\t\t\t\t\tdata-mobile=\"1\" 
\t\t\t\t\t\tdata-tablet=\"1\" 
\t\t\t\t\t\tdata-desktopsmall=\"1\"  
\t\t\t\t\t\tdata-desktop=\"3\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1077
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1082
($context["display_id"] ?? null) == "block_section_content_news_updates_slide")) {
                // line 1083
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 1091
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->

\t\t<!-- Container -->
\t\t<div class=\"container-fluid\">\t
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column Begins -->
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"owl-carousel\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"true\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-margin=\"15\"
\t\t\t\t\t\tdata-mobile=\"1\" 
\t\t\t\t\t\tdata-tablet=\"2\" 
\t\t\t\t\t\tdata-desktopsmall=\"3\"  
\t\t\t\t\t\tdata-desktop=\"4\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1121
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1126
($context["display_id"] ?? null) == "block_switcher_homepage")) {
                // line 1127
                echo "\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t<ul class=\"demos\">
\t\t\t";
                // line 1129
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Options Config -->
\t";
            }
        } elseif ((        // line 1132
($context["id"] ?? null) == "blog")) {
            // line 1133
            $context["blog_layout"] = "list";
            // line 1134
            echo "\t";
            if (((($context["blog_layout"] ?? null) == "grid") || (($context["blog_layout"] ?? null) == "3_column"))) {
                // line 1135
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1136
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1137
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1138
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1139
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1140
                $context["temp"] = 1;
                // line 1141
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1142
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1143
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1144
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1145
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1146
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t";
                        }
                        // line 1149
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1150
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1151
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1152
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1153
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t";
                        }
                        // line 1156
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1157
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1158
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1161
                        $context["temp"] = 1;
                        // line 1162
                        echo "\t\t\t    ";
                    }
                    // line 1163
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1164
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1165
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1166
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1169
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 1173
($context["blog_layout"] ?? null) == "list")) {
                // line 1175
                $context["classes"] = array(0 => ((                // line 1176
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
                // line 1179
                echo "<div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                echo ">
  ";
                // line 1180
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
  ";
                // line 1181
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
  ";
                // line 1182
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "

  ";
                // line 1184
                if (($context["header"] ?? null)) {
                    // line 1185
                    echo "    <header>
      ";
                    // line 1186
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                    echo "
    </header>
  ";
                }
                // line 1189
                echo "
  ";
                // line 1190
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
                echo "
  ";
                // line 1191
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
                echo "

  ";
                // line 1193
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
  ";
                // line 1194
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
  ";
                // line 1195
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "

  ";
                // line 1197
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
  ";
                // line 1198
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
                echo "

  ";
                // line 1200
                if (($context["footer"] ?? null)) {
                    // line 1201
                    echo "    <footer>
      ";
                    // line 1202
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                    echo "
    </footer>
  ";
                }
                // line 1205
                echo "
  ";
                // line 1206
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
                echo "
</div>

\t";
            } elseif ((            // line 1209
($context["blog_layout"] ?? null) == "2_column")) {
                // line 1210
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1211
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1212
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1213
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1214
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1215
                $context["temp"] = 1;
                // line 1216
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1217
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1218
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1219
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1220
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1221
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t";
                        }
                        // line 1224
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1225
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1226
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1229
                        $context["temp"] = 1;
                        // line 1230
                        echo "\t\t\t    ";
                    }
                    // line 1231
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1232
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1233
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1234
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1237
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 1241
($context["blog_layout"] ?? null) == "4_column")) {
                // line 1242
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1243
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1244
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1245
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1246
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1247
                $context["temp"] = 1;
                // line 1248
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1249
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1250
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1251
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1252
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1253
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t";
                        }
                        // line 1256
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1257
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1258
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1259
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1260
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t";
                        }
                        // line 1263
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1264
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1265
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1266
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1267
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t";
                        }
                        // line 1270
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1271
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1272
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1275
                        $context["temp"] = 1;
                        // line 1276
                        echo "\t\t\t    ";
                    }
                    // line 1277
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1278
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1279
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1280
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1283
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
    ";
            } else {
                // line 1288
                echo "    \t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1289
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1290
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1291
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1292
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1293
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t";
            }
        } elseif ((        // line 1295
($context["id"] ?? null) == "cases")) {
            // line 1296
            echo "\t";
            if (((($context["cases_layout"] ?? null) == "grid") || (($context["cases_layout"] ?? null) == "3_column"))) {
                // line 1297
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1298
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1299
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1300
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1301
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1302
                $context["temp"] = 1;
                // line 1303
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1304
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1305
                        echo "\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t";
                        // line 1306
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1307
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1308
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t";
                        }
                        // line 1311
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1312
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1313
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1314
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1315
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t";
                        }
                        // line 1318
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1319
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1320
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1323
                        $context["temp"] = 1;
                        // line 1324
                        echo "\t\t\t    ";
                    }
                    // line 1325
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1326
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1327
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1328
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1329
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1331
($context["cases_layout"] ?? null) == "list")) {
                // line 1332
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1333
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1334
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1335
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1336
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1337
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1338
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1339
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1340
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1341
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1343
($context["cases_layout"] ?? null) == "2_column")) {
                // line 1344
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1345
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1346
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1347
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1348
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1349
                $context["temp"] = 1;
                // line 1350
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1351
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1352
                        echo "\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t";
                        // line 1353
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1354
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1355
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t";
                        }
                        // line 1358
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1359
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1360
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t";
                        // line 1363
                        $context["temp"] = 1;
                        // line 1364
                        echo "\t\t\t    ";
                    }
                    // line 1365
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1366
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1367
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1368
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1369
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1371
($context["cases_layout"] ?? null) == "4_column")) {
                // line 1372
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1373
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1374
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1375
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1376
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1377
                $context["temp"] = 1;
                // line 1378
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1379
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1380
                        echo "\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t";
                        // line 1381
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1382
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1383
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-991\">
\t\t\t        \t";
                        }
                        // line 1386
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1387
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1388
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1389
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1390
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1393
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1394
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1395
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1396
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1397
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1400
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1401
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1402
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-991\">
\t\t\t    \t";
                        // line 1405
                        $context["temp"] = 1;
                        // line 1406
                        echo "\t\t\t    ";
                    }
                    // line 1407
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1408
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1409
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1410
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1411
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
    ";
            } else {
                // line 1414
                echo "    \t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1415
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1416
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1417
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1418
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1419
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t";
            }
        } elseif ((        // line 1421
($context["id"] ?? null) == "services")) {
            // line 1422
            echo "\t";
            if (((($context["services_layout"] ?? null) == "grid") || (($context["services_layout"] ?? null) == "3_column"))) {
                // line 1423
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1424
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1425
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1426
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1427
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1428
                $context["temp"] = 1;
                // line 1429
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1430
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1431
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1432
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1433
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1434
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t";
                        }
                        // line 1437
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1438
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1439
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1440
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1441
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-767\">
\t\t        \t";
                        }
                        // line 1444
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1445
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1446
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t";
                        // line 1449
                        $context["temp"] = 1;
                        // line 1450
                        echo "\t\t\t    ";
                    }
                    // line 1451
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1452
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1453
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1454
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1455
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1457
($context["services_layout"] ?? null) == "list")) {
                // line 1458
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1459
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1460
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1461
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1462
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1463
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1464
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1465
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1466
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1467
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1469
($context["services_layout"] ?? null) == "2_column")) {
                // line 1470
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1471
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1472
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1473
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1474
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1475
                $context["temp"] = 1;
                // line 1476
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1477
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1478
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1479
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1480
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1481
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t";
                        }
                        // line 1484
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1485
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1486
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t";
                        // line 1489
                        $context["temp"] = 1;
                        // line 1490
                        echo "\t\t\t    ";
                    }
                    // line 1491
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1492
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1493
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1494
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1495
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1497
($context["services_layout"] ?? null) == "4_column")) {
                // line 1498
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1499
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1500
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1501
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1502
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1503
                $context["temp"] = 1;
                // line 1504
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1505
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1506
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1507
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1508
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1509
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-991\">
\t\t\t        \t";
                        }
                        // line 1512
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1513
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1514
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1515
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1516
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1519
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1520
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1521
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1522
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1523
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1526
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1527
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1528
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-991\">
\t\t\t    \t";
                        // line 1531
                        $context["temp"] = 1;
                        // line 1532
                        echo "\t\t\t    ";
                    }
                    // line 1533
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1534
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1535
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1536
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1537
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
    ";
            } else {
                // line 1540
                echo "    \t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1541
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1542
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1543
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1544
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1545
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t";
            }
        } elseif ((        // line 1547
($context["id"] ?? null) == "shop")) {
            // line 1548
            echo "\t";
            if ((($context["shop_layout"] ?? null) == "2_column")) {
                // line 1549
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1550
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1551
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1552
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1553
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1554
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1555
                $context["temp"] = 1;
                // line 1556
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1557
                    echo "\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1558
                        echo "\t\t    \t<div class=\"row\">
\t\t        \t";
                        // line 1559
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t       \t";
                        // line 1560
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1561
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1563
                        echo "\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1564
                        echo "\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1565
                        echo "\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t</div>
\t\t    \t";
                        // line 1567
                        $context["temp"] = 1;
                        // line 1568
                        echo "\t\t    ";
                    }
                    // line 1569
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1570
                echo "\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1572
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 1576
($context["shop_layout"] ?? null) == "3_column")) {
                // line 1577
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1578
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1579
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1580
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1581
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1582
                $context["temp"] = 1;
                // line 1583
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1584
                    echo "\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1585
                        echo "\t\t    \t<div class=\"row\">
\t\t        \t";
                        // line 1586
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t        ";
                        // line 1587
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1588
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1590
                        echo "\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1591
                        echo "\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1592
                        echo "\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t";
                        // line 1593
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1594
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1596
                        echo "\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1597
                        echo "\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1598
                        echo "\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t</div>
\t\t    \t";
                        // line 1600
                        $context["temp"] = 1;
                        // line 1601
                        echo "\t\t    ";
                    }
                    // line 1602
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1603
                echo "\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1605
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t    </div>
\t";
            } else {
                // line 1610
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1611
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1612
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1613
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1614
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1615
                $context["temp"] = 1;
                // line 1616
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1617
                    echo "\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1618
                        echo "\t\t    \t<div class=\"row\">
\t\t        \t";
                        // line 1619
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t        ";
                        // line 1620
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1621
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1623
                        echo "\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1624
                        echo "\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1625
                        echo "\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t";
                        // line 1626
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1627
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1629
                        echo "\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1630
                        echo "\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1631
                        echo "\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t";
                        // line 1632
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1633
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1635
                        echo "\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1636
                        echo "\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1637
                        echo "\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t</div>
\t\t    \t";
                        // line 1639
                        $context["temp"] = 1;
                        // line 1640
                        echo "\t\t    ";
                    }
                    // line 1641
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1642
                echo "\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1644
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t    </div>
\t";
            }
        } else {
            // line 1650
            echo "\t";
            // line 1651
            $context["classes"] = array(0 => ((            // line 1652
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
            // line 1655
            echo "<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
  ";
            // line 1656
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
  ";
            // line 1657
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
  ";
            // line 1658
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "

  ";
            // line 1660
            if (($context["header"] ?? null)) {
                // line 1661
                echo "    <header>
      ";
                // line 1662
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
    </header>
  ";
            }
            // line 1665
            echo "
  ";
            // line 1666
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
  ";
            // line 1667
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "

  ";
            // line 1669
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
  ";
            // line 1670
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            echo "
  ";
            // line 1671
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "

  ";
            // line 1673
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
  ";
            // line 1674
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
            echo "

  ";
            // line 1676
            if (($context["footer"] ?? null)) {
                // line 1677
                echo "    <footer>
      ";
                // line 1678
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
    </footer>
  ";
            }
            // line 1681
            echo "
  ";
            // line 1682
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
            echo "
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3735 => 1682,  3732 => 1681,  3726 => 1678,  3723 => 1677,  3721 => 1676,  3716 => 1674,  3712 => 1673,  3707 => 1671,  3703 => 1670,  3699 => 1669,  3694 => 1667,  3690 => 1666,  3687 => 1665,  3681 => 1662,  3678 => 1661,  3676 => 1660,  3671 => 1658,  3667 => 1657,  3663 => 1656,  3658 => 1655,  3656 => 1652,  3655 => 1651,  3653 => 1650,  3644 => 1644,  3640 => 1642,  3634 => 1641,  3631 => 1640,  3629 => 1639,  3623 => 1637,  3620 => 1636,  3617 => 1635,  3613 => 1633,  3611 => 1632,  3606 => 1631,  3603 => 1630,  3600 => 1629,  3596 => 1627,  3594 => 1626,  3589 => 1625,  3586 => 1624,  3583 => 1623,  3579 => 1621,  3577 => 1620,  3573 => 1619,  3570 => 1618,  3567 => 1617,  3562 => 1616,  3560 => 1615,  3556 => 1614,  3552 => 1613,  3548 => 1612,  3544 => 1611,  3539 => 1610,  3531 => 1605,  3527 => 1603,  3521 => 1602,  3518 => 1601,  3516 => 1600,  3510 => 1598,  3507 => 1597,  3504 => 1596,  3500 => 1594,  3498 => 1593,  3493 => 1592,  3490 => 1591,  3487 => 1590,  3483 => 1588,  3481 => 1587,  3477 => 1586,  3474 => 1585,  3471 => 1584,  3466 => 1583,  3464 => 1582,  3460 => 1581,  3456 => 1580,  3452 => 1579,  3448 => 1578,  3443 => 1577,  3441 => 1576,  3434 => 1572,  3430 => 1570,  3424 => 1569,  3421 => 1568,  3419 => 1567,  3413 => 1565,  3410 => 1564,  3407 => 1563,  3403 => 1561,  3401 => 1560,  3397 => 1559,  3394 => 1558,  3391 => 1557,  3386 => 1556,  3384 => 1555,  3380 => 1554,  3376 => 1553,  3372 => 1552,  3368 => 1551,  3364 => 1550,  3359 => 1549,  3356 => 1548,  3354 => 1547,  3349 => 1545,  3345 => 1544,  3341 => 1543,  3337 => 1542,  3333 => 1541,  3328 => 1540,  3322 => 1537,  3318 => 1536,  3314 => 1535,  3309 => 1534,  3303 => 1533,  3300 => 1532,  3298 => 1531,  3291 => 1528,  3288 => 1527,  3285 => 1526,  3280 => 1523,  3278 => 1522,  3273 => 1521,  3270 => 1520,  3267 => 1519,  3262 => 1516,  3260 => 1515,  3255 => 1514,  3252 => 1513,  3249 => 1512,  3244 => 1509,  3242 => 1508,  3238 => 1507,  3235 => 1506,  3232 => 1505,  3227 => 1504,  3225 => 1503,  3221 => 1502,  3217 => 1501,  3213 => 1500,  3209 => 1499,  3204 => 1498,  3202 => 1497,  3197 => 1495,  3193 => 1494,  3189 => 1493,  3184 => 1492,  3178 => 1491,  3175 => 1490,  3173 => 1489,  3166 => 1486,  3163 => 1485,  3160 => 1484,  3155 => 1481,  3153 => 1480,  3149 => 1479,  3146 => 1478,  3143 => 1477,  3138 => 1476,  3136 => 1475,  3132 => 1474,  3128 => 1473,  3124 => 1472,  3120 => 1471,  3115 => 1470,  3113 => 1469,  3108 => 1467,  3104 => 1466,  3100 => 1465,  3096 => 1464,  3092 => 1463,  3088 => 1462,  3084 => 1461,  3080 => 1460,  3076 => 1459,  3071 => 1458,  3069 => 1457,  3064 => 1455,  3060 => 1454,  3056 => 1453,  3051 => 1452,  3045 => 1451,  3042 => 1450,  3040 => 1449,  3033 => 1446,  3030 => 1445,  3027 => 1444,  3022 => 1441,  3020 => 1440,  3015 => 1439,  3012 => 1438,  3009 => 1437,  3004 => 1434,  3002 => 1433,  2998 => 1432,  2995 => 1431,  2992 => 1430,  2987 => 1429,  2985 => 1428,  2981 => 1427,  2977 => 1426,  2973 => 1425,  2969 => 1424,  2964 => 1423,  2961 => 1422,  2959 => 1421,  2954 => 1419,  2950 => 1418,  2946 => 1417,  2942 => 1416,  2938 => 1415,  2933 => 1414,  2927 => 1411,  2923 => 1410,  2919 => 1409,  2914 => 1408,  2908 => 1407,  2905 => 1406,  2903 => 1405,  2896 => 1402,  2893 => 1401,  2890 => 1400,  2885 => 1397,  2883 => 1396,  2878 => 1395,  2875 => 1394,  2872 => 1393,  2867 => 1390,  2865 => 1389,  2860 => 1388,  2857 => 1387,  2854 => 1386,  2849 => 1383,  2847 => 1382,  2843 => 1381,  2840 => 1380,  2837 => 1379,  2832 => 1378,  2830 => 1377,  2826 => 1376,  2822 => 1375,  2818 => 1374,  2814 => 1373,  2809 => 1372,  2807 => 1371,  2802 => 1369,  2798 => 1368,  2794 => 1367,  2789 => 1366,  2783 => 1365,  2780 => 1364,  2778 => 1363,  2771 => 1360,  2768 => 1359,  2765 => 1358,  2760 => 1355,  2758 => 1354,  2754 => 1353,  2751 => 1352,  2748 => 1351,  2743 => 1350,  2741 => 1349,  2737 => 1348,  2733 => 1347,  2729 => 1346,  2725 => 1345,  2720 => 1344,  2718 => 1343,  2713 => 1341,  2709 => 1340,  2705 => 1339,  2701 => 1338,  2697 => 1337,  2693 => 1336,  2689 => 1335,  2685 => 1334,  2681 => 1333,  2676 => 1332,  2674 => 1331,  2669 => 1329,  2665 => 1328,  2661 => 1327,  2656 => 1326,  2650 => 1325,  2647 => 1324,  2645 => 1323,  2638 => 1320,  2635 => 1319,  2632 => 1318,  2627 => 1315,  2625 => 1314,  2620 => 1313,  2617 => 1312,  2614 => 1311,  2609 => 1308,  2607 => 1307,  2603 => 1306,  2600 => 1305,  2597 => 1304,  2592 => 1303,  2590 => 1302,  2586 => 1301,  2582 => 1300,  2578 => 1299,  2574 => 1298,  2569 => 1297,  2566 => 1296,  2564 => 1295,  2559 => 1293,  2555 => 1292,  2551 => 1291,  2547 => 1290,  2543 => 1289,  2538 => 1288,  2530 => 1283,  2524 => 1280,  2520 => 1279,  2515 => 1278,  2509 => 1277,  2506 => 1276,  2504 => 1275,  2497 => 1272,  2494 => 1271,  2491 => 1270,  2486 => 1267,  2484 => 1266,  2479 => 1265,  2476 => 1264,  2473 => 1263,  2468 => 1260,  2466 => 1259,  2461 => 1258,  2458 => 1257,  2455 => 1256,  2450 => 1253,  2448 => 1252,  2444 => 1251,  2441 => 1250,  2438 => 1249,  2433 => 1248,  2431 => 1247,  2427 => 1246,  2423 => 1245,  2419 => 1244,  2415 => 1243,  2410 => 1242,  2408 => 1241,  2401 => 1237,  2395 => 1234,  2391 => 1233,  2386 => 1232,  2380 => 1231,  2377 => 1230,  2375 => 1229,  2368 => 1226,  2365 => 1225,  2362 => 1224,  2357 => 1221,  2355 => 1220,  2351 => 1219,  2348 => 1218,  2345 => 1217,  2340 => 1216,  2338 => 1215,  2334 => 1214,  2330 => 1213,  2326 => 1212,  2322 => 1211,  2317 => 1210,  2315 => 1209,  2309 => 1206,  2306 => 1205,  2300 => 1202,  2297 => 1201,  2295 => 1200,  2290 => 1198,  2286 => 1197,  2281 => 1195,  2277 => 1194,  2273 => 1193,  2268 => 1191,  2264 => 1190,  2261 => 1189,  2255 => 1186,  2252 => 1185,  2250 => 1184,  2245 => 1182,  2241 => 1181,  2237 => 1180,  2232 => 1179,  2230 => 1176,  2229 => 1175,  2227 => 1173,  2220 => 1169,  2214 => 1166,  2210 => 1165,  2205 => 1164,  2199 => 1163,  2196 => 1162,  2194 => 1161,  2187 => 1158,  2184 => 1157,  2181 => 1156,  2176 => 1153,  2174 => 1152,  2169 => 1151,  2166 => 1150,  2163 => 1149,  2158 => 1146,  2156 => 1145,  2152 => 1144,  2149 => 1143,  2146 => 1142,  2141 => 1141,  2139 => 1140,  2135 => 1139,  2131 => 1138,  2127 => 1137,  2123 => 1136,  2118 => 1135,  2115 => 1134,  2113 => 1133,  2111 => 1132,  2105 => 1129,  2099 => 1127,  2097 => 1126,  2089 => 1121,  2056 => 1091,  2046 => 1083,  2044 => 1082,  2036 => 1077,  2009 => 1053,  2000 => 1046,  1998 => 1045,  1992 => 1042,  1989 => 1041,  1983 => 1039,  1981 => 1038,  1976 => 1036,  1967 => 1029,  1965 => 1028,  1960 => 1026,  1953 => 1022,  1926 => 998,  1917 => 991,  1915 => 990,  1911 => 988,  1905 => 987,  1902 => 986,  1900 => 985,  1893 => 982,  1890 => 981,  1887 => 980,  1882 => 977,  1880 => 976,  1875 => 975,  1872 => 974,  1869 => 973,  1864 => 970,  1862 => 969,  1858 => 968,  1854 => 966,  1851 => 965,  1846 => 964,  1844 => 963,  1831 => 953,  1821 => 945,  1819 => 944,  1811 => 939,  1788 => 918,  1786 => 917,  1781 => 915,  1774 => 911,  1748 => 888,  1739 => 881,  1737 => 880,  1729 => 875,  1706 => 854,  1704 => 853,  1696 => 848,  1670 => 824,  1664 => 821,  1661 => 820,  1659 => 819,  1651 => 814,  1641 => 806,  1639 => 805,  1636 => 804,  1630 => 803,  1627 => 802,  1625 => 801,  1619 => 799,  1616 => 798,  1613 => 797,  1609 => 795,  1607 => 794,  1602 => 793,  1599 => 792,  1596 => 791,  1592 => 789,  1590 => 788,  1585 => 787,  1582 => 786,  1579 => 785,  1575 => 783,  1573 => 782,  1569 => 781,  1566 => 780,  1563 => 779,  1558 => 778,  1556 => 777,  1548 => 772,  1540 => 766,  1538 => 765,  1529 => 759,  1519 => 751,  1517 => 750,  1513 => 748,  1507 => 747,  1504 => 746,  1502 => 745,  1496 => 743,  1493 => 742,  1490 => 741,  1486 => 739,  1484 => 738,  1479 => 737,  1476 => 736,  1473 => 735,  1469 => 733,  1467 => 732,  1463 => 731,  1460 => 730,  1457 => 729,  1452 => 728,  1450 => 727,  1446 => 725,  1444 => 724,  1441 => 723,  1435 => 722,  1432 => 721,  1430 => 720,  1424 => 718,  1421 => 717,  1418 => 716,  1414 => 714,  1412 => 713,  1407 => 712,  1404 => 711,  1401 => 710,  1397 => 708,  1395 => 707,  1391 => 706,  1388 => 705,  1385 => 704,  1380 => 703,  1378 => 702,  1370 => 697,  1362 => 691,  1360 => 690,  1355 => 688,  1352 => 687,  1350 => 686,  1345 => 684,  1339 => 682,  1337 => 681,  1330 => 677,  1309 => 659,  1305 => 657,  1303 => 656,  1298 => 654,  1295 => 653,  1293 => 652,  1288 => 650,  1285 => 649,  1282 => 648,  1280 => 647,  1274 => 644,  1270 => 643,  1267 => 642,  1265 => 641,  1260 => 639,  1257 => 638,  1255 => 637,  1249 => 634,  1245 => 632,  1243 => 631,  1238 => 629,  1235 => 628,  1233 => 627,  1228 => 625,  1225 => 624,  1222 => 623,  1220 => 622,  1213 => 618,  1194 => 601,  1192 => 600,  1187 => 598,  1184 => 597,  1182 => 596,  1177 => 594,  1174 => 593,  1172 => 592,  1167 => 590,  1164 => 589,  1161 => 588,  1159 => 587,  1156 => 586,  1151 => 583,  1145 => 582,  1142 => 581,  1140 => 580,  1134 => 577,  1131 => 576,  1128 => 575,  1125 => 574,  1121 => 572,  1119 => 571,  1114 => 569,  1111 => 568,  1108 => 567,  1105 => 566,  1101 => 564,  1099 => 563,  1094 => 561,  1091 => 560,  1088 => 559,  1085 => 558,  1081 => 556,  1079 => 555,  1074 => 553,  1070 => 551,  1067 => 550,  1062 => 549,  1060 => 548,  1052 => 543,  1044 => 537,  1042 => 536,  1036 => 533,  1028 => 528,  1020 => 522,  1018 => 521,  1012 => 518,  1004 => 513,  996 => 507,  994 => 506,  988 => 503,  980 => 498,  972 => 492,  970 => 491,  966 => 489,  960 => 488,  957 => 487,  955 => 486,  949 => 483,  946 => 482,  943 => 481,  940 => 480,  936 => 478,  934 => 477,  929 => 475,  926 => 474,  923 => 473,  920 => 472,  916 => 470,  914 => 469,  909 => 467,  905 => 465,  902 => 464,  897 => 463,  895 => 462,  886 => 456,  877 => 449,  875 => 448,  871 => 446,  865 => 445,  862 => 444,  860 => 443,  854 => 440,  851 => 439,  848 => 438,  845 => 437,  841 => 435,  839 => 434,  834 => 432,  831 => 431,  828 => 430,  825 => 429,  821 => 427,  819 => 426,  814 => 424,  810 => 422,  807 => 421,  802 => 420,  800 => 419,  791 => 413,  782 => 406,  780 => 405,  773 => 401,  763 => 394,  754 => 387,  752 => 386,  745 => 382,  735 => 375,  726 => 368,  724 => 367,  717 => 363,  707 => 356,  699 => 350,  697 => 349,  693 => 347,  687 => 346,  684 => 345,  682 => 344,  676 => 341,  673 => 340,  670 => 339,  667 => 338,  663 => 336,  661 => 335,  656 => 333,  653 => 332,  650 => 331,  647 => 330,  643 => 328,  641 => 327,  636 => 325,  632 => 323,  629 => 322,  624 => 321,  622 => 320,  613 => 314,  604 => 307,  602 => 306,  598 => 304,  592 => 303,  589 => 302,  587 => 301,  581 => 298,  578 => 297,  575 => 296,  572 => 295,  568 => 293,  566 => 292,  561 => 290,  558 => 289,  555 => 288,  552 => 287,  548 => 285,  546 => 284,  541 => 282,  537 => 280,  534 => 279,  529 => 278,  527 => 277,  518 => 271,  509 => 264,  507 => 263,  500 => 259,  490 => 252,  481 => 245,  479 => 244,  472 => 240,  462 => 233,  453 => 226,  451 => 225,  444 => 221,  434 => 214,  425 => 207,  422 => 206,  416 => 205,  414 => 204,  411 => 203,  405 => 200,  401 => 198,  395 => 195,  391 => 193,  388 => 192,  383 => 191,  380 => 190,  378 => 189,  370 => 184,  362 => 179,  354 => 173,  352 => 172,  344 => 167,  336 => 162,  328 => 156,  326 => 155,  318 => 150,  310 => 145,  302 => 139,  300 => 138,  292 => 133,  284 => 128,  276 => 122,  274 => 121,  266 => 116,  258 => 111,  250 => 105,  248 => 104,  240 => 99,  232 => 94,  224 => 88,  222 => 87,  214 => 82,  206 => 77,  198 => 71,  196 => 70,  188 => 65,  180 => 60,  172 => 54,  170 => 53,  165 => 51,  162 => 50,  160 => 49,  155 => 47,  152 => 46,  150 => 45,  145 => 43,  142 => 42,  139 => 41,  137 => 40,  130 => 36,  127 => 35,  121 => 32,  118 => 31,  116 => 30,  111 => 28,  107 => 27,  102 => 25,  98 => 24,  94 => 23,  89 => 21,  85 => 20,  82 => 19,  76 => 16,  73 => 15,  71 => 14,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 7,  48 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if id == 'press_release' and display_id == 'block' %}
\t{%
\t\tset classes = [
\t\t\tdom_id ? 'js-view-dom-id-' ~ dom_id,
\t\t]
\t%}
\t<div class=\"container\">
\t<div class=\"row\">
\t<div{{ attributes.addClass(classes) }}>
\t\t{{ title_prefix }}
\t\t{{ title }}
\t\t{{ title_suffix }}

\t\t{% if header %}
\t\t\t<header>
\t\t\t\t{{ header }}
\t\t\t</header>
\t\t{% endif %}

\t\t{{ exposed }}
\t\t{{ attachment_before }}

\t\t{{ rows }}
\t\t{{ empty }}
\t\t{{ pager }}

\t\t{{ attachment_after }}
\t\t{{ more }}

\t\t{% if footer %}
\t\t\t<footer>
\t\t\t\t{{ footer }}
\t\t\t</footer>
\t\t{% endif %}

\t\t{{ feed_icons }}
\t</div>
\t</div>
\t</div>
{% elseif id == '_agenchy_section_content' %}
\t{% if display_id == 'block_section_content_latest_post' %}
\t\t\t<ul class=\"thumbnail-widget\">
\t\t\t\t{{ rows }}
\t\t\t</ul>
\t{% elseif display_id == 'block_section_content_blog_timeline' %}
\t\t<div id=\"universh-timeline\" class=\"universh-container\">
\t\t\t{{ rows }}
\t\t</div><!-- Timeline Container -->
\t{% elseif display_id == 'block_footer_3_colum_3_latest_news' %}
\t\t<ul class=\"thumbnail-widget\">
\t\t\t{{ rows }}
\t\t</ul><!-- Thumbnail Widget -->
\t{% elseif display_id == 'block_section_content_masonry_2_column' %}
\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t{{ header }}
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"2\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_masonry_3_column' %}
\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t{{ header }}
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"0\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_masonry_4_column' %}
\t\t<!-- Container -->
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters text-center\">
\t\t\t\t\t\t{{ header }}
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"4\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_masonry_gutter' %}
\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t{{ header }}
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"20\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_grid_2_column' %}
\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t{{ header }}
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"2\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_grid_3_column' %}
\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t{{ header }}
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"0\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_grid_4_column' %}
\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters text-center\">
\t\t\t\t\t\t{{ header }}
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"4\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_grid_gutter' %}
\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t{{ header }}
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"20\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_team_list' %}
\t\t{% set temp = 1 %}
\t    {% for i, row in rows.0['#rows'] %}
\t    \t{% if temp % 2 == 0 %}
\t\t\t\t<!-- Team List Section -->
\t\t\t\t<div class=\"team-list-section typo-dark agenchy-list-team-item\">
\t\t\t\t\t{{ row }}
\t\t\t\t</div><!-- Team List Section --> 
\t\t\t{% else %}
\t\t\t\t<!-- Team List Section -->
\t\t\t\t<div class=\"bg-grey team-list-section typo-dark\">
\t\t\t\t\t{{ row }}
\t\t\t\t</div><!-- Team List Section -->
\t\t\t{% endif %}

\t\t\t{% set temp = temp + 1 %}
\t    {% endfor %}
\t{% elseif display_id == 'block_section_content_team_v1_2_column' %}
\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t{{ rows }}
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_team_v1_3_column' %}
\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t{{ rows }}
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_team_v1_4_column' %}
\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container small\">
\t\t\t\t\t{{ rows }}
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_team_v1_3_column_style_2' %}
\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t{% set temp = 1 %}
\t\t\t    {% for i, row in rows.0['#rows'] %}
\t\t\t    \t{% if temp == 1 %}
\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-left\">
\t\t\t\t\t        \t{{ row }}
\t\t\t\t        \t</div>
\t\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t\t        \t</div>
\t\t\t\t        \t{% endif %}
\t\t\t\t        {% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 2 %}
\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-center\">
\t\t\t\t        \t{{ row }}
\t\t\t        \t</div>
\t\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t{% endif %}
\t\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 3 or i == (rows.0['#rows']|length - 1) %}
\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-right\">
\t\t\t\t        \t{{ row }}
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t{% set temp = 1 %}
\t\t\t\t    {% endif %}
\t\t\t    {% endfor %}
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_team_v1_3_column_color' %}
\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t{% set temp = 1 %}
\t\t\t    {% for i, row in rows.0['#rows'] %}
\t\t\t    \t{% if temp == 1 %}
\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-white\">
\t\t\t\t\t        \t{{ row }}
\t\t\t\t        \t</div>
\t\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t\t        \t</div>
\t\t\t\t        \t{% endif %}
\t\t\t\t        {% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 2 %}
\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-color\">
\t\t\t\t        \t{{ row }}
\t\t\t        \t</div>
\t\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t{% endif %}
\t\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 3 or i == (rows.0['#rows']|length - 1) %}
\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-dark\">
\t\t\t\t        \t{{ row }}
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t{% set temp = 1 %}
\t\t\t\t    {% endif %}
\t\t\t    {% endfor %}
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_team_v2_2_column' %}
\t\t<div class=\"container border-style\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t{{ rows }}
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_team_v2_3_column' %}
\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t{{ rows }}
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_team_v2_4_column' %}
\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container small\">
\t\t\t\t\t{{ rows }}
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_team_v2_3_column_style_2' %}
\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t{% set temp = 1 %}
\t\t\t    {% for i, row in rows.0['#rows'] %}
\t\t\t    \t{% if temp == 1 %}
\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-left\">
\t\t\t\t\t        \t{{ row }}
\t\t\t\t        \t</div>
\t\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t\t        \t</div>
\t\t\t\t        \t{% endif %}
\t\t\t\t        {% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 2 %}
\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-center\">
\t\t\t\t        \t{{ row }}
\t\t\t        \t</div>
\t\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t{% endif %}
\t\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 3 or i == (rows.0['#rows']|length - 1) %}
\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-right\">
\t\t\t\t        \t{{ row }}
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t{% set temp = 1 %}
\t\t\t\t    {% endif %}
\t\t\t    {% endfor %}
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_team_v2_3_column_color' %}
\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t{% set temp = 1 %}
\t\t\t    {% for i, row in rows.0['#rows'] %}
\t\t\t    \t{% if temp == 1 %}
\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-bg-white\">
\t\t\t\t\t        \t{{ row }}
\t\t\t\t        \t</div>
\t\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t\t        \t</div>
\t\t\t\t        \t{% endif %}
\t\t\t\t        {% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 2 %}
\t\t\t\t    \t<div class=\"col-sm-4 color-border team-v2-3-column-bg-color\">
\t\t\t\t        \t{{ row }}
\t\t\t        \t</div>
\t\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t{% endif %}
\t\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 3 or i == (rows.0['#rows']|length - 1) %}
\t\t\t\t    \t<div class=\"col-sm-4 dark-border team-v2-3-column-bg-dark\">
\t\t\t\t        \t{{ row }}
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t{% set temp = 1 %}
\t\t\t\t    {% endif %}
\t\t\t    {% endfor %}
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_testimonial_2_column' %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t{{ rows }}
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_testimonial_3_column' %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t{{ rows }}
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_testimonial_4_column' %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row quote-sm\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t{{ rows }}
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif display_id == 'block_section_content_testimonial_color_column' %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t<!-- Team Container -->
\t\t\t\t{% set temp = 1 %}
\t\t\t    {% for i, row in rows.0['#rows'] %}
\t\t\t    \t{% if temp == 1 %}
\t\t\t    \t\t<div class=\"row quote-sm\">
\t\t\t\t\t    \t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t        \t{{ row }}
\t\t\t\t        \t</div>
\t\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t\t        \t</div>
\t\t\t\t        \t{% endif %}
\t\t\t\t        {% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 2 %}
\t\t\t\t    \t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t        \t{{ row }}
\t\t\t        \t</div>
\t\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t{% endif %}
\t\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 3 %}
\t\t\t\t    \t<div class=\"col-sm-6 col-md-3 agenchy-color-column-color\">
\t\t\t\t        \t{{ row }}
\t\t\t        \t</div>
\t\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t{% endif %}
\t\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 4 or i == (rows.0['#rows']|length - 1) %}
\t\t\t\t    \t<div class=\"col-sm-6 col-md-3 agenchy-color-column-dark\">
\t\t\t\t        \t{{ row }}
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t{% set temp = 1 %}
\t\t\t\t    {% endif %}
\t\t\t    {% endfor %}
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% endif %}

{% elseif id == '_agenchy_sidebar_widgets' %}
\t{% if display_id == 'block_on_sidebar_popular_cases' %}
\t\t<ul class=\"thumbnail-widget\">
\t\t\t{{ rows }}
\t\t</ul><!-- Thumbnail Widget -->
\t{% elseif display_id == 'block_on_sidebar_title_services' %}
\t\t<ul class=\"go-widget with-bg\">
\t\t\t{{ rows }}
\t\t</ul>
\t{% elseif display_id == 'block_on_sidebar_browse_by_team' %}
\t\t<ul class=\"thumbnail-widget thumb-circle\">
\t\t\t{{ rows }}
\t\t</ul>
\t{% elseif display_id == 'block_on_sidebar_latest_reviews' %}
\t\t<div class=\"quote-sm\">
\t\t\t<div class=\"owl-carousel nav-topright nav-dark nav-mini\" 
\t\t\tdata-animatein=\"\" data-animateout=\"\" 
\t\t\tdata-items=\"1\" 
\t\t\tdata-margin=\"\" 
\t\t\tdata-loop=\"true\" 
\t\t\tdata-merge=\"true\" 
\t\t\tdata-nav=\"true\" 
\t\t\tdata-dots=\"false\" 
\t\t\tdata-stagepadding=\"\" 
\t\t\tdata-mobile=\"1\" 
\t\t\tdata-tablet=\"1\" 
\t\t\tdata-desktopsmall=\"1\" 
\t\t\tdata-desktop=\"1\" 
\t\t\tdata-autoplay=\"true\" 
\t\t\tdata-delay=\"3000\" 
\t\t\tdata-navigation=\"true\">
\t\t\t\t{{ rows }}
\t\t\t</div><!-- gallery Image carousel -->
\t\t</div>
\t{% endif %}
{% elseif id == '_agenchy_taxonomy_term' %}
\t{% if display_id == 'block_on_sidebar_categories' %}
\t\t<ul class=\"go-widget\">
\t\t\t{{ rows }}
\t\t</ul>
\t{% elseif display_id == 'block_on_sidebar_blog_tag_cloud' %}
\t\t<ul class=\"tag-widget\">
\t\t\t{{ rows }}
\t\t</ul>
\t{% elseif display_id == 'block_on_sidebar_categories_cases' %}
\t\t<div class=\"accordion-widget\">
\t\t\t<div class=\"panel-group accordion agenchy-categories-cases\">
\t\t\t\t{{ rows }}
\t\t\t</div>
\t\t</div>
\t{% elseif display_id == 'block_on_sidebar_cases_tag_cloud' %}
\t\t<ul class=\"tag-widget\">
\t\t\t{{ rows }}
\t\t</ul>
\t{% elseif display_id == 'block_gallery_categories_tab_1' %}
\t\t<ul class=\"nav nav-pills\">
\t\t\t{{ header }}
\t\t\t{{ rows }}
\t\t</ul>
\t{% endif %}
{% elseif id == '_agenchy_section_content_2' %}
\t{% if display_id == 'block_section_content_consultants' %}
\t\t<ul class=\"thumbnail-widget\">
\t\t\t{{ rows }}
\t\t</ul>
\t{% elseif display_id == 'block_footer_latest_news' %}
\t\t<ul class=\"thumbnail-widget\">
\t\t\t{{ rows }}
\t\t</ul><!-- Thumbnail Widget -->
\t{% elseif display_id == 'block_team_bottom_content_reviews' %}
\t\t<!-- Widget -->
\t\t<div class=\"widget\">
\t\t\t{{ header }}
\t\t\t<div class=\"quote-sm\">
\t\t\t\t<div class=\"owl-carousel nav-topright nav-dark nav-mini\" 
\t\t\t\tdata-animatein=\"\" data-animateout=\"\" 
\t\t\t\tdata-items=\"1\" 
\t\t\t\tdata-margin=\"\" 
\t\t\t\tdata-loop=\"true\" 
\t\t\t\tdata-merge=\"true\" 
\t\t\t\tdata-nav=\"true\" 
\t\t\t\tdata-dots=\"false\" 
\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\tdata-mobile=\"1\" 
\t\t\t\tdata-tablet=\"1\" 
\t\t\t\tdata-desktopsmall=\"1\" 
\t\t\t\tdata-desktop=\"1\" 
\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\tdata-delay=\"3000\" 
\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t{{ rows }}
\t\t\t\t</div><!-- gallery Image carousel -->
\t\t\t</div><!-- Quote Small -->
\t\t</div><!-- Widget -->
\t{% elseif display_id == 'block_section_content_reviews' %}
\t\t{{ header }}
\t\t<div class=\"owl-carousel dots-square\" data-animatein=\"zoomIn\" data-animateout=\"slideOutDown\" data-items=\"1\" data-margin=\"30\" data-loop=\"true\" data-merge=\"true\" data-nav=\"false\" data-dots=\"false\" data-stagepadding=\"\" data-mobile=\"1\" data-tablet=\"1\" data-desktopsmall=\"1\"  data-desktop=\"2\" data-autoplay=\"true\" data-delay=\"3000\" data-navigation=\"true\">\t
\t\t\t{{ rows }}
\t\t</div><!-- gallery Image carousel -->
\t{% elseif display_id == 'block_section_content_achievements' %}
\t\t<div class=\"row\">
\t\t\t{{ rows }}
\t\t</div><!-- Content row -->
\t{% elseif display_id == 'block_section_content_our_approach' %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div><!-- Title -->
\t\t\t</div><!-- Row -->
\t\t\t{% set temp = 1 %}
\t\t\t{% for i, row in rows.0['#rows'] %}
\t\t    \t{% if temp == 1 %}
\t\t\t    \t<div class=\"row\">
\t\t\t        \t{{ row }}
\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t{% endif %}
\t\t\t        {% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 2 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 3 or i == (rows.0['#rows']|length - 1) %}
\t\t\t    \t\t{{ row }}
\t\t\t    \t</div>
\t\t\t    \t{% set temp = 1 %}
\t\t\t    {% endif %}
\t\t    {% endfor %}
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_reviews_grid' %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{% set temp = 1 %}
\t\t\t\t{% for i, row in rows.0['#rows'] %}
\t\t\t    \t{% if temp == 1 %}
\t\t\t\t    \t<div class=\"col-sm-4\">
\t\t\t\t        \t{{ row }}
\t\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t\t        \t</div>
\t\t\t\t        \t{% endif %}
\t\t\t\t        {% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 2 %}
\t\t\t\t    \t{{ row }}
\t\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t{% endif %}
\t\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 3 or i == (rows.0['#rows']|length - 1) %}
\t\t\t\t    \t\t{{ row }}
\t\t\t\t    \t</div>
\t\t\t\t    \t{% set temp = 1 %}
\t\t\t\t    {% endif %}
\t\t\t    {% endfor %}
\t\t\t</div>
\t\t</div>
\t{% elseif display_id == 'block_section_content_company_logo' %}
\t\t<!-- Section -->
\t\t<div class=\"typo-dark\">
\t\t\t<!-- Container -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<!-- Details Listing Wrap -->
\t\t\t\t\t\t<ul class=\"listing-wrap\">
\t\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t\t</ul><!-- Details Listing Wrap -->
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->
\t\t</div><!-- Team List Section -->
\t{% elseif display_id == 'block_section_content_our_clients' %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container title-sm text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div>
\t\t\t{% set temp = 1 %}
\t\t\t{% for i, row in rows.0['#rows'] %}
\t\t    \t{% if temp == 1 %}
\t\t\t    \t<div class=\"row\">
\t\t\t        \t{{ row }}
\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t{% endif %}
\t\t\t        {% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 2 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 3 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 4 or i == (rows.0['#rows']|length - 1) %}
\t\t\t    \t\t{{ row }}
\t\t\t    \t</div>
\t\t\t    \t{% set temp = 1 %}
\t\t\t    {% endif %}
\t\t    {% endfor %}
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_what_we_do_services' %}
\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t\t<!-- Column -->
\t\t\t\t{% if footer %}
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<p class=\"text-right text-left-767 margin-bottom-767-30\">{{ footer }}</p>
\t\t\t\t</div><!-- Column -->
\t\t\t\t{% endif %}
\t\t\t</div><!-- row -->
\t\t\t
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column Begins -->
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"owl-carousel dots-push\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"false\" 
\t\t\t\t\t\tdata-dots=\"true\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-margin=\"30\"
\t\t\t\t\t\tdata-mobile=\"1\" 
\t\t\t\t\t\tdata-tablet=\"2\" 
\t\t\t\t\t\tdata-desktopsmall=\"2\"  
\t\t\t\t\t\tdata-desktop=\"3\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_clients_image' %}
\t\t<!-- Clients -->
\t\t<div class=\"row margin-top-60\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"pad-30 bg-white shadow\">
\t\t\t\t\t<div class=\"owl-carousel imgs-center\" 
\t\t\t\t\t\tdata-animatein=\"zoomIn\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"false\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-margin=\"\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-mobile=\"2\" 
\t\t\t\t\t\tdata-tablet=\"3\" 
\t\t\t\t\t\tdata-desktopsmall=\"4\"  
\t\t\t\t\t\tdata-desktop=\"5\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Boxed Block -->\t
\t\t\t</div><!-- Column -->
\t\t</div><!-- Row -->
\t{% elseif display_id == 'block_section_content_what_our_clients_say' %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t\t<!-- Column Begins -->
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"owl-carousel nav-topright\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"true\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-margin=\"30\"
\t\t\t\t\t\tdata-mobile=\"1\" 
\t\t\t\t\t\tdata-tablet=\"1\" 
\t\t\t\t\t\tdata-desktopsmall=\"1\"  
\t\t\t\t\t\tdata-desktop=\"3\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t\t{{ footer }}
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_clients_image_dark' %}
\t\t<!-- Clients -->
\t\t<div class=\"row margin-top-60\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"pad-30 bg-dark shadow\">
\t\t\t\t\t<div class=\"owl-carousel imgs-center\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"false\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-margin=\"\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-mobile=\"2\" 
\t\t\t\t\t\tdata-tablet=\"3\" 
\t\t\t\t\t\tdata-desktopsmall=\"4\"  
\t\t\t\t\t\tdata-desktop=\"5\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Boxed Block -->\t
\t\t\t</div><!-- Column -->
\t\t</div><!-- Row -->
\t{% elseif display_id == 'block_section_content_news_updates' %}
\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container sm text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->

\t\t<!-- Container -->
\t\t<div class=\"container\">\t
\t\t\t<div class=\"row\">
\t\t\t\t{% set temp = 1 %}
\t\t\t\t{% for i, row in rows.0['#rows'] %}
\t\t\t    \t{% if temp == 1 %}
\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t    \t\t<ul class=\"row\">
\t\t\t\t\t        \t{{ row }}
\t\t\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t\t        \t</ul>\t
\t\t\t        \t</div>
\t\t\t        \t{% endif %}
\t\t\t\t        {% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 2 %}
\t\t\t\t\t\t    \t{{ row }}
\t\t\t\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t\t\t    \t</ul>
\t\t\t        \t</div>
\t\t\t        \t{% endif %}
\t\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t\t    {% elseif temp == 3 or i == (rows.0['#rows']|length - 1) %}
\t\t\t\t    \t\t\t{{ row }}
\t\t\t\t    \t\t</ul>
\t\t\t        \t</div>
\t\t\t\t    \t{% set temp = 1 %}
\t\t\t\t    {% endif %}
\t\t\t    {% endfor %}
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_what_our_clients_say_dark' %}
\t\t<div class=\"container parent-has-overlay\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t\t<!-- Column Begins -->
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"owl-carousel nav-topright\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"false\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-margin=\"30\"
\t\t\t\t\t\tdata-mobile=\"1\" 
\t\t\t\t\t\tdata-tablet=\"1\" 
\t\t\t\t\t\tdata-desktopsmall=\"1\"  
\t\t\t\t\t\tdata-desktop=\"3\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t\t{{ footer }}
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_what_we_do_services_style_2' %}
\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t{{ header }}
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t\t{% if footer %}
\t\t\t\t\t<p>{{ footer }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div><!-- Column -->
\t\t\t\t{{ rows }}
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_what_our_clients_say_default' %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t\t<!-- Column Begins -->
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"owl-carousel nav-topright\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"true\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-margin=\"30\"
\t\t\t\t\t\tdata-mobile=\"1\" 
\t\t\t\t\t\tdata-tablet=\"1\" 
\t\t\t\t\t\tdata-desktopsmall=\"1\"  
\t\t\t\t\t\tdata-desktop=\"3\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_section_content_news_updates_slide' %}
\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t{{ header }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->

\t\t<!-- Container -->
\t\t<div class=\"container-fluid\">\t
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column Begins -->
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"owl-carousel\" 
\t\t\t\t\t\tdata-animatein=\"\" 
\t\t\t\t\t\tdata-animateout=\"\" 
\t\t\t\t\t\tdata-items=\"1\" 
\t\t\t\t\t\tdata-loop=\"true\" 
\t\t\t\t\t\tdata-merge=\"true\" 
\t\t\t\t\t\tdata-nav=\"true\" 
\t\t\t\t\t\tdata-dots=\"false\" 
\t\t\t\t\t\tdata-stagepadding=\"\" 
\t\t\t\t\t\tdata-margin=\"15\"
\t\t\t\t\t\tdata-mobile=\"1\" 
\t\t\t\t\t\tdata-tablet=\"2\" 
\t\t\t\t\t\tdata-desktopsmall=\"3\"  
\t\t\t\t\t\tdata-desktop=\"4\" 
\t\t\t\t\t\tdata-autoplay=\"true\" 
\t\t\t\t\t\tdata-delay=\"3000\" 
\t\t\t\t\t\tdata-navigation=\"true\">
\t\t\t\t\t\t
\t\t\t\t\t\t{{ rows }}
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t{% elseif display_id == 'block_switcher_homepage' %}
\t\t{{ header }}
\t\t<ul class=\"demos\">
\t\t\t{{ rows }}
\t\t</ul><!-- Options Config -->
\t{% endif %}
{% elseif id == 'blog'%}
{% set blog_layout = 'list' %}
\t{% if blog_layout == 'grid' or blog_layout == '3_column' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t\t    \t{% if temp == 1 %}
\t\t\t    \t<div class=\"row\">
\t\t\t        \t{{ row }}
\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t{% endif %}
\t\t\t        {% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 2 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 3 or i == (rows.0['#rows']|length - 1) %}
\t\t\t    \t\t{{ row }}
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t{% set temp = 1 %}
\t\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    {{ attachment_after }}
\t\t  \t{{ empty }}
\t\t  \t{{ footer }}
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t{{ pager }}
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif blog_layout == 'list' %}
{%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title }}
  {{ title_suffix }}

  {% if header %}
    <header>
      {{ header }}
    </header>
  {% endif %}

  {{ exposed }}
  {{ attachment_before }}

  {{ rows }}
  {{ empty }}
  {{ pager }}

  {{ attachment_after }}
  {{ more }}

  {% if footer %}
    <footer>
      {{ footer }}
    </footer>
  {% endif %}

  {{ feed_icons }}
</div>

\t{% elseif blog_layout == '2_column' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t\t    \t{% if temp == 1 %}
\t\t\t    \t<div class=\"row\">
\t\t\t        \t{{ row }}
\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t{% endif %}
\t\t\t        {% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 2 or i == (rows.0['#rows']|length - 1) %}
\t\t\t    \t\t{{ row }}
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t{% set temp = 1 %}
\t\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    {{ attachment_after }}
\t\t  \t{{ empty }}
\t\t  \t{{ footer }}
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t{{ pager }}
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif blog_layout == '4_column' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t\t    \t{% if temp == 1 %}
\t\t\t    \t<div class=\"row\">
\t\t\t        \t{{ row }}
\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t{% endif %}
\t\t\t        {% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 2 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 3 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 4 or i == (rows.0['#rows']|length - 1) %}
\t\t\t    \t\t{{ row }}
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t{% set temp = 1 %}
\t\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    {{ attachment_after }}
\t\t  \t{{ empty }}
\t\t  \t{{ footer }}
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t{{ pager }}
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
    {% else %}
    \t{{ header }}
\t  \t{{ rows }}
\t  \t{{ attachment_after }}
\t  \t{{ empty }}
\t  \t{{ footer }}
\t  \t{{ pager }}
\t{% endif %}
{% elseif id == 'cases'%}
\t{% if cases_layout == 'grid' or cases_layout == '3_column' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t\t    \t{% if temp == 1 %}
\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t{{ row }}
\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t{% endif %}
\t\t\t        {% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 2 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 3 or i == (rows.0['#rows']|length - 1) %}
\t\t\t    \t\t{{ row }}
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t{% set temp = 1 %}
\t\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    {{ attachment_after }}
\t\t  \t{{ empty }}
\t\t  \t{{ footer }}
\t\t\t{{ pager }}
\t\t</div>
\t{% elseif cases_layout == 'list' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t  \t{{ rows }}
\t\t  \t{{ attachment_after }}
\t\t  \t{{ empty }}
\t\t  \t{{ footer }}
\t\t  \t{{ pager }}
\t\t</div>
\t{% elseif cases_layout == '2_column' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t\t    \t{% if temp == 1 %}
\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t{{ row }}
\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t{% endif %}
\t\t\t        {% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 2 or i == (rows.0['#rows']|length - 1) %}
\t\t\t    \t\t{{ row }}
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t{% set temp = 1 %}
\t\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    {{ attachment_after }}
\t\t  \t{{ empty }}
\t\t  \t{{ footer }}
\t\t\t{{ pager }}
\t\t</div>
\t{% elseif cases_layout == '4_column' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t\t    \t{% if temp == 1 %}
\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t{{ row }}
\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-991\">
\t\t\t        \t{% endif %}
\t\t\t        {% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 2 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 3 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 4 or i == (rows.0['#rows']|length - 1) %}
\t\t\t    \t\t{{ row }}
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-991\">
\t\t\t    \t{% set temp = 1 %}
\t\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    {{ attachment_after }}
\t\t  \t{{ empty }}
\t\t  \t{{ footer }}
\t\t\t{{ pager }}
\t\t</div>
    {% else %}
    \t{{ header }}
\t  \t{{ rows }}
\t  \t{{ attachment_after }}
\t  \t{{ empty }}
\t  \t{{ footer }}
\t  \t{{ pager }}
\t{% endif %}
{% elseif id == 'services'%}
\t{% if services_layout == 'grid' or services_layout == '3_column' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t\t    \t{% if temp == 1 %}
\t\t\t    \t<div class=\"row\">
\t\t\t        \t{{ row }}
\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t{% endif %}
\t\t\t        {% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 2 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-767\">
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 3 or i == (rows.0['#rows']|length - 1) %}
\t\t\t    \t\t{{ row }}
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t{% set temp = 1 %}
\t\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    {{ attachment_after }}
\t\t  \t{{ empty }}
\t\t  \t{{ footer }}
\t\t\t{{ pager }}
\t\t</div>
\t{% elseif services_layout == 'list' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t  \t{{ rows }}
\t\t  \t{{ attachment_after }}
\t\t  \t{{ empty }}
\t\t  \t{{ footer }}
\t\t  \t{{ pager }}
\t\t</div>
\t{% elseif services_layout == '2_column' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t\t    \t{% if temp == 1 %}
\t\t\t    \t<div class=\"row\">
\t\t\t        \t{{ row }}
\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t{% endif %}
\t\t\t        {% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 2 or i == (rows.0['#rows']|length - 1) %}
\t\t\t    \t\t{{ row }}
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t{% set temp = 1 %}
\t\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    {{ attachment_after }}
\t\t  \t{{ empty }}
\t\t  \t{{ footer }}
\t\t\t{{ pager }}
\t\t</div>
\t{% elseif services_layout == '4_column' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t\t    \t{% if temp == 1 %}
\t\t\t    \t<div class=\"row\">
\t\t\t        \t{{ row }}
\t\t\t        \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-991\">
\t\t\t        \t{% endif %}
\t\t\t        {% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 2 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 3 %}
\t\t\t    \t{{ row }}
\t\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t{% endif %}
\t\t\t    \t{% set temp = temp + 1 %}
\t\t\t    {% elseif temp == 4 or i == (rows.0['#rows']|length - 1) %}
\t\t\t    \t\t{{ row }}
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-991\">
\t\t\t    \t{% set temp = 1 %}
\t\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    {{ attachment_after }}
\t\t  \t{{ empty }}
\t\t  \t{{ footer }}
\t\t\t{{ pager }}
\t\t</div>
    {% else %}
    \t{{ header }}
\t  \t{{ rows }}
\t  \t{{ attachment_after }}
\t  \t{{ empty }}
\t  \t{{ footer }}
\t  \t{{ pager }}
\t{% endif %}
{% elseif id == 'shop'%}
\t{% if shop_layout == '2_column' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t    \t{% if temp == 1 %}
\t\t    \t<div class=\"row\">
\t\t        \t{{ row }}
\t\t       \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t       \t</div>
\t\t       \t{% endif %}
\t\t        {% set temp = temp + 1 %}
\t\t    {% elseif temp == 2 or i == (rows.0['#rows']|length - 1) %}
\t\t    \t\t{{ row }}
\t\t    \t</div>
\t\t    \t{% set temp = 1 %}
\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t{{ pager }}
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t{% elseif shop_layout == '3_column' %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t    \t{% if temp == 1 %}
\t\t    \t<div class=\"row\">
\t\t        \t{{ row }}
\t\t        {% if i == (rows.0['#rows']|length - 1) %}
\t\t       \t</div>
\t\t       \t{% endif %}
\t\t        {% set temp = temp + 1 %}
\t\t    {% elseif temp == 2 %}
\t\t    \t{{ row }}
\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t       \t</div>
\t\t       \t{% endif %}
\t\t    \t{% set temp = temp + 1 %}
\t\t    {% elseif temp == 3 or i == (rows.0['#rows']|length - 1) %}
\t\t    \t\t{{ row }}
\t\t    \t</div>
\t\t    \t{% set temp = 1 %}
\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t{{ pager }}
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t    </div>
\t{% else %}
\t\t<div {{ attributes }}>
\t\t\t{{ title_prefix }}
\t\t\t{{ title }}
\t\t\t{{ title_suffix }}
\t\t\t{{ header }}
\t\t\t{% set temp = 1 %}
\t\t    {% for i, row in rows.0['#rows'] %}
\t    \t{% if temp == 1 %}
\t\t    \t<div class=\"row\">
\t\t        \t{{ row }}
\t\t        {% if i == (rows.0['#rows']|length - 1) %}
\t\t       \t</div>
\t\t       \t{% endif %}
\t\t        {% set temp = temp + 1 %}
\t\t    {% elseif temp == 2 %}
\t\t    \t{{ row }}
\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t       \t</div>
\t\t       \t{% endif %}
\t\t    \t{% set temp = temp + 1 %}
\t\t    {% elseif temp == 3 %}
\t\t    \t{{ row }}
\t\t    \t{% if i == (rows.0['#rows']|length - 1) %}
\t\t       \t</div>
\t\t       \t{% endif %}
\t\t    \t{% set temp = temp + 1 %}
\t\t    {% elseif temp == 4 or i == (rows.0['#rows']|length - 1) %}
\t\t    \t\t{{ row }}
\t\t    \t</div>
\t\t    \t{% set temp = 1 %}
\t\t    {% endif %}
\t\t    {% endfor %}
\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t{{ pager }}
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t    </div>
\t{% endif %}
{% else %}
\t{%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title }}
  {{ title_suffix }}

  {% if header %}
    <header>
      {{ header }}
    </header>
  {% endif %}

  {{ exposed }}
  {{ attachment_before }}

  {{ rows }}
  {{ empty }}
  {{ pager }}

  {{ attachment_after }}
  {{ more }}

  {% if footer %}
    <footer>
      {{ footer }}
    </footer>
  {% endif %}

  {{ feed_icons }}
</div>

{% endif %}", "themes/custom/agenchy/templates/views-view.html.twig", "C:\\xamppnew\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\views-view.html.twig");
    }
}
