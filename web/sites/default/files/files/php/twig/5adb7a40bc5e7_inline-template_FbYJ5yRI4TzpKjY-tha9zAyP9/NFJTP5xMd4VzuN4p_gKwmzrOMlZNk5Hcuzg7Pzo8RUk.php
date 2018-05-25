<?php

/* {# inline_template_start #}<div class="col-sm-6">
	<!-- Member Wrap -->
	<div class="member-wrap">
		<!-- Member Image Wrap -->
		<div class="member-img-wrap">
			<img width="600" height="500" src="{{ field_avatar }}" alt="{{ title }}" class="img-responsive">
		</div>
		<!-- Member detail Wrapper -->
		<div class="member-detail-wrap bg-grey">
			<h4 class="member-name"><a href="{{ path }}">{{ title }}</a></h4>
			<span>{{ field_job }}</span>
			<ul class="social-icons">
				<li class="facebook"><a href="{{ field_facebook }}" target="_blank" title="Facebook">Facebook</a></li>
				<li class="twitter"><a href="{{ field_twitter }}" target="_blank" title="Twitter">Twitter</a></li>
				<li class="linkedin"><a href="{{ field_linkedin }}" target="_blank" title="Linkedin">Linkedin</a></li>
				<li class="mail"><a href="{{ field_mail }}" target="_blank" title="mail">mail</a></li>
				<li class="googleplus"><a href="{{ field_googleplus }}" target="_blank" title="googleplus">googleplus</a></li>
			</ul><!-- Member Social -->
		</div><!-- Member detail Wrapper -->
	</div><!-- Member Wrap -->
</div><!-- Column --> */
class __TwigTemplate_09ea1abd01543368c4075e05814a7ddb55afec332821c2c6aca053bcf4728852 extends Twig_Template
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
        echo "<div class=\"col-sm-6\">
\t<!-- Member Wrap -->
\t<div class=\"member-wrap\">
\t\t<!-- Member Image Wrap -->
\t\t<div class=\"member-img-wrap\">
\t\t\t<img width=\"600\" height=\"500\" src=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_avatar"] ?? null), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "\" class=\"img-responsive\">
\t\t</div>
\t\t<!-- Member detail Wrapper -->
\t\t<div class=\"member-detail-wrap bg-grey\">
\t\t\t<h4 class=\"member-name\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a></h4>
\t\t\t<span>";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_job"] ?? null), "html", null, true));
        echo "</span>
\t\t\t<ul class=\"social-icons\">
\t\t\t\t<li class=\"facebook\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_facebook"] ?? null), "html", null, true));
        echo "\" target=\"_blank\" title=\"Facebook\">Facebook</a></li>
\t\t\t\t<li class=\"twitter\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_twitter"] ?? null), "html", null, true));
        echo "\" target=\"_blank\" title=\"Twitter\">Twitter</a></li>
\t\t\t\t<li class=\"linkedin\"><a href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_linkedin"] ?? null), "html", null, true));
        echo "\" target=\"_blank\" title=\"Linkedin\">Linkedin</a></li>
\t\t\t\t<li class=\"mail\"><a href=\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mail"] ?? null), "html", null, true));
        echo "\" target=\"_blank\" title=\"mail\">mail</a></li>
\t\t\t\t<li class=\"googleplus\"><a href=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_googleplus"] ?? null), "html", null, true));
        echo "\" target=\"_blank\" title=\"googleplus\">googleplus</a></li>
