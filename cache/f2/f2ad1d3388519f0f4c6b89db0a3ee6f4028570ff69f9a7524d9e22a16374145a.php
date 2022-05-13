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

/* widgets/footer.twig */
class __TwigTemplate_2522384715124cff535543a616ff695e21eea1d9caa339a9dfaeeef21a101b31 extends \Twig\Template
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
        echo "<footer class=\"common-footer\">
    <div class=\"footer-content\">
        <div class=\"footer-content__left\">
            <div class=\"main-logo footer-content__logo\">
                <a href=\"https://exin.kz/\" target=\"_blank\">
                    <img src=\"https://cms.abpx.kz";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "logo_light", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), "html", null, true);
        echo "\" alt=\"Строительная компания Exclusive Qurylys\" class=\"main-logo__image\">
                </a>
                <div class=\"social-block\">
                    <div class=\"social-block__item\">
                        <a class=\"social-item\" target=\"_blank\" href=\"";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "social_links", [], "any", false, false, false, 10);
        echo "\">
                            <svg class=\"social-item__icon\" xmlns=\"http://www.w3.org/2000/svg\" height=\"511pt\" viewBox=\"0 0 511 511.9\" width=\"511pt\"><path d=\"m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0\"/><path d=\"m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0\"/><path d=\"m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0\"/></svg>
                        </a>
                    </div>
                    <div class=\"social-block__item\">
                        <a class=\"social-item\" target=\"_blank\" href=\"";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "youtube_links", [], "any", false, false, false, 15);
        echo "\">
                            <svg class=\"social-item__icon\" xmlns=\"http://www.w3.org/2000/svg\" height=\"682pt\" viewBox=\"-21 -117 682.66672 682\" width=\"682pt\"><path d=\"m626.8125 64.035156c-7.375-27.417968-28.992188-49.03125-56.40625-56.414062-50.082031-13.703125-250.414062-13.703125-250.414062-13.703125s-200.324219 0-250.40625 13.183593c-26.886719 7.375-49.03125 29.519532-56.40625 56.933594-13.179688 50.078125-13.179688 153.933594-13.179688 153.933594s0 104.378906 13.179688 153.933594c7.382812 27.414062 28.992187 49.027344 56.410156 56.410156 50.605468 13.707031 250.410156 13.707031 250.410156 13.707031s200.324219 0 250.40625-13.183593c27.417969-7.378907 49.03125-28.992188 56.414062-56.40625 13.175782-50.082032 13.175782-153.933594 13.175782-153.933594s.527344-104.382813-13.183594-154.460938zm-370.601562 249.878906v-191.890624l166.585937 95.945312zm0 0\"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-content__mid\">
            <div class=\"footer-project-selector\">
                <h3 class=\"footer-project-selector__title\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "contacts_title", [], "any", false, false, false, 24), "html", null, true);
        echo "</h3>
                <ul class=\"projects-selector\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "contacts_list", [], "any", false, false, false, 26));
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
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 27
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "isActive", [], "any", false, false, false, 27) == true)) {
                // line 28
                echo "                    <li class=\"projects-item projects-selector__item ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 28)) {
                    echo "projects-item__active";
                }
                echo "\">
                        ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "title", [], "any", false, false, false, 29), "html", null, true);
                echo "
                        <div class=\"project-content\" style=\"display: none\">
                            <span class=\"project-address\">
                                <svg width=\"23\" height=\"23\" viewBox=\"0 0 23 23\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11.5 0C6.90698 0 3.17029 3.73669 3.17029 8.32968C3.17029 14.0297 10.6246 22.3977 10.942 22.7512C11.2401 23.0832 11.7605 23.0826 12.0581 22.7512C12.3755 22.3977 19.8297 14.0297 19.8297 8.32968C19.8297 3.73669 16.093 0 11.5 0ZM11.5 12.5206C9.18915 12.5206 7.30916 10.6406 7.30916 8.32968C7.30916 6.01881 9.18919 4.13883 11.5 4.13883C13.8108 4.13883 15.6908 6.01886 15.6908 8.32973C15.6908 10.6406 13.8108 12.5206 11.5 12.5206Z\" fill=\"#71BF44\"/></svg>
                                ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, false, 33), "html", null, true);
                echo "
                            </span>
                            <a href=\"https://";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "site", [], "any", false, false, false, 35), "html", null, true);
                echo "\" target=\"_blank\" class=\"project-link\">www.";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "site", [], "any", false, false, false, 35), "html", null, true);
                echo "</a>
                            <ul class=\"project-phones\">
                                ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["contact"], "phones", [], "any", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                    // line 38
                    echo "                                <li class=\"project-phones__item\">
                                    ";
                    // line 39
                    $context["phoneCode"] = twig_slice($this->env, $context["phone"], 0, 9);
                    // line 40
                    echo "                                    ";
                    $context["phoneNumber"] = twig_slice($this->env, $context["phone"], 9, 12);
                    // line 41
                    echo "                                    <a href=\"tel:";
                    echo twig_escape_filter($this->env, $context["phone"], "html", null, true);
                    echo "\" target=\"_blank\" class=\"project-phones__link\">
                                        ";
                    // line 42
                    echo twig_escape_filter($this->env, ($context["phoneCode"] ?? null), "html", null, true);
                    echo "
                                        <strong>";
                    // line 43
                    echo twig_escape_filter($this->env, ($context["phoneNumber"] ?? null), "html", null, true);
                    echo "</strong>
                                    </a>
                                </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                            </ul>
                            <button class=\"toggle-modal-button callback-button\">Обратный звонок</button>
                        </div>
                    </li>
                    ";
            }
            // line 52
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </ul>
            </div>
        </div>
        <div class=\"footer-content__right\">
            <div class=\"project-contact\">
                ";
        // line 58
        $context["pContact"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "contacts_list", [], "any", false, false, false, 58)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null);
        // line 59
        echo "                <span class=\"project-address\">
                    <svg width=\"23\" height=\"23\" viewBox=\"0 0 23 23\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11.5 0C6.90698 0 3.17029 3.73669 3.17029 8.32968C3.17029 14.0297 10.6246 22.3977 10.942 22.7512C11.2401 23.0832 11.7605 23.0826 12.0581 22.7512C12.3755 22.3977 19.8297 14.0297 19.8297 8.32968C19.8297 3.73669 16.093 0 11.5 0ZM11.5 12.5206C9.18915 12.5206 7.30916 10.6406 7.30916 8.32968C7.30916 6.01881 9.18919 4.13883 11.5 4.13883C13.8108 4.13883 15.6908 6.01886 15.6908 8.32973C15.6908 10.6406 13.8108 12.5206 11.5 12.5206Z\" fill=\"#71BF44\"/></svg>
                    ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pContact"] ?? null), "address", [], "any", false, false, false, 61), "html", null, true);
        echo "
                </span>
                <a href=\"https://";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pContact"] ?? null), "site", [], "any", false, false, false, 63), "html", null, true);
        echo "\" target=\"_blank\" class=\"project-link\">www.";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pContact"] ?? null), "site", [], "any", false, false, false, 63), "html", null, true);
        echo "</a>
                <ul class=\"project-phones\">
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pContact"] ?? null), "phones", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 66
            echo "                        <li class=\"project-phones__item\">
                            ";
            // line 67
            $context["phoneCode"] = twig_slice($this->env, $context["phone"], 0, 9);
            // line 68
            echo "                            ";
            $context["phoneNumber"] = twig_slice($this->env, $context["phone"], 9, 12);
            // line 69
            echo "                            <a href=\"tel:";
            echo twig_escape_filter($this->env, $context["phone"], "html", null, true);
            echo "\" target=\"_blank\" class=\"project-phones__link\" onclick=\"fbq('track', 'Contact');\">
                                ";
            // line 70
            echo twig_escape_filter($this->env, ($context["phoneCode"] ?? null), "html", null, true);
            echo "
                                <strong>";
            // line 71
            echo twig_escape_filter($this->env, ($context["phoneNumber"] ?? null), "html", null, true);
            echo "</strong>
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </ul>
                <button class=\"toggle-modal-button callback-button\">Обратный звонок</button>
            </div>
        </div>
    </div>
    <div class=\"footer-content footer-content--bottom\">
        <p>Информация о ЖК опубликована с целью определения спроса на указанный продукт. Договоры о долевом участии в жилищном строительстве будут заключаться только после заключения договора о предоставлении гарантии с Фондом гарантирования или выдачи разрешения на привлечение денег дольщиков местным исполнительным органом.</p>
        <a href=\"https://qargalycity.kz/private-police\">Политика конфиденциальности</a>
    </div>
    <div class=\"footer-modal\">
        <div class=\"footer-modal__content\">
            <button class=\"footer-modal__close-button\"><svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1 1L10 10M10 10L19 19M10 10L19 1M10 10L1 19\" stroke=\"#333333\" stroke-width=\"1.3\"/></svg></button>
            <form class=\"footer-modal__form\" action=\"\">
                <h4 class=\"footer-modal__title\">
                    Обратный звонок
                </h4>
                <div class=\"footer-modal__field\">
                    <input type=\"text\" class=\"footer-modal__input\" id=\"footerModalName\" name=\"name\" fieldname=\"Имя\" placeholder=\"Имя\">
                </div>
                <div class=\"footer-modal__field\">
                    <input type=\"text\" class=\"footer-modal__input\" id=\"footerModalPhone\" name=\"user-phone\" fieldname=\"Телефон\" placeholder=\"Телефон\" required=\"required\">
                </div>
                <div class=\"footer-modal__buttons\">
                    <button class=\"callback-button footer-modal__button\" onclick=\"() => {footerObject.sendForm(this); return false}\">Заказать звонок</button>
                </div>
            </form>
        </div>
        <div class=\"footer-modal__bg\"></div>
    </div>
