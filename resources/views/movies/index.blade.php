@extends('layouts.layout')

@section('main_content')

  <h1>Indice</h1>

  <ul>
    @foreach ($movies as $movie)
      <li>
        <a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a>
      </li>
    @endforeach
  </ul>

  <a href="home">Home</a>
  <a href="{{ route('movies.create') }}">Aggiungi un film</a>

@endsection
