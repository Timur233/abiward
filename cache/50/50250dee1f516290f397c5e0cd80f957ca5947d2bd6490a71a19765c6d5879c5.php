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
                        ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["why_are_we"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "
                        ";
        // line 8
        if (($context["is_admin"] ?? null)) {
            // line 9
            echo "                            <button class=\"modal-link\" 
                                data-table=\"abi_pages\"
                                data-command=\"UPDATE\" 
                                data-fields=\"text=title|textarea=content\"
                                data-id=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["why_are_we"] ?? null), "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\"
                            >
                                редактировать
                            </button>
                        ";
        }
        // line 18
        echo "                    </h2>
                </div>
                <div class=\"reviews__about-us\">
                    ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["why_are_we"] ?? null), "content", [], "any", false, false, false, 21);
        echo "
                </div>
            </div>
            <div class=\"flex__1-2\">
                <div class=\"reviews-swiper swiper-container\">
                    <div class=\"swiper-wrapper\">
                        ";
        // line 27
        if (($context["is_admin"] ?? null)) {
            // line 28
            echo "                            <div 
                                class=\"reviews-swiper__item swiper-slide\" style=\"height: 100%;\"
                            >
                                <button class=\"btn btn--yellow btn--outline modal-link\" type=\"button\" 
                                    data-table=\"abi_reviews\"
                                    data-command=\"INSERT\" 
                                    data-fields=\"image=image\"
                                    style=\"width: 100%; height: 100%\"
                                >
                                    + Создать 
                                </button>
                            </div>
                        ";
        }
        // line 41
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            echo "                            <div 
                                class=\"reviews-swiper__item swiper-slide\"
                            >
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 45), "html", null, true);
            echo "\" 
                                   class=\"reviews__link\" data-fslightbox=\"first-lightbox\">
                                    <img 
                                        class=\"reviews__img\"
                                        src=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 49), "html", null, true);
            echo "\" 
                                        alt=\"\"
                                    >
                                </a>
                                ";
            // line 53
            if (($context["is_admin"] ?? null)) {
                // line 54
                echo "                                    <button class=\"modal-link delete-link\" 
                                        data-table=\"abi_reviews\"
                                        data-command=\"DELETE\" 
                                        data-id=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\"
                                    >
                                        x
                                    </button>
                                ";
            }
            // line 62
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </div>
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
        return array (  146 => 64,  139 => 62,  131 => 57,  126 => 54,  124 => 53,  115 => 49,  106 => 45,  101 => 42,  96 => 41,  81 => 28,  79 => 27,  70 => 21,  65 => 18,  57 => 13,  51 => 9,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/reviews.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/reviews.twig");
    }
}
