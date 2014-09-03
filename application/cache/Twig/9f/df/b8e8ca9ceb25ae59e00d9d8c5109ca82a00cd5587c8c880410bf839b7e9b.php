<?php

/* pages/submissions.twig */
class __TwigTemplate_9fdfb8e8ca9ceb25ae59e00d9d8c5109ca82a00cd5587c8c880410bf839b7e9b extends Twig_Template
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
            'title_menu' => array($this, 'block_title_menu'),
            'main_content' => array($this, 'block_main_content'),
            'body_end' => array($this, 'block_body_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        $context["selected"] = ($_view_ . "_submissions");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo ((($_view_ == "all")) ? ("fa-bars") : ("fa-map-marker"));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $_view_), "html", null, true);
        echo " Submissions";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $_view_), "html", null, true);
        echo " Submissions";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "\t<link rel='stylesheet' type='text/css' href='";
        echo base_url("assets/snippet/jquery.snippet.css");
        echo "'/>
\t<link rel='stylesheet' type='text/css' href='";
        // line 16
        echo base_url("assets/snippet/themes/github.css");
        echo "'/>
\t<script type='text/javascript' src=\"";
        // line 17
        echo base_url("assets/snippet/jquery.snippet.js");
        echo "\"></script>

\t<link rel='stylesheet' type='text/css' href='";
        // line 19
        echo base_url("assets/reveal/reveal.css");
        echo "'/>
\t<script type='text/javascript' src=\"";
        // line 20
        echo base_url("assets/reveal/jquery.reveal.js");
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 21
        echo base_url("assets/js/shj_submissions.js");
        echo "\"></script>
";
    }

    // line 26
    public function block_title_menu($context, array $blocks = array())
    {
        // line 27
        echo "\t<span class=\"title_menu_item\">
\t\t<a href=\"";
        // line 28
        if (isset($context["excel_link"])) { $_excel_link_ = $context["excel_link"]; } else { $_excel_link_ = null; }
        echo twig_escape_filter($this->env, $_excel_link_, "html", null, true);
        echo "\"><i class=\"fa fa-download color2\"></i> Excel</a>
\t</span>
\t";
        // line 30
        if (isset($context["filter_user"])) { $_filter_user_ = $context["filter_user"]; } else { $_filter_user_ = null; }
        if ($_filter_user_) {
            // line 31
            echo "\t<span class=\"title_menu_item\">
\t\t<a href=\"";
            // line 32
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (isset($context["filter_problem"])) { $_filter_problem_ = $context["filter_problem"]; } else { $_filter_problem_ = null; }
            echo site_url((("submissions/" . $_view_) . (($_filter_problem_) ? (("/problem/" . $_filter_problem_)) : (""))));
            echo "\">
\t\t<i class=\"fa fa-filter color1\"></i> Remove Username Filter</a>
\t</span>
\t";
        }
        // line 36
        echo "\t";
        if (isset($context["filter_problem"])) { $_filter_problem_ = $context["filter_problem"]; } else { $_filter_problem_ = null; }
        if ($_filter_problem_) {
            // line 37
            echo "\t<span class=\"title_menu_item\">
\t\t<a href=\"";
            // line 38
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (isset($context["filter_user"])) { $_filter_user_ = $context["filter_user"]; } else { $_filter_user_ = null; }
            echo site_url((("submissions/" . $_view_) . (($_filter_user_) ? (("/user/" . $_filter_user_)) : (""))));
            echo "\">
\t\t<i class=\"fa fa-filter color4\"></i> Remove Problem Filter</a>
\t</span>
\t";
        }
    }

    // line 47
    public function block_main_content($context, array $blocks = array())
    {
        // line 48
        echo "
<p>";
        // line 49
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $_view_), "html", null, true);
        echo " Submissions of <span dir=\"auto\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_user_, "selected_assignment"), "name"), "html", null, true);
        echo "</span></p>
";
        // line 50
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        if (($_view_ == "all")) {
            // line 51
            echo "<p><i class=\"fa fa-warning color3\"></i> You cannot change your final submissions after assignment finishes.</p>
";
        }
        // line 53
        echo "<table class=\"sharif_table\">
