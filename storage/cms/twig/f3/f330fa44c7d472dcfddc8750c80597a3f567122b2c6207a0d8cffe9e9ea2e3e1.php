<?php

/* /var/www/html/atma/themes/atma-new/layouts/home.htm */
class __TwigTemplate_d863dcac17ca334be2ebeb30e8ba69230b7f05cfe93428bd7c82144d38594969 extends Twig_Template
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
        return "/var/www/html/atma/themes/atma-new/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  83 => 32,  73 => 24,  70 => 23,  66 => 22,  60 => 18,  56 => 17,  49 => 12,  44 => 11,  40 => 10,  37 => 9,  33 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'meta' %}
    </head>
    <body>

            {% partial \"header\" %}

                {% partial \"nav\" %}
       {% partial \"home-slideshow\" %}
    
<div class=\"container\">
      <!-- Marketing Icons Section -->
      <div class=\"row\">
              <div class=\"col-lg-4 mb-4 left-block\">   
                          {% partial \"current-events-sidebar\" %}

</div>
 <div class=\"col-lg-8 mb-4\">
          <div class=\"right-block\">
                              {% partial \"title\" %}
                        {% page %}
                </div>
          </div>
          </div>
      </div>
      
      </div>
      
        <!-- Scripts -->
        {% partial 'scripts' %}
    </body>
</html>", "/var/www/html/atma/themes/atma-new/layouts/home.htm", "");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>

            ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "
                ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "       ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home-slideshow"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "    
<div class=\"container\">
      <!-- Marketing Icons Section -->
      <div class=\"row\">
              <div class=\"col-lg-4 mb-4 left-block\">   
                          ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("current-events-sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "
</div>
 <div class=\"col-lg-8 mb-4\">
          <div class=\"right-block\">
                              ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "                        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 24
        echo "                </div>
          </div>
          </div>
      </div>
      
      </div>
      
        <!-- Scripts -->
        ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "    </body>
</html>";
    }
}
