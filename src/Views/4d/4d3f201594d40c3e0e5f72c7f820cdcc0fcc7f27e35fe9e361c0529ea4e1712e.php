<?php

/* dashboard/db-menu.html.php */
class __TwigTemplate_6db7919f01b46dc7ab9c856cce41ecc3b684949a89790846a4657f78ba9e9e7d extends Twig_Template
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
        echo "        <nav class=\"navbar-default navbar-side\" role=\"navigation\">
            <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"main-menu\">
                    <li class=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["news_menu"]) ? $context["news_menu"] : null), "html", null, true);
        echo "\">
                        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["APP_URI"]) ? $context["APP_URI"] : null), "html", null, true);
        echo "/news\" ><i class=\"fa fa-bullhorn \"></i>Ogłoszenia</a>
                    </li>
                    <li class=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["users_menu"]) ? $context["users_menu"] : null), "html", null, true);
        echo "\">
                        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["APP_URI"]) ? $context["APP_URI"] : null), "html", null, true);
        echo "/users\"><i class=\"fa fa-users \"></i>Użytkownicy</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->";
    }

    public function getTemplateName()
    {
        return "dashboard/db-menu.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dashboard/db-menu.html.php", "D:\\DyskGoogle\\www\\waxing-cms\\src\\templates\\dashboard\\db-menu.html.php");
    }
}
