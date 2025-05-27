@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Beasiswa</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.beasiswa.update', $beasiswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group mb-3">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control" value="{{ $beasiswa->judul }}" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control" required>{{ $beasiswa->deskripsi }}</textarea>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="batas_pendaftaran">Batas Pendaftaran</label>
                            <input type="date" name="batas_pendaftaran" id="batas_pendaftaran" class="form-control" value="{{ $beasiswa->batas_pendaftaran->format('Y-m-d') }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        <a href="{{ route('admin.beasiswa.index') }}" class="btn btn-secondary btn-sm ms-2">Batal</a>
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
