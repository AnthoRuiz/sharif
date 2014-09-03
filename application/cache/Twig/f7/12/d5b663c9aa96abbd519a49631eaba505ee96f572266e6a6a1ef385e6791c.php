<?php

/* templates/top_bar.twig */
class __TwigTemplate_f712d5b663c9aa96abbd519a49631eaba505ee96f572266e6a6a1ef385e6791c extends Twig_Template
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
        echo "<div id=\"top_bar\" class=\"color-";
        echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
        echo "\">
\t<div class=\"top_object shj_menu\" id=\"user_top\">
\t\t<a href=\"";
        // line 8
        echo site_url("profile");
        echo "\" id=\"profile_link\"><i class=\"fa fa-user\"></i></a>
\t\t<div class=\"top_menu user-menu\">
\t\t\t<div class=\"gravatar\"><img src=\"";
        // line 10
        echo base_url(("files/images/thumbs/" . (isset($context["avatar"]) ? $context["avatar"] : null)));
        echo "\"/></div>
\t\t\t<div class=\"name\"><i class=\"fa fa-user\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"menu-controls\">
\t\t\t\t<a href=\"";
        // line 13
        echo site_url("logout");
        echo "\" class=\"logout-btn\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Sign Out")), "html", null, true);
        echo "</a>
\t\t\t\t<a href=\"";
        // line 14
        echo site_url("profile");
        echo "\" class=\"profile-btn\"><i class=\"fa fa-wrench\"></i> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Profile")), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
        echo "
\t<div class=\"top_object countdown\" id=\"countdown\">\t\t\t\t\t\t
\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_days\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"days_label\"></span>
\t\t</div>
\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_hours\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"hours_label\"></span>
\t\t</div>
\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_minutes\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"minutes_label\"></span>
\t\t</div>
\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_seconds\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"seconds_label\"></span>
\t\t</div>
\t</div>
\t<div class=\"top_object countdown\" id=\"extra_time\">
\t\t<i class=\"fa fa-plus-square fa-2x\"></i>
\t\t<div class=\"time_block\">
\t\t\t<span>Extra</span><br><span>Time</span>
\t\t</div>
\t</div>
\t<div id=\"shj_logo\" class=\"top_left\">
\t\t<a href=\"";
        // line 44
        echo site_url("/");
        echo "\">
\t\t\t<img src=\"";
        // line 45
        echo base_url("assets/images/paperplane.svg");
        echo "\"/>
\t\t\t<h1 class=\"shjlogo-text\">Sharif <span>Judge</span></h1>
\t\t</a>
\t</div>
\t";
        // line 49
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 50
            echo "\t<div class=\"top_object shj_menu top_left\" id=\"admin_tools_top\">
\t\tTools
\t\t<ul class=\"top_menu\">
\t\t\t<li><a href=\"";
            // line 53
            echo site_url("rejudge");
            echo "\">Rejudge</a></li>
\t\t\t<li><a href=\"";
            // line 54
            echo site_url("queue");
            echo "\">Submission Queue</a></li>
\t\t\t<li><a href=\"";
            // line 55
            echo site_url(("moss/" . $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "id", array(), "array")));
            echo "\">Cheat Detection</a></li>
\t\t</ul>
\t</div>
\t";
        }
        // line 59
        echo "\t<div class=\"top_object shj_menu top_left\" id=\"select_assignment_top\">
\t\t<a href=\"";
        // line 60
        echo site_url("assignments");
        echo "\"><span dir=\"auto\" class=\"assignment_name\">";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "name")) > 30)) ? ((twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "name"), 0, 30) . "...")) : ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "name"))), "html", null, true);
        echo "</span></a>
\t\t<ul class=\"top_menu\" id=\"select_assignment_menu\">
\t\t\t";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, (isset($context["all_assignments"]) ? $context["all_assignments"] : null)), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["assignment_item"]) {
            // line 63
            echo "\t\t\t\t<li class=\"assignment_block select_assignment\">
\t\t\t\t\t<i class=\"fa ";
            // line 64
            echo ((($this->getAttribute((isset($context["assignment_item"]) ? $context["assignment_item"] : null), "id") == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "id"))) ? ("fa-check-square-o color6") : ("fa-square-o"));
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment_item"]) ? $context["assignment_item"] : null), "id"), "html", null, true);
            echo "\"></i>
\t\t\t\t\t<span class=\"assignment_item\" dir=\"auto\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment_item"]) ? $context["assignment_item"] : null), "name"), "html", null, true);
            echo "</span>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t<li>
\t\t\t<a href=\"";
        // line 69
        echo site_url("assignments");
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("All Assignments")), "html", null, true);
        echo "</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<div class=\"top_object top_left shj-spinner\" style=\"display: none;\">
\t\t<i class=\"fa fa-refresh fa-spin fa-lg\"></i>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "templates/top_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 69,  139 => 65,  133 => 64,  119 => 60,  116 => 59,  109 => 55,  101 => 53,  94 => 49,  45 => 14,  39 => 13,  30 => 10,  25 => 8,  19 => 6,  223 => 72,  219 => 68,  216 => 67,  211 => 63,  206 => 62,  196 => 52,  191 => 9,  186 => 73,  184 => 72,  179 => 69,  177 => 67,  172 => 64,  170 => 63,  166 => 62,  162 => 61,  156 => 57,  154 => 56,  152 => 55,  146 => 52,  141 => 50,  131 => 43,  127 => 42,  122 => 40,  117 => 38,  113 => 37,  105 => 54,  100 => 30,  96 => 50,  91 => 27,  87 => 45,  83 => 44,  79 => 24,  54 => 18,  50 => 16,  44 => 13,  36 => 11,  31 => 9,  26 => 6,  327 => 130,  319 => 124,  310 => 121,  306 => 119,  301 => 117,  296 => 116,  294 => 115,  290 => 114,  285 => 112,  277 => 110,  272 => 109,  266 => 107,  264 => 106,  258 => 102,  250 => 98,  248 => 97,  244 => 96,  236 => 93,  230 => 92,  218 => 83,  207 => 81,  201 => 61,  192 => 75,  188 => 74,  185 => 73,  168 => 57,  148 => 68,  134 => 38,  130 => 63,  126 => 62,  115 => 35,  97 => 34,  95 => 33,  90 => 31,  78 => 22,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  55 => 16,  52 => 15,  46 => 11,  40 => 12,  34 => 11,  29 => 7,);
    }
}
