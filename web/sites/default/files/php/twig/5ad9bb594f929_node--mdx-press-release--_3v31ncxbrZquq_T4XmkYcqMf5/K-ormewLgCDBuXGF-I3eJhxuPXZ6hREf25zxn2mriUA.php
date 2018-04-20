<?php

/* themes/custom/agenchy/templates/system/node/node--mdx-press-release--teaser.html.twig */
class __TwigTemplate_97134676d700b4b90a799b952fee821fd8b77e28b2d903c9f6c02fd068f7bd77 extends Twig_Template
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
        $tags = array("set" => 1);
        $filters = array("date" => 14, "striptags" => 18);
        $functions = array("getNodeViewCount" => 16);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('date', 'striptags'),
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
        $context["user_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "getRevisionAuthor", array(), "method"), "name", array()), "value", array());
        // line 2
        $context["full_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "getRevisionAuthor", array(), "method"), "field_full_name", array()), "value", array());
        // line 3
        $context["comment_c"] = $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_blog_comments", array()), "comment_count", array());
        // line 4
        echo "
<!-- Blog Column -->
<li class=\"col-xs-12 blog-list-wrap\">
\t<!-- Blog Wrapper -->
\t<div class=\"row blog-wrap\">
\t\t<!-- Blog Detail Wrapper -->
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"blog-details\">
\t\t\t\t<h4><a href=\"";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "</a></h4>
\t\t\t\t<ul class=\"blog-meta\">
\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, ($context["press_release_date"] ?? null), "M d Y"), "html", null, true));
        echo "</li>
\t\t\t\t\t<li><i class=\"fa fa-comments\"></i> ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_c"] ?? null), "html", null, true));
        echo "</li>
\t\t\t\t\t<li><i class=\"fa fa-eye\"></i> ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\nvs_func\Twig\FuncExtension')->getNodeViewCount(($context["nid"] ?? null))));
        echo "</li>
\t\t\t\t</ul><!-- Blog Meta -->
\t\t\t\t<p>";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->getAttribute(($context["content"] ?? null), "body", array())), "html", null, true));
        echo "</p>
\t\t\t\t<a class=\"btn\" href=\"";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
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
        return "themes/custom/agenchy/templates/system/node/node--mdx-press-release--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  79 => 18,  74 => 16,  70 => 15,  66 => 14,  59 => 12,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user_name = node.getRevisionAuthor().name.value %}
{% set full_name = node.getRevisionAuthor().field_full_name.value %}
{% set comment_c = node.field_blog_comments.comment_count %}

<!-- Blog Column -->
<li class=\"col-xs-12 blog-list-wrap\">
\t<!-- Blog Wrapper -->
\t<div class=\"row blog-wrap\">
\t\t<!-- Blog Detail Wrapper -->
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"blog-details\">
\t\t\t\t<h4><a href=\"{{ url }}\">{{ label }}</a></h4>
\t\t\t\t<ul class=\"blog-meta\">
\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i>{{ press_release_date|date('M d Y') }}</li>
\t\t\t\t\t<li><i class=\"fa fa-comments\"></i> {{ comment_c }}</li>
\t\t\t\t\t<li><i class=\"fa fa-eye\"></i> {{ getNodeViewCount(nid) }}</li>
\t\t\t\t</ul><!-- Blog Meta -->
\t\t\t\t<p>{{ content.body|striptags }}</p>
\t\t\t\t<a class=\"btn\" href=\"{{ url }}\">Read More</a>
\t\t\t</div><!-- Blog Detail Wrapper -->
\t\t</div><!-- Blog Detail Column -->
\t</div><!-- Blog Wrapper -->
\t<!-- Divider -->
\t<hr class=\"md\">
</li><!-- Column -->", "themes/custom/agenchy/templates/system/node/node--mdx-press-release--teaser.html.twig", "C:\\xamppnew\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\node\\node--mdx-press-release--teaser.html.twig");
    }
}
