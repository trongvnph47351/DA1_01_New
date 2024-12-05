<?php  require_once "views/clients/components/linkcss.php"?>
<?php require_once "views/clients/components/header.php"?>
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
<div class="header-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 offset-md-4 col-7">
                <div class="logo text-md-center">
                    <a href="index.html"><img src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-md-4 col-5">
                <div class="mini-cart text-end">
                    <ul>
                        <li>
                            <a class="cart-icon" href="#">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile-menu end -->
<!-- SLIDER-BANNER-AREA START -->
<section class="slider-banner-area clearfix">
    <!-- Sidebar-social-media start -->
    <div class="sidebar-social d-none d-md-block">
        <div class="table">
            <div class="table-cell">
                <ul>
                    <li><a href="#" target="_blank" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>
                    <li><a href="#" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a href="#" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li><a href="#" target="_blank" title="Linkedin"><i class="zmdi zmdi-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <style>
    .slider-banner {
        display: flex;
        width: 100%;
        height: 280px;
        flex-direction: column;
        gap: 3px;

    }

    .slider-right {
        height: 650px;

        .slider-area {
            width: 100%;
            height: 650px;

            .bend {
                width: 100%;
                height: 100%;


                img {
                    width: 100%;
                    height: 100%;
                }
            }
        }
    }
    </style>
    <!-- Sidebar-social-media start -->
    <div class="banner-left floatleft">
        <!-- Slider-banner start -->

        <div class="slider-banner">
            <?php foreach ( $spnew as $new) { ?>

            <div class="single-banner banner-1">
                <span class="pro-label new-label">new</span>
                <a class="banner-thumb" href="#"><img src="upload/<?= $new['img']?>" alt="" /></a>

                <style>
                .price {
                    color: red;
                    /* Đặt màu đỏ cho giá */
                    font-size: 1.5em;
                    /* Kích thước chữ lớn hơn */
                    font-weight: bold;
                    /* Làm đậm chữ */
                    padding: 5px 10px;
                    /* Thêm khoảng cách bên trong */


                    /* Nền màu đỏ nhạt */
                    display: inline-block;
                    /* Để áp dụng padding và border hiệu quả */

                    /* Đặt màu đỏ cho giá */
                }
                </style>

                <span class="price-tag">
                    <span class="price"> <?= number_format($new['gia'], 0, ',', '.') ?>đ</span>
                </span>

                <div class="banner-brief">
                    <h2 class="banner-title"><?= $new['ten_san_pham']?></h2>

                </div><a href="?act=cart" class="button-one font-16px" data-text="Mua ngay">Mua ngay</a>

            </div>
            <?php } ?>
        </div>

    </div>

    <div class="slider-right floatleft">
        <!-- Slider-area start -->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="./upload/banner/banner02.jpg" alt="" title="#slider-direction-1" />
                    <img src="./upload/banner/banner03.jpg" alt="" title="#slider-direction-2" />
                    <img src="./upload/banner/banner04.jpg" alt="" title="#slider-direction-3" />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <div class="layer-1">
                                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <h2 class="slider-title3 text-uppercase mb-0">New product launch</h2>
                                </div>
                                <div class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
                                    <h2 class="slider-title1 text-uppercase mb-0">WELCOME TO OUR</h2>
                                </div>
                                <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.5s">
                                    <h3 class="slider-title2 text-uppercase">Nike Pegasus Shoes</h3>
                                </div>
                                <div class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="3.5s">
                                    <a href="?act=products" class="button-one style-2 text-uppercase mt-20"
                                        data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <div class="layer-1">
                                <div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <h2 class="slider-title3 text-uppercase mb-0">welcome to our</h2>
                                </div>
                                <div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                    <h2 class="slider-title1 text-uppercase">WELCOME TO OUR</h2>
                                </div>
                                <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                                    <p class="slider-pro-brief">There are many variations of passages of
                                        Lorem
                                        Ipsum
                                        available, but the majority have suffered alteration in some form,
                                        by
                                        injected
                                        humour, or randomised words which don't look even slightly
                                        believable
                                    </p>
                                </div>
                                <div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
                                    <a href="#" class="button-one style-2 text-uppercase mt-20"
                                        data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- direction 3 -->
                <div id="slider-direction-3" class="slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <div class="layer-1">
                                <div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <h2 class="slider-title3 text-uppercase mb-0">welcome to our</h2>
                                </div>
                                <div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                    <h2 class="slider-title1 text-uppercase mb-0">WELCOME TO OUR</h2>
                                </div>
                                <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                                    <h3 class="slider-title2 text-uppercase">gallery 2021</h3>
                                </div>
                                <div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
                                    <p class="slider-pro-brief">There are many variations of passages of
                                        Lorem
                                        Ipsum
                                        available, but the majority have suffered alteration in some form,
                                        by
                                        injected
                                        humour, or randomised words which don't look even slightly
                                        believable
                                    </p>
                                </div>
                                <div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
                                    <a href="#" class="button-one style-2 text-uppercase mt-20"
                                        data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider-area end -->
    </div>
    <!-- Sidebar-social-media start -->
    <div class="sidebar-account d-none d-md-block">
        <div class="table">
            <div class="table-cell">



                <?php
                if(isset($_SESSION['tai_khoan'])){
                    extract($_SESSION['tai_khoan']);
               
                // Hien hi thong bao dang nhap
                ?> <ul>
                    <li><a class="search-open" href="#" title="Search"><i class="zmdi zmdi-search"></i></a>
                    </li>
                    <li><a href="#" title="Login"><i class="zmdi zmdi-lock"></i></a>
                        <div class="customer-login text-left">
                            <form action="#"> <span>Tên đăng nhâp: <?=$ten_dang_nhap?></span>
                    <li>
                        <a href="">Giỏ hàng</a>
                    </li>
                    <li>

                        <a href="?act=donhang">Đơn hàng của tôi</a>
                    </li>
                    <li>
                        <?php if($chuc_vu !==1){?>
                        <a href="admin/index.php">Đăng nhập vào admin</a>
                        <?php  }?>
                    </li>
                    <li>
                        <a href="?act=dangxuat">Đăng xuất</a>
                    </li>

                    </form>
            </div>
            </li>
            <li><a href="?act=dangnhap" title="My-Account"><i class="zmdi zmdi-account"></i></a></li>
            <li><a href="wishlist.html" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></li>
            </ul>
            <?php }else{ ?>
            <ul>
                <li><a class="search-open" href="#" title="Search"><i class="zmdi zmdi-search"></i></a></li>
                <li><a href="#" title="Login"><i class="zmdi zmdi-lock"></i></a>
                    <div class="customer-login text-left">
                        <form action="?act=dangnhap" method="post">
                            <h4 class="title-1 title-border text-uppercase mb-30">Registered
                                customers</h4>
                            <p class="text-gray">If you have an account with us, Please login!
                            </p>
                            <input type="text" name="email" placeholder="Email here..." />
                            <input type="password" placeholder="Password" name="password" />
                            <p><a class="text-gray" href="?act=dangky">Đăng ký tài khoản?</a></p>

                            <button class="button-one submit-button mt-15" data-text="login"
                                type="submit">Login</button>
                        </form>
                    </div>
                </li>
                <li><a href="?act=dangky" title="My-Account"><i class="zmdi zmdi-account"></i></a></li>
                <li><a href="wishlist.html" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></li>
            </ul>
            <?php } ?>

        </div>
    </div>
    </div>
    <!-- Sidebar-social-media start -->
