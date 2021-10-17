
$(document).ready(function(){


  const queryString = window.location.search;
  console.log(queryString);

  const urlParams = new URLSearchParams(queryString);

  const room = urlParams.get('room');


  $("#demo").text("ROOM: " + room);
  $("#room").val(room);
  console.log ("Bingo");
  console.log("ROOM for PHP = " + $("#room").val());
  // document.getElementById("demo").innerHTML = "ROOM NUMBER = " + room;
  // room Number

});
