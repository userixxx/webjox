<!-- settings.blade.php -->

@extends('layouts.app')

@section('title')Управление постами@endsection

@section('content')
    <h1>Управление постами</h1>
    @if(auth()->check() && auth()->user()->admin_level > 1)
        <div class="post-add">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="form">
                @csrf
                <!-- Ваши существующие поля формы -->
                <div class="mb-3">
                    <label for="title" class="form-label">Название поста:</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Название поста">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Описание:</label>
                    <input type="text" name="content" class="form-control" id="content" placeholder="Описание">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Категория:</label>
                    <input type="text" name="category" class="form-control" id="category" placeholder="Категория">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Изображение:</label>
                    <input type="file" name="image" class="form-control" id="image" accept="image/*">
                </div>
                <div class="mb-3">
                    <label for="visibility" class="form-label">Видимость:</label>
                    <select name="visibility" class="form-control" id="visibility">
                        <option value="0">Нет</option>
                        <option value="1">Да</option>
                        <option value="2">Модерация</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Создать пост</button>
            </form>
        </div>
    @endif

    @if(auth()->check() && auth()->user()->admin_level == 1)
            <div class="post-edit">
                <form action="" method="POST" enctype="multipart/form-data" class="form">
                    @csrf
                    @method('PUT')
                    <p style="color: #fff;">Потерял время с vue , начал делать с нуля без этого "любимого фреймворка" пару часов назад, поймите и простите =)
                        <br> p.s добавление постов работает как часы
                    </p>
                    <p style="color: gold;">готов много работать и учиться ^_^
                    </p>
                    <p>Ссылочка на гит с апи на ларавеле для Агростар: <a href="https://github.com/userixxx/ast-f" target="_blank">*тыкни*</a></p>

                    <button type="submit" class="btn btn-primary">Изменить свое решение..</button>
                </form>
            </div>
    @endif



@endsection
