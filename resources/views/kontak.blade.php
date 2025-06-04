@extends('layouts.landing.index')

@section('content')
<section class="kontak-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="kontak-title">Kontak Kami</h2>
      <p class="kontak-subtitle text-muted">Kami siap membantu Anda kapan saja</p>
    </div>

    {{-- Alert sukses --}}
    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="row">
      <!-- Form Kontak -->
      <div class="col-md-6 mb-4">
        <form action="{{ route('kontak.store') }}" method="POST">
          @csrf

          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input 
              type="text" 
              id="nama" 
              name="nama" 
              class="form-control @error('nama') is-invalid @enderror" 
              placeholder="Masukkan nama lengkap" 
              value="{{ old('nama') }}" 
              required
            >
            @error('nama')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input 
              type="email" 
              id="email" 
              name="email" 
              class="form-control @error('email') is-invalid @enderror" 
              placeholder="Masukkan email" 
              value="{{ old('email') }}" 
              required
            >
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea 
              id="pesan" 
              name="pesan" 
              rows="5" 
              class="form-control @error('pesan') is-invalid @enderror" 
              placeholder="Tulis pesan Anda" 
              required
            >{{ old('pesan') }}</textarea>
            @error('pesan')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary" style="cursor: pointer;">
            Kirim Pesan
          </button>
        </form>
      </div>

      <!-- Info Kontak & Map -->
      <div class="col-md-6">
        <div class="info-kontak mb-4">
          <h4>Info Kontak</h4>
          <p><strong>Alamat:</strong> Politeknik Pertanian Negeri Samarinda Jalan Sam Ratulangi, Kec. Samarinda Seberang Kota Samarinda</p>
          <p><strong>Telepon:</strong> (0541) 260421, 260680</p>
          <p><strong>Email:</strong> adminph@politanisamarinda.ac.id</p>
          <p><strong>Jam Kerja:</strong> Senin - Jumat, 08.00 - 17.00</p>
        </div>

        <div class="map-container" style="height: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.643915158822!2d117.12200437310698!3d-0.53572553526249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df681cfdef307f5%3A0xfe4c807b54c3dcbb!2sProdi%20Pengelolaan%20Hutan%20Politeknik%20Pertanian%20Negeri%20Samarinda!5e0!3m2!1sid!2sid!4v1749025995153!5m2!1sid!2sid"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
