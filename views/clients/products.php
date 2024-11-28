<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:44 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop || Hurst</title>
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
                                <h2>SẢN PHẨM</h2>
                            </div>
                            <div class="breadcumbs pb-15">
                                <ul>
                                    <li><a href="?act=/">TRANG CHỦ</a></li>
                                    <li>SẢN PHẨM</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADING-BANNER END -->
        <!-- PRODUCT-AREA START -->
        <div class="product-area pt-80 pb-80 product-style-2">
            <div class="container">
                <!-- Shop-Content End -->
                <div class="shop-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-option mb-30 clearfix">
                                <!-- Categories start -->
                                <div class="dropdown floatleft">
                                    <button class="option-btn">
                                        Categories
                                    </button>
                                    <div class="dropdown-menu dropdown-width">
                                        <!-- Widget-Categories start -->
                                        <aside class="widget widget-categories">
                                            <div class="widget-title">
                                                <h4>Categories</h4>
                                            </div>
                                            <div id="cat-treeview" class="widget-info product-cat boxscrol2">
                                                <ul>
                                                    <li><span>Jewelry</span>
                                                        <ul>
                                                            <li><a href="#">T-Shirts</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </aside>
                                        <!-- Widget-categories end -->
                                    </div>
                                </div>
                                <!-- Categories end -->
                                <div class="showing text-end">
                                    <p class="mb-0 d-none d-md-block">Showing 01-09 of 17 Results</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <!-- Single-product start -->
                                <div class="col-lg-12">
                                    <div class="section-title text-center">
                                        <h2 class="title-border">Sản Phẩm Nổi Bật</h2>
                                    </div>
                                    <div class="product-slider style-2 arrow-left-right">

                                        <?php
									foreach($sanpham as $key => $sp){
								?>

                                        <div class="col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <span class="pro-label new-label">new</span>
                                                    <span class="pro-price-2"><?= $sp['gia'] ?> VND</span>
                                                    <a href="?act=detailproduct&id=<?= $sp['id'] ?>"><img
                                                            src="upload/<?= $sp['img'] ?>" alt="" srcset=""></a>
                                                </div>
                                                <div class="product-info clearfix text-center">
                                                    <div class="fix">
                                                        <h4 class="post-title"><a
                                                                href="?act=detailproduct&id=<?= $sp['id'] ?>"><?= $sp['ten_san_pham'] ?></a>
                                                        </h4>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="?act=cart" data-bs-toggle="tooltip"
                                                            data-placement="top" title="Add To Cart"><i
                                                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- Single-product end -->
                            </div>
                            <div class="col-md-12">
                                <!-- Pagination start -->
                                <div class="shop-pagination  text-center">
                                    <div class="pagination">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
                                            <li><a href="#">01</a></li>
                                            <li><a class="active" href="#">02</a></li>
                                            <li><a href="#">03</a></li>
                                            <li><a href="#">04</a></li>
                                            <li><a href="#">05</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Pagination end -->
                            </div>
                        </div>
                    </div>
                    <!-- Shop-Content End -->
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

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:44 GMT -->

</html>