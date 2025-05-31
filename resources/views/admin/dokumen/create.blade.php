@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Dokumen</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.dokumen.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="file">File PDF</label>
                        <input type="file" name="file" id="file" class="form-control" accept="application/pdf" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="{{ route('admin.dokumen.index') }}" class="btn btn-secondary btn-sm ms-2">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
