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
    public function updateOrder($id){
        if(isset($_GET['id'])){
            $id= $_GET['id'];
            $one_order= $this->Order->loadDonhangById($id);
        }
        require_once PATH_ROOT . 'views/admin/order/update.php';
        
    }
    public function updateStatus($id){
      if(isset($_POST['update'])&&($_POST['update'])){
        $status = $_POST['status'];
        $id = $_POST['id'];
        $this->Order->update_order($id,$status);
      }
      $list_order=$this->Order->loadAllDonhang();
      require_once PATH_ROOT . 'views/admin/order/list.php';
    }

    public function deleteOrder($id){
      if(isset(($_GET['id']))&&$_GET['id']>0){
        $id= $_GET['id'];
        $this->Order->delete_donhang($id);
      }
      $list_order= $this->Order->loadAllDonhang();
      require_once PATH_ROOT . 'views/admin/order/list.php';
    }

    // chi tiet don hang
    function loadChiTietDonHang($id){
      if(isset($_GET['id'])){
          $id= $_GET['id'];
  
          
      }
      $bill=$this->Order->load_one_bill($id);
      $billdetail = $this->Order->loadDhchitiet($id);
      require_once  PATH_ROOT . "views/admin/order/orderdetail.php";
  }
  }












?>