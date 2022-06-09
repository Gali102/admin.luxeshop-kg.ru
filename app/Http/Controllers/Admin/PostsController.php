<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    =>'required',
            'articul' =>'required',
            'type'    =>'required',
            'rating'  =>'required',
            'reviews' =>'required',
            'size'    =>'required',
            'price'   =>'required',
            'desc'    =>'required',
            'image'   =>'required'
        ]);

        $post = Post::add($request->all());
        //$post->uploadImage($request->file('image'));

        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('admin.posts.edit', compact(
            'post'
        ));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'    =>'required',
            'articul' =>'required',
            'type'    =>'required',
            'rating'  =>'required',
            'reviews' =>'required',
            'size'    =>'required',
            'price'   =>'required',
            'desc'    =>'required',
            'image'   => 'required'
        ]);

        $post = Post::find($id);
        $post->edit($request->all());

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        Post::find($id)->remove();
        return redirect()->route('posts.index');
    }
}
