@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Edit PLP</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.plp.update', $plp->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $plp->nama }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" id="nip" class="form-control" value="{{ $plp->nip }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="posisi">Posisi</label>
                        <input type="text" name="posisi" id="posisi" class="form-control" value="{{ $plp->posisi }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.plp.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
