<?php

/* /var/www/html/kvkcms/themes/atma-new/partials/meta.htm */
class __TwigTemplate_219535a3bf26bca8ed367352edcfa7041c3e2159c93ca35645746b24dece649c extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
<title>KRISHI VIGYAN KENDRA - ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">

<meta name=\"title\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"Weblogicx\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\" />
<meta name=\"generator\" content=\"KVK\" />
";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 11
        echo "
";
        // line 13
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/bootstrap/css/bootstrap.min.css", 1 => "assets/vendor/slick/slick.css", 2 => "assets/vendor/slick/slick-theme.css"));
        // line 17
        echo "\" rel=\"stylesheet\" />

<link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab\" rel=\"stylesheet\">
";
        // line 21
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/css/style.css"));
        echo "\" rel=\"stylesheet\" />";
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  55 => 17,  52 => 13,  49 => 11,  46 => 10,  41 => 8,  35 => 5,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
<title>KRISHI VIGYAN KENDRA - {{ this.page.title }}</title>
<meta name=\"description\" content=\"{{ this.page.meta_description }}\">

<meta name=\"title\" content=\"{{ this.page.meta_title }}\">
<meta name=\"author\" content=\"Weblogicx\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
<meta name=\"generator\" content=\"KVK\" />
{% styles %}

{# Vendor #}
<link href=\"{{ [
'assets/vendor/bootstrap/css/bootstrap.min.css',
    'assets/vendor/slick/slick.css',
        'assets/vendor/slick/slick-theme.css'
]|theme }}\" rel=\"stylesheet\" />

<link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab\" rel=\"stylesheet\">
{# Theme #}
<link href=\"{{ ['assets/css/style.css']|theme }}\" rel=\"stylesheet\" />", "/var/www/html/kvkcms/themes/atma-new/partials/meta.htm", "");
    }
}
