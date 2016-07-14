
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
      var temp = data.sensors.temperature[0].value;
      var tunit = "°C";
      
      var humi = data.sensors.humidity[0].value;
      var hunit = data.sensors.humidity[0].unit;
      
      $("#Maschinenraum").html("<em>" + temp + tunit + "<br>" + humi + hunit + "</em>");
      
      $("#Bruecke").html("<em>N/A <br> N/A</em>");
    })
  .fail(function(data, textStatus){
    $("#Maschinenraum").html("<em>N/A <br> N/A</em>");
      
    $("#Bruecke").html("<em>N/A <br> N/A</em>");
  });
}