\t\t\t</ul><!-- Member Social -->
\t\t</div><!-- Member detail Wrapper -->
\t</div><!-- Member Wrap -->
</div><!-- Column -->";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-sm-6\">
\t<!-- Member Wrap -->
\t<div class=\"member-wrap\">
\t\t<!-- Member Image Wrap -->
\t\t<div class=\"member-img-wrap\">
\t\t\t<img width=\"600\" height=\"500\" src=\"{{ field_avatar }}\" alt=\"{{ title }}\" class=\"img-responsive\">
\t\t</div>
\t\t<!-- Member detail Wrapper -->
\t\t<div class=\"member-detail-wrap bg-grey\">
\t\t\t<h4 class=\"member-name\"><a href=\"{{ path }}\">{{ title }}</a></h4>
\t\t\t<span>{{ field_job }}</span>
\t\t\t<ul class=\"social-icons\">
\t\t\t\t<li class=\"facebook\"><a href=\"{{ field_facebook }}\" target=\"_blank\" title=\"Facebook\">Facebook</a></li>
\t\t\t\t<li class=\"twitter\"><a href=\"{{ field_twitter }}\" target=\"_blank\" title=\"Twitter\">Twitter</a></li>
\t\t\t\t<li class=\"linkedin\"><a href=\"{{ field_linkedin }}\" target=\"_blank\" title=\"Linkedin\">Linkedin</a></li>
\t\t\t\t<li class=\"mail\"><a href=\"{{ field_mail }}\" target=\"_blank\" title=\"mail\">mail</a></li>
\t\t\t\t<li class=\"googleplus\"><a href=\"{{ field_googleplus }}\" target=\"_blank\" title=\"googleplus\">googleplus</a></li>
\t\t\t</ul><!-- Member Social -->
\t\t</div><!-- Member detail Wrapper -->
\t</div><!-- Member Wrap -->
</div><!-- Column -->";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 17,  102 => 16,  98 => 15,  94 => 14,  90 => 13,  85 => 11,  79 => 10,  70 => 6,  63 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<div class=\"col-sm-6\">
\t<!-- Member Wrap -->
\t<div class=\"member-wrap\">
\t\t<!-- Member Image Wrap -->
\t\t<div class=\"member-img-wrap\">
\t\t\t<img width=\"600\" height=\"500\" src=\"{{ field_avatar }}\" alt=\"{{ title }}\" class=\"img-responsive\">
\t\t</div>
\t\t<!-- Member detail Wrapper -->
\t\t<div class=\"member-detail-wrap bg-grey\">
\t\t\t<h4 class=\"member-name\"><a href=\"{{ path }}\">{{ title }}</a></h4>
\t\t\t<span>{{ field_job }}</span>
\t\t\t<ul class=\"social-icons\">
\t\t\t\t<li class=\"facebook\"><a href=\"{{ field_facebook }}\" target=\"_blank\" title=\"Facebook\">Facebook</a></li>
\t\t\t\t<li class=\"twitter\"><a href=\"{{ field_twitter }}\" target=\"_blank\" title=\"Twitter\">Twitter</a></li>
\t\t\t\t<li class=\"linkedin\"><a href=\"{{ field_linkedin }}\" target=\"_blank\" title=\"Linkedin\">Linkedin</a></li>
\t\t\t\t<li class=\"mail\"><a href=\"{{ field_mail }}\" target=\"_blank\" title=\"mail\">mail</a></li>
\t\t\t\t<li class=\"googleplus\"><a href=\"{{ field_googleplus }}\" target=\"_blank\" title=\"googleplus\">googleplus</a></li>
\t\t\t</ul><!-- Member Social -->
\t\t</div><!-- Member detail Wrapper -->
\t</div><!-- Member Wrap -->
</div><!-- Column -->", "{# inline_template_start #}<div class=\"col-sm-6\">
\t<!-- Member Wrap -->
\t<div class=\"member-wrap\">
\t\t<!-- Member Image Wrap -->
\t\t<div class=\"member-img-wrap\">
\t\t\t<img width=\"600\" height=\"500\" src=\"{{ field_avatar }}\" alt=\"{{ title }}\" class=\"img-responsive\">
\t\t</div>
\t\t<!-- Member detail Wrapper -->
\t\t<div class=\"member-detail-wrap bg-grey\">
\t\t\t<h4 class=\"member-name\"><a href=\"{{ path }}\">{{ title }}</a></h4>
\t\t\t<span>{{ field_job }}</span>
\t\t\t<ul class=\"social-icons\">
\t\t\t\t<li class=\"facebook\"><a href=\"{{ field_facebook }}\" target=\"_blank\" title=\"Facebook\">Facebook</a></li>
\t\t\t\t<li class=\"twitter\"><a href=\"{{ field_twitter }}\" target=\"_blank\" title=\"Twitter\">Twitter</a></li>
\t\t\t\t<li class=\"linkedin\"><a href=\"{{ field_linkedin }}\" target=\"_blank\" title=\"Linkedin\">Linkedin</a></li>
\t\t\t\t<li class=\"mail\"><a href=\"{{ field_mail }}\" target=\"_blank\" title=\"mail\">mail</a></li>
\t\t\t\t<li class=\"googleplus\"><a href=\"{{ field_googleplus }}\" target=\"_blank\" title=\"googleplus\">googleplus</a></li>
\t\t\t</ul><!-- Member Social -->
\t\t</div><!-- Member detail Wrapper -->
\t</div><!-- Member Wrap -->
</div><!-- Column -->", "");
    }
}
