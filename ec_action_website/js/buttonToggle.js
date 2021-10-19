//button toggle

$(document).ready(function(){

  $("#equipment").click(function(){
    $("#modal-equipment").modal("show")
  });

  $(".reportButton").on("click", function(){
    var $value = $(this).val();

    // Toggle Button color when checked/unchecked
    if ($(this).data("checked")=="true"){
      $(this).removeClass("btn-danger");
      $(this).addClass("btn-light");
      $(this).siblings().prop("checked", false);

      $(this).data("checked", "false");
      console.log ("data checked = " + $(this).data("checked"));
    } else {
      $(this).addClass("btn-danger");
      $(this).removeClass("btn-light");
      $(this).siblings().prop("checked", true);
      console.log ($value + "ADDED");
      $(this).data("checked", "true");
    }
  })




});
