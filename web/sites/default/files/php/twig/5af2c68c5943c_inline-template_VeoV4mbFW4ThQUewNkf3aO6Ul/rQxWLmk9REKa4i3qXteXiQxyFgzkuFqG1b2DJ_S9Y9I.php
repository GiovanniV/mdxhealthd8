<?php

/* {# inline_template_start #}<li><a href="{{ path }}">
	<img class="img-responsive" src="{{ field_avatar_for_home_page }}" alt="{{ path }}" height="500" width="500"></a>
</li> */
class __TwigTemplate_2b641c4af467857286a574c84f062cbf8165c53b07a2c839bd1659bf292685e5 extends Twig_Template
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
        echo "<li><a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\">
\t<img class=\"img-responsive\" src=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_avatar_for_home_page"] ?? null), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\" height=\"500\" width=\"500\"></a>
</li>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<li><a href=\"{{ path }}\">
\t<img class=\"img-responsive\" src=\"{{ field_avatar_for_home_page }}\" alt=\"{{ path }}\" height=\"500\" width=\"500\"></a>
</li>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 2,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<li><a href=\"{{ path }}\">
\t<img class=\"img-responsive\" src=\"{{ field_avatar_for_home_page }}\" alt=\"{{ path }}\" height=\"500\" width=\"500\"></a>
</li>", "{# inline_template_start #}<li><a href=\"{{ path }}\">
\t<img class=\"img-responsive\" src=\"{{ field_avatar_for_home_page }}\" alt=\"{{ path }}\" height=\"500\" width=\"500\"></a>
</li>", "");
    }
}