\t<thead>
\t\t<tr>
\t\t";
        // line 56
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        if (($_view_ == "all")) {
            // line 57
            echo "\t\t\t<th width=\"1%\" rowspan=\"2\">Final</th>
\t\t";
        }
        // line 59
        echo "\t\t";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($_user_, "level") > 0)) {
            // line 60
            echo "\t\t\t\t";
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (($_view_ == "all")) {
                // line 61
                echo "\t\t\t\t<th width=\"3%\" rowspan=\"2\">ID</th>
\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t<th width=\"2%\" rowspan=\"2\">#</th>
\t\t\t\t<th width=\"3%\" rowspan=\"2\">ID</th>
\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t<th width=\"6%\" rowspan=\"2\">Username</th>
\t\t\t\t<th width=\"14%\" rowspan=\"2\">Name</th>
\t\t\t\t<th width=\"4%\" rowspan=\"2\">Problem</th>
\t\t\t\t<th width=\"14%\" rowspan=\"2\">Submit Time</th>
\t\t\t\t<th colspan=\"3\">Score</th>
\t\t\t\t<th width=\"1%\" rowspan=\"2\">Language</th>
\t\t\t\t<th width=\"6%\" rowspan=\"2\">Status</th>
\t\t\t\t<th width=\"6%\" rowspan=\"2\">Code</th>
\t\t\t\t<th width=\"6%\" rowspan=\"2\">Log</th>
\t\t\t\t";
            // line 75
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_user_, "level") >= 2)) {
                // line 76
                echo "\t\t\t\t<th width=\"1%\" rowspan=\"2\">Actions</th>
\t\t\t\t";
            }
            // line 78
            echo "\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th width=\"5%\" class=\"score\">Score</th>
\t\t\t\t<th width=\"5%\" class=\"score\">Delay<br>%</th>
\t\t\t\t<th width=\"5%\" class=\"score\">Final Score</th>
\t\t\t</tr>
\t\t";
        } else {
            // line 85
            echo "\t\t\t\t<th width=\"10%\" rowspan=\"2\">Problem</th>
\t\t\t\t<th width=\"30%\" rowspan=\"2\">Submit Time</th>
\t\t\t\t<th width=\"7%\" colspan=\"3\">Score</th>
\t\t\t\t<th width=\"1%\" rowspan=\"2\">Language</th>
\t\t\t\t<th width=\"30%\" rowspan=\"2\">Status</th>
\t\t\t\t<th width=\"15%\" rowspan=\"2\">Code</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th width=\"7%\" class=\"score\">Score</th>
\t\t\t\t<th width=\"7%\" class=\"score\">Delay<br>%</th>
\t\t\t\t<th width=\"7%\" class=\"score\">Final Score</th>
\t\t\t</tr>
\t\t";
        }
        // line 98
        echo "\t</thead>
\t";
        // line 99
        $context["i"] = 0;
        // line 100
        echo "\t";
        $context["j"] = 0;
        // line 101
        echo "\t";
        $context["un"] = "";
        // line 102
        echo "\t";
        if (isset($context["submissions"])) { $_submissions_ = $context["submissions"]; } else { $_submissions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_submissions_);
        foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
            // line 103
            echo "\t\t";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
            // line 104
            echo "\t\t";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            if (isset($context["un"])) { $_un_ = $context["un"]; } else { $_un_ = null; }
            if (($this->getAttribute($_submission_, "username") != $_un_)) {
                // line 105
                echo "\t\t\t";
                if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                $context["j"] = ($_j_ + 1);
                // line 106
                echo "\t\t";
            }
            // line 107
            echo "\t\t";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            $context["un"] = $this->getAttribute($_submission_, "username");
            // line 108
            echo "\t\t<tr data-u=\"";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "username"), "html", null, true);
            echo "\" data-a=\"";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "assignment"), "html", null, true);
            echo "\" data-p=\"";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "problem"), "html", null, true);
            echo "\" data-s=\"";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "submit_id"), "html", null, true);
            echo "\" ";
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
            if ((($_view_ == "final") && ($_j_ % 2 == 0))) {
                echo "class=\"hl\"";
            }
            echo ">
\t\t";
            // line 109
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (($_view_ == "all")) {
                // line 110
                echo "\t\t\t<td>
\t\t\t\t<i class=\"pointer set_final fa ";
                // line 111
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                echo (($this->getAttribute($_submission_, "is_final")) ? ("fa-check-circle-o color11") : ("fa-circle-o"));
                echo " fa-2x\"></i>
\t\t\t</td>
\t\t";
            }
            // line 114
            echo "\t\t";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_user_, "level") > 0)) {
                // line 115
                echo "\t\t\t";
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (($_view_ == "all")) {
                    // line 116
                    echo "\t\t\t\t<td>";
                    if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "submit_id"), "html", null, true);
                    echo "</td>
