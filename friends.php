<!DOCTYPE html>
<html lang="de">

  <head>
    <title>vspace.one - Freunde &amp; Links - Hackerspace, Makerspace und Chaostreff für Villignen-Schwenningen und Umgebung</title>
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

    <div class="container-fluid bg-3 text-center">
      <h1>Friends &amp; Links</h1>
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <ul class="text-left">
            <li><a href="http://www.lug-vs.org/lugvswiki/index.php/Hauptseite">Linux User Group VS</a></li>
            <li><a href="https://freiburg.freifunk.net/">Freifunk Freiburg</a></li>
            <li><a href="http://www.darc.de/der-club/distrikte/a/ortsverbaende/14">DARC</a></li>
            <li><a href="http://www.offene-werkstaetten.org/">Verbund Offener Werkstätten e.V.</a></li>
          </ul>
        </div>
        <div class="col-sm-3"></div>
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
