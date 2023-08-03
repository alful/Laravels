<?php

use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Providers\RouteServiceProvider;
use NunoMaduro\Collision\Provider;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('post',function(){
//     return view('post',[
//         "title"=> "Post",
//         "posts"=> Post::all()
//     ]);
// });
Route::get('/', function () {
    return view('home', [
        'title' => 'Home',

        'name' => 'Muhammad Alful Falakh',
        'email' => 'alfulfalakh@gmail.com',

    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',

        'name' => 'Muhammad Alful Falakh',
        'email' => 'alfulfalakh@gmail.com',
        // 'image'=>'apaya.jpg'
    ]);
});



// Route::get('/blog', function () {


//     // return view('posts', [
//     //     'title' => 'Post',
//     //     'posts' => Post::all()
//     //     // "posts"=> Post::all();
//     // ]);
// });

Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts',function(Post $post){
//     return view('post',[
//         'title'=>"Halaman Post"
//     ]);
// });

// Route::get('/posts',function(Post $post){
//     return view('post',[
//         'title'=>"Halaman Post"
//     ]);
// });

//halaman post
// Route::get('/posts/{slug}', function ($slug) {

//     return view('post', [
//         "title" => "Single Post",
//         "post" => Post::find($slug)
//     ]);
// });

// {post:slug} berfungsi untuk mencari data sesuai slug. jika :slug dihapus -> maka akan mencari data sesuai id
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Route::get('/posts/{slug}', [PostController::class, 'show']);

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         "active" => 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});


// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         "active" => 'posts',

//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });

// nanti diarahin sesuai Home dari App/Http/Provider/RouteServiceProvider
// Route::get('/login', [LoginController::class, 'index'])->middleware('guest');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
//nyimpan data
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth')->name('posts.checkSlug');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', DashboardCategoryController::class)->middleware('auth');
Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('auth')->name('categories.checkSlug');



// Route::get('/dashboard/posts/{post:slug}');