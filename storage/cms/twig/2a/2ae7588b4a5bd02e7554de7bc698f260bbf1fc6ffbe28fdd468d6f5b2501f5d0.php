<?php

/* /var/www/html/kvkcms/plugins/vuonxa/photobox/components/photoboxs/default.htm */
class __TwigTemplate_a2f636cbdd580e9078f7acc09a81093fb788b68f39500e5642edc0c14c4625de extends Twig_Template
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
        echo "<ul class='photobox-gallery'>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["photos"] ?? null), "photos", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 3
            echo "    <li class=\"loaded\">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "path", array()), "html", null, true);
            echo "\">
            <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "path", array()), "html", null, true);
            echo "\"
                 title=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "title", array()), "html", null, true);
            echo "\">
        </a>
    </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/plugins/vuonxa/photobox/components/photoboxs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  51 => 10,  42 => 6,  38 => 5,  34 => 4,  31 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class='photobox-gallery'>
    {% for photo in photos.photos %}
    <li class=\"loaded\">
        <a href=\"{{ photo.path }}\">
            <img src=\"{{ photo.path }}\"
                 title=\"{{ photo.title }}\">
        </a>
    </li>
    {% else %}
    {% endfor %}
</ul>", "/var/www/html/kvkcms/plugins/vuonxa/photobox/components/photoboxs/default.htm", "");
    }
}
