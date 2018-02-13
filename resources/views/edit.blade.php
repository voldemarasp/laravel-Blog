@include('partials/header')
<div class="container mt-5">
<div class="post mt-5">
<form method="POST" action="/update?post_id={{ $post['id'] }}">
{!! csrf_field() !!}
<input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{ $post['title'] }}">
<textarea class="form-control" name="content" id="content" rows="10">{{ $post['content'] }}</textarea>
<input class="form-control" type="date" name="date" id="date" placeholder="Date" value="{{ $post['date'] }}">
<button class="form-control btn-success" type="submit" name="submit" id="submit">Submit</button>
</div>
<p>Back to post <a href="/single?post_id={{ $post['id'] }}">click here</a></p>
</div>