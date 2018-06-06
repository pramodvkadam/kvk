<?php

/* /var/www/html/kvkcms/themes/atma-new/pages/gallary.htm */
class __TwigTemplate_38af3e41797d3c5eee417ec84cce1fbb5bf46bc01de0e2a9d77f7414c61735ad extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("photoAlbum"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/pages/gallary.htm";
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
        return new Twig_Source("{% component 'photoAlbum' %}", "/var/www/html/kvkcms/themes/atma-new/pages/gallary.htm", "");
    }
}
