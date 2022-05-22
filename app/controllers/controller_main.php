<?php
    namespace app\controllers;

    use app\core\Controller;
    use app\models\Model_Building_Steps;
    use app\models\Model_Main;
    use app\core\View;

    class Controller_Main extends Controller
    {
        public function __construct() {
            $this->model = new Model_Main;
        }

        public function action_index() {
            $data = $this->model->get_data();	
            $data['page']           = [
                'title' => 'Металлопрокат в Алматы',
                'short_title' => 'Abiward',
            ];

            View::generate('pages/index.twig', $data);
        }
        
    }
?>