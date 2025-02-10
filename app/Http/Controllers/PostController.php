<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $user = $post->user;
        return view('posts.show', compact('post', 'user'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function store(Request $req)
    {


        $post = new Post();
        $post->title = $req->title;
        $post->description = $req->description;
        $post->category = $req->category;
        $post->content = $req->content;
        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect()->route('posts.index');
    }

    public function update(Request $req, $id)
    {
        $post = Post::find($id);

        $post->title = $req->title;
        $post->description = $req->description;
        $post->category = $req->category;
        $post->content = $req->content;

        $post->save();
        return redirect()->route('posts.show', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return redirect()->route('posts.index');
        }
    }
}
