@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Upload Jadwal Kuliah</h2>

    <form action="{{ route('admin.jadwal.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="jadwal_file">File PDF Jadwal:</label>
            <input type="file" name="jadwal_file" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Upload</button>
    </form>
</div>
@endsection
