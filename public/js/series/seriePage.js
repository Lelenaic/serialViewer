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
