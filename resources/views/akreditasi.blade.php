@extends('layouts.landing.index')
@section('content')
<section id="akreditasi" class="section">
  <div class="container">
    <h2 class="text-center mb-4">Akreditasi</h2>
    
    <div class="row justify-content-center">
      <div class="col-md-10">
        <p class="text-justify">
          Laboratorium Tanah dan Air telah mendapatkan akreditasi dari Komite Akreditasi Nasional (KAN) dengan nomor registrasi 1234/SK/LAB/XX/2023. Akreditasi ini menunjukkan bahwa laboratorium kami telah memenuhi standar mutu dan teknis yang ditetapkan secara nasional.
        </p>
        <p class="text-justify">
          Dengan akreditasi ini, kami berkomitmen untuk terus menjaga kualitas pelayanan dan hasil pengujian yang akurat serta terpercaya sesuai standar internasional.
        </p>
      </div>
    </div>

    <!-- Gambar sertifikat akreditasi -->
    <div class="row justify-content-center mt-4">
      <div class="col-md-6 text-center">
        <img src="{{ asset('storage/images/sertifikat-akreditasi.jpg') }}" alt="Sertifikat Akreditasi" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>
</section>

  @endsection
