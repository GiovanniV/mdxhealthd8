<?php

/* themes/custom/agenchy/templates/system/view/views-view.html.twig */
class __TwigTemplate_7c3e56fae5a656fd2ff8430e65e88853ef5b3064995bdea5c82b3e97166a3e06 extends Twig_Template
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
        $tags = array("if" => 1, "set" => 3, "for" => 236);
        $filters = array("length" => 329);
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
\t
  ";
        } elseif ((        // line 85
($context["id"] ?? null) == "_agenchy_section_content")) {
            // line 86
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_section_content_latest_post")) {
                // line 87
                echo "\t\t\t<ul class=\"thumbnail-widget\">
\t\t\t\t";
                // line 88
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</ul>
\t";
            } elseif ((            // line 90
($context["display_id"] ?? null) == "block_section_content_blog_timeline")) {
                // line 91
                echo "\t\t<div id=\"universh-timeline\" class=\"universh-container\">
\t\t\t";
                // line 92
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Timeline Container -->
\t";
            } elseif ((            // line 94
($context["display_id"] ?? null) == "block_footer_3_colum_3_latest_news")) {
                // line 95
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 96
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Thumbnail Widget -->
\t";
            } elseif ((            // line 98
($context["display_id"] ?? null) == "block_section_content_masonry_2_column")) {
                // line 99
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 105
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"2\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 110
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 115
($context["display_id"] ?? null) == "block_section_content_masonry_3_column")) {
                // line 116
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 122
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"0\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 127
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 132
($context["display_id"] ?? null) == "block_section_content_masonry_4_column")) {
                // line 133
                echo "\t\t<!-- Container -->
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters text-center\">
\t\t\t\t\t\t";
                // line 139
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"4\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 144
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 149
($context["display_id"] ?? null) == "block_section_content_masonry_gutter")) {
                // line 150
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 156
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"20\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 161
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 166
($context["display_id"] ?? null) == "block_section_content_grid_2_column")) {
                // line 167
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 173
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"2\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 178
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 183
($context["display_id"] ?? null) == "block_section_content_grid_3_column")) {
                // line 184
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 190
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"0\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 195
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 200
($context["display_id"] ?? null) == "block_section_content_grid_4_column")) {
                // line 201
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters text-center\">
\t\t\t\t\t\t";
                // line 207
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid\" data-gutter=\"0\" data-columns=\"4\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 212
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 217
($context["display_id"] ?? null) == "block_section_content_grid_gutter")) {
                // line 218
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Filters -->
\t\t\t\t\t<div class=\"isotope-filters\">
\t\t\t\t\t\t";
                // line 224
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Filters -->
\t\t\t\t\t<!-- Gallery Block -->
\t\t\t\t\t<div class=\"isotope-grid grid-three-column\" data-gutter=\"20\" data-columns=\"3\">
\t\t\t\t\t\t<div class=\"grid-sizer\"></div>
\t\t\t\t\t\t";
                // line 229
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Gallery Block -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 234
($context["display_id"] ?? null) == "block_section_content_team_list")) {
                // line 235
                echo "\t\t";
                $context["temp"] = 1;
                // line 236
                echo "\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 237
                    echo "\t    \t";
                    if (((($context["temp"] ?? null) % 2) == 0)) {
                        // line 238
                        echo "\t\t\t\t<!-- Team List Section -->
\t\t\t\t<div class=\"team-list-section typo-dark agenchy-list-team-item\">
\t\t\t\t\t";
                        // line 240
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t</div><!-- Team List Section --> 
\t\t\t";
                    } else {
                        // line 243
                        echo "\t\t\t\t<!-- Team List Section -->
\t\t\t\t<div class=\"bg-grey team-list-section typo-dark\">
\t\t\t\t\t";
                        // line 245
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t</div><!-- Team List Section -->
\t\t\t";
                    }
                    // line 248
                    echo "
\t\t\t";
                    // line 249
                    $context["temp"] = (($context["temp"] ?? null) + 1);
                    // line 250
                    echo "\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 251
                echo "\t";
            } elseif ((($context["display_id"] ?? null) == "block_section_content_team_v1_2_column")) {
                // line 252
                echo "\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 259
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 266
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 270
($context["display_id"] ?? null) == "block_section_content_team_v1_3_column")) {
                // line 271
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 278
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 285
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 289
($context["display_id"] ?? null) == "block_section_content_team_v1_4_column")) {
                // line 290
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 297
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container small\">
\t\t\t\t\t";
                // line 304
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 308
($context["display_id"] ?? null) == "block_section_content_team_v1_3_column_style_2")) {
                // line 309
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 316
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 322
                $context["temp"] = 1;
                // line 323
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 324
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 325
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-left\">
\t\t\t\t\t        \t";
                        // line 327
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 329
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 330
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 332
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 333
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 334
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-center\">
\t\t\t\t        \t";
                        // line 335
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 337
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 338
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 340
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 341
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 342
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-2-right\">
\t\t\t\t        \t";
                        // line 343
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 346
                        $context["temp"] = 1;
                        // line 347
                        echo "\t\t\t\t    ";
                    }
                    // line 348
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 349
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 351
($context["display_id"] ?? null) == "block_section_content_team_v1_3_column_color")) {
                // line 352
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 359
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 365
                $context["temp"] = 1;
                // line 366
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 367
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 368
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-white\">
\t\t\t\t\t        \t";
                        // line 370
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 372
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 373
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 375
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 376
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 377
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-color\">
\t\t\t\t        \t";
                        // line 378
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 380
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 381
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 383
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 384
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 385
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v1-3-column-bg-dark\">
\t\t\t\t        \t";
                        // line 386
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 389
                        $context["temp"] = 1;
                        // line 390
                        echo "\t\t\t\t    ";
                    }
                    // line 391
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 392
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 394
($context["display_id"] ?? null) == "block_section_content_team_v2_2_column")) {
                // line 395
                echo "\t\t<div class=\"container border-style\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 401
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 408
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 412
($context["display_id"] ?? null) == "block_section_content_team_v2_3_column")) {
                // line 413
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 420
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container\">
\t\t\t\t\t";
                // line 427
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 431
($context["display_id"] ?? null) == "block_section_content_team_v2_4_column")) {
                // line 432
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 439
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t<div class=\"team-container small\">
\t\t\t\t\t";
                // line 446
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Team Container -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 450
($context["display_id"] ?? null) == "block_section_content_team_v2_3_column_style_2")) {
                // line 451
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 458
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 464
                $context["temp"] = 1;
                // line 465
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 466
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 467
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-left\">
\t\t\t\t\t        \t";
                        // line 469
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 471
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 472
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 474
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 475
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 476
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-center\">
\t\t\t\t        \t";
                        // line 477
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 479
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 480
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 482
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 483
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 484
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-2-right\">
\t\t\t\t        \t";
                        // line 485
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 488
                        $context["temp"] = 1;
                        // line 489
                        echo "\t\t\t\t    ";
                    }
                    // line 490
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 491
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 493
($context["display_id"] ?? null) == "block_section_content_team_v2_3_column_color")) {
                // line 494
                echo "\t\t<div class=\"container border-style\">
\t\t\t<!-- Team Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 501
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 507
                $context["temp"] = 1;
                // line 508
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 509
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 510
                        echo "\t\t\t    \t\t<div class=\"row team-container\">
\t\t\t\t\t    \t<div class=\"col-sm-4 team-v2-3-column-bg-white\">
\t\t\t\t\t        \t";
                        // line 512
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 514
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 515
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 517
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 518
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 519
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 color-border team-v2-3-column-bg-color\">
\t\t\t\t        \t";
                        // line 520
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 522
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 523
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 525
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 526
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 527
                        echo "\t\t\t\t    \t<div class=\"col-sm-4 dark-border team-v2-3-column-bg-dark\">
\t\t\t\t        \t";
                        // line 528
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 531
                        $context["temp"] = 1;
                        // line 532
                        echo "\t\t\t\t    ";
                    }
                    // line 533
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 534
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 536
($context["display_id"] ?? null) == "block_section_content_testimonial_2_column")) {
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
\t\t\t\t
\t\t\t\t";
                // line 548
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 551
($context["display_id"] ?? null) == "block_section_content_testimonial_3_column")) {
                // line 552
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 558
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t";
                // line 563
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 566
($context["display_id"] ?? null) == "block_section_content_testimonial_4_column")) {
                // line 567
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row quote-sm\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 573
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t
\t\t\t\t";
                // line 578
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 581
($context["display_id"] ?? null) == "block_section_content_testimonial_color_column")) {
                // line 582
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title Block -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 588
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div><!-- Title Container -->
\t\t\t\t</div><!-- Title Block -->
\t\t\t\t<!-- Team Container -->
\t\t\t\t";
                // line 593
                $context["temp"] = 1;
                // line 594
                echo "\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 595
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 596
                        echo "\t\t\t    \t\t<div class=\"row quote-sm\">
\t\t\t\t\t    \t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t        \t";
                        // line 598
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        // line 600
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 601
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 603
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 604
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 605
                        echo "\t\t\t\t    \t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t        \t";
                        // line 606
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 608
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 609
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 611
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 612
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 613
                        echo "\t\t\t\t    \t<div class=\"col-sm-6 col-md-3 agenchy-color-column-color\">
\t\t\t\t        \t";
                        // line 614
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 616
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 617
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 619
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 620
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 621
                        echo "\t\t\t\t    \t<div class=\"col-sm-6 col-md-3 agenchy-color-column-dark\">
\t\t\t\t        \t";
                        // line 622
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t</div>
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 625
                        $context["temp"] = 1;
                        // line 626
                        echo "\t\t\t\t    ";
                    }
                    // line 627
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 628
                echo "\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            }
            // line 631
            echo "
