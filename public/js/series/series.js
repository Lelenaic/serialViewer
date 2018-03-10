/*
* Get all series by one genre and display them on the series page
*/
function getSeriesByGenre(idGenre){
  $.get('/datas/series/genre/' + idGenre, function(response){
        $('#displaySeries').empty();
        $.each(response.series, function(index, serie)
        {
          $('#displaySeries').append('<div class="col-md-3"></div>');
          $('#displaySeries div').last().append('<a href="/series/' + serie.id + '"><img class="img" src="'+ serie.urlImage +'"></img></a>');
        });
        $('#genre-block .btn-primary').attr('class', 'btn btn-default');
        $('#genre'+response.genre).attr('class', 'btn btn-primary');
    });
}

/*
* Get all series
*/
function getAllSeries(){
  $.get('/datas/series', function(response){
    $('#displaySeries').empty();
    $.each(response, function(index, serie)
    {
      $('#displaySeries').append('<div class="col-md-3"></div>');
      $('#displaySeries div').last().append('<a href="/series/' + serie.id + '"><img class="img" src="'+ serie.urlImage +'"></img></a>');
    });
    $('#genre-block .btn-primary').attr('class', 'btn btn-default');
    $('#genreAll').attr('class', 'btn btn-primary');
  });
}
