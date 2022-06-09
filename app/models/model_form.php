<?php
    namespace app\models;

    use app\core\Model;
    use app\core\DB;

    class Model_Form extends Model 
    {
        public function __construct() {
            $this->db = new DB();
        }

        public function get_orders ($page) {
            $offset = ($page * 12) - 12;
            $limit = 12;

            $request = $this->db->execute(
                "SELECT orders_id as id, orders_name as user_name, orders_phone as phone, " . 
                "orders_manager as manager, orders_comment as comment, orders_date as date " .
                "FROM abi_orders LIMIT {$offset}, {$limit}"
            );
            $request_all = $this->db->execute(
                "SELECT * FROM abi_orders"
            );
            $result = [];

            while($row = $request->fetch_assoc()) {
                if ($row['manager']) {
                    $manager = $this->db->execute(
                        "SELECT user_name as name " .
                        "FROM abi_user WHERE user_id = " . $row['manager']
                    )->fetch_assoc();

                    $row['manager'] = $manager['name'];
                }

                $row['user_name'] = !empty($row['user_name']) ? $row['user_name'] : 'Не указано';
                $result[] = $row;
            }

            return array(
                'orders' => $result,
                'pages_count' => ceil($request_all->num_rows / 12,)
            );
        }

        public function confirm($order_id, $user_id) {
            return $this->db->execute(
                "UPDATE abi_orders SET orders_manager = " . $user_id . " WHERE orders_id = " . $order_id
            );
        }

        public function send_form ($form_body) {	
            return $this->db->execute(
                "INSERT INTO abi_orders (orders_name, orders_phone) 
                 VALUES ('" . $form_body['name'] . "', '" . $form_body['phone'] . "')"
            );
        }
    }
?>