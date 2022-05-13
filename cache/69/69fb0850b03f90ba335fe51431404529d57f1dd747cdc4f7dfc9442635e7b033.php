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

/* widgets/advantages.twig */
class __TwigTemplate_69ce5dd797f73b626913f6ac1cfcf18e0845c217eea9eed4df7649ad12f7956d extends \Twig\Template
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
        echo "<section id=\"advantages\" class=\"advantages section\">
    <div class=\"container\">
        <div class=\"flex flex--v-center\">
            <div class=\"flex__1-3 advantages__info\">
                <div class=\"section-title\">
                    <h2 class=\"section-title__h2\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["advantages_title"] ?? null), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 8
        echo ($context["advantages_desc"] ?? null);
        echo "
            </div>
            <div class=\"flex__1-3 advantages__left\">
                <div class=\"advantages__item\">
                    <img class=\"advantages__img\" src=\"https://cms.abpx.kz";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "children", [], "any", false, false, false, 12)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "settings", [], "any", false, false, false, 12), "image", [], "any", false, false, false, 12), "path", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "children", [], "any", false, false, false, 12)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "settings", [], "any", false, false, false, 12), "text", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
                    <h4 class=\"advantages__title\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "children", [], "any", false, false, false, 13)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[1] ?? null) : null), "settings", [], "any", false, false, false, 13), "text", [], "any", false, false, false, 13), "html", null, true);
        echo "</h4>
                    ";
        // line 14
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "children", [], "any", false, false, false, 14)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[2] ?? null) : null), "settings", [], "any", false, false, false, 14), "text", [], "any", false, false, false, 14);
        echo "
                </div>
                <div class=\"advantages__item\">
                    <img class=\"advantages__img\" src=\"https://cms.abpx.kz";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[1] ?? null) : null), "children", [], "any", false, false, false, 17)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null), "settings", [], "any", false, false, false, 17), "image", [], "any", false, false, false, 17), "path", [], "any", false, false, false, 17), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[1] ?? null) : null), "children", [], "any", false, false, false, 17)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[1] ?? null) : null), "settings", [], "any", false, false, false, 17), "text", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
                    <h4 class=\"advantages__title\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[1] ?? null) : null), "children", [], "any", false, false, false, 18)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[1] ?? null) : null), "settings", [], "any", false, false, false, 18), "text", [], "any", false, false, false, 18), "html", null, true);
        echo "</h4>
                    ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[1] ?? null) : null), "children", [], "any", false, false, false, 19)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[2] ?? null) : null), "settings", [], "any", false, false, false, 19), "text", [], "any", false, false, false, 19);
        echo "
                </div>
            </div>
            <div class=\"flex__1-3 advantages__right\">
                <div class=\"advantages__item\">
                    <img class=\"advantages__img\" src=\"https://cms.abpx.kz";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[2] ?? null) : null), "children", [], "any", false, false, false, 24)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[0] ?? null) : null), "settings", [], "any", false, false, false, 24), "image", [], "any", false, false, false, 24), "path", [], "any", false, false, false, 24), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[2] ?? null) : null), "children", [], "any", false, false, false, 24)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[1] ?? null) : null), "settings", [], "any", false, false, false, 24), "text", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
                    <h4 class=\"advantages__title\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[2] ?? null) : null), "children", [], "any", false, false, false, 25)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[1] ?? null) : null), "settings", [], "any", false, false, false, 25), "text", [], "any", false, false, false, 25), "html", null, true);
        echo "</h4>
                    ";
        // line 26
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[2] ?? null) : null), "children", [], "any", false, false, false, 26)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[2] ?? null) : null), "settings", [], "any", false, false, false, 26), "text", [], "any", false, false, false, 26);
        echo "
                </div>
                <div class=\"advantages__item\">
                    <img class=\"advantages__img\" src=\"https://cms.abpx.kz";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[3] ?? null) : null), "children", [], "any", false, false, false, 29)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[0] ?? null) : null), "settings", [], "any", false, false, false, 29), "image", [], "any", false, false, false, 29), "path", [], "any", false, false, false, 29), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, (($__internal_compile_27 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[3] ?? null) : null), "children", [], "any", false, false, false, 29)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[1] ?? null) : null), "settings", [], "any", false, false, false, 29), "text", [], "any", false, false, false, 29), "html", null, true);
        echo "\">
                    <h4 class=\"advantages__title\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, (($__internal_compile_29 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[3] ?? null) : null), "children", [], "any", false, false, false, 30)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[1] ?? null) : null), "settings", [], "any", false, false, false, 30), "text", [], "any", false, false, false, 30), "html", null, true);
        echo "</h4>
                    ";
        // line 31
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = ($context["advantages_items"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[3] ?? null) : null), "children", [], "any", false, false, false, 31)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[2] ?? null) : null), "settings", [], "any", false, false, false, 31), "text", [], "any", false, false, false, 31);
        echo "
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/advantages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 31,  112 => 30,  106 => 29,  100 => 26,  96 => 25,  90 => 24,  82 => 19,  78 => 18,  72 => 17,  66 => 14,  62 => 13,  56 => 12,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/advantages.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/advantages.twig");
    }
}
