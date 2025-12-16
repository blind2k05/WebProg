<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $popularGames = Game::where('is_popular', true)->limit(6)->get();

        $mobileGames = Game::where('platform', 'mobile')->limit(6)->get();
        $pcGames     = Game::where('platform', 'pc')->limit(6)->get();

        return view('home', compact(
            'popularGames',
            'mobileGames',
            'pcGames'
        ));
    }
}

