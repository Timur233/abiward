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

/* widgets/slider.twig */
class __TwigTemplate_441041c46b336091de425aaedd8f935802b4e1214d81efc04da4d23404d1aadc extends \Twig\Template
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
        echo "<section class=\"main-slider\">
    <div class=\"main-slider__content slider-content\">
        <div class=\"container\">
            <div class=\"main-slider-swiper swiper-container\">
                <div class=\"swiper-wrapper\">
                    <div 
                        class=\"main-slider-swiper__item slider-item swiper-slide\"
                        style=\"background-image: url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/slider/main-slider-1.jpg);\"
                    >
                        <div class=\"slider-item__content\">
                            <h3 class=\"slider-item__title\">
                                Поставки металлопроката в любых объемах
                            </h3>
                            <a href=\"#\" class=\"btn btn--yellow\">
                                Заказать звонок
                            </a>
                        </div>
                    </div>
                    <div 
                        class=\"main-slider-swiper__item slider-item swiper-slide\"
                        style=\"background-image: url(";
        // line 21
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/slider/main-slider-2.jpg);\"
                    >
                        <div class=\"slider-item__content\">
                            <h3 class=\"slider-item__title slider-item__title--white\">
                                Широкий ассортимент <span class=\"slider-item__title--yellow\">продукции</span>
                            </h3>
                            <a href=\"#\" class=\"btn btn--yellow\">
                                Продукция
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/slider.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/slider.twig");
    }
}
