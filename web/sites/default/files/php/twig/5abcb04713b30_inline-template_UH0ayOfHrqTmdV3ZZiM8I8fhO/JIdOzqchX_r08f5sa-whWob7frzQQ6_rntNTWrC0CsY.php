<?php

/* {# inline_template_start #}<!-- Item Ends -->
<div class="item">
	<!-- Blockquote Wrapper -->
	<div class="quote-wrap grey">
		<blockquote>		
			{{ body }}
		</blockquote>
		<!-- Blockquote Author -->
		<div class="quote-author">
			<img width="150" height="150" src="{{ field_photo_speaker }}" class="img-responsive" alt="{{ title }}">
			<!-- Blockquote Footer -->
			<div class="quote-footer">
				<h5 class="name">{{ title }}</h5>
				<span>/ {{ field_job }}</span>
			</div><!-- Blockquote Footer -->
		</div><!-- Blockquote Author -->
	</div><!-- Blockquote Wrapper -->
</div><!-- Item Ends --> */
class __TwigTemplate_5eceeb4debcd63e5c96601b2092cf7bc0e64b4a38115e704d141dc07c18b0fb2 extends Twig_Template
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
\t<!-- Blockquote Wrapper -->
\t<div class=\"quote-wrap grey\">
\t\t<blockquote>\t\t
\t\t\t";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "
\t\t</blockquote>
\t\t<!-- Blockquote Author -->
\t\t<div class=\"quote-author\">
\t\t\t<img width=\"150\" height=\"150\" src=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_photo_speaker"] ?? null), "html", null, true));
        echo "\" class=\"img-responsive\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "\">
\t\t\t<!-- Blockquote Footer -->
\t\t\t<div class=\"quote-footer\">
\t\t\t\t<h5 class=\"name\">";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h5>
\t\t\t\t<span>/ ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_job"] ?? null), "html", null, true));
        echo "</span>
\t\t\t</div><!-- Blockquote Footer -->
\t\t</div><!-- Blockquote Author -->
\t</div><!-- Blockquote Wrapper -->
</div><!-- Item Ends -->";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<!-- Item Ends -->
<div class=\"item\">
\t<!-- Blockquote Wrapper -->
\t<div class=\"quote-wrap grey\">
\t\t<blockquote>\t\t
\t\t\t{{ body }}
\t\t</blockquote>
\t\t<!-- Blockquote Author -->
\t\t<div class=\"quote-author\">
\t\t\t<img width=\"150\" height=\"150\" src=\"{{ field_photo_speaker }}\" class=\"img-responsive\" alt=\"{{ title }}\">
\t\t\t<!-- Blockquote Footer -->
\t\t\t<div class=\"quote-footer\">
\t\t\t\t<h5 class=\"name\">{{ title }}</h5>
\t\t\t\t<span>/ {{ field_job }}</span>
\t\t\t</div><!-- Blockquote Footer -->
\t\t</div><!-- Blockquote Author -->
\t</div><!-- Blockquote Wrapper -->
</div><!-- Item Ends -->";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  82 => 13,  74 => 10,  67 => 6,  60 => 1,);
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
\t<!-- Blockquote Wrapper -->
\t<div class=\"quote-wrap grey\">
\t\t<blockquote>\t\t
\t\t\t{{ body }}
\t\t</blockquote>
\t\t<!-- Blockquote Author -->
\t\t<div class=\"quote-author\">
\t\t\t<img width=\"150\" height=\"150\" src=\"{{ field_photo_speaker }}\" class=\"img-responsive\" alt=\"{{ title }}\">
\t\t\t<!-- Blockquote Footer -->
\t\t\t<div class=\"quote-footer\">
\t\t\t\t<h5 class=\"name\">{{ title }}</h5>
\t\t\t\t<span>/ {{ field_job }}</span>
\t\t\t</div><!-- Blockquote Footer -->
\t\t</div><!-- Blockquote Author -->
\t</div><!-- Blockquote Wrapper -->
</div><!-- Item Ends -->", "{# inline_template_start #}<!-- Item Ends -->
<div class=\"item\">
\t<!-- Blockquote Wrapper -->
\t<div class=\"quote-wrap grey\">
\t\t<blockquote>\t\t
\t\t\t{{ body }}
\t\t</blockquote>
\t\t<!-- Blockquote Author -->
\t\t<div class=\"quote-author\">
\t\t\t<img width=\"150\" height=\"150\" src=\"{{ field_photo_speaker }}\" class=\"img-responsive\" alt=\"{{ title }}\">
\t\t\t<!-- Blockquote Footer -->
\t\t\t<div class=\"quote-footer\">
\t\t\t\t<h5 class=\"name\">{{ title }}</h5>
\t\t\t\t<span>/ {{ field_job }}</span>
\t\t\t</div><!-- Blockquote Footer -->
\t\t</div><!-- Blockquote Author -->
\t</div><!-- Blockquote Wrapper -->
</div><!-- Item Ends -->", "");
    }
}
