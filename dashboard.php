<!DOCTYPE html>
<html lang="de">

  <head>
    <title>vspace.one - Dashboard - Hackerspace, Makerspace und Chaostreff für Villingen-Schwenningen und Umgebung</title>
    <meta name="description" content="Das Klima im vspace.one">
    <?php
    //Including Standard Head 
    include('includes/stdhead.php'); 
    ?>
  </head>

  <body>

    <?php
    //Including navigation 
    include('includes/nav.php');
    ?>

    <div class="container-fluid text-center label-warning" id="state">
      <h1 style="margin-bottom: 2px">Raumstatus</h1>
      <h3 style="margin-top:2px" id="stateText">Loading</h3>
      <h4 class="margin"><a href="http://spaceapi-stats.n39.eu/#vspaceone">Statistiken</a></h3>
      <div class="row">
        <div class="col-sm-6">
          <h3>Brücke</h3>
          <div style="width:100%; margin-bottom:50px;" class="col-sm-6" id="Bruecke">
          </div>
          <div>
            <canvas id="tmpChartBruecke"></canvas>
            <canvas id="humChartBruecke"></canvas>
          </div>
        </div>
        <div class="col-sm-6">
          <h3>Maschinenraum</h3>
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

    <script src="scripts/external/jquery/jquery-3.1.1.min.js"></script>
    <script src="scripts/external/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="scripts/external/chart.js/Chart.bundle.min.js"></script>
    <script src="scripts/internal/app.js"></script>
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
