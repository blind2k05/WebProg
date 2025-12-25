@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="transaction-card mx-auto">
        
        <h4 class="fw-bold mb-2">Checkout</h1>
        <p class="text-white mb-4">
            {{ $product->name}} - Rp {{ number_format($product->price) }}
        </p>

        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="payment_method" id="payment_method">

            <div class="mb-4">
                <label class="form-label text-white fw-semibold">User Game ID</label>
                <input type="user_game_id"
                        name="user_game_id"
                        class="form-control"
                        placeholder="Masukkan User ID" required>
            </div>
            <div class="my-5">
                <label class="form-label text-white fw-semibold mb-4">Payment Method</label>

                <div class="payment-grid">
                    <div class="payment-item" data-method="gopay">
                        <img src="/img/payment/gopay.png" alt="Gopay">
                    </div>

                    <div class="payment-item" data-method="dana">
                        <img src="/img/payment/dana.png" alt="Dana">
                    </div>

                    <div class="payment-item" data-method="ovo">
                        <img src="/img/payment/ovo.png" alt="Ovo">
                    </div>

                    <div class="payment-item" data-method="bank">
                        <img src="/img/payment/bank.png" alt="Bank">
                    </div>

                    <div class="payment-item" data-method="qris">
                        <img src="/img/payment/QRIS.png" alt="Qris">
                    </div>
                </div>
            </div>

            <button type="sumbit" class="btn btn-success w-100">
                Konfirmasi Top-Up
            </button>

        </form>
    </div>

</div>

@endsection