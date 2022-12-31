﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="csrf -token" content="{{ csrf_token() }}"  />
	<title>@yield('title', 'Trang chủ')  - {{  config('app.name', 'Laravel') }}</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/images/favicon.png') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/animate.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/bootstrap/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/all.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/ionicons.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/themify-icons.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/linearicons.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/flaticon.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/simple-line-icons.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/owlcarousel/css/owl.carousel.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/owlcarousel/css/owl.theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/owlcarousel/css/owl.theme.default.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/jquery-ui.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/slick.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/slick-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}" />
</head>
<body>
	<div class="preloader">
		<div class="lds-ellipsis">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<header class="header_wrap fixed-top header_with_topbar">
		<div class="bottom_header dark_skin main_menu_uppercase">
			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href={{route("frontend")}}>
						<img class="logo_light" src="{{ asset('public/assets/images/logo_light.png') }}" alt="logo" />
						<img class="logo_dark" src="{{ asset('public/assets/images/logo_dark.png') }}" alt="logo" />
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
						<span class="ion-android-menu"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li><a class="nav-link nav_item" href="index.html">Trang chủ</a></li>
<li class="dropdown">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Các trang mẫu</a>
								<div class="dropdown-menu">
									<ul>
										<li><a class="dropdown-item nav-link nav_item" href="404.html">Lỗi 404</a></li>
										<li><a class="dropdown-item nav-link nav_item" href="register.html">Đăng ký</a></li>
										<li><a class="dropdown-item nav-link nav_item" href="login.html">Đăng nhập</a></li>
										<li><a class="dropdown-item nav-link nav_item" href="contact.html">Liên hệ</a></li>
										<li><a class="dropdown-item nav-link nav_item" href="index.html">Danh sách sản phẩm</a></li>
										<li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Giỏ hàng</a></li>
										<li><a class="dropdown-item nav-link nav_item" href="empty-cart.html">Giỏ hàng rỗng</a></li>
										<li><a class="dropdown-item nav-link nav_item" href="checkout.html">Thanh toán</a></li>
										<li><a class="dropdown-item nav-link nav_item" href="order-completed.html">Thanh toán thành công</a></li>
									</ul>
								</div>
							</li>
							<li class="dropdown dropdown-mega-menu">
								<a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Cửa hàng</a>
								<div class="dropdown-menu">
									<ul class="mega-menu d-lg-flex">
										<li class="mega-menu-col col-lg-3">
											<ul>
												<li class="dropdown-header">Woman's</li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Vestibulum sed</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Donec porttitor</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Donec vitae facilisis</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Curabitur tempus</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Vivamus in tortor</a></li>
											</ul>
										</li>
										<li class="mega-menu-col col-lg-3">
											<ul>
												<li class="dropdown-header">Men's</li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Donec vitae ante ante</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Etiam ac rutrum</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Quisque condimentum</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Curabitur laoreet</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Vivamus in tortor</a></li>
											</ul>
										</li>
										<li class="mega-menu-col col-lg-3">
											<ul>
												<li class="dropdown-header">Kid's</li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Donec vitae facilisis</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Quisque condimentum</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Etiam ac rutrum</a></li>
