<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Post;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	$posts = Post::limit(10)->get();
    	$comments = Comments::orderBy('date', 'asc')->get();

        return view('welcome', [ 'posts' => $posts, 'comments' => $comments ]);
    }
    public function admin()
    {
        return view('admin');
    }
}


