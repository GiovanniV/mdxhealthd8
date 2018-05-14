<?php

/* themes/custom/agenchy/templates/system/view/views-view.html.twig */
class __TwigTemplate_2cc6376b5e8b964fc35b28b7310b5666a07b5143ce76992b8eb279da9f8e2dea extends Twig_Template
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
        $tags = array("if" => 1, "set" => 3, "for" => 246);
        $filters = array("length" => 339);
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
        } elseif (((        // line 40
($context["id"] ?? null) == "press_release") && (($context["display_id"] ?? null) == "press_releases_slider"))) {
            // line 41
            echo "<div class=\"container\">
    <!-- Row -->
    <div class=\"row\">
      <!-- Column -->
      <div class=\"col-sm-6\">
        <!-- Title -->
        <div class=\"title-container text-left\">
          <div class=\"title-wrap\">
            ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
            echo "
          </div>
        </div><!-- Title -->
      </div><!-- Column -->
    </div><!-- Row -->
  </div><!-- Container -->

  <!-- Container -->
  <div class=\"container-fluid\">\t
    <div class=\"row\">
      <!-- Column Begins -->
      <div class=\"col-sm-12\">
        <div class=\"owl-carousel\" 
          data-animatein=\"\" 
          data-animateout=\"\" 
          data-items=\"1\" 
          data-loop=\"true\" 
          data-merge=\"true\" 
          data-nav=\"true\" 
          data-dots=\"false\" 
          data-stagepadding=\"\" 
          data-margin=\"15\"
          data-mobile=\"1\" 
          data-tablet=\"2\" 
          data-desktopsmall=\"3\"  
          data-desktop=\"4\" 
          data-autoplay=\"true\" 
          data-delay=\"3000\" 
          data-navigation=\"true\">
          
          ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
        </div><!-- carousel -->
      </div><!-- Column -->
    </div><!-- Row -->
  </div><!-- Container -->
";
        } elseif (((        // line 84
($context["id"] ?? null) == "team") && (($context["display_id"] ?? null) == "team"))) {
            // line 85
            echo "\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
            // line 91
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
  ";
        } elseif ((        // line 95
($context["id"] ?? null) == "_agenchy_section_content")) {
            // line 96
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_section_content_latest_post")) {
                // line 97
                echo "\t\t\t<ul class=\"thumbnail-widget\">
\t\t\t\t";
                // line 98
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</ul>
\t";
            } elseif ((            // line 100
($context["display_id"] ?? null) == "block_section_content_blog_timeline")) {
                // line 101
                echo "\t\t<div id=\"universh-timeline\" class=\"universh-container\">
\t\t\t";
                // line 102
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Timeline Container -->
\t";
            } elseif ((            // line 104
($context["display_id"] ?? null) == "block_footer_3_colum_3_latest_news")) {
                // line 105
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 106
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Thumbnail Widget -->
\t";
            } elseif ((            // line 108
($context["display_id"] ?? null) == "block_section_content_masonry_2_column")) {
                // line 109
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 115
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"2\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 120
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 125
($context["display_id"] ?? null) == "block_section_content_masonry_3_column")) {
                // line 126
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 132
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"0\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 137
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 142
($context["display_id"] ?? null) == "block_section_content_masonry_4_column")) {
                // line 143
                echo "\t\t<!-- Container -->
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters text-center\">
\t\t\t\t\t\t";
                // line 149
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"4\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 154
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 159
($context["display_id"] ?? null) == "block_section_content_masonry_gutter")) {
                // line 160
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 166
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"20\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 171
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 176
($context["display_id"] ?? null) == "block_section_content_grid_2_column")) {
                // line 177
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 183
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"2\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 188
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 193
($context["display_id"] ?? null) == "block_section_content_grid_3_column")) {
                // line 194
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 200
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"0\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 205
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 210
($context["display_id"] ?? null) == "block_section_content_grid_4_column")) {
                // line 211
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters text-center\">
\t\t\t\t\t\t";
                // line 217
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"4\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 222
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 227
($context["display_id"] ?? null) == "block_section_content_grid_gutter")) {
                // line 228
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 234
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"20\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 239
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 244
($context["display_id"] ?? null) == "block_section_content_team_list")) {
                // line 245
                echo "\t\t";
                $context["temp"] = 1;
                // line 246
                echo "\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 247
                    echo "\t    \t";
                    if (((($context["temp"] ?? null) % 2) == 0)) {
                        // line 248
                        echo "\t\t\t\t<!-- Team List Section -->
\t\t\t\t<div class=\"team-list-section typo-dark agenchy-list-team-item\">
\t\t\t\t\t";
                        // line 250
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t</div><!-- Team List Section --> 
\t\t\t";
                    } else {
                        // line 253
                        echo "\t\t\t\t<!-- Team List Section -->
\t\t\t\t<div class=\"bg-grey team-list-section typo-dark\">
\t\t\t\t\t";
                        // line 255
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t</div><!-- Team List Section -->
\t\t\t";
                    }
                    // line 258
                    echo "
\t\t\t";
                    // line 259
                    $context["temp"] = (($context["temp"] ?? null) + 1);
                    // line 260
                    echo "\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 261
                echo "\t";
            } elseif ((($context["display_id"] ?? null) == "block_section_content_team_v1_2_column")) {
                // line 262
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 269
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 276
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 280
($context["display_id"] ?? null) == "block_section_content_team_v1_3_column")) {
                // line 281
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 288
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 295
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 299
($context["display_id"] ?? null) == "block_section_content_team_v1_4_column")) {
                // line 300
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 307
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container small\">
\t\t\t\t\t";
                // line 314
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 318
($context["display_id"] ?? null) == "block_section_content_team_v1_3_column_style_2")) {
                // line 319
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 326
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 332
                $context["temp"] = 1;
                // line 333
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 334
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 335
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-left\">
\t\t\t\t\t        \t";
                        // line 337
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 339
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 340
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 342
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 343
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 344
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-center\">
\t\t\t\t        \t";
                        // line 345
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 347
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 348
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 350
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 351
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 352
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-right\">
\t\t\t\t        \t";
                        // line 353
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 356
                        $context["temp"] = 1;
                        // line 357
                        echo "\t\t\t\t    ";
                    }
                    // line 358
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 359
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 361
($context["display_id"] ?? null) == "block_section_content_team_v1_3_column_color")) {
                // line 362
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 369
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 375
                $context["temp"] = 1;
                // line 376
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 377
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 378
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-white\">
\t\t\t\t\t        \t";
                        // line 380
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 382
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 383
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 385
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 386
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 387
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-color\">
\t\t\t\t        \t";
                        // line 388
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 390
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 391
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 393
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 394
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 395
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-dark\">
\t\t\t\t        \t";
                        // line 396
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 399
                        $context["temp"] = 1;
                        // line 400
                        echo "\t\t\t\t    ";
                    }
                    // line 401
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 402
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 404
($context["display_id"] ?? null) == "block_section_content_team_v2_2_column")) {
                // line 405
                echo "\t\t<div class=\"container border-style\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 411
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 418
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 422
($context["display_id"] ?? null) == "block_section_content_team_v2_3_column")) {
                // line 423
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 430
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 437
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 441
($context["display_id"] ?? null) == "block_section_content_team_v2_4_column")) {
                // line 442
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 449
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container small\">
\t\t\t\t\t";
                // line 456
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 460
($context["display_id"] ?? null) == "block_section_content_team_v2_3_column_style_2")) {
                // line 461
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 468
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 474
                $context["temp"] = 1;
                // line 475
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 476
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 477
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-left\">
\t\t\t\t\t        \t";
                        // line 479
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 481
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 482
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 484
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 485
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 486
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-center\">
\t\t\t\t        \t";
                        // line 487
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 489
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 490
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 492
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 493
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 494
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-right\">
\t\t\t\t        \t";
                        // line 495
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 498
                        $context["temp"] = 1;
                        // line 499
                        echo "\t\t\t\t    ";
                    }
                    // line 500
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 501
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 503
($context["display_id"] ?? null) == "block_section_content_team_v2_3_column_color")) {
                // line 504
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 511
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 517
                $context["temp"] = 1;
                // line 518
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 519
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 520
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-bg-white\">
\t\t\t\t\t        \t";
                        // line 522
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 524
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 525
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 527
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 528
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 529
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 color-border team-v2-3-column-bg-color\">
\t\t\t\t        \t";
                        // line 530
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 532
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 533
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 535
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 536
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 537
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 dark-border team-v2-3-column-bg-dark\">
\t\t\t\t        \t";
                        // line 538
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 541
                        $context["temp"] = 1;
                        // line 542
                        echo "\t\t\t\t    ";
                    }
                    // line 543
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 544
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 546
($context["display_id"] ?? null) == "block_section_content_testimonial_2_column")) {
                // line 547
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 553
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t";
                // line 558
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 561
($context["display_id"] ?? null) == "block_section_content_testimonial_3_column")) {
                // line 562
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 568
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t";
                // line 573
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 576
($context["display_id"] ?? null) == "block_section_content_testimonial_4_column")) {
                // line 577
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row quote-sm\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 583
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t";
                // line 588
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 591
($context["display_id"] ?? null) == "block_section_content_testimonial_color_column")) {
                // line 592
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 598
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 603
                $context["temp"] = 1;
                // line 604
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 605
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 606
                        echo "\t\t\t    \t\t<div class=\"row quote-sm\">
\t\t\t\t\t    \t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t        \t";
                        // line 608
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 610
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 611
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 613
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 614
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 615
                        echo "\t\t\t\t    \t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t        \t";
                        // line 616
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 618
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 619
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 621
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 622
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 623
                        echo "\t\t\t\t    \t<div class=\"col-sm-6 col-md-3 agenchy-color-column-color\">
\t\t\t\t        \t";
                        // line 624
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 626
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 627
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 629
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 630
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 631
                        echo "\t\t\t\t    \t<div class=\"col-sm-6 col-md-3 agenchy-color-column-dark\">
\t\t\t\t        \t";
                        // line 632
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 635
                        $context["temp"] = 1;
                        // line 636
                        echo "\t\t\t\t    ";
                    }
                    // line 637
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 638
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            }
            // line 641
            echo "
