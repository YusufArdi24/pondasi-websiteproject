@extends('layouts.home')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/foto/bg.png') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">{{ $layanan->judul }}</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">{{ $layanan->judul }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section py-5">
        <div class="container">
            <div class="row justify-content-between g-4">
                <!-- Main Content -->
                <div class="col-lg-7">
                    <!-- Image Section -->
                    <div class="mb-4">
                        <div class="border rounded-3 overflow-hidden shadow-sm">
                            <img src="{{ asset('storage/layanan/' . $layanan->foto) }}" alt="{{ $layanan->judul }}"
                                class="img-fluid w-100" style="height: 400px; object-fit: cover;" />
                        </div>
                    </div>

                    <!-- Floor Plan Button -->
                    @if ($layanan->idkategori == 1 && !empty($layanan->fotodenah))
                        <div class="mb-4">
                            <a href="{{ asset('storage/layanan/' . $layanan->fotodenah) }}" target="_blank"
                                class="btn" style="color: #fff; border-color: #F57C1F; background-color: #F57C1F;">
                                <i class="bi bi-diagram-3 me-2"></i>Lihat Foto Denah
                            </a>
                        </div>
                    @endif

                    <!-- Description Section -->
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <h4 class="mb-0 fw-semibold" style="color: #F57C1F;">Deskripsi</h4>
                        </div>
                        <div class="bg-light p-4 rounded-3 border-start border-4" style="border-color: #F57C1F !important;">
                            <div class="text-dark">{!! $layanan->deskripsi !!}</div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Property Info Card -->
                    <div class="card border-0 shadow-sm">
                        <!-- Header -->
                        <div class="card-header text-white py-3" style="background-color: #F57C1F;">
                            <h3 class="card-title mb-1 fw-bold">{{ $layanan->lokasi }}</h3>
                            <small class="opacity-75">{{ $layanan->judul }}</small>
                        </div>

                        <!-- Price Section (if available) -->
                        @if ($layanan->harga)
                            <div class="bg-light p-3 border-bottom">
                                <div class="text-center">
                                    <small class="text-muted d-block mb-1">Harga</small>
                                    <h4 class="fw-bold mb-0" style="color: #F57C1F;">
                                        Rp {{ number_format($layanan->harga, 0, ',', '.') }}
                                    </h4>
                                </div>
                            </div>
                        @endif

                        <!-- Specifications -->
                        <div class="card-body">
                            <h6 class="fw-semibold mb-3 text-secondary">Spesifikasi</h6>

                            <div class="row g-3">
                                @if ($layanan->luas)
                                    <div class="col-12">
                                        <div class="d-flex align-items-center p-2 bg-light rounded">
                                            <div class="me-3" style="color: #F57C1F;">
                                                <i class="bi bi-rulers"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <small class="text-muted d-block">Luas</small>
                                                <strong>{{ $layanan->luas }} m<sup>2</sup></strong>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($layanan->jumlahkamar)
                                    <div class="col-6">
                                        <div class="d-flex align-items-center p-2 bg-light rounded">
                                            <div class="me-2" style="color: #F57C1F;">
                                                <i class="bi bi-door-closed"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted d-block">Kamar</small>
                                                <strong>{{ $layanan->jumlahkamar }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($layanan->jumlahkamarmandi)
                                    <div class="col-6">
                                        <div class="d-flex align-items-center p-2 bg-light rounded">
                                            <div class="me-2" style="color: #F57C1F;">
                                                <i class="bi bi-water"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted d-block">K. Mandi</small>
                                                <strong>{{ $layanan->jumlahkamarmandi }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($layanan->jumlahlantai)
                                    <div class="col-12">
                                        <div class="d-flex align-items-center p-2 bg-light rounded">
                                            <div class="me-3" style="color: #F57C1F;">
                                                <i class="bi bi-building"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <small class="text-muted d-block">Jumlah Lantai</small>
                                                <strong>{{ $layanan->jumlahlantai }} Lantai</strong>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($layanan->gayadesain)
                                    <div class="col-12">
                                        <div class="d-flex align-items-center p-2 bg-light rounded">
                                            <div class="me-3 text-secondary">
                                                <i class="bi bi-palette"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <small class="text-muted d-block">Gaya Desain</small>
                                                <strong>{{ $layanan->gayadesain }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($layanan->jenisruangan)
                                    <div class="col-12">
                                        <div class="d-flex align-items-center p-2 bg-light rounded">
                                            <div class="me-3 text-dark">
                                                <i class="bi bi-house"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <small class="text-muted d-block">Jenis Ruangan</small>
                                                <strong>{{ $layanan->jenisruangan }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($layanan->tipe)
                                    <div class="col-12">
                                        <div class="d-flex align-items-center p-2 bg-light rounded">
                                            <div class="me-3" style="color: #F57C1F;">
                                                <i class="bi bi-tag"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <small class="text-muted d-block">Tipe</small>
                                                <strong>{{ $layanan->tipe }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        {{-- <div class="card-footer bg-white border-top-0 pt-0">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary">
                                    <i class="bi bi-telephone me-2"></i>Hubungi Kami
                                </button>
                                <button class="btn btn-outline-secondary">
                                    <i class="bi bi-heart me-2"></i>Simpan
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
