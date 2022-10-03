<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $goty = [
            [
                'id' => '1',
                'judul' => 'Pac Man',
                'tahun' => '1980',
                'pengembang' => 'Namco',
                'penerbit' => 'Namco',
                'platform' => 'PC, Arcade, Atari',
            ],
            [
                'id' => '2',
                'judul' => 'Donkey Kong',
                'tahun' => '1981',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'Arcade, NES',
            ],
            [
                'id' => '3',
                'judul' => 'Tron',
                'tahun' => '1982',
                'pengembang' => 'Midway',
                'penerbit' => 'Midway',
                'platform' => 'Arcade, Xbox360',
            ],
            [
                'id' => '4',
                'judul' => 'Mario Bros',
                'tahun' => '1983',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'Arcade, NES',
            ],
            [
                'id' => '5',
                'judul' => 'Knight Lore',
                'tahun' => '1984',
                'pengembang' => 'Ultimate Game',
                'penerbit' => 'Ultimate Game',
                'platform' => 'BBC Micro, Famicom',
            ],
            [
                'id' => '6',
                'judul' => 'Super Mario Bros',
                'tahun' => '1985',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'NES',
            ],
            [
                'id' => '7',
                'judul' => 'Legend of Zelda',
                'tahun' => '1986',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'NES, Famicom',
            ],
            [
                'id' => '8',
                'judul' => 'Mike Tyson PO',
                'tahun' => '1987',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'Arcade, NES',
            ],
            [
                'id' => '9',
                'judul' => 'Speedball',
                'tahun' => '1988',
                'pengembang' => 'Bitmap Brothers',
                'penerbit' => 'Image Works',
                'platform' => 'PC, Atari, Amiga',
            ],
            [
                'id' => '10',
                'judul' => 'Tetris',
                'tahun' => '1988',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'Game boy',
            ]
            

        ];
        foreach($goty as $ps) {
            \App\Models\Games::firstOrCreate($ps);
        }
    }
}
