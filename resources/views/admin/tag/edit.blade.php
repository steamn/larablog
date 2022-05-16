@extends('admin.layouts.main')

@section('title', 'Редактирование тега ')

@section('content')


    <div class="col-4">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('admin_tag.update', $tag['id'] ) }}">
            @csrf
            @method('PUT')
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label for="tagName">Название тега</label>
                        <input type="text" value="{{ $tag['title'] }}" name="title" class="form-control" id="tagName" placeholder="Введите название" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </form>

    </div>

@endsection

