<?php

/* templates/baseportada.twig */
class __TwigTemplate_7c60d9600e9124bba6584315a5589e1b4ce4802643e64d33693944c6786eac14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head_title' => array($this, 'block_head_title'),
            'other_assets' => array($this, 'block_other_assets'),
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
        echo " - FACyT</title>
\t<meta content=\"text/html\" charset=\"UTF-8\">
\t<link rel=\"icon\" href=\"";
        // line 11
        echo base_url("assets/images/favicon.ico");
        echo "\"/>
\t<link rel=\"stylesheet\" type='text/css' href=\"";
        // line 12
        echo base_url("assets/styles/portada.css");
        echo "\"/>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo base_url("assets/styles/darkness/jquery-ui-1.10.1.custom.css");
        echo "\">
\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo base_url("assets/js/jquery-1.9.1.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo base_url("assets/js/jquery-ui-1.10.1.custom.min.js");
        echo "\"></script>

</head>

";
        // line 19
        $this->displayBlock('other_assets', $context, $blocks);
        // line 20
        echo "
<body>

\t<div id=\"area\">
\t\t<img src=\"/sharif/assets/images/logo_facyt.png\" style=\"width: 200px; 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-left: 5px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  float: left; 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-top: 3px\">
\t\t<img src=\"/sharif/assets/images/logo_uc.png\" style=\"width: 130px; 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   margin-left: 5px; 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   float: right; 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   margin-top: 3px\">

\t\t<div id = \"titulo\">
\t\t<strong>Sharif Juez en Línea</strong>
\t\t</div>
\t\t<div id=\"menu\">
\t\t<a href=\"";
        // line 37
        echo site_url("dashboard");
        echo "\">
\t\t\t<div>Maratón</div> 
\t\t</a>               
\t       \t<div>Práctica</div>
\t\t</div>

\t\t<div id=\"left_bar\">
\t\t\t<img src=\"/sharif/assets/images/uno.jpg\" style=\"width: 350px; 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   height: 300px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   margin-left: 5px; 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   margin-left: auto;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   margin-right: auto;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   margin-top: 5px\">


\t\t</div>
\t\t<div id=\"right_bar\">
\t\t\t<img src=\"/sharif/assets/images/dos.jpg\" style=\"width: 350px; 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   height: 300px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   margin-left: 5px; 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   margin-left: auto;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   margin-right: auto;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   margin-top: 5px\">

\t\t</div>


\t\t<div id = \"principal\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\$( \"#tabs\" ).tabs();
\t\t\t\t});
\t\t\t</script>

\t\t\t<div id=\"tabs\">
\t\t\t\t<ul>
\t\t\t\t<li><a href=\"#tabs-1\">¿Quienes Somos?</a></li>
\t\t\t\t<li><a href=\"#tabs-2\">Maratones</a></li>
\t\t\t\t<li><a href=\"#tabs-3\">Contacto</a></li>
\t\t\t\t</ul>
\t\t\t\t<div id=\"tabs-1\">
\t\t\t\t\t<p>tabs 1.</p>
\t\t\t\t</div>
\t\t\t\t<div id=\"tabs-2\">
\t\t\t\t\t<p>tabs 2.</p>
\t\t\t\t</div>
\t\t\t\t<div id=\"tabs-3\">
\t\t\t\t\t<p>tabs 3.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</body>
</html>";
    }

    // line 9
    public function block_head_title($context, array $blocks = array())
    {
    }

    // line 19
    public function block_other_assets($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "templates/baseportada.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 19,  133 => 9,  75 => 37,  56 => 20,  54 => 19,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  26 => 9,  21 => 6,);
    }
}
