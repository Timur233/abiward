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

/* widgets/catalog.twig */
class __TwigTemplate_daa9082a834f45ff7e1795507cd731e223ecb96de22dba2bcfaca766031ccc51 extends \Twig\Template
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
        echo "<section class=\"section catalog\" id=\"catalog\">
    <div class=\"container\">
        <div class=\"section__title\">
            <h2 class=\"section-title__h2\">
                Наша продукция:
            </h2>
        </div>
        <div class=\"catalog__list\">
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/1.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Арматура
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/2.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Круг
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/3.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Катанка
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/4.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Профильные трубы
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/5.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Проволока
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/6.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Квадрат
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/7.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Профнастил
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/8.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Профильные трубы
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/9.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Швеллер
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/10.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Балки
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 161
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/11.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Сетка
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
            <div class=\"catalog__item category-item\">
                <img 
                    src=\"";
        // line 176
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/img/cats/12.jpg\" 
                    alt=\"\" 
                    class=\"category-item__img\"
                >
                <div class=\"category-item__info\">
                    <h4 class=\"category-item__name\">
                        Трубы
                    </h4>
                    <a href=\"#\" class=\"category-item__link\">
                        понробнее
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 176,  229 => 161,  211 => 146,  193 => 131,  175 => 116,  157 => 101,  139 => 86,  121 => 71,  103 => 56,  85 => 41,  67 => 26,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/catalog.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/catalog.twig");
    }
}
