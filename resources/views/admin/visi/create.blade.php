<!-- resources/views/admin/visi/create.blade.php -->
@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h4>Tambah Visi</h4>
    <form action="{{ route('admin.visi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <textarea name="konten" class="form-control" rows="7"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.visi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
