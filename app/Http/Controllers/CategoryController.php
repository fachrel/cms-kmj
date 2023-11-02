<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
// use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::latest()->paginate(20);
        return view('pages.dashboard.category', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $request = Category::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->to('/category')->with('success', 'Data kategori berhasil ditambahkan');
    }

    public function destroy($id)
    {        
        $category = Category::findOrFail($id);
        //menghapus produk
        $category->delete();
        // redirect
        return redirect()->to('/category')->with('success', 'Data berhasil dihapus');        
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);

        return view('.pages.dashboard.edit-category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->to('/category')->with('success', 'Data kategori berhasil diubah');
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
    //     return response()->json(['slug' => $slug]);
    // }
}
