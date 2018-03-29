<?php

/* themes/custom/agenchy/templates/pager.html.twig */
class __TwigTemplate_e96b71ed6a7718e3e7ec4d81ef25c8e5df93dd04771eb12bf578b32f915f4322 extends Twig_Template
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
        $tags = array("if" => 32, "for" => 47, "set" => 50);
        $filters = array("length" => 35, "t" => 50, "without" => 55);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('length', 't', 'without'),
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

        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            echo "<nav class=\"text-center\">
  <ul id=\"constructs-pager-pagination\" class=\"pagination pagination-small\">
      ";
            // line 35
            if ((twig_length_filter($this->env, $this->getAttribute(($context["items"] ?? null), "pages", array())) > 2)) {
                // line 36
                echo "        ";
                if ($this->getAttribute(($context["items"] ?? null), "first", array())) {
                    // line 37
                    echo "            <li class=\"pager__item pager__item--first previous\">
              <a href=\"";
                    // line 38
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", array()), "href", array()), "html", null, true));
                    echo "\"><span aria-hidden=\"true\">&larr;</span> Newest</a>
            </li>
          ";
                }
                // line 41
                echo "      ";
            }
            // line 42
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "previous", array())) {
                // line 43
                echo "          <li class=\"pager__item pager__item--first\">
            <a href=\"";
                // line 44
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array()), "href", array()), "html", null, true));
                echo "\" aria-label=\"Previous\"><span aria-hidden=\"true\">«</span></a>
          </li>
      ";
            }
            // line 47
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", array()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 48
                echo "        <li>
          ";
                // line 49
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 50
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 51
                    echo "          ";
                } else {
                    // line 52
                    echo "            ";
                    $context["title"] = t("Go to page @key", array("@key" => $context["key"]));
                    // line 53
                    echo "          ";
                }
                // line 54
                echo "          ";
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 55
                    echo "          <a href=\"#\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                    echo "\" class=\"active\" ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($context["item"], "attributes", array()), "href", "title"), "html", null, true));
                    echo ">
          ";
                } else {
                    // line 57
                    echo "          <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                    echo "\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($context["item"], "attributes", array()), "href", "title"), "html", null, true));
                    echo ">
          ";
                }
                // line 59
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                // line 60
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "      
      ";
            // line 65
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "last", array())) {
                // line 66
                echo "        <li class=\"pager__item pager__item--first\">
            <a href=\"";
                // line 67
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array()), "href", array()), "html", null, true));
                echo "\" aria-label=\"Next\"><span aria-hidden=\"true\">»</span></a>
          </li>
      ";
            }
            // line 70
            echo "      ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["items"] ?? null), "pages", array())) > 2)) {
                // line 71
                echo "        ";
                if ($this->getAttribute(($context["items"] ?? null), "next", array())) {
                    // line 72
                    echo "            <li class=\"pager__item pager__item--first next\">
              <a href=\"";
                    // line 73
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", array()), "href", array()), "html", null, true));
                    echo "\">Oldest  <span aria-hidden=\"true\">&rarr;</span></a>
            </li>
          ";
                }
                // line 76
                echo "      ";
            }
            // line 77
            echo "  </ul>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/agenchy/templates/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 77,  161 => 76,  155 => 73,  152 => 72,  149 => 71,  146 => 70,  140 => 67,  137 => 66,  134 => 65,  131 => 63,  123 => 60,  121 => 59,  111 => 57,  103 => 55,  100 => 54,  97 => 53,  94 => 52,  91 => 51,  88 => 50,  86 => 49,  83 => 48,  78 => 47,  72 => 44,  69 => 43,  66 => 42,  63 => 41,  57 => 38,  54 => 37,  51 => 36,  49 => 35,  45 => 33,  43 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override to display a pager.
 *
 * Available variables:
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 */
#}
{% if items %}
<nav class=\"text-center\">
  <ul id=\"constructs-pager-pagination\" class=\"pagination pagination-small\">
      {% if items.pages|length > 2 %}
        {% if items.first %}
            <li class=\"pager__item pager__item--first previous\">
              <a href=\"{{ items.first.href }}\"><span aria-hidden=\"true\">&larr;</span> Newest</a>
            </li>
          {% endif %}
      {% endif %}
      {% if items.previous %}
          <li class=\"pager__item pager__item--first\">
            <a href=\"{{ items.previous.href }}\" aria-label=\"Previous\"><span aria-hidden=\"true\">«</span></a>
          </li>
      {% endif %}
      {% for key, item in items.pages %}
        <li>
          {% if current == key %}
            {% set title = 'Current page'|t %}
          {% else %}
            {% set title = 'Go to page @key'|t({'@key': key}) %}
          {% endif %}
          {% if current == key %}
          <a href=\"#\" title=\"{{ title }}\" class=\"active\" {{ item.attributes|without('href', 'title') }}>
          {% else %}
          <a href=\"{{ item.href }}\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title') }}>
          {% endif %}
            {{- key -}}
          </a>
        </li>
      {% endfor %}
      
      {# Print last item if we are not on the last page. #}
      {% if items.last %}
        <li class=\"pager__item pager__item--first\">
            <a href=\"{{ items.next.href }}\" aria-label=\"Next\"><span aria-hidden=\"true\">»</span></a>
          </li>
      {% endif %}
      {% if items.pages|length > 2 %}
        {% if items.next %}
            <li class=\"pager__item pager__item--first next\">
              <a href=\"{{ items.last.href }}\">Oldest  <span aria-hidden=\"true\">&rarr;</span></a>
            </li>
          {% endif %}
      {% endif %}
  </ul>
</nav>
{% endif %}
", "themes/custom/agenchy/templates/pager.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\themes\\custom\\agenchy\\templates\\pager.html.twig");
    }
}