";
        } elseif ((        // line 632
($context["id"] ?? null) == "_agenchy_sidebar_widgets")) {
            // line 633
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_on_sidebar_popular_cases")) {
                // line 634
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 635
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Thumbnail Widget -->
\t";
            } elseif ((            // line 637
($context["display_id"] ?? null) == "block_on_sidebar_title_services")) {
                // line 638
                echo "\t\t<ul class=\"go-widget with-bg\">
\t\t\t";
                // line 639
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 641
($context["display_id"] ?? null) == "block_on_sidebar_browse_by_team")) {
                // line 642
                echo "\t\t<ul class=\"thumbnail-widget thumb-circle\">
\t\t\t";
                // line 643
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 645
($context["display_id"] ?? null) == "block_on_sidebar_latest_reviews")) {
                // line 646
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
                // line 663
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- gallery Image carousel -->
\t\t</div>
\t";
            }
        } elseif ((        // line 667
($context["id"] ?? null) == "_agenchy_taxonomy_term")) {
            // line 668
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_on_sidebar_categories")) {
                // line 669
                echo "\t\t<ul class=\"go-widget\">
\t\t\t";
                // line 670
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 672
($context["display_id"] ?? null) == "block_on_sidebar_blog_tag_cloud")) {
                // line 673
                echo "\t\t<ul class=\"tag-widget\">
\t\t\t";
                // line 674
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 676
($context["display_id"] ?? null) == "block_on_sidebar_categories_cases")) {
                // line 677
                echo "\t\t<div class=\"accordion-widget\">
\t\t\t<div class=\"panel-group accordion agenchy-categories-cases\">
\t\t\t\t";
                // line 679
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div>
\t\t</div>
\t";
            } elseif ((            // line 682
($context["display_id"] ?? null) == "block_on_sidebar_cases_tag_cloud")) {
                // line 683
                echo "\t\t<ul class=\"tag-widget\">
\t\t\t";
                // line 684
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 686
($context["display_id"] ?? null) == "block_gallery_categories_tab_1")) {
                // line 687
                echo "\t\t<ul class=\"nav nav-pills\">
\t\t\t";
                // line 688
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 689
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            }
        } elseif ((        // line 692
($context["id"] ?? null) == "_agenchy_section_content_2")) {
            // line 693
            echo "\t";
            if ((($context["display_id"] ?? null) == "block_section_content_consultants")) {
                // line 694
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 695
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul>
\t";
            } elseif ((            // line 697
($context["display_id"] ?? null) == "block_footer_latest_news")) {
                // line 698
                echo "\t\t<ul class=\"thumbnail-widget\">
\t\t\t";
                // line 699
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Thumbnail Widget -->
\t";
            } elseif ((            // line 701
($context["display_id"] ?? null) == "block_team_bottom_content_reviews")) {
                // line 702
                echo "\t\t<!-- Widget -->
\t\t<div class=\"widget\">
\t\t\t";
                // line 704
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
                // line 722
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- gallery Image carousel -->
\t\t\t</div><!-- Quote Small -->
\t\t</div><!-- Widget -->
\t";
            } elseif ((            // line 726
($context["display_id"] ?? null) == "block_section_content_reviews")) {
                // line 727
                echo "\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t<div class=\"owl-carousel dots-square\" data-animatein=\"zoomIn\" data-animateout=\"slideOutDown\" data-items=\"1\" data-margin=\"30\" data-loop=\"true\" data-merge=\"true\" data-nav=\"false\" data-dots=\"false\" data-stagepadding=\"\" data-mobile=\"1\" data-tablet=\"1\" data-desktopsmall=\"1\"  data-desktop=\"2\" data-autoplay=\"true\" data-delay=\"3000\" data-navigation=\"true\">\t
\t\t\t";
                // line 729
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- gallery Image carousel -->
\t";
            } elseif ((            // line 731
($context["display_id"] ?? null) == "block_section_content_achievements")) {
                // line 732
                echo "\t\t<div class=\"row\">
\t\t\t";
                // line 733
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Content row -->
\t";
            } elseif ((            // line 735
($context["display_id"] ?? null) == "block_section_content_our_approach")) {
                // line 736
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Title -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 742
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div><!-- Title -->
\t\t\t</div><!-- Row -->
\t\t\t";
                // line 747
                $context["temp"] = 1;
                // line 748
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 749
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 750
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 751
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 752
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 753
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 755
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 756
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 757
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 758
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 759
                            echo "\t\t        \t</div>
\t\t        \t";
                        }
                        // line 761
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 762
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 763
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t";
                        // line 765
                        $context["temp"] = 1;
                        // line 766
                        echo "\t\t\t    ";
                    }
                    // line 767
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 768
                echo "\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 769
