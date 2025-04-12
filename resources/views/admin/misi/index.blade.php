@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3>Data Misi</h3>
                <a href="{{ route('admin.misi.create') }}" class="btn btn-primary">Tambah Misi</a>
            </div>
            <div class="card-body">
                @forelse ($misi as $item)
                    <div class="card mb-3">
                        <div class="card-body d-flex justify-content-between align-items-start">
                            <div>
                                <p>{!! $item->konten !!}</p>
                            </div>
                            <div class="d-flex flex-row align-items-center gap-2">
                                <a href="{{ route('admin.misi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.misi.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Tidak ada data misi.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
