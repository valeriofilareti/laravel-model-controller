@extends('layout.main')

@section('movies')
<h1>movies</h1>
<ul>
    @foreach ($movies as $movie )
    <li>{{$movie->title}}</li>

    @endforeach
</ul>
@endsection
