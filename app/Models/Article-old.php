<?php

namespace App\Models;

class Article
{
    private static $articles = [
        [
            "title" => "Ukraine vs Russia",
            "slug" => "ukraine-vs-rusia",
            "author"=> "Russia Today",
            "body" => "Russia side - lorem anjay lorem ipsuh hahahay iri bilang bos"
        ],
        [
            "title" => "Omicron di Indonesia",
            "slug" => "omicron-di-indonesia",
            "author"=> "Pemuda Pancasila Bogor",
            "body" => "Omicron - excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est."
        ],
    ];

    public static function all(){
        return collect(self::$articles);
    }
    // public function find($slug){
    //     $articles = collect(static::all());
    //     return $articles->firstWhere('slug',$slug);
    //     // $articles = static::all();
    //     // $new_post = [];
    //     // foreach($articles as $article){
    //     //     if($article["slug"] === $slug){
    //     //         $new_post = $article;
    //     //     }
    //     // }
    // }

    public static function find($slug){
        $articles = static::all();
        
        return $articles->firstWhere('slug', $slug);
    }

}
