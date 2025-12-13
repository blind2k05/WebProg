@extends('layouts.app')

@section('content')
    <h1>Pilih Metode Pembayaran</h1>
    <p>Produk: {{ $product->name }} - Rp {{ number_format($product->price) }}</p>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="mb-3">
            <label for="payment_method" class="form-label">Metode Pembayaran</label>
            <select name="payment_method" id="payment_method" class="form-select" required>
                <option value="">Pilih Metode</option>
                <option value="transfer_bank">Transfer Bank</option>
                <option value="gopay">GoPay</option>
                <option value="dana">DANA</option>
                <option value="kartu_kredit">Kartu Kredit</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Konfirmasi Top-Up</button>
    </form>
@endsection