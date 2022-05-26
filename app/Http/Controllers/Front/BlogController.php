<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index');
    }

    public function show($slug)
    {
        $path =  __DIR__ . "/../resources/posts/{$slug}.html";
        dd($path);

        if (! file_exists($path)) {
            return back();
        }

        $post = file_get_contents($path);

        return view('blogs.show', compact('post'));
    }
}
