<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Muhamad Nur Firmansyah',
        //     'email' => 'muhamadnurfirmansyah66450@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Mohan',
        //     'email' => 'mohan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem minima itaque ex aut pariatur, ea totam deserunt delectus molestias exercitationem, dolore similique explicabo, atque dignissimos.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem minima itaque ex aut pariatur, ea totam deserunt delectus molestias exercitationem, dolore similique explicabo, atque dignissimos. Repellendus veniam illo molestiae repellat recusandae quod odio deserunt esse facere beatae porro aliquid, similique fugiat tempore dolorem labore nostrum eos ipsam ut alias cumque nisi. Alias nihil vel, optio, dignissimos natus error, suscipit ut laudantium id quae inventore voluptates pariatur cum eius a ullam fuga. Rem, commodi ipsam voluptatibus numquam possimus explicabo totam iste repudiandae, sunt sed culpa ipsa voluptatem esse pariatur blanditiis reprehenderit inventore amet suscipit. Iste, commodi dolorum! Odio repellat libero ducimus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem minima itaque ex aut pariatur, ea totam deserunt delectus molestias exercitationem, dolore similique explicabo, atque dignissimos.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem minima itaque ex aut pariatur, ea totam deserunt delectus molestias exercitationem, dolore similique explicabo, atque dignissimos. Repellendus veniam illo molestiae repellat recusandae quod odio deserunt esse facere beatae porro aliquid, similique fugiat tempore dolorem labore nostrum eos ipsam ut alias cumque nisi. Alias nihil vel, optio, dignissimos natus error, suscipit ut laudantium id quae inventore voluptates pariatur cum eius a ullam fuga. Rem, commodi ipsam voluptatibus numquam possimus explicabo totam iste repudiandae, sunt sed culpa ipsa voluptatem esse pariatur blanditiis reprehenderit inventore amet suscipit. Iste, commodi dolorum! Odio repellat libero ducimus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem minima itaque ex aut pariatur, ea totam deserunt delectus molestias exercitationem, dolore similique explicabo, atque dignissimos.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem minima itaque ex aut pariatur, ea totam deserunt delectus molestias exercitationem, dolore similique explicabo, atque dignissimos. Repellendus veniam illo molestiae repellat recusandae quod odio deserunt esse facere beatae porro aliquid, similique fugiat tempore dolorem labore nostrum eos ipsam ut alias cumque nisi. Alias nihil vel, optio, dignissimos natus error, suscipit ut laudantium id quae inventore voluptates pariatur cum eius a ullam fuga. Rem, commodi ipsam voluptatibus numquam possimus explicabo totam iste repudiandae, sunt sed culpa ipsa voluptatem esse pariatur blanditiis reprehenderit inventore amet suscipit. Iste, commodi dolorum! Odio repellat libero ducimus?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem minima itaque ex aut pariatur, ea totam deserunt delectus molestias exercitationem, dolore similique explicabo, atque dignissimos.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem minima itaque ex aut pariatur, ea totam deserunt delectus molestias exercitationem, dolore similique explicabo, atque dignissimos. Repellendus veniam illo molestiae repellat recusandae quod odio deserunt esse facere beatae porro aliquid, similique fugiat tempore dolorem labore nostrum eos ipsam ut alias cumque nisi. Alias nihil vel, optio, dignissimos natus error, suscipit ut laudantium id quae inventore voluptates pariatur cum eius a ullam fuga. Rem, commodi ipsam voluptatibus numquam possimus explicabo totam iste repudiandae, sunt sed culpa ipsa voluptatem esse pariatur blanditiis reprehenderit inventore amet suscipit. Iste, commodi dolorum! Odio repellat libero ducimus?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);



    }
}
