<?php

/* /var/www/html/kvkcms/plugins/peterhegman/slickslider/components/slider/default.htm */
class __TwigTemplate_91f7dcbe462390f84f66d1f5563682751ce5dbfcba76f0788a5a89efcd953b5a extends Twig_Template
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
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()) === "no_slider")) {
            // line 2
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'            );
            // line 3
            echo "    <script>
\t\t\$(document).ready(function(){
\t\t\tvar args = {
\t\t\t\taccessibility: ";
            // line 6
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "accessibility", array())));
            echo ",
\t\t\t\tautoplay: ";
            // line 7
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "autoplay", array())));
            echo ",
\t\t\t\tautoplaySpeed: ";
            // line 8
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "autoplay_speed", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "autoplay_speed", array())) : (3000)), "html", null, true);
            echo ",
\t\t\t\tarrows: ";
            // line 9
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "arrows", array())));
            echo ",
\t\t\t\tprevArrow: '";
            // line 10
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "prev_arrow", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "prev_arrow", array())) : ("<button type=\"button\" class=\"slick-prev\">Previous</button>"));
            echo "',
\t\t\t\tnextArrow: '";
            // line 11
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "next_arrow", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "next_arrow", array())) : ("<button type=\"button\" class=\"slick-next\">Next</button>"));
            echo "',
\t\t\t\tcenterMode: ";
            // line 12
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "center_mode", array())));
            echo ",
\t\t\t\tcenterPadding: '";
            // line 13
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "center_padding", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "center_padding", array())) : ("50px")), "html", null, true);
            echo "',
\t\t\t\tcssEase: '";
            // line 14
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "css_ease", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "css_ease", array())) : ("ease")), "html", null, true);
            echo "',
\t\t\t\tdots: ";
            // line 15
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "dots", array())));
            echo ",
\t\t\t\tdraggable: ";
            // line 16
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "draggable", array())));
            echo ",
\t\t\t\tfade: ";
            // line 17
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "fade", array())));
            echo ",
\t\t\t\tfocusOnSelect: ";
            // line 18
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "focus_on_select", array())));
            echo ",
\t\t\t\teasing: '";
            // line 19
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "easing", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "easing", array())) : ("linear")), "html", null, true);
            echo "',
\t\t\t\tedgeFriction: ";
            // line 20
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "edge_friction", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "edge_friction", array())) : (0.15)), "html", null, true);
            echo ",
\t\t\t\tinfinite: ";
            // line 21
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "infinite", array())));
            echo ",
\t\t\t\tinitialSlide: ";
            // line 22
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "initial_slide", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "initial_slide", array())) : (0)), "html", null, true);
            echo ",
\t\t\t\tlazyLoad: '";
            // line 23
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "lazy_load", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "lazy_load", array())) : ("ondemand")), "html", null, true);
            echo "',
\t\t\t\tmobileFirst: ";
            // line 24
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "mobile_first", array())));
            echo ",
\t\t\t\tpauseOnFocus: ";
            // line 25
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "pause_on_focus", array())));
            echo ",
\t\t\t\tpauseOnHover: ";
            // line 26
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "pause_on_hover", array())));
            echo ",
\t\t\t\tpauseOnDotsHover: ";
            // line 27
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "pause_on_dots_hover", array())));
            echo ",
\t\t\t\trows: ";
            // line 28
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "rows", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "rows", array())) : (1)), "html", null, true);
            echo ",
\t\t\t\tslidesPerRow: ";
            // line 29
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "slides_per_row", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "slides_per_row", array())) : (1)), "html", null, true);
            echo ",
\t\t\t\tslidesToShow: ";
            // line 30
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "slides_to_show", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "slides_to_show", array())) : (1)), "html", null, true);
            echo ",
\t\t\t\tslidesToScroll: ";
            // line 31
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "slides_to_scroll", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "slides_to_scroll", array())) : (1)), "html", null, true);
            echo ",
\t\t\t\tspeed: ";
            // line 32
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "speed", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "speed", array())) : (300)), "html", null, true);
            echo ",
\t\t\t\tswipe: ";
            // line 33
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "swipe", array())));
            echo ",
\t\t\t\ttouchMove: ";
            // line 34
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "touch_move", array())));
            echo ",
\t\t\t\ttouchThreshold: ";
            // line 35
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "touch_threshold", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "touch_threshold", array())) : (5)), "html", null, true);
            echo ",
\t\t\t\tuseCSS: ";
            // line 36
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "use_css", array())));
            echo ",
\t\t\t\tuseTransform: ";
            // line 37
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "use_transform", array())));
            echo ",
\t\t\t\tvertical: ";
            // line 38
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "vertical", array())));
            echo ",
