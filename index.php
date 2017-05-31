<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Wereldspecerijen</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">
<style>
    html{
        height:  120%;
        overflow-x: hidden;
        background-image: url("afrika back.jpg");
    }
    #kaart{
        margin-left: 20%;
        margin-bottom: 5%;
        margin-top: 2%;
    }
    .text-center {
        font-family: Century;
    }

    .afrika{
        height: 250px;
        width: 200px;

        position: absolute;
        margin-left: 750px;
        top: 550px;
    }
    .azie{
        height: 355px;
        width: 400px;

        position: absolute;
        margin-left: 950px;
        top: 350px;
    }
    .europa{
        height: 200px;
        width: 140px;

        position: absolute;
        margin-left: 750px;
        top: 350px;
    }
    .zuid-amerika{
        height: 250px;
        width: 150px;

        position: absolute;
        margin-left: 560px;
        top: 620px;
    }

</style>
</head>
<body>
<div class="container-fullwidth">
        <div class="jumbotron" style="background: url(banner.jpg);background-size: 100%; background-repeat: no-repeat; height: 215px" >


        </div>

    </div>



<div id="wereldkaart">
    <h1 class="text-center">Zoek specerijen vanuit de hele wereld </h1>
    <p class="text-center">Klik op een continent om te winkelen!</p>
    <img id="kaart" src="continenten.png" class="img-responsive" alt="Wereldkaart" height="516" width="960">

    <a href="afrika.php">
        <div class="afrika"></div>

    </a>
    <a href="azie.php">
        <div class="azie"></div>
    </a>
    <a href="europa.php">
        <div class="europa"></div>
    </a>
    <a href="zuid amerika.php">
        <div class="zuid-amerika"></div>
    </a>

</div>



<hr>

<div class="container">
    <div class="row">
        <div class="col-xs-3">
            <ul class="list-unstyled">
                <li>Pagina's<li>
                <li><a href="over-ons.php">Over ons</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>
        <div class="col-xs-3">
            <ul class="list-unstyled">
                <li>Continenten<li>
                <li><a href="azie.php">Aziatische kruiden</a></li>
                <li><a href="europa.php">Europese kruiden</a></li>
                <li><a href="afrika.php">Afrikaanse kruiden</a></li>
                <li><a href="zuid amerika.php">Zuid-Amerikaanse kruiden</a></li>
            </ul>
        </div>
        <div class="col-xs-3">
            <ul class="list-unstyled">
                <li>Social media<li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">LinkedIn</a></li>
            </ul>
        </div>
        <div class="col-xs-3">
            <ul class="list-unstyled">
                <li>Kruiden<li>
                <li><a href="#">"specerij1"</a></li>
                <li><a href="#">"specerij2"</a></li>
                <li><a href="#">"specerij3"</a></li>
                <li><a href="#">"specerij4"</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-8">
            <ul class="list-unstyled list-inline pull-left">
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
        <div class="col-xs-4">
            <p class="text-muted pull-right">© 2017 Wereldspecerijen. Alle rechten voorbehouden</p>
        </div>
    </div>
</div>

</body>
</html>




<!-- Dit is een responsive banner met afbeelding
<div class="container-fullwidth">
    <div class="jumbotron" style="background: url(images/bannerwereldspecerijen.jpg);background-size: 100%; background-repeat: no-repeat; height: 215px" >



    </div>

</div>
-->