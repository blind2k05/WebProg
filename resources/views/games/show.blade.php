@extends('layouts.app')

@section('content')
    <div class="game-header py-5">
        <div class ="container">
            <div class="game-header=card d-flex align-item-center gap-4 p-4">
                <img 
                    src="{{ asset($game->image) }}" 
                    alt="{{ $game->name}}"
                    class="game-header-img"
                >

                <div class="game-header-info text-white">
                    <div class="mb-2">
                        <span class="badge bg-warning text-darl me-2">Global</span>
                        <span class="badge bg-success">instant</span>
                    </div>

                    <h2 class="fw--bold mb-2">{{ $game->name }}</h2>
                    <p class="text-muted mb-0">
                        Top up {{ $game->name}} dengan proses cepat, aman, dan terpercaya
                        {{ $game->description }}
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row g-4">
            @foreach($products as $product)
                <div class="col md-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <h5 class="fw-bold">{{ $product->name}}</h5>
                            <p class="text-muted">Rp {{number_format($product->price)}}</p>

                            @auth
                                <a href="{{ route('transactions.create', ['product_id' => $product->id]) }}"
                                    class="btn btn-success w-100">
                                    Top-Up
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn btn-outline-secondary w-100">
                                    Login untuk Top-UP
                                </a>
                            @endauth
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
        
    <!-- <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>{{ $product->name }}</h5>
                            <p>Rp {{ number_format($product->price) }}</p>
                            @auth
                                <a href="{{ route('transactions.create', ['product_id' => $product->id]) }}" class="btn btn-success">Top-Up</a>
                            @else
                                <p><a href="{{ route('login') }}">Login</a> untuk top-up.</p>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div> -->
@endsection