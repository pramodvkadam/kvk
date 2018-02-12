<?php

/* /var/www/html/atma/themes/atma-new/partials/title.htm */
class __TwigTemplate_6ba58553a2e1737492029ff028047a62e2e38b41fd2299c4c0536a3b6b7856a4 extends Twig_Template
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
        return "/var/www/html/atma/themes/atma-new/partials/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h4 class=\"heading\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())) : (($context["title"] ?? null))), "html", null, true);
        echo "</h4>";
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"heading\">{{ this.page.meta_title ?:title  }}</h4>", "/var/www/html/atma/themes/atma-new/partials/title.htm", "");
    }
}
