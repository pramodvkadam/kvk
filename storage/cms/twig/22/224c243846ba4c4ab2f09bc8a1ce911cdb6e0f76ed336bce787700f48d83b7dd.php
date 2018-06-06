<?php

/* /var/www/html/kvkcms/themes/atma-new/partials/news-slider.htm */
class __TwigTemplate_9783ace402ca1ccc7bb9803b2d38ebbd438d06458b011771c98a375f4083a172 extends Twig_Template
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
        echo "<h4 class=\"heading\">News</h4>
              <div class=\"image-section\">
                      <div class=\"fade1\">
";
        // line 4
        $context["album"] = twig_get_attribute($this->env, $this->source, ($context["photoAlbum"] ?? null), "album", array());
        // line 5
        echo "
<div id=\"carouselNews\" class=\"slider-carousel carousel slide\" data-ride=\"carousel\">
      
        
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slides -->
                  ";
        // line 11
        $context["count"] = 0;
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["album"] ?? null), "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 14
            echo "<div class=\"slider-carousel-item carousel-item ";
            echo (((($context["count"] ?? null) == 0)) ? ("active") : (""));
            echo "\">
            <div class=\"\">
<img
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
                    style=\"max-width: 100%\" />            </div>
          </div>
                            \t";
            // line 23
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 24
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
      </div>

</div>
                </div>
              <a href=\"#\">Read More &#x25B6;</a>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/partials/news-slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  74 => 24,  72 => 23,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  47 => 14,  43 => 13,  40 => 12,  38 => 11,  30 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"heading\">News</h4>
              <div class=\"image-section\">
                      <div class=\"fade1\">
{% set album = photoAlbum.album %}

<div id=\"carouselNews\" class=\"slider-carousel carousel slide\" data-ride=\"carousel\">
      
        
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slides -->
                  {% set count = 0 %}

{% for photo in album.photos %}
<div class=\"slider-carousel-item carousel-item {{count==0?'active':''}}\">
            <div class=\"\">
<img
                    data-src=\"{{ photo.thumb }}\"
                    src=\"{{ photo.thumb }}\"
                    alt=\"{{ photo.title }}\"
                    title=\"{{ photo.title }}\"
                    style=\"max-width: 100%\" />            </div>
          </div>
                            \t{% set count = count + 1 %}

          {% endfor %}
        </div>
      </div>

</div>
                </div>
              <a href=\"#\">Read More &#x25B6;</a>", "/var/www/html/kvkcms/themes/atma-new/partials/news-slider.htm", "");
    }
}
