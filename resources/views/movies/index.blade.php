@extends('layouts.layout')

@section('main_content')

  <h1>Indice</h1>

  <ul>
    @foreach ($movies as $movie)
      <li>
        <a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a>
        <a href="{{ route('movies.edit', $movie) }}">Modifica</a>
        <form action="{{ route('movies.destroy', $movie) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="Elimina">
        </form>
      </li>
    @endforeach
  </ul>

  <a href="home">Home</a>
  <a href="{{ route('movies.create') }}">Aggiungi un film</a>

@endsection
