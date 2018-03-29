<?php

/* themes/custom/agenchy/templates/system/node/node--mdx-press-release.html.twig */
class __TwigTemplate_963190e27a76117790c5b8edb750f8cc2c30c32e62a49781d7e9c6a3591ac290 extends Twig_Template
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
        $tags = array("set" => 1, "if" => 10);
        $filters = array("date" => 11);
        $functions = array("getNodeViewCount" => 13);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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
        $context["user_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "getRevisionAuthor", array(), "method"), "name", array()), "value", array());
        // line 2
        $context["full_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "getRevisionAuthor", array(), "method"), "field_full_name", array()), "value", array());
        // line 3
        $context["comment_c"] = $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_blog_comments", array()), "comment_count", array());
        // line 4
        echo "<div class=\"col-xs-12 blog-single\">
  <div class=\"blog-single-wrap\">
    <!-- Blog Detail Wrapper -->
    <div class=\"blog-single-details\">
      <h4><a href=\"";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</a></h4>
      <ul class=\"blog-meta\">
        <li><i class=\"fa fa-user\"></i> ";
        // line 10
        if (($context["full_name"] ?? null)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["full_name"] ?? null), "html", null, true));
        } else {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["user_name"] ?? null), "html", null, true));
        }
        echo "</li>
        <li><i class=\"fa fa-calendar-o\"></i>";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "created", array()), "value", array()), "M d"), "html", null, true));
        echo "</li>
        <li><i class=\"fa fa-comments\"></i> ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_c"] ?? null), "html", null, true));
        echo "</li>
        <li><i class=\"fa fa-eye\"></i> ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\nvs_func\Twig\FuncExtension')->getNodeViewCount($this->getAttribute($this->getAttribute(($context["node"] ?? null), "nid", array()), "value", array()))));
        echo "</li>
        <li><i class=\"fa fa-folder\"></i> ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_category", array()), "html", null, true));
        echo "</li>
      </ul>
      <!-- Blog Meta -->
      <!-- Blog Description -->
      ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "body", array()), "html", null, true));
        echo "
    </div>
    <!-- Blog Detail Wrapper -->
  </div>
  <!-- Blog Wrapper -->
  
  <!-- Post Comments -->
  ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_blog_comments", array()), "html", null, true));
        echo "
  <!-- Post Comments -->
  
  <!-- Post Comment Form -->
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/system/node/node--mdx-press-release.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  89 => 18,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  62 => 10,  55 => 8,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
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
<div class=\"col-xs-12 blog-single\">
  <div class=\"blog-single-wrap\">
    <!-- Blog Detail Wrapper -->
    <div class=\"blog-single-details\">
      <h4><a href=\"{{ url }}\">{{ title }}</a></h4>
      <ul class=\"blog-meta\">
        <li><i class=\"fa fa-user\"></i> {% if full_name %}{{ full_name }}{% else %}{{ user_name }}{% endif %}</li>
        <li><i class=\"fa fa-calendar-o\"></i>{{ node.created.value|date('M d') }}</li>
        <li><i class=\"fa fa-comments\"></i> {{ comment_c }}</li>
        <li><i class=\"fa fa-eye\"></i> {{ getNodeViewCount(node.nid.value) }}</li>
        <li><i class=\"fa fa-folder\"></i> {{ content.field_category }}</li>
      </ul>
      <!-- Blog Meta -->
      <!-- Blog Description -->
      {{ content.body }}
    </div>
    <!-- Blog Detail Wrapper -->
  </div>
  <!-- Blog Wrapper -->
  
  <!-- Post Comments -->
  {{ content.field_blog_comments }}
  <!-- Post Comments -->
  
  <!-- Post Comment Form -->
</div>", "themes/custom/agenchy/templates/system/node/node--mdx-press-release.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\system\\node\\node--mdx-press-release.html.twig");
    }
}
