<!DOCTYPE html>
<html lang="de">

<head>
    <title>vspace.one - Hackerspace, Makerspace und Chaostreff für Villignen-Schwenningen und Umgebung</title>
    <meta name="description" content="Der Makerspace und Hackerspace für Villingen-Schwenningen und Umgebung. Basteln, hacken und Wissen austauschen.">
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

    <!-- First Container -->
    <div class="container-fluid bg-1 text-center" style="position:relative;padding:0;">
        <div id="particles"></div>
        <div id="particles-overlay">
            <h1 class="margin">Was ist der vspace.one?</h1>
            <img src="pic/logo_vspaceone.svg" class="img-responsive img-circle margin" style="display:inline;" alt="Bird" width="350" height="350">
            <h1>Ein <i><a href="https://de.wikipedia.org/wiki/FabLab" style="color: #ffffff">Makerspace</a></i> und <i><a href="https://de.wikipedia.org/wiki/Hackerspace" style="color: #ffffff">Hackerspace</a></i>.</h1>
        </div>
    </div>

    <!-- Second Container -->
    <div class="container-fluid bg-2 text-center" id="Mitmachen">
        <h2 class="margin">Mitmachen</h2>
        <p>Bei uns kann jeder und jede mitmachen. Interessierte Schüler, Studenten und Erwachsene, die sich für kreativen Umgang mit Technik interessieren.</p>
        <p>Trag dich einfach in unsere <a href="https://lists.vspace.one/postorius/lists/public.lists.vspace.one/">Mailingliste</a> ein und bleib up-to-date.</p>
    </div>

    <!-- Third Container (Grid) -->
    <div class="container-fluid bg-3 text-center" id="Ausstattung">
        <h2 class="margin">Ausstattung</h2><br>
        <div class="row">
            <div class="col-sm-4">
                <p>Für unsere Verbindung und Vernetzung in aller Welt sorgt ein Router mit Internetzugang. Für Gäste betreiben wir einen <a href=https://freifunk.net/>Freifunk Zugangspunkt</a>.</p>
            </div>
            <div class="col-sm-4">
                <p>Für die Umsetzung cooler Projekte haben wir eine Vielzahl an Werkzeugen und Maschinen (z.B. einen 3D-Drucker). Eine aktuelle Liste gibt es im <a href="https://wiki.vspace.one">Wiki</a>.</p>
            </div>
            <div class="col-sm-4">
                <p>Wir haben zwei moderne Räume. In der Brücke stehen bequeme Sofas, ein Beamer und ein Kühlschrank. Im Maschinenraum, kann an Projekten gearbeitet werden.</p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="pic/vspaceone_ausstattung_1.jpg" class="img-responsive margin" style="width:100%" alt="Maschinenraum">
                </div>
                <div class="col-sm-4">
                    <img src="pic/vspaceone_ausstattung_2.jpg" class="img-responsive margin" style="width:100%" alt="vspace.one Logo">
                </div>
                <div class="col-sm-4">
                    <img src="pic/vspaceone_ausstattung_3.jpg" class="img-responsive margin" style="width:100%" alt="Brücke">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="pic/vspaceone_ausstattung_4.jpg" class="img-responsive margin" style="width:100%" alt="Make things awesome Logo">
                </div>
                <div class="col-sm-4">
                    <img src="pic/vspaceone_ausstattung_5.jpg" class="img-responsive margin" style="width:100%" alt="Arbeitsplatz">
                </div>
                <div class="col-sm-4">
                    <img src="pic/vspaceone_ausstattung_6.jpg" class="img-responsive margin" style="width:100%" alt="Lager und Projektboxen">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-2 text-center">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h2 class="margin" id="Events">Events</h2>
                <p>Grundsätzlich treffen wir uns jeden Dienstag Abend ab ca. 19:00 Uhr in der Wilhelm-Binder-Str 19, Villingen. Jeder ist herzlich eingeladen vorbei zu schauen.</p>
                <br>
                <br>

            </div>
        </div>
    </div>

    <div class="container-fluid text-center label-warning" id="state">
        <h2 style="margin-bottom: 2px">Raumstatus</h2>
        <br/>
        <!-- <h3 style="margin-top:2px" id="stateText">Loading</h3> -->
        <h3 style="margin-top:2px" id="stateText">Defect</h3>
    </div>

    <div class="container-fluid bg-2 text-center">
        <h2 class="margin" id="Ort">Wo findest du uns?</h2>
        <p>Du findest uns in der Doppelstadt Villingen-Schwenningen.</p>
        <p>Unsere Andresse lautet:<br> Wilhelm-Binder-Str. 19<br> 78048 Villingen</p><br>
        <p></p>
        <p>Wenn der vspace.one offen ist kannst du uns auch anrufen.</p>
        <p>Telefon Rundruf: 0221 596196638</p>
        <p><i>Telefon Brücke: 0221 596196639</i></p>
        <p><i>Telefon Maschinenraum: 0221 596196640</i></p>
        <iframe id="map-big" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=8.453952670097351%2C48.06383033098609%2C8.458941578865051%2C48.066199996379204&amp;layer=mapnik&amp;marker=48.06501338483433%2C8.456447124481201"
            style="border: 1px solid black"></iframe>

        <iframe id="map-medium" width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=8.453952670097351%2C48.06383033098609%2C8.458941578865051%2C48.066199996379204&amp;layer=mapnik&amp;marker=48.06501338483433%2C8.456447124481201"
            style="border: 1px solid black"></iframe>

        <br/>
        <small>
        <a href="http://www.openstreetmap.org/?mlat=48.06501&amp;mlon=8.45645#map=18/48.06502/8.45645" style="color: #ffffff"><i>Große Karte anzeigen</i></a>
      </small>
        <!--<span class="glyphicon glyphicon-search"></span> Search -->

    </div>

    <?php
    //Including footer
    include('includes/foot.php');
    ?>

    <!-- Scripts -->
    <script type="text/javascript" src="scripts/external/jquery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="scripts/external/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/external/particle-network.min.js"></script>
    <script type="text/javascript" src="scripts/internal/app.js"></script>
    <script>
        $(document).ready(function() {
            window.setInterval(updateDoorstate, 10000);
            <!-- window.setInterval(updateState, 10000); -->
            window.setInterval(updateTemperature, 10000);
            updateDoorstate();
            updateState();
            updateTemperature();
        });
    </script>
    <script type="text/javascript">
        var canvasDiv = document.getElementById('particles');
        var options = {
            particleColor: '#0ac26c',
            background: '#08A059',
            interactive: false,
            speed: 'slow',
            density: 'high'
        };
        var particleCanvas = new ParticleNetwork(canvasDiv, options);
    </script>

</body>

</html>
