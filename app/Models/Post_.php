<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "First Time",
            "slug" => "first-time",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo esse quos ipsam magni sequi atque repellat suscipit voluptas culpa veniam error ex, sunt fuga maiores officia itaque minus corporis ullam, praesentium rerum inventore! Similique quis sunt delectus pariatur reprehenderit fugiat laborum accusamus quam voluptatum, qui, obcaecati, neque eveniet aut odit illo earum corrupti! Ipsum quos quia necessitatibus perferendis beatae. Dolor ducimus error, accusantium ut quis vero aspernatur inventore ullam nulla soluta incidunt velit harum laboriosam cumque? Soluta sed minus, ab, vero ullam quia placeat est quo ex provident quibusdam maiores sapiente reprehenderit quam delectus doloribus quos sunt expedita. Non, alias.",        
        ],
        [
            "title" => "Second Time",
            "slug" => "second-time",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo esse quos ipsam magni sequi atque repellat suscipit voluptas culpa veniam error ex, sunt fuga maiores officia itaque minus corporis ullam, praesentium rerum inventore! Similique quis sunt delectus pariatur reprehenderit fugiat laborum accusamus quam voluptatum, qui, obcaecati, neque eveniet aut odit illo earum corrupti! Ipsum quos quia necessitatibus perferendis beatae. Dolor ducimus error, accusantium ut quis vero aspernatur inventore ullam nulla soluta incidunt velit harum laboriosam cumque? Soluta sed minus, ab, vero ullam quia placeat est quo ex provident quibusdam maiores sapiente reprehenderit quam delectus doloribus quos sunt expedita. Non, alias.",        
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();        
        return $posts->firstWhere('slug', $slug); // method of collection laravel
    }
}