($context["display_id"] ?? null) == "block_section_content_reviews_grid")) {
                // line 770
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
                // line 772
                $context["temp"] = 1;
                // line 773
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 774
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 775
                        echo "\t\t\t\t    \t<div class=\"col-sm-4\">
\t\t\t\t        \t";
                        // line 776
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t        \t";
                        // line 777
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 778
                            echo "\t\t\t\t        \t</div>
\t\t\t\t        \t";
                        }
                        // line 780
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 781
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 782
                        echo "\t\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t    \t";
                        // line 783
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 784
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 786
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 787
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 788
                        echo "\t\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t    \t</div>
\t\t\t\t    \t";
                        // line 790
                        $context["temp"] = 1;
                        // line 791
                        echo "\t\t\t\t    ";
                    }
                    // line 792
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 793
                echo "\t\t\t</div>
\t\t</div>
\t";
            } elseif ((            // line 795
($context["display_id"] ?? null) == "block_section_content_company_logo")) {
                // line 796
                echo "\t\t<!-- Section -->
\t\t<div class=\"typo-dark\">
\t\t\t<!-- Container -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<!-- Details Listing Wrap -->
\t\t\t\t\t\t<ul class=\"listing-wrap\">
\t\t\t\t\t\t\t";
                // line 804
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</ul><!-- Details Listing Wrap -->
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->
\t\t</div><!-- Team List Section -->
\t";
            } elseif ((            // line 810
($context["display_id"] ?? null) == "block_section_content_our_clients")) {
                // line 811
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container title-sm text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 817
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div>
\t\t\t";
                // line 822
                $context["temp"] = 1;
                // line 823
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 824
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 825
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 826
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 827
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 828
                            echo "\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 830
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 831
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 832
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 833
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 834
                            echo "\t\t        \t</div>
\t\t        \t";
                        }
                        // line 836
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 837
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 838
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 839
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 840
                            echo "\t\t        \t</div>
\t\t        \t";
                        }
                        // line 842
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 843
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 844
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t";
                        // line 846
                        $context["temp"] = 1;
                        // line 847
                        echo "\t\t\t    ";
                    }
                    // line 848
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 849
                echo "\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 850
($context["display_id"] ?? null) == "block_section_content_what_we_do_services")) {
                // line 851
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 859
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t</div><!-- Column -->
\t\t\t\t<!-- Column -->
\t\t\t\t";
                // line 864
                if (($context["footer"] ?? null)) {
                    // line 865
                    echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<p class=\"text-right text-left-767 margin-bottom-767-30\">";
                    // line 866
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                    echo "</p>
\t\t\t\t</div><!-- Column -->
\t\t\t\t";
                }
                // line 869
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
                // line 893
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 898
($context["display_id"] ?? null) == "block_section_content_clients_image")) {
                // line 899
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
                // line 920
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Boxed Block -->\t
\t\t\t</div><!-- Column -->
\t\t</div><!-- Row -->
\t";
            } elseif ((            // line 925
($context["display_id"] ?? null) == "block_section_content_what_our_clients_say")) {
                // line 926
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 933
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
                // line 956
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t\t";
                // line 960
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 962
($context["display_id"] ?? null) == "block_section_content_clients_image_dark")) {
                // line 963
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
                // line 984
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Boxed Block -->\t
\t\t\t</div><!-- Column -->
\t\t</div><!-- Row -->
\t";
            } elseif ((            // line 989
($context["display_id"] ?? null) == "block_section_content_news_updates")) {
                // line 990
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container sm text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 998
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
                // line 1008
                $context["temp"] = 1;
                // line 1009
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1010
                    echo "\t\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1011
                        echo "\t\t\t\t    \t<div class=\"col-md-6\">
\t\t\t\t    \t\t<ul class=\"row\">
\t\t\t\t\t        \t";
                        // line 1013
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t\t        \t";
                        // line 1014
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1015
                            echo "\t\t\t\t        \t</ul>\t
\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 1018
                        echo "\t\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1019
                        echo "\t\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1020
                        echo "\t\t\t\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t\t\t    \t";
                        // line 1021
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1022
                            echo "\t\t\t\t\t    \t</ul>
\t\t\t        \t</div>
\t\t\t        \t";
                        }
                        // line 1025
                        echo "\t\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1026
                        echo "\t\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1027
                        echo "\t\t\t\t    \t\t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t\t    \t\t</ul>
\t\t\t        \t</div>
\t\t\t\t    \t";
                        // line 1030
                        $context["temp"] = 1;
                        // line 1031
                        echo "\t\t\t\t    ";
                    }
                    // line 1032
                    echo "\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1033
                echo "\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1035
