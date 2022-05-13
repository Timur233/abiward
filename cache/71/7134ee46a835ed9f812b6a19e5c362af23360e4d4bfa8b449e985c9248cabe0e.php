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

/* widgets/gallery.twig */
class __TwigTemplate_db7af0b880f351b08c4adb19199cc7f81d2db95d2e4a355ed5b550bbf7ec880d extends \Twig\Template
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
        echo "<section id=\"gallery\" class=\"main-gallery section section--gray\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h2 class=\"section-title__h2\">Галерея</h2>
            <div class=\"section-title__control\">
                <div class=\"swiper-button-prev main-gallery__controll\"></div>
                <div class=\"swiper-button-next main-gallery__controll\"></div>
            </div>
        </div>
        <div class=\"gallery-swiper swiper-container d-block d-md-none\">
            <div class=\"swiper-wrapper\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "                    <div class=\"main-gallery__item swiper-slide\">
                        <a 
                            href=\"https://cms.abpx.kz";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 15), "html", null, true);
            echo "\" 
                            class=\"main-gallery__link\" 
                            data-fslightbox=\"first-lightbox\"
                        >
                            <img 
                                class=\"main-gallery__img\"
                                src=\"https://cms.abpx.kz";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 21), "html", null, true);
            echo "\" 
                                alt=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22), "html", null, true);
            echo "\"
                            >
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  71 => 22,  67 => 21,  58 => 15,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/gallery.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/gallery.twig");
    }
}
