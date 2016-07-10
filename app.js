
function updateDoorstate(){

  console.log("Updating doorstate!");
  $.get("spaceapi.json")
    .done( function(data, textStatus){
      if(data.state.open == 1){
        $("#doorstate").addClass("label-success");
        $("#doorstate").removeClass("label-danger");
        $("#doorstate").text("open");

      }else{
        $("#doorstate").addClass("label-danger");
        $("#doorstate").removeClass("label-success");
        $("#doorstate").text("closed");
      }
    })
  .fail(function(data, textStatus){
    $("#doorstate").addClass("label-danger");
    $("#doorstate").removeClass("label-success");
    $("#doorstate").text("error");

  });
}
