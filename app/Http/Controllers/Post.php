<?php

namespace App\Http\Controllers;

use App\Models\Post as ModelsPost;
use Illuminate\Http\Request;

class Post extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Blog",
            "posts" => ModelsPost::all()
        ]);
    }
    
    public function show(ModelsPost $post)
    {
        return view('post',[
            "title" => "Detail Post",
            "post" => $post
        ]);
    }
}