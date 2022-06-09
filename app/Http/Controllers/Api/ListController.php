<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Auth;
use DB;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        return Post::all();
    }
}
