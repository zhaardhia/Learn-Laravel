<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Book extends Model
// {
//     use HasFactory;
// }

class Book{
    private static $books_collection = [
        [
            "title" => "Buku Matematika",
            "slug" => "buku_matematika",
            "author" => "Simanjuntak",
            "publisher" => "Gramed",
            "year" => "1871",
            "desc" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit."
        ],
        [
            "title" => "Majalah Bobo Teuing",
            "slug" => "majalah_bobo_teuing",
            "author" => "Mahmud Marzuki",
            "publisher" => "Elsan",
            "year" => "2077",
            "desc" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime commodi, placeat sapiente odit obcaecati magni ex, velit tempore quis perspiciatis optio."
        ],
        [
            "title" => "Wildan Tuh Tai",
            "slug" => "wildan_tuh_tai",
            "author" => "Koding Ardana",
            "publisher" => "PDT MGMT",
            "year" => "14045",
            "desc" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime commodi, placeat sapiente odit obcaecati magni ex, velit tempore quis perspiciatis optio. Animi, ipsa corrupti! Autem beatae veritatis aut facere provident!"
        ]
    ];

    public static function all(){
        return collect(self::$books_collection);
    }
    
    public static function find($slug){
        $books = static::all();
        // $book = [];
        // foreach ($books as $b) {
        //     if($b["slug"] === $slug){
        //         $book = $b;
        //     }
        // }
        return $books->firstWhere('slug', $slug);
    }
}