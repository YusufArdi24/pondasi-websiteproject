@extends('layouts.panel')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Profil Saya</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('panel') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Profil</li>
        </ol>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-user me-1"></i> Edit Profil
            </div>
            <div class="card-body">
                <form action="{{ url('panel/profilesimpan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name', $profile->name) }}" class="form-control"
                            required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ old('email', $profile->email) }}"
                            class="form-control" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Field tambahan kalau role Pemilik Bazar --}}
                    @if ($profile->role == 'Pemilik Bazar')
                        <div class="mb-3">
                            <label class="form-label">Nama Organisasi</label>
                            <input type="text" name="namaorganisasi"
                                value="{{ old('namaorganisasi', $profile->namaorganisasi) }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No HP</label>
                            <input type="text" name="nohp" value="{{ old('nohp', $profile->nohp) }}"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3">{{ old('alamat', $profile->alamat) }}</textarea>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Foto Profil</label><br>
                        @if ($profile->fotoprofile)
                            <img src="{{ asset('storage/users/' . $profile->fotoprofile) }}" width="100"
                                class="mb-2 rounded">
                        @endif
                        <input type="file" name="fotoprofile" class="form-control">
                        <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
                        @error('fotoprofile')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Password Baru</label>
                            <input type="password" name="password" class="form-control"
                                placeholder="Kosongkan jika tidak ingin ganti">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Ulangi password baru">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
