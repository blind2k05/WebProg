@extends('layouts.app')

@section('content')
    <div class="container py-4"> <h1 class="text-center mb-5 text-white">Daftar Game</h1>
        
        <div class="row g-4"> @foreach($games as $game)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3"> <div class="card game-card h-100 border-0 shadow-sm" style="background-color: #1a1a2e; color: white; border-radius: 15px; overflow: hidden;">
                        
                        <div style="height: 200px; width: 100%; overflow: hidden;">
                            <img src="{{ asset($game->image) }}" 
                                 class="card-img-top" 
                                 alt="{{ $game->name }}"
                                 style="height: 100%; width: 100%; object-fit: cover; object-position: center;">
                        </div>

                        <div class="card-body d-flex flex-column text-center">
                            <h5 class="card-title fw-bold" style="font-size: 1.1rem;">{{ $game->name }}</h5>
                            
                            <p class="card-text small text-secondary flex-grow-1">
                                {{ Str::limit($game->description, 60) }}
                            </p>
                            
                            <a href="{{ route('games.show', $game->id) }}" 
                               class="btn btn-primary w-100 mt-3 product-btn" 
                               style="border-radius: 8px;">
                               Lihat Produk
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pagination-wrapper mt-5">
        {{ $games->withQueryString()->links('pagination::bootstrap-5') }}
    </div>


@endsection