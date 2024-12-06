<?php 
class commentController{
public $Comment;
public function __construct(){
    $this->Comment = new Comment();
}

public function load_comment(){
    $list_comment= $this->Comment->loadall_binhluan();
    require_once PATH_ROOT . "views/admin/comment/list.php";
}
public function remove_comment($idkhachhang){
    if(isset($_GET['id'])&&($_GET['id']>0)){
        $idkhachhang= $_GET['id'];
        $this->Comment->delete_comment($idkhachhang);
    }
    $list_comment= $this->Comment->loadall_binhluan();
    require_once PATH_ROOT . "views/admin/comment/list.php";
}
    
}

?>