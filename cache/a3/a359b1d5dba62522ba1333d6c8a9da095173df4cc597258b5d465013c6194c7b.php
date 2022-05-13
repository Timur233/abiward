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

/* widgets/locations_filter.twig */
class __TwigTemplate_db3af9fb71bb783ca4bef948edd66d66fa2d8c08e36ecd8678a76823d9ac164a extends \Twig\Template
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
        echo "<section id=\"locations\" class=\"locations section section--gray\">
  <div class=\"container\">
    <div class=\"section-title\">
        <h2 class=\"section-title__h2\">Выбрать квартиру</h2>
    </div>
    <div class=\"flex\">
      <div class=\"flex__1-2\">
        <div class=\"locations__filter locations-filter\"></div>
      </div>
      <div class=\"flex__1-2 locations__result locations-result\">
        <div class=\"locations-result__carousel swiper-locations\">
          <div class=\"swiper-wrapper\">
          </div>

          <div class=\"swiper-button-next locations--controll\"></div>
          <div class=\"swiper-button-prev locations--controll\"></div>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/locations_filter.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/locations_filter.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/locations_filter.twig");
    }
}
