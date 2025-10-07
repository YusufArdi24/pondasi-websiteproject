@extends('layouts.home')

@section('content')
    {{-- Hero --}}
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/foto/bg.png') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">{{ $portofolio->judul }}</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/portofolio') }}">Portofolio</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">{{ $portofolio->judul }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    {{-- Detail Portofolio --}}
    <div class="section py-5">
        <div class="container">
            <div class="row justify-content-between g-4">
                <div class="col-lg-8">
                    {{-- Foto Utama --}}
                    <div class="mb-4">
                        <div class="border rounded-3 overflow-hidden shadow-sm">
                            <img src="{{ asset('storage/portofolio/' . $portofolio->foto) }}" alt="{{ $portofolio->judul }}"
                                class="img-fluid w-100" style="height: 400px; object-fit: cover;" />
                        </div>
                    </div>

                    {{-- Tanggal --}}
                    <p class="text-muted mb-3">
                        <i class="bi bi-calendar-event me-2"></i>
                        {{ \Carbon\Carbon::parse($portofolio->tanggal)->translatedFormat('d F Y') }}
                    </p>

                    {{-- Deskripsi --}}
                    <div class="mb-4">
                        <h4 class="fw-semibold mb-3" style="color: #F57C1F;">Deskripsi</h4>
                        <div class="bg-light p-4 rounded-3 border-start border-4" style="border-color: #F57C1F !important;">
                            <div class="text-dark">{!! $portofolio->deskripsi !!}</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    {{-- Info Tambahan --}}
                    <div class="card border-0 shadow-sm">
                        <div class="card-header text-white py-3" style="background-color: #F57C1F;">
                            <h3 class="card-title mb-0 fw-bold">{{ $portofolio->judul }}</h3>
                            <small class="opacity-75">Portofolio</small>
                        </div>

                        <div class="card-body">
                            <p class="mb-0 text-secondary">
                                Detail portofolio kami yang telah dikerjakan pada tanggal
                                <strong>{{ \Carbon\Carbon::parse($portofolio->tanggal)->translatedFormat('d F Y') }}</strong>.
                            </p>
                        </div>

                        <div class="card-footer bg-white border-top-0 pt-0">
                            <a href="{{ url('/portfolio') }}" class="btn w-100" style="color: #F57C1F; border-color: #F57C1F; background-color: transparent; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#F57C1F'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#F57C1F';">
                                <i class="bi bi-arrow-left me-2"></i>Kembali ke Portofolio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
