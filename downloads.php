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
    <script src="scripts/external/jquery-3.1.1.min.js"></script>
    <script src="scripts/external/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="scripts/internal/app.js"></script>
  </head>

  <body>

    <?php
    //Including navigation 
    include('includes/nav.php');
    ?>

    <div class="container-fluid bg-2 text-center label-warning" id="downloads">
      <h3 style="margin-bottom: 10px">Downloads</h3>
      <div class="row">
        <div style="text-align:left;" class="col-sm-3"></div>
        <div style="text-align:left;" class="col-sm-6">
          <ul>
            <li><a style="color: #ffffff" href="download/satzung_v1.0.pdf">Satzung</a></li>
            <li><a style="color: #ffffff" href="download/beitragsordnung_v1.1.pdf">Beitragsordnung</a></li>
            <li><a style="color: #ffffff" href="download/beitrittserklaerung_v1.2.pdf">Beitrittserklaerung</a></li>
            <li><a style="color: #ffffff" href="download/beitrittserklaerung_interactive_v1.2.pdf">Beitrittserklaerung (interaktives pdf)</a></li>
          </ul>
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
        updateDoorstate();
      });
    </script>

  </body>

</html>
