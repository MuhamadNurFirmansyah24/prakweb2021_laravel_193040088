<?php

namespace App\Models;


class Post 
{
   private static $blog_posts = [
    [
        "title" => "Judul Tulisan Pertama",
        "slug" => "judul-tutlisan-pertama",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo libero, ipsam corrupti delectus doloremque quae consectetur iste necessitatibus fugiat veniam officiis reiciendis aliquam sint natus. Modi quod obcaecati omnis itaque. Ad, ipsam quaerat inventore iusto, ex debitis eum possimus delectus harum eligendi veritatis. Temporibus, amet sed officiis corporis reprehenderit debitis in, ratione reiciendis autem mollitia omnis laudantium hic rerum natus molestiae. Odio, sapiente porro. Officia, quasi non odit provident consectetur perspiciatis temporibus aspernatur! Neque omnis aspernatur praesentium alias architecto animi?"
    ],
    [
        "title" => "Judul Tulisan Kedua",
        "slug" => "judul-tulisan-kedua",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora repudiandae illum iste officia, odio porro veniam nihil commodi, exercitationem esse illo modi, non id fugiat consectetur velit maiores animi pariatur dolore inventore quod atque officiis. Culpa officia nisi, velit sed tenetur deleniti, sapiente corrupti quod est nemo asperiores. Dolorem magni facere voluptas excepturi aperiam earum asperiores quis, ab provident architecto, ut obcaecati nihil quibusdam numquam! Officiis dolorem commodi consequuntur tempora? Sit amet laudantium veritatis delectus. Voluptatibus at modi nesciunt repellendus? Cum temporibus nesciunt distinctio nulla veritatis. Dignissimos dolor neque error dicta voluptas delectus mollitia, deleniti ut animi adipisci reiciendis doloribus."
    ]
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
}
