<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    
    

    public function guias(){        

        $europa = Country::where('continentSlug','europa')->orderBy('countrySlug')->get();
        $asia = Country::where('continentSlug','asia')->orderBy('countrySlug')->get();
        $africa = Country::where('continentSlug','africa')->orderBy('countrySlug')->get();
        $oceania = Country::where('continentSlug','oceania')->orderBy('countrySlug')->get();
        $northAmerica = Country::where('continentSlug','america-del-norte')->orderBy('countrySlug')->get();
        $southAmerica = Country::where('continentSlug','america-del-sur')->orderBy('countrySlug')->get();
        // dd($europa);

        return view('web.guias.index', compact('europa','asia','africa','oceania','northAmerica','southAmerica'));
    }

    public function guia($slug){        

        $country = Country::where('countrySlug', $slug )->first();

        return view('web.guias.show', compact('country'));
    }

    public function contacto(){        
        return view('web.contacto');
    }
    
    public function post($slug){
        
        $post = Post::where('slug',$slug)->first();

        return view('web.post', compact('post'));
    }

    public function video($slug){
        
        $video = Video::where('slug',$slug)->select('link')->first();
        // dd($video);
        return view('web.video', compact('video'));
    }

    public function category($slug){

        $category = Category::where('slug', $slug)->pluck('id')->first();
        $post = Post::where('category_id',$category)->first();

        return view('web.post', compact('post'));
    }

    public function tag($slug){
        
        $post = Post::where('slug',$slug)->first();

        return view('web.post', compact('post'));
    }

    public function country($slug){
        
        $country = Country::where('slug', $slug)->pluck('id')->first();
        $post = Post::where('slug',$slug)->first();

        return view('web.post', compact('post'));
    }
}
