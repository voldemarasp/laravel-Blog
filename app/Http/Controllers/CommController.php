<?php

namespace App\Http\Controllers;
use App\Comments;
use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\AddCommRequest;

class CommController extends Controller
{
   public function addcomm (AddCommRequest $request) {
   		$id = $_GET['post_id'];
   		$name = $_POST['name'];
        $content = $_POST['content'];
        $date = $_POST['date'];

        $posts = Comments::create(array_merge($request->except('_token'), ['post_id' => $id]));

        $post = Post::findOrFail($id);
        $comment = Comments::where('post_id', $id)->get();

        return view('single', [ 'post' => $post, 'comment' => $comment ]);
   }

   public function delcomm() {
   	$comm_id = $_GET['comm_id'];
   	$post_id = $_GET['post_id'];

   	$comments = Comments::where('id', $comm_id)->delete();

   	$post = Post::findOrFail($post_id);
    $comment = Comments::where('post_id', $post_id)->get();

    return view('single', [ 'post' => $post, 'comment' => $comment ]);

   }
}
