@extends('layouts.landing.index')

@section('content')
<section id="hero" class="hero section">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active">
        <img src="assets/img/Slide1.png" alt=""><!-- gambar benner -->
        <div class="carousel-container">
          {{-- <h2>Selamat Datang di Program Studi <span>Teknologi Rekayasa Perangkat Lunak</span></h2> --}}
          {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
          {{-- <a href="about.html" class="btn-get-started">Mulai</a> --}}
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
      <img src="assets/img/Slide2.png" alt="">
        <div class="carousel-container">
          {{-- <h2>Jurusan <span>Rekayasa dan Komputer</span></h2>
          {{-- <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p> --}}
          {{-- <a href="about.html" class="btn-get-started">Mulai</a> --}} 
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
      <img src="assets/img/Slide3.png" alt="">
        <div class="carousel-container">
          {{-- <h2>Politeknik Pertanian Negeri Samarinda</h2>
          {{-- <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p> --}}
          {{-- <a href="about.html" class="btn-get-started">Mulai</a> --}}
        </div>
      </div><!-- End Carousel Item -->

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <div class="featured container">

      <div class="row gy-4">

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
            <h4><a href="{{ route('akreditasi') }}" class="stretched-link">Akreditasi</a></h4>
            <p>Pelajari lebih lanjut tentang pencapaian akreditasi Program Studi Pengolaan Hutan</p>
          </div>
        </div><!-- End Featured Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
            <h4><a href="" class="stretched-link">Jadwal Kuliah</a></h4>
            <p>Dapatkan informasi terkini tentang jadwal perkuliahan untuk menunjang aktivitas akademikmu</p>
          </div>
        </div><!-- End Featured Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
            <h4><a href="" class="stretched-link">Informasi Beasiswa</a></h4>
            <p>Temukan peluang beasiswa menarik untuk Tahun Ajaran 2025/2026 dan raih impianmu!</p>
          </div>
        </div><!-- End Featured Item -->

      </div>

    </div>

  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="section about">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 gx-5">
        {{-- @foreach ($outputLulusans as $item)
          <div class="col-lg-6 order-1 order-lg-2">
            <a href="{{route('output_lulusan.index')}}">
              <img src="{{ Storage::url($item->image) }}" class="img-fluid" alt="{{ $item->name }}">
            </a>
            {{ $item->title }}
          </div>
        @endforeach --}}
        <!-- Output Lulusan Item -->
        <div class="col-12 col-lg-6 order-2 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
        <h2 class="fw-bold mb-4">Lulusan Prodi PH</h2>

          @if ($outputLulusans->isNotEmpty())
          @foreach ($outputLulusans as $item)
            <a href="{{ route('output-lulusan-detail', $item->id) }}" class="position-relative text-decoration-none text-black services section">  
                <div class="service-item position-relative d-flex flex-row text-decoration-none gap-3 mb-3 h-auto">
                    <div class="row m-0 p-0">
                        <div class="col-12 col-md-2 mb-3 mb-md-0 m-0 p-0">
                            <div class="img-container">
                                <img src="{{ Storage::url($item->image) }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-9 d-flex align-items-center text-start m-0 p-0 ps-0 ps-md-3">
                            <h3 class="title lh-sm m-0 p-0">{{ $item->title }}</h3>
                            {{-- <p class="description m-0 p-0">{!! $item->description !!}</p> --}}
                        </div>
                    </div>
                </div>
            </a>
          @endforeach
          @else
            <div class="col-6 order-2 mx-auto hero m-0" data-aos="fade-up" data-aos-delay="100">
              <div class="featured-item position-relative text-decoration-none m-0 p-3">
                  <p class="text-center mx-auto m-0 p-0">Belum ada Output Lulusan yang tersedia.</p>
              </div>
            </div>
          @endif
        </div>
        <!-- End Output Lulusan Item -->
        <div class="col-12 col-lg-6 order-1 content">
          <div class="container section-title" data-aos="fade-up">
            {{-- <h2>10 Alasan Mengapa Masuk Teknologi Rekayasa Perangkat Lunak</h2> --}}
          <h3>10 Alasan Mengapa Masuk Pengelolaan Hutan</h3>
          <div class="underline"></div>
          {{-- <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p> --}}
          <ul>
            @foreach ($alasan as $item)
            <li></li>
            <li><i class="bi bi-check2-circle"></i><span>{{ $item->name }}</span></li>
            @endforeach
          </ul>
          {{-- <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
          </p> --}}
        </div>
      </div>
    </div>
  </section><!-- /About Section -->

  <!-- Berita Section -->
  <section id="berita" class=" berita-section services section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Berita Utama</h2>
    </div>
    <div class="container">
      <div class="row gy-4">
        @if ($beritas->isNotEmpty())
          @foreach ($beritas as $berita)
              <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
                  <a href="{{ route('berita-detail', $berita->id) }}" class="position-relative text-decoration-none text-black">  
                      <div class="service-item position-relative text-decoration-none">
                          <div class="img-container mb-3">
                              <img src="{{ Storage::url($berita->image) }}" alt="">
                          </div>
                          {{-- <p class="description m-0 p-0">{{ $berita->title }}</p>
                          <p class="date lh-sm mt-3 m-0 p-0">{{ $berita->formatted_date }}</p> --}}
                          <h5 class="title fw-bold lh-sm mb-2 m-0 p-0">{{ $berita->title }}</h5>
                          <p class="description m-0 p-0">
                            {!! \Illuminate\Support\Str::limit(strip_tags($berita->description, '<p><a><b><strong><i><u><em><br><ol><ul><li>'), 200) !!}
                          </p>
                        
                      </div>
                  </a>
              </div><!-- End Service Item -->
          @endforeach
        @else
          <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative text-decoration-none">
              <p class="text-center">Belum ada berita yang tersedia.</p>
            </div>
          </div>
        @endif
      </div>
    </div>
    <div class="d-flex justify-content-center w-100 mt-5">
      <a href="{{ route('berita-lainnya') }}" class="text-center">
        Berita Lainnya
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </section><!-- /Berita Section -->

        {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Eosle Commodi</h3>
            </a>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Ledo Markt</h3>
            </a>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-bounding-box-circles"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Asperiores Commodit</h3>
            </a>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-calendar4-week"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Velit Doloremque</h3>
            </a>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-chat-square-text"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Dolori Architecto</h3>
            </a>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item --> --}}

  {{-- {{-- <!-- Clients Section --> --}}
  <section id="clients" class="section clients">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Partnership</h2>
      {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas</p> --}}
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 40
              },
              "480": {
                "slidesPerView": 3,
                "spaceBetween": 60
              },
              "640": {
                "slidesPerView": 4,
                "spaceBetween": 80
              },
              "992": {
                "slidesPerView": 6,
                "spaceBetween": 120
              }
            }
          }
        </script>
        <!-- <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/Huawei-Logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/Oracle-Logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/dicoding-logo-square.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/Kemkominfo-Logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/GreenNusa-Logo.jpg" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/Britech-Logo.png" class="img-fluid" alt=""></div>
          {{-- <div class="swiper-slide"><img src="assets/img/" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/" class="img-fluid" alt=""></div> --}}
        </div>
        <div class="swiper-pagination"></div>
      </div> -->

    </div>

  </section><!-- /Clients Section --> --
  @endsection
