@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Mata Kuliah</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.kurikulum.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="kode">Kode Mata Kuliah</label>
                        <input type="text" id="kode" name="kode" class="form-control" value="{{ old('kode') }}" required>
                        @error('kode') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="mata_kuliah">Nama Mata Kuliah</label>
                        <input type="text" id="mata_kuliah" name="mata_kuliah" class="form-control" value="{{ old('mata_kuliah') }}" required>
                        @error('mata_kuliah') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="sks">SKS</label>
                        <input type="number" id="sks" name="sks" class="form-control" value="{{ old('sks') }}" required>
                        @error('sks') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="semester">Semester</label>
                        <select id="semester" name="semester" class="form-select" required>
                            @for ($i = 1; $i <= 6; $i++)
                                <option value="{{ $i }}" {{ old('semester') == $i ? 'selected' : '' }}>Semester {{ $i }}</option>
                            @endfor
                        </select>
                        @error('semester') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('admin.kurikulum.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
