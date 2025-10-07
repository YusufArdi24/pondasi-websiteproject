@extends('layouts.panel')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Layanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('panel') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('panel/layananrumah') }}">Layanan</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>

        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('panel/layananrumahupdate/' . $layanan->idlayanan) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control"
                            value="{{ old('judul', $layanan->judul) }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5">{{ old('deskripsi', $layanan->deskripsi) }}</textarea>
                        <script>
                            CKEDITOR.replace('deskripsi');
                        </script>
                    </div>
                    <div class="mb-3">
                        <label>Lokasi</label>
                        <input type="text" name="lokasi" class="form-control"
                            value="{{ old('lokasi', $layanan->lokasi) }}">
                    </div>
                    <div class="mb-3">
                        <label>Luas (m<sup>2</sup>)</label>
                        <input type="text" name="luas" class="form-control" value="{{ old('luas', $layanan->luas) }}">
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Jumlah Kamar</label>
                            <input type="number" name="jumlahkamar" class="form-control"
                                value="{{ old('jumlahkamar', $layanan->jumlahkamar) }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Jumlah Kamar Mandi</label>
                            <input type="number" name="jumlahkamarmandi" class="form-control"
                                value="{{ old('jumlahkamarmandi', $layanan->jumlahkamarmandi) }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Jumlah Lantai</label>
                            <input type="number" name="jumlahlantai" class="form-control"
                                value="{{ old('jumlahlantai', $layanan->jumlahlantai) }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Gaya Desain</label>
                        <select name="gayadesain" class="form-control">
                            <option value="">-- Pilih --</option>
                            @foreach (['Minimalis', 'Tropis', 'Klasik', 'Modern', 'Javanese'] as $gaya)
                                <option value="{{ $gaya }}"
                                    {{ old('gayadesain', $layanan->gayadesain) == $gaya ? 'selected' : '' }}>
                                    {{ $gaya }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control"
                            value="{{ old('harga', $layanan->harga) }}">
                    </div>
                    <div class="mb-3">
                        <label>Foto (kosongkan jika tidak ganti)</label><br>
                        @if ($layanan->foto)
                            <img src="{{ asset('storage/layanan/' . $layanan->foto) }}" width="100" class="mb-2">
                        @endif
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Foto Denah (kosongkan jika tidak ganti)</label><br>
                        @if ($layanan->fotodenah)
                            <img src="{{ asset('storage/layanan/' . $layanan->fotodenah) }}" width="100" class="mb-2">
                        @endif
                        <input type="file" name="fotodenah" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ url('panel/layananrumah') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
