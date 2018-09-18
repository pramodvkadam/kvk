<?php

/* /var/www/html/kvkcms/themes/atma-new/layouts/home.htm */
class __TwigTemplate_de4e4f599207e39b69de03ff18e3cc7ca39c39b64a4361904435b5ca453e5b35 extends Twig_Template
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
              <div class=\"col-lg-3 mb-4 left-block\">   
                          ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("current-events-sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "
</div>
 <div class=\"col-lg-9 mb-4\">
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

<div class=\"grey-block\">
      <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
             
                        ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("news-slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "                      
         </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\"> 
            ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("gallary-slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
              ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("video-slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "        </div>
     </div>
      <!-- /.row -->
    </div>
</div>  
      <!-- /.row -->
    </div>
</div>        
      </div>
            ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "
        <!-- Scripts -->
        ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 55,  129 => 54,  125 => 52,  121 => 51,  110 => 42,  106 => 41,  102 => 39,  98 => 38,  93 => 35,  89 => 34,  77 => 24,  74 => 23,  70 => 22,  64 => 18,  60 => 17,  53 => 12,  48 => 11,  44 => 10,  37 => 8,  32 => 5,  28 => 4,  23 => 1,);
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

<div class=\"grey-block\">
      <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
             
                        {% partial \"news-slider\" %}
                      
         </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\"> 
            {% partial \"gallary-slider\" %}
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
              {% partial \"video-slider\" %}
        </div>
     </div>
      <!-- /.row -->
    </div>
</div>  
      <!-- /.row -->
    </div>
</div>        
      </div>
            {% partial \"footer\" %}

        <!-- Scripts -->
        {% partial 'scripts' %}
    </body>
</html>", "/var/www/html/kvkcms/themes/atma-new/layouts/home.htm", "");
    }
}