";
        } elseif ((        // line 642
($context["id"] ?? null) == "_agenchy_sidebar_widgets")) {
            // line 643
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_on_sidebar_popular_cases")) {
                // line 644
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 645
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Thumbnail Widget -->
\t";
            } elseif ((            // line 647
($context["display_id"] ?? null) == "block_on_sidebar_title_services")) {
                // line 648
                echo "\t\t<ul class=\"go-widget with-bg\">
\t\t\t";
                // line 649
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 651
($context["display_id"] ?? null) == "block_on_sidebar_browse_by_team")) {
                // line 652
                echo "\t\t<ul class=\"thumbnail-widget thumb-circle\">
\t\t\t";
                // line 653
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 655
($context["display_id"] ?? null) == "block_on_sidebar_latest_reviews")) {
                // line 656
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
                // line 673
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- gallery Image carousel -->
\t\t</div>
\t";
            }
        } elseif ((        // line 677
($context["id"] ?? null) == "_agenchy_taxonomy_term")) {
            // line 678
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_on_sidebar_categories")) {
                // line 679
                echo "\t\t<ul class=\"go-widget\">
\t\t\t";
                // line 680
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 682
($context["display_id"] ?? null) == "block_on_sidebar_blog_tag_cloud")) {
                // line 683
                echo "\t\t<ul class=\"tag-widget\">
\t\t\t";
                // line 684
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 686
($context["display_id"] ?? null) == "block_on_sidebar_categories_cases")) {
                // line 687
                echo "\t\t<div class=\"accordion-widget\">
\t\t\t<div class=\"panel-group accordion agenchy-categories-cases\">
\t\t\t\t";
                // line 689
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div>
\t\t</div>
\t";
            } elseif ((            // line 692
($context["display_id"] ?? null) == "block_on_sidebar_cases_tag_cloud")) {
                // line 693
                echo "\t\t<ul class=\"tag-widget\">
\t\t\t";
                // line 694
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 696
($context["display_id"] ?? null) == "block_gallery_categories_tab_1")) {
                // line 697
                echo "\t\t<ul class=\"nav nav-pills\">
\t\t\t";
                // line 698
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 699
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            }
        } elseif ((        // line 702
($context["id"] ?? null) == "_agenchy_section_content_2")) {
            // line 703
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_section_content_consultants")) {
                // line 704
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 705
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 707
($context["display_id"] ?? null) == "block_footer_latest_news")) {
                // line 708
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 709
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Thumbnail Widget -->
\t";
            } elseif ((            // line 711
($context["display_id"] ?? null) == "block_team_bottom_content_reviews")) {
                // line 712
                echo "\t\t<!-- Widget -->
\t\t<div class=\"widget\">
\t\t\t";
                // line 714
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
                // line 732
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- gallery Image carousel -->
\t\t\t</div><!-- Quote Small -->
\t\t</div><!-- Widget -->
\t";
            } elseif ((            // line 736
($context["display_id"] ?? null) == "block_section_content_reviews")) {
                // line 737
                echo "\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t<div class=\"owl-carousel dots-square\" data-animatein=\"zoomIn\" data-animateout=\"slideOutDown\" data-items=\"1\" data-margin=\"30\" data-loop=\"true\" data-merge=\"true\" data-nav=\"false\" data-dots=\"false\" data-stagepadding=\"\" data-mobile=\"1\" data-tablet=\"1\" data-desktopsmall=\"1\"  data-desktop=\"2\" data-autoplay=\"true\" data-delay=\"3000\" data-navigation=\"true\">\t
\t\t\t";
                // line 739
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- gallery Image carousel -->
\t";
            } elseif ((            // line 741
($context["display_id"] ?? null) == "block_section_content_achievements")) {
                // line 742
                echo "\t\t<div class=\"row\">
\t\t\t";
                // line 743
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Content row -->
\t";
            } elseif ((            // line 745
($context["display_id"] ?? null) == "block_section_content_our_approach")) {
                // line 746
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 752
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div><!-- Title -->
\t\t\t</div><!-- Row -->
\t\t\t";
                // line 757
                $context["temp"] = 1;
                // line 758
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 759
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 760
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 761
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 762
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 763
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 765
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 766
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 767
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 768
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 769
                            echo "\t\t        \t</div>
\t\t        \t";
                        }
                        // line 771
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 772
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 773
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t";
                        // line 775
                        $context["temp"] = 1;
                        // line 776
                        echo "\t\t\t    ";
                    }
                    // line 777
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 778
                echo "\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 779
