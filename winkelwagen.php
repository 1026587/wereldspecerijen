<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Winkelwagen</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">

    <style>
        h1{
            margin-left: 650px;
        }
        button{
            margin-left: 650px;
            margin-top: 5px;
        }
        html{
            overflow: hidden;
        }
        p{
            margin-left: 650px;
        }
        input[type=image]{
            margin-left: 650px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<div class="container-fullwidth">
    <div class="jumbotron" style="background: url(banner.jpg);background-size: 100%; background-repeat: no-repeat; height: 215px" >


    </div>

</div>

<div class="box">
    <div class="panel panel-default">
        <div class="panel-body">
<?php

/**
 * Created by PhpStorm.
 * User: henry
 * Date: 10-4-17
 * Time: 13:59
 */
error_reporting(E_ALL ^ E_NOTICE);

$servername = "localhost";
$username = "root";
$password = null;
$dbname = "kruiden";

echo '<h1>Uw bestelling</h1>';

if ($_GET) {
    include_once('csessie.class.php');

    $sess = new csession();

    if (isset($_GET['reset'])) {
        $sess->destroySession();
    } else {

        $aantal = $sess->getSessionVar('aantal');
        if (isset($_GET['remove'])) {
            $aantal[$_GET['id']]--;
        }else{
            $aantal[$_GET['id']]++;
        }

        $sess->setSessionVar(['aantal', $aantal]);



        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM producten");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $totaal = 0;
        foreach ($stmt->fetchAll() as $k => $v) {
            if (isset($aantal[$v['id']])) {?>
                <?php
                echo '<p>'.$aantal[$v['id']] . ' x ' . $v['naam'] . ' van €' . $v['prijs'] . ' = €' . $aantal[$v['id']] * $v['prijs'] .'<br>';
                $totaal = $totaal + $aantal[$v['id']] * $v['prijs'].'</p>';
            }
        }
        if ($totaal > 0) {
            echo 'Totaal in winkelwagen = €' . $totaal . '<br>';
            echo '<a href="winkelwagen.php?reset=1" ><button class="btn btn-primary" type="button">Winkelwagen legen</button></a>';
        }
    }

}
?>


<button class="btn btn-primary" onclick="window.location.href='index.php'">Verder Winkelen</button>


            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

                <!-- Saved buttons use the "secure click" command -->
                <input type="hidden" name="cmd" value="_s-xclick">

                <!-- Saved buttons are identified by their button IDs -->
                <input type="hidden" name="hosted_button_id" value="221">

                <!-- Saved buttons display an appropriate button image. -->
                <input type="image" name="submit"
                       src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                       alt="PayPal - The safer, easier way to pay online">
                <img alt="" width="1" height="1"
                     src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

            </form>
        </div></div></div>






</body>
</html>