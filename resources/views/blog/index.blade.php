@extends('layouts.app')

@section('content')

    <div class="container mt-4">

        <div class="row">

            <div class="col-8">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="feed-post col-6 mb-4 pb-4">
                            <div class="feed-post-image overflow-hidden">
                                @php
                                    $url = parse_url($post->post_image)
                                @endphp
                                @if(array_key_exists('scheme', $url ))
                                    <img class="sss" src="{{ $post->post_image  }}" alt="image">
                                @else
                                    <img class="sdf" src="{{ asset('/storage/'. $post->post_image)  }}" alt="image">
                                @endif
                            </div>
                            <div class="cat text-secondary my-2">
                                Категория: {{$post->category->title}}
                            </div>
                            <div class="title fw-bold fs-5">
                                <a href=" {{ route('post.show', $post->id) }}">{{ $post->title }}</a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-4">
            @include('layouts.sidebar')
            </div>
        </div>
    </div>


    <div class="container mx-auto bg-emerald-500 p-4 mb-8">
        @include('layouts.footer')
    </div>

@endsection



