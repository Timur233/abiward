<?php
    namespace app\core;

    class DB {
        private $db;

        public function __construct() {
            $this->db = new mysqli(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);

            if ($this->connection->connect_error) {
                $this->error('Failed to connect to MySQL - ' . $this->connection->connect_error);
            }

            $this->connection->set_charset('utf-8');
        }

        private function install() {
            
        }

        public function select() {

        }   
    }

?>