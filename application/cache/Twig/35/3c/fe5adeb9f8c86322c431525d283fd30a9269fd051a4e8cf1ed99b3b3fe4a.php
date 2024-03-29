<?php

/* pages/notifications.twig */
class __TwigTemplate_353cfe5adeb9f8c86322c431525d283fd30a9269fd051a4e8cf1ed99b3b3fe4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'title_menu' => array($this, 'block_title_menu'),
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
        $context["selected"] = "notifications";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-bell";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Notifications")), "html", null, true);
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Notifications")), "html", null, true);
    }

    // line 14
    public function block_title_menu($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 16
            echo "\t<span class=\"title_menu_item\"><a href=\"";
            echo site_url("notifications/add");
            echo "\"><i class=\"fa fa-plus color10\"></i> New</a></span>
\t";
        }
    }

    // line 22
    public function block_main_content($context, array $blocks = array())
    {
        // line 23
        if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : null)) == 0)) {
            // line 24
            echo "<p style=\"text-align: center;\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Nothing yet")), "html", null, true);
            echo "...</p>
";
        }
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 27
            echo "\t<div class=\"notif\" id=\"number";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "id"), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "id"), "html", null, true);
            echo "\">
\t\t<div class=\"notif_title\" dir=\"auto\">
\t\t\t<span class=\"anchor ttl_n\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "title"), "html", null, true);
            echo "</span>
\t\t\t<div class=\"notif_meta\">
\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "time"), "html", null, true);
            echo "
\t\t\t\t";
            // line 32
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                // line 33
                echo "\t\t\t\t\t<span class=\"anchor edt_n\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Edit")), "html", null, true);
                echo "</span>
\t\t\t\t\t<span class=\"anchor del_n\">";
                // line 34
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Delete")), "html", null, true);
                echo "</span>
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"notif_text\" dir=\"auto\">
\t\t\t";
            // line 39
            echo $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "text");
            echo "
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "pages/notifications.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  110 => 36,  105 => 34,  100 => 33,  98 => 32,  94 => 31,  89 => 29,  81 => 27,  77 => 26,  71 => 24,  69 => 23,  66 => 22,  58 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