</section>
<!-- End Slider-section -->
<!-- sidebar-search Start -->
<div class="sidebar-search animated slideOutUp">
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 p-0">
                        <div class="search-form-wrap">
                            <button class="close-search"><i class="zmdi zmdi-close"></i></button>
                            <form action="#">
                                <input type="text" placeholder="Search here..." /> <button class="search-button"
                                    type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sidebar-search End -->
<!-- PRODUCT-AREA START -->
<div class="product-area pt-80 pb-30 product-style-2">
    <div class="container">

        <div class="row">
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

                                <span class="price pro-price-2"><?= $sp['gia'] ?>đ</span>
                                <a href="?act=detailproduct&id=<?= $sp['id'] ?>"><img src="upload/<?= $sp['img'] ?>"
                                        alt="" srcset=""></a>
                            </div>
                            <div class="product-info clearfix text-center">
                                <div class="fix">
                                    <h4 class="post-title">
                                        <b>
                                            <a
                                                href="?act=detailproduct&id=<?= $sp['id'] ?>"><?= $sp['ten_san_pham'] ?></a>
                                        </b>
                                    </h4>
                                </div>
                                <div class="product-action clearfix">

                                    <form action="index.php?act=addTocart" method="post">

                                        <input type="hidden" name="id" value="<?= $sp['id'] ?>">
                                        <input type="hidden" name="img" value="<?= $sp['img'] ?>">
                                        <input type="hidden" name="ten_san_pham" value="<?= $sp['ten_san_pham'] ?>">
                                        <input type="hidden" name="gia" value="<?= $sp['gia'] ?>">
                                        <input type="submit" name="addtocart" id="" class="btn btn-primary"
                                            value="Thêm vào giỏ hàng">
                                    </form>

                                </div>
                            </div>
                        </div>


                    </div>
                    <?php } ?>
                </div>
            </div>


        </div>
    </div>
    <!-- PRODUCT-AREA END -->
    <!-- DISCOUNT-PRODUCT START -->
    <div class="discount-product-area discount-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="discount-product-slider dots-bottom-right">
                            <!-- single-discount-product start -->
                            <div class="col-lg-12">
                                <div class="discount-product">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-6">
                                            <a href="single-blog.html"> <img src="assets/img/discount/5.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-6">
                                            <div class="discount-info">
                                                <h1 class="text-dark-red">Discount 50%</h1>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed does
                                                    eiusmodes tempor incididunt ut labore labore et labore
                                                    et dolore
                                                    magna
                                                    aliqua. Ut enim ad minim venim.</p>
                                                <a class="button-2 text-dark-red text-uppercase" href="#">GET DISCOUNT
                                                    <i class="zmdi zmdi-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single-discount-product end -->

                        </div>
                    </div>
                </div>
                <!-- up-comming-product start -->
                <div class="col-lg-4 col-md-4">
                    <div class="up-comming-product">
                        <div class="up-comming-img">
                            <a href="#"><img src="assets/img/product/up-comming.jpg" alt="" /></a>
                        </div>
                        <div class="up-comming-info text-center">
                            <div class="up-comming-brief">
                                <h4 class="post-title"><a href="#">Indoor Furniture</a></h4>
                                <h4 class="comming-pro-price">$ 200.00</h4>
                            </div>
                            <div class="count-down">
                                <div data-countdown="2022/10/08"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- up-comming-product end -->
            </div>
        </div>
    </div>
    <!-- DISCOUNT-PRODUCT END -->
    <!-- PURCHASE-ONLINE-AREA START -->
    <div class="purchase-online-area pt-80 product-style-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title-border">Tất Cả Sản Phẩm</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12  text-center">
                    <!-- Nav tabs -->
                    <ul class="tab-menu nav clearfix">
                        <li><a class="active" href="#new-arrivals" data-bs-toggle="tab">Sản Phẩm Mới</a>
                        </li>
                        <li><a href="#best-seller" data-bs-toggle="tab">Khuyến Mãi</a></li>
                    </ul>
                </div>
                <div class="tab-pane" id="discounts">
                    <div class="row">
                        <!-- Single-product start -->
                        <?php
											foreach($sanpham as $key => $sp){
										?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-product">
                                <div class="product-img">
                                    <span class="pro-label new-label">new</span>
                                    <span class="price pro-price-2"><?= $sp['gia'] ?>đ</span>
                                    <a href="?act=detailproduct&id=<?= $sp['id'] ?>"><img src="upload/<?= $sp['img'] ?>"
                                            alt="" srcset=""></a>
                                </div>
                                <div class="product-info clearfix text-center">
                                    <div class="fix">
                                        <h4 class="post-title"><a
                                                href="?act=detailproduct&id=<?= $sp['id'] ?>"><?= $sp['ten_san_pham'] ?></a>
                                        </h4>
                                    </div>
                                    <div class="product-action clearfix">
                                       <input type="submit" name="addtocart" id="" class="btn btn-primary"
                                            value="Thêm vào giỏ hàng">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }
										?>
                        <!-- Single-product end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- PURCHASE-ONLINE-AREA END -->
