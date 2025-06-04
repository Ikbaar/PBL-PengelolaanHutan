@extends('layouts.landing.index')
@section('content')

<section class="lab-section">
  <h2 class="lab-title">Laboratorium Program Studi</h2>

  <div class="lab-row">

    <!-- Card 1 -->
    <div class="cards" onclick="toggleCard(this)">
      <div class="cards-label">PERSEMAIAN</div>
      <div class="cards-content">
        <h3 class="cards-title">Persemaian</h3>
        <img src="assets/img/persemaian.jpg" alt="Lab TanahAir" />
        <p>1.Tempat Pembibitan Tanaman, Lab Persemaian berfungsi sebagai lokasi untuk menyemai benih dan membesarkan bibit tanaman sebelum dipindahkan ke lahan permanen.</p>
        <p>2.Penelitian dan Percobaan Pertumbuhan Tanaman, Digunakan untuk penelitian ilmiah, seperti pengujian media tanam, pupuk, hormon tumbuh, dan metode penyemaian terbaik.
        <p>3.Menjadi sarana praktik bagi siswa, mahasiswa, atau petani dalam mempelajari teknik penyemaian dan perawatan bibit.</p>
        <p>4.Membantu pelestarian tanaman langka atau endemik dengan cara memperbanyaknya secara vegetatif atau generatif.</p>
        <p>5.Lab Persemaian memproduksi bibit tanaman dalam jumlah besar dengan kualitas unggul untuk mendukung program reboisasi, pertanian, atau penghijauan.</p>
        </p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="cards" onclick="toggleCard(this)">
      <div class="cards-label">KONSERVASI</div>
      <div class="cards-content">
        <h3 class="cards-title">Konservasi</h3>
        <img src="assets/img/konservasi.jpg" alt="Lab Hutan" />
        <p>1.Lab Konservasi berfungsi untuk menjaga dan melestarikan spesies tumbuhan atau hewan yang langka, terancam punah, atau endemik.</p>
        <p>2.Menjadi tempat penelitian tentang metode konservasi, seperti reproduksi buatan, perbanyakan vegetatif, atau rehabilitasi habitat alami.</p>
        <p>3.Lab ini menyimpan dan mengelola sumber daya genetik (DNA, benih, jaringan tanaman/hewan) untuk pelestarian jangka panjang dan keperluan ilmiah.</p>
        <p>4.Memberikan edukasi kepada pelajar, mahasiswa, dan masyarakat umum tentang pentingnya konservasi alam dan perlindungan spesies.</p>
        <p>5.Berperan dalam mendukung program pemerintah atau lembaga konservasi untuk perlindungan lingkungan, restorasi ekosistem, dan pengelolaan kawasan konservasi.</p>
      </div>
    </div>

    <div class="cards" onclick="toggleCard(this)">
      <div class="cards-label">PERENCANAAN</div>
      <div class="cards-content">
        <h3 class="cards-title">Perencanaan</h3>
        <img src="assets/img/perencanaan.jpg" alt="Lab Hutan" />
        <p>1.Laboratorium ini digunakan untuk merancang dan mensimulasikan berbagai proyek pertanian dan kehutanan, seperti perencanaan tata guna lahan, irigasi, dan konservasi sumber daya alam.</p>
        <p>2.Sebagai fasilitas pembelajaran, laboratorium ini mendukung kegiatan praktikum mahasiswa dalam mata kuliah yang berkaitan dengan perencanaan, seperti analisis spasial, penggunaan perangkat lunak perencanaan, dan pemodelan sistem pertanian.</p>
        <p>3.Laboratorium Perencanaan menjadi tempat bagi dosen dan mahasiswa untuk melakukan penelitian terkait perencanaan pembangunan pertanian berkelanjutan, pengelolaan sumber daya alam, dan adaptasi terhadap perubahan iklim.</p>
        <p>4.Laboratorium ini mendukung pengembangan kurikulum dengan menyediakan data dan model yang relevan untuk pembelajaran, serta membantu dalam pembuatan materi ajar yang berbasis pada studi kasus nyata.</p>
        <p>5.Laboratorium Perencanaan juga berfungsi sebagai tempat kolaborasi dengan instansi pemerintah, LSM, dan sektor swasta dalam merancang dan mengevaluasi program-program pembangunan pertanian dan kehutanan di wilayah Kalimantan Timur.</p>
      </div>
    </div>

    <div class="cards" onclick="toggleCard(this)">
      <div class="cards-label">LABORATORIUM TANAH DAN AIR</div>
      <div class="cards-content">
        <h3 class="cards-title">Lab Tanah dan Air</h3>
        <img src="assets/img/Lab-TanahAir.jpg" alt="Lab TanahAir" />
        <p>1.Laboratorium ini digunakan untuk mengukur parameter kualitas tanah dan air, seperti Total Dissolved Solids (TDS), Chemical Oxygen Demand (COD), pH, dan kandungan logam berat seperti besi (Fe). Analisis ini penting untuk menilai kesuburan tanah dan kualitas air dalam mendukung kegiatan pertanian dan kehutanan.</p>
        <p>2.Sebagai fasilitas pendidikan, laboratorium ini mendukung kegiatan praktikum mahasiswa dalam mata kuliah yang berkaitan dengan ilmu tanah dan air, seperti analisis kimia tanah, pengelolaan sumber daya air, dan konservasi tanah.</p>
        <p>3.Laboratorium ini menjadi tempat bagi dosen dan mahasiswa untuk melakukan penelitian terkait pengelolaan tanah dan air, termasuk studi tentang dampak pencemaran, efisiensi penggunaan air irigasi, dan konservasi sumber daya alam.</p>
        <p>4.Laboratorium ini berperan dalam memantau kualitas lingkungan di sekitar kampus dan wilayah lain di Kalimantan Timur, seperti analisis air hujan untuk mengetahui tingkat keasaman dan kandungan logam berat, yang dapat digunakan sebagai indikator pencemaran udara dan dampaknya terhadap lingkungan.</p>
        <p>5.Data dan informasi yang dihasilkan dari laboratorium ini digunakan untuk mendukung pengambilan keputusan dalam pengelolaan lahan, perencanaan tata guna lahan, dan kebijakan lingkungan oleh pemerintah daerah dan instansi terkait.</p>
      </div>
    </div>

    <div class="cards" onclick="toggleCard(this)">
      <div class="cards-label">SILFIKUTUR</div>
      <div class="cards-content">
        <h3 class="cards-title">Lab Silfikutur</h3>
        <img src="assets/img/silfikutur.jpg" alt="Lab Hutan" />
        <p>1.Laboratorium ini digunakan sebagai tempat praktikum untuk mahasiswa dalam mempelajari teknik-teknik silvikultur, termasuk pembenihan, pembibitan, penanaman, dan pemeliharaan tanaman hutan. Kegiatan ini bertujuan untuk memberikan pengalaman langsung kepada mahasiswa dalam pengelolaan hutan yang berkelanjutan.</p>
        <p>2.Laboratorium Silvikultur menjadi pusat penelitian bagi dosen dan mahasiswa dalam mengembangkan metode-metode baru dalam budidaya hutan. Penelitian ini mencakup studi tentang pertumbuhan tanaman hutan, teknik rehabilitasi lahan, dan pengelolaan hutan yang efisien dan ramah lingkungan.</p>
        <p>3.Laboratorium ini juga berfungsi sebagai tempat untuk mengidentifikasi dan menginventarisasi berbagai jenis tumbuhan hutan, termasuk tumbuhan bawah. Kegiatan ini penting untuk memahami keanekaragaman hayati dan kondisi ekosistem hutan di sekitar wilayah Samarinda.</p>
        <p>4.Laboratorium Silvikultur digunakan untuk menyelenggarakan pelatihan dan penyuluhan kepada masyarakat, khususnya petani dan pengelola hutan, tentang teknik-teknik silvikultur yang efektif. Tujuannya adalah untuk meningkatkan pengetahuan dan keterampilan masyarakat dalam mengelola hutan secara lestari.</p>
        <p>5.Laboratorium ini mendukung program-program rehabilitasi dan konservasi hutan melalui pengembangan bibit unggul dan teknik penanaman yang sesuai dengan kondisi lokal. Hal ini penting dalam upaya pelestarian hutan dan peningkatan kualitas lingkungan di Kalimantan Timur.</p>
      </div>
    </div>

    <div class="cards" onclick="toggleCard(this)">
      <div class="cards-label">SOSIAL EKONOMI</div>
      <div class="cards-content">
        <h3 class="cards-title">Laboratorium Sosial Ekonomi</h3>
        <img src="assets/img/sosialekonomi.jpg" alt="Lab Hutan" />
        <p>1.Laboratorium ini digunakan sebagai tempat praktikum bagi mahasiswa untuk mempelajari aspek sosial dan ekonomi dalam sektor pertanian dan kehutanan, seperti analisis biaya produksi, studi kelayakan usaha tani, dan evaluasi dampak sosial ekonomi dari kegiatan pertanian.</p>
        <p>2.Laboratorium Sosial Ekonomi menjadi pusat penelitian bagi dosen dan mahasiswa dalam mengembangkan metode dan strategi peningkatan kesejahteraan masyarakat melalui sektor pertanian dan kehutanan. Penelitian ini mencakup studi tentang dampak sosial ekonomi dari kegiatan pertanian dan kehutanan terhadap masyarakat lokal.</p>
        <p>3.Laboratorium ini berfungsi untuk melakukan analisis dampak sosial ekonomi dari berbagai kegiatan pembangunan pertanian dan kehutanan, seperti pengembangan perkebunan kelapa sawit, terhadap kondisi sosial dan ekonomi masyarakat sekitar.</p>
        <p>4.Laboratorium Sosial Ekonomi digunakan untuk menyelenggarakan pelatihan dan penyuluhan kepada masyarakat, khususnya petani dan pelaku usaha pertanian, tentang manajemen usaha tani, pemasaran hasil pertanian, dan strategi peningkatan pendapatan.</p>
        <p>5.Laboratorium ini mendukung program-program pemberdayaan masyarakat melalui pengembangan model-model usaha pertanian yang berkelanjutan dan ramah lingkungan, serta peningkatan kapasitas masyarakat dalam mengelola sumber daya pertanian secara efisien.</p>

      </div>
    </div>

    <!-- Tambahkan cards lain di sini, JANGAN buat div.lab-row baruu -->
    
  </div>

</section>


<script>
  function toggleCard(cards) {
    document.querySelectorAll('.cards').forEach(c => {
      if (c !== cards) c.classList.remove('open');
    });
    cards.classList.toggle('open');
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