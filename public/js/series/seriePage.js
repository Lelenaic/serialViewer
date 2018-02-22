/*
* Get all series by one genre and display them on the series page
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
    userId: userId,
    serieId: serieId,
    dateDebut: today,
    fini: false
  }
  /*var token = $('meta[name=csrf-token]').attr('content');
  $.ajax({

    type:'POST',
    url:"/datas/addSuiviSerie",
    dataType: 'JSON',
    data: {
        "userId": userId,
        "serieId": serieId,
        "dateDebut": today,
        "fini": false,
        "created_at": today,
        "updated_at": today
    },
    success:function(data){
        console.log('success');
        console.log(data);
    },
    error:function(){

    },
});*/
  /*var response = $.post('/datas/addSuiviSerie',
    {
        '_token': $('meta[name=csrf-token]').attr('content'),
        userId: userId,
        serieId: serieId,
        dateDebut: today,
        fini: false,
        created_at: today,
        updated_at: today
    });
    console.log(response);*/
}
