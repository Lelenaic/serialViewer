// get all series
$.get('/datas/series', function(response){
  datas = [];
  // datas of series in an array
  $.each(response, function(index, serie){
    source = {
      link: "/series/"+serie.id,
      label: serie.nom
    }
    datas.push(source);
  })

  //My new search
  $( "#search-series" ).autocomplete({
    // series in source
    source: datas,
    // go to link of the choosen serie
    select: function( event, ui ) {
        window.location.href = ui.item.link;
    }
  });
});
