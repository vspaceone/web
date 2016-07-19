
function updateDoorstate(){

  console.log("Updating doorstate!");
  $.getJSON("/spaceapi.json")
    .done( function(data, textStatus){
      if(data.state.open == true){
        $("#doorstate").addClass("label-success");
        $("#doorstate").removeClass("label-danger");
        $("#doorstateString").text("open");
      }else{
        $("#doorstate").addClass("label-danger");
        $("#doorstate").removeClass("label-success");
        $("#doorstateString").text("closed");
      }
    })
  .fail(function(data, textStatus){
    $("#doorstate").addClass("label-danger");
    $("#doorstate").removeClass("label-success");
    $("#doorstate").text("error");

  });
}

function updateState(){

  console.log("Updating state!");
  $.getJSON("/spaceapi.json")
    .done( function(data, textStatus){
      if(data.state.open == true){
        $("#state").removeClass("label-warning");
        $("#state").removeClass("label-danger");
        $("#state").addClass("label-success");
        
        $("#stateText").html("<em>Open</em>")
      }else{        
        $("#state").removeClass("label-warning");
        $("#state").removeClass("label-success");
        $("#state").addClass("label-danger");
        
        $("#stateText").html("<em>Closed</em>")
      }
    })
  .fail(function(data, textStatus){
    
  });
}

function updateTemperature(){

  console.log("Updating temperature!");
  $.getJSON("/spaceapi.json")
    .done( function(data, textStatus){
        for (var i = 0, len = 1; i <= len; i++) {
            console.log(data.sensors.humidity[i].location);
            if (data.sensors.humidity[i].location === "Maschinenraum"){
                $("#Maschinenraum").html("<em>" + data.sensors.temperature[i].value + data.sensors.temperature[i].unit + "<br>" 
                                         + data.sensors.humidity[i].value + data.sensors.humidity[i].unit + "</em>");
            }else if (data.sensors.humidity[i].location === "Brücke") {
                $("#Bruecke").html("<em>" + data.sensors.temperature[i].value + data.sensors.temperature[i].unit + "<br>" 
                                         + data.sensors.humidity[i].value + data.sensors.humidity[i].unit + "</em>");
            }
        }
    })
  .fail(function(data, textStatus){
    $("#Maschinenraum").html("<em>N/A <br> N/A</em>");
      
    $("#Bruecke").html("<em>N/A <br> N/A</em>");
  });
}
