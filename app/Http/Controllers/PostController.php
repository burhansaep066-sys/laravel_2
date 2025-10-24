<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // cara 1-3
    // public function index()
    // {
    //     return view('posts', [
    //     "title" => "All Post",
    //     'active' => 'posts',
    //     "posts" => Post::latest()->filter(request(['seacrh'))->get()
    //     ]);
    // }
    // end cara 1-3
    public function index()
    {
        return view('posts', [
        "title" => "All Post",
        'active' => 'posts',
        "posts" => Post::latest()->filter(request(['seacrh', 'category', 'author']))->get()
        ]);
    }
    // Post adalahan pengiriman data dari routes dan di tangkap oleh variable $post
    public function show(Post $post) 
    // return view ('post') untuk mengrahkan tampilan akan di direct ke halaman yang mana, ['array'] adalah data yang akan dikirim ke tampilan yang di arahkan.
    {
        return view('post',[
        "title" => "Single Post",
        'active' => 'posts',
        "kirim" => $post
        ]);
    }
}
