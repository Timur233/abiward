<?php
    namespace app\controllers;

    use app\core\Controller;
    use app\core\View;
    use app\models\Model_Admin;

    class Controller_Admin extends Controller
    {
        public function __construct() {
            $this->request = $_POST;
            $this->model = new Model_Admin;

            if (isset($this->request['login']) &&
                isset($this->request['password'])) {
                    $this->user_login = $this->request['login'];
                    $this->user_password = $this->request['password'];
            } else {
                $this->user_login = null;
                $this->user_password = null;
            }
        }

        public function action_index() {

            if (!isset($_SESSION['user_id'])):
                header('Location:'. BASE_URL . 'admin/login');
            endif;

            $data['page'] = [
                'title' => 'Добро пожаловать',
                'short_title' => 'Администратор',
            ];

            View::generate('pages/admin.twig', $data);
        }

        public function action_save() {
            $lang = LANG === 'kk' ? 'kk/' : '';
            $this->model->save_settings($this->request);

            header('Location:'. BASE_URL . $lang . 'admin');
        }

        public function action_login() {     

            $data['page'] = [
                'title'       => 'Авторизация',
                'short_title' => 'Администратор'
            ];

            if ($this->user_login) {

                $user = $this->model->login($this->user_login, $this->user_password);

                if ($user) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['login'];

                    header('Location:'. BASE_URL . 'admin');

                } else {
                    $data['message'] = 'Не правильный логин или пароль';
                }

            }       

            View::generate('pages/login.twig', $data);
        }

        public function action_logout() {
            session_destroy();
            
            $_SESSION = array();

            header('Location:'. BASE_URL);
        }
        
    }
?>