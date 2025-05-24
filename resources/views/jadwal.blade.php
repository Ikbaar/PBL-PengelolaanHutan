@extends('layouts.landing.index')

@section('content')
<div class="container mt-5">
    <h2>Jadwal Kuliah Semester Genap 2025</h2>
    <p>Silakan unduh jadwal kuliah di bawah ini:</p>

    <a href="{{ url('/download-jadwal') }}" class="btn btn-primary">
        📄 Download Jadwal Kuliah (PDF)
    </a>
</div>
@endsection
