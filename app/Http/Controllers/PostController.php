<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view("pages.dashboard.post", compact('data')); 
    }
}
