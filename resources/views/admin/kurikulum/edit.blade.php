@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Mata Kuliah</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.kurikulum.update', $kurikulum->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="kode">Kode Mata Kuliah</label>
                        <input type="text" class="form-control" id="kode" name="kode" value="{{ old('kode', $kurikulum->kode) }}" required>
                        @error('kode') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="mata_kuliah">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" value="{{ old('mata_kuliah', $kurikulum->mata_kuliah) }}" required>
                        @error('mata_kuliah') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="sks">SKS</label>
                        <input type="number" class="form-control" id="sks" name="sks" value="{{ old('sks', $kurikulum->sks) }}" required>
                        @error('sks') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="semester">Semester</label>
                        <select class="form-select" id="semester" name="semester" required>
                            @for ($i = 1; $i <= 6; $i++)
                                <option value="{{ $i }}" {{ (old('semester', $kurikulum->semester) == $i) ? 'selected' : '' }}>Semester {{ $i }}</option>
                            @endfor
                        </select>
                        @error('semester') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

<button type="submit" class="btn btn-primary mt-2">Update</button>
<a href="{{ route('admin.kurikulum.index') }}" class="btn btn-secondary mt-2 ms-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
