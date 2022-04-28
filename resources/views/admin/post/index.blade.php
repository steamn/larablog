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
                    <th style="width: 20%">
                        Дата публикации
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>AdminLTE v3</td>
                    <td>01.01.2019</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="#">
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
                </tbody>
            </table>
        </div>

    </div>
@endsection