($context["display_id"] ?? null) == "block_section_content_what_our_clients_say_dark")) {
                // line 1036
                echo "\t\t<div class=\"container parent-has-overlay\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 1043
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
                // line 1067
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t\t";
                // line 1071
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1073
($context["display_id"] ?? null) == "block_section_content_what_we_do_services_style_2")) {
                // line 1074
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t";
                // line 1081
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- Title -->
\t\t\t\t\t";
                // line 1083
                if (($context["footer"] ?? null)) {
                    // line 1084
                    echo "\t\t\t\t\t<p>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                    echo "</p>
\t\t\t\t\t";
                }
                // line 1086
                echo "\t\t\t\t</div><!-- Column -->
\t\t\t\t";
                // line 1087
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1090
($context["display_id"] ?? null) == "block_section_content_what_our_clients_say_default")) {
                // line 1091
                echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left sm\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 1098
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
                // line 1122
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1127
($context["display_id"] ?? null) == "block_section_content_news_updates_slide")) {
                // line 1128
                echo "\t\t<div class=\"container\">
\t\t\t<!-- Row -->
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Column -->
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<div class=\"title-container text-left\">
\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t";
                // line 1136
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
                // line 1166
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t\t\t\t</div><!-- carousel -->
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t";
            } elseif ((            // line 1171
($context["display_id"] ?? null) == "block_switcher_homepage")) {
                // line 1172
                echo "\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t<ul class=\"demos\">
\t\t\t";
                // line 1174
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t</ul><!-- Options Config -->
\t";
            }
        } elseif ((        // line 1177
($context["id"] ?? null) == "blog")) {
            // line 1178
            $context["blog_layout"] = "list";
            // line 1179
            echo "\t";
            if (((($context["blog_layout"] ?? null) == "grid") || (($context["blog_layout"] ?? null) == "3_column"))) {
                // line 1180
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1181
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1182
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1183
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1184
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1185
                $context["temp"] = 1;
                // line 1186
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1187
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1188
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1189
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1190
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1191
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t";
                        }
                        // line 1194
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1195
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1196
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1197
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1198
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t";
                        }
                        // line 1201
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1202
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1203
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1206
                        $context["temp"] = 1;
                        // line 1207
                        echo "\t\t\t    ";
                    }
                    // line 1208
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1209
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1210
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1211
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1214
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 1218
($context["blog_layout"] ?? null) == "list")) {
                // line 1220
                $context["classes"] = array(0 => ((                // line 1221
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
                // line 1224
                echo "<div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                echo ">
  ";
                // line 1225
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
  ";
                // line 1226
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
  ";
                // line 1227
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "

  ";
                // line 1229
                if (($context["header"] ?? null)) {
                    // line 1230
                    echo "    <header>
      ";
                    // line 1231
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                    echo "
    </header>
  ";
                }
                // line 1234
                echo "
  ";
                // line 1235
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
                echo "
  ";
                // line 1236
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
                echo "

  ";
                // line 1238
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
  ";
                // line 1239
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
  ";
                // line 1240
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "

  ";
                // line 1242
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
  ";
                // line 1243
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
                echo "

  ";
                // line 1245
                if (($context["footer"] ?? null)) {
                    // line 1246
                    echo "    <footer>
      ";
                    // line 1247
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                    echo "
    </footer>
  ";
                }
                // line 1250
                echo "
  ";
                // line 1251
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
                echo "
</div>

\t";
            } elseif ((            // line 1254
($context["blog_layout"] ?? null) == "2_column")) {
                // line 1255
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1256
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1257
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1258
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1259
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1260
                $context["temp"] = 1;
                // line 1261
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1262
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1263
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1264
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1265
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1266
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t";
                        }
                        // line 1269
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1270
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1271
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1274
                        $context["temp"] = 1;
                        // line 1275
                        echo "\t\t\t    ";
                    }
                    // line 1276
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1277
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1278
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1279
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1282
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 1286
($context["blog_layout"] ?? null) == "4_column")) {
                // line 1287
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1288
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1289
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1290
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1291
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1292
                $context["temp"] = 1;
                // line 1293
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1294
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1295
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1296
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1297
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1298
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t";
                        }
                        // line 1301
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1302
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1303
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1304
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1305
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t";
                        }
                        // line 1308
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1309
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1310
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1311
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1312
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t";
                        }
                        // line 1315
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1316
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1317
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1320
                        $context["temp"] = 1;
                        // line 1321
                        echo "\t\t\t    ";
                    }
                    // line 1322
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1323
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1324
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1325
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1328
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
    ";
            } else {
                // line 1333
                echo "    \t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1334
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1335
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1336
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1337
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1338
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t";
            }
        } elseif ((        // line 1340
($context["id"] ?? null) == "cases")) {
            // line 1341
            echo "\t";
            if (((($context["cases_layout"] ?? null) == "grid") || (($context["cases_layout"] ?? null) == "3_column"))) {
                // line 1342
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1343
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1344
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1345
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1346
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1347
                $context["temp"] = 1;
                // line 1348
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1349
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1350
                        echo "\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t";
                        // line 1351
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1352
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1353
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t\t        \t";
                        }
                        // line 1356
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1357
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1358
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1359
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1360
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-xs\" />
\t\t        \t";
                        }
                        // line 1363
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1364
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1365
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-xs\" />
\t\t\t    \t";
                        // line 1368
                        $context["temp"] = 1;
                        // line 1369
                        echo "\t\t\t    ";
                    }
                    // line 1370
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1371
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1372
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1373
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1374
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1376
($context["cases_layout"] ?? null) == "list")) {
                // line 1377
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1378
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1379
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1380
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1381
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1382
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1383
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1384
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1385
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1386
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1388
($context["cases_layout"] ?? null) == "2_column")) {
                // line 1389
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1390
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1391
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1392
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1393
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1394
                $context["temp"] = 1;
                // line 1395
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1396
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1397
                        echo "\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t";
                        // line 1398
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1399
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1400
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t";
                        }
                        // line 1403
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1404
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1405
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t";
                        // line 1408
                        $context["temp"] = 1;
                        // line 1409
                        echo "\t\t\t    ";
                    }
                    // line 1410
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1411
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1412
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1413
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1414
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1416
($context["cases_layout"] ?? null) == "4_column")) {
                // line 1417
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1418
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1419
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1420
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1421
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1422
                $context["temp"] = 1;
                // line 1423
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1424
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1425
                        echo "\t\t\t    \t<div class=\"row case-container\">
\t\t\t        \t";
                        // line 1426
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1427
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1428
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-991\">
\t\t\t        \t";
                        }
                        // line 1431
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1432
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1433
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1434
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1435
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1438
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1439
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1440
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1441
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1442
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1445
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1446
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1447
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-991\">
\t\t\t    \t";
                        // line 1450
                        $context["temp"] = 1;
                        // line 1451
                        echo "\t\t\t    ";
                    }
                    // line 1452
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1453
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1454
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1455
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1456
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
    ";
            } else {
                // line 1459
                echo "    \t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1460
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1461
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1462
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1463
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1464
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t";
            }
        } elseif ((        // line 1466
($context["id"] ?? null) == "services")) {
            // line 1467
            echo "\t";
            if (((($context["services_layout"] ?? null) == "grid") || (($context["services_layout"] ?? null) == "3_column"))) {
                // line 1468
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1469
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1470
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1471
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1472
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1473
                $context["temp"] = 1;
                // line 1474
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1475
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1476
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1477
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1478
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1479
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t";
                        }
                        // line 1482
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1483
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1484
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1485
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1486
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-767\">
\t\t        \t";
                        }
                        // line 1489
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1490
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1491
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t";
                        // line 1494
                        $context["temp"] = 1;
                        // line 1495
                        echo "\t\t\t    ";
                    }
                    // line 1496
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1497
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1498
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1499
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1500
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1502
($context["services_layout"] ?? null) == "list")) {
                // line 1503
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1504
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1505
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1506
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1507
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1508
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1509
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1510
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1511
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1512
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1514
($context["services_layout"] ?? null) == "2_column")) {
                // line 1515
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1516
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1517
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1518
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1519
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1520
                $context["temp"] = 1;
                // line 1521
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1522
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1523
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1524
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1525
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1526
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-767\">
\t\t\t        \t";
                        }
                        // line 1529
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1530
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1531
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-767\">
\t\t\t    \t";
                        // line 1534
                        $context["temp"] = 1;
                        // line 1535
                        echo "\t\t\t    ";
                    }
                    // line 1536
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1537
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1538
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1539
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1540
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
\t";
            } elseif ((            // line 1542
($context["services_layout"] ?? null) == "4_column")) {
                // line 1543
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1544
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1545
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1546
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1547
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1548
                $context["temp"] = 1;
                // line 1549
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1550
                    echo "\t\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1551
                        echo "\t\t\t    \t<div class=\"row\">
\t\t\t        \t";
                        // line 1552
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t        \t";
                        // line 1553
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1554
                            echo "\t\t\t        \t</div>
\t\t\t        \t<hr class=\"lg hidden-991\">
\t\t\t        \t";
                        }
                        // line 1557
                        echo "\t\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1558
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1559
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1560
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1561
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1564
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1565
                        echo "\t\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1566
                        echo "\t\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t";
                        // line 1567
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1568
                            echo "\t\t        \t</div>
