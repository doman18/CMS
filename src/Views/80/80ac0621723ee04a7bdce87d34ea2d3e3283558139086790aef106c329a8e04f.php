<?php

/* login.html.php */
class __TwigTemplate_36a9e1d2de94a9ceb1145d53b59f0abaf783b5416e8e76d0c5066658e91fca43 extends Twig_Template
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
    <title>Zaloguj się</title>
\t<!-- BOOTSTRAP STYLES-->
    <link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\" />
     <!-- FONTAWESOME STYLES-->
    <link href=\"assets/css/font-awesome.css\" rel=\"stylesheet\" />
        <!-- CUSTOM STYLES-->
    <link href=\"assets/css/custom.css\" rel=\"stylesheet\" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style>
       .form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type=\"text\"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type=\"password\"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
   </style>
</head>
<body>
<div class=\"container\">
    ";
        // line 95
        $this->loadTemplate("alerts.html.php", "login.html.php", 95)->display($context);
        // line 96
        echo "    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4 col-md-offset-4\">
            <h1 class=\"text-center login-title\">Zaloguj się do panelu CMS</h1>
            <div class=\"account-wall\">
                <img class=\"profile-img\" src=\"https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120\"
                    alt=\"\">
                <form class=\"form-signin\" action=\"\" method=\"POST\">
                    <input name=\"f_login\" type=\"text\" class=\"form-control\" placeholder=\"Login\" required autofocus>
                    <input name=\"f_password\" type=\"password\" class=\"form-control\" placeholder=\"Hasło\" required>
                    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
                        Zaloguj się</button>
                </form>
                    
            </div>
            <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["APP_URI"]) ? $context["APP_URI"] : null), "html", null, true);
        echo "\" class=\"text-center new-account btn btn-lg btn-info\"><i class=\"fa fa-home \"></i> Strona główna</a>
        </div>
    </div>
</div>
<script src=\"assets/js/jquery-1.10.2.js\"></script>
  <!-- BOOTSTRAP SCRIPTS -->
<script src=\"assets/js/bootstrap.min.js\"></script>
</body>";
    }

    public function getTemplateName()
    {
        return "login.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 110,  117 => 96,  115 => 95,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html.php", "D:\\DyskGoogle\\www\\waxing-cms\\src\\templates\\login.html.php");
    }
}
