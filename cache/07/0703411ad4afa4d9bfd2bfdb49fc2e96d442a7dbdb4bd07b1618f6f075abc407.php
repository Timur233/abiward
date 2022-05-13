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

/* widgets/modal.twig */
class __TwigTemplate_372592686b94cbe91b5d029423f01d5c92df8cef681732abd5f3fdea0439bc71 extends \Twig\Template
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
        echo "<!-- Modal -->
<div class=\"modal modal--hidden\" id=\"callback-modal\">
    <div class=\"modal__dialog modal__dialog--center\">
        <div class=\"modal__content\">
            <div class=\"modal__body\">

                <button class=\"modal__btn-close\" data-modal=\"#callback-modal\">
                    <svg class=\"icon modal__icon-close\">
                        <use xlink:href=\"./assets/symbol.svg?v=1#icon-close\"></use>
                    </svg>
                </button>

                <h3 class=\"modal__title\">Оставить заявку</h3>

                <form class=\"callback callback__form\">
                    <div class=\"input-group callback__group\">
                        <input type=\"text\" class=\"input-group__input\" id=\"formName\" name=\"name\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["translate"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), "html", null, true);
        echo "\" fieldname=\"Имя\">
                    </div>

                    <div class=\"input-group callback__group\">
                        <input type=\"text\" class=\"input-group__input\" id=\"formPhone\" name=\"phone\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["translate"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["phone"] ?? null) : null), "html", null, true);
        echo "\" fieldname=\"Телефон\" required=\"\">
                    </div>

                    <div class=\"callback__group\">
                        <a href=\"#\" class=\"btn btn--gradient callback__btn\" onclick=\"frontend.form(this); return false\">";
        // line 25
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["translate"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["send"] ?? null) : null), "html", null, true);
        echo "</a>
                    </div>

                    <!--div class=\"callback__preloader\" style=\"display: none\">
                        <img src=\"../assets/img/preloader\" alt=\"\">
                    </div-->
                </form>
            </div>
        </div>
    </div>
    <div class=\"modal__shadow\" data-modal=\"#callback-modal\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "widgets/modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  62 => 21,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/modal.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/modal.twig");
    }
}
