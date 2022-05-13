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

/* widgets/horisontal_callback.twig */
class __TwigTemplate_d22b0c14fd7880500f9b8f702dca5b9bc226f7b51b2de768a7f042d153527dd6 extends \Twig\Template
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
        echo "<section id=\"callback\" class=\"callback-h section\" style=\"background-image: url('https://cms.abpx.kz/storage/uploads/2022/02/16/620c95975bf026202c963dfdb75--.jpg');\">
   <div class=\"container\">
      <div class=\"section-title\">
         <h2 class=\"section-title__h2\">Оставить заявку</h2>
      </div>
      <form class=\"callback-h__form\" action=\"#\">
         <div class=\"flex\">

            <div class=\"input-group callback-h__group flex__5\">
               <input 
                  type=\"text\" 
                  class=\"input-group__input\" 
                  id=\"staticTopFormName\" 
                  name=\"name\" 
                  placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["translate"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), "html", null, true);
        echo "\" 
                  fieldname=\"Имя\"
               >
            </div>

            <div class=\"input-group callback-h__group flex__5\">
               <input 
                  type=\"text\" 
                  class=\"input-group__input\" 
                  id=\"staticTopFormPhone\" 
                  name=\"phone\" 
                  placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["translate"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["phone"] ?? null) : null), "html", null, true);
        echo "\" 
                  fieldname=\"Телефон\" 
                  required=\"required\"
               >
            </div>

            <div class=\"input-group callback-h__group flex__2\">
               <button 
                  class=\"btn btn--gradient send-form-button callback-h__btn\" 
                  onclick=\"frontend.form(this); return false\"
               >
                  ";
        // line 37
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["translate"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["call_back_me"] ?? null) : null), "html", null, true);
        echo "
               </button>
            </div>

         </div>
      </form>
   </div>
</section>";
    }

    public function getTemplateName()
    {
        return "widgets/horisontal_callback.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 37,  67 => 26,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/horisontal_callback.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/horisontal_callback.twig");
    }
}
