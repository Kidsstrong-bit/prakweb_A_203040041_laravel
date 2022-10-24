<?php

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alfi Syahrin R",
        "email" => "alfisyah672@gmail.com",
        "image" => "als.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alfi Syahrin R",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dignissimos deserunt atque voluptatibus expedita cumque molestias! Eligendi et iusto minima sed sapiente quo tenetur vel doloribus repellat? Unde animi iste debitis consequuntur sint dignissimos incidunt tempore earum aspernatur repellat temporibus saepe neque aperiam soluta veritatis, nemo hic quos quam quis delectus aliquid libero velit? Delectus voluptatum cumque cum numquam consequuntur odit ducimus obcaecati ab! Excepturi veritatis, id culpa tempora voluptatem amet beatae illo vitae dicta eaque sequi corporis, itaque aut!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mamank Ginanjar",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, nisi odio. Corrupti architecto magnam dignissimos, et optio blanditiis, rerum non id quidem quo vel, aliquid voluptatum maiores. Blanditiis accusamus odit, laudantium voluptatibus officiis a ducimus perspiciatis neque dolorem, exercitationem molestiae nemo beatae voluptate, numquam odio quia suscipit at. Nobis, itaque nemo. Enim, autem unde quidem, tempora eligendi nesciunt odio blanditiis aliquid necessitatibus recusandae a, eum repudiandae! Minima voluptas, repellat nulla suscipit corrupti blanditiis! Temporibus optio possimus officiis! Reprehenderit sunt fugit voluptate minus quos, adipisci, fugiat aut voluptatem eligendi laudantium maxime iure quae harum nobis! Voluptatem ex minus non fuga repellendus!"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alfi Syahrin R",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dignissimos deserunt atque voluptatibus expedita cumque molestias! Eligendi et iusto minima sed sapiente quo tenetur vel doloribus repellat? Unde animi iste debitis consequuntur sint dignissimos incidunt tempore earum aspernatur repellat temporibus saepe neque aperiam soluta veritatis, nemo hic quos quam quis delectus aliquid libero velit? Delectus voluptatum cumque cum numquam consequuntur odit ducimus obcaecati ab! Excepturi veritatis, id culpa tempora voluptatem amet beatae illo vitae dicta eaque sequi corporis, itaque aut!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mamank Ginanjar",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, nisi odio. Corrupti architecto magnam dignissimos, et optio blanditiis, rerum non id quidem quo vel, aliquid voluptatum maiores. Blanditiis accusamus odit, laudantium voluptatibus officiis a ducimus perspiciatis neque dolorem, exercitationem molestiae nemo beatae voluptate, numquam odio quia suscipit at. Nobis, itaque nemo. Enim, autem unde quidem, tempora eligendi nesciunt odio blanditiis aliquid necessitatibus recusandae a, eum repudiandae! Minima voluptas, repellat nulla suscipit corrupti blanditiis! Temporibus optio possimus officiis! Reprehenderit sunt fugit voluptate minus quos, adipisci, fugiat aut voluptatem eligendi laudantium maxime iure quae harum nobis! Voluptatem ex minus non fuga repellendus!"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single post",
        "post" => $new_post
    ]);
});
