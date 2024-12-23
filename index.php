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
        'contact' => (new homeController())->contact(),
        'detailproduct' => (new homeController())->detailproduct($_GET['id']),
        'addTocart'=> (new homeController())->addtocart(),
        'deletecart' =>(new homeController())->deletecart(),
        'cart' => (new homeController())->cart(),
        'checkout' => (new homeController())->checkout(),
        'order' => (new homeController())->order(),
        'wishlist' => (new homeController())->wishlist(),
        'dangky' =>(new homeController())->dangky(),
        'dangnhap' =>(new homeController())->dangnhap(),
        'dangxuat'=>(new homeController())->dangxuat(),
        'add-cart' =>(new homeController())->addTocart(),
        'thanh_toan' =>(new homeController())->thanh_toan(),
        'donhang' => (new homeController())->loadAlldonhang(),
        'catepro' =>(new homeController())->catePro($_GET['iddm']),
        'chitietdonhang'=>(new homeController())->loadChiTietDonHang(),
        'huydonhang'=>(new homeController())->huy_donhang($_GET['id']),
    
    }
?>