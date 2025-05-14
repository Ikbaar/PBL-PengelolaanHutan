@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Edit Kalender Akademik</h1>

    <form method="POST" action="{{ route('admin.kalender.update', $kalender->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_event">Nama Event</label>
            <input type="text" class="form-control" name="nama_event" value="{{ $kalender->nama_event }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" value="{{ $kalender->tanggal }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi">{{ $kalender->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection