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
                        Название материала
                    </th>
                    <th style="width: 8%" class="text-center">
                        Статус
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>

                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
@endsection

