$("#toutvu2").click(function() {
  $('#jusqua').css('display','block');
});

$("#toutvu1").click(function() {
  $('#jusqua').css('display','none');
});

$("#openModal").click(function() {
  $('#jusqua').css('display','none');
  $('input[type="radio"]').prop('checked', false);
});

function downSerie(id) {
  var x = $('#seasons-block-'+id).css('display');
  if(x == "none"){
    $('#seasons-block-'+id).css('display','block');
  }else{
    $('#seasons-block-'+id).css('display','none');
  }

  $('#seasons-block-'+id+' #episodes-block').css('display','none');
}

function downSeason(id, numero) {
  var x = $('#seasons-block-'+id+' #season'+numero+' #episodes-block').css('display');
  if(x == "none"){
    $('#seasons-block-'+id+' #season'+numero+' #episodes-block').css('display','block');
  }else{
    $('#seasons-block-'+id+' #season'+numero+' #episodes-block').css('display','none');
  }
}
