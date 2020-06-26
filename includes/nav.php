<!-- Navbar -->
<style>
.doorstatelabel {
  min-width: 110px !important;
  display: inline-block !important
}
</style>

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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=main#Mitmachen">Mitmachen</a></li>
                        <li><a href="?page=main#Ausstattung">Ausstattung</a></li>
                        <li><a href="?page=main#Ort">Ort</a></li>
                        <li><a href="?page=main#Events">Events</a></li>
                    </ul>
                </li>

                <li><a href="?page=faq">F&A</a></li>
                <li><a href="?page=mitgliedwerden">Mitglied werden</a></li>
                
                <li><a href="https://wiki.vspace.one">Wiki</a></li>
                <li><a class="faw-link" href="https://t.me/joinchat/DmNdswpnKgox_zzqENYXiA"><i class="fab fa-telegram"></i></a></li>                
                <li><a class="faw-link" href="https://join.slack.com/t/vspaceone/shared_invite/enQtNDgzOTU2ODI4MTE4LTc1NTI5YjZjYjA0ZDU5N2UxOThiZTljYmY1ZGY1ZmRlMDM0MmYyMGNlZDA1NDk2YTAxODMxYWEzOWM5NWU5OGE"><i class="fab fa-slack"></i></a></li>
                <li><a class="faw-link" href="https://twitter.com/vspaceone"><i class="fab fa-twitter"></i></a></li>
                <li>
                    <div id="doorstate" class="label label-success invisible doorstatelabel"><a href="#state" id="doorstateString">loading</a></div>
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
