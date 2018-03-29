<?php

/* {# inline_template_start #}<!-- Blog Column -->
<li class="col-xs-12 blog-list-wrap">
	<!-- Blog Wrapper -->
	<div class="row blog-wrap">
		<!-- Blog Detail Wrapper -->
		<div class="col-sm-12">
			<div class="blog-details">
				<h4><a href="{{ view_node }}">{{ title }}</a></h4>
				<ul class="blog-meta">
					<li><i class="fa fa-calendar-o"></i>{{ press_release_date|date('M d') }}</li>
					<li><i class="fa fa-comments"></i> {{ comment_c }}</li>
					<li><i class="fa fa-eye"></i> {{ getNodeViewCount(nid) }}</li>
				</ul><!-- Blog Meta -->
				<p>{{ body }}</p>
				<a class="btn" href="{{ view_node }}">Read More</a>
			</div><!-- Blog Detail Wrapper -->
		</div><!-- Blog Detail Column -->
	</div><!-- Blog Wrapper -->
	<!-- Divider -->
	<hr class="md">
</li><!-- Column --> */
class __TwigTemplate_2800d7481e1c22824cea006cd60c18dd7b87f7f921bcb1b579ddac8db489dc7a extends Twig_Template
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
        $filters = array("date" => 10);
        $functions = array("getNodeViewCount" => 12);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('date'),
                array('getNodeViewCount')
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
<li class=\"col-xs-12 blog-list-wrap\">
\t<!-- Blog Wrapper -->
\t<div class=\"row blog-wrap\">
\t\t<!-- Blog Detail Wrapper -->
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"blog-details\">
\t\t\t\t<h4><a href=\"";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a></h4>
\t\t\t\t<ul class=\"blog-meta\">
\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i>";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, ($context["press_release_date"] ?? null), "M d"), "html", null, true));
        echo "</li>
\t\t\t\t\t<li><i class=\"fa fa-comments\"></i> ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_c"] ?? null), "html", null, true));
        echo "</li>
\t\t\t\t\t<li><i class=\"fa fa-eye\"></i> ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\nvs_func\Twig\FuncExtension')->getNodeViewCount(($context["nid"] ?? null))));
        echo "</li>
\t\t\t\t</ul><!-- Blog Meta -->
\t\t\t\t<p>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</p>
\t\t\t\t<a class=\"btn\" href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\">Read More</a>
\t\t\t</div><!-- Blog Detail Wrapper -->
\t\t</div><!-- Blog Detail Column -->
\t</div><!-- Blog Wrapper -->
\t<!-- Divider -->
\t<hr class=\"md\">
</li><!-- Column -->";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<!-- Blog Column -->
<li class=\"col-xs-12 blog-list-wrap\">
\t<!-- Blog Wrapper -->
\t<div class=\"row blog-wrap\">
\t\t<!-- Blog Detail Wrapper -->
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"blog-details\">
\t\t\t\t<h4><a href=\"{{ view_node }}\">{{ title }}</a></h4>
\t\t\t\t<ul class=\"blog-meta\">
\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i>{{ press_release_date|date('M d') }}</li>
\t\t\t\t\t<li><i class=\"fa fa-comments\"></i> {{ comment_c }}</li>
\t\t\t\t\t<li><i class=\"fa fa-eye\"></i> {{ getNodeViewCount(nid) }}</li>
\t\t\t\t</ul><!-- Blog Meta -->
\t\t\t\t<p>{{ body }}</p>
\t\t\t\t<a class=\"btn\" href=\"{{ view_node }}\">Read More</a>
\t\t\t</div><!-- Blog Detail Wrapper -->
\t\t</div><!-- Blog Detail Column -->
\t</div><!-- Blog Wrapper -->
\t<!-- Divider -->
\t<hr class=\"md\">
</li><!-- Column -->";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 15,  92 => 14,  87 => 12,  83 => 11,  79 => 10,  72 => 8,  63 => 1,);
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
<li class=\"col-xs-12 blog-list-wrap\">
\t<!-- Blog Wrapper -->
\t<div class=\"row blog-wrap\">
\t\t<!-- Blog Detail Wrapper -->
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"blog-details\">
\t\t\t\t<h4><a href=\"{{ view_node }}\">{{ title }}</a></h4>
\t\t\t\t<ul class=\"blog-meta\">
\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i>{{ press_release_date|date('M d') }}</li>
\t\t\t\t\t<li><i class=\"fa fa-comments\"></i> {{ comment_c }}</li>
\t\t\t\t\t<li><i class=\"fa fa-eye\"></i> {{ getNodeViewCount(nid) }}</li>
\t\t\t\t</ul><!-- Blog Meta -->
\t\t\t\t<p>{{ body }}</p>
\t\t\t\t<a class=\"btn\" href=\"{{ view_node }}\">Read More</a>
\t\t\t</div><!-- Blog Detail Wrapper -->
\t\t</div><!-- Blog Detail Column -->
\t</div><!-- Blog Wrapper -->
\t<!-- Divider -->
\t<hr class=\"md\">
</li><!-- Column -->", "{# inline_template_start #}<!-- Blog Column -->
<li class=\"col-xs-12 blog-list-wrap\">
\t<!-- Blog Wrapper -->
\t<div class=\"row blog-wrap\">
\t\t<!-- Blog Detail Wrapper -->
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"blog-details\">
\t\t\t\t<h4><a href=\"{{ view_node }}\">{{ title }}</a></h4>
\t\t\t\t<ul class=\"blog-meta\">
\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i>{{ press_release_date|date('M d') }}</li>
\t\t\t\t\t<li><i class=\"fa fa-comments\"></i> {{ comment_c }}</li>
\t\t\t\t\t<li><i class=\"fa fa-eye\"></i> {{ getNodeViewCount(nid) }}</li>
\t\t\t\t</ul><!-- Blog Meta -->
\t\t\t\t<p>{{ body }}</p>
\t\t\t\t<a class=\"btn\" href=\"{{ view_node }}\">Read More</a>
\t\t\t</div><!-- Blog Detail Wrapper -->
\t\t</div><!-- Blog Detail Column -->
\t</div><!-- Blog Wrapper -->
\t<!-- Divider -->
\t<hr class=\"md\">
</li><!-- Column -->", "");
    }
}
