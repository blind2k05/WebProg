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
        $games = [
            [
                'name' => 'Mobile Legends',
                'publisher' => 'Moonton',
                'description' => 'Game MOBA populer di mobile.',
                'image' => 'img/game/ML.png',
                'platform' => 'mobile',
                'is_popular' => true,
                'products' => [
                    ['name' => 'Diamond 86', 'price' => 20000],
                    ['name' => 'Diamond 172', 'price' => 40000],
                ]
            ],
            [
                'name' => 'PUBG',
                'publisher' => 'Krafton',
                'description' => 'Game Battle Royale populer.',
                'image' => 'img/game/PUBG.jpg',
                'platform' => 'pc',
                'is_popular' => true,
                'products' => [
                    ['name' => '500 G-Coin', 'price' => 80000],
                    ['name' => '1000 G-Coin', 'price' => 155000],
                ]
            ],
            [
                'name' => 'Free Fire',
                'publisher' => 'Garena',
                'description' => 'Game Battle Royale mobile ringan.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7IlzBpwGdTXuXI2w0YhwzybSGcYKAiC03fQ&s',
                'platform' => 'mobile',
                'is_popular' => true,
                'products' => [
                    ['name' => 'Diamond 100', 'price' => 15000],
                    ['name' => 'Diamond 500', 'price' => 70000],
                ]
            ],
            [
                'name' => 'Genshin Impact',
                'publisher' => 'HoYoverse',
                'description' => 'Game RPG open world.',
                'image' => 'img/game/genshin.jpg',
                'platform' => 'multi-platform',
                'is_popular' => true,
                'products' => [
                    ['name' => 'Blessing of the Welkin Moon', 'price' => 79000],
                    ['name' => 'Genesis Crystal 980', 'price' => 159000],
                ]
            ],
            [
                'name' => 'Valorant',
                'publisher' => 'Riot Games',
                'description' => 'Game FPS kompetitif.',
                'image' => 'img/game/valo.jpg',
                'platform' => 'pc',
                'is_popular' => true,
                'products' => [
                    ['name' => '475 VP', 'price' => 50000],
                    ['name' => '1000 VP', 'price' => 100000],
                ]
            ],
            [
                'name' => 'League of Legends',
                'publisher' => 'Riot Games',
                'description' => 'Game MOBA PC.',
                'image' => 'img/game/lol.jpg',
                'platform' => 'pc',
                'is_popular' => true,
                'products' => [
                    ['name' => '575 RP', 'price' => 50000],
                    ['name' => '1380 RP', 'price' => 100000],
                ]
            ],
            [
                'name' => 'Dota 2',
                'publisher' => 'Valve',
                'description' => 'Game MOBA kompetitif.',
                'image' => 'img/game/dota2.jpg',
                'platform' => 'pc',
                'is_popular' => false,
                'products' => [
                    ['name' => 'Battle Pass', 'price' => 150000],
                    ['name' => 'Level Bundle', 'price' => 300000],
                ]
            ],
            [
                'name' => 'Call of Duty Mobile',
                'publisher' => 'Activision',
                'description' => 'FPS mobile populer.',
                'image' => 'img/game/codmob.jpg',
                'platform' => 'mobile',
                'is_popular' => true,
                'products' => [
                    ['name' => '80 CP', 'price' => 15000],
                    ['name' => '420 CP', 'price' => 75000],
                ]
            ],
            [
                'name' => 'Apex Legends',
                'publisher' => 'Electronic Arts',
                'description' => 'Battle Royale FPS.',
                'image' => 'img/game/apex.jpg',
                'platform' => 'pc',
                'is_popular' => false,
                'products' => [
                    ['name' => '1000 Apex Coins', 'price' => 150000],
                    ['name' => '2150 Apex Coins', 'price' => 300000],
                ]
            ],
            [
                'name' => 'Honkai Star Rail',
                'publisher' => 'HoYoverse',
                'description' => 'Turn-based RPG.',
                'image' => 'img/game/honkai.jpg', 
                'platform' => 'multi-platform',
                'is_popular' => true,
                'products' => [
                    ['name' => 'Express Supply Pass', 'price' => 79000],
                    ['name' => 'Oneiric Shard 980', 'price' => 159000],
                ]
            ],
            [
                'name' => 'Clash of Clans',
                'publisher' => 'Supercell',
                'description' => 'Game strategi membangun desa dan perang klan.',
                'image' => 'img/game/coc.jpg',
                'platform' => 'mobile',
                'is_popular' => true,
                'products' => [
                    ['name' => 'Gold Pass', 'price' => 79000],
                    ['name' => '500 Gems', 'price' => 75000],
                    ['name' => '1200 Gems', 'price' => 149000],
                ]
            ],
            [
                'name' => 'Clash Royale',
                'publisher' => 'Supercell',
                'description' => 'Game strategi real-time dengan kartu.',
                'image' => 'img/game/cr.jpg',
                'platform' => 'mobile',
                'is_popular' => false,
                'products' => [
                    ['name' => 'Pass Royale', 'price' => 79000],
                    ['name' => '500 Gems', 'price' => 75000],
                ]
            ],
            [
                'name' => 'Minecraft',
                'publisher' => 'Mojang',
                'description' => 'Game sandbox kreatif dan survival.',
                'image' => 'img/game/minecraft.jpg',
                'platform' => 'multi-platform',
                'is_popular' => true,
                'products' => [
                    ['name' => 'Minecraft Java Edition', 'price' => 399000],
                    ['name' => 'Minecraft Bedrock Edition', 'price' => 349000],
                ]
            ],
            [
                'name' => 'Roblox',
                'publisher' => 'Roblox Corporation',
                'description' => 'Platform game online dengan konten buatan user.',
                'image' => 'img/game/roblox.jpg',
                'platform' => 'multi-platform',
                'is_popular' => true,
                'products' => [
                    ['name' => '400 Robux', 'price' => 75000],
                    ['name' => '800 Robux', 'price' => 149000],
                    ['name' => '1700 Robux', 'price' => 299000],
                ]
            ],
            [
                'name' => 'Hearthstone',
                'publisher' => 'Blizzard Entertainment',
                'description' => 'Game kartu strategi online.',
                'image' => 'img/game/hs.jpg',
                'platform' => 'pc',
                'is_popular' => false,
                'products' => [
                    ['name' => 'Card Pack x15', 'price' => 299000],
                    ['name' => 'Mega Bundle', 'price' => 799000],
                ]
            ],
            [
                'name' => 'Brawl Stars',
                'publisher' => 'Supercell',
                'description' => 'Game aksi 3v3 cepat dan kompetitif.',
                'image' => 'img/game/brawl.jpg',
                'platform' => 'mobile',
                'is_popular' => true,
                'products' => [
                    ['name' => '170 Gems', 'price' => 79000],
                    ['name' => '360 Gems', 'price' => 149000],
                ]
            ],
            [
                'name' => 'Stumble Guys',
                'publisher' => 'Kitka Games',
                'description' => 'Game party battle royale yang seru.',
                'image' => 'img/game/stumbleguys.jpg',
                'platform' => 'mobile',
                'is_popular' => false,
                'products' => [
                    ['name' => '250 Gems', 'price' => 50000],
                    ['name' => '800 Gems', 'price' => 150000],
                ]
            ],
            [
                'name' => 'Among Us',
                'publisher' => 'Innersloth',
                'description' => 'Game deduksi sosial multiplayer.',
                'image' => 'img/game/among.png',
                'platform' => 'multi-platform',
                'is_popular' => false,
                'products' => [
                    ['name' => 'Cosmicube', 'price' => 79000],
                    ['name' => 'Stars Pack', 'price' => 129000],
                ]
            ],
        ];

        foreach ($games as $gameData) {
            $game = Game::updateOrCreate(
                ['name' => $gameData['name']],
                [
                    'publisher' => $gameData['publisher'],
                    'description' => $gameData['description'],
                    'image' => $gameData['image'],
                    'platform' => $gameData['platform'],
                    'is_popular' => $gameData['is_popular'],
                ]
            );

            foreach ($gameData['products'] as $product) {
                Product::updateOrCreate(
                    [
                        'game_id' => $game->id,
                        'name' => $product['name'],
                    ],
                    [
                        'price' => $product['price'],
                    ]
                );
            }
        }
    }
}
