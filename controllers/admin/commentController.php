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
    
}

?>