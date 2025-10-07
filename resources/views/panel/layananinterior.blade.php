@extends('layouts.panel')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Layanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('panel') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Layanan</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div><i class="fas fa-table me-1"></i> Data Layanan</div>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambah">
                    <i class="fas fa-plus"></i> Tambah Layanan
                </button>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($layanan as $key => $row)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    @if ($row->foto)
                                        <a href="{{ asset('storage/layanan/' . $row->foto) }}" target="_blank">
                                            <img src="{{ asset('storage/layanan/' . $row->foto) }}" width="60">
                                        </a>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>{{ $row->judul }}</td>
                                <td>{!! \Str::words(strip_tags($row->deskripsi), 7, '...') !!}</td>
                                <td>Rp {{ number_format($row->harga, 0, ',', '.') }}</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{ url('panel/layananinterioredit/' . $row->idlayanan) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ url('panel/layananinteriorhapus/' . $row->idlayanan) }}"
                                            method="POST" onsubmit="return confirm('Yakin mau hapus data ini?');">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ url('panel/layananinteriorsimpan') }}" method="POST" enctype="multipart/form-data"
                class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Layanan Interior</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                        @error('judul')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="5"></textarea>
                        @error('deskripsi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <script>
                            CKEDITOR.replace('deskripsi');
                        </script>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Ruangan</label>
                        <select name="jenisruangan" id="jenisruangan" class="form-control">
                            <option value="" selected disabled>-- Pilih Jenis Ruangan --</option>
                            <option value="Living Room">Living Room</option>
                            <option value="Bedroom">Bedroom</option>
                            <option value="Kitchen Set">Kitchen Set</option>
                        </select>
                        @error('jenisruangan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Tipe</label>
                        <select name="tipe" class="form-control" required>
                            <option value="">-- Pilih Tipe --</option>
                            <option value="Tipe 36">Tipe 36</option>
                            </option>
                            <option value="Tipe 45">Tipe 45</option>
                            </option>
                        </select>
                        @error('tipe')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Gaya Desain</label>
                        <select name="tipe" class="form-control" required>
                            <option value="">-- Pilih Gaya Desain --</option>
                            <option value="Deluxe Desain">Deluxe Desain</option>
                            </option>
                            <option value="Premium Desain">Premium Desain</option>
                            </option>
                        </select>
                        @error('tipe')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" required>
                        @error('harga')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control" required>
                        @error('foto')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
@endsection
