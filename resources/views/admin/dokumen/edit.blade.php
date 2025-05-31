@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Dokumen</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.dokumen.update', $dokumen->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" value="{{ $dokumen->judul }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $dokumen->deskripsi }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="file">File PDF (Kosongkan jika tidak diganti)</label>
                        <input type="file" name="file" id="file" class="form-control" accept="application/pdf">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    <a href="{{ route('admin.dokumen.index') }}" class="btn btn-secondary btn-sm ms-2">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
