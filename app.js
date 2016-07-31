var tmpChartMaschinenraum;
var tmpChartBruecke;
var humChartMaschinenraum;
var humChartBruecke;

function updateDoorstate() {

  //console.log("Updating doorstate!");
  $.getJSON("/spaceapi.json")
    .done(function (data, textStatus) {
      if (data.state.open == true) {
        $("#doorstate").addClass("label-success");
        $("#doorstate").removeClass("label-danger");
        $("#doorstateString").text("open");
      } else {
        $("#doorstate").addClass("label-danger");
        $("#doorstate").removeClass("label-success");
        $("#doorstateString").text("closed");
      }
    })
    .fail(function (data, textStatus) {
      $("#doorstate").addClass("label-danger");
      $("#doorstate").removeClass("label-success");
      $("#doorstate").text("error");
    });
}

function updateState() {
  //console.log("Updating state!");
  $.getJSON("/spaceapi.json")
    .done(function (data, textStatus) {
      if (data.state.open == true) {
        $("#state").removeClass("label-warning");
        $("#state").removeClass("label-danger");
        $("#state").addClass("label-success");

        $("#stateText").html("<em>Open</em>")
      } else {
        $("#state").removeClass("label-warning");
        $("#state").removeClass("label-success");
        $("#state").addClass("label-danger");

        $("#stateText").html("<em>Closed</em>")
      }
    })
    .fail(function (data, textStatus) {

    });
}

function updateTemperature() {
  console.log("Updating temperature!");
  $.getJSON("/spaceapi.json")
    .done(function (data, textStatus) {
      for (var i = 0, len = 1; i <= len; i++) {

        if (data.sensors.humidity[i].location === "Maschinenraum") {
          console.log("M");
          $("#Maschinenraum").html("<em>" + data.sensors.temperature[i].value + data.sensors.temperature[i].unit + "<br>"
            + data.sensors.humidity[i].value + data.sensors.humidity[i].unit + "</em>");
        } else if (data.sensors.humidity[i].location === "Brücke") {
          console.log("B");
          $("#Bruecke").html("<em>" + data.sensors.temperature[i].value + data.sensors.temperature[i].unit + "<br>"
            + data.sensors.humidity[i].value + data.sensors.humidity[i].unit + "</em>");
        }
      }
    })
    .fail(function (data, textStatus) {
      $("#Maschinenraum").html("<em>N/A <br> N/A</em>");
      $("#Bruecke").html("<em>N/A <br> N/A</em>");
    });

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      handleCharts($.parseJSON(xhttp.responseText), 'maschinenraum');
    }

    var xhttp2 = new XMLHttpRequest();
    xhttp2.onreadystatechange = function () {
      if (xhttp2.readyState == 4 && xhttp2.status == 200) {
        handleCharts($.parseJSON(xhttp2.responseText), 'bruecke');
      }
    };
    xhttp2.open("GET", "app.php?room=bruecke&sensor=th&valuec=200&days=7", true);
    xhttp2.send();

  };
  xhttp.open("GET", "app.php?room=maschinenraum&sensor=th&valuec=200&days=7", true);
  xhttp.send();
}

