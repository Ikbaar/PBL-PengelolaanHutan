@extends('layouts.landing.index')

@section('content')
<section class="beasiswa-section py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Informasi Beasiswa</h2>

        <div class="row">
            @forelse ($beasiswas as $beasiswa)
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $beasiswa->judul }}</h5>
                        <p class="card-text">{{ Str::limit(strip_tags($beasiswa->deskripsi), 100, '...') }}</p>
                        <p class="text-muted"><small>Batas Pendaftaran: {{ \Carbon\Carbon::parse($beasiswa->batas_pendaftaran)->format('d F Y') }}</small></p>
                        <a href="{{ route('show', $beasiswa->id) }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center">Belum ada beasiswa tersedia.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
