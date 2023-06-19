@extends('layouts.layout')

@section('content')
    <div class="single-blog">
        <nav>
            <header><i class="fa-solid fa-paper-plane"></i>Larablogs</header>
            <ul class="navbar">
                <a href="/"><li>Home</li></a>
                <a href="/blogs"><li>All Blogs</li></a>
                <a href=""><li>Login</li></a>
            </ul>
        </nav>
        <div class="blog-wrapper">
            <div class="blog">
                <h2>{{ $blog->name }}</h2>
                <div class="blog-other-info">
                    <p><i class="fa-solid fa-user"></i><cite>{{ $blog->author }}</cite></p>
                    <p><i class="fa-regular fa-calendar"></i>{{ $blog->date_created }}</p>
                </div>
                <p class="blog-description">{{ $blog->content }}</p>
            </div>
        </div>
    </div>
@endsection