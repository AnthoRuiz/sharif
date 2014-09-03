<?php

/* pages/profile.twig */
class __TwigTemplate_f3443b90ae60f0df7bbd3653fd1015bc8922029945f9d630d5771a850b20830d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["selected"] = "users";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-user";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Profile")), "html", null, true);
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Profile")), "html", null, true);
    }

    // line 14
    public function block_main_content($context, array $blocks = array())
    {
        // line 15
        echo "<p class=\"input_p\">
";
        // line 16
        if (((isset($context["form_status"]) ? $context["form_status"] : null) == "ok")) {
            // line 17
            echo "<div class=\"shj_ok\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Profile updated successfully")), "html", null, true);
            echo ".</div>
";
        } elseif (((isset($context["form_status"]) ? $context["form_status"] : null) == "error")) {
            // line 19
            echo "\t<div class=\"shj_error\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Error updating profile")), "html", null, true);
            echo ".</div>
";
        } elseif (((isset($context["form_status"]) ? $context["form_status"] : null) == "format")) {
            // line 21
            echo "\t<div class=\"shj_error\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Format error")), "html", null, true);
            echo ".</div>
";
        }
        // line 23
        echo "</p>
 <!--";
        // line 24
        echo form_open(("profile/" . (isset($context["id"]) ? $context["id"] : null)));
        echo "-->
 ";
        // line 25
        echo form_open_multipart(("profile/" . (isset($context["id"]) ? $context["id"] : null)));
        echo "
<p class=\"input_p clear\">
\t<label for=\"form_username\" class=\"short2\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Username")), "html", null, true);
        echo ":<br>
\t\t<span class=\"form_comment\">";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("You cannot change username")), "html", null, true);
        echo ".</span>
\t</label>
\t<input id=\"form_username\" type=\"text\" name=\"username\" class=\"sharif_input medium\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["edit_username"]) ? $context["edit_username"] : null), "html", null, true);
        echo "\"  disabled/>
</p>
<p class=\"input_p clear\">
\t<label for=\"form_name\" class=\"short2\">";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Name")), "html", null, true);
        echo ":</label>
\t<input id=\"form_name\" type=\"text\" name=\"display_name\" class=\"sharif_input medium\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["display_name"]) ? $context["display_name"] : null), "html", null, true);
        echo "\"/>
\t";
        // line 35
        echo form_error("display_name", "<div class=\"shj_error\">", "</div>");
        echo "
</p>
<p class=\"input_p clear\">
\t<label for=\"form_email\" class=\"short2\">";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Email")), "html", null, true);
        echo ":</label>
\t<input id=\"form_email\" type=\"text\" name=\"email\" class=\"sharif_input medium\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\"/>
\t";
        // line 40
        echo form_error("email", "<div class=\"shj_error\">", "</div>");
        echo "
</p>
<p class=\"input_p clear\">
\t<label for=\"form_password\" class=\"short2\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Password")), "html", null, true);
        echo ":
\t\t<span class=\"form_comment\">";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("If you dont want to change password, leave this blank")), "html", null, true);
        echo ".</span>
\t</label>
\t<input id=\"form_password\" type=\"password\" name=\"password\" class=\"sharif_input medium\"/>
\t";
        // line 47
        echo form_error("password", "<br><span class=\"shj_error\">", "</span>");
        echo "
</p>
<p class=\"input_p clear\">
\t<label for=\"form_password_2\" class=\"short2\">";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Password Again")), "html", null, true);
        echo ":</label>
\t<input id=\"form_password_2\" type=\"password\" name=\"password_again\" class=\"sharif_input medium\"/>
\t";
        // line 52
        echo form_error("password_again", "<div class=\"shj_error\">", "</div>");
        echo "
</p>
<p class=\"input_p clear\">
\t<label for=\"avatar\" class=\"short2\">Avatar:<br>
\t\t<span class=\"form_comment\">";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("formats allowed")), "html", null, true);
        echo ": gif|jpg|png|jpeg.</span>
\t</label>
\t<br>
\t<input id=\"avatar\" type=\"file\" name=\"userfile\" class=\"sharif_input medium\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["avatar"]) ? $context["avatar"] : null), "html", null, true);
        echo "\"/>

\t";
        // line 61
        echo form_error("avatar", "<div class=\"shj_error\">", "</div>");
        echo "
</p>
";
        // line 63
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") == 3)) {
            // line 64
            echo "<p class=\"input_p clear\">
\t<label for=\"form_role\" class=\"short2\">User Role:</label>
\t<select id=\"form_role\" name=\"role\" class=\"sharif_input\">
\t\t<option value=\"admin\" ";
            // line 67
            echo ((((isset($context["role"]) ? $context["role"] : null) == "admin")) ? ("selected=\"selected\"") : (""));
            echo " >admin</option>
\t\t<option value=\"head_instructor\" ";
            // line 68
            echo ((((isset($context["role"]) ? $context["role"] : null) == "head_instructor")) ? ("selected=\"selected\"") : (""));
            echo " >head_instructor</option>
\t\t<option value=\"instructor\" ";
            // line 69
            echo ((((isset($context["role"]) ? $context["role"] : null) == "instructor")) ? ("selected=\"selected\"") : (""));
            echo " >instructor</option>
\t\t<option value=\"student\" ";
            // line 70
            echo ((((isset($context["role"]) ? $context["role"] : null) == "student")) ? ("selected=\"selected\"") : (""));
            echo " >student</option>
\t</select>
\t";
            // line 72
            echo form_error("role", "<div class=\"shj_error\">", "</div>");
            echo "
</p>
";
        }
        // line 75
        echo "<p class=\"input_p\">

\t<input type=\"submit\" value=\"save\" class=\"sharif_input\"/>
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "pages/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 75,  200 => 72,  195 => 70,  191 => 69,  187 => 68,  183 => 67,  178 => 64,  176 => 63,  171 => 61,  166 => 59,  160 => 56,  153 => 52,  148 => 50,  142 => 47,  136 => 44,  132 => 43,  126 => 40,  122 => 39,  118 => 38,  112 => 35,  108 => 34,  104 => 33,  98 => 30,  93 => 28,  89 => 27,  84 => 25,  80 => 24,  77 => 23,  71 => 21,  65 => 19,  59 => 17,  57 => 16,  54 => 15,  51 => 14,  45 => 10,  39 => 9,  33 => 8,  28 => 6,);
    }
}