\t\t        \t<hr class=\"lg hidden-991\">
\t\t        \t";
                        }
                        // line 1571
                        echo "\t\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1572
                        echo "\t\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1573
                        echo "\t\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t\t    \t</div>
\t\t\t    \t<hr class=\"lg hidden-991\">
\t\t\t    \t";
                        // line 1576
                        $context["temp"] = 1;
                        // line 1577
                        echo "\t\t\t    ";
                    }
                    // line 1578
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1579
                echo "\t\t    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1580
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t\t  \t";
                // line 1581
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1582
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t</div>
    ";
            } else {
                // line 1585
                echo "    \t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1586
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1587
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1588
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1589
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
\t  \t";
                // line 1590
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t";
            }
        } elseif ((        // line 1592
($context["id"] ?? null) == "shop")) {
            // line 1593
            echo "\t";
            if ((($context["shop_layout"] ?? null) == "2_column")) {
                // line 1594
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1595
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1596
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1597
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1598
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1599
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1600
                $context["temp"] = 1;
                // line 1601
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1602
                    echo "\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1603
                        echo "\t\t    \t<div class=\"row\">
\t\t        \t";
                        // line 1604
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t       \t";
                        // line 1605
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1606
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1608
                        echo "\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1609
                        echo "\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 2) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1610
                        echo "\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t</div>
\t\t    \t";
                        // line 1612
                        $context["temp"] = 1;
                        // line 1613
                        echo "\t\t    ";
                    }
                    // line 1614
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1615
                echo "\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1617
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div>
\t";
            } elseif ((            // line 1621
($context["shop_layout"] ?? null) == "3_column")) {
                // line 1622
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1623
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1624
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1625
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1626
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1627
                $context["temp"] = 1;
                // line 1628
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1629
                    echo "\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1630
                        echo "\t\t    \t<div class=\"row\">
\t\t        \t";
                        // line 1631
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t        ";
                        // line 1632
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1633
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1635
                        echo "\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1636
                        echo "\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1637
                        echo "\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t";
                        // line 1638
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1639
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1641
                        echo "\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1642
                        echo "\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 3) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1643
                        echo "\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t</div>
\t\t    \t";
                        // line 1645
                        $context["temp"] = 1;
                        // line 1646
                        echo "\t\t    ";
                    }
                    // line 1647
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1648
                echo "\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1650
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t    </div>
\t";
            } else {
                // line 1655
                echo "\t\t<div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
\t\t\t";
                // line 1656
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1657
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1658
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1659
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
\t\t\t";
                // line 1660
                $context["temp"] = 1;
                // line 1661
                echo "\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array"));
                foreach ($context['_seq'] as $context["i"] => $context["row"]) {
                    // line 1662
                    echo "\t    \t";
                    if ((($context["temp"] ?? null) == 1)) {
                        // line 1663
                        echo "\t\t    \t<div class=\"row\">
\t\t        \t";
                        // line 1664
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t        ";
                        // line 1665
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1666
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1668
                        echo "\t\t        ";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1669
                        echo "\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 2)) {
                        // line 1670
                        echo "\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t";
                        // line 1671
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1672
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1674
                        echo "\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1675
                        echo "\t\t    ";
                    } elseif ((($context["temp"] ?? null) == 3)) {
                        // line 1676
                        echo "\t\t    \t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t";
                        // line 1677
                        if (($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1))) {
                            // line 1678
                            echo "\t\t       \t</div>
\t\t       \t";
                        }
                        // line 1680
                        echo "\t\t    \t";
                        $context["temp"] = (($context["temp"] ?? null) + 1);
                        // line 1681
                        echo "\t\t    ";
                    } elseif (((($context["temp"] ?? null) == 4) || ($context["i"] == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["rows"] ?? null), 0, array()), "#rows", array(), "array")) - 1)))) {
                        // line 1682
                        echo "\t\t    \t\t";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
                        echo "
\t\t    \t</div>
\t\t    \t";
                        // line 1684
                        $context["temp"] = 1;
                        // line 1685
                        echo "\t\t    ";
                    }
                    // line 1686
                    echo "\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1687
                echo "\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
                // line 1689
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
                echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t    </div>
