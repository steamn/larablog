@extends('admin.layouts.main')

@section('title', 'Все посты')


@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Посты</h3>

        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        ID
                    </th>
                    <th style="width: 60%">
                        Название поста
                    </th>
                    <th>
                        Категория
                    </th>
                    <th style="width: 20%">
                        Дата публикации
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->title }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td class="project-actions text-right d-flex justify-content-end">
                            <a class="btn btn-info btn-sm mr-2" href="{{ route('admin_post.edit', $post->id) }}">
                                <i class="fas fa-pencil-alt"></i>Редактировать
                            </a>
                            <form action="{{ route('admin_post.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="fas fa-trash"></i>Удалить
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

