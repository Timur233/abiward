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
                                
                                ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "edit", [], "any", false, false, false, 16), "html", null, true);
            echo " 
                            </button>
                        ";
        }
        // line 19
        echo "                    </h2>
                </div>
                <div class=\"reviews__about-us\">
                    ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["why_are_we"] ?? null), "content", [], "any", false, false, false, 22);
        echo "
                </div>
            </div>
            <div class=\"flex__1-2\">
                <div class=\"reviews-swiper swiper-container\">
                    <div class=\"swiper-wrapper\">
                        ";
        // line 28
        if (($context["is_admin"] ?? null)) {
            // line 29
            echo "                            <div 
                                class=\"reviews-swiper__item swiper-slide\" style=\"height: 100%;\"
                            >
                                <button class=\"btn btn--yellow btn--outline modal-link\" type=\"button\" 
                                    data-table=\"abi_reviews\"
                                    data-command=\"INSERT\" 
                                    data-fields=\"image=image\"
                                    style=\"width: 100%; height: 100%\"
                                >
                                    + ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "create", [], "any", false, false, false, 38), "html", null, true);
            echo "  
                                </button>
                            </div>
                        ";
        }
        // line 42
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "                            <div 
                                class=\"reviews-swiper__item swiper-slide\"
                            >
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 46), "html", null, true);
            echo "\" 
                                   class=\"reviews__link\" data-fslightbox=\"first-lightbox\">
                                    <img 
                                        class=\"reviews__img\"
                                        src=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["source_"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 50), "html", null, true);
            echo "\" 
                                        alt=\"\"
                                    >
                                </a>
                                ";
            // line 54
            if (($context["is_admin"] ?? null)) {
                // line 55
                echo "                                    <button class=\"modal-link delete-link\" 
                                        data-table=\"abi_reviews\"
                                        data-command=\"DELETE\" 
                                        data-id=\"";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 58), "html", null, true);
                echo "\"
                                    >
                                        x
                                    </button>
                                ";
            }
            // line 63
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        return array (  153 => 65,  146 => 63,  138 => 58,  133 => 55,  131 => 54,  122 => 50,  113 => 46,  108 => 43,  103 => 42,  96 => 38,  85 => 29,  83 => 28,  74 => 22,  69 => 19,  63 => 16,  57 => 13,  51 => 9,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/reviews.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/reviews.twig");
    }
}
