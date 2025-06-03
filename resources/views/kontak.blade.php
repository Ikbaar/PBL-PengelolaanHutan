@extends('layouts.landing.index')

@section('content')
<section class="kontak-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="kontak-title">Kontak Kami</h2>
      <p class="kontak-subtitle text-muted">Kami siap membantu Anda kapan saja</p>
    </div>

    <div class="row">
      <!-- Form Kontak (statis) -->
      <div class="col-md-6 mb-4">
        <form>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required>
          </div>

          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea id="pesan" name="pesan" rows="5" class="form-control" placeholder="Tulis pesan Anda" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary" disabled>Kirim Pesan (Statis)</button>
        </form>
      </div>

      <!-- Info Kontak & Map -->
      <div class="col-md-6">
        <div class="info-kontak mb-4">
          <h4>Info Kontak</h4>
          <p><strong>Alamat:</strong> Jl. Contoh No.123, Kota Contoh</p>
          <p><strong>Telepon:</strong> (021) 1234 5678</p>
          <p><strong>Email:</strong> info@contoh.com</p>
          <p><strong>Jam Kerja:</strong> Senin - Jumat, 08.00 - 17.00</p>
        </div>

        <div class="map-container" style="height: 300px; border-radius: 8px; overflow: hidden; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
          <iframe
            src="https://www.google.com/maps/embed?pb=YOUR_GOOGLE_MAPS_EMBED_CODE_HERE"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
