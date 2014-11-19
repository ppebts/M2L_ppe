<?php

/* PPEM2LBundle:Default:menu.html.twig */
class __TwigTemplate_391adc7b22b983b54023a0212434800309f3df9f80db42d0d2a3dac07440f7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
<div id=\"menu\">
\t
<img id=\"logo\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/M2L/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">

\t<ul>
\t\t<li><a href=\"#\">Informations</a></li>
\t\t<li><a href=\"#\">Réservations</a></li>
\t\t<li><a href=\"#\">Annonces</a></li>
\t\t<li><a href=\"#\">Formations</a></li>
\t\t<li><a href=\"#\">Ligues</a></li>
\t\t<li><a href=\"#\">Contact</a></li>
\t\t<li><a href=\"#\">Connexion</a></li>
\t\t<li><a href=\"#\">Inscription</a></li>
\t\t<li><a href=\"#\">Mon compte</a></li>
\t</ul>

</div>";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/M2L/css/menu.css"), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "PPEM2LBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 2,  46 => 1,  27 => 7,  22 => 4,  20 => 1,  53 => 10,  47 => 4,  40 => 11,  38 => 10,  33 => 8,  26 => 4,  21 => 1,);
    }
}
