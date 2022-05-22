<?php
    namespace app\controllers;

    use app\core\Controller;
    use app\core\View;

    class Controller_Notfound extends Controller
    {

        public function action_index() {
            $data['page']           = [
                'title' => 'Страница не найдена',
                'short_title' => 'Компания',
            ];

            View::generate('pages/notfound.twig', $data);
        }
        
    }
?>