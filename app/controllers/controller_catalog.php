<?php
    namespace app\controllers;

    use app\core\Controller;
    use app\core\View;
    use app\models\Model_Catalog;

    class Controller_Catalog extends Controller
    {
        public function __construct() {
            $this->query = $_GET;
            $this->model = new Model_Catalog;
        }

        public function action_index() {
            $data                   = $this->model->get_catalog_list(LANG);
            $data['active_catalog'] = $this->model->get_active_catalog($this->query['id'] ?? null, LANG);
            $data['page']           = [
                'title' => 'Наша продукция',
                'short_title' => 'Каталог',
            ];

            View::generate('pages/catalog.twig', $data);
        }
        
    }
?>