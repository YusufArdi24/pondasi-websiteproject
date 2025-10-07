@extends('layouts.home')

@section('content')
    {{-- Hero --}}
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/foto/bg.png') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Hubungi Kami</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">Hubungi Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    {{-- Section Kontak --}}
    <div class="section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center mb-4">
                    <h2 class="font-weight-bold heading" style="color: #F57C1F;">Informasi Kontak</h2>
                    <p class="text-black-50 mb-0">Kami senang mendengar dari Anda. Silakan hubungi kami melalui detail di
                        bawah ini.</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 text-center">
                    <p class="text-muted mb-0">Silakan hubungi kami melalui informasi kontak berikut untuk konsultasi dan layanan terbaik:</p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                {{-- Alamat --}}
                <div class="col-md-5">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body d-flex">
                            <div class="me-3 fs-3" style="color: #F57C1F;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5 class="fw-semibold mb-1" style="color: #F57C1F;">Alamat</h5>
                                <p class="mb-0 text-black-50">Jl. Contoh Alamat No. 123, Kota Anda</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Email --}}
                <div class="col-md-5">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body d-flex">
                            <div class="me-3 fs-3" style="color: #F57C1F;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5 class="fw-semibold mb-1" style="color: #F57C1F;">Email</h5>
                                <p class="mb-0 text-black-50">Pondasi77@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Catatan --}}
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="text-black-50">
                        Kami siap membantu Anda mewujudkan desain rumah dan interior impian.
                        Hubungi kami untuk konsultasi atau informasi lebih lanjut.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
