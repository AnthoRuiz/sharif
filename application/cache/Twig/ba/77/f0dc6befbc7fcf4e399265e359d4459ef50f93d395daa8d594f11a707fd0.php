<?php

/* templates/base.twig */
class __TwigTemplate_ba77f0dc6befbc7fcf4e399265e359d4459ef50f93d395daa8d594f11a707fd0 extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo base_url("assets/styles/flick/jquery-ui-1.10.3.custom.min.css");
        echo "\"/>
\t<script type=\"text/javascript\" src=\"";
        // line 18
        echo base_url("assets/js/moment.min.js");
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 19
        echo base_url("assets/js/jquery-ui.custom-datepicker.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 20
        echo base_url("assets/js/jquery.hoverIntent.minified.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 21
        echo base_url("assets/js/jquery.cookie.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 22
        echo base_url("assets/js/jquery.ba-resize.min.js");
        echo "\"></script>

\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo base_url("assets/noty/jquery.noty.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo base_url("assets/noty/layouts/center.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 26
        echo base_url("assets/noty/layouts/bottomRight.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 27
        echo base_url("assets/noty/themes/default.js");
        echo "\"></script>

\t<link rel='stylesheet' type='text/css' href='";
        // line 29
        echo base_url("assets/nano_scroller/nanoscroller.css");
        echo "'/>
\t<script type='text/javascript' src=\"";
        // line 30
        echo base_url("assets/nano_scroller/jquery.nanoscroller.min.js");
        echo "\"></script>

\t<link rel='stylesheet' type='text/css' href='";
        // line 32
        echo base_url("assets/font/font-awesome/css/font-awesome.min.css");
        echo "'/>

</head>
<script>
shj={};
shj.site_url = '";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, rtrim(site_url(), "/"), "js"), "html", null, true);
        echo "/';
shj.base_url = '";
        // line 38
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, rtrim(base_url(), "/"), "js"), "html", null, true);
        echo "/';
shj.csrf_token = \$.cookie('shjcsrftoken');
shj.offset = moment('";
        // line 40
        echo shj_now_str();
        echo "').diff(moment());
shj.time = moment();
shj.finish_time = moment(\"";
        // line 42
        echo $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "finish_time");
        echo "\");
shj.extra_time = moment.duration(";
        // line 43
        echo $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "extra_time");
        echo ", 'seconds');
// notifications
shj.check_for_notifications = false;
shj.notif_check_delay = 30;
shj.color_scheme = 'github';
</script>

<script type=\"text/javascript\" src=\"";
        // line 50
        echo base_url("assets/js/shj_functions.js");
        echo "\"></script>

";
        // line 52
        $this->displayBlock('other_assets', $context, $blocks);
        // line 53
        echo "
<body id=\"body\">
";
        // line 55
        $this->env->loadTemplate("templates/top_bar.twig")->display($context);
        // line 56
        $this->env->loadTemplate("templates/side_bar.twig")->display($context);
        // line 57
        echo "<div id=\"main_container\" class=\"scroll-wrapper\">
\t<div class=\"scroll-content\">

\t\t<div id=\"page_title\">
\t\t\t<i class=\"fa ";
        // line 61
        $this->displayBlock('icon', $context, $blocks);
        echo "\"></i>
\t\t\t<span dir=\"auto\">";
        // line 62
        $this->displayBlock('title', $context, $blocks);
        echo "</span>
\t\t\t";
        // line 63
        $this->displayBlock('title_menu', $context, $blocks);
        // line 64
        echo "\t\t</div>

\t\t<div id=\"main_content\">
\t\t\t";
        // line 67
        $this->displayBlock('main_content', $context, $blocks);
        // line 69
        echo "\t\t</div>
\t</div>
</div>
";
        // line 72
        $this->displayBlock('body_end', $context, $blocks);
        // line 73
        echo "</body>
</html>";
    }

    // line 9
    public function block_head_title($context, array $blocks = array())
    {
    }

    // line 52
    public function block_other_assets($context, array $blocks = array())
    {
    }

    // line 61
    public function block_icon($context, array $blocks = array())
    {
    }

    // line 62
    public function block_title($context, array $blocks = array())
    {
    }

    // line 63
    public function block_title_menu($context, array $blocks = array())
    {
    }

    // line 67
    public function block_main_content($context, array $blocks = array())
    {
        // line 68
        echo "\t\t\t";
    }

    // line 72
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
        return array (  223 => 72,  219 => 68,  216 => 67,  211 => 63,  206 => 62,  196 => 52,  191 => 9,  186 => 73,  184 => 72,  179 => 69,  177 => 67,  172 => 64,  170 => 63,  166 => 62,  162 => 61,  156 => 57,  154 => 56,  152 => 55,  146 => 52,  141 => 50,  131 => 43,  127 => 42,  122 => 40,  117 => 38,  113 => 37,  105 => 32,  100 => 30,  96 => 29,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  54 => 17,  50 => 16,  44 => 13,  36 => 11,  31 => 9,  26 => 6,  327 => 130,  319 => 124,  310 => 121,  306 => 119,  301 => 117,  296 => 116,  294 => 115,  290 => 114,  285 => 112,  277 => 110,  272 => 109,  266 => 107,  264 => 106,  258 => 102,  250 => 98,  248 => 97,  244 => 96,  236 => 93,  230 => 92,  218 => 83,  207 => 81,  201 => 61,  192 => 75,  188 => 74,  185 => 73,  168 => 57,  148 => 53,  134 => 38,  130 => 37,  126 => 36,  115 => 35,  97 => 34,  95 => 33,  90 => 31,  78 => 22,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  55 => 16,  52 => 15,  46 => 11,  40 => 12,  34 => 9,  29 => 7,);
    }
}
