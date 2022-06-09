@extends('layout')

@section('content')
    <header class="edica-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ url('/')}}">Bashtatpaty.ru</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/')}}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('posts')}}">Афиша</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact')}}">Контакты</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0 soc-seti">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/bash_dance_str/"><i class="fab fa-instagram"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://vk.com/bashk_party"><i class="fab fa-vk"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tel:+79509335777"><i class="fas fa-phone"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title">Афиша</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{$post->getImage()}}" alt="blog post">
                            </div>
                            <p class="blog-post-category">Blog post</p>
                            <a href="{{route('post.show', $post->slug)}}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{$post->title}}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>

    </main>
@endsection