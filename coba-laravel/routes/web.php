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
        "name" => "Rifqi M Kiswanto",
        "email" => "rifqimulya@gmail.com",
        "image" => "ironman.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_post = [
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

    return view('post', [
        "title" => "Post",
        "posts" => $blog_post
    ]);
});

//halaman single post
Route::get('post/{slug}', function ($slug) {
    $blog_post = [
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

    $new_post = [];
    foreach($blog_post as $post) {
        if($post["slug"] == $slug){
            $new_post = $post;
        }
    }
    return view('postt', [
        "title" => "Single Post",
        "postt" => $new_post
    ]);
});