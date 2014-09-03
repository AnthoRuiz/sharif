<?php

/* pages/submit.twig */
class __TwigTemplate_84c09d974adba9ecca40801d3b94f15134573d80a0fd4949835abd1085b20274 extends Twig_Template
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
        // line 6
        $context["selected"] = "submit";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-location-arrow";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Submit")), "html", null, true);
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Submit")), "html", null, true);
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<script>
\tshj.p={};
\t";
        // line 17
        echo (isset($context["problems_js"]) ? $context["problems_js"] : null);
        echo "
\t\$(document).ready(function(){
\t\t\$(\"select#problems\").change(function(){
\t\t\tvar v = \$(this).val();
\t\t\t\$('select#languages').empty();
\t\t\t\$('<option value=\"0\" selected=\"selected\">-- Select Language --</option>').appendTo('select#languages');
\t\t\tif (v==0)
\t\t\t\treturn;
\t\t\tfor (var i=0;i<shj.p[v].length;i++)
\t\t\t\t\$('<option value=\"'+shj.p[v][i]+'\">'+shj.p[v][i]+'</option>').appendTo('select#languages');
\t\t});
\t});
</script>
";
    }

    // line 34
    public function block_main_content($context, array $blocks = array())
    {
        // line 35
        if (((isset($context["error"]) ? $context["error"] : null) != "none")) {
            // line 36
            echo "<p>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</p>
";
        } else {
            // line 38
            echo "\t<p>Selected assignment: <span dir=\"auto\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "name"), "html", null, true);
            echo "</span></p>
\t<p>Coefficient: ";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["coefficient"]) ? $context["coefficient"] : null), "html", null, true);
            echo "%</p>
\t";
            // line 40
            echo form_open_multipart("submit");
            echo "
\t<p class=\"input_p\">
\t\t<label for=\"problems\" class=\"tiny\">Problem:</label>
\t\t<select id=\"problems\" name =\"problem\" class=\"sharif_input\">
\t\t\t<option value=\"0\" selected=\"selected\">-- ";
            // line 44
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Select Problem")), "html", null, true);
            echo " --</option>
\t\t\t";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) ? $context["problems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 46
                echo "\t\t\t\t<option dir=\"auto\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t</select>
\t\t";
            // line 49
            echo form_error("problem", "<div class=\"shj_error\">", "</div>");
            echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"languages\" class=\"tiny\">";
            // line 52
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Language")), "html", null, true);
            echo ":</label>
\t\t<select id=\"languages\" name=\"language\" class=\"sharif_input\">
\t\t\t<option value=\"0\" selected=\"selected\">-- ";
            // line 54
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Select Language")), "html", null, true);
            echo " --</option>
\t\t</select>
\t\t";
            // line 56
            echo form_error("language", "<div class=\"shj_error\">", "</div>");
            echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"file\" class=\"tiny\">File:</label>
\t\t<input type=\"file\" id=\"file\" class=\"sharif_input medium\" name=\"userfile\" />
\t\t";
            // line 61
            if (((isset($context["upload_state"]) ? $context["upload_state"] : null) == "error")) {
                // line 62
                echo "\t\t<div class=\"shj_error\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("Error uploading file")), "html", null, true);
                echo ".</div>
\t\t";
            } elseif (((isset($context["upload_state"]) ? $context["upload_state"] : null) == "ok")) {
                // line 64
                echo "\t\t<div class=\"shj_ok\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('lang')->getCallable(), array("File uploaded successfully. See the result in All Submissions")), "html", null, true);
                echo ".</div>
\t\t";
            }
            // line 66
            echo "\t</p>
\t<p class=\"input_p\">
\t\t<input type=\"submit\" value=\"Submit\" class=\"sharif_input\"/>
\t</p>
\t</form>
";
        }
    }

    public function getTemplateName()
    {
        return "pages/submit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 66,  158 => 64,  152 => 62,  150 => 61,  142 => 56,  137 => 54,  132 => 52,  126 => 49,  123 => 48,  112 => 46,  108 => 45,  104 => 44,  97 => 40,  93 => 39,  88 => 38,  82 => 36,  80 => 35,  77 => 34,  59 => 17,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
