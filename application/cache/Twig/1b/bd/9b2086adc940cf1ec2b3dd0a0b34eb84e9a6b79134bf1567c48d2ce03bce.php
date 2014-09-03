<?php

/* pages/assignments.twig */
class __TwigTemplate_1bbd9b2086adc940cf1ec2b3dd0a0b34eb84e9a6b79134bf1567c48d2ce03bce extends Twig_Template
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
        $context["selected"] = "assignments";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-folder-open";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Assignments";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Assignments";
    }

    // line 14
    public function block_title_menu($context, array $blocks = array())
    {
        // line 15
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($_user_, "level") >= 2)) {
            // line 16
            echo "<span class=\"title_menu_item\"><a href=\"";
            echo site_url("assignments/add");
            echo "\"><i class=\"fa fa-plus color8\"></i> Add</a></span>
";
        }
    }

    // line 22
    public function block_main_content($context, array $blocks = array())
    {
        // line 23
        $context["msgclasses"] = array("success" => "shj_g", "notice" => "shj_o", "error" => "shj_r");
        // line 24
        if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_messages_);
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "\t<p class=\"";
            if (isset($context["msgclasses"])) { $_msgclasses_ = $context["msgclasses"]; } else { $_msgclasses_ = null; }
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_msgclasses_, $this->getAttribute($_message_, "type"), array(), "array"), "html", null, true);
            echo "\">";
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_message_, "text"), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
";
        // line 28
        if (isset($context["all_assignments"])) { $_all_assignments_ = $context["all_assignments"]; } else { $_all_assignments_ = null; }
        if ((twig_length_filter($this->env, $_all_assignments_) == 0)) {
            // line 29
            echo "\t<p style=\"text-align: center;\">Nothing to show...</p>
";
        } else {
            // line 31
            echo "<br/>
<table class=\"sharif_table\">
<thead>
<tr>
\t<th>Select</th>
\t<th>Name</th>
\t<th>Problems</th>
\t<th>Submissions</th>
\t<th>Coefficient</th>
\t<th>Start Time</th>
\t<th>Finish Time</th>
\t<th>Status</th>
\t<th>PDF</th>
\t";
            // line 44
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_user_, "level") > 0)) {
                // line 45
                echo "\t<th>Actions</th>
\t";
            }
            // line 47
            echo "</tr>
</thead>
";
            // line 49
            if (isset($context["all_assignments"])) { $_all_assignments_ = $context["all_assignments"]; } else { $_all_assignments_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $_all_assignments_));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "<tr>
\t<td><i class=\"pointer select_assignment fa ";
                // line 51
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo ((($this->getAttribute($_item_, "id") == $this->getAttribute($this->getAttribute($_user_, "selected_assignment"), "id"))) ? ("fa-check-square-o color6") : ("fa-square-o"));
                echo " fa-2x\" data-id=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "\"></i></td>
\t<td dir=\"auto\">";
                // line 52
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
                echo "</td>
\t<td><a href=\"";
                // line 53
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo site_url(("problems/" . $this->getAttribute($_item_, "id")));
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "problems"), "html", null, true);
                echo " problem";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo ((($this->getAttribute($_item_, "problems") != 1)) ? ("s") : (""));
                echo "</a></td>
\t<td>";
                // line 54
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "total_submits"), "html", null, true);
                echo " submission";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo ((($this->getAttribute($_item_, "total_submits") != 1)) ? ("s") : (""));
                echo "</td>
\t<td>
\t\t";
                // line 56
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ($this->getAttribute($_item_, "finished")) {
                    // line 57
                    echo "\t\t\t<span style=\"color: red;\">Finished</span>
\t\t";
                } else {
                    // line 59
                    echo "\t\t\t";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "coefficient"), "html", null, true);
                    echo " %
\t\t";
                }
                // line 61
                echo "\t</td>
\t<td>";
                // line 62
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "start_time"), "html", null, true);
                echo "</td>
\t<td>";
                // line 63
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "finish_time"), "html", null, true);
                echo "</td>
