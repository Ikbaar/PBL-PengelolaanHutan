<!-- resources/views/admin/misi/create.blade.php -->
@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h4>Tambah Misi</h4>
    <form action="{{ route('admin.misi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Konten Misi</label>
            <textarea name="konten" class="form-control" rows="7"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.misi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
