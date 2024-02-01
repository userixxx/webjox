<!-- resources/views/posts.blade.php -->

@extends('layouts.app')

@section('title')Все посты@endsection

@section('content')
    <h1>Посты</h1>
    <div class="posts">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-sm-6 col-md-4 post">
                    <a href="{{ route('posts.show', $post) }}">
                        <div class="post__block">
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->content }}</p>
                            <img src="{{ asset('storage/' . $post->image) }}" alt="">
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
