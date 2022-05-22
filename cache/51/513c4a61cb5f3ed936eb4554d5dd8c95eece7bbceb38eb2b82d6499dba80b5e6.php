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

/* widgets/catalog.twig */
class __TwigTemplate_daa9082a834f45ff7e1795507cd731e223ecb96de22dba2bcfaca766031ccc51 extends \Twig\Template
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
        echo "<section class=\"section catalog\" id=\"catalog\">
    <div class=\"container\">
        <div class=\"section__title\">
            <h2 class=\"section-title__h2\">
                ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "our_products", [], "any", false, false, false, 5), "html", null, true);
        echo "
            </h2>
        </div>
        <div class=\"catalog__list\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["catalog"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "                <div class=\"catalog__item category-item\">
                    <img 
                        src=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 12), "html", null, true);
            echo "\" 
                        alt=\"\" 
                        class=\"category-item__img\"
                    >
                    <div class=\"category-item__info\">
                        <h4 class=\"category-item__name\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "
                        </h4>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "catalog?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"category-item__link\">
                            ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "more", [], "any", false, false, false, 21), "html", null, true);
            echo "
                        </a>
                        ";
            // line 23
            if (($context["is_admin"] ?? null)) {
                // line 24
                echo "                            <br>
                            <button class=\"category-item__link modal-link delletw-link\"
                                data-table=\"abi_catalog\"
                                data-command=\"DELETE\" 
                                data-id=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "\"
                                style=\"text-transform: lower-case\"
                            >
                                ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "delete", [], "any", false, false, false, 31), "html", null, true);
                echo "
                            </button>
                            <br>
                            <button class=\"category-item__link modal-link\" 
                                data-table=\"abi_catalog\"
                                data-command=\"UPDATE\" 
                                data-fields=\"text=title|textarea=content|image=image\" 
                                data-id=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\"
                                style=\"text-transform: lower-case\"
                            >
                                ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "edit", [], "any", false, false, false, 41), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 44
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            ";
        if (($context["is_admin"] ?? null)) {
            // line 48
            echo "                <button class=\"btn btn--yellow btn--outline modal-link\" type=\"button\" 
                    data-table=\"abi_catalog\"
                    data-command=\"INSERT\" 
                    data-fields=\"text=title|textarea=content|image=image\"
                >
                    ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "create", [], "any", false, false, false, 53), "html", null, true);
            echo " 
                </button>
            ";
        }
        // line 56
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 56,  139 => 53,  132 => 48,  129 => 47,  121 => 44,  115 => 41,  109 => 38,  99 => 31,  93 => 28,  87 => 24,  85 => 23,  80 => 21,  74 => 20,  69 => 18,  58 => 12,  54 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/catalog.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/catalog.twig");
    }
}
