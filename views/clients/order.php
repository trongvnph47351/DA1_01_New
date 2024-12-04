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
                                    <form action="#">
                                        <div class="thank-recieve bg-white mb-30">
                                            <p>Cảm ơn bạn. Đơn hàng của bạn đã được nhận</p>
                                        </div>


                                        <!-- <div class="order-info bg-white text-center clearfix mb-30 ">
											
                                            <div class="single-order-info">
                                                <h4 class="title-1 text-uppercase text-light-black mb-0">MÃ ĐƠN HÀNG
                                                </h4>
                                                <p class="text-uppercase text-light-black mb-0"><strong>m
                                                        2653257</strong></p>
                                            </div>
                                            <div class="single-order-info">
                                                <h4 class="title-1 text-uppercase text-light-black mb-0">NGÀY ĐẶT</h4>
                                                <p class="text-uppercase text-light-black mb-0"><strong>june 15,
                                                        2021</strong></p>
                                            </div>
                                            <div class="single-order-info">
                                                <h4 class="title-1 text-uppercase text-light-black mb-0">TỔNG TIỀN</h4>
                                                <p class="text-uppercase text-light-black mb-0"><strong>$
                                                        170.00</strong></p>
                                            </div>
                                            <div class="single-order-info">
                                                <h4 class="title-1 text-uppercase text-light-black mb-0">TRẠNG THÁI
                                                </h4>
                                                <p class="text-uppercase text-light-black mb-0"><a
                                                        href="#"><strong>check payment</strong></a></p>
                                            </div>
                                            <div class="single-order-info">
                                                <h4 class="title-1 text-uppercase text-light-black mb-0">THAO TÁC
                                                </h4>
                                                <p class="text-uppercase text-light-black mb-0"><a
                                                        href="#"><strong>check payment</strong></a></p>
                                            </div>
                                        </div> -->

                                        <div class="order-info bg-white text-center clearfix mb-30">
                                            <div class="row">
                                                <!-- Mã đơn hàng -->
                                                <div class="col-md-2 col-12">
                                                    <h4 class="title-1 text-uppercase text-light-black mb-0">MÃ ĐƠN HÀNG
                                                    </h4>
                                                    <p class="text-uppercase text-light-black mb-0"><strong>m
                                                            2653257</strong></p>
                                                </div>
                                                <!-- Ngày đặt -->
                                                <div class="col-md-2 col-12">
                                                    <h4 class="title-1 text-uppercase text-light-black mb-0">NGÀY ĐẶT
                                                    </h4>
                                                    <p class="text-uppercase text-light-black mb-0"><strong>June 15,
                                                            2021</strong></p>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <h4 class="title-1 text-uppercase text-light-black mb-0">SỐ LƯỢNG
                                                    </h4>
                                                    <p class="text-uppercase text-light-black mb-0"><strong>m
                                                            2653257</strong></p>
                                                </div>
                                                <!-- Tổng tiền -->
                                                <div class="col-md-2 col-12">
                                                    <h4 class="title-1 text-uppercase text-light-black mb-0">TỔNG TIỀN
                                                    </h4>
                                                    <p class="text-uppercase text-light-black mb-0">
                                                        <strong>$170.00</strong>
                                                    </p>
                                                </div>
                                                <!-- Trạng thái -->
                                                <div class="col-md-2 col-12">
                                                    <h4 class="title-1 text-uppercase text-light-black mb-0">TRẠNG THÁI
                                                    </h4>
                                                    <p class="text-uppercase text-light-black mb-0"><a
                                                            href="#"><strong>Check Payment</strong></a></p>
                                                </div>
                                                <!-- Thao tác -->
                                                <div class="col-md-2 col-12">
                                                    <h4 class="title-1 text-uppercase text-light-black mb-0">THAO TÁC
                                                    </h4>
                                                    <p class="text-uppercase text-light-black mb-0"><a
                                                            href="#"><strong>Check Payment</strong></a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="shop-cart-table check-out-wrap">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="our-order payment-details pr-20">
                                                        <h4 class="title-1 title-border text-uppercase mb-30">ĐƠN HÀNG
                                                            CỦA BẠN</h4>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-thumbnail">Tên sản phẩm</th>
                                                                    <th class="product-price">Giá</th>
                                                                    <th class="product-quantity">Số lượng</th>
                                                                    <th class="product-subtotal">Tổng</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                        $tong = 0; 
                                                        if (isset($_SESSION['mycart']) && !empty($_SESSION['mycart'])) {
                                                            foreach ($_SESSION['mycart'] as $cart) {
                                                             
                                                                $gia = (float)$cart[2]; 
                                                                $ten_san_pham = $cart[1]; 
                                                                $img = $cart[3]; 
                                                                $soluong = (int)$cart[4]; 
                                                                $tinhtien = (float)$cart[5];

                                                            
                                                                $tong += $tinhtien;
                                                        ?>
                                                                <tr>
                                                                    <td class="product-thumbnail text-left">
                                                                        <div class="single-product">
                                                                            <div class="product-img">

                                                                                <a href="index.php?act=spchitiet"><img
                                                                                        src="upload/<?= $img ?>"
                                                                                        width="50" alt=""></a>
                                                                            </div>
                                                                            <div class="product-info">

                                                                                <h4 class="post-title"><a
                                                                                        class="text-light-black"
                                                                                        href="#"><?= $ten_san_pham ?></a>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td class="product-price">
                                                                        <?= number_format($gia, 0, ',', '.') ?>đ</td>

                                                                    <td class="product-quantity"><?= $soluong ?></td>

                                                                    <td class="product-subtotal">
                                                                        <?= number_format($tinhtien, 0, ',', '.') ?>đ
                                                                    </td>

                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                                <table style="width: 100%; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td colspan="4"
                                                                            style="text-align: right; padding: 15px; ">
                                                                            Tổng tiền:</td>
                                                                        <td style="text-align: right; padding: 15px;">
                                                                            <?= number_format($tong, 0, ',', '.') ?> đ
                                                                        </td>
                                                                    </tr>
                                                                </table>

                                                                <?php
                                                        } else {
                                                            echo "<tr><td colspan='5' style='text-align: center;'>Giỏ hàng trống</td></tr>";
                                                        }
                                                        ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- payment-method -->
                                                <div class="col-md-6 mt-xs-30">
                                                    <div class="payment-method  pl-20">
                                                        <h4 class="title-1 title-border text-uppercase mb-30">PHƯƠNG
                                                            THỨC THANH TOÁN</h4>
                                                        <div class="payment-accordion">
                                                            <!-- Accordion start  -->
                                                            <h3 class="payment-accordion-toggle active">Thanh toán khi
                                                                nhận hàng</h3>
                                                            <div class="payment-content default">
                                                                <p>Thanh toán bằng tiền mặt khi nhận hàng</p>
                                                            </div>
                                                            <!-- Accordion end -->
                                                            <!-- Accordion start -->

                                                            <!-- Accordion end -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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