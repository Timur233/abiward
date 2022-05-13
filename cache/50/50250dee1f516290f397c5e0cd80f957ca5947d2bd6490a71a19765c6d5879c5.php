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

/* widgets/reviews.twig */
class __TwigTemplate_c5ce64fc6d82167ebf6fd282863521bea307fb3b6658be173fb44aa93952d1f8 extends \Twig\Template
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
        echo "<section class=\"section reviews\" id=\"reviews\">
    <div class=\"container\">
        <div class=\"flex\">
            <div class=\"flex__1-2\">
                <div class=\"section__title\">
                    <h2 class=\"section-title__h2\">
                        Нас выбирают
                    </h2>
                </div>
                <div class=\"reviews__about-us\">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                </div>
                <a href=\"#\" class=\"btn btn--outline\">
                    Читать далее
                </a>
            </div>
            <div class=\"flex__1-2\">
                <div class=\"reviews-swiper swiper-container\">
                    <div class=\"swiper-wrapper\">
                        <div 
                            class=\"reviews-swiper__item swiper-slide\"
                        >
                            <a href=\"#\" class=\"reviews__link\">
                                <img 
                                    class=\"reviews__img\"
                                    src=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/review.jpg\" 
                                    alt=\"\"
                                >
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
        return "widgets/reviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/reviews.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/reviews.twig");
    }
}
