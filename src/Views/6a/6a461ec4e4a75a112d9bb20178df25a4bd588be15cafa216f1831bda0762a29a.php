<?php

/* dashboard/db-footer.html.php */
class __TwigTemplate_483d6163ccbfee25baf226c710bf4be9bbd3394a42bb26bc8ea8f3301aaf8482 extends Twig_Template
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
        echo "    <div class=\"footer\">
        <div class=\"row\">
            <div class=\"col-lg-12\" >
                &copy;  2014 yourdomain.com | Design by: <a href=\"domanpanda@gmail.com\" style=\"color:#fff;\"  target=\"_blank\">Dominik Panas</a>
            </div>
        </div>
    </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src=\"assets/js/jquery-1.10.2.js\"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src=\"assets/js/bootstrap.min.js\"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src=\"assets/js/custom.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "dashboard/db-footer.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dashboard/db-footer.html.php", "D:\\DyskGoogle\\www\\waxing-cms\\src\\templates\\dashboard\\db-footer.html.php");
    }
}
