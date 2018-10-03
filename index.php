<!DOCTYPE html>
<html lang="de">

<head>
    <title>vspace.one - Hackerspace, Makerspace und Chaostreff für Villingen-Schwenningen und Umgebung</title>
    <meta name="description" content="Der Makerspace und Hackerspace für Villingen-Schwenningen und Umgebung. Basteln, hacken und Wissen austauschen.">
    <?php
    //Including Standard Head
    include('includes/stdhead.php');
    ?>


		<!-- Matomo -->
		<script type="text/javascript">
  		var _paq = _paq || [];
  		/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  		_paq.push(['trackPageView']);
  		_paq.push(['enableLinkTracking']);
  		(function() {
    		var u="//noppelmax.online/piwik/";
    		_paq.push(['setTrackerUrl', u+'piwik.php']);
    		_paq.push(['setSiteId', '2']);
    		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  		})();
		</script>
		<!-- End Matomo Code -->


		<noscript>
			<!-- Matomo Image Tracker-->
			<img src="https://noppelmax.online/piwik/piwik.php?idsite=1&amp;rec=1" style="border:0" alt="" />
			<!-- End Matomo -->
		</noscript>
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
