<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){

        $blogs = Blog::all();

        return view('blogs.index',["blogs"=>$blogs]);
    }

    public function show($id){

        $blog = Blog::findOrFail($id);
        
        return view('blogs.show',["blog"=>$blog]);
    }
}
