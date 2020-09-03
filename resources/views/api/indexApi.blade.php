@extends('layouts.layout')

@section('main_content')

  <h1>Lista film</h1>

  <div id="movieList"></div>

  <script id="movie-template" type="text/x-handlebars-template">
    <div >
      <h2>Titolo : @{{ title }}</h2>
      <ul>
        <li>Genere : @{{ genre }}</li>
        <li>Descrizione : @{{ description }}</li>
        <li>Anno : @{{ year }}</li>
        <li>Voto : @{{ rating }}</li>
      </ul>
    </div>
  </script>

  <a href="home">Home</a>

  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@endsection
