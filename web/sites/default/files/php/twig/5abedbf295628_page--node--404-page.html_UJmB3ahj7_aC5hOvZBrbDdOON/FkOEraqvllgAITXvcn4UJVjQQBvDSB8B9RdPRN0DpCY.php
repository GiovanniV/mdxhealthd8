<?php

/* themes/custom/agenchy/templates/page--node--404-page.html.twig */
class __TwigTemplate_f88eefcaacb604bc1f8686eef2c23d81a1d0b4c734664a5b1e50f09b1b662f5a extends Twig_Template
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
        $tags = array("set" => 1, "if" => 3, "include" => 8);
        $filters = array();
        $functions = array("file_url" => 1);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'include'),
                array(),
                array('file_url')
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
        $context["bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_header_background", array()), "entity", array()), "uri", array()), "value", array())));
        // line 2
        $context["layout_page_404"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_layout_page_404", array()), 0, array()), "value", array());
        // line 3
        if ((($context["layout_page_404"] ?? null) == "")) {
            // line 4
            echo "\t";
            $context["layout_page_404"] = "style1";
        }
        // line 6
        echo "<!-- Theme Panel Switcher -->
";
        // line 7
        if ((($context["disable_switch"] ?? null) == "on")) {
            // line 8
            echo "    ";
            $this->loadTemplate((($context["theme_path"] ?? null) . "/templates/switcher-style.html.twig"), "themes/custom/agenchy/templates/page--node--404-page.html.twig", 8)->display($context);
        }
        // line 9
        echo "<!-- End Theme Panel Switcher -->
";
        // line 10
        if ((($context["layout_page_404"] ?? null) == "style1")) {
            echo "\t\t
\t<!-- Page Main -->
\t<div class=\"main relative full-screen bg-img bg-cover overlay bg-color heavy\" data-background=\"";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bg_img_url"] ?? null), "html", null, true));
            echo "\"  data-stellar-background-ratio=\"0.5\">
\t\t<!-- Section -->
\t\t<div class=\"page-default typo-dark\">
\t\t\t<!-- Container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- Row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-offset-2 col-md-8\">
\t\t\t\t\t\t<ul class=\"template-box box-404 parent-has-overlay\">
\t\t\t\t\t\t\t<!-- Page Template Logo -->
\t\t\t\t\t\t\t<li class=\"logo-wrap\">
\t\t\t\t\t\t\t\t";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t<p class=\"slogan\">";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_slogan_page_404", array()), 0, array()), "value", array()), "html", null, true));
            echo "</p>
\t\t\t\t\t\t\t</li><!-- Page Template Logo -->
\t\t\t\t\t\t\t<!-- Page Template Content -->
\t\t\t\t\t\t\t<li class=\"template-content text-center\">\t\t\t\t
\t\t\t\t\t\t\t\t<h1>";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
\t\t\t\t\t\t\t\t";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_full_bar", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t</li><!-- Page Template Content -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->\t
\t\t</div><!-- Page Default -->
\t</div><!-- Page Main -->
";
        } else {
            // line 39
            echo "\t<!-- Page Main -->
\t<div class=\"main relative\">
\t\t<!-- Section -->
\t\t<div class=\"page-default typo-dark pad-tb-none\">
\t\t\t<!-- Container -->
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<!-- Row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-eq-height pad-none full-screen\">
\t\t\t\t\t\t<ul class=\"template-box vmiddle box-404 type-2 parent-has-overlay shadow-none\">
\t\t\t\t\t\t\t<!-- Page Template Content -->
\t\t\t\t\t\t\t<li class=\"template-content text-center\">
\t\t\t\t\t\t\t\t<h1>";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
\t\t\t\t\t\t\t\t";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_full_bar", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t";
            // line 53
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t</li><!-- Page Template Content -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!-- Column -->
\t                
\t                <div class=\"col-md-6 col-eq-height bg-img bg-cover\" data-background=\"";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bg_img_url"] ?? null), "html", null, true));
            echo "\"  data-stellar-background-ratio=\"0.5\">
\t                </div>
\t                
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->\t
\t\t</div><!-- Page Default -->
\t</div><!-- Page Main -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/page--node--404-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 58,  137 => 53,  133 => 52,  129 => 51,  115 => 39,  103 => 30,  99 => 29,  95 => 28,  88 => 24,  84 => 23,  70 => 12,  65 => 10,  62 => 9,  58 => 8,  56 => 7,  53 => 6,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set bg_img_url = file_url(node.field_header_background.entity.uri.value) %}
{% set layout_page_404 = node.field_layout_page_404.0.value %}
{% if layout_page_404 == '' %}
\t{% set layout_page_404 = 'style1' %}
{% endif %}
<!-- Theme Panel Switcher -->
{% if disable_switch =='on' %}
    {% include theme_path ~ \"/templates/switcher-style.html.twig\" %}
{% endif %}<!-- End Theme Panel Switcher -->
{% if layout_page_404 == 'style1' %}\t\t
\t<!-- Page Main -->
\t<div class=\"main relative full-screen bg-img bg-cover overlay bg-color heavy\" data-background=\"{{ bg_img_url }}\"  data-stellar-background-ratio=\"0.5\">
\t\t<!-- Section -->
\t\t<div class=\"page-default typo-dark\">
\t\t\t<!-- Container -->
\t\t\t<div class=\"container\">
\t\t\t\t<!-- Row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-offset-2 col-md-8\">
\t\t\t\t\t\t<ul class=\"template-box box-404 parent-has-overlay\">
\t\t\t\t\t\t\t<!-- Page Template Logo -->
\t\t\t\t\t\t\t<li class=\"logo-wrap\">
\t\t\t\t\t\t\t\t{{ page.header }}
\t\t\t\t\t\t\t\t<p class=\"slogan\">{{ node.field_slogan_page_404.0.value }}</p>
\t\t\t\t\t\t\t</li><!-- Page Template Logo -->
\t\t\t\t\t\t\t<!-- Page Template Content -->
\t\t\t\t\t\t\t<li class=\"template-content text-center\">\t\t\t\t
\t\t\t\t\t\t\t\t<h1>{{ title }}</h1>
\t\t\t\t\t\t\t\t{{ page.content_full_bar }}
\t\t\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t\t\t</li><!-- Page Template Content -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!-- Column -->
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->\t
\t\t</div><!-- Page Default -->
\t</div><!-- Page Main -->
{% else %}
\t<!-- Page Main -->
\t<div class=\"main relative\">
\t\t<!-- Section -->
\t\t<div class=\"page-default typo-dark pad-tb-none\">
\t\t\t<!-- Container -->
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<!-- Row -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-eq-height pad-none full-screen\">
\t\t\t\t\t\t<ul class=\"template-box vmiddle box-404 type-2 parent-has-overlay shadow-none\">
\t\t\t\t\t\t\t<!-- Page Template Content -->
\t\t\t\t\t\t\t<li class=\"template-content text-center\">
\t\t\t\t\t\t\t\t<h1>{{ title }}</h1>
\t\t\t\t\t\t\t\t{{ page.content_full_bar }}
\t\t\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t\t\t</li><!-- Page Template Content -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div><!-- Column -->
\t                
\t                <div class=\"col-md-6 col-eq-height bg-img bg-cover\" data-background=\"{{ bg_img_url }}\"  data-stellar-background-ratio=\"0.5\">
\t                </div>
\t                
\t\t\t\t</div><!-- Row -->
\t\t\t</div><!-- Container -->\t
\t\t</div><!-- Page Default -->
\t</div><!-- Page Main -->
{% endif %}", "themes/custom/agenchy/templates/page--node--404-page.html.twig", "C:\\xamppnew\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\page--node--404-page.html.twig");
    }
}
