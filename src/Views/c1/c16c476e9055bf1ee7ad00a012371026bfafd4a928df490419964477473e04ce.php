<?php

/* alerts.html.php */
class __TwigTemplate_cc0177f576a991e0d447760e886a3f0652168bdef78f5e3a82ad6bfae18d4842 extends Twig_Template
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
        // line 1
        echo "            ";
        if ((isset($context["alerts"]) ? $context["alerts"] : null)) {
            // line 2
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alerts"]) ? $context["alerts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 3
                echo "                   <div class=\"row\">
                        <div class=\"col-lg-12 \">
                            <div class=\"alert alert-";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "type", array()));
                echo " alert-dismissable fade in\">
                              <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                 ";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "msg", array()));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            ";
        }
    }

    public function getTemplateName()
    {
        return "alerts.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  36 => 7,  31 => 5,  27 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alerts.html.php", "D:\\DyskGoogle\\www\\waxing-cms\\src\\templates\\alerts.html.php");
    }
}
