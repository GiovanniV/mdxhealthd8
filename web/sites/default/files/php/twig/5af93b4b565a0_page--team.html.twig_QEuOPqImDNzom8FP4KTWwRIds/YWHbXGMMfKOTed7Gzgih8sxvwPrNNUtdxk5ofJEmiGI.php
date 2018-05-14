<?php

/* themes/custom/agenchy/templates/system/page/page--team.html.twig */
class __TwigTemplate_8e1af4ba2ea8f6f35cbdf4eacfbd0bea22215e15ab24e452bc06d8af6e09415e extends Twig_Template
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
        $tags = array("include" => 3, "if" => 7);
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
        echo "<div class=\"team-page-container\">
<!-- Header Begins -->
";
        // line 3
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/header/header-3.html.twig"), "themes/custom/agenchy/templates/system/page/page--team.html.twig", 3)->display($context);
        // line 4
        echo "<!-- Header Ends -->

<!-- Page Header -->
";
        // line 7
        if ((($context["page_headers_style"] ?? null) == "dark")) {
            // line 8
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-2.html.twig"), "themes/custom/agenchy/templates/system/page/page--team.html.twig", 8)->display($context);
        } elseif ((        // line 9
($context["page_headers_style"] ?? null) == "small")) {
            // line 10
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-3.html.twig"), "themes/custom/agenchy/templates/system/page/page--team.html.twig", 10)->display($context);
        } elseif ((        // line 11
($context["page_headers_style"] ?? null) == "center")) {
            // line 12
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-4.html.twig"), "themes/custom/agenchy/templates/system/page/page--team.html.twig", 12)->display($context);
        } elseif ((        // line 13
($context["page_headers_style"] ?? null) == "button")) {
            // line 14
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-5.html.twig"), "themes/custom/agenchy/templates/system/page/page--team.html.twig", 14)->display($context);
        } elseif ((        // line 15
($context["page_headers_style"] ?? null) == "contact")) {
            // line 16
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-6.html.twig"), "themes/custom/agenchy/templates/system/page/page--team.html.twig", 16)->display($context);
        } elseif ((        // line 17
($context["page_headers_style"] ?? null) == "video")) {
            // line 18
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-7.html.twig"), "themes/custom/agenchy/templates/system/page/page--team.html.twig", 18)->display($context);
        } elseif ((        // line 19
($context["page_headers_style"] ?? null) == "image")) {
            // line 20
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-8.html.twig"), "themes/custom/agenchy/templates/system/page/page--team.html.twig", 20)->display($context);
        } elseif ((        // line 21
($context["page_headers_style"] ?? null) == "color")) {
            // line 22
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-9.html.twig"), "themes/custom/agenchy/templates/system/page/page--team.html.twig", 22)->display($context);
        } else {
            // line 24
            echo "\t";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/page header/page-header-1.html.twig"), "themes/custom/agenchy/templates/system/page/page--team.html.twig", 24)->display($context);
        }
        // line 26
        echo "<!-- Page Header -->


<div role=\"main\" class=\"main\">
\t<div class=\"page-default bg-grey typo-dark\">
\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<!-- aside -->
\t\t\t\t\t\t";
        // line 37
        if ($this->getAttribute(($context["page"] ?? null), "team_sidebar", array())) {
            // line 38
            echo "\t\t\t\t\t\t<aside class=\"sidebar\">
\t\t\t\t\t\t\t";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "team_sidebar", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</aside><!-- aside -->
\t\t\t\t\t\t";
        }
        // line 41
        echo "\t
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t\t
\t\t\t\t\t<!-- Page Content -->
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_full_bar", array()), "html", null, true));
        echo "
\t\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
\t\t\t\t\t\t";
        // line 48
        if ($this->getAttribute(($context["page"] ?? null), "team_bottom_content", array())) {
            // line 49
            echo "\t\t\t\t\t\t<div class=\"row team-list\">
\t\t\t\t\t\t\t";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "team_bottom_content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t</div><!-- Column -->
\t\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t</div><!-- Page Default -->
</div><!-- Page Main -->

<!-- Footer -->
";
        // line 60
        $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/footer/footer-7.html.twig"), "themes/custom/agenchy/templates/system/page/page--team.html.twig", 60)->display($context);
        // line 61
        echo "<!-- Footer -->
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/system/page/page--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 61,  158 => 60,  149 => 53,  143 => 50,  140 => 49,  138 => 48,  134 => 47,  130 => 46,  123 => 41,  117 => 39,  114 => 38,  112 => 37,  99 => 26,  95 => 24,  91 => 22,  89 => 21,  86 => 20,  84 => 19,  81 => 18,  79 => 17,  76 => 16,  74 => 15,  71 => 14,  69 => 13,  66 => 12,  64 => 11,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"team-page-container\">
<!-- Header Begins -->
{% include theme_path ~ \"/templates/header/header-3.html.twig\" %}
<!-- Header Ends -->

<!-- Page Header -->
{% if page_headers_style == 'dark' %}
\t{% include theme_path ~ \"/templates/page header/page-header-2.html.twig\" %}
{% elseif page_headers_style == 'small' %}
\t{% include theme_path ~ \"/templates/page header/page-header-3.html.twig\" %}
{% elseif page_headers_style == 'center' %}
\t{% include theme_path ~ \"/templates/page header/page-header-4.html.twig\" %}
{% elseif page_headers_style == 'button' %}
\t{% include theme_path ~ \"/templates/page header/page-header-5.html.twig\" %}
{% elseif page_headers_style == 'contact' %}
\t{% include theme_path ~ \"/templates/page header/page-header-6.html.twig\" %}
{% elseif page_headers_style == 'video' %}
\t{% include theme_path ~ \"/templates/page header/page-header-7.html.twig\" %}
{% elseif page_headers_style == 'image' %}
\t{% include theme_path ~ \"/templates/page header/page-header-8.html.twig\" %}
{% elseif page_headers_style == 'color' %}
\t{% include theme_path ~ \"/templates/page header/page-header-9.html.twig\" %}
{% else %}
\t{% include theme_path ~ \"/templates/page header/page-header-1.html.twig\" %}
{% endif %}
<!-- Page Header -->


<div role=\"main\" class=\"main\">
\t<div class=\"page-default bg-grey typo-dark\">
\t\t<!-- Container -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<!-- aside -->
\t\t\t\t\t\t{% if page.team_sidebar %}
\t\t\t\t\t\t<aside class=\"sidebar\">
\t\t\t\t\t\t\t{{ page.team_sidebar }}
\t\t\t\t\t\t</aside><!-- aside -->
\t\t\t\t\t\t{% endif %}\t
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t\t
\t\t\t\t\t<!-- Page Content -->
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t{{ page.content_full_bar }}
\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t\t{% if page.team_bottom_content %}
\t\t\t\t\t\t<div class=\"row team-list\">
\t\t\t\t\t\t\t{{ page.team_bottom_content }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->
\t</div><!-- Page Default -->
</div><!-- Page Main -->

<!-- Footer -->
{% include theme_path ~ \"/templates/footer/footer-7.html.twig\" %}
<!-- Footer -->
</div>", "themes/custom/agenchy/templates/system/page/page--team.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\page\\page--team.html.twig");
    }
}