</footer>

<link rel=\"stylesheet\" href=\"https://cms.abpx.kz/custom-assets/css/main-footer.min.css\">
<script>
    const footerObject = (() => {
        function modalToggle() {
            const modalEl = document.querySelector('.footer-modal');
            const toggleButtons = document.querySelectorAll(
                '.toggle-modal-button, ' +
                '.footer-modal__close-button, ' +
                '.footer-modal__bg'
            );

            function toggleModal() {
                modalEl.classList.toggle('footer-modal--open');
            }

            toggleButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    toggleModal()
                })
            })
        }

        function projectsSelector() {
            const selectItems = document.querySelectorAll('.projects-selector__item')

            selectItems.forEach(item => {
                const contactsInfo = item.querySelector('.project-content').innerHTML;
                const contactBlock = document.querySelector('.project-contact');

                item.addEventListener('click', () => {
                    const activeItem = document.querySelector('.projects-item__active');

                    activeItem.classList.remove('projects-item__active');
                    item.classList.add('projects-item__active');
                    contactBlock.innerHTML = contactsInfo;

                    contactBlock.querySelector('.toggle-modal-button').addEventListener('click', () => {
                        const modalEl = document.querySelector('.footer-modal');

                        modalEl.classList.toggle('footer-modal--open');
                    })
                })
            })
        }

        function phoneValidator(el){
            el.addEventListener('input', function (e) {
                clearMessages()
                let numberCodes = ['710','711','712','713','714','715','716','717','718','721','722','723','724','725','726','727','728','729','736','700','701','702','703','704','705','706','707','708','709','747','750','751','760','761','762','763','764','771','775','776','777','778']
                let x = e.target.value.replace(/\\D/g, '').match(/(^\\d{0,1})(\\d{0,3})(\\d{0,3})(\\d{0,2})(\\d{0,2})/);

                e.target.value = !x[3] ? \"+\" + x[1] + x[2] : \"+\" + x[1] + ' (' + x[2] + ') ' + x[3] + (x[4] ? '-' + x[4] : '') + (x[5] ? '-' + x[5] : '');

                let errMess = document.createElement('span')
                errMess.classList.add('modal-input-err')
                errMess.textContent = translater.no_valid_number

                //console.log(numberCodes.indexOf(x[2]))
                if (x[3] && ((x[1] != '7') || (numberCodes.indexOf(x[2]) == -1))) {
                    el.parentNode.appendChild(errMess)
                } else {
                    clearMessages()
                }
            });
        }

        function clearMessages() {
            let messAll = document.querySelectorAll('.modal-input-err')

            messAll.forEach((el) => {
                el.remove()
            })
        }

        function formValidator(element) {
            let errors = false
            let form = element.parentNode.parentNode
            let inputs = form.querySelectorAll('input, textarea')
            let userName = form.querySelector('[name=\"name\"]')
            let formQuery = new Object()

            if (userName.value == '') {
                userName.value = 'Не указано'
            }

            inputs.forEach(function (el) {
                if (el.hasAttribute(\"required\") && el.value != \"\" || !el.hasAttribute(\"required\") && el.value != \"\") {
                    let id = el.id
                    let name = el.getAttribute('fieldname')
                    let data = el.value
                    formQuery[''+id] = {name, data}
                } else {
                    if (el.hasAttribute(\"required\")) {
                        el.setAttribute('style', 'border: 2px solid red;')
                        errors = true
                    }
                }
            })

            if (!errors) {
                let user_data = collect_user_data()
                formQuery = Object.assign(formQuery, user_data)
                formSendData(formQuery, form)
            }

        }

        function collect_user_data(){

            const url = new URL(document.location.href)
            let user_data = new Object()

            //UTM DATA
            if (url.searchParams.get('utm_source')) {
                let name = 'utm_source'
                let data = url.searchParams.get('utm_source')
                user_data['utm_source'] = {name: name, data: data}
            }

            if (url.searchParams.get('utm_medium')) {
                let name = 'utm_medium'
                let data = url.searchParams.get('utm_medium')
                user_data['utm_medium'] = {name: name, data: data}
            }

            if (url.searchParams.get('utm_campaign')) {
                let name = 'utm_campaign'
                let data = url.searchParams.get('utm_campaign')
                user_data['utm_campaign'] = {name: name, data: data}
            }

            if (url.searchParams.get('utm_term')) {
                let name = 'utm_term'
                let data = url.searchParams.get('utm_term')
                user_data['utm_term'] = {name: name, data: data}
            }

            if (url.searchParams.get('utm_content')) {
                let name = 'utm_content'
                let data = url.searchParams.get('utm_content')
                user_data['utm_content'] = {name: name, data: data}
            }

            //UserAgent
            if (window.navigator.userAgent) {
                let name = 'userAgent'
                let data = window.navigator.userAgent
                user_data['userAgent'] = {name: name, data: data}
            }

            //Cookie
            if (get_cookie('_ga')) {
                let name = '_ga'
                let data = get_cookie('_ga').split('.')
                data = data[data.length - 2] + '.' + data[data.length - 1]
                user_data['_ga'] = {name: name, data: data}
            }

            //GetCookie Function
            function get_cookie ( cookie_name )
            {
                var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|\$)' );

                if ( results )
                    return ( unescape ( results[2] ) );
                else
                    return null;
            }

            return user_data

        }

        async function formSendData(formQuery, form) {
            let response = await fetch('/qargalycity/form/send', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(formQuery)
            });

            form.innerHTML = await response.text()

        }

        return {
            projects:  projectsSelector,
            modal:     modalToggle,
            phoneMask: phoneValidator,
            sendForm:  formValidator,
        }
    })();

    document.addEventListener('DOMContentLoaded', () => {
        footerObject.phoneMask(document.getElementById('footerModalPhone'));
        footerObject.projects();
        footerObject.modal();
    });
</script>";
    }

    public function getTemplateName()
    {
        return "widgets/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 75,  220 => 71,  216 => 70,  211 => 69,  208 => 68,  206 => 67,  203 => 66,  199 => 65,  192 => 63,  187 => 61,  183 => 59,  181 => 58,  174 => 53,  160 => 52,  153 => 47,  143 => 43,  139 => 42,  134 => 41,  131 => 40,  129 => 39,  126 => 38,  122 => 37,  115 => 35,  110 => 33,  103 => 29,  96 => 28,  93 => 27,  76 => 26,  71 => 24,  59 => 15,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widgets/footer.twig", "/Applications/XAMPP/xamppfiles/htdocs/abiward/app/views/widgets/footer.twig");
    }
}
