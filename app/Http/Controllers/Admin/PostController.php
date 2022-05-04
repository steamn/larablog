<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.post.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('admin.post.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {

        $path = $request->file('post_image')->store('images');

//        dd($request->file('post_image')->store('images'));

        $new_post = new Post();
        $new_post->title = $request->title;
        $new_post->content = $request->post_content;
        $new_post->category_id = $request->category_id;
        $new_post->post_image = $path;
        $new_post->save();

        return redirect()->back()->with('success', 'Пост добавлен');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('admin.post.edit', [
            'post' => $post,
            'categories' => $categories
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->content = $request->post_content;
        $post->category_id = $request->category_id;

        return redirect()->back()->with('success', 'Пост обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return RedirectResponse
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back()->with('success',' Пост удален');
    }
}
