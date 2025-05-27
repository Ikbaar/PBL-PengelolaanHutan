@extends('layouts.landing.index')

@section('content')
<section class="beasiswa-detail-section py-5">
    <div class="container">
        <a href="{{ route('beasiswa') }}" class="btn btn-outline-secondary mb-4">&larr; Kembali ke daftar beasiswa</a>

        <h2 class="detail-title mb-3">{{ $beasiswa->judul }}</h2>
        <p class="text-muted detail-date mb-4">Batas Pendaftaran: {{ \Carbon\Carbon::parse($beasiswa->batas_pendaftaran)->format('d F Y') }}</p>

        <div class="detail-description">
            {!! nl2br(e($beasiswa->deskripsi)) !!}
        </div>
    </div>
</section>
@endsection
