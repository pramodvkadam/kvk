<?php

/* /var/www/html/atma/themes/atma-new/pages/contact.htm */
class __TwigTemplate_3dfa1003519b6115b2fe0b04fa89286318d8df76add0f65616b7fbb53d39242a extends Twig_Template
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
        return "/var/www/html/atma/themes/atma-new/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  41 => 11,  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-md-4\">
        {% content 'contact/page' %}

        <div class=\"module-contact well\">
            {% content 'contact/details' %}
        </div>
    </div>
    <div class=\"col-md-8\">
        <div id=\"partialContactForm\">
            {% partial 'contact/form' %}
        </div>
    </div>
</div>", "/var/www/html/atma/themes/atma-new/pages/contact.htm", "");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-4\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/page"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "
        <div class=\"module-contact well\">
            ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/details"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "        </div>
    </div>
    <div class=\"col-md-8\">
        <div id=\"partialContactForm\">
            ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact/form"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "        </div>
    </div>
</div>";
    }
}
