@extends('layouts.landing.index')

@section('content')
<section class="dokumen py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Dokumen</h2>
            <p class="text-muted">Kalender Akademik / Jadwal Kuliah</p>
        </div>

        <div class="row">
            @foreach ($dokumen as $dok)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $dok->judul }}</h5>
                            <p class="card-text flex-grow-1">{{ $dok->deskripsi }}</p>
                            <a href="{{ route('detail', $dok->id) }}" class="btn btn-primary mt-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
