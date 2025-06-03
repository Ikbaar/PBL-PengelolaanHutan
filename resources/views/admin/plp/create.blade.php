@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Tambah PLP</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.plp.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" id="nip" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="posisi">Posisi</label>
                        <input type="text" name="posisi" id="posisi" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('admin.plp.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
