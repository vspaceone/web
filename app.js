
function updateDoorstate(){

  console.log("Updating doorstate!");
  $.get("https://vspace.one/spaceapi.json", function(data, textStatus){
    if(data.state.open == 1){
      $("#doorstate").addClass("label-success");
      $("#doorstate").removeClass("label-danger");
      $("#doorstate").text("opened");

    }else{
      $("#doorstate").addClass("label-danger");
      $("#doorstate").removeClass("label-success");
      $("#doorstate").text("closed");

    }



  });
}
