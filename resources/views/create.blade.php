@include('partials/header')
<div class="container">
<div class="post mt-5">

<form method="POST" action="/store">
<input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
{!! csrf_field() !!}
<textarea class="form-control" name="content" id="content" rows="10" placeholder="Content">{{ old('content') }}</textarea>
<input class="form-control" type="date" name="date" id="date" placeholder="Date" value="{{ old('date') }}"> 
<button class="form-control btn-success" type="submit" name="submit" id="submit">Submit</button>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (isset($created))
    <div class="alert alert-success">
        {{ $created }}
    </div>
    <p>Check out your posts <a href="/single?post_id={{ $posts }}">here</a>
@endif
</div>