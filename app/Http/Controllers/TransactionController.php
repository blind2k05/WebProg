<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(['product_id' => 'required|exists:products,id']);
        $product = Product::find($request->product_id);
        return view('transactions.create', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'payment_method' => 'required|in:transfer_bank,gopay,dana,kartu_kredit',
        ]);

        $product = Product::find($request->product_id);
        $transaction = Transaction::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'amount' => $product->price,
            'payment_method' => $request->payment_method,
            'status' => 'completed',
        ]);

        return redirect()->route('home')->with('success', 'Top-up berhasil! Metode: ' . $request->payment_method);
    }
}
  