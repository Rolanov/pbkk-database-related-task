<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ArticleController extends Controller
// {
//     public static $articles = [
//             [
//                 "title" => "Ukraine vs Russia",
//                 "slug" => "ukraine-vs-rusia",
//                 "author"=> "Russia Today",
//                 "body" => "Russia side - Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti assumenda nemo quasi, nisi labore rem deserunt excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est."
//             ],
//             [
//                "title" => "Omicron di Indonesia",
//                "slug" => "omicron-di-indonesia",
//                "author"=> "Pemuda Pancasila Bogor",
//                "body" => "Omicron - Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti assumenda nemo quasi, nisi labore rem deserunt excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est.. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti assumenda nemo quasi, nisi labore rem deserunt excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est."
//            ],
//     ];
//     public function index(){
//     return view('article', [
//         "name" => "Muhammad Rolanov Wowor",
//         "email" => "kodokpu@gmail.com",
//         "articles" => self::$articles
//     ]);
//     }
// }

// <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "name" => "Muhammad Rolanov Wowor",
            "email" => "kodokpu@gmail.com",
            // "articles" =>  Article::all()
            "articles" =>  Article::latest()->get()
        ]);
    }
    // public function content($slug){
    //     return view('konten',[
    //         "post" => Article::find($slug)   
    //     ]);
    // }
    // public function content($slug){
    //     return view('konten', [
    //         "article" => Article::find($slug)
    //     ]);
    // }
    public function content(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }


}

