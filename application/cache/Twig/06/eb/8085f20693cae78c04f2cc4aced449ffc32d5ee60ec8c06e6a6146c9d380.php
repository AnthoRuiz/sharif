<?php

/* pages/authentication/register_success.twig */
class __TwigTemplate_06eb8085f20693cae78c04f2cc4aced449ffc32d5ee60ec8c06e6a6146c9d380 extends Twig_Template
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
        // line 6
        $context["title"] = "Register";
        // line 7
        $this->env->loadTemplate("templates/simple_header.twig")->display($context);
        // line 8
        echo "
<div class=\"box success\">
\t<div class=\"judge_logo\">
\t\t<a href=\"";
        // line 11
        echo site_url();
        echo "\"><img src=\"";
        echo base_url("assets/images/banner.png");
        echo "\"/></a>
\t</div>
\t<div class=\"login_form\">
\t\t<div class=\"login1\">
\t\t\t<p style=\"width:100%;\">
\t\t\t\tRegistered successfully!
\t\t\t</p>
\t\t</div>
\t\t<div class=\"login2\">
\t\t\t<p style=\"margin:0;\">
\t\t\t\t<a href=\"";
        // line 21
        echo site_url("login");
        echo "\">Login</a>
\t\t\t</p>
\t\t</div>
\t</div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/authentication/register_success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 21,  28 => 11,  23 => 8,  21 => 7,  19 => 6,);
    }
}