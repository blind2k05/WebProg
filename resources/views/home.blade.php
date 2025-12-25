  @extends('layouts.app')

  @section('content')

      <section class="mb-5">
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
              <div class="col-6 col-md-3 col-lg-2">
                @include('components.game-card', ['game' => $game])
              </div>
            @endforeach
          </div>
        </section>

        <section class="mb-5">
          <h4 class="section-title">💻 Game PC</h4>
          <div class ="row g-4">
            @foreach ($pcGames as $game)
              <div class="col-6 col-md-3 col-lg-2">
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
  




 