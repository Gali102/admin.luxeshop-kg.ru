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

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title">{{$post->title}}</h1>
            <p class="edica-blog-post-meta">{{$post->date}}</p>
            <section class="blog-post-featured-img">
                <img src="{{$post->getImage()}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <p>{{$post->content}}</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection