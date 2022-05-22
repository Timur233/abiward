<?php
    namespace app\core;

    use app\core\View;

    class Controller {
	
        public $model;
        public $view;
        public $translate_data = 'test';
        
        function __construct()
        {
            $this->view = new View();
        }
        
        function action_index() {
            
        }
    }
?>