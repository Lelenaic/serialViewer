$(document).ready(function(){
  // get all notes of a serie
  var serId = $('#serieId').val();
  var finalRate = 0;
  var nbRates = 0;
  $.get('/datas/notes/'+serId, function(response){
    $.each(response, function(index, noteSerie){
      nbRates++;
      finalRate += noteSerie.note;
    });
    finalRate = finalRate/nbRates;
    $('#finalRate').text(finalRate);
  });

  /*
  * Follow a serie
  */
  function addFollowSerie(serieId,userId){
    //current date
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();

    if(dd<10) {
        dd = '0'+dd
    }

    if(mm<10) {
        mm = '0'+mm
    }

    today = yyyy + '-' + mm + '-' + dd;

    var datas = {
      "userId": userId,
      "serieId": serieId,
      "dateDebut": today,
      "fini": 0
    }

    $.ajax({
      type:'POST',
      url:"/datas/addSuiviSerie",
      dataType: 'JSON',
      data: datas,
      success:function(data){
          console.log('success');
      },
      error:function(){

      },
  });
  }

  /*
  * Get the rate of a serie by a user
  */
  function getRateSerie(serieId,userId){
    $.get('/datas/notes/'+userId+'/'+serieId, function(response){
      $('#noteInput').val(response.note);
    });
  }

  /*
  * Add a rate to a serie
  */
  function addRateSerie(serieId,userId){

    var note = $('#noteInput').val();
    var datas = {
      "userId": userId,
      "serieId": serieId,
      "note": note
    }

    $.ajax({
      type:'POST',
      url:"/datas/addRateSerie",
      dataType: 'JSON',
      data: datas,
      success:function(data){
          console.log('success');
      },
      error:function(){

      },
  });
  }
});
