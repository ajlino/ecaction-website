
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
    sendRoomNumber(room);
  }

  $('#saveRoomNumber').click(function(){
    room = $('#roomInput').val();
    $("#demo").text("ROOM: " + room);
    $("#room").val(room);
    sendRoomNumber(room);
    $('#roomNumber').modal('hide');
  });

  function sendRoomNumber(room){
    console.log(room);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //room entered
      }
    };
    xmlhttp.open("GET", "php/action_EnterRoomNumber.php?q=" + room, true);
    xmlhttp.send();
  }



});