($context["display_id"] ?? null) == "block_section_content_reviews_grid")) {
                // line 780
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
                // line 782
                $context["temp"] = 1;
                // line 783
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 784
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 785
                        echo "\t\t\t\t    \t<div class=\"col-sm-4\">
\t\t\t\t        \t";
                        // line 786
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t";
                        // line 787
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 788
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 790
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 791
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 792
                        echo "\t\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t    \t";
                        // line 793
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 794
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 796
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 797
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 798
                        echo "\t\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 800
                        $context["temp"] = 1;
                        // line 801
                        echo "\t\t\t\t    ";
                    }
                    // line 802
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 803
                echo "\t\t\t</div>
\t\t</div>
\t";
            } elseif ((            // line 805
($context["display_id"] ?? null) == "block_section_content_company_logo")) {
                // line 806
                echo "\t\t<!-- Section -->
\t\t<div class=\"typo-dark\">
\t\t\t<!-- Container -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<!-- Details Listing Wrap -->
\t\t\t\t\t\t<ul class=\"listing-wrap\">
\t\t\t\t\t\t\t";
                // line 814
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</ul><!-- Details Listing Wrap -->
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->
\t\t</div><!-- Team List Section -->
\t";
            } elseif ((            // line 820
($context["display_id"] ?? null) == "block_section_content_our_clients")) {
                // line 821
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container title-sm text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 827
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div>
\t\t\t";
                // line 832
                $context["temp"] = 1;
                // line 833
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 834
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 835
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 836
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 837
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 838
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 840
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 841
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 842
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 843
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 844
                            echo "\t\t        \t</div>
\t\t        \t";
                        }
                        // line 846
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 847
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 848
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 849
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 850
                            echo "\t\t        \t</div>
\t\t        \t";
                        }
                        // line 852
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 853
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 854
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t";
                        // line 856
                        $context["temp"] = 1;
                        // line 857
                        echo "\t\t\t    ";
                    }
                    // line 858
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 859
                echo "\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 860
($context["display_id"] ?? null) == "block_section_content_what_we_do_services")) {
                // line 861
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 869
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t\t<!-- Column -->
\t\t\t\t";
                // line 874
                if (($context["footer"] ?? null)) {
                    // line 875
                    echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<p class=\"text-right text-left-767 margin-bottom-767-30\">";
                    // line 876
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                    echo "</p>
\t\t\t\t</div><!-- Column -->
\t\t\t\t";
                }
                // line 879
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
                // line 903
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 908
($context["display_id"] ?? null) == "block_section_content_clients_image")) {
                // line 909
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
                // line 930
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Boxed Block -->\t
\t\t\t</div><!-- Column -->
\t\t</div><!-- Row -->
\t";
            } elseif ((            // line 935
($context["display_id"] ?? null) == "block_section_content_what_our_clients_say")) {
                // line 936
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 943
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
                // line 966
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t\t";
                // line 970
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 972
($context["display_id"] ?? null) == "block_section_content_clients_image_dark")) {
                // line 973
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
                // line 994
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Boxed Block -->\t
\t\t\t</div><!-- Column -->
\t\t</div><!-- Row -->
\t";
            } elseif ((            // line 999
($context["display_id"] ?? null) == "block_section_content_news_updates")) {
                // line 1000
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container sm text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 1008
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
                // line 1018
                $context["temp"] = 1;
                // line 1019
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1020
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1021
                        echo "\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t    \t\t<ul class=\"row\">
\t\t\t\t\t        \t";
                        // line 1023
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t\t        \t";
                        // line 1024
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1025
                            echo "\t\t\t\t        \t</ul>\t
\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 1028
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1029
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1030
                        echo "\t\t\t\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t\t\t    \t";
                        // line 1031
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1032
                            echo "\t\t\t\t\t    \t</ul>
\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 1035
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1036
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1037
                        echo "\t\t\t\t    \t\t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t    \t\t</ul>
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 1040
                        $context["temp"] = 1;
                        // line 1041
                        echo "\t\t\t\t    ";
                    }
                    // line 1042
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1043
                echo "\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1045
