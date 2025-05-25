@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Daftar Jadwal Kuliah</h2>
    <a href="{{ route('admin.jadwal.create') }}" class="btn btn-primary mb-3">Upload File Baru</a>

    @foreach($files as $file)
        <div class="d-flex justify-content-between align-items-center border p-2 mb-2">
            <div>{{ basename($file) }}</div>
            <div>
                <a href="{{ asset('files/jadwal/' . basename($file)) }}" class="btn btn-sm btn-success" target="_blank">Lihat</a>
                <form action="{{ route('admin.jadwal.destroy', basename($file)) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Hapus file ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
