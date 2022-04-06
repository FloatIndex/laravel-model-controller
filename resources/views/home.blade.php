@extends('layouts.standard')

@section('content')
    <ol>
        @foreach ($movies as $movie)
            <li>
                <h3>TITLE: {{$movie['title']}}</h3>
                <h4>ORIGINAL TITLE: {{$movie['original_title']}}</h4>
                <p>NATIONALITY: {{$movie['nationality']}}</p>
                <p>DATE: {{$movie['date']}}</p>
                <p>VOTE: {{$movie['vote']}}</p>
            </li>
        @endforeach
    </ol>
@endsection