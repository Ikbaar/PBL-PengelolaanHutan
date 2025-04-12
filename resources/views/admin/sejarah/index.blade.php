@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3>Data Sejarah</h3>
                <a href="{{ route('admin.sejarah.create') }}" class="btn btn-primary">Tambah Sejarah</a>
            </div>
            <div class="card-body">
                @forelse ($sejarah as $item)
                    <div class="card mb-3">
                        <div class="card-body">
                            <p>{!! $item->konten !!}</p>
                            <a href="{{ route('admin.sejarah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.sejarah.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p>Tidak ada data sejarah.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
