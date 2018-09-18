<?php

/* /var/www/html/kvkcms/themes/atma-new/partials/title.htm */
class __TwigTemplate_6c79db41c338354e14deef7757bd52aae3d4e0e86be390becda5cb4bd99d24d0 extends Twig_Template
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
        echo "<h4 class=\"heading\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array())) : (($context["title"] ?? null))), "html", null, true);
        echo "</h4>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/partials/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"heading\">{{ this.page.meta_title ?:title  }}</h4>", "/var/www/html/kvkcms/themes/atma-new/partials/title.htm", "");
    }
}
