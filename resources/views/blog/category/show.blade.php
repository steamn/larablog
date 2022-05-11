@extends('layouts.app')

@section('title', 'Категории')
@section('content')
    <div class="container">

        <div class="card-body p-0">
            sadsadas

            <ul>


            @foreach($posts as $post)

                <li>{{$post->title}}</li>

            @endforeach
            </ul>

        </div>

    </div>
@endsection