($context["display_id"] ?? null) == "block_section_content_what_our_clients_say_dark")) {
                // line 1046
                echo "\t\t<div class=\"container parent-has-overlay\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container\">
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
                // line 1077
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t\t";
                // line 1081
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1083
($context["display_id"] ?? null) == "block_section_content_what_we_do_services_style_2")) {
                // line 1084
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t";
                // line 1091
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t\t";
                // line 1093
                if (($context["footer"] ?? null)) {
                    // line 1094
                    echo "\t\t\t\t\t<p>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                    echo "</p>
\t\t\t\t\t";
                }
                // line 1096
                echo "\t\t\t\t</div><!-- Column -->
\t\t\t\t";
                // line 1097
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1100
($context["display_id"] ?? null) == "block_section_content_what_our_clients_say_default")) {
                // line 1101
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 1108
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
                // line 1132
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1137
($context["display_id"] ?? null) == "block_section_content_news_updates_slide")) {
                // line 1138
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 1146
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
                // line 1176
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1181
($context["display_id"] ?? null) == "block_switcher_homepage")) {
                // line 1182
                echo "\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t<ul class=\"demos\">
\t\t\t";
                // line 1184
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Options Config -->
\t";
            }
        } elseif ((        // line 1187
($context["id"] ?? null) == "blog")) {
            // line 1188
            $context["blog_layout"] = "list";
            // line 1189
            echo "\t";
            if (((($context["blog_layout"] ?? null) == "grid") || (($context["blog_layout"] ?? null) == "3_column"))) {
                // line 1190
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1191
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1192
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1193
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1194
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1195
                $context["temp"] = 1;
                // line 1196
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1197
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1198
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1199
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1200
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1201
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t";
                        }
                        // line 1204
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1205
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1206
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1207
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1208
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t";
                        }
                        // line 1211
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1212
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1213
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1216
                        $context["temp"] = 1;
                        // line 1217
                        echo "\t\t\t    ";
                    }
                    // line 1218
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1219
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1220
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1221
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1224
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 1228
($context["blog_layout"] ?? null) == "list")) {
                // line 1230
                $context["classes"] = array(0 => ((                // line 1231
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
                // line 1234
                echo "<div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                echo ">
  ";
                // line 1235
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
  ";
                // line 1236
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
  ";
                // line 1237
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "

  ";
                // line 1239
                if (($context["header"] ?? null)) {
                    // line 1240
                    echo "    <header>
      ";
                    // line 1241
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                    echo "
    </header>
  ";
                }
                // line 1244
                echo "
  ";
                // line 1245
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
                echo "
  ";
                // line 1246
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
                echo "

  ";
                // line 1248
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
  ";
                // line 1249
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
  ";
                // line 1250
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "

  ";
                // line 1252
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
  ";
                // line 1253
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
                echo "

  ";
                // line 1255
                if (($context["footer"] ?? null)) {
                    // line 1256
                    echo "    <footer>
      ";
                    // line 1257
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                    echo "
    </footer>
  ";
                }
                // line 1260
                echo "
  ";
                // line 1261
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
                echo "
</div>

\t";
            } elseif ((            // line 1264
($context["blog_layout"] ?? null) == "2_column")) {
                // line 1265
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1266
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1267
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1268
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1269
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1270
                $context["temp"] = 1;
                // line 1271
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1272
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1273
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1274
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1275
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1276
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t";
                        }
                        // line 1279
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1280
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1281
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1284
                        $context["temp"] = 1;
                        // line 1285
                        echo "\t\t\t    ";
                    }
                    // line 1286
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1287
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1288
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1289
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1292
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 1296
($context["blog_layout"] ?? null) == "4_column")) {
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
                        echo "\t\t\t    \t<div class=\"row\">
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
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1320
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1321
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1322
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t";
                        }
                        // line 1325
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1326
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1327
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1330
                        $context["temp"] = 1;
                        // line 1331
                        echo "\t\t\t    ";
                    }
                    // line 1332
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1333
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1334
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1335
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1338
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
    ";
            } else {
                // line 1343
                echo "    \t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1344
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1345
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1346
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1347
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1348
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t";
            }
        } elseif ((        // line 1350
($context["id"] ?? null) == "cases")) {
            // line 1351
            echo "\t";
            if (((($context["cases_layout"] ?? null) == "grid") || (($context["cases_layout"] ?? null) == "3_column"))) {
                // line 1352
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1353
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1354
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1355
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1356
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1357
                $context["temp"] = 1;
                // line 1358
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1359
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1360
                        echo "\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t";
                        // line 1361
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1362
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1363
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t";
                        }
                        // line 1366
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1367
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1368
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1369
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1370
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t";
                        }
                        // line 1373
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1374
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1375
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1378
                        $context["temp"] = 1;
                        // line 1379
                        echo "\t\t\t    ";
                    }
                    // line 1380
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1381
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1382
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1383
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1384
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1386
($context["cases_layout"] ?? null) == "list")) {
                // line 1387
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1388
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1389
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1390
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1391
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1392
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1393
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1394
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1395
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1396
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1398
($context["cases_layout"] ?? null) == "2_column")) {
                // line 1399
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1400
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1401
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1402
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1403
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1404
                $context["temp"] = 1;
                // line 1405
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1406
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1407
                        echo "\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t";
                        // line 1408
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1409
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1410
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t";
                        }
                        // line 1413
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1414
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1415
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t";
                        // line 1418
                        $context["temp"] = 1;
                        // line 1419
                        echo "\t\t\t    ";
                    }
                    // line 1420
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1421
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1422
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1423
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1424
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1426
($context["cases_layout"] ?? null) == "4_column")) {
                // line 1427
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1428
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1429
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1430
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1431
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1432
                $context["temp"] = 1;
                // line 1433
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1434
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1435
                        echo "\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t";
                        // line 1436
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1437
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1438
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-991\">
\t\t\t        \t";
                        }
                        // line 1441
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1442
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1443
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1444
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1445
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1448
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1449
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1450
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1451
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1452
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1455
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1456
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1457
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-991\">
\t\t\t    \t";
                        // line 1460
                        $context["temp"] = 1;
                        // line 1461
                        echo "\t\t\t    ";
                    }
                    // line 1462
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1463
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1464
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1465
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1466
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
    ";
            } else {
                // line 1469
                echo "    \t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1470
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1471
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1472
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1473
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1474
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t";
            }
        } elseif ((        // line 1476
($context["id"] ?? null) == "services")) {
            // line 1477
            echo "\t";
            if (((($context["services_layout"] ?? null) == "grid") || (($context["services_layout"] ?? null) == "3_column"))) {
                // line 1478
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1479
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1480
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1481
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1482
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1483
                $context["temp"] = 1;
                // line 1484
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1485
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1486
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1487
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1488
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1489
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t";
                        }
                        // line 1492
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1493
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1494
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1495
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1496
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-767\">
\t\t        \t";
                        }
                        // line 1499
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1500
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1501
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t";
                        // line 1504
                        $context["temp"] = 1;
                        // line 1505
                        echo "\t\t\t    ";
                    }
                    // line 1506
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1507
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1508
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1509
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1510
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1512
($context["services_layout"] ?? null) == "list")) {
                // line 1513
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1514
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1515
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1516
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1517
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1518
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1519
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1520
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1521
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1522
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1524
($context["services_layout"] ?? null) == "2_column")) {
                // line 1525
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1526
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1527
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1528
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1529
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1530
                $context["temp"] = 1;
                // line 1531
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1532
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1533
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1534
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1535
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1536
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t";
                        }
                        // line 1539
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1540
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1541
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t";
                        // line 1544
                        $context["temp"] = 1;
                        // line 1545
                        echo "\t\t\t    ";
                    }
                    // line 1546
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1547
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1548
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1549
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1550
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1552
($context["services_layout"] ?? null) == "4_column")) {
                // line 1553
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1554
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1555
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1556
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1557
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1558
                $context["temp"] = 1;
                // line 1559
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1560
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1561
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1562
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1563
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1564
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-991\">
\t\t\t        \t";
                        }
                        // line 1567
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1568
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1569
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1570
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1571
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1574
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1575
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1576
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1577
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1578
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1581
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1582
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1583
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-991\">
\t\t\t    \t";
                        // line 1586
                        $context["temp"] = 1;
                        // line 1587
                        echo "\t\t\t    ";
                    }
                    // line 1588
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1589
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1590
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1591
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1592
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
    ";
            } else {
                // line 1595
                echo "    \t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1596
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1597
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1598
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1599
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1600
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t";
            }
        } elseif ((        // line 1602
($context["id"] ?? null) == "shop")) {
            // line 1603
            echo "\t";
            if ((($context["shop_layout"] ?? null) == "2_column")) {
                // line 1604
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1605
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1606
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1607
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1608
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1609
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1610
                $context["temp"] = 1;
                // line 1611
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1612
                    echo "\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1613
                        echo "\t\t    \t<div class=\"row\">
\t\t        \t";
                        // line 1614
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t       \t";
                        // line 1615
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1616
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1618
                        echo "\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1619
                        echo "\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1620
                        echo "\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t</div>
\t\t    \t";
                        // line 1622
                        $context["temp"] = 1;
                        // line 1623
                        echo "\t\t    ";
                    }
                    // line 1624
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1625
                echo "\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1627
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 1631
($context["shop_layout"] ?? null) == "3_column")) {
                // line 1632
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1633
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1634
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1635
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1636
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1637
                $context["temp"] = 1;
                // line 1638
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1639
                    echo "\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1640
                        echo "\t\t    \t<div class=\"row\">
\t\t        \t";
                        // line 1641
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t        ";
                        // line 1642
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1643
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1645
                        echo "\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1646
                        echo "\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1647
                        echo "\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t";
                        // line 1648
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1649
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1651
                        echo "\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1652
                        echo "\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1653
                        echo "\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t</div>
\t\t    \t";
                        // line 1655
                        $context["temp"] = 1;
                        // line 1656
                        echo "\t\t    ";
                    }
                    // line 1657
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1658
                echo "\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1660
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t    </div>
\t";
            } else {
                // line 1665
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1666
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1667
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1668
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1669
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1670
                $context["temp"] = 1;
                // line 1671
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1672
                    echo "\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1673
                        echo "\t\t    \t<div class=\"row\">
\t\t        \t";
                        // line 1674
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t        ";
                        // line 1675
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1676
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1678
                        echo "\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1679
                        echo "\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1680
                        echo "\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t";
                        // line 1681
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1682
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1684
                        echo "\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1685
                        echo "\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1686
                        echo "\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t";
                        // line 1687
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1688
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1690
                        echo "\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1691
                        echo "\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1692
                        echo "\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t</div>
\t\t    \t";
                        // line 1694
                        $context["temp"] = 1;
                        // line 1695
                        echo "\t\t    ";
                    }
                    // line 1696
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1697
                echo "\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1699
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t    </div>
\t";
            }
        } else {
            // line 1705
            echo "\t";
            // line 1706
            $context["classes"] = array(0 => ((            // line 1707
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
            // line 1710
            echo "<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
  ";
            // line 1711
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
  ";
            // line 1712
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
  ";
            // line 1713
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "

  ";
            // line 1715
            if (($context["header"] ?? null)) {
                // line 1716
                echo "    <header>
      ";
                // line 1717
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
    </header>
  ";
            }
            // line 1720
            echo "
  ";
            // line 1721
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
  ";
            // line 1722
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "

  ";
            // line 1724
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
  ";
            // line 1725
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            echo "
  ";
            // line 1726
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "

  ";
            // line 1728
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
  ";
            // line 1729
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
            echo "

  ";
            // line 1731
            if (($context["footer"] ?? null)) {
                // line 1732
                echo "    <footer>
      ";
                // line 1733
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
    </footer>
  ";
            }
            // line 1736
            echo "
  ";
            // line 1737
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
            echo "
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/system/view/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3805 => 1737,  3802 => 1736,  3796 => 1733,  3793 => 1732,  3791 => 1731,  3786 => 1729,  3782 => 1728,  3777 => 1726,  3773 => 1725,  3769 => 1724,  3764 => 1722,  3760 => 1721,  3757 => 1720,  3751 => 1717,  3748 => 1716,  3746 => 1715,  3741 => 1713,  3737 => 1712,  3733 => 1711,  3728 => 1710,  3726 => 1707,  3725 => 1706,  3723 => 1705,  3714 => 1699,  3710 => 1697,  3704 => 1696,  3701 => 1695,  3699 => 1694,  3693 => 1692,  3690 => 1691,  3687 => 1690,  3683 => 1688,  3681 => 1687,  3676 => 1686,  3673 => 1685,  3670 => 1684,  3666 => 1682,  3664 => 1681,  3659 => 1680,  3656 => 1679,  3653 => 1678,  3649 => 1676,  3647 => 1675,  3643 => 1674,  3640 => 1673,  3637 => 1672,  3632 => 1671,  3630 => 1670,  3626 => 1669,  3622 => 1668,  3618 => 1667,  3614 => 1666,  3609 => 1665,  3601 => 1660,  3597 => 1658,  3591 => 1657,  3588 => 1656,  3586 => 1655,  3580 => 1653,  3577 => 1652,  3574 => 1651,  3570 => 1649,  3568 => 1648,  3563 => 1647,  3560 => 1646,  3557 => 1645,  3553 => 1643,  3551 => 1642,  3547 => 1641,  3544 => 1640,  3541 => 1639,  3536 => 1638,  3534 => 1637,  3530 => 1636,  3526 => 1635,  3522 => 1634,  3518 => 1633,  3513 => 1632,  3511 => 1631,  3504 => 1627,  3500 => 1625,  3494 => 1624,  3491 => 1623,  3489 => 1622,  3483 => 1620,  3480 => 1619,  3477 => 1618,  3473 => 1616,  3471 => 1615,  3467 => 1614,  3464 => 1613,  3461 => 1612,  3456 => 1611,  3454 => 1610,  3450 => 1609,  3446 => 1608,  3442 => 1607,  3438 => 1606,  3434 => 1605,  3429 => 1604,  3426 => 1603,  3424 => 1602,  3419 => 1600,  3415 => 1599,  3411 => 1598,  3407 => 1597,  3403 => 1596,  3398 => 1595,  3392 => 1592,  3388 => 1591,  3384 => 1590,  3379 => 1589,  3373 => 1588,  3370 => 1587,  3368 => 1586,  3361 => 1583,  3358 => 1582,  3355 => 1581,  3350 => 1578,  3348 => 1577,  3343 => 1576,  3340 => 1575,  3337 => 1574,  3332 => 1571,  3330 => 1570,  3325 => 1569,  3322 => 1568,  3319 => 1567,  3314 => 1564,  3312 => 1563,  3308 => 1562,  3305 => 1561,  3302 => 1560,  3297 => 1559,  3295 => 1558,  3291 => 1557,  3287 => 1556,  3283 => 1555,  3279 => 1554,  3274 => 1553,  3272 => 1552,  3267 => 1550,  3263 => 1549,  3259 => 1548,  3254 => 1547,  3248 => 1546,  3245 => 1545,  3243 => 1544,  3236 => 1541,  3233 => 1540,  3230 => 1539,  3225 => 1536,  3223 => 1535,  3219 => 1534,  3216 => 1533,  3213 => 1532,  3208 => 1531,  3206 => 1530,  3202 => 1529,  3198 => 1528,  3194 => 1527,  3190 => 1526,  3185 => 1525,  3183 => 1524,  3178 => 1522,  3174 => 1521,  3170 => 1520,  3166 => 1519,  3162 => 1518,  3158 => 1517,  3154 => 1516,  3150 => 1515,  3146 => 1514,  3141 => 1513,  3139 => 1512,  3134 => 1510,  3130 => 1509,  3126 => 1508,  3121 => 1507,  3115 => 1506,  3112 => 1505,  3110 => 1504,  3103 => 1501,  3100 => 1500,  3097 => 1499,  3092 => 1496,  3090 => 1495,  3085 => 1494,  3082 => 1493,  3079 => 1492,  3074 => 1489,  3072 => 1488,  3068 => 1487,  3065 => 1486,  3062 => 1485,  3057 => 1484,  3055 => 1483,  3051 => 1482,  3047 => 1481,  3043 => 1480,  3039 => 1479,  3034 => 1478,  3031 => 1477,  3029 => 1476,  3024 => 1474,  3020 => 1473,  3016 => 1472,  3012 => 1471,  3008 => 1470,  3003 => 1469,  2997 => 1466,  2993 => 1465,  2989 => 1464,  2984 => 1463,  2978 => 1462,  2975 => 1461,  2973 => 1460,  2966 => 1457,  2963 => 1456,  2960 => 1455,  2955 => 1452,  2953 => 1451,  2948 => 1450,  2945 => 1449,  2942 => 1448,  2937 => 1445,  2935 => 1444,  2930 => 1443,  2927 => 1442,  2924 => 1441,  2919 => 1438,  2917 => 1437,  2913 => 1436,  2910 => 1435,  2907 => 1434,  2902 => 1433,  2900 => 1432,  2896 => 1431,  2892 => 1430,  2888 => 1429,  2884 => 1428,  2879 => 1427,  2877 => 1426,  2872 => 1424,  2868 => 1423,  2864 => 1422,  2859 => 1421,  2853 => 1420,  2850 => 1419,  2848 => 1418,  2841 => 1415,  2838 => 1414,  2835 => 1413,  2830 => 1410,  2828 => 1409,  2824 => 1408,  2821 => 1407,  2818 => 1406,  2813 => 1405,  2811 => 1404,  2807 => 1403,  2803 => 1402,  2799 => 1401,  2795 => 1400,  2790 => 1399,  2788 => 1398,  2783 => 1396,  2779 => 1395,  2775 => 1394,  2771 => 1393,  2767 => 1392,  2763 => 1391,  2759 => 1390,  2755 => 1389,  2751 => 1388,  2746 => 1387,  2744 => 1386,  2739 => 1384,  2735 => 1383,  2731 => 1382,  2726 => 1381,  2720 => 1380,  2717 => 1379,  2715 => 1378,  2708 => 1375,  2705 => 1374,  2702 => 1373,  2697 => 1370,  2695 => 1369,  2690 => 1368,  2687 => 1367,  2684 => 1366,  2679 => 1363,  2677 => 1362,  2673 => 1361,  2670 => 1360,  2667 => 1359,  2662 => 1358,  2660 => 1357,  2656 => 1356,  2652 => 1355,  2648 => 1354,  2644 => 1353,  2639 => 1352,  2636 => 1351,  2634 => 1350,  2629 => 1348,  2625 => 1347,  2621 => 1346,  2617 => 1345,  2613 => 1344,  2608 => 1343,  2600 => 1338,  2594 => 1335,  2590 => 1334,  2585 => 1333,  2579 => 1332,  2576 => 1331,  2574 => 1330,  2567 => 1327,  2564 => 1326,  2561 => 1325,  2556 => 1322,  2554 => 1321,  2549 => 1320,  2546 => 1319,  2543 => 1318,  2538 => 1315,  2536 => 1314,  2531 => 1313,  2528 => 1312,  2525 => 1311,  2520 => 1308,  2518 => 1307,  2514 => 1306,  2511 => 1305,  2508 => 1304,  2503 => 1303,  2501 => 1302,  2497 => 1301,  2493 => 1300,  2489 => 1299,  2485 => 1298,  2480 => 1297,  2478 => 1296,  2471 => 1292,  2465 => 1289,  2461 => 1288,  2456 => 1287,  2450 => 1286,  2447 => 1285,  2445 => 1284,  2438 => 1281,  2435 => 1280,  2432 => 1279,  2427 => 1276,  2425 => 1275,  2421 => 1274,  2418 => 1273,  2415 => 1272,  2410 => 1271,  2408 => 1270,  2404 => 1269,  2400 => 1268,  2396 => 1267,  2392 => 1266,  2387 => 1265,  2385 => 1264,  2379 => 1261,  2376 => 1260,  2370 => 1257,  2367 => 1256,  2365 => 1255,  2360 => 1253,  2356 => 1252,  2351 => 1250,  2347 => 1249,  2343 => 1248,  2338 => 1246,  2334 => 1245,  2331 => 1244,  2325 => 1241,  2322 => 1240,  2320 => 1239,  2315 => 1237,  2311 => 1236,  2307 => 1235,  2302 => 1234,  2300 => 1231,  2299 => 1230,  2297 => 1228,  2290 => 1224,  2284 => 1221,  2280 => 1220,  2275 => 1219,  2269 => 1218,  2266 => 1217,  2264 => 1216,  2257 => 1213,  2254 => 1212,  2251 => 1211,  2246 => 1208,  2244 => 1207,  2239 => 1206,  2236 => 1205,  2233 => 1204,  2228 => 1201,  2226 => 1200,  2222 => 1199,  2219 => 1198,  2216 => 1197,  2211 => 1196,  2209 => 1195,  2205 => 1194,  2201 => 1193,  2197 => 1192,  2193 => 1191,  2188 => 1190,  2185 => 1189,  2183 => 1188,  2181 => 1187,  2175 => 1184,  2169 => 1182,  2167 => 1181,  2159 => 1176,  2126 => 1146,  2116 => 1138,  2114 => 1137,  2106 => 1132,  2079 => 1108,  2070 => 1101,  2068 => 1100,  2062 => 1097,  2059 => 1096,  2053 => 1094,  2051 => 1093,  2046 => 1091,  2037 => 1084,  2035 => 1083,  2030 => 1081,  2023 => 1077,  1996 => 1053,  1987 => 1046,  1985 => 1045,  1981 => 1043,  1975 => 1042,  1972 => 1041,  1970 => 1040,  1963 => 1037,  1960 => 1036,  1957 => 1035,  1952 => 1032,  1950 => 1031,  1945 => 1030,  1942 => 1029,  1939 => 1028,  1934 => 1025,  1932 => 1024,  1928 => 1023,  1924 => 1021,  1921 => 1020,  1916 => 1019,  1914 => 1018,  1901 => 1008,  1891 => 1000,  1889 => 999,  1881 => 994,  1858 => 973,  1856 => 972,  1851 => 970,  1844 => 966,  1818 => 943,  1809 => 936,  1807 => 935,  1799 => 930,  1776 => 909,  1774 => 908,  1766 => 903,  1740 => 879,  1734 => 876,  1731 => 875,  1729 => 874,  1721 => 869,  1711 => 861,  1709 => 860,  1706 => 859,  1700 => 858,  1697 => 857,  1695 => 856,  1689 => 854,  1686 => 853,  1683 => 852,  1679 => 850,  1677 => 849,  1672 => 848,  1669 => 847,  1666 => 846,  1662 => 844,  1660 => 843,  1655 => 842,  1652 => 841,  1649 => 840,  1645 => 838,  1643 => 837,  1639 => 836,  1636 => 835,  1633 => 834,  1628 => 833,  1626 => 832,  1618 => 827,  1610 => 821,  1608 => 820,  1599 => 814,  1589 => 806,  1587 => 805,  1583 => 803,  1577 => 802,  1574 => 801,  1572 => 800,  1566 => 798,  1563 => 797,  1560 => 796,  1556 => 794,  1554 => 793,  1549 => 792,  1546 => 791,  1543 => 790,  1539 => 788,  1537 => 787,  1533 => 786,  1530 => 785,  1527 => 784,  1522 => 783,  1520 => 782,  1516 => 780,  1514 => 779,  1511 => 778,  1505 => 777,  1502 => 776,  1500 => 775,  1494 => 773,  1491 => 772,  1488 => 771,  1484 => 769,  1482 => 768,  1477 => 767,  1474 => 766,  1471 => 765,  1467 => 763,  1465 => 762,  1461 => 761,  1458 => 760,  1455 => 759,  1450 => 758,  1448 => 757,  1440 => 752,  1432 => 746,  1430 => 745,  1425 => 743,  1422 => 742,  1420 => 741,  1415 => 739,  1409 => 737,  1407 => 736,  1400 => 732,  1379 => 714,  1375 => 712,  1373 => 711,  1368 => 709,  1365 => 708,  1363 => 707,  1358 => 705,  1355 => 704,  1352 => 703,  1350 => 702,  1344 => 699,  1340 => 698,  1337 => 697,  1335 => 696,  1330 => 694,  1327 => 693,  1325 => 692,  1319 => 689,  1315 => 687,  1313 => 686,  1308 => 684,  1305 => 683,  1303 => 682,  1298 => 680,  1295 => 679,  1292 => 678,  1290 => 677,  1283 => 673,  1264 => 656,  1262 => 655,  1257 => 653,  1254 => 652,  1252 => 651,  1247 => 649,  1244 => 648,  1242 => 647,  1237 => 645,  1234 => 644,  1231 => 643,  1229 => 642,  1226 => 641,  1221 => 638,  1215 => 637,  1212 => 636,  1210 => 635,  1204 => 632,  1201 => 631,  1198 => 630,  1195 => 629,  1191 => 627,  1189 => 626,  1184 => 624,  1181 => 623,  1178 => 622,  1175 => 621,  1171 => 619,  1169 => 618,  1164 => 616,  1161 => 615,  1158 => 614,  1155 => 613,  1151 => 611,  1149 => 610,  1144 => 608,  1140 => 606,  1137 => 605,  1132 => 604,  1130 => 603,  1122 => 598,  1114 => 592,  1112 => 591,  1106 => 588,  1098 => 583,  1090 => 577,  1088 => 576,  1082 => 573,  1074 => 568,  1066 => 562,  1064 => 561,  1058 => 558,  1050 => 553,  1042 => 547,  1040 => 546,  1036 => 544,  1030 => 543,  1027 => 542,  1025 => 541,  1019 => 538,  1016 => 537,  1013 => 536,  1010 => 535,  1006 => 533,  1004 => 532,  999 => 530,  996 => 529,  993 => 528,  990 => 527,  986 => 525,  984 => 524,  979 => 522,  975 => 520,  972 => 519,  967 => 518,  965 => 517,  956 => 511,  947 => 504,  945 => 503,  941 => 501,  935 => 500,  932 => 499,  930 => 498,  924 => 495,  921 => 494,  918 => 493,  915 => 492,  911 => 490,  909 => 489,  904 => 487,  901 => 486,  898 => 485,  895 => 484,  891 => 482,  889 => 481,  884 => 479,  880 => 477,  877 => 476,  872 => 475,  870 => 474,  861 => 468,  852 => 461,  850 => 460,  843 => 456,  833 => 449,  824 => 442,  822 => 441,  815 => 437,  805 => 430,  796 => 423,  794 => 422,  787 => 418,  777 => 411,  769 => 405,  767 => 404,  763 => 402,  757 => 401,  754 => 400,  752 => 399,  746 => 396,  743 => 395,  740 => 394,  737 => 393,  733 => 391,  731 => 390,  726 => 388,  723 => 387,  720 => 386,  717 => 385,  713 => 383,  711 => 382,  706 => 380,  702 => 378,  699 => 377,  694 => 376,  692 => 375,  683 => 369,  674 => 362,  672 => 361,  668 => 359,  662 => 358,  659 => 357,  657 => 356,  651 => 353,  648 => 352,  645 => 351,  642 => 350,  638 => 348,  636 => 347,  631 => 345,  628 => 344,  625 => 343,  622 => 342,  618 => 340,  616 => 339,  611 => 337,  607 => 335,  604 => 334,  599 => 333,  597 => 332,  588 => 326,  579 => 319,  577 => 318,  570 => 314,  560 => 307,  551 => 300,  549 => 299,  542 => 295,  532 => 288,  523 => 281,  521 => 280,  514 => 276,  504 => 269,  495 => 262,  492 => 261,  486 => 260,  484 => 259,  481 => 258,  475 => 255,  471 => 253,  465 => 250,  461 => 248,  458 => 247,  453 => 246,  450 => 245,  448 => 244,  440 => 239,  432 => 234,  424 => 228,  422 => 227,  414 => 222,  406 => 217,  398 => 211,  396 => 210,  388 => 205,  380 => 200,  372 => 194,  370 => 193,  362 => 188,  354 => 183,  346 => 177,  344 => 176,  336 => 171,  328 => 166,  320 => 160,  318 => 159,  310 => 154,  302 => 149,  294 => 143,  292 => 142,  284 => 137,  276 => 132,  268 => 126,  266 => 125,  258 => 120,  250 => 115,  242 => 109,  240 => 108,  235 => 106,  232 => 105,  230 => 104,  225 => 102,  222 => 101,  220 => 100,  215 => 98,  212 => 97,  209 => 96,  207 => 95,  200 => 91,  192 => 85,  190 => 84,  182 => 79,  149 => 49,  139 => 41,  137 => 40,  130 => 36,  127 => 35,  121 => 32,  118 => 31,  116 => 30,  111 => 28,  107 => 27,  102 => 25,  98 => 24,  94 => 23,  89 => 21,  85 => 20,  82 => 19,  76 => 16,  73 => 15,  71 => 14,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 7,  48 => 4,  47 => 3,  45 => 2,  43 => 1,);
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
{% elseif id == 'press_release' and display_id == 'press_releases_slider' %}
<div class=\"container\">
    <!-- Row -->
    <div class=\"row\">
      <!-- Column -->
      <div class=\"col-sm-6\">
        <!-- Title -->
        <div class=\"title-container text-left\">
          <div class=\"title-wrap\">
            {{ header }}
          </div>
        </div><!-- Title -->
      </div><!-- Column -->
    </div><!-- Row -->
  </div><!-- Container -->

  <!-- Container -->
  <div class=\"container-fluid\">\t
    <div class=\"row\">
      <!-- Column Begins -->
      <div class=\"col-sm-12\">
        <div class=\"owl-carousel\" 
          data-animatein=\"\" 
          data-animateout=\"\" 
          data-items=\"1\" 
          data-loop=\"true\" 
          data-merge=\"true\" 
          data-nav=\"true\" 
          data-dots=\"false\" 
          data-stagepadding=\"\" 
          data-margin=\"15\"
          data-mobile=\"1\" 
          data-tablet=\"2\" 
          data-desktopsmall=\"3\"  
          data-desktop=\"4\" 
          data-autoplay=\"true\" 
          data-delay=\"3000\" 
          data-navigation=\"true\">
          
          {{ rows }}
        </div><!-- carousel -->
      </div><!-- Column -->
    </div><!-- Row -->
  </div><!-- Container -->
{% elseif id == 'team' and display_id == 'team' %}
\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t{{ rows }}
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
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

{% endif %}", "themes/custom/agenchy/templates/system/view/views-view.html.twig", "C:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\view\\views-view.html.twig");
    }
}
