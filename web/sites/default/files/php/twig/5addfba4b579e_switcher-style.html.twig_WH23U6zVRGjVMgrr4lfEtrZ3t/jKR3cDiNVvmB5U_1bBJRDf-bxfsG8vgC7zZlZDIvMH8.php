<?php

/* themes/custom/agenchy/templates/switcher-style.html.twig */
class __TwigTemplate_580b15980ca5a03574c6ecb8d7dd241f8c377446dc2d918f35894fcdef65c6b3 extends Twig_Template
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
        $tags = array("if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
<div id=\"theme-panel\" class=\"theme-panel close-theme-panel\">
\t<!-- Panel Button -->
\t<a class=\"panel-button\"><i class=\"fa uni-gear fa-spin\"></i></a>
\t<!-- Panel Content -->
\t<div class=\"panel-content\">
    \t
\t
\t\t<!-- Options Content -->
\t\t<div class=\"config panel-btns config-layout\">
\t\t\t<h5 class=\"title\">Layout</h5>
\t\t\t<ul class=\"config-options\">
\t\t\t\t<li><a id=\"layout-config-boxed\" href=\"#\">Boxed</a></li>
\t\t\t\t<li><a id=\"layout-config-wide\" href=\"#\">Wide</a></li>
\t\t\t</ul><!-- Options Config -->
\t\t</div><!-- Options Content -->
\t\t
\t\t<!-- Options Content -->
\t\t";
        // line 19
        if ($this->getAttribute(($context["page"] ?? null), "switcher", array())) {
            // line 20
            echo "        \t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "switcher", array()), "html", null, true));
            echo "
    \t";
        }
        // line 21
        echo "<!-- Options Content -->
\t</div><!-- Panel Content -->\t
</div><!-- End Theme Panel Switcher -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/switcher-style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  65 => 20,  63 => 19,  43 => 1,);
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
<div id=\"theme-panel\" class=\"theme-panel close-theme-panel\">
\t<!-- Panel Button -->
\t<a class=\"panel-button\"><i class=\"fa uni-gear fa-spin\"></i></a>
\t<!-- Panel Content -->
\t<div class=\"panel-content\">
    \t
\t
\t\t<!-- Options Content -->
\t\t<div class=\"config panel-btns config-layout\">
\t\t\t<h5 class=\"title\">Layout</h5>
\t\t\t<ul class=\"config-options\">
\t\t\t\t<li><a id=\"layout-config-boxed\" href=\"#\">Boxed</a></li>
\t\t\t\t<li><a id=\"layout-config-wide\" href=\"#\">Wide</a></li>
\t\t\t</ul><!-- Options Config -->
\t\t</div><!-- Options Content -->
\t\t
\t\t<!-- Options Content -->
\t\t{% if page.switcher %}
        \t{{ page.switcher }}
    \t{% endif %}<!-- Options Content -->
\t</div><!-- Panel Content -->\t
</div><!-- End Theme Panel Switcher -->", "themes/custom/agenchy/templates/switcher-style.html.twig", "/opt/lampp/htdocs/mdxhealthd8/web/themes/custom/agenchy/templates/switcher-style.html.twig");
    }
}
