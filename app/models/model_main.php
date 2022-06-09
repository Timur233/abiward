<?php
    namespace app\models;

    use app\core\Model;
    use app\core\DB;

    class Model_Main extends Model
    {
        public $lang_postfix = '';

        public function __construct() {
            $this->db = new DB;
            $this->lang_postfix = LANG === 'kk' ? '_kk' : '';
        }

        public function select_page($id) {
            return $this->db->execute(
                "SELECT pages_id as id, pages_title" . $this->lang_postfix . " as title, 
                pages_content" . $this->lang_postfix . " as content
                FROM abi_pages WHERE pages_id = ${id}" 
            )->fetch_assoc();
        }

        public function select_slider() {
            $request = $this->db->execute(
                "SELECT slider_id as id,
                slider_content" . $this->lang_postfix . " as content, slider_image as image
                FROM abi_slider"
            );
            $result = [];

            while($row = $request->fetch_assoc()) {
                $result[] = $row;
            }

            return $result;
        }

        public function select_catalog() {
            $request = $this->db->execute(
                "SELECT catalog_id as id, catalog_title" . $this->lang_postfix . " as title, 
                catalog_content" . $this->lang_postfix . " as content, 
                catalog_price" . $this->lang_postfix . " as price, 
                catalog_image as image
                FROM abi_catalog"
            );
            $result = [];

            while($row = $request->fetch_assoc()) {
                $result[] = $row;
            }

            return $result;
        }

        public function select_partners() {
            $request = $this->db->execute(
                "SELECT partners_id as id, partners_image as image
                FROM abi_partners"
            );
            $result = [];

            while($row = $request->fetch_assoc()) {
                $result[] = $row;
            }

            return $result;
        }

        public function select_reviews() {
            $request = $this->db->execute(
                "SELECT reviews_id as id, reviews_image as image
                FROM abi_reviews"
            );
            $result = [];

            while($row = $request->fetch_assoc()) {
                $result[] = $row;
            }

            return $result;
        }

        public function get_data() {
            return array(
                'slider'     => $this->select_slider(),    
                'catalog'    => $this->select_catalog(),
                'partners'   => $this->select_partners(),
                'why_are_we' => $this->select_page(2),
                'reviews'    => $this->select_reviews(),
                'about'      => $this->select_page(1),
            );
        }
    }
?>