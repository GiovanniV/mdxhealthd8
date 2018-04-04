<?php

/* themes/custom/agenchy/templates/menu--main.html.twig */
class __TwigTemplate_4d4ff2a2981c42306156c2bc6c3dde5a6e4e77631c581e299ff5d3e377b736bf extends Twig_Template
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
        $tags = array("import" => 1, "macro" => 3, "if" => 5, "set" => 7, "for" => 12);
        $filters = array("t" => 25);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'set', 'for'),
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
        $context["menus"] = $this;
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "
";
    }

    // line 3
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "  ";
            $context["menus"] = $this;
            // line 5
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 6
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 7
                    echo "        ";
                    $context["classes_nav"] = array(0 => "nav", 1 => "nav-pills", 2 => "nav-main");
                    // line 8
                    echo "      <ul ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes_nav"] ?? null)), "method"), "html", null, true));
                    echo " id=\"mainMenu\">
    ";
                } else {
                    // line 10
                    echo "      <ul class=\"dropdown-menu\">
    ";
                }
                // line 12
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 13
                    echo "      ";
                    // line 14
                    $context["classes"] = array(0 => (((                    // line 15
($context["menu_level"] ?? null) == 0)) ? ("dropdown") : ("")), 1 => ((((                    // line 16
($context["menu_level"] ?? null) == 1) && $this->getAttribute($context["item"], "is_expanded", array()))) ? ("dropdown-submenu") : ("")), 2 => (($this->getAttribute(                    // line 17
$context["item"], "is_collapsed", array())) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 18
$context["item"], "in_active_trail", array())) ? ("menu-item--active_trail") : ("")));
                    // line 21
                    echo "
        <li";
                    // line 22
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                    echo ">
          ";
                    // line 23
                    if ($this->getAttribute($context["item"], "is_expanded", array())) {
                        // line 24
                        echo "              ";
                        if ((($context["menu_level"] ?? null) < 1)) {
                            // line 25
                            echo "                <a href=\"";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                            echo "\" class=\"dropdown-toggle\">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($context["item"], "title", array()))));
                            echo " <i class=\"fa fa-caret-down\"></i></a>
              ";
                        } else {
                            // line 27
                            echo "                <a href=\"";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                            echo "\">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($context["item"], "title", array()))));
                            echo "</a>
              ";
                        }
                        // line 29
                        echo "          ";
                    } else {
                        // line 30
                        echo "            <a href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($context["item"], "title", array()))));
                        echo "</a>
            ";
                    }
                    // line 32
                    echo "            ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 33
                        echo "              ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                        echo "
            ";
                    }
                    // line 35
                    echo "        </li>

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 38,  148 => 35,  142 => 33,  139 => 32,  131 => 30,  128 => 29,  120 => 27,  112 => 25,  109 => 24,  107 => 23,  103 => 22,  100 => 21,  98 => 18,  97 => 17,  96 => 16,  95 => 15,  94 => 14,  92 => 13,  87 => 12,  83 => 10,  77 => 8,  74 => 7,  71 => 6,  68 => 5,  65 => 4,  51 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as menus %}
{{ menus.menu_links(items, attributes, 0) }}
{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
        {% set classes_nav = ['nav','nav-pills', 'nav-main'] %}
      <ul {{ attributes.addClass(classes_nav) }} id=\"mainMenu\">
    {% else %}
      <ul class=\"dropdown-menu\">
    {% endif %}
    {% for item in items %}
      {%
        set classes = [
          menu_level == 0 ? 'dropdown',
          menu_level == 1 and item.is_expanded ? 'dropdown-submenu',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active_trail',
        ]
      %}

        <li{{ item.attributes.addClass(classes) }}>
          {% if item.is_expanded %}
              {% if menu_level < 1 %}
                <a href=\"{{ item.url }}\" class=\"dropdown-toggle\">{{ item.title|t }} <i class=\"fa fa-caret-down\"></i></a>
              {% else %}
                <a href=\"{{ item.url }}\">{{ item.title|t }}</a>
              {% endif %}
          {% else %}
            <a href=\"{{ item.url }}\">{{ item.title|t }}</a>
            {% endif %}
            {% if item.below %}
              {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
            {% endif %}
        </li>

    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}", "themes/custom/agenchy/templates/menu--main.html.twig", "/opt/lampp/htdocs/mdxhealthd8/web/themes/custom/agenchy/templates/menu--main.html.twig");
    }
}
