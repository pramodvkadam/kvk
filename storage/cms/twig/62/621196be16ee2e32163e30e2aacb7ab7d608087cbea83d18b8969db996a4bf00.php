<?php

/* /var/www/html/kvkcms/themes/atma-new/partials/footer.htm */
class __TwigTemplate_318cd30dc7353245ef1e308c28e29f5e5867af6e8333d3549c47e5724bd717b0 extends Twig_Template
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
        echo "<footer class=\"py-4 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; 2017 Krishi Vigyan Kendra Narayangaon</p>
      </div>
      <!-- /.container -->
    </footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/kvkcms/themes/atma-new/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"py-4 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; 2017 Krishi Vigyan Kendra Narayangaon</p>
      </div>
      <!-- /.container -->
    </footer>", "/var/www/html/kvkcms/themes/atma-new/partials/footer.htm", "");
    }
}
