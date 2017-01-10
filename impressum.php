<!--
  TODO
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
    <script src="scripts/external/chart.js/Chart.bundle.min.js"></script>
    <script src="scripts/external/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="scripts/internal/app.js"></script>
</head>

<body>

    <?php
    //Including navigation 
    include('includes/nav.php');
    ?>

    <div class="container-fluid bg-1 text-center">
        <h1>Impressum</h1>
        <h2>Angaben gemäß § 5 TMG:</h2>
        <p>vspace.one e.V.<br /> Ludwig-Weißer-Str. 3<br /> 78112 St. Georgen
        </p>
        <h2>Vertreten durch:</h2>
        <p>Alexander Votteler<br /> Nils Krause<br /> Max Noppel<br /> Michael Castano</p>
        <h2>Kontakt:</h2>
        <p>
            <!--Telefon:</br>-->
            E-Mail: ud@nilskrause.de
        </p>
        <h2>Registereintrag:</h2>
        <p>Eintragung im Vereinsregister. <br />Registergericht: Amtsgericht Villingen-Schwenningen <br />Registernummer: VR 701636</p>
        <p> </p>
        <p>Steuernummer: 22102/71153</p>
        <p> </p>
        <p>Quelle: <em><a href="https://www.e-recht24.de" style="color: #ffffff">eRecht24</a></em></p>
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