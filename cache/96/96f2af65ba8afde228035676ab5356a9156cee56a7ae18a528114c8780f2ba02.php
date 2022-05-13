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

/* widgets/mobile_menu.twig */
class __TwigTemplate_e8285a5b14d914147f7b032f76870e18a7378ef5f46836408082f1960f4d2403 extends \Twig\Template
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
        echo "<div class=\"sidebar sidebar__container\">

    <div class=\"lang-switcher sidebar__lang\">
      <a 
        href=\"";
        // line 5
        if ((($context["lang"] ?? null) != "ru")) {
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        } else {
            echo "#";
        }
        echo " \" 
        class=\"lang-switcher__item ";
        // line 6
        if ((($context["lang"] ?? null) == "ru")) {
            echo "lang-switcher__item--active";
        }
        echo "\">RU</a>
      <a 
        href=\"";
        // line 8
        if ((($context["lang"] ?? null) != "kk")) {
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "kk";
        } else {
            echo "#";
        }
        echo "\" 
        class=\"lang-switcher__item ";
        // line 9
        if ((($context["lang"] ?? null) == "kk")) {
            echo "lang-switcher__item--active";
        }
        echo "\">KZ</a>
    </div>

    <nav class=\"mobile-menu sidebar__menu\">
        <a 
            class=\"mobile-menu__link\" 
            href=\"#about-project\" 
            onclick=\"frontend.sidebar('open');\">
            ";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["translate"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["about_of_project"] ?? null) : null), "html", null, true);
        echo "
        </a>
        <a 
            class=\"mobile-menu__link\" 
            href=\"#gallery\" 
            onclick=\"frontend.sidebar('open');\">
            ";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["translate"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["gallery"] ?? null) : null), "html", null, true);
        echo "
        </a>
        <a 
            class=\"mobile-menu__link\" 
            href=\"#advantages\" 
            onclick=\"frontend.sidebar('open');\">
            ";
        // line 29
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["translate"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["advantages"] ?? null) : null), "html", null, true);
        echo "
        </a>
        <a 
            class=\"mobile-menu__link\" 
            href=\"#locations\" 
            onclick=\"frontend.sidebar('open');\">
            ";
        // line 35
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["translate"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["select_location"] ?? null) : null), "html", null, true);
        echo "
        </a>
        ";
        // line 43
        echo "        <a 
            class=\"mobile-menu__link\" 
            href=\"#contacts\" 
            onclick=\"frontend.sidebar('open');\">
            ";
        // line 47
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["translate"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["contacts"] ?? null) : null), "html", null, true);
        echo "
        </a>  
    </nav>  
          
    <div class=\"sidebar__callback\">
        <a href=\"https://instagram.com/";
        // line 52
        echo twig_escape_filter($this->env, ($context["site_insta"] ?? null), "html", null, true);
        echo "\" target=\"_blank\" class=\"sidebar__link\">
            <svg class=\"icon sidebar__insta-icon\">
                <use xlink:href=\"./assets/symbol.svg?v=2#icon-insta\"></use>
             </svg>
            ";
        // line 56
        echo twig_escape_filter($this->env, ($context["site_insta"] ?? null), "html", null, true);
        echo "
        </a>
        <a href=\"tel:";
        // line 58
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "\" class=\"sidebar__link\" onclick=\"frontend.sidebar('open'); fbq('track', 'Contact');\">
            <img src=\"./assets/img/phone-icon.svg\" alt=\"Контакты\" class=\"icon sidebar__phone-icon\">
            ";
        // line 60
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "
        </a>
        <button href=\"\" class=\"btn btn--gradient\" data-modal=\"#callback-modal\" onclick=\"frontend.sidebar('open');\">Оставить заявку</button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "widgets/mobile_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 60,  138 => 58,  133 => 56,  126 => 52,  118 => 47,  112 => 43,  107 => 35,  98 => 29,  89 => 23,  80 => 17,  67 => 9,  58 => 8,  51 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/mobile_menu.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/mobile_menu.twig");
    }
}
