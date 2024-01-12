<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return PostResource::collection($posts);
    }

    public function create()
    {

    }

    public function store(StorePostRequest $req)
    {
        $posts = Post::create($req->all());

        return new PostResource($posts);
    }

    public function show(Post $post)
    {

    }

    public function edit(Post $post)
    {

    }

    public function update(StorePostRequest $req, Post $post)
    {
        $post->update($req->all());

        return new PostResource($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        
        return response(null, 204);
    }
    
}
