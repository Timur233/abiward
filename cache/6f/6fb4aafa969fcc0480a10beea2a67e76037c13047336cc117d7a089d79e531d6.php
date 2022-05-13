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

/* widgets/pay_methods.twig */
class __TwigTemplate_cd614edfec4b654e8aac72c4e78360be9bfe3028a89ec428afcde737ecf1bc46 extends \Twig\Template
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
        echo "<section id=\"pay-methods\" class=\"pay-methods section section--gray\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h2 class=\"section-title__h2\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["pay_methods_title"] ?? null), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"flex pay-methods__list\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pay_methods_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "                <div class=\"flex__1-3 pay-methods__item\">
                    <img 
                        class=\"pay-methods__icon\"
                        src=\"https://cms.abpx.kz";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 11)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "settings", [], "any", false, false, false, 11), "image", [], "any", false, false, false, 11), "path", [], "any", false, false, false, 11), "html", null, true);
            echo "\" 
                        alt=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 12)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "settings", [], "any", false, false, false, 12), "text", [], "any", false, false, false, 12), "html", null, true);
            echo "\"
                    >
                    <h3 class=\"pay-methods__name\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 15)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "settings", [], "any", false, false, false, 15), "text", [], "any", false, false, false, 15), "html", null, true);
            echo "
                    </h3>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/pay_methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  67 => 15,  61 => 12,  57 => 11,  52 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/pay_methods.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/pay_methods.twig");
    }
}
