@extends('layouts.dashboard')

@section('content')
<div class="container mt-4">
    <h3>Tambah Dosen</h3>

    <form action="{{ route('admin.dosen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ old('nip') }}">
            @error('nip') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="photo" class="form-control">
            @error('photo') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.dosen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