\t\t\t";
                } else {
                    // line 118
                    echo "\t\t\t\t<td>";
                    if (isset($context["page_number"])) { $_page_number_ = $context["page_number"]; } else { $_page_number_ = null; }
                    if (isset($context["per_page"])) { $_per_page_ = $context["per_page"]; } else { $_per_page_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, ((($_page_number_ - 1) * $_per_page_) + $_i_), "html", null, true);
                    echo "</td>
\t\t\t\t<td>";
                    // line 119
                    if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "submit_id"), "html", null, true);
                    echo "</td>
\t\t\t";
                }
                // line 121
                echo "
\t\t\t<td><a href=\"";
                // line 122
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                if (isset($context["filter_problem"])) { $_filter_problem_ = $context["filter_problem"]; } else { $_filter_problem_ = null; }
                echo site_url((((("submissions/" . $_view_) . "/user/") . $this->getAttribute($_submission_, "username")) . (($_filter_problem_) ? (("/problem/" . $_filter_problem_)) : (""))));
                echo "\">";
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "username"), "html", null, true);
                echo "</a></td>
\t\t\t<td dir=\"auto\">";
                // line 123
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "name"), "html", null, true);
                echo "</td>
\t\t";
            }
            // line 125
            echo "\t\t\t<td><a href=\"";
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (isset($context["filter_user"])) { $_filter_user_ = $context["filter_user"]; } else { $_filter_user_ = null; }
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo site_url((((("submissions/" . $_view_) . (($_filter_user_) ? (("/user/" . $_filter_user_)) : (""))) . "/problem/") . $this->getAttribute($_submission_, "problem")));
            echo "\" title=\"";
            if (isset($context["problems"])) { $_problems_ = $context["problems"]; } else { $_problems_ = null; }
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_problems_, $this->getAttribute($_submission_, "problem"), array(), "array"), "name"), "html", null, true);
            echo "\">";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "problem"), "html", null, true);
            echo "</a></td>
\t\t\t<td>";
            // line 126
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "time"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 127
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "pre_score"), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<span class=\"tiny_text\" ";
            // line 129
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo ((($this->getAttribute($_submission_, "delay") > 0)) ? ("style=\"color:red;\"") : (""));
            echo "'>
\t\t\t\t";
            // line 130
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            if (($this->getAttribute($_submission_, "delay") <= 0)) {
                // line 131
                echo "\t\t\t\t\tNo Delay
\t\t\t\t";
            } else {
                // line 133
                echo "\t\t\t\t\t<span title=\"HH:MM\">";
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                echo time_hhmm($this->getAttribute($_submission_, "delay"));
                echo "</span>
\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t</span><br>
\t\t\t\t";
            // line 136
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "coefficient"), "html", null, true);
            echo "%
\t\t\t</td>
\t\t\t<td style=\"font-weight: bold;\">";
            // line 138
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "final_score"), "html", null, true);
            echo " </td>
