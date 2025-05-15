@extends('layouts.landing.index')
@section('content')

<section class="lab-section">
  <h2 class="lab-title">Laboratorium Program Studi</h2>

  <div class="lab-row">

    <!-- Card 1 -->
    <div class="card" onclick="toggleCard(this)">
      <div class="card-label">LABORATORIUM TANAH DAN AIR</div>
      <div class="card-content">
        <h3 class="card-title">Laboratorium Tanah dan Air</h3>
        <img src="assets/img/Lab-TanahAir.jpg" alt="Lab TanahAir" />
        <p>Detail lab...</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card" onclick="toggleCard(this)">
      <div class="card-label">LABORATORIUM EKSPERIMEN HUTAN</div>
      <div class="card-content">
        <h3 class="card-title">Laboratorium Eksperimen Hutan</h3>
        <img src="assets/img/Lab-Hutan.jpg" alt="Lab Hutan" />
        <p>Detail lab...</p>
      </div>
    </div>

    <!-- Tambahkan card lain di sini, JANGAN buat div.lab-row baru -->
    
  </div>
</section>

<section class="lab-section">

  <div class="lab-row">

    <!-- Card 1 -->
    <div class="card" onclick="toggleCard(this)">
      <div class="card-label">LABORATORIUM TANAH DAN AIR</div>
      <div class="card-content">
        <h3 class="card-title">Laboratorium Tanah dan Air</h3>
        <img src="assets/img/Lab-TanahAir.jpg" alt="Lab TanahAir" />
        <p>Detail lab...</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card" onclick="toggleCard(this)">
      <div class="card-label">LABORATORIUM EKSPERIMEN HUTAN</div>
      <div class="card-content">
        <h3 class="card-title">Laboratorium Eksperimen Hutan</h3>
        <img src="assets/img/Lab-Hutan.jpg" alt="Lab Hutan" />
        <p>Detail lab...</p>
      </div>
    </div>

    <!-- Tambahkan card lain di sini, JANGAN buat div.lab-row baru -->
    
  </div>
</section>


<script>
  function toggleCard(card) {
    document.querySelectorAll('.card').forEach(c => {
      if (c !== card) c.classList.remove('open');
    });
    card.classList.toggle('open');
  }

  let currentlyOpenCard = null;

function toggleCard(clickedCard) {
  if (currentlyOpenCard === clickedCard) {
    // Tutup card yg sama kalau diklik lagi
    clickedCard.classList.remove('open');
    currentlyOpenCard = null;
  } else {
    if (currentlyOpenCard) {
      // Tutup dulu card yg terbuka
      currentlyOpenCard.classList.remove('open');

      // Tunggu animasi selesai (400ms sesuai CSS)
      setTimeout(() => {
        // Buka card yg diklik
        clickedCard.classList.add('open');
        currentlyOpenCard = clickedCard;
      }, 400);
    } else {
      // Kalau gak ada yg buka, langsung buka card
      clickedCard.classList.add('open');
      currentlyOpenCard = clickedCard;
    }
  }
}

</script>


@endsection
