<?php

/* /var/www/html/atma/themes/atma-new/partials/snippets/login.htm */
class __TwigTemplate_ac2dea1c67bd2df7a4ec481251a793e1f13cef83d1dc208a089c16bb5fff0607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($context["user"] ?? null)) {
            // line 2
            echo "    <p>You are logged in</p>
    <p>
        <a href=\"";
            // line 4
            echo RainLab\Pages\Classes\Page::url("clients");
            echo "\" class=\"btn btn-default\">
            Access Client Area
        </a>
    </p>
";
        } else {
            // line 9
            echo "    ";
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onSignin", array("redirect" => RainLab\Pages\Classes\Page::url("clients"), "class" => "module-form")));
            // line 12
            echo "
        <label>";
            // line 13
            echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
            echo "</label>
        <input type=\"text\" name=\"login\" value=\"\" class=\"text\" />

        <label>Password</label>
        <input type=\"password\" name=\"password\" value=\"\" class=\"text\" />
        <button type=\"submit\" class=\"submit\">Sign in</button>
    ";
            // line 19
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "

    <div class=\"row\">
        <div class=\"col-md-6\">
            <a href=\"";
            // line 23
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("forgot-password");
            echo "\">
                Forgot password?
            </a>
        </div>
        <div class=\"col-md-6 text-right\">
            <a href=\"";
            // line 28
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
            echo "\">
                Sign up
            </a>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/atma/themes/atma-new/partials/snippets/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 28,  55 => 23,  48 => 19,  39 => 13,  36 => 12,  33 => 9,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user %}
    <p>You are logged in</p>
    <p>
        <a href=\"{{ 'clients'|staticPage }}\" class=\"btn btn-default\">
            Access Client Area
        </a>
    </p>
{% else %}
    {{ form_ajax('onSignin', {
        redirect: 'clients'|staticPage,
        class: 'module-form'
    }) }}
        <label>{{ loginAttributeLabel }}</label>
        <input type=\"text\" name=\"login\" value=\"\" class=\"text\" />

        <label>Password</label>
        <input type=\"password\" name=\"password\" value=\"\" class=\"text\" />
        <button type=\"submit\" class=\"submit\">Sign in</button>
    {{ form_close() }}

    <div class=\"row\">
        <div class=\"col-md-6\">
            <a href=\"{{ 'forgot-password'|page }}\">
                Forgot password?
            </a>
        </div>
        <div class=\"col-md-6 text-right\">
            <a href=\"{{ 'account'|page }}\">
                Sign up
            </a>
        </div>
    </div>
{% endif %}", "/var/www/html/atma/themes/atma-new/partials/snippets/login.htm", "");
    }
}
