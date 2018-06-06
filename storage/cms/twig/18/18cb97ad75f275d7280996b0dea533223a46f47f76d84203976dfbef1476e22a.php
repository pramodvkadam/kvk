<?php

/* /var/www/html/kvkcms/themes/atma-new/pages/videos.htm */
class __TwigTemplate_2c5e73138ca4f311bc1c97a07f9fbcd28719d4a3991e7d2475b0f92efcee27a6 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Playlist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/pages/videos.htm";
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
        return new Twig_Source("{% component 'Playlist' %}", "/var/www/html/kvkcms/themes/atma-new/pages/videos.htm", "");
    }
}
