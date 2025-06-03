@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ubah Berita</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if($berita->image)
                                <div class="mt-2">
                                    <label for="current-image-path" class="form-label">Path Gambar Saat Ini:</label>
                                    <input type="text" class="form-control" id="current-image-path" value="{{ Storage::url($berita->image) }}" readonly>
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="editor" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $berita->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="editor" class="form-label">Deskripsi</label>
                            <div id="editor">
                                {!! old('description', $berita->description) !!}
                            </div>
                            <input type="hidden" name="description" id="description">
                        </div>
                        <div class="mb-3">
                            <label for="date">Tanggal</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $berita->date) }}">
                        </div>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

