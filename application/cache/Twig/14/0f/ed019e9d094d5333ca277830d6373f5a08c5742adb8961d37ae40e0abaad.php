<?php

/* templates/base.twig */
class __TwigTemplate_140fed019e9d094d5333ca277830d6373f5a08c5742adb8961d37ae40e0abaad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head_title' => array($this, 'block_head_title'),
            'other_assets' => array($this, 'block_other_assets'),
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'title_menu' => array($this, 'block_title_menu'),
            'main_content' => array($this, 'block_main_content'),
            'body_end' => array($this, 'block_body_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 9
        $this->displayBlock('head_title', $context, $blocks);
        echo " - Sharif Judge</title>
\t<meta content=\"text/html\" charset=\"UTF-8\">
\t<link rel=\"icon\" href=\"";
        // line 11
        echo base_url("assets/images/favicon.ico");
        echo "\"/>
\t<link rel=\"stylesheet\" type='text/css' href=\"";
        // line 12
        echo base_url("assets/styles/main.css");
        echo "\"/>
\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo base_url("assets/js/jquery-1.10.2.min.js");
        echo "\"></script>
\t<!-- You can use google's cdn for loading jquery: -->
\t<!-- <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script> -->
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo base_url("assets/js/jquery-ui-1.10.3.custom.min.js");
        echo "\"></script>
\t<!--scrips para la fecha -->
\t<script type='text/javascript' src=\"";
        // line 18
        echo base_url("assets/js/lang-all.js");
        echo "\"></script>
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo base_url("assets/styles/flick/jquery-ui-1.10.3.custom.min.css");
        echo "\"/>
\t<script type=\"text/javascript\" src=\"";
        // line 20
        echo base_url("assets/js/moment.min.js");
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 21
        echo base_url("assets/js/jquery-ui.custom-datepicker.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 22
        echo base_url("assets/js/jquery.hoverIntent.minified.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 23
        echo base_url("assets/js/jquery.cookie.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo base_url("assets/js/jquery.ba-resize.min.js");
        echo "\"></script>

\t<script type=\"text/javascript\" src=\"";
        // line 26
        echo base_url("assets/noty/jquery.noty.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 27
        echo base_url("assets/noty/layouts/center.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 28
        echo base_url("assets/noty/layouts/bottomRight.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo base_url("assets/noty/themes/default.js");
        echo "\"></script>

\t<link rel='stylesheet' type='text/css' href='";
        // line 31
        echo base_url("assets/nano_scroller/nanoscroller.css");
        echo "'/>
\t<script type='text/javascript' src=\"";
        // line 32
        echo base_url("assets/nano_scroller/jquery.nanoscroller.min.js");
        echo "\"></script>

\t<link rel='stylesheet' type='text/css' href='";
        // line 34
        echo base_url("assets/font/font-awesome/css/font-awesome.min.css");
        echo "'/>

</head>
<script>
shj={};
shj.site_url = '";
        // line 39
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, rtrim(site_url(), "/"), "js"), "html", null, true);
        echo "/';
shj.base_url = '";
        // line 40
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, rtrim(base_url(), "/"), "js"), "html", null, true);
        echo "/';
shj.csrf_token = \$.cookie('shjcsrftoken');
shj.offset = moment('";
        // line 42
        echo shj_now_str();
        echo "').diff(moment());
shj.time = moment();
shj.finish_time = moment(\"";
        // line 44
        echo $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "finish_time");
        echo "\");
shj.extra_time = moment.duration(";
        // line 45
        echo $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "extra_time");
        echo ", 'seconds');
// notifications
shj.check_for_notifications = false;
shj.notif_check_delay = 30;
shj.color_scheme = 'github';
</script>

<script type=\"text/javascript\" src=\"";
        // line 52
        echo base_url("assets/js/shj_functions.js");
        echo "\"></script>

";
        // line 54
        $this->displayBlock('other_assets', $context, $blocks);
        // line 55
        echo "
<body id=\"body\">
";
        // line 57
        $this->env->loadTemplate("templates/top_bar.twig")->display($context);
        // line 58
        $this->env->loadTemplate("templates/side_bar.twig")->display($context);
        // line 59
        echo "<div id=\"main_container\" class=\"scroll-wrapper\">
\t<div class=\"scroll-content\">

\t\t<div id=\"page_title\">
\t\t\t<i class=\"fa ";
        // line 63
        $this->displayBlock('icon', $context, $blocks);
        echo "\"></i>
\t\t\t<span dir=\"auto\">";
        // line 64
        $this->displayBlock('title', $context, $blocks);
        echo "</span>
\t\t\t";
        // line 65
        $this->displayBlock('title_menu', $context, $blocks);
        // line 66
        echo "\t\t</div>

\t\t<div id=\"main_content\">
\t\t\t";
        // line 69
        $this->displayBlock('main_content', $context, $blocks);
        // line 71
        echo "\t\t</div>
\t</div>
</div>
";
        // line 74
        $this->displayBlock('body_end', $context, $blocks);
        // line 75
        echo "</body>
</html>";
    }

    // line 9
    public function block_head_title($context, array $blocks = array())
    {
    }

    // line 54
    public function block_other_assets($context, array $blocks = array())
    {
    }

    // line 63
    public function block_icon($context, array $blocks = array())
    {
    }

    // line 64
    public function block_title($context, array $blocks = array())
    {
    }

    // line 65
    public function block_title_menu($context, array $blocks = array())
    {
    }

    // line 69
    public function block_main_content($context, array $blocks = array())
    {
        // line 70
        echo "\t\t\t";
    }

    // line 74
    public function block_body_end($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "templates/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 74,  224 => 70,  221 => 69,  216 => 65,  211 => 64,  206 => 63,  201 => 54,  196 => 9,  191 => 75,  184 => 71,  177 => 66,  175 => 65,  171 => 64,  167 => 63,  161 => 59,  159 => 58,  157 => 57,  153 => 55,  151 => 54,  146 => 52,  136 => 45,  132 => 44,  122 => 40,  118 => 39,  110 => 34,  105 => 32,  101 => 31,  96 => 29,  88 => 27,  84 => 26,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  50 => 16,  44 => 13,  36 => 11,  31 => 9,  26 => 6,  324 => 130,  316 => 124,  307 => 121,  303 => 119,  298 => 117,  293 => 116,  291 => 115,  287 => 114,  282 => 112,  274 => 110,  269 => 109,  263 => 107,  261 => 106,  255 => 102,  247 => 98,  245 => 97,  241 => 96,  233 => 93,  227 => 92,  215 => 83,  204 => 81,  198 => 77,  189 => 74,  185 => 74,  182 => 69,  165 => 57,  145 => 39,  131 => 38,  127 => 42,  123 => 36,  112 => 35,  94 => 34,  92 => 28,  87 => 31,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  55 => 18,  52 => 15,  46 => 11,  40 => 12,  34 => 9,  29 => 7,);
    }
}
