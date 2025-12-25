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
            'payment_method' => 'required|in:bank,gopay,dana,ovo,qris',
            'user_game_id' => 'required|string|max:50',
        ]);

        $product = Product::find($request->product_id);
        $transaction = Transaction::create([
            'user_id' => Auth::id(),
            'game_id' => $product->game_id,
            'product_id' => $product->id,
            'user_game_id'  => $request->user_game_id,
            'amount' => $product->price,
            'payment_method' => $request->payment_method,
            'status' => 'completed',
        ]);

return redirect()->route('home')->with('success', 'Selamat! Anda sudah berhasil top up ' . $product->name . ', sering-sering ya!');
    }

    public function index()
    {   
    $transactions = Transaction::with(['game', 'product'])
        ->where('user_id', Auth::id())
        ->latest()
        ->get();

    return view('transactions.index', compact('transactions'));
    }

}
  