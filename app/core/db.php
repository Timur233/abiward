<?php

    use PDO;

    class DB {
        private $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_LOGIN, DB_PASS);
        }

        private function install() {
            
        }

        public function select() {

        }
    }

?>