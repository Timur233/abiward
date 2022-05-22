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
                    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                        <div 
                            class=\"main-slider-swiper__item slider-item swiper-slide\"
                            style=\"background-image: url('";
            // line 9
            echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 9), "html", null, true);
            echo "');\"
                        >
                            <div class=\"slider-item__content\">
                                ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 12);
            echo "
                                ";
            // line 13
            if (($context["is_admin"] ?? null)) {
                // line 14
                echo "                                    <button class=\"modal-link\" 
                                        data-table=\"abi_slider\"
                                        data-command=\"UPDATE\" 
                                        data-fields=\"textarea=content|image=image\"
                                        data-id=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo "\"
                                    >
                                        ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "edit", [], "any", false, false, false, 20), "html", null, true);
                echo "
                                    </button>
                                ";
            }
            // line 23
            echo "                            </div>

                            ";
            // line 25
            if (($context["is_admin"] ?? null)) {
                // line 26
                echo "                                <button class=\"modal-link delete-link\" 
                                    data-table=\"abi_slider\"
                                    data-command=\"DELETE\" 
                                    data-id=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "\"
                                >
                                    x
                                </button>
                            ";
            }
            // line 34
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </div>
            </div>
            ";
        // line 39
        if (($context["is_admin"] ?? null)) {
            // line 40
            echo "                <br>
                <button class=\"modal-link\" 
                    data-table=\"abi_slider\"
                    data-command=\"INSERT\" 
                    data-fields=\"textarea=content|image=image\"
                >
                    + ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "create", [], "any", false, false, false, 46), "html", null, true);
            echo "
                </button>
            ";
        }
        // line 49
        echo "        </div>
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
        return array (  130 => 49,  124 => 46,  116 => 40,  114 => 39,  110 => 37,  102 => 34,  94 => 29,  89 => 26,  87 => 25,  83 => 23,  77 => 20,  72 => 18,  66 => 14,  64 => 13,  60 => 12,  52 => 9,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/slider.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/slider.twig");
    }
}
