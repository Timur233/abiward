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
               <a href=\"/\" class=\"logo-block__link\">
                  <img 
                     src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/icons/Frame 9.svg\" 
                     alt=\"Металлопрокат Алматы - Abiward\" 
                     class=\"logo-block__img\"
                  >
               </a>
            </div>
            <div class=\"haeder-top__promo header-promo\">
               <h2 class=\"header-promo__title\">
                  Металлопрокат
                  <span class=\"header-promo__title--color\">
                      в Алматы
                  </span>
               </h2>
               <div class=\"header-promo__label promo-label\">
                  <img 
                     src=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/icons/Frame 10.svg\" 
                     alt=\"Delivery Abiward\" 
                     class=\"promo-label__icon\"
                  >
                  <span>По городу работает Доставка!</span>
                  <span class=\"promo-label__dot\"></span>
                  <span>в течении дня</span>
               </div>
            </div>
            <div class=\"header-top__contact header-contact\">
               <a href=\"tel:+77714613215\" class=\"header-contact__phone\">
                  +7 771 461 32 15
               </a>
               <a href=\"#\" class=\"header-contact__adress\">
                  Алматы, ул. Кабанбай Батыра, 104
               </a>
            </div>
         </div>
         <div class=\"main-header__bottom header-bottom\">
            <nav class=\"header-bottom__nav main-nav\">
               <ul class=\"main-nav__list\">
                  <li class=\"main-nav__li main-nav__li--active\">
                     <a href=\"#\" class=\"main-nav__a\">Главная</a>
                  </li>
                  <li class=\"main-nav__li\">
                     <a href=\"#\" class=\"main-nav__a\">О компании</a>
                  </li>
                  <li class=\"main-nav__li\">
                     <a href=\"#\" class=\"main-nav__a\">Продукция</a>
                  </li>
                  <li class=\"main-nav__li\">
                     <a href=\"#\" class=\"main-nav__a\">Прайс-лист</a>
                  </li>
                  <li class=\"main-nav__li\">
                     <a href=\"#\" class=\"main-nav__a\">Контакты</a>
                  </li>
               </ul>
            </nav>
            <div class=\"header-bottom__lang lang-switcher\">
               <a href=\"";
        // line 67
        if ((($context["lang"] ?? null) != "ru")) {
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        } else {
            echo "kk";
        }
        echo "\" class=\"lang-switcher__link\">
                  <img 
                     src=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/icons/planet-earth-svgrepo-com (1) 1.svg\" 
                     class=\"lang-switcher__icon\" 
                     alt=\"выбрать язык\"
                  >
                  ";
        // line 73
        if ((($context["lang"] ?? null) != "ru")) {
            echo "Русский";
        } else {
            echo "Казакша";
        }
        // line 74
        echo "               </a>
            </div>
            <div class=\"header-bottom__callback\">
               <button class=\"btn btn--yellow\">
                  Заказать звонок
               </button>
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
        return array (  133 => 74,  127 => 73,  120 => 69,  111 => 67,  69 => 28,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/_header.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/_header.twig");
    }
}
