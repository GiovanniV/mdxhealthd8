<?php

/* modules/custom/md_slider/templates/backend/admin-layers-render.html.twig */
class __TwigTemplate_b71470fba1896ef028d67c96c4ce090b6e92a9eccdcbe9bf9e407579ec08090e extends Twig_Template
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
        $tags = array("for" => 1, "if" => 2);
        $filters = array("raw" => 3, "t" => 4);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array('raw', 't'),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layer"]) {
            // line 2
            echo "    ";
            if (($this->getAttribute($context["layer"], "type", array()) == "text")) {
                // line 3
                echo "        <div class=\"slider-item ui-widget-content item-text ui-draggable ui-resizable\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["layer"], "layer_data", array())));
                echo " style=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["layer"], "layer_style", array())));
                echo "\">
            <div>";
                // line 4
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute($context["layer"], "title", array()))));
                echo "</div>
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    ";
            } elseif (($this->getAttribute(            // line 8
$context["layer"], "type", array()) == "image")) {
                // line 9
                echo "        <div class=\"slider-item ui-widget-content item-image ui-draggable ui-resizable\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["layer"], "layer_data", array())));
                echo " style=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["layer"], "layer_style", array()), "html", null, true));
                echo "\">
            <img width=\"100%\" height=\"100%\" src=\"";
                // line 10
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["layer"], "file_url", array()), "html", null, true));
                echo "\" />
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    ";
            } elseif (($this->getAttribute(            // line 14
$context["layer"], "type", array()) == "video")) {
                // line 15
                echo "        <div class=\"slider-item ui-widget-content item-video ui-draggable ui-resizable\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["layer"], "layer_data", array())));
                echo " style=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["layer"], "layer_style", array()), "html", null, true));
                echo "\">
            <img width=\"100%\" height=\"100%\" src=\"";
                // line 16
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["layer"], "thumb", array()), "html", null, true));
                echo "\" />
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/custom/md_slider/templates/backend/admin-layers-render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  82 => 15,  80 => 14,  73 => 10,  66 => 9,  64 => 8,  57 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for layer in layers %}
    {% if layer.type == 'text' %}
        <div class=\"slider-item ui-widget-content item-text ui-draggable ui-resizable\" {{ layer.layer_data|raw  }} style=\"{{ layer.layer_style|raw }}\">
            <div>{{ layer.title|t }}</div>
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    {% elseif layer.type == 'image' %}
        <div class=\"slider-item ui-widget-content item-image ui-draggable ui-resizable\" {{ layer.layer_data|raw  }} style=\"{{ layer.layer_style }}\">
            <img width=\"100%\" height=\"100%\" src=\"{{ layer.file_url }}\" />
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    {% elseif layer.type == 'video' %}
        <div class=\"slider-item ui-widget-content item-video ui-draggable ui-resizable\" {{ layer.layer_data|raw  }} style=\"{{ layer.layer_style }}\">
            <img width=\"100%\" height=\"100%\" src=\"{{ layer.thumb }}\" />
            <span class=\"sl-tl\"></span><span class=\"sl-tr\"></span><span class=\"sl-bl\"></span><span class=\"sl-br\"></span>
            <span class=\"sl-top\"></span><span class=\"sl-right\"></span><span class=\"sl-bottom\"></span><span class=\"sl-left\"></span>
        </div>
    {% endif %}
{% endfor %}", "modules/custom/md_slider/templates/backend/admin-layers-render.html.twig", "/opt/lampp/htdocs/mdxhealthd8/web/modules/custom/md_slider/templates/backend/admin-layers-render.html.twig");
    }
}
