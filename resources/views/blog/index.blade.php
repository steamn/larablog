@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex">
        <div class="main w-3/4">

            <div class="full-width flex flex-wrap">
                <div class="feed-post p-4">
                    <div class="feed-post-image w-full overflow-hidden relative">
                        <img class="w-full max-w-full h-80 block scale-100 hover:scale-105 transition-all"
                             src="https://images.unsplash.com/photo-1650623598032-4fddce25b34f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80"
                             alt="image">
                    </div>
                    <div class="cat text-gray-500">
                        Blog Post
                    </div>
                    <div class="title font-medium">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
                <div class="feed-post p-4">
                    <div class="feed-post-image w-full overflow-hidden relative">
                        <img class="w-full max-w-full h-80 block scale-100 hover:scale-105 transition-all"
                             src="https://images.unsplash.com/photo-1650623598032-4fddce25b34f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80"
                             alt="image">
                    </div>
                    <div class="cat text-gray-500">
                        Blog Post
                    </div>
                    <div class="title font-medium">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
                <div class="feed-post p-4">
                    <div class="feed-post-image w-full overflow-hidden relative">
                        <img class="w-full max-w-full h-80 block scale-100 hover:scale-105 transition-all"
                             src="https://images.unsplash.com/photo-1650623598032-4fddce25b34f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80"
                             alt="image">
                    </div>
                    <div class="cat text-gray-500">
                        Blog Post
                    </div>
                    <div class="title font-medium">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>
                <div class="feed-post p-4">
                    <div class="feed-post-image w-full overflow-hidden relative">
                        <img class="w-full max-w-full h-80 block scale-100 hover:scale-105 transition-all"
                             src="https://images.unsplash.com/photo-1650623598032-4fddce25b34f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80"
                             alt="image">
                    </div>
                    <div class="cat text-gray-500">
                        Blog Post
                    </div>
                    <div class="title font-medium">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                </div>

            </div>

        </div>
        <div class="sidebar w-1/4 p-4 bg-amber-100">


            <div class="latest-posts">
                <div class="latest-posts-title">
                    Новые записи
                </div>
                <div class="widget-post flex">
                    <div class="widget-post-image">
                        <img
                            src="https://images.unsplash.com/photo-1553289038-6638b1a1802a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80"
                            alt="image">
                    </div>
                    <div class="widget-post-title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </div>
                </div>
            </div>

            <div class="category-widget">
                <div class="category-widget-title">
                    Категории
                </div>
                <div class="category-widget-list">
                    <ul>
                        <li>First</li>
                        <li>First 2</li>
                        <li>First 3</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection



