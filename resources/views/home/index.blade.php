@extends('layouts.home')

@section('content')
    <style>
        .property-thumb {
            width: 400px;
            height: 400px;
            /* atur tinggi lebih kecil */
            overflow: hidden;
            border-radius: 8px;
        }

        .property-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* crop supaya proporsional */
            display: block;
        }

        .property-content {
            min-height: 140px;
            /* opsional: agar konten teks rata */
        }

        .property-item {
            box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
            border-radius: 8px !important;
            overflow: hidden !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease !important;
        }

        .property-item:hover {
            transform: translateY(-5px) !important;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2) !important;
        }


        .controls {
            position: absolute;
            width: 100%;
            bottom: 64px;
        }

        .controls span {
            display: inline-block;
            cursor: pointer;
            padding: 7px 20px;
            border-radius: 30px;
            background: rgba(245, 124, 31, 0.1);
            color: #F57C1F;
            text-align: center;
            transition: .3s all ease;
        }

        .controls span:hover,
        .controls span.active {
            background: #F57C1F;
            color: #fff !important;
        }

        .controls .prev,
        .controls .next {
            position: absolute;
            cursor: pointer;
        }

        .controls .prev {
            left: 0;
        }

        .controls .next {
            right: 0;
        }

        .tns-nav {
            display: none !important;
        }
    </style>

    <div class="hero">
        <div class="hero-slide">
            <div class="img overlay" style="background-image: url('{{ asset('assets/foto/bg.png') }}')"></div>
            {{-- <div class="img overlay" style="background-image: url('{{ asset('assets/foto/bg.png') }}')"></div>
            <div class="img overlay" style="background-image: url('{{ asset('assets/foto/bg.png') }}')"></div> --}}
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">
                        Kami bantu wujudkan rumah impianmu dari nol, secara kolaboratif & profesional.
                    </h1>
                    <a href="{{ url('tentang') }}" class="btn btn-warning" data-aos="fade-up">Tentang Kami</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Layanan Rumah --}}
    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold heading" style="color: #F57C1F;">
                        Layanan Rumah
                    </h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        <a href="{{ url('layanan/1') }}" class="btn btn-primary text-white py-3 px-4">View all
                            properties</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider property-slider-rumah">
                            @foreach ($layananrumah as $layanan)
                                <div class="property-item">
                                    <a href="{{ url('layanandetail/' . $layanan->idlayanan) }}" class="img d-block">
                                        <div class="property-thumb">
                                            <img src="{{ asset('storage/layanan/' . $layanan->foto) }}"
                                                alt="{{ $layanan->judul }}">
                                        </div>
                                    </a>

                                    <div class="property-content">
                                        <div class="price mb-2">
                                            <span style="color: #F57C1F;">Rp {{ number_format($layanan->harga, 0, ',', '.') }}</span>
                                        </div>
                                        <div>
                                            <span class="d-block mb-2 text-black-50">
                                                {{ Str::limit(strip_tags($layanan->deskripsi), 60) }}
                                            </span>
                                            <span class="city d-block mb-3">{{ $layanan->judul }}</span>

                                            <a href="{{ url('layanandetail/' . $layanan->idlayanan) }}"
                                                class="btn btn-warning py-2 px-3">See details</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div id="property-nav-rumah" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Layanan Interior --}}
    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold heading" style="color: #F57C1F;">
                        Layanan Interior
                    </h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        <a href="{{ url('layanan/2') }}" class="btn btn-primary text-white py-3 px-4">View all
                            properties</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider property-slider-interior">
                            @foreach ($layananinterior as $layanan)
                                <div class="property-item">
                                    <a href="{{ url('layanandetail/' . $layanan->idlayanan) }}" class="img d-block">
                                        <div class="property-thumb">
                                            <img src="{{ asset('storage/layanan/' . $layanan->foto) }}"
                                                alt="{{ $layanan->judul }}">
                                        </div>
                                    </a>

                                    <div class="property-content">
                                        <div class="price mb-2">
                                            <span style="color: #F57C1F;">Rp {{ number_format($layanan->harga, 0, ',', '.') }}</span>
                                        </div>
                                        <div>
                                            <span class="d-block mb-2 text-black-50">
                                                {{ Str::limit(strip_tags($layanan->deskripsi), 60) }}
                                            </span>
                                            <span class="city d-block mb-3">{{ $layanan->judul }}</span>

                                            <a href="{{ url('layanandetail/' . $layanan->idlayanan) }}"
                                                class="btn btn-warning py-2 px-3">See details</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div id="property-nav-interior" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-1">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="flaticon-house"></span>
                        <h3 class="mb-3">Desain Rumah</h3>
                        <p>Kami menyediakan jasa desain rumah sesuai kebutuhan Anda.</p>
                        <p><a href="{{ url('layanan/1') }}" class="learn-more">Lihat Layanan</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <span class="flaticon-building"></span>
                        <h3 class="mb-3">Desain Interior</h3>
                        <p>Jasa desain interior profesional untuk hunian & kantor.</p>
                        <p><a href="{{ url('layanan/2') }}" class="learn-more">Lihat Layanan</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="flaticon-house-3"></span>
                        <h3 class="mb-3">Konsultasi Gratis</h3>
                        <p>Dapatkan konsultasi awal gratis dari tim kami.</p>
                        <p><a href="{{ url('kontak') }}" class="learn-more">Hubungi Kami</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <span class="flaticon-house-1"></span>
                        <h3 class="mb-3">Tim Profesional</h3>
                        <p>Tim arsitek & desainer interior berpengalaman.</p>
                        <p><a href="{{ url('tentang') }}" class="learn-more">Pelajari Lebih Lanjut</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section section-4 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-5">
                    <h2 class="font-weight-bold heading mb-4" style="color: #F57C1F;">
                        Temukan Layanan Rumah & Interior Terbaik
                    </h2>
                    <p class="text-black-50">
                        Kami membantu Anda mewujudkan rumah idaman dengan layanan desain dan interior profesional.
                    </p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="{{ asset('assets/foto/bg.png') }}" alt="Layanan Rumah & Interior" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading" style="color: #ff7b00;">Ratusan Proyek Rumah</h3>
                            <p class="text-black-50">Kami telah menangani banyak proyek rumah di berbagai kota.</p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading" style="color: #ff7b00;">Desain Interior Top </h3>
                            <p class="text-black-50">Tim desainer interior berpengalaman dan kreatif.</p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading" style="color: #ff7b00;">Layanan Terpercaya </h3>
                            <p class="text-black-50">Keamanan & legalitas layanan kami terjamin.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row section-counter mt-5">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup" style="color: #F57C1F;">150</span></span>
                        <span class="caption text-black-50">Proyek Rumah</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup" style="color: #F57C1F;">120</span></span>
                        <span class="caption text-black-50">Proyek Interior</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup" style="color: #F57C1F;">270</span></span>
                        <span class="caption text-black-50">Total Layanan</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup" style="color: #F57C1F;">50</span></span>
                        <span class="caption text-black-50">Tim Profesional</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="row justify-content-center footer-cta" data-aos="fade-up">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="mb-4">Temukan Layanan Rumah & Interior Terbaik</h2>
                <p>
                    <a href="{{ url('kontak') }}" class="btn btn-primary text-white py-3 px-4">
                        Hubungi Kami
                    </a>
                </p>
            </div>
            <!-- /.col-lg-7 -->
        </div>
        <!-- /.row -->
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            if (document.querySelector('.property-slider-rumah')) {
                tns({
                    container: '.property-slider-rumah',
                    mode: 'carousel',
                    speed: 700,
                    gutter: 30,
                    items: 3,
                    autoplay: true,
                    autoplayButtonOutput: false,
                    controlsContainer: '#property-nav-rumah',
                    nav: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        700: {
                            items: 2
                        },
                        900: {
                            items: 3
                        }
                    }
                });
            }

            if (document.querySelector('.property-slider-interior')) {
                tns({
                    container: '.property-slider-interior',
                    mode: 'carousel',
                    speed: 700,
                    gutter: 30,
                    items: 3,
                    autoplay: true,
                    autoplayButtonOutput: false,
                    controlsContainer: '#property-nav-interior',
                    nav: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        700: {
                            items: 2
                        },
                        900: {
                            items: 3
                        }
                    }
                });
            }

        });
    </script>
@endsection
