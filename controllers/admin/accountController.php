<?php
    class accountController{
        public $Account;
        public function __construct(){
            $this->Account = new Account();
        }

        public function listAccount(){
            $accounts = $this->Account->list();
            require_once PATH_ROOT . 'views/admin/taikhoan/list.php';
        }
    }
?>