\t\t\t<td>";
            // line 139
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "language"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"status\">
\t\t\t\t";
            // line 141
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            if (($this->getAttribute($_submission_, "status") == "Uploaded")) {
                // line 142
                echo "\t\t\t\t\tUploaded
\t\t\t\t";
            } else {
                // line 144
                echo "\t\t\t\t\t";
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                if ((twig_lower_filter($this->env, $this->getAttribute($_submission_, "status")) == "pending")) {
                    // line 145
                    echo "\t\t\t\t\t\t";
                    $context["submission_class"] = "btn";
                    // line 146
                    echo "\t\t\t\t\t";
                } elseif ((twig_lower_filter($this->env, $this->getAttribute($_submission_, "status")) == "score")) {
                    // line 147
                    echo "\t\t\t\t\t\t";
                    if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                    $context["submission_class"] = (($this->getAttribute($_submission_, "fullmark")) ? ("btn shj-green") : ("btn shj-red"));
                    // line 148
                    echo "\t\t\t\t\t";
                } else {
                    // line 149
                    echo "\t\t\t\t\t\t";
                    $context["submission_class"] = "btn shj-blue";
                    // line 150
                    echo "\t\t\t\t\t";
                }
                // line 151
                echo "\t\t\t\t\t<div class=\"";
                if (isset($context["submission_class"])) { $_submission_class_ = $context["submission_class"]; } else { $_submission_class_ = null; }
                echo twig_escape_filter($this->env, $_submission_class_, "html", null, true);
                echo "\" data-type=\"result\" >
\t\t\t\t\t\t";
                // line 152
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                if (($this->getAttribute($_submission_, "status") == "SCORE")) {
                    // line 153
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "final_score"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 155
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "status"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 157
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 159
            echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 161
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            if ((($this->getAttribute($_submission_, "file_type") == "zip") || ($this->getAttribute($_submission_, "file_type") == "pdf"))) {
                // line 162
                echo "\t\t\t\t\t<div class=\"btn shj-orange\" data-type=\"download\">Download</div>
\t\t\t\t";
            } else {
                // line 164
                echo "\t\t\t\t\t<div class=\"btn shj-orange\" data-type=\"code\" >Code</div>
\t\t\t\t";
            }
            // line 166
            echo "\t\t\t</td>
\t\t\t";
            // line 167
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_user_, "level") > 0)) {
                // line 168
                echo "\t\t\t<td>
\t\t\t\t";
                // line 169
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                if (($this->getAttribute($_submission_, "status") == "Uploaded")) {
                    // line 170
                    echo "\t\t\t\t\t---
\t\t\t\t";
                } else {
                    // line 172
                    echo "\t\t\t\t\t<div class=\"btn\" data-type=\"log\" >Log</div>
\t\t\t\t";
                }
                // line 174
                echo "\t\t\t</td>
\t\t\t";
            }
            // line 176
            echo "\t\t\t";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_user_, "level") >= 2)) {
                // line 177
                echo "\t\t\t\t<td>
\t\t\t\t\t<div class=\"shj_rejudge pointer\"><i class=\"fa fa-refresh fa-lg color10\"></i></div>
\t\t\t\t</td>
\t\t\t";
            }
            // line 181
            echo "\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "</table>

<p>
";
        // line 186
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        echo $_pagination_;
        echo "
</p>

";
    }

    // line 193
    public function block_body_end($context, array $blocks = array())
    {
        // line 194
        echo "<div id=\"shj_modal\" class=\"reveal-modal xlarge\">
\t<div class=\"modal_inside\">
\t\t<div style=\"text-align: center;\">Loading<br><img src=\"";
        // line 196
        echo base_url("assets/images/loading.gif");
        echo "\"/></div>
\t</div>
\t<a class=\"close-reveal-modal\">&#215;</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/submissions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 196,  542 => 194,  539 => 193,  530 => 186,  525 => 183,  518 => 181,  512 => 177,  508 => 176,  504 => 174,  500 => 172,  496 => 170,  493 => 169,  490 => 168,  487 => 167,  484 => 166,  480 => 164,  476 => 162,  473 => 161,  469 => 159,  465 => 157,  458 => 155,  451 => 153,  448 => 152,  442 => 151,  439 => 150,  436 => 149,  433 => 148,  429 => 147,  426 => 146,  423 => 145,  419 => 144,  415 => 142,  412 => 141,  406 => 139,  401 => 138,  395 => 136,  392 => 135,  385 => 133,  381 => 131,  378 => 130,  373 => 129,  367 => 127,  362 => 126,  347 => 125,  341 => 123,  331 => 122,  328 => 121,  322 => 119,  314 => 118,  307 => 116,  303 => 115,  299 => 114,  292 => 111,  289 => 110,  286 => 109,  265 => 108,  261 => 107,  258 => 106,  254 => 105,  249 => 104,  245 => 103,  239 => 102,  236 => 101,  233 => 100,  231 => 99,  228 => 98,  213 => 85,  204 => 78,  200 => 76,  197 => 75,  186 => 66,  181 => 63,  177 => 61,  173 => 60,  169 => 59,  165 => 57,  162 => 56,  157 => 53,  153 => 51,  150 => 50,  142 => 49,  139 => 48,  136 => 47,  125 => 38,  122 => 37,  118 => 36,  109 => 32,  106 => 31,  103 => 30,  97 => 28,  94 => 27,  91 => 26,  85 => 21,  81 => 20,  77 => 19,  72 => 17,  68 => 16,  63 => 15,  60 => 14,  52 => 10,  44 => 9,  37 => 8,  31 => 6,);
    }
}