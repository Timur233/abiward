<?php
    namespace app\controllers;

    use app\core\Controller;
    use app\core\View;
    use app\models\Model_Form;
    use app\models\Model_Main;

    include "app/models/model_main.php";

    class Controller_Form extends Controller {

        function __construct() {
            $this->model = new Model_Form;
        }
        
        function action_index() {         
            if (isset($_SESSION['user_id'])):
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $data = $this->model->get_orders($page);
                $data['prev_page'] = ($page - 1) > 0 ? $page - 1 : false;
                $data['next_page'] = ($page + 1) <= $data['pages_count'] ? $page + 1 : false;
                $data['page'] = [
                    'title'       => 'Заявки',
                    'short_title' => 'Управление заявками'
                ];

                return View::generate('pages/orders.twig', $data);
            endif;
        }

        function action_confirm() {
            if ($this->model->confirm($_GET['order'], $_SESSION['user_id'])):
                header("Location: " . BASE_URL . "form");
            endif;

            return false;
        }

        function action_send() {            
            $form_body = [];
            
            $form_body['name'] = $_POST['name'];
            $form_body['phone'] = $_POST['phone'];

            if ($this->model->send_form($form_body)):
                return self::render_responce($form_body['name']);
            endif;

            return false;
        }

        function render_responce($name) {
            $data['page'] = [
                'title'       => $name ? 'Спасибо, ' . $name . '!' : 'Спасибо!',
                'short_title' => 'Обратная связь'
            ];

            return View::generate('pages/thanks-msg.twig', $data);
        }
        
    }
?>