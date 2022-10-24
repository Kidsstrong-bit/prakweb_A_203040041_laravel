<?php

namespace App\Models;

<<<<<<< HEAD
class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Gilang Ramadhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dignissimos deserunt atque voluptatibus expedita cumque molestias! Eligendi et iusto minima sed sapiente quo tenetur vel doloribus repellat? Unde animi iste debitis consequuntur sint dignissimos incidunt tempore earum aspernatur repellat temporibus saepe neque aperiam soluta veritatis, nemo hic quos quam quis delectus aliquid libero velit? Delectus voluptatum cumque cum numquam consequuntur odit ducimus obcaecati ab! Excepturi veritatis, id culpa tempora voluptatem amet beatae illo vitae dicta eaque sequi corporis, itaque aut!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gilang Ramadhan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, nisi odio. Corrupti architecto magnam dignissimos, et optio blanditiis, rerum non id quidem quo vel, aliquid voluptatum maiores. Blanditiis accusamus odit, laudantium voluptatibus officiis a ducimus perspiciatis neque dolorem, exercitationem molestiae nemo beatae voluptate, numquam odio quia suscipit at. Nobis, itaque nemo. Enim, autem unde quidem, tempora eligendi nesciunt odio blanditiis aliquid necessitatibus recusandae a, eum repudiandae! Minima voluptas, repellat nulla suscipit corrupti blanditiis! Temporibus optio possimus officiis! Reprehenderit sunt fugit voluptate minus quos, adipisci, fugiat aut voluptatem eligendi laudantium maxime iure quae harum nobis! Voluptatem ex minus non fuga repellendus!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();  
        return $posts->firstWhere('slug', $slug);

    }
=======


class Post
{
>>>>>>> d2f9b471694f517764fb15dd5139a83fd0bbb04a
}
