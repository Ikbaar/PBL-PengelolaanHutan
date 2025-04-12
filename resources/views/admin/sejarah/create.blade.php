@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Sejarah</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.sejarah.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="konten">Konten</label>
                        <textarea name="konten" id="konten" class="form-control" rows="7">{{ old('konten') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Simpan</button>
                    <a href="{{ route('admin.sejarah.index') }}" class="btn btn-secondary mt-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#konten'))
        .catch(error => console.error(error));
</script>
@endsection
