<?php
    namespace app\core;

    class DB {
        private $db;
        private $queryObject;

        public function __construct() {
            $this->db = new \mysqli(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);

            if ($this->db->connect_error):
                $this->db->error('Failed to connect to MySQL - ' . $this->connection->connect_error);
            endif;

            $this->db->set_charset('utf-8');
        }

        private function queryBuilder() {

            if ($this->queryObject['command'] === 'SELECT'):
                $this->queryObject['buildString'] = 'SELECT ';

                foreach ($this->queryObject['fields'] as $index => $field) {
                    $this->queryObject['buildString'] .= $field;

                    if ($index !== array_key_last($this->queryObject['fields'])):
                        $this->queryObject['buildString'] .= ',';
                    endif;

                    $this->queryObject['buildString'] .= ' ';
                }

                $this->queryObject['buildString'] .= 'FROM ' . $this->queryObject['table'];

                if ($this->queryObject['left_join']['isActive']):
                    $this->queryObject['buildString'] .= ' LEFT JOIN ' . 
                        $this->queryObject['left_join']['table'] . 
                        ' ON ' . $this->queryObject['left_join']['left_field'] . ' = ' .
                        $this->queryObject['left_join']['right_field'];
                endif;

                return $this->queryObject['buildString'];
            endif;
            
        }

        public function execute($query) {
            return $this->db->query($query);
        }

        public function table($table = '') {
            $this->queryObject['table'] = $table;

            return $this;
        }

        public function select($fields = ['*']) {
            $this->queryObject['command'] = 'SELECT';
            $this->queryObject['fields']  = $fields;

            return $this;
        }

        public function left_join($table, $left_field, $right_field) {
            $this->queryObject['left_join'] = [
                'isActive'    => true,
                'table'       => $table,
                'left_field'  => $left_field,
                'right_field' => $right_field,
            ];

            return $this;
        }

        public function fetch() {
            $this->queryBuilder();
            $responce = $this
                ->execute($this->queryObject['buildString'])
                ->fetch_assoc();
            $this->queryObject = null;

            return $responce;
        }


    }

?>