<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	
	<title>@yield('title', 'Trang chủ quản trị') - {{ config('app.name', 'Laravel') }}</title>
	
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="{{ asset('public/css/fontawesome.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/css/custom.css') }}" />
	
	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	@yield('javascript')
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-md navbar-light shadow-sm bg-info">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{ route('frontend') }}">
					<i class="fal fa-cart-shopping"></i> {{ config('app.name', 'Laravel') }}
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fal fa-fw fa-chart-line"></i> Thống kê bán hàng</a>
						</li>
					</ul>
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						@guest
							@if (Route::has('login'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}"><i class="fal fa-fw fa-sign-in-alt"></i> Đăng nhập</a>
								</li>
							@endif
							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}"><i class="fal fa-fw fa-user-plus"></i> Đăng ký</a>
								</li>
							@endif
						@else
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="fal fa-fw fa-cog"></i> Quản lý
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="{{ route('admin.loaisanpham') }}"><i class="fal fa-fw fa-list"></i> Loại sản phẩm</a></li>
									<li><a class="dropdown-item" href="{{ route('admin.hangsanxuat') }}"><i class="fal fa-fw fa-copyright"></i> Hãng sản xuất</a></li>
									<li><a class="dropdown-item" href="{{ route('admin.tinhtrang') }}"><i class="fal fa-fw fa-ballot-check"></i> Tình trạng</a></li>
									<li><a class="dropdown-item" href="{{ route('admin.sanpham') }}"><i class="fal fa-fw fa-cubes"></i> Sản phẩm</a></li>
									<li><a class="dropdown-item" href="{{ route('admin.donhang') }}"><i class="fal fa-fw fa-file-invoice"></i> Đơn hàng</a></li>
									<li><a class="dropdown-item" href="{{ route('admin.nguoidung') }}"><i class="fal fa-fw fa-users"></i> Tài khoản người dùng</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="fal fa-fw fa-user-circle"></i> {{ Auth::user()->name }}
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#"><i class="fal fa-fw fa-key"></i> Đổi mật khẩu</a></li>
									<li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fal fa-fw fa-power-off"></i> Đăng xuất</a></li>
									<form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
										@csrf
									</form>
								</ul>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>
		
		<main class="pt-3 pb-2">
			@yield('content')
		</main>
		
		<hr class="shadow-sm" />
		<footer>Bản quyền &copy; {{ date('Y') }} bởi {{ config('app.name', 'Laravel') }}.</footer>
	</div>
</body>
</html>