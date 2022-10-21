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
                'penerbit' => 'Namco',
                'platform' => 'PC, Arcade, Atari',
                'pengembang_id' => '1',
            ],
            [
                'id' => '2',
                'judul' => 'Donkey Kong',
                'tahun' => '1981',
                'penerbit' => 'Nintendo',
                'platform' => 'Arcade, NES',
                'pengembang_id' => '2',
            ],
            [
                'id' => '3',
                'judul' => 'Tron',
                'tahun' => '1982',
                'penerbit' => 'Midway',
                'platform' => 'Arcade, Xbox360',
                'pengembang_id' => '3',
            ],
            [
                'id' => '4',
                'judul' => 'Mario Bros',
                'tahun' => '1983',
                'penerbit' => 'Nintendo',
                'platform' => 'Arcade, NES',
                'pengembang_id' => '2',
            ],
            [
                'id' => '5',
                'judul' => 'Knight Lore',
                'tahun' => '1984',
                'penerbit' => 'Ultimate Game',
                'platform' => 'BBC Micro, Famicom',
                'pengembang_id' => '4',
            ],
            [
                'id' => '6',
                'judul' => 'Super Mario Bros',
                'tahun' => '1985',
                'penerbit' => 'Nintendo',
                'platform' => 'NES',
                'pengembang_id' => '2',
            ],
            [
                'id' => '7',
                'judul' => 'Legend of Zelda',
                'tahun' => '1986',
                'penerbit' => 'Nintendo',
                'platform' => 'NES, Famicom',
                'pengembang_id' => '2',
            ],
            [
                'id' => '8',
                'judul' => 'Mike Tyson PO',
                'tahun' => '1987',
                'penerbit' => 'Nintendo',
                'platform' => 'Arcade, NES',
                'pengembang_id' => '2',
            ],
            [
                'id' => '9',
                'judul' => 'Speedball',
                'tahun' => '1988',
                'penerbit' => 'Image Works',
                'platform' => 'PC, Atari, Amiga',
                'pengembang_id' => '5',
            ],
            [
                'id' => '10',
                'judul' => 'Tetris',
                'tahun' => '1989',
                'penerbit' => 'Nintendo',
                'platform' => 'Game boy',
                'pengembang_id' => '1',
            ],
            
        ];
        $this->call([PublisherSeeder::class]);
        foreach($goty as $ps) {
            \App\Models\Games::firstOrCreate($ps);
        }
    }
}
