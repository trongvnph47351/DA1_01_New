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
                                <form action="index.php?act=addTocart" method="post">

                                    <input type="hidden" name="id" value="<?= $oneProduct['id'] ?>">
                                    <input type="hidden" name="img" value="<?= $oneProduct['img'] ?>">
                                    <input type="hidden" name="ten_san_pham" value="<?= $oneProduct['ten_san_pham'] ?>">
                                    <input type="hidden" name="gia" value="<?= $oneProduct['gia'] ?>">

                                    <label for="qty">Số lượng sản phẩm</label>
                                    <div class="clearfix">
                                        <div class="cart-plus-minus">
                                            <input type="text" value="01" name="quantity" class="cart-plus-minus-box">
                                        </div>

                                        <input type="submit" name="addtocart" id="" class="btn btn-primary"
                                            value="Thêm vào giỏ hàng">
                                </form>
                                <div class="product-action clearfix">

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
                    <div class="tab-pane active" id="reviews">
                        <div class="pro-tab-info pro-reviews">
                            <div class="customer-review mb-60">
                                <h3 class="tab-title title-border mb-30">Đánh giá</h3>
                                <ul class="product-comments clearfix">
                                    <div class="tab-pane active" id="reviews">
                                        <div class="pro-tab-info pro-reviews">
                                            <div class="customer-review mb-60">
                                                <ul class="product-comments clearfix">
                                                    <!-- <li class="mb-30">
														<div class="pro-reviewer">
															<img src="img/reviewer/1.jpg" alt="" />
														</div>
														<div class="pro-reviewer-comment">
															<div class="fix">
																<div class="floatleft mbl-center">
																	<h5 class="text-uppercase mb-0"><strong>Gerald Barnes</strong></h5>
																	<p class="reply-date">27 Jun, 2021 at 2:30pm</p>
																</div>
																<div class="comment-reply floatright">
																	<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
																	<a href="#"><i class="zmdi zmdi-close"></i></a>
																</div>
															</div>
															<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
														</div>
													</li> -->

                                                </ul>
                                            </div>

                                            <!-- phần bình luận -->
                                            <div class="reply-box">
                                                <form action="?act=detailproduct&id=<?=$id?>" method="post">
                                                    <div class=" row">
                                                        <!-- Hiển thị bình luận sản phẩm -->
                                                        <table class="table table-responsive">
                                                            <?php
                                                              foreach ($load_all_comment as $comment):
                                                              extract($comment);
                                                            ?>
                                                            <ul class=" product-comments clearfix">
                                                                <li class="mb-30">
                                                                    <div class="pro-reviewer">
                                                                        <img src="upload/logo1.png" alt="" />
                                                                    </div>
                                                                    <div class="pro-reviewer-comment">
                                                                        <div class="fix">
                                                                            <div class="floatleft mbl-center">
                                                                                <h5 class="text-uppercase mb-0">
                                                                                    <strong>
                                                                                        <?=htmlspecialchars($ten_dang_nhap)?></strong>
                                                                                </h5>
                                                                                <p class="reply-date">
                                                                                    <?=htmlspecialchars($ngay_binh_luan)?>
                                                                                </p>
                                                                            </div>
                                                                            <div class="comment-reply floatright">
                                                                                <!-- Thao tác trả lời bình luận có thể thêm ở đây -->
                                                                            </div>
                                                                        </div>
                                                                        <p class="mb-0">
                                                                            <?= nl2br(htmlspecialchars($noi_dung_binh_luan))?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <?php endforeach ;?>
                                                        </table>

                                                        <!-- Form gửi bình luận -->
                                                        <div class="write_review">
                                                            <?php
                                                            if(isset($_SESSION['tai_khoan'])):
                                                            ?>
                                                            <div class="form-group">
                                                                <input type="hidden" name="product_id"
                                                                    value="<?=htmlspecialchars($id)?>">
                                                                <textarea class="form-control" name="noidung" cols="30"
                                                                    rows="3"
                                                                    placeholder="Viết đánh giá để mọi người có thể hiểu hơn về sản phẩm"></textarea>
                                                            </div>
                                                            <input type="submit" name="guibinhluan"
                                                                value="Gửi bình luận">
                                                            <?php else:?>
                                                            <div class="form-group">
                                                                Vui lòng <a href="?act=dangky">đăng nhập</a> để bình
                                                                luận!
                                                            </div>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                            </div>

                        </div>
                        <!-- single-product-tab end -->

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

</html>​