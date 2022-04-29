@extends('admin.layouts.main')

@section('title', 'Добавить тег')

@section('content')

    <div class="col-lg-8">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('tag.store') }}">
            @csrf
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label for="post-title">Название тега</label>
                        <input type="text" name="title" class="form-control" id="post-tag" placeholder="Введите название" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
            </div>
        </form>

    </div>

@endsection

