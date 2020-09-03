require('./bootstrap');

var $ = require('jquery');

var Handlebars = require("handlebars");

$(document).ready(function() {
  $.ajax(
    {
      url: 'http://localhost:8000/api/movies',
      method: 'GET',
      success: function(dataResponse) {
        var allMovies = dataResponse.movies;

        var source = $("#movie-template").html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < allMovies.length; i++) {
          var thisMovie = allMovies[i];
          var html = template(thisMovie);
          $('#movieList').append(html);
        }

      },
      error: function() {
        alert('error');
      }
    }
  );
});
