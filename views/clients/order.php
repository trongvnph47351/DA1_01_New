<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/order.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:54 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Order || Hurst</title>
    <meta name="description"
        content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <?php
			require_once 'components/linkcss.php';
		?>
</head>

<body>
    <!-- WRAPPER START -->
    <div class="wrapper bg-dark-white">

        <!-- HEADER-AREA START -->
        <?php 
				require_once 'components/header.php';
			?>
        <!-- HEADER-AREA END -->
        <!-- Mobile-menu start -->
        <div class="mobile-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 d-block d-md-none">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">TRANG CHỦ</a>
                                        <ul>
                                            <li><a href="index.html">TRANG CHỦ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">SẢN PHẨM</a></li>
                                    <li><a href="shop-sidebar.html">DANH MỤC</a></li>
                                    <li><a href="blog.html">TIN TỨC</a></li>
                                    <li><a href="contact.html">LIÊN HỆ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile-menu end -->
        <!-- HEADING-BANNER START -->
        <div class="heading-banner-area overlay-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-banner">
                            <div class="heading-banner-title">
                                <h2>ĐƠN HÀNG</h2>
                            </div>
                            <div class="breadcumbs pb-15">
                                <ul>
                                    <li><a href="?act=/">TRANG CHỦ</a></li>
                                    <li>ĐƠN HÀNG</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADING-BANNER END -->
        <!-- ORDER-AREA START -->
        <div class="shopping-cart-area  pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shopping-cart">
                            <!-- Nav tabs -->
                            <?php
									require_once 'components/navtab.php';
								?>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- order-complete start -->
                                <div class="tab-pane active" id="order-complete">
                                    <table class="table table-striped table-bordered text-center align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="product-quantity">Mã đơn hàng</th>
                                                <th scope="col" class="product-quantity">Ngày đặt hàng</th>
                                                <th scope="col" class="product-quantity">Số lượng sản phẩmm</th>
                                                <th scope="col" class="product-quantity">Thành tiền</th>
                                                <th scope="col" class="product-quantity">Trạng thái đơn hàng</th>
                                                <th scope="col" class="product-quantity">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($listbill)){
                                            foreach($listbill as $don_hang){ 
                                               
                                                $order_status = $this->homeModel->get_ttdh($don_hang['trang_thai']);
                                                if($don_hang['trang_thai'] ==3){
                                                    $action= '<a href="?act=update&id='. $don_hang['id'] .'" > <button> Đã nhận hàng </button> </a>';
                                                    
                                                }elseif($don_hang['trang_thai'] ==0){
                                                    $action= '<a href="?act=huydonhang&id='. $don_hang['id'] .'" > <button> Hủy </button> </a>';
                                                    
                                                    
                                                }elseif($don_hang['trang_thai'] ==4){
                                                    $action= '<a href="?act=update&id='. $don_hang['id'] .'" > <button> Đã hủy </button> </a>';
                                                }else{
                                                    $action ='<button>Không có hành động</button>';
                                                }
                                                
                                                
                                                
                                                ?>


                                            <tr>

                                                <td>DA1_WD19314 <?=$don_hang['id'];?></td>
                                                <td> <?= $don_hang['ngay_dat_hang'];?></td>
                                                <td> <?= $don_hang['so_luong'];?></td>
                                                <td><?= number_format($don_hang['tong_tien'], 0, ',', '.') ?> đ</td>
                                                <td> <?= htmlspecialchars($order_status)?></td>
                                                <td>
                                                    <a href="index.php?act=chitietdonhang&id=<?= $don_hang['id'] ?>"><button
                                                            class="button">Xem chi tiết</button></a>



                                                </td>
                                                <td>
                                                    <?=$action?> </td>
                                            </tr>


                                            <?php    } 
                                    }    else {?>

                                            <tr>
                                                <td colspan="6" class="text-center"> Không có đơn hàng nào. </td>
                                            </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>







                                </div>
                                <!-- order-complete end -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ORDER-AREA END -->
        <!-- FOOTER START -->
        <?php
				require_once 'components/footer.php';
			?>
        <!-- FOOTER END -->

    </div>
    <!-- WRAPPER END -->

    <!-- all js here -->
    <?php
			require_once 'components/linkjs.php';
		?>
</body>

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/order.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:54 GMT -->

</html>