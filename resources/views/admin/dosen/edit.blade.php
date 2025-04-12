@extends('layouts.dashboard')

@section('content')
<div class="container mt-4">
    <h3>Edit Dosen</h3>

    <form action="{{ route('admin.dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $dosen->name) }}">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ old('nip', $dosen->nip) }}">
            @error('nip') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Foto (biarkan kosong kalau tidak ingin ganti)</label>
            <input type="file" name="photo" class="form-control">
            @error('photo') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        @if ($dosen->photo)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $dosen->photo) }}" width="100">
            </div>
        @endif

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.dosen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
