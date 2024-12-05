<?php
  class OrderController{
    public $Order;
    public function __construct(){
        $this->Order = new Order();
    }
    public function listOrder(){
        $list_order= $this->Order->loadAllDonhang();
        require_once PATH_ROOT . 'views/admin/order/list.php';
    }
    public function updateStatus($id){
        if(isset($_GET['id'])){
            $id= $_GET['id'];
            $one_order= $this->Order->loadDonhangById($id);
        }
        require_once PATH_ROOT . 'views/admin/order/update.php';
        
    }
  }












?>