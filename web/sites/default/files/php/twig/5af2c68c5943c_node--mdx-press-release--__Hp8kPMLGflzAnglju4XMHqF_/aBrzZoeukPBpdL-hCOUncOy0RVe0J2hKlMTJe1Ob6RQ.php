<?php

/* themes/custom/agenchy/templates/system/node/node--mdx-press-release--list.html.twig */
class __TwigTemplate_5f9df235dd1b0b69c1c543b3e44c56b870e426a5b50b318f6313c08ea38f7d5c extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "<!-- Blog Column -->
<div class=\"press-release-list blog-list-wrap margin-top-30\">
\t<!-- Blog Wrapper -->
\t<div class=\"blog-wrap\">
\t\t";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_pr_image", array()), "html", null, true));
        echo "
\t\t<div class=\"blog-details\">
\t\t\t<h4><a href=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url_class"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "</a></h4>
\t\t\t<a class=\"btn-link ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url_class"] ?? null), "html", null, true));
        echo "\" href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\">Read More</a>
\t\t</div><!-- Blog Detail Wrapper -->
\t</div><!-- Blog Detail Column -->
</div><!-- Column -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/system/node/node--mdx-press-release--list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  54 => 7,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Blog Column -->
<div class=\"press-release-list blog-list-wrap margin-top-30\">
\t<!-- Blog Wrapper -->
\t<div class=\"blog-wrap\">
\t\t{{ content.field_pr_image }}
\t\t<div class=\"blog-details\">
\t\t\t<h4><a href=\"{{ url }}\" class=\"{{ url_class }}\">{{ label }}</a></h4>
\t\t\t<a class=\"btn-link {{ url_class}}\" href=\"{{ url }}\">Read More</a>
\t\t</div><!-- Blog Detail Wrapper -->
\t</div><!-- Blog Detail Column -->
</div><!-- Column -->", "themes/custom/agenchy/templates/system/node/node--mdx-press-release--list.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\node\\node--mdx-press-release--list.html.twig");
    }
}
