<?php

/* {# inline_template_start #}<!-- Blog Column -->
<div class="press-release-list blog-list-wrap margin-top-30">
	<!-- Blog Wrapper -->
	<div class="blog-wrap">
{{ field_pr_image }}
			<div class="blog-details">
				<h4><a href="{{ view_node }}">{{ title }}</a></h4>
				<a class="btn-link" href="{{ view_node  }}">Read More</a>
			</div><!-- Blog Detail Wrapper -->
		</div><!-- Blog Detail Column -->
</div><!-- Column --> */
class __TwigTemplate_eece52adde4e35707dcbdf078dbd34fd8ad5f00fa44599e3d6ac1f3d1340a596 extends Twig_Template
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
";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_pr_image"] ?? null), "html", null, true));
        echo "
\t\t\t<div class=\"blog-details\">
\t\t\t\t<h4><a href=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a></h4>
\t\t\t\t<a class=\"btn-link\" href=\"";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\">Read More</a>
\t\t\t</div><!-- Blog Detail Wrapper -->
\t\t</div><!-- Blog Detail Column -->
</div><!-- Column -->";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<!-- Blog Column -->
<div class=\"press-release-list blog-list-wrap margin-top-30\">
\t<!-- Blog Wrapper -->
\t<div class=\"blog-wrap\">
{{ field_pr_image }}
\t\t\t<div class=\"blog-details\">
\t\t\t\t<h4><a href=\"{{ view_node }}\">{{ title }}</a></h4>
\t\t\t\t<a class=\"btn-link\" href=\"{{ view_node  }}\">Read More</a>
\t\t\t</div><!-- Blog Detail Wrapper -->
\t\t</div><!-- Blog Detail Column -->
</div><!-- Column -->";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  64 => 7,  59 => 5,  53 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<!-- Blog Column -->
<div class=\"press-release-list blog-list-wrap margin-top-30\">
\t<!-- Blog Wrapper -->
\t<div class=\"blog-wrap\">
{{ field_pr_image }}
\t\t\t<div class=\"blog-details\">
\t\t\t\t<h4><a href=\"{{ view_node }}\">{{ title }}</a></h4>
\t\t\t\t<a class=\"btn-link\" href=\"{{ view_node  }}\">Read More</a>
\t\t\t</div><!-- Blog Detail Wrapper -->
\t\t</div><!-- Blog Detail Column -->
</div><!-- Column -->", "{# inline_template_start #}<!-- Blog Column -->
<div class=\"press-release-list blog-list-wrap margin-top-30\">
\t<!-- Blog Wrapper -->
\t<div class=\"blog-wrap\">
{{ field_pr_image }}
\t\t\t<div class=\"blog-details\">
\t\t\t\t<h4><a href=\"{{ view_node }}\">{{ title }}</a></h4>
\t\t\t\t<a class=\"btn-link\" href=\"{{ view_node  }}\">Read More</a>
\t\t\t</div><!-- Blog Detail Wrapper -->
\t\t</div><!-- Blog Detail Column -->
</div><!-- Column -->", "");
    }
}
