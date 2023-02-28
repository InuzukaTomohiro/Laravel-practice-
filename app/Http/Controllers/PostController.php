<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRegistPost;
use App\Sample\Test;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::all();

    return view('post.index', compact('posts'));
  }

  public function show(Post $post)
  {
    return view('post.show', compact('post'));
  }

  public function create()
  {
    return view('post.create');
  }

  public function store(PostRegistPost $request)
  {
    $image = $request->image;
    if ($request->hasFile('image')) {
        $path = \Storage::put('/public', $image);
        $path = explode('/', $path);
    }else{
      $path = null;
    }

    $post = new Post();
    $post->title = $request->title;
    $post->body = $request->body;
    $post->file_name = $path[1];
    $post->save();

    return redirect()->route('post.index');
  }

  public function edit(Post $post)
  {
    return view('post.edit', compact('post'));
  }

  public function update(PostRegistPost $request, Post $post)
  {

    $post->title = $request->title;
    $post->body = $request->body;
    $post->update();

    return redirect()->route('post.show', $post);
  }

  public function destroy(Post $post)
  {
    $post->delete();

    return redirect()->route('post.index');
  }
}
