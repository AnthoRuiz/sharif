<?php

/* templates/side_bar.twig */
class __TwigTemplate_3173a02cbdbba428d3f84bbd00915191863d2a324fed75815cda34c6590ae939 extends Twig_Template
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
        echo "<div id=\"side_bar\" class=\"sidebar_open\">
\t<ul>
\t\t<li class=\"color-dashboard";
        // line 8
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "dashboard")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 9
        echo site_url("dashboard");
        echo "\">
\t\t\t\t<i class=\"fa fa-dashboard fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Dashboard")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        // line 14
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") == 3)) {
            // line 15
            echo "\t\t<li class=\"color-settings";
            echo ((((isset($context["selected"]) ? $context["selected"] : null) == "settings")) ? (" selected") : (""));
            echo "\">
\t\t\t<a href=\"";
            // line 16
            echo site_url("settings");
            echo "\">
\t\t\t\t<i class=\"fa fa-gear fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">";
            // line 18
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Settings")), "html", null, true);
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-users";
            // line 21
            echo ((((isset($context["selected"]) ? $context["selected"] : null) == "users")) ? (" selected") : (""));
            echo "\">
\t\t\t<a href=\"";
            // line 22
            echo site_url("users");
            echo "\">
\t\t\t\t<i class=\"fa fa-users fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">";
            // line 24
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Users")), "html", null, true);
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 28
        echo "\t\t<li class=\"color-notifications";
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "notifications")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 29
        echo site_url("notifications");
        echo "\">
\t\t\t\t<i class=\"fa fa-bell fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Notifications")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-assignments";
        // line 34
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "assignments")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 35
        echo site_url("assignments");
        echo "\">
\t\t\t\t<i class=\"fa fa-folder-open fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Assignments")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-problems";
        // line 40
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "problems")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 41
        echo site_url("problems");
        echo "\">
\t\t\t\t<i class=\"fa fa-puzzle-piece fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Problems")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-submit";
        // line 46
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "submit")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 47
        echo site_url("submit");
        echo "\">
\t\t\t\t<i class=\"fa fa-location-arrow fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Submit")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-final_submissions";
        // line 52
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "final_submissions")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 53
        echo site_url("submissions/final");
        echo "\">
\t\t\t\t<i class=\"fa fa-map-marker fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Final Submissions")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-all_submissions";
        // line 58
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "all_submissions")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 59
        echo site_url("submissions/all");
        echo "\">
\t\t\t\t<i class=\"fa fa-bars fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("All Submissions")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-scoreboard";
        // line 64
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "scoreboard")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 65
        echo site_url("scoreboard");
        echo "\">
\t\t\t\t<i class=\"fa fa-star fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">";
        // line 67
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Scoreboard")), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t <!--CAMBIO DE IDIOMA JAKA-->
\t\t <br>
\t\t<li class=\"color-scoreboard";
        // line 72
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "language")) ? (" selected") : (""));
        echo "\">
\t\t\t<!-- <a href=\"";
        // line 73
        echo site_url(("language/" . (isset($context["ES"]) ? $context["ES"] : null)));
        echo "\"> -->
\t\t\t<a href=\"language/change/ES\">
\t\t\t\t<i class=\"fa fa-refresh fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Español</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-scoreboard";
        // line 79
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "language")) ? (" selected") : (""));
        echo "\">
\t\t\t<!-- <a href=\"";
        // line 80
        echo site_url(("language/" . (isset($context["ES"]) ? $context["ES"] : null)));
        echo "\"> -->
\t\t\t<a href=\"language/change/EN\">
\t\t\t\t<i class=\"fa fa-refresh fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">English</span>
\t\t\t</a>
\t\t</li>
\t</ul>
\t<div id=\"sidebar_bottom\">
\t\t<p>
\t\t\t<a href=\"https://github.com/mjnaderi/Sharif-Judge\" target=\"_blank\">&copy; Sharif Judge ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["SHJ_VERSION"]) ? $context["SHJ_VERSION"] : null), "html", null, true);
        echo "</a>
\t\t\t<a href=\"http://docs.sharifjudge.ir\" target=\"_blank\">Docs</a>
\t\t</p>
\t\t<p class=\"timer\"></p>
\t\t<div id=\"shj_collapse\" class=\"pointer\">
\t\t\t<i id=\"collapse\" class=\"fa fa-caret-square-o-left fa-lg\"></i><span class=\"sidebar_text\">Collapse Menu</span>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "templates/side_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 89,  197 => 80,  193 => 79,  180 => 72,  172 => 67,  163 => 64,  152 => 59,  142 => 55,  137 => 53,  107 => 41,  103 => 40,  97 => 37,  82 => 31,  77 => 29,  72 => 28,  65 => 24,  60 => 22,  56 => 21,  38 => 14,  32 => 11,  27 => 9,  23 => 8,  148 => 58,  139 => 65,  133 => 52,  130 => 63,  126 => 62,  119 => 60,  116 => 59,  109 => 55,  83 => 44,  54 => 18,  45 => 16,  39 => 13,  30 => 10,  25 => 8,  19 => 6,  228 => 74,  224 => 70,  221 => 69,  216 => 65,  211 => 64,  206 => 63,  201 => 54,  196 => 9,  191 => 75,  184 => 73,  177 => 66,  175 => 65,  171 => 64,  167 => 65,  161 => 59,  159 => 58,  157 => 61,  153 => 55,  151 => 69,  146 => 52,  136 => 45,  132 => 44,  122 => 47,  118 => 46,  110 => 34,  105 => 54,  101 => 53,  96 => 50,  88 => 34,  84 => 26,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  50 => 18,  44 => 13,  36 => 11,  31 => 9,  26 => 6,  324 => 130,  316 => 124,  307 => 121,  303 => 119,  298 => 117,  293 => 116,  291 => 115,  287 => 114,  282 => 112,  274 => 110,  269 => 109,  263 => 107,  261 => 106,  255 => 102,  247 => 98,  245 => 97,  241 => 96,  233 => 93,  227 => 92,  215 => 83,  204 => 81,  198 => 77,  189 => 74,  185 => 74,  182 => 69,  165 => 57,  145 => 39,  131 => 38,  127 => 49,  123 => 36,  112 => 43,  94 => 49,  92 => 35,  87 => 45,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  55 => 18,  52 => 15,  46 => 11,  40 => 15,  34 => 11,  29 => 7,);
    }
}