<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Models\Category;
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
    return view('home', [
        'title' => 'home',
        'active' => 'home'
    ]);
});
 
Route::get('/about', function () {
    return view('about', [
    "title" => "about",
    'active' => 'about',
    'nama' => 'Rihandi Ajis',
    'email' => 'rihandi@gmail.com',
    'image' => 'rihandi.jpeg']);
});

Route::get('/blog', [PostController::class, 'index']);
// route::get adalah function untuk mengatur aplikasi arahnya akan kemana
// PostController::class, 'function' untuk mengambil data dari file PostController dan dikirimkan kehalaman yang akan di arahkan routes
// {post::slug} post adalah post model nya laravel, sedangkan slug adalah parameter yang akan dikirim
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function()
{
    return view('categories', [
        'title' => 'categories',
        'active' => 'categories',
        'posts' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category)
{
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'active' => 'posts',
        'posts' => $category->posts->load('category','author')
        // 'category' => $category->name
    ]);
});

Route::get('/authors/{author:user_name}', function (User $author)
{
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('category', 'author')
        
    ]);
});


