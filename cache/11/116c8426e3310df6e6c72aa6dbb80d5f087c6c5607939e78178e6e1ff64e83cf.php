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

/* widgets/building_steps.twig */
class __TwigTemplate_2b6f8443fc31f72ce26fc32d5020b89425ca2604a8f1f7b76034a4c952e56877 extends \Twig\Template
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
        if ((array_key_exists("building_steps", $context) &&  !twig_test_empty(($context["building_steps"] ?? null)))) {
            // line 2
            echo "    <section id=\"building-steps\" class=\"building-steps section\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2 class=\"section-title__h2\">";
            // line 5
            echo twig_escape_filter($this->env, ($context["steps_title"] ?? null), "html", null, true);
            echo "</h2>
                <div class=\"section-title__control\">
                    <div class=\"swiper-button-prev building-steps__controll\"></div>
                    <div class=\"swiper-button-next building-steps__controll\"></div>
                </div>
            </div>

            <div class=\"building-steps__swiper swiper-container\">
                <div class=\"swiper-wrapper\">
                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["building_steps"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "                        <div 
                            class=\"swiper-slide building-steps__slide\" 
                            style=\"background-image: url('https://cms.abpx.kz";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "preview", [], "any", false, false, false, 17), "html", null, true);
                echo "')\"
                        >
                            ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["item"], "gallery", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                                <a 
                                    class=\"building-steps__link\" 
                                    href=\"#\" 
                                    data-gallery-images=\"";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "gallery", [], "any", false, false, false, 23));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                        echo "https://cms.abpx.kz";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["img"], "styles", [], "any", false, false, false, 23)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "path", [], "any", false, false, false, 23), "html", null, true);
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 23) == false)) {
                            echo ",";
                        }
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"  
                                    onclick=\"() => {frontend.lightBox(this.getAttribute('data-gallery-images')); return false}\">
                                    <div class=\"step-information\">
                                        <h3 class=\"building-steps__title\">";
                    // line 26
                    echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["translate"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "format_date", [], "any", false, false, false, 26), "month", [], "any", false, false, false, 26)] ?? null) : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "format_date", [], "any", false, false, false, 26), "year", [], "any", false, false, false, 26), "html", null, true);
                    echo "</h3>
                                    </div>
                                </a>
                            ";
                }
                // line 30
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </div>
            </div>
        </div>
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "widgets/building_steps.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  123 => 30,  114 => 26,  76 => 23,  71 => 20,  69 => 19,  64 => 17,  60 => 15,  56 => 14,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/building_steps.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/building_steps.twig");
    }
}
