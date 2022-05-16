@extends('admin.layouts.main')

@section('title', 'Категории')
@section('content')
    <div class="card">

        <div class="card-body p-0">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
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

                    <td class="project-actions text-right d-flex justify-content-end">
                        <a class="btn btn-info btn-sm mr-2" href="{{ route('admin_category.edit', $category['id']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <form action="{{ route('admin_category.destroy', $category['id']) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                <i class="fas fa-trash">
                                </i>
                                Удалить
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

