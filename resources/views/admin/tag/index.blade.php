@extends('admin.layouts.main')

@section('title', 'Все Теги')


@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Теги</h3>

        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        ID
                    </th>
                    <th style="width: 60%">
                        Название тега
                    </th>

                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->title }}</td>


                    <td class="project-actions text-right d-flex justify-content-end">
                        <a class="btn btn-info btn-sm mr-2" href="{{ route('tag.edit', $tag['id'] ) }}">
                            <i class="fas fa-pencil-alt"></i>Редактировать
                        </a>
                        <form action="{{ route('tag.destroy', $tag['id'] ) }}" method="post">
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

