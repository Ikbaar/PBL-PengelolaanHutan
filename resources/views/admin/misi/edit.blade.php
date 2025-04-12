@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Edit Misi</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.misi.update', $misi->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <textarea name="konten" id="konten" class="form-control" rows="5">{{ old('konten', $misi->konten) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.misi.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
