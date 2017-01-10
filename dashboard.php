<!--TODO
  Bilder verkleinern
  einlesen
  Resourcen ans Ende ?
  icon ändern
  Räume auf wiki seiten verlinken + Bilder
  coole Netzinteraktion einfügen siehe http://www.crit-research.it/
-->

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>vspace.one</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="scripts/external/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="scripts/external/jquery/jquery-3.1.1.min.js"></script>
    <script src="scripts/external/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="scripts/external/chart.js/Chart.bundle.min.js"></script>
    <script src="scripts/internal/app.js"></script>
  </head>

  <body>

    <?php
    //Including navigation 
    include('includes/nav.php');
    ?>

    <div class="container-fluid text-center label-warning" id="state">
      <h3 style="margin-bottom: 2px">Raumstatus</h3>
      <h4 style="margin-top:2px" id="stateText">Loading</h4>
      <h5 class="margin"><a href="http://spaceapi-stats.n39.eu/#vspaceone">Statistiken</a></h5>
      <div class="row">
        <div class="col-sm-6">
          <h4>Brücke</h4>
          <div style="width:100%; margin-bottom:50px;" class="col-sm-6" id="Bruecke">
          </div>
          <div>
            <canvas id="tmpChartBruecke"></canvas>
            <canvas id="humChartBruecke"></canvas>
          </div>
        </div>
        <div class="col-sm-6">
          <h4>Maschinenraum</h4>
          <div style="width:100%; margin-bottom:50px;" class="col-sm-6" id="Maschinenraum">
          </div>
          <div>
            <canvas id="tmpChartMaschinenraum"></canvas>
            <canvas id="humChartMaschinenraum"></canvas>
          </div>
        </div>
      </div>
    </div>


    <?php
    //Including footer 
    include('includes/foot.php'); 
    ?>

    <script>
      $(document).ready(function() {
        window.setInterval(updateDoorstate, 10000);
        window.setInterval(updateState, 10000);
        window.setInterval(updateTemperature, 10000);
        updateDoorstate();
        updateState();
        updateTemperature();
        updateCharts();
      });
    </script>

  </body>

</html>
