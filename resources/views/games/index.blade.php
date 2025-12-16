@extends('layouts.app')
  @section('content')
      <h1 class="text-center">Daftar Game</h1>
      <div class="row">
          @foreach($games as $game)
              <div class="col-md-4">
                  <div class="card game-card">
                      <img src="{{ $game->image }}" class="card-img-top" alt="{{ $game->name }}">
                      <div class="card-body">
                          <h5>{{ $game->name }}</h5>
                          <p>{{ $game->description }}</p>
                          <a href="{{ route('games.show', $game->id) }}" class="btn btn-primary product-btn">Lihat Produk</a>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
  @endsection