<?php
    namespace app\models;

    use app\core\Model;
    use app\core\DB;

    class Model_Api extends Model
    {
        public function __construct() {
            $this->db = new DB();
        }
        
        public function insert($request) {
            $prefix = str_replace('abi_', '', $request['table']) . '_';
            $columns = null;
            $values = null;

            foreach ($request['fields'] as $key => $value) {
                $columns .= $prefix . $key . ", ";
                $values .= "'${value}', ";
            }

            $columns .= $prefix . 'updater';
            $values .= $_SESSION['user_id'];

            return $this->db->execute(
                "INSERT INTO " . $request['table'] . " (${columns}) VALUES (${values})"
            );
        }
        
        public function update($request) {
            $prefix = str_replace('abi_', '', $request['table']) . '_';
            $set = null;

            foreach ($request['fields'] as $key => $value) {
                $set .= $prefix . $key . " = '" . $value . "', ";
            }

            $set .= $prefix . "updater" . " = " . $_SESSION['user_id'];

            return $this->db->execute(
                "UPDATE " . $request['table'] . " SET ${set} WHERE ${prefix}id = " . $request['id']
            );
        }

        public function select($id, $table, $fields) {
            $prefix = str_replace('abi_', '', $table) . '_';
            $select_fields = '';

            foreach ($fields as $index => $field) {
                $select_fields .= $prefix . $field['fieldName'] . ' as ' . $field['fieldName'];

                if ($index !== array_key_last($fields)) {
                    $select_fields .= ', ';
                }
            }

            return $this->db->execute(
                "SELECT ${select_fields} FROM ${table} WHERE ${prefix}id = ${id}"
            )->fetch_assoc();
        }

        public function delete($id, $table) {
            $prefix = str_replace('abi_', '', $table) . '_';

            return $this->db->execute(
                "DELETE FROM ${table} WHERE ${prefix}id = ${id}"
            );
        }
    }
?>