<?php
    namespace app\controllers;

    use app\core\Controller;
    use app\core\View;
    use app\models\Model_Api;

    class Controller_Api extends Controller
    {
        function __construct() {
            $this->request = $_POST;
            $this->model = new Model_Api;

            if (isset($this->request['login']) &&
                isset($this->request['password'])) {
                    $this->user_login = $this->request['login'];
                    $this->user_password = $this->request['password'];
            } else {
                $this->user_login = null;
                $this->user_password = null;
            }
        }

        function action_index() {
            return false;
        }

        public function uploader($image) {
            $uploaddir = __DIR__ . '/../../uploads/';
            $filename = 'image' . rand(100000000, 999999999);
            $extencion = explode('.', $image['name']);
            $uploadfile = $uploaddir . basename($filename . '.' . end($extencion));

            if (!file_exists($uploaddir)) {
                mkdir($uploaddir, 0777, true);
            }

            if (move_uploaded_file($image['tmp_name'], $uploadfile)) {
                return basename($filename . '.' . end($extencion));
            } else {
                return false;
            }
        }

        public function action_set() {
            $request = $_POST;
            $request['fields'] = json_decode($request['fields'], true);

            if (isset($_FILES['file'])) {
                $request['fields']['image'] = $this->uploader($_FILES['file']);
            }

            if ($request['id'] !== 'null') {
                print_r($this->model->update($request));
            } else {
                print_r($this->model->insert($request));
            }
        }

        public function action_get() {
            $request = json_decode(file_get_contents("php://input"), true);

            print_r(
                json_encode(
                    $this->model->select($request['id'], $request['table'], $request['fields'])
                )
            );
        }

        public function action_del() {
            $request = json_decode(file_get_contents("php://input"), true);

            print_r(
                json_encode(
                    $this->model->delete($request['id'], $request['table'])
                )
            );
        }
        
    }
?>