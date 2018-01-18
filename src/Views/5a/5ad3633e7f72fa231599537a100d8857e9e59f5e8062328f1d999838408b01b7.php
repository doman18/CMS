<?php

/* dashboard/db-header.html.php */
class __TwigTemplate_9549ae55095ecb94618c0ea2ba8575c1768e53dae381273faf0f0b4c0de35d87 extends Twig_Template
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
        echo "﻿<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
      <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["APP_NAME"]) ? $context["APP_NAME"] : null), "html", null, true);
        echo " - Panel kontrolny</title>
\t<!-- BOOTSTRAP STYLES-->
    <link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\" />
     <!-- FONTAWESOME STYLES-->
    <link href=\"assets/css/font-awesome.css\" rel=\"stylesheet\" />
        <!-- CUSTOM STYLES-->
    <link href=\"assets/css/custom.css\" rel=\"stylesheet\" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
       
    <div id=\"wrapper\">
         <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"adjust-nav\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">
                        <img src=\"assets/img/logo.png\" />
                        ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["APP_NAME"]) ? $context["APP_NAME"] : null), "html", null, true);
        echo " - Panel kontrolny
                    </a>
                </div>
                 <span class=\"logout-spn\" >
                     <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["APP_URI"]) ? $context["APP_URI"] : null), "html", null, true);
        echo "/logout\" style=\"color:#fff;\"><i class=\"fa fa-sign-out\"></i> Wyloguj</a>  
                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->";
    }

    public function getTemplateName()
    {
        return "dashboard/db-header.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 33,  52 => 29,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dashboard/db-header.html.php", "D:\\DyskGoogle\\www\\waxing-cms\\src\\templates\\dashboard\\db-header.html.php");
    }
}
