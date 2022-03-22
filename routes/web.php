<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FormController;
Use App\Http\Controllers\ArticleController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulir', [GuestController::class, 'input'])->name('input-form-guest');
Route::post('/proses-form/{id}', [GuestController::class, 'proses'])->name('proses-form-guest');
Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);
Route::get('/basic', function(){
    return 'Hallo ngab, coba basic';
});
Route::get('/header', function(){
    return response('Hallo', 200)->header('Content-Type','text/html');
});
Route::get('/header-cookie', function(){
    return response('Hallo', 200)
    ->header('Content-Type','text/html')
    ->withcookie('name','Fitrah Arie');
});
Route::get('/json', function(){
    return response()->json([
        'Nama1' => 'Fitrah',
        'Nama2' => 'Ryan'
    ]);
});
Route::get('/cookie', function(){
    $content = 'Hello World';
    $type = 'text/plain';
    $minutes = 1;
    return response($content)
                ->header('Content-Type', $type)
                ->cookie('name', 'value', $minutes);
});
Route::get('/dashboard',function(){
    return redirect('/');
});

Route::get("/article", function () {
    return view('article');
});

Route::get("/article",[ArticleController::class,'index']);
Route::get("/article/{article:slug}",[ArticleController::class,'content']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Article categories',
        'categories' => Category::all()
    ]);
});
Route::get("/categories/{category:slug}", function(Category $category){
    return view('category', [
        'title' => $category->name,
        'articles' => $category->articles,
        'category' => $category->name
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('article', [
        'title' => 'Artikel user',
        'posts' => $author->articles 
    ]);
});