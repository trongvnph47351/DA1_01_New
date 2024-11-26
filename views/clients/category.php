<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/shop-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:52 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Shop Sidebar || Hurst</title>
		<meta name="description" content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
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
									<h2>DANH MỤC</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="?act=/">TRANG CHỦ</a></li>
										<li>DANH MỤC</li>
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
					<div class="row">
						<div class="col-lg-3 order-2 order-lg-1">
							<!-- Widget-Search start -->
							<aside class="widget widget-search mb-30">
								<form action="#">
									<input type="text" placeholder="Search here..." />
									<button type="submit">
										<i class="zmdi zmdi-search"></i>
									</button>
								</form>
							</aside>
							<!-- Widget-search end -->
							<!-- Widget-Categories start -->
							<aside class="widget widget-categories  mb-30">
								<div class="widget-title">
									<h4>Categories</h4>
								</div>
								<div id="cat-treeview"  class="widget-info product-cat boxscrol2">
									<ul>
										<li><span>Chair</span>
											<ul>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Striped Shirts</a></li>
												<li><a href="#">Half Shirts</a></li>
												<li><a href="#">Formal Shirts</a></li>
												<li><a href="#">Bilazers</a></li>
											</ul>
										</li>          
										<li class="open"><span>Furniture</span>
											<ul>
												<li><a href="#">Men Bag</a></li>
												<li><a href="#">Shoes</a></li>
												<li><a href="#">Watch</a></li>
												<li><a href="#">T-shirt</a></li>
												<li><a href="#">Shirt</a></li>
											</ul>
										</li>          
										<li><span>Accessories</span>
											<ul>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Striped Shirts</a></li>
												<li><a href="#">Half Shirts</a></li>
												<li><a href="#">Formal Shirts</a></li>
												<li><a href="#">Bilazers</a></li>
											</ul>
										</li>
										<li><span>Top Brands</span>
											<ul>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Striped Shirts</a></li>
												<li><a href="#">Half Shirts</a></li>
												<li><a href="#">Formal Shirts</a></li>
												<li><a href="#">Bilazers</a></li>
											</ul>
										</li>
										<li><span>Jewelry</span>
											<ul>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Striped Shirts</a></li>
												<li><a href="#">Half Shirts</a></li>
												<li><a href="#">Formal Shirts</a></li>
												<li><a href="#">Bilazers</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</aside>
							<!-- Widget-categories end -->
							<!-- Shop-Filter start -->
							<aside class="widget shop-filter mb-30">
								<div class="widget-title">
									<h4>Price</h4>
								</div>
								<div class="widget-info">
									<div class="price_filter">
										<div class="price_slider_amount">
											<input type="submit"  value="You range :"/> 
											<input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
										</div>
										<div id="slider-range"></div>
									</div>
								</div>
							</aside>
							<!-- Shop-Filter end -->
							<!-- Widget-Size start -->
							<aside class="widget widget-size mb-30">
								<div class="widget-title">
									<h4>Size</h4>
								</div>
								<div class="widget-info size-filter clearfix">
									<ul>
										<li><a href="#">M</a></li>
										<li><a class="active" href="#">S</a></li>
										<li><a href="#">L</a></li>
										<li><a href="#">SL</a></li>
										<li><a href="#">XL</a></li>
									</ul>
								</div>
							</aside>
							<!-- Widget-Size end -->
							<!-- Widget-banner start -->
							<aside class="widget widget-banner hidden-sm">
								<div class="widget-info widget-banner-img">
									<a href="#"><img src="img/banner/5.jpg" alt="" /></a>
								</div>
							</aside>
							<!-- Widget-banner end -->
						</div>
						<div class="col-lg-9 order-1 order-lg-2">
							<!-- Shop-Content End -->
							<div class="shop-content mt-tab-30 mb-30 mb-lg-0">
								<div class="product-option mb-30 clearfix">
									<!-- Nav tabs -->
									<ul class="nav d-block shop-tab">
										<li><a class="active" href="#grid-view" data-bs-toggle="tab"><i class="zmdi zmdi-view-module"></i></a></li>
									</ul>
									<div class="showing text-end d-none d-md-block">
										<p class="mb-0">Showing 01-09 of 17 Results</p>
									</div>
								</div>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane active" id="grid-view">							
										<div class="row">
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6">
												<div class="single-product">
													<div class="product-img">
														<span class="pro-label new-label">new</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="assets/img/product/11.jpg" alt="" /></a>
													</div>
													<div class="product-info clearfix text-center">
														<div class="fix">
															<h4 class="post-title"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="product-action clearfix">
															<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
															<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6">
												<div class="single-product">
													<div class="product-img">
														<span class="pro-label new-label">new</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="assets/img/product/2.jpg" alt="" /></a>
													</div>
													<div class="product-info clearfix text-center">
														<div class="fix">
															<h4 class="post-title"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="product-action clearfix">
															<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
															<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6">
												<div class="single-product">
													<div class="product-img">
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="assets/img/product/1.jpg" alt="" /></a>
													</div>
													<div class="product-info clearfix text-center">
														<div class="fix">
															<h4 class="post-title"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="product-action clearfix">
															<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
															<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
											<!-- Single-product end -->
										</div>
									</div>
								</div>
								<!-- Pagination start -->
								<div class="shop-pagination text-center">
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
							<!-- Shop-Content End -->
						</div>
					</div>
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

<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/shop-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:52 GMT -->
</html>
