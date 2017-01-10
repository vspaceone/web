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

    <div class="container-fluid bg-3 text-center label-warning" id="getamember">
        <h3 style="margin-bottom: 10px">Mitglied werden</h3>
        <div class="row">
            <div style="text-align:left;" class="col-sm-3"></div>
            <div style="text-align:left;" class="col-sm-6">
                Lade dir unter <a href="downloads.html">Downloads</a> die Beitrittserklärung herunter, bring sie mit in den Space und drücke sie einem der Vorstände in die Hände. Dafür eignet sich beispielsweise das zweiwöchig stattfindende Plenum
                am Dienstagabend. Alternativ schicke sie an folgende Adresse:<br><br> vspace.one e.V <br> Ludwig-Weißer-Str. 3 <br> 78112 St. Georgen
            </div>
            <div style="text-align:left;" class="col-sm-3"></div>
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
        });
    </script>

</body>

</html>