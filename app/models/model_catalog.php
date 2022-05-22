<?php
    namespace app\models;

    use app\core\Model;
    use app\core\DB;

    class Model_Catalog extends Model
    {
        public $lang_postfix = '';

        public function __construct() {
            $this->db = new DB;
            $this->lang_postfix = LANG === 'kk' ? '_kk' : '';
        }

        public function get_catalog_list() {
            $request = $this->db->execute(
                "SELECT catalog_id as id, catalog_title" . $this->lang_postfix . " as title, 
                catalog_image as image
                FROM abi_catalog"
            );
            $result = [];

            while($row = $request->fetch_assoc()) {
                $result[] = $row;
            }

            return array(
                'catalog_list' => $result,
            );
        }

        public function get_active_catalog($id) {
            $where = '';

            if ($id) {
                $where = " WHERE catalog_id = ${id}";
            }

            $request = $this->db->execute(
                "SELECT catalog_id as id, catalog_title" . $this->lang_postfix . " as title, 
                catalog_content" . $this->lang_postfix . " as content, catalog_image as image
                FROM abi_catalog${where}"
            )->fetch_assoc();

            return $request;
        }
    }
?>