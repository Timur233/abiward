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

/* index.twig */
class __TwigTemplate_ee8738a911f628187509bd57e39d8211fd560362fff3b744cb1930fb0bd35003 extends \Twig\Template
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
        echo "<html lang=\"ru\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <title>Abiward.kz - Металлопрокат в Алматы</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/css/swiper.min.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/css/main.css?v=9\">
  
  </head>
  <body>

    ";
        // line 13
        echo twig_include($this->env, $context, "widgets/_header.twig");
        echo "

    ";
        // line 15
        echo twig_include($this->env, $context, "widgets/slider.twig");
        echo "

    ";
        // line 17
        echo twig_include($this->env, $context, "widgets/catalog.twig");
        echo "

    ";
        // line 19
        echo twig_include($this->env, $context, "widgets/partners.twig");
        echo "

    ";
        // line 21
        echo twig_include($this->env, $context, "widgets/reviews.twig");
        echo "

    <br>
    <br>
    <br>
    <br>
    <br>

  </body>

  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/js/swiper.min.js\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/js/fslightbox.js\"></script>
  <script
    src=\"https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=c931e95f-6835-4672-9786-8ec02a9db87a\"
    type=\"text/javascript\"
  ></script>

  <script>
      function mainSlider() {

        var slider = new Swiper('.main-slider-swiper', {
          effect: null,
          loop: true,
          slidesPerView: 2,
          preventClicks: true,
          preventClicksPropagation: false,
          lazyLoadingInPrevNext: true,
          spaceBetween: 20,
          navigation: {
              nextEl: \".swiper-button-next.building-steps__controll\",
              prevEl: \".swiper-button-prev.building-steps__controll\",
          },
        });

      }

      mainSlider();

      function partnersSlider() {

      var slider = new Swiper('.partners-swiper', {
        effect: null,
        loop: true,
        slidesPerView: 5,
        preventClicks: true,
        preventClicksPropagation: false,
        lazyLoadingInPrevNext: true,
        spaceBetween: 40,
        navigation: {
            nextEl: \".swiper-button-next.building-steps__controll\",
            prevEl: \".swiper-button-prev.building-steps__controll\",
        },
      });

      }

      partnersSlider();

      function reviewsSlider() {

      var slider = new Swiper('.reviews-swiper', {
        effect: null,
        loop: true,
        slidesPerView: 3,
        preventClicks: true,
        preventClicksPropagation: false,
        lazyLoadingInPrevNext: true,
        spaceBetween: 12,
        navigation: {
            nextEl: \".swiper-button-next.building-steps__controll\",
            prevEl: \".swiper-button-prev.building-steps__controll\",
        },
      });

      }

      reviewsSlider();
  </script>

</html>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  90 => 31,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/index.twig");
    }
}
