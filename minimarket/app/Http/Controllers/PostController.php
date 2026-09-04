<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Mengambil semua data dari tabel posts
        
        // Mengarahkan ke file resources/views/index.blade.php
        return view('index', compact('posts')); 
    }
}