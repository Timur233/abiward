<?php
    namespace app\models;

    use app\core\Model;
    use app\core\DB;

    class Model_Admin extends Model
    {
        public function __construct() {
            $this->db = new DB();
            $this->lang_postfix = LANG === 'kk' ? '_kk' : '';
        }
        
        public function login($login, $password) {

            $request = $this->db->execute(
                "SELECT user_id as id, user_name as login, user_password as password
                FROM abi_user WHERE user_name = '${login}'"
            )->fetch_assoc();

            if (is_array($request) && count($request) !== 0) {
                if(password_verify($password, $request['password']))
                    return array(
                        'id' => $request['id'],
                        'login' => $request['login'],
                    );
                else
                    return false;
            }

        }

        public function save_settings($data) {
            foreach ($data as $key => $value) {
                $request = $this->db->execute(
                    "SELECT * FROM abi_settings WHERE settings_name = '${key}'"
                );

                if ($request->num_rows === 0):
                    $insert = $this->db->execute(
                        "INSERT INTO abi_settings (settings_name, settings_value, settings_value_kk) 
                         VALUES ('${key}', '${value}', '')"
                    );
                else: 
                    $this->db->execute(
                        "UPDATE abi_settings SET settings_value" . $this->lang_postfix . " = '${value}' 
                         WHERE settings_name = '${key}'"
                    );
                endif;


            }
        }
    }
?>