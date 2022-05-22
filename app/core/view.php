<?php
    namespace app\core;

    use app\core\Model; 
    
    class View {
        
        function generate($template_view, $data = null) {

            $loader = new \Twig\Loader\FilesystemLoader('app/views/');
            $twig = new \Twig\Environment($loader, [
                'cache' 	  => 'cache/',
                'auto_reload' => true
            ]);

            $model = new Model;
            $settings = $model->site_settings();
            
            $wrapper = $twig->load('wrapper.twig');
            $template = $twig->load($template_view);

            $data['source_url'] = BASE_URL;
            $data['base_url']   = LANG !== 'ru' ? BASE_URL . LANG . '/' : BASE_URL;
            $data['lang']       = LANG;
            $data['is_admin']   = isset($_SESSION['user_id']) ? true : false;
            $data['settings']   = $settings;
            $data['translate']  = json_decode($settings['site_translater'], true);

            $data['page_content'] = $template->render($data);

            echo $wrapper->render($data);

        }
    }
?>