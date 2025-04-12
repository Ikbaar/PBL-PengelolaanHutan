@extends('layouts.landing.index')
@section('content')
<section id="sejarah" class="sejarah">
    <div class="container">
        <h2 class="text-center mb-4">Sejarah</h2>
        @if ($sejarah->isNotEmpty())
            @foreach ($sejarah as $item)
                <div class="sejarah-item mb-4">
                    <p>{!! $item->konten !!}</p>
                </div>
            @endforeach
        @else
            <p class="text-center">Belum ada data sejarah yang tersedia.</p>
        @endif
    </div>
</section>

<section id="visi-misi" class="visi-misi-section py-5">
  <div class="container">
    <h2 class="text-center mb-5">Visi & Misi</h2>
    <div class="row">
      <!-- Visi -->
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h4 class="card-title text-center mb-3">Visi</h4>
            @foreach ($visi as $item)
              <p class="card-text text-justify">
                {{ $item->konten }}
              </p>
            @endforeach
          </div>
        </div>
      </div>

      <!-- Misi -->
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h4 class="card-title text-center mb-3">Misi</h4>
            <ul class="card-text">
              @foreach ($misi as $item)
                <li>{{ $item->konten }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="struktur" class="struktur-section py-5">
  <div class="container text-center">
    <h2 class="mb-4">Struktur Organisasi</h2>
    
    <!-- Menampilkan Gambar Struktur Organisasi -->
    <img src="{{ asset('assets/img/struktur_organisasi.jpg') }}" alt="Struktur Organisasi" class="img-fluid">
  </div>
</section>
  @endsection
