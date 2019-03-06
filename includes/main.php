

<!-- First Container -->
<div class="container-fluid bg-1 text-center" style="position:relative;padding:0;">
  <div id="particles"></div>
  <div id="particles-overlay">
    <h1 class="margin">Was ist der vspace.one?</h1>
    <img src="pic/logo_vspaceone.svg" class="img-responsive img-circle margin" style="display:inline;" alt="Bird" width="350" height="350">
    <h1>Ein <i><a href="https://de.wikipedia.org/wiki/FabLab" style="color: #ffffff">Makerspace</a></i> und <i><a href="https://de.wikipedia.org/wiki/Hackerspace" style="color: #ffffff">Hackerspace</a></i>.</h1>
  </div>
</div>

<div class="container-fluid bg-3 text-left">
  <h2 class="margin">Was wir machen</h2>
  <p>
    Unser Ziel ist der Wissensaustausch sowie die Bildung aller interessierten
    in den Bereichen neuartiger computergestützter Technologien (wie zum Beispiel aber nicht ausschließlich
    3D-­Druck, CNC, Internet der Dinge und Robotik), der Elektrotechnik und Elektronik
    sowie auf dem Gebiet der Reparatur und Wartung.
    Natürlich aber auch ganz im Sinne aller anderen Hacker- und Makerspaces das bieten einer Plattform,
    um seinen Interessen in diesen Gebieten nachzugehen.
  </p>
  <br><br>
  <p class="text-center"><a href="?page=faq">Mehr Fragen zu uns und was wir machen beantworten wir hier!</a></p>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-left" id="Mitmachen">
  <h2 class="margin">Mitmachen</h2>
  <p>
    Bei uns kann jeder und jede mitmachen. Interessierte Schüler, Studenten und Erwachsene, die sich für kreativen Umgang mit Technik interessieren.
    Wenn euch gefällt was wir tun und ihr uns unterstützen wollt findet ihr Beitrittsformular <a href="?page=mitgliedwerden">hier</a>.
  </p>
  <br>
  <p class="text-center">
    Trag dich einfach in unsere <a href="https://lists.vspace.one/postorius/lists/public.lists.vspace.one/">Mailingliste</a> ein und bleib up-to-date.
    <br><br>
    Oder tritt unserer Telegram Gruppe bei: <a href="https://t.me/joinchat/DmNdswpnKgox_zzqENYXiA">Join</a>
  </p>
  <p>Wir treffen uns jeden Dienstag ab 19:00 Uhr im 'Space'. Schau doch einfach mal vorbei oder schreib uns auf der Mailingliste!<p>
  </div>

  <!-- Third Container (Grid) -->
  <div class="container-fluid no-side-padding bg-3 text-center" id="Ausstattung">
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

  <div class="container-fluid bg-2 text-center no-side-padding"  id="Events">
    <div class="row">
      <div class="col">
        <h2 class="margin">Events</h2>
        <div id="events">
        <span class="event">
          <span class="event_details">
            <span class="event_title">Chaostreff</span>
            <span class="event_time">11:00 Uhr bis 12:00 Uhr</span>
            <span class="event_icons">
            <span class="glyphicon-plus glyphicon"></span>
            <span class="glyphicon-pencil glyphicon"></span>
          </span>
            <span class="event_desc">
              <p>Grundsätzlich treffen wir uns jeden Dienstag Abend ab ca. 19:00 Uhr in der Wilhelm-Binder-Str 19, Villingen. Jeder ist herzlich eingeladen vorbei zu schauen.</p>
            </span>
          </span>
          <span class="event_date align-middle">
            <span class="event_day text-center">22</span>
            <span class="event_month text-center">Dezember</span>
          </span>
        </span>
      </div>

      </div>
    </div>
  </div>

  <script>
  var months = [
    "Jan",
    "Feb",
    "März",
    "Apr",
    "Mai",
    "Jun",
    "Jul",
    "Aug",
    "Sept",
    "Okt",
    "Nov",
    "Dez"
  ];
  Number.prototype.pad = function(size) {
    var s = String(this);
    while (s.length < (size || 2)) {s = "0" + s;}
    return s;
  }


    $.getJSON("events.json",function(data){
      $.each(data, function(i){
        console.log(i)
        d = new Date(data[i].start);
        if(data[i].end){
          dend = new Date(data[i].end);
          tstr = d.getHours().pad(2) + ":" + d.getMinutes().pad(2) + " bis " + dend.getHours().pad(2) + ":" + dend.getMinutes().pad(2);
        }else{
          tstr = d.getHours().pad(2) + ":" + d.getMinutes().pad(2);
        }
        day = d.getDate()
        month = months[d.getMonth()]

        $("#events").append(`
          <span class="event">
            <span class="event_details">
              <span class="event_title">`+data[i].title+`</span>
              <span class="event_time">`+tstr+`</span>
              <span class="event_icons">
              <span class="glyphicon-plus glyphicon"></span>
              <span class="glyphicon-pencil glyphicon"></span>
            </span>
              <span class="event_desc">
                <p>`+data[i].desc+`</p>
              </span>
            </span>
            <span class="event_date align-middle">
              <span class="event_day text-center">`+day+`</span>
              <span class="event_month text-center">`+month+`</span>
            </span>
          </span>
        `);
      });
    });
  </script>

  <div class="container-fluid text-center label-warning" id="state">
    <h2 style="margin-bottom: 2px">Raumstatus</h2>
    <br/>
    <!-- <h3 style="margin-top:2px" id="stateText">Loading</h3> -->
    <h3 style="margin-top:2px" id="stateText">Defect</h3>
  </div>

<div class="container-fluid bg-2 text-center" id="Ort">
    <h2 class="margin">Wo findest du uns?</h2>
    <p>Du findest uns in der Doppelstadt Villingen-Schwenningen.</p>
    <p>Unsere Andresse lautet:<br> Wilhelm-Binder-Str. 19<br> 78048 Villingen</p><br>
    <p></p>
    <p>Wenn der vspace.one offen ist kannst du uns auch anrufen.</p>
    <p>Telefon: <a href="tel:+4977219463980">07721-9463980</a></p>
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
