<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
        ]);

        $transaction = Category::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
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

}
