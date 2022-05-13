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

/* widgets/partners.twig */
class __TwigTemplate_c21f0aa91f0ec172a68603b43210da40db34b7041c89f3e8fe8861213ac15a6d extends \Twig\Template
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
        echo "<section class=\"section partners\" id=\"partners\">
    <div class=\"container\">
        <div class=\"section__title\">
            <h2 class=\"section-title__h2\">
                Наши партнеры
            </h2>
        </div>
        <div class=\"partners-swiper swiper-container\">
            <div class=\"swiper-wrapper\">
                <div 
                    class=\"partners-swiper__item swiper-slide\"
                >
                    <img 
                        src=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/partners/1.svg\" 
                        alt=\"Title Partner\" 
                        class=\"partners-swiper__logo\"
                    >
                </div>
                <div 
                    class=\"partners-swiper__item swiper-slide\"
                >
                    <img 
                        src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/partners/2.svg\" 
                        alt=\"Title Partner\" 
                        class=\"partners-swiper__logo\"
                    >
                </div>
                <div 
                    class=\"partners-swiper__item swiper-slide\"
                >
                    <img 
                        src=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/partners/3.svg\" 
                        alt=\"Title Partner\" 
                        class=\"partners-swiper__logo\"
                    >
                </div>
                <div 
                    class=\"partners-swiper__item swiper-slide\"
                >
                    <img 
                        src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/partners/4.svg\" 
                        alt=\"Title Partner\" 
                        class=\"partners-swiper__logo\"
                    >
                </div>
                <div 
                    class=\"partners-swiper__item swiper-slide\"
                >
                    <img 
                        src=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/partners/5.svg\" 
                        alt=\"Title Partner\" 
                        class=\"partners-swiper__logo\"
                    >
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/partners.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 50,  88 => 41,  76 => 32,  64 => 23,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/partners.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/partners.twig");
    }
}
