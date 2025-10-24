<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [ 
            [
                'title' => 'Judul Pertama',
                'slug' => 'judul-pertama',
                'excertpt' =>'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat dignissimos ex beatae praesentium vero ea nesciunt nam repellendus dolorum blanditiis velit asperiores, dolores, molestiae ad nobis. Quibusdam quod id officiis.'
            ]   
        ];
        foreach ($post as $p) {
            Post::create($p);
        }
       
    }
}
