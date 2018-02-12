<?php

/* /var/www/html/atma/themes/atma-new/content/static-pages/index.htm */
class __TwigTemplate_76b1919af18b8fdcd2de461d270d520da24d24356a81b69ba3f67ca3d231df9f extends Twig_Template
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
        return "/var/www/html/atma/themes/atma-new/content/static-pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 8,  31 => 7,  28 => 6,  26 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put news %}
<h3>Latest news</h3>
<figure data-snippet=\"news\"></figure>
<p><a href=\"blog\">View all news and announcements</a></p>
{% endput %}

{% put login %}
<h3>Customer Sign in</h3>
<p>Sign in to view prices and instructions.</p>
<figure data-snippet=\"login-module\"></figure>
{% endput %}", "/var/www/html/atma/themes/atma-new/content/static-pages/index.htm", "");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('news'        );
        // line 2
        echo "<h3>Latest news</h3>
<figure data-snippet=\"news\"></figure>
<p><a href=\"blog\">View all news and announcements</a></p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('login'        );
        // line 8
        echo "<h3>Customer Sign in</h3>
<p>Sign in to view prices and instructions.</p>
<figure data-snippet=\"login-module\"></figure>
";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }
}
