<?php

namespace App\Models;


class Post 
{
   private static $blog_posts = [
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
    ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
  
        return $posts->firstWhere('slug', $slug);
    }
}
