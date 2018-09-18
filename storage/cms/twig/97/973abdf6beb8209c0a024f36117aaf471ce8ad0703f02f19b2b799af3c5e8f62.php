<?php

/* /var/www/html/kvkcms/themes/atma-new/partials/header.htm */
class __TwigTemplate_89b43d49417d68ed354019226b309f78253e6c1cfea3942be76288c071451ab1 extends Twig_Template
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
        echo "<div class=\"top-header\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"col-lg-2\">
                          <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icar logo.gif");
        echo "\" alt=\"icar logo.gif\" />
</div>
      <div class=\"col-lg-8\">
        <p class=\"head-greeen\">Gramonnati Mandal's</p>
        <p class=\"head-red\">KRISHI VIGYAN KENDRA </p>
        <p class=\"head-grey\">NARAYANGAON TALUKA-JUNNAR DIST- PUNE</p>
      </div>
      <div class=\"col-lg-2\">
                                <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Gramonnati single.jpg");
        echo "\" alt=\"Gramonnati single.jpg\" />
</div>
      </div>
    </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 13,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"top-header\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"col-lg-2\">
                          <img src=\"{{ 'assets/images/icar logo.gif'|theme }}\" alt=\"icar logo.gif\" />
</div>
      <div class=\"col-lg-8\">
        <p class=\"head-greeen\">Gramonnati Mandal's</p>
        <p class=\"head-red\">KRISHI VIGYAN KENDRA </p>
        <p class=\"head-grey\">NARAYANGAON TALUKA-JUNNAR DIST- PUNE</p>
      </div>
      <div class=\"col-lg-2\">
                                <img src=\"{{ 'assets/images/Gramonnati single.jpg'|theme }}\" alt=\"Gramonnati single.jpg\" />
</div>
      </div>
    </div>
    </div>", "/var/www/html/kvkcms/themes/atma-new/partials/header.htm", "");
    }
}
