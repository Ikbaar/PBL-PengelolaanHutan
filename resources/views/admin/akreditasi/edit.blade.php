@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Edit Akreditasi</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.akreditasi.update', $akreditasi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ $akreditasi->judul }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ $akreditasi->deskripsi }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="sertifikat">Sertifikat</label>
                        <input type="file" class="form-control" id="sertifikat" name="sertifikat" accept="image/*">
                        @if($akreditasi->sertifikat_path)
                        <img src="{{ asset('storage/'.$akreditasi->sertifikat_path) }}" alt="Sertifikat" width="100" class="mt-2 rounded shadow">
                        @endif
                        <small class="form-text text-muted">
                            Format gambar disarankan: <strong>1:1</strong>, atau <strong>16:9</strong>. Kosongkan jika tidak ingin mengubah.
                        </small>
                    </div>

                    <button type="submit" class="btn btn-primary">Perbarui</button>
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
