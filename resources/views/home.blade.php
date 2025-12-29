  @extends('layouts.app')

  @section('content')

      <section class="banner-section">
          
          <div class="banner-bg"></div>

          <!-- CONTENT -->
          <div class="banner-content">
              <div class="swiper heroSwiper">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <img src="https://hyperpc.ae/images/support/articles/pc-for-pubg/pc-for-pubg-banner.jpg">
                      </div>
                      <div class="swiper-slide">
                          <img src="https://static1.squarespace.com/static/64e6b8a8ea5b13055c4d78e6/64e7872d413a3f2329dc833a/64ecc54daf95385a4414520e/1693607220518/Arena+Breakout+Banner.jpeg?format=1500w">
                      </div>
                  </div>

                  <div class="swiper-pagination"></div>
              </div>
          </div>
      </section>



      <section class="mb-5 popular-section">
          <h4 class="section-title">🔥 Game Popular</h4>

          <div class="swiper popularSwiper">
              <div class="swiper-wrapper">
                  @foreach ($popularGames as $game)
                      <div class="swiper-slide">
                          @include('components.game-card', ['game' => $game])
                      </div>
                  @endforeach
              </div>

              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
          </div>


      </section>

      <div class="container home-card">
        <section class="mb-5">
          <h4 class="section-title">📱 Game Mobile</h4>
          <div class ="row g-4">
            @foreach ($mobileGames as $game)
              <div class="col-6 col-md-3 col-lg-3">
                @include('components.game-card', ['game' => $game])
              </div>
            @endforeach
          </div>
        </section>

        <section class="mb-5">
          <h4 class="section-title">💻 Game PC</h4>
          <div class ="row g-4">
            @foreach ($pcGames as $game)
              <div class="col-6 col-md-3 col-lg-3">
                @include('components.game-card', ['game' => $game])
              </div>
            @endforeach
          </div>
        </section>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      @if(session('success'))
      <script>
          Swal.fire({
              title: 'Berhasil!',
              text: "{{ session('success') }}",
              icon: 'success',
              confirmButtonText: 'Oke',
              background: '#1a1a2e', 
              color: '#fff',
              confirmButtonColor: '#007bff'
          });
      </script>
      @endif
  @endsection
  




 