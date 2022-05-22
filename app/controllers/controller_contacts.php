<?php
    namespace app\controllers;

    use app\core\Controller;
    use app\core\View;

    class Controller_Contacts extends Controller
    {

        public function action_index() {
            $data['page']           = [
                'title' => 'Контакты',
                'short_title' => 'Компания',
            ];

            View::generate('pages/contacts.twig', $data);
        }
        
    }
?>