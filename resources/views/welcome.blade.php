@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-8">
@foreach ($posts as $post)
<div class="post mt-5">
@if ($loop->index % 2 == 0) 
    <h2 class="black"><a href="/single?post_id={{ $post->id }}">{{ $post->title }}</a></h2>
@else 
    <h2 class="red"><a href="/single?post_id={{ $post->id }}">{{ $post->title }}</a></h2>
@endif
@php
    $content = substr($post->content, 0, 200);
@endphp
    <p>{{ $content }}</p>
    <p>{{ $post->date }}</p>
@auth
<a href="/delete?post_id={{ $post->id }}">Delete</a>
<a href="/edit?post_id={{ $post->id }}">Edit</a>
@endauth
</div>
@endforeach
</div>
<div class="col-4">
<h3>New comments</h3>
@foreach ($comments as $comment)
<strong>{{ $comment->name }}</strong>
<p>{{ $comment->date }}</p>
<p>{{ $comment->content }}</p>
@endforeach
</div>
</div>
</div>

@endsection