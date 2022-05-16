@extends('admin.layouts.main')

@section('title', 'Редактировать пост')

@section('content')

    <div class="col-lg-8">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('admin_post.update', $post->id) }}">
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
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Картинка поста</label>
                        <div class="post-img">

                            @php
                                $url = parse_url($post->post_image)
                            @endphp
                            @if(array_key_exists('scheme', $url ))
                                <img class="w-25 img-fluid" src="{{ $post->post_image  }}" alt="image">
                            @else
                                <img class="w-25 img-fluid" src="{{ asset('/storage/'. $post->post_image)  }}" alt="image">
                            @endif
                        </div>
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

