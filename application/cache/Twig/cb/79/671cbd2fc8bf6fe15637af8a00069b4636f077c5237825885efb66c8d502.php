<?php

/* pages/portada.twig */
class __TwigTemplate_cb79671cbd2fc8bf6fe15637af8a00069b4636f077c5237825885efb66c8d502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/baseportada.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/baseportada.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Portada";
    }

    // line 9
    public function block_head_title($context, array $blocks = array())
    {
        echo "Portada";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "   aloooo
";
    }

    public function getTemplateName()
    {
        return "pages/portada.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  42 => 12,  36 => 9,  30 => 8,);
    }
}
