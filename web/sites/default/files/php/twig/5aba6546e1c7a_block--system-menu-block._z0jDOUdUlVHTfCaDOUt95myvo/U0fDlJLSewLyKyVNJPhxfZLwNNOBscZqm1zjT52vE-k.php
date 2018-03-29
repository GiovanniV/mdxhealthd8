<?php

/* themes/custom/agenchy/templates/block--system-menu-block.html.twig */
class __TwigTemplate_c3f727d5c80e3f86c05f83b17238948d70e016970f803141a646faff9a0e866d extends Twig_Template
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
        $tags = array("if" => 1);
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
        if ((($context["region"] ?? null) == "site_map_column_1")) {
            // line 2
            echo "\t<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "widget"), "method"), "html", null, true));
            echo ">
\t    ";
            // line 3
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 4
            if (($context["label"] ?? null)) {
                // line 5
                echo "\t    <h5 class=\"widget-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "<span></span></h5>
\t    ";
            }
            // line 7
            echo "\t    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 8
            if (($context["content"] ?? null)) {
                // line 9
                echo "\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 11
            echo "\t</div>

";
        } elseif ((        // line 13
($context["region"] ?? null) == "site_map_column_2")) {
            // line 14
            echo "\t<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "widget"), "method"), "html", null, true));
            echo ">
\t    ";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 16
            if (($context["label"] ?? null)) {
                // line 17
                echo "\t    <h5 class=\"widget-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "<span></span></h5>
\t    ";
            }
            // line 19
            echo "\t    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 20
            if (($context["content"] ?? null)) {
                // line 21
                echo "\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 23
            echo "\t</div>
";
        } else {
            // line 25
            echo "\t<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "widget"), "method"), "html", null, true));
            echo ">
\t    ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 27
            if (($context["label"] ?? null)) {
                // line 28
                echo "\t    <h5 class=\"widget-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "<span></span></h5>
\t    ";
            }
            // line 30
            echo "\t    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
\t    ";
            // line 31
            if (($context["content"] ?? null)) {
                // line 32
                echo "\t        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
                echo "
\t    ";
            }
            // line 34
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 34,  139 => 32,  137 => 31,  132 => 30,  126 => 28,  124 => 27,  120 => 26,  115 => 25,  111 => 23,  105 => 21,  103 => 20,  98 => 19,  92 => 17,  90 => 16,  86 => 15,  81 => 14,  79 => 13,  75 => 11,  69 => 9,  67 => 8,  62 => 7,  56 => 5,  54 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if region == 'site_map_column_1' %}
\t<div{{ attributes.addClass('widget') }}>
\t    {{ title_prefix }}
\t    {% if label %}
\t    <h5 class=\"widget-title\">{{ label }}<span></span></h5>
\t    {% endif %}
\t    {{ title_suffix }}
\t    {% if content %}
\t        {{ content }}
\t    {% endif %}
\t</div>

{% elseif region == 'site_map_column_2' %}
\t<div{{ attributes.addClass('widget') }}>
\t    {{ title_prefix }}
\t    {% if label %}
\t    <h5 class=\"widget-title\">{{ label }}<span></span></h5>
\t    {% endif %}
\t    {{ title_suffix }}
\t    {% if content %}
\t        {{ content }}
\t    {% endif %}
\t</div>
{% else %}
\t<div{{ attributes.addClass('widget') }}>
\t    {{ title_prefix }}
\t    {% if label %}
\t    <h5 class=\"widget-title\">{{ label }}<span></span></h5>
\t    {% endif %}
\t    {{ title_suffix }}
\t    {% if content %}
\t        {{ content }}
\t    {% endif %}
\t</div>
{% endif %}", "themes/custom/agenchy/templates/block--system-menu-block.html.twig", "C:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\block--system-menu-block.html.twig");
    }
}
