<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:44 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Single Product || Hurst</title>
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
                                <h2>CHI TIẾT - SẢN PHẨM</h2>
                            </div>
                            <div class="breadcumbs pb-15">
                                <ul>
                                    <li><a href="?act=/">TRANG CHỦ</a></li>
                                    <li>CHI TIẾT - SẢN PHẨM</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADING-BANNER END -->
        <!-- PRODUCT-AREA START -->
        <div class="product-area single-pro-area pt-80 pb-80 product-style-2">
            <div class="container">
                <div class="row shop-list single-pro-info no-sidebar">
                    <!-- Single-product start -->
                    <div class="col-lg-12">
                        <div class="single-product clearfix">
                            <!-- Single-pro-slider Big-photo start -->
                            <div class="single-pro-slider single-big-photo view-lightbox slider-for">
                                <div>
                                    <img src="upload/<?= $oneProduct['img'] ?>" alt="" />
                                    <a class="view-full-screen" href="upload/<?= $oneProduct['img'] ?>"
                                        data-lightbox="roadtrip" data-title="My caption">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Single-pro-slider Big-photo end -->
                            <div class="product-info">
                                <div class="fix">
                                    <h4 class="post-title floatleft">Tên sản phẩm: <?= $oneProduct['ten_san_pham'] ?>
                                    </h4>
                                </div>
                                <div class="fix">
                                    <h4 class="post-title floatleft">Mã sản phẩm: <?= $oneProduct['id'] ?></h4>
                                </div>
                                <div class="fix mb-20">
                                    <span class="pro-price">Giá: <?= $oneProduct['gia'] ?> VND</span>
                                </div>
                                <div class="clearfix">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="product-action clearfix">
                                        <a href="?act=cart" data-bs-toggle="tooltip" data-placement="top"
                                            title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Single-pro-slider Small-photo start -->
                                <div class="single-pro-slider single-sml-photo slider-nav">
                                    <div>
                                        <img src="upload/<?= $oneProduct['img'] ?>" alt="" />
                                    </div>
                                </div>
                                <!-- Single-pro-slider Small-photo end -->
                            </div>
                        </div>
                    </div>
                    <!-- Single-product end -->
                </div>
                <!-- single-product-tab start -->
                <div class="single-pro-tab">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="single-pro-tab-menu">
                                <!-- Nav tabs -->
                                <ul class="nav d-block">
                                    <li><a href="#description" data-bs-toggle="tab">Mô tả</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane" id="description">
                                    <div class="pro-tab-info pro-description">
                                        <h3 class="tab-title title-border mb-30"><?= $oneProduct['ten_san_pham'] ?></h3>
                                        <p><?= $oneProduct['mo_ta'] ?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product-tab end -->
            </div>
        </div>
        <!-- PRODUCT-AREA END -->
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

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:50 GMT -->

</html>