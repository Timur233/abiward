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

/* widgets/about_project.twig */
class __TwigTemplate_97e8b2ba4314e9f02ec8ff31d7082464291e357c038708a58261052434cc5f45 extends \Twig\Template
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
        echo "<section id=\"about-project\" class=\"about-project section\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h2 class=\"section-title__h2\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["about_title"] ?? null), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"flex\">
            <div class=\"flex__1-2 about-project__left\">
                <div class=\"about-project__desc\">
                    ";
        // line 9
        echo ($context["about_desc"] ?? null);
        echo "
                </div>
                <a href=\"#locations\" class=\"btn btn--gradient\">
                    ";
        // line 12
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["translate"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["select_flat"] ?? null) : null), "html", null, true);
        echo "
                </a>
            </div>
            <div class=\"flex__1-2 about-project__right\">
                <div class=\"benefits flex\">
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["about_advantages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                        <div class=\"benefits__item flex__1-2\">
                            <img src=\"https://cms.abpx.kz";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 19)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "settings", [], "any", false, false, false, 19), "image", [], "any", false, false, false, 19), "path", [], "any", false, false, false, 19), "html", null, true);
            echo "\" alt=\"#\" class=\"benefits__img\">
                            <strong class=\"benefits__title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 20)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "settings", [], "any", false, false, false, 20), "text", [], "any", false, false, false, 20), "html", null, true);
            echo "</strong>
                            <span class=\"benefits__info\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 21)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), "settings", [], "any", false, false, false, 21), "text", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/about_project.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  79 => 21,  75 => 20,  71 => 19,  68 => 18,  64 => 17,  56 => 12,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/about_project.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/about_project.twig");
    }
}
