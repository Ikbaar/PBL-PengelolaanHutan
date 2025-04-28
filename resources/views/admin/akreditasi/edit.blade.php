@extends('layouts.dashboard')

@section('content')
<div class="container mt-4">
    <h3>Edit Akreditasi</h3>

    <form action="{{ route('admin.akreditasi.update', $akreditasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $akreditasi->judul }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ $akreditasi->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="sertifikat" class="form-label">Sertifikat</label>
            <input type="file" class="form-control" id="sertifikat" name="sertifikat" accept="image/*">
            @if($akreditasi->sertifikat_path)
            <img src="{{ asset('storage/'.$akreditasi->sertifikat_path) }}" alt="Sertifikat" width="100" class="mt-2 rounded shadow">
            @endif
            <small class="form-text text-muted">
                Format gambar disarankan: <strong>1:1</strong>, atau <strong>16:9</strong>. Kosongkan jika tidak ingin mengubah.
            </small>
        </div>

        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ route('admin.akreditasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script>
    ClassicEditor.create(document.querySelector('#deskripsi')).catch(error => console.error(error));
</script>
@endsection
