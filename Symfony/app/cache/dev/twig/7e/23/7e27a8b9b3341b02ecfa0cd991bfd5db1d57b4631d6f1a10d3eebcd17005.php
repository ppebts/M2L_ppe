<?php

/* PPEM2LBundle:Default:layout.html.twig */
class __TwigTemplate_7e237e27a8b9b3341b02ecfa0cd991bfd5db1d57b4631d6f1a10d3eebcd17005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t<meta charset=\"UTF-8\">
\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'></head>
<body>

";
        // line 8
        echo twig_include($this->env, $context, "PPEM2LBundle:Default:menu.html.twig");
        echo "

\t";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "
</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " M2L ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PPEM2LBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  47 => 4,  40 => 11,  38 => 10,  33 => 8,  26 => 4,  21 => 1,);
    }
}
