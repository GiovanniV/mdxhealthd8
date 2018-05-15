<?php

/* {# inline_template_start #}<!-- Container -->
	<div class="container">
		<div class="row team-list">
			<!-- Member Image Column -->
			<div class="col-md-4 static">
				<div class="member-img-wrap">
					<img class="img-responsive" alt="{{ title }}" src="{{ field_avatar }}" width="100%" >
				</div><!-- Member Image Wrapper -->
			</div><!-- Coloumn -->
			<!-- Coloumn -->
			<div class="col-md-8">
				<div class="member-detail-wrap">
					<h4 class="member-name"><a href="{{ path }}">{{ title }}</a></h4>
					<span class="position">{{ field_job }}</span>
					<p>{{ field_short_description }}</p>	
				</div><!-- Member Detail Wrapper -->
			</div><!-- Member Detail Column -->
		</div><!-- Row -->
	</div><!-- Container -->
 */
class __TwigTemplate_ac6b3d2c53a902a920d03b753bb9884b4bf78fd2bd0bfad7480049dbe0ed9fe5 extends Twig_Template
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
        echo "<!-- Container -->
\t<div class=\"container\">
\t\t<div class=\"row team-list\">
\t\t\t<!-- Member Image Column -->
\t\t\t<div class=\"col-md-4 static\">
\t\t\t\t<div class=\"member-img-wrap\">
\t\t\t\t\t<img class=\"img-responsive\" alt=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "\" src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_avatar"] ?? null), "html", null, true));
        echo "\" width=\"100%\" >
\t\t\t\t</div><!-- Member Image Wrapper -->
\t\t\t</div><!-- Coloumn -->
\t\t\t<!-- Coloumn -->
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"member-detail-wrap\">
\t\t\t\t\t<h4 class=\"member-name\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a></h4>
\t\t\t\t\t<span class=\"position\">";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_job"] ?? null), "html", null, true));
        echo "</span>
\t\t\t\t\t<p>";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_short_description"] ?? null), "html", null, true));
        echo "</p>\t
\t\t\t\t</div><!-- Member Detail Wrapper -->
\t\t\t</div><!-- Member Detail Column -->
\t\t</div><!-- Row -->
\t</div><!-- Container -->
";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<!-- Container -->
\t<div class=\"container\">
\t\t<div class=\"row team-list\">
\t\t\t<!-- Member Image Column -->
\t\t\t<div class=\"col-md-4 static\">
\t\t\t\t<div class=\"member-img-wrap\">
\t\t\t\t\t<img class=\"img-responsive\" alt=\"{{ title }}\" src=\"{{ field_avatar }}\" width=\"100%\" >
\t\t\t\t</div><!-- Member Image Wrapper -->
\t\t\t</div><!-- Coloumn -->
\t\t\t<!-- Coloumn -->
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"member-detail-wrap\">
\t\t\t\t\t<h4 class=\"member-name\"><a href=\"{{ path }}\">{{ title }}</a></h4>
\t\t\t\t\t<span class=\"position\">{{ field_job }}</span>
\t\t\t\t\t<p>{{ field_short_description }}</p>\t
\t\t\t\t</div><!-- Member Detail Wrapper -->
\t\t\t</div><!-- Member Detail Column -->
\t\t</div><!-- Row -->
\t</div><!-- Container -->
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 15,  87 => 14,  81 => 13,  70 => 7,  62 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<!-- Container -->
\t<div class=\"container\">
\t\t<div class=\"row team-list\">
\t\t\t<!-- Member Image Column -->
\t\t\t<div class=\"col-md-4 static\">
\t\t\t\t<div class=\"member-img-wrap\">
\t\t\t\t\t<img class=\"img-responsive\" alt=\"{{ title }}\" src=\"{{ field_avatar }}\" width=\"100%\" >
\t\t\t\t</div><!-- Member Image Wrapper -->
\t\t\t</div><!-- Coloumn -->
\t\t\t<!-- Coloumn -->
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"member-detail-wrap\">
\t\t\t\t\t<h4 class=\"member-name\"><a href=\"{{ path }}\">{{ title }}</a></h4>
\t\t\t\t\t<span class=\"position\">{{ field_job }}</span>
\t\t\t\t\t<p>{{ field_short_description }}</p>\t
\t\t\t\t</div><!-- Member Detail Wrapper -->
\t\t\t</div><!-- Member Detail Column -->
\t\t</div><!-- Row -->
\t</div><!-- Container -->
", "{# inline_template_start #}<!-- Container -->
\t<div class=\"container\">
\t\t<div class=\"row team-list\">
\t\t\t<!-- Member Image Column -->
\t\t\t<div class=\"col-md-4 static\">
\t\t\t\t<div class=\"member-img-wrap\">
\t\t\t\t\t<img class=\"img-responsive\" alt=\"{{ title }}\" src=\"{{ field_avatar }}\" width=\"100%\" >
\t\t\t\t</div><!-- Member Image Wrapper -->
\t\t\t</div><!-- Coloumn -->
\t\t\t<!-- Coloumn -->
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"member-detail-wrap\">
\t\t\t\t\t<h4 class=\"member-name\"><a href=\"{{ path }}\">{{ title }}</a></h4>
\t\t\t\t\t<span class=\"position\">{{ field_job }}</span>
\t\t\t\t\t<p>{{ field_short_description }}</p>\t
\t\t\t\t</div><!-- Member Detail Wrapper -->
\t\t\t</div><!-- Member Detail Column -->
\t\t</div><!-- Row -->
\t</div><!-- Container -->
", "");
    }
}
