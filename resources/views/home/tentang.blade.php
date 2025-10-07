@extends('layouts.home')

@section('content')
    {{-- Hero --}}
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/foto/bg.png') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Tentang Kami</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">Tentang Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    {{-- Section Profil Perusahaan --}}
    <div class="section">
        <div class="container">
            <div class="row text-left mb-5">
                <div class="col-12">
                    <h2 class="font-weight-bold heading mb-4" style="color: #F57C1F;">Siapa Kami</h2>
                </div>
                <div class="col-lg-6">
                    <p class="text-black-50">
                        Kami adalah tim profesional di bidang desain rumah dan interior yang berpengalaman
                        menangani berbagai proyek hunian, kantor, dan ruang publik. Kami berkomitmen menghadirkan
                        ruang yang indah, fungsional dan sesuai kebutuhan klien.
                    </p>
                    <p class="text-black-50">
                        Dengan pendekatan kreatif dan inovatif, kami siap membantu Anda mewujudkan rumah impian
                        serta interior yang nyaman dan estetik.
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-black-50">
                        Layanan kami meliputi: desain rumah baru, renovasi, desain interior, pemilihan material,
                        hingga pengawasan pembangunan. Kami selalu menjaga kualitas dan kepuasan pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Section Keunggulan --}}
    <div class="section pt-0">
        <div class="container">
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="{{ asset('assets/foto/bg.png') }}" alt="Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3"><span class="icon-home2"></span></span>
                        <div class="feature-text">
                            <h3 class="heading">Desain Berkualitas</h3>
                            <p class="text-black-50">
                                Konsep dan eksekusi desain rumah & interior yang elegan, modern, dan fungsional.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3"><span class="icon-person"></span></span>
                        <div class="feature-text">
                            <h3 class="heading">Tim Profesional</h3>
                            <p class="text-black-50">
                                Dikerjakan oleh arsitek dan desainer interior berpengalaman.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3"><span class="icon-security"></span></span>
                        <div class="feature-text">
                            <h3 class="heading">Proses Aman & Terpercaya</h3>
                            <p class="text-black-50">
                                Kami mengutamakan transparansi dan kualitas di setiap proyek.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
