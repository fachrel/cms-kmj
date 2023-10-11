<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::latest()->paginate(20);
        return view("pages.dashboard.post", compact('data')); 
    }

    public function add()
    {
        return view("pages.dashboard.add-post"); 
    }
}
