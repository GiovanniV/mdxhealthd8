<?php

/* modules/custom/md_slider/templates/backend/slide-settings.html.twig */
class __TwigTemplate_aea61aadfe00de33a612014185cf8b39c38dc90639b0090578fef9d847802a1f extends Twig_Template
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
        $tags = array("set" => 1, "for" => 78);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for'),
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
        $context["transitions"] = array("slit-horizontal-left-top" => "Slit horizontal left top", "slit-horizontal-top-right" => "Slit horizontal top right", "slit-horizontal-bottom-up" => "Slit horizontal bottom up", "slit-vertical-down" => "Slit vertical down", "slit-vertical-up" => "Slit vertical up", "strip-up-right" => "Strip up right", "strip-up-left" => "Strip up left", "strip-down-right" => "Strip down right", "strip-down-left" => "Strip down left", "strip-left-up" => "Strip left up", "strip-left-down" => "Strip left down", "strip-right-up" => "Strip right up", "strip-right-down" => "Strip right down", "strip-right-left-up" => "Strip right left up", "strip-right-left-down" => "Strip right left down", "strip-up-down-right" => "Strip up down right", "strip-up-down-left" => "Strip up down left", "left-curtain" => "Left curtain", "right-curtain" => "Right curtain", "top-curtain" => "Top curtain", "bottom-curtain" => "Bottom curtain", "slide-in-right" => "Slide in right", "slide-in-left" => "Slide in left", "slide-in-up" => "Slide in up", "slide-in-down" => "Slide in down", "fade" => "Fade");
        // line 29
        echo "<div id='slide-setting-dlg' title=\"Slide setting\">
    <div class=\"cuteslider-popup clearfix\">
        <div id=\"slide-setting-tabs\" class=\"cs-popup-tabs clearfix\">
            <div class=\"slide-setting clearfix\">
                <div class=\"disable-slide\">
                    <input id=\"disable-slide\" type=\"checkbox\" name=\"disable_slide\"><label for=\"disable-slide\">Disable this slide</label>
                </div>
                <div class=\"choose-image\">
                    <a class=\"slide-choose-image-link\" href=\"#\">[Choose image]</a>
                    <div id=\"slide-background-preview\" style=\"position: relative\">
                        <img src=\"\" alt=\"\" width=\"160\" height=\"160\">
                        <a class=\"delete-background\" href=\"#\"></a>
                    </div>
                    <div class=\"custom-bg-alt-info\">
                        <label for=\"custom-bg-alt\">Custom background alt</label>
                        <input type=\"text\" name=\"thumb-alt-tag\" id=\"custom-bg-alt\">
                    </div>
                </div>
                <input type=\"hidden\" id=\"slide-backgroundimage\">

                <div class=\"choose-thumbnail\">
                    <a class=\"slide-choose-thumbnail-link\" href=\"#\">[Choose thumbnail]</a>
                    <div id=\"slide-thumbnail-preview\" style=\"position: relative\">
                        <img src=\"\" alt=\"\" width=\"160\" height=\"160\">
                        <a class=\"delete-thumbnail\" href=\"#\"></a>
                    </div>
                    <div class=\"custom-thumb-alt-info\">
                        <label for=\"custom-thumb-alt\">Custom thumbnail alt</label>
                        <input type=\"text\" name=\"thumb-alt-tag\" id=\"custom-thumb-alt\">
                    </div>
                </div>

                <div class=\"choose-slide-bg-color clearfix\">
                    <input type=\"hidden\" id=\"slide-background-color\" class=\"mdt-background mdt-input\" value=\"\" name=\"slide-background-color\">
                    <label style=\"float: left\">Background Color</label>
                </div>
                <div class=\"choose-slide-bg-overlay clearfix\">
                    <input type=\"hidden\" id=\"slide-background-overlay\" class=\"mdt-background mdt-input\" value=\"\" name=\"slide-background-overlay\">
                    <label style=\"float: left\">Background Overlay</label>
                </div>

                <input type=\"hidden\" id=\"slide-thumbnail\">
            </div><!-- / .slide-setting -->
            <div class=\"transition\">
                <h3>Transitions <a href=\"#\" class=\"random-transition\">Choose random</a></h3>
                <p>You can select multiple value, slide will take random effect form what you selected. You have to choose 3D and 2D effects, 2D effects will be using in old browsers that do not support 3D transitions.</p>
                <div id=\"navbar-content-transitions\" class=\"transition-inner\">
                    <div id=\"navbar-content\" class=\"navbar-content navbar-content-tr clearfix\">
                        <ul class=\"columns unstyled\">
                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transitions"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["transition"]) {
            // line 79
            echo "                            <li>
                                <input type=\"checkbox\" id=\"transitions_";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
            echo "\" value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
            echo "\"/>
                                <label for=\"transitions_";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
            echo "\">
                                    ";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["transition"], "html", null, true));
            echo "
                                </label>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['transition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                        </ul>
                    </div>
                </div>
                <div id=\"md-tooltip\" class=\"tooltip\" style=\"display: none;\">
                    <div class=\"md-slide-wrap\">
                        <div class=\"md-slide-items\" id=\"md-slider\">
                            <div class=\"md-slide-item\" data-timeout=\"2000\">
                                <div class=\"md-main-img\">
                                    <img src=\"";
        // line 94
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["preview_1"] ?? null), "html", null, true));
        echo "\" style=\"top:0; left:0;\"  />
                                </div>
                                <div class=\"md-objects\">

                                </div>
                            </div>
                            <div class=\"md-slide-item\" data-timeout=\"2000\" style=\"display: none;\">
                                <div class=\"md-main-img\">
                                    <img src=\"";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["preview_2"] ?? null), "html", null, true));
        echo "\" style=\"top:0; left:0;\"  />
                                </div>
                                <div class=\"md-objects\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- / .transitions -->

        </div><!-- / .cs-popup-tabs -->
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/md_slider/templates/backend/slide-settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 102,  133 => 94,  123 => 86,  113 => 82,  109 => 81,  103 => 80,  100 => 79,  96 => 78,  45 => 29,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set transitions = {
'slit-horizontal-left-top' : \"Slit horizontal left top\",
'slit-horizontal-top-right' : \"Slit horizontal top right\",
'slit-horizontal-bottom-up' : \"Slit horizontal bottom up\",
'slit-vertical-down' : \"Slit vertical down\",
'slit-vertical-up' : \"Slit vertical up\",
'strip-up-right' : \"Strip up right\",
'strip-up-left' : \"Strip up left\",
'strip-down-right' : \"Strip down right\",
'strip-down-left' : \"Strip down left\",
'strip-left-up' : \"Strip left up\",
'strip-left-down' : \"Strip left down\",
'strip-right-up' : \"Strip right up\",
'strip-right-down' : \"Strip right down\",
'strip-right-left-up' : \"Strip right left up\",
'strip-right-left-down' : \"Strip right left down\",
'strip-up-down-right' : \"Strip up down right\",
'strip-up-down-left' : \"Strip up down left\",
'left-curtain' : \"Left curtain\",
'right-curtain' : \"Right curtain\",
'top-curtain' : \"Top curtain\",
'bottom-curtain' : \"Bottom curtain\",
'slide-in-right' : \"Slide in right\",
'slide-in-left' : \"Slide in left\",
'slide-in-up' : \"Slide in up\",
'slide-in-down' : \"Slide in down\",
'fade'  : \"Fade\"
}  %}
<div id='slide-setting-dlg' title=\"Slide setting\">
    <div class=\"cuteslider-popup clearfix\">
        <div id=\"slide-setting-tabs\" class=\"cs-popup-tabs clearfix\">
            <div class=\"slide-setting clearfix\">
                <div class=\"disable-slide\">
                    <input id=\"disable-slide\" type=\"checkbox\" name=\"disable_slide\"><label for=\"disable-slide\">Disable this slide</label>
                </div>
                <div class=\"choose-image\">
                    <a class=\"slide-choose-image-link\" href=\"#\">[Choose image]</a>
                    <div id=\"slide-background-preview\" style=\"position: relative\">
                        <img src=\"\" alt=\"\" width=\"160\" height=\"160\">
                        <a class=\"delete-background\" href=\"#\"></a>
                    </div>
                    <div class=\"custom-bg-alt-info\">
                        <label for=\"custom-bg-alt\">Custom background alt</label>
                        <input type=\"text\" name=\"thumb-alt-tag\" id=\"custom-bg-alt\">
                    </div>
                </div>
                <input type=\"hidden\" id=\"slide-backgroundimage\">

                <div class=\"choose-thumbnail\">
                    <a class=\"slide-choose-thumbnail-link\" href=\"#\">[Choose thumbnail]</a>
                    <div id=\"slide-thumbnail-preview\" style=\"position: relative\">
                        <img src=\"\" alt=\"\" width=\"160\" height=\"160\">
                        <a class=\"delete-thumbnail\" href=\"#\"></a>
                    </div>
                    <div class=\"custom-thumb-alt-info\">
                        <label for=\"custom-thumb-alt\">Custom thumbnail alt</label>
                        <input type=\"text\" name=\"thumb-alt-tag\" id=\"custom-thumb-alt\">
                    </div>
                </div>

                <div class=\"choose-slide-bg-color clearfix\">
                    <input type=\"hidden\" id=\"slide-background-color\" class=\"mdt-background mdt-input\" value=\"\" name=\"slide-background-color\">
                    <label style=\"float: left\">Background Color</label>
                </div>
                <div class=\"choose-slide-bg-overlay clearfix\">
                    <input type=\"hidden\" id=\"slide-background-overlay\" class=\"mdt-background mdt-input\" value=\"\" name=\"slide-background-overlay\">
                    <label style=\"float: left\">Background Overlay</label>
                </div>

                <input type=\"hidden\" id=\"slide-thumbnail\">
            </div><!-- / .slide-setting -->
            <div class=\"transition\">
                <h3>Transitions <a href=\"#\" class=\"random-transition\">Choose random</a></h3>
                <p>You can select multiple value, slide will take random effect form what you selected. You have to choose 3D and 2D effects, 2D effects will be using in old browsers that do not support 3D transitions.</p>
                <div id=\"navbar-content-transitions\" class=\"transition-inner\">
                    <div id=\"navbar-content\" class=\"navbar-content navbar-content-tr clearfix\">
                        <ul class=\"columns unstyled\">
                            {% for key, transition in transitions  %}
                            <li>
                                <input type=\"checkbox\" id=\"transitions_{{ key }}\" value=\"{{ key }}\"/>
                                <label for=\"transitions_{{ key }}\">
                                    {{ transition }}
                                </label>
                            </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
                <div id=\"md-tooltip\" class=\"tooltip\" style=\"display: none;\">
                    <div class=\"md-slide-wrap\">
                        <div class=\"md-slide-items\" id=\"md-slider\">
                            <div class=\"md-slide-item\" data-timeout=\"2000\">
                                <div class=\"md-main-img\">
                                    <img src=\"{{ preview_1 }}\" style=\"top:0; left:0;\"  />
                                </div>
                                <div class=\"md-objects\">

                                </div>
                            </div>
                            <div class=\"md-slide-item\" data-timeout=\"2000\" style=\"display: none;\">
                                <div class=\"md-main-img\">
                                    <img src=\"{{ preview_2 }}\" style=\"top:0; left:0;\"  />
                                </div>
                                <div class=\"md-objects\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- / .transitions -->

        </div><!-- / .cs-popup-tabs -->
    </div>
</div>
", "modules/custom/md_slider/templates/backend/slide-settings.html.twig", "/opt/lampp/htdocs/mdxhealthd8/web/modules/custom/md_slider/templates/backend/slide-settings.html.twig");
    }
}
