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
        $posts = Post::paginate(5);
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

    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return redirect()->route('posts.index');
        }
    }
}
