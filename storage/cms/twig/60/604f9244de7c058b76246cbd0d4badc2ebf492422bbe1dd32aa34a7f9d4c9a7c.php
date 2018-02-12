<?php

/* /var/www/html/atma/themes/atma-new/partials/nav.htm */
class __TwigTemplate_f40203d31c5e3a3c67ca2021f5679876ed02d8e733b26982bd180519845f36d4 extends Twig_Template
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
        return "/var/www/html/atma/themes/atma-new/partials/nav.htm";
    }

    // line 5

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 22,  118 => 19,  114 => 17,  103 => 15,  99 => 14,  89 => 12,  87 => 11,  77 => 9,  73 => 8,  70 => 7,  67 => 6,  55 => 5,  48 => 38,  42 => 35,  39 => 34,  37 => 33,  27 => 25,  24 => 4,  22 => 3,  19 => 2,);
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["mainMenu"] ?? null), "menuItems", array())) {
            // line 34
            echo "          <ul class=\"navbar-nav\">
            ";
            // line 35
            echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->getSourceContext(), ($context["mainMenu"] ?? null), "menuItems", array()));
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
</div>", "/var/www/html/atma/themes/atma-new/partials/nav.htm", "");
    }

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
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array())) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array())) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) ? ("dropdown") : (""));
                echo "\">

            ";
                // line 11
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    // line 12
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"nav-link ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) ? ("dropdown-toggle") : (""));
                    echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                    echo "</a>
                \t\t\t  <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subItem"]) {
                        // line 15
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["subItem"], "url", array()), "html", null, true);
                        echo "\" class=\"dropdown-item\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["subItem"], "title", array()), "html", null, true);
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
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"nav-link ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) ? ("dropdown-toggle") : (""));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
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
}
