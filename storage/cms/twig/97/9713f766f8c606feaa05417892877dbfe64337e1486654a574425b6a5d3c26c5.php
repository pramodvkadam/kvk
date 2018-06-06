<?php

/* /var/www/html/kvkcms/plugins/taema/youtubegallery/components/singleplaylist/default.htm */
class __TwigTemplate_59b6cd71d81e6cb4f674b3c743b3301463ee29a96c25f05d1dcf18e01de9eed0 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "hasError", array())) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['message'] = "Video gallery is unavailable"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@error"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 4
            echo "
    ";
            // line 5
            if (($context["display_playlist_name"] ?? null)) {
                // line 6
                echo "    <div class=\"row\">
        <div class=\"col-sm-12 text-center\" style=\"padding-bottom: 30px\">
            <h2 class=\"playlist-name\">";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "name", array()), "html", null, true);
                echo "</h2>
        </div>
    </div>
    ";
            }
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "videos", array()), 2));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 13
                echo "    <div class=\"row\">
        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                    // line 15
                    echo "        <div class=\"col-sm-6\">
            <div class=\"videoTitle\">
                ";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "display_title"), "method")) {
                        // line 18
                        echo "                <h3>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", array()), "html", null, true);
                        echo "</h3>
                ";
                    }
                    // line 20
                    echo "                <iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "yt_watch", array()), "html", null, true);
                    echo "\" allowfullscreen></iframe>
            </div>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "    </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/plugins/taema/youtubegallery/components/singleplaylist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  72 => 20,  66 => 18,  64 => 17,  60 => 15,  56 => 14,  53 => 13,  48 => 12,  41 => 8,  37 => 6,  35 => 5,  32 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if __SELF__.hasError %}
    {% partial '@error' message=\"Video gallery is unavailable\" %}
{% else %}

    {% if display_playlist_name %}
    <div class=\"row\">
        <div class=\"col-sm-12 text-center\" style=\"padding-bottom: 30px\">
            <h2 class=\"playlist-name\">{{ __SELF__.name }}</h2>
        </div>
    </div>
    {% endif %}
    {% for row in __SELF__.videos | batch(2) %}
    <div class=\"row\">
        {% for video in row %}
        <div class=\"col-sm-6\">
            <div class=\"videoTitle\">
                {% if __SELF__.property('display_title') %}
                <h3>{{ video.title }}</h3>
                {% endif %}
                <iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/{{ video.yt_watch }}\" allowfullscreen></iframe>
            </div>
        </div>
        {% endfor %}
    </div>

    {% endfor %}
{% endif %}", "/var/www/html/kvkcms/plugins/taema/youtubegallery/components/singleplaylist/default.htm", "");
    }
}
