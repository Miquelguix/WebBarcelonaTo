<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Playlist::create([
            'name'      => 'IRLANDA',
            'video_id'  => 2,
            'num'       => 6
        ]);

        Playlist::create([
            'name'      => 'MARRUECOS',
            'video_id'  => 8,
            'num'       => 7
        ]);

        Playlist::create([
            'name'      => 'REPÚBLICA CHECA',
            'video_id'  => 15,
            'num'       => 5
        ]);

        Playlist::create([
            'name'      => 'PAISES BAJOS',
            'video_id'  => 20,
            'num'       => 6
        ]);

        Playlist::create([
            'name'      => 'BÉLGICA',
            'video_id'  => 26,
            'num'       => 3
        ]);

        Playlist::create([
            'name'      => 'ITALIA',
            'video_id'  => 29,
            'num'       => 5
        ]);

        Playlist::create([
            'name'      => 'VIETNAM',
            'video_id'  => 34,
            'num'       => 8
        ]);

        Playlist::create([
            'name'      => 'MYANMAR',
            'video_id'  => 42,
            'num'       => 8
        ]);

        Playlist::create([
            'name'      => 'MALTA',
            'video_id'  => 50,
            'num'       => 4
        ]);

        Playlist::create([
            'name'      => 'ISRAEL Y PALESTINA',
            'video_id'  => 54,
            'num'       => 8
        ]);

        Playlist::create([
            'name'      => 'JORDANIA',
            'video_id'  => 62,
            'num'       => 6
        ]);
        
        Playlist::create([
            'name'      => 'PARIS',
            'video_id'  => 68,
            'num'       => 4
        ]);

        Playlist::create([
            'name'      => 'ISLANDIA',
            'video_id'  => 73,
            'num'       => 4
        ]);   
    }
}
