<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blog(){
        
        $postOne = Post::where('id','<',10)->where('status', 'PUBLISHED')->first();
        $postsFour = Post::where('id','>',30)->where('status', 'PUBLISHED')->take(3)->get();
        $postsLatest = Post::where('id','>',40)->where('status', 'PUBLISHED')->take(3)->get();
        $postsPopular = Post::where('id','>',50)->where('status', 'PUBLISHED')->take(3)->get();
        // dd($postOne);
        return view('web.blog', compact('postOne', 'postsFour', 'postsLatest', 'postsPopular'));
    }
    
    public function tienda(){        
        return view('web.tienda');
    }

    public function guias(){        

        $europa = Country::where('continentSlug','europa')->orderBy('countrySlug')->get();
        $asia = Country::where('continentSlug','asia')->orderBy('countrySlug')->get();
        $africa = Country::where('continentSlug','africa')->orderBy('countrySlug')->get();
        $oceania = Country::where('continentSlug','oceania')->orderBy('countrySlug')->get();
        $northAmerica = Country::where('continentSlug','america-del-norte')->orderBy('countrySlug')->get();
        $southAmerica = Country::where('continentSlug','america-del-sur')->orderBy('countrySlug')->get();  

        return view('web.guias', compact('europa','asia','africa','oceania','northAmerica','southAmerica'));
    }

    public function contacto(){        
        return view('web.contacto');
    }
    
    public function post($slug){
        
        $post = Post::where('slug',$slug)->first();

        return view('web.post', compact('post'));
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
