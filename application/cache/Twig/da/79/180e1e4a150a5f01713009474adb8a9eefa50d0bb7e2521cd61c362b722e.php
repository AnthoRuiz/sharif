<?php

/* pages/authentication/login.twig */
class __TwigTemplate_da79180e1e4a150a5f01713009474adb8a9eefa50d0bb7e2521cd61c362b722e extends Twig_Template
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
        $context["title"] = "Login";
        // line 7
        $this->env->loadTemplate("templates/simple_header.twig")->display($context);
        // line 8
        echo "
";
        // line 9
        echo form_open();
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
\t\t\t\t\t<label for=\"form_username\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Username")), "html", null, true);
        echo "</label><br/>
\t\t\t\t\t<input id=\"form_username\" type=\"text\" name=\"username\" required=\"required\" pattern=\"[0-9a-z]{3,20}\" title=\"The Username field must be between 3 and 20 characters in length, and contain only digits and lowercase letters\" class=\"sharif_input\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\" autofocus=\"autofocus\"/>
\t\t\t\t\t";
        // line 21
        echo form_error("username", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label for=\"form_password\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Password")), "html", null, true);
        echo "</label><br/>
\t\t\t\t\t<input id=\"form_password\" type=\"password\" name=\"password\" required=\"required\" pattern=\".{6,200}\" title=\"The Password field must be at least 6 characters in length\" class=\"sharif_input\"/>
\t\t\t\t\t";
        // line 26
        echo form_error("password", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t</p>
\t\t\t\t";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 29
            echo "\t\t\t\t\t<div class=\"shj_error\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Incorrect username or password")), "html", null, true);
            echo ".</div>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t</div>
\t\t\t<div class=\"login2\">
\t\t\t\t<p style=\"margin:0;\">
\t\t\t\t\t";
        // line 34
        if ((isset($context["registration_enabled"]) ? $context["registration_enabled"] : null)) {
            // line 35
            echo "\t\t\t\t\t<a href=\"";
            echo site_url("register");
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Register")), "html", null, true);
            echo "</a> |
\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t<a href=\"";
        echo site_url("login/lost");
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Reset Password")), "html", null, true);
        echo "</a>
\t\t\t\t\t<input type=\"submit\" value=";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Login")), "html", null, true);
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
        return "pages/authentication/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  91 => 37,  83 => 35,  81 => 34,  76 => 31,  70 => 29,  68 => 28,  63 => 26,  58 => 24,  52 => 21,  48 => 20,  44 => 19,  33 => 13,  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
