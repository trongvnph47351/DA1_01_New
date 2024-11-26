<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login / Registration || Hurst</title>
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
                                <h2>ĐĂNG NHẬP</h2>
                            </div>
                            <div class="breadcumbs pb-15">
                                <ul>
                                    <li><a href="index.html">TRANG CHỦ</a></li>
                                    <li>ĐĂNG NHẬP</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADING-BANNER END -->
        <!-- SHOPPING-CART-AREA START -->
        <div class="container pt-80 pb-80">
            <div class="row">
                <!-- Form Đăng nhập -->
                <div class="col-lg-6">
                    <div class="customer-login text-left">
                        <h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
                        <p class="text-gray">If you have an account with us, Please login!
                        </p>
                        <form action="?act=dangnhap" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email here..."
                                    name="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    name="password">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 w-100">Login</button>
                        </form>
                    </div>
                </div>

                <!-- Form Đăng ký -->
                <div class="col-lg-6">
                    <div class="customer-login text-left">
                        <h4 class="title-1 title-border text-uppercase mb-30">New customers</h4>
                        <p class="text-gray">Please fill in the form to register!</p>
                        <form action="?act=dangky" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your name here..."
                                    name="name">
                            </div>
                            <div class="mb-3">
                                <label for="reg-email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="reg-email"
                                    placeholder="Email address here..." name="email">
                            </div>
                            <div class="mb-3">
                                <label for="reg-pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="reg-pass" placeholder="Password"
                                    name="pass">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="Phone"
                                    name="sodienthoai">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Address"
                                    name="diachi">
                            </div>
                            <div class="mb-3">
                                <label for="confirm-pass" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-pass"
                                    placeholder="Confirm password" name="newpass">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter"
                                    checked><label class="form-check-label" for="newsletter">Sign up for our
                                    newsletter!</label>
                            </div>
                            <button type="submit" class="btn btn-success mt-2 w-100">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- SHOPPING-CART-AREA END -->
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

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->

</html>