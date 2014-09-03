<?php

/* pages/authentication/lost.twig */
class __TwigTemplate_2e5a51f5d087097beec37b7c0d7ba4294935aedcd2ec6c390d68a12f62a642b0 extends Twig_Template
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
        $context["title"] = "Lost Password";
        // line 7
        $this->env->loadTemplate("templates/simple_header.twig")->display($context);
        // line 8
        echo "
";
        // line 9
        echo form_open("login/lost");
        echo "
\t<div class=\"box login\">

\t\t<div class=\"judge_logo\">
\t\t\t<a href=\"";
        // line 13
        echo site_url();
        echo "\"><img src=\"";
        echo base_url("assets/images/banner.png");
        echo "\"/></a>
\t\t</div>

\t\t<div class=\"login_form\">
\t\t\t<div class=\"login1\">
\t\t\t\t<p>
\t\t\t\t\t<label for=\"form_email\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Email")), "html", null, true);
        echo "</label><br/>
\t\t\t\t\t<input id=\"form_email\" type=\"email\" name=\"email\" class=\"sharif_input\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\"/>
\t\t\t\t\t";
        // line 21
        echo form_error("email", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t</p>
\t\t\t\t";
        // line 23
        if ((isset($context["sent"]) ? $context["sent"] : null)) {
            // line 24
            echo "\t\t\t\t\t<div class=\"shj_ok\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("We sent you an email containing a link to reset your password")), "html", null, true);
            echo ".</div>
\t\t\t\t";
        }
        // line 26
        echo "\t\t\t</div>
\t\t\t<div class=\"login2\">
\t\t\t\t<p style=\"margin:0;\">
\t\t\t\t\t<a href=\"";
        // line 29
        echo site_url("login");
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Login")), "html", null, true);
        echo "</a>
\t\t\t\t\t<input type=\"submit\" value=";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Reset Password")), "html", null, true);
        echo " id=\"sharif_submit\"/>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t</div>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/authentication/lost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  70 => 29,  65 => 26,  59 => 24,  57 => 23,  52 => 21,  48 => 20,  44 => 19,  33 => 13,  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
