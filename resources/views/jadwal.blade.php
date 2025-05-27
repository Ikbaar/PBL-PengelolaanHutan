@extends('layouts.landing.index')

@section('content')
<div class="container mt-5">

    <!-- Section Jadwal Kuliah -->
    <section id="jadwal">
        <h2>Jadwal Kuliah Semester Genap 2025</h2>
        <p>Silakan unduh jadwal kuliah di bawah ini:</p>
        <a href="{{ url('/download-jadwal') }}" class="btn btn-primary">
            📄 Download Jadwal Kuliah (PDF)
        </a>
    </section>

    <hr class="my-5">

    <!-- Section Kalender Akademik -->
    <section id="kalender">
        <h2>Kalender Akademik 2025</h2>
        <p>Silakan unduh kalender akademik di bawah ini:</p>
        <a href="{{ url('/download-kalender') }}" class="btn btn-secondary">
            📅 Download Kalender Akademik (PDF)
        </a>
    </section>

</div>
@endsection
