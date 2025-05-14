@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Kalender Akademik</h3>
                <a href="{{ route('admin.kalenderz.create') }}" class="btn btn-primary">Tambah Event</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($kalender->isNotEmpty())
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Event</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kalender as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama_event }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td class="d-flex gap-2">
                                    <a href="{{ route('admin.kalender.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.kalender.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus event ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-muted">Belum ada data kalender akademik.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection