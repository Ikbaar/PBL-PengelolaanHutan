@extends('layouts.landing.index')
@section('content')
<section id="sejarah" class="sejarah-section py-5">
    <div class="container">
        <p class="section-subtitle text-center">Perjalanan Kami</p>
        <h2 class="text-center mb-4">Sejarah</h2>
        <p class="section-intro text-center mb-5">
            Mengenal lebih jauh tentang perjalanan dan perkembangan Prodi Pengelolaan Hutan dari masa ke masa.
        </p>

        @if ($sejarah->isNotEmpty())
            @foreach ($sejarah as $item)
                <div class="sejarah-item p-4 mb-4 shadow-sm bg-white rounded-4 position-relative">
                    <div class="badge-year text-white px-3 py-1 rounded-pill position-absolute top-0 start-50 translate-middle">
                        {{ \Carbon\Carbon::parse($item->created_at)->format('Y') }}
                    </div>
                    <div class="sejarah-item-content mt-4">
                        <p class="fs-5 lh-lg text-secondary">{!! $item->konten !!}</p>
                    </div>
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
