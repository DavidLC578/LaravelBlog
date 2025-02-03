<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $req)
    {
        $post = new Post();
        $post->title = $req->title;
        $post->description = $req->description;
        $post->category = $req->category;
        $post->content = $req->content;

        $post->save();

        return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return redirect('/posts');
        }
    }
}
