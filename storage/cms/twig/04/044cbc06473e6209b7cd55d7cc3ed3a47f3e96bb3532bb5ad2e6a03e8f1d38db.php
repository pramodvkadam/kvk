<?php

/* /var/www/html/kvkcms/themes/atma-new/pages/news.htm */
class __TwigTemplate_e6e33186ef61119e6bea42123779e8b23791a4d16fe6fc4f9a74ff5f72ebd406 extends Twig_Template
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
        $context["album"] = twig_get_attribute($this->env, $this->source, ($context["photoAlbum"] ?? null), "album", array());
        // line 2
        echo "


<div class=\"album-photos row\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["album"] ?? null), "photos", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 7
            echo "        <div class=\"photo col-xs-12 col-sm-6 col-md-4 col-lg-3\">
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", array()), "html", null, true);
            echo "\"><img
                    data-src=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "thumb", array()), "html", null, true);
            echo "\"
                    src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "thumb", array()), "html", null, true);
            echo "\"
                    alt=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "title", array()), "html", null, true);
            echo "\"
                    title=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "title", array()), "html", null, true);
            echo "\"
                    style=\"max-width: 100%\" />
            </a>
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", array()), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "title", array()), "html", null, true);
            echo "</strong></a>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "        <div class=\"col-xs-12 no-data\">Album doesn't have any photos yet</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>

";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, ($context["photoAlbum"] ?? null), "lastPage", array()) > 1)) {
            // line 23
            echo "<ul class=\"pagination\">
    ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, ($context["photoAlbum"] ?? null), "currentPage", array()) > 1)) {
                // line 25
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()));
                echo "?page=";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["photoAlbum"] ?? null), "currentPage", array()) - 1), "html", null, true);
                echo "\">&larr; Prev</a></li>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["photoAlbum"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 29
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["photoAlbum"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 30
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
            // line 33
            echo "
    ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, ($context["photoAlbum"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["photoAlbum"] ?? null), "currentPage", array()))) {
                // line 35
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()));
                echo "?page=";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["photoAlbum"] ?? null), "currentPage", array()) + 1), "html", null, true);
                echo "\">Next &rarr;</a></li>
    ";
            }
            // line 37
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/pages/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 37,  127 => 35,  125 => 34,  122 => 33,  109 => 30,  104 => 29,  100 => 28,  97 => 27,  89 => 25,  87 => 24,  84 => 23,  82 => 22,  78 => 20,  71 => 18,  61 => 15,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  36 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set album = photoAlbum.album %}



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

{% if photoAlbum.lastPage > 1 %}
<ul class=\"pagination\">
    {% if photoAlbum.currentPage > 1 %}
    <li><a href=\"{{ this.page.baseFileName|page }}?page={{ photoAlbum.currentPage-1 }}\">&larr; Prev</a></li>
    {% endif %}

    {% for page in 1..photoAlbum.lastPage %}
    <li class=\"{{ photoAlbum.currentPage == page ? 'active' : null }}\">
        <a href=\"{{ this.page.baseFileName|page }}?page={{ page }}\">{{ page }}</a>
    </li>
    {% endfor %}

    {% if photoAlbum.lastPage > photoAlbum.currentPage %}
    <li><a href=\"{{ this.page.baseFileName|page }}?page={{ photoAlbum.currentPage+1 }}\">Next &rarr;</a></li>
    {% endif %}
</ul>
{% endif %}", "/var/www/html/kvkcms/themes/atma-new/pages/news.htm", "");
    }
}
