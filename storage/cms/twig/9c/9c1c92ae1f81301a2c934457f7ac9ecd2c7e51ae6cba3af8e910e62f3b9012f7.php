<?php

/* /var/www/html/atma/themes/atma-new/layouts/default.htm */
class __TwigTemplate_a23e0d95f78185635a563eb7f16dfb0e3af91452da0fd1f000662afd1ee927ec extends Twig_Template
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
        return "/var/www/html/atma/themes/atma-new/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  86 => 36,  76 => 28,  73 => 27,  69 => 26,  63 => 22,  59 => 21,  48 => 13,  44 => 11,  40 => 10,  37 => 9,  33 => 8,  28 => 5,  24 => 4,  19 => 1,);
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
       <header>
      <div class=\"inner-banner\">
        <img src=\"{{'banner1.jpg'|media}}\">
      </div>
    </header>
    
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
</html>", "/var/www/html/atma/themes/atma-new/layouts/default.htm", "");
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
        echo "       <header>
      <div class=\"inner-banner\">
        <img src=\"";
        // line 13
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter("banner1.jpg");
        echo "\">
      </div>
    </header>
    
<div class=\"container\">
      <!-- Marketing Icons Section -->
      <div class=\"row\">
              <div class=\"col-lg-4 mb-4 left-block\">   
                          ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("current-events-sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "
</div>
 <div class=\"col-lg-8 mb-4\">
          <div class=\"right-block\">
                              ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "                        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 28
        echo "                </div>
          </div>
          </div>
      </div>
      
      </div>
      
        <!-- Scripts -->
        ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "    </body>
</html>";
    }
}
