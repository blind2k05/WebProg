<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Product;
use Illuminate\Http\Request;

class GameController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = Game::query();

        if($request->filled('q')){
            $query->where('name', 'like', '%'. $request->q . '%');
        }

        $games = $query->paginate(12);

        return view('games.index', compact('games'));
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        $products = $game->products;
        return view('games.show', compact('game', 'products'));
    }


}
