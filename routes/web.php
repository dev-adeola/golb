<?php

use App\Models\Post;
use Inertia\Inertia;
use App\Models\Subcategory;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SubscriberController;


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

Route::get('/', function () {
    return Inertia::render('Home', [
        'name'  => 'Adeola Oladoja',
        'age' => 35,
        'gender' => 'Male',
        'data' => Post::latest()->first()->load(['author']),
        'sidePost' => Post::latest()->take(4)->get()->load(['author'])
    ]);
})->name('home');


Route::post('/subscribe', [SubscriberController::class, 'subscribeGuest'])->name("subscribe");



Route::get('/segment/{slug}', function ($slug) {
    return Inertia::render('Segment', [
        'name'  => 'Adeola Oladoja',
        'age' => 35,
        'gender' => 'Male',
        'data' => getSingleData($slug),
        'sidePost' => getMultiData($slug) 
    ]);
});


Route::get('/search/{slug}', function ($slug) {
    $query = str_replace('+', ' ', $slug);
    return Inertia::render('Search',[
        'posts'  => Post::query()
        ->when($query, function($search, $params){
            $search->where('content', 'like', "%$params%")
            ->orWhere('title', 'like', "%$params%");
        })->paginate(5)->load(['author'])
    ]);
})->name('search');

Route::post('/search', [SearchController::class, 'search']);

Route::get('/post/{slug}', function ($slug) {
    return Inertia::render('Post', [
        'post'  => Post::where('slug', $slug)->first()->load(['author'])
    ]);
});

function getSingleData($slug) {
    $data = Subcategory::where('slug', $slug)->first();
   
    
    $post = Post::where('subcategory_id', $data->id)->first()->load(['author']);
    $posts = [
        'title' => $post->title,
        'meta_title' => $post->meta_title,
        'content' => $post->content,
        'name' => $post->author->firstname.' '.$post->author->lastname,
        'date' => $post->created_at,
        'slug' => $post->slug
    ]; 

    return $posts;
}

function getMultiData($slug) {
    $data = Subcategory::where('slug', $slug)->first();
    return Post::where('subcategory_id', $data->id)->take(4)->get()->load(['author'])->map(fn($post) => [
        'title' => $post->title,
        'content' => $post->content,
        'name' => $post->author->firstname.' '.$post->author->lastname,
        'date' => $post->created_at,
        'slug' => $post->slug
    ]); 

}
