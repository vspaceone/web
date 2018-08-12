<!DOCTYPE html>
<html lang="de">

<head>
    <title>vspace.one - Mitglied werden - Hackerspace, Makerspace und Chaostreff für Villingen-Schwenningen und Umgebung</title>
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

    <div class="container-fluid bg-3 text-center label-warning" id="getamember">
        <h1 style="margin-bottom: 10px">Mitglied werden</h1>
        <div class="row">
            <div style="text-align:left;" class="col-sm-3"></div>
            <div style="text-align:left;" class="col-sm-6">
                Lade dir unter <a href="downloads.php">Downloads</a> die Beitrittserklärung herunter, bring sie mit in den Space und drücke sie einem der Vorstände in die Hände. Dafür eignet sich beispielsweise das zweiwöchig stattfindende Plenum
                am Dienstagabend. Alternativ schicke sie an folgende Adresse:<br><br> vspace.one e.V <br> Wilhelm-Binder-Str. 19 <br> 78048 Villingen
            </div>
            <div style="text-align:left;" class="col-sm-3"></div>
        </div>

    </div>

    <?php
    //Including footer 
    include('includes/foot.php'); 
    ?>

    <script src="scripts/external/jquery/jquery-3.1.1.min.js"></script>
    <script src="scripts/external/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="scripts/internal/app.js"></script>
    <script>
        $(document).ready(function() {
            window.setInterval(updateDoorstate, 10000);
            updateDoorstate();
        });
    </script>

</body>

</html>
