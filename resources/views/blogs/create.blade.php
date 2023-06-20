@extends('layouts.layout')

@section('content')
    <div class="create-blog">
        <nav>
            <header><i class="fa-solid fa-paper-plane"></i>Larablogs</header>
            <ul class="navbar">
                <a href="/"><li>Home</li></a>
                <a href="/blogs"><li>All Blogs</li></a>
                <a href=""><li>Login</li></a>
            </ul>
        </nav>
        <div class="form-container">
            <form action="/blogs" method="POST">
            @csrf
                <div class="form-group">
                    <label for="name">Enter Blog Title: </label>
                    <input type="text" name="name" id="name" autocomplete="off" autofocus required>
                </div>
                <div class="form-group">
                    <label for="author">Enter Your Name: </label>
                    <input type="text" name="author" id="author" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="content">Enter Blog Content: </label>
                    <textarea name="content" id="content" cols="30" rows="10" autocomplete="off" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Enter Blog Image URL: </label>
                    <input type="text" name="image" id="image" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Create Blog">
                </div>
            </form>
        </div>
    </div>
@endsection