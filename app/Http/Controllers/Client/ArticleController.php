<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    
    public function showPosts()
    {
        $posts = Post::all();
        $pageTitle = "Artikel Terbaru"; 

        return view("pages.blog", compact('posts', 'pageTitle')); 
    }

    public function showPost($postSlug)
    {
        // dd("test");
        
        $post = Post::where('slug', $postSlug)->firstOrFail();

        return view("pages.view-post", compact("post"));
        return view('pages.dashboard.category', compact('data', 'pageTitle'));
    }

    public function showCategories($categorySlug)
    {
        // Find posts that have the specified category slug
        $posts = Post::whereHas('category', function ($query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        })->get();

        $pageTitle = "Artikel Kategori"; 
    
        return view("pages.blog", compact('posts', 'pageTitle'));
    }

    public function showUserPost($userSlug)
{
    // Find the user by their slug
    $user = User::where('slug', $userSlug)->first();

    if (!$user) {
        // Handle the case where the user with the provided slug doesn't exist
        return abort(404);
    }

    // Retrieve posts authored by the user
    $posts = Post::where('user_id', $user->id)->get();

    $pageTitle = "user"; 

    return view("pages.blog", compact('user', 'posts', 'pageTitle'));
}

}