\t";
            }
        } else {
            // line 1695
            echo "\t";
            // line 1696
            $context["classes"] = array(0 => ((            // line 1697
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
            // line 1700
            echo "<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
  ";
            // line 1701
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
  ";
            // line 1702
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
  ";
            // line 1703
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "

  ";
            // line 1705
            if (($context["header"] ?? null)) {
                // line 1706
                echo "    <header>
      ";
                // line 1707
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
                echo "
    </header>
  ";
            }
            // line 1710
            echo "
  ";
            // line 1711
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
  ";
            // line 1712
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "

  ";
            // line 1714
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
  ";
            // line 1715
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            echo "
  ";
            // line 1716
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "

  ";
            // line 1718
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
  ";
            // line 1719
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
            echo "

  ";
            // line 1721
            if (($context["footer"] ?? null)) {
                // line 1722
                echo "    <footer>
      ";
                // line 1723
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
                echo "
    </footer>
  ";
            }
            // line 1726
            echo "
  ";
            // line 1727
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
        return array (  3789 => 1727,  3786 => 1726,  3780 => 1723,  3777 => 1722,  3775 => 1721,  3770 => 1719,  3766 => 1718,  3761 => 1716,  3757 => 1715,  3753 => 1714,  3748 => 1712,  3744 => 1711,  3741 => 1710,  3735 => 1707,  3732 => 1706,  3730 => 1705,  3725 => 1703,  3721 => 1702,  3717 => 1701,  3712 => 1700,  3710 => 1697,  3709 => 1696,  3707 => 1695,  3698 => 1689,  3694 => 1687,  3688 => 1686,  3685 => 1685,  3683 => 1684,  3677 => 1682,  3674 => 1681,  3671 => 1680,  3667 => 1678,  3665 => 1677,  3660 => 1676,  3657 => 1675,  3654 => 1674,  3650 => 1672,  3648 => 1671,  3643 => 1670,  3640 => 1669,  3637 => 1668,  3633 => 1666,  3631 => 1665,  3627 => 1664,  3624 => 1663,  3621 => 1662,  3616 => 1661,  3614 => 1660,  3610 => 1659,  3606 => 1658,  3602 => 1657,  3598 => 1656,  3593 => 1655,  3585 => 1650,  3581 => 1648,  3575 => 1647,  3572 => 1646,  3570 => 1645,  3564 => 1643,  3561 => 1642,  3558 => 1641,  3554 => 1639,  3552 => 1638,  3547 => 1637,  3544 => 1636,  3541 => 1635,  3537 => 1633,  3535 => 1632,  3531 => 1631,  3528 => 1630,  3525 => 1629,  3520 => 1628,  3518 => 1627,  3514 => 1626,  3510 => 1625,  3506 => 1624,  3502 => 1623,  3497 => 1622,  3495 => 1621,  3488 => 1617,  3484 => 1615,  3478 => 1614,  3475 => 1613,  3473 => 1612,  3467 => 1610,  3464 => 1609,  3461 => 1608,  3457 => 1606,  3455 => 1605,  3451 => 1604,  3448 => 1603,  3445 => 1602,  3440 => 1601,  3438 => 1600,  3434 => 1599,  3430 => 1598,  3426 => 1597,  3422 => 1596,  3418 => 1595,  3413 => 1594,  3410 => 1593,  3408 => 1592,  3403 => 1590,  3399 => 1589,  3395 => 1588,  3391 => 1587,  3387 => 1586,  3382 => 1585,  3376 => 1582,  3372 => 1581,  3368 => 1580,  3363 => 1579,  3357 => 1578,  3354 => 1577,  3352 => 1576,  3345 => 1573,  3342 => 1572,  3339 => 1571,  3334 => 1568,  3332 => 1567,  3327 => 1566,  3324 => 1565,  3321 => 1564,  3316 => 1561,  3314 => 1560,  3309 => 1559,  3306 => 1558,  3303 => 1557,  3298 => 1554,  3296 => 1553,  3292 => 1552,  3289 => 1551,  3286 => 1550,  3281 => 1549,  3279 => 1548,  3275 => 1547,  3271 => 1546,  3267 => 1545,  3263 => 1544,  3258 => 1543,  3256 => 1542,  3251 => 1540,  3247 => 1539,  3243 => 1538,  3238 => 1537,  3232 => 1536,  3229 => 1535,  3227 => 1534,  3220 => 1531,  3217 => 1530,  3214 => 1529,  3209 => 1526,  3207 => 1525,  3203 => 1524,  3200 => 1523,  3197 => 1522,  3192 => 1521,  3190 => 1520,  3186 => 1519,  3182 => 1518,  3178 => 1517,  3174 => 1516,  3169 => 1515,  3167 => 1514,  3162 => 1512,  3158 => 1511,  3154 => 1510,  3150 => 1509,  3146 => 1508,  3142 => 1507,  3138 => 1506,  3134 => 1505,  3130 => 1504,  3125 => 1503,  3123 => 1502,  3118 => 1500,  3114 => 1499,  3110 => 1498,  3105 => 1497,  3099 => 1496,  3096 => 1495,  3094 => 1494,  3087 => 1491,  3084 => 1490,  3081 => 1489,  3076 => 1486,  3074 => 1485,  3069 => 1484,  3066 => 1483,  3063 => 1482,  3058 => 1479,  3056 => 1478,  3052 => 1477,  3049 => 1476,  3046 => 1475,  3041 => 1474,  3039 => 1473,  3035 => 1472,  3031 => 1471,  3027 => 1470,  3023 => 1469,  3018 => 1468,  3015 => 1467,  3013 => 1466,  3008 => 1464,  3004 => 1463,  3000 => 1462,  2996 => 1461,  2992 => 1460,  2987 => 1459,  2981 => 1456,  2977 => 1455,  2973 => 1454,  2968 => 1453,  2962 => 1452,  2959 => 1451,  2957 => 1450,  2950 => 1447,  2947 => 1446,  2944 => 1445,  2939 => 1442,  2937 => 1441,  2932 => 1440,  2929 => 1439,  2926 => 1438,  2921 => 1435,  2919 => 1434,  2914 => 1433,  2911 => 1432,  2908 => 1431,  2903 => 1428,  2901 => 1427,  2897 => 1426,  2894 => 1425,  2891 => 1424,  2886 => 1423,  2884 => 1422,  2880 => 1421,  2876 => 1420,  2872 => 1419,  2868 => 1418,  2863 => 1417,  2861 => 1416,  2856 => 1414,  2852 => 1413,  2848 => 1412,  2843 => 1411,  2837 => 1410,  2834 => 1409,  2832 => 1408,  2825 => 1405,  2822 => 1404,  2819 => 1403,  2814 => 1400,  2812 => 1399,  2808 => 1398,  2805 => 1397,  2802 => 1396,  2797 => 1395,  2795 => 1394,  2791 => 1393,  2787 => 1392,  2783 => 1391,  2779 => 1390,  2774 => 1389,  2772 => 1388,  2767 => 1386,  2763 => 1385,  2759 => 1384,  2755 => 1383,  2751 => 1382,  2747 => 1381,  2743 => 1380,  2739 => 1379,  2735 => 1378,  2730 => 1377,  2728 => 1376,  2723 => 1374,  2719 => 1373,  2715 => 1372,  2710 => 1371,  2704 => 1370,  2701 => 1369,  2699 => 1368,  2692 => 1365,  2689 => 1364,  2686 => 1363,  2681 => 1360,  2679 => 1359,  2674 => 1358,  2671 => 1357,  2668 => 1356,  2663 => 1353,  2661 => 1352,  2657 => 1351,  2654 => 1350,  2651 => 1349,  2646 => 1348,  2644 => 1347,  2640 => 1346,  2636 => 1345,  2632 => 1344,  2628 => 1343,  2623 => 1342,  2620 => 1341,  2618 => 1340,  2613 => 1338,  2609 => 1337,  2605 => 1336,  2601 => 1335,  2597 => 1334,  2592 => 1333,  2584 => 1328,  2578 => 1325,  2574 => 1324,  2569 => 1323,  2563 => 1322,  2560 => 1321,  2558 => 1320,  2551 => 1317,  2548 => 1316,  2545 => 1315,  2540 => 1312,  2538 => 1311,  2533 => 1310,  2530 => 1309,  2527 => 1308,  2522 => 1305,  2520 => 1304,  2515 => 1303,  2512 => 1302,  2509 => 1301,  2504 => 1298,  2502 => 1297,  2498 => 1296,  2495 => 1295,  2492 => 1294,  2487 => 1293,  2485 => 1292,  2481 => 1291,  2477 => 1290,  2473 => 1289,  2469 => 1288,  2464 => 1287,  2462 => 1286,  2455 => 1282,  2449 => 1279,  2445 => 1278,  2440 => 1277,  2434 => 1276,  2431 => 1275,  2429 => 1274,  2422 => 1271,  2419 => 1270,  2416 => 1269,  2411 => 1266,  2409 => 1265,  2405 => 1264,  2402 => 1263,  2399 => 1262,  2394 => 1261,  2392 => 1260,  2388 => 1259,  2384 => 1258,  2380 => 1257,  2376 => 1256,  2371 => 1255,  2369 => 1254,  2363 => 1251,  2360 => 1250,  2354 => 1247,  2351 => 1246,  2349 => 1245,  2344 => 1243,  2340 => 1242,  2335 => 1240,  2331 => 1239,  2327 => 1238,  2322 => 1236,  2318 => 1235,  2315 => 1234,  2309 => 1231,  2306 => 1230,  2304 => 1229,  2299 => 1227,  2295 => 1226,  2291 => 1225,  2286 => 1224,  2284 => 1221,  2283 => 1220,  2281 => 1218,  2274 => 1214,  2268 => 1211,  2264 => 1210,  2259 => 1209,  2253 => 1208,  2250 => 1207,  2248 => 1206,  2241 => 1203,  2238 => 1202,  2235 => 1201,  2230 => 1198,  2228 => 1197,  2223 => 1196,  2220 => 1195,  2217 => 1194,  2212 => 1191,  2210 => 1190,  2206 => 1189,  2203 => 1188,  2200 => 1187,  2195 => 1186,  2193 => 1185,  2189 => 1184,  2185 => 1183,  2181 => 1182,  2177 => 1181,  2172 => 1180,  2169 => 1179,  2167 => 1178,  2165 => 1177,  2159 => 1174,  2153 => 1172,  2151 => 1171,  2143 => 1166,  2110 => 1136,  2100 => 1128,  2098 => 1127,  2090 => 1122,  2063 => 1098,  2054 => 1091,  2052 => 1090,  2046 => 1087,  2043 => 1086,  2037 => 1084,  2035 => 1083,  2030 => 1081,  2021 => 1074,  2019 => 1073,  2014 => 1071,  2007 => 1067,  1980 => 1043,  1971 => 1036,  1969 => 1035,  1965 => 1033,  1959 => 1032,  1956 => 1031,  1954 => 1030,  1947 => 1027,  1944 => 1026,  1941 => 1025,  1936 => 1022,  1934 => 1021,  1929 => 1020,  1926 => 1019,  1923 => 1018,  1918 => 1015,  1916 => 1014,  1912 => 1013,  1908 => 1011,  1905 => 1010,  1900 => 1009,  1898 => 1008,  1885 => 998,  1875 => 990,  1873 => 989,  1865 => 984,  1842 => 963,  1840 => 962,  1835 => 960,  1828 => 956,  1802 => 933,  1793 => 926,  1791 => 925,  1783 => 920,  1760 => 899,  1758 => 898,  1750 => 893,  1724 => 869,  1718 => 866,  1715 => 865,  1713 => 864,  1705 => 859,  1695 => 851,  1693 => 850,  1690 => 849,  1684 => 848,  1681 => 847,  1679 => 846,  1673 => 844,  1670 => 843,  1667 => 842,  1663 => 840,  1661 => 839,  1656 => 838,  1653 => 837,  1650 => 836,  1646 => 834,  1644 => 833,  1639 => 832,  1636 => 831,  1633 => 830,  1629 => 828,  1627 => 827,  1623 => 826,  1620 => 825,  1617 => 824,  1612 => 823,  1610 => 822,  1602 => 817,  1594 => 811,  1592 => 810,  1583 => 804,  1573 => 796,  1571 => 795,  1567 => 793,  1561 => 792,  1558 => 791,  1556 => 790,  1550 => 788,  1547 => 787,  1544 => 786,  1540 => 784,  1538 => 783,  1533 => 782,  1530 => 781,  1527 => 780,  1523 => 778,  1521 => 777,  1517 => 776,  1514 => 775,  1511 => 774,  1506 => 773,  1504 => 772,  1500 => 770,  1498 => 769,  1495 => 768,  1489 => 767,  1486 => 766,  1484 => 765,  1478 => 763,  1475 => 762,  1472 => 761,  1468 => 759,  1466 => 758,  1461 => 757,  1458 => 756,  1455 => 755,  1451 => 753,  1449 => 752,  1445 => 751,  1442 => 750,  1439 => 749,  1434 => 748,  1432 => 747,  1424 => 742,  1416 => 736,  1414 => 735,  1409 => 733,  1406 => 732,  1404 => 731,  1399 => 729,  1393 => 727,  1391 => 726,  1384 => 722,  1363 => 704,  1359 => 702,  1357 => 701,  1352 => 699,  1349 => 698,  1347 => 697,  1342 => 695,  1339 => 694,  1336 => 693,  1334 => 692,  1328 => 689,  1324 => 688,  1321 => 687,  1319 => 686,  1314 => 684,  1311 => 683,  1309 => 682,  1303 => 679,  1299 => 677,  1297 => 676,  1292 => 674,  1289 => 673,  1287 => 672,  1282 => 670,  1279 => 669,  1276 => 668,  1274 => 667,  1267 => 663,  1248 => 646,  1246 => 645,  1241 => 643,  1238 => 642,  1236 => 641,  1231 => 639,  1228 => 638,  1226 => 637,  1221 => 635,  1218 => 634,  1215 => 633,  1213 => 632,  1210 => 631,  1205 => 628,  1199 => 627,  1196 => 626,  1194 => 625,  1188 => 622,  1185 => 621,  1182 => 620,  1179 => 619,  1175 => 617,  1173 => 616,  1168 => 614,  1165 => 613,  1162 => 612,  1159 => 611,  1155 => 609,  1153 => 608,  1148 => 606,  1145 => 605,  1142 => 604,  1139 => 603,  1135 => 601,  1133 => 600,  1128 => 598,  1124 => 596,  1121 => 595,  1116 => 594,  1114 => 593,  1106 => 588,  1098 => 582,  1096 => 581,  1090 => 578,  1082 => 573,  1074 => 567,  1072 => 566,  1066 => 563,  1058 => 558,  1050 => 552,  1048 => 551,  1042 => 548,  1034 => 543,  1026 => 537,  1024 => 536,  1020 => 534,  1014 => 533,  1011 => 532,  1009 => 531,  1003 => 528,  1000 => 527,  997 => 526,  994 => 525,  990 => 523,  988 => 522,  983 => 520,  980 => 519,  977 => 518,  974 => 517,  970 => 515,  968 => 514,  963 => 512,  959 => 510,  956 => 509,  951 => 508,  949 => 507,  940 => 501,  931 => 494,  929 => 493,  925 => 491,  919 => 490,  916 => 489,  914 => 488,  908 => 485,  905 => 484,  902 => 483,  899 => 482,  895 => 480,  893 => 479,  888 => 477,  885 => 476,  882 => 475,  879 => 474,  875 => 472,  873 => 471,  868 => 469,  864 => 467,  861 => 466,  856 => 465,  854 => 464,  845 => 458,  836 => 451,  834 => 450,  827 => 446,  817 => 439,  808 => 432,  806 => 431,  799 => 427,  789 => 420,  780 => 413,  778 => 412,  771 => 408,  761 => 401,  753 => 395,  751 => 394,  747 => 392,  741 => 391,  738 => 390,  736 => 389,  730 => 386,  727 => 385,  724 => 384,  721 => 383,  717 => 381,  715 => 380,  710 => 378,  707 => 377,  704 => 376,  701 => 375,  697 => 373,  695 => 372,  690 => 370,  686 => 368,  683 => 367,  678 => 366,  676 => 365,  667 => 359,  658 => 352,  656 => 351,  652 => 349,  646 => 348,  643 => 347,  641 => 346,  635 => 343,  632 => 342,  629 => 341,  626 => 340,  622 => 338,  620 => 337,  615 => 335,  612 => 334,  609 => 333,  606 => 332,  602 => 330,  600 => 329,  595 => 327,  591 => 325,  588 => 324,  583 => 323,  581 => 322,  572 => 316,  563 => 309,  561 => 308,  554 => 304,  544 => 297,  535 => 290,  533 => 289,  526 => 285,  516 => 278,  507 => 271,  505 => 270,  498 => 266,  488 => 259,  479 => 252,  476 => 251,  470 => 250,  468 => 249,  465 => 248,  459 => 245,  455 => 243,  449 => 240,  445 => 238,  442 => 237,  437 => 236,  434 => 235,  432 => 234,  424 => 229,  416 => 224,  408 => 218,  406 => 217,  398 => 212,  390 => 207,  382 => 201,  380 => 200,  372 => 195,  364 => 190,  356 => 184,  354 => 183,  346 => 178,  338 => 173,  330 => 167,  328 => 166,  320 => 161,  312 => 156,  304 => 150,  302 => 149,  294 => 144,  286 => 139,  278 => 133,  276 => 132,  268 => 127,  260 => 122,  252 => 116,  250 => 115,  242 => 110,  234 => 105,  226 => 99,  224 => 98,  219 => 96,  216 => 95,  214 => 94,  209 => 92,  206 => 91,  204 => 90,  199 => 88,  196 => 87,  193 => 86,  191 => 85,  182 => 79,  149 => 49,  139 => 41,  137 => 40,  130 => 36,  127 => 35,  121 => 32,  118 => 31,  116 => 30,  111 => 28,  107 => 27,  102 => 25,  98 => 24,  94 => 23,  89 => 21,  85 => 20,  82 => 19,  76 => 16,  73 => 15,  71 => 14,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 7,  48 => 4,  47 => 3,  45 => 2,  43 => 1,);
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
\t
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

{% endif %}", "themes/custom/agenchy/templates/system/view/views-view.html.twig", "/opt/lampp/htdocs/mdxhealthd8/web/themes/custom/agenchy/templates/system/view/views-view.html.twig");
    }
}
