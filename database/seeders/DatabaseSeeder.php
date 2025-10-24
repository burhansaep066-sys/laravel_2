<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        
        // $this->call([
        //     PostSeeder::class
        // ]);

        // User::create([
        //     'name' => 'rihandi ajis',
        //     'email' => 'rihandiajis@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User:create([
        //     'name' => 'toha baug'
        // ]);
        User::factory(10)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Web Personal',
            'slug' => 'web-personal'
        ]);
        
        Post::factory(20)->create();
        // Post::create([
        //     'title' => "Judul Petama",
        //     'slug' => 'judul-pertama',
        //     'excertpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, repudiandae.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vero molestias voluptates? Veritatis facilis alias ratione error, quae unde esse fuga a impedit ullam vitae quos magni autem sapiente excepturi corrupti nam, laudantium velit facere minima repellendus? Nihil, beatae sunt voluptates alias debitis fuga porro ipsum, voluptatum voluptas quae aliquid sit saepe temporibus unde sint sed fugiat earum? Magnam assumenda quaerat eveniet praesentium. Hic pariatur voluptas minus eius, at illo itaque sit consequuntur adipisci nostrum asperiores aliquid inventore labore eligendi velit ullam ipsa, sapiente dolorum repudiandae cumque fugiat? Nesciunt accusantium voluptatem ducimus id distinctio maxime assumenda dolore aperiam minima pariatur!',
        //     'category_id' => '1',
        //     'user_id' => '1'
            
        // ]);

        // Post::create([
        //     'title' => "Judul Ke Dua",
        //     'slug' => 'judul-ke-dua',
        //     'excertpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, repudiandae.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vero molestias voluptates? Veritatis facilis alias ratione error, quae unde esse fuga a impedit ullam vitae quos magni autem sapiente excepturi corrupti nam, laudantium velit facere minima repellendus? Nihil, beatae sunt voluptates alias debitis fuga porro ipsum, voluptatum voluptas quae aliquid sit saepe temporibus unde sint sed fugiat earum? Magnam assumenda quaerat eveniet praesentium. Hic pariatur voluptas minus eius, at illo itaque sit consequuntur adipisci nostrum asperiores aliquid inventore labore eligendi velit ullam ipsa, sapiente dolorum repudiandae cumque fugiat? Nesciunt accusantium voluptatem ducimus id distinctio maxime assumenda dolore aperiam minima pariatur!',
        //     'category_id' => '1',
        //     'user_id' => '1'
            
        // ]);

        // Post::create([
        //     'title' => "Judul Ke Tiga",
        //     'slug' => 'judul-ke-tiga',
        //     'excertpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, repudiandae.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vero molestias voluptates? Veritatis facilis alias ratione error, quae unde esse fuga a impedit ullam vitae quos magni autem sapiente excepturi corrupti nam, laudantium velit facere minima repellendus? Nihil, beatae sunt voluptates alias debitis fuga porro ipsum, voluptatum voluptas quae aliquid sit saepe temporibus unde sint sed fugiat earum? Magnam assumenda quaerat eveniet praesentium. Hic pariatur voluptas minus eius, at illo itaque sit consequuntur adipisci nostrum asperiores aliquid inventore labore eligendi velit ullam ipsa, sapiente dolorum repudiandae cumque fugiat? Nesciunt accusantium voluptatem ducimus id distinctio maxime assumenda dolore aperiam minima pariatur!',
        //     'category_id' => '2',
        //     'user_id' => '1'
            
        // ]);
    }
}
