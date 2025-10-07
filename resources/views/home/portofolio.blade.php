@extends('layouts.home')

@section('content')
    {{-- Hero / breadcrumb --}}
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/foto/bg.png') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Portofolio</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">Portofolio</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    {{-- List portofolio --}}
    <div class="section section-properties py-5">
        <div class="container">
            <div class="row">
                @forelse ($portofolio as $item)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 shadow-sm rounded-4 overflow-hidden">
                            <a href="{{ asset('storage/portofolio/' . $item->foto) }}" target="_blank" class="d-block">
                                <div class="ratio ratio-4x3">
                                    <img src="{{ asset('storage/portofolio/' . $item->foto) }}" alt="{{ $item->judul }}"
                                        class="img-fluid w-100 object-fit-cover">
                                </div>
                            </a>

                            <div class="card-body d-flex flex-column">
                                <h5 class="fw-bold mb-1">{{ $item->judul }}</h5>
                                <small class="text-muted d-block mb-2">
                                    <i class="bi bi-calendar-event me-1"></i>
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                </small>
                                <p class="text-secondary mb-2 flex-grow-1" style="min-height: 60px">
                                    {!! \Str::limit($item->deskripsi, 100) !!}
                                </p>

                                <div class="mt-auto">
                                    <a href="{{ url('portfoliodetail/' . $item->idportofolio) }}"
                                        class="btn btn-warning btn-sm">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">Belum ada portofolio.</p>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="row align-items-center py-5">
                <div class="col-lg-12 text-center">
                    {{ $portofolio->links('vendor.pagination.custom-pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