function handleCharts(resp, room) {
  Chart.defaults.global.elements.point.radius = 0;
  Chart.defaults.global.elements.point.hitRadius = 4;
  Chart.defaults.global.legend.onClick = null;
  
  var tdata = new Array();
  var hdata = new Array();
  for (var i = 0; i < resp.temperature.length; i++) {
    var part = new Array();
    part["x"] = resp.temperature[i].time;
    part["y"] = resp.temperature[i].value;
    tdata.push(part);
  }
  for (var i = 0; i < resp.humidity.length; i++) {
    var part = new Array();
    part["x"] = resp.humidity[i].time;
    part["y"] = resp.humidity[i].value;
    hdata.push(part);
  }

  if (tmpChartMaschinenraum == null || tmpChartBruecke == null) {
    //console.log("New Chart!");
    var ctx;
    var humctx;
    if (room == "maschinenraum") {
      ctx = document.getElementById("tmpChartMaschinenraum")
      tmpChartMaschinenraum = new Chart(ctx, {
        type: 'line',
        data: {
          datasets: [{
            label: 'Temperatur (°C)',
            backgroundColor: 'rgba(71,78,92,0.3)',
            tension: 0.3,
            data: tdata
          }]
        },
        options: {
          scales: {
            xAxes: [{
              type: 'time',
              position: 'bottom',
              time: {
              	displayFormats: {
                	day: 'D.M.',
                	hour: 'D.M. H:mm'
                },
                tooltipFormat: 'D.M.YY H:mm [Uhr]'
              },
              ticks: {
              	maxRotation: 45
              }
            }],
            yAxes: [{
              type: 'linear',
              ticks: {
                stepSize: 5,
                suggestedMin: 10,
                suggestMax: 35
              }
            }]
          }
        }
      });
      humctx = document.getElementById("humChartMaschinenraum")
      humChartMaschinenraum = new Chart(humctx, {
        type: 'line',
        data: {
          datasets: [
            {
              label: 'Luftfeuchtigkeit (%)',
              backgroundColor: 'rgba(71,78,92,0.3)',
              tension: 0.3,
              data: hdata
            }]
        },
        options: {
          scales: {
            xAxes: [{
              type: 'time',
              position: 'bottom',
              time: {
              	displayFormats: {
                	day: 'D.M.',
                	hour: 'D.M. H:mm'
                },
                tooltipFormat: 'D.M.YY H:mm [Uhr]'
              },
              ticks: {
              	maxRotation: 45
              }
            }],
            yAxes: [{
              type: 'linear',
              ticks: {
                stepSize: 10,
                min: 0,
                max: 100
              }
            }]
          }
        }
      });
    } else if (room == "bruecke") {
      ctx = document.getElementById("tmpChartBruecke")
      tmpChartBruecke = new Chart(ctx, {
        type: 'line',
        data: {
          datasets: [{
            label: 'Temperatur (°C)',
            backgroundColor: 'rgba(71,78,92,0.3)',
            tension: 0.3,
            data: tdata
          }]
        },
        options: {
          scales: {
            xAxes: [{
              type: 'time',
              position: 'bottom',
              time: {
              	displayFormats: {
                	day: 'D.M.',
                	hour: 'D.M. H:mm'
                },
                tooltipFormat: 'D.M.YY H:mm [Uhr]'
              },
              ticks: {
              	maxRotation: 45
              }
            }],
            yAxes: [{
              type: 'linear',
              ticks: {
                stepSize: 5,
                suggestedMin: 10,
                suggestMax: 35
              }
            }]
          }
        }
      });
      humctx = document.getElementById("humChartBruecke")
      humChartBruecke = new Chart(humctx, {
        type: 'line',
        data: {
          datasets: [
            {
              label: 'Luftfeuchtigkeit (%)',
              backgroundColor: 'rgba(71,78,92,0.3)',
              tension: 0.3,
              data: hdata
            }]
        },
        options: {
          scales: {
            xAxes: [{
              type: 'time',
              position: 'bottom',
              time: {
              	displayFormats: {
                	day: 'D.M.',
                	hour: 'D.M. H:mm'
                },
                tooltipFormat: 'D.M.YY H:mm [Uhr]'
              },
              ticks: {
              	maxRotation: 45
              }
            }],
            yAxes: [{
              type: 'linear',
              ticks: {
                stepSize: 10,
                min: 0,
                max: 100
              }
            }]
          }
        }
      });
    }

  } else {
    //console.log("Update Chart!");
    if (room == "maschinenraum") {
      tmpChartMaschinenraum.data.datasets[0].data = tdata;
      humChartMaschinenraum.data.datasets[0].data = hdata;
    } else if (room == "bruecke") {
      tmpChartBruecke.data.datasets[0].data = tdata;
      humChartBruecke.data.datasets[0].data = hdata;
    }
  }
}