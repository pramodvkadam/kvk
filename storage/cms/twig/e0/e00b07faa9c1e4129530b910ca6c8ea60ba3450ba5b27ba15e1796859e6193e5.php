<?php

/* /var/www/html/kvkcms/plugins/graker/photoalbums/components/album/default.htm */
class __TwigTemplate_25624ff80ba10e3e6ca95cd17d7bd66c627696eacabb62e757e5fe32e1ae741a extends Twig_Template
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
        $context["album"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "album", array());
        // line 2
        echo "
<h1>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["album"] ?? null), "title", array()), "html", null, true);
        echo "</h1>

";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["album"] ?? null), "description", array())) {
            // line 6
            echo "    <div class=\"album-description row\">
        <div class=\"col-xs-12\">
            ";
            // line 8
            echo twig_get_attribute($this->env, $this->source, ($context["album"] ?? null), "description", array());
            echo "
        </div>
    </div>
";
        }
        // line 12
        echo "
<div class=\"album-photos row\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["album"] ?? null), "photos", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 15
            echo "        <div class=\"photo col-xs-12 col-sm-6 col-md-4 col-lg-3\">
            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", array()), "html", null, true);
            echo "\"><img
                    data-src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "thumb", array()), "html", null, true);
            echo "\"
                    src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "thumb", array()), "html", null, true);
            echo "\"
                    alt=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "title", array()), "html", null, true);
            echo "\"
                    title=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "title", array()), "html", null, true);
            echo "\"
                    style=\"max-width: 100%\" />
            </a>
            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", array()), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "title", array()), "html", null, true);
            echo "</strong></a>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "        <div class=\"col-xs-12 no-data\">Album doesn't have any photos yet</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>

";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "lastPage", array()) > 1)) {
            // line 31
            echo "<ul class=\"pagination\">
    ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", array()) > 1)) {
                // line 33
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()));
                echo "?page=";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", array()) - 1), "html", null, true);
                echo "\">&larr; Prev</a></li>
    ";
            }
            // line 35
            echo "
    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 37
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 38
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()));
                echo "?page=";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", array()))) {
                // line 43
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()));
                echo "?page=";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", array()) + 1), "html", null, true);
                echo "\">Next &rarr;</a></li>
    ";
            }
            // line 45
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/plugins/graker/photoalbums/components/album/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 45,  146 => 43,  144 => 42,  141 => 41,  128 => 38,  123 => 37,  119 => 36,  116 => 35,  108 => 33,  106 => 32,  103 => 31,  101 => 30,  97 => 28,  90 => 26,  80 => 23,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  55 => 15,  50 => 14,  46 => 12,  39 => 8,  35 => 6,  33 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set album = __SELF__.album %}

<h1>{{ album.title }}</h1>

{% if album.description %}
    <div class=\"album-description row\">
        <div class=\"col-xs-12\">
            {{ album.description|raw }}
        </div>
    </div>
{% endif %}

<div class=\"album-photos row\">
    {% for photo in album.photos %}
        <div class=\"photo col-xs-12 col-sm-6 col-md-4 col-lg-3\">
            <a href=\"{{ photo.url }}\"><img
                    data-src=\"{{ photo.thumb }}\"
                    src=\"{{ photo.thumb }}\"
                    alt=\"{{ photo.title }}\"
                    title=\"{{ photo.title }}\"
                    style=\"max-width: 100%\" />
            </a>
            <a href=\"{{ photo.url }}\"><strong>{{ photo.title }}</strong></a>
        </div>
    {% else %}
        <div class=\"col-xs-12 no-data\">Album doesn't have any photos yet</div>
    {% endfor %}
</div>

{% if __SELF__.lastPage > 1 %}
<ul class=\"pagination\">
    {% if __SELF__.currentPage > 1 %}
    <li><a href=\"{{ this.page.baseFileName|page }}?page={{ __SELF__.currentPage-1 }}\">&larr; Prev</a></li>
    {% endif %}

    {% for page in 1..__SELF__.lastPage %}
    <li class=\"{{ __SELF__.currentPage == page ? 'active' : null }}\">
        <a href=\"{{ this.page.baseFileName|page }}?page={{ page }}\">{{ page }}</a>
    </li>
    {% endfor %}

    {% if __SELF__.lastPage > __SELF__.currentPage %}
    <li><a href=\"{{ this.page.baseFileName|page }}?page={{ __SELF__.currentPage+1 }}\">Next &rarr;</a></li>
    {% endif %}
</ul>
{% endif %}
", "/var/www/html/kvkcms/plugins/graker/photoalbums/components/album/default.htm", "");
    }
}
