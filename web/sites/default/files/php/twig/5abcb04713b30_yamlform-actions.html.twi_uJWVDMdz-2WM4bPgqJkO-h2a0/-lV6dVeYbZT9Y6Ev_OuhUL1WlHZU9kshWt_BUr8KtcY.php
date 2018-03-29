<?php

/* modules/contrib/yamlform/templates/yamlform-actions.html.twig */
class __TwigTemplate_52992f9d1808c75a59c930b75e267222ff8818b618f788096810e5a7e18aaba6 extends Twig_Template
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

        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["draft"] ?? null), "html", null, true));
        echo "
";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["previous"] ?? null), "html", null, true));
        echo "
";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["next"] ?? null), "html", null, true));
        echo "
";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submit"] ?? null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/yamlform/templates/yamlform-actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  51 => 15,  47 => 14,  43 => 13,);
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
 * Default theme implementation of a form actions.
 *
 * @see template_preprocess_yamlform_actions()
 * @see \\Drupal\\yamlform\\YamlFormSubmissionForm::actionsElement
 * @see \\Drupal\\yamlform\\YamlFormSubmissionForm::actions
 *
 * @ingroup themeable
 */
#}
{{ draft }}
{{ previous }}
{{ next }}
{{ submit }}
", "modules/contrib/yamlform/templates/yamlform-actions.html.twig", "E:\\xampp\\htdocs\\mdxhealthd8\\web\\modules\\contrib\\yamlform\\templates\\yamlform-actions.html.twig");
    }
}
