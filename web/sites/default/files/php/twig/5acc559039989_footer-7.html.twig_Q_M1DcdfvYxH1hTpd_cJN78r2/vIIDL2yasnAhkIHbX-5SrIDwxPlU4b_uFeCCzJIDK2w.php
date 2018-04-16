<?php

/* themes/custom/agenchy/templates/footer/footer-7.html.twig */
class __TwigTemplate_c76865b9ec1fd89e445ecbb7ac24bc5ea53d767a5d257fa23ecb24d1b156b448 extends Twig_Template
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
        $tags = array("if" => 27);
        $filters = array("t" => 28);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        echo "<!-- Footer -->
<footer id=\"footer\" class=\"footer-7 relative\">
\t<div class=\"main-footer widgets-dark typo-light\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Widget Column -->
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_7_column_1", array()), "html", null, true));
        echo "
\t\t\t\t</div><!-- Column -->
\t\t\t\t
\t\t\t\t<!-- Widget Column -->
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_7_column_2", array()), "html", null, true));
        echo "
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->\t\t
\t</div><!-- Main Footer -->
\t
\t<!-- Footer Copyright -->
\t<div class=\"footer-copyright typo-light\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Copy Right Logo -->
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom_logo", array()), "html", null, true));
        echo "
\t\t\t\t<!-- Copy Right Logo -->
\t\t\t\t<!-- Copy Right Content -->
\t\t\t\t";
        // line 27
        if (($context["copyright_text"] ?? null)) {
            // line 28
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["copyright_text"] ?? null))));
            echo "
\t\t\t\t";
        }
        // line 29
        echo "<!-- Copy Right Content -->
\t\t\t\t<!-- Copy Right Content -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<nav class=\"sm-menu\">
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "menu_footer", array()), "html", null, true));
        echo "
\t\t\t\t\t</nav><!-- Nav -->
\t\t\t\t</div><!-- Copy Right Content -->
\t\t\t</div><!-- Footer Copyright -->
\t\t</div><!-- Footer Copyright container -->
\t</div><!-- Footer Copyright -->
</footer>
<!-- Footer -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/footer/footer-7.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  88 => 29,  82 => 28,  80 => 27,  74 => 24,  60 => 13,  52 => 8,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Footer -->
<footer id=\"footer\" class=\"footer-7 relative\">
\t<div class=\"main-footer widgets-dark typo-light\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Widget Column -->
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t{{ page.footer_7_column_1 }}
\t\t\t\t</div><!-- Column -->
\t\t\t\t
\t\t\t\t<!-- Widget Column -->
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t{{ page.footer_7_column_2 }}
\t\t\t\t</div><!-- Column -->
\t\t\t</div><!-- Row -->
\t\t</div><!-- Container -->\t\t
\t</div><!-- Main Footer -->
\t
\t<!-- Footer Copyright -->
\t<div class=\"footer-copyright typo-light\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- Copy Right Logo -->
\t\t\t\t{{ page.footer_bottom_logo }}
\t\t\t\t<!-- Copy Right Logo -->
\t\t\t\t<!-- Copy Right Content -->
\t\t\t\t{% if copyright_text %}
\t\t\t\t\t{{ copyright_text|t }}
\t\t\t\t{% endif %}<!-- Copy Right Content -->
\t\t\t\t<!-- Copy Right Content -->
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<nav class=\"sm-menu\">
\t\t\t\t\t\t{{ page.menu_footer }}
\t\t\t\t\t</nav><!-- Nav -->
\t\t\t\t</div><!-- Copy Right Content -->
\t\t\t</div><!-- Footer Copyright -->
\t\t</div><!-- Footer Copyright container -->
\t</div><!-- Footer Copyright -->
</footer>
<!-- Footer -->", "themes/custom/agenchy/templates/footer/footer-7.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\footer\\footer-7.html.twig");
    }
}