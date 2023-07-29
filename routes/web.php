<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
        "active" => 'home',

        'name' => 'Muhammad Alful Falakh',
        'email' => 'alfulfalakh@gmail.com',

    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        "active" => 'about',

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

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        "active" => 'categories',
        'posts' => $category->posts->load('category', 'author'),
    ]);
});


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});
