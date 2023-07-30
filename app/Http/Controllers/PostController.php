<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'post',
            // "posts"=>Post::all()
            // "posts"=>Post::latest()->get()
            "posts" =>  Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()

            // yg dbawah queri lebih sedikit. klo pake bawah-> harus hapus     protected $with=['category','author']; -> di Post (Models)

            // "posts"=>Post::with(['author', 'category'])->latest()->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('post', [
            "title" => "Single Post",
            "active" => 'post',
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
