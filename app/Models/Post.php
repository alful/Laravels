<?php

namespace App\Models;

use Illuminate\View\View;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;

    // public function index()
    // {


    // }

    // protected $fillable=[
    //     'title',
    //     'excerpt',
    //     'body'  
    // ];

    protected $guarded = ['id'];
    protected $with = ['category', 'author'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    //penggunaan fungsi dibawah akan terjadi apabila ada pengambilan data menggunakan $post->author-> ... . hal ini terjadi karena tabel user id diganti dengan author seperti dibawah. sehingga pengambilan data akan berubah
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function postss()
    // {
    //     return $this->latest()->take(3)->get();
    // }


    // public function image()
    // {
    //     return $this->has(Post::class, 'image');
    // }



    //scope harus ada
    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%');
        });
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
        // $query->when($filters['author'] ?? false, function ($query, $author) {
        //     return $query->whereHas('username', function ($query) use ($author) {
        //         $query->where('username', $author);
        //     });
        // });
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas('author', fn ($query) => $query->where('username', $author))
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

// class Post
// {
//     static $blog_posts=[
//         [
//             "title"=>"Judul Post Pertama",
//             "slug"=>"judul-post-pertama",
//             "author"=> "alful",
//             "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam debitis eligendi nisi sint illo dolorem quia ducimus exercitationem a numquam optio itaque magnam libero atque, vero reiciendis quam. Repudiandae quae blanditiis quasi unde fugit cumque laborum, necessitatibus quidem est placeat ratione nihil voluptate, quam eos? Qui placeat suscipit molestias fugit! Laborum, enim magni corporis tempora, inventore sapiente, distinctio ullam deserunt ipsam asperiores minima doloribus quia. Vero, sed maiores! Natus repellat fugit culpa nesciunt consequuntur facilis commodi consequatur, quia veniam sed provident possimus dolorem harum ut id at expedita! Numquam dolor fugit libero. Explicabo ab possimus repudiandae impedit maxime. Error, mollitia?"
    
//         ],
//         [
//             "title"=>"Judul Post Kedua",
//             "slug"=>"judul-post-kedua",
//             "author"=> "falakh",
//             "body"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae odio illo esse! Ullam quae at, officia veritatis saepe maiores blanditiis mollitia non vero earum neque nesciunt soluta nisi nulla consequuntur incidunt recusandae dolores! Illo reiciendis vitae incidunt laboriosam tenetur? Nam beatae rerum, quia iste totam dolorum fugiat officiis ullam reiciendis sint nihil quibusdam non aspernatur nulla numquam id incidunt officia sunt atque cupiditate magni a? Facere repellendus ipsam quae eos eligendi, deserunt illum illo voluptatem, fugit voluptatibus laudantium perspiciatis, quaerat soluta eum. Molestiae nobis distinctio corporis corrupti quasi maiores dolorem voluptas, ea sit est consectetur natus sapiente veritatis perferendis obcaecati dicta fugit illo, minima labore modi magnam eligendi. Impedit maiores nihil explicabo nobis. Numquam ex tenetur deserunt, vel voluptas rem? Qui aut esse consequatur asperiores laboriosam similique alias, totam distinctio placeat quod eos neque molestias soluta. Voluptatem est magni, vel nam ipsam, suscipit nisi veritatis optio ducimus illum sed debitis."
    
//         ]
//     ];
    
//     public static function all()
//     {
//         return collect(self::$blog_posts);
//     }

//     public static function find($slug)
//     {
//         $posts= static::all();
        
        
//         return $posts->firstWhere('slug',$slug);
//     }
// }
// // $post = [];
// // foreach ($posts as $p) {
// //     if ($p["slug"] === $slug) {
// //         $post = $p;
// //     }
// // }