\t\t\t\tverticalSwiping: ";
            // line 39
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "vertical_swiping", array())));
            echo ",
\t\t\t\trtl: ";
            // line 40
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "rtl", array())));
            echo ",
\t\t\t\twaitForAnimate: ";
            // line 41
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "wait_for_animate", array())));
            echo ",
\t\t\t\tzIndex: ";
            // line 42
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "z_index", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "z_index", array())) : (1000)), "html", null, true);
            echo ",
\t\t\t\tresponsive: ";
            // line 43
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "breakpointJson", array());
            echo "
\t\t\t};
\t\t\t\$('.slick-slider-";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
            echo "').slick(args);

\t\t\t// \$(window).resize(function() {
\t\t\t// \t\$('.slick-slider-";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
            echo "').slick('unslick');
\t\t\t// \t\$('.slick-slider-";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
            echo "').slick(args);
\t\t\t// });
\t\t});

    </script>
";
            // line 2
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
            // line 55
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'            );
            // line 56
            echo "    <style>
    \t.slick-slider-";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
            echo " .slick-slide > div > div {
    \t\tfloat: left!important;
    \t}
    \t.slick-slider-";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
            echo " .slick-slide > div > a {
    \t\tfloat: left!important;
    \t}
    \t.slick-slider-";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
            echo " .slick-slide .slide-image {
    \t\tmin-height: ";
            // line 64
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "slide_show_height", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "slide_show_height", array())) : ("500px")), "html", null, true);
            echo ";
    \t\tposition: relative;
    \t\tbackground-size: cover;
\t\t    display: -webkit-box;
\t\t    display: -ms-flexbox;
\t\t    display: flex;
\t\t    -webkit-box-pack: center;
\t        -ms-flex-pack: center;
            justify-content: center;
\t\t    -webkit-box-align: center;
\t        -ms-flex-align: center;
            align-items: center;
    \t}
    \t.slick-slider-";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
            echo " .slick-slide .slide-image .slide-content {
    \t\tcolor: #ffffff;
    \t\ttext-align: center;
    \t}
    \t";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "responsive", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["breakpoint"]) {
                // line 82
                echo "
    \t\t@media (max-width: ";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breakpoint"], "breakpoint", array()), "html", null, true);
                echo "px) {
\t\t    \t.slick-slider-";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
                echo " .slick-slide .slide-image {
\t\t    \t\tmin-height: ";
                // line 85
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["breakpoint"], "responsive_slide_show_height", array())) ? (twig_get_attribute($this->env, $this->source, $context["breakpoint"], "responsive_slide_show_height", array())) : ("500px")), "html", null, true);
                echo ";
\t\t    \t}
    \t\t}

    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breakpoint'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    </style>
";
            // line 55
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
            // line 92
            echo "<div class=\"slick-slider-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "id", array()), "html", null, true);
            echo "\">
\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", array()), "slideShows", array()), "slide_show_content", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 94
                echo "\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["slide"], "slide_link", array()) != "")) {
                    // line 95
                    echo "\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "slide_link", array()), "html", null, true);
                    echo "\" class=\"slide\">
\t\t        <div class=\"slide-image\" style=\"background-image: url( '";
                    // line 96
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_image", array()));
                    echo "' ); background-position: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "image_horizontal_position", array()), "html", null, true);
                    echo "% ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "image_position", array()), "html", null, true);
                    echo "%;\">
\t\t        \t";
                    // line 97
                    if ((twig_get_attribute($this->env, $this->source, $context["slide"], "slide_title", array()) || twig_get_attribute($this->env, $this->source, $context["slide"], "slide_description", array()))) {
                        // line 98
                        echo "\t        \t\t<div class=\"slide-content\">
\t        \t\t\t<h1>";
                        // line 99
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "slide_title", array()), "html", null, true);
                        echo "</h1>
\t        \t\t\t<p>";
                        // line 100
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "slide_description", array()), "html", null, true);
                        echo "</p>
\t    \t\t\t</div>
\t\t        \t";
                    }
                    // line 103
                    echo "\t\t        </div>
\t        </a>
        ";
                } else {
                    // line 106
                    echo "        \t<div class=\"slide\">
\t\t        <div class=\"slide-image\" style=\"background-image: url( '";
                    // line 107
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_image", array()));
                    echo "' ); background-position: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "image_horizontal_position", array()), "html", null, true);
                    echo "% ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "image_position", array()), "html", null, true);
                    echo "%;\">
\t\t        \t";
                    // line 108
                    if ((twig_get_attribute($this->env, $this->source, $context["slide"], "slide_title", array()) || twig_get_attribute($this->env, $this->source, $context["slide"], "slide_description", array()))) {
                        // line 109
                        echo "\t        \t\t<div class=\"slide-content\">
\t        \t\t\t<h1>";
                        // line 110
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "slide_title", array()), "html", null, true);
                        echo "</h1>
