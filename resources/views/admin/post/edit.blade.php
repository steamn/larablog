@extends('admin.layouts.main')

@section('title', 'Редактировать пост')

@section('content')

    <div class="col-lg-8">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('post.update', $post->id) }}">
            @csrf
            @method('put')
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label for="post-title">Название поста</label>
                        <input type="text" value="{{ $post->title }}" name="title" class="form-control" id="post-title" placeholder="Введите название" required>
                    </div>
                    <div class="form-group">
                        <label for="post-cat">Выберите категорию</label>
                        <select name="category_id" class="form-control" id="post-cat">
                            @foreach($categories as $category)
                                <option value="{{ $category['id'] }}" @if($category->id == $post->category_id) selected @endif>{{ $category['title'] }}</option>
                            @endforeach
{{--                                <option value="{{ $post->category_id }}">{{ $post->category->title }}</option>--}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="post-content">Текст поста</label>
                        <textarea  name="post_content" class="form-control" id="post-content" rows="6" required>{{ $post->content }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </form>

    </div>

@endsection

