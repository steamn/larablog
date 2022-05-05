@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex">
        <div class="main w-3/4">
            <div class="full-width flex flex-wrap">
                @foreach($posts as $post)
                <div class="feed-post p-4">
                    <div class="feed-post-image w-full overflow-hidden relative">
                        @php
                            $url = parse_url($post->post_image)
                        @endphp
                        @if(array_key_exists('scheme', $url ))
                            <img class="w-full max-w-full h-80 block scale-100 hover:scale-105 transition-all" src="{{ $post->post_image  }}" alt="image">
                        @else
                            <img class="w-full max-w-full h-80 block scale-100 hover:scale-105 transition-all" src="{{ asset('/storage/'. $post->post_image)  }}" alt="image">
                        @endif
                    </div>
                    <div class="cat text-gray-500">
                        {{$post->category->title}}
                    </div>
                    <div class="title font-medium">
                        {{$post->title}}
                    </div>
                </div>
                @endforeach

            </div>

        </div>
        @include('layouts.sidebar')

    </div>
    <div class="container mx-auto bg-emerald-500 p-4 mb-8">
        @include('layouts.footer')
    </div>

@endsection



