<?php
use App\Http\Livewire\Map;
use App\Http\Livewire\Home;
use App\Http\Livewire\Guias;
use App\Http\Livewire\Store;
use App\Http\Livewire\Videos;
use App\Http\Livewire\Tags;
use App\Http\Livewire\Admin;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ScrapingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('blog');
// });

// Route::redirect('/', 'blog');

// Route::get('/', [PagesController::class, 'home'])->name('home');
// Route::get('/tienda', [PagesController::class, 'tienda'])->name('tienda');

Route::get('/', Home::class)->name('home');
Route::get('/videos', Videos::class)->name('videos');
Route::get('/tienda', Store::class)->name('tienda');
Route::get('/mundo', Map::class)->name('mapa');
Route::get('/Guias', Guias::class)->name('guias');
Route::get('/admin', Admin::class)->name('admin');
Route::get('/admin/tags', Tags::class)->name('tags');


// Route::get('/videos', [PagesController::class, 'videos'])->name('videos');
Route::get('/video/{link}', [PagesController::class, 'video'])->name('video');
// Route::get('/video/{link}', function () { return view('web.video', compact('link')); })->name('video');

Route::get('/guias', [PagesController::class, 'guias'])->name('guias');
Route::get('/guias/{slug}', [PagesController::class, 'guia'])->name('guia');


Route::get('/contacto', [PagesController::class, 'contacto'])->name('contacto');


Route::get('/post/{slug}', [PagesController::class, 'post'])->name('post');
Route::get('/posts/categoria/{slug}', [PagesController::class, 'category'])->name('posts_category');
Route::get('/posts/hastag/{slug}', [PagesController::class, 'tag'])->name('posts_tag');
Route::get('/posts/pais/{slug}', [PagesController::class, 'country'])->name('posts_country');


// Controllers ADMIN

Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);


Route::get('/scraping/base', [ScrapingController::class, 'scraping'])->name('scraping');
Route::get('/scraping', [ScrapingController::class, 'seeder_country'])->name('seeder_country');
Route::get('/scraping', [ScrapingController::class, 'dades_web_gob'])->name('scrap_dades');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
