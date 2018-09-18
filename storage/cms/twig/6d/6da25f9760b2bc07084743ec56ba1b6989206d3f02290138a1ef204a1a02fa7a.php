<?php

/* /var/www/html/kvkcms/themes/atma-new/partials/home-slideshow.htm */
class __TwigTemplate_c101efea9d4c82b1459846c5f4b708b0bef2d257fd63552e56ce51eb4e03982a extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()) != "no_slider")) {
            // line 2
            echo "<header>
      <div id=\"carouselIndicators";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
            echo "\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
        ";
            // line 5
            $context["count"] = 0;
            // line 6
            echo "                  \t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "slide_show_content", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 7
                echo "
          <li data-target=\"#carouselIndicators";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
                echo "\" data-slide-to=\"";
                echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
                echo "\"></li>
                            \t";
                // line 9
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 10
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
        </ol>
        
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slides -->
                  ";
            // line 17
            $context["count"] = 0;
            // line 18
            echo "
          \t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "slide_show_content", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 20
                echo "          <div class=\"carousel-item ";
                echo (((($context["count"] ?? null) == 0)) ? ("active") : (""));
                echo "\">
            <div class=\"\">
              <img src=\"";
                // line 22
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_image", array()));
                echo "\">
            </div>
          </div>
                            \t";
                // line 25
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 26
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselIndicators";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselIndicators";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
</header>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/partials/home-slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  98 => 29,  95 => 28,  88 => 26,  86 => 25,  80 => 22,  74 => 20,  70 => 19,  67 => 18,  65 => 17,  58 => 12,  51 => 10,  49 => 9,  43 => 8,  40 => 7,  35 => 6,  33 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if slider.slides.slideShows != 'no_slider' %}
<header>
      <div id=\"carouselIndicators{{slider.slides.slideShows.id}}\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
        {% set count = 0 %}
                  \t{% for slide in slider.slides.slideShows.slide_show_content %}

          <li data-target=\"#carouselIndicators{{slider.slides.slideShows.id}}\" data-slide-to=\"{{count}}\"></li>
                            \t{% set count = count + 1 %}

                    {% endfor %}

        </ol>
        
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slides -->
                  {% set count = 0 %}

          \t{% for slide in slider.slides.slideShows.slide_show_content %}
          <div class=\"carousel-item {{count==0?'active':''}}\">
            <div class=\"\">
              <img src=\"{{slide.slide_image|media}}\">
            </div>
          </div>
                            \t{% set count = count + 1 %}

          {% endfor %}
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselIndicators{{slider.slides.slideShows.id}}\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselIndicators{{slider.slides.slideShows.id}}\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
</header>
{% endif %}", "/var/www/html/kvkcms/themes/atma-new/partials/home-slideshow.htm", "");
    }
}
