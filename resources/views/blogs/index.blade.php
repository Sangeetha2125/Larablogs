@extends('layouts.layout')

@section('content')
    <div class="all-blogs">
        <nav>
            <header><i class="fa-solid fa-paper-plane"></i>Larablogs</header>
            <ul class="navbar">
                <a href="/"><li>Home</li></a>
                <a href="/blogs"><li class="active">All Blogs</li></a>
                <a href=""><li>Login</li></a>
            </ul>
        </nav>
        <div class="blogs-wrapper">
            @foreach($blogs as $blog)
                <a href="/blogs/{{$blog->id}}">
                    <div class="blog-item">
                        <img src="{{ $blog->image}}" alt="">
                        <div class="blog-item-content">
                            <h4>{{ $blog->name }}</h4>
                            <div class="item-flex">
                                <div class="item-author"><i class="fa-solid fa-user"></i><cite>{{ $blog->author }}</cite></div>
                                <div class="item-date"><i class="fa-regular fa-calendar"></i>{{ $blog->date_created }}</div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection