<?php

/* /var/www/html/atma/themes/atma-new/partials/current-events-sidebar.htm */
class __TwigTemplate_56cf765cfc6d166e5d23c1eaa6b33e49e9393d29d4f4aad8f19b841675cb2196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/atma/themes/atma-new/partials/current-events-sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"heading\">Current Events</h4>
            <p>
              Success story- <br>
              Spices products 
              Biofertilizers production, 
              Weekly Agro Advisory for 
              Pune District
            </p>
            <div class=\"bg-image\"><img src=\"{{'bg.png'|media}}\"></div>", "/var/www/html/atma/themes/atma-new/partials/current-events-sidebar.htm", "");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h4 class=\"heading\">Current Events</h4>
            <p>
              Success story- <br>
              Spices products 
              Biofertilizers production, 
              Weekly Agro Advisory for 
              Pune District
            </p>
            <div class=\"bg-image\"><img src=\"";
        // line 9
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter("bg.png");
        echo "\"></div>";
    }
}
