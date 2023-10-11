<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function showPost($postSlug)
    {
        // dd("test");
        
        $post = Post::where('slug', $postSlug)->firstOrFail();

        return view("pages.view-post", compact("post"));
        return view('pages.dashboard.category', compact('data'));
    }
}
