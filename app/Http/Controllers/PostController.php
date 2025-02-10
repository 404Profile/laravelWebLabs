<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->with(['user', 'comment'])->orderByDesc('id')->paginate(9);

        return Inertia::render('Posts/Index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request, PostService $postService)
    {
        $request->validated();
        $postService->createPost($request);
        return Redirect::back()->with('success', 'Post created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return Inertia::render('Posts/Show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post, PostService $postService)
    {
        $request->validated();
        $postService->updatePost($request, $post);
        return Redirect::back()->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post, PostService $postService)
    {
        $postService->deletePost($post);
        return Redirect::back()->with('success', 'Post deleted');
    }
}
