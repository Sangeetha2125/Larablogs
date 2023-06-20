<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){

        $blogs = Blog::latest()->get();

        return view('blogs.index',["blogs"=>$blogs]);
    }

    public function show($id){

        $blog = Blog::findOrFail($id);
        
        return view('blogs.show',["blog"=>$blog]);
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(){
        $blog = new Blog();

        $blog->name = request('name');
        $blog->author = request('author');
        $blog->content = request('content');
        $blog->image = request('image');

        $blog->save();
        return redirect('/blogs');
    }

    public function destroy($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        
        return redirect('/blogs');
    }
}
