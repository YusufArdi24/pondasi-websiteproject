@extends('layouts.panel')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Layanan Interior</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('panel') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('panel/layananinterior') }}">Layanan Interior</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>

        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('panel/layananinteriorupdate/' . $layanan->idlayanan) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control"
                            value="{{ old('judul', $layanan->judul) }}" required>
                        @error('judul')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="5">{{ old('deskripsi', $layanan->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <script>
                            CKEDITOR.replace('deskripsi');
                        </script>
                    </div>

                    <div class="mb-3">
                        <label>Jenis Ruangan</label>
                        <select name="jenisruangan" class="form-control" required>
                            <option value="">-- Pilih Jenis Ruangan --</option>
                            <option value="Living Room" @selected($layanan->jenisruangan == 'Living Room')>Living Room</option>
                            <option value="Bedroom" @selected($layanan->jenisruangan == 'Bedroom')>Bedroom</option>
                            <option value="Kitchen Set" @selected($layanan->jenisruangan == 'Kitchen Set')>Kitchen Set</option>
                        </select>
                        @error('jenisruangan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Gaya Desain</label>
                        <select name="gayadesain" class="form-control" required>
                            <option value="">-- Pilih Gaya Desain --</option>
                            <option value="Deluxe Desain" @selected($layanan->gayadesain == 'Deluxe Desain')>Deluxe Desain</option>
                            <option value="Premium Desain" @selected($layanan->gayadesain == 'Premium Desain')>Premium Desain</option>
                        </select>
                        @error('tipe')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Tipe</label>
                        <select name="tipe" class="form-control" required>
                            <option value="">-- Pilih Tipe --</option>
                            <option value="Tipe 36" @selected($layanan->tipe == 'Tipe 36')>Tipe 36</option>
                            <option value="Tipe 45" @selected($layanan->tipe == 'Tipe 45')>Tipe 45</option>
                        </select>
                        @error('tipe')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control"
                            value="{{ old('harga', $layanan->harga) }}" required>
                        @error('harga')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Foto</label><br>
                        @if ($layanan->foto)
                            <img src="{{ asset('storage/layanan/' . $layanan->foto) }}" width="100" class="mb-2"><br>
                        @endif
                        <input type="file" name="foto" class="form-control">
                        @error('foto')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <small class="text-muted">Kosongkan jika tidak ingin mengganti foto</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ url('panel/layananinterior') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
