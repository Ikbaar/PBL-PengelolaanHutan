@extends('layouts.dashboard')

@section('content')
    <h2 class="mt-4">Kalender Akademik</h2>

    {{-- Notifikasi sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.kalender.store') }}">
        @csrf
        <div class="form-group">
            <label for="nama_event">Nama Event</label>
            <input type="text" class="form-control" name="nama_event" id="nama_event" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
@endsection
