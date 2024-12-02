<?php
session_start();
    require_once __DIR__ . '/env.php';
    require_once __DIR__ . '/./commons/function.php';

    require_once __DIR__ . '/./models/homeModel.php';
    require_once __DIR__ . '/./controllers/clients/homeController.php';
    

    $act = $_GET['act']??'/';
    match ($act){
        '/' => (new homeController())->home(),
        'products' => (new homeController())->products(),
        'category' => (new homeController())->category(),
        'news' => (new homeController())->new(),
        'contact' => (new homeController())->contact(),
        'detailproduct' => (new homeController())->detailproduct($_GET['id']),
        'detailnew' => (new homeController())->detailnew(),
        'addTocart'=> (new homeController())->addtocart(),
        'deletecart' =>(new homeController())->deletecart(),
        'cart' => (new homeController())->cart(),
        'checkout' => (new homeController())->checkout(),
        'order' => (new homeController())->order(),
        'wishlist' => (new homeController())->wishlist(),
        'myaccount' => (new homeController())->myaccount(),
        'dangky' =>(new homeController())->dangky(),
        'dangnhap' =>(new homeController())->dangnhap(),
        'dangxuat'=>(new homeController())->dangxuat(),
        'add-cart' =>(new homeController())->addTocart(),
       
    
    }
?>