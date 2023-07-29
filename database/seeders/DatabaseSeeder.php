<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name'=> 'alful',
        //     'email'=> 'alful@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        // User::create([
        //     'name'=> 'falakh',
        //     'email'=> 'falakh@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();


        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis id consequatur labore, quae incidunt, quia eligendi praesentium provident quidem ut laborum commodi dolores cupiditate molestiae delectus velit impedit sit, placeat eaque recusandae doloribus illum sint quo. Sapiente sunt at magni magnam, nostrum delectus labore, obcaecati voluptates eaque quo amet? Eligendi, tempora perferendis quod rem cumque quo fugit, quibusdam aliquam ratione laudantium temporibus voluptatem magnam maxime deleniti repellat similique. Natus deserunt soluta, assumenda hic quia vel officiis expedita quae quos, ipsa libero consectetur voluptatibus voluptatum ipsam fugit, mollitia culpa error repellendus distinctio consequuntur tempore corrupti! Velit accusantium quibusdam architecto quasi fugit.',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]);
        // Post::create([
        //     'title'=> 'Judul Kedua',
        //     'slug'=> 'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis id consequatur labore, quae incidunt, quia eligendi praesentium provident quidem ut laborum commodi dolores cupiditate molestiae delectus velit impedit sit, placeat eaque recusandae doloribus illum sint quo. Sapiente sunt at magni magnam, nostrum delectus labore, obcaecati voluptates eaque quo amet? Eligendi, tempora perferendis quod rem cumque quo fugit, quibusdam aliquam ratione laudantium temporibus voluptatem magnam maxime deleniti repellat similique. Natus deserunt soluta, assumenda hic quia vel officiis expedita quae quos, ipsa libero consectetur voluptatibus voluptatum ipsam fugit, mollitia culpa error repellendus distinctio consequuntur tempore corrupti! Velit accusantium quibusdam architecto quasi fugit.',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]);
        // Post::create([
        //     'title'=> 'Judul Ketga',
        //     'slug'=> 'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis id consequatur labore, quae incidunt, quia eligendi praesentium provident quidem ut laborum commodi dolores cupiditate molestiae delectus velit impedit sit, placeat eaque recusandae doloribus illum sint quo. Sapiente sunt at magni magnam, nostrum delectus labore, obcaecati voluptates eaque quo amet? Eligendi, tempora perferendis quod rem cumque quo fugit, quibusdam aliquam ratione laudantium temporibus voluptatem magnam maxime deleniti repellat similique. Natus deserunt soluta, assumenda hic quia vel officiis expedita quae quos, ipsa libero consectetur voluptatibus voluptatum ipsam fugit, mollitia culpa error repellendus distinctio consequuntur tempore corrupti! Velit accusantium quibusdam architecto quasi fugit.',
        //     'category_id'=>2,
        //     'user_id'=>1

        // ]);
        // Post::create([
        //     'title'=> 'Judul Keempat',
        //     'slug'=> 'judul-keempat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis id consequatur labore, quae incidunt, quia eligendi praesentium provident quidem ut laborum commodi dolores cupiditate molestiae delectus velit impedit sit, placeat eaque recusandae doloribus illum sint quo. Sapiente sunt at magni magnam, nostrum delectus labore, obcaecati voluptates eaque quo amet? Eligendi, tempora perferendis quod rem cumque quo fugit, quibusdam aliquam ratione laudantium temporibus voluptatem magnam maxime deleniti repellat similique. Natus deserunt soluta, assumenda hic quia vel officiis expedita quae quos, ipsa libero consectetur voluptatibus voluptatum ipsam fugit, mollitia culpa error repellendus distinctio consequuntur tempore corrupti! Velit accusantium quibusdam architecto quasi fugit.',
        //     'category_id'=>2,
        //     'user_id'=>2

        // ]);

    }
}
