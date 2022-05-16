@extends('admin.layouts.main')

@section('title', 'Редактирование категории ')

@section('content')


    <div class="col-4">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('admin_category.update', $category['id'] ) }}">
            @csrf
            @method('PUT')
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label for="catName">Название категории</label>
                        <input type="text" value="{{ $category['title'] }}" name="title" class="form-control" id="catName" placeholder="Введите название" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </form>

    </div>

@endsection

