<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.twig */
class __TwigTemplate_ee8738a911f628187509bd57e39d8211fd560362fff3b744cb1930fb0bd35003 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo twig_include($this->env, $context, "widgets/_header.twig");
        echo "

";
        // line 3
        echo twig_include($this->env, $context, "widgets/slider.twig");
        echo "

";
        // line 5
        echo twig_include($this->env, $context, "widgets/catalog.twig");
        echo "

";
        // line 7
        echo twig_include($this->env, $context, "widgets/partners.twig");
        echo "

";
        // line 9
        echo twig_include($this->env, $context, "widgets/reviews.twig");
        echo "

";
        // line 11
        echo twig_include($this->env, $context, "widgets/callback.twig");
        echo "

";
        // line 13
        echo twig_include($this->env, $context, "widgets/about_company.twig");
        echo "

";
        // line 15
        echo twig_include($this->env, $context, "widgets/contacts.twig");
        echo "

";
        // line 17
        echo twig_include($this->env, $context, "widgets/_footer.twig");
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  72 => 15,  67 => 13,  62 => 11,  57 => 9,  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/index.twig");
    }
}
