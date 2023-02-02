<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        //$comments = $post->comments;
        //return response()->json($post);
        //dd($comments);
        return view('post.index', compact('posts'));
    }
}
