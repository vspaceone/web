var tmpChartMaschinenraum;
var tmpChartBruecke;
var humChartMaschinenraum;
var humChartBruecke;

var SPACEAPIURL = "https://vspace.one/spaceapi.json"

function updateDoorstate() {

    console.log("Updating doorstate!");
    $.getJSON(SPACEAPIURL)
        .done(function(data, textStatus) {
            $("#doorstate").removeClass('invisible');
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
        .fail(function(data, textStatus) {
            $("#doorstate").removeClass('invisible');
            $("#doorstate").addClass("label-danger");
            $("#doorstate").removeClass("label-success");
            $("#doorstate").text("error");
        });
}

function updateState() {
    //console.log("Updating state!");
    $.getJSON(SPACEAPIURL)
        .done(function(data, textStatus) {

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
        .fail(function(data, textStatus) {
            $("#state").removeClass("label-warning");
            $("#state").removeClass("label-success");
            $("#state").addClass("label-danger");

            $("#stateText").html("<em>Error</em>")
        });
}

function updateTemperature() {
    console.log("Updating charts!");
    $.getJSON(SPACEAPIURL)
        .done(function(data, textStatus) {
            var receivedMaschinenraum = 0;
            var receivedBruecke = 0;
            for (var i = 0, len = 1; i <= len; i++) {

                if (typeof data.sensors.humidity[i] === 'undefined') {
                    break;
                }
                if (data.sensors.humidity[i].location === "Maschinenraum") {
                    console.log("M");
                    $("#Maschinenraum").html("<em>" + data.sensors.temperature[i].value + data.sensors.temperature[i].unit + "<br>" +
                        data.sensors.humidity[i].value + data.sensors.humidity[i].unit + "</em>");
                    receivedMaschinenraum = 1;
                } else if (data.sensors.humidity[i].location === "Brücke") {
                    console.log("B");
                    $("#Bruecke").html("<em>" + data.sensors.temperature[i].value + data.sensors.temperature[i].unit + "<br>" +
                        data.sensors.humidity[i].value + data.sensors.humidity[i].unit + "</em>");
                    receivedBruecke = 1;
                }
            }
            if (receivedMaschinenraum == 0) {
                $("#Maschinenraum").html("<em>N/A <br> N/A</em>");
            }

            if (receivedBruecke == 0) {
                $("#Bruecke").html("<em>N/A <br> N/A</em>");
            }
        })
        .fail(function(data, textStatus) {
            $("#Maschinenraum").html("<em>N/A <br> N/A</em>");
            $("#Bruecke").html("<em>N/A <br> N/A</em>");
        });
}

function updateCharts() {
    // Removed with app.php
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
                    datasets: [{
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
                    datasets: [{
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
