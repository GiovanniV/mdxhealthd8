<?php

/* {# inline_template_start #}<!-- Item Ends -->
<div class="item">
	<!-- Blog Grid Wrapper -->
	<div class="blog-wrap">
		<!-- Blog Image Wrapper -->
		<div class="blog-img-wrap">
			{{ field_pr_image }}
			<h6 class="post-type bg-pink">&nbsp;<i class="fa fa-microphone"></i>&nbsp;</h6>
		</div><!-- Blog Wraper -->
		<!-- Blog Detail Wrapper -->
		<div class="blog-details">
			<h4><a href="{{ view_node }}">{{ title }}</a></h4>
			<ul class="blog-meta">
				<li><i class="fa fa-calendar-o"></i>{{ created }}</li>
				<li><i class="fa fa-comments"></i> {{ comment_count }}</li>
			</ul><!-- Blog Meta -->>
			<a class="btn" href="{{ view_node }}">Read More</a>
		</div><!-- Blog Detail Wrapper -->
	</div><!-- Blog Wrapper -->
</div><!-- Item Ends --> */
class __TwigTemplate_e44020d3f77fb8567f6078fa530362fe685cbbd0b228eb8dcb8d2956ada27f2b extends Twig_Template
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
        echo "<!-- Item Ends -->
<div class=\"item\">
\t<!-- Blog Grid Wrapper -->
\t<div class=\"blog-wrap\">
\t\t<!-- Blog Image Wrapper -->
\t\t<div class=\"blog-img-wrap\">
\t\t\t";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_pr_image"] ?? null), "html", null, true));
        echo "
\t\t\t<h6 class=\"post-type bg-pink\">&nbsp;<i class=\"fa fa-microphone\"></i>&nbsp;</h6>
\t\t</div><!-- Blog Wraper -->
\t\t<!-- Blog Detail Wrapper -->
\t\t<div class=\"blog-details\">
\t\t\t<h4><a href=\"";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a></h4>
\t\t\t<ul class=\"blog-meta\">
\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo "</li>
\t\t\t\t<li><i class=\"fa fa-comments\"></i> ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_count"] ?? null), "html", null, true));
        echo "</li>
\t\t\t</ul><!-- Blog Meta -->>
\t\t\t<a class=\"btn\" href=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\">Read More</a>
\t\t</div><!-- Blog Detail Wrapper -->
\t</div><!-- Blog Wrapper -->
</div><!-- Item Ends -->";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<!-- Item Ends -->
<div class=\"item\">
\t<!-- Blog Grid Wrapper -->
\t<div class=\"blog-wrap\">
\t\t<!-- Blog Image Wrapper -->
\t\t<div class=\"blog-img-wrap\">
\t\t\t{{ field_pr_image }}
\t\t\t<h6 class=\"post-type bg-pink\">&nbsp;<i class=\"fa fa-microphone\"></i>&nbsp;</h6>
\t\t</div><!-- Blog Wraper -->
\t\t<!-- Blog Detail Wrapper -->
\t\t<div class=\"blog-details\">
\t\t\t<h4><a href=\"{{ view_node }}\">{{ title }}</a></h4>
\t\t\t<ul class=\"blog-meta\">
\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i>{{ created }}</li>
\t\t\t\t<li><i class=\"fa fa-comments\"></i> {{ comment_count }}</li>
\t\t\t</ul><!-- Blog Meta -->>
\t\t\t<a class=\"btn\" href=\"{{ view_node }}\">Read More</a>
\t\t</div><!-- Blog Detail Wrapper -->
\t</div><!-- Blog Wrapper -->
</div><!-- Item Ends -->";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 17,  89 => 15,  85 => 14,  78 => 12,  70 => 7,  62 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<!-- Item Ends -->
<div class=\"item\">
\t<!-- Blog Grid Wrapper -->
\t<div class=\"blog-wrap\">
\t\t<!-- Blog Image Wrapper -->
\t\t<div class=\"blog-img-wrap\">
\t\t\t{{ field_pr_image }}
\t\t\t<h6 class=\"post-type bg-pink\">&nbsp;<i class=\"fa fa-microphone\"></i>&nbsp;</h6>
\t\t</div><!-- Blog Wraper -->
\t\t<!-- Blog Detail Wrapper -->
\t\t<div class=\"blog-details\">
\t\t\t<h4><a href=\"{{ view_node }}\">{{ title }}</a></h4>
\t\t\t<ul class=\"blog-meta\">
\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i>{{ created }}</li>
\t\t\t\t<li><i class=\"fa fa-comments\"></i> {{ comment_count }}</li>
\t\t\t</ul><!-- Blog Meta -->>
\t\t\t<a class=\"btn\" href=\"{{ view_node }}\">Read More</a>
\t\t</div><!-- Blog Detail Wrapper -->
\t</div><!-- Blog Wrapper -->
</div><!-- Item Ends -->", "{# inline_template_start #}<!-- Item Ends -->
<div class=\"item\">
\t<!-- Blog Grid Wrapper -->
\t<div class=\"blog-wrap\">
\t\t<!-- Blog Image Wrapper -->
\t\t<div class=\"blog-img-wrap\">
\t\t\t{{ field_pr_image }}
\t\t\t<h6 class=\"post-type bg-pink\">&nbsp;<i class=\"fa fa-microphone\"></i>&nbsp;</h6>
\t\t</div><!-- Blog Wraper -->
\t\t<!-- Blog Detail Wrapper -->
\t\t<div class=\"blog-details\">
\t\t\t<h4><a href=\"{{ view_node }}\">{{ title }}</a></h4>
\t\t\t<ul class=\"blog-meta\">
\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i>{{ created }}</li>
\t\t\t\t<li><i class=\"fa fa-comments\"></i> {{ comment_count }}</li>
\t\t\t</ul><!-- Blog Meta -->>
\t\t\t<a class=\"btn\" href=\"{{ view_node }}\">Read More</a>
\t\t</div><!-- Blog Detail Wrapper -->
\t</div><!-- Blog Wrapper -->
</div><!-- Item Ends -->", "");
    }
}