<li><a class="dropdown-item nav-link nav_item" href="#">Donec vitae ante ante</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Donec porttitor</a></li>
											</ul>
										</li>
										<li class="mega-menu-col col-lg-3">
											<ul>
												<li class="dropdown-header">Accessories</li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Curabitur tempus</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Quisque condimentum</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Vivamus in tortor</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Donec vitae facilisis</a></li>
												<li><a class="dropdown-item nav-link nav_item" href="#">Donec porttitor</a></li>
											</ul>
										</li>
									</ul>
									<div class="d-lg-flex menu_banners">
										<div class="col-sm-4">
											<div class="header-banner">
												<img src="{{ asset('public/assets/images/menu_banner1.jpg') }}" alt="menu_banner1">
												<div class="banne_info">
													<h6>10% Off</h6>
													<h4>New Arrival</h4>
													<a href="#">Shop now</a>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="header-banner">
												<img src="{{ asset('public/assets/images/menu_banner2.jpg') }}" alt="menu_banner2">
												<div class="banne_info">
													<h6>15% Off</h6>
													<h4>Men's Fashion</h4>
													<a href="#">Shop now</a>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="header-banner">
												<img src="{{ asset('public/assets/images/menu_banner3.jpg') }}" alt="menu_banner3">
												<div class="banne_info">
													<h6>23% Off</h6>
													<h4>Kids Fashion</h4>
													<a href="#">Shop now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li><a class="nav-link nav_item" href="contact.html">Liên hệ</a></li>
						</ul>
					</div>
					<ul class="navbar-nav attr-nav align-items-center">
						<li>
							<a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
							<div class="search_wrap">
								<span class="close-search"><i class="ion-ios-close-empty"></i></span>
								<form action="https://www.google.com.vn/search" method="get">
									<input type="hidden" name="hl" id="hl" value="vi" />
									<input type="text" placeholder="Bạn muốn tìm gì?" class="form-control" id="search_input" name="q" />
									<button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
								</form>
							</div>
							<div class="search_overlay"></div>
						</li>
						<li><a href="#" class="nav-link"><i class="linearicons-user"></i></a></li>
						<li class="dropdown cart_dropdown">
							<a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">{{Cart::count() ?? 0 }}</span></a>
							@if(Cart::count())
							<div class="cart_box dropdown-menu dropdown-menu-right">
								<ul class="cart_list">
									@foreach(Cart::content() as $value)
										<li>
											<a href="{{route('frontend.giohang.xoa', ['row_id' => $value->rowId])}}" class="item_remove"><i class="ion-close"></i></a>
											<a href="#"><img src="{{ env('APP_URL') . '/storage/app/' . $value->options->image }}" alt="cart_thumb1">{{$value->name}}</a>
											<span class="cart_quantity"> {{$value->qty}} x <span class="cart_amount">{{ number_format($value->price) }}</span><span class="price_symbole">đ</span></span>
										</li>
									@endforeach
								</ul>
								<div class="cart_footer">
									<p class="cart_total"><strong>Tổng tiền sản phẩm:</strong> <span class="cart_price">{{Cart::priceTotal()}}</span><span class="price_symbole">đ</span></p>
									<p class="cart_buttons"><a href="{{route('frontend.giohang')}}" class="btn btn-fill-line view-cart">GIỎ HÀNG</a><a href="{{ route('frontend.dathang') }}" class="btn btn-fill-out checkout">THANH TOÁN</a></p>
								</div>
							</div>
							@endif
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
	@yield('content')
	
	<footer class="footer_dark">
		<div class="footer_top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="widget">
							<div class="footer_logo">
								<a href="#"><img src="{{ asset('public/assets/images/logo_light.png') }}" alt="logo" /></a>
							</div>
							<p>Sologan hoặc thông tin giới thiệu ngắn về shop đặt tại đây.</p>
						</div>
						<div class="widget">
							<ul class="social_icons social_white">
								<li><a href="#"><i class="ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
								<li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
								<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<div class="widget">
							<h6 class="widget_title">Useful Links</h6>
							<ul class="widget_links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Location</a></li>
								<li><a href="#">Affiliates</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6">
						<div class="widget">
							<h6 class="widget_title">Category</h6>
							<ul class="widget_links">
								<li><a href="#">Men</a></li>
								<li><a href="#">Woman</a></li>
								<li><a href="#">Kids</a></li>
								<li><a href="#">Best Saller</a></li>
								<li><a href="#">New Arrivals</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="widget">
							<h6 class="widget_title">My Account</h6>
							<ul class="widget_links">
								<li><a href="#">My Account</a></li>
								<li><a href="#">Discount</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Orders History</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="widget">
							<h6 class="widget_title">Contact Info</h6>
							<ul class="contact_info contact_info_light">
								<li>
									<i class="ti-location-pin"></i>
									<p>18 Ung Văn Khiêm, P. Đông Xuyên, TP. Long Xuyên, AG</p>
								</li>
								<li>
									<i class="ti-email"></i>
									<a href="mailto:shoponline@gmail.com">shoponline@gmail.com</a>
								</li>
								<li>
									<i class="ti-mobile"></i>
									<p>+84 2963 01 11 10</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom_footer border-top-tran">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p class="mb-md-0 text-center text-md-left">Copyright © 2020 All Rights Reserved.</p>
					</div>
					<div class="col-md-6">
						<ul class="footer_payment text-center text-lg-right">
							<li><a href="#"><img src="{{ asset('public/assets/images/visa.png') }}" alt="visa"></a></li>
							<li><a href="#"><img src="{{ asset('public/assets/images/discover.png') }}" alt="discover"></a></li>
							<li><a href="#"><img src="{{ asset('public/assets/images/master_card.png') }}" alt="master_card"></a></li>
							<li><a href="#"><img src="{{ asset('public/assets/images/paypal.png') }}" alt="paypal"></a></li>
							<li><a href="#"><img src="{{ asset('public/assets/images/amarican_express.png') }}" alt="amarican_express"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
	
	<script src="{{ asset('public/assets/js/jquery-1.12.4.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('public/assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/magnific-popup.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/parallax.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/hoverparallax.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.countTo.js') }}"></script>
	<script src="{{ asset('public/assets/js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/isotope.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.appear.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.parallax-scroll.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.dd.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/slick.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.elevatezoom.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;callback=initMap"></script>
	<script src="{{ asset('public/assets/js/scripts.js') }}"></script>
</body>
</html>