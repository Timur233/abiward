<?php
    namespace app\models;

    use app\core\Model;
    use app\core\DB;

    class Model_Pages extends Model
    {
        public $lang_postfix = '';

        public function __construct() {
            $this->db = new DB;
            $this->lang_postfix = LANG === 'kk' ? '_kk' : '';
        }

        public function get_page($id) {
            return $this->db->execute(
                "SELECT pages_id as id, pages_title" . $this->lang_postfix . " as title, 
                pages_content" . $this->lang_postfix . " as content
                FROM abi_pages WHERE pages_id = ${id}" 
            )->fetch_assoc();
        }
    }
?>