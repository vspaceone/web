<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">vspace.one</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="?page=main#Mitmachen">Mitmachen</a></li>
                <li><a href="?page=main#Ausstattung">Ausstattung</a></li>
                <li><a href="?page=main#Ort">Ort</a></li>
                <li><a href="?page=main#Events">Events</a></li>
                <li><a href="https://wiki.vspace.one">Wiki</a></li>
                <li><a class="faw-link" href="https://t.me/joinchat/DmNdswpnKgoa2KIPjZfxZA"><i class="fab fa-telegram"></i></a></li>
                <li>
                    <div id="doorstate" class="label label-success"><a href="#state" id="doorstateString">loading</a></div>
                </li>
            </ul>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            window.setInterval(updateDoorstate, 10000);
            updateDoorstate();
        });
    </script>
</nav>
