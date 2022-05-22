<?php
    namespace app\core;

    use app\core\DB;

    class Model
    {
        public function __construct() {
            $this->db = new DB();
            $this->lang_postfix = LANG === 'kk' ? '_kk' : '';
        }
        
        public function site_settings() {
            $result =  $this->db->execute(
                "SELECT * FROM abi_settings"
            );

            while($row = $result->fetch_assoc()) {
                $settings[$row['settings_name']] = $row['settings_value' . $this->lang_postfix];
            }

            return $settings;
        }
        
    }
?>