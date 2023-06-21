@extends('layouts.layout')

@section('content')
    <div class="welcome-content">
        <nav>
            <header><i class="fa-solid fa-paper-plane"></i>Larablogs</header>
            <ul class="navbar">
                <a href="/"><li class="active">Home</li></a>
                <a href="/blogs"><li>All Blogs</li></a>
            </ul>
        </nav>
        <div class="welcome-wrapper">
            <p class="heading"> Start Your blogging Journey Here</p>
            <p class="blog-intro">Blogging is a dynamic and immersive experience that allows individuals to express their thoughts, share valuable insights, connect with a global audience, and build meaningful relationships. It offers a platform for creativity, learning, and personal growth, while also providing opportunities for networking, collaboration, and even monetization.</p>
            <a href="/create"><button>Create New Blog</button></a>
        </div>
    </div>
@endsection