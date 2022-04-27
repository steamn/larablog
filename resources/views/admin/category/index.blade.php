@extends('admin.layouts.main')

@section('title', 'Категории')
@section('content')
    <div class="card">

        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">ID</th>
                    <th style="width: 60%">Название категории</th>
                    <th style="width: 30%"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)
                <tr>
                    <td>{{ $category['id'] }}</td>
                    <td>{{ $category['title'] }}</td>

                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="{{ route('category.edit', $category['id']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Удалить
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

