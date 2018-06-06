<?php

/* /var/www/html/kvkcms/themes/atma-new/partials/video-slider.htm */
class __TwigTemplate_f53148785c808dbb36ab2ddae41306cbbf8c70980a1a57a700a27f3d291e843a extends Twig_Template
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
        echo "<h4 class=\"heading\">Video Gallary</h4>
              <div class=\"image-section\">
                      <div class=\"fade1\">


<div id=\"carouselNews\" class=\"slider-carousel carousel slide\" data-ride=\"carousel\">
      
        
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slides -->
                  ";
        // line 11
        $context["count"] = 0;
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, ($context["Playlist"] ?? null), "videos", array()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 15
                echo "<div class=\"slider-carousel-item carousel-item ";
                echo (((($context["count"] ?? null) == 0)) ? ("active") : (""));
                echo "\">
            <div class=\"\">
               <iframe width=\"100%\" height=\"200\" src=\"https://www.youtube.com/embed/";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "yt_watch", array()), "html", null, true);
                echo "\" allowfullscreen></iframe>
            </div>
          </div>
                            \t";
                // line 20
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 21
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "          

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    
        </div>
      </div>

</div>
                </div>
              <a href=\"videos\">Read More &#x25B6;</a>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/partials/video-slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  70 => 23,  63 => 21,  61 => 20,  55 => 17,  49 => 15,  45 => 14,  42 => 13,  37 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"heading\">Video Gallary</h4>
              <div class=\"image-section\">
                      <div class=\"fade1\">


<div id=\"carouselNews\" class=\"slider-carousel carousel slide\" data-ride=\"carousel\">
      
        
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slides -->
                  {% set count = 0 %}
    {% for row in Playlist.videos | batch(2) %}

        {% for video in row %}
<div class=\"slider-carousel-item carousel-item {{count==0?'active':''}}\">
            <div class=\"\">
               <iframe width=\"100%\" height=\"200\" src=\"https://www.youtube.com/embed/{{ video.yt_watch }}\" allowfullscreen></iframe>
            </div>
          </div>
                            \t{% set count = count + 1 %}

          {% endfor %}
          

    {% endfor %}
    
        </div>
      </div>

</div>
                </div>
              <a href=\"videos\">Read More &#x25B6;</a>", "/var/www/html/kvkcms/themes/atma-new/partials/video-slider.htm", "");
    }
}
