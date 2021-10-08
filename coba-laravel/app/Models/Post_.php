<?php

namespace App\Models;


class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rifqi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, voluptatum nesciunt similique obcaecati voluptates nemo error enim magnam ullam ratione iusto quaerat explicabo libero esse non laudantium accusantium harum, laborum, maxime impedit quos porro. Sint aut eaque dolorem hic accusantium soluta voluptatibus molestias aperiam quisquam dolores sunt dolor eligendi vero unde veritatis cupiditate mollitia itaque qui pariatur fugit exercitationem, cum sequi omnis? Tempora placeat ipsa similique odit, atque eveniet odio quibusdam deserunt voluptates voluptatem voluptatibus in reiciendis, aperiam, hic magni."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mulya",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae placeat quisquam esse aliquam deserunt architecto at atque quo, incidunt fuga accusantium laboriosam dignissimos. Doloremque alias nostrum, asperiores repellat ipsum autem a et, placeat ratione laboriosam quisquam dolor earum, sunt maxime vitae velit numquam facilis corrupti molestiae dolorum. Rem officia, dignissimos asperiores exercitationem aspernatur voluptatibus error. Itaque voluptatem culpa mollitia laudantium, nisi eveniet! Doloribus iste voluptate quod aliquid soluta eum unde placeat, ipsa hic assumenda fugiat, optio voluptatibus nisi voluptates. Tempore recusandae, ad voluptate nesciunt nihil tempora facere harum doloribus. Iste blanditiis consequatur ex beatae sint! Et, dolorum reiciendis. Reiciendis, numquam."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post -> firstWhere('slug', $slug);
    }
    
}
