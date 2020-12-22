<?php

namespace App\Http\Livewire;

use App\Models\Video;
use App\Models\Playlist;
use Livewire\Component;

class Videos extends Component
{
    public function render()
    {   $playlists = Playlist::where('id','>',Playlist::count()-6)->orderby('id','DESC')->get();
        foreach($playlists as $playlist){
            $videos[$playlist->name] = Video::where('id','>=',$playlist->video_id)->take($playlist->num)->get();   
        }
        return view('livewire.videos',[
            'list_items'   => $videos
        ]);
    }
}
