@extends('layouts.home')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('assets/foto/bg.png') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Layanan {{ $namakategori }}</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Layanan {{ $namakategori }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="section section-properties">
        <div class="container">

            {{-- Filter --}}
            <form method="GET" action="{{ url('layanan/' . $idkategori) }}" class="mb-4">
                <div class="row g-2">

                    {{-- Filter gaya desain --}}
                    <div class="col-md-3">
                        <label class="form-label small">Gaya Desain</label>
                        <select name="gayadesain" class="form-select">
                            <option value="">Semua</option>
                            @if ($idkategori == 1)
                                <option value="Minimalis" {{ request('gayadesain') == 'Minimalis' ? 'selected' : '' }}>
                                    Minimalis</option>
                                <option value="Tropis" {{ request('gayadesain') == 'Tropis' ? 'selected' : '' }}>Tropis
                                </option>
                                <option value="Klasik" {{ request('gayadesain') == 'Klasik' ? 'selected' : '' }}>Klasik
                                </option>
                                <option value="Modern" {{ request('gayadesain') == 'Modern' ? 'selected' : '' }}>Modern
                                </option>
                                <option value="Javanese" {{ request('gayadesain') == 'Javanese' ? 'selected' : '' }}>
                                    Javanese
                                </option>
                            @else
                                <option value="Deluxe Desain"
                                    {{ request('gayadesain') == 'Deluxe Desain' ? 'selected' : '' }}>Deluxe
                                    Desain</option>
                                <option value="Premium Desain"
                                    {{ request('gayadesain') == 'Premium Desain' ? 'selected' : '' }}>Premium
                                    Desain</option>
                            @endif
                        </select>
                    </div>

                    @if ($idkategori == 1)
                        <div class="col-md-2">
                            <label class="form-label small">Jumlah Lantai</label>
                            <select name="jumlahlantai" class="form-select">
                                <option value="">Semua</option>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}"
                                        {{ request('jumlahlantai') == $i ? 'selected' : '' }}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label small">Jumlah Kamar</label>
                            <select name="jumlahkamar" class="form-select">
                                <option value="">Semua</option>
                                @for ($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}"
                                        {{ request('jumlahkamar') == $i ? 'selected' : '' }}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label small">Jumlah Kamar Mandi</label>
                            <select name="jumlahkamarmandi" class="form-select">
                                <option value="">Semua</option>
                                @for ($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}"
                                        {{ request('jumlahkamarmandi') == $i ? 'selected' : '' }}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                    @endif


                    @if ($idkategori == 2)
                        <div class="col-md-3">
                            <label class="form-label small">Jenis Ruangan</label>
                            <select name="jenisruangan" class="form-select">
                                <option value="">Semua</option>
                                <option value="Living Room"
                                    {{ request('jenisruangan') == 'Living Room' ? 'selected' : '' }}>
                                    Living Room
                                </option>
                                <option value="Bedroom" {{ request('jenisruangan') == 'Bedroom' ? 'selected' : '' }}>
                                    Bedroom
                                </option>
                                <option value="Kitchen Set"
                                    {{ request('jenisruangan') == 'Kitchen Set' ? 'selected' : '' }}>
                                    Kitchen Set
                                </option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label small">Tipe</label>
                            <select name="tipe" class="form-select">
                                <option value="">Semua</option>
                                <option value="Tipe 36" {{ request('tipe') == 'Tipe 36' ? 'selected' : '' }}>Tipe 36
                                </option>
                                <option value="Tipe 45" {{ request('tipe') == 'Tipe 45' ? 'selected' : '' }}>Tipe 45
                                </option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label small">Harga</label>
                            <select name="harga" class="form-select">
                                <option value="">Semua</option>
                                <option value="bawah" {{ request('harga') == 'bawah' ? 'selected' : '' }}>Di bawah 10 juta
                                </option>
                                <option value="atas" {{ request('harga') == 'atas' ? 'selected' : '' }}>Di atas 10 juta
                                </option>
                            </select>
                        </div>
                    @endif

                    <div class="col-md-2 align-self-end">
                        <button type="submit" class="btn btn-warning w-100">Filter</button>
                    </div>
                </div>
            </form>
            <div class="row">
                @php
                    use Illuminate\Support\Str;
                @endphp

                @forelse ($layanan as $item)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 shadow-lg border-0" style="box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;">
                            <div class="ratio ratio-4x3">
                                <img src="{{ asset('storage/layanan/' . $item->foto) }}" alt="{{ $item->nama }}"
                                    class="img-fluid object-fit-cover rounded-top">
                            </div>

                            <div class="card-body d-flex flex-column">
                                {{-- Judul dibatasi 50 karakter --}}
                                <h6 class="mb-2" style="color: #F57C1F;">
                                    {{ Str::limit($item->judul, 50) }}
                                </h6>

                                <h6 class="mb-2" style="color: #F57C1F;">
                                    Rp. {{ number_format($item->harga, 0, ',', '.') }}
                                </h6>

                                {{-- Deskripsi dibatasi 100 karakter --}}
                                <p class="mb-1 text-muted small">
                                    {!! Str::limit($item->deskripsi, 100) !!}
                                </p>

                                <span class="text-secondary small mb-3">{{ $item->lokasi }}</span>

                                {{-- tampilkan ikon hanya jika kategori id = 1 --}}
                                @if ($item->kategori && $item->kategori->idkategori == 1)
                                    <div class="d-flex flex-wrap mb-3 text-muted small">
                                        <div class="me-3">
                                            <i class="fa fa-ruler-combined me-1"></i>{{ $item->luas }} m²
                                        </div>
                                        <div class="me-3">
                                            <i class="fa fa-bed me-1"></i>{{ $item->jumlahkamar }} Kamar
                                        </div>
                                        <div class="me-3">
                                            <i class="fa fa-bath me-1"></i>{{ $item->jumlahkamarmandi }} Kamar Mandi
                                        </div>
                                        <div class="me-3">
                                            <i class="fa fa-layer-group me-1"></i>{{ $item->jumlahlantai }} Lantai
                                        </div>
                                    </div>
                                @endif

                                <div class="mt-auto">
                                    <a href="{{ url('layanandetail/' . $item->idlayanan) }}"
                                        class="btn btn-warning btn-sm">
                                        Lihat detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p>Tidak ada layanan.</p>
                    </div>
                @endforelse

            </div>

            {{-- Pagination --}}
            <div class="row align-items-center py-5">
                <div class="col-lg-12 text-center">
                    {{ $layanan->links('vendor.pagination.custom-pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
