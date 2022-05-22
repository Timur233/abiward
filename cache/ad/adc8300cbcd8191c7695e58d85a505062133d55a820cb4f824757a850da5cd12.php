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

/* widgets/_header.twig */
class __TwigTemplate_9c3e91833de1d2a4e662706ab64a384f271c2617e941c4641beb2b979fa1fb68 extends \Twig\Template
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
        echo "<header class=\"main-header\">
   <div class=\"container\">
      <div class=\"main-header__content\">
         <!--div class=\"menu-toggle main-header__menu-toggle\">
            <span class=\"menu-toggle__line\"></span>
            <span class=\"menu-toggle__line\"></span>
            <span class=\"menu-toggle__line\"></span>
         </div-->
         <div class=\"main-header__top header-top\">
            <div class=\"header-top__logo logo-block\">
               <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\" class=\"logo-block__link\">
                  <img 
                     src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "assets/img/icons/Frame 9.svg\" 
                     alt=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "copyright", [], "any", false, false, false, 14), "html", null, true);
        echo "\" 
                     class=\"logo-block__img\"
                  >
               </a>
            </div>
            <div class=\"haeder-top__promo header-promo\">
               <h2 class=\"header-promo__title\">
                  ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "site_title", [], "any", false, false, false, 21), "html", null, true);
        echo "
               </h2>
               <div class=\"header-promo__label promo-label\">
                  <img 
                     src=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "assets/img/icons/Frame 10.svg\" 
                     alt=\"Delivery Abiward\" 
                     class=\"promo-label__icon\"
                  >
                  <span>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "delivery", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
                  <span class=\"promo-label__dot\"></span>
                  <span>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "delivery_line", [], "any", false, false, false, 31), "html", null, true);
        echo "</span>
               </div>
            </div>
            <div class=\"header-top__contact header-contact\">
               <a href=\"tel:+77714613215\" class=\"header-contact__phone\">
                  ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "site_phone", [], "any", false, false, false, 36), "html", null, true);
        echo "
               </a>
               <a href=\"#\" class=\"header-contact__adress\">
                  ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "site_adres", [], "any", false, false, false, 39), "html", null, true);
        echo "
               </a>
            </div>
         </div>
         <div class=\"main-header__bottom header-bottom\">
            <nav class=\"header-bottom__nav main-nav\">
               <ul class=\"main-nav__list\">
                  <li class=\"main-nav__li\">
                     <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\" class=\"main-nav__a\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "menu_main", [], "any", false, false, false, 47), "html", null, true);
        echo "</a>
                  </li>
                  <li class=\"main-nav__li\">
                     <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "pages/?id=1\" class=\"main-nav__a\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "menu_about", [], "any", false, false, false, 50), "html", null, true);
        echo "</a>
                  </li>
                  <li class=\"main-nav__li\">
                     <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "catalog\" class=\"main-nav__a\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "menu_products", [], "any", false, false, false, 53), "html", null, true);
        echo "</a>
                  </li>
                  <li class=\"main-nav__li\">
                     <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "pages/?id=3\" class=\"main-nav__a\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "menu_price", [], "any", false, false, false, 56), "html", null, true);
        echo "</a>
                  </li>
                  <li class=\"main-nav__li\">
                     <a href=\"#\" class=\"main-nav__a\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "menu_contacts", [], "any", false, false, false, 59), "html", null, true);
        echo "</a>
                  </li>
               </ul>
            </nav>
            <div class=\"header-bottom__lang lang-switcher\">
               <a href=\"";
        // line 64
        if ((($context["lang"] ?? null) != "ru")) {
            echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        } else {
            echo "kk";
        }
        echo "\" class=\"lang-switcher__link\">
                  <img 
                     src=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "assets/img/icons/planet-earth-svgrepo-com (1) 1.svg\" 
                     class=\"lang-switcher__icon\"
                  >
                  ";
        // line 69
        if ((($context["lang"] ?? null) != "ru")) {
            echo "Русский";
        } else {
            echo "Казакша";
        }
        // line 70
        echo "               </a>
            </div>
            <div class=\"header-bottom__callback\">
               <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "#callback\" class=\"btn btn--yellow\">
                  ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "callback", [], "any", false, false, false, 74), "html", null, true);
        echo "
               </a>
            </div>
         </div>
      </div>
   </div>
</header>";
    }

    public function getTemplateName()
    {
        return "widgets/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 74,  178 => 73,  173 => 70,  167 => 69,  161 => 66,  152 => 64,  144 => 59,  136 => 56,  128 => 53,  120 => 50,  112 => 47,  101 => 39,  95 => 36,  87 => 31,  82 => 29,  75 => 25,  68 => 21,  58 => 14,  54 => 13,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/_header.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/_header.twig");
    }
}
