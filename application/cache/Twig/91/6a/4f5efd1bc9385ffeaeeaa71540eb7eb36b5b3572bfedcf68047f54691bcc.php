<?php

/* templates/simple_header.twig */
class __TwigTemplate_916a4f5efd1bc9385ffeaeeaa71540eb7eb36b5b3572bfedcf68047f54691bcc extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " - Sharif Judge</title>
\t<meta content=\"text/html\" charset=\"UTF-8\">
\t<link rel=\"icon\" href=\"";
        // line 11
        echo base_url("assets/images/favicon.ico");
        echo "\"/>
\t<link rel=\"stylesheet\" type='text/css' href=\"";
        // line 12
        echo base_url("assets/styles/login.css");
        echo "\"/>
</head>
<body id=\"body\">";
    }

    public function getTemplateName()
    {
        return "templates/simple_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  24 => 9,  98 => 38,  91 => 37,  83 => 35,  81 => 34,  76 => 31,  70 => 29,  68 => 28,  63 => 26,  58 => 24,  52 => 21,  48 => 20,  44 => 19,  33 => 12,  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
