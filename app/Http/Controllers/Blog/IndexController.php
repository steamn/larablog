<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke()
   {
       $posts = Post::orderBy('created_at', 'desc')->get();
       $categories = Category::orderBy('created_at', 'desc')->get();


       return view('blog.index', [
           'posts' => $posts,
           'categories' => $categories
       ]);
   }
}
