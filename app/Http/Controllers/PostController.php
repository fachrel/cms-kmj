<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::latest()->paginate(20);
        return view("pages.dashboard.post", compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("pages.dashboard.add-post", compact('categories')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required',
            'category' => 'required',
            'content' => 'required',
            // 'photo  ' => 'required|images|mimes:jpg,jpeg,png',
        ]);

        // $validated['user_id'] = auth()->user()->id;

        // Post::create($validated);

        // dd('berhasil');
        // dd('tess2');
        // $request->photo->move(public_path('img/posts'), $imageName);

        // return $request->file('photo')->store('post-images');

        // $slug = Str::of($request->slug)->slug('-');

        $imageName = 'ahay';
        Post::create([
            'user_id' => $request->user()->id,
            'category_id' => $request->category,
            'slug' => $request->slug,
            'content' => $request->content,
            'title' => $request->title,
            'photo' => $imageName,
        ]);

        return redirect()->to('/posts')->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function showPosts()
    {
        $data = Post::latest()->paginate(20);
        return view("pages.post", compact('data')); 
    }
}
