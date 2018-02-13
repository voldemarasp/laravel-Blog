<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comments;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function single()
    {   
        $id = $_GET['post_id'];
        $post = Post::where('id', $id)->get();
        $comment = Comments::where('post_id', $id)->get();
        return view('single', [ 'post' => $post[0], 'comment' => $comment ]);
    }
    public function all()
    {

    	$posts = Post::all();

        return view('all', [ 'posts' => $posts ]);
    }
    public function edit()
    {
        $id = $_GET['post_id'];
        $post = Post::where('id', $id)->get();
        return view('edit', [ 'post' => $post[0] ]);
    }

    public function update()
    {
        $id = $_GET['post_id'];

        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = $_POST['date'];

        $posts = Post::where('id', $id)->update(['title' => $title, 'content' => $content, 'date' => $date]);

        $post = Post::where('id', $id)->get();
        return view('edit', [ 'post' => $post[0] ]);
    }

    public function create()
    {
        return view('create');
    }
    public function store(StorePostRequest $request)
    {


        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = $_POST['date'];

        $posts = Post::insert(['title' => $title, 'content' => $content, 'date' => $date]);
        
        $post = Post::orderBy('id', 'desc')->limit(1)->get();

        $postLastId = $post[0]->id;

        return view('create', [ 'created' => 'Post created', 'posts' => $postLastId ]);
        

    }
    public function delete()
    {
        $id = $_GET['post_id'];

        $comment = Comments::where('post_id', $id)->get();

        if (empty($comment)) {
            $posts = Post::where('id', $id)->delete();
        } else {
            $deleteComments = Comments::where('post_id', $id)->delete();
            $posts = Post::where('id', $id)->delete();
        }

        $posts = Post::all();
        return view('all', [ 'posts' => $posts ]);
    }
}

