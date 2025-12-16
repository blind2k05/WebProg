<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Product;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       $ml = Game::updateOrCreate(
        [
            'name' => 'Mobile Legends'
        ],
        [
            'publisher'   => 'Moonton',
            'description' => 'Game MOBA populer di mobile.',
            'image'       => 'img/game/ML.png',
            'platform'    => 'mobile',
            'is_popular'  => true
        ]
        );

        Product::updateOrCreate(
            [
                'game_id' => $ml->id,
                'name'    => 'Diamond 86'
            ],
            [
                'price' => 20000
            ]
        );

        Product::updateOrCreate(
            [
                'game_id' => $ml->id,
                'name'    => 'Diamond 172'
            ],
            [
                'price' => 40000
            ]
        );

        
        $pubg = Game::updateOrCreate(
        [
            'name' => 'PUBG'
        ],
        [
            'publisher'   => 'Krafton',
            'description' => 'Game pc Battle Royale',
            'image'       => 'img/game/PUBG.jpg',
            'platform'    => 'pc',
            'is_popular'  => true
        ]
        );

        Product::updateOrCreate(
            [
                'game_id' => $pubg->id,
                'name'    => '500 G-Coin'
            ],
            [
                'price' => 80000
            ]
        );

        Product::updateOrCreate(
            [
                'game_id' => $pubg->id,
                'name'    => '1000 G-Coin'
            ],
            [
                'price' => 155000
            ]
        );



    }
}
