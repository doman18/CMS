<?php

/* dashboard/users/users.html.php */
class __TwigTemplate_0846b52e750cd484dd5b491b0e6459181a65156dfea52724e1359b8039fa3d4a extends Twig_Template
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
        $this->loadTemplate("dashboard/db-header.html.php", "dashboard/users/users.html.php", 1)->display($context);
        // line 2
        $this->loadTemplate("dashboard/db-menu.html.php", "dashboard/users/users.html.php", 2)->display($context);
        // line 3
        echo "    <div id=\"page-wrapper\" >
        <div id=\"page-inner\">
            ";
        // line 5
        $this->loadTemplate("alerts.html.php", "dashboard/users/users.html.php", 5)->display($context);
        // line 6
        echo "            <div class=\"row\">
                <div class=\"col-md-12\">
                <h3>Użytkownicy</h3>
                 </div>
                <hr />
            </div>
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <h4>Lista użytkowników użytkownika</h4>
                            <table class=\"table table-striped\">
                                <thead>
                                    <th>#id</th>
                                    <th>login</th>
                                    <th>prawa</th>
                                    <th>status</th>
                                    <th>dodany</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>doman</td>
                                        <td>sadmin</td>
                                        <td>aktywny</td>
                                        <td>2017-07-18</td>
                                        <td><a class=\"btn btn-default\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["APP_URI"]) ? $context["APP_URI"] : null), "html", null, true);
        echo "/users/password/user_id\">Zmień hasło</a> <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["APP_URI"]) ? $context["APP_URI"] : null), "html", null, true);
        echo "/users/edit/user_id\">Edytuj</a> <a class=\"btn btn-warning\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["APP_URI"]) ? $context["APP_URI"] : null), "html", null, true);
        echo "/users/status/user_id\">Deaktywuj</a> <a class=\"btn btn-danger\" href=\"dorobić popup lub osobną stronę z potwierdzeniem\">Usuń</a></td>
                                    </tr>
                                </tbody>
                              </table>
                        </div>
                  </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <h4>Dodaj użytkownika</h4>
                            <form action=\"\" method=\"POST\">
                                <div class=\"form-group\">
                                  <label for=\"f_login\">Login</label>
                                  <input name=\"f_login\" type=\"text\" class=\"form-control\" id=\"f_login\" placeholder=\"login\" required>
                                </div>
                                <div class=\"form-group\">
                                  <label for=\"f_password\">Hasło</label>
                                  <input name=\"f_password\" type=\"password\" class=\"form-control\" id=\"f_password\" placeholder=\"hasło\" required>
                                </div>
                                 <div class=\"form-group\">
                                  <label for=\"f_password2\">Powtórz hasło</label>
                                  <input name=\"f_password2\" type=\"password\" class=\"form-control\" id=\"f_password2\" placeholder=\"hasło\" required>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"f_role\">Uprawnienia</label>
                                <select class=\"form-control\" id=\"f_role\" name=\"f_role\">
                                    <option selected=\"selected\" value=\"\">Edytor</option>
                                    <option value=\"\">Admin</option>
                                </select>
                                </div>
                                <div class=\"form-group\">
                                 <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Dodaj użytkownika</button>
                                </div>
                           </form>
                        </div>
                  </div>
                </div>
                        
        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
";
        // line 77
        $this->loadTemplate("dashboard/db-footer.html.php", "dashboard/users/users.html.php", 77)->display($context);
    }

    public function getTemplateName()
    {
        return "dashboard/users/users.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 77,  58 => 33,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dashboard/users/users.html.php", "D:\\DyskGoogle\\www\\waxing-cms\\src\\templates\\dashboard\\users\\users.html.php");
    }
}
