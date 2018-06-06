<?php

/* /var/www/html/kvkcms/themes/atma-new/partials/current-events-sidebar.htm */
class __TwigTemplate_40d77216aad95d45de51cbf36813b6723696c50533b8e97979c6e8f125002410 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("bg.png");
        echo "\"></div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/partials/current-events-sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  23 => 1,);
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
            <div class=\"bg-image\"><img src=\"{{'bg.png'|media}}\"></div>", "/var/www/html/kvkcms/themes/atma-new/partials/current-events-sidebar.htm", "");
    }
}
