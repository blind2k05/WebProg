@extends('layouts.app')

@section('content')
    <h1>{{ $game->name }}</h1>
    <div class="row">
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
@endsection