\t        \t\t\t<p>";
                        // line 111
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "slide_description", array()), "html", null, true);
                        echo "</p>
\t    \t\t\t</div>
\t\t        \t";
                    }
                    // line 114
                    echo "\t\t        </div>
\t        </div>
        ";
                }
                // line 117
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/plugins/peterhegman/slickslider/components/slider/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 118,  356 => 117,  351 => 114,  345 => 111,  341 => 110,  338 => 109,  336 => 108,  328 => 107,  325 => 106,  320 => 103,  314 => 100,  310 => 99,  307 => 98,  305 => 97,  297 => 96,  292 => 95,  289 => 94,  285 => 93,  280 => 92,  278 => 55,  275 => 90,  264 => 85,  260 => 84,  256 => 83,  253 => 82,  249 => 81,  242 => 77,  226 => 64,  222 => 63,  216 => 60,  210 => 57,  207 => 56,  205 => 55,  203 => 2,  195 => 49,  191 => 48,  185 => 45,  180 => 43,  176 => 42,  172 => 41,  168 => 40,  164 => 39,  160 => 38,  156 => 37,  152 => 36,  148 => 35,  144 => 34,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not(slider.slides.slideShows is same as ('no_slider')) %}
{% put scripts %}
    <script>
\t\t\$(document).ready(function(){
\t\t\tvar args = {
\t\t\t\taccessibility: {{numberToBoolean(slider.slides.slideShows.accessibility)}},
\t\t\t\tautoplay: {{numberToBoolean(slider.slides.slideShows.autoplay)}},
\t\t\t\tautoplaySpeed: {{ slider.slides.slideShows.autoplay_speed ?: 3000 }},
\t\t\t\tarrows: {{numberToBoolean(slider.slides.slideShows.arrows)}},
\t\t\t\tprevArrow: '{{ slider.slides.slideShows.prev_arrow ? slider.slides.slideShows.prev_arrow|raw : '<button type=\"button\" class=\"slick-prev\">Previous</button>' }}',
\t\t\t\tnextArrow: '{{ slider.slides.slideShows.next_arrow ? slider.slides.slideShows.next_arrow|raw : '<button type=\"button\" class=\"slick-next\">Next</button>' }}',
\t\t\t\tcenterMode: {{numberToBoolean(slider.slides.slideShows.center_mode)}},
\t\t\t\tcenterPadding: '{{slider.slides.slideShows.center_padding ?: '50px' }}',
\t\t\t\tcssEase: '{{slider.slides.slideShows.css_ease ?: 'ease'}}',
\t\t\t\tdots: {{numberToBoolean(slider.slides.slideShows.dots)}},
\t\t\t\tdraggable: {{numberToBoolean(slider.slides.slideShows.draggable)}},
\t\t\t\tfade: {{numberToBoolean(slider.slides.slideShows.fade)}},
\t\t\t\tfocusOnSelect: {{numberToBoolean(slider.slides.slideShows.focus_on_select)}},
\t\t\t\teasing: '{{slider.slides.slideShows.easing ?: 'linear'}}',
\t\t\t\tedgeFriction: {{slider.slides.slideShows.edge_friction ?: 0.15}},
\t\t\t\tinfinite: {{numberToBoolean(slider.slides.slideShows.infinite)}},
\t\t\t\tinitialSlide: {{slider.slides.slideShows.initial_slide ?: 0}},
\t\t\t\tlazyLoad: '{{slider.slides.slideShows.lazy_load ?: 'ondemand'}}',
\t\t\t\tmobileFirst: {{numberToBoolean(slider.slides.slideShows.mobile_first)}},
\t\t\t\tpauseOnFocus: {{numberToBoolean(slider.slides.slideShows.pause_on_focus)}},
\t\t\t\tpauseOnHover: {{numberToBoolean(slider.slides.slideShows.pause_on_hover)}},
\t\t\t\tpauseOnDotsHover: {{numberToBoolean(slider.slides.slideShows.pause_on_dots_hover)}},
\t\t\t\trows: {{slider.slides.slideShows.rows ?: 1}},
\t\t\t\tslidesPerRow: {{slider.slides.slideShows.slides_per_row ?: 1}},
\t\t\t\tslidesToShow: {{slider.slides.slideShows.slides_to_show ?: 1}},
\t\t\t\tslidesToScroll: {{slider.slides.slideShows.slides_to_scroll ?: 1}},
\t\t\t\tspeed: {{slider.slides.slideShows.speed ?: 300}},
\t\t\t\tswipe: {{numberToBoolean(slider.slides.slideShows.swipe)}},
\t\t\t\ttouchMove: {{numberToBoolean(slider.slides.slideShows.touch_move)}},
\t\t\t\ttouchThreshold: {{slider.slides.slideShows.touch_threshold ?: 5}},
\t\t\t\tuseCSS: {{numberToBoolean(slider.slides.slideShows.use_css)}},
\t\t\t\tuseTransform: {{numberToBoolean(slider.slides.slideShows.use_transform)}},
\t\t\t\tvertical: {{numberToBoolean(slider.slides.slideShows.vertical)}},
\t\t\t\tverticalSwiping: {{numberToBoolean(slider.slides.slideShows.vertical_swiping)}},
\t\t\t\trtl: {{numberToBoolean(slider.slides.slideShows.rtl)}},
\t\t\t\twaitForAnimate: {{numberToBoolean(slider.slides.slideShows.wait_for_animate)}},
\t\t\t\tzIndex: {{slider.slides.slideShows.z_index ?: 1000}},
\t\t\t\tresponsive: {{slider.slides.breakpointJson|raw}}
\t\t\t};
\t\t\t\$('.slick-slider-{{slider.slides.slideShows.id}}').slick(args);

\t\t\t// \$(window).resize(function() {
\t\t\t// \t\$('.slick-slider-{{slider.slides.slideShows.id}}').slick('unslick');
\t\t\t// \t\$('.slick-slider-{{slider.slides.slideShows.id}}').slick(args);
\t\t\t// });
\t\t});

    </script>
{% endput %}
{% put styles %}
    <style>
    \t.slick-slider-{{slider.slides.slideShows.id}} .slick-slide > div > div {
    \t\tfloat: left!important;
    \t}
    \t.slick-slider-{{slider.slides.slideShows.id}} .slick-slide > div > a {
    \t\tfloat: left!important;
    \t}
    \t.slick-slider-{{slider.slides.slideShows.id}} .slick-slide .slide-image {
    \t\tmin-height: {{slider.slides.slideShows.slide_show_height ?: '500px'}};
    \t\tposition: relative;
    \t\tbackground-size: cover;
\t\t    display: -webkit-box;
\t\t    display: -ms-flexbox;
\t\t    display: flex;
\t\t    -webkit-box-pack: center;
\t        -ms-flex-pack: center;
            justify-content: center;
\t\t    -webkit-box-align: center;
\t        -ms-flex-align: center;
            align-items: center;
    \t}
    \t.slick-slider-{{slider.slides.slideShows.id}} .slick-slide .slide-image .slide-content {
    \t\tcolor: #ffffff;
    \t\ttext-align: center;
    \t}
    \t{% for breakpoint in slider.slides.slideShows.responsive %}

    \t\t@media (max-width: {{breakpoint.breakpoint}}px) {
\t\t    \t.slick-slider-{{slider.slides.slideShows.id}} .slick-slide .slide-image {
\t\t    \t\tmin-height: {{breakpoint.responsive_slide_show_height ?: '500px'}};
\t\t    \t}
    \t\t}

    \t{% endfor %}
    </style>
{% endput %}
<div class=\"slick-slider-{{slider.slides.slideShows.id}}\">
\t{% for slide in slider.slides.slideShows.slide_show_content %}
\t\t{% if slide.slide_link != '' %}
\t\t\t<a href=\"{{slide.slide_link}}\" class=\"slide\">
\t\t        <div class=\"slide-image\" style=\"background-image: url( '{{slide.slide_image|media}}' ); background-position: {{slide.image_horizontal_position}}% {{slide.image_position}}%;\">
\t\t        \t{% if (slide.slide_title or slide.slide_description) %}
\t        \t\t<div class=\"slide-content\">
\t        \t\t\t<h1>{{slide.slide_title}}</h1>
\t        \t\t\t<p>{{slide.slide_description}}</p>
\t    \t\t\t</div>
\t\t        \t{% endif %}
\t\t        </div>
\t        </a>
        {% else %}
        \t<div class=\"slide\">
\t\t        <div class=\"slide-image\" style=\"background-image: url( '{{slide.slide_image|media}}' ); background-position: {{slide.image_horizontal_position}}% {{slide.image_position}}%;\">
\t\t        \t{% if (slide.slide_title or slide.slide_description) %}
\t        \t\t<div class=\"slide-content\">
\t        \t\t\t<h1>{{slide.slide_title}}</h1>
\t        \t\t\t<p>{{slide.slide_description}}</p>
\t    \t\t\t</div>
\t\t        \t{% endif %}
\t\t        </div>
\t        </div>
        {% endif %}
    {% endfor %}
</div>
{% endif %}
", "/var/www/html/kvkcms/plugins/peterhegman/slickslider/components/slider/default.htm", "");
    }
}
