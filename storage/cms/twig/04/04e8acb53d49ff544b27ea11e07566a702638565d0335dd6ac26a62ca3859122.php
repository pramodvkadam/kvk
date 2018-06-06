<?php

/* /var/www/html/kvkcms/themes/atma-new/layouts/default.htm */
class __TwigTemplate_db676445b88552e07d6343d2534e5730935c2a8a56472a01bcdc6ba62e405391 extends Twig_Template
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
        echo $this->extensions['System\Twig\Extension']->mediaFilter("banner1.jpg");
        echo "\">
      </div>
    </header>
    
<div class=\"container\">
      <!-- Marketing Icons Section -->
      <div class=\"row\">
              <div class=\"col-lg-3 mb-4 left-block\">   
                          ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("current-events-sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "
</div>
 <div class=\"col-lg-9 mb-4\">
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
      ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "        <!-- Scripts -->
        ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  95 => 36,  92 => 35,  88 => 34,  80 => 28,  77 => 27,  73 => 26,  67 => 22,  63 => 21,  52 => 13,  48 => 11,  44 => 10,  41 => 9,  37 => 8,  32 => 5,  28 => 4,  23 => 1,);
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
              <div class=\"col-lg-3 mb-4 left-block\">   
                          {% partial \"current-events-sidebar\" %}

</div>
 <div class=\"col-lg-9 mb-4\">
          <div class=\"right-block\">
                              {% partial \"title\" %}
                        {% page %}
                </div>
          </div>
          </div>
      </div>
      
      </div>
      {% partial \"footer\" %}
        <!-- Scripts -->
        {% partial 'scripts' %}
    </body>
</html>", "/var/www/html/kvkcms/themes/atma-new/layouts/default.htm", "");
    }
}
