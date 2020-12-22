<?php

namespace App\Http\Livewire;

use App\Models\Video;
use App\Models\Playlist;
use App\Models\Post;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {  
        $playlists = Playlist::where('id','>',Playlist::count()-6)->orderby('id','DESC')->get();
        foreach($playlists as $playlist){
            
            $items[$playlist->name] = Post::where('id','>',$playlist->video_id)->take($playlist->num)->get();   
            $items[$playlist->name]->prepend(Video::where('id','=',$playlist->video_id)->first());   
        }
        // dd($items);
        return view('livewire.home',[
            'list_items'   => $items
            ]);
    }
    
}
