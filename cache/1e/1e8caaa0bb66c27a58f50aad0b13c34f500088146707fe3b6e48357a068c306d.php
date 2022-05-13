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

/* widgets/map.twig */
class __TwigTemplate_3f725e74b48530463dd34de356c3db7ccf6f79f431f3daca12bfee92fabc6c52 extends \Twig\Template
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
        echo "<section id=\"map\" class=\"map section--gray py-6\">
    <div class=\"container\">
        <div class=\"map__informer map-informer\">
            <div class=\"map-informer__item\">
                <img src=\"https://cms.abpx.kz/storage/uploads/2022/02/10/6204f05d59455med-shop.svg\"  class=\"map-informer__img\" alt=\"Аптека\"> &ndash; 
                <span class=\"map-informer__text\">Аптека</span>
            </div>
            <div class=\"map-informer__item\">
                <img src=\"https://cms.abpx.kz/storage/uploads/2022/02/10/6204f05d5562dmed.svg\"  class=\"map-informer__img\" alt=\"Поликлиника\"> &ndash; 
                <span class=\"map-informer__text\">Поликлиника</span>
            </div>
            <div class=\"map-informer__item\">
                <img src=\"https://cms.abpx.kz/storage/uploads/2022/02/10/6204f05d69e35sport.svg\"  class=\"map-informer__img\" alt=\"Фитнес центр\"> &ndash; 
                <span class=\"map-informer__text\">Фитнес центр</span>
            </div>
            <div class=\"map-informer__item\">
                <img src=\"https://cms.abpx.kz/storage/uploads/2022/02/10/6204f05d628e8shop.svg\"  class=\"map-informer__img\" alt=\"Супермаркет\"> &ndash; 
                <span class=\"map-informer__text\">Супермаркет</span>
            </div>
            <div class=\"map-informer__item\">
                <img src=\"https://cms.abpx.kz/storage/uploads/2022/02/10/6204f05d5cbbfschool.svg\"  class=\"map-informer__img\" alt=\"Школа\"> &ndash; 
                <span class=\"map-informer__text\">Школа</span>
            </div>
            <div class=\"map-informer__item\">
                <img src=\"https://cms.abpx.kz/storage/uploads/2022/02/10/6204f05d4fc17childrens.svg\"  class=\"map-informer__img\" alt=\"Детский сад\"> &ndash; 
                <span class=\"map-informer__text\">Детский сад</span>
            </div>
        </div>
    </div>
    <div id=\"interective-map\" class=\"map__block\" style=\"width: 100%; height: 450px\"></div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/map.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/map.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/map.twig");
    }
}
