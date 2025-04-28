@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3>Akreditasi</h3>
                <a href="{{ route('admin.akreditasi.create') }}" class="btn btn-primary">Tambah Akreditasi</a>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Sertifikat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($akreditasi as $item)
                        <tr>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td><img src="{{ asset('storage/'.$item->sertifikat_path) }}" alt="Sertifikat" width="100"></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('admin.akreditasi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.akreditasi.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
