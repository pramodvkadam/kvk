<?php

/* /var/www/html/atma/themes/atma-new/partials/scripts.htm */
class __TwigTemplate_eb4c97f33e471d94310c2a49449dc6d6d365ea6162eca052ec0fe32fd6b062a7 extends Twig_Template
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
        return "/var/www/html/atma/themes/atma-new/partials/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  25 => 7,  22 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ [
    'assets/javascript/jquery.js',
    'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'assets/vendor/slick/slick.min.js',
    'assets/javascript/app.js'
]|theme }}\"></script>
{% framework extras %}
{% scripts %}", "/var/www/html/atma/themes/atma-new/partials/scripts.htm", "");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/bootstrap.bundle.min.js", 2 => "assets/vendor/slick/slick.min.js", 3 => "assets/javascript/app.js"));
        // line 6
        echo "\"></script>
";
        // line 7
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }
}
