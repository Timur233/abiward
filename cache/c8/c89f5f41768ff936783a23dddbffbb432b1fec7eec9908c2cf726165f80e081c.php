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

/* widgets/contacts.twig */
class __TwigTemplate_ad2f102512a1d5321ac0a8b8bd83715ebf2841d97f40ada4f2d4caa9b18e8dda extends \Twig\Template
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
        echo "<section id=\"contacts\" class=\"contacts section\">
  <div class=\"container\">
    <div class=\"section-title\">
        <h2 class=\"section-title__h2 contacts__title\">";
        // line 4
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["translate"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["contacts"] ?? null) : null), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"flex\">
      <div class=\"flex__1-3 contacts__item\">
        <svg class=\"icon contacts__icon\">
          <use xlink:href=\"./assets/symbol.svg?v=2#icon_contacts_phone\"></use>
        </svg>
        <a 
          href=\"tel:";
        // line 12
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "\" 
          class=\"contacts__label\"
          onclick=\"fbq('track', 'Contact');\"
        >
          ";
        // line 16
        echo twig_escape_filter($this->env, ($context["site_phone"] ?? null), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"flex__1-3 contacts__item\">
        <svg class=\"icon contacts__icon\">
          <use xlink:href=\"./assets/symbol.svg?v=1#icon-contacts-address\"></use>
        </svg>
        <span
          class=\"contacts__label\"
        >
          ";
        // line 26
        echo twig_escape_filter($this->env, ($context["site_adress"] ?? null), "html", null, true);
        echo " 
          <hr>
          <div class=\"contacts__label--small\">
            <b>Отдел продаж:</b> 
            <br>
            ";
        // line 31
        echo twig_escape_filter($this->env, ($context["site_adress_two"] ?? null), "html", null, true);
        echo "
          </div>
        </span>
      </div>
      <div class=\"flex__1-3 contacts__item\">
        <svg class=\"icon contacts__icon\">
          <use xlink:href=\"./assets/symbol.svg?v=2#icon-contacts-insta\"></use>
        </svg>
        <a 
          href=\"https://instagram.com/";
        // line 40
        echo twig_escape_filter($this->env, ($context["site_insta"] ?? null), "html", null, true);
        echo "\" 
          target=\"_blank\"
          class=\"contacts__label\"
        >
          ";
        // line 44
        echo twig_escape_filter($this->env, ($context["site_insta"] ?? null), "html", null, true);
        echo "
        </a>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/contacts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 44,  93 => 40,  81 => 31,  73 => 26,  60 => 16,  53 => 12,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/contacts.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/contacts.twig");
    }
}
