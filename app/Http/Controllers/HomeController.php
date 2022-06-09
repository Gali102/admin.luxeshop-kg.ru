<?php

namespace App\Http\Controllers;

use App\Post;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$posts = Post::paginate(3);
        $postLast = $posts->last();

        return view('pages.index', [
            'posts'  =>  $posts,
            'postLast'  =>  $postLast
        ]);
    }

    public function posts()
    {
        $posts = Post::all();

        return view('pages.posts')->with('posts', $posts);
    }

    public function show($slug)
    {
    	$post = Post::where('slug', $slug)->firstOrFail();

    	return view('pages.show', compact('post'));
    }
}
