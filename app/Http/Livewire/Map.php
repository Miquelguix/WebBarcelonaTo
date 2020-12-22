<?php

namespace App\Http\Livewire;

use App\Models\Playlist;
use App\Models\Video;
use Livewire\Component;

class Map extends Component
{
    public function render()
    {

        $items = Video::all();

        

        
        return view('livewire.map',[
            'items' => $items
        ]);
    }
}
