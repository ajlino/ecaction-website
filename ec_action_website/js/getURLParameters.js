
//gets the URL Parameters. Reads room# from URL and adds it to #room

$(document).ready(function(){


  const queryString = window.location.search;
  console.log(queryString);

  const urlParams = new URLSearchParams(queryString);

  const room = urlParams.get('room');


  $("#demo").text("ROOM: " + room);
  $("#room").val(room);
  console.log("ROOM for PHP = " + $("#room").val());

});
