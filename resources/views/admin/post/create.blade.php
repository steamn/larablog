@extends('admin.layouts.main')

@section('title', 'Добавить пост')

@section('content')

    <div class="col-lg-8">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('admin_post.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label for="post-title">Название поста</label>
                        <input type="text" name="title" class="form-control" id="post-title" placeholder="Введите название" required>
                    </div>
                    <div class="form-group">
                        <label for="post-cat">Выберите категорию</label>
                        <select name="category_id" class="form-control" id="post-cat">
                            @foreach($categories as $category)
                                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="post-image" class="form-label">Картинка поста</label>
                        <input name="post_image" class="form-control" type="file" id="post-image">
                    </div>
                    <div class="form-group">
                        <label for="post-content">Текст поста</label>
                        <textarea name="post_content" class="form-control" id="post-content" rows="6" required></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
            </div>
        </form>

    </div>

@endsection

