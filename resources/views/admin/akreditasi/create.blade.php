@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Tambah Akreditasi</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.akreditasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}" required>
                        @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi') }}</textarea>
                        @error('deskripsi') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="sertifikat">Sertifikat</label>
                        <input type="file" class="form-control" id="sertifikat" name="sertifikat" accept="image/*" required>
                        <small class="form-text text-muted">
                            Disarankan menggunakan gambar dengan rasio <strong>1:1</strong>, atau <strong>16:9</strong> agar tampilan optimal.
                        </small>
                        @error('sertifikat') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('admin.akreditasi.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    ClassicEditor.create(document.querySelector('#deskripsi')).catch(error => console.error(error));
</script>
@endsection
