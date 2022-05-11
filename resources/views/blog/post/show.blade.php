@extends('layouts.app')

@section('title', 'Категории')
@section('content')
    <div class="container">

        <div class="row">

            <div class="col-8 bg-black">
                <div class="row">
                        <div class="single-post mb-4 pb-4">


                            <div class="single-post-title fw-bold fs-5">
                                {{$post->title}}
                            </div>

                            <div class="single-post-image">
                                @php
                                    $url = parse_url($post->post_image)
                                @endphp
                                @if(array_key_exists('scheme', $url ))
                                    <img class="img-fluid" src="{{ $post->post_image  }}" alt="image">
                                @else
                                    <img class="img-fluid" src="{{ asset('/storage/'. $post->post_image)  }}" alt="image">
                                @endif
                            </div>
                            <div class="single-cat text-secondary my-2">
                                Категория: {{$post->category->title}}
                            </div>

                        </div>
                </div>

            </div>
            <div class="col-4 bg-info">
                @include('layouts.sidebar')

            </div>

        </div>

    </div>
@endsection

