<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getAll($order = 'date', $dir = 'desc')
    {
        $allowed = ['id', 'title', 'date', 'length'];

        if (!in_array($order, $allowed)) {
            $order = 'date';
        }

        if (!in_array(strtolower($dir), ['asc', 'desc'])) {
            $dir = 'desc';
        }

        if ($order === 'length') {
            $posts = \App\Models\Post::orderByRaw('LENGTH(title) ' . strtoupper($dir))->get();
        } else {
            $posts = \App\Models\Post::orderBy($order, strtolower($dir))->get();
        }

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
