<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PONDASI</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/admin') }}/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    {{-- <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script> --}}
    {{-- <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script> --}}
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    @if (auth()->user()->role == 'Admin')
        <style>
            .sb-sidenav-dark {
                background-color: #464fa3;
                color: #fff;
            }

            .sb-sidenav-dark .sb-sidenav-menu .sb-sidenav-menu-heading {
                color: rgba(255, 255, 255, 0.7);
                font-weight: 600;
                text-transform: uppercase;
                font-size: 0.75rem;
                padding-top: 1rem;
            }

            .sb-sidenav-dark .sb-sidenav-menu .nav-link {
                color: #ffffff;
                transition: all 0.2s ease;
            }

            .sb-sidenav-dark .sb-sidenav-menu .nav-link:hover {
                color: #ffc107;
                background-color: rgba(255, 255, 255, 0.1);
                border-radius: 0.375rem;
            }

            .sb-sidenav-dark .sb-nav-link-icon {
                color: #ffffff;
            }

            .sb-sidenav-dark .sb-sidenav-footer {
                background-color: rgba(0, 0, 0, 0.15);
                color: #fff;
            }

            .sb-sidenav-dark .sb-sidenav-menu .nav-link.active {
                color: #fff;
                font-weight: 600;
                background-color: #323a82;
                border-left: 4px solid #ffc107;
            }
        </style>
    @endif

    {{-- @if (auth()->user()->role == 'Pemilik Bazar')
        <style>
            .sb-sidenav-dark {
                background-color: #365460;
                color: #fff;
            }

            .sb-sidenav-dark .sb-sidenav-menu .sb-sidenav-menu-heading {
                color: rgba(255, 255, 255, 0.7);
                font-weight: 600;
                text-transform: uppercase;
                font-size: 0.75rem;
                padding-top: 1rem;
            }

            .sb-sidenav-dark .sb-sidenav-menu .nav-link {
                color: #ffffff;
                transition: all 0.2s ease;
            }

            .sb-sidenav-dark .sb-sidenav-menu .nav-link:hover {
                color: #ffc107;
                background-color: rgba(255, 255, 255, 0.1);
                border-radius: 0.375rem;
            }

            .sb-sidenav-dark .sb-nav-link-icon {
                color: #ffffff;
            }

            .sb-sidenav-dark .sb-sidenav-footer {
                background-color: rgba(0, 0, 0, 0.15);
                color: #fff;
            }

            .sb-sidenav-dark .sb-sidenav-menu .nav-link.active {
                color: #fff;
                font-weight: 600;
                background-color: #253946;
                border-left: 4px solid #ffc107;
            }
        </style>
    @endif --}}

    <style>
        .select2-container {
            width: 100% !important;
        }
        
        /* Cream navbar styling - more specific selectors */
        .sb-topnav.navbar-light .navbar-brand {
            color: #333 !important;
            font-weight: 600 !important;
        }
        
        .sb-topnav.navbar-light .navbar-nav .nav-link {
            color: #333 !important;
            font-weight: 500 !important;
        }
        
        .sb-topnav.navbar-light .navbar-nav .nav-link:hover {
            color: #F57C1F !important;
            background-color: rgba(245, 124, 31, 0.1) !important;
            border-radius: 4px !important;
        }
        
        .sb-topnav.navbar-light .btn-link {
            color: #333 !important;
            font-size: 1.1rem !important;
        }
        
        .sb-topnav.navbar-light .btn-link:hover {
            color: #F57C1F !important;
            background-color: rgba(245, 124, 31, 0.1) !important;
        }
        
        .sb-topnav.navbar-light .btn-link:focus {
            color: #F57C1F !important;
            box-shadow: none !important;
        }
        
        /* Dropdown menu styling */
        .sb-topnav .dropdown-menu {
            background-color: #fff !important;
            border: 1px solid #ddd !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
        }
        
        .sb-topnav .dropdown-item {
            color: #333 !important;
        }
        
        .sb-topnav .dropdown-item:hover {
            background-color: #F57C1F !important;
            color: #fff !important;
        }
    </style>

</head>

<body class="sb-nav-fixed">
    <nav
        class="sb-topnav navbar navbar-expand navbar-light" style="background-color: #F5F5DC !important;">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ url('panel') }}">PONDASI</a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Right -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    {{-- <li><a class="dropdown-item" href="{{ url('panel/profile') }}">Profile</a></li> --}}
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ url('logout') }}"
                            onclick="return confirm('Apakah anda yakin ingin keluar?')">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link {{ Request::is('panel') ? 'active' : '' }}" href="{{ url('panel') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        @if (auth()->user()->role == 'Admin')
                            <div class="sb-sidenav-menu-heading">Master Data</div>
                            <a class="nav-link {{ Request::is('panel/portofolio*') ? 'active' : '' }}"
                                href="{{ url('panel/portofolio') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Portofolio
                            </a>
                            {{-- <a class="nav-link {{ Request::is('panel/kategori*') ? 'active' : '' }}"
                                href="{{ url('panel/kategori') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Data Kategori
                            </a> --}}
                            <a class="nav-link {{ Request::is('panel/layananrumah*') ? 'active' : '' }}"
                                href="{{ url('panel/layananrumah') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Data Layanan Rumah
                            </a>
                            <a class="nav-link {{ Request::is('panel/layananinterior*') ? 'active' : '' }}"
                                href="{{ url('panel/layananinterior') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Data Layanan Interior
                            </a>
                        @endif

                        {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                            </nav>
                        </div> --}}
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as: {{ auth()->user()->role }}</div>
                    PONDASI
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>

                @yield('content')

            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Pondasi {{ date('Y') }}</div>
                        {{-- <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div> --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/admin') }}/assets/demo/chart-area-demo.js"></script>
    <script src="{{ asset('assets/admin') }}/assets/demo/chart-bar-demo.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Select2 biasa
            $('.select2').select2();

            // Select2 khusus modal
            $('.select2modal').select2({
                dropdownParent: $('#modalTambah')
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                responsive: true,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json"
                }
            });
        });
    </script>

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
