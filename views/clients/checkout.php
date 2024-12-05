<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout || Hurst</title>
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
                                    <li><a href="?act=/">TRANG CHỦ</a>
                                        <ul>
                                            <li><a href="?act=/">TRANG CHỦ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="?act=products">SẢN PHẨM</a></li>
                                    <li><a href="?act=category">DANH MỤC</a></li>
                                    <li><a href="?act=news">TIN TỨC</a></li>
                                    <li><a href="?act=contact">LIÊN HỆ</a></li>
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
                                <h2>THANH TOÁN</h2>
                            </div>
                            <div class="breadcumbs pb-15">
                                <ul>
                                    <li><a href="index.html">TRANG CHỦ</a></li>
                                    <li>THANH TOÁN</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADING-BANNER END -->
        <!-- CHECKOUT-AREA START -->
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
                                <!-- check-out start -->
                                <div class="tab-pane active" id="check-out">
                                    <form action="#">
                                        <div class="shop-cart-table check-out-wrap">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="billing-details pr-20">
                                                        <h2 class="title-1 title-border text-uppercase mb-30">CHI TIẾT
                                                            THANH TOÁN</h2>
                                                        <h4 class="title-1 title-border text-uppercase mb-30">THÔNG TIN
                                                            NHẬN HÀNG</h4>
                                                        <?php if(isset($_SESSION['tai_khoan'])){
                                                            $name= $_SESSION['tai_khoan']['ten_dang_nhap'];
                                                            $email = $_SESSION['tai_khoan']['email'];
                                                            $dia_chi = $_SESSION['tai_khoan']['dia_chi'];
                                                            $phone = $_SESSION['tai_khoan']['so_dien_thoai'];
                                                        } else{
                                                            $name = '';
                                                            $email='';
                                                            $dia_chi = '';
                                                            $phone = '';
                                                        } ?>
                                                        <input type="text" placeholder="Tên của bạn..."
                                                            value="<?= $name?>">
                                                        <input type="text" placeholder="Email của bạn..."
                                                            value="<?= $email?>">
                                                        <input type="text" placeholder="Số điện thoại của bạn..."
                                                            value="<?= $phone?>">
                                                        <!-- <input type="text" placeholder="Company neme here...">
                                                        <select class="custom-select mb-15">
                                                            <option>Contry</option>
                                                            <option>Bangladesh</option>
                                                            <option>United States</option>
                                                            <option>united Kingdom</option>
                                                            <option>Australia</option>
                                                            <option>Canada</option>
                                                        </select>
                                                        <select class="custom-select mb-15">
                                                            <option>State</option>
                                                            <option>Dhaka</option>
                                                            <option>New York</option>
                                                            <option>London</option>
                                                            <option>Melbourne</option>
                                                            <option>Ottawa</option>
                                                        </select>
                                                        <select class="custom-select mb-15">
                                                            <option>Town / City</option>
                                                            <option>Dhaka</option>
                                                            <option>New York</option>
                                                            <option>London</option>
                                                            <option>Melbourne</option>
                                                            <option>Ottawa</option>
                                                        </select> -->
                                                        <input type="text" placeholder="Địa chỉ của bạn..."
                                                            value="<?= $dia_chi?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="our-order payment-details mt-60 pr-20">
                                                        <h4 class="title-1 title-border text-uppercase mb-30">ĐƠN HÀNG
                                                            CỦA BẠN
                                                        </h4>
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
                                                <div class="col-md-6">
                                                    <div class="payment-method mt-60  pl-20">
                                                        <h4 class="title-1 title-border text-uppercase mb-30">Phương
                                                            thức thanh toán</h4>
                                                        <div class="payment-accordion">
                                                            <!-- Accordion start  -->
                                                            <h3 class="payment-accordion-toggle active">THANH TOÁN KHI
                                                                NHẬN HÀNG</h3>
                                                            <div class="payment-content default">
                                                                <input type="radio" id="radio5" value="1" name="pttt"
                                                                    required>
                                                                <label for="radio5">Thanh toán bằng tiền mặt khi nhận
                                                                    hàng.</label>
                                                            </div>
                                                            <!-- Accordion end -->
                                                            <!-- Accordion start -->

                                                            <!-- Accordion end -->
                                                            <button class="button-one submit-button mt-15"
                                                                data-text="đặt hàng" type="submit">ĐẶT HÀNG</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- check-out end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CHECKOUT-AREA END -->
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

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->

</html>