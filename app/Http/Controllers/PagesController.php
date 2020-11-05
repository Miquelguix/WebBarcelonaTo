<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blog(){

        $postOne = Post::where('id','<',10)->where('status', 'PUBLISHED')->first();
        $postsFour = Post::where('id','>',30)->where('status', 'PUBLISHED')->take(4)->get();
        $postsLatest = Post::where('id','>',40)->where('status', 'PUBLISHED')->take(3)->get();
        $postsPopular = Post::where('id','>',50)->where('status', 'PUBLISHED')->take(3)->get();
        // dd($postOne);
        return view('web.posts', compact('postOne', 'postsFour', 'postsLatest', 'postsPopular'));
    }
}
