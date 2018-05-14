<?php

/* themes/custom/agenchy/templates/header/header-3.html.twig */
class __TwigTemplate_188ff7483d44a8462c8862a8d521f95c485493ce813017473ce8d83a5e74fe97 extends Twig_Template
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
        $tags = array("if" => 7);
        $filters = array("t" => 8);
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
        echo "<header id=\"header\">
\t<div class=\"container\">
\t\t<div class=\"logo\">
            ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
        </div>
\t\t";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
        echo "
\t\t";
        // line 7
        if (($context["header_social_networks"] ?? null)) {
            // line 8
            echo "\t\t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t(($context["header_social_networks"] ?? null))));
            echo "
\t\t";
        }
        // line 10
        echo "\t\t<nav>
\t\t\t";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_middle", array()), "html", null, true));
        echo "
\t\t</nav>
\t\t<button class=\"btn btn-responsive-nav btn-inverse\" data-toggle=\"collapse\" data-target=\".nav-main-collapse\">
\t\t\t<i class=\"fa fa-bars\"></i>
\t\t</button>
\t</div>
\t<div class=\"navbar-collapse nav-main-collapse collapse\">
\t\t<div class=\"container mega-menu-wide-container\">
\t\t\t";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_menu", array()), "html", null, true));
        echo "
\t\t</div>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/header/header-3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  68 => 11,  65 => 10,  59 => 8,  57 => 7,  53 => 6,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\">
\t<div class=\"container\">
\t\t<div class=\"logo\">
            {{ page.header }}
        </div>
\t\t{{ page.search }}
\t\t{% if header_social_networks %}
\t\t\t{{ header_social_networks|t }}
\t\t{% endif %}
\t\t<nav>
\t\t\t{{ page.header_middle }}
\t\t</nav>
\t\t<button class=\"btn btn-responsive-nav btn-inverse\" data-toggle=\"collapse\" data-target=\".nav-main-collapse\">
\t\t\t<i class=\"fa fa-bars\"></i>
\t\t</button>
\t</div>
\t<div class=\"navbar-collapse nav-main-collapse collapse\">
\t\t<div class=\"container mega-menu-wide-container\">
\t\t\t{{ page.main_menu }}
\t\t</div>
\t</div>
</header>", "themes/custom/agenchy/templates/header/header-3.html.twig", "C:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\header\\header-3.html.twig");
    }
}
