/*
* Get all series by one genre and display them on the series page
*/
function getSeriesByGenre(idGenre){
  $.get('/datas/series/genre/' + idGenre, function(response){
        $('#displaySeries').empty();
        $('#displaySeries').append('<ul>');
        $.each(response.series, function(index, serie)
        {
          $('#displaySeries').append('<li><a href="/series/' + serie.id + '">' + serie.nom + '</a></li>');
        });
        $('#displaySeries').append('</ul>');
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
    $('#displaySeries').append('<ul>');
    $.each(response, function(index, serie)
    {
      $('#displaySeries').append('<li><a href="/series/' + serie.id + '">' + serie.nom + '</a></li>');
    });
    $('#displaySeries').append('</ul>');
    $('#genre-block .btn-primary').attr('class', 'btn btn-default');
    $('#genreAll').attr('class', 'btn btn-primary');
  });
}
