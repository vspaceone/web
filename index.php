<!DOCTYPE html>
<html lang="de">

<head>
    <title>vspace.one - Hackerspace, Makerspace und Chaostreff für Villingen-Schwenningen und Umgebung</title>
    <meta name="description" content="Der Makerspace und Hackerspace für Villingen-Schwenningen und Umgebung. Basteln, hacken und Wissen austauschen.">
    <?php
    //Including Standard Head
    include('includes/stdhead.php');
    ?>
</head>

<body>
        <!-- Scripts -->
    <script type="text/javascript" src="scripts/external/jquery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="scripts/external/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/external/particle-network.min.js"></script>
    <script type="text/javascript" src="scripts/internal/app.js"></script>

    <?php
    //Including navigation
    include('includes/nav.php');
    ?>


    <?php
    //Including the required page
    $page = isset($_GET['page']) ? $_GET['page'] : 'main';
    switch ($page) {
        case "main": include("includes/main.php"); break;
        case "impressum": include("includes/impressum.php"); break;
        case "mitgliedwerden": include("includes/mitgliedwerden.php"); break;
        case "press": include("includes/press.php"); break;
        case "downloads": include("includes/downloads.php"); break;
        case "dashboard": include("includes/dashboard.php"); break;
        case "datenschutzerklaerung": include("includes/datenschutzerklaerung.php"); break;
        default: include("includes/main.php");
    }
    ?>

    <?php
    //Including footer
    include('includes/foot.php');
    ?>

</body>

</html>
