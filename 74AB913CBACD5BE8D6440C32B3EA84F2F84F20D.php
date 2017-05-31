<!DOCTYPE html>
<html>
<head>
    <meta name="text/html">
    <meta name="CONTENT">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        html{
            background-image: url("afrika back.jpg");



    </style>
</head>
<div class="container-fullwidth">
    <div class="jumbotron" style="background: url(banner.jpg);background-size: 100%; background-repeat: no-repeat; height: 215px" >
    </div>
</div>


<style>
        body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }
    </style>
<body>
<h3>Kruiden</h3>
<?php
echo "<table class='table table-hover' style='border: solid 3px black;'>";
echo "<tr><th>id</th><th>naam</th><th>beschrijving</th><th>image</th><th>prijs</th><th>continent</th><th>edit</th></tr>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kruiden";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, naam, beschrijving, image, prijs, continent FROM producten");
    $stmt->execute();


    $results = $stmt->fetchAll();
    foreach ($results as $result){
        echo "<tr>";
        echo "<td>" . $result['id'] . "</td>";
        echo "<td>" . $result['naam'] . "</td>";
        echo "<td>" . $result['beschrijving'] . "</td>";
        echo "<td>" . $result['image'] . "</td>";
        echo "<td>" . $result['prijs'] . "</td>";
        echo "<td>" . $result['continent'] . "</td>";
        echo "<td><a href='D86E8B3289ACF7042AE4176BC10F777CEB771E6B.php?id=". $result['id'] ."'><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></a></td>";
        echo "</tr>";

    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

</body>
</html>

