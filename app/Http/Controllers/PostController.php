<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit')->with('post', $post);
    }

    public function update($id, Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:2|max:50',
            'anons' => 'required|min:5|max:50',
            'anons' => 'required|min:5|max:50',
            'message' => 'required|min:5|max:200'
        ]);

        $post = Post::findOrFail($id);
        $post->title = $data['title'];
        $post->anons = $data['anons'];
        $post->text = $data['message'];
        $post->save();

        return redirect()->route('posts.one', $id);
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts');
    }
}
