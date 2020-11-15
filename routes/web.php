<?php
use App\Http\Controllers\PagesController;
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

Route::redirect('/', 'blog');

Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/tienda', [PagesController::class, 'tienda'])->name('tienda');


Route::get('/guias', [PagesController::class, 'guias'])->name('guias');
Route::get('/guias/{slug}', [PagesController::class, 'guia'])->name('guia');


Route::get('/contacto', [PagesController::class, 'contacto'])->name('contacto');


Route::get('/post/{slug}', [PagesController::class, 'post'])->name('post');
Route::get('/posts/categoria/{slug}', [PagesController::class, 'category'])->name('posts_category');
Route::get('/posts/hastag/{slug}', [PagesController::class, 'tag'])->name('posts_tag');
Route::get('/posts/pais/{slug}', [PagesController::class, 'country'])->name('posts_country');


Route::get('/scraping/base', [ScrapingController::class, 'scraping'])->name('scraping');
Route::get('/scraping', [ScrapingController::class, 'seeder_country'])->name('seeder_country');
Route::get('/scraping', [ScrapingController::class, 'dades_web_gob'])->name('scrap_dades');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
