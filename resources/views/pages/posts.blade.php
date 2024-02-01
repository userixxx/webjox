@extends('layouts.app')

@section('title')Все посты@endsection

@section('content')
    <h1>Посты</h1>

    <form action="{{ route('posts.index') }}" method="GET" class="mt-3">
        @csrf
        <div class="mb-3">
            <label for="category" class="form-label">Отфильтровать?</label>
            <select name="category" id="category" class="form-select">
                <option value="">Все категории</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->id }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Применить</button>
    </form>


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
