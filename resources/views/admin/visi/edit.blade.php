@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Edit Visi</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.visi.update', $visi->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <textarea name="konten" id="konten" class="form-control" rows="5">{{ old('konten', $visi->konten) }}</textarea>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('admin.visi.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    ClassicEditor
        .create(document.querySelector('#konten'))
        .catch(error => console.error(error));
</script>
@endsection
