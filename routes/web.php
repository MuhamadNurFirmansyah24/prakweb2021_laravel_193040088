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
        "name" => "Muhamad Nur Firmansyah",
        "email" => "muhamadnurfirmansyah66450@gmail.com",
        "image" => "mhn.jpeg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-posts-pertama",
            "author" => "Muhamad Nur Firmansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia accusamus est 
            eveniet! Repudiandae vitae rem architecto veritatis cupiditate vero officia quia. Similique 
            quaerat esse sed optio doloribus incidunt, dolorem amet! Ratione, iste earum dolorem incidunt 
            laboriosam cumque labore quae ullam illum quisquam quod, repudiandae nobis assumenda est, 
            molestias delectus officia aliquam cum reiciendis quas quia inventore quos? Sed a, 
            dolores voluptatum possimus, enim, necessitatibus aliquid minima explicabo nihil omnis nam. 
            Delectus soluta perspiciatis exercitationem recusandae deleniti, officia commodi ex hic!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-posts-kedua",
            "author" => "Giordano",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, assumenda sint 
            vitae molestiae necessitatibus, deserunt minus distinctio, tempore rerum error eveniet eum modi 
            corporis voluptas dolore rem nesciunt quo! Praesentium, suscipit non? Harum delectus animi 
            perspiciatis, voluptatem consectetur nisi quasi sunt commodi facilis dolores modi, reiciendis
            libero. Iste consequuntur dignissimos cupiditate neque ex! Ullam repellat ducimus id facilis 
            natus quidem velit consequatur dignissimos! Praesentium quidem rerum nihil velit quae asperiores
            mollitia qui similique earum aliquam, amet assumenda fugit vitae quisquam sint perferendis neque. 
            Hic impedit beatae laudantium saepe ratione sunt. Dolorem quia inventore impedit corporis, odit iure
            expedita in consequatur?"
        ],
        ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-posts-pertama",
            "author" => "Muhamad Nur Firmansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia accusamus est 
            eveniet! Repudiandae vitae rem architecto veritatis cupiditate vero officia quia. Similique 
            quaerat esse sed optio doloribus incidunt, dolorem amet! Ratione, iste earum dolorem incidunt 
            laboriosam cumque labore quae ullam illum quisquam quod, repudiandae nobis assumenda est, 
            molestias delectus officia aliquam cum reiciendis quas quia inventore quos? Sed a, 
            dolores voluptatum possimus, enim, necessitatibus aliquid minima explicabo nihil omnis nam. 
            Delectus soluta perspiciatis exercitationem recusandae deleniti, officia commodi ex hic!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-posts-kedua",
            "author" => "Giordano",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, assumenda sint 
            vitae molestiae necessitatibus, deserunt minus distinctio, tempore rerum error eveniet eum modi 
            corporis voluptas dolore rem nesciunt quo! Praesentium, suscipit non? Harum delectus animi 
            perspiciatis, voluptatem consectetur nisi quasi sunt commodi facilis dolores modi, reiciendis
            libero. Iste consequuntur dignissimos cupiditate neque ex! Ullam repellat ducimus id facilis 
            natus quidem velit consequatur dignissimos! Praesentium quidem rerum nihil velit quae asperiores
            mollitia qui similique earum aliquam, amet assumenda fugit vitae quisquam sint perferendis neque. 
            Hic impedit beatae laudantium saepe ratione sunt. Dolorem quia inventore impedit corporis, odit iure
            expedita in consequatur?"
        ],
        ];

        $new_post = [];
        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
