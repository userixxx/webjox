
@extends('layouts.app')

@section('title')Пост №{{ $post->id }}@endsection

@section('content')
    <h1>Пост №{{ $post->id }}</h1>
    <div class="post">
        <div class="post__block">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <img src="{{ asset('storage/' . $post->image) }}" alt="">
        </div>
    </div>
@endsection
