<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rihandi Ajis",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium laborum, doloribus, itaque assumenda maiores amet aliquid fugiat dolorum, ea magnam commodi! Unde optio at nesciunt velit iure impedit in voluptatum illo quis veniam repellat perferendis consectetur ipsam placeat sit voluptatibus reprehenderit soluta fuga maxime quam accusamus expedita, ipsa saepe reiciendis? Consequuntur, sit reprehenderit fugit ipsam repellendus omnis vitae numquam distinctio architecto modi optio tempore facere voluptates alias ducimus beatae temporibus exercitationem expedita fuga nobis accusamus nulla asperiores. Nisi at quas exercitationem ipsa ratione modi repudiandae quidem reprehenderit sequi. Consectetur sed fugit consequuntur autem, natus cumque culpa tenetur aperiam ducimus distinctio?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jessy",
            "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nulla debitis fugit quidem quia ad minus expedita dolor ut! Optio amet iure, culpa sit consequuntur ad animi ab quae, nesciunt natus odio repudiandae? Dolorum harum natus recusandae quasi deserunt, tenetur saepe et. Harum, cupiditate hic aperiam quas dolorum doloremque minima, obcaecati nulla expedita facilis odit ex consequatur sunt placeat neque enim consectetur exercitationem ea! Ipsam deserunt quos reiciendis ullam possimus?"
        ]
    ];

    public static function all() {
        return collect(self::$blog_post);
    }

    public static function find($slug) {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
