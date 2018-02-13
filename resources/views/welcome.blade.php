@extends('layouts.app')
@section('content')



<div class="container">
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

<a href="/delete?post_id={{ $post->id }}">Delete</a>
<a href="/edit?post_id={{ $post->id }}">Edit</a>
</div>
@endforeach
</div>

@endsection