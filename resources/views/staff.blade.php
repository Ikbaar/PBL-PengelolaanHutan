@extends('layouts.landing.index')
@section('content')
<section id="dosen" class="dosen-section py-5">
  <div class="container">
    <h2 class="text-center mb-4">Daftar Dosen</h2>

    <div class="row justify-content-center">
      @foreach ($dosen as $index => $item)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="dosen-card position-relative text-center mx-auto">
            @if ($item->photo)
              <img src="{{ asset('storage/' . $item->photo) }}" alt="Foto Dosen {{ $index + 1 }}" class="dosen-photo">
            @else
              <div class="dosen-photo bg-secondary d-flex align-items-center justify-content-center text-white">
                -
              </div>
            @endif
            <div class="dosen-info">
              <h5 class="mb-1">{{ $item->name }}</h5>
              <p class="mb-0">{{ $item->nip }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".dosen-card");

    cards.forEach(card => {
      card.addEventListener("click", function (e) {
        if (window.innerWidth <= 768) {
          // Toggle class active
          card.classList.toggle("active");

          // Remove active from others
          cards.forEach(other => {
            if (other !== card) {
              other.classList.remove("active");
            }
          });

          e.stopPropagation();
        }
      });
    });

    // Remove all active when clicking outside
    document.addEventListener("click", function () {
      cards.forEach(card => card.classList.remove("active"));
    });
  });
</script>



<section id="plp-admin" class="plp-admin-section">
  <div class="container">
    <h2 class="text-center mb-4">PLP & Admin</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-success text-center">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Posisi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($plp as $index => $plp)
            <tr>
              <td class="text-center">{{ $index + 1 }}</td>
              <td>{{ $plp->nama }}</td>
              <td>{{ $plp->nip }}</td>
              <td>{{ $plp->posisi }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection

