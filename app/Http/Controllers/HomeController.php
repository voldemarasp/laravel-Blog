<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    	//Istraukti
    	$posts = Post::all();
    	// $post = Post::where('id', 110)->get();
    	// $somePosts = Post::where('id', '>', 100)->get();
    	// $posties = Post::where('id', '>', 100)->where('id', '<', 105)->get();

    	//ikelti
    	// $post = new Post();
    	// $post->title = 'my blog title';
    	// $post->content = 'Yayayayya';
    	// $post->date = '2017-01-10';
    	// $post->save();

    	// $posts = [$post1, $post2, $post3];

        return view('welcome', [ 'posts' => $posts ]);
    }
    public function admin()
    {
        return view('admin');
    }
}


