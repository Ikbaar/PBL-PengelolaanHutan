@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3>Data Kurikulum</h3>
                <a href="{{ route('admin.kurikulum.create') }}" class="btn btn-primary">Tambah Mata Kuliah</a>
            </div>
            <div class="card-body">

                <div class="mb-4">
                    <form method="GET" action="{{ route('admin.kurikulum.index') }}" class="d-flex align-items-center gap-3">
                        <label for="semester" class="mb-0">Pilih Semester:</label>
                        <select name="semester" onchange="this.form.submit()" class="form-select w-auto">
                            @for ($i = 1; $i <= 6; $i++)
                                <option value="{{ $i }}" {{ $semester == $i ? 'selected' : '' }}>Semester {{ $i }}</option>
                            @endfor
                        </select>
                    </form>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($kurikulums as $k)
                            <tr>
                                <td>{{ $k->kode }}</td>
                                <td>{{ $k->mata_kuliah }}</td>
                                <td>{{ $k->sks }}</td>
                                <td>
                                    <a href="{{ route('admin.kurikulum.edit', $k->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.kurikulum.destroy', $k->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4" class="text-center">Tidak ada data</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
