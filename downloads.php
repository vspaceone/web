<!DOCTYPE html>
<html lang="de">

  <head>
    <title>vspace.one - Downloads - Hackerspace, Makerspace und Chaostreff für Villignen-Schwenningen und Umgebung</title>
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

    <div class="container-fluid bg-2 text-center label-warning" id="downloads">
      <h1 style="margin-bottom: 10px">Downloads</h1>
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

    <script type="text/javascript" src="scripts/external/jquery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="scripts/external/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/internal/app.js"></script>
    <script>
        $(document).ready(function() {
            window.setInterval(updateDoorstate, 10000);
            updateDoorstate();
        });
    </script>

  </body>

</html>
