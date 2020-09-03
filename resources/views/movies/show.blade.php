@extends('layouts.layout')

@section('main_content')

  <h1>Titolo : {{ $movie->title }}</h1>
  <p>Genere : {{ $movie->genre }}</p>
  <p>Descrizione : {{ $movie->description }}</p>
  <p>Anno di produzione : {{ $movie->year }}</p>
  <p>Voto : {{ $movie->rating }}</p>

  <a href="{{route('movies.index')}}">Indietro</a>

@endsection
