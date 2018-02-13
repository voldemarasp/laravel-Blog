    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>title</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <div class="container">
        <div class="row mt-3">
        <ul>
            <li><a href="{{ route('create') }}">Create</a></li>
            <li><a href="{{ route('all') }}">All</a></li>
            <li><a href="{{ route('home') }}">Home</a></li>
        </ul>
    </div>
    </div>



    