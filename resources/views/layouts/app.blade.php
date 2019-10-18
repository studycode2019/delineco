<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/pogo-slider.min.css') }}">
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Zoom CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/magiczoomplus.css') }}"/>
    <!-- Zoom JS -->
    <script type="text/javascript" src="{{ asset('js/magiczoomplus.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
    <div id="preloader">
		<div class="preloader pulse">
			<i class="fa fa-heartbeat" aria-hidden="true"></i>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    @section('sidebar')
    <!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="/"><img src="{{ asset('images/LOGO_Deli_Final.png') }}" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li class="nav-item menu"><a class="nav-link" href="/">Trang chủ</a></li>
                        <li class="nav-item menu"><a class="nav-link" href="/trangchu/gioithieu">Giới thiệu</a></li>
                        <li class="nav-item dropdown menu">
                            <a class="nav-link dropdown-toggle" href="/trangchu/danhmucsanpham" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Danh mục sản phẩm
                            </a>
                            <div class="dropdown-menu menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/trangchu/thiepcuoi">Thiệp cưới</a>
                              <a class="dropdown-item" href="/trangchu/thiepgiangsinh">Thiệp Giáng Sinh</a>
                              <a class="dropdown-item" href="/trangchu/baolixi">Bao Lìxì</a>
                              <a class="dropdown-item" href="/trangchu/logothuonghieu">Logo thương hiệu</a>
                              <a class="dropdown-item" href="/trangchu/menucatinh">Menu cá tính</a>
                              <a class="dropdown-item" href="/trangchu/danhthiep">Danh thiếp</a>
                            </div>
                        </li>
                        <li class="nav-item menu"><a class="nav-link" href="/trangchu/sukien">Sự kiện</a></li>
                        <li class="nav-item menu"><a class="nav-link" href="/trangchu/huongdan">Hướng dẫn</a></li>
                        <li class="nav-item menu"><a class="nav-link" href="/trangchu/lienhe">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
    @show

	@yield('content')

	<!-- ALL JS FILES -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.pogo-slider.min.js') }}"></script>
	<script src="{{ asset('js/slider-index.js') }}"></script>
	<script src="{{ asset('js/smoothscroll.js') }}"></script>
	<script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
