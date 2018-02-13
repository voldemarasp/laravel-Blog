@include('partials/header')



<div class="container">
<div class="row">
<div class="post mt-5">

    <h2 class="black">{{ $post['title'] }}</h2>

    <p>{{ $post['content'] }}</p>
    <p>{{ $post['date'] }}</p>

<a href="/delete?post_id={{ $post->id }}">Delete</a>
<a href="/edit?post_id={{ $post->id }}">Edit</a>
</div>
</div>
<div class="post mt-5">
<h3>Comments:</h3>
<div class="row">
<div class="col-6">
@foreach ($comment as $comments)
<div class="comment">
<p><strong>{{ $comments->name }}</strong></p>
<p>{{ $comments->content }}</p>
<p>{{ $comments->date }} <a href="/delcomm?comm_id={{$comments->id}}&&post_id={{$post['id']}}">Delete</a></p>
</div>
@endforeach
</div>
<div class="col-6">
<h3>Add new comment:</h3>
<form method="POST" action="/addcomm?post_id={{$post['id']}}">
<input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
{!! csrf_field() !!}
<textarea class="form-control" name="content" id="content" rows="3" placeholder="Content">{{ old('content') }}</textarea>
<input class="form-control" type="date" name="date" id="date" placeholder="Date" value="{{ old('date') }}"> 
<button class="form-control btn-success" type="submit" name="submit" id="submit">Submit</button>
</div>
</div>
</div>
</div>

