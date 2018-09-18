<?php

/* /var/www/html/kvkcms/themes/atma-new/partials/nav.htm */
class __TwigTemplate_f72957914be0dd240aedc1db0ebecc0fef8f2eb847aa40022ba49408d5df1701 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["nav"] = $this;
        // line 4
        echo "
";
        // line 25
        echo "
<div class=\"container\">
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-green\">
<div class=\"container\">
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
    ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array())) {
            // line 34
            echo "          <ul class=\"navbar-nav\">
            ";
            // line 35
            echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array()));
            echo "
        </ul>
    ";
        }
        // line 38
        echo "    </div>
    </div>
    </nav>
</div>";
    }

    // line 5
    public function macro_render_menu($__items__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "    ";
            $context["nav"] = $this;
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "        <li class=\"nav-item ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) ? ("dropdown") : (""));
                echo "\">

            ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    // line 12
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"nav-link ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) ? ("dropdown-toggle") : (""));
                    echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                    echo "</a>
                \t\t\t  <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subItem"]) {
                        // line 15
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subItem"], "url", array()), "html", null, true);
                        echo "\" class=\"dropdown-item\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subItem"], "title", array()), "html", null, true);
                        echo "</a>
 ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "</div>
";
                } else {
                    // line 19
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"nav-link ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) ? ("dropdown-toggle") : (""));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                    echo "</a>

            ";
                }
                // line 22
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 22,  122 => 19,  118 => 17,  107 => 15,  103 => 14,  93 => 12,  91 => 11,  81 => 9,  77 => 8,  74 => 7,  71 => 6,  59 => 5,  52 => 38,  46 => 35,  43 => 34,  41 => 33,  31 => 25,  28 => 4,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Custom navigation implementation that only shows 2 levels deep #}

{% import _self as nav %}

{% macro render_menu(items) %}
    {% import _self as nav %}

    {% for item in items %}
        <li class=\"nav-item {{ item.isActive ? 'active' : '' }} {{ item.isChildActive ? 'active' : '' }} {{ item.items ? 'dropdown' : '' }}\">

            {% if item.items %}
            <a href=\"{{ item.url }}\" class=\"nav-link {{ item.items ? 'dropdown-toggle' : '' }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ item.title }}</a>
                \t\t\t  <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
{% for subItem in item.items %}
<a href=\"{{ subItem.url }}\" class=\"dropdown-item\">{{ subItem.title }}</a>
 {% endfor %}
</div>
{% else %}
            <a href=\"{{ item.url }}\" class=\"nav-link {{ item.items ? 'dropdown-toggle' : '' }}\">{{ item.title }}</a>

            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

<div class=\"container\">
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-green\">
<div class=\"container\">
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
    {% if mainMenu.menuItems %}
          <ul class=\"navbar-nav\">
            {{ nav.render_menu(mainMenu.menuItems) }}
        </ul>
    {% endif %}
    </div>
    </div>
    </nav>
</div>", "/var/www/html/kvkcms/themes/atma-new/partials/nav.htm", "");
    }
}
