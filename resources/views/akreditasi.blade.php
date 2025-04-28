@extends('layouts.landing.index')
@section('content')
<section id="akreditasi" class="akreditasi-section py-5 bg-light">
  <div class="container">
    @if($akreditasi)
    <div class="row align-items-center">
      <!-- Konten Teks -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="mb-3">{{ $akreditasi->judul }}</h2>
        <p class="lead text-muted">
          {!! nl2br(e(Str::limit($akreditasi->deskripsi, 300))) !!}
        </p>
      </div>

      <!-- Gambar Sertifikat -->
      <div class="col-md-6 text-center">
        <img src="{{ asset('storage/' . $akreditasi->sertifikat_path) }}" alt="Sertifikat Akreditasi" class="img-fluid rounded shadow">
      </div>
    </div>
    @else
      <p class="text-center text-muted">Belum ada data akreditasi yang ditambahkan.</p>
    @endif
  </div>
</section>

@endsection
