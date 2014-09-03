<?php

/* pages/dashboard.twig */
class __TwigTemplate_44da4b800dd2e2480b6f95ff08ec2d3f8d67e6ede77c6a7a9d39b890ac0b5850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'other_assets' => array($this, 'block_other_assets'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["selected"] = "dashboard";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-dashboard";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Dashboard")), "html", null, true);
    }

    // line 11
    public function block_head_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Dashboard")), "html", null, true);
    }

    // line 15
    public function block_other_assets($context, array $blocks = array())
    {
        // line 16
        echo "
<link rel='stylesheet' type='text/css' href='";
        // line 17
        echo base_url("assets/fullcalendar/fullcalendar.css");
        echo "'/>
<script type='text/javascript' src=\"";
        // line 18
        echo base_url("assets/fullcalendar/fullcalendar.min.js");
        echo "\"></script>
<link rel='stylesheet' type='text/css' href='";
        // line 19
        echo base_url("assets/gridster/jquery.gridster.css");
        echo "'/>
<script type='text/javascript' src=\"";
        // line 20
        echo base_url("assets/gridster/jquery.gridster.min.js");
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 21
        echo base_url("assets/js/jquery.autoellipsis-1.0.10.min.js");
        echo "\"></script>


<script>
\$(document).ready(function () {
\t\$('#calendar').fullCalendar({
\t\tlang: 'es',
\t\ttimeFormat: 'HH:mm { - HH:mm}',
\t\teditable: false,
\t\theight: 280,
\t\tfirstDay: ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["week_start"]) ? $context["week_start"] : null), "html", null, true);
        echo ",
\t\tevents: [
\t\t\t";
        // line 33
        $context["colors"] = array(0 => "#812C8C", 1 => "#FF750D", 2 => "#2C578C", 3 => "#013440", 4 => "#A6222C", 5 => "#42758C", 6 => "#02A300", 7 => "#BA6900");
        // line 34
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_assignments"]) ? $context["all_assignments"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
            // line 35
            echo "\t\t\t\t{id:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "id"), "html", null, true);
            echo ",title:'";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "name"), "js"), "html", null, true);
            echo "', start:'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "start_time"), "html", null, true);
            echo "', end:' ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "finish_time"), "html", null, true);
            echo "',
\t\t\t\tallDay:false,color:'";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["colors"]) ? $context["colors"] : null), ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0") % twig_length_filter($this->env, (isset($context["colors"]) ? $context["colors"] : null))), array(), "array"), "html", null, true);
            echo "'}
\t\t\t";
            // line 37
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                echo ",";
            }
            // line 38
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t]
\t});
\tvar gridster = \$(\".gridster ul\").gridster({
\t\twidget_margins: [10, 10],
\t\twidget_base_dimensions: [350, 350],
\t\tserialize_params: function (\$w, wgd) {
\t\t\treturn {
\t\t\t\tr: wgd.row,
\t\t\t\tc: wgd.col,
\t\t\t\tx: wgd.size_x,
\t\t\t\ty: wgd.size_y
\t\t\t}
\t\t},
\t\tdraggable: {
\t\t\thandle: '.widget_title',
\t\t\tstop: function (event, ui) { // send widget positions to server for saving in database
\t\t\t\tvar positions = JSON.stringify(gridster.serialize());
\t\t\t\t\$.post(
\t\t\t\t\t\"";
        // line 57
        echo site_url("dashboard/widget_positions");
        echo "\",
\t\t\t\t\t{
\t\t\t\t\t\tpositions: positions,
\t\t\t\t\t\tshj_csrf_token: shj.csrf_token
\t\t\t\t\t}
\t\t\t\t);
\t\t\t}
\t\t}
\t}).data('gridster');
\t\$('.notif_text').ellipsis();
});
</script>
";
    }

    // line 73
    public function block_main_content($context, array $blocks = array())
    {
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 75
            echo "\t<p class=\"shj_error\">";
            echo (isset($context["error"]) ? $context["error"] : null);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "<div style=\"height: 15px;\"></div>
<div class=\"gridster\">
\t<?php \$i = 0; ?>
\t<ul>
\t\t<li data-row=\"";
        // line 81
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array"), "r", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-col=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array"), "c", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizex=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array"), "x", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizey=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 0, array(), "array"), "y", array(), "array")) : ("1")), "html", null, true);
        echo "\">
\t\t\t<div class=\"shj_widget\">
\t\t\t\t<div class=\"widget_title\"><i class=\"fa fa-calendar-o fa-lg color10\"></i> ";
        // line 83
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Calendar")), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"widget_scrollable scroll-wrapper\">
\t\t\t\t\t<div class=\"scroll-content\">
\t\t\t\t\t\t<div class=\"widget_contents_container\" id='calendar'></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>

\t\t<li data-row=\"";
        // line 92
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array"), "r", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-col=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array"), "c", array(), "array")) : ("2")), "html", null, true);
        echo "\"
\t\t    data-sizex=\"";
        // line 93
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array"), "x", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizey=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 1, array(), "array"), "y", array(), "array")) : ("1")), "html", null, true);
        echo "\">
\t\t\t<div class=\"shj_widget\">
\t\t\t\t<div class=\"widget_title\"><i class=\"fa fa-bell-o fa-lg color2\"></i>
\t\t\t\t\t";
        // line 96
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Latest Notifications")), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 97
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 98
            echo "\t\t\t\t\t\t<a title=\"New Notification\" href=\"";
            echo site_url("notifications/add");
            echo "\" class=\"pull-right\">
\t\t\t\t\t\t\t<i class=\"fa fa-plus color11\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"widget_scrollable scroll-wrapper\">
\t\t\t\t\t<div class=\"scroll-content\">
\t\t\t\t\t\t<div class=\"widget_contents_container\">
\t\t\t\t\t\t\t";
        // line 106
        if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : null)) == 0)) {
            // line 107
            echo "\t\t\t\t\t\t\t\t<p style=\"text-align: center;\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Nothing yet")), "html", null, true);
            echo "...</p>
\t\t\t\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 110
            echo "\t\t\t\t\t\t\t\t<div class=\"notif\" id=\"number";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "id"), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"notif_title\" dir=\"auto\">
\t\t\t\t\t\t\t\t\t\t<span class=\"anchor ttl_n\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "title"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notif_meta\" dir=\"ltr\">
\t\t\t\t\t\t\t\t\t\t";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "time"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 115
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"anchor edt_n\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Edit")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"anchor del_n\">";
                // line 117
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Delete")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"notif_text latest\" dir=\"auto\">";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "text"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>

\t\t<li data-row=\"";
        // line 130
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array"), "r", array(), "array")) : ("2")), "html", null, true);
        echo "\" data-col=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array"), "c", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizex=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array"), "x", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizey=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), 2, array(), "array"), "y", array(), "array")) : ("1")), "html", null, true);
        echo "\">
\t\t</li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 130,  316 => 124,  307 => 121,  303 => 119,  298 => 117,  293 => 116,  291 => 115,  287 => 114,  282 => 112,  274 => 110,  269 => 109,  263 => 107,  261 => 106,  255 => 102,  247 => 98,  245 => 97,  241 => 96,  233 => 93,  227 => 92,  215 => 83,  204 => 81,  198 => 77,  189 => 75,  185 => 74,  182 => 73,  165 => 57,  145 => 39,  131 => 38,  127 => 37,  123 => 36,  112 => 35,  94 => 34,  92 => 33,  87 => 31,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  55 => 16,  52 => 15,  46 => 11,  40 => 10,  34 => 9,  29 => 7,);
    }
}
