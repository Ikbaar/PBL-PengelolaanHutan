@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3>Daftar Beasiswa</h3>
                <a href="{{ route('admin.beasiswa.create') }}" class="btn btn-primary">Tambah Beasiswa</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Batas Pendaftaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beasiswas as $beasiswa)
                                <tr>
                                    <td>{{ $beasiswa->judul }}</td>
                                    <td>{{ \Carbon\Carbon::parse($beasiswa->batas_pendaftaran)->format('d M Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.beasiswa.edit', $beasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.beasiswa.destroy', $beasiswa->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @if ($beasiswas->isEmpty())
                                <tr>
                                    <td colspan="3" class="text-center">Belum ada beasiswa tersedia.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
