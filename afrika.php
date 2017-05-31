<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Afrikaanse kruiden</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">

    <style>
        body{
            background-image: url("afrika back.jpg");
        }
        .box{
            float: left;
            margin-left: 100px;
            margin-top: 20px;
        }
        table{
            float: left;
            margin-left: 20px;
            margin-top: 20px;
        }
        .panel-default{
            width: 1360px;

        }
        p{
            font-family: 'Bubbler One', sans-serif;
        }
    </style>

</head>
<body>
<div class="container-fullwidth">
    <div class="jumbotron" style="background: url(banner.jpg);background-size: 100%; background-repeat: no-repeat; height: 215px" >


    </div>

<div class="box">
    <div class="panel panel-default">
        <div class="panel-body">
            <?php

            $servername = "localhost";
            $username = "root";
            $password = null;
            $dbname = "kruiden";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM producten WHERE continent = 4");
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                $producten = $stmt->fetchAll();

                foreach ($producten as $key => $value) {
                    ?>


                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <img src="<?php echo $value['image']; ?>" alt="<?php echo $value['beschrijving']; ?>" style="width:304px;height:228px;">
                            </td>
                        </tr><tr>
                            <td>
                                <?php echo $value['naam']; ?>
                            </td>
                        </tr><tr>
                            <td>
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;<?php echo $value['beschrijving']; ?>
                            </td>
                        </tr><tr>
                            <td>

                                <a onclick="window.location.href='winkelwagen.php?id=<?php echo $value['id']; ?>'"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp&nbsp;€<?php echo $value['prijs']; ?><br></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <?php
                }

            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            ?>
        </div>
    </div>
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
                    <li><a href="zuid%20amerika.php">Zuid-Amerikaanse kruiden</a></li>
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