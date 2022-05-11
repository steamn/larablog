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
                @foreach($categories as $category)
                    <li>{{$category->title}} {{$category->id}} </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
