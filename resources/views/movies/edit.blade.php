@extends('layouts.layout')

@section('main_content')

  <h1>Aggiungi un nuovo film</h1>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('movies.update', $movie) }}" method="post">
      @csrf
      @method('PUT')

      <div>
        <label for="title">Titolo</label>
        <input type="text" name="title" placeholder="Inserisci il titolo" value="{{ $movie->title }}">
      </div>

      <div>
        <label for="genre">Genere</label>
        <input type="text" name="genre" placeholder="Inserisci il genere" value="{{ $movie->genre }}">
      </div>

      <div>
        <label for="description">Descrizione</label>
        <textarea name="description" rows="8" cols="80" placeholder="Inserisci la descrizione">{{ $movie->description }}</textarea>
      </div>

      <div>
        <label for="year">Anno</label>
        <input type="data" name="year" placeholder="Inserisci l'anno di produzione" value="{{ $movie->year }}">
      </div>

      <div>
        <label for="rating">Voto</label>
        <input type="text" name="rating" placeholder="Inserisci il voto" value="{{ $movie->rating }}">
      </div>

      <div>
        <input type="submit" value="Salva">
      </div>

    </form>

  <a href="{{route('movies.index')}}">Indietro</a>

@endsection
