<?php

/* /var/www/html/kvkcms/themes/atma-new/pages/404.htm */
class __TwigTemplate_6c4783fc6bd85e4212dfe543cf28495c4f57f84b3417097c58b3771b85a73c7b extends Twig_Template
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
        echo "<div class=\"jumbotron text-center\">
    <h2>Page not found...</h2>
    <p>We're sorry, but the page you requested cannot be found.</p>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron text-center\">
    <h2>Page not found...</h2>
    <p>We're sorry, but the page you requested cannot be found.</p>
</div>", "/var/www/html/kvkcms/themes/atma-new/pages/404.htm", "");
    }
}