<!-- BLGO-AREA START -->
<div class="blog-area blog-2 pt-50">
    <div class="container">
        <!-- Section-title start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 class="title-border">Tin Tức</h2>
                </div>
            </div>
        </div>
        <!-- Section-title end -->
        <div class="row">
            <!-- Single-blog start -->
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-photo">
                        <a href="#"><img src="assets/img/blog/5.jpg" alt="" /></a>
                        <div class="like-share text-center fix">
                            <a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
                            <a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
                            <a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
                        </div>
                    </div>
                    <div class="blog-info">
                        <div class="post-meta fix">
                            <div class="post-date floatleft"><span class="text-dark-red">30</span></div>
                            <div class="post-year floatleft">
                                <p class="text-uppercase text-dark-red mb-0">June, 2021</p>
                                <h4 class="post-title"><a href="?act=detailnew" tabindex="0">Farniture drawing
                                        2021</a>
                                </h4>
                            </div>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered If you are going to use a passage Lorem Ipsum, you alteration in some form.
                        </p>
                        <a href="#" class="button-2 text-dark-red">Read more...</a>
                    </div>
                </div>
            </div>
            <!-- Single-blog end -->
        </div>
    </div>
</div>
<!-- BLGO-AREA END -->
<!-- SUBSCRIVE-AREA START -->
<div class="subscribe-area pt-80">
    <div class="row">
        <div class="col-lg-12">
            <div class="subscribe">
                <form action="#">
                    <input type="text" placeholder="Enter your email address" />
                    <button class="submit-button submit-btn-2 button-one" data-text="subscribe"
                        type="submit">subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php require_once "views/clients/components/footer.php"?>
<?php  require_once "views/clients/components/linkjs.php"?>