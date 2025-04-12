<!-- resources/views/admin/plp/create.blade.php -->

@extends('layouts.dashboard')

@section('content')
<div class="container mt-4">
    <h3>Tambah PLP</h3>

    <form action="{{ route('admin.plp.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" name="nip" id="nip" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <input type="text" name="posisi" id="posisi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.plp.index') }}" class="btn btn-secondary">Kembali</a>

    </form>
</div>
@endsection
