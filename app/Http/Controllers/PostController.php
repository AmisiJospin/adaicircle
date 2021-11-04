<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    //
    public function index(){
        try {
            //Show blog post
            Paginator::useBootstrap();
            $posts = Post::paginate(3);
            return view("blog", compact('posts'));

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back();
        }
    }
}
