@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Beasiswa</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.beasiswa.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="batas_pendaftaran">Batas Pendaftaran</label>
                        <input type="date" class="form-control" id="batas_pendaftaran" name="batas_pendaftaran" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                        <a href="{{ route('admin.beasiswa.index') }}" class="btn btn-secondary mt-2">Batal</a>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
   ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .catch(error => console.error(error));
</script>
@endsection
