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

/* widgets/about_developer.twig */
class __TwigTemplate_58f9fc75ec23109097d6e202f46efcd6b15297c8b9366fae82381c340bd6a5c7 extends \Twig\Template
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
        echo "<section id=\"about-developer\" class=\"about-developer section section--gray\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h2 class=\"section-title__h2\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["company_title"] ?? null), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"about-developer__block\">
            <div class=\"flex\">
                <div class=\"flex__1-2 about-developer__info\">
                    <img src=\"https://cms.abpx.kz";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company_logo"] ?? null), "path", [], "any", false, false, false, 9), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["company_title"] ?? null), "html", null, true);
        echo "\" class=\"about-developer__logo\">
                    ";
        // line 10
        echo ($context["company_about"] ?? null);
        echo "
                </div>
                <div class=\"flex__1-2 about-developer__items\">
                    <div class=\"flex developer-items\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["company_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                            <div class=\"flex__1-3 developer-items__item\">
                                <h3 class=\"developer-items__title\">
                                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 17)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "settings", [], "any", false, false, false, 17), "text", [], "any", false, false, false, 17), "html", null, true);
            echo "
                                </h3>
                                ";
            // line 19
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 19)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "settings", [], "any", false, false, false, 19), "text", [], "any", false, false, false, 19);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/about_developer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  76 => 19,  71 => 17,  67 => 15,  63 => 14,  56 => 10,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/about_developer.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/about_developer.twig");
    }
}
