
//gets the URL Parameters. Reads room# from URL and adds it to #room

$(document).ready(function(){


  const queryString = window.location.search;
  console.log(queryString);

  const urlParams = new URLSearchParams(queryString);

  var room = urlParams.get('room');

  if (room == null){
    $('#roomNumber').modal('show');
  } else{
    $("#demo").text("ROOM: " + room);
    $("#room").val(room);
    console.log("ROOM for Andy = " + $("#room").val());
  }

  $('#saveRoomNumber').click(function(){
    room = $('#roomInput').val();
    $("#demo").text("ROOM: " + room);
    $("#room").val(room);
    console.log("ROOM for Andy = " + $("#room").val());
    $('#roomNumber').modal('hide');
  });

});
