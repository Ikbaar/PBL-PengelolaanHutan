<!-- resources/views/admin/plp/edit.blade.php -->

@extends('layouts.dashboard')

@section('content')
<div class="container mt-4">
    <h3>Edit PLP</h3>

    <form action="{{ route('admin.plp.update', $plp->id) }}" method="POST">
    @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $plp->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" name="nip" id="nip" class="form-control" value="{{ $plp->nip }}" required>
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <input type="text" name="posisi" id="posisi" class="form-control" value="{{ $plp->posisi }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.plp.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