\t<td>
\t\t";
                // line 65
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ($this->getAttribute($_item_, "open")) {
                    // line 66
                    echo "\t\t\t<span style=\"color: green;\">Open</span>
\t\t";
                } else {
                    // line 68
                    echo "\t\t\t<span style=\"color: red;\">Close</span>
\t\t";
                }
                // line 70
                echo "\t</td>
\t<td>
\t\t<a href=\"";
                // line 72
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo site_url(("assignments/pdf/" . $this->getAttribute($_item_, "id")));
                echo "\"><img src=\"";
                echo base_url("assets/images/pdf.svg");
                echo "\" /></a>
\t</td>
\t";
                // line 74
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (($this->getAttribute($_user_, "level") > 0)) {
                    // line 75
                    echo "\t<td>
\t\t";
                    // line 76
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    if (($this->getAttribute($_user_, "level") >= 2)) {
                        // line 77
                        echo "\t\t\t<a href=\"";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo site_url(("assignments/downloadtestsdesc/" . $this->getAttribute($_item_, "id")));
                        echo "\"><i title=\"Download Tests and Descriptions\" class=\"fa fa-cloud-download fa-lg color11\"></i></a>
\t\t";
                    }
                    // line 79
                    echo "\t\t";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    if (($this->getAttribute($_user_, "level") >= 1)) {
                        // line 80
                        echo "\t\t\t<a href=\"";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo site_url(("assignments/download_submissions/by_user/" . $this->getAttribute($_item_, "id")));
                        echo "\"><i title=\"Download Final Submissions (by user)\" class=\"fa fa-download fa-lg color12\"></i></a>
\t\t\t<a href=\"";
                        // line 81
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo site_url(("assignments/download_submissions/by_problem/" . $this->getAttribute($_item_, "id")));
                        echo "\"><i title=\"Download Final Submissions (by problem)\" class=\"fa fa-download fa-lg color2\"></i></a>
\t\t";
                    }
                    // line 83
                    echo "\t\t";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    if (($this->getAttribute($_user_, "level") >= 2)) {
                        // line 84
                        echo "\t\t\t<a href=\"";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo site_url(("moss/" . $this->getAttribute($_item_, "id")));
                        echo "\"><i title=\"Detect Similar Codes\" class=\"fa fa-shield fa-lg color7\"></i></a>
\t\t";
                    }
                    // line 86
                    echo "\t\t";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    if (($this->getAttribute($_user_, "level") >= 2)) {
                        // line 87
                        echo "\t\t\t<a href=\"";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo site_url(("assignments/edit/" . $this->getAttribute($_item_, "id")));
                        echo "\"><i title=\"Edit\" class=\"fa fa-pencil fa-lg color3\"></i></a>
\t\t";
                    }
                    // line 89
                    echo "\t\t";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    if (($this->getAttribute($_user_, "level") >= 2)) {
                        // line 90
                        echo "\t\t\t<a href=\"";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo site_url(("assignments/delete/" . $this->getAttribute($_item_, "id")));
                        echo "\"><i title=\"Delete\" class=\"fa fa-times fa-lg color1\"></i></a>
\t\t";
                    }
                    // line 92
                    echo "\t</td>
\t";
                }
                // line 94
                echo "</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "</table>
";
        }
    }

    public function getTemplateName()
    {
        return "pages/assignments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 96,  288 => 94,  284 => 92,  277 => 90,  273 => 89,  266 => 87,  262 => 86,  255 => 84,  251 => 83,  245 => 81,  239 => 80,  235 => 79,  228 => 77,  225 => 76,  222 => 75,  219 => 74,  211 => 72,  207 => 70,  203 => 68,  199 => 66,  196 => 65,  190 => 63,  185 => 62,  182 => 61,  175 => 59,  171 => 57,  168 => 56,  159 => 54,  148 => 53,  143 => 52,  134 => 51,  131 => 50,  126 => 49,  122 => 47,  118 => 45,  115 => 44,  100 => 31,  96 => 29,  93 => 28,  90 => 27,  76 => 25,  71 => 24,  69 => 23,  66 => 22,  58 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
