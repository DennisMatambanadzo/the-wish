<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('index');
        // return view('components.layout-primary');
    }

    public function indexBlogs(Blog $blog)
    {
        return view('blogs',[
            'blogs' => Blog::all()
        ]);
    }
}
