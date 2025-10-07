<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="{{ asset('assets/foto/logo.png') }}" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/home') }}/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="{{ asset('assets/home') }}/fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="{{ asset('assets/home') }}/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{ asset('assets/home') }}/css/aos.css" />
    <link rel="stylesheet" href="{{ asset('assets/home') }}/css/style.css" />
 
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- Fallback Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Font Awesome Icons */
        .fas, .far, .fab, .fa {
            font-family: "Font Awesome 5 Free", "Font Awesome 5 Brands", "Font Awesome 6 Free", "Font Awesome 6 Brands" !important;
            font-weight: 900 !important;
        }
        
        .fa-map-marker-alt:before {
            content: "\f3c5" !important;
        }
        
        .fa-envelope:before {
            content: "\f0e0" !important;
        }
        
        body {
            font-family: 'Poppins', sans-serif !important;
        }
        
        h1, h2, h3, h4, h5, h6, .heading, .logo {
            font-family: 'Poppins', sans-serif !important;
        }
        
        .navbar-brand, .nav-link, .btn {
            font-family: 'Poppins', sans-serif !important;
        }
        
        .card, .card-body, .card-title, .card-text {
            font-family: 'Poppins', sans-serif !important;
        }
        
        /* Service Cards Icons - Change to Orange */
        .box-feature .flaticon-house,
        .box-feature .flaticon-building,
        .box-feature .flaticon-house-3,
        .box-feature .flaticon-house-1 {
            color: #F57C1F !important;
        }
        
        /* Learn More Links - Change to Orange */
        .learn-more {
            color: #F57C1F !important;
            text-decoration: underline !important;
            text-decoration-color: #F57C1F !important;
            font-weight: 500 !important;
        }
        
        .learn-more:hover {
            color: #d96918 !important;
            text-decoration-color: #d96918 !important;
        }
        
        /* Price elements - Change to Orange */
        .price span {
            color: #F57C1F !important;
        }
        
        .price {
            color: #F57C1F !important;
        }
        
        .property-item .property-content .price {
            color: #F57C1F !important;
        }
        
        .property-item .property-content .price span {
            color: #F57C1F !important;
        }
        
        .property-item .property-content .price span:after {
            background-color: #F57C1F !important;
        }
        
        .bg-primary {
            background-color: #F57C1F !important;
        }
        
        .border-primary {
            border-color: #F57C1F !important;
        }
        
        /* Override all info colors to orange */
        .text-info {
            color: #F57C1F !important;
        }
        
        .bg-info {
            background-color: #F57C1F !important;
        }
        
        .border-info {
            border-color: #F57C1F !important;
        }
        
        /* Feature Icons Circular Background - Change to Orange */
        .feature-h .wrap-icon {
            background: #F57C1F !important;
            color: #fff !important;
        }
        
        .feature-h:hover .wrap-icon {
            background: #d96918 !important;
            border: 2px solid #d96918 !important;
        }
        
        .feature-h:hover [class^="icon-"] {
            color: #fff !important;
        }
        
        /* Hubungi Kami Button - Change to Orange */
        .btn-primary {
            background-color: #F57C1F !important;
            border-color: #F57C1F !important;
        }
        
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #d96918 !important;
            border-color: #d96918 !important;
        }
        
        /* Background warning */
        .bg-warning {
            background-color: #F57C1F !important;
        }

        /* Text warning */
        .text-warning {
            color: #F57C1F !important;
        }

        /* Border warning */
        .border-warning {
            border-color: #F57C1F !important;
        }

        /* Button warning (solid) */
        .btn-warning {
            color: #fff !important;
            background-color: #F57C1F !important;
            border-color: #F57C1F !important;
        }

        .btn-warning:hover,
        .btn-warning:focus {
            background-color: #d96918 !important;
            border-color: #d96918 !important;
            color: #fff !important;
        }

        /* Button outline-primary - Change to Orange */
        .btn-outline-primary {
            color: #F57C1F !important;
            border-color: #F57C1F !important;
            background-color: transparent !important;
        }

        .btn-outline-primary:hover,
        .btn-outline-primary:focus {
            background-color: #F57C1F !important;
            border-color: #F57C1F !important;
            color: #fff !important;
        }

        /* Button outline-warning - Orange border, black text, white background */
        .btn-outline-warning {
            color: #000 !important;
            border: 2px solid #F57C1F !important;
            background-color: #fff !important;
        }

        .btn-outline-warning:hover,
        .btn-outline-warning:focus {
            background-color: #F57C1F !important;
            border-color: #F57C1F !important;
            color: #fff !important;
        }

        /* Badge warning */
        .badge.bg-warning {
            background-color: #F57C1F !important;
        }

        /* Alert warning */
        .alert-warning {
            background-color: #F57C1F !important;
            color: #fff !important;
            border-color: #d96918 !important;
        }

        /* Optional: list-group & table warning */
        .list-group-item-warning,
        .table-warning {
            background-color: #F57C1F !important;
            color: #fff !important;
        }
        
        /* White navbar styling - enhanced visibility */
        .navbar.sticky-top {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            z-index: 1020 !important;
            transition: all 0.3s ease !important;
            width: 100% !important;
        }
        
        /* Add padding to body to prevent content from hiding behind fixed navbar */
        body {
            padding-top: 80px !important;
        }
        
        .navbar-light .navbar-brand {
            color: #333 !important;
            font-weight: 600 !important;
        }
        
        .navbar-light .navbar-nav .nav-link {
            color: #333 !important;
            font-weight: 500 !important;
            padding: 0.5rem 1rem !important;
        }
        
        .navbar-light .navbar-nav .nav-link:hover {
            color: #F57C1F !important;
            background-color: rgba(245, 124, 31, 0.1) !important;
            border-radius: 4px !important;
        }
        
        .navbar-light .navbar-nav .nav-link.active {
            color: #F57C1F !important;
            font-weight: 600 !important;
        }
        
        .navbar-light .navbar-toggler {
            border-color: #333 !important;
        }
        
        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }
        
        /* Dropdown menu styling for home navbar */
        .navbar-light .dropdown-menu {
            background-color: #fff !important;
            border: 1px solid #ddd !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
        }
        
        .navbar-light .dropdown-item {
            color: #333 !important;
        }
        
        .navbar-light .dropdown-item:hover {
            background-color: #F57C1F !important;
            color: #fff !important;
        }
        
        .navbar-light .dropdown-item.active {
            background-color: #F57C1F !important;
            color: #fff !important;
            font-weight: 600 !important;
        }
        
        /* Footer styling to match the design */
        .site-footer {
            background-color: #2c2c2c !important;
            color: #fff !important;
            padding: 50px 0 !important;
        }
        
        .site-footer .widget h3 {
            color: #F57C1F !important;
            font-size: 16px !important;
            font-weight: 600 !important;
            margin-bottom: 20px !important;
            text-transform: uppercase !important;
        }
        
        .site-footer .widget p {
            color: #fff !important;
            line-height: 1.6 !important;
            margin-bottom: 20px !important;
        }
        
        .site-footer .widget .links li {
            margin-bottom: 10px !important;
        }
        
        .site-footer .widget .links li a {
            color: #fff !important;
            text-decoration: none !important;
            transition: color 0.3s ease !important;
        }
        
        .site-footer .widget .links li a:hover {
            color: #F57C1F !important;
        }
        
        .site-footer .widget .links li a.active {
            color: #F57C1F !important;
            font-weight: 600 !important;
        }
        
        .site-footer .widget .links li i {
            color: #F57C1F !important;
            width: 16px !important;
            margin-right: 8px !important;
        }
        
        .site-footer .widget .links li {
            display: flex !important;
            align-items: center !important;
            margin-bottom: 10px !important;
        }
        
        .site-footer .social li a {
            background-color: #F57C1F !important;
            color: #fff !important;
            width: 40px !important;
            height: 40px !important;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            text-decoration: none !important;
            transition: all 0.3s ease !important;
        }
        
        .site-footer .social li a:hover {
            background-color: #d96918 !important;
            transform: translateY(-2px) !important;
        }
        
        .site-footer .social li a i {
            font-size: 18px !important;
        }
        
        .site-footer p {
            color: #fff !important;
            margin: 0 !important;
        }
    </style>


    <title>
        PONDASI
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top" style="background-color: #ffffff;">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('assets/foto/logo1.png') }}" alt="Logo" style="height:40px;" class="me-2">
                {{-- <span>PONDA<span style="color:#ff6600;">Si</span></span> --}}
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-orange {{ Request::is('/') ? 'active' : '' }}"
                            href="{{ url('/') }}">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}"
                            href="{{ url('tentang') }}">TENTANG KAMI</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('layanan*') ? 'active' : '' }}" href="#" id="layananDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            LAYANAN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="layananDropdown">
                            @foreach ($kategori as $value)
                                <li><a class="dropdown-item {{ Request::is('layanan/' . $value->idkategori) || (Request::is('layanandetail*') && isset($layanan) && $layanan->idkategori == $value->idkategori) ? 'active' : '' }}"
                                        href="{{ url('layanan/' . $value->idkategori) }}">{{ $value->kategori }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('portfolio*') ? 'active' : '' }}"
                            href="{{ url('portfolio') }}">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}"
                            href="{{ url('kontak') }}">HUBUNGI KAMI</a>
                    </li>
                </ul>

                <!-- Sign In Button -->
                <a href="{{ url('login') }}" class="btn btn-outline-warning ms-lg-3">SIGN IN</a>
            </div>
        </div>
    </nav>


    @yield('content')

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <!-- Column 1: Introduction and Social Media -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="widget">
                        <h3>PONDASI</h3>
                        <p class="mb-3">Kami bantu untuk mewujudkan rumah impianmu dengan visi, kolaborasi dan kualitas terbaik. Contact ke kami untuk konsultasi gratis!</p>
                        
                        <ul class="list-unstyled social">
                            <li>
                                <a href="https://www.instagram.com/pondasi.project?igsh=ZXQ4aDZraG1md2Vn&utm_source=qr" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Column 2: Links -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="widget">
                        <h3>Tautan</h3>
                        <ul class="list-unstyled links">
                            <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a></li>
                            <li><a href="{{ url('tentang') }}" class="{{ Request::is('tentang') ? 'active' : '' }}">Tentang Kami</a></li>
                            <li><a href="{{ url('layanan/1') }}" class="{{ Request::is('layanan/1') ? 'active' : '' }}">Desain Rumah</a></li>
                            <li><a href="{{ url('layanan/2') }}" class="{{ Request::is('layanan/2') ? 'active' : '' }}">Desain Interior</a></li>
                            <li><a href="{{ url('kontak') }}" class="{{ Request::is('kontak') ? 'active' : '' }}">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3: Services -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="widget">
                        <h3>Layanan</h3>
                        <ul class="list-unstyled links">
                            <li><a href="{{ url('kontak') }}" class="{{ Request::is('kontak') ? 'active' : '' }}">Konsultasi Gratis</a></li>
                            <li><a href="{{ url('layanan/1') }}" class="{{ Request::is('layanan/1') ? 'active' : '' }}">Desain Rumah</a></li>
                            <li><a href="{{ url('layanan/2') }}" class="{{ Request::is('layanan/2') ? 'active' : '' }}">Desain Interior</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 4: Contact -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="widget">
                        <h3>Kontak</h3>
                        <ul class="list-unstyled links">
                            <li>
                                <i class="fas fa-envelope me-2"></i>
                                <a href="mailto:pondasi77@gmail.com">pondasi77@gmail.com</a>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt me-2"></i>
                                Purwokerto, Indonesia
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>
                        © {{ date('Y') }} PONDASI. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="{{ asset('assets/home') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/home') }}/js/tiny-slider.js"></script>
    <script src="{{ asset('assets/home') }}/js/aos.js"></script>
    <script src="{{ asset('assets/home') }}/js/navbar.js"></script>
    <script src="{{ asset('assets/home') }}/js/counter.js"></script>
    <script src="{{ asset('assets/home') }}/js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "{{ session('success') }}"
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "{{ session('error') }}"
            });
        </script>
    @endif


    @yield('script')
</body>

</html>
