<?php
    namespace app\controllers;

    use app\core\Controller;
    use app\core\View;
    use app\models\Model_Pages;

    class Controller_Pages extends Controller
    {
        public function __construct() {
            $this->query = $_GET;
            $this->model = new Model_Pages;
        }

        public function action_index() {
            $data = $this->model->get_page($this->query['id']);
            $data['page']           = [
                'title' => $data['title'],
                'short_title' => 'Компания',
            ];

            View::generate('pages/page.twig', $data);
        }
        
    }
?>