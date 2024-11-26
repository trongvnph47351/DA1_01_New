<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from template.hasthemes.com/hurst-v1/hurst/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 12:04:36 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Checkout || Hurst</title>
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
									<h2>ĐƠN HÀNG</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="index.html">TRANG CHỦ</a></li>
										<li>ĐƠN HÀNG</li>
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
															<h4 class="title-1 title-border text-uppercase mb-30">billing details</h4>
															<input type="text" placeholder="Your name here...">
															<input type="text" placeholder="Email address here...">
															<input type="text" placeholder="Phone here...">
															<input type="text" placeholder="Company neme here...">
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
															</select>
															<textarea class="custom-textarea" placeholder="Your address here..." ></textarea>
														</div>
													</div>
													<div class="col-md-6">
														<div class="our-order payment-details mt-60 pr-20">
															<h4 class="title-1 title-border text-uppercase mb-30">our order</h4>
															<table>
																<thead>
																	<tr>
																		<th><strong>Product</strong></th>
																		<th class="text-end"><strong>Total</strong></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Dummy Product Name  x 2</td>
																		<td class="text-end">$86.00</td>
																	</tr>
																	<tr>
																		<td>Dummy Product Name  x 1</td>
																		<td class="text-end">$69.00</td>
																	</tr>
																	<tr>
																		<td>Cart Subtotal</td>
																		<td class="text-end">$155.00</td>
																	</tr>
																	<tr>
																		<td>Shipping and Handing</td>
																		<td class="text-end">$15.00</td>
																	</tr>
																	<tr>
																		<td>Vat</td>
																		<td class="text-end">$00.00</td>
																	</tr>
																	<tr>
																		<td>Order Total</td>
																		<td class="text-end">$170.00</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<!-- payment-method -->
													<div class="col-md-6">
														<div class="payment-method mt-60  pl-20">
															<h4 class="title-1 title-border text-uppercase mb-30">payment method</h4>
															<div class="payment-accordion">
																<!-- Accordion start  -->
																<h3 class="payment-accordion-toggle active">Direct Bank Transfer</h3>
																<div class="payment-content default">
																	<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
																</div> 
																<!-- Accordion end -->
																<!-- Accordion start -->
																<h3 class="payment-accordion-toggle">Cheque Payment</h3>
																<div class="payment-content">
																	<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
																</div>
																<!-- Accordion end -->
																<!-- Accordion start -->
																<h3 class="payment-accordion-toggle">PayPal</h3>
																<div class="payment-content">
																	<p>Pay via PayPal; you can pay with your credit card if you don�t have a PayPal account.</p>
																	<a href="#"><img src="img/payment/1.png" alt="" /></a>
																	<a href="#"><img src="img/payment/2.png" alt="" /></a>
																	<a href="#"><img src="img/payment/3.png" alt="" /></a>
																	<a href="#"><img src="img/payment/4.png" alt="" /></a>
																</div>
																<!-- Accordion end --> 
																<button class="button-one submit-button mt-15" data-text="place order" type="submit">place order</button>			
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
