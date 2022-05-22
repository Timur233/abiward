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
                ";
        // line 6
        if (($context["is_admin"] ?? null)) {
            // line 7
            echo "                    <button class=\"modal-link\" 
                        data-table=\"abi_partners\"
                        data-command=\"INSERT\" 
                        data-fields=\"image=image\"
                    >
                        добавить
                    </button>
                ";
        }
        // line 15
        echo "            </h2>
        </div>
        <div class=\"partners-swiper swiper-container\">
            <div class=\"swiper-wrapper\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 20
            echo "                    <div 
                        class=\"partners-swiper__item swiper-slide\"
                    >
                        <img 
                            src=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partner"], "image", [], "any", false, false, false, 24), "html", null, true);
            echo "\" 
                            class=\"partners-swiper__logo\"
                        >
                        ";
            // line 27
            if (($context["is_admin"] ?? null)) {
                // line 28
                echo "                            <button class=\"modal-link delete-link\" 
                                data-table=\"abi_partners\"
                                data-command=\"DELETE\" 
                                data-id=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "\"
                            >
                                x
                            </button>
                        ";
            }
            // line 36
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </div>
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
        return array (  102 => 38,  95 => 36,  87 => 31,  82 => 28,  80 => 27,  72 => 24,  66 => 20,  62 => 19,  56 => 15,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/partners.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/partners.twig");
    }
}
