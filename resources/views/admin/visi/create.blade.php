@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Visi</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.visi.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="konten">Konten</label>
                        <textarea name="konten" id="konten" class="form-control" rows="7">{{ old('konten') }}</textarea>
                        @error('konten') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <a href="{{ route('admin.visi.index') }}" class="btn btn-secondary ms-2">Kembali</a>

                    <button type="submit" class="btn btn-primary">Simpan</button>
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
