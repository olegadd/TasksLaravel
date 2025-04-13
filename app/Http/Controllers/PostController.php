<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getAll()
    {
        $posts = Post::orderBy('date', 'desc')->get();

        return view('posts.all', compact('posts'));
    }

    public function getOne($id)
    {
        $post = Post::find($id);

        if (!$post) {
            abort(404, 'Статья не найдена');
        }

        return view('posts.one', compact('post'));
    }